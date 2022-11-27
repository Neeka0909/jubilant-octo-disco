 <?php
session_start();


$output = '';

if (is_array($_FILES)) {
	//echo 'ok';
	foreach ($_FILES['file']['name'] as $name => $value) {
		$fileName = explode(".", $_FILES['file']['name'][$name]);
		$allowedExt = array("jpg", "jpge", "png", "gif");

			if (in_array($fileName[1], $allowedExt)) {
				$newFileName = md5(rand()).'.'.$fileName[1];
				$sourcePath = $_FILES['file']['tmp_name'][$name];
				$targetPath = '../img/upload/'.$newFileName;

				if (move_uploaded_file($sourcePath, $targetPath)) {
						$projectId = $_SESSION['projectId'];
						include_once 'dbh.conn.php';
						$sql = "INSERT INTO `project_img`(project_id, img_name) VALUES ('$projectId', '$newFileName')";
						mysqli_query($db_conn, $sql);

						$output .= '<img src="img/upload/'.$newFileName.'" width="100px" height="100px" class="img-thumbnail">';
				}
			}
		

		
	}
}
$db_conn->close();
echo $output;
?>