<?php
$background_video = get_field( 'video_background' );
$video_title      = get_field( 'video_title' );

$background_video_url = ( ! isset( $background_video ) || empty( $background_video ) ) ? get_theme_file_uri( '/images/bg-video.jpeg' ) : $background_video;
?>
<section class="video-focus center" style="background-image: url(<?php echo esc_url( $background_video_url ); ?>);" onclick="openModalVideoFocus()">
	<div class="overlay overlay-video-focus">
		<img src="<?php echo esc_url( get_theme_file_uri( '/images/play2.png' ) ); ?>">
		<?php
		if ( ! isset( $video_title ) || empty( $video_title ) ) {
			?>
			<p class="video-focus-title">Focus on WILDLIFE</p>
			<?php
		} else {
			?>
		<p class="video-focus-title"><?php echo esc_html( $video_title ); ?></p>
			<?php
		}
		?>
		<hr class="new-decore">
		<div id="modalVideoFocus" class="modal">
			<div class="video-content">
				<?php the_field( 'video_focus_content' ); ?>
			</div>	
		</div>
	</div>
</section>
