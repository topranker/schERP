<!--sidebar start-->
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
                    <li><i class="fa fa-users"></i></li><li><?php echo $breadCrumb; ?></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div style="float: left">Please enter registration id for Admission</div>                        
                        <div style="float: right; color: #ff0000; padding: 5px;"><?php echo $this->session->flashdata('reg_id_ersr_'); ?></div>
                    </header>
                    <div class="panel-body">
                        <form class="navbar-form" action="<?php echo site_url('adm/search_registration'); ?>" method="post">
                            <div style="float: left; color: #ff0000; margin-right:10px;"><input class="form-control" placeholder="Registration ID" type="text" name="txtReg__" id="txtReg__" /></div>
                            <input class="btn btn-primary col-sm-2" type="submit" value="Get Detail" />
                        </form>
                    </div>
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <?php echo $this->session->flashdata('reg_id_err_'); ?>
                    </div> 
                </section>        
            </div><!--/.col-->
        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->