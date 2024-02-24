<section class="<?= $globalPrefix; ?>-plans-container _max-width__1280 _padding-top-bottom__xlarge _margin-top-bottom__xlarge" id="anchor-designplans">
    <div class="__details _padding-all__small-default _background-solid__white _border-radius__default">
        <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-gap__small">
            <img loading="lazy" src="/dist/images/icon/icon-getshitdone-ani.gif" alt="Request designs with <?= $globalTitle; ?>" width="100px" height="100px" />
            <div class="__titles _text-align__left">
                <h2><strong>Plans that'll get sh*t done!</strong></h2>
                <h4 class="_font-colour__grey-dark">or, you can just wait and achieve nothing.</h4>
            </div>
        </div>
        <hr />
        <!-- <p><strong>12 awesome perks that come with everything we do:</strong></p> -->
        <ul>
            <li>
                <p>Unlimited requests</p>
            </li>
            <li>
                <p>Unlimited revisions</p>
            </li>
            <li>
                <p>FAST turnaround</p>
            </li>
            <li>
                <p>Proactive 1:1 comms</p>
            </li>
            <li>
                <p>Minimal meetings*</p>
            </li>
            <li>
                <p>Fixed monthly fee</p>
            </li>
            <li>
                <p>Cancel anytime</p>
            </li>
            <li>
                <p>Pause anytime</p>
            </li>
            <li>
                <p>No contracts</p>
            </li>
            <li>
                <p>High quality & professional design</p>
            </li>
            <li>
                <p>Senior experience & consultation</p>
            </li>
            <li>
                <p>Plan, manage & collab in Wrike</p>
            </li>
        </ul>
        <p class="_font-size__secondary _font-colour__grey-light">* We know there's a need for a video call or two, depending on request complexity.</p>
        <hr />
        <p><strong class="_font-colour__orange-primary">Not convinced?</strong> Reach out to us through <a data-cabin-event="Subscribe / Email" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#100;&#114;&#105;&#112;&#102;&#101;&#100;&#046;&#100;&#101;&#115;&#105;&#103;&#110;" class="__button -white" title="Contact <?= $globalTitle; ?> to enquire about design subscriptions and more">email</a> or <a data-cabin-event="Subscribe / Book Call" href="https://dripfed.design/book" target="_blank" class="__button -white" title="Book an introduction call with <?= $globalTitle; ?>, find out about our design subscriptions and more" hreflang="en">book a 20 min intro call</a>.</p>
    </div>
    <div class="__plans">
        <div class="__monthly _text-align__center _padding-all__small-default _background-solid__white _border-radius__default _margin-bottom__default">
            <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-h__center -column-gap__small _margin-top-bottom__small">
                <img loading="lazy" src="/dist/images/icon/icon-design-ani.gif" class="_image__circle -border-green" alt="Request designs with <?= $globalTitle; ?>" width="80px" height="80px" />
                <div class="__titles _text-align__left">
                    <h3>Unlimited Design</h3>
                    <? functionRemainingSpots($remainingSpotsDesign); ?>
                </div>
            </div>
            <p>Start your design journey with our flexible monthly design subscription. Perfect for all your design only projects and tasks.</p>
            <h2 class="_margin-bottom__small">£4,480 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/per month<sup>*</sup></span></h2>
            <div class="<?= $globalPrefix; ?>-button-container">
                <?
                if ($remainingSpotsDesign === 0) {
                    echo '
                            <a data-cabin-event="Waiting List / Design" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide" title="Join our unlimited design subscription waiting list today"  target="_blank">Join waiting list</a>
                        ';
                } else {
                    echo '
                            <a data-cabin-event="Subscribe / Design" href="https://buy.stripe.com/fZeaFybNN2ZEgco008" class="__button -orange -wide" title="Start your monthly unlimited design subscription today">Get started now</a>
                        ';
                }
                ?>
            </div>
        </div>
        <div class="__quarterly _text-align__center _padding-all__small-default _background-solid__white _border-radius__default">
            <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-h__center -column-gap__small _margin-top-bottom__small">
                <img loading="lazy" src="/dist/images/icon/icon-plus-ani.gif" class="_image__circle -border-aqua" alt="Request designs with <?= $globalTitle; ?>" width="80px" height="80px" />
                <div class="__titles _text-align__left">
                    <h3>Unlimited Plus+</h3>
                    <? functionRemainingSpots($remainingSpotsPlus); ?>
                </div>
            </div>
            <p>Maximise ROI with a combined design & build subscription. The ideal choice for your design projects and tasks, that also need to be built.</p>
            <h2 class="_margin-bottom__small">£13,440 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/per month<sup>*</sup></span></h2>
            <div class="<?= $globalPrefix; ?>-button-container">
                <?
                if ($remainingSpotsPlus === 0) {
                    echo '
                            <a data-cabin-event="Waiting List / Plus" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide" title="Join our unlimited design subscription waiting list today" target="_blank">Join waiting list</a>
                        ';
                } else {
                    echo '
                            <a data-cabin-event="Subscribe / Plus" href="https://buy.stripe.com/bIYbJC9FFas69O0aEL" class="__button -orange -wide" title="Start your quarterly unlimited design subscription today">Get started now</a>
                        ';
                }
                ?>
            </div>
        </div>
        <div class="__terms">
            <p class="_font-size__secondary _font-colour__grey-light _text-align__center">* Cancellations take effect at the end of the month. Pause is immediate, with a limit of 2 months maximum. No refunds or returns policy applies.
        </div>
        </p>
    </div>
</section>