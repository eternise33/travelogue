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
		<script type="text/javascript" src="js/jquery.timeago.js"></script>
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
			$comments=$_POST['comments'];
			$submit=$_POST['submit'];
			$date = date("F j, Y g:i a");
			
			if($submit){
				$sql = "INSERT INTO post(comment, username, date )
						VALUES('$comments','$username','$date')";	
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
			
			
			<div class="content"> <!-- start of content-->
			
				<div class="col1">
				<div class="transparency"></div>
				
					<div class="userpost">
						<div class="title">Tapusin na natin to</div>
						<div class="contentPost">
							Praesent sem tellus, tempor ut scelerisque eget, interdum quis orci. Ut scelerisque leo pellentesque leo laoreet lacinia. Nullam ullamcorper nisi molestie ligula rutrum vitae lobortis nisl dignissim.<br /><br />

							Duis sit amet urna dolor. Quisque vitae lectus ut metus congue placerat ac ac dui. Aenean consectetur, leo eget lacinia laoreet, est lacus pulvinar erat, sit amet varius leo arcu a massa. <br /><br />
							
							Vivamus eu lectus leo. Cras malesuada, enim sed commodo porttitor, purus odio pharetra orci, vitae ultrices felis felis condimentum risus. Aenean consequat dolor ac eros ornare fermentum. Sed bibendum sollicitudin ornare. Phasellus iaculis elementum lectus id sagittis. Nam pharetra lectus vel augue varius eu pellentesque velit sollicitudin. Nunc id turpis lorem, ac molestie urna. Praesent lorem enim, volutpat scelerisque feugiat ac, dictum laoreet nisl.<br /><br />
						</div>
						<div class="postID">Post ID: 0001</div>
						<div class="username">User Name</div>
						<div class="userID">User ID: 05431</div>
						<div class="postDate">posted on: September 25, 2012</div>
						<div class="userpic">optional user pic</div>
					</div>
					
					<div class="comments">
						<div class="commenttitle">Comments</div>
						
						<div class= "inputComment">	
							<div class= "inputComment2">	
								<form method="POST" action="main_page.php">
									<textarea name = "comments" class="inputForm1" placeholder="Type your message here." /></textarea><br/>
									<input type = "submit" name = "submit" value="Post" class="buttonForm1"/>
								</form>
							</div>
						</div>
						
						
						
						<div class="commentPost">
							
							
								<?php
									
									$sql = "SELECT * FROM post ORDER BY post_id DESC";

									$result = mysql_query($sql) or die (mysql_error());		
									
									while($rows =mysql_fetch_array($result)){
										$id = $rows['post_id'];
										$comment =$rows['comment'];
										$username1 =$rows['username'];
										$dtime = $rows['date'];
 			
										
										echo "<div class=\"guestComment\">";
										//echo "<div class=\"transparency\"></div>";
											echo "<div class=\"guestImg\"><img src=\"images/gImg.jpg\"></div>";
											echo "<div class=\"commentInside\">";
												
												echo " <div><div class=\"guestName\"><a href='commenters_profile.php?id=" . $username1 . "'>$username1</a></div><span class=\"commentDate\">&nbsp; posted on $dtime</span> </div><br/><br/>";
												
												echo "<div class=\"commentText\" class=\"buttonForm\"> $comment</div>";
												//echo "<textarea name = \"comments\" name = \"comments\"  class=\"inputForm\" placeholder=\"Comment here.\" style=\"display: block;\" /></textarea>";
												echo "<a href='delete.php?id=" .$rows['post_id'] . "' class=\"buttonFormX\" >x</a>";	
											
											//second loop for the comments to the comment
											echo "<div class=\"commentInside2\">";
												echo "<div class=\"transparency\"></div>";
													$sql_comment = "SELECT * FROM comment WHERE post_id = '$id' ORDER BY comment_id ";
													$result_comment = mysql_query($sql_comment) or die (mysql_error());
													while($rows1 =mysql_fetch_array($result_comment)){
														$id1 = $rows1['comment_id'];
														$comment1 =$rows1['comment_topost'];
														$username2 =$rows1['username'];
														$dtime = $rows1['date'];
														
														//echo $comment1;
														
														echo "<div ><div class=\"guestName2\"><a href='commenters_profile.php?id=" . $username2 . "'>$username2</a></div> <span class=\"commentDate2\">&nbsp; posted on $dtime</span></div><br/><br/>";
														//echo "<div class=\"commentDate\"> $dtime </div>";
														//echo "<div class=\"commentDate\"> $dtime </div>";
														echo "<div class=\"commentText\" class=\"buttonForm\"> $comment1</div>";
														//paki ayos ung code nito.. hindi nag loo-loop
														echo "<a href='delete.php?id=" .$rows['post_id'] . "' class=\"buttonFormX\" >x</a>";	
													
													}
											
													//new form for the comment within the comment
													echo "<form method=\"POST\" action=\"comment.php?id=$id\" >";
														//echo "<input type = \"textarea\" name = \"comments1\" style=\"display: hidden;\" class=\"inputForm\" />";
														echo "<textarea name = \"comments1\" class=\"inputForm1\" placeholder=\"Comment here.\" style=\"display: block;\" /></textarea>";
														echo "<input type = \"submit\" name = \"submit\" value=\"Comment\" class=\"buttonForm2\"/>";
													echo "</form>";
													
											echo "</div>";
											
										echo "</div>";
										//echo "<div class=\"commentText\">sed commodo porttitor, purus odio pharetra orci, vitae ultrices felis felis condimentum risus. Aenean consequat dolor ac eros ornare fermentum. Sed bibendum sollicitudin ornare. ean consequat dolor ac eros <br /><br />ornare fermentum. Sed bibendum sollicitudin ornare. Phasellus iaculis elementum lectus id sagittis.</div>";
										//echo "<a href=\"#\">Edit Post</a>";
										echo "</div>";
										
										
										
									}
								?>
			
							
									
						
						</div>
					
					
						
							
						
					</div>
				</div>

				<div class="rightRail">
					<img src="images/gImg.jpg">
					<div class="rightRailTxt"><a href="users_profile.php?><?php echo $username?> </a></div>
					<div class="rightRailTxt">Email</div>
					<?php echo $username?>
					<div class="rightRailTxt">Aenean consequat dolor ac eros ornare fermentum. Sed bibendum sollicitudin ornare.</div>
					<input type = "submit" name = "submit" value="Post" class="buttonForm1"/>
					
				</div> 
				

				
			</div><!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				<h1> footer</h1>
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>