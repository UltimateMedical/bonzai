<?php
/*
 * Template Name: Contact
 * Template Post Type: post
 */
  
 get_header();  ?>
 <?php
  $tags = get_the_tags(get_the_ID());
  the_post();
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
      <h5 class="card-title color-grey"><?php the_title(); ?> <small style="float:right"><i class="fa fa-phone"></i> Contact</small></h5>
	    <p class="card-text color-grey"><?php the_content(); ?></p>
	    <a href="" class="card-text color-blue"> <?php the_field("contact_phone"); ?> </a> </br>
	    <a href="mailto:contact_email" target="_top" class="card-text"> 
        <?php $mail = get_post_meta($post->ID, 'contact_email', true);   
        if ($mail) {
          echo '<a href="mailto:'.$mail.'">'.$mail.'</a>'; } ?> </a>
        <p class="card-title color-grey"> <?php the_field("contact_open_hours"); ?> </p> </br>
		
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

