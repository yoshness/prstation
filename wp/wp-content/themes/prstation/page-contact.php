<?php
/**
 *
 * Template Name: Contact Page
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-contact">
  <div class="l-contact__inner l-container">
    <div class="contact">
      <h2 class="contact__title">Contact Us</h2>
      <p class="contact__description">Any inquiry? Send us a message and we'll respond as soon as possible.</p>
      <?php echo do_shortcode( '[wpforms id="42"]' ); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();