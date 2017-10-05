
<?php include('loginproc.php');?>
<html>
<head>
	<title>Login to the system</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container col-md-4">
<form method="post" action="login.php">
		<legend class="text-center">Login</legend>
		
		<ul style="list-style:none;">

			<li>
    		<?php echo  '<strong class ="text-danger">';
    		echo $error; 
    		echo '</strong>';
    		?>
		</li>
			<li><div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" id="" placeholder="Input field">
			</div>
			
		
		<li><div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="" placeholder="password">	
			
		</div></li>
		
		<li><button type="submit" name="login" class="btn btn-primary">Submit</button></li>
		</ul>
	</form>
</div>

</body>
</html>