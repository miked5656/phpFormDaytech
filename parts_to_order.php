<?php
    $page = 'checkstatus';
    $title = 'Parts To Order';
    include 'config.php';
    include 'header.php';
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
    <form action="<?php echo BASE_URL ?>database/add.php"  class="form-signin" method="POST" >
        <h2 class="form-signin-heading">Order Parts</h2>
        <label for="phoneModel" class="sr-only">Phone Model</label>
        <input type="phoneModel" id="phoneModel" name="phoneModel" class="form-control" placeholder="Phone Model" required autofocus>
        
        <label for="partToOrder" class="sr-only">Part To Order</label>
        <input type="partToOrder" name="partToOrder" id="partToOrder" class="form-control" placeholder="Part To Order" required>
        
        <label for="qty" class="sr-only">Qty</label>
        <input type="qty" name="qty" id="partToOrder" class="form-control" placeholder="Qty" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add to Order List</button>
    </form>

</div> <!-- /container -->
    
 

