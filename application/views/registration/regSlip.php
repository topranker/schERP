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
        <div class="row" id="printReg">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div><h1 align="left"><img alt="" src="<?PHP echo base_url() . 'nitnav/img/migs-logo.png'; ?>" style="margin:0px;" align="center"> Registration Form</h1></div>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Name</div>
                                    <div class="col-xs-7">Harsh Pangtey</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Father's Name</div>
                                    <div class="col-xs-7">Harsh Pangtey</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">DOB</div>
                                    <div class="col-xs-7">dd/mm/yyyy</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Gender</div>
                                    <div class="col-xs-7">M</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Admission is sought as</div>
                                    <div class="col-xs-7">Day Border</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Class for Admission</div>
                                    <div class="col-xs-7">LKG</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">School Transport Required</div>
                                    <div class="col-xs-7">YES</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Address</div>
                                    <div class="col-xs-7">Address <br> City - Pin Code- <br>State - Country</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Contact Number</div>
                                    <div class="col-xs-7">99999999999</div>
                                </div>
                                <div class='row'><div class='col-xs-12'><hr></div></div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-4">Email</div>
                                    <div class="col-xs-7">ppp@ppp.com</div>
                                </div>
                            </div>
                            <div class="col-xs-4" align="left">
                                <img alt="" src="<?PHP echo base_url() . 'nitnav/img/avatar1.jpg'; ?>" align="left" style="min-width:200px;" class="img-rounded">
                            </div>
                        </div>
                    </div>
                </section>        
            </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->