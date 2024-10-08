<?php
require(__DIR__ . '/../config/vars.global.php');
require(__DIR__ . '/../config/debug.global.php');

// Local meta formatting
$includeFullSchema = false;
$includeShareSchema = false;
$includeBackToHomepage = true;
$articleMetaTitle = 'Portfolio of design work, Drip Fed Design Agency';
$articleMetaPublishDate = date('now');
$articleMetaUpdateDate = $articleMetaPublishDate;
$articleMetaDesc = 'Portfolio of products for startups, design micro-agency with a design subscription model';
$articleMetaKeywords = '';
$articleMetaImage = $globalDomainRoot . 'dist/images/social/social-dripfed-design-sharing.jpg';
$articleMetaUrl = 'portfolio';

require('../inc/header.article.php');
// Set the path to the directory containing images
$directoryPath = 'dist/images/portfolio/';

// Open the directory
$dir = opendir($directoryPath);

// Check if the directory handle is valid
if ($dir === false) {
    die("Failed to open directory $directoryPath");
}

// An array to hold the image files and their dimensions
$images = [];

// Loop through the files in the directory
while (($file = readdir($dir)) !== false) {
    // Check for image file extensions
    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
        $filePath = $directoryPath . $file;
        list($width, $height) = getimagesize($filePath); // Get dimensions
        $images[] = ['path' => $filePath, 'height' => $height];
    }
}

// Close the directory handle
closedir($dir);

// Sort images by height in descending order
// usort($images, function ($a, $b) {
//     return $b['height'] - $a['height'];
//     // return $a['height'] - $b['height'];
// });
?>
<section class="<?= $globalPrefix; ?>-portfolio-container _max-width__1280 _margin-top-bottom__large">
    <div class="<?= $globalPrefix; ?>-grid-container -column__portfolio">
        <?php
        // Display each image
        $l = 0;
        foreach ($images as $img) {
            $i = $img['path']; // Image path
            // Extract the filename without extension
            $fn = pathinfo($i, PATHINFO_FILENAME);
            // Replace hyphens with spaces and capitalize each word
            $n = ucwords(str_replace('-', ' ', $fn));

            echo "
                <div class='__image' data-loop='$l' >
                    <a href='$i' target='_blank' title='$n'>
                        <img loading='lazy' src='$i' alt='$n' title='$n' width='100%' height='auto'/>
                    </a>
                </div>
            ";
            $l++;
        }
        ?>
    </div>
</section>
<?php
require('../inc/contact.global.php');
require('../inc/footer.global.php');
?>