<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php
	if (is_page()) {
		// Code to display when on a page
		dynamic_sidebar('sidebar-2');
	} else {
		dynamic_sidebar('sidebar-1');
	}


	// if (!is_active_sidebar('sidebar-1') || !is_active_sidebar('sidebar-2')) {
	// 	return;
	// }
	?>
	<?php get_template_part('template-parts/work', 'categories'); ?>
	<?php get_template_part('template-parts/testimonials'); ?>

</aside><!-- #secondary -->