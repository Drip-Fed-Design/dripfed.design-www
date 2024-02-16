<?
// Enable export as flat file
$htmlExporting = false;

// Exporting as flat file
if ($htmlExporting === true) {
    ob_start();
}

require(__DIR__ . '/inc/header.global.php');
?>
<div class="<?= $globalPrefix; ?>-body-container _max-width__1280 _padding-top-bottom__large">

    <div class="<?= $globalPrefix; ?>-grid-container -column__half -charity -column-gap__default">

        <div class="_padding-bottom__large">
            <section class="<?= $globalPrefix; ?>-intro-container _padding-bottom__default">
                <h1><span class="_word-wrap">Thank you</span> for your interest in receiving FREE access to our unlimited design services.</h1>
                <br />
                <h4>Please fill out the <strong>charity entry form</strong>, cross your fingers, and start planning what we're going to work on!</h4>
                <br />
                <div class="__cta <?= $globalPrefix; ?>-button-container">
                    <a data-cabin-event="Portfolio / Charity" href="<?= $globalDomainRoot; ?>portfolio" class="__button -orange" title="Explore design work completed by the designer behind <?= $globalTitle; ?>" hreflang="en">Want to see our work?</a>
                </div>
                <p>Charities can apply for our unlimited design services from Monday, February 5, 2024 until the closing date of Friday, February 23, 2024.</p>
                <p>The winner will be picked at random, announced on social media, and directly contacted within 3 days of closing date.</p>
                <p class="_font-size__secondary _font-colour__grey-default">The winning charity will continue to be considered a service user and, as such, must agree to adhere to Drip Fed Ltd's <a data-cabin-event="Charity / Terms Conditions" href="<?= $globalDomainRoot; ?>termsconditions" title="Terms and Conditions for Drip Fed Design Subscription" class="_font-size__secondary">Terms of Service & Conditions</a>.</p>
            </section>
            <section class="<?= $globalPrefix; ?>-logos-container" style="padding:0;">
                <div class="_background-solid__white _padding-all__small-default _border-radius__default">
                    <p class="_font-colour__grey-dark _text-align__center">We've designed, built, and launched products to a diverse variety of startups and businesses.</p>
                    <div class="__logos">
                        <img loading="lazy" src="/dist/images/brand/brand-tp-lucozade.png" title="Lucozade brand designer" alt="Lucozade" width="100px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-hasbro.png" title="Hasbro brand designer" alt="Hasbro" width="65px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-ribena.png" title="Ribena brand designer" alt="Ribena" width="65px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-kyocera.png" title="Kyocera brand designer" alt="Kyocera" width="100px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-ucccoffee.png" title="UCC Coffee brand designer" alt="UCC Coffee" width="65px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-xbox.png" title="Xbox brand designer" alt="Xbox" width="100px" height="auto" />
                        <img loading="lazy" src="/dist/images/brand/brand-tp-suntory.png" title="Suntory brand designer" alt="Suntory" width="100px" height="auto" />
                    </div>
                </div>
            </section>
        </div>
        <div class="<?= $globalPrefix; ?>-card-container">
            <div class=" __content">
                <h3 class="_font-colour__black-light">Charity Entry Form</h3>
                <hr />
                <section class="<?= $globalPrefix; ?>-form-container">
                    <form name="form-charity" method="POST" data-netlify="true">
                        <div class="__section">
                            <label for="charity-name">Charity Name <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="text" name="charity-name" placeholder="What is the name of your charity..." required />
                        </div>
                        <div class="__section">
                            <label for="charity-website">Charity Website <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="text" name="charity-website" placeholder="https://www.yourcharity.com..." required />
                        </div>
                        <div class="__section">
                            <label for="charity-number">Charity Registration Number <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="number" name="charity-number" placeholder="123456..." required />
                        </div>
                        <div class="__section">
                            <label for="charity-benefit">Why do you think your charity would benefit from an unlimited design service? <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <textarea class="__textarea" name="charity-benefit" rows="4" placeholder="What would you like to achieve? Maybe you need a website redesign, or a digital product built..." required></textarea>
                        </div>
                        <div class="__section">
                            <label for="full-name">Your full name <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="text" name="full-name" placeholder="What's the name of whom we're contacting..." required />
                        </div>
                        <div class="__section">
                            <label for="email-address">Your email address <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="email" name="email-address" placeholder="name@domain.com" required />
                        </div>
                        <div class="__section">
                            <label for="mobile-number">Your mobile number <span class="_font-size__secondary _font-colour__grey-default _font-style__italic">(required)</span></label>
                            <input class="__input" type="tel" name="mobile-number" placeholder="+44 7891 012345..." required />
                        </div>
                        <div class="__section">
                            <div class="<?= $globalPrefix; ?>-grid-container -column__gdpr">
                                <input class="__checkbox" type="checkbox" name="gdpr" value="Concent given" required />
                                <div class="__gdpr">
                                    <label for="gdpr">I grant Drip Fed Ltd to the information provided for enquiry and service purposes.</label>
                                </div>
                            </div>
                        </div>
                        <div class="__section">
                            <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                                <button data-cabin-event="Charity / Submit" class="__button -orange -wide" type="submit" title="Submit your charity">Submit your charity</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<?
require(__DIR__ . '/inc/footer.global.php');

// Exporting as flat file
if ($htmlExporting === true) {
    $dripfedHTML = ob_get_contents();
    ob_end_clean();
    file_put_contents('./dist' . $_SERVER['PHP_SELF'], $dripfedHTML);
}
?>