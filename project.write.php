<?php
session_start();
if(!isset($_SESSION['u_id'])){
		header("Location: ../pid/index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'oop/metadata.css.php'; ?>
	<title>Creator-Write your post </title>
<link rel="stylesheet" href="vendor/quill/quill.bubble.css" />
<link rel="stylesheet" href="vendor/quill/quill.snow.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<style>
  .standalone-container {
    margin:auto;
  }
  #bubble-container-intro {
    font-size: 18px;
    height: 175px;
  }
  #bubble-container-name {
    font-size: 16px;
  }
  .step{
    height: 125px;
    font-size: 16px;
  }

</style>
</head>
<?php
                    
  $id = $_GET['id'];
  $uid = $_SESSION['u_id'];

  include_once 'include/dbh.conn.php';

    $sql = "SELECT * FROM project Where call_id ='$id'";
    $result = mysqli_query($db_conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $projectUserId = $row['user_id'];
    $projectName = $row['project_name'];
    $_SESSION['projectId'] = $row['project_id'];


?>
<body id="page-top">

<?php include_once 'oop/navbar.php'; ?>
	
    <div id="wrapper-left">

      <?php include_once 'oop/side.navbar.php'; ?>
      <div id="content-wrapper">
      <div class="container-fluid">
<?php
  if ($id == "null") {
    echo '<div class="alert alert-danger">
            <strong>Erorr!</strong> You should Restart Your Project.
          </div>';
  }elseif ($uid == $projectUserId) {
    echo ' <div class="row">
          <div class="col-xl-12">
          <div class="name-container">';
    echo " <b>Project Name:</b> ".  $projectName; 
      echo '        
          </div>
          </div>
        </div>

 <div class="row">
          <div class="col-xl-12">
             <div class="step-container-img">
             <div class="file_drag_area">
                    <p class="neeka">Drop Cover image Here or Click here to Add Cover Image</p>
                    <div id="notification"></div>
                    <picture>
                    <div id="upload_file" class="z-1">

                    </div>
                    </picture>
                  </div>
                  
                </div>
              </div>  
          </div>

        <div class="row">
          <div class="col-xl-12">
             <div class="step-container">
             <b>Project Intro </b>
                  <div class="step-inner-container">
                  <div class="standalone-container">
                    <div id="bubble-container-intro"></div>
                  </div>
                  
                </div>
                </div>
              </div>  
          </div>
         
          <div id="dynamic_field">
          <div class="row" id=row1>
          <div class="col-xl-12">
             <div class="step-container">
              <div class="form-group">
                <label for="step1Title"><b>Step 1 </b></label>
                <input type="text" class="form-control" id="step1Title" placeholder="Step 1 : Title">
              </div>
              
              <div class="img-container">
                <a href="#" data-toggle="modal" data-target="#step1imgModal">
                    <div class=step-img-text>
                      Click here to Select Step 1 images
                    </div>
                </a>
              </div>
              
                  <div class="step-inner-container">
                  <div class="standalone-container">
                    <div class="step" id="step1">
                    </div>
                </div>
                </div>
              </div>  
          </div>
        </div>
<!-- /#dynamic-field -->
        </div>
         <div class="row">
            <div class="col-xl-12">

                <div class="right">
                  <button type="button" id="add_step" class="btn btn-primary"  name="add_step">Add Step</button>
                  <button type="button" id="save" class="btn btn-primary"  name="save">Save</button>
                </div>
            </div>
          </div> 
        <br>  ';
  }else{
    echo '<div class="alert alert-danger">
            <strong>Erorr!</strong> You Can not edit this Project.
          </div>';
  }
      
    
?>
       
<!-- /.container-fluid -->
      </div>
<!-- Sticky Footer -->
        <?php include_once 'oop/footer.php'; ?>
        <div id="imgModalAdd">
        <div class="modal  fade" id="step1imgModal" tabindex="-1" role="dialog" aria-labelledby="step1imgModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="step1imgModalLabel">Select Step 1 Image</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="uploadImg"></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
        <button type="submit" name="submit_logout" class="btn btn-primary">Save</button>
      
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /.content-wrapper -->
	   </div> 
     <!-- /#wrapper -->
  </div> 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    
    <!-- Logout Modal-->
    <?php include_once 'oop/modal.php'; ?>
    <?php include_once 'oop/core.js.php'; ?>
    <script src="vendor/quill/quill.min.js"></script>
    <script src="js/project.js"></script>
    <script src="js/owl.carousel.min.js"></script>




</body>
</html> 