<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 //pattern1
  for($x = 1; $x <= 5; $x++){
	for($y = 1; $y <= $x; $y++){
	 echo "* ";
	} 
	echo "<p/>";
  
  }
  //pattern2
  ?>
 <table border="2">
  <?php
  for($i = 5; $i >= 1; $i--){
  ?>
  <tr>
  <?php
    for($j = 1; $j <= 5; $j++){
      ?>
      <td >
      <?php
      if($j < $i){
       echo "";
      }
      else if($j >= $i){
       echo "* ";
      
      }
    	?>
    	</td>
    	<?php
    }
   ?>
   </tr>
   <?php
  
  } 
  ?>
  </table>
  
  
  
  <table border ="2">
  <?php
  $rows = 5;
  for($i = 0; $i < $rows; $i++){
  ?>
  <tr>
   <?php
    for($j = 0; $j < ($rows - $i)-1; $j++){
   ?>
      <td>
      <?php
        echo "";
      ?>
        </td>
      <?php
      }
    for($k = 0; $k < (2 * $i)+1; $k++){
      ?>
      <td>
      <?php
      echo "*";
      ?>
      </td>
    <?php
    }
    echo "<p/>";
    ?>
    
  <?php
  }
  ?>
  </tr>

</table>



<table border ="2">
<?php
 $n = 5;
 for($i = $n; $i > 0; $i--){
?>
<tr>
<?php
  for($j = 0; $j < $i; $j++){
?>
 <td>
  <?php
    echo "* ";
  ?>
  </td>
  <?php
  }
  echo "<p/>";
 } 
 ?>
</tr>
</table>



<table border="2" 
<?php
$n = 5;
for($i = 0; $i < $n; $i++){
  ?>
  <tr>
  <?php
  for($j = 0; $j < $i; $j++){
    ?>
    <td>
  <?php
    echo "";
    ?>
  </td>
  <?php
  }

  for($k = 0; $k < $n - $i; $k++){
  ?>
  <td>
  <?php
    echo "* ";
  ?>
</td>
 <?php
  }
  echo "<p/>";

 }
  ?>
  </tr>
</table>



<table border="2">
<?php
$n = 5;
for($i = 0; $i < $n; $i++){
?>
<tr>
  <?php
  for($j = 0; $j < $i; $j++){
  ?>
    <td>
    <?php
    echo "";
    ?>
  </td>
  <?php
  }
  for($k = $i; $k < ((($n * 2)-$i)-1); $k++){
   ?>
   <td>
    <?php
    echo "* ";
    ?>
  </td>
  <?php
  }
  echo "<p/>";
}
?>
</tr>
</table>

<table border="2">
<?php
 $n = 4;
 for($i = 0; $i < ((n*2)/2); $i++){
  ?>
  <tr>
  <?php
  for($j = 0; $j < $i; $j++){
    ?>
    <td>
    <?php
    echo "";
    ?>
  </td>
  <?php
  }
  for($k = 0; $k <= ((n*2)/2); $k++){
    ?>
    <td>
    <?php
    echo "*";
    ?>
  </td>
  <?php
  }
  echo "<p/>";
 }
 ?>
</tr>
</table>


<?php
 $age = array("Sampurna"=>"21", "Neha"=>"22", "Khushbu"=>"22", "Arghya"=>"22");
 
 echo "Age of neha is ". $age['Neha'] . " years";
 echo "<p/>";
 ?>

<?php
$age1 = array("Sampurna"=>"21", "Neha"=>"22", "Khushbu"=>"22", "Arghya"=>"22");
 foreach ($age1 as $key => $value) {
   // code...
  echo "Age of " . $key . " is " . $value ;
  echo "<p/>";
 }
 ?>

<?php
// multidimensional array

$cars = array(

      array("Volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("Land Rover",17,15)

);

for($rows = 0; $rows < 4; $rows++){
  echo "<p><b>Row number is $rows </b></p>";
  echo "<ul>";
  for($cols = 0; $cols < 3; $cols++){
    echo "<p><b>Column number is $cols </b></p>";
  }
  echo "</ul>";
}

?>

<?php

//Built-in string function

$string = "Hello world";

echo strlen($string);
echo "<p/>";
echo strpos($string,"o");
echo "<p/>";
echo strpos($string,"wo");
echo "<p/>";
echo str_replace("world","Sampurna",$string);
echo "<p/>";
echo strtolower($string);
echo "<p/>";
echo strtoupper($string);
echo "<p/>";
echo substr($string,2,2);
echo "<p/>";
echo substr($string,2,5);
echo "<p/>";
echo substr($string,2,-2);
echo "<p/>";
print_r(explode(" ",$string));
echo "<p/>";

$str = "hello";
$arr = str_split($str);
print_r($arr);
echo "<p/>";
$arr1 = str_split($str,2);
print_r($arr1);
echo "<p/>";

$newStr = chunk_split($str,2,"..");
echo $newStr;
echo "<p/>";

?>

<?php
//Built-in math function

$number = -5.5;

echo abs($number);
echo "<p/>";
echo round($number);
echo "<p/>";
echo pow(2, 3);
echo "<p/>";
echo sqrt(16);
echo "<p/>";
echo rand(1, 100);
echo "<p/>";
?>
  

<?php
//Array built-in functions
$array = ["apple", "banana", "orange"];
$array1 = ["pineapple", "avocado", "cherry"];
echo count($array);
echo "<p/>";
echo is_array($array);
echo "<p/>";
array_push($array,"kiwi");
echo "<p/>";
print_r($array);
echo "<p/>";
print_r(array_pop($array));
echo "<p/>";
print_r($array);
echo "<p/>";
print_r(array_reverse($array));
echo "<p/>";
print_r(array_merge($array, $array1));
echo "<p/>";

?>

<?php
//Built-in functions for date & time

echo date("Y-m-d H:i:s");
echo "<p/>";
$date = "2023-04-11 12:00:00";
echo strtotime($date);
echo "<p/>";

?>

<?php
 include("index1.php");
 echo "<p/>"
 ?>

 <?php
 /*$servername = "localhost";
 $username = "root";
 $password = "Matrix@2022";

 $conn = new mysqli($servername, $username, $password);

 if($conn -> connect_error){
  die("Connection failed". $conn -> connect_error);
 }
 echo "Connected succesfully";
 echo "<p/>";

 //create database
 $sql = "CREATE DATABASE my_demo_db1";
 if($conn -> query($sql) === TRUE){
   echo "Database created succesfully";
   echo "<p/>";
 }
 else{
  echo "Error in creating database : ". $conn -> error;
  echo "<p/>";
 }*/


 ?>

 <?php
/*$servername = "localhost";
$username = "root";
$password = "Matrix@2022";
$dbname = "my_demo_db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Myguest1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuest1 created successfully";
  echo "<p/>";
} else {
  echo "Error creating table: " . $conn->error;
  echo "<p/>";
}

$conn->close();*/
?>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "Matrix@2022";
 $db = "demo";
 //create connection
 $conn = new mysqli($servername, $username, $password, $db);
 //check connection
 if($conn-> connect_error){
  die ("Connection failed : ". $conn-> connect_error);  
 }
 else{
  echo "Connection succesfull";
  echo "<p/>";
 }
 if ($conn->query($sql) === TRUE) {
  echo "Table persons created successfully";
  echo "<p/>";
} else {
  echo "Error creating table: " . $conn->error;
  echo "<p/>";
}
 //insert into persons
 $sql = "INSERT INTO `persons`(`PersonID`, `lastName`, `firstName`, `address`, `city` )
  VALUES ('10', 'Raj', 'Achintya', 'Jamshedpur','Jamshedpur')";

  if($conn->query($sql)){
    echo "New record inserted succesfully";
  }

  else {
  echo "Error: ".$sql."<br>".$conn-> error;
}

?>


</body>
</html>

