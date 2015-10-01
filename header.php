
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

        <?php if($page == "checkstatus"){ ?>
          <link href="<?php echo BASE_URL?>css/parts_to_order.css" rel="stylesheet" media="all"/>
        <?php } ?>
        
        <link href="<?php echo BASE_URL?>css/dashboard.css" rel="stylesheet" media="all"/>
          
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <title><?php echo $title; ?></title>
    </head>

 <?php 
          echo (
           '<body>' .
            '<nav class="navbar navbar-inverse navbar-fixed-top">' .
              '<div class="container-fluid">'.
                '<div class="navbar-header">' .
                  '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" ' .
                   'data-target="#navbar" aria-expanded="false" aria-controls="navbar">' .
                    '<span class="sr-only">Toggle navigation</span>' .
                    '<span class="icon-bar"></span>' .
                    '<span class="icon-bar"></span>' .
                    '<span class="icon-bar"></span>' .
                  '</button>' .
                  '<a class="navbar-brand" href="'. BASE_URL . 'index.php">DayTech Repair</a>' .
                '</div>' .
                '<div id="navbar" class="navbar-collapse collapse">' .
                  '<ul class="nav navbar-nav navbar-right">' .
                    '<li><a href="#">Dashboard</a></li>' .
                    '<li><a href="#">Settings</a></li>' .
                    '<li><a href="#">Profile</a></li>' .
                  '</ul>' .
                  '<form class="navbar-form navbar-right">' .
                    '<input type="text" class="form-control" placeholder="Search...">' .
                  '</form>' .
                '</div>' .
              '</div>' .
            '</nav>' .
            '<div class="container-fluid">' .
              '<div class="row">' .
                '<div class="col-sm-3 col-md-2 sidebar">' .
                  '<ul class="nav nav-sidebar">' .
                    '<li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span> Parts <span class="sr-only">(current)</span></a></li>' .
                    '<li><a href="'. BASE_URL . 'parts_to_order_display.php">Part Needing Ordered</a></li>' .
                    '<li><a href="' . BASE_URL . 'parts_to_order.php">Add Parts to Order List</a></li>' .
                  '</ul>' .
                  '<ul class="nav nav-sidebar">' .
                    '<li class="active"><a href=""><span class="glyphicon glyphicon-user"></span> Customers</a></li>' .
                    '<li><a href="">New Customer</a></li>' .
                    '<li><a href="">Customer List</a></li>' .
                    '<li><a href="">Edit Information</a></li>' .
                  '</ul>' .
                  '<ul class="nav nav-sidebar">' .
                      '<li class="active"><a href=""><span class="glyphicon glyphicon-check"></span> Pre/Post Check</a></li>' .
                    '<li><a href="">Pre Checklist</a></li>' .
                    '<li><a href="">Post Checklist</a></li>' .
                  '</ul>' .
                '</div>'
           );

  ?>