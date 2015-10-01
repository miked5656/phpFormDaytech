<?php
   include '../config.php';

   $id = $_GET["id"];
   //echo $id;
   
   require(ROOT_PATH . 'mysqli_connect.php'); 
   
   $q = "DELETE FROM parts WHERE id = " . $id;
   
   if (mysqli_query($dbcon, $q)) {
    header('Location:' . BASE_URL .'parts_to_order_display.php');
} else {
    echo "Error deleting record: " . mysqli_error($dbcon);
}
   mysqli_close($dbcon);


