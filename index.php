<?php
/*
Plugin Name: Test Auto update Git
Plugin URI:
Description: Test
Version:     0.1
Author:      Niels
Author URI:
*/


/* code .. */


/* end code */

/* init github updater */

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {
	include_once 'updater.php';
	define( 'WP_GITHUB_FORCE_UPDATE', true );
	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin
        $config = array(
			'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
			'proper_folder_name' => 'Test-Auto-update', // this is the name of the folder your plugin lives in
			'api_url' => 'https://api.github.com/repos/hostmatters/Test-Auto-update', // the GitHub API url of your GitHub repo
			'raw_url' => 'https://github.com/hostmatters/Test-Auto-update/archive/master', // the GitHub raw url of your GitHub repo
			'github_url' => 'https://github.com/hostmatters/Test-Auto-update', // the GitHub url of your GitHub repo
			'zip_url' => 'https://github.com/hostmatters/Test-Auto-update/archive/master.zip', // the zip url of the GitHub repo
			'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
			'requires' => '4.9.5', // which version of WordPress does your plugin require?
			'tested' => '4.9.5', // which version of WordPress is your plugin tested up to?
			'readme' => 'README.md', // which file to use as the readme for the version number
			'access_token' => '', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
		);
		new WP_GitHub_Updater($config);
	}
}
