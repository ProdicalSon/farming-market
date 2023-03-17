<?php include "connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Space+Grotesk:wght@700&display=swap');
    </style>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sell.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmFresh || Sell</title>
</head>
<body>
<nav>
    <b>FarmFresh Market</b>
    <ul>
    <a href=""><li>Shop</li></a> 
    <a href=""><li>Orders</li></a> 
    <a href=""><li>About</li></a> 
    <a href=""><li>Contact</li></a> 
    <a href=""><li><i class="fa-sharp fa-solid fa-right-to-bracket"></i></li></a>
    </ul>
</nav>

<div class="form-wrapper">
    <div class="seller-details">
        <form action="" method="POST">
            <label>Product Name</label>
            <input type="text" name="product" placeholder="enter the name of the product">

            <label>Price</label>
            <input type="text" name="price" placeholder="enter the price of the product in Ksh">

            <label>Location</label>
            <input type="text" name="location" placeholder="enter the product location">

            <label>Product Photo</label>
            <input type="file" name="photo">
            <button name=submit>Submit</button>
        </form>
    </div>
    <div class="selling-advert">
        <p>Reach a wider audience with our website. Showcase your products and 
            connect with potential customers with us !
        </p>
    </div>
</div>
</body>
</html>

<?php 
    if (isset($_POST["submit"])) {
        if (!$connection) {
            die("connection failed: " .mysql_connect_error());
        }else{
            //get form data
            $product = $_POST["product"];
            $price = $_POST["price"];
            $location = $_POST["location"];
            $photo = $_POST["photo"];

            //check if file is uploaded
            if (is_uploaded_file($photo['tmp_name'])) {
                $photoname = uniqid() . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
            }
        }
    }
?>