<?php get_header(); ?>
<div class="page-background-img" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/bg.png' ) ); ?>);">
	<div class="container center">
	<?php
		get_template_part( 'template-parts/content', 'thankyou' );
		get_template_part( 'template-parts/content', 'social' );
	?>
		<a href="<?php echo esc_url( get_theme_file_uri( '/images/team-tiger.jpeg' ) ); ?>" download>
			<button class="btn">ดาวน์โหลดรูป</button>
		</a>
	</div>
</div>
<?php
get_footer();
