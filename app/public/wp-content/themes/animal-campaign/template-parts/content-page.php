<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Animal_Campaign
 */

?>

<div class="page-template container center">
	<?php the_post_thumbnail( 'page-template', array( 'class' => 'page-img' ) ); ?>
	<div class="page-description">
		<h1 class="headline-large"><?php the_title(); ?></h1>
		<hr class="page decore">
		<div class="headline-small"><?php the_content(); ?></div>
	</div>
	<div class="page-template-bg"></div>
</div>
