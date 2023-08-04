import React from "react";

const Navigation = () => (
  <header
    role="navigation"
    class="dfd-header-container _max-width__1280"
    aria-label="Main"
  >
    <div class="dfd-grid-container -column__min-full -column-v__center">
      <div class=" __logo">
        <a
          data-cabin-event="Header / Logo"
          href="https://dripfed.design/blog/"
          title="Return to Drip Fed Design blog home"
        >
          <img
            src="https://dripfed.design/dist/images/brand/brand-dripfed-design-logo-full.svg"
            alt="Drip Fed Design Blog"
            width="309px"
            height="130px"
          />
        </a>
      </div>
      <nav class="__nav">
        <div class="dfd-nav-container">
          <div class="dfd-grid-container -column__half-min -column-h__right -column-v__center -column-gap__default">
            <ul class="__links">
              <li>
                <a
                  data-cabin-event="Header / Get Started"
                  href="https://dripfed.design/#anchor-gettingstarted"
                  title="Scale your business with a simple design subscription"
                >
                  Scale your business<i class="_icon -arrow__r"></i>
                </a>
              </li>
            </ul>
            <div class="__cta dfd-button-container">
              <a
                data-cabin-event="Header / Plans"
                href="https://dripfed.design/#anchor-designplans"
                class="__button -orange"
                title="Find a design subscription that suits you"
              >
                See your design plans
              </a>
              <a
                data-cabin-event="Header / Book Call"
                href="https://dripfed.design/book"
                target="_blank"
                rel="noreferrer"
                class="__button -white"
                title="Book an introduction call with Drip Fed Design, find out about our design subscriptions and more"
              >
                Book a call
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
);

export default Navigation;
