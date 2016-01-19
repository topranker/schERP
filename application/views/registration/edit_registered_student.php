<!--sidebar start-->
<style type="text/css">
    body{
        color: #009000;
    }
    input:focus, textarea:focus, select:focus, file:focus {
        color: #00AA00;
        background: #f1fff4;
    }
</style>
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i><?php echo $title; ?></h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo site_url('web'); ?>">Home</a></li>
                    <li><i class="fa fa-users"></i></li><li><?php echo $breadCrumb; ?> - [ <span style="color:#ff0000; font-weight: bold"><?php echo $record_['data_']->regid;?></span> ]</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div style="float: left">Registration Form</div>                        
                        <div style="float: right; color: #ff0000;"><?php echo $this -> session -> flashdata('update_reg_msg_'); ?></div>
                    </header>
                    <div class="panel-body">
                        <?php
                        $attrib_ = array(
                            'class' => 'form-horizontal',
                            'name' => 'frmRegistration_',
                            'id' => 'frmRegistration_',
                        );
                        ?>
                        <?php echo form_open_multipart('put_/update_registration_/'.$record_['data_']->regid, $attrib_); ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label mendatory1">Photo<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'file',
                                        'autocomplete' => 'off',
                                        'class' => 'required form-control',
                                        'name' => 'txtregPhoto',
                                        'id' => 'txtregPhoto',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                    <div style="color: #ff0000; background: #ffff00" id="__reg_err_msg"></div>
                                    <p class="help-block">Note: Select image of maximum size of [ <b>70 kb</b> ]</p>
                                </div>
                                <div class="col-sm-2" align="left">
                                    <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/' . $record_['data_']->PHOTO_); ?>" align="left" style="min-width: 120px; width:120px; height: 130px; border: #000000 solid 1px" class="img-rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Full Name<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtFullName',
                                        'id' => 'txtFullName',
                                        'value' => $record_['data_']->FULLNAME
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Father's Name<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtFthrName',
                                        'id' => 'txtFthrName',
                                        'value' => $record_['data_']->FATHER
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date Of Birth<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'date',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtStudDOB',
                                        'id' => 'txtStudDOB',
                                        'value' => $record_['data_']->DOB_
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <?php
                                if($record_['data_']->GENDER == 'M'){
                                    $gen_M = ' checked = "checked"';
                                    $gen_F = '';
                                } else {
                                    $gen_M = '';
                                    $gen_F = ' checked = "checked"';
                                }
                            ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gender<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <div class="radio col-sm-2">
                                        <label>
                                            <input type="radio" name="optStuGender" id="optStuMale" value="M"<?php echo $gen_M;?>>
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio col-sm-2">
                                        <label>
                                            <input type="radio" name="optStuGender" id="optStuFemale" value="F"<?php echo $gen_F;?>>
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Admission is sought as<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'cmbAdmFor',
                                        'id' => 'cmbAdmFor',
                                        'required' => 'required'
                                    );
                                    $options = array(
                                        'Day Boarder' => 'Day Boarder',
                                        'Team Boarder' => 'Team Boarder',
                                        'Week Boarder' => 'Week Boarder'
                                    );
                                    echo form_dropdown($data, $options, $record_['data_']->ADMISSION_FOR);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Class for Admission<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'cmbClassForAdm',
                                        'id' => 'cmbClassForAdm',
                                        'required' => 'required'
                                    );
                                    $options = array();
                                    $options[''] = 'Select Class';
                                    $options['None'] = 'None';
                                    $options['Nursery'] = 'Class ' . 'Nursery';
                                    $options['L-KG'] = 'Class ' . 'L-KG';
                                    $options['U-KG'] = 'Class ' . 'U-KG';
                                    for ($class_ = 1; $class_ <= 12; $class_++) {
                                        $options[$class_] = 'Class ' . $class_;
                                    }
                                    echo form_dropdown($data, $options, $record_['data_']->CLASS_FOR_ADMISSION);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Applied Year<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'cmbAppliedYear',
                                        'id' => 'cmbAppliedYear',
                                        'required' => 'required'
                                    );
                                    $options = array();
                                    $options[''] = 'Select Year';
                                    for ($class_ = date('Y'); $class_ <= date('Y')+5; $class_++) {
                                        $options[$class_] = $class_;
                                    }
                                    echo form_dropdown($data, $options, $record_['data_']->APPLIED_YEAR);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Whether School transport required?<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'cmbTransportNeeded',
                                        'id' => 'cmbTransportNeeded',
                                        'required' => 'required'
                                    );
                                    $options = array(
                                        '' => 'Select',
                                        'YES' => 'YES',
                                        'NO' => 'NO'
                                    );
                                    echo form_dropdown($data, $options, $record_['data_']->TRANSPORT_REQUIRED);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last School Name<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtLastSchoolName',
                                        'id' => 'txtLastSchoolName',
                                        'value' => $record_['data_']->LAST_SCHOOL_NAME
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last School Standard<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtLastSchoolGrade',
                                        'id' => 'txtLastSchoolGrade',
                                    );
                                    $options = array();
                                    $options[''] = 'Select Class';
                                    $options['None'] = 'None';
                                    $options['Nursery'] = 'Class ' . 'Nursery';
                                    $options['L-KG'] = 'Class ' . 'L-KG';
                                    $options['U-KG'] = 'Class ' . 'U-KG';
                                    for ($class_ = 1; $class_ <= 12; $class_++) {
                                        $options[$class_] = 'Class ' . $class_;
                                    }
                                    echo form_dropdown($data, $options, $record_['data_']->LAST_SCHOOL_GRADE);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'required' => 'required',
                                        'rows' => '2',
                                        'autocomplete' => 'off',
                                        'class' => 'required form-control',
                                        'name' => 'txtAddress',
                                        'id' => 'txtAddress',
                                        'value' => $record_['data_']->ADDRESS_
                                    );
                                    echo form_textarea($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">City<span class="mendatory1">*</span></label>
                                <div class="col-sm-3">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtCity',
                                        'id' => 'txtCity',
                                        'value' => $record_['data_']->CITY_
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <label class="col-sm-2 control-label">PIN Code<span class="mendatory1">*</span></label>
                                <div class="col-sm-3">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtPinCode',
                                        'id' => 'txtPinCode',
                                        'value' => $record_['data_']->PINCODE_
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">State<span class="mendatory1">*</span></label>
                                <div class="col-sm-3">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'txtState',
                                        'id' => 'txtState',
                                        'required' => 'required'
                                    );
                                    $options = array();
                                    $options[''] = 'Select State';
                                    foreach ($states_ as $item_) {
                                        $options[$item_->REGION] = $item_->REG_NAME;
                                    }
                                    echo form_dropdown($data, $options, $record_['data_']->STATE_);
                                    ?>
                                </div>
                                <label class="col-sm-2 control-label">Country<span class="mendatory1">*</span></label>
                                <div class="col-sm-3">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control m-bot8',
                                        'name' => 'txtCountry',
                                        'id' => 'txtCountry',
                                        'required' => 'required'
                                    );
                                    $options = array();
                                    foreach ($country_ as $item_) {
                                        $options[$item_->NAME_] = $item_->NAME_;
                                    }
                                    echo form_dropdown($data, $options, $record_['data_']->COUNTRY_);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact Number<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtMobile',
                                        'id' => 'txtMobile',
                                        'value' => $record_['data_']->MOBILE_,
                                        'maxlength' => '10'
                                    );
                                    echo form_input($data);
                                    ?>
                                    <div style="color: #ff0000; background: #ffff00" id="__ph_err_msg"></div>
                                    <p class="help-block"><b>Note</b>: Do not use '0' or (+91) or any prefix. Just enter 10 digit mobile no. for sms.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email<span class="mendatory1">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'type' => 'email',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'txtEmail',
                                        'id' => 'txtEmail',
                                        'value' => $record_['data_']->EMAIL_
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Source to know us</label>
                                <div class="col-sm-8">
                                    <?php
                                    $data = array(
                                        'class' => 'required form-control',
                                        'name' => 'cmbSourceKnowing',
                                        'id' => 'cmbSourceKnowing',
                                        'required' => 'required'
                                    );
                                    $options = array(
                                        '' => '',
                                        'Others' => 'Others',
                                        'Through Internet' => 'Through Internet',
                                        'Through Campus Visit' => 'Through Campus Visit',
                                        'Through Family/ Friends' => 'Through Family/ Friends',
                                        'Through SMS' => 'Through SMS',
                                        'Through School Presentation' => 'Through School Presentation',
                                        'Through Hoarding' => 'Through Hoarding',
                                        'Through Cable' => 'Through Cable',
                                        'Through Media' => 'Through Media'
                                    );
                                    echo form_dropdown($data, $options, $record_['data_']->KNOWN_SOURCE_);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">Update Student</button>
                                </div>
                                <div class="col-sm-4">                                    
                                    <a href="<?php echo site_url('web');?>"><button type="button" class="btn btn-danger col-sm-12">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>        
            </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->