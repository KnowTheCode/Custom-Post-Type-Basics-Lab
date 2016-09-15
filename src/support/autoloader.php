<?php
/**
 * File autoloader functionality
 *
 * @package     KnowTheCode\TeamBios\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode\TeamBios\Support;

/**
 * Load all of the plugin's files.
 *
 * @since 1.0.0
 *
 * @param string $plugin_root_dir
 *
 * @return void
 */
function autoload_files( $plugin_root_dir ) {
	$src_directory = $plugin_root_dir . 'src/';

	$filenames = array(
		 'custom/custom-post-type',
	);

	foreach( $filenames as $filename ) {
		include_once( $src_directory . $filename . '.php' );
	}
}
