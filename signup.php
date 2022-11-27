<?php 
 session_start();
?>
<?php if(isset($_SESSION['u_id'])){
    header("Location: ../pid/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Creator-SignUp</title>
<?php include_once 'oop/metadata.css.php'; ?>
</head>
  <body class="bg-overly">
  <?php include_once 'oop/navbar.no.icon.php'; ?> 

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account
		<button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <a href="index.php" role="button"><span aria-hidden="true">×</span></a>
            </button>
		</div>
        <div class="card-body">
          <form role="form" action="include/signup.inc.php" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="first" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="last" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
					
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

	
	
	
	
<?php include_once 'oop/core.js.php'; ?>

  </body>

</html>
