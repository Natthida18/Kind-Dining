<?php get_header();
get_template_part( 'template-parts/content', 'page' );
?>
<div class="wildlife-team-section container center">
	<p class="my-team headline-medium center">เลือกทีมของคุณ</p>
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
<div class="container center">
	<p class="headline-medium">จำนวนผู้ยืนยันไม่กินเนื้อสัตว์ป่าผิดกฎหมาย</p>
	<hr class="decore">

	<div class="bar-container container">
		<?php
		while ( $animal_teams->have_posts() ) {
			$animal_teams->the_post();
			$join_counts[]       = get_field( 'join_team_count' );
			$titles[]            = get_the_title();
			$eng_name_wildlife[] = get_field( 'eng_name_wildlife_animal' );
		}
		$max_value = max( $join_counts );
		$bar_color = array( '#B4D6B1', '#295248', '#538053', '#7EB387', '#7AA278' );
		$bar_img   = array(
			get_template_directory_uri() . '/images/bar-tiger.png',
			get_template_directory_uri() . '/images/bar-langur.png',
			get_template_directory_uri() . '/images/bar-pangolin.png',
			get_template_directory_uri() . '/images/bar-hornbill.png',
			get_template_directory_uri() . '/images/bar-turtle.png',
		);

		foreach ( $join_counts as $index => $value ) {
			$bar_height = ( $value / $max_value ) * 100;
			?>
			<div class="bar-chart">
				<p class="headline-medium"><?php echo esc_html( $value ); ?></p>
				<img class="bar-img" src="<?php echo esc_url( $bar_img[ $index ] ); ?>">
				<?php
				if ( $join_counts === $max_value ) {
					echo '<div class="bar" style="height:100%;"></div>';
				} else {
					echo '<div class="bar" style="height: ' . esc_attr( $bar_height ) . '%; background-color: ' . esc_attr( $bar_color[ $index ] ) . ';"></div>';
				}
				?>
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
