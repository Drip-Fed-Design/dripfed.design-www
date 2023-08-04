import React from "react";

const Tags = ({ tags }) =>
  tags?.length > 0 && (
    <small class="__tags">
      {tags.map((tag) => (
        <span key={tag}>{tag}</span>
      ))}
    </small>
  );

export default Tags;
