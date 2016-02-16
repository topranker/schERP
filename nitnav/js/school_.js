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

	$('#optRegistration').click(function(){$('#txtAmount').val(1000);});
	$('#optAdmission').click(function(){$('#txtAmount').val('');});
	$('#optWithdrawl').click(function(){$('#txtAmount').val('');});

	$('#optCash').click(function(){
		$('#sep_1').hide();
		$('#dd_').hide();
		$('#bank__').html('Name<br />');
		$('#date__').html('Date<br />');
		$('#no__').html('No.<br />');
		$('#txtBank').val('x');
		$('#txtDate').val('x');
		$('#txtDDChequeNo').val('x');
		$('#dd_cheque_').hide();
	});

	$('#optDD').click(function(){
		$('#sep_1').show();
		$('#dd_cheque_').show();
		$('#dd_cheque_').css('color','#009000');
		$('#bank__').html('Bank Name<br />');
		$('#date__').html('DD Date<br />');
		$('#no__').html('DD No.<br />');
		$('#txtBank').val('');
		$('#txtDate').val('');
		$('#txtDDChequeNo').val('');
	});

	$('#optCheque').click(function(){
		$('#sep_1').show();
		$('#dd_cheque_').show();
		$('#dd_cheque_').css('color','#000090');
		$('#bank__').html('Bank Name<br />');
		$('#date__').html('Cheque Date<br />');
		$('#no__').html('Cheque No.<br />');
		$('#txtBank').val('');
		$('#txtDate').val('');
		$('#txtDDChequeNo').val('');
	});

	$('#txtFeeStaticHead').blur(function(){
		if($('#txtFeeStaticHead').val() != ''){
			data_ = $("#frmStaticHead_").serialize();
			url_ = site_url_+"/fee/check_existing_head";

			$('#available_').css({'color':'#805580', 'font-size': '11px'})
			$('#available_').html('Checking for availability. Please wait...');
				$.ajax({
			          type: "POST",
			          url: url_,
			          data: data_,
			          success: function(data){
						$('#available_').html(data); 
			          }
			    });
			} else {
				$('#available_').html(''); 
			}
	});
        
        $('#txtFeeFlexibleHead').blur(function(){
		if($('#txtFeeFlexibleHead').val() != ''){
			data_ = $("#frmFlexibleHead_").serialize();
			url_ = site_url_+"/fee/check_existing_head";

			$('#available_').css({'color':'#805580', 'font-size': '11px'})
			$('#available_').html('Checking for availability. Please wait...');
				$.ajax({
			          type: "POST",
			          url: url_,
			          data: data_,
			          success: function(data){
						$('#available_').html(data); 
			          }
			    });
			} else {
				$('#available_').html(''); 
			}
	});
});

function change_head (id_, val_){
	document.getElementById('txtStaticHead_edit').value = val_;
	document.getElementById('txtID_edit').value = id_;
}
function delete_head(id_){
	document.getElementById('txtFeeStaticHeadID_del').value = id_;
	document.frmStaticHead_Del.submit();
}

function change_flxhead (id_, val_){
	document.getElementById('txtFlexibleHead_edit').value = val_;
	document.getElementById('txtID_edit').value = id_;
}
function delete_flxhead(id_){
	document.getElementById('txtFeeFlexibleHeadID_del').value = id_;
	document.frmFlexibleHead_Del.submit();
}