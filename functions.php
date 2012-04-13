<?php

/**
 *  Add IDI-specific JS files to the header
 */
function add_idi_files() {
	$baseurl = get_stylesheet_directory_uri();
	echo '<script type="text/javascript" src="' . $baseurl . '/lib/parallax-scrolling.js" ></script>' . "\n";
	echo '<script type="text/javascript" src="' . $baseurl . '/idi.js" ></script>' . "\n";	
}
add_action('wp_head', 'add_idi_files');

/**
 * Customize the 'more' link at the end of a post excerpt
 */
function idi_excerpt_more($more) {
	return ' <a class="more" href="' + the_permalink() + '">(more)</a>';

}
add_filter('excerpt_more', 'idi_excerpt_more');

/**
 * Brand the login page with IDI-specific styling
 */
function brand_login_page() {
	echo '<link rel="stylesheet" type="text/css" media="all" href="'. get_stylesheet_directory_uri() .'/login-page.css" />';
	echo '<script type="text/javascript" src="' . get_template_directory_uri() .'/infusion/MyInfusion.js"></script>';
	echo '<script type="text/javascript">
		function loginalt() {
			var logoLink = $("#login a");
			logoLink.attr({
				href: "' . site_url() . '",
				title: "' . get_bloginfo('name') . '"
			});
		}
	window.onload=loginalt;
	</script>';
}
add_action('login_head', 'brand_login_page');

?>
