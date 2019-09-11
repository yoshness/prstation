<header class="header" id="js-header">
  <div class="header__top">
    <div class="header__top-inner l-container">
      <div class="header__hamburger u-show-sp">
        <button class="header__hamburger-button u-notap js-trigger-menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="header__top-left">
        <h1 class="header__top-logo">
          <a href="<?php echo HOME_URL; ?>">
            <img src="<?php echo IMAGE_URI; ?>logo.svg" alt="PR Station">
          </a>
        </h1>
        <p class="header__top-description">Press Release, News Release Distribution Service in the Philippines</p>
      </div>
      <div class="header__top-right">
        <form role="search" method="get" class="header__top-search" action="<?php echo HOME_URL; ?>">
          <i class="icon icon-search header__top-search-button js-header-search-trigger"></i>
          <input type="hidden" name="post_type" value="archive" />
          <input type="search" class="header__top-search-input js-header-search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" name="s" />
        </form>
        <a class="header__top-button" href="https://docs.google.com/forms/d/e/1FAIpQLSdqkNsU4gqsEEnWavbE7TCW9wg1pUsrG9IerOn--UM3GbpqfA/viewform?fbclid=IwAR1M5-fQIODvNpfmd4Z77pXv3MBH85Dx1Vtp985jWx35Dq6NYM2G0VjEqf4" target="_blank">Post your PR</a>
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
  <div class="header__menu js-menu">
    <div class="header__menu-inner l-container">
      <nav class="menu">
        <form role="search" method="get" class="menu__search" action="<?php echo HOME_URL; ?>">
          <i class="menu__search-icon icon icon-search"></i>
          <input type="hidden" name="post_type" value="archive" />
          <input type="search" class="menu__search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" name="s" />
        </form>
        <ul class="menu__list">
          <li class="menu__list-item">
            <a class="menu__list-item-link" href="<?php echo HOME_URL; ?>">TOP</a>
          </li>
          <?php foreach ( $categories as $category ):
            $cat_ID        = (int) $category->term_id;
            $category_name = $category->name;
          ?>
          <li class="menu__list-item">
            <a class="menu__list-item-link" href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <ul class="header__menu-links">
        <li class="header__menu-links-item">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSdqkNsU4gqsEEnWavbE7TCW9wg1pUsrG9IerOn--UM3GbpqfA/viewform?fbclid=IwAR1M5-fQIODvNpfmd4Z77pXv3MBH85Dx1Vtp985jWx35Dq6NYM2G0VjEqf4" target="_blank">Post your PR</a>
        </li>
        <li class="header__menu-links-item">
          <a href="<?php echo HOME_URL; ?>contact">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</header>