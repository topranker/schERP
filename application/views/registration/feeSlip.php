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
                        <header class="panel-heading" style="height:50px;">
                            <div class="col-xs-12" align="right" id="nonprintreg">
                                <?php if ($fee_rec['res_'] == TRUE) { ?>
                                    <a href="<?php echo site_url('web/printFeeSlip/' . $record_['data_']->regid); ?>"><button class="btn btn-primary">Print</button>
                                        <a class="btn btn-primary" href="<?php echo site_url('web/getRegistrationSlip/' . $record_['data_']->regid); ?>">Next</a>
                                    <?php } else { ?>
                                        <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                                    <?php } ?>
                            </div>
                        </header>
                        <div class="panel-body">
                            <div class="row" id="printReg">
                                <div class="col-xs-12"style="border: #000000 solid 1px; padding: 0px">
                                    <?php if ($record_['res_'] == TRUE) { ?>
                                        <section class="panel">
                                            <header class="panel-heading" style="height: 130px; border-bottom: #000000 solid 1px">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-3" style="color:#000000; padding: 10px 0px">
                                                        <img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">
                                                    </div>
                                                    <div class="col-xs-6" style="text-align: center; border: #009000 solid 0px; color: #000000; padding: 20px 0px">
                                                        <span style="font-size: 50px">Fee Receipt</span>
                                                        <br />
                                                        (Mother India Global School, Rudrapur)
                                                    </div>
                                                    <div class="col-xs-3" style="text-align: right; padding: 50px 0px 0px 0px; color: #000000; font-family: Arial;"><u>Date: <?php echo date('d-m-Y',strtotime($fee_rec['data_']->DOE_));; ?></u></div>
                                                </div>
                                            </header>
                                            <div class="panel-body" style="border-width: 0px; padding: 15px 0px">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="row">
                                                            <div class="col-xs-1"></div>
                                                            <div class="col-xs-5">
                                                                <div style="float: left; width: 500px;">
                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px; font-weight:bold">Reg. ID</div>
                                                                    <div style="float: left; width: 300px; font-weight:bold"><?php echo $record_['data_']->regid; ?></div>

                                                                    <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Student Name</div>
                                                                    <div style="float: left; width: 300px"><?php echo $record_['data_']->FULLNAME; ?></div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Father</div>
                                                                    <div style="float: left; width: 300px"><?php echo $record_['data_']->FATHER; ?></div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Gender</div>
                                                                    <div style="float: left; width: 300px">
                                                                        <?php
                                                                        if ($record_['data_']->GENDER == 'M') {
                                                                            echo "MALE";
                                                                        } else {
                                                                            echo "FEMALE";
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">DOB</div>
                                                                    <div style="float: left; width: 300px"><?php echo $record_['data_']->DOB_; ?></div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <div style="float: left; width: 500px;">
                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Fee Category</div>
                                                                    <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->feetype; ?></div>

                                                                    <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Fee Paid</div>
                                                                    <div style="float: left; width: 300px">Rs. <?php echo $fee_rec['data_']->Amount; ?>/-</div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <div style="float: left; width: 50px; height: 5px"></div>
                                                                    <div style="float: left; width: 150px">Fee Mode</div>
                                                                    <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->feemode; ?></div>

                                                                     <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                    <div style="clear: both; width: 100%;" class="line_"></div>
                                                                    <div style="clear: both; width: 100%" class="space_"></div>

                                                                    <?php if ($fee_rec['data_']->feemode != 'Cash') { ?>
                                                                        <div style="float: left; width: 50px; height: 5px"></div>
                                                                        <div style="float: left; width: 150px">Bank</div>
                                                                        <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->bankname; ?></div>

                                                                         <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                        <div style="clear: both; width: 100%;" class="line_"></div>
                                                                        <div style="clear: both; width: 100%" class="space_"></div>

                                                                        <div style="float: left; width: 50px; height: 5px"></div>
                                                                        <div style="float: left; width: 150px"><?php echo $fee_rec['data_']->feemode; ?> No.</div>
                                                                        <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->dd_ch_no; ?></div>

                                                                         <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                        <div style="clear: both; width: 100%;" class="line_"></div>
                                                                        <div style="clear: both; width: 100%" class="space_"></div>

                                                                        <div style="float: left; width: 50px; height: 5px"></div>
                                                                        <div style="float: left; width: 150px"><?php echo $fee_rec['data_']->feemode; ?> date</div>
                                                                        <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->dd_ch_date; ?></div>

                                                                         <div style="clear: both; width: 100%; height:10px;" class="space_"></div>
                                                                        <div style="clear: both; width: 100%;" class="line_"></div>
                                                                        <div style="clear: both; width: 100%" class="space_"></div>
                                                                    <?PHP } ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-1"></div>
                                                        </div>
                                                        <div class='row'><div class='col-xs-12'><hr></div></div>
                                                        <div class="row">
                                                            <div class="col-xs-11" style="text-align: right">
                                                                <p>&nbsp;</p>
                                                                <p>Signature</p>
                                                                <b>Declaration</b>
                                                                <p>I have read and do hereby consent to the terms and conditions enclosed with the registration form</p>
                                                            </div>
                                                            <div class="col-xs-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            No Data Found
                                        <?php } ?>
                                    </section>
                                </div><!--/.col-->
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