<section class="<?= $globalPrefix; ?>-plans-container _max-width__1280 _padding-top-bottom__xlarge _margin-top-bottom__xlarge" id="anchor-designplans">

    <div class="__details _background-solid__white _border-radius__default">
        <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-gap__small">
            <img loading="lazy" src="/dist/images/icon/icon-getshitdone-ani.gif" alt="Request designs with <?= $globalTitle; ?>" width="100px" height="100px" />
            <div class="__titles _text-align__left">
                <h2><strong>One simple fee that'll get sh*t done!</strong></h2>
                <h4 class="_font-colour__grey-dark">No surprises or hidden costs, just ongoing design and product build on tap.</h4>
            </div>
        </div>
    </div>

    <div class="__plans">
        <div class="<?= $globalPrefix; ?>-grid-container -column__half -column-gap__default">
            <div class="__design _padding-all__small-default _background-solid__white _border-radius__default _margin-bottom__default">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-v__center -column-gap__small _margin-top-bottom__small">
                    <img loading="lazy" src="/dist/images/icon/icon-design-ani.gif" class="_image__circle -border-green" alt="Request designs with <?= $globalTitle; ?>" width="56px" height="56px" />
                    <div class="__titles _text-align__left">
                        <h2>Unlimited Design</h2>
                        <h3>£4,480 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/month</span></h3>
                    </div>
                </div>
                <p>Flexible, fast, and pixel perfect digital design. Ideal for plugging straight into most current workflows.</p>
                <p>Perfect for <strong>startups</strong>, <strong>agencies</strong>, & <strong>teams</strong> who need design resource fast.</p>
                <ul>
                    <li>
                        <p>
                            <i class="_icon -onerequest"></i>
                            One active request at a time
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -fast"></i>
                            Best-in-class digital design delivered FAST
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -figma"></i>
                            Senior Designer at your service
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -slack"></i>
                            Proactive 1:1 Comms via Slack (or Teams)
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -date"></i>
                            Available 5 days a week (Mon-Fri)
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -unlimited"></i>
                            Unlimited requests & revisions
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -pause"></i>
                            Cancel at anytime
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
                            <a data-cabin-event="Waiting List / Design" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide _text-align__center" title="Join our unlimited design subscription waiting list today"  target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Subscribe / Design Call" href="https://dripfed.design/book" class="__button -orange _text-align__center" target="_blank"  title="Book a 20-min introduction call to a monthly unlimited design subscription today">Book a 20-min call</a>
                            <a data-cabin-event="Subscribe / Design Start" href="https://buy.stripe.com/fZeaFybNN2ZEgco008" class="__button -aqua _text-align__center" target="_blank" title="Start your monthly unlimited design subscription now">Get started now</a>
                        ';
                    }
                    ?>
                </div>
            </div>


            <div class="__plus _padding-all__small-default _background-solid__white _border-radius__default">
                <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-v__center -column-gap__small _margin-top-bottom__small">
                    <img loading="lazy" src="/dist/images/icon/icon-plus-ani.gif" class="_image__circle -border-pink" alt="Product design and build with <?= $globalTitle; ?>" width="56px" height="56px" />
                    <div class="__titles _text-align__left">
                        <h2>Unlimited Plus+</h2>
                        <h3>£13,440 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/month</span></h3>
                    </div>
                </div>
                <p>Move fast and maximise ROI with an end-to-end seamless combination of product design & build.</p>
                <p>Perfect for <strong>early-stage startups</strong> & <strong>teams</strong> with a growing backlog of tasks/projects.</p>
                <ul>
                    <li>
                        <p>
                            <strong>Everything from Unlimited Design, plus:</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -tworequest"></i>
                            Two active requests at a time
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Priority support & delivery
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Seamless design-to-code
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            GitHub code repository access
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Cross-platform testing
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            SEO & CMS integration
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
                            Adoption of your tools
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Liaise & define with your team
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="_icon -star"></i>
                            Project advice & consulting
                        </p>
                    </li>
                </ul>
                <?
                // functionRemainingSpots($remainingSpotsPlus);
                ?>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <?
                    if ($remainingSpotsPlus === 0) {
                        echo '
                            <a data-cabin-event="Waiting List / Plus" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide _text-align__center" title="Join our unlimited digital product design and build subscription waiting list today" target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Subscribe / Plus Call" href="https://dripfed.design/book-plus" class="__button -orange _text-align__center" target="_blank" title="Book a 20-min introduction call to a monthly unlimited design and build subscription today">Book a 20-min call</a>
                            <a data-cabin-event="Subscribe / Plus Start" href="https://buy.stripe.com/bIYbJC9FFas69O0aEL" class="__button -aqua _text-align__center" target="_blank" title="Start your unlimited digital product design and build subscription now">Get started now</a>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="__project _padding-all__small-default _background-solid__white _border-radius__default">
            <div class="<?= $globalPrefix; ?>-grid-container -column__full-min -r -column-v__center -column-gap__large -column-row__default _margin-top-bottom__small">
                <div class="__titles _text-align__left">
                    <h3 class="_font-colour__white-default">Interested in a one-time project only?</h3>
                    <p class="_font-colour__white-default">If you have a project but feel it doesn't suit the plans above, let's have a quick chat. Alternatively, you can email us at <a data-cabin-event="One-Time Project / Email" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;" class="__button -raw" title="Contact <?= $globalTitle; ?> to enquire about a one-time project for design and build" hreflang="en">hello@dripfed.design</a>. We respond fast!</p>
                </div>
                <div class="<?= $globalPrefix; ?>-button-container __talk">
                    <a data-cabin-event="One-Time Project / Talk" href="https://dripfed.design/book" class="__button -aqua -wide _text-align__center" title="Start your unlimited digital product design and build subscription today, book a 20-min introduction call">Let's talk</a>
                </div>
            </div>
        </div>
    </div>
</section>