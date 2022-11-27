<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'oop/metadata.css.php'; ?>
</head>
<body class="bg-overly">
<?php include_once 'oop/navbar.no.icon.php'; ?>
	
	<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login
		<button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <a href="index.php" role="button"><span aria-hidden="true">×</span></a>
        </button>
		</div>
        <div class="card-body">
          <form action="include/login.inc.php" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="uid" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
			<button type="submit" class="btn btn-primary btn-block" name="submit_login">Login</button>
            
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="signup.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
<?php
	include_once 'oop/core.js.php'; 
?>	
	