<?php 
include 'connection.php';
ini_set('display_errors', 1);

$query = "SELECT * FROM gallery";
$exe = mysqli_query($connection,$query);


?>
     <?php
        if($exe && mysqli_num_rows($exe) > 0){
          while($row = mysqli_fetch_assoc($exe)){?>
          <div class="product" style="background-image: url('uploads/<?php echo $row['photo']; ?>');
           background-repeat: no-repeat;
           background-position: center;
          "> <div class="pic-title"><?php echo $row['image_title'] ?></div> </div>
      <?php } } ?>