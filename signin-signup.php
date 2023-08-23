<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
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
   if(isset($_GET['log_error']) && $_GET['log_error']=='not_user'){
    ?>
    <span style="color:red;">Register First</span>
    <?php
    }
    
    if(isset($_GET['log_success']) && $_GET['log_success']=='logged'){
      ?>
      <span style="color:green;">Successfully Logged in!</span>
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
     if(isset($_GET['error']) && $_GET['error']== "pass"){
    ?>
     <span style="color:red;">Invalid Password</span>
     <?php
   }
     ?>
  </div>
  
  <button type="submit" class="btn btn-primary" value="register_now" name="submit">Submit</button>
  <?php
  if(isset($_GET['error']) && $_GET['error']== "user_exists"){
    ?>
    <span style="color:red;">User already exists</span>
    <?php

  }
   if(isset($_GET['success']) && $_GET['success']=="1"){
    ?>
    <span style="color:green;">Registered Successfully</span>
    <?php 
     }
  ?>
</form>
    </div>
  </div>
</div>

</body>
</html>
