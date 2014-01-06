<?php
	add_action( 'wp_ajax_save_real_sidebar_settings', 'save_real_sidebar_settings' );
	add_action( 'wp_ajax_nopriv_save_real_sidebar_settings', 'save_real_sidebar_settings' );
	function save_real_sidebar_settings() {
			$real_slidebar_config = array();
			$real_slidebar_config['label'] = $_POST['label'];
			$real_slidebar_config['width'] = intval($_POST['width']);
			$real_slidebar_config['height'] = intval($_POST['height']);
			$real_slidebar_config['padding'] = intval($_POST['padding']);
			$real_slidebar_config = json_encode($real_slidebar_config);
			update_option('real_slidebar_config',$real_slidebar_config);
			echo "Saved.";
	}   
?>