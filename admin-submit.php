<?php
session_start();
$conn = new mysqli('localhost', 'root','Matrix@2022','user_db');
    if($conn->connect_error){
        die("Connection failed : ".$conn->connect_error);
    }

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$p_name = $_POST['product_name'];
	$p_category = $_POST['product_category'];
	$p_quantity = $_POST['available_quantity'];
	$p_description = $_POST['product_description'];
	$target_dir = "e-commerce/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 }
     if(isset($_POST["submitbutton"])){
    //check if a file is an actual image file or fake
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  if(file_exists($target_file)){
  	echo "Sorry the file already exists.";
  	$uploadOk = 0;
  }
  if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
 }
  if($uploadOk == 0){
  	echo "Sorry, your file was not uploaded";
  }
  else{
  	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
  		$ans = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))
  		echo "The file ". $ans. " has been uploaded.";
  		
  	}
  	else{
  		echo "sorry there was an error in uploading files";

  	}
  }

 
 /*$push = $conn->prepare("insert into `product`(p_name, p_category, p_quantity, p_description) values(?, ?, ?, ?)");

 $push->bind_param("ssds",$p_name,$p_category,$p_quantity,$p_description);
 $push->execute();
 echo "submitted";
 $push->close();
 $conn->close();*/

?>