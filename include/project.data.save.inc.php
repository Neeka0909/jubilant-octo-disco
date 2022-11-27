<?php  
session_start();
if (isset($_POST['intro'])) {
	include_once 'dbh.conn.php';
	$value = mysqli_escape_string($db_conn, $_POST['intro']);
	$id = $_SESSION['projectId'];
	$sql = "UPDATE project SET project_intro = '$value' Where project_id = '$id'";
	mysqli_query($db_conn, $sql);
	echo "Success";
	exit();
}else{
	echo "ERORR";
}


?>