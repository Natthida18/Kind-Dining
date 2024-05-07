<section class="wildlife-team-section container center">
	<?php
	$wildlife_team_title   = get_field( 'wildlife_team_title' );
	$wildlife_team_content = get_field( 'wildlife_team_content' );
	if ( ! isset( $wildlife_team_title ) || empty( $wildlife_team_title ) ) {
		?>
		<h2 class="headline-medium">เลือกทีมสัตว์ป่า</h2>
		<?php
	} else {
		?>
		<p class="headline-medium"><?php echo esc_html( $wildlife_team_title ); ?></p>
		<?php
	}
	echo '<hr class ="decore">';
	if ( ! isset( $wildlife_team_content ) || empty( $wildlife_team_content ) ) {
		?>
		<p class="headline-small">คลิกยืนยันไม่กินเนื้อสัตว์ป่าผิดกฎหมาย เพื่อร่วมทีมของคุณ</p>
		<?php
	} else {
		?>
		<p><?php echo esc_html( $wildlife_team_content ); ?></p>
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
