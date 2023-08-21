<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost', 'root','Matrix@2022','demo');
    if($conn->connect_error){
        die("Connection failed : ".$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into Forms(Name, Email, Password) values (?, ?, ?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        echo "submitted succesfully...";
        $stmt->close();
        $conn->close();
    }

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    

}
?>