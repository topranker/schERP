      <!--sidebar start-->
      <?PHP $this->load->view('templates/menu');?>
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
                                    <li><i class="fa fa-laptop"></i></li><li><?php echo $breadCrumb; ?></li>					  	
                            </ol>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box green-bg">
                                <a href="<?PHP echo site_url('web/totalRegDetail');?>" style="color:#fff;">
                                    <i class="fa fa-users"></i>
                                    <div class="count"><?php echo $count_register; ?></div>
                                    <div class="title">Student(s) registered</div>						
                                </a>
                            </div><!--/.info-box-->			
                    </div><!--/.col-->
                    <?php if($this -> session -> userdata('_user_status___') == 'adm') { ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box yellow-bg">
                                <a href="<?PHP echo site_url('web/totalRegFee');?>" style="color:#fff;">
                                    <i class="fa fa-laptop"></i>
                                    <div class="count" style="font-size: 18px">Rs. <?php echo $count_reg_fee; ?>/-</div>
                                    <div class="title">Registration Fees.</div>				
                                </a>
                            </div><!--/.info-box-->			
                    </div><!--/.col-->	
                    <?php } ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box blue-bg">
                                    <i class="icon_group"></i>
                                    <div class="count"><?php echo $city_cnt; ?></div>
                                    <div class="title">Different Citie(s)</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box red-bg">
                                    <i class="fa fa-users"></i>
                                    <div class="count"><?php echo $state_cnt; ?></div>
                                    <div class="title">Different State(s)</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box red-bg">
                                    <i class="fa fa-users"></i>
                                    <div class="count"><?php echo $count_online_enquiry; ?></div>
                                    <div class="title">Online Registration</div>           
                            </div><!--/.info-box-->     
                    </div><!--/.col-->

                </div><!--/.row-->              
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

