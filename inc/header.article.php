<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta content="True" name="HandheldFriendly" />

    <title><?= $articleMetaTitle; ?></title>
    <meta name="description" content="<?= $articleMetaDesc; ?>" />
    <meta name="googlebot" content="<?= $globalRobots; ?>" />
    <meta name="robots" content="<?= $globalRobots; ?>" />
    <link rel="canonical" href="<?= $globalDomainRoot . $articleMetaUrl; ?>" />

    <link rel="apple-touch-icon" href="<?= $globalDomainRoot; ?>dist/images/social/apple-touch-icon.png" />
    <link rel="icon" href="<?= $globalDomainRoot; ?>favicon.ico" />
    <link rel="shortcut icon" href="<?= $globalDomainRoot; ?>favicon.ico" />

    <? if ($includeFullSchema) { ?>
        <!-- Sharing details  -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= $globalDomainRoot . $articleMetaUrl; ?>" />
        <meta property="og:title" content="<?= $articleMetaTitle; ?>" />
        <meta property="og:description" content="<?= $articleMetaDesc; ?>" />
        <meta property="og:image" content="https:<?= $articleHeroImageUrl; ?>" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@ChrisWatterston" />
        <meta name="twitter:creator" content="@ChrisWatterston" />
        <meta name="twitter:title" content="<?= $articleMetaTitle; ?>" />
        <meta name="twitter:description" content="<?= $articleMetaDesc; ?>" />
        <meta name="twitter:image" content="https:<?= $articleHeroImageUrl; ?>" />
    <? } ?>

    <? if ($includeFullSchema) { ?>
        <!-- Schema Data -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "<?= $articleMetaTitle; ?>",
                "image": [
                    "https:<?= $articleHeroImageUrl; ?>"
                ],
                "author": {
                    "@type": "Person",
                    "name": "Chris Watterston"
                },
                "datePublished": "<?= $articleMetaPublishDate; ?>",
                <? if ($articleUpdateDate !== null) { ?> "dateModified": "<?= $articleMetaUpdateDate; ?>",
                <? } else { ?> "dateModified": "<?= $articleMetaPublishDate; ?>",
                <? } ?> "publisher": {
                    "@type": "Organization",
                    "name": "<?= $globalCompanyName; ?>",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "<?= $globalDomainRoot; ?>dist/images/social/dfd-dripfed-design-schema-logo.png"
                    }
                },
                "description": "<?= $articleMetaDesc; ?>",
                "articleBody": "<?= $articleMetaBody; ?>",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "<?= $globalDomainRoot . $articleMetaUrl; ?>"
                }
            }
        </script>
    <? } ?>

    <link rel="stylesheet" type="text/css" href="../dist/css/<?= $globalPrefix; ?>.min.css">

    <? if (getenv('ENVIRONMENT_STATE') === 'production') { ?>
        <!-- Hotjar Tracking Code -->
        <script>
            (function(h, o, t, j, a, r) {
                h.hj = h.hj || function() {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
                h._hjSettings = {
                    hjid: 3881240,
                    hjsv: 6
                };
                a = o.getElementsByTagName('head')[0];
                r = o.createElement('script');
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>
    <? } else {
        echo '<!-- [hotjar-disabled] -->';
    } ?>
</head>

<body id="article">
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
                                <li><a data-cabin-event="Header / Learn More" href="<?= $globalDomainRoot; ?>latest/design-subscription-what-it-is-how-it-works-is-it-the-future" title="What is a unlimited design subscriptions and design as a service, and how does a design subscription work">Learn about unlimited design subscription<i class="_icon -arrow__r"></i></a></li>
                            </ul>
                            <div class="__cta <?= $globalPrefix; ?>-button-container">
                                <? if ($includeBackToHomepage) { ?>
                                    <a data-cabin-event="Header / Back" href="<?= $globalDomainRoot; ?>" class="__button -orange" title="Return back to homepage" hreflang="en">Back to homepage</a>
                                <? } else { ?>
                                    <a data-cabin-event="Header / More Articles" href="<?= $globalDomainRoot; ?>latest/" class="__button -orange" title="More of our latest work, articles, and updates" hreflang="en">Back to articles</a>
                                <? } ?>
                                <!-- <a data-cabin-event="Header / Book Call" href="<?= $globalDomainRoot; ?>book-call" target="_blank" class="__button -white" title="Book an introduction call with <?= $globalTitle; ?>, find out about our unlimited digital design subscriptions design as a service" hreflang="en">Book a call</a> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>