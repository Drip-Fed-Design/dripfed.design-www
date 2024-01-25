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
          data-cabin-event="Blog / Header / Logo"
          href="https://dripfed.design/blog"
          title="Return to Drip Fed Design blog home"
        >
          <img
            src="https://dripfed.design/dist/images/brand/brand-dripfed-design-logo-full.svg"
            alt="Drip Fed Design Blog"
            width="240"
            height="130"
          />
        </a>
      </div>
      <nav class="__nav">
        <div class="dfd-nav-container">
          <div class="dfd-grid-container -column__half-min -column-h__right -column-v__center -column-gap__default">
            <ul class="__links">
              <li>
                <a
                  data-cabin-event="Blog / Header / Return"
                  href="https://dripfed.design/#anchor-gettingstarted"
                  title="Return to Drip Fed Design"
                >
                  Return to Drip Fed Design<i class="_icon -arrow__r"></i>
                </a>
              </li>
            </ul>
            <div class="__cta dfd-button-container">
              <a
                data-cabin-event="Blog / Header / All Posts"
                href="https://dripfed.design/blog"
                class="__button -orange"
                title="See all Drip Fed Design latest updates and posts"
              >
                View all latest posts
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
);

export default Navigation;
