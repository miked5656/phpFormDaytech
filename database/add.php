<?php
   include '../config.php';

    $phone_model = $_POST['phoneModel'];
    $partToOrder = $_POST['partToOrder'];
    $qty = $_POST['qty'];
    
  
   require(ROOT_PATH . 'mysqli_connect.php'); 

   $q = "INSERT INTO parts (phone_model, parts_to_order, qty, id)
   VALUES ('$phone_model', '$partToOrder',$qty, '')";
   
   if (mysqli_query($dbcon, $q)) {
    header('Location:' . BASE_URL .'parts_to_order_display.php');
} else {
    echo "Error deleting record: " . mysqli_error($dbcon);
}
   mysqli_close($dbcon);