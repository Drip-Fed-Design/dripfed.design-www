<?
// Enable export as flat file
$htmlExporting = false;

// Exporting as flat file
if ($htmlExporting === true) {
    ob_start();
}

require(__DIR__ . '/inc/header.global.php');
?>
<div class="<?= $globalPrefix; ?>-body-container">
    <section class="<?= $globalPrefix; ?>-intro-container _max-width__1000 _padding-top-bottom__large">
        <h1 class="_text-align__center"><span class="_word-wrap">Solve problems</span> with a best-in-class<br /> <span class="_word-under">unlimited product design</span> subscription<span class="_word-stop"></span></h1>
        <p class="_text-align__center">We provide high-end digital product design solutions, with a ton of commitment and personality, lower costs and less bureaucracy.</p>
        <p class="_text-align__center _font-size__secondary _font-colour__orange-primary">Remove Project Blockers - Fixed Monthly Cost - Cancel Anytime - No Contracts - No Hourly Rates - Design as a Service</p>
    </section>
    <? require(__DIR__ . '/inc/work.global.php'); ?>
    <section class="<?= $globalPrefix; ?>-gettingstarted-container _max-width__1000 _padding-top-bottom__large">
        <div class="_padding-bottom__large" id="anchor-gettingstarted">
            <h3 class="_text-align__center _padding-bottom__small">Get started in just 60 seconds</h3>
            <div class="<?= $globalPrefix; ?>-grid-container -column__third -column-gap__large">
                <div class="_text-align__center">
                    <img loading="lazy" src="/dist/images/icon/icon-subscribe-ani.gif" class="_image__circle -border-orange _margin-top-bottom__small" alt="Choose a <?= $globalTitle; ?> unlimited design subscription" width="100px" height="100px" />
                    <h4><strong>1.</strong> Choose a <a data-cabin-event="Get Started / Plans" href="#anchor-designplans" title="Choose a unlimited design subscription for you startup and business">design subscription</a> that suits you.</h4>
                    <span class="_split -orange"></span>
                </div>
                <div class="_text-align__center">
                    <img loading="lazy" src="/dist/images/icon/icon-email-ani.gif" class="_image__circle -border-orange _margin-top-bottom__small" alt="Introduction to <?= $globalTitle; ?> unlimited design" width="100px" height="100px" />
                    <h4><strong>2.</strong> Receive a confirmation & intro emails quickly.</h4>
                    <span class="_split -orange"></span>
                </div>
                <div class="_text-align__center">
                    <img loading="lazy" src="/dist/images/icon/icon-request-ani.gif" class="_image__circle -border-orange _margin-top-bottom__small" alt="Unlimited design requests with <?= $globalTitle; ?>" width="100px" height="100px" />
                    <h4><strong>3.</strong> Submit & collab on design requests via Wrike.</h4>
                    <span class="_split -orange"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-logos-container _max-width__1640 _margin-bottom__large">
        <div class="_background-solid__white _padding-all__small-default _border-radius__default">
            <p class="_font-colour__grey-dark _text-align__center _font-size__secondary">Work with the experienced digital product designer who's worked with a diverse variety of startups and enterprises.</p>
            <div class="__logos">
                <img loading="lazy" src="/dist/images/brand/brand-tp-lucozade.png" title="Lucozade brand designer" alt="Lucozade" width="125px" height="35.47px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-hasbro.png" title="Hasbro brand designer" alt="Hasbro" width="80px" height="80px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-ribena.png" title="Ribena brand designer" alt="Ribena" width="84.86px" height="60.6px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-kyocera.png" title="Kyocera brand designer" alt="Kyocera" width="150px" height="40.42px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-ucccoffee.png" title="UCC Coffee brand designer" alt="UCC Coffee" width="90px" height="41.84px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-xbox.png" title="Xbox brand designer" alt="Xbox" width="135px" height="40.09px" />
                <img loading="lazy" src="/dist/images/brand/brand-tp-suntory.png" title="Suntory brand designer" alt="Suntory" width="130px" height="17.69px" />
            </div>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-cta-container _padding-top-bottom__xlarge _background-solid__black">
        <div class="<?= $globalPrefix; ?>-grid-container -column__third-cta -column-gap__xlarge">
            <div class="_pattern -long-l"></div>
            <div class="_padding-top-bottom__default">
                <h4 class="_text-align__center _padding-bottom__small">Start solving design problems & <strong>SAVE £24,480</strong><sup class="_font-colour__grey-default">*</sup></h4>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <a data-cabin-event="CTA Upper / Plans" href="#anchor-designplans" class="__button -green" title="Find a unlimited design subscription that suits you">Sign up in just 60 seconds</a>
                    <a data-cabin-event="CTA Upper / Book Call" href="https://dripfed.design/book" target="_blank" class="__button -white" title="Book an introduction call with <?= $globalTitle; ?>, find out about our unlimited design subscription and more">Book a call</a>
                </div>
                <p class="_text-align__center _font-size__secondary _font-colour__grey-default">*compared to the average salary of a full-time senior product designer.</p>
            </div>
            <div class="_pattern -long-r"></div>
        </div>
    </section>
    <? require(__DIR__ . '/inc/testimonial.global.php'); ?>
    <section class="<?= $globalPrefix; ?>-gettingstarted-container _max-width__1000 _padding-top-bottom__large">
        <div class="<?= $globalPrefix; ?>-grid-container -column__half -column-gap__xlarge _padding-top__large">
            <div class="__how _text-align__center">
                <img src="/dist/images/icon/icon-how.svg" alt="How <?= $globalTitle; ?> subscription works" width="360px" height="220px" />
                <h2>HOW does it work?</h2>
                <p>Drip Fed Design works in a similar way to a Netflix or Apple TV+ subscription. Subscribe for a single fixed monthly fee and consume as much as you can.</p>
                <p> This enables any business, whatever the size, to access an unlimited drip of quality design, with each request completed one by one, in date ascending order (oldest first).</p>
                <p>E.g. Startup need branding or MVP. Enterprise running a marketing campaign over the next six-month...</p>
                <p>The easy opt-in which supports the scale of your business. A design as a service subscription make everything so much simpler.</p>
            </div>
            <div class="__why _text-align__center">
                <img src="/dist/images/icon/icon-why.svg" alt="Why subscribe with <?= $globalTitle; ?>" width="360px" height="220px" />
                <h2>WHY a subscription?</h2>
                <p>Drip Fed Design holds a unique position. We bridge the gap between a freelancer and a fixed-term contractor with open ended unlimited design subscription plans.</p>
                <p>Our plans allow the ease and flexibility of a freelancer, but without the complex lock-in which comes with fixed-term contracts and permanent employment. You'll get the best of both worlds.</p>
                <p>Cancel or pause any time, no long-term contracts to lock you in. Simple, straightforward, and fair, just great design delivered as it should be.</p>
                <div class="<?= $globalPrefix; ?>-button-container _text-align__center">
                    <a data-cabin-event="Content / Learn More" href="https://dripfed.design/blog/design-subscription-what-it-is-how-it-works-is-it-the-future/" class="__button -green" title="What is a unlimited design subscriptions and design as a service, and how does a design subscription work" target="_blank">Learn about our subscription</a>
                </div>
            </div>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-services-container _max-width__1280 _padding-top-bottom__large _margin-top-bottom__xlarge">
        <div class="__copy _padding-bottom__large _text-align__center _max-width__800">
            <h2>Let's get creative and work on ideas together.</h2>
            <p>We have over 14 years of experience and knowledge in our industry, spanning across both public and private sectors. Providing nothing but quality in the design and build of websites, apps, brands, digital competitions, and so much more. You're definitely in good hands!</p>
        </div>
        <div class="__list <?= $globalPrefix; ?>-grid-container -column__third">
            <ul>
                <li>
                    <h4>Websites</h4>
                </li>
                <li>
                    <h4>Mobile Apps</h4>
                </li>
                <li>
                    <h4>Digital Design Systems</h4>
                </li>
                <li>
                    <h4>Wireframes</h4>
                </li>
                <li>
                    <h4>Prototyping</h4>
                </li>
                <li>
                    <h4>Branding & Guidelines</h4>
                </li>
                <li>
                    <h4>Logos</h4>
                </li>
                <li>
                    <h4>Email Campaigns</h4>
                </li>
            </ul>
            <ul>
                <li>
                    <h4>Digital Marketing</h4>
                </li>
                <li>
                    <h4>Digital Competitions</h4>
                </li>
                <li>
                    <h4>Product Design</h4>
                </li>
                <li>
                    <h4>Software as a Service (SaaS)</h4>
                </li>
                <li>
                    <h4>Infographics</h4>
                </li>
                <li>
                    <h4>Powerpoint Templates</h4>
                </li>
                <li>
                    <h4>Pitch Decks</h4>
                </li>
                <li>
                    <h4>Social Media Graphics</h4>
                </li>
            </ul>
            <ul>
                <li>
                    <h4>Dashboards</h4>
                </li>
                <li>
                    <h4>Planning & Strategy</h4>
                </li>
                <li>
                    <h4>Landing Pages</h4>
                </li>
                <li>
                    <h4>eCommerce</h4>
                </li>
                <li>
                    <h4>Shopify & CMS</h4>
                </li>
                <li>
                    <h4>Icons</h4>
                </li>
                <li>
                    <h4>SWOT Analysis</h4>
                </li>
                <li>
                    <h4>Print Material</h4>
                </li>
            </ul>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-plans-container _max-width__1280 _padding-top-bottom__xlarge _margin-top-bottom__xlarge" id="anchor-designplans">
        <div class="__details _padding-all__small-default _background-solid__white _border-radius__default">
            <h2>Unlock unlimited product digital design in 60 seconds.</h2>
            <p>We've worked with startups in launching best-in-class digital products, and enterprises on large scale design systems. It's reassuring to know there is a wealth of knowledge and experience all within a simple design subscription.</p>
            <hr />
            <p><strong>12 awesome perks that come with our best-in-class design subscription plans:</strong></p>
            <ul>
                <li>
                    <p>Unlimited requests</p>
                </li>
                <li>
                    <p>Unlimited brands</p>
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
                    <p>Unlimited revisions</p>
                </li>
                <li>
                    <p>No meetings*</p>
                </li>
                <li>
                    <p>1:1 async comms</p>
                </li>
                <li>
                    <p>No contracts</p>
                </li>
                <li>
                    <p>High quality & professional design</p>
                </li>
                <li>
                    <p>Senior experience, advice & consultation</p>
                </li>
                <li>
                    <p>Wrike to plan, manage & collaborate</p>
                </li>
            </ul>
            <p class="_font-size__secondary _font-colour__grey-light">* There may be the need for a video call or two, depending on request complexity.</p>
            <hr />
            <p><strong class="_font-colour__orange-primary">Not convinced?</strong> Learn more about how Drip Fed Design works and how it can support your design needs, <a data-cabin-event="Subscribe / Book Call" href="https://dripfed.design/book" target="_blank" class="__button -white" title="Book an introduction call with <?= $globalTitle; ?>, find out about our design subscriptions and more">book a 20 min intro call</a>.</p>
        </div>
        <div class="__plans">
            <div class="__monthly _text-align__center _padding-all__small-default _background-solid__white _border-radius__default _margin-bottom__default">
                <img loading="lazy" src="/dist/images/icon/icon-abacus-ani.gif" class="_image__circle -border-green _margin-top-bottom__small" alt="Request designs with <?= $globalTitle; ?>" width="100px" height="100px" />
                <h3>Monthly Cycle</h3>
                <? require(__DIR__ . '/inc/spots.global.php'); ?>
                <p>Start your design journey with our popular, flexible monthly design subscription plan. Perfect for all your short-term design projects and tasks.</p>
                <h2 class="_margin-bottom__small">£3,960 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/per month**</span></h2>
                <div class="<?= $globalPrefix; ?>-button-container">
                    <?
                    if ($remainingSpots === 0) {
                        echo '
                            <a data-cabin-event="Waiting List / Monthly" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide" title="Join our unlimited design subscription waiting list today"  target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Subscribe / Monthly" href="https://buy.stripe.com/cN2fZS2ddcAe7FS7sv" class="__button -orange -wide" title="Start your monthly unlimited design subscription today">Get started now</a>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="__quarterly _text-align__center _padding-all__small-default _background-solid__white _border-radius__default">
                <h4 class="_font-colour__red-notification"><strong>SAVE £594 per month</strong></h4>
                <h3>Quarterly Cycle</h3>
                <p>Maximise value and ROI with a quarterly design subscription plan. The ideal choice for your longer ongoing design projects and tasks.</p>
                <h2 class="_margin-bottom__small">£3,366 <span class="_font-colour__black-light _font-style__italic _font-size__secondary">/per month***</span></h2>
                <div class="<?= $globalPrefix; ?>-button-container">
                    <?
                    if ($remainingSpots === 0) {
                        echo '
                            <a data-cabin-event="Waiting List / Quarterly" href="https://www.wrike.com/form/eyJhY2NvdW50SWQiOjYxNjA4MDIsInRhc2tGb3JtSWQiOjEwOTgzNTJ9CTQ4NDc2MDQ4OTQ3NjIJOGJkYmVlZTU3ZmJmN2ZhZWMyNGNlNTk2MGI5YTUwYzljZDBlNTk0MWRkZGI0NzEwZWZlMGY0NjY4YzJlOTNlOQ==" class="__button -orange -wide" title="Join our unlimited design subscription waiting list today" target="_blank">Join waiting list</a>
                        ';
                    } else {
                        echo '
                            <a data-cabin-event="Subscribe / Quarterly" href="https://buy.stripe.com/3cs14Y7xx43I6BO148" class="__button -orange -wide" title="Start your quarterly unlimited design subscription today">Save 15% Now</a>
                        ';
                    }
                    ?>
                </div>
                <p class="_font-size__secondary _font-colour__grey-light">** Cancellations take effect after remainder of full cycle. Pause is immediate.</p>
            </div>
        </div>
    </section>
    <section class="<?= $globalPrefix; ?>-faq-container _background-solid__white _padding-top-bottom__xlarge">
        <div class="_max-width__1280">
            <h3 class="_font-colour__grey-dark _margin-bottom__large">Frequently <br />asked questions.</h3>
            <div class="<?= $globalPrefix; ?>-articles-container _margin-bottom__default">
                <div class="<?= $globalPrefix; ?>-grid-container -column-h__center">
                    <article id="just-employ-a-designer">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Why wouldn't I just employ a designer?</h4>
                            <a data-cabin-event="FAQ / Just Employee a Designer" href="#just-employ-a-designer" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>You could... if it's the right fit for you.</p>
                            <p>But before jumping on that ship, consider the time and money you'll spent, recruiting in a hope to find the right designer, with experience.</p>
                            <p>Also weigh up the average salary of that full-time senior product designer, currently excess of £72k. Then stacked on top of that, you'll have pensions, bonuses, company NI, and other benefits (e.g. company car, gym membership, healthcare, etc).</p>
                            <p>In comparison, our monthly subscription would cost you at most £47,520 per year- that's an instant saving of £24,480!</p>
                            <p>And you're not even locked-in... SH*T!!</p>
                            <p>Finally, with a cherry on top, you'll have an added load of keeping that employee busy to gain your ROI. Unable to put their wage on pause for a month or two if things get a little quiet- unlike our design subscription.</p>
                            <p>We're here for individuals, startups, enterprises, and teams with a continuing need for design and growth.</p>
                            <p>We've expanded more on our design subscription within our blog, covering <a data-cabin-event="FAQ / Learn More" href="https://dripfed.design/blog/design-subscription-what-it-is-how-it-works-is-it-the-future/" class="__button -green" title="What is a design subscriptions and how does a design subscription work" target="_blank">what is a design subscription, how it works, and the benefits</a>.</p>
                        </div>
                    </article>
                    <article id="how-quick-will-request-be-completed">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>How quick will my requests be completed?</h4>
                            <a data-cabin-event="FAQ / How Quick to Complete Requests" href="#how-quick-will-request-be-completed" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Honestly, it depends on the complexity of the task.</p>
                            <p>When a request has been submitted, we will review it within an a few hours after receiving, give it a complexity score and assign a realistic deadline.</p>
                            <p>Most common requests are completed within 3 working days, or less.</p>
                            <p>More complex task or project requests can take slightly longer to receive an initial draft. But generally this is within 7 working days. Our general complexity scoring levels are as follows;</p>
                            <p><strong>Low:</strong> Within 3 working days, or less.</p>
                            <p><strong>Medium:</strong> Within 5 working days, or less.</p>
                            <p><strong>High:</strong> Within 10 working days, or less.</p>
                            <p>Everything we create will be original and of very high quality, created from a blank canvas with all your requirements and goals in mind.</p>
                            <p>Furthermore, don't forget you'll be provided with progress updates throughout every task and project stage, with potential realtime design access.</p>
                        </div>
                    </article>
                    <article id="limit-on-requests">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Is there a limit on requests?</h4>
                            <a data-cabin-event="FAQ / Request Limits" href="#limit-on-requests" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>No. Once you've subscribed, you can submit as many design requests as you'd like. Each request will be delivered one by one.</p>
                        </div>
                    </article>
                    <article id="manage-my-subscription">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>How do I manage my subscription?</h4>
                            <a data-cabin-event="FAQ / How to Manage Subscription" href="#manage-my-subscription" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>It's easy. We'll provide you access to a billing portal, powered by Stripe- for reassurance that everything is safe and secure!</p>
                            <p>Within the portal, you'll be able to pause, cancel or upgrade your subscription at any time. This means if you enter a dry spell, you can pause your subscription until things pick up again. Super easy!</p>
                            <p>It's worth remembering subscriptions are paid upfront. Therefore, if you pause or cancel 10 days after your monthly renewal, you'll still receive the same quality service for the remainder of the current cycle. The service will switch over to a paused state at the end of the current cycle.</p>
                            <p>Please also be conscious that an active subscription is required for us to work through your requests. For example, if your subscription cycle ends while you still have requests in queue, these requests will be paused.</p>
                        </div>
                    </article>
                    <article id="pause-or-cancel-my-subscription">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>When should I use pause vs. cancel with my subscription?</h4>
                            <a data-cabin-event="FAQ / Pause vs Cancel Subscription" href="#pause-or-cancel-my-subscription" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>To be honest, it's totally up to you.</p>
                            <p>But for guidance, some clients pause subscriptions ahead of quiet periods or project budgets being confirmed. Pauses period tend to only last for a month or two.</p>
                            <p>As for subscription cancellations, you should only proceed if you're certain our services are no longer required. If you decide to cancel, your Wrike setup and all contained data will be removed after 6 months from your date of cancellation.</p>
                        </div>
                    </article>
                    <article id="how-to-make-request">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>How do I make and submit a request?</h4>
                            <a data-cabin-event="FAQ / How to Make Request" href="#how-to-make-request" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Once you've subscribed, a Wrike setup will be automatically created for you. Instructions on how to access and submit requests will be included within your introduction email and Wrike.</p>
                            <p>Wrike will act as the central hub where everyone involved will record all requests and collaborations.</p>
                            <p>Wrike also supports an array of file formats, writing styles, and third-part connections. Therefore if you have a preferred format of submitting requests, we're open to the idea. Flexibility is nice, just as long as it's recorded and accessible within Wrike.</p>
                        </div>
                    </article>
                    <article id="what-to-expect-in-wrike">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>What should I expect when I receive my Wrike access?</h4>
                            <a data-cabin-event="FAQ / Expect in Wrike Access" href="#what-to-expect-in-wrike" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Wrike is a very simple and powerful project management platform, therefore has all the features to achieve great things!</p>
                            <p>You'll receive your own dedicated space within Wrike, which will have some pre-defined tools setup. These tools are;</p>
                            <p><strong>Request Table:</strong> This is a visual, Kanban-like space for adding and organising your design requests. These work request are then actioned, moving across the workflow columns.</p>
                            <p><strong>Message Board:</strong> A place to place announcements, pitch ideas, strategies, campaigns, etc- keeping comments and feedback on-topic.</p>
                            <p><strong>Docs & Files:</strong> This area can be found within the previously mentioned '01. Request Table' tool. It provides a birds eye view of all the attachments shared within all requests. Things such as brand guidelines, NDAs, copy, or photograph. A home for all kinds of documents, files, images, and spreadsheets- it makes everything so easy to find.</p>
                        </div>
                    </article>
                    <article id="dont-like-the-design">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>What happens if I don't like the design?</h4>
                            <a data-cabin-event="FAQ / If I Dont Like Design" href="#dont-like-the-design" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Then we'll continue to revise the design until you love it!</p>
                            <p>We're aiming for 100% satisfaction.</p>
                        </div>
                    </article>
                    <article id="any-refunds">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Are there any refunds?</h4>
                            <a data-cabin-event="FAQ / Any Refunds" href="#any-refunds" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Unfortunately not.</p>
                            <p>This is due to the high pressures we undertake to ensure the delivery of professional quality creative work and research, all delivered within a tight timeframe. Providing refunds would put us in a position where our skills and experience become uncompensated.</p>
                            <p>If you any reason you feel unsatisfied by our service, let us know so we can do our best to support.</p>
                        </div>
                    </article>
                    <article id="what-software-or-service-use">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>What software or services do you use?</h4>
                            <a data-cabin-event="FAQ / What Software Services" href="#what-software-or-service-use" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>We mainly spend out time using Figma for design work, GitHub/VS Code for committing our code, and Wrike for project management.</p>
                        </div>
                    </article>
                    <article id="will-pricing-change-or-additional-costs">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Will the pricing change or are there any additional costs?</h4>
                            <a data-cabin-event="FAQ / Price Changes or Additional Costs" href="#will-pricing-change-or-additional-costs" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Our subscription feature single fixed monthly fee. What you see is what you pay.</p>
                            <p>Although it is possible for additional costs to surface, but definitely not without written prior agreement. An example of an additional cost, could be the purchase of a third-party fonts, site hosting, and domain setup, etc.</p>
                        </div>
                    </article>
                    <article id="web-development-or-coding-included">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Is web development or coding included?</h4>
                            <a data-cabin-event="FAQ / Is Web Dev Included" href="#web-development-or-coding-included" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Unfortunately not.</p>
                            <p>As much as we love and have real passion for a full product lifecycle, the development stage tend to take around x5 the duration of design work. Therefore your request delivery timescales would be drastically increased.</p>
                            <p>Including coding or development within our subscription would simply not be logical.</p>
                            <p>But this does NOT mean we can't!</p>
                            <p>We'd love to bring your dev platform, website or mobile app to life, we just can't include that service within the subscription.</p>
                            <p>If this is something you're interested in, <a data-cabin-event="FAQ / Development" href="#home" class="triggerForm">reach out to us</a> and we can discuss this with you.</p>
                        </div>
                    </article>
                    <article id="whos-is-drip-fed-design">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__full-min">
                            <h4>Who's behind Drip Fed Design?</h4>
                            <a data-cabin-event="FAQ / Who runs Drip Fed" href="#whos-is-drip-fed-design" class="triggerFAQ"><img loading="lazy" src="/dist/images/icon/icon-chevron-orange.svg" title="Expand" alt="Expand" width="25px" height="20px" /></a>
                        </div>
                        <div class="__answer">
                            <p>Drip Fed is run and managed by Chris Watterston, a digital designer, developer and manager with over 14 years experience across a range of sectors and industries.</p>
                            <p>Throughout his career, Chris has worked as a freelancer, fixed-term contractor, and as a permanent employee. Noticing a gap and opportunity within the creative hiring market, Drip Fed Design was born!</p>
                            <p>Clients will be working directly with Chris, keeping everything simple and closely connected. This ensures you get the highest possible design quality, and service.</p>
                        </div>
                    </article>
                </div>
            </div>
            <p class="_font-colour__grey-dark"><strong>Still have unanswered questions?</strong><br />Reach out and send your question to us through our quick and simple <a data-cabin-event="FAQ / Unanswered" href="#home" class="triggerForm" title="Reach out to Drip Fed Design through our short and easy contact form">contact form</a>, we'll do our best to get back to you within 24 hours.</p>
        </div>
    </section>
</div>
<?

require(__DIR__ . '/inc/contact.global.php');
require(__DIR__ . '/inc/footer.global.php');

// Exporting as flat file
if ($htmlExporting === true) {
    $dripfedHTML = ob_get_contents();
    ob_end_clean();
    file_put_contents('./dist' . $_SERVER['PHP_SELF'], $dripfedHTML);
}
?>