<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-404">
	<div class="l-404__inner l-container">
    <div class="section-404">
    	<img src="<?php echo IMAGE_URI; ?>404/lamps.svg" class="section-404__decor1">
    	<img src="<?php echo IMAGE_URI; ?>404/title-bg.svg" class="section-404__decor2">
			<h2 class="section-404__title">
				<img src="<?php echo IMAGE_URI; ?>404/title.svg" alt="Page Not Found!">
			</h2>
			<p class="section-404__description">
				We couldn’t find the page you’re looking for.<br>In the meantime, you may check some of our articles.
			</p>
			<img class="section-404__image" src="<?php echo IMAGE_URI; ?>404/people.svg" alt="">
    </div>
    <div class="l-404__articles">
        <?php
          $article_query = array(
            'custom_query'   => recent_article_query()
          );

          if($article_query['custom_query']->have_posts()) {
        ?>
      	<ul class="section-404__articles">
      		<?php while($article_query['custom_query']->have_posts()): $article_query['custom_query']->the_post(); 
            $category           = get_the_category( get_the_ID() );
            $main_category_name = $category[0]->name;
          ?>
      		<li class="section-404__articles-item">
      			<a class="section-404__articles-item-link" href="<?php the_permalink(); ?>">
      				<article class="article-block article-block--related">
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
      </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();
