      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-laptop"></i><?php echo $title; ?></h3>
                            <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-laptop"></i></li><li><?php echo $breadCrumb; ?></li>					  	
                            </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <section class="panel">
                                    <div class="panel-body">
                                      <?php
                                      $attrib_ = array(
                                          'class' => 'form-horizontal',
                                          'name' => 'frmRegistration_',
                                          'id' => 'frmRegistration_',
                                      );
                                      ?>
                                      <?php echo form_open('put_/check_login', $attrib_); ?>
                                          <div class="form-group">
                                              <label class="col-sm-12 control-label" style="text-align: left">Username</label>
                                              <div style="clear: both"></div>
                                              <div class="col-sm-12">
                                                  <?php
                                                  $data = array(
                                                      'type' => 'text',
                                                      'autocomplete' => 'off',
                                                      'required' => 'required',
                                                      'class' => 'required form-control',
                                                      'name' => 'txtUser__',
                                                      'id' => 'txtUser__',
                                                      'value' => ''
                                                  );
                                                  echo form_input($data);
                                                  ?>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-12 control-label" style="text-align: left">Password</label>
                                              <div style="clear: both"></div>
                                              <div class="col-sm-12">
                                                  <?php
                                                  $data = array(
                                                      'type' => 'password',
                                                      'autocomplete' => 'off',
                                                      'required' => 'required',
                                                      'class' => 'required form-control',
                                                      'name' => 'txtPwd__',
                                                      'id' => 'txtPwd__',
                                                      'value' => ''
                                                  );
                                                  echo form_input($data);
                                                  ?>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label"></label>
                                              <div class="col-sm-12">
                                                  <button type="submit" class="btn btn-primary col-sm-12">Sign in</button>
                                              </div>
                                          </div>
                                        <?php echo form_close(); ?>
                                      </div>
                            </div><!--/.info-box-->			
                    </div><!--/.col-->
                </div><!--/.row-->              
          </section>
      </section>
      <!--main content end-->

