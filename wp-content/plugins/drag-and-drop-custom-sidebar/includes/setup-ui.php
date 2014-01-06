<?php
	add_action('admin_menu','set_real_sidebar_menu');
    function set_real_sidebar_menu(){
        add_menu_page('REAL Sidebar', 'Sidebar Settings', 'manage_options', dirname(__FILE__).'/admin.php', '');
    }
    $e = json_decode(get_option('real_slidebar_config'),true);
	register_sidebar( array(
				'name' => 'Real Wordpress Sidebar ('.$e['label'].')',
				'id' => 'real_wordpress_sidebar',
				'description' => 'REAL Wordpress Slidebar . You can change settings at the the Sidebar backend page',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
	) );    
    include_once('ajax.php');
?>