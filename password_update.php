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
		session_start();
		require_once('connection.php');//for connecting to your database
		error_reporting(0);
		$username = $_SESSION['txtUsername'];
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
			if (isset($_POST['register'])){
			
			$sql = "SELECT * FROM account WHERE username = '$username'";
			$result = mysql_query($sql) or die (mysql_error());	
			$row = mysql_fetch_assoc($result);
			$old_hash_pass_db = $row['password'];//this is the password of the usersave in the database,its saved as a hash code
			$oldpass=$_POST['txtPassword'];
			$hash_oldpass=sha1($oldpass);//old password that has been hash which will be compared to the old hash password			
			$newpass =$_POST['txtPassword1'];
			$new_hash_pass =sha1($newpass);
			$vernewpasss =$_POST['txtPassword2'];
			
			if(($oldpass="")||($newpass="")||($vernewpasss="")){
			
				print "<script>alert('Please make sure that all fields are answered');</script>";
			}else{
				if($old_hash_pass_db!=$hash_oldpass){
				
					print "<script>alert('The password you have entered did not match our database');</script>";
				}else if($newpass!=$vernewpasss){
					print "<script>alert('Your new password and password verification did not match');</script>";
				
				}else{
					$sql = "UPDATE account SET
					password = '$new_hash_pass'
					WHERE
					username = '$username'";
					$result = mysql_query($sql) or die(mysql_error());
					$Message ="Password Update Successful!";
					header("Location:users_profile.php?Message=" . urlencode($Message));

				
				}

			}

		}
		?>
		
	</head>
	


<body>
	
		<div class="wrapper"> <!-- start of container -->
			
			<div class="header"><!-- start of header-->
				<a id="prevslide" class="headerBut"></a>
				<a id="nextslide" class="headerBut"></a>
				<img src="images/logo_lo.png" style="position:relative; top:50%;" />

				
			</div> <!-- end of header-->
			
			
			<div class="profCont"> <!-- start of content-->
				
				
					
				<!-- 
					<div class="regCol1">
						
						<div class="regTagline">Join our<br/>group of<br/>wanderlusts.<br/></div>
						<div class="contentPost">
							You'll see weekly updates of the adventures of our users<br /><br />
						</div>
						
					</div>
				-->	
					
				<div class="transparency"></div>

				<div class="profCol2">
					
					<h1>Update <?php echo $username ?> Password<br/></h1>
					
					
					<div class="boxProfile">
						<form method = "POST" action = " password_update.php"  enctype ="multipart/form-data">
							<table width="100%">
								<tr>
									<td><label>Password:</label></td>
									<td><input type = "password" name = "txtPassword" class="inputLogin"/></td>
								</tr>

								<tr>
									<td><label>New Password:</label></td>
									<td><input type = "password" name = "txtPassword1" class="inputLogin"/></td>
								</tr>

								<tr>
									<td><label>Verify New Password:</label></td>
									<td><input type = "password" name = "txtPassword2" class="inputLogin"/></td>
								</tr>

								<tr>
									<td align="left"></br></br><input type = "button" value = "Back" onClick="location.href='users_profile.php'" class="buttonForm2" style="float:left;"/></td>
									<td align="center"></br></br>
										<input type = "submit" name = "register" value = "Update Password" class="buttonForm2"/>
									</td>
								</tr>
								
							</table>
						</form>
						
					</div>
					
				</div> 
				
			</div> <!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				Copyright &#169; 2012 Apple Inc. All rights reserved.
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>