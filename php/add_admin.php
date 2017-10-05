<?php
ob_start();
//include('konek.php');
include('loginproc.php');
$errors=array();

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 class="text-center">RESISTER ADMIN</h2>

<div class="container" style ="background-color:#ddd; 
    display: flex;
    justify-content: center;
    align-items: center;width:40%;margin-top:5%;padding:20px;border-radius:10px;;

">
<div class="col-md-12">
<form method="post" >
<div class="form-group">
<?php include ("errors.php");?>
<p>Username: <input type="text" class="form-control"name="username"  placeholder="username"></p>
<p>Email: <input type="email"class="form-control"name="email" id="ministry" placeholder="email"></p>
<p>password: <input type="password" class="form-control" name="password"  placeholder="password"></p>
<p>LEVEL: <select name="level">
			<option value="secretary">Secretary</option>
			<option value="secretary">Vicar</option>
			<option value="subordinate">Subordinate</option>
			
			</select>
</p>
<p><a href="#" style="text-decoration:none;color:#555;"> <i class="fa fa-undo" aria-hidden="true"></i> Back  </a>
<a href="index.php"><button class="btn btn-success" value="save" name="btnreg" id="btnSave">  Submit </button> </a></p>

</form>
</div>
</div>
</div>
<form>