<?
include_once(__DIR__ . '/../config/vars.global.php');
include_once(__DIR__ . '/../config/funcs.global.php');

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- GET CONTENTFUL JSON ----------
// ----------
// ----------
//
require_once(__DIR__ . '/../vendor/autoload.php');

$query = (new Contentful\Delivery\Query())
    ->setContentType('blogPost');

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

$entriesList = $client->getEntries($query);

// Default vars
$i = 0;
$articleList = [];

foreach ($entriesList as $key => $entry) {
    // Extract data
    $articleList[$i]['articleTitle'] = $entry->get('title');
    $articleList[$i]['articleUrlSlug'] = $entry->get('slug');
    $articleList[$i]['articleHeroImage'] = $entry->get('heroImage');
    $articleList[$i]['articleAuthor'] = $entry->get('author');
    $articleList[$i]['articlePublishDate'] = $entry->get('publishDate');
    $articleList[$i]['articleUpdatedDate'] = $entry->get('updatedDate');
    $articleList[$i]['articleKeywords'] = $entry->get('keywords');

    // Extract rich text
    $renderer = new Contentful\RichText\Renderer();
    // Description
    $articleDescription = $renderer->render($entry->get('description'));
    $articleList[$i]['articleDescription'] = $articleDescription;
    // Body
    $articleBody = $renderer->render($entry->get('body'));
    $articleList[$i]['articleBody'] = $articleBody;

    // Lets loop again...
    $i++;
}

// Sort and put articles into live date order
usort($articleList, "orderBlogAscending");

// Clear static JSON file
file_put_contents(__DIR__ . '/../data/contentful.blog.json', '');

// Rebuild static JSON file
if (getenv('ENVIRONMENT_STATE') === 'production') {
    $apiOutput = json_encode($articleList, JSON_UNESCAPED_UNICODE); // JSON_UNESCAPED_UNICODE
} else {
    $apiOutput = json_encode($articleList, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT
}
file_put_contents(__DIR__ . '/../data/contentful.blog.json', $apiOutput, FILE_APPEND);
