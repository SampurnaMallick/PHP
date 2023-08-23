<?php
 $conn = mysqli_connect('localhost', 'root','Matrix@2022', 'user_db');
 if($conn->connect_error){
     die("Connection failed : ".$conn->connect_error);
 } 
 $error=array();
 $success=array();
$_SESSION["success"] =  $success;
if(isset($_POST['submit']) && $_POST['submit']== "register_now"){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $reg_email = mysqli_real_escape_string($conn, $_POST['registration_email']);
  $reg_pass = md5($_POST['registration_password']);
  $reg_cpass = md5($_POST['registration_cpassword']);
  

 $reg_select = "SELECT * FROM `user_form` WHERE email='$reg_email'";
 $reg_result = $conn->query($reg_select);


 if(mysqli_num_rows($reg_result) > 0){
   $error[] = "user already exist...";
   header('Location:signin-signup.php?error=user_exists');

 }
 else{
   if($reg_pass != $reg_cpass){
      $error[] = "Invalid Password!";
      header('Location:signin-signup.php?error=pass');
   }
   else{
    $stmt = $conn->prepare("INSERT INTO `user_form` (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $reg_email, $reg_pass);
    $stmt->execute();
    header('Location:signin-signup.php?success=1');
   }
 }
}

if(isset($_POST['login_submit']) && $_POST['login_submit']== "login_now"){

   $log_error=array();
   $log_success=array();

   $log_email = mysqli_real_escape_string($conn, $_POST['login_email']);
   $log_pass = md5($_POST['login_password']);

   $log_select = "SELECT * from `user_form` WHERE email='".$log_email."' and password='".$log_pass."'";
   $log_result = $conn->query($log_select);
   if(mysqli_num_rows($log_result) == 0){
      
      header('Location:signin-signup.php?log_error=not_user');
   }else{
      
      header('Location:signin-signup.php?log_success=logged');
   }

   
   
  
}
 






