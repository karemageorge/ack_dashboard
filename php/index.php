<?php
ob_start();
include('konek.php');
?>


<h2>Members Lists</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<p><a href="add_member.php">Add Member</a></p>

<table border="1" class="table table-striped" width= "50%">
<thead class="thead-inverse">
	
	<th>Names</th>
	<th>Ministry</th>
	<th>Email</th>
	<th>Contact</th>
	<th colspan="2">Commands</th>
</thead>
<?php
$sql = mysql_query("SELECT `memberID`,`name`,`ministry`,`email`,`contact`
					FROM `members` 
					ORDER BY `name`");
if(mysql_num_rows($sql) == 0){
	echo "<tr><td colspan='7'>No member found.</td></tr>";
}else{
	while($rs = mysql_fetch_array($sql)){
?>
<tr>
	<td><?php echo $rs['name'];?></td>
	<td><?php echo $rs['ministry'];?></td>
	<td><?php echo $rs['email'];?></td>
	<td><?php echo $rs['contact'];?></td>
	<td><a href="edit_member.php?id=<?php echo $rs['memberID'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
	<td><a href="delete_member.php?id=<?php echo $rs['memberID'];?>" onClick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php }}?>
</table>