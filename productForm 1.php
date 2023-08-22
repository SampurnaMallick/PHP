<?php include "connectionString.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product form</title>
</head>
<body>
    <h1>PRODUCT FORM</h1>
    <form action="enter2.php" method="post">
        <label for="title">PRODUCT TITLE:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="price">PRICE:</label>
        <input type="number" id="price" name="price" required><br><br>

        <label for="quantity">QUANTITY:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="description">DESCRIPTION:</label>
        <input type="text" id="description" name="description" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
    

</body>
</html> 
