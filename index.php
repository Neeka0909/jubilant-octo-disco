<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Creater.inc</title>
<!-- Metadata and core css -->
<?php include_once 'oop/metadata.css.php'; ?>
</head>

  <body id="page-top">

    <?php include_once 'oop/navbar.php'; ?>
	
    <div id="wrapper-left">
	
		<?php if(isset($_SESSION['u_id'])){
			       include_once 'oop/side.navbar.php'; 
			
			       echo '<div id="content-wrapper">';
			       echo '<div class="container-fluid"> 
						<div class="row">
							<div class="col-xl-12">';
					include_once 'oop/searchbar.php';		
							
					echo '	</div>
							</div>
						</div>
						<br>';
						include_once 'oop/post.viewer.php';
						echo '
						</div>	';
			}else{
				echo '<div id="content-wrapper">';
				
				echo '<div class="container-fluid">
						<div id="demo" class="carousel slide" data-ride="carousel">

					  <!-- Indicators -->
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>

					  <!-- The slideshow -->
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/slider/slider1.jpg" alt="Los Angeles">
					    </div>
					    <div class="carousel-item">
					      <img src="img/slider/slider2.jpg" alt="Chicago">
					    </div>
					    <div class="carousel-item">
					      <img src="img/slider/slider3.jpg" alt="New York">
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>

			</div>
			</div>';
			}
			 		
      	?>
      		
        
        <!-- /.container -->

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