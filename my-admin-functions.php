<?php 

function my_admin_menu_create(){
    add_menu_page(
        'Custom admin Menu',
        'My Menu',
        'manage_options',
        'my-admin-menu',
        'my_admin_menu_pages',
        'dashicons-admin-generic',
        7
    );
 }

 add_action('admin_menu', 'my_admin_menu_create');


 