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

  function archive_article_query() {
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 10,
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function related_article_query($post_category, $post_ID) {
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'post__not_in'   => array($post_ID),
      'orderby'        => 'rand',
      'tax_query'      => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $post_category,
          ),
      ),
    );

    return new WP_Query( $args );
  }

  function sidebar_most_viewed_article_query() {
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 5,
      'meta_key'       => 'views',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function tag_query() {
    $args = array(
      'orderby'    => 'id',
      'order'    => 'ASC',
      'hide_empty' => false
    );

    return get_terms('post_tag', $args);
  }

  function recent_article_query() {
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }