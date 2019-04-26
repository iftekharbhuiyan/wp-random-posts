<?php
/**
 * default post template
 * snippet will go inside default loop
 */
if (have_posts()) {
	while (have_posts()) {
		the_post();
		// get list of random posts
		if (function_exists('get_random_posts')) {
			echo get_random_posts('2');
		}
	}
}
?>