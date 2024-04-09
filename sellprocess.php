<?php
include "connection.php";

if(isset($_POST['submit'])){

// Check connection
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}else{
// Retrieve form data
$productname = $_POST['productname'];
$price = $_POST['price'];
$locationn = $_POST['locationn'];
$quantity = $_POST['quantity'];
$photo = $_FILES['photo'];

if (is_uploaded_file($photo['tmp_name'])) {
    $filename = uniqid().'.'.pathinfo($photo['name'], PATHINFO_EXTENSION);
    $destination = 'uploads/' .$filename;
    move_uploaded_file($photo['tmp_name'], $destination);

// Prepare SQL statement
$sql = "INSERT INTO market_table(productname, price, locationn, quantity, photo) VALUES (?,?,?,?,?)";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $productname, $price, $locationn,$quantity,$filename);

// Execute prepared statement
mysqli_stmt_execute($stmt);


echo "uploaded seccessifully";
// Close prepared statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($connection);
}else {
    echo "file not aploaded";
}
}
}
?>
