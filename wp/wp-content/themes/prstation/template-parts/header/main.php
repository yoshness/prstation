<header class="header" id="js-header">
  <div class="header__top">
    <div class="header__top-inner l-container">
      <div class="header__top-left">
        <h1 class="header__top-logo">
          <a href="<?php echo HOME_URL; ?>">
            <img src="<?php echo IMAGE_URI; ?>logo.svg" alt="PR Station">
          </a>
        </h1>
        <p class="header__top-description">Press Release, News Release Distribution Service in the Philippines</p>
      </div>
      <div class="header__top-right">
        <a class="header__top-button" href="#">Post your PR</a>
      </div>
    </div>
  </div>
  <div class="header__bottom">
    <div class="l-container">
      <nav class="nav">
        <?php
          $categories = get_categories( array(
              'orderby'    => 'name',
              'parent'     => 0,
              'exclude'    => 1
          ) );
        ?>
        <ul class="nav__list">
          <li class="nav__list-item">
            <a class="nav__list-item-link" href="<?php echo HOME_URL; ?>">TOP</a>
          </li>
          <?php foreach ( $categories as $category ):
            $cat_ID        = (int) $category->term_id;
            $category_name = $category->name;
          ?>
          <li class="nav__list-item">
            <a class="nav__list-item-link" href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </div>
</header>