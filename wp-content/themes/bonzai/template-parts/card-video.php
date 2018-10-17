<?php
/**
 * Card Template for Video Posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bonzai
 */

?>

<div class="card uma-grid-item" style="">
  <img class="" style="width: 100%;" src="<?php the_post_thumbnail_url('medium-large'); ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php get_field("video_url") !== '' ? the_field("video_url") : 'Default'; ?></h5>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>