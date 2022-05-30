<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Folias', // Name of theme
		'theme_slug'     => 'folias', // Theme slug
		'version'        => '1.0.8', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'folias' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'folias' ),
		'license-key'               => __( 'License Key', 'folias' ),
		'license-action'            => __( 'License Action', 'folias' ),
		'deactivate-license'        => __( 'Deactivate License', 'folias' ),
		'activate-license'          => __( 'Activate License', 'folias' ),
		'status-unknown'            => __( 'License status is unknown.', 'folias' ),
		'renew'                     => __( 'Renew?', 'folias' ),
		'unlimited'                 => __( 'unlimited', 'folias' ),
		'license-key-is-active'     => __( 'License key is active.', 'folias' ),
		'expires%s'                 => __( 'Expires %s.', 'folias' ),
		'expires-never'             => __( 'Lifetime License.', 'folias' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'folias' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'folias' ),
		'license-key-expired'       => __( 'License key has expired.', 'folias' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'folias' ),
		'license-is-inactive'       => __( 'License is inactive.', 'folias' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'folias' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'folias' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'folias' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'folias' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'folias' ),
	)

);
