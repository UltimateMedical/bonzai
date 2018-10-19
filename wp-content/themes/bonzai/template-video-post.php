<?php
/*
 * Template Name: Video
 * Template Post Type: post
 */
  
 get_header();  ?>
 <?php
	$tags = get_the_tags(get_the_ID());
	$colors = [
		'blue',
		'purple',
		'green',
		'grey',
		'teal',
		'pink',
	];
	$counter = 0;
?>
 <?php get_template_part( 'headers/single-post-header'); ?>
 <div class="bg-ultra-light pd-t-30 pd-b-40">
	 <div class="card pd-t-10 pd-b-10 pd-l-10 pd-r-10" style="width: 30rem; max-width: 100%; margin:auto;">
	  
	  <div class="card-body">
	  	<?php the_post_thumbnail( 'medium-large' ) ?>
	  	<a href="#" class="btn bg-green color-white btn-lg btn-block mg-t-20 mg-b-20">Visit</a>
	  	<hr style="" />
	    <h5 class="card-title color-grey"><?php the_field("video_url"); ?> <small style="float:right"><i class="fa fa-play"></i> Video</small></h5>
	    <p class="card-text color-grey">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <?php if ( $tags ) :?>
	    <span class="color-grey">Tagged with:&nbsp;</span>
	    	<?php foreach ($tags as $tag) :?>
			  	<a href="<?php echo get_tag_link( $tag->term_id ); ?>"><div class="badge bg-<?php echo $colors[$counter % 6]; ?> color-white"><p class="mg-b-0"><?php echo $tag->name;?></p></div></a>
			  	<?php $counter++; ?>
			<?php endforeach; ?>
	    
	      <?php endif;?>
	  </div>
	</div>
</div>