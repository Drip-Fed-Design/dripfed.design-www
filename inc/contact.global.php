<section class="<?= $globalPrefix; ?>-contact-container"><a data-cabin-event="Prompt / Toggle" href="#triggerPromptTarget" class="__link triggerPrompt" title="Contact Drip Fed Design">&#32;</a></section>
<section class="<?= $globalPrefix; ?>-prompt-container" id="triggerPromptTarget">
    <div class="__user">
        <a data-cabin-event="Prompt / Close" href="#triggerPromptTarget" class="__close triggerPrompt"><img loading="lazy" src="/dist/images/icon/icon-close-grey.svg" title="Close chat" alt="Close" width="15px" height="15px" /></a>
        <div class="<?= $globalPrefix; ?>-grid-container -column__whatsapp">
            <div class="__mugshot">
                <img alt="WhatsApp" src="/dist/images/avatar/avatar-whatsapp-mugshot.jpg" width="40px" height="40px" />
            </div>
            <p class="_font-colour__grey-dark"><strong>Chris Watterston</strong><br /><span class="_font-size__secondary _font-colour__grey-dark">Replies within an hour</span></p>
        </div>
    </div>
    <div class="__message">
        <div class="__bubble">
            <p class="__name _font-size__secondary _font-colour__grey-default"><strong>Chris Watterston</strong></p>
            <?
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/Mobile|Android|BlackBerry|iPhone|Windows Phone/', $userAgent)) {
                echo '<p class="_font-size__secondary _font-colour__grey-dark">Have a question or want to find out more, just drop me a message through WhatsApp 🤟</p>';
            } else {
                echo '<p class="_font-size__secondary _font-colour__grey-dark">Have a question or want to find out more, just drop me a message by scanning this QR code with phones camera 👇</p>';
                echo '<img alt="WhatsApp QR Code" src="/dist/images/social/social-whatsapp-qrcode.jpg" width="80px" height="80px" />';
            }
            ?>
            <p class="__time _font-size__secondary _font-colour__grey-default _text-align__right" id="current-time"></p>
        </div>
    </div>
    <div class="__cta">
        <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
            <a data-cabin-event="Prompt / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" target="_blank" class="__button -raw" title="Chat with Chris Watterston on WhatsApp" hreflang="en">
                <img alt="WhatsApp" src="/dist/images/icon/icon-chat-on-whatsapp.svg" width="190px" height="47px" />
            </a>
            <br />
            <a data-cabin-event="Prompt / Email" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;" class="__button -raw" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more" hreflang="en">or you can <span class="_text-decoration__underline">email us</span>.</a>
        </div>
    </div>
</section>
<!-- Modal -->
<!-- <section class="<?= $globalPrefix; ?>-modal-container" id="triggerFormTarget">
    <div class="<?= $globalPrefix; ?>-card-container _max-width__800">
        <a data-cabin-event="Form / Close" href="#triggerPromptTarget" class="__close triggerForm"><img loading="lazy" src="/dist/images/icon/icon-close-grey.svg" title="Close contact form" alt="Close" width="25px" height="25px" /></a>
        <div class=" __content">
            <p>We'll support you and your team, sharing a wealth of knowledge and experience across a range of sectors and industries. Fill in the form below and we'll do our best to get back to you within 24 hours.</p>
            <hr />
            <section class="<?= $globalPrefix; ?>-form-container">
                <form name="form-enquiry" method="POST" data-netlify="true">
                    <div class="<?= $globalPrefix; ?>-grid-container -column__half -column-gap__default">
                        <div class="__section">
                            <label for="full-name">Full name</label>
                            <input class="__input" type="text" name="full-name" placeholder="What shall we call you..." required />
                        </div>
                        <div class="__section">
                            <label for="email-address">Email address</label>
                            <input class="__input" type="email" name="email-address" placeholder="name@domain.com..." required />
                        </div>
                    </div>
                    <div class="__section">
                        <label for="message">How can we help</label>
                        <textarea class="__textarea" name="message" rows="2" placeholder="What would you like to know? Maybe there is a design project that needs extra support..."></textarea>
                    </div>
                    <div class="__section">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__gdpr">
                            <input class="__checkbox" type="checkbox" name="gdpr" value="Concent given" required />
                            <div class="__gdpr">
                                <label for="gdpr">I grant Drip Fed Ltd to use my information for my enquiry.</label>
                            </div>
                        </div>
                    </div>
                    <div class="__section">
                        <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                            <button data-cabin-event="Form / Submit" class="__button -orange -wide" type="submit" title="Submit your message">Submit message</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</section> -->