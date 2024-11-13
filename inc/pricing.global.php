<section class="<?= $globalPrefix; ?>-plans-container _max-width__1280 _padding-top-bottom__xlarge _margin-top-bottom__xlarge" id="anchor-designplans">

    <div class="__details _background-solid__white _border-radius__default">
        <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-gap__small">
            <img loading="lazy" src="/dist/images/icon/icon-getshitdone-ani.gif" alt="Request designs with <?= $globalTitle; ?>" width="100px" height="100px" />
            <div class="__titles _text-align__left">
                <h2><strong>Two simple solutions, that'll deliver exciting results!</strong></h2>
                <h4 class="_font-colour__grey-dark">No barriers. No surprizes. No hidden costs.</h4>
            </div>
        </div>
    </div>

    <div class="__plans">
        <div class="<?= $globalPrefix; ?>-grid-container -column__half -column-gap__default">
            <div class="__design _padding-all__small-default _background-solid__white _border-radius__default _margin-bottom__default">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-v__center -column-gap__small _margin-top-bottom__small">
                    <img loading="lazy" src="/dist/images/icon/icon-design-ani.gif" class="_image__circle -border-green" alt="Request designs with <?= $globalTitle; ?>" width="56px" height="56px" />
                    <div class="__titles _text-align__left">
                        <h2>Pay-Per-Project</h2>
                        <h3>£350 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/day</span></h3>
                    </div>
                </div>
                <p><strong>Project or task dependent dynamic costs</strong>, for a pixel perfect combination of digital product design & web development.</p>
                <p>Simply onboard and plug straight into your current workflow to reduce both design and development backlog.</p>
                <p>Perfect for <strong>single projects, retainers, or testing</strong>.</p>
                <ul>
                    <li>
                        <p>
                            <i class="_icon -onerequest"></i>
                            Single project per quotation
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Quote-bound workflows
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Three revision requests
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Contractual quote / invoice per-project
                        </p>
                    </li>
                    <!-- Standard bits BELOW -->
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Premium digital product design and modern web dev
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Seamless progress from design-to-code
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Senior level-experience & delivery
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Cross-platform, SEO, and CMS integration
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Figma and GitHub repository access
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Priority support and delivery
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Proactive 1:1 Comms (Slack or Teams)
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Weekly catch-up video call
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Available 5 days a week (Mon-Fri)
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Project advice and consulting
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Liaise and define with your wider team
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            NDA, Liability Cover, and Public/Product Insurance
                        </p>
                    </li>
                </ul>
                <?
                // functionRemainingSpots($remainingSpotsDesign);
                ?>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <?
                    if ($remainingSpotsDesign === 0) {
                        echo '
                            <a data-cabin-event="Waiting List / Project" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide _text-align__center" title="Join our unlimited design subscription waiting list today"  target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Plan / Project" href="book-project" class="__button -orange _text-align__center -wide" target="_blank"  title="Book a 20-min introduction call to a monthly unlimited design subscription today">Book intro call</a>
                        ';
                    }
                    ?>
                    <p class="_text-align__center _font-size__secondary">Alternatively, keep it casual and talk through <a data-cabin-event="Plan / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" title="Chat through WhatsApp" class="_font-size__secondary">WhatsApp</a></p>
                </div>
            </div>


            <div class="__plus _padding-all__small-default _background-solid__white _border-radius__default">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-v__center -column-gap__small _margin-top-bottom__small">
                    <img loading="lazy" src="/dist/images/icon/icon-plus-ani.gif" class="_image__circle -border-pink" alt="Product design and build with <?= $globalTitle; ?>" width="56px" height="56px" />
                    <div class="__titles _text-align__left">
                        <h2>Monthly Subscription</h2>
                        <h3>£7,999 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/month</span></h3>
                    </div>
                </div>
                <p><strong>Move fast and maximise ROI</strong>, with end-to-end combination of seamless digital product design & web development.</p>
                <p>Avoid repetitive and long financial approvals, instead focus and deliver on the things that really matter.</p>
                <p>Perfect for <strong>multi-projects, growing backlog, or fast movers.</strong>.</p>
                <ul>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            <strong>Everything from Pay-Per-Project, plus:</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -tworequest"></i>
                            Two active projects at a time
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star -highlight"></i>
                            Quote-less uninterrupted workflows
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star -highlight"></i>
                            Unlimited revision requests
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star -highlight"></i>
                            Cancel at anytime
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star -highlight"></i>
                            Ability to adopt your tools
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star -highlight"></i>
                            Support with cloud infrastucture and monitoring
                        </p>
                    </li>
                </ul>

                <div class="__notice">
                    <h6>How does it work?</h6>
                    <p class="_font-size__secondary">We have a 2 month minimum subscription period, then it's decision time.</p>
                    <p class="_font-size__secondary">You can continue with the subscription, or cancel at any time, for any reason. Day or night.</p>
                    <p class="_font-size__secondary">If you choose to cancel, you can either take the work and end your journey with us... (we don't hold grudges)</p>
                    <p class="_font-size__secondary">Or, if you'd prefer ongoing support on the work we've provided, we can discuss a support retainer until you no longer need us.</p>
                    <p class="_font-size__secondary">Our retainers provide the same quality and service as before, but with the obvious fixed and transparent retainer in place.</p>
                </div>
                <?
                // functionRemainingSpots($remainingSpotsPlus);
                ?>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <?
                    if ($remainingSpotsPlus === 0) {
                        echo '
                            <a data-cabin-event="Waiting List / Subscription" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide _text-align__center" title="Join our unlimited digital product design and build subscription waiting list today" target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Plan / Subscription" href="book-subscription" class="__button -aqua _text-align__center -wide" target="_blank" title="Book a 20-min introduction call to a monthly unlimited design and build subscription today">Book intro call</a>
                        ';
                    }
                    ?>
                    <p class="_text-align__center _font-size__secondary">Alternatively, keep it casual and talk through <a data-cabin-event="Plan / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" title="Chat through WhatsApp" class="_font-size__secondary">WhatsApp</a></p>
                </div>
            </div>
        </div>
        <div class="__project _padding-all__small-default _background-solid__white _border-radius__default">
            <div class="<?= $globalPrefix; ?>-grid-container -column__full-min -r -column-v__center -column-gap__large -column-row__default _margin-top-bottom__small">
                <div class="__titles _text-align__left">
                    <h3 class="_font-colour__white-default">Not sure what you need?</h3>
                    <p class="_font-colour__white-default">Don't worry, you're not alone. We can have an informal chat about things - no strings attached!</p>
                    <p class="_font-colour__white-default">Email us at <a data-cabin-event="Plan / Email" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;" class="__button -raw" title="Contact <?= $globalTitle; ?> to enquire about a one-time project for design and build" hreflang="en">hello@dripfed.design</a> or message us through <a data-cabin-event="Plan / WhatsApp" href="https://wa.me/message/WFGVYT6SEWKJD1" title="Chat through WhatsApp">WhatsApp</a>. We respond fast!</p>
                </div>
                <div class="<?= $globalPrefix; ?>-button-container __talk">
                    <a data-cabin-event="Plan / Unsure" href="book-unsure" class="__button -aqua -wide _text-align__center" target="_blank" title="Start your unlimited digital product design and build subscription today, book a 20-min introduction call">Let's talk</a>
                </div>
            </div>
        </div>
    </div>
</section>