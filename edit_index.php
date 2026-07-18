<!DOCTYPE html>
<html lang="en">
<title>blog</title>
<!-- this is the login page for editing the profile page-->
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawsome/svg">
	 
	<link rel ="stylesheet" type="text/css" href="styles/style.css">

<body>
	<div class="blog_page_header_thin" id="top" >
    		
		<a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
		<a href="http://www.twitter.com/"><i class="fab fa-twitter-square"></i></a>
		<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
		
	</div>
	<div class="blog_page_header_thick" >
	<span >WELCOME DR. LIKITA</span>
	<div>Pls enter your administrative Password to gain access and Manage Site</div>
	
	<br>
	<br> 
	</div>
	<div class="blog_page_header_thin2" >
		<a href="index.php"><span >&nbsp Back</span></a>
	  
	<br>
	</div>
	<div class="login_form_container">
		<br>
		<br>
			<img src="images/ashimolowo3.jpg"><br>
			<div class="row">
			<div class="col-sm-12 contact_sec">
				
				<form action="edit_index.php" method="POST">
					  <div class="form-group">
						<label for="exampleFormControlInput1">PASSWORD</label>
						<input type="password" class="form-control"  name ="password" " Required>
					  </div>
					  
					  
					 
					  <button type="submit" class="btn btn-primary mb-2">LOGIN</button>
					</form>
				<br>
				<br>
			
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	
	
	</div>
	
	
	<!-- footer section-->
	<div class="footer_section" >
				<span >&copy 2021 Pheel Innovations Total ICT Solutions<p>
						<img src="../images/phone_number_icon_small.jpg">08162620931</span>
	
	</div>	
</body>
</html>
<?php

	// check if the method used in form is Post
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//check and purify entries  continue to enhance in the future
	if(isset($_POST["password"]) && !empty($_POST["password"])){
		$password =  $_POST["password"];
		$password = trim($password);
		$password = htmlentities($password);
		$supplied_password = $password;
		$hashed_password = password_hash("Dr.LikiTaOne",PASSWORD_DEFAULT);
		// validate user and grant him access
		if(password_verify($supplied_password,$hashed_password)){
			
			
		
		header("location:editablesite\index.php");
		}else{
			echo "your login was not successfull";
			// add code for password recovery here.
		}
		
	
	}
		
		
		
		
		
		
		
	}
		



?>

	