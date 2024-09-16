<?
require(__DIR__ . '/../../config/vars.global.php');
require(__DIR__ . '/../../config/debug.global.php');

// Local meta formatting
$includeFullSchema = false;
$includeShareSchema = true;
$includeBackToHomepage = true;
$articleMetaTitle = 'Thoughts, Ideas & Expressions. Simple Words from a Digital Product Designer & Manager';
$articleMetaPublishDate = date('now');
$articleMetaUpdateDate = $articleMetaPublishDate;
$articleMetaDesc = 'Writing about areas of interest and learnings from a Digital Product Designer. But may also cover development, outdoors, nature and adventures';
$articleMetaKeywords = 'digital product design blog, blog about digital product design field and processes, web tech blog and articles';
$articleMetaImage = $globalDomainRoot . 'dist/images/social/social-dripfed-design-sharing.jpg';
$articleMetaUrl = 'latest/';

require(__DIR__ . '/../../inc/header.article.php');
?>
<div class="<?= $globalPrefix; ?>-body-container">
    <section class="<?= $globalPrefix; ?>-blog-container _max-width__1280 _padding-top-bottom__xlarge">
        <div class="__title">
            <h1>Latest updates and design work</h1>
        </div>
        <section class="__listing">
            <ul class="<?= $globalPrefix; ?>-grid-container -column__third -column-gap__default -column-row__default">
                <?php
                //
                // ------------------------------------------------------------
                // ------------------------------------------------------------
                // ------------------------------------------------------------
                // ---------- OUTPUT ALL POSTS ----------
                // ----------
                // ----------
                //
                $jsonContentOutput = json_decode(file_get_contents(__DIR__ . '/../../data/contentful.blog.json'), true);
                foreach ($jsonContentOutput as $k => $v) {
                    echo '
                            <li>
                                <a href="/latest/' . $v['articleUrlSlug'] . '" data-cabin-event="Listing / Article" class="_hidden" title="' . $v['articleTitle'] . '">
                                    <img src="' . $v['articleHeroImage']['fields']['file']['url'] . '" alt="' . $v['articleHeroImage']['fields']['title'] . '" title="' . $v['articleHeroImage']['fields']['title'] . '" width="100%" height="auto" />
                                    <h2>' . $v['articleTitle'] . '</h2>
                                    <div class="__desc">' . $v['articleDescription'] . '</div>
                                    <div class="__datetag">
                                        <small class="__date">' . date('jS M Y', strtotime($v['articlePublishDate'])) . '</small>
                                        <ul class="__keywords">
                        ';
                    foreach ($v['articleKeywords'] as $kw) {
                        echo '<li>' . $kw . '</li>';
                    }
                    echo '
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        ';
                }
                ?>
            </ul>
        </section>
    </section>
</div>
<? require(__DIR__ . '/../../inc/footer.article.php'); ?>