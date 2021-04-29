<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package construc
 */

get_header();
$right_sidebar_active = '';
if (is_active_sidebar( 'sidebar-1' )) {
	$right_sidebar_active = ' right_sidebar_active';
}
?>
	<div id="primary" class="content-area<?php echo esc_attr($right_sidebar_active);?>">
		<main id="main" class="site-main">
			<?php
				get_template_part( 'template-parts/sidebar', 'right' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
