<?php
 $conn = new mysqli('localhost', 'root','Matrix@2022','user_db');
    if($conn->connect_error){
        die("Connection failed : ".$conn->connect_error);
    }
?>