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