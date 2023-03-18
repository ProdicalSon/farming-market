<?php 
include "connection.php";

$query = "SELECT product,price,locationn,photo FROM market_table";
$result = mysqli_query($connection,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmFresh || Products</title>
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

<p id="header">Experience the taste of farm-fresh goodness at
     your doorstep - shop now on our website!</p>

     <form id="search-form"action="">
        <label >Search For Product</label>
        <input type="text" placeholder="enter the name of the product"> 
        <button>Search</button>
     </form>
<?php 
while($row = mysqli_fetch_assoc($result)){
        

        echo '<div class="products-wrapper" style="background-image: url(\'data:image/jpeg;base64,' . base64_encode($row['photo']) . '\');">';
        echo '<div class="product">';
        echo '<p>'.$row['product'].'</p>';
        echo '<p>'.$row['price'].'</p>';
        echo '<p>'.$row['locationn'].'</p>';
        echo '</div>';
     echo '</div>';
}
?>     
</body>
</html>