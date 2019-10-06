<?php

/*	 Enqueue scripts and styles.	*/

 function custom_scripts() {

	 // Theme stylesheet.
	 wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css' );

	 // Theme Scripts.
	 wp_enqueue_script( 'global-js', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

 }

 // Stop wordpress and plugin updates
function remove_core_updates() {
	global $wp_version;

	return (object) array(
		'last_checked'    => time(),
		'version_checked' => $wp_version,
		'updates'         => array()
	);
}

// Block updates
if ( $remove_updates ) {
	remove_action( 'load-update-core.php', 'wp_update_plugins' );
	add_filter( 'pre_site_transient_update_core', 'remove_core_updates' );
	add_filter( 'pre_site_transient_update_plugins', 'remove_core_updates' );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

locate_template('functions/custom-base.php', TRUE);

locate_template('functions/custom-front-end.php', TRUE);

locate_template('functions/custom-post-types.php', TRUE);