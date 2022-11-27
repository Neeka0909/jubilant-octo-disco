<nav class="navbar navbar-expand navbar-dark bg-dark static-top fixed-top" >
	    
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      
      <a class="navbar-brand mr-1" href="index.php"> <b>Creator</b> </a>

      <!-- Navbar Search 
      <form class="d-none d-md-inline-block form-inline ml-auto ">
        <div class="input-group">
           <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
            </button> 
          </div>
        </div>
      </form>-->
	  <?php 
	  if (isset($_SESSION['u_id'])){
		  echo '<!-- Navbar -->
		  
		  <ul class="navbar-nav ml-auto">
		  <li class="nav-item dropdown no-arrow ">
          <a class="nav-link dropdown-toggle" href="index.php" role="button" >
			<i class="fas fa-home fa-fw"></i>
          </a>
        </li>
		<li class="nav-item dropdown no-arrow ">
          <a class="nav-link dropdown-toggle" href="user.dashboard.php" role="button" >
			<i class="fas fa-tachometer-alt fa-fw"></i>
          </a>
        </li>
			<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow ">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="setting.php">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
		
      </ul>
	  ';
	  }else {
		  echo'<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
		<a class="nav-link dropdown-toggle" href="login.php">
		<i class="fas fa-user-circle fa-fw"></i> Login</a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="signup.php"  role="button">
		<i class="fas fa-user fa-fw"></i> Sign Up</a>
        </li>
        </ul>';
	  }
	  ?>
    </nav>
