<section class="<?= $globalPrefix; ?>-contact-container"><a data-cabin-event="Prompt / Toggle" href="#triggerPromptTarget" class="__link triggerPrompt" title="Contact Drip Fed Design">&#32;</a></section>
<section class="<?= $globalPrefix; ?>-prompt-container" id="triggerPromptTarget">
    <div class="__user">
        <a data-cabin-event="Prompt / Close" href="#triggerPromptTarget" class="__close triggerPrompt"><img loading="lazy" src="/dist/images/icon/icon-close-grey.svg" title="Close chat" alt="Close" width="15px" height="15px" /></a>
        <div class="<?= $globalPrefix; ?>-grid-container -column__whatsapp">
            <div class="__mugshot">
                <img alt="WhatsApp" src="<?= $globalDomainRoot; ?>dist/images/avatar/avatar-whatsapp-mugshot.jpg" width="40px" height="40px" />
            </div>
            <p class="_font-colour__grey-dark"><strong>Chris Watterston</strong><br /><span class="_font-size__secondary _font-colour__grey-dark">Usually replies within a few hours</span></p>
        </div>
    </div>
    <div class="__message">
        <div class="__bubble">
            <p class="__name _font-size__secondary _font-colour__grey-default"><strong>Chris Watterston</strong></p>
            <p class="_font-size__secondary _font-colour__grey-dark">Hey, how are you?</p>
            <p class="_font-size__secondary _font-colour__grey-dark">If you have any questions or want to find out more... just drop me a message 🤟</p>
            <img alt="WhatsApp QR Code" src="<?= $globalDomainRoot; ?>dist/images/social/social-whatsapp-qrcode.jpg" width="80px" height="80px" />
            <p class="__time _font-size__secondary _font-colour__grey-default _text-align__right" id="current-time"></p>
        </div>
    </div>
    <div class="__cta">
        <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
            <a data-cabin-event="Prompt / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" target="_blank" class="__button -raw" title="Chat with Drip Fed Design on WhatsApp">
                <img alt="WhatsApp" src="<?= $globalDomainRoot; ?>dist/images/icon/icon-chat-on-whatsapp.svg" width="190px" height="47px" />
            </a>
            <br />
            <a data-cabin-event="Prompt / Form" href="#triggerPromptTarget" class="__button -raw triggerForm" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more">or use our <span class="_text-decoration__underline">contact form</span>.</a>
        </div>
    </div>
</section>
<!-- Modal -->
<section class="<?= $globalPrefix; ?>-modal-container" id="triggerFormTarget">
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
</section>