
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/logo.png" />
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author Line : risman_100" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/assets/fonts/clip-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/bower_components/iCheck/skins/all.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/bower_components/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/bower_components/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/assets/css/theme/light.min.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?php echo base_url();?>/template/assets/css/print.css" type="text/css" media="print"/>
        <link href="<?php echo base_url();?>/template/bower_components/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>/template/bower_components/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login example1">
        <div class="main-login col-sm-4 col-sm-offset-4">
            <div class="logo">
                INFORMASI AKADEMIK
            </div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
                <center><img src="<?php echo base_url();?>/assets/img/logo.png" alt="logo" width="100" height="100"></center>
                <br>
                
                <?php echo form_open('login/chek_login', 'class="form-login"'); ?>
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <i class="fa fa-user"></i> </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                            <a class="forgot" href="#static" data-toggle="modal">
                                I forgot my password
                            </a> </span>
                    </div>
                    <div class="form-actions">
                        <label for="remember" class="checkbox-inline">
                            <input type="checkbox" class="grey remember" id="remember" name="remember">
                            Keep me signed in
                        </label>
                        <button type="submit" name="submit" class="btn btn-bricky pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                        </br>
                    </div>
                    
                </fieldset>
                </form>
            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: FORGOT BOX -->
            <!-- <div class="box-forgot">
                <h3>Forget Password?</h3>
                <p>
                    Enter your e-mail address below to reset your password.
                </p>
                <form class="form-forgot">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <i class="fa fa-envelope"></i> </span>
                        </div>
                        <div class="form-actions">
                            <a class="btn btn-light-grey go-back">
                                <i class="fa fa-circle-arrow-left"></i> Back
                            </a>
                            <button type="submit" class="btn btn-bricky pull-right">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div> -->
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->
            <!-- <div class="box-register">
                <h3>Sign Up</h3>
                <p>
                    Enter your personal details below:
                </p>
                <form class="form-register">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" class="grey" value="F" name="gender">
                                    Female
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" class="grey" value="M" name="gender">
                                    Male
                                </label>
                            </div>
                        </div>
                        <p>
                            Enter your account details below:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <i class="fa fa-envelope"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="agree" class="checkbox-inline">
                                    <input type="checkbox" class="grey agree" id="agree" name="agree">
                                    I agree to the Terms of Service and Privacy Policy
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <a class="btn btn-light-grey go-back">
                                <i class="fa fa-circle-arrow-left"></i> Back
                            </a>
                            <button type="submit" class="btn btn-bricky pull-right">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div> -->
            <!-- end: REGISTER BOX -->
            <!-- start: COPYRIGHT -->
            
            <!-- modal -->
            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
                <div class="modal-body">
                    <p>
                        <b><h5>Contact Your Admin<h5></b>
                    </p>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" data-dismiss="modal" class="btn btn-default">
                        Cancel
                    </button> -->
                    <button type="button" data-dismiss="modal" class="btn btn-primary">
                        Continue
                    </button>
                </div>
            </div>

            <div class="copyright">
                <script>document.write(new Date().getFullYear())</script> &copy; icbs.ponpes.id
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/respond.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/excanvas.min.js"></script>
        <script type="text/javascript" src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script src="<?php echo base_url();?>/template/bower_components/jquery/dist/jquery.min.js"></script>
        <!--<![endif]-->
        <script src="<?php echo base_url();?>/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/template/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="<?php echo base_url();?>/template/bower_components/blockUI/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>/template/bower_components/iCheck/icheck.min.js"></script>
        <!-- <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script> -->
        <script src="<?php echo base_url();?>/template/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
        <!-- <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/less/less-1.5.0.min.js"></script> -->
        <script src="<?php echo base_url();?>/template/bower_components/jquery.cookie/jquery.cookie.js"></script>
        <script src="<?php echo base_url();?>/template/bower_components/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="<?php echo base_url();?>/template/assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo base_url();?>/template/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>/template/assets/js/login.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- modal -->
        <script src="<?php echo base_url();?>/bower_components/bootstrap-modal/js/bootstrap-modal.js"></script>
        <script src="<?php echo base_url();?>/bower_components/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
        <script src="<?php echo base_url();?>/assets/js/min/ui-modals.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>