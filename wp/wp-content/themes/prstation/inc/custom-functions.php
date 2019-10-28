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
    $settings['capability'] = 'edit_themes';
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

// This will suppress empty email errors when submitting the user form
add_action('user_profile_update_errors', 'my_user_profile_update_errors', 10, 3 );
function my_user_profile_update_errors($errors, $update, $user) {
    $errors->remove('empty_email');
}

// This will remove javascript required validation for email input
// It will also remove the '(required)' text in the label
// Works for new user, user profile and edit user forms
add_action('user_new_form', 'my_user_new_form', 10, 1);
add_action('show_user_profile', 'my_user_new_form', 10, 1);
add_action('edit_user_profile', 'my_user_new_form', 10, 1);
function my_user_new_form($form_type) {
    ?>
    <script type="text/javascript">
        jQuery('#email').closest('tr').removeClass('form-required').find('.description').remove();
        // Uncheck send new user email option by default
        <?php if (isset($form_type) && $form_type === 'add-new-user') : ?>
            jQuery('#send_user_notification').removeAttr('checked');
        <?php endif; ?>
    </script>
    <?php
}