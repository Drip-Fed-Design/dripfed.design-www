<? require('../inc/header.global.php'); ?>
<div class="<?= $globalPrefix; ?>-body-container">
    <section class="<?= $globalPrefix; ?>-intro-container _max-width__1000 _padding-top-bottom__large">
        <h1 class="_text-align__center">Start a conversation, with <span class="_word-under">infinite</span> opportunities<span class="_word-stop"></span></h1>
        <p class="_text-align__center">Whether you're interested in chatting about a potential project or collaboration, or just want to find out more, the following methods will get things moving.</p>
    </section>
    <section class="<?= $globalPrefix; ?>-contactops-container _max-width__1280 _padding-bottom__large">
        <div class="_padding-bottom__large">
            <div class="<?= $globalPrefix; ?>-grid-container -column__contactapt -column-gap__large">
                <div class="_background-solid__white _padding-all__small-default _border-radius__default _text-align__center">
                    <h2>Getting in touch</h2>
                    <span class="_split -orange"></span>
                    <p>Send us an email at <a data-cabin-event="Prompt / Email" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;" class="__button -raw" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more" hreflang="en"><span class="_text-decoration__underline">&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;</span></a> or, why not just submit the form below.</p>
                    <form method="POST" class="kf-form" action="https://kwesforms.com/api/f/pyepHij214AROKmstbAr">
                        <section class="<?= $globalPrefix; ?>-form-container _text-align__left">
                            <div class="<?= $globalPrefix; ?>-grid-container -column__half -column-gap__default">
                                <div class="__section">
                                    <label for="name">Full name *</label>
                                    <input class="__input -white" type="text" name="name" id="name" placeholder="What's your full name..." rules="required|max:255" required />
                                </div>
                                <div class="__section">
                                    <label for="email">Email address *</label>
                                    <input class="__input -white" type="email" name="email" id="email" placeholder="What's your email address..." rules="required|max:255" required />
                                </div>
                            </div>
                            <div class="__section">
                                <label for="help">How can we help? *</label>
                                <textarea class="__textarea -white" name="help" id="help" placeholder="Share helpful details about your brand, business, platform, website, and so on..." rules="required|max:500" required></textarea>
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
                                    <button data-cabin-event="Contact / Submit" class="__button -orange -wide" type="submit" title="Submit">Submit</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div class="_background-solid__white _padding-all__small-default _border-radius__default _text-align__center">
                    <h2>WhatsApp</h2>
                    <span class="_split -orange"></span>
                    <p>Prefer WhatsApp? That's fine.</p>
                    <p>Click the link below to start a conversation, or scan the QR Code with your phones camera.</p>
                    <a data-cabin-event="Prompt / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" target="_blank" class="__button -raw" title="Chat with Chris Watterston on WhatsApp" hreflang="en">
                        <img alt="WhatsApp" src="/dist/images/icon/icon-chat-on-whatsapp.svg" width="190px" height="47px" />
                    </a>
                    <p><img alt="WhatsApp QR Code" src="/dist/images/social/social-whatsapp-qrcode.jpg" width="120px" height="120px" /></p>
                </div>
            </div>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-logos-container _max-width__1640">
        <div class="_background-solid__white _padding-all__small-default _border-radius__default">
            <p class="_font-colour__grey-dark _text-align__center">Chris has designed, built, and launched products for a diverse variety of startups, agencies, & businesses.</p>
            <div class="__logos">
                <img loading="lazy" src="/dist/images/brand/brand-tp-lucozade.png" title="Lucozade brand designer" alt="Lucozade" width="125px" height="35.47px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-hasbro.png" title="Hasbro brand designer" alt="Hasbro" width="80px" height="80px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-ribena.png" title="Ribena brand designer" alt="Ribena" width="84.86px" height="60.6px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-holograph.png" title="Holograph brand campaign designer" alt="Holograph" width="144px" height="24px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-ucccoffee.png" title="UCC Coffee brand designer" alt="UCC Coffee" width="90px" height="41.84px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-xbox.png" title="Xbox brand designer" alt="Xbox" width="135px" height="40.09px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-billybrief.png" title="Billy Brief brand designer" alt="illy Brief" width="62px" height="62px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-suntory.png" title="Suntory brand designer" alt="Suntory" width="130px" height="17.69px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-totaltelephones.png" title="Total Telephone Solutions brand designer" alt="Total Telephone Solutions" width="164.84px" height="57.07px" />
            </div>
        </div>
    </section>
    <? require('../inc/testimonial.global.php'); ?>
</div>
<script src="https://kwesforms.com/v2/kf-script.js" defer></script>
<? require('../inc/footer.global.php'); ?>