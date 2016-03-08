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
        document.getElementById('editStaticHead').style.display= 'block';
}
function delete_head(id_){
	document.getElementById('txtFeeStaticHeadID_del').value = id_;
	document.frmStaticHead_Del.submit();
}

function change_flxhead (id_, val_, amt_){
	document.getElementById('txtFlexibleHead_edit').value = val_;
        document.getElementById('txtFlexibleHeadAmt_edit').value = amt_;
	document.getElementById('txtID_edit').value = id_;
        document.getElementById('editFlexibleHead').style.display= 'block';
}
function delete_flxhead(id_){
	document.getElementById('txtFeeFlexibleHeadID_del').value = id_;
	document.frmFlexibleHead_Del.submit();
}

$('.add').click(function () {
        $('.all').prop("checked", false);
        var items = $("#list1 input:checked:not('.all')");
        var n = items.length;
        if (n > 0) {
            items.each(function (idx, item) {
                var choice = $(item);
                choice.prop("checked", false);
                choice.parent().appendTo("#list2");
            });
        }
        else {
            alert("Choose an item from list 1");
        }
    });

    $('.remove').click(function () {
        $('.all').prop("checked", false);
        var items = $("#list2 input:checked:not('.all')");
        items.each(function (idx, item) {
            var choice = $(item);
            choice.prop("checked", false);
            choice.parent().appendTo("#list1");
        });
    });

    /* toggle all checkboxes in group */
    $('.all').click(function (e) {
        e.stopPropagation();
        var $this = $(this);
        if ($this.is(":checked")) {
            $this.parents('.list-group').find("[type=checkbox]").prop("checked", true);
        }
        else {
            $this.parents('.list-group').find("[type=checkbox]").prop("checked", false);
            $this.prop("checked", false);
        }
    });

    $('[type=checkbox]').click(function (e) {
        e.stopPropagation();
    });

    /* toggle checkbox when list group item is clicked */
    $('.list-group a').click(function (e) {

        e.stopPropagation();

        var $this = $(this).find("[type=checkbox]");
        if ($this.is(":checked")) {
            $this.prop("checked", false);
        }
        else {
            $this.prop("checked", true);
        }

        if ($this.hasClass("all")) {
            $this.trigger('click');
        }
    });
