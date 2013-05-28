<?php
	
	$connection = mysql_connect("localhost", "root", "angelina")
				or die("Error in connecting to localhost.");
				
				mysql_select_db("project_website")
				or die("Error in connecting to database.");
?>
