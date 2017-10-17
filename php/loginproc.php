<?php 
$errors=array();


 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
#session_start();

$db =mysqli_connect("localhost","username","password","ack");
    $error= '';//variable tos htore  error
    if (isset($_POST['login'])){
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            $error="Invalid name or email";

        }else{
            $username=$_POST['username'];
            $password=$_POST['password'];
				
            //$conn =mysqli_connect('localhost','username', 'password');
            // $db =mysqli_select_db($conn,'ack');
            $password=md5($password);
			
            $sql="SELECT * FROM admins WHERE username='$username' AND password='$password'";

            $query = mysqli_query($db,$sql);
            $rows  = mysqli_num_rows($query);
                if($rows ===1){
					$_SESSION['username']=$username;		
					$_SESSION['success']="successifully logged in";
                    while($lvl=mysqli_fetch_array($query)){
						$_SESSION['statel']=$lvl['level'];
						
						
                        if($lvl['level']=='secretary'){
							
                            header("location:income.php");
							//redirect  to pages that only be accessed  *in a secretary subfolder**/
							
                } 
				        elseif($lvl['level']=='subordinate'){
							
                            header("location:voteheads.php");
							//redirect  to pages that only be accessed  *in a secretary subfolder**/
							
                } 
						elseif($lvl['level']=='vicar'){
							
                            header("location:voteheads.php");
							//redirect  to pages that only be accessed  *in a secretary subfolder**/
							
                } 



                else{
                    $error ="username or email Invalid";
                }
				
				
                mysqli_close($db);
				}
			}
		}
		
    }


//--==============================================================  register member
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
            //$_SESSION['success']="You are now registered";
            header("location:accountset.php");
        }
    }
//========================================logout

// ======================================= jquey test
 if(isset($_POST["e_edit_submit"]))  
 {  
      $email_1 = mysqli_real_escape_string($db, $_POST["email_1"]);  
      $email_2 = mysqli_real_escape_string($db, $_POST["email_2"]);  
      $sql = "INSERT INTO tbl_test(email_1, email_2) VALUES ('".$email_1."', '".$email_2."')";  
      if(mysqli_query($db, $sql))  
      {  
           echo "Emails  Changed";  
      }  
 } 


?>

