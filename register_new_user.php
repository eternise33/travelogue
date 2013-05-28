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
		error_reporting(0);
	
		?>

		<title>T R A V E L O G U E</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="js/supersized.shutter.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/calendar.js"></script>
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
			$username=$_POST['username'];
			$firstname=ucfirst(strtolower($_POST['fName']));
			$midinitial=ucfirst(strtolower($_POST['midInitial']));
			$lastname=ucfirst(strtolower($_POST['lName']));
			$email=$_POST['txtEmail'];
			$verifyemail=$_POST['txtEmail2'];
			$pass=$_POST['txtPassword'];
			$hash_pass = sha1($pass);
			$verifypass=$_POST['txtPassword2'];
			$sex=$_POST['txtGender'];
			$birthday_month=$_POST['DateOfBirth_Month'];
			$birthday_day=$_POST['DateOfBirth_Day'];
			$birthday_year=$_POST['DateOfBirth_Year'];
			$about_me=$_POST['aboutMe'];
			
			echo $image = addslashes(file_get_contents($_FILES['image'] ['tmp_name']));
			
			if(($username == "")||($firstname == "")||($midinitial == "")||($lastname == "")||($email == "")||($verifyemail == "")||($pass == "")||($verifypass== "")){
				print "<script>alert('Please fill out the form properly.');</script>";
			
		 
				
			}else if($email != $verifyemail){
				print "<script>alert('Your email and email verification do not match. Please try again.');</script>";
			

			
			}else if($pass!=$verifypass){
				print "<script>alert('Your password and password verification do not match. Please try again.');</script>";
				
			}else{
				$username=mysql_real_escape_string($username);
				$firstname=mysql_real_escape_string($firstname);
				$midinitial=mysql_real_escape_string($midinitial);
				$lastname=mysql_real_escape_string($lastname);
				$email=mysql_real_escape_string($email);
				$hash_pass=mysql_real_escape_string($hash_pass);
				$sex=mysql_real_escape_string($sex);
				$birthday_month=mysql_real_escape_string($birthday_month);
				$birthday_day=mysql_real_escape_string($birthday_day);
				$birthday_year=mysql_real_escape_string($birthday_year);
				$image=mysql_real_escape_string($image);
				$sql = "INSERT INTO account(username, fname, mname, lname, email , password, sex, bday_month, bday_day, bday_year, about_me)
				VALUES('$username', '$firstname', '$midinitial', '$lastname', '$email', '$hash_pass', '$sex', '$birthday_month', '$birthday_day', '$birthday_year', '$about_me')";	
				$result = mysql_query($sql) or die(mysql_error());
				
				
				$to = $email;
				$subject = "Greetings";
				$body="Hi thank you for registering with our blogsite";
				$headers = "From: Our Team <root@localhost.com>";
				mail($to, $subject, $body, $headers);
				$Message ="Account successfully created. Please try to login you Username and Password";
				$Message ="Account Successfully Created.!";
				header("Location:login.php?Message=" . urlencode($Message));

			}
			
			
			mysql_free_result($result);
			mysql_close($result);
			

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
			
			
			<div class="regCont"> <!-- start of content-->
				
				
					
				
					<div class="regCol1">
						
						<div class="regTagline">Join our<br/>group of<br/>wanderlusts.<br/></div>
						<div class="contentPost">
							You'll see weekly updates of the adventures of our users<br /><br />
						</div>
						
					</div>
					
					
				

				<div class="regCol2">
					<div class="transparency"></div>
					<h1>Register</h1>
		
		<form method = "POST" action = " register_new_user.php"  enctype ="multipart/form-data">
			<table width="100%">
			
			
				<tr>
					<td><label>Username:</label></td>
					<td>
					<input type = "text" name = "username" placeholder= "Username" size="12" class="inputLogin"/>
					</td>
				<tr>
					<td><label>Name:</label></td>
					<td>
						<input type = "text" name = "fName" placeholder= "First Name" size="12" class="inputLogin"/>
						<input type = "text" name = "midInitial" placeholder= "MI" size="1" maxlength ="1" class="inputLogin"/>
						<input type = "text" name = "lName" placeholder= "Last Name" size="12" class="inputLogin"/>
					</td>
					
				</tr>
				
				<tr>
					<td><label>Email:</label></td>
					<td><input type = "text" name = "txtEmail" placeholder= "xxxxx@domain.com" class="inputLogin" /></td>
				</tr>
				<tr>
					<td><label>Re-enter Email:</label></td>
					<td><input type = "text" name = "txtEmail2" class="inputLogin"/></td>
				</tr>
				<tr>
					<td><label>Password:</label></td>
					<td><input type = "password" name = "txtPassword" class="inputLogin"/></td>
				</tr>
				<tr>
					<td><label>Re-enter Password:</label></td>
					<td><input type = "password" name = "txtPassword2" class="inputLogin"/></td>
				</tr>
				<tr>
					<td><label>I am:</label></td>
					<td>
						<select name="txtGender" class="inputLogin">
							<option value="female">Female</option>
							<option value="male">Male</option>
						</select>
					</td>
				</tr>
						
				<tr>
				
					<td><label>Birthday:</label></td>
					<td>
						<select name="DateOfBirth_Month" class="inputLogin">
							<option value="0">- Month -</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select> 
						
						<select name="DateOfBirth_Day" class="inputLogin">
							<option value="0">- Day -</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select> 
						
						<select name="DateOfBirth_Year" class="inputLogin">
							<option value="0">- Year -</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
							<option value="1919">1919</option>
							<option value="1918">1918</option>
							<option value="1917">1917</option>
							<option value="1916">1916</option>
							<option value="1915">1915</option>
							<option value="1914">1914</option>
							<option value="1913">1913</option>
							<option value="1912">1912</option>
							<option value="1911">1911</option>
							<option value="1910">1910</option>
							<option value="1909">1909</option>
							<option value="1908">1908</option>
							<option value="1907">1907</option>
							<option value="1906">1906</option>
							<option value="1905">1905</option>
							<option value="1904">1904</option>
							<option value="1903">1903</option>
							<option value="1902">1902</option>
							<option value="1901">1901</option>
							<option value="1900">1900</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td><label>About me:</label></td>
					<td>
						<textarea name = "aboutMe" class="inputLogin" placeholder="Tell us something about you."  cols="50"/></textarea>
					</td>
					
				</tr>
				

				<tr>
					<td align="left"></br></br><input type = "button" value = "Back" onClick="location.href='login.php'" class="buttonLogin"/></td>
					<td align="right"></br></br><input type = "submit" name = "register" value = "Register" class="buttonLogin"/>
					</td>
				</tr>
			</table>
		</form>
					
					
				</div> 
				
			</div><!-- end of content-->
			
		
			<div class="footer">	<!-- start of footer -->
				Copyright &#169; 2012 Apple Inc. All rights reserved.
			
			</div><!-- end of footer -->
		
		
		</div><!-- end of container-->
		
	
</body>

</html>