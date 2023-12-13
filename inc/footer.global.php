    <section class="<?= $globalPrefix; ?>-cta-container _padding-top-bottom__xlarge _background-solid__black">
        <div class="<?= $globalPrefix; ?>-grid-container -column__third-cta -column-gap__xlarge">
            <div class="_pattern -long-l"></div>
            <div class="_padding-top-bottom__default">
                <h4 class="_text-align__center _padding-bottom__small">SAVE £19,200<sup class="_font-colour__grey-default">*</sup> - Start solving design problems.</h4>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <a data-cabin-event="CTA Lower / Plans" href="#anchor-designplans" class="__button -green" title="Find a unlimited design subscription and design as a service that suits you">Sign up in just 60 seconds</a>
                    <a data-cabin-event="CTA Lower / Contact" href="#home" class="__button -white triggerForm" title="Contact <?= $globalTitle; ?> to enquire about unlimited design subscriptions and design as a service">Contact us</a>
                </div>
                <p class="_text-align__center _font-size__secondary _font-colour__grey-default">*compared to the average salary of a full-time senior product designer.</p>
            </div>
            <div class="_pattern -long-r"></div>
        </div>
    </section>
    <footer class="<?= $globalPrefix; ?>-footer-container _max-width__1280 _padding-top-bottom__xlarge">
        <div class="<?= $globalPrefix; ?>-grid-container -column__half">
            <div class="__logo">
                <a data-cabin-event="Footer / Logo" href="<?= $globalDomainRoot; ?>" title="<?= $globalDescription; ?>">
                    <img loading="lazy" src="/dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="309px" height="130px" />
                </a>
            </div>
            <nav class="__nav">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half">
                    <ul class="_text-align__right">
                        <li><a data-cabin-event="Footer / Blog" href="/blog" title="Take a look at our latest work, thoughts, and updates">Blog & Work Updates<i class="_icon -arrow__r"></i></a></li>
                        <li><a data-cabin-event="Footer / Get Started" href="#anchor-gettingstarted" title="Subscribing to Drip Fed Unlimited Design is easy, start using design as a service">Getting Started<i class="_icon -arrow__r"></i></a></li>
                        <li><a data-cabin-event="Footer / Plans" href="#anchor-designplans" title="Find a unlimited design subscription that suits you, design as a service pricing">Plans & Pricing<i class="_icon -arrow__r"></i></a></li>
                        <li><a data-cabin-event="Footer / Contact" href="#home" class="triggerForm" title="Reach out to Drip Fed Design through our short and easy contact form">Contact Us<i class="_icon -arrow__r"></i></a></li>
                        <li><a data-cabin-event="Footer / Stripe" href="https://billing.stripe.com/p/login/7sI9AK3ftfcraNq288" target="_blank" title="Manage, pause or cancel your unlimited design subscription, design as a service">Billing Portal<i class="_icon -arrow__r"></i></a></li>
                    </ul>
                    <div class="_text-align__right">
                        <div class="__cta <?= $globalPrefix; ?>-button-container">
                            <a data-cabin-event="CTA Footer / Wrike" href="https://login.wrike.com/login/" target="_blank" class="__button -white" title="Log in to submit, manage and collaborate unlimited design requests, design as a service">Log In</a>
                        </div>
                        <ul class="__legal">
                            <li><a data-cabin-event="Footer / Terms Conditions" href="/termsconditions" title="Terms and Conditions for Drip Fed Design Subscription">Terms & Conditions</a></li>
                            <li><a data-cabin-event="Footer / Terms" href="/terms" title="Terms of Use for Drip Fed Design">Terms of Use</a></li>
                            <li><a data-cabin-event="Footer / Privacy" href="/privacy" title="Privacy policy for Drip Fed Design">Privacy Policy</a></li>
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
        // FAQ
        function toggleFAQ(e) {
            e.closest("article").querySelector(".__answer").classList.toggle("-show")
        }
        var triggerFAQ = document.querySelectorAll(".triggerFAQ");
        triggerFAQ.forEach(function(e) {
            e.addEventListener("click", function() {
                toggleFAQ(this)
            })
        });

        // Form toggle
        function toggleFormClass() {
            var formTarget = document.getElementById('triggerFormTarget');
            formTarget.classList.toggle('__show');
        }
        var triggerLinks = document.getElementsByClassName('triggerForm');
        for (var i = 0; i < triggerLinks.length; i++) {
            triggerLinks[i].addEventListener('click', toggleFormClass);
        }

        // Form toggle
        function togglePromptClass() {
            var promptTarget = document.getElementById('triggerPromptTarget');
            promptTarget.classList.toggle('__hide');
            promptTarget.classList.add('__active');
        }
        var triggerLinksPro = document.getElementsByClassName('triggerPrompt');
        for (var i = 0; i < triggerLinksPro.length; i++) {
            triggerLinksPro[i].addEventListener('click', togglePromptClass);
        }

        // Output time of chat
        function displayCT() {
            var e = new Date,
                t = e.getHours(),
                n = e.getMinutes();
            e.getSeconds(), document.getElementById("current-time").textContent = t + ":" + n
        }
        window.addEventListener("load", displayCT);

        // Scrolling anchors
        document.addEventListener("DOMContentLoaded", function() {
            for (var e = document.querySelectorAll('a[href^="#"]'), t = 0; t < e.length; t++) e[t].addEventListener("click", smoothScroll)
        });

        function smoothScroll(e) {
            e.preventDefault();
            var t = this.getAttribute("href");
            document.querySelector(t).scrollIntoView({
                behavior: "smooth"
            })
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">

    </body>

    </html>