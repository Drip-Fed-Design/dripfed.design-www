import React from "react";
import { Link, graphql } from "gatsby";
import get from "lodash/get";
import { renderRichText } from "gatsby-source-contentful/rich-text";
import { documentToPlainTextString } from "@contentful/rich-text-plain-text-renderer";
import { BLOCKS } from "@contentful/rich-text-types";
import { GatsbyImage, getImage } from "gatsby-plugin-image";
import readingTime from "reading-time";

import Seo from "../components/seo";
import Layout from "../components/layout";
import Hero from "../components/hero";
import Tags from "../components/tags";

class BlogPostTemplate extends React.Component {
  render() {
    const post = get(this.props, "data.contentfulBlogPost");
    const previous = get(this.props, "data.previous");
    const next = get(this.props, "data.next");
    const plainTextDescription = documentToPlainTextString(
      JSON.parse(post.description.raw)
    );
    const plainTextBody = documentToPlainTextString(JSON.parse(post.body.raw));
    const { minutes: timeToRead } = readingTime(plainTextBody);

    const options = {
      renderNode: {
        [BLOCKS.EMBEDDED_ASSET]: (node) => {
          const { gatsbyImage, description } = node.data.target;
          return (
            <GatsbyImage image={getImage(gatsbyImage)} alt={description} />
          );
        },
      },
    };

    return (
      <Layout location={this.props.location}>
        <section class="__article">
          <Seo
            title={post.title}
            description={plainTextDescription}
            image={`http:${post.heroImage.resize.src}`}
          />
          <Hero
            image={post.heroImage?.gatsbyImage}
            title={post.title}
            content={post.description}
          />
          <div class="__body _max-width__800 _padding-top__large">
            <span class="__spec">
              <strong>{timeToRead} minute read </strong> &#183;{" "}
              <time dateTime={post.rawDate}>{post.publishDate}</time> &#183;
              Post by {post.author?.name}
            </span>
            <div>
              <div>{post.body?.raw && renderRichText(post.body, options)}</div>
              <Tags tags={post.tags} />
              {(previous || next) && (
                <div class="dfd-button-container dfd-grid-container -column__half -column-h__center _padding-top__large">
                  {previous && (
                    <Link
                      to={`/blog/${previous.slug}`}
                      rel="prev"
                      class="__button -white"
                      data-cabin-event="Blog / Post / Prev"
                    >
                      ← {previous.title}
                    </Link>
                  )}
                  {next && (
                    <Link
                      to={`/blog/${next.slug}`}
                      rel="next"
                      class="__button -white"
                      data-cabin-event="Blog / Post / Next"
                    >
                      {next.title} →
                    </Link>
                  )}
                </div>
              )}
            </div>
          </div>
        </section>
      </Layout>
    );
  }
}

export default BlogPostTemplate;

export const pageQuery = graphql`
  query BlogPostBySlug(
    $slug: String!
    $previousPostSlug: String
    $nextPostSlug: String
  ) {
    contentfulBlogPost(slug: { eq: $slug }) {
      slug
      title
      author {
        name
      }
      publishDate(formatString: "MMMM Do, YYYY")
      rawDate: publishDate
      heroImage {
        gatsbyImage(layout: FULL_WIDTH, placeholder: BLURRED, width: 1280)
        resize(height: 630, width: 1200) {
          src
        }
      }
      body {
        raw
      }
      tags
      description {
        raw
      }
    }
    previous: contentfulBlogPost(slug: { eq: $previousPostSlug }) {
      slug
      title
    }
    next: contentfulBlogPost(slug: { eq: $nextPostSlug }) {
      slug
      title
    }
  }
`;
