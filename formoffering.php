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
    <script src="js/dropzone.js"></script>
    
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
    <?php $page="offering";include ("globalnav.php");?>
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Income </li>
        </ul>
      </div>
    </div>
    <form method="POST">
      
      <section class="forms" action="income.php">
        <div class="container-fluid">
          <header>
            <h1 class="h3 display">Income Basket</h1>
          </header>
          
          <div class="row">
            <div class="col-lg-8">
              <div class="card text-center"">
                <div class="card-header d-flex align-items-center ">
                  <!-------------youth------>
                  <h2 class="h5 display display ">Offering</h2>
                </div>
                <div class="card-block ">
                  <p>Fill in amount in offering from each service as appropriate.</p>
                  <p style="padding-bottom: 0px;margin-bottom: 0px"><em>Select the service</em></p>
                </br>
                   <div class="row col-md-12">
                    <label class="col-md-2 form-control-label">Service</label>
                   
                        <div class="col-md-10 select">
                          <select name ="thankgiving" class="form-control">
                            <option value="youthservice">Youth Service</option>
                            <option value="SundaySchool">Sunday School</option>
                            <option value="englishService">English Service</option>
                            <option value="kikuyuservice">Kikuyu Service</option>
                            
                          </select>
                        </div>
                      </div>
                 
                         <div class="row col-md-12">
                    <label class="col-md-2 form-control-label">Amount</label>
                   
                      <div class="col-md-10">
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-addon">Ksh:</span>
                          <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                        </div>
                      </div>

                    </div>
                          <div class="card-block text-center">
                      <div class="form-group">
                        <button class="btn btn-primary col-md-8" name="btn_thanks" type="submit">Save</button>
                      </div>
                      </div>

               </div>
                  
             
            </div>
            
         

          
        </section>
      </form>
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