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
        <?php
          $article_query = array(
            'custom_query'   => featured_article_query( get_field('featured_articles','option') )
          );

          if ( $article_query['custom_query']->have_posts() ) {
        ?>
        <ul class="articles__list">
          <?php
            while($article_query['custom_query']->have_posts()): $article_query['custom_query']->the_post();
            $category           = get_the_category( get_the_ID() );
            $main_category_name = $category[0]->name;
          ?>
          <li class="articles__list-item articles__list-item--featured">
            <a class="articles__list-item-link" href="<?php the_permalink(); ?>">
              <article class="article-block article-block--featured">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url(<?php echo get_eyecatch_data( get_the_ID(), 'featured_article_size' ); ?>"></div>
                </div>
                <div class="article-block__details">
                  <?php if(isset($main_category_name)) : ?>
                  <span class="article-block__category"><?php echo $main_category_name; ?></span>
                <?php endif; ?>
                  <h3 class="article-block__title"><?php echo get_the_title(); ?></h3>
                  <time class="article-block__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M d, Y'); ?></time>
                  <p class="article-block__author"><?php echo get_the_author_meta('display_name'); ?></p>
                </div>
              </article>
            </a>
          </li>
          <?php endwhile; wp_reset_query();?>
        </ul>
        <?php } ?>
      </section>
    </div>
    <div class="l-index__about">
      <img src="<?php echo IMAGE_URI; ?>index/about.png" alt="">
      <img src="<?php echo IMAGE_URI; ?>index/flow.png" alt="">
    </div>
  </div>
  <div class="l-index__notice l-container">
    <div class="notice">
      <p class="notice__text">
        Want to be heard? Post your Press Release here.
      </p>
      <a class="notice__button" href="https://docs.google.com/forms/d/e/1FAIpQLSdqkNsU4gqsEEnWavbE7TCW9wg1pUsrG9IerOn--UM3GbpqfA/viewform?fbclid=IwAR1M5-fQIODvNpfmd4Z77pXv3MBH85Dx1Vtp985jWx35Dq6NYM2G0VjEqf4" target="_blank">Post your PR</a>
    </div>
  </div>
  <div class="l-index__inner l-container">
    <div class="l-index__articles">
      <section class="articles">
        <h2 class="articles__title articles__title--uppercase">New Press Release</h2>
        <?php
          $article_query = array(
            'custom_query'   => index_article_query()
          );

          if ( $article_query['custom_query']->have_posts() ) {
        ?>
        <ul class="articles__list">
          <?php
            while($article_query['custom_query']->have_posts()): $article_query['custom_query']->the_post();
            $category           = get_the_category( get_the_ID() );
            $main_category_name = $category[0]->name;
          ?>
          <li class="articles__list-item">
            <a class="articles__list-item-link" href="<?php the_permalink(); ?>">
              <article class="article-block">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url(<?php echo get_eyecatch_data( get_the_ID(), 'article_size' ); ?>"></div>
                </div>
                <div class="article-block__details">
                  <?php if(isset($main_category_name)) : ?>
                  <span class="article-block__category"><?php echo $main_category_name; ?></span>
                <?php endif; ?>
                  <h3 class="article-block__title"><?php echo get_the_title(); ?></h3>
                  <time class="article-block__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M d, Y'); ?></time>
                  <p class="article-block__author"><?php echo get_the_author_meta('display_name'); ?></p>
                </div>
              </article>
            </a>
          </li>
          <?php endwhile; wp_reset_query();?>
        </ul>
        <?php } ?>
        <div class="articles__more">
          <a class="articles__more-button" href="<?php echo HOME_URL; ?>archive">View More</a>
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
