import React from "react";
import { GatsbyImage } from "gatsby-plugin-image";
import { renderRichText } from "gatsby-source-contentful/rich-text";

const Hero = ({ image, title, content }) => (
  <div class="__intro">
    {image && <GatsbyImage alt={title} image={image} />}
    <div class="__title">
      <h1>{title}</h1>
      {content && <div>{renderRichText(content)}</div>}
    </div>
  </div>
);

export default Hero;
