    <section class="<?= $globalPrefix; ?>-cta-container _padding-top-bottom__xlarge _background-solid__black">
        <div class="<?= $globalPrefix; ?>-grid-container -column__third-cta -column-gap__xlarge">
            <div class="_pattern -long-l"></div>
            <div class="_padding-top-bottom__default">
                <h4 class="_text-align__center _padding-bottom__small">Scale your business, not your books.</h4>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <a href="#anchor-designplans" class="__button -green" title="Find a design subscription that suits you">See design plans</a>
                    <a href="#anchor-contactus" class="__button -white" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more">Contact us</a>
                </div>
            </div>
            <div class="_pattern -long-r"></div>
        </div>
    </section>
    <footer class="<?= $globalPrefix; ?>-footer-container _max-width__1280 _padding-top-bottom__xlarge">
        <div class="<?= $globalPrefix; ?>-grid-container -column__half">
            <div class="__logo">
                <img src="<?= $globalDomainRoot; ?>dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="309px" height="130px" />
            </div>
            <nav class="__nav">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half">
                    <ul class="_text-align__right">
                        <li><a href="#anchor-gettingstarted" title="Subscribing to Drip Fed Design is easy">Getting Started<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#latest-work" title="Take a look at our latest work and projects">Latest Work<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#anchor-designplans" title="Find a design subscription that suits you">Pricing & Plans<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#anchor-contactus" title="Reach out to Drip Fed Design through our short and easy contact form">Contact Us<i class="_icon -arrow__r"></i></a></li>
                    </ul>
                    <div class="_text-align__right">
                        <div class="__cta <?= $globalPrefix; ?>-button-container">
                            <a href="#anchor-login" class="__button -white" title="Log in to make or manage design requests">Client Log in</a>
                        </div>
                        <ul class="__legal">
                            <li><a href="/terms" title="Terms of Use for Drip Fed Design">Terms of Use</a></li>
                            <li><a href="/privacy" title="Privacy policy for Drip Fed Design">Privacy Policy</a></li>
                            <li><a href="/cookies" title="Cookies Policy for Drip Fed Design">Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="__copyright">
            <p>Made with <i class="_icon -heart"></i> from our HQ in Surrey, England.</p>
            <p class="_font-size__secondary">© 2023 <?= $globalCompanyName; ?>. Company Number: <?= $globalCompanyNumber; ?></p>
        </div>
    </footer>
    </main>

    <? require(__DIR__ . '/../config/analytics.global.php'); ?>

    <script>
        // Toggle for showing FAQ
        function toggleFAQ(element) {
            var article = element.closest('article');
            var answerDiv = article.querySelector('.__answer');
            answerDiv.classList.toggle('-show');
        }
        // Get things triggering and showing
        var triggerFAQ = document.querySelectorAll('.triggerFAQ');
        triggerFAQ.forEach(function(button) {
            button.addEventListener('click', function() {
                toggleFAQ(this);
            });
        });
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">

    </body>

    </html>