<?php
session_start();
include_once '../functions/functions.inc.php';
if (isset($_POST['submit'])) {

	include_once 'dbh.conn.php';
	$Name = mysqli_real_escape_string($db_conn, $_POST['projectName']);
	$id = $_SESSION['u_id'];
	$date = date("Y.m.d h:i:sa");
$header = generateProjectUrl();


	$sql = "INSERT INTO project (user_id, project_name, created_date, call_id) VALUES ('$id', '$Name', '$date', '$header');";
	
	if (mysqli_query($db_conn, $sql)) {
		header("Location: ../project.write.php?id=".$header."");
		exit();
	}else{
		header("Location: ../project.write.php?id=null");
		exit();
	}
    

}else{
	header("Location: ../user.dashboard.php?erorr");
	exit();
}

?>