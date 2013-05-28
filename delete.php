<?php
session_start();
require_once('connection.php');
error_reporting(0);

$deleteid=$_REQUEST['id'];
mysql_query("DELETE FROM post WHERE post_id ='$deleteid'");
header("location: main_page.php");
?>