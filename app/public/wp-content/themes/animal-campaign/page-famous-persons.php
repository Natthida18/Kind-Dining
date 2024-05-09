<?php get_header(); ?>
<div class="page-background-img" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/bg.png' ) ); ?>);">
	<div class="famous-persons container center">
		<h1 class="headline-large"><?php the_title(); ?></h1>
		<hr class="decore">

		<div class="famous-person-wrapper">
		<?php
		if ( have_rows( 'famous_persons' ) ) {
			while ( have_rows( 'famous_persons' ) ) {
				the_row();
				?>
				<div class="famous-person">
					<?php
					if ( ! empty( get_sub_field( 'image' ) ) ) {
						?>
					<div class="bg-famous-person" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/bg-famous1.png' ) ); ?>)">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'logo-small' ); ?>
					</div>
						<?php
					}
					?>
					<p class="headline-medium famous-person-th-name"><?php the_sub_field( 'thai_name' ); ?></p>
					<p class="famous-person-en-name"><?php the_sub_field( 'english_name' ); ?></p>
				</div>
				<?php
			}
		}
		?>
		</div>

	</div>
</div>
<?php
get_footer();
