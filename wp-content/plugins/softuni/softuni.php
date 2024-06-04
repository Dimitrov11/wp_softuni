<?php

/** 
 * Plugin Name:       SoftUni Course Plugin
 * Plugin URI:        https://example.com/plugins/my-plugin/
 * Description:       My first plugin for the course
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      8.0
 * Author:            SoftUni
 * Author URI:        https://softuni.bg/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/myplugin/
 * Text Domain:       softuni
 * Domain Path:       /languages
 */

/**
 * Plugin Structure
 * Main File
 * index.php
 * 
 * assets
 * - css
 * - js
 * - img
 * 
 * includes
 * -files
 * root, if we need some
 * 
 */

// var_dump( 'Test' ); die;


// --------------------------------------------------------------------
/** TO DO:
 * 
 * CPT - Robots - cpt-robots.php
 * Custom taxonomy - su_robot_category_taxonomy()
 * Single view of the CPT - http://local.softuni.com/robot/space-robot/
 * Show post_meta and work with it -  
 * 
 * @TODO - Settings/Options page
 * 
 * Upload this to GitHub
 */
// --------------------------------------------------------------------


// ---------------------------------------------------------------
// LOADING THE FILES - REQUIRE AND INCLUDE

/** 
* --- Includes the file we want, and if it exists - loads.
* --- This file does not need to exist. 
* include 'includes/cpt-robots.php';
*/

/** 
 * --- Load the included file just once.
 * --- Used to limit functionality
 * include_once '/folder/file.php';
 */
 
/** 
 * --- Mandatory loading of the required file
 * require 'includes/cpt-robots.php';
 *  */ 

/** 
* --- Same logic as include_once, but loads the required file once
* require_once '';
*/
// ---------------------------------------------------------------


// ---------------------------------------------------------------

/** HINTS - GOOD PRACTICES
 * 
 * Auto-load - allows you to automatically load classes using an auto-loader;
 * -- Helps when you won't use require or include.
 * 
 * Define - define the version of the plugin;
 * if version is 3.0.0 - use this, else use another
*/
// ---------------------------------------------------------------

// Global variable.
if ( ! defined( 'ROBOTS_INCLUDE' ) ) {
    /* if the "includes" folder name in the "softuni" plugin is renamed, we can
    just rename the last parameter - 'includes', and all files will load correctly.
     */
    define( 'ROBOTS_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes' );
}

// If we want to load more files here, we can with to includes in the path
require ROBOTS_INCLUDE . '/functions.php';
require ROBOTS_INCLUDE . '/cpt-robots.php';