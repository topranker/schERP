<!--sidebar start-->
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-money"></i><?php echo $title; ?></h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo site_url('web'); ?>">Home</a></li>
                    <li><i class="fa fa-money"></i></li><li><?php echo $breadCrumb; ?></li>					  	
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-sm-3">
                    <h3>New Fees Heads</h3>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmRegistration_',
                        'id' => 'frmRegistration_',
                    );
                    ?>
                    <?php echo form_open_multipart(''); ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtFullName',
                                'id' => 'txtFullName',
                                'value' => ''
                            );
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label"></label>
                        <div class="col-sm-7">
                            <button type="submit" class="btn btn-primary col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">ADD HEAD</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="border:1px #dddddd dotted; border-radius: 10px;">
                    <h3>Heads</h3>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>REGISTRATION</th>
                                <th align="right">
                                    <i class="fa fa-pencil-square-o" style="color:#0066cc; font-size: 20px;"></i> | 
                                    <i class="fa fa-times" style="color:#E13300; font-size: 20px;"></i>
                                </th>
                            </tr>
                            <tr>
                                <th>ADMISSION</th>
                                <th>
                                    <i class="fa fa-pencil-square-o" style="color:#0066cc; font-size: 20px;"></i> | 
                                    <i class="fa fa-times" style="color:#E13300; font-size: 20px;"></i>
                                </th>
                            </tr>
                            <tr>
                                <th>TUITION FEES</th>
                                <th>
                                    <i class="fa fa-pencil-square-o" style="color:#0066cc; font-size: 20px;"></i> | 
                                    <i class="fa fa-times" style="color:#E13300; font-size: 20px;"></i>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <h3>Edit Heads</h3>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmRegistration_',
                        'id' => 'frmRegistration_',
                    );
                    ?>
                    <?php echo form_open_multipart(''); ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtFullName',
                                'id' => 'txtFullName',
                                'value' => ''
                            );
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">SUBMIT</button>                            
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-danger col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">CANCEL</button>                            
                        </div>
                    </div>
                </div>
                </div>
            </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->

