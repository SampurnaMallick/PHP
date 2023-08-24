<?php
 include ('header.php');
 if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
  header('Location:index.php');
     }
    
?>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
      <form action="http://localhost/e-commerce/register-forms.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="login_email" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="login_password" placeholder="Password" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  
  <button type="submit" class="btn btn-primary" value="login_now" name="login_submit">Submit</button>
  <?php
   if(isset($_SESSION['log_error']) && is_array($_SESSION['log_error']) && count($_SESSION['log_error'])){
    $st1=implode(',',$_SESSION['log_error']);
    ?>
    <span style="color:red;"><?php echo $st1;?></span>
    <?php
    }
    if(isset($_SESSION['log_success']) && is_array(['log_success']) && count($_SESSION['log_success'])){
      $st1=implode(',',$_SESSION['log_success']);
      ?>
      <span style="color:green;"><?php echo $st1;?></span>
    <?php
    }
  ?>
</form>
    </div>
   
    <div class="col-sm-6">
    <form action="http://localhost/e-commerce/register-forms.php" method="post">
    <div class="form-group">
    <label for="Name">Name</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" name="registration_email" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="registration_password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="confirmPassword">Confirm Password</label>
    <input type="password" class="form-control" id="password" name="registration_cpassword" placeholder="Confirm Password" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
    <?php
     if(isset($_SESSION['error']) && is_array($_SESSION['error']) && count($_SESSION['error'])){
    ?>
     <span style="color:red;">Invalid Password</span>
     <?php
   }
     ?>
  </div>
  
  <button type="submit" class="btn btn-primary" value="register_now" name="submit">Submit</button>
  <?php
  if(isset($_SESSION["error"]) && is_array($_SESSION['error']) && count($_SESSION['error'])){
    $st=implode(',', $_SESSION['error']);
    ?>
    <span style="color:red;"><?php echo $st;?></span>
    <?php
  }

   if(isset($_SESSION["success"]) && is_array($_SESSION['success']) && count($_SESSION['success'])){
    $st=implode(',', $_SESSION['success']);
    ?>
    <span style="color:green;"><?php echo $st;?></span>
    <?php 
     }
  ?>
</form>
    </div>
  </div>
</div>
 <?php
  include ('footer.php');
 ?>
