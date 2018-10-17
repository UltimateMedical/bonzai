<?php
/*
 * Template Name: PDF
 * Template Post Type: post
 */
  
 get_header();  ?>
 <div class="card" style="width: 18rem;">
  <?php the_post_thumbnail( 'medium' ) ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_field("video_url"); ?></h5>
    <p class="card-text">HAHAHA</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>