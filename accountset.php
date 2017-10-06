<?php include ('php/loginproc.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
  <!-- <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">  old dashboard icon databse-->
    <link href="https://file.myfontastic.com/onqXfTEE9u2ddH6ZwSxUgM/icons.css" rel="stylesheet">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <?php $page='user'; include("globalnav.php");?>
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Forms</li>
        </ul>
      </div>
    </div>
    <section class="forms">
      <div class="container-fluid">
        <header>
          <h1 class="col-md-10 h1 display"><?php echo $_SESSION['username'];?> &nbsp;  </h1>
        </header>
        <!-- ************************************************************************************* -->
        <section>
          
        </section>
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h2 class="h5 display display">My Account Settings</h2>
            </div>
            <div class="card-block">
              <p>Update your account details below.</p>
              <!-- ///////////////////////////////////////////////////// -->
              <div class= "col-md-8"role="tabpanel" class="tab-pane" id="nav-tabs-0-3">
                <div class="form-group row">
                  <h4 class="col-md-10">My account </h4>
                  <form class="col-md-10 ">
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">First name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Enter your name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">Last name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Enter your last name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">Bio</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-warning">Update account</button>
                      </div>
                    </div><hr>
                  </form>
                  <h4 class="col-md-10">Email configuration</h4>
                  <form class="col-md-10  ">
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">Current email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="martina@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">New email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit"  id ="e_edit_submit" name ="e_edit_submit" class="btn btn-warning">Update email</button>
                      </div>
                    </div><hr>
                  </form>
                  <h4 class="col-md-10">Privacy settings</h4>
                  <form class="col-md-10  ">
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">Current password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="********">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 form-control-label">New password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-warning">Update settings</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- //////////////////////////////////////////////////////// -->
            </div>
          </div>
        </div>
      </section>
      
      <!-- Javascript files-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.cookie.js"> </script>
      <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
      <script src="js/jquery.nicescroll.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/front.js"></script>
      <script src ="js/mine.js"></script>
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
      <!---->   
      <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
      </script>
    </body>
  </html>