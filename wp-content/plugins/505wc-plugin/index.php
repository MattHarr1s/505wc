<?php
/*
Plugin Name: 11online Custom Plugin
Description: Site Specific Plugin for custom WP sites.
Version:     1.0
Author:      Eric Debelak & Joshua T Garcia
Author URI:  http://11online.us
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
/* Start Adding Functions Below this Line */

/*
* CMB2
*/
//Require CMB2
if (file_exists(dirname(__FILE__).'/cmb2/init.php')) {
    require_once dirname(__FILE__).'/cmb2/init.php';
} elseif (file_exists(dirname(__FILE__).'/CMB2/init.php')) {
    require_once dirname(__FILE__).'/CMB2/init.php';
}

include_once dirname(__FILE__) . '/metaboxes/about.php';
include_once dirname(__FILE__) . '/metaboxes/people.php';
include_once dirname(__FILE__) . '/metaboxes/affiliate.php';
include_once dirname(__FILE__) . '/metaboxes/page.php';