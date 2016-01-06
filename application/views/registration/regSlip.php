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
        <div class="col-xs-4">
            <?php if($fee_rec['res_'] == TRUE) { ?>
                <button class="btn btn-primary" style="float: right" onclick="window.print();">Print</button>
            <?php } else { ?>
                <a href="<?php echo site_url('web/feedfee_/'.$record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
            <?php } ?>
        </div>
    </div>            
        <div class="row" id="printReg">
            <div class="col-xs-12">
                <?php if($record_['res_'] == TRUE) { ?>
                <section class="panel">
                    <header class="panel-heading"style="height: 150px">
                        <div>
                            <h1><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Registration Form</h1>
                        </div>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8">
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
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Admission is sought as</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->ADMISSION_FOR; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Class for Admission</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->CLASS_FOR_ADMISSION; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">School Transport Required</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->TRANSPORT_REQUIRED; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Address</div>
                                    <div class="col-xs-7">
                                        <?php echo $record_['data_']->ADDRESS_; ?> <br /> 
                                        <?php echo $record_['data_']->CITY_; ?> - <?php echo $record_['data_']->PINCODE_; ?> <br />
                                        <?php echo $record_['data_']->REG_NAME; ?><BR />
                                        (<?php echo $record_['data_']->COUNTRY_; ?>)
                                    </div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Contact Number</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->MOBILE_; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Email</div>
                                    <div class="col-xs-7"><?php echo $record_['data_']->EMAIL_; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4" align="left">
                                <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/'.$record_['data_']->PHOTO_); ?>" align="left" style="min-width:150px;" class="img-rounded">
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