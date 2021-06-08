<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:17:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url()?>img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" method="post" id="login_form" action="<?php echo base_url()?>index.php/welcome/login">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" name="userid" class="form-control" placeholder="User ID" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
              
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <!-- <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index-2.html" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="index-2.html" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div> -->
 

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="<?php echo base_url()?>js/validate.js"></script>
<script type="text/javascript">
        $(window).load(function(){
            var msg = "<?php echo $this->session->userdata('reg')?>";
            // console.log(msg);
            if(msg)
            {
                alert(msg);
                var msg = "<?php echo $this->session->set_userdata('reg','')?>";

            }
            if(msg==="")
            {
                console.log('done');
            }
            
        });

        
    </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:17:23 GMT -->
</html>
