<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-index">
  <div class="l-index__inner l-container">
    <div class="l-index__featured">
      <section class="articles">
        <ul class="articles__list">
          <?php for($i=0; $i<4; $i++) { ?>
          <li class="articles__list-item articles__list-item--featured">
            <a class="articles__list-item-link" href="#">
              <article class="article-block article-block--featured">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <div class="article-block__details">
                  <span class="article-block__category">Business</span>
                  <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better</h3>
                  <time class="article-block__date" datetime="07-11-19">July 11, 2019</time>
                  <p class="article-block__author">Grab Holdings Inc.</p>
                </div>
              </article>
            </a>
          </li>
          <?php } ?>
        </ul>
      </section>
    </div>
    <a class="l-index__ads" href="#">Ads</a>
  </div>
  <div class="l-index__notice l-container">
    <div class="notice">
      <p class="notice__text">
        Want to be heard? Post your Press Release here.
      </p>
      <a class="notice__button" href="#">Post your PR</a>
    </div>
  </div>
  <div class="l-index__inner l-container">
    <div class="l-index__articles">
      <section class="articles">
        <h2 class="articles__title">New Press Release</h2>
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
    <div class="l-index__sidebar">
      <?php get_template_part( 'template-parts/sidebar/main'); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();
