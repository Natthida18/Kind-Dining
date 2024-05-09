<?php get_header();
get_template_part( 'template-parts/content', 'page' );
?>
<div class="container">
	<p class="partner headline-medium center">องค์กรที่เข้าร่วมโครงการ</p>
	<hr class="decore">
	<div id="modalLogo" class="modal center">
		<div class="modal-content">
			<span class="close-modal" onclick="closeModal()">&times;</span>
			<img id="modalImage" class="modal-img" src="">
			<p id="modalTitleTH" class="modal-title-th">Title go here</p>
			<p id="modalTitleEN" class="modal-title-en">Title go here</p>
			<div id="modalContent" class="headline-small modal-description left">Description go here</div>
		</div>
	</div>

	<?php
	$logos = new WP_Query(
		array(
			'post_type' => 'logo',
		)
	);

	if ( $logos->have_posts() ) {
		?>
		<section class="logos-section">
			<?php
			while ( $logos->have_posts() ) {
				$logos->the_post();
				$logo_id       = get_the_ID();
				$logo_url      = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
				$logo_en_title = get_the_title();
				$logo_th_title = get_field( 'logo_th_name' );
				$logo_content  = get_the_content();
				the_post_thumbnail(
					'thumbnail',
					array(
						'onclick' => "logoClick($logo_id, '$logo_url', '" . esc_js( $logo_en_title ) . "', '" . esc_js( $logo_th_title ) . "', '" . esc_js( $logo_content ) . "' )",
						'class'   => 'logo-partner-img',
					)
				);
			}
			?>
		</section>
		<?php
	}
	wp_reset_postdata();
	?>
</div>
<?php
get_footer();
