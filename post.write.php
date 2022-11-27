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
	<?php include_once 'oop/metadata.css.php'; ?>
	<title>Creator-Write your post </title>
</head>
<body id="page-top">

<?php include_once 'oop/navbar.php'; ?>
	
    <div id="wrapper-left">

      <?php include_once 'oop/side.navbar.php'; ?>
      <div id="content-wrapper">
      <div class="container">

        <div class="row">
          <div class="col-xl-12">
          <!-- Breadcrumbs-->
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <?php echo "Project Name"; //$_SESSION['projectname']; ?>
            </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">  
            <!-- DataTables Example -->
              <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Project Intro </div>
              <div class="card-body">
                 <form action="include/project.data.save.inc.php" method="post">
                <textarea class="ckeditor"  id="editor1" name="editor1" >
                  
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
                    semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
                    rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
                    nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
                    eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.
                  
                </textarea>
              
              </div>
              <div class="card-footer">
                <div class="right">
                <button class="btn btn-primary" name="save">Save</button>
              </div>
              </form>
              </div>
              </div>
          </div>
		  </div>
          <div class="row">
          <div class="col-xl-12">  
            <!-- DataTables Example -->
              <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Step 1</div>
              <div class="card-body">
                
                <form action="sample_posteddata.php" method="post">
              
                <textarea class="ckeditor"  id="editor1" name="editor1" >
                  
                </textarea>
              

              </div>
              <div class="card-footer">
                <div class="right">
                  <button class="btn btn-primary" name="">Save</button>
                  </form>
                </div>
              </div>
              </div>
          </div>
        
          </div>
      </div>
	   </div> 
  </div>     
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once 'oop/modal.php'; ?>
    <?php include_once 'oop/core.js.php'; ?>
    <script src="vendor/ckeditor/ckeditor.js"></script>
 

</body>
</html> 