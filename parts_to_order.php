<?php
    include 'config.php';
    include 'header.php';
?>

<div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">Parts needing to be order</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember Help
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Parts</button>
      </form>

    </div> <!-- /container -->

