<section class="<?= $globalPrefix; ?>-contact-container"></section>

<section class="<?= $globalPrefix; ?>-prompt-container">
    <div class="__user">
        <div class="<?= $globalPrefix; ?>-grid-container -column__min-full">
            <div class="__mugshot">
                <img alt="WhatsApp" src="<?= $globalDomainRoot; ?>dist/images/background/background-whatsapp-mugshot.jpg" width="40px" height="40px" />
            </div>
            <p class="_font-colour__grey-dark"><strong>Chris Watterston</strong><br /><span class="_font-size__secondary _font-colour__grey-dark">Usually replies within a few hours</span></p>
        </div>
    </div>
    <div class="__message">
        <div class="__bubble">
            <p class="__name _font-size__secondary _font-colour__grey-default"><strong>Chris Watterston</strong></p>
            <p class="_font-size__secondary _font-colour__grey-dark">Hey, how are you?</p>
            <p class="_font-size__secondary _font-colour__grey-dark">If you have any questions, or just want to find out more... drop me a message 🤟</p>
            <p class="__time _font-size__secondary _font-colour__grey-default _text-align__right" id="current-time"></p>
        </div>
    </div>
    <div class="__cta">
        <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
            <a href="https://wa.me/447515163815" class="__button -raw" title="Chat with Drip Fed Design on WhatsApp">
                <img alt="WhatsApp" src="<?= $globalDomainRoot; ?>dist/images/icon/icon-chat-on-whatsapp.svg" width="190px" height="47px" />
            </a>
            <a href="#anchor-contactus" class="__button -raw triggerForm" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more">or use our <u>contact form</u>.</a>
        </div>
    </div>
</section>


<!-- Modal -->
<section class="<?= $globalPrefix; ?>-modal-container" id="triggerFormTarget">
    <div class="<?= $globalPrefix; ?>-card-container _max-width__800">
        <a href="#anchor-contactus" class="__close triggerForm"><img loading="lazy" src="/dist/images/icon/icon-close-grey.svg" title="Close contact form" alt="Close" width="25px" height="25px" /></a>

        <div class=" __content">

            <p>We've got a wealth of experience across multiple sectors and industries, so certain we'll be able to support you and your team. Fill out the form below and we'll do our best to get back to you within 24 hours.</p>
            <hr />
            <section class="<?= $globalPrefix; ?>-form-container">
                <form name="form-enquiry" method="POST" data-netlify="true">
                    <div class="__section">
                        <label for="full-name">Full name</label>
                        <input class="__input" type="text" name="full-name" placeholder="What shall we call you..." required />
                    </div>
                    <div class="__section">
                        <label for="email-address">Email address</label>
                        <input class="__input" type="email" name="email-address" placeholder="name@domain.com..." required />
                    </div>
                    <div class="__section">
                        <label for="message">How can we help</label>
                        <textarea class="__textarea" name="message" rows="4" placeholder="What would you like to know? Maybe there is a design project that needs extra support..."></textarea>
                    </div>
                    <div class="__section">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__min-full">
                            <input class="__checkbox" type="checkbox" name="gdpr" required />
                            <div class="__gdpr">
                                <label for="gdpr">I understand and concent to Drip Fed Ltd to store my submitted information so they can respond to my enquiry.</label>
                            </div>
                        </div>
                    </div>
                    <div class="__section">
                        <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                            <button class="__button -orange -wide" type="submit" title="Submit your message">Submit message</button>
                        </div>
                    </div>
                </form>
            </section>

        </div>
    </div>
</section>