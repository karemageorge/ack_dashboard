<?php
if(isset($_POST['btnreg'])){
        $username=($_POST['username']);     
        $email=($_POST['email']);
        $password=($_POST['password']);
        $level=($_POST['level']);


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
            $_SESSION['success']="User Successifully registered";
            header("location:accountset.php");
        }
    }

?>