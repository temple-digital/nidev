<?php
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