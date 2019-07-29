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
    <div class="l-index__content">
      <div class="featured">
        <ul class="featured__list">
          <li class="featured__list-item">
            <a class="featured__list-item-link" href="#">
              <article class="article-block">
                <div class="article-block__top">
                  <span class="article-block__category">Apps</span>
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <time class="article-block__date" datetime="07-11-19">JUL 11, 2019</time>
                <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Matched Rides</h3>
                <p class="article-block__author">Grab Holdings Inc.</p>
              </article>
            </a>
          </li>
          <li class="featured__list-item">
            <a class="featured__list-item-link" href="#">
              <article class="article-block">
                <div class="article-block__top">
                  <span class="article-block__category">Apps</span>
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <time class="article-block__date" datetime="07-11-19">JUL 11, 2019</time>
                <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Matched Rides</h3>
                <p class="article-block__author">Grab Holdings Inc.</p>
              </article>
            </a>
          </li>
          <li class="featured__list-item">
            <a class="featured__list-item-link" href="#">
              <article class="article-block">
                <div class="article-block__top">
                  <span class="article-block__category">Apps</span>
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <time class="article-block__date" datetime="07-11-19">JUL 11, 2019</time>
                <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Matched Rides</h3>
                <p class="article-block__author">Grab Holdings Inc.</p>
              </article>
            </a>
          </li>
          <li class="featured__list-item">
            <a class="featured__list-item-link" href="#">
              <article class="article-block">
                <div class="article-block__top">
                  <span class="article-block__category">Apps</span>
                  <div class="article-block__image" style="background-image: url('https://placeimg.com/350/219/nature');"></div>
                </div>
                <time class="article-block__date" datetime="07-11-19">JUL 11, 2019</time>
                <h3 class="article-block__title">GrabShare Launches New Enhanced Option for Better Matched Rides</h3>
                <p class="article-block__author">Grab Holdings Inc.</p>
              </article>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <aside class="l-index__sidebar sidebar">SIDEBAR HERE</aside>
  </div>
</main>

<?php
get_footer();
