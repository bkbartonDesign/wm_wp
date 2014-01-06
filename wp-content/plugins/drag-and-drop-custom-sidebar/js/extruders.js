jQuery(document).ready(function($) {
	$('.real_sidebar .extruder_button').click(function(event) {
		var parent = null;
		if($(this).parent().parent().parent().hasClass('real_sidebar')){
			parent = $(this).parent().parent().parent();
		}
		if(parent != null){
			var param = 'left';
			var value = parseInt(parent.css('left'));
			if(value >= 0){
					value = parent.outerWidth() + 2;
				value*=-1;
			}else{
				value = 0;
			}
			parent.animate({'left' : value},
				500, function() {});
		}
	});
	$('.real_sidebar .content').mCustomScrollbar();
});