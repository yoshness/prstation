<aside class="sidebar">
  <h2 class="sidebar__title">TOP News</h2>
  <?php
    $article_query = array(
      'custom_query'   => sidebar_most_viewed_article_query()
    );
    if ( $article_query['custom_query']->have_posts() ) {
  ?>
  <ul class="sidebar__news">
    <?php
      while($article_query['custom_query']->have_posts()): $article_query['custom_query']->the_post();
      $category           = get_the_category( get_the_ID() );
      $main_category_name = $category[0]->name;
    ?>
    <li class="sidebar__news-item">
      <a class="sidebar__news-item-link" href="<?php the_permalink(); ?>">
        <?php if(isset($main_category_name)) : ?>
        <span class="sidebar__news-item-category"><?php echo $main_category_name; ?></span>
        <?php endif; ?>
        <h3 class="sidebar__news-item-title"><?php echo get_the_title(); ?></h3>
      </a>
    </li>
    <?php endwhile; wp_reset_query();?>
  </ul>
  <?php } ?>
  <h2 class="sidebar__title">Top Keywords</h2>
  <?php
    $terms_tag = sidebar_tag_query();
    if ( $terms_tag && !is_wp_error( $terms_tag ) ) :
  ?>
  <ul class="tags">
    <?php foreach($terms_tag as $tag): ?>
    <li class="tags-item">
      <a class="tag" href="<?php echo get_term_link($tag->slug, $tag->taxonomy); ?>"><?php echo $tag->name; ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  <div class="sidebar__contact">
    <p class="sidebar__contact-description">
      For more information about PR Station you may send your inquiry in our contact us page.
    </p>
    <a class="sidebar__contact-button" href="#">Contact us</a>
  </div>
</aside>