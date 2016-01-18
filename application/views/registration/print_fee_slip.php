<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="School Management System">
        <meta name="author" content="teamfreelancer">
        <meta name="keyword" content="School Management System">
        <link rel="shortcut icon" href="<?PHP echo base_url() . 'nitnav/img/favicon.png'; ?>">

        <title>School Management System</title>

        <!-- Bootstrap CSS -->    
        <link href="<?PHP echo base_url() . 'nitnav/css/bootstrap.min.css'; ?>" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?PHP echo base_url() . 'nitnav/css/bootstrap-theme.css'; ?>" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?PHP echo base_url() . 'nitnav/css/elegant-icons-style.css'; ?>" rel="stylesheet" />
        <!-- full calendar css-->
        <!-- easy pie chart-->
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?PHP echo base_url() . 'nitnav/css/owl.carousel.css'; ?>" type="text/css">
        <link href="<?PHP echo base_url() . 'nitnav/css/jquery-jvectormap-1.2.2.css'; ?>" rel="stylesheet">
        <!-- Custom styles -->
        <link href="<?PHP echo base_url() . 'nitnav/css/widgets.css'; ?>" rel="stylesheet">
        <link href="<?PHP echo base_url() . 'nitnav/css/style.css'; ?>" rel="stylesheet">
        <link href="<?PHP echo base_url() . 'nitnav/css/style-responsive.css'; ?>" rel="stylesheet" />
        <link href="<?PHP echo base_url() . 'nitnav/css/jquery-ui-1.10.4.min.css'; ?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
                <script src="<?PHP echo base_url() . 'nitnav/js/html5shiv.js'; ?>"></script>
                <script src="<?PHP echo base_url() . 'nitnav/js/respond.min.js'; ?>"></script>
                <script src="<?PHP echo base_url() . 'nitnav/js/lte-ie7.js'; ?>"></script>
        <![endif]-->
        <style type="text/css">
            @page {
                size:A4; margin: 20px;
            }

            @media print {      
                body * { visibility: hidden; }
                #printReg * { visibility: visible;}
                #nonprintreg * { visibility: hidden; }
            }
            .space_{
                height: 3px;
            }
            .line_{
                height: 1px;
                background: #D0D0D0;
            }
        </style>
    </head>

    <body style="font-family: 'Times New Roman'; color: #000000;" onload="window.print();">
    <center>
        <section id="container" style="font-size:16px; text-align: left; padding: 0px 20px">
            <div class="row" id="nonprintreg" style="position: absolute; padding: 10px; width: 100%">
                <center>
                    <div class="col-xs-12">
                        <?php if ($fee_rec['res_'] == TRUE) { ?>
                            <button class="btn btn-primary" onclick="window.print();">Print</button>
                            <a class="btn btn-danger" href="<?php echo site_url('web/getRegistrationSlip/' . $record_['data_']->regid); ?>">Close</a>
                        <?php } else { ?>
                            <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                        <?php } ?>
                    </div>
                </center>
            </div>
            <section class="wrapper" style="padding: 20px 50px">        
                <?php echo $this->session->flashdata('fee_msg_'); ?>  
                <?php for ($loop1 = 1; $loop1 <= 2; $loop1++) { ?>
                    <div class="row" id="printReg">
                        <div class="col-xs-12" style="border: #000000 solid 1px; padding: 0px">
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
                                            <div class="col-xs-3" style="text-align: right; padding: 50px 0px 0px 0px; color: #000000; font-family: Arial;"><u>Date: <?php echo $fee_rec['data_']->DOE_; ?></u></div>
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

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">Student Name</div>
                                                            <div style="float: left; width: 300px"><?php echo $record_['data_']->FULLNAME; ?></div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">Father</div>
                                                            <div style="float: left; width: 300px"><?php echo $record_['data_']->FATHER; ?></div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
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

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">DOB</div>
                                                            <div style="float: left; width: 300px"><?php echo $record_['data_']->DOB_; ?></div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <div style="float: left; width: 500px;">
                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">Fee Category</div>
                                                            <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->feetype; ?></div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">Fee Paid</div>
                                                            <div style="float: left; width: 300px">Rs. <?php echo $fee_rec['data_']->Amount; ?>/-</div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <div style="float: left; width: 50px; height: 5px"></div>
                                                            <div style="float: left; width: 150px">Fee Mode</div>
                                                            <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->feemode; ?></div>

                                                            <div style="clear: both; width: 100%" class="space_"></div>
                                                            <div style="clear: both; width: 100%;" class="line_"></div>
                                                            <div style="clear: both; width: 100%" class="space_"></div>

                                                            <?php if ($fee_rec['data_']->feemode != 'Cash') { ?>
                                                                <div style="float: left; width: 50px; height: 5px"></div>
                                                                <div style="float: left; width: 150px">Bank</div>
                                                                <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->bankname; ?></div>

                                                                <div style="clear: both; width: 100%" class="space_"></div>
                                                                <div style="clear: both; width: 100%;" class="line_"></div>
                                                                <div style="clear: both; width: 100%" class="space_"></div>

                                                                <div style="float: left; width: 50px; height: 5px"></div>
                                                                <div style="float: left; width: 150px"><?php echo $fee_rec['data_']->feemode; ?> No.</div>
                                                                <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->dd_ch_no; ?></div>

                                                                <div style="clear: both; width: 100%" class="space_"></div>
                                                                <div style="clear: both; width: 100%;" class="line_"></div>
                                                                <div style="clear: both; width: 100%" class="space_"></div>

                                                                <div style="float: left; width: 50px; height: 5px"></div>
                                                                <div style="float: left; width: 150px"><?php echo $fee_rec['data_']->feemode; ?> date</div>
                                                                <div style="float: left; width: 300px"><?php echo $fee_rec['data_']->dd_ch_date; ?></div>

                                                                <div style="clear: both; width: 100%" class="space_"></div>
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
                        <?php if ($loop1 == 1) { ?>
                            <div style="clear: both; padding: 20px"></div>
                            <div style="clear: both; padding: 0px; border: #808080 dashed 1px"></div>
                            <div style="clear: both; padding: 20px"></div>
                        <?php } ?> 
                    </div>
                <?php } ?>
            </section>
            <div class="row" id="nonprintreg" style="position: absolute; padding: 10px; width: 100%">
                <center>
                    <div class="col-xs-12">
                        <?php if ($fee_rec['res_'] == TRUE) { ?>
                            <button class="btn btn-primary" onclick="window.print();">Print</button>
                            <a class="btn btn-danger" href="<?php echo site_url('web/getRegistrationSlip/' . $record_['data_']->regid); ?>">Close</a>
                        <?php } else { ?>
                            <a href="<?php echo site_url('web/feedfee_/' . $record_['data_']->regid); ?>"><button class="btn btn-danger" style="float: right"><b>Submit FEE</b></button></a>
                        <?php } ?>
                    </div>
                </center>
            </div>
        </section>
    </center>
</body>
</html>