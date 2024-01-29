/*! For license information please see component---src-templates-blog-post-js-1f600e497a6d57b312bd.js.LICENSE.txt */
"use strict";(self.webpackChunkcontentful_starter_gatsby_blog=self.webpackChunkcontentful_starter_gatsby_blog||[]).push([[989],{2924:function(e,t,n){var r="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:void 0!==n.g?n.g:"undefined"!=typeof self?self:{};function E(e){return e&&e.__esModule&&Object.prototype.hasOwnProperty.call(e,"default")?e.default:e}function L(e,t){return e(t={exports:{}},t.exports),t.exports}var o=L((function(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.BLOCKS=void 0,function(e){e.DOCUMENT="document",e.PARAGRAPH="paragraph",e.HEADING_1="heading-1",e.HEADING_2="heading-2",e.HEADING_3="heading-3",e.HEADING_4="heading-4",e.HEADING_5="heading-5",e.HEADING_6="heading-6",e.OL_LIST="ordered-list",e.UL_LIST="unordered-list",e.LIST_ITEM="list-item",e.HR="hr",e.QUOTE="blockquote",e.EMBEDDED_ENTRY="embedded-entry-block",e.EMBEDDED_ASSET="embedded-asset-block",e.TABLE="table",e.TABLE_ROW="table-row",e.TABLE_CELL="table-cell",e.TABLE_HEADER_CELL="table-header-cell"}(t.BLOCKS||(t.BLOCKS={}))}));E(o);o.BLOCKS;var _=L((function(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.INLINES=void 0,function(e){e.HYPERLINK="hyperlink",e.ENTRY_HYPERLINK="entry-hyperlink",e.ASSET_HYPERLINK="asset-hyperlink",e.EMBEDDED_ENTRY="embedded-entry-inline"}(t.INLINES||(t.INLINES={}))}));E(_);_.INLINES;var i=L((function(e,t){var n;Object.defineProperty(t,"__esModule",{value:!0}),function(e){e.BOLD="bold",e.ITALIC="italic",e.UNDERLINE="underline",e.CODE="code"}(n||(n={})),t.default=n}));E(i);var S=L((function(e,t){var n,E=r&&r.__spreadArray||function(e,t,n){if(n||2===arguments.length)for(var r,E=0,L=t.length;E<L;E++)!r&&E in t||(r||(r=Array.prototype.slice.call(t,0,E)),r[E]=t[E]);return e.concat(r||Array.prototype.slice.call(t))};Object.defineProperty(t,"__esModule",{value:!0}),t.V1_NODE_TYPES=t.TEXT_CONTAINERS=t.HEADINGS=t.CONTAINERS=t.VOID_BLOCKS=t.TABLE_BLOCKS=t.LIST_ITEM_BLOCKS=t.TOP_LEVEL_BLOCKS=void 0,t.TOP_LEVEL_BLOCKS=[o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET,o.BLOCKS.TABLE],t.LIST_ITEM_BLOCKS=[o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET],t.TABLE_BLOCKS=[o.BLOCKS.TABLE,o.BLOCKS.TABLE_ROW,o.BLOCKS.TABLE_CELL,o.BLOCKS.TABLE_HEADER_CELL],t.VOID_BLOCKS=[o.BLOCKS.HR,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET],t.CONTAINERS=((n={})[o.BLOCKS.OL_LIST]=[o.BLOCKS.LIST_ITEM],n[o.BLOCKS.UL_LIST]=[o.BLOCKS.LIST_ITEM],n[o.BLOCKS.LIST_ITEM]=t.LIST_ITEM_BLOCKS,n[o.BLOCKS.QUOTE]=[o.BLOCKS.PARAGRAPH],n[o.BLOCKS.TABLE]=[o.BLOCKS.TABLE_ROW],n[o.BLOCKS.TABLE_ROW]=[o.BLOCKS.TABLE_CELL,o.BLOCKS.TABLE_HEADER_CELL],n[o.BLOCKS.TABLE_CELL]=[o.BLOCKS.PARAGRAPH],n[o.BLOCKS.TABLE_HEADER_CELL]=[o.BLOCKS.PARAGRAPH],n),t.HEADINGS=[o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6],t.TEXT_CONTAINERS=E([o.BLOCKS.PARAGRAPH],t.HEADINGS,!0),t.V1_NODE_TYPES=[o.BLOCKS.DOCUMENT,o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.LIST_ITEM,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET,_.INLINES.HYPERLINK,_.INLINES.ENTRY_HYPERLINK,_.INLINES.ASSET_HYPERLINK,_.INLINES.EMBEDDED_ENTRY,"text"]}));E(S);S.V1_NODE_TYPES,S.TEXT_CONTAINERS,S.HEADINGS,S.CONTAINERS,S.VOID_BLOCKS,S.TABLE_BLOCKS,S.LIST_ITEM_BLOCKS,S.TOP_LEVEL_BLOCKS;var O=L((function(e,t){Object.defineProperty(t,"__esModule",{value:!0})}));E(O);var a=L((function(e,t){Object.defineProperty(t,"__esModule",{value:!0})}));E(a);var u=L((function(e,t){Object.defineProperty(t,"__esModule",{value:!0});var n={nodeType:o.BLOCKS.DOCUMENT,data:{},content:[{nodeType:o.BLOCKS.PARAGRAPH,data:{},content:[{nodeType:"text",value:"",marks:[],data:{}}]}]};t.default=n}));E(u);var l=L((function(e,t){function n(e,t){for(var n=0,r=Object.keys(e);n<r.length;n++){if(t===e[r[n]])return!0}return!1}Object.defineProperty(t,"__esModule",{value:!0}),t.isText=t.isBlock=t.isInline=void 0,t.isInline=function(e){return n(_.INLINES,e.nodeType)},t.isBlock=function(e){return n(o.BLOCKS,e.nodeType)},t.isText=function(e){return"text"===e.nodeType}}));E(l);l.isText,l.isBlock,l.isInline;var B=L((function(e,t){var n=r&&r.__createBinding||(Object.create?function(e,t,n,r){void 0===r&&(r=n);var E=Object.getOwnPropertyDescriptor(t,n);E&&!("get"in E?!t.__esModule:E.writable||E.configurable)||(E={enumerable:!0,get:function(){return t[n]}}),Object.defineProperty(e,r,E)}:function(e,t,n,r){void 0===r&&(r=n),e[r]=t[n]}),E=r&&r.__setModuleDefault||(Object.create?function(e,t){Object.defineProperty(e,"default",{enumerable:!0,value:t})}:function(e,t){e.default=t}),L=r&&r.__exportStar||function(e,t){for(var r in e)"default"===r||Object.prototype.hasOwnProperty.call(t,r)||n(t,e,r)},B=r&&r.__importStar||function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var r in e)"default"!==r&&Object.prototype.hasOwnProperty.call(e,r)&&n(t,e,r);return E(t,e),t},C=r&&r.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t.helpers=t.EMPTY_DOCUMENT=t.MARKS=t.INLINES=t.BLOCKS=void 0,Object.defineProperty(t,"BLOCKS",{enumerable:!0,get:function(){return o.BLOCKS}}),Object.defineProperty(t,"INLINES",{enumerable:!0,get:function(){return _.INLINES}}),Object.defineProperty(t,"MARKS",{enumerable:!0,get:function(){return C(i).default}}),L(S,t),L(O,t),L(a,t),Object.defineProperty(t,"EMPTY_DOCUMENT",{enumerable:!0,get:function(){return C(u).default}});var d=B(l);t.helpers=d}));E(B);var C=B.helpers;B.EMPTY_DOCUMENT,B.MARKS,B.INLINES,B.BLOCKS;t.a=function e(t,n){return void 0===n&&(n=" "),t&&t.content?t.content.reduce((function(r,E,L){var o;if(C.isText(E))o=E.value;else if((C.isBlock(E)||C.isInline(E))&&!(o=e(E,n)).length)return r;var _=t.content[L+1];return r+o+(_&&C.isBlock(_)?n:"")}),""):""}},549:function(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.BLOCKS=void 0,function(e){e.DOCUMENT="document",e.PARAGRAPH="paragraph",e.HEADING_1="heading-1",e.HEADING_2="heading-2",e.HEADING_3="heading-3",e.HEADING_4="heading-4",e.HEADING_5="heading-5",e.HEADING_6="heading-6",e.OL_LIST="ordered-list",e.UL_LIST="unordered-list",e.LIST_ITEM="list-item",e.HR="hr",e.QUOTE="blockquote",e.EMBEDDED_ENTRY="embedded-entry-block",e.EMBEDDED_ASSET="embedded-asset-block",e.TABLE="table",e.TABLE_ROW="table-row",e.TABLE_CELL="table-cell",e.TABLE_HEADER_CELL="table-header-cell"}(t.BLOCKS||(t.BLOCKS={}))},1928:function(e,t,n){Object.defineProperty(t,"__esModule",{value:!0});var r=n(549),E={nodeType:r.BLOCKS.DOCUMENT,data:{},content:[{nodeType:r.BLOCKS.PARAGRAPH,data:{},content:[{nodeType:"text",value:"",marks:[],data:{}}]}]};t.default=E},6061:function(e,t,n){Object.defineProperty(t,"__esModule",{value:!0}),t.isText=t.isBlock=t.isInline=void 0;var r=n(549),E=n(7845);function L(e,t){for(var n=0,r=Object.keys(e);n<r.length;n++){if(t===e[r[n]])return!0}return!1}t.isInline=function(e){return L(E.INLINES,e.nodeType)},t.isBlock=function(e){return L(r.BLOCKS,e.nodeType)},t.isText=function(e){return"text"===e.nodeType}},6437:function(e,t,n){var r=this&&this.__createBinding||(Object.create?function(e,t,n,r){void 0===r&&(r=n);var E=Object.getOwnPropertyDescriptor(t,n);E&&!("get"in E?!t.__esModule:E.writable||E.configurable)||(E={enumerable:!0,get:function(){return t[n]}}),Object.defineProperty(e,r,E)}:function(e,t,n,r){void 0===r&&(r=n),e[r]=t[n]}),E=this&&this.__setModuleDefault||(Object.create?function(e,t){Object.defineProperty(e,"default",{enumerable:!0,value:t})}:function(e,t){e.default=t}),L=this&&this.__exportStar||function(e,t){for(var n in e)"default"===n||Object.prototype.hasOwnProperty.call(t,n)||r(t,e,n)},o=this&&this.__importStar||function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)"default"!==n&&Object.prototype.hasOwnProperty.call(e,n)&&r(t,e,n);return E(t,e),t},_=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t.helpers=t.EMPTY_DOCUMENT=t.MARKS=t.INLINES=t.BLOCKS=void 0;var i=n(549);Object.defineProperty(t,"BLOCKS",{enumerable:!0,get:function(){return i.BLOCKS}});var S=n(7845);Object.defineProperty(t,"INLINES",{enumerable:!0,get:function(){return S.INLINES}});var O=n(1376);Object.defineProperty(t,"MARKS",{enumerable:!0,get:function(){return _(O).default}}),L(n(7951),t),L(n(167),t),L(n(1911),t);var a=n(1928);Object.defineProperty(t,"EMPTY_DOCUMENT",{enumerable:!0,get:function(){return _(a).default}});var u=o(n(6061));t.helpers=u},7845:function(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.INLINES=void 0,function(e){e.HYPERLINK="hyperlink",e.ENTRY_HYPERLINK="entry-hyperlink",e.ASSET_HYPERLINK="asset-hyperlink",e.EMBEDDED_ENTRY="embedded-entry-inline"}(t.INLINES||(t.INLINES={}))},1376:function(e,t){var n;Object.defineProperty(t,"__esModule",{value:!0}),function(e){e.BOLD="bold",e.ITALIC="italic",e.UNDERLINE="underline",e.CODE="code",e.SUPERSCRIPT="superscript",e.SUBSCRIPT="subscript"}(n||(n={})),t.default=n},1911:function(e,t){Object.defineProperty(t,"__esModule",{value:!0})},7951:function(e,t,n){var r,E=this&&this.__spreadArray||function(e,t,n){if(n||2===arguments.length)for(var r,E=0,L=t.length;E<L;E++)!r&&E in t||(r||(r=Array.prototype.slice.call(t,0,E)),r[E]=t[E]);return e.concat(r||Array.prototype.slice.call(t))},L=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t.V1_MARKS=t.V1_NODE_TYPES=t.TEXT_CONTAINERS=t.HEADINGS=t.CONTAINERS=t.VOID_BLOCKS=t.TABLE_BLOCKS=t.LIST_ITEM_BLOCKS=t.TOP_LEVEL_BLOCKS=void 0;var o=n(549),_=n(7845),i=L(n(1376));t.TOP_LEVEL_BLOCKS=[o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET,o.BLOCKS.TABLE],t.LIST_ITEM_BLOCKS=[o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET],t.TABLE_BLOCKS=[o.BLOCKS.TABLE,o.BLOCKS.TABLE_ROW,o.BLOCKS.TABLE_CELL,o.BLOCKS.TABLE_HEADER_CELL],t.VOID_BLOCKS=[o.BLOCKS.HR,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET],t.CONTAINERS=((r={})[o.BLOCKS.OL_LIST]=[o.BLOCKS.LIST_ITEM],r[o.BLOCKS.UL_LIST]=[o.BLOCKS.LIST_ITEM],r[o.BLOCKS.LIST_ITEM]=t.LIST_ITEM_BLOCKS,r[o.BLOCKS.QUOTE]=[o.BLOCKS.PARAGRAPH],r[o.BLOCKS.TABLE]=[o.BLOCKS.TABLE_ROW],r[o.BLOCKS.TABLE_ROW]=[o.BLOCKS.TABLE_CELL,o.BLOCKS.TABLE_HEADER_CELL],r[o.BLOCKS.TABLE_CELL]=[o.BLOCKS.PARAGRAPH],r[o.BLOCKS.TABLE_HEADER_CELL]=[o.BLOCKS.PARAGRAPH],r),t.HEADINGS=[o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6],t.TEXT_CONTAINERS=E([o.BLOCKS.PARAGRAPH],t.HEADINGS,!0),t.V1_NODE_TYPES=[o.BLOCKS.DOCUMENT,o.BLOCKS.PARAGRAPH,o.BLOCKS.HEADING_1,o.BLOCKS.HEADING_2,o.BLOCKS.HEADING_3,o.BLOCKS.HEADING_4,o.BLOCKS.HEADING_5,o.BLOCKS.HEADING_6,o.BLOCKS.OL_LIST,o.BLOCKS.UL_LIST,o.BLOCKS.LIST_ITEM,o.BLOCKS.HR,o.BLOCKS.QUOTE,o.BLOCKS.EMBEDDED_ENTRY,o.BLOCKS.EMBEDDED_ASSET,_.INLINES.HYPERLINK,_.INLINES.ENTRY_HYPERLINK,_.INLINES.ASSET_HYPERLINK,_.INLINES.EMBEDDED_ENTRY,"text"],t.V1_MARKS=[i.default.BOLD,i.default.CODE,i.default.ITALIC,i.default.UNDERLINE]},167:function(e,t){Object.defineProperty(t,"__esModule",{value:!0})},4982:function(e,t,n){n.r(t);var r=n(4578),E=n(7294),L=n(1883),o=n(7361),_=n.n(o),i=n(8872),S=n(2924),O=n(6437),a=n(8032),u=n(2013),l=n.n(u),B=(n(9357),n(8210)),C=n(1699),d=n(5390),c=function(e){function t(){return e.apply(this,arguments)||this}return(0,r.Z)(t,e),t.prototype.render=function(){var e,t,n,r,o=_()(this.props,"data.contentfulBlogPost"),u=_()(this.props,"data.previous"),c=_()(this.props,"data.next"),I=((0,S.a)(JSON.parse(o.description.raw)),(0,S.a)(JSON.parse(o.body.raw))),A=l()(I).minutes,T={renderNode:(e={},e[O.BLOCKS.EMBEDDED_ASSET]=function(e){var t=e.data.target,n=t.gatsbyImage,r=t.description;return E.createElement(a.G,{image:(0,a.c)(n),alt:r})},e)};return E.createElement(B.Z,{location:this.props.location},E.createElement("section",{class:"__article"},E.createElement(C.Z,{image:null===(t=o.heroImage)||void 0===t?void 0:t.gatsbyImage,title:o.title,content:o.description}),E.createElement("div",{class:"__body _max-width__800 _padding-top__large"},E.createElement("span",{class:"__spec"},E.createElement("strong",null,A," minute read ")," ·"," ",E.createElement("time",{dateTime:o.rawDate},o.publishDate)," · Post by ",null===(n=o.author)||void 0===n?void 0:n.name),E.createElement("div",null,E.createElement("div",null,(null===(r=o.body)||void 0===r?void 0:r.raw)&&(0,i.Z)(o.body,T)),E.createElement(d.Z,{tags:o.tags}),(u||c)&&E.createElement("div",{class:"dfd-button-container dfd-grid-container -column__half -column-h__center _padding-top__large"},u&&E.createElement(L.rU,{to:"/"+u.slug,rel:"prev",class:"__button -white","data-cabin-event":"Blog / Post / Prev"},"← ",u.title),c&&E.createElement(L.rU,{to:"/"+c.slug,rel:"next",class:"__button -white","data-cabin-event":"Blog / Post / Next"},c.title," →"))))))},t}(E.Component);t.default=c},2013:function(e,t){var n=this&&this.__assign||function(){return n=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var E in t=arguments[n])Object.prototype.hasOwnProperty.call(t,E)&&(e[E]=t[E]);return e},n.apply(this,arguments)};function r(e,t){return t.some((function(t){var n=t[0],r=t[1];return n<=e&&e<=r}))}t.__esModule=!0,t.readingTimeWithCount=t.countWords=void 0;var E=function(e){return r(e.charCodeAt(0),[[12352,12447],[19968,40959],[44032,55203],[131072,191456]])},L=function(e){return" \n\r\t".includes(e)};function o(e,t){void 0===t&&(t={});for(var n=0,o=0,_=e.length-1,i=t.wordBound,S=void 0===i?L:i;S(e[o]);)o++;for(;S(e[_]);)_--;for(var O=e+"\n",a=o;a<=_;a++)if((E(O[a])||!S(O[a])&&(S(O[a+1])||E(O[a+1])))&&n++,E(O[a]))for(;a<=_&&(r(O[a+1].charCodeAt(0),[[33,47],[58,64],[91,96],[123,126],[12288,12351],[65280,65519]])||S(O[a+1]));)a++;return{total:n}}function _(e,t){void 0===t&&(t={});var n=t.wordsPerMinute,r=void 0===n?200:n,E=e.total/r,L=Math.round(60*E*1e3);return{minutes:Math.ceil(parseFloat(E.toFixed(2))),time:L}}t.countWords=o,t.readingTimeWithCount=_,t.default=function(e,t){void 0===t&&(t={});var r=o(e,t);return n(n({},_(r,t)),{words:r})}}}]);
//# sourceMappingURL=component---src-templates-blog-post-js-1f600e497a6d57b312bd.js.map