<?php
session_start();

if (isset($_POST['submit'])) {

	include_once 'dbh.conn.php';

	$storyName = mysqli_real_escape_string($db_conn, $_POST['storyName']);
	$projectName = mysqli_real_escape_string($db_con, $_POST['projectName']);
	$articleName = mysqli_real_escape_string($db_conn, $_POST['articleName']);
	$poemName = mysqli_real_escape_string($db_conn, $_POST['poemName']);

	$id = $_SESSION['u_id'];

	
	
}else{
	header('Location: ../user.dashboard.php?erorr');
	exit();
}