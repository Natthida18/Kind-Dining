<section class="hashtag-campaign center" style="background-image: url(<?php echo esc_url( get_theme_file_uri( 'images/bg1.jpeg' ) ); ?>);">
	<div class="overlay overlay-hashtag">
		<?php
		$hashtag_title = get_field( 'hashtag_title' );
		$hashtag       = get_field( 'hashtags' );
		if ( ! isset( $hashtag_title ) || empty( $hashtag_title ) ) {
			?>
			<h2 class="hashtag-title">มาสร้างค่านิยมคนรุ่นใหม่ ไม่กินสัตว์ป่าผิดกฎหมาย</h2>
			<?php
		} else {
			?>
			<h2 class="hashtag-title"><?php echo esc_html( $hashtag_title ); ?></h2>
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
