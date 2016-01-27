<style type="text/css">
    @page {
        size:A4; margin: 0px;
    }

    @media print {      
        body * { visibility: hidden; }
        #printReg * { visibility: visible;}
        #nonprintreg * { visibility: hidden; }
    }
    body {
        font-family: 'Times New Roman';
    }
</style>
<!--sidebar start-->
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content" style="font-size:16px; text-align: left; padding: 0px 40px">
    <section class="wrapper">
        <?php echo $this->session->flashdata('fee_msg_'); ?>  

        <div class="row" id="printReg">
            <div class="col-xs-12"style="border: #000000 solid 1px; padding: 0px">
                <?php if ($record_['res_'] == TRUE) { ?>
                    <section class="panel">
                        <header class="panel-heading" style="height: 150px; border-bottom: #000000 solid 1px">
                            <div class="col-xs-11">
                                <div class="col-xs-2" style="padding: 10px 0px">
                                    <img alt="<?php echo _SCHOOL_; ?>" title="<?php echo _SCHOOL_; ?>" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center">
                                </div>
                                <div class="col-xs-9" style="border: #ff0000 dotted 0px; padding: 40px 20px; color: #000000; font-family: 'Times New Roman'; font-size: 45px; font-weight: bold; text-align: center;">
                                    <center>
                                        Registration Form<br/ >
                                        <span style="font-size: 20px">(Mother India Global School, Rudrapur)</span>
                                    </center>

                                </div>
                                <div class="col-xs-1" style="padding: 10px 0px">
                                </div>
                            </div>
                            <div class="col-xs-1" align="right" id="nonprintreg">
                                <?php if ($fee_rec['res_'] == TRUE) { ?>
                                    <button class="btn btn-primary" onclick="window.print();">Print</button>
                                    <a class="btn btn-primary" href="<?php echo site_url('web/stuRegistration'); ?>">Next</a>
                                <?php } else { ?>
                                    <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                                <?php } ?>
                            </div>
                        </header>
                        <div class="panel-body" style="border-width: 0px; padding: 15px 15px">
                            <div class="row">
                                <div class="col-xs-12" style="padding: 5px 35px; text-decoration: underline; text-align: right">
                                    Date: <?php echo date('d-m-Y',strtotime($record_['data_']->DOR_)); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12" style="padding: 5px 35px; font-weight: bold">
                                    Personal Details
                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 5px"></div>
                            <div style="clear: both; border: #808080 solid 1px"></div>
                            <div style="float: left; height: 10px"></div>
                            <div style="clear: both"></div>
                            
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="row" style="padding:2px">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4"><b>Registration ID</b></div>
                                        <div class="col-xs-7"><b><?php echo $record_['data_']->regid; ?></b></div>
                                        <div class='row'><div class='col-xs-12'></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Student Name</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->FULLNAME; ?></div>
                                        <div class='row'><div class='col-xs-12'></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Father's Name</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->FATHER; ?></div>
                                        <div class='row'><div class='col-xs-12'></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">DOB</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->DOB_; ?></div>
                                        <div class='row'><div class='col-xs-12'></div></div>

                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Gender</div>
                                        <div class="col-xs-7">
                                            <?php
                                            if ($record_['data_']->GENDER == 'M') {
                                                echo "MALE";
                                            } else {
                                                echo "FEMALE";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3" style="text-align: right; border: #009000 dotted 0px">
                                    <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/' . $record_['data_']->PHOTO_); ?>" align="right" style="min-width: 120px; width:120px; height: 130px; border: #000000 solid 1px" class="img-rounded">
                                </div>
                                <div class="col-xs-1"></div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 20px"></div>
                            <div style="clear: both"></div>

                            <div class="row">
                                <div class="col-xs-12" style="padding: 5px 35px; font-weight: bold">
                                    Admission Details
                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 5px"></div>
                            <div style="clear: both; border: #808080 solid 1px"></div>
                            <div style="float: left; height: 10px"></div>
                            <div style="clear: both"></div>
                            
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Admission is sought as</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->ADMISSION_FOR; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Class for Admission</div>
                                        <div class="col-xs-7">Class <?php echo $record_['data_']->CLASS_FOR_ADMISSION; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Transport Required</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->TRANSPORT_REQUIRED; ?></div>
                                    </div>
                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 20px"></div>
                            <div style="clear: both"></div>

                            <div class="row">
                                <div class="col-xs-12" style="padding: 5px 35px; font-weight: bold">
                                    Other details

                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 5px"></div>
                            <div style="clear: both; border: #808080 solid 1px"></div>
                            <div style="float: left; height: 10px"></div>
                            <div style="clear: both"></div>
                            
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Previous School</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->LAST_SCHOOL_NAME; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Previous Standard</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->LAST_SCHOOL_GRADE; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4">Source to know MIGS</div>
                                        <div class="col-xs-7"><?php echo $record_['data_']->KNOWN_SOURCE_; ?></div>
                                    </div>
                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 30px"></div>
                            <div style="clear: both"></div>

                            <div class="row">
                                <div class="col-xs-6" style="padding: 5px 35px; font-weight: bold">
                                    Address &amp; Contact Detail
                                </div>
                                <div class="col-xs-6" style="padding: 5px 35px; font-weight: bold">
                                    Fee Detail
                                </div>
                            </div>

                            <div style="clear: both"></div>
                            <div style="float: left; height: 5px"></div>
                            <div style="clear: both; border: #808080 solid 1px"></div>
                            <div style="float: left; height: 10px"></div>
                            <div style="clear: both"></div>
                            
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-11">
                                            <?php echo $record_['data_']->ADDRESS_; ?> <br /> 
                                            <?php echo $record_['data_']->CITY_; ?> - <?php echo $record_['data_']->PINCODE_; ?> <br />
                                            <?php echo $record_['data_']->REG_NAME; ?><BR />
                                            (<?php echo $record_['data_']->COUNTRY_; ?>)<BR />
                                            Mob No. - <?php echo $record_['data_']->MOBILE_; ?><BR />
                                            E-Mail - <?php echo $record_['data_']->EMAIL_; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($fee_rec['res_'] == TRUE) { ?>
                                <div class="col-xs-6">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5">Fee Category</div>
                                        <div class="col-xs-6"><?php echo $fee_rec['data_']->feetype; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5">Fee Mode</div>
                                        <div class="col-xs-6"><?php echo $fee_rec['data_']->feemode; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5">Amount</div>
                                        <div class="col-xs-6">Rs. <?php echo $fee_rec['data_']->Amount; ?>/-</div>
                                    </div>
                                    <?php if($fee_rec['data_']->feemode != 'Cash'){ ?>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5">Bank</div>
                                        <div class="col-xs-6"><?php echo $fee_rec['data_']->bankname; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5"><?php echo $fee_rec['data_']->feemode; ?> No</div>
                                        <div class="col-xs-6"><?php echo $fee_rec['data_']->dd_ch_no; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-5"><?php echo $fee_rec['data_']->feemode; ?> Date</div>
                                        <div class="col-xs-6"><?php echo $fee_rec['data_']->dd_ch_date; ?></div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } else { ?>
                                <div class="col-xs-6">
                                    <div class="row">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-11">No Fees Submitted</div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                                
                            <div style="clear: both"></div>
                            <div style="float: left; height: 30px"></div>
                            <div style="clear: both; border: #808080 solid 1px"></div>
                            <div style="float: left; height: 40px"></div>
                            <div style="clear: both"></div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p><b>Declaration</b></p>
                                    <p align="justify">I hereby certify that the information given in the registration form is complete and accurate. I understand and agree this misrepresentation or omission of facts will justify the denial of admission, the cancellation of admission or expulsion.</p>
                                    <p>I have read and do hereby consent to the terms and conditions enclosed with the registration form.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12" style="height: 80px"></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    Student Signature
                                </div>
                                <div class="col-xs-6" style="text-align: right">
                                    Authorized Signatory
                                </div>
                            </div>
                            

                        </div>
                </section>    
                <?php } else { ?>
                    No data found
                <?php } ?> 
            </div><!--/.col-->

        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->