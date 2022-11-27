<?php
session_start();
if(isset($_SESSION['incorrect'])){
	}else{
		header("Location: ../pid/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Metadata and core css -->
<?php include_once 'oop/metadata.css.php'; ?>
</head>
<body class="bg-overly">
<?php include_once 'oop/navbar.no.icon.php'; ?>
	<!-- Navbar end -->	

	<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">
		<?php
			if(isset($_SESSION['incorrect'])){
				echo  "Dear user  please enter your correct username and password";
			}elseif(isset($_SESSION['incorrect'])){
				echo  "Dear user  please enter your correct username and password";
			}
			?>
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
		  </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    
<?php include_once 'oop/core.js.php'; ?>

  </body>

</html>
