<script type="text/javascript">
jQuery(function($){
	$('#jb_sidebar_save_option').click(function(event) {
		$.post(ajaxurl,{action : 'save_real_sidebar_settings', 'label' : $('input[class="slidebar_label"]:first').val(), 'width' : $('input[class="slidebar_width"]:first').val(), 'height' : $('input[class="slidebar_height"]:first').val(), 'padding' : $('input[class="slidebar_padding"]:first').val() }, function(data) {
			alert(data.substring(0, data.length - 1));
		});
	});
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/admin.css', dirname(__FILE__)); ?>">
<script type="text/javascript">
</script>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div><h2>REAL Sidebar Settings</h2>
	<br/>
	<div class="sidebar_wrapper">
		<div class="jbtable_top"></div>
		<div id="slidebars_list" class="jbtable">
					<?php
						$slidebar_options_label = '<label>Label: </label><input class="slidebar_label" type="text" placeholder="Extruder button text" value=""/>&nbsp;';
						$slidebar_options_width = '<label>Width: </label><input class="slidebar_width" type="number" min="10" max="10000" value="300"/>&nbsp;';
						$slidebar_options_height = '<label>Height: </label><input class="slidebar_height" type="number" min="10" max="10000" value="300"/>&nbsp;';
						$slidebar_options_padding = '<label>Padding: </label><input class="slidebar_padding" type="number" min="0" max="10000" value="0"/>&nbsp;';

						$r_slidebar_options_label = $slidebar_options_label;
						$r_slidebar_options_width = $slidebar_options_width;
						$r_slidebar_options_height = $slidebar_options_height;
						$r_slidebar_options_padding = $slidebar_options_padding;

						$e = json_decode(get_option('real_slidebar_config'),true);
						if($e != NULL){
							if(!empty($e['label'])){
								$r_slidebar_options_label = str_replace('value=""', 'value="'.$e['label'].'"', $r_slidebar_options_label);
							}
							if(!empty($e['width'])){
								$r_slidebar_options_width = str_replace('value="300"', 'value="'.$e['width'].'"', $r_slidebar_options_width);
							}
							if(!empty($e['height'])){
								$r_slidebar_options_height = str_replace('value="300"', 'value="'.$e['height'].'"', $r_slidebar_options_height);
							}
							if(!empty($e['padding'])){
								$r_slidebar_options_padding = str_replace('value="0"', 'value="'.$e['padding'].'"', $r_slidebar_options_padding);
							}																					
						}					
					?>
					<div slideid="real_sidebar_1" class="jbslide jb_jbtable_line1"><div class="jbslidetitle">Real Sidebar</div><div class="jbslideoptions"><?php echo $r_slidebar_options_label.$r_slidebar_options_width.$r_slidebar_options_height.$r_slidebar_options_padding; ?></div><div style="clear:both;"></div></div>
		</div>
		<div class="jbtable_bottom"></div>
		<div id="jb_sidebar_save_option" class="button-primary">Save</div>	
	</div>
</div>