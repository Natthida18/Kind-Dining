<section class="video-invite-section container center">
	<?php
	$invite_title   = get_field( 'video_invite_title' );
	$invite_content = get_field( 'video_invite_content' );
	if ( ! isset( $invite_title ) || empty( $invite_title ) ) {
		?>
		<h2 class="headline-medium">พวกเราต้องการคุณ</h2>
		<?php
	} else {
		?>
		<h2 class="headline-medium"><?php echo esc_html( $invite_title ); ?></h2>
		<?php
	}
	echo '<hr class ="decore">';
	if ( ! isset( $invite_content ) || empty( $invite_content ) ) {
		?>
		<p class="headline-small">ชวนคนไทยให้คำมั่นสัญญาไม่กินเนื้อสัตว์ป่าผิดกฏหมาย เพื่อต่อต้านการค้าสัตว์ป่าผิดกฎหมาย รวมทั้งลดความเสี่ยงของโรคระบาดที่อาจเกิดจากสัตว์ป่า</p>
		<?php
	} else {
		?>
		<p class="headline-small"><?php echo esc_html( $invite_content ); ?></p>
		<?php
	}
	?>
	<div class="bg-section"></div>
	<?php
	$video = new WP_Query(
		array(
			'post_type'      => 'video',
			'posts_per_page' => 3,
		)
	);
	?>
	<div class="video-invite">
	<?php
	while ( $video->have_posts() ) {
		$video->the_post();
		?>
		<div class="video-item">
			<div class="video-invite-background" onclick="openModalVideo()">
				<?php the_post_thumbnail( 'wildlife-team', array( 'class' => 'wildlife-team-img' ) ); ?>
				<img class="play-button" src="<?php echo esc_url( get_theme_file_uri( '/images/play.png' ) ); ?>">
			</div>
			<div id="modalVideo" class="modal">
				<div class="video-content">
				<?php the_content(); ?>
				</div>
			</div>
			<p class="video-invite-title"><?php the_title(); ?></p>
		</div>
		<?php
	}
	?>
	</div>
</section>
