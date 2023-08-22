<?php include "connectionString.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>product listing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
        }

        .product-title {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .product-price,
        .product-quantity,
        .product-description {
            margin: 5px 0;
            color: #777;
        }
    </style>
</head>
<body>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    //Database connection
    
    
    
        $stmt = $conn->prepare("insert into product(title, price, quantity, description) values (?, ?, ?, ?)");
        $stmt->bind_param("siis",$title,$price,$quantity,$description);
        $stmt->execute();
       
        $stmt->close();
        
    

    

}

$sql = "SELECT * FROM product";


$retval = $conn->query($sql);

if(!$retval){
    die('Could not get the data'. mysql_error());
}

while($row = $retval->fetch_assoc()){?>
 
 <div class="container">
    <div class="product">
      <h5 class="product-title"><?php echo "Product Name : ".$row['title']."<br><br>"?></h5>
      <p  class="product-price"><?php echo "Price : ".$row['price']."<br><br>"?></p>
      <p  class="product-quantity"><?php echo "Quantity : ".$row['quantity']."<br><br>"?></p>
      <p  class="product-description"><?php echo "Description : ".$row['description']."<br><br>"?></p>
    </div>
 </div>

<?php 
 
 }

$conn->close();
?>

</body>
</html>

