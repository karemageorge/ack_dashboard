
<?php 
$errors=array();
session_start();

$db =mysqli_connect("localhost","username","password","ack");
    $error= '';//variable tos htore  error
  
if(isset($_POST['btnreg'])){
        $username=mysql_real_escape_string($_POST['username']);     
        $email=mysql_real_escape_string($_POST['email']);
        $password=mysql_real_escape_string($_POST['password']);
        $level=mysql_real_escape_string($_POST['level']);


        if (empty($username)){
                array_push($errors,"Username is required");

        }
        if (empty($email)){
                array_push($errors,"Email is required");//add empty field erroe to the array list of errors
        }

        if (empty($password)){
                array_push($errors,"Passord is required");//add empty field erroe to the array list of errors
        }
        if(count($errors)==0){
            
            $password=md5($password);
            $sql="INSERT INTO admins (username,email,password,level)
            VALUES('$username','$email','$password','$level')";
            mysqli_query($db,$sql);
            //$_SESSION['username']=$username;
            //$_SESSION['success']="You are now registered";
            header("location:index.php");
        }
    }
//========================================logout


?>

