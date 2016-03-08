<style type="text/css">
    .msg_all{
        float: right;
        color: #ff0000;
    }
</style>
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
                    <div class="msg_all"><?php echo $this->session->flashdata('msg_all'); ?></div>                  
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-sm-4">
                    <div class="col-sm-12" style="border:1px #dddddd dotted; border-radius: 10px; background:  #006699;">
                        <h3 style="color:#fff;">Static Heads</h3>
                        <table class="table table-hover tableSection">
                            <tbody  style="max-height:150px;">
                                <?php
                                $attrib_ = array(
                                    'class' => 'form-horizontal',
                                    'name' => 'frmStaticHead_Del',
                                    'id' => 'frmStaticHead_Del',
                                );
                                ?>
                                <?php echo form_open('fee/delete_static_head', $attrib_); ?>
                                <?php if (count($static_heads) != 0) { ?>
                                    <?php foreach ($static_heads as $item_) { ?>
                                        <tr>
                                            <th><a href="#"><?php echo strtoupper($item_->FEE_HEAD); ?></a></th>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <th>No data found...</th>
                                    </tr>
                                <?php } ?>    
                                <?php
                                $data = array(
                                    'type' => 'hidden',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'class' => 'required form-control',
                                    'name' => 'txtFeeFlexibleHeadID_del',
                                    'id' => 'txtFeeFlexibleHeadID_del',
                                    'value' => ''
                                );
                                echo form_input($data);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12">
                        <h3>Selected Head</span></h3>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php
                                $data = array(
                                    'type' => 'text',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'class' => 'required form-control',
                                    'name' => 'txtStaticHeadSelected',
                                    'id' => 'txtStaticHeadSelected',
                                    'value' => ''
                                );
                                echo form_input($data);
                                ?>
                                <div style="padding: 5px" id="available_"></div>
                            </div>
                        </div>
                        <h3>Amount <span style="font-size:15px; color: #0066cc;">(in Rs)</span></h3>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php
                                $data = array(
                                    'type' => 'text',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'class' => 'required form-control',
                                    'name' => 'txtFeeFlexibleHeadAmt',
                                    'id' => 'txtFeeFlexibleHeadAmt',
                                    'value' => ''
                                );
                                echo form_input($data);
                                ?>
                                <div style="padding: 5px" id="available_"></div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-sm-3" style="border:1px #dddddd dotted; border-radius: 10px; background:  #006699;">
                    <h3 style="color:#fff;">Select Class</h3>
                    <div class="well" style="max-height:300px;overflow: auto;">
                        <ul class="list-group checked-list-box" id="all">
                            <li class="list-group-item"> CLASS 1A</li>
                            <li class="list-group-item"> CLASS 1B</li>
                            <li class="list-group-item"> CLASS 1C</li>
                            <li class="list-group-item"> CLASS 2A</li>
                            <li class="list-group-item"> CLASS 3A</li>
                            <li class="list-group-item"> CLASS 2A</li>
                            <li class="list-group-item"> CLASS 3A</li>
                            <li class="list-group-item"> CLASS 2A</li>
                            <li class="list-group-item"> CLASS 3A</li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label"></label>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default col-sm-12" name="cmbFeeHeadSubmit" id="cmbFeeHeadSubmit">ADD FEE TO SELECTED CLASS</button>
                        </div>   
                    </div>
                    <div style="padding: 5px"><?php echo $this->session->flashdata('msg_delete_'); ?></div>
                    <?php echo form_close(); ?>
                </div>                
                <div class="col-sm-5" id="editStaticHead">
                    <h3>Heads & Fees in Selected Class</h3>
                    <table class="table table-hover tableSection">
                        <tbody  style="max-height:150px;">
                            <tr>
                                <th><a href="#">REGISTRATION</a></th>
                                <th><a href="#">Rs. 1000</a></th>
                            </tr>
                            <tr>
                                <th><a href="#">REGISTRATION</a></th>
                                <th><a href="#">Rs. 1000</a></th>
                            </tr>
                            <tr>
                                <th><a href="#">REGISTRATION</a></th>
                                <th><a href="#">Rs. 1000</a></th>
                            </tr>
                            <tr>
                                <th><a href="#">REGISTRATION</a></th>
                                <th><a href="#">Rs. 1000</a></th>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmUpdateStaticHead_',
                        'id' => 'frmUpdateStaticHead_',
                    );
                    ?>
                    <?php echo form_open('fee/update_static_head'); ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtStaticHead_edit',
                                'id' => 'txtStaticHead_edit',
                                'value' => ''
                            );
                            echo form_input($data);

                            $data = array(
                                'type' => 'hidden',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtID_edit',
                                'id' => 'txtID_edit',
                                'value' => ''
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <div style="padding: 5px"><?php echo $this->session->flashdata('msg_edit_'); ?></div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-xs-6 col-md-6">
                            <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 col-md-12" name="cmbRegSubmit" id="cmbRegSubmit" style="overflow:hidden">SUBMIT</button>                            
                        </div>
                        <div class="col-sm-6 col-xs-6 col-md-6">
                            <button type="reset" class="btn btn-danger col-sm-12 col-xs-12 col-md-12" name="cmbRegSubmit" id="cmbRegSubmit" style="overflow:hidden">CANCEL</button>                            
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->
