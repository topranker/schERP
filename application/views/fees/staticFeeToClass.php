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
                    <div class="col-sm-12" style="border:1px #dddddd dotted; border-radius: 10px; background:  #006699; padding: 10px">
                        <h3 style="color:#fff;">Static Heads</h3>
                        <?php
                        $attrib_ = array(
                            'class' => 'form-horizontal',
                            'name' => 'frmStaticHead_Del',
                            'id' => 'frmStaticHead_Del',
                        );
                        ?>
                        <?php echo form_open('fee/associateStaticHead_with_class', $attrib_); ?>
                        <?php
                        $data = array(
                            'type' => 'hidden',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'class' => 'required form-control',
                            'name' => 'txtStaticHeadSelected',
                            'id' => 'txtStaticHeadSelected',
                        );
                        $options = array();
                        $options[''] = 'Select Head';
                        foreach ($static_heads as $item_) {
                            $options[strtoupper($item_->ST_HD_ID)] = strtoupper($item_->FEE_HEAD);
                        }
                        echo form_dropdown($data, $options);
                        ?>
                    </div>
                    <div class="col-sm-12">
                        <h3>Amount <span style="font-size:15px; color: #0066cc;">(in Rs)</span></h3>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php
                                $data = array(
                                    'type' => 'text',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'class' => 'required form-control',
                                    'name' => 'txtFeeStaticHeadAmt',
                                    'id' => 'txtFeeStaticHeadAmt',
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
                        <ul class="list-group checked-list-box" id="check-list-box">
                            <?php foreach ($class_in_session as $item) { ?>
                                <li><input type="checkbox" name="class_in_session_[]" value="<?php echo $item->CLSSESSID; ?>" id="<?php echo $item->CLSSESSID; ?>"> CLASS <?php echo $item->CLASSID; ?> </li>
                            <?php } ?>
                        </ul>
                        <input type="hidden" name="txtClsIds_" id="txtClsIds_" />
                        <div id="txtIds" style="display: none"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label"></label>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default col-sm-12" name="cmbFeeHeadClassSubmit" id="cmbFeeHeadClassSubmit">ADD FEE TO SELECTED CLASS</button>
                        </div>  
                    </div>
                    <?php echo form_close(); ?>
                </div>                
                <div class="col-sm-5" id="editStaticHead">
                    <h3>Heads &amp; Fees in Selected Class</h3>
                    <table class="table table-hover tableSection">
                        <?php foreach($class_fee_in_session as $item) { ?>
                            <tbody  style="max-height:150px;">
                                <tr>
                                    <td><a href="#">Class <?php echo $item->CLASSID; ?></a></th>
                                    <td align="right"><a href="#">Rs. <?php echo $item->TOTFEE; ?></a></th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table class="table table-hover tableSection">
                                            <tbody  style="max-height:150px;">
                                                    <?php foreach($class_splitted_fee_in_session as $sub_item) { ?>
                                                        <?PHP if($item->CFEEID == $sub_item->CFEEID){ ?>
                                                        <tr>
                                                            <td><?php echo $sub_item->FEE_HEAD ;?></td>
                                                            <td align="right">Rs. <?php echo $sub_item->AMOUNT ;?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </tbody>        
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        <?PHP } ?>
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
