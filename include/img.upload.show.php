<?php
session_start();

include_once 'dbh.conn.php';
	
	$output = '';

	$projectId = $_SESSION['projectId'];

	$sql = "SELECT * FROM project_img WHERE project_id = '$projectId'";
	$data = mysqli_query($db_conn, $sql);
	
	if (mysqli_num_rows($data) > 0) {

	while ($row = mysqli_fetch_assoc($data)) {
		$output .= '<img src="img/upload/'.$row['img_name'].'" width="75px" height="75px" class="img-thumbnail">';
	}
	echo $output;
	}