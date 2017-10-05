<?php
ob_start();
include('konek.php');

if(isset($_POST['btnSave'])){

	
	$name = stripslashes($_POST['name']);
	$ministry = stripslashes($_POST['ministry']);
	$email = stripslashes($_POST['email']);
	$contact = stripslashes($_POST['contact']);

	$sql = mysql_query("INSERT INTO members(`name`,`ministry`,`email`,`contact`) 
				VALUES('".$name."','".$ministry."','".$email."','".$contact."')");

	if($sql){
		header("Location: index.php");
	}else{
		echo "<font color='red'>Error inserting data</font>";
	}


}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 class="text-center">Add New Member</h2>

<div class="container" style ="background-color:#ddd; 
    display: flex;
    justify-content: center;
    align-items: center;width:40%;margin-top:5%;padding:20px;border-radius:10px;;

">
<div class="col-md-12">
<form method="post" class="	" >
<div class="form-group">
<p>Names: <input type="text" class="form-control"name="name" id="name" placeholder="Names"></p>
<p>Ministry: <input type="text"class="form-control"name="ministry" id="ministry" placeholder="Ministry"></p>
<p>Email: <input type="email" class="form-control"name="email" id="email" placeholder="Email Adress"></p>
<p>Contact: <input type="text"class="form-control" name="contact" id="contact" placeholder="Contact"></p>
<p><a href="index.php" style="text-decoration:none;color:#555;"> <i class="fa fa-undo" aria-hidden="true"></i> Back  </a>
<a href="index.php"><button class="btn btn-success" value="save" name="btnSave" id="btnSave">  Save </button> </a></p>

</form>
</div>
</div>
</div>
<form>