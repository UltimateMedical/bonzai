<?php
/**
 * Card Template for Posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bonzai
 */

?>
<?php
	$type = '';
	$color = '';
	$name = '';
	switch ( get_current_template() ) {
		case 'template-video-post' :
			$type = 'play';
			$color = 'orange';
			$name = 'Video';
			break;
		case 'template-article-post' :
			$type = 'newspaper-o';
			$color = 'dark-blue';
			$name = 'Article';
			break;
		case 'template-pdf-post' :
			$type = 'file-pdf-o';
			$color = 'pink';
			$name = 'PDF';
			break;
		case 'template-contact-post' :
			$type = 'phone';
			$color = 'purple';
			$name = 'Contact';
			break;
		case 'template-external-website-post' :
			$type = 'external-link';
			$color = 'green';
			$name = 'External Website';
			break;
		default :
			$type = '';
			$color = '';
			$name = '';
	}
?>
<a href="<?php echo get_the_permalink(); ?>" target="_top">
<div class="uma-grid-item" style="">

  <img class="uma-grid-item-img" style="width: 100%;" src="<?php the_post_thumbnail_url('medium'); ?>" alt="Card image cap">
    <p class="card-title color-grey"><?php the_title(); ?></p>
    <?php if ( $type !== '' && $color !== '' ) :?>
    	<p class="color-<?php echo $color; ?> uma-grid-item-type"><small><i class="fa fa-<?php echo $type; ?>"></i> <?php echo $name ?></small></p>
    <?php endif; ?>
</div>
</a>