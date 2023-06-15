<?php
require(__DIR__ . '/../config/vars.global.php');
require(__DIR__ . '/../config/debug.global.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta content="True" name="HandheldFriendly" />

    <title><?= $globalTitleLong; ?></title>
    <meta name="description" content="<?= $globalDescription; ?>" />
    <meta name="googlebot" content="<?= $globalRobots; ?>" />
    <meta name="robots" content="<?= $globalRobots; ?>" />
    <link rel="canonical" href="<?= $globalDomainRoot; ?>" />

    <link rel="apple-touch-icon" href="<?= $globalDomainRoot; ?>dist/images/social/apple-touch-icon.png" />
    <link rel="icon" href="favicon.ico" />
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Sharing details  -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $globalDomainRoot; ?>" />
    <meta property="og:title" content="<?= $globalTitleLong; ?>" />
    <meta property="og:description" content="<?= $globalDescription; ?>" />
    <meta property="og:image" content="<?= $globalDomainRoot; ?>dist/images/social/social-dripfed-design-sharing.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@ChrisWatterston" />
    <meta name="twitter:creator" content="@ChrisWatterston" />
    <meta name="twitter:title" content="<?= $globalTitleLong; ?>" />
    <meta name="twitter:description" content="<?= $globalDescription; ?>" />
    <meta name="twitter:image" content="<?= $globalDomainRoot; ?>dist/images/social/social-dripfed-design-sharing.jpg" />

    <!-- Schema Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?= $globalTitle; ?>",
            "alternateName": "<?= $globalCompanyName; ?>",
            "url": "<?= $globalDomainRoot; ?>",
            "logo": "<?= $globalDomainRoot; ?>dist/images/social/dfd-dripfed-design-schema-logo.png",
            "description": "<?= $globalDescription; ?>",
            "sameAs": [
                "https://www.linkedin.com/company/drip-fed-design/",
                "<?= $globalDomainRoot; ?>"
            ],
            "address": {
                "@type": "PostalAddress",
                "postalCode": "TW16 6AX",
                "addressCountry": "United Kingdom"
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="<?= $globalDomainRoot; ?>dist/css/<?= $globalPrefix; ?>.min.css">

</head>

<body id="home">
    <main id="<?= $globalPrefix; ?>-main-container">
        <header class="<?= $globalPrefix; ?>-header-container _max-width__1280">
            <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-v__center">
                <div class=" __logo">
                    <a data-cabin-event="Header / Logo" href="<?= $globalDomainRoot; ?>" title="<?= $globalDescription; ?>">
                        <img src="<?= $globalDomainRoot; ?>dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="309px" height="130px" />
                    </a>
                </div>
                <nav class="__nav">
                    <div class="<?= $globalPrefix; ?>-nav-container">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-h__right -column-v__center -column-gap__default">
                            <ul class="__links">
                                <li><a data-cabin-event="Header / Get Started" href="#anchor-gettingstarted" title="Scale your business with a simple design subscription">Scale your business<i class="_icon -arrow__r"></i></a></li>
                            </ul>
                            <div class="__cta <?= $globalPrefix; ?>-button-container">
                                <a data-cabin-event="Header / Plans" href="#anchor-designplans" class="__button -orange" title="Find a design subscription that suits you">See design plans</a>
                                <a data-cabin-event="Header / Basecamp" href="https://launchpad.37signals.com/signin" target="_blank" class="__button -white" title="Log in to submit, manage and collaborate design requests">Client Log in</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>