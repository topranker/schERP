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
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-xs-8">
            </div>
            <div class="col-xs-4" align="right">
                <?php if ($fee_rec['res_'] == TRUE) { ?>
                    <button class="btn btn-primary" onclick="window.print();">Print</button>
                    <a class="btn btn-primary" href="<?php echo site_url('web/getRegistrationSlip/'.$record_['data_']->regid); ?>">Next</a>
                <?php } else { ?>
                    <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                <?php } ?>
            </div>
        </div>            
        <?php echo $this->session->flashdata('fee_msg_'); ?>  
        <div class="row" id="printReg">
            <div class="col-xs-12">
                <?php if ($record_['res_'] == TRUE) { ?>
                    <section class="panel">
                        <header class="panel-heading">
                            <div>
                                <h1><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Fee Receipt</h1>
                            </div>
                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
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
                                        <div class="col-xs-4"><?php if ($record_['data_']->GENDER == 'M') {
                                            echo "MALE";
                                            } else {
                                            echo "FEMALE";
                                    } ?></div>
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
                                        <div class="col-xs-4"></div>
                                        <div class="col-xs-2">Autorised Signatory</div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } else { ?>
                        No Data Found
<?php } ?>
                </section>        
            </div><!--/.col-->
            
            <div class="col-xs-12">
                <?php if ($record_['res_'] == TRUE) { ?>
                    <section class="panel">
                        <header class="panel-heading">
                            <div>
                                <h1><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Fee Receipt</h1>
                            </div>
                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
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
                                        <div class="col-xs-4"><?php if ($record_['data_']->GENDER == 'M') {
                                            echo "MALE";
                                            } else {
                                            echo "FEMALE";
                                    } ?></div>
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
                                        <div class="col-xs-4"></div>
                                        <div class="col-xs-2">Autorised Signatory</div>
                                    </div>
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