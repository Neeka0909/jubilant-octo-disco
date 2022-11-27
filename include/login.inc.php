<?php
	session_start();
	
	
	
if (isset($_POST['submit_login'])){
	
	include_once 'dbh.conn.php';
	
	$uid = mysqli_real_escape_string($db_conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($db_conn, $_POST['pwd']);
	
		$sql = "SELECT * FROM users WHERE user_email = '$uid'";
		$result = mysqli_query($db_conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1){
			header("Location: ../login_erorr.php");
			$_SESSION['incorrect'] = " Your user name is incorrect ";
			exit();
		} else{
			if ($row = mysqli_fetch_assoc($result)){
				//de hashed pwd
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){
					header("Location: ../login_erorr.php");
					$_SESSION['incorrect']= " Your password is incorrect ";
					exit();
				} elseif($hashedPwdCheck == true){
					//log in user 
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_firet'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					
					header("Location: ../user.dashboard.php");
					exit();
				}
			}
		}
		
		
	} else{
	header("Location: ../index.php?login=error");
	exit();
}