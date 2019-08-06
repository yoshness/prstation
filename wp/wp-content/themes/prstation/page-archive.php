<?php
/**
 *
 * Template Name: Archive Page
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-archive">
  <div class="l-archive__breadcrumbs l-container">
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
  </div>
  <div class="l-archive__inner l-container">
    <div class="l-archive__articles">
      <section class="articles">
        <h2 class="articles__title">Technology</h2>
        <ul class="articles__list">
          <?php for($i=0; $i<6; $i++) { ?>
          <li class="articles__list-item">
            <a class="articles__list-item-link" href="#">
              <article class="article-block">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <div class="article-block__details">
                  <span class="article-block__category">Business</span>
                  <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Transportation</h3>
                  <time class="article-block__date" datetime="07-11-19">July 11, 2019</time>
                  <p class="article-block__author">Grab Holdings Inc.</p>
                </div>
              </article>
            </a>
          </li>
          <?php } ?>
        </ul>
        <div class="articles__more">
          <a class="articles__more-button" href="#">View More</a>
        </div>
      </section>
    </div>
    <div class="l-archive__sidebar">
      <a class="advertisement" href="#">Ads</a>
      <?php get_template_part( 'template-parts/sidebar/main'); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();