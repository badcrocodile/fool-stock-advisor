<?php

/**
 * @link              https://linktodocs.com
 * @since             1.0.0
 * @package           foolish-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Foolish Shortcodes
 * Plugin URI:        https://github.com/badcrocodile/foolish-project
 * Description:       Contains shortcodes relevant to the needs of the team and content authors
 * Version:           1.0.0
 * Author:            Jason Pollock
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fool
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

use FoolShortcodes\AddShortcode;

// Require the autoloader
require_once 'vendor/autoload.php';

// Enqueue all of our scripts and styles
//add_action( 'wp_enqueue_scripts', [ new AddAction(), 'enqueueScripts' ] );

// Custom widgets
//add_action( 'widgets_init', [ new WidgetInit(), 'initWidgets' ] );

// Adding filters:
// add_filter( 'authenticate', [ new AddFilter(), 'methodName' ], 1, 3 );

/**
 * Expands ticker into full Company Name, Ticker, and Exchange
 * Usage: [ticker]GOOG[/ticker]
 */
add_shortcode( 'ticker', [ new AddShortcode(), 'expandTicker' ] );
