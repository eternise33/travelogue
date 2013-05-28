<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>
	<?php
		require_once('connection.php');//for connecting to your database
		session_start();
		error_reporting(0);
		if (isset($_GET['Message'])) {
		print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
		}
	
	?>

		<title>T R A V E L O G U E</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="js/supersized.shutter.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="js/supersized.shutter.min.js"></script>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   5000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	2000,		// Speed of transition
															   
					// Components							
					slide_links				:	'false',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'images/ss/01.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/02.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/03.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/04.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/05.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/06.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/07.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/08.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/09.jpg', title : '', thumb : '', url : ''},
														{image : 'images/ss/10.jpg', title : '', thumb : '', url : ''}
														
														
												]
					
				});
		    });
		    
		</script>
		
		<?php
			if (isset($_POST['login'])){
			//basic expression on php to get input from the form 'txtUsername is the name of the input
			$username = $_POST['txtUsername'];
			$password = $_POST['txtPassword'];
			$hash_pass = sha1($password);
			$Message = "Log in successful";
			
			//global variable session then gets the username as its value
			$_SESSION['txtUsername'] = $_POST['txtUsername'];
			
			//basic query within the table in order to counter check if the password exist within our database
			//mysql_real_escape_string is a mysql library function to prevent sql injection before making a query
			$username=mysql_real_escape_string($username);
			$username=mysql_real_escape_string($username);
			$sql = "SELECT * FROM  account WHERE username = '$username'";
			$result = mysql_query($sql) or die (mysql_error());		
			$row = mysql_fetch_assoc($result);
			
			//counter checking of the results starts here
			//if username and password field are not empty
			if(($username != "")||($password != "")){
				if(($username == $row['username'])&&($hash_pass == $row['password'])){
					header("location: main_page1.php");//this expression reroutes our page and loads login_done.php
					}
				else{
				print "<script>alert('Invalid Username or Password.');</script>";
				}
			}
			//if either or both fields are empty then this will be run instead
			else if(($username == "")||($password == "")){
				print "<script>alert('Please enter your username and password');</script>";
			}
			
			//this are closing tags to free sql query and to close it
			mysql_free_result($result);
			mysql_close($result);

		} 

		?>
		
		
		
	</head>


<body>

	<!--Arrow Navigation-->
	<a id="prevslide" ></a>
	<a id="nextslide" ></a>
	
	
	
	<div class="error"></div>
	<div class = "boxLogin">
		<div class = "boxLogin1">
			<img src="images/logo_lo.png"  height="57" width="400"><//>
			<h4>A blogsite for travellers by travellers.</h4>
		</div>

		<div class="boxLogin2">
			<div class="transparency"></div>
			
			<div>
				<h2>User Login</h2>

				<form method = "POST" action = "login.php">
					<input type = "text" name = "txtUsername" placeholder="username"  class="inputLogin" /><br />
					<input type = "password" name = "txtPassword" placeholder="password"  class="inputLogin" /><br /><br />
					<input type = "submit" name = "login" value = "Log In" class="buttonLogin"/>
					<input type = "button" value = "Signup" size="6" class="buttonLogin" onClick="location.href='register_new_user.php'"/>
			</form>
			</div>
		</div>
	</div>
	
	
	

</body>
</html>
