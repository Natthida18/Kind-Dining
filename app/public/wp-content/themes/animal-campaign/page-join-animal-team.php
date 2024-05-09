<?php get_header();
get_template_part( 'template-parts/content', 'page' );
?>
<div class="wildlife-team-section container center">
	<p class="wildlife-team-title headline-medium center">เลือกทีมของคุณ</p>
	<hr class="decore">	
	<div class="bg-section"></div>
	
	<?php
	$animal_teams = new WP_Query(
		array(
			'post_type'      => 'animal',
			'posts_per_page' => 5,
		)
	);

	if ( $animal_teams->have_posts() ) {
		?>
		<div class="wildlife-team">
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
</div>
<div class="bar-container container center">
	<p class="headline-medium">จำนวนผู้ยืนยันไม่กินเนื้อสัตว์ป่าผิดกฎหมาย</p>
	<hr class="decore">

	<?php
	while ( $animal_teams->have_posts() ) {
		$animal_teams->the_post();
		$join_counts[]       = get_field( 'join_team_count' );
		$titles[]            = get_the_title();
		$eng_name_wildlife[] = get_field( 'eng_name_wildlife_animal' );
		$colors[]            = get_field( 'bar_color' );
		$bar_imgs[]          = get_field( 'bar_image' );
	}
	?>

	<div class="bar-chart">
		<?php
		$max_value = max( $join_counts );
		foreach ( $join_counts as $index => $value ) {
			$bar_height = ( $value / $max_value ) * 100;
			?>
				<div class="bar-col">
					<div class="bar-item">
						<p class="headline-medium">
						<?php
						if ( $value >= 1000 ) {
							$value_format = number_format( floor( $value / 100 ) / 10, 1 ) . ' k';
						} elseif ( $value >= 1000000 ) {
							$value_format = number_format( floor( $value / 100000 ) / 10, 1 ) . ' m';
						} else {
							$value_format = number_format( $value );
						}

						echo esc_html( $value_format );
						?>
						</p>
						<img class="bar-img" src="<?php echo esc_url( $bar_imgs[ $index ] ); ?>">
						<?php
						if ( $join_counts === $max_value ) {
							echo '<div class="bar" style="height:100%;"></div>';
						} else {
							echo '<div class="bar" style="height: ' . esc_attr( $bar_height ) . '%; background-color: ' . esc_attr( $colors[ $index ] ) . ';"></div>';
						}
						?>
					</div>
					<div class="line"></div>
					<div class="bar-title">
						<p class="bar-th-title"><?php echo esc_html( $titles[ $index ] ); ?></p>
						<p class="bar-en-title"><?php echo esc_html( $eng_name_wildlife[ $index ] ); ?></p>
					</div>
				</div>
			<?php
		}
		?>
	</div>

</div>
<?php
get_footer();
?>
