<section>
<?php
$logos = new WP_Query(
	array(
		'post_type'      => 'logo',
		'posts_per_page' => 7,
		'orderby'        => 'date',
		'order'          => 'ASC',
	)
);

if ( $logos->have_posts() ) {
	?>
	<section class="partner-logo-section container">
		<?php
		while ( $logos->have_posts() ) {
			$logos->the_post();
			the_post_thumbnail( 'partner-logo' );
		}
		?>
	</section>
	<?php
}
wp_reset_postdata();
?>
</section>
