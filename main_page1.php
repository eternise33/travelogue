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
		
		<?php
					
			$sql = "SELECT * FROM account WHERE username = '$username'";
			$result = mysql_query($sql) or die (mysql_error());		
			$row = mysql_fetch_assoc($result);
			$aboutme=$row['about_me'];
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
						<div class="title">Viva Puerto Princesa</div>
						<div >
							<div class="guestName2">
								<span class="commentDate2">posted by&nbsp;&nbsp;</span> <a href="#">eternise</a>
							</div>
							<span class="commentDate2">&nbsp;&nbsp;September 25, 2012</span>
						</div>
								<!-- <div class="postID">Post ID: 0001</div> 
								<div class="username">posted by eternise33</div>
								<div class="userID">User ID: 05431</div> 
								<div class="postDate">September 25, 2012</div>
								<div class="userpic">optional user pic</div> -->
						
						
						<div class="contentPost">
							
							
							<center>
							<video width="480" height="360" controls="controls"  align = "center">
									<source src="images/pilipinas.mp4" type="video/mp4">
							</video>
							</center>
							<br />
							Hello guys, we just came from the <b>Puerto Princesa Subterranean River National Park</b>, about 50 km. (30 miles) north of the capital. Of course, the trip would not be complete without  visiting the <b>Puerto Princesa Underground River</b> located in the Saint Paul Mountain Range. Bordered by St. Paul Bay to the north. and the Babuyan River to the east, it is also called as St. Paul Underground  River. What's really amazing about this is the Provincial City Government of Puerto Princesa has taken great measures to maintain the National Park since 1992. If you want to quickly access the entrance to the river, just get your accommodations in Sabang Town and from there, you can just have a moderate length of walk. <br /><br />
							
							Because of the recent discovery of the second floor in this underground river, its implied that there are small waterfalls inside the cave. It also features a cave dome, as well huge rock formations, water holes, huge bat nests and a unique marine ecosystem. What is more amazing is that there are deeper  underground levels that is prohibited to explores, in risk of oxygen deprivation. <br /><br />
							<center><img src="images/pp_ug.jpg" ></img></center>
							
							<br />Last November, The Underground River was provisionally included in the  list of the New Wonders of Nature, gaining the seventh spot. It was officially confirmed on January 28, 2012. <br /><br />
							
						</div>
						
					</div>
					
					<div class="comments">
						<div class="commenttitle">Comments</div>
						
						<div class= "inputComment">	
							<div class= "inputComment2">	
								<form method="POST" action="main_page1.php">
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
					<div class="rightRailTxt"><a href="users_profile.php?"><?php echo $username?> </a></div>
				 
					<div class="rightRailTxt"><?php echo $aboutme ?></div>
					<input type = "button" name = "submit" value="Log Out" class="buttonForm1" onClick="location.href='logout.php'" style="float:center;"/>
					
					
					
				</div> 
				

				
			</div><!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				Copyright &#169; 2012 Apple Inc. All rights reserved.
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>