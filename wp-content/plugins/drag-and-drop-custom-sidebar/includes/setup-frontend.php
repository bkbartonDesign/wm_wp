<?php
  function real_sidebar_init() {
		if (!is_admin()) {
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'real_sidebar_init');		
	
	function real_sidebar_frontend() {
			echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('css/extruders.css', dirname(__FILE__)).'">';
			echo '<script type="text/javascript" src="'.plugins_url('js/extruders.js', dirname(__FILE__)).'"></script>';
			echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('css/jquery.mCustomScrollbar.css', dirname(__FILE__)).'">';
			echo '<script type="text/javascript" src="'.plugins_url('js/jquery.mCustomScrollbar.min.js', dirname(__FILE__)).'"></script>';			
			$e = json_decode(get_option('real_slidebar_config'),true);
	     	$extruder_btn = '<span class="extruder_button">'.$e['label'].'</span>';
	     	$extruder_btn = '<div class="extruder_button_middle_wrap">'.$extruder_btn.'</div>';
	     	echo '<div id="real_wordpress_sidebar" class="real_sidebar extruder_left" style="width:'.$e['width'].'px;height:'.$e['height'].'px;left:-'.($e['width']+3).'px'.'"><div class="extruder_button_wrapper">'.$extruder_btn.'</div>';
			echo '<div class="content" style="padding:'.intval($e['padding']).'px;">';
			dynamic_sidebar('real_wordpress_sidebar');
			echo '</div>';
			echo '</div>';
	}
	add_action('wp_footer', 'real_sidebar_frontend');
?>