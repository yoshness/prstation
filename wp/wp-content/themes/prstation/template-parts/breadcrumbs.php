<?php 
  if($archiveType == 'category') {
    $url = HOME_URL.'category/'.strtolower($headingTitle); 
  }
  else {
    $url = HOME_URL.'tag/'.strtolower($headingTitle); 
  }
?>

<div class="breadcrumbs">
  <ol class="breadcrumbs__list">
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo HOME_URL; ?>">TOP</a>
    </li>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo $url?>"><?php echo $headingTitle; ?></a>
    </li>
    <?php if(!$headingTitle) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </li>
    <?php } ?>
  </ol>
</div>