<?php
/**
 * Plugin Name: Coetrappers Media Sync
 * Description: Starter plugin for syncing cloud-hosted media metadata into WordPress.
 * Version: 0.1.0
 * Author: Coetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: coetrappers-media-sync
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_MEDIA_SYNC_VERSION', '0.1.0' );
define( 'COETRAPPERS_MEDIA_SYNC_FILE', __FILE__ );
define( 'COETRAPPERS_MEDIA_SYNC_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_MEDIA_SYNC_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_MEDIA_SYNC_PATH . 'includes/class-coetrappers-media-sync.php';

function coetrappers_media_sync_bootstrap() {
	$plugin = new \Coetrappers\CoetrappersMediaSync\CoetrappersMediaSyncPlugin();
	$plugin->boot();
}

coetrappers_media_sync_bootstrap();
