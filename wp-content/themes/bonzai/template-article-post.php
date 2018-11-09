<?php
/*
 * Template Name: Article
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
<div class="pd-t-10 pd-b-10 pd-l-10 pd-r-10" style="width: 70rem; max-width: 100%; margin:auto;">
	<div class= "col-lg-12 row">
		<div class="col-md-4 pd-t-10 pd-b-10 pd-l-50 pd-r-5">
			<?php the_post_thumbnail( 'medium' ) ?>
		</div>
		<div class="col-lg-8 pd-t-10 pd-b-10 pd-l-5 pd-r-50">
			<h4>
				<?php the_title() ?>
			</h4>
			<p>
			<?php the_content() ?>
			</p>
			<div>
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
</div>

