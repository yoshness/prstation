<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/main'); ?>

<main class="l-single">
  <div class="l-single__breadcrumbs l-container">
    <?php
      $category           = get_the_category( $post->ID );
      $main_category_name = !empty($category[0]->name) ? $category[0]->name : 'preview';
      $archiveType        = 'category';
      $singlePage = true;
    ?>
    <?php include( locate_template( 'template-parts/breadcrumbs.php', false, false ) ); ?>
  </div>
  <div class="l-single__inner l-container js-sns-slide">
    <div class="l-single__sns sns">
      <ul class="sns__list">
        <li class="sns__list-item">
          <a data-type="facebook" href="http://www.facebook.com/share.php?u=<?php echo urlencode(get_the_permalink()); ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
            <i class="icon icon-facebook-round"></i>
          </a>
        </li>
        <li class="sns__list-item">
          <a data-type="twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>">
            <i class="icon icon-twitter"></i>
          </a>
        </li>
      </ul>
    </div>
    <section class="l-single__content">
      <div class="l-single__top">
      	<span class="l-single__top-category"><?php echo $mainCategoryName; ?></span>
        <?php $title = str_replace("　", "<br>", get_the_title()); ?>
      	<h1 class="l-single__top-title"><?php echo $title; ?></h1>
      	<time class="l-single__top-date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('M d, Y'); ?></time>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <a href="<?php echo get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>" class="l-single__top-author"><?php echo get_the_author_meta('display_name'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
				<div class="l-single__top-eyecatch" style="background-image: url(<?php echo get_eyecatch_data( get_the_ID(), 'eyecatch_size' ); ?>)"></div>
      </div>
      <div class="single-body">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="l-single__bottom">
      	<div class="l-single__bottom-tags">
      		<label class="l-single__bottom-tags-label">Keywords:</label>
          <?php
            $terms_tag = wp_get_object_terms( $post->ID,  'post_tag' );
            if ( ! empty( $terms_tag ) ) :
              if ( ! is_wp_error( $terms_tag ) ) :
          ?>
      		<ul class="tags">
            <?php foreach($terms_tag as $tag): ?>
            <li class="tags-item">
              <a class="tag-link" href="<?php echo get_term_link($tag->slug, $tag->taxonomy); ?>"><?php echo $tag->name; ?></a>
            </li>
            <?php endforeach; ?>
				  </ul>
            <?php endif; ?>
          <?php endif; ?>
      	</div>
      	<div class="l-single__bottom-author">
      		<span class="l-single__bottom-author-name"><?php echo get_the_author_meta('display_name'); ?></span>
      		<p class="l-single__bottom-author-description"><?php echo get_the_author_meta('description'); ?></p>
      	</div>
      </div>
      
      <div class="l-single__related">
      	<h2 class="l-single__related-title">Related Articles</h2>
        <?php
          $mainCategorySlug = $category[0]->slug;
          $article_query = array(
            'custom_query'   => related_article_query( $mainCategorySlug, get_the_ID() )
          );

          if($article_query['custom_query']->have_posts()) {
        ?>
      	<ul class="related-articles">
      		<?php while($article_query['custom_query']->have_posts()): $article_query['custom_query']->the_post(); 
            $category           = get_the_category( get_the_ID() );
            $main_category_name = $category[0]->name;
          ?>
      		<li class="related-articles__item">
      			<a class="related-articles__item-link" href="<?php the_permalink(); ?>">
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
    </section>
    <div class="l-single__sidebar">
      <?php get_template_part( 'template-parts/sidebar/main'); ?>
    </div>
  </div>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();
