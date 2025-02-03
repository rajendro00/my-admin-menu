<?php

/**
 * Plugin Name: My Admin Menu
 * Plugin URI:  https://yourwebsite.com
 * Description: WordPress Admin Menu 
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  https://yourwebsite.com
 * License:     GPL2
 */

 if(!defined('ABSPATH')){
    exit;
 }

// function

require_once plugin_dir_path(__FILE__) . 'my-admin-functions.php';

//  admin-page
require_once plugin_dir_path(__FILE__) .'admin/admin-page.php';

// css call

function my_admin_enqueue_style(){
   wp_enqueue_style('my-admin-style', plugin_dir_url(__FILE__). 'assets/css/admin-style.css');
}

add_action('login_enqueue_scripts', 'my_admin_enqueue_style');

