<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Animal_Campaign
 */

get_header();
?>
<div style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/bg.png' ) ); ?>);">
	<div class="container">
		<h1 class="headline-large center"><?php the_title(); ?></h1>
		<hr class="decore">
		<div class="page-content"><?php the_content(); ?></div>
	</div>
</div>
<?php
get_footer();
