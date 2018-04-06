<?php
/*
Plugin Name: Test Auto update Git
Plugin URI:
Description: Test
Version:     0.3
Author:      Niels
Author URI:
*/


/* code .. */


/* end code */

/* update from github if any */
require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/hostmatters/Test-Auto-update/',
		__FILE__,
		'Test-Auto-update'
	);
