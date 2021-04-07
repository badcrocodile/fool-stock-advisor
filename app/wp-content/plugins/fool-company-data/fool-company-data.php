<?php

/**
 * @link              https://linktodocs.com
 * @since             1.0.0
 * @package           foolish-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Foolish Company Data
 * Plugin URI:        https://github.com/badcrocodile/foolish-project
 * Description:       Leverages Financial Modeling Prep API to return data about publicly traded companies.
 * Version:           1.0.0
 * Author:            Jason Pollock
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fool
 */

// If this file is called directly, abort.
use Fool\AddAction;

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Require the autoloader
require_once 'vendor/autoload.php';

// Enqueue all of our scripts and styles
add_action( 'wp_enqueue_scripts', [ new AddAction(), 'enqueueScripts' ] );

// Custom widgets
//add_action( 'widgets_init', [ new WidgetInit(), 'initWidgets' ] );

// Adding filters:
// add_filter( 'authenticate', [ new AddFilter(), 'methodName' ], 1, 3 );

