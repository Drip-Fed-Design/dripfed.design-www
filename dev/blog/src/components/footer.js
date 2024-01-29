import React from "react";

import Container from "./container";

const Footer = () => (
  <Container as="footer">
    <section class="dfd-cta-container _padding-top-bottom__xlarge _background-solid__black">
      <div class="dfd-grid-container -column__third-cta -column-gap__xlarge">
        <div class="_pattern -long-l"></div>
        <div class="_padding-top-bottom__default">
          <h4 class="_text-align__center _padding-bottom__small">
            Start solving design problems & <strong>SAVE £24,480</strong>
            <sup class="_font-colour__grey-default">*</sup>
          </h4>

          <div class="dfd-button-container _text-align__center">
            <a
              data-cabin-event="Blog / CTA Lower / Plans"
              href="https://dripfed.design/#anchor-designplans"
              class="__button -green"
              title="Find a design subscription that suits you"
            >
              Sign up in just 60 seconds
            </a>
            <a
              data-cabin-event="Blog / CTA Lower / Book Call"
              href="https://dripfed.design/book"
              target="_blank"
              rel="noreferrer"
              class="__button -white"
              title="Book an introduction call with Drip Fed Design, find out about our design subscriptions and more"
            >
              Book a call
            </a>
          </div>
          <p class="_text-align__center _font-size__secondary _font-colour__grey-default">
            *compared to the average salary of a full-time senior product
            designer.
          </p>
        </div>
        <div class="_pattern -long-r"></div>
      </div>
    </section>
    <footer
      as="footer"
      class="dfd-footer-container _max-width__1280 _padding-top-bottom__xlarge"
    >
      <div class="dfd-grid-container -column__half">
        <div class="__logo">
          <a
            data-cabin-event="Blog / Footer / Logo"
            href="https://dripfed.design/"
            title="Digital design micro-agency with a design subscription model. Providing valuable digital design, with commitment and personality, lower costs and less bureaucracy."
          >
            <img
              loading="lazy"
              src="https://dripfed.design/dist/images/brand/brand-dripfed-design-logo-full.svg"
              alt="Drip Fed Design brand logo"
              width="240"
              height="130"
            />
          </a>
        </div>
        <nav class="__nav">
          <div class="dfd-grid-container -column__half">
            <ul class="_text-align__right">
              <li>
                <a
                  data-cabin-event="Blog / Footer / Return"
                  href="https://dripfed.design/"
                  class="triggerForm"
                  title="Digital design micro-agency with a design subscription model."
                >
                  Design Subscription<i class="_icon -arrow__r"></i>
                </a>
              </li>
              <li>
                <a
                  data-cabin-event="Blog / Footer / Get Started"
                  href="https://dripfed.design/#anchor-gettingstarted"
                  title="Subscribing to Drip Fed Design is easy"
                >
                  Getting Started<i class="_icon -arrow__r"></i>
                </a>
              </li>
              <li>
                <a
                  data-cabin-event="Blog / Footer / Work"
                  href="https://dripfed.design/#latest-work"
                  title="Take a look at our latest work and projects"
                >
                  Latest Work<i class="_icon -arrow__r"></i>
                </a>
              </li>
              <li>
                <a
                  data-cabin-event="Blog / Footer / Plans"
                  href="https://dripfed.design/#anchor-designplans"
                  title="Find a design subscription that suits you"
                >
                  Plans & Pricing<i class="_icon -arrow__r"></i>
                </a>
              </li>
              <li>
                <a
                  data-cabin-event="Blog / Footer / Stripe"
                  href="https://billing.stripe.com/p/login/7sI9AK3ftfcraNq288"
                  target="_blank"
                  rel="noreferrer"
                  title="Manage, pause or cancel your design subscription"
                >
                  Billing Portal<i class="_icon -arrow__r"></i>
                </a>
              </li>
            </ul>
            <div class="_text-align__right">
              <div class="__cta dfd-button-container">
                <a
                  data-cabin-event="Blog / CTA Footer / Wrike"
                  href="https://login.wrike.com/login/"
                  target="_blank"
                  rel="noreferrer"
                  class="__button -white"
                  title="Log in to submit, manage and collaborate design requests"
                >
                  Log In
                </a>
              </div>
              <ul class="__legal">
                <li>
                  <a
                    data-cabin-event="Blog / Footer / Terms Conditions"
                    href="https://dripfed.design/termsconditions"
                    title="Terms and Conditions for Drip Fed Design Subscription"
                  >
                    Terms & Conditions
                  </a>
                </li>
                <li>
                  <a
                    data-cabin-event="Blog / Footer / Terms"
                    href="https://dripfed.design/terms"
                    title="Terms of Use for Drip Fed Design"
                  >
                    Terms of Use
                  </a>
                </li>
                <li>
                  <a
                    data-cabin-event="Blog / Footer / Privacy"
                    href="https://dripfed.design/privacy"
                    title="Privacy policy for Drip Fed Design"
                  >
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="__copyright">
        <p>
          Made with <i class="_icon -heart"></i> from our HQ in Surrey, England.
        </p>
        <p class="_font-size__secondary">
          © 2024 Drip Fed Ltd. Company Number: 14871237
        </p>
      </div>
    </footer>
  </Container>
);

export default Footer;
