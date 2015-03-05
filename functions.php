<?php

	// Theme support


	// Setup thumbnail sizes


	// Load assets
	function responsa_assets() {
		wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', false, null, 'all');
	}

	add_action( 'wp_enqueue_scripts', 'responsa_assets' );


	// Custom page title
	function responsa_wp_title( $title ){
		global $page, $paged;

		if ( is_feed() )
			return $title;

		$site_description = get_bloginfo( 'description' );

		$filtered_title = $title . get_bloginfo( 'name' );
		$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
		$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

		return $filtered_title;
	}

	add_filter( 'wp_title', 'responsa_wp_title' );

?>
