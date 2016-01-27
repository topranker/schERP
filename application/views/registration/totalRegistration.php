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
                    <li><i class="fa fa-laptop"></i></li><li><?php echo $breadCrumb; ?></li>					  	
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>REGISTRATION ID</th>
                            <th>NAME</th>
                            <th>FATHER'S NAME</th>
                            <th>CLASS</th>
                            <th>GENDER</th>
                            <th>DATE OF REGISTRATION</th>
                            <th>ADDRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($total_reg_ as $item) { ?>
                        <tr>
                            <th scope="row">
                                <a href="<?php echo site_url('web/viewRegistrationSlip/'.$item->regid); ?>"><?php echo $item->regid; ?></a>
                            </th>
                        <td><?php echo $item->FULLNAME; ?></td>
                        <td><?php echo $item->FATHER; ?></td>
                        <td><?php echo $item->CLASS_FOR_ADMISSION; ?></td>
                        <td><?php echo $item->GENDER; ?></td>
                        <td><?php echo $item->DOR_; ?></td>
                        <td><?php echo $item->ADDRESS_; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>			
            </div><!--/.col-->

        </div><!--/.row-->              
    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->

