
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="<?php echo BASE_URL?>assets/stylesheets/main.css" rel="stylesheet" media="all"/>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <title><?php echo $title; ?></title>
    </head>

 <?php 
     echo (
      '<body>' .
        '<nav class="navbar navbar-inverse">' .
          '<div class="container-fluid">' .
            '<div class="navbar-header">' .
              '<a class="navbar-brand" href="' . BASE_URL . 'index.php">Parts Needing Ordered</a>' .
            '</div>' .
            '<div>'.
              '<ul class="nav navbar-nav navbar-right">' .
                '<li><a href="' . BASE_URL . 'index.php/"><span class="glyphicon glyphicon-home"></span>Home</a></li>' .
                '<li><a href="' . BASE_URL . 'parts_to_order.php/"><span class="glyphicon glyphicon-plus"></span>Add Parts</a></li>' .
              '</ul>' .
            '/div>' .
          '</div>' .
        '</nav>'
        );
  ?>