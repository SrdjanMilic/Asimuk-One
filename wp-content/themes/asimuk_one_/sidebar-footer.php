<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Asimuk One
 * @since Asimuk One 1.6
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #footer-sidebar -->
