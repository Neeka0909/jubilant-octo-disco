
<?php include_once 'css.metedata.php'; ?>
  <body>

	<nav class="navbar navbar-default navbar-dark ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-responsive"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
		
		
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
		<!-------------------------------------------------------------------
					Login  form
		--------------------------------------------------------------->
                <li><a onclick="display_log_in_form()"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                   <div id="login" class="modallogin">
  
			  <form class="modal-content animate" action="include/login.inc.php" method="POST">
				<div class="imgcontainer">
				  <span onclick="close_log_in_form()" class="close" title="Close Modal">&times;</span>
				  <img src="img/logo.png" alt="Avatar">
				</div>

				<div class="form-container">
				  <label for="uname"><b>Email</b></label>
				  <input type="text" placeholder="Enter Username or Email" name="uid" required> 
				  
				  <label for="psw"><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="pwd" required>
	
				  <button type="submit" class="btn btn-success" name="submit_login">Login</button>
				  <button type="button" class="btn btn-danger" onclick="close_log_in_form()">Cancel</button>
				  <label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				  </label>
				  <span class="psw"> <a href="#">Forgot password ?</a></span>
				</div>
			  </form>
			</div> 
		</ul>
    </div>
  </div>
</nav>