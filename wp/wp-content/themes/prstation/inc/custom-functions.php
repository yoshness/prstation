<?php

function get_eyecatch_data( $post_id, $thumbnail = "full", $noimage = false ) {
  if ( has_post_thumbnail( $post_id ) ) {
    $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $thumbnail, true );

    return $image_data[0];
  } elseif ( empty( $noimage ) ) {
    return false;
  } else {
    return $noimage;
  }
}

function get_thumbnail_data( $image_id, $thumbnail = "full", $noimage = false ) {
  if ( ! empty( $image_id ) ) {
    $image_data = wp_get_attachment_image_src( $image_id, $thumbnail, true );

    return $image_data[0];
  } elseif ( empty( $noimage ) ) {
    return false;
  } else {
    return $noimage;
  }
}

//advance custom field option page
function my_acf_options_page_settings( $settings )
{
    $settings['menu'] = 'Featured Posts';
    return $settings;
}
 
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

// Remove Guttenberg (revert to old style WP Admin editor)
add_filter('use_block_editor_for_post', '__return_false', 10);

add_action('wp_enqueue_scripts', 'loader_enqueue');

function loader_enqueue() {
  if ( is_front_page() ) {
    wp_enqueue_script('loaderjs', ITEM_URL.'assets/index.js');
  }
}