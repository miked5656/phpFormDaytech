<?php 
    $page = "Part To Order Display";
    $title = 'Parts needing ordered';
    include 'config.php';
    include 'header.php';
?>

 <?php         
           require('mysqli_connect.php'); 

           $q = "SELECT phone_model, parts_to_order, qty, id
                 FROM parts";
           $result = @mysqli_query($dbcon, $q);//Runs the query. 

           if($result){
               echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                 <h2>Parts to Order</h2>
                    <table class="table">
                       <thead>
                        <tr>
                           <td><b>Phone Model</b></td>
                           <td><b>Parts to Order</b></td>
                           <td><b>Qty</b></td>
                        </tr>
                        </thead>';
               while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   echo '<tr>
                            <td>' . $row['phone_model'] . '</td>
                            <td>' . $row['parts_to_order'] . '</td>
                            <td>' . $row['qty'] . '</td>
                            <td><a href="'. BASE_URL . 'database/delete.php?id='. $row['id'] . '">Delete</a></td>
                            <td><a href="'. BASE_URL . 'database/update.php?id='. $row['id'] . '">Update</a></td>
                         </tr>';
               }//end fetch array while loop
               echo '</table>';
               mysqli_free_result($result);
           }//end if $result 
             else {
                 echo '<p class="error">Could not display parts ordered list contact. Michael.</p>';
                 echo '<p>' . mysqli_error_list($dbcon) . '<br><br>Query: ' . $q . '</p>';
             }//end else $result
             mysqli_close($dbcon);//close the database
?>
   

<?php
        include 'footer.php';


