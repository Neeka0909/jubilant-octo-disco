<?php
include_once 'dbh.conn.php';
$id = "1";
$sql = "SELECT * FROM project WHERE project_id = '$id'";
$result = mysqli_query($db_conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck < 0) {
	echo "ERORR";
}else{
	$row = mysqli_fetch_assoc($result);
	echo htmlspecialchars_decode(stripslashes($row['project_intro']));
}
?>