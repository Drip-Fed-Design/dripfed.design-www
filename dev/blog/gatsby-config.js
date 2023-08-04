require("dotenv").config({
  path: `.env.${process.env.NODE_ENV}`,
});

module.exports = {
  pathPrefix: "blog/",
  assetPrefix: "",
  siteMetadata: {
    title:
      "Digital design, marketing & dev blog by Drip Fed Design, a design subscription agency",
    description:
      "Sharing our knowledge expertise in quality digital design and marketing, web development. Providing value, with commitment, personality, lower costs and less bureaucracy.",
  },
  plugins: [
    "gatsby-transformer-sharp",
    "gatsby-plugin-react-helmet",
    "gatsby-plugin-sharp",
    "gatsby-plugin-image",
    {
      resolve: "gatsby-source-contentful",
      options: {
        spaceId: process.env.CONTENTFUL_SPACE_ID,
        accessToken: process.env.CONTENTFUL_ACCESS_TOKEN,
        host: process.env.CONTENTFUL_HOST,
      },
    },
  ],
};
