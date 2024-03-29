import React from "react";
import Helmet from "react-helmet";

import "./global.css";
import Seo from "./seo";
import Navigation from "./navigation";
import Footer from "./footer";
class Template extends React.Component {
  render() {
    const { children } = this.props;

    return (
      <>
        <Helmet>
          <script
            async
            defer
            src="https://scripts.withcabin.com/hello.js"
          ></script>
        </Helmet>
        <Seo />
        <Navigation />
        <main class="dfd-blog-container _max-width__1280 _padding-top-bottom__xlarge">
          {children}
        </main>
        <Footer />
      </>
    );
  }
}

export default Template;
