<?php
/*
 * Template Name: External Website
 * Template Post Type: post
 */
  
 get_header();  ?>
 <div class="card" style="width: 18rem;">
  <?php the_post_thumbnail( 'medium' ) ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_field("video_url"); ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>