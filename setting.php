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
	<?php include_once 'oop/metadata.css.php' ?>
	<title>User Setting</title>
</head>
<body id="page-top">
<?php include_once 'oop/navbar.php'; ?>

	<div id="wrapper-left">
		<?php include_once 'oop/side.navbar.php'; ?>

		<div id="content-wrapper">
			<div class="container">
				<?php include_once 'oop/user.data.php'; ?>

			</div>	
			<?php include_once 'oop/footer.php'; ?>
		</div>	
	</div>	
<a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
</a>


<?php include_once 'oop/modal.php'; ?>

<?php include_once 'oop/core.js.php'; ?>

</body>
</html>