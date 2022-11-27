<?php
include_once 'include/dbh.conn.php';
	$id = '1';
	$sql = "SELECT * FROM article Where article_id ='$id'";
    $result = mysqli_query($db_conn, $sql);


    $row = mysqli_fetch_assoc($result);
    echo '<img src="'.$row['article_content'].'">';