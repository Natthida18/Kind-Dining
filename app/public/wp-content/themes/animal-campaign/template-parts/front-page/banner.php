<?php
$page_banner_background_image = get_field( 'page_banner_background_image' );
$background_image_url         = ( ! isset( $page_banner_background_image ) || empty( $page_banner_background_image ) ) ? get_theme_file_uri( '/images/home-bg.png' ) : $page_banner_background_image;

$page_banner_tagline = get_field( 'page_banner_tagline' );
?>
<section class="page-banner center" style="background-image: url(<?php echo esc_url( $background_image_url ); ?>)">
	<div class="tagline-wrapper">
		<?php
		if ( ! isset( $page_banner_tagline ) || empty( $page_banner_tagline ) ) {
			?>
			<p class="tagline">KIND DINING<br>กิน.<span class="bold">กอด</span>.โลก</p>
			<?php
		} else {
			?>
			<p class="tagline"><?php echo esc_html( $page_banner_tagline ); ?></p>
			<?php
		}
		?>
		<hr class ="new-decore">
	</div>
</section>
