<?php

/** Plugin Name:      SoftUni Course Plugin
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


/**
 * CPT - Robots
 * Custom taxonomy
 * Single view of the CPT
 * Settings/Options page if we have time
 * 
 * Upload this to GitHub
 */


// LOAD FILES
// ---------------------------------------------
// Always includes the file that we want
    //  include 'includes/cpt-robots.php';

// Load the included file just once 
    //  include_once '';
 
// MUST load the file, because we want the CPT
    //  require 'includes/cpt-robots.php';

// Same logic as require, but load the file once
    //  require_once '';
// ---------------------------------------------

// HINT
// define - version of the plugin

if ( ! defined( 'ROBOTS_INCLUDE' ) ) {
    /* if the "includes" folder name in the softuni plugin is renamed, we can
    just rename the last parameter - 'includes', and all files will load correctly */
    define( 'ROBOTS_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes' );
}

// If we want to load more files here, we can with to includes in the path
 require ROBOTS_INCLUDE . '/cpt-robots.php';
 require ROBOTS_INCLUDE . '/functions.php';