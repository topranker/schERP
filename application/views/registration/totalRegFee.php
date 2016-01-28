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
                            <th>FEE AMOUNT</th>
                            <th>FEE MODE</th>
                            <th>BANKNAME</th>
                            <th>DD/CHECK NUMBER</th>
                            <th>DD/CHECK DATE</th>
                            <th>DATE OF PAYMENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($total_reg_fee as $item) { ?>
                        <tr>
                            <th scope="row">
                                <a href="<?php echo site_url('web/viewRegistrationSlip/'.$item->regID); ?>"><?php echo $item->regID; ?></a>
                            </th>
                        <td><?php echo $item->Amount; ?></td>
                        <td><?php echo $item->feemode; ?></td>
                        <td><?php echo $item->bankname; ?></td>
                        <td><?php echo $item->dd_ch_no; ?></td>
                        <td><?php echo $item->dd_ch_date; ?></td>
                        <td><?php echo $item->DOE_; ?></td>
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

