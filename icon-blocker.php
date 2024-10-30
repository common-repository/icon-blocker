<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Icon Blocker
 * Description:       Icon Blocker is a gutenberg block to add icon anywhere in gutenberg editor.
 * Version:           0.1.0
 * Author:            Robiul Awal
 * Author URI:        https://www.linkedin.com/company/wp-codezen
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       iconblock
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

function iconblock_load_plugin_textdomain() {
	load_plugin_textdomain(
		'iconblock',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages/'
	);
}
add_action( 'plugins_loaded', 'iconblock_load_plugin_textdomain' );

function iconblock_block_init() {
	register_block_type( __DIR__ . '/build/icon' );
}
add_action( 'init', 'iconblock_block_init' );
