<?php

define ('DB_USER', 'miked5656');
define ('DB_PASSWORD', 'dd5656');
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'reorder_parts');

$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die ('Could not connect to MySQL: ' . mysqli_connect_error());

mysqli_set_charset($dbcon, 'utf8');

?>


