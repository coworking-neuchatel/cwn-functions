<?php
/**
 * Plugin Name: Coworking Neuchatel Functions
 * Plugin URI: https://coworking-neuchatel.ch
 * Description: This plugin adds functionality to the Coworking Neuchatel website.
 * Version: 0.0.4+build20181213
 * Author: Manuel Schmalstieg
 * Author URI: http://ms-studio.net
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


// Basics
include_once (plugin_dir_path(__FILE__).'cwn-init.php');

// Post Types
include_once (plugin_dir_path(__FILE__).'cwn-post-types.php');

// Taxonomies
include_once (plugin_dir_path(__FILE__).'cwn-taxonomies.php');

// ACF
include_once (plugin_dir_path(__FILE__).'cwn-acf.php');

// Jetpack
include_once (plugin_dir_path(__FILE__).'cwn-jetpack.php');

// Shortcodes
include_once (plugin_dir_path(__FILE__).'cwn-shortcodes.php');

// Formidable
include_once (plugin_dir_path(__FILE__).'cwn-formidable.php');

// Tidio
include_once (plugin_dir_path(__FILE__).'cwn-tidio.php');