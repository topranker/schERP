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
                <div class="col-sm-3">
                    <h3>New Flexible Heads</h3>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmFlexibleHead_',
                        'id' => 'frmFlexibleHead_',
                    );
                    ?>
                    <?php echo form_open('fee/feed_flexible_head', $attrib_); ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtFeeFlexibleHead',
                                'id' => 'txtFeeFlexibleHead',
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
                    <div class="form-group">
                        <label class="col-sm-5 control-label"></label>
                        <div class="col-sm-7">
                            <button type="submit" class="btn btn-primary col-sm-12" name="cmbFeeHeadSubmit" id="cmbFeeHeadSubmit">ADD HEAD</button>
                        </div>   
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="border:1px #dddddd dotted; border-radius: 10px; background: #006699">
                    <h3 style="color:#fff;">Heads</h3>
                    <table class="table table-hover tableSection">
                        <tbody>
                            <?php
                            $attrib_ = array(
                                'class' => 'form-horizontal',
                                'name' => 'frmFlexibleHead_Del',
                                'id' => 'frmFlexibleHead_Del',
                            );
                            ?>
                            <?php echo form_open('fee/delete_flexible_head', $attrib_); ?>
                            <?php if (count($flexible_heads) != 0) { ?>
                                <?php foreach ($flexible_heads as $item_) { ?>
                                    <tr>
                                        <th style="width:55%"><a href="#"><?php echo strtoupper($item_->FEE_HEAD); ?></a></th>
                                        <th style="width:25%"><a href="#"><?php echo 'Rs ' . strtoupper($item_->AMOUNT); ?></a></th>
                                        <th align="right">
                                            <a href="#" id="changeHead_<?php echo $item_->FLX_HD_ID; ?>" onclick="change_flxhead('<?php echo $item_->FLX_HD_ID; ?>', '<?php echo $item_->FEE_HEAD; ?>','<?php echo $item_->AMOUNT; ?>');"><i class="fa fa-pencil-square-o" style="color:#0066cc; font-size: 20px;"></i></a> | 
                                            <a href="#" onclick="delete_flxhead('<?php echo $item_->FLX_HD_ID; ?>');"><i class="fa fa-times" style="color:#E13300; font-size: 20px;"></i>
                                        </th>
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
                        <div style="padding: 5px"><?php echo $this->session->flashdata('msg_delete_'); ?></div>
                        <?php echo form_close(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3" id="editFlexibleHead" style="display:none">                    
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmUpdateFlexibleHead_',
                        'id' => 'frmUpdateFlexibleHead_',
                    );
                    ?>
                    <?php echo form_open('fee/update_flexible_head'); ?>
                    <h3>Edit Heads</h3>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtFlexibleHead_edit',
                                'id' => 'txtFlexibleHead_edit',
                                'value' => ''
                            );
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h3>Amount <span style="font-size:15px; color: #0066cc;">(in Rs)</span></h3>
                            <?php
                            $data = array(
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'class' => 'required form-control',
                                'name' => 'txtFlexibleHeadAmt_edit',
                                'id' => 'txtFlexibleHeadAmt_edit',
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
                            <button type="submit" class="btn btn-danger col-sm-12 col-xs-12 col-md-12" name="cmbRegSubmit" id="cmbRegSubmit" style="overflow:hidden">CANCEL</button>                            
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

