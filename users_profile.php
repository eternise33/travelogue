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
			require_once('connection.php');
			error_reporting(0);
			$username = $_SESSION['txtUsername'];
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
			$username =mysql_real_escape_string($username);
			$sql = "SELECT * FROM account WHERE username = '$username'";
			$result = mysql_query($sql) or die (mysql_error());		
			$row = mysql_fetch_assoc($result);
			$firstname=$row['fname'];
			$midinitial=$row['mname'];
			$lastname=$row['lname'];
			$email=$row['email'];
			$sex=$row['sex'];
			$birthday_month=$row['bday_month'];
			$birthday_day=$row['bday_day'];
			$birthday_year=$row['bday_year'];
			$image = $row['thumbnail'];
			$about_me = $row['about_me'];
			$name = $firstname." ".$midinitial." ".$lastname;
			$bday = $birthday_month. " ".$birthday_day ." ".$birthday_year;
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
					
					<h1><?php echo $username."'s ".Profile ?><br/></h1>
					
					
					<div class="boxProfile">
					<table width="100%">
								<tr>
									<td>Name:</td>
									<td><?php echo $name ?></td>
								</tr>
								<tr>
									<td><label>Email:</label></td>
									<td><p  class="proftexts"> <?php echo $email ?></p></td>
								</tr>
								<tr>
									<td><label>Gender:</label></td>
									<td><p  class="proftexts"> <?php echo $sex ?></p></td>
								</tr>
								<tr>
									<td><label>Birthday:</label></td>
									<td><p  class="proftexts"> <?php echo $bday ?></p></td>
								</tr>
								<tr>
									<td><label>About me:</label></td>
									<td><p  class="proftexts"><?php echo $about_me ?></p></td>
								</tr>
								
								<tr>
									<td></br></br><input type = "button" name = "submit" value="Back" class="buttonForm2"style="float:left;" onClick="location.href='main_page1.php'" /></td>
									<td></br></br>
										<input type = "submit" name = "submit" value="Change Password" class="buttonForm2"  onClick="location.href='password_update.php'"/>
										<input type = "submit" name = "submit" value="Edit Profile" class="buttonForm2"  onClick="location.href='update_profile.php'"/>
									</td>
								</tr>
					</table>
						
						
						
					</div>
					
				</div> 
				
			</div> <!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				Copyright &#169; 2012 Apple Inc. All rights reserved.
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>