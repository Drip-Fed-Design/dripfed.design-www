import React from "react";

import Container from "./container";
import * as styles from "./footer.module.css";

const Footer = () => (
  <Container as="footer">
    <div className={styles.container}>
      <p>
        Made with <i class="_icon -heart">❤️</i> from our HQ in Surrey, England.
      </p>
      <p class="_font-size__secondary">
        © 2023 Drip Fed Ltd. Company Number: 14871237
      </p>
    </div>
  </Container>
);

export default Footer;
