<?php 
  if($archiveType == 'category') {
    $url = HOME_URL.'category/'.strtolower($main_category_name); 
  }
  else if($archiveType == 'author') {
      $url = HOME_URL.'author/'.strtolower($main_category_name); 
  }
  else {
    $url = HOME_URL.'tag/'.strtolower($main_category_name); 
  }
?>

<div class="breadcrumbs">
  <ol class="breadcrumbs__list">
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo HOME_URL; ?>">TOP</a>
    </li>
    <?php if($main_category_name) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo $url?>"><?php echo $main_category_name; ?></a>
    </li>
    <?php } ?>
    <?php if($singlePage) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </li>
    <?php } ?>
  </ol>
</div>