<?php
session_start();
require_once('connection.php');
error_reporting(0);

$id=$_REQUEST['id'];
$comments=$_POST['comments1'];
$username = $_SESSION['txtUsername'];
$date = date("F j, Y g:i a");
$sql = "INSERT INTO comment(post_id, username, comment_topost, date )
		VALUES('$id','$username','$comments','$date')";	
mysql_query($sql);
header("location: main_page1.php");
?>


			
