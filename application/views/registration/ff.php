<style type="text/css">
    @page {
        size:A4; margin: 0;
    }

    @media print {      
        body * { visibility: hidden; }
        #printReg * { visibility: visible;}
    }
</style>
<!--sidebar start-->
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content" style="color: #0000ff">
    <section class="wrapper">       
    <?php echo $this -> session -> flashdata('fee_msg_'); ?>     
        <div class="row" id="printReg">
            <div class="col-xs-12">
                <?php if($record_['res_'] == TRUE) { ?>
                <section class="panel">
                    <header class="panel-heading"style="height: 150px">
                        <div>
                            <h1><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Fee Form</h1>
                        </div>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Registration ID</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->regid; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Student Name</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->FULLNAME; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Father's Name</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->FATHER; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">DOB</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->DOB_; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Gender</div>
                                    <div class="col-xs-7"><?php if($record_['data_']->GENDER == 'M') { echo "MALE"; } else { echo "FEMALE";}   ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                            </div>
                            <div class="col-xs-4" align="left">
                                <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/'.$record_['data_']->PHOTO_); ?>" align="left" style="min-width:150px;" class="img-rounded">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        	<div class="col-xs-8">
                        		<?php
		                        $attrib_ = array(
		                            'class' => 'form-horizontal',
		                            'name' => 'frmFeedFee_',
		                            'id' => 'frmFeedFee_',
		                        );
		                        ?>
		                        <?php echo form_open('put_/feed_fee_/'.$record_['data_']->regid, $attrib_); ?>
	                        		<div class="row" style="color: #555555">
	                                    <div class="col-xs-1"></div>
	                                    <div class="col-xs-2"><b>Fee Category</b></div>
	                                    <div class="col-xs-3">
	                                    	<div class="radio">
	                                            <label>
	                                				<input type="radio" name="optFeeCategory" id="optRegistration" value="Registration" checked="checked" />&nbsp; Registration
	                                			</label>
	                                		</div>
	                                		<div class="radio">
	                                            <label>
	                                				<input type="radio" name="optFeeCategory" id="optAdmission" value="Admission" />&nbsp; Admission
	                                			</label>
	                                		</div>
	                                		<div class="radio">
	                                            <label>
	                                				<input type="radio" name="optFeeCategory" id="optWithdrawl" value="Withdrawl" />&nbsp; Withdrawl
	                                			</label>
	                                		</div>
	                                    </div>
	                                    <div class="col-xs-1"></div>
	                                    <div class="col-xs-2"><b>Fee Mode</b></div>
	                                    <div class="col-xs-3">
	                                    	<div class="radio">
	                                            <label>
	                                				<input type="radio" name="optFeeMode" id="optCash" value="Cash" checked="checked" />&nbsp; Cash
	                                			</label>
	                                		</div>
	                                		<div class="radio">
	                                            <label style="color: #009000; font-weight: bold">
	                                				<input type="radio" name="optFeeMode" id="optDD" value="DD" />&nbsp; Demand Draft
	                                			</label>
	                                		</div>
	                                		<div class="radio">
	                                            <label style="color: #000090; font-weight: bold">
	                                				<input type="radio" name="optFeeMode" id="optCheque" value="CHEQUE" />&nbsp; Cheque
	                                			</label>
	                                		</div>
	                                    </div>
	                                </div>
	                                <div class='row' id="sep_1" style="display: none"><div class='col-xs-12'><hr></div></div>
	                                <div class="row" id="dd_cheque_"style="display: none; color: #000090">
	                                	<div class="col-xs-1"></div>
	                                	<div class="col-xs-2"><b>Bank Detail</b></div>
	                                	<div class="col-xs-9">
	                                			<div style="float: left; border: #ff0000 solid 0px">
		                                			<div style="float: left" id="bank__">	
		                                				Bank
		                                			</div>
		                                			<div style="clear: both"></div>
		                                			<div style="float: left">	
		                                			<?php
				                                    	$data = array(
					                                        'type' => 'text',
					                                        'autocomplete' => 'off',
					                                        'required' => 'required',
					                                        'placeholder' => 'Bank Name.',
					                                        'class'	=> 'form-control',
					                                        'name' => 'txtBank',
					                                        'id' => 'txtBank',
					                                        'value' => 'x'
					                                    );
				                                    	?>
				                                    	<?php echo form_input($data); ?>
				                                    </div>
			                                    </div>
			                                    <div style="width: 5px; float: left"></div>
			                                    <div style="float: left; border: #ff0000 solid 0px">
		                                			<div style="float: left" id="date__">	
		                                				Cheque Date
		                                			</div>
		                                			<div style="clear: both"></div>
		                                			<div style="float: left">	
			                                    	<?php
				                                    	$data = array(
					                                        'type' => 'text',
					                                        'autocomplete' => 'off',
					                                        'required' => 'required',
					                                        'placeholder' => 'Date.',
					                                        'class'	=> 'form-control',
					                                        'name' => 'txtDate',
					                                        'id' => 'txtDate',
					                                        'value' => 'x'
					                                    );
				                                    	?>
			                                    	<?php echo form_input($data); ?>
			                                    	</div>
		                                    	</div>
		                                    	<div style="width: 5px; float: left"></div>
		                                    	<div style="float: left; border: #ff0000 solid 0px">
		                                			<div style="float: left" id="no__">	
		                                				Cheque No.
		                                			</div>
		                                			<div style="clear: both"></div>
		                                			<div style="float: left">
			                                    	<?php
			                                    	$data_ = array(
				                                        'type' => 'text',
				                                        'autocomplete' => 'off',
				                                        'required' => 'required',
				                                        'placeholder' => 'No..',
				                                        'class'	=> 'form-control',
				                                        'name' => 'txtDDChequeNo',
				                                        'id' => 'txtDDChequeNo',
				                                        'value' => 'x'
				                                    );
			                                    	?>
			                                    	<?php echo form_input($data_); ?>
			                                    	</div>
		                                		</div>
		                                    </div>
	                                    </div>
	                                </div>

	                                </div>
	                                <div class='row'><div class='col-xs-12'><hr></div></div>
	                                <div class="row" style="color: #555555">
	                                    <div class="col-xs-1"></div>
	                                    <div class="col-xs-2"><b>Amount</b></div>
	                                    <div class="col-xs-4">
	                                    	<?php
	                                    	$data = array(
		                                        'type' => 'text',
		                                        'autocomplete' => 'off',
		                                        'required' => 'required',
		                                        'class' => 'required form-control',
		                                        'name' => 'txtAmount',
		                                        'id' => 'txtAmount',
		                                        'value' => '1000'
		                                    );
	                                    	?>
	                                    	<?php echo form_input($data); ?>
	                                    </div>
	                                    <div class="col-xs-5"></<div>
	                                </div>
	                                <div class='row'><div class='col-xs-12'><hr></div></div>
	                                <div class="form-group">
	                                	<div class="col-xs-1"></div>
	                                    <div class="col-xs-3">
		                                	<button type="submit" class="btn btn-primary col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">Submit Fee</button>
		                                </div>
		                                <div class="col-xs-3">                                    
		                                    <button type="reset" class="btn btn-danger col-sm-12">Cancel</button>
		                                </div>
		                                <div class="col-xs-5">
		                                </div>
		                            </div>
                                <?php echo form_close(); ?>
	                        </div>
                    	</div>
                    </div>
                    <?php } else { ?>
                        No Data Found
                    <?php } ?>
                </section>        
            </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->