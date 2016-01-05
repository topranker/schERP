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
                                    <i class="fa fa-users"></i>
                                    <div class="count">1000</div>
                                    <div class="title">Students</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box yellow-bg">
                                    <i class="fa fa-male"></i>
                                    <div class="count">200</div>
                                    <div class="title">Teachers</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->	

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box blue-bg">
                                    <i class="icon_group"></i>
                                    <div class="count">1000</div>
                                    <div class="title">Parents</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box red-bg">
                                    <i class="fa fa-users"></i>
                                    <div class="count">800</div>
                                    <div class="title">students Present Today</div>						
                            </div><!--/.info-box-->			
                    </div><!--/.col-->

                </div><!--/.row-->              
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

