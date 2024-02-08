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
                "<?= $globalDomainRoot; ?>",
                "https://www.linkedin.com/company/drip-fed-design/",
                "https://www.facebook.com/dripfeddesign",
                "https://dribbble.com/chriswatterston",
                "https://twitter.com/chriswatterston",
                "https://www.instagram.com/chriswatterston",
                "https://www.youtube.com/@dripfeddesign"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pentire Fordbridge Road",
                "postalCode": "TW16 6AX",
                "addressLocality": "Middlesex",
                "addressRegion": "Middlesex",
                "addressCountry": "United Kingdom"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 51.397337,
                "longitude": -0.421178
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "hello@dripfed.design",
                "telephone": "+44 7901 660338"
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="<?= $globalDomainRoot; ?>dist/css/<?= $globalPrefix; ?>.min.css">
    <meta name="facebook-domain-verification" content="l1dtq97by7ufj1g9rp51699dtn6un6" />
</head>

<body id="home">
    <main id="<?= $globalPrefix; ?>-main-container">
        <header class="<?= $globalPrefix; ?>-header-container _max-width__1280">
            <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-v__center">
                <div class=" __logo">
                    <a data-cabin-event="Header / Logo" href="<?= $globalDomainRoot; ?>" title="<?= $globalDescription; ?>" hreflang="en">
                        <img src="<?= $globalDomainRoot; ?>dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="240" height="130" />
                    </a>
                </div>
                <nav class="__nav">
                    <div class="<?= $globalPrefix; ?>-nav-container">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-h__right -column-v__center -column-gap__default">
                            <ul class="__links">
                                <!-- <li><a data-cabin-event="Header / Get Started" href="#anchor-gettingstarted" title="Scale your business with a simple design subscription">Scale your business<i class="_icon -arrow__r"></i></a></li> -->
                                <li><a data-cabin-event="Header / Learn More" href="<?= $globalDomainRoot; ?>blog/design-subscription-what-it-is-how-it-works-is-it-the-future/" title="What is a unlimited design subscriptions and design as a service, and how does a design subscription work" target="_blank">Learn about unlimited design & build<i class="_icon -arrow__r"></i></a></li>
                            </ul>
                            <div class="__cta <?= $globalPrefix; ?>-button-container">
                                <a data-cabin-event="Header / Plans" href="<?= $globalDomainRoot; ?>#anchor-designplans" class="__button -orange" title="Find a unlimited design subscription design as a service for you startup and business" hreflang="en">Choose design plan</a>
                                <a data-cabin-event="Header / Book Call" href="<?= $globalDomainRoot; ?>book" target="_blank" class="__button -white" title="Book an introduction call with <?= $globalTitle; ?>, find out about our unlimited digital design subscriptions design as a service" hreflang="en">Let's chat</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>