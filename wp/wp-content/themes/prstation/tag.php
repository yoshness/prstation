<?php
/**
 *
 * Template Name: Tag Page
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-archive">
  <?php
    $term = get_queried_object();
    $category         = get_the_terms( $post->ID, 'category' );
    $headingTitle     = single_cat_title("", false);
    $main_category_name = !empty($category[0]->name) ? $category[0]->name : 'preview';
    $archiveType      = 'tag';
  ?>
  <div class="l-archive__breadcrumbs l-container">
    <?php include( locate_template( 'template-parts/breadcrumbs.php', false, false ) ); ?>
  </div>
  <div class="l-archive__inner l-container">
    <div class="l-archive__articles">
      <section class="articles">
        <h2 class="articles__title"><?php echo $headingTitle; ?></h2>
        <?php
          $article_query = array(
            'custom_query'   => $wp_query
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
            <a class="articles__list-item-link" href="<?php echo the_permalink(); ?>">
              <article class="article-block">
                <div class="article-block__image-wrapper">
                  <div class="article-block__image" style="background-image: url('<?php echo get_eyecatch_data( get_the_ID(), 'article_size'); ?>"></div>
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
          <a class="articles__more-button" href="#">View More</a>
        </div>
      </section>
    </div>
    <div class="l-archive__sidebar">
      <?php get_template_part( 'template-parts/sidebar/main'); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();