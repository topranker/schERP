<style type="text/css">
    @page {
        size:A4; margin: 20px;
    }

    @media print {      
        body * { visibility: hidden; }
        #printReg * { visibility: visible;}
        #nonprintreg * { visibility: hidden; }
    }
</style>
<!--sidebar start-->
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content" style="font-size:16px;">
    <section class="wrapper">        
        <?php echo $this->session->flashdata('fee_msg_'); ?>  
        <div class="row" id="printReg">
            <div class="col-xs-12">
                <?php if ($record_['res_'] == TRUE) { ?>
                    <section class="panel">
                        <header class="panel-heading" style="height: 130px">
                            <div class="col-xs-8">
                                <h1 style="color:#000; font-weight:bold;"><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Fee Receipt</h1>
                            </div>
                            <div class="col-xs-4" align="right" id="nonprintreg">
                                <?php if ($fee_rec['res_'] == TRUE) { ?>
                                    <a href="<?php echo site_url('web/printFeeSlip/'.$record_['data_']->regid);?>"><button class="btn btn-primary">Print</button>
                                    <a class="btn btn-primary" href="<?php echo site_url('web/getRegistrationSlip/' . $record_['data_']->regid); ?>">Next</a>
                                <?php } else { ?>
                                    <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                                <?php } ?>
                            </div>
                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">Registration ID</div>
                                        <div class="col-xs-3"><?php echo $record_['data_']->regid; ?></div>
                                        <div class="col-xs-2"></div>
                                        <div class="col-xs-4"></div>
                                    </div>
                                    <div class='row'><div class='col-xs-12'><hr></div></div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">Student Name</div>
                                        <div class="col-xs-3"><?php echo $record_['data_']->FULLNAME; ?></div>
                                        <div class="col-xs-2">Father's Name</div>
                                        <div class="col-xs-4"><?php echo $record_['data_']->FATHER; ?></div>
                                    </div>
                                    <div class='row'><div class='col-xs-12'><hr></div></div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">DOB</div>
                                        <div class="col-xs-3"><?php echo $record_['data_']->DOB_; ?></div>
                                        <div class="col-xs-2">Gender</div>
                                        <div class="col-xs-4"><?php
                                            if ($record_['data_']->GENDER == 'M') {
                                                echo "MALE";
                                            } else {
                                                echo "FEMALE";
                                            }
                                            ?></div>
                                    </div>
                                    <div class='row'><div class='col-xs-12'><hr></div></div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">Fees Category</div>
                                        <div class="col-xs-3"><?php echo $fee_rec['data_']->feetype; ?></div>
                                        <div class="col-xs-2">Fees Paid</div>
                                        <div class="col-xs-4">Rs <?php echo $fee_rec['data_']->Amount; ?></div>
                                    </div>
                                    <div class='row'><div class='col-xs-12'><hr></div></div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">Fees Mode</div>
                                        <div class="col-xs-3"><?php echo $fee_rec['data_']->feemode; ?></div>
                                        
                                        <?php if($fee_rec['data_']->feemode != 'Cash'){?>
                                        <div class="col-xs-2">Bank Name</div>
                                        <div class="col-xs-4"><?php echo $fee_rec['data_']->bankname; ?></div>
                                    </div>
                                    <div class='row'><div class='col-xs-12'><hr></div></div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-2">DD/Cheque no.</div>
                                        <div class="col-xs-3"><?php echo $fee_rec['data_']->dd_ch_no; ?></div>
                                        <div class="col-xs-2">DD/Cheque date</div>
                                        <div class="col-xs-4"><?php echo $fee_rec['data_']->dd_ch_date; ?></div>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="col-xs-12" align="right">
                                    <p>&nbsp;</p>
                                    <p>Signature</p>
                                    <b>Declaration</b>
                                    <p>I have read and do hereby consent to the term and conditions enclosed with the registration form.</p>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        No Data Found
                    <?php } ?>
                </section>
            </div><!--/.col-->

            <div class="col-xs-12" style="height: 100px"></div>
            
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->