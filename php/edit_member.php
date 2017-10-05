<?php
ob_start();
include('konek.php');

if(isset($_POST['btnSave'])){

	$memberID = stripslashes($_POST['memberID']);
	$name = stripslashes($_POST['name']);
	$ministry = stripslashes($_POST['ministry']);
	$email = stripslashes($_POST['email']);
	$contact = stripslashes($_POST['contact']);

	$sql = mysql_query("UPDATE members SET 
						
						`name` = '".$name."',
						`ministry` = '".$ministry."',
						`email` = '".$email."',
						`contact` = '".$contact."'
						WHERE `memberID` = ".$memberID);

	if($sql){
		header("Location: index.php");
	}else{
		echo "<font color='red'>Error updating data</font>";
	}


}

?>


<?php
$id = $_GET['id'];
$sql = mysql_query("SELECT `memberID`,`name`,`ministry`,`email`,`contact` 
					FROM `members`
					WHERE `memberID` = ".$id);
$rs = mysql_fetch_array($sql);
?>
<h2>Edit member</h2>

<form method="post">
<input type="hidden" name="memberID" id="memberID" value="<?php echo $rs['memberID'];?>">
<p>Name: <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $rs['name'];?>"></p>
<p>Ministry: <input type="text" name="ministry" id="ministry" placeholder="Ministry" value="<?php echo $rs['ministry'];?>"></p>
<p>Email: <input type="email" name="email" id="email" placeholder="email" value="<?php echo $rs['email'];?>"></p>
<p>Contact: <input type="text" name="contact" id="contact" placeholder="Contact" value="<?php echo $rs['contact'];?>"></p>
<p><input type="submit" value="save" name="btnSave" id="btnSave"> <a href="index.php"> Back </a></p>
</form>