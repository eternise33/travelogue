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
	$uploadDir = 'img/'; //Image Upload Folder
if(isset($_POST['upload']))
{	echo $username;
	echo $fileName = $_FILES['Photo']['name'];
	$tmpName = $_FILES['Photo']['tmp_name'];
	$fileSize = $_FILES['Photo']['size'];
	$fileType = $_FILES['Photo']['type'];
	echo$filePath = $uploadDir . $fileName;
	$result = move_uploaded_file($tmpName, $filePath);
	if (!$result) {
	echo "Error uploading file";
	exit;
	}
	if(!get_magic_quotes_gpc())
	{
	$fileName = addslashes($fileName);
	$filePath = addslashes($filePath);
	}
	$query = "INSERT INTO thumbnail(path) VALUES ('$filePath')";	
	$result = mysql_query($sql) or die(mysql_error());

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
					
					<h1>Upload Photo<br/></h1>
					
					
					<div class="boxProfile">
						<form method = "POST" action = " upload_pic.php"  enctype ="multipart/form-data">
							<table width="100%">
								<tr>
									<td><label>Upload photo:</label></td>
									<td><input type="file" name="Photo" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"></td>
								</tr>


								<tr>
									<td></td>
									<td align="center"></br></br><input type = "submit" name = "upload" value = "Upload Photo" class="buttonLogin"/>
									<input type = "button" value = "Back" onClick="location.href='02_pg01c.php'" class="buttonLogin"/>
									<input type = "button" value = "Next" onClick="location.href='02_pg01c.php'" class="buttonLogin"/></td>
								</tr>
								
							</table>
						</form>
						
					</div>
					
				</div> 
				
			</div> <!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				<h1> footer</h1>
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>