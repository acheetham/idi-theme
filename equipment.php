<?php
/*
Template Name: Equipment List
*/
?>
<?php get_header(); ?>

<div class="fl-centered fl-col-mixed fl-site-wrapper idi-equipment">
    <div class="fl-col-fixed fl-force-left">
        <?php get_sidebar('equipment');?>
    </div>
    <div id="content" class="fl-col-flex idi-two-column">
		<h2>Equipment</h2>
		<ul class="fl-grid">
			<li><a href="<?php echo get_home_url(); ?>/booking/equipment/keyboards"><img src="../../wp-content/themes/idi-theme/images/people/peopleplaceholder.png"/>Keyboards</a></li>
			<li><a href="<?php echo get_home_url(); ?>/booking/equipment/pointing-devices"><img src="../../wp-content/themes/idi-theme/images/people/peopleplaceholder.png"/>Pointing devices</a></li>
			<li><a href="<?php echo get_home_url(); ?>/booking/equipment/displays"><img src="../../wp-content/themes/idi-theme/images/people/peopleplaceholder.png"/>Displays</a></li>
			<li><img src="../../wp-content/themes/idi-theme/images/people/peopleplaceholder.png"/>Magnifiers</li>
			<li><img src="../../wp-content/themes/idi-theme/images/people/peopleplaceholder.png"/>Cameras</li>
		</ul>
	</div>

</div>
		
<?php get_footer(); ?>
