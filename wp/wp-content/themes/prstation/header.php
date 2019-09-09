<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title('|'); ?></title>
  <base href="/">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="format-detection" content="telephone=no">

  <?php if(!is_single() || is_archive()): ?>
    <meta property="og:image" content="<?php echo IMAGE_URI; ?>ogp.jpg">
  <?php elseif(is_single() && !get_the_post_thumbnail()): ?>
    <meta property="og:image" content="<?php echo IMAGE_URI; ?>ogp.jpg">
  <?php endif; ?>
  <?php if(is_single() && !$post->post_content): ?>
    <meta name="description" content="<?php the_title(); ?>"/>
    <meta name="og:description" content="<?php the_title(); ?>"/>
  <?php endif; ?>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <meta name="google-site-verification" content="NaeCw3sqN-uixuIqV3s9iK8OUFNVgqF6R7BEdKXRROc" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145816016-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-145816016-1');
  </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="loader js-loader">
    <?php echo file_get_contents(IMAGE_URI.'loader.svg'); ?>
  </div>
