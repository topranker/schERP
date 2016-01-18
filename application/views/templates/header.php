<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Management System">
    <meta name="author" content="teamfreelancer">
    <meta name="keyword" content="School Management System">
    <link rel="shortcut icon" href="<?PHP echo base_url() . 'nitnav/img/favicon.png';?>">

    <title>School Management System</title>

    <!-- Bootstrap CSS -->    
    <link href="<?PHP echo base_url() . 'nitnav/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?PHP echo base_url() . 'nitnav/css/bootstrap-theme.css';?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?PHP echo base_url() . 'nitnav/css/elegant-icons-style.css';?>" rel="stylesheet" />
    <link href="<?PHP echo base_url() . 'nitnav/css/font-awesome.min.css';?>" rel="stylesheet" />    
    <!-- full calendar css-->
    <!-- easy pie chart-->
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?PHP echo base_url() . 'nitnav/css/owl.carousel.css';?>" type="text/css">
	<link href="<?PHP echo base_url() . 'nitnav/css/jquery-jvectormap-1.2.2.css';?>" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?PHP echo base_url() . 'nitnav/css/fullcalendar.css';?>">
	<link href="<?PHP echo base_url() . 'nitnav/css/widgets.css';?>" rel="stylesheet">
    <link href="<?PHP echo base_url() . 'nitnav/css/style.css';?>" rel="stylesheet">
    <link href="<?PHP echo base_url() . 'nitnav/css/style-responsive.css';?>" rel="stylesheet" />
	<link href="<?PHP echo base_url() . 'nitnav/css/jquery-ui-1.10.4.min.css';?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="<?PHP echo base_url() . 'nitnav/js/html5shiv.js';?>"></script>
      <script src="<?PHP echo base_url() . 'nitnav/js/respond.min.js';?>"></script>
      <script src="<?PHP echo base_url() . 'nitnav/js/lte-ie7.js';?>"></script>
    <![endif]-->
  </head>

  <body>
      
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <!--logo start-->
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                    <i class="fa fa-navicon"></i>
                </div>
            </div>
            <a href="#" class="logo" title="<?php echo _SCHOOL_;?>"><?php echo _SCHOOL_ABREV_;?>-<span class="lite">ERP</span></a>
            <!--logo end-->
            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" action="<?php echo site_url('web/viewRegistrationSlip');?>" method="post">
                            <input class="form-control" placeholder="Search" type="text" name="txtReg__" id="txtReg__" />
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?PHP echo base_url().'nitnav/img/avatar1_small.jpg';?>">
                            </span>
                            <span class="username"> <?php echo $this -> session -> userdata('_user___'); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('web/logout'); ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
                <?php if($last_reg_ != 0){ ?>
                <ul class="nav pull-right top-menu">
                    <li class="eborder-top">
                        <a href="#">Last Reg. No. - <?php echo $last_reg_; ?></a>
                    </li>
                </ul>
                <?php } ?>
            </div>
      </header>      
      <!--header end-->