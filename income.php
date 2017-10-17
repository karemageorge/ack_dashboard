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
		<?php $page="income";include ("globalnav.php");?>
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
					<span class="form-group"><input class="form-control " type="date" value="" "></span>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header d-flex align-items-center ">
									<!-------------youth------>
									<h2 class="h5 display display ">Youth Ministry</h2>
								</div>
								<div class="card-block ">
									<p>Fill in amount form youth ministry as appropriate.</p>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-md-6 ">
												<label for="YTithe">Tithe:</label>
												<input type="text" name = "YTithe" placeholder="tithe amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="YOffering">Offering:</label>
												<input name="YOffering	"type="text" placeholder="offering amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="YThanksgiving">Thanksgiving:</label>
												<input type="text" name ="YThanksgiving" placeholder= "Amount in thankgiving"" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-----------------Sunday school--- -->
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h2 class="h5 display display">Sunday School</h2>
								</div>
								<div class="card-block">
									<p>Fill in amount form Sunday school as appropriate.</p>
									<div class="col-sm-12">
										<div class="row">
											<!-- <div class="col-md-6">
														<label for="YTithe">Tithe:</label>
													<input type="text" name = "Tithe" placeholder="tithe amount" class="form-control">
											</div> -->
											<div class="col-md-6">
												<label for="SSOffering">Offerings:</label>
												<input name="SSOffering	"type="text" placeholder=" Amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="SSThanksgiving">Thanksgiving:</label>
												<input type="text" name ="SSThanksgiving" placeholder= "Amount "" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!---------------------English --- -->
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h2 class="h5 display display">Main (KIKUYU) Service</h2>
								</div>
								<div class="card-block">
									<p>Fill in amount form Sunday Main Service.</p>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-md-6 ">
												<label for="KTithe">Tithe:</label>
												<input type="text" name = "KTithe" placeholder="tithe amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="KOffering">Offering:</label>
												<input name="YOffering	"type="text" placeholder="offering amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="KThanksgiving">Thanksgiving:</label>
												<input type="text" name ="KThanksgiving" placeholder= "Amount in thankgiving"" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- -----------------english -->
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h2 class="h5 display display">English Service</h2>
								</div>
								<div class="card-block">
									<p>Fill in amount form Sunday English Service.</p>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-md-6 ">
												<label for="ETithe">Tithe:</label>
												<input type="text" name = "ETithe" placeholder="tithe amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="EOffering">Offering:</label>
												<input name="EOffering	"type="text" placeholder="offering amount" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="EThanksgiving">Thanksgiving:</label>
												<input type="text" name ="EThanksgiving" placeholder= "Amount in thankgiving"" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-----------------------other givings and forms------------------- -->
						<div class="col-lg-12	">
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h2 class="h5 display">Income Form</h2>
								</div>
								<div class="card-block">
									<p>Kindly provide signed form reflecting the submission above.in <i><B>.PDF .doc or scanned image</B></i>
										<div class="form-group">
											<span><div class="form-group">
												<input class="form-control" type="file" value="Upload forms"" id="">
											</div></span>
											
										</div>
										
										<div class="form-group col-md-12">
											<input type="submit" value="Submit" class="mx-sm-12 btn btn-primary col-md-6" name="btn_income">
										</div>
										
									</div>
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