<?
require(__DIR__ . '/../../config/vars.global.php');
require(__DIR__ . '/../../config/debug.global.php');
require(__DIR__ . '/../../config/funcs.global.php');
require_once(__DIR__ . '/../../vendor/autoload.php');

$options = (new Contentful\Core\File\ImageOptions())
    ->setProgressive(true);

$client = new \Contentful\Delivery\Client(
    $accessToken,
    $spaceId,
    $environmentId
);

try {
    $entry = $client->getEntry('nyancat');
} catch (\Contentful\Core\Exception\NotFoundException $exception) {
    // Entry does not exist
}

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- OUTPUT SELECTED ARTICLE ----------
// ----------
// ----------
//
$jsonContentOutput = json_decode(file_get_contents(__DIR__ . '/../../data/contentful.blog.json'), true);
$articleID = $_GET['title'];
// Output content
foreach ($jsonContentOutput as $k => $v) {
    if ($v['articleUrlSlug'] == $articleID) {
        $articleHeroImageUrl = $v['articleHeroImage']['fields']['file']['url'];
        $articleHeroImageTitle = $v['articleHeroImage']['fields']['title'];
        $articleTitle = $v['articleTitle'];
        $articleDescription = $v['articleDescription'];
        $articleKeywords = $v['articleKeywords'];
        $articlePublishDate = $v['articlePublishDate'];
        $articleUpdateDate = $v['articleUpdatedDate'];
        $articleBody = $v['articleBody'];

        // YOUTUBE - Search and build embed block
        $searchYoutube = '<p>[youtube-start:';
        $youtubePartA = '<iframe width="100%" height="400" src="https://www.youtube.com/embed/';
        $youtubePartB = '"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        if (str_contains($articleBody, $searchYoutube)) {
            $articleBody = str_replace("<p>[youtube-start:", $youtubePartA, "$articleBody");
            $articleBody = str_replace(":youtube-end]</p>", $youtubePartB, "$articleBody");
        }

        // INSTAGRAM - Search and build embed block
        $searchInsta = '<p>[instagram-start:';
        $instaPartA = '<div class="embed-container"><iframe width="700" height="600" src="https://instagram.com/p/';
        $instaPartB = '/embed/" frameborder="0" scrolling="no" allowtransparency="true"></iframe></div>';
        if (str_contains($articleBody, $searchInsta)) {
            $articleBody = str_replace("<p>[instagram-start:", $instaPartA, "$articleBody");
            $articleBody = str_replace(":instagram-end]</p>", $instaPartB, "$articleBody");
        }

        // IMAGES - Search and build embed block
        preg_match_all('/Asset#\w{18,24}/', $articleBody, $articleImageID);
        foreach ($articleImageID[0] as $imgId) {
            // Get image asset
            $assetID = preg_replace('/Asset#/', '', $imgId);
            $imgGet = $client->getAsset($assetID);
            $imgUrlSlug = $imgGet->getFile()->getUrl($options);
            $imgTitle = $imgGet->getFile()->getFileName();
            $imgTitle = formatImageTitle($imgTitle);
            // Output image asset
            $articleBody = str_replace($imgId, '<img class="__inline-image" src="https:' . $imgUrlSlug . '" title="' . $imgTitle . '" alt="' . $imgTitle . '" width="100%" height="auto" />', "$articleBody");
        }
    }
}

// Local meta formatting
$includeFullSchema = true;
$includeShareSchema = true;
$includeBackToHomepage = false;
$articleMetaTitle = $articleTitle;
$articleMetaPublishDate = $articlePublishDate;
$articleMetaUpdateDate = $articleUpdateDate;
$articleMetaDesc = str_replace('<p>', '', $articleDescription);
$articleMetaDesc = str_replace('</p>', '', $articleMetaDesc);
$articleMetaKeywords = $articleKeywords;
$articleMetaImage = $imgUrlSlug;
$articleMetaBody = cleanArticleBody($articleBody);
$articleMetaUrl = 'latest/' . $articleID;

// Load header
require(__DIR__ . '/../../inc/header.article.php');
?>

<div class="<?= $globalPrefix; ?>-body-container">
    <section class="<?= $globalPrefix; ?>-articles-container _max-width__1000 _padding-top-bottom__large">
        <article class="__article -latest">
            <div class="__title _max-width__800">
                <h1><?= $articleTitle; ?></h1>
            </div>
            <?php
            // Output content
            echo '
                <div class="__content _image-reverse">
            ';

            echo '
                    <div class="_article-desc _max-width__800">' . $articleDescription . '</div>
                    <img src="' . $articleHeroImageUrl . '" title="' . $articleHeroImageTitle . '" alt="' . $articleHeroImageTitle . '" width="100%" height="auto" />
                    <div class="_article-body _max-width__800">
                    ' . $articleBody . '
                    </div>
            ';

            if ($articleUpdateDate !== null) {
                echo '
                    <p class="_post-date _max-width__800">
                        Published on ' . date('jS M Y', strtotime($articlePublishDate)) . ' - 
                        <span>Updated on ' . date('jS M Y', strtotime($articlePublishDate)) . '</span>
                    </p>
                ';
            } else {
                echo '
                    <p class="_post-date _max-width__800">
                        Published on ' . date('jS M Y', strtotime($articlePublishDate)) . '
                    </p>
                ';
            }

            echo '<ul class="__keywords _max-width__800">';

            foreach ($articleKeywords as $kw) {
                echo '<li>' . $kw . '</li>';
            }

            echo '
                </ul>
            </div>
            ';
            ?>
        </article>
    </section>
</div>
<? include_once(__DIR__ . '/../../inc/footer.article.php'); ?>