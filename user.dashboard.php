<?php 
 session_start();
?>
<?php if(!isset($_SESSION['u_id'])){
		header("Location: ../pid/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'oop/metadata.css.php'; ?>
<title>Dashboard</title>
</head>

  <body id="page-top">
	
  
    <?php include_once 'oop/navbar.php'; ?>
	
    <div id="wrapper-left">

      <?php include_once 'oop/side.navbar.php'; ?>
			
      <div id="content-wrapper">
			
        <div class="container">
        	<?php include_once 'oop/post.save.php'; ?>
			<div class="row">
			<div class="col-xl-12">
			  <!-- Area Chart Example-->
			  <div class="card mb-3">
				<div class="card-header">
					<img src="img/cc.png">	
	          		<h5>Post Name</h5>
	          		<span>Author : <?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?> </span> 	
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
			
			<div class="row">
			<div class="col-xl-12">
			  <!-- Area Chart Example-->
			  <div class="card mb-3">
				<div class="card-header">
					<img src="img/cc.png">	
	          		<h5>Post Name</h5>
	          		<span>Author : <?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?> </span> 	
				</div>
				<div class="card-body">
				  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
                    semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
                    rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
                    nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
                    eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.  <a href="#">READ MORE...</a>
                  </p>
                  <img src="img/post/p2.jpg" class="img-fluid">
				</div>
				<div class="card-footer small text-muted">Published yesterday at 11:59 PM</div>
			  </div>
			
			</div>
			
			</div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include_once 'oop/footer.php'; ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once 'oop/modal.php'; ?>

<?php include_once 'oop/core.js.php'; ?>

  </body>

</html>
