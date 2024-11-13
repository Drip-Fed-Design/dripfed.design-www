<? require('../inc/break.global.php'); ?>
<footer class="<?= $globalPrefix; ?>-footer-container _max-width__1280 _padding-top-bottom__xlarge">
    <div class="<?= $globalPrefix; ?>-grid-container -column__half">
        <div class="__logo">
            <a data-cabin-event="Footer / Logo" href="<?= $globalDomainRoot; ?>" title="<?= $globalDescription; ?>" hreflang="en">
                <img loading="lazy" src="/dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="240" height="130" />
            </a>
        </div>
        <nav class="__nav">
            <div class="<?= $globalPrefix; ?>-grid-container -column__half">
                <ul class="_text-align__right">
                    <li><a data-cabin-event="Footer / Latest" href="<?= $globalDomainRoot; ?>latest" title="Take a look at our latest work, thoughts, and updates" hreflang="en">Latest updates<i class="_icon -arrow__r"></i></a></li>
                    <li><a data-cabin-event="Footer / Get Started" href="<?= $globalDomainRoot; ?>#anchor-gettingstarted" title="Subscribing to Drip Fed Unlimited Design is easy, start using design as a service" hreflang="en">Getting Started<i class="_icon -arrow__r"></i></a></li>
                    <li><a data-cabin-event="Footer / Plans" href="<?= $globalDomainRoot; ?>#anchor-designplans" title="Find a unlimited design subscription that suits you, design as a service pricing" hreflang="en">Plans & Pricing<i class="_icon -arrow__r"></i></a></li>
                    <li><a data-cabin-event="Footer / Contact" href="<?= $globalDomainRoot; ?>contact" title="Reach out to Drip Fed Design through a quick email" hreflang="en">Contact Us<i class="_icon -arrow__r"></i></a></li>
                    <!-- <li><a data-cabin-event="Footer / Stripe" href="https://billing.stripe.com/p/login/7sI9AK3ftfcraNq288" target="_blank" title="Manage or cancel your unlimited design subscription, design as a service" hreflang="en">Billing Portal<i class="_icon -arrow__r"></i></a></li> -->
                </ul>
                <div class="_text-align__right">
                    <!-- <div class="__cta <?= $globalPrefix; ?>-button-container">
                        <a data-cabin-event="CTA Footer / Wrike" href="https://login.wrike.com/login/" target="_blank" class="__button -white" title="Log in to submit, manage and collaborate unlimited design requests, design as a service">Log In</a>
                    </div> -->
                    <ul class="__legal">
                        <li><a data-cabin-event="Footer / Terms Conditions" href="<?= $globalDomainRoot; ?>termsconditions" title="Terms and Conditions for Drip Fed Design Subscription" hreflang="en">Terms & Conditions</a></li>
                        <li><a data-cabin-event="Footer / Terms" href="<?= $globalDomainRoot; ?>terms" title="Terms of Use for Drip Fed Design" hreflang="en">Terms of Use</a></li>
                        <li><a data-cabin-event="Footer / Privacy" href="<?= $globalDomainRoot; ?>privacy" title="Privacy policy for Drip Fed Design" hreflang="en">Privacy Policy</a></li>
                        <li><a rel="me" href="https://mastodon.social/@chriswatterston" style="display: none !important;">Mastodon</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="__copyright">
        <p>Made with <i class="_icon -heart"></i> from our HQ in Surrey, England.</p>
        <p class="_font-size__secondary">© 2024 <?= $globalCompanyName; ?>. Company Number: <?= $globalCompanyNumber; ?></p>
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