<?php
session_start();
 $conn = mysqli_connect('localhost', 'root','Matrix@2022', 'user_db');
 if($conn->connect_error){
     die("Connection failed : ".$conn->connect_error);
 } 
 $error=array();
 $success=array();
 $_SESSION["error"] =  '';
 $_SESSION["success"] =  '';
if(isset($_POST['submit']) && $_POST['submit']== "register_now"){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $reg_email = mysqli_real_escape_string($conn, $_POST['registration_email']);
  $reg_pass = md5($_POST['registration_password']);
  $reg_cpass = md5($_POST['registration_cpassword']);
  

 $reg_select = "SELECT * FROM `user_form` WHERE email='$reg_email'";
 $reg_result = $conn->query($reg_select);


 if(mysqli_num_rows($reg_result) > 0){
   $error[] = "user already exist...";
   

 }
 if($reg_pass != $reg_cpass){
   $error[] = "Invalid Password!";
   
}
if(count($error)==0)
{
   $stmt = $conn->prepare("INSERT INTO `user_form` (name, email, password) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $name, $reg_email, $reg_pass);
   $stmt->execute();
   $success[] ="Registered successfully!";
   
}
 $_SESSION["error"] =  $error;
 $_SESSION["success"] =  $success;
 header('Location:signin-signup.php');
}

if(isset($_POST['login_submit']) && $_POST['login_submit']== "login_now"){

   $log_error=array();
   $log_success=array();
   $_SESSION['log_error'] ='';
   $_SESSION['log_success'] ='';
   $log_email = mysqli_real_escape_string($conn, $_POST['login_email']);
   $log_pass = md5($_POST['login_password']);

   $log_select = "SELECT * from `user_form` WHERE email='".$log_email."' and password='".$log_pass."'";
   $log_result = $conn->query($log_select);
   if(mysqli_num_rows($log_result) == 0){
      $log_error[] ="Register First!";
      
   }else{
      $log_success[] ="Logged in successfully!";
      $row=mysqli_fetch_row($log_result);
      print_r($row);
  
      $userid = $row['0'];
      $type = $row['4'];
      $_SESSION['user_id']= $userid;
      $_SESSION['type']= $type;
      if($type == 0){
         $redirect = "admin.php";
         $_SESSION['is_admin']= true;
      }
      else{
         $redirect = "signin-signup.php";
         $_SESSION['is_admin']=false;
      }
      
   }

   $_SESSION["log_error"] = $log_error;
   $_SESSION["log_success"] = $log_success;
   
   header('Location:'.$redirect);


   
  
}
 






