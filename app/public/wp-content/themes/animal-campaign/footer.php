<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Campaign
 */

?>

<footer class="footer-section">
	<?php
	if ( is_active_sidebar( 'footer-1' ) ) {
		?>
		<ul id="sidebar" class="footer">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</ul>
		<?php
	}
	?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
