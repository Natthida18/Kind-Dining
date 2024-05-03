<?php get_header();

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

<section class="video-section container center">
	<?php
	$invite_title = get_field( 'video_invite_title' );
	$invite_des   = get_field( 'video_invite_des' );
	if ( ! isset( $invite_title ) || empty( $invite_title ) ) {
		?>
		<h2 class="home-title headline-medium">พวกเราต้องการคุณ</h2>
		<?php
	} else {
		?>
		<h2 class="home-title headline-medium"><?php echo esc_html( $invite_title ); ?></h2>
		<?php
	}
	echo '<hr class ="decore">';
	if ( ! isset( $invite_des ) || empty( $invite_des ) ) {
		?>
		<p class="headline-small">ชวนคนไทยให้คำมั่นสัญญาไม่กินเนื้อสัตว์ป่าผิดกฏหมาย เพื่อต่อต้านการค้าสัตว์ป่าผิดกฎหมาย รวมทั้งลดความเสี่ยงของโรคระบาดที่อาจเกิดจากสัตว์ป่า</p>
		<?php
	} else {
		?>
		<p class="headline-small"><?php echo esc_html( $invite_des ); ?></p>
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
	<div class="video">
	<?php
	while ( $video->have_posts() ) {
		$video->the_post();
		?>
		<div class="video-item">
			<div class="video-thumbnail" onclick="openModalVideo()">
				<?php the_post_thumbnail( 'wildlife-team', array( 'class' => 'wildlife-team-img' ) ); ?>
				<img class="play-button" src="<?php echo esc_url( get_theme_file_uri( '/images/play.png' ) ); ?>">
			</div>
			<div id="modalVideo" class="modal">
				<div class="video-content">
				<?php the_content(); ?>
				</div>
			</div>
			<p class="video-title"><?php the_title(); ?></p>
		</div>
		<?php
	}
	?>
	</div>
</section>

<section class="hashtag-campaign center" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'images/bg1.jpeg' ) ); ?>);">
	<div class="overlay overlay-hashtag">
		<?php
		$hashtag_des = get_field( 'hashtag_description' );
		$hashtag     = get_field( 'hashtag' );
		if ( ! isset( $hashtag_des ) || empty( $hashtag_des ) ) {
			?>
			<h2 class="hashtag-des">มาสร้างค่านิยมคนรุ่นใหม่ ไม่กินสัตว์ป่าผิดกฎหมาย</h2>
			<?php
		} else {
			?>
			<p class="hashtag-des"><?php echo esc_html( $hashtag_des ); ?></p>
			<?php
		}

		if ( ! isset( $hashtag ) || empty( $hashtag ) ) {
			?>
			<p class="hashtag">#SayNotoIllegalWildMeat</p>
			<?php
		} else {
			?>
			<p class="hashtag"><?php echo esc_html( $hashtag ); ?></p>
			<?php
		}
		?>
		<hr class="new-decore"></hr>
	</div>
</section>

<section class="wildlife-team-section container center">
	<?php
	$wildlife_team_title = get_field( 'wildlife_team_title' );
	$wildlife_team_des   = get_field( 'wildlife_team_des' );
	if ( ! isset( $wildlife_team_title ) || empty( $wildlife_team_title ) ) {
		?>
		<h2 class="home-title headline-medium">เลือกทีมสัตว์ป่า</h2>
		<?php
	} else {
		?>
		<p class="home-title headline-medium"><?php echo esc_html( $wildlife_team_title ); ?></p>
		<?php
	}
	echo '<hr class ="decore">';
	if ( ! isset( $wildlife_team_des ) || empty( $wildlife_team_des ) ) {
		?>
		<p class="headline-small">คลิกยืนยันไม่กินเนื้อสัตว์ป่าผิดกฎหมาย เพื่อร่วมทีมของคุณ</p>
		<?php
	} else {
		?>
		<p><?php echo esc_html( $wildlife_team_des ); ?></p>
		<?php
	}
	echo '<div class="bg-section"></div>';

	$animal_teams = new WP_Query(
		array(
			'post_type' => 'animal',
		)
	);

	if ( $animal_teams->have_posts() ) {
		?>
	<div class="wildlife-team center">
		<?php
		while ( $animal_teams->have_posts() ) {
			$animal_teams->the_post();
			?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'wildlife-team', array( 'class' => 'wildlife-team-img' ) ); ?>
			</a>
			<?php

		}
		?>
	</div>
		<?php
	}
		wp_reset_postdata();
	?>
</section>

<?php
$background_video = get_field( 'video_background' );
$video_title      = get_field( 'video_title' );

$background_video_url = ( ! isset( $background_video ) || empty( $background_video ) ) ? get_theme_file_uri( '/images/bg-video.jpeg' ) : $background_video;
?>
<section class="video-focus" style="background-image: url(<?php echo esc_url( $background_video_url ); ?>);" onclick="openModalVideoFocus()">
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
	<section class="logos-section">
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

<?php
get_footer();
