<?php
get_header();

while ( have_posts() ) {
	the_post(); ?>

	<div class="single-thumbnail" onclick="openModal()">
	<?php

	if ( has_post_thumbnail() ) {
		the_post_thumbnail(
			'',
			array(
				'class' => 'single-thumbnail-img',
			)
		);
	}
	?>
		<img class="play-button" src="<?php echo esc_url( get_theme_file_uri( '/images/play.png' ) ); ?>">
	</div>
	<div id="modalYoutube" class="modal">
		<div class="youtube-content">
			<?php the_field( 'youtube_content' ); ?>
		</div>
	</div>
	<div class="container-medium center">
		<h1 class="single-animal-title headline-medium"><?php the_title(); ?></h1>
		<hr class="decore">
		<div class="headline-small left"><?php the_content(); ?></div>
		<p class="total-team left">ผู้สัญญาร่วมทีมแล้ว <?php the_field( 'join_team_count' ); ?> คน</p>
		<button id="clickButton" class="btn center" data-animal="<?php the_ID(); ?>">เข้าร่วมทีม</button>
	</div>
	<?php
}

get_footer();
?>

<script>
jQuery(document).ready(function($) {
	$('#clickButton').click(function() {
		var animalID = $(this).data('animal');
		
		$.ajax({
			beforeSend: (xhr) => {
				xhr.setRequestHeader('X-WP-Nonce', kindDining.nonce);
			},
			url: kindDining.root_url + '/wp-json/animal/v1/joinTeam?animal=' + animalID,
			type: 'GET',
			success: function(response) {
				window.location.href = response.redirect_url;
				console.log(response.message);
				console.log('Data sent successfully!');
			},
			error: function(error) {
				console.error('Error:', error);
			}
		});

	});
});
</script>
