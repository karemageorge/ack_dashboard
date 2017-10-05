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
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
   <?php include ("globalnav.php");?>
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
            <h1 class="h3 display">Forms</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">Expenses</h2>
                </div>
                <div class="card-block">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>

                  	 <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-6">
                          	 <label for="date">Todays Date</label>
                            <input type="text" name = "date" placeholder="date today" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <input type="text" placeholder="" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                      </div>



                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Horizontal Form</h2>
                </div>
                <div class="card-block">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2">Email</label>
                      <div class="col-sm-10">
                        <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success"><small class="form-text">Example help text that remains unchanged.</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Password</label>
                      <div class="col-sm-10">
                        <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                      </div>
                    </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="Signin" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Inline Form</h2>
                </div>
                <div class="card-block">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inlineFormInput" class="sr-only">Name</label>
                      <input id="inlineFormInput" type="text" placeholder="Jane Doe" class="mx-sm-3 form-control">
                    </div>
                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Username</label>
                      <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mx-sm-3 form-control form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Submit" class="mx-sm-3 btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Modal Form</h2>
                </div>
                <div class="card-block text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>
                  <!-- Modal-->
                  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 id="exampleModalLabel" class="modal-title">Signin Modal</h5>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur.</p>
                          <form>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group">       
                              <label>Password</label>
                              <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">       
                              <input type="submit" value="Signin" class="btn btn-primary">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
     <?php include ("footer.php");?>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
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