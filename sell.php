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
    <a href="products.php" target="_blank"><li>Shop</li></a> 
    <a href=""><li>Orders</li></a> 
    <a href=""><li>About</li></a> 
    <a href=""><li>Contact</li></a> 
    <a href=""><li><i class="fa-sharp fa-solid fa-right-to-bracket"></i></li></a>
    </ul>
</nav>

<div class="form-wrapper">
    <div class="seller-details">
        <form action="sellprocess.php" method="POST" enctype="multipart/form-data">
            <label>Product Name</label>
            <input type="text" name="product" placeholder="enter the name of the product" required>

            <label>Price</label>
            <input type="text" name="price" placeholder="enter the price of the product in Ksh" required>

            <label>Location</label>
            <input type="text" name="locationn" placeholder="enter the product location" required>

            <label>Product Photo</label>
            <input type="file" name="photo">
            <button name="submit">Submit</button>
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

