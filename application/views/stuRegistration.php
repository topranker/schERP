<!--sidebar start-->
<?PHP $this->load->view('templates/menu'); ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"> <?php echo $title; ?></h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <?php echo $breadCrumb; ?>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        Registration Form
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal " method="get">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Registration Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="stuRoll">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="stuName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Father's Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fatherName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date Of Birth</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="stuDOB">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-8">
                                    <div class="radio col-sm-2">
                                        <label>
                                            <input type="radio" name="stuGender" id="stuGender" value="M" checked>
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio col-sm-2">
                                        <label>
                                            <input type="radio" name="stuGender" id="stuGender" value="F">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Admission is sought as</label>
                                <div class="col-sm-8">
                                    <select class="form-control m-bot8">
                                        <option>Day Border</option>
                                        <option>Team Border</option>
                                        <option>Week Border</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Class for Admission</label>
                                <div class="col-sm-8">
                                    <select class="form-control m-bot8" name="stuClass">
                                        <option>Select Class</option>
                                        <option>Nursery</option>
                                        <option>LKG</option>
                                        <option>UKG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Applied Year</label>
                                <div class="col-sm-8">
                                    <select class="form-control m-bot8" name="appliedYear">
                                        <option>Select Year</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Whether School transport required?</label>
                                <div class="col-sm-8">
                                    <select class="form-control m-bot8" name="appliedYear">
                                        <option>Select Year</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last School Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lastSchoolName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last School Grade</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lastSchoolGrade">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="stuAddress"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="stuCity">
                                </div>
                                <label class="col-sm-2 control-label">PIN Code</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="stuPIN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">State</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="stuState">
                                </div>
                                <label class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="stuCountry">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="stuContact">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="stuEmail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="stuPass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Select image of size 200X200 px</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary col-sm-12">Register Student</button>
                                </div>
                                <div class="col-sm-4">                                    
                                    <button type="reset" class="btn btn-danger col-sm-12">Reset</button>
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

