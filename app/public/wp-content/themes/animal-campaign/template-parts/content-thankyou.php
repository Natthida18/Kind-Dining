<?php
$thank_you_title = get_field( 'thank_you_title' );
$thank_you_team  = get_field( 'team_crest' );
if ( ! isset( $thank_you_title ) || empty( $thank_you_title ) ) {
	?>
	<h2 class="headline-large">ขอบคุณที่ยืนยันไม่กินเนื้อสัตว์ป่าผิดกฎหมาย</h2>
	<?php
} else {
	?>
	<h2 class="headline-large"><?php echo esc_html( $thank_you_title ); ?></h2>
	<?php
}
if ( has_post_thumbnail() ) {
	if ( ! isset( $thank_you_team ) || empty( $thank_you_team ) ) {
		?>
	<p class="team-crest">ตราประจำทีมของคุณ</p>
		<?php
	} else {
		?>
	<p class="team-crest"><?php echo esc_html( $thank_you_team ); ?></p>
		<?php
	}
	?>
<hr class="decore">
	<?php
	the_post_thumbnail( '', array( 'class' => 'thankyou-team-img' ) );
}
