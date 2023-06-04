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
                        <li><a href="#" title="#">Getting Started<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#" title="#">Latest Projects<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#" title="#">Pricing & Plans<i class="_icon -arrow__r"></i></a></li>
                        <li><a href="#" title="#">Contact Us<i class="_icon -arrow__r"></i></a></li>
                    </ul>
                    <div class="_text-align__right">
                        <div class="__cta <?= $globalPrefix; ?>-button-container">
                            <a href="#anchor-login" class="__button -white" title="Log in to make or manage design requests">Client Log in</a>
                        </div>
                        <ul class="__legal">
                            <li><a href="#" title="#">Terms of Use</a></li>
                            <li><a href="#" title="#">Privacy Policy</a></li>
                            <li><a href="#" title="#">Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="__copyright">
            <p>Made with <i class="_icon -heart"></i> from our HQ in Surrey, England.</p>
            <p class="_font-size__secondary">© 2023 Drip Fed Ltd. Company Number: 14871237</p>
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
        var triggerFAQ = document.querySelectorAll('#triggerFAQ');
        triggerFAQ.forEach(function(button) {
            button.addEventListener('click', function() {
                toggleFAQ(this);
            });
        });
    </script>

    </body>

    </html>