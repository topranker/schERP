$(function(){

	$('#txtregPhoto').blur(function(){
		var file = this.files[0];
		
		if(((file.size/1024) > 70) || (file.type != 'image/jpeg' && file.type != 'image/png' && file.type != 'image/gif' && file.type != 'image/bmp')){
			$('#__reg_err_msg').css('background', '#fdfca1');
			$('#__reg_err_msg').css('color', '#cf4343');
			$('#__reg_err_msg').html(' Image should be less than or equal to 70KB and must be (<b>jpg/png/bmp/gif</b>) image file.');
		} else {
			$('#__reg_err_msg').css('background', '#dcffab');
			$('#__reg_err_msg').css('color', '#A0A0A0');
			$('#__reg_err_msg').html('&nbsp;Selected picture is fine...');
		}
		
	});
	
});