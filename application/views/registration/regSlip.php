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
                    <a class="btn btn-primary" href="<?php echo site_url('web/stuRegistration'); ?>">Next</a>
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
                        <header class="panel-heading" style="height: 130px">
                            <div>
                                <h1 style="color:#000; font-weight:bold;"><img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">&nbsp;&nbsp;Registration Form</h1>
                            </div>
                        </header>
                        <div class="panel-body" style="font-size:17px;">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Student Name</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->FULLNAME; ?></div>
                                        <div class='row'><div class='col-xs-12'><hr></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Father's Name</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->FATHER; ?></div>
                                        <div class='row'><div class='col-xs-12'><hr></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">DOB</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->DOB_; ?></div>
                                        <div class='row'><div class='col-xs-12'><hr></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Gender</div>
                                        <div class="col-xs-7"><?php
                                            if ($record_['data_']->GENDER == 'M') {
                                                echo "MALE";
                                            } else {
                                                echo "FEMALE";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4" align="left">
                                    <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/' . $record_['data_']->PHOTO_); ?>" align="left" style="min-width:150px;" class="img-rounded">
                                </div>
                            </div>
                            <div class="row">
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-2">Admission is sought as</div>
                                    <div class="col-xs-3"><?php echo $record_['data_']->ADMISSION_FOR; ?></div>
                                    <div class="col-xs-2">Class for Admission</div>
                                    <div class="col-xs-3"><?php echo $record_['data_']->CLASS_FOR_ADMISSION; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-2">School Transport Required</div>
                                    <div class="col-xs-3"><?php echo $record_['data_']->TRANSPORT_REQUIRED; ?></div>
                                    <div class="col-xs-2">Address</div>
                                    <div class="col-xs-3">
                                        <?php echo $record_['data_']->ADDRESS_; ?> <br /> 
                                        <?php echo $record_['data_']->CITY_; ?> - <?php echo $record_['data_']->PINCODE_; ?> <br />
                                        <?php echo $record_['data_']->REG_NAME; ?><BR />
                                        (<?php echo $record_['data_']->COUNTRY_; ?>)
                                    </div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-2">Contact Number</div>
                                    <div class="col-xs-3"><?php echo $record_['data_']->MOBILE_; ?></div>
                                    <div class="col-xs-2">Email</div>
                                    <div class="col-xs-3"><?php echo $record_['data_']->EMAIL_; ?></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                            </div>
                            <?php if ($fee_rec['res_'] == TRUE) { ?>
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
                                    <div class="col-xs-2"></div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <b>Declaration</b>
                                        <p align="justify">I hereby certify that the information given in the registration form is complete and accurate. I understand and agree this misrepresentation or omission of facts will justify the denial of admission, the cancellation of admission or expulsion.</p>
                                        <p>I have read and do hereby consent to the term and conditions enclosed with the registration form.</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        Signature
                                    </div>
                                </div>

                            <?php } else { ?>
                                Fees Not paid Yet
                            <?php } ?>

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