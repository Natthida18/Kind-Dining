<?php
function count_join_team_route() {
	register_rest_route(
		'animal/v1',
		'joinTeam',
		array(
			'methods'  => 'GET',
			'callback' => 'count_join_team',
		)
	);
}

add_action( 'rest_api_init', 'count_join_team_route' );

function count_join_team( $data ) {
	$animal_id = $data['animal'];

	$count = get_post_meta( $animal_id, 'join_team_count', true );
	if ( '' === $count ) {
		$response = array(
			'success' => false,
			'message' => 'ไม่สามารถอัปเดตข้อมูลได้',
		);
	}
	++$count;
	update_post_meta( $animal_id, 'join_team_count', $count );
	$redirect_url = get_field( 'thank_you_link', $animal_id );

	$response = array(
		'success'      => true,
		'message'      => 'อัปเดตข้อมูลสำเร็จ',
		'redirect_url' => $redirect_url,
	);

	return rest_ensure_response( $response );
}
