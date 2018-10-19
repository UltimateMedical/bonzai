<?php
	$tags = get_tags();
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
<div style="" class="tag-slider mg-t-15 mg-b-15 mg-l-20 mg-r-20">
  <?php foreach ($tags as $tag) :?>
  	<a href="<?php echo get_tag_link( $tag->term_id ); ?>"><div class="badge pd-t-10 pd-b-10 pd-l-25 pd-r-25 bg-<?php echo $colors[$counter % 6]; ?> color-white"><h6 class="mg-b-0"><?php echo $tag->name;?></h6></div></a>
  	<?php $counter++; ?>
  <?php endforeach; ?>
</div>
<script type="text/javascript">
	var slider = tns({
    container: '.tag-slider',
    items: 10,
    gutter: 10,
    autoWidth: true,
    rewind: true,
    arrowKeys: true,
    controlsText: ["<i class='fa fa-chevron-left color-grey'></i>", "<i class='fa fa-chevron-right color-grey'></i>"],
    nav: false
  });
</script>
<style>
.tns-controls {
	position: absolute;
	width: 100%;
	z-index: 9999999999999;
}
.tns-controls button {
	background-color: white;
	padding: 25px 5px;
	border: none;

}
.tns-controls button:nth-child(2) {
	float: right;
}
</style>