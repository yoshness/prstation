<?php
  function index_article_query() {
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 6,
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function featured_article_query($posts) {
    $args = array(
      'post_type'      => 'post',
      'post__in'       => $posts,
      'posts_per_page' => 4,
      'orderby'        => 'post__in',
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }