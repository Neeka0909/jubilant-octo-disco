<?php 
session_start();
if(isset($_SESSION['u_id'])){
	}else{
		header("Location: ../pid/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?></title>
	<?php include_once 'oop/metadata.css.php'; ?>
</head>
<body id="page-top">
	<?php include_once 'oop/navbar.php'; ?>
	<div id="wrapper-left">
		<?php include_once 'oop/side.navbar.php'; ?>

		<div id="content-wrapper">
			<div class="container">
					<img src="img/bg/3.jpg" class="cover opa">
					<div class="user-prof-cover ">
		            	<img src="img/cc.png">
		            	<h3   class="user-name"><?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?></h3>
		            	<div class="user-data "></div>
            		</div>
		        
			</div>	
			<div class="container">
				<div class="menubar">
				  <a  href="#">Followers 10k</a> 
				  <a href="#">Posts</a> 
				  <a href="#">About</a> 
				</div>
			</div>	
			<div class="container">
			<div class="row">
			<div class="col-xl-12">
			  <!-- Area Chart Example-->
			  <div class="card mb-3">
				<div class="card-header">
					<img src="img/cc.png">	
	          		<h5>Post Name</h5>
	          		<span>Author :<?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?> </span> 	
				</div>
				<div class="card-body">
				  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
                    semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
                    rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
                    nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
                    eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.  <a href="#">READ MORE...</a>
                  </p>
                  <img src="img/post/p1.jpg" class="img-fluid">
				</div>
				<div class="card-footer small text-muted">Published yesterday at 11:59 PM</div>
			  </div>
			
			</div>
			
			</div>	
			</div>	
			<!-- Sticky Footer -->
        <?php include_once 'oop/footer.php'; ?>
		<!-- End Content wrapper -->	
	</div>	
	<!-- End wrapper-->	
	</div>	
	<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once 'oop/modal.php'; ?>

	<?php include_once 'oop/core.js.php'; ?>
</body>
</html>