<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
	  <li class="nav-item">
		  <a class="nav-link" href="user.php">
        <div class="sidebar-user">
            <img src="img/cc.png" class="sidebar-user">
            <?php
            echo '<span>'.$_SESSION['u_firet']." ".$_SESSION['u_last'].'</span>';
            ?>
        </div> 
          </a>
		
	  </li>
        <li class="nav-item">
          <a class="nav-link" href="user.dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-pen"></i>
            <span>Unpublished Project</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Bookmark</span></a>
        </li>
      </ul>