<?php 

session_start();

if (isset($_POST['submit_pwd'])) {
	
	include_once 'dbh.conn.php';

	$currPwd = mysqli_real_escape_string($db_conn, $_POST['pwd']);
	$newPwd = mysqli_real_escape_string($db_conn, $_POST['newPwd']);
	$confPwd = mysqli_real_escape_string($bd_conn, $_POST['confPwd']);

	$id = $_SESSION['u_id'];

	$sql = "SELECT * FROM users WHERE user_id = '$id'";
	$result = mysqli_query($db_conn, $sql);
	
	if ($row = mysqli_fetch_assoc($result)) {
		// de hashed current pwd
		$hashedPwdCheck = password_verify($currPwd, $row['user_pwd']);
			if ($hashedPwdCheck == false) {
				header("Location: ../setting.php?currentPwdIncorrect");
				exit();
			}elseif ($hashedPwdCheck == true) {
				//hashing the new pwd 
				$hashedNewPwd = password_hash($newPwd, PASSWORD_DEFAULT);
				$sql = "UPDATE users SET user_pwd = '$hashedNewPwd' Where user_id = '$id'";
				mysqli_query($db_conn, $sql);
				header("Location: ../setting.php?pwdChangeSuccess");
				exit();
			}
	}	

}else{
	header("Location: ../setting.php?erorr");
	exit();
}

/*

if (isset($_POST['submit_details'])) {
		include_once 'dbh.conn.php';
		$newFirstName = mysqli_real_escape_string($db_conn, $_POST['newFirstName']);
		$newLastName = mysqli_real_escape_string($db_conn, $_POST['newLastName']);
		$newEmail = mysqli_real_escape_string($db_conn, $_POST['newEmail']);

		$id = $_SESSION['u_id'];



}else{
	header("Location: ../setting.php?detailsSaveErorr");
	exit();
}*/