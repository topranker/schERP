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
                    <li><i class="fa fa-users"></i></li><li><?php echo $breadCrumb; ?> - [ <span style="color:#ff0000; font-weight: bold"><?php echo $record_['data_']->regid; ?></span> ]</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home">Personal Detail</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#about">Parent's detail</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile">Contact Detail</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <?php
                        $attrib_ = array(
                            'class' => 'form-horizontal',
                            'name' => 'frmRegistration_',
                            'id' => 'frmRegistration_',
                        );
                        ?>
                        <?php echo form_open_multipart('put_/update_registration_/' . $record_['data_']->regid, $attrib_); ?>
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="form-group"  style='margin-top:20px;'>
                                    <div class="col-sm-10">
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Full Name</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Father's Name</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Date of Birth</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <?php
                                        if ($record_['data_']->GENDER == 'M') {
                                            $gen_M = ' checked = "checked"';
                                            $gen_F = '';
                                        } else {
                                            $gen_M = '';
                                            $gen_F = ' checked = "checked"';
                                        }
                                        ?>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Gender</label>
                                                <div class="col-sm-10">
                                                    <div class="radio col-sm-2">
                                                        <label>
                                                            <input type="radio" name="optStuGender" id="optStuMale" value="M"<?php echo $gen_M; ?>>
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="radio col-sm-2">
                                                        <label>
                                                            <input type="radio" name="optStuGender" id="optStuFemale" value="F"<?php echo $gen_F; ?>>
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Contact Number</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Contact Number</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                    </div>
                                    <div class="col-sm-2" align="left">
                                        <img alt="<?php echo $record_['data_']->FULLNAME; ?>" title="<?php echo $record_['data_']->FULLNAME; ?>" src="<?PHP echo base_url('nitnav/reg_student_photo/' . $record_['data_']->PHOTO_); ?>" align="left" style="min-width: 120px; width:120px; height: 130px; border: #000000 solid 1px" class="img-rounded">
                                    </div>
                                </div>
                            </div>
                            <div id="about" class="tab-pane">
                                <div class="form-group"  style='margin-top:20px;'>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Father's Name</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtFatherName',
                                                        'id' => 'txtFatherName',
                                                        'value' => $record_['data_']->FATHER
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Father's Mobile Number</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtFthrMobile',
                                                        'id' => 'txtFthrMobile',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Father's email-ID</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtFthrEmail',
                                                        'id' => 'txtFthrEmail',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Mother's Name</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtMotherName',
                                                        'id' => 'txtMotherName',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Mother's Mobile Number</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtMthrMobile',
                                                        'id' => 'txtMthrMobile',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Mother's email-ID</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtMthrEmail',
                                                        'id' => 'txtMthrEmail',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile" class="tab-pane">
                                <div class="form-group"  style='margin-top:20px;'>
                                    <div class="col-sm-6">
                                        <h3>Correspondance Address</h3>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Address</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">City</label>
                                                <div class="col-sm-10">
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
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Pin Code</label>
                                                <div class="col-sm-10">
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
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">State</label>
                                                <div class="col-sm-10">
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
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Country</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h3>Parmanent Address <span style="font-size: 14px;color: #007AFF"><input type="checkbox" id="sameAdd">Same as Correspondance</span></h3>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Address</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'required' => 'required',
                                                        'rows' => '2',
                                                        'autocomplete' => 'off',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtPAddress',
                                                        'id' => 'txtPAddress',
                                                        'value' => ''
                                                    );
                                                    echo form_textarea($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">City</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtPCity',
                                                        'id' => 'txtPCity',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Pin Code</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'type' => 'text',
                                                        'autocomplete' => 'off',
                                                        'required' => 'required',
                                                        'class' => 'required form-control',
                                                        'name' => 'txtPPinCode',
                                                        'id' => 'txtPPinCode',
                                                        'value' => ''
                                                    );
                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">State</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'class' => 'required form-control m-bot8',
                                                        'name' => 'txtPState',
                                                        'id' => 'txtPState',
                                                        'required' => 'required'
                                                    );
                                                    $options = array();
                                                    $options[''] = 'Select State';
                                                    foreach ($states_ as $item_) {
                                                        $options[$item_->REGION] = $item_->REG_NAME;
                                                    }
                                                    echo form_dropdown($data, $options, '');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <label class="col-sm-2">Country</label>
                                                <div class="col-sm-10">
                                                    <?php
                                                    $data = array(
                                                        'class' => 'required form-control m-bot8',
                                                        'name' => 'txtPCountry',
                                                        'id' => 'txtPCountry',
                                                        'required' => 'required'
                                                    );
                                                    $options = array();
                                                    foreach ($country_ as $item_) {
                                                        $options[$item_->NAME_] = $item_->NAME_;
                                                    }
                                                    echo form_dropdown($data, $options, 'India');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="background: #2F6FAD">
                        <div class="row">                            
                            <div class="col-sm-2"><label style="color:#fff; font-weight: bold; font-size:18px;">Class for Admission</label></div>
                            <div class="col-sm-4">
                                <?php
                                $data = array(
                                    'class' => 'required form-control m-bot8',
                                    'name' => 'txtAdmClass',
                                    'id' => 'txtAdmClass',
                                    'required' => 'required'
                                );
                                $options = array();
                                foreach ($country_ as $item_) {
                                    $options[$item_->NAME_] = $item_->NAME_;
                                }
                                echo form_dropdown($data, $options, 'India');
                                ?>  
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-danger col-sm-12" name="cmbRegSubmit" id="cmbRegSubmit">ADMIT STUDENT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>