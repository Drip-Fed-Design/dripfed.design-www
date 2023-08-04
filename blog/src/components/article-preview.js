import React from "react";
import { Link } from "gatsby";
import { GatsbyImage } from "gatsby-plugin-image";
import { renderRichText } from "gatsby-source-contentful/rich-text";

import Container from "./container";
import Tags from "./tags";

const ArticlePreview = ({ posts }) => {
  if (!posts) return null;
  if (!Array.isArray(posts)) return null;

  return (
    <Container>
      <section class="__listing">
        <ul class="dfd-grid-container -column__third -column-gap__default -column-row__default">
          {posts.map((post) => {
            return (
              <li key={post.slug}>
                <Link to={post.slug}>
                  <GatsbyImage alt="" image={post.heroImage.gatsbyImage} />
                  <h2>{post.title}</h2>
                </Link>
                <div class="__desc">
                  {post.description?.raw && renderRichText(post.description)}
                </div>
                <div class="__datetag dfd-grid-container -column__half">
                  <small class="__date">{post.publishDate}</small>
                  <Tags tags={post.tags} />
                </div>
              </li>
            );
          })}
        </ul>
      </section>
    </Container>
  );
};

export default ArticlePreview;
