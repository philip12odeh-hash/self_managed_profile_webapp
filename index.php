<?php 
include("blog_admin\includes\dbcon.php");

?>
<!doctype html>
<html lang="en">
<head>
<title>REVEREND LIKITA</title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawsome/svg">
	 
	<link rel ="stylesheet" type="text/css" href="styles/style.css">
	
</head>

<body>
<!-- navigation bar for mobile view visible display is block when we are in mobile view -->
<div class="invisible_nav" style="background-color:blue; position:fixed; width:100%; z-index:2;">
	<div class="topnav" id="myTopnav">
		<a href="#welcome_section" class="active"><img src="images/ashimolowo4.jpg" style="border-radius:5px;"></a>
		 <a href="#welcome_section" onclick="myFunction()">WELCOME</a>
		 <a href="#education_section" onclick="myFunction()">EDUCATION</a>
		<a href="#work_experience" onclick="myFunction()">WORK EXPERIENCE</a>
		<a href="#buy_my_book" onclick="myFunction()">PUBLICATIONS</a>
		 <a href="#awards"onclick="myFunction()">AWARDS</a>
		 <a href="blog.php">BLOG</a>
		 <a href="#contact_section" onclick="myFunction()">CONTACT</a>
		 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		 </a>
	</div>
</div>

<div class="row" id="container" >
	<div class="col-sm-4 about_img" style="visibility:" ><br>
	<!--	<button onclick = "widths();">click to show screen size </button>-->
		<div id="about_img_div_one">
		<a href ="#welcome_section" style="text-decoration:none"><img src="images/ashimolowo3.jpg"></a></div>
		
		<br>
		
		<a href="#welcome_section"><div>  WELCOME</div> </a>
		
		
		
		<a href="#education_section"><div> EDUCATION </div></a>
		
		
		<a href="#work_experience"><div> WORK EXPERIENCE</div> </a>
		
		
		<a href="#buy_my_book"><div> PUBLICATIONS </div> </a>
		
		<a href="#awards"><div> AWARDS </div> </a>
		
		
		<a href="blog.php"><div> BLOG</div> </a>
		
		<a href="#contact_section"><div> CONTACT</div> </a>
		
	</div>
		
		<!-- invisible column to help push content aside-->
		<div class="col-sm-4 push_content" ><br>
		<div id="about_img_div_one">
		<img src="images/ashimolowo.jpg"></div>
		
		<br>
		<hr>
		<a href="#"> WELCOME </a>
		
		<br>
		<hr>
		<a href="#"> EDUCATION </a>
		<br>
		<hr>
		<a href="#"> WORK EXPERIENCE </a>
		<br>
		<hr>
		<a href="#"> PUBLICATION </a>
		<br>
		<hr>
		<a href="#"> BUY MY BOOKS </a>
		<hr>
		<a href="#"> BLOG </a>
		<hr>
		</div>
		
		
		
		
		
	<!-- welcome section -->	
	<div class="col-sm-8 about_text">
			<div class="welcome_img" id="welcome_section">
			
				<div class="spacing" style="text-align:right;">
				
					<img src="images/ashimolowo3.jpg" style="">
				</div>
				
				<div class="big_text">
				<?php
				$sql = "SELECT ID, NAME,NAME_BLUE,TITLE,TITLE_BLUE,INTRO FROM banner";
					
					if($result = mysqli_query($conn,$sql)){
					//ALL ELEMENTS IN SINGLE QUOTE
					// &nbsp added to have space between name and name_blue every time a change is made from editable site
						while($row = mysqli_fetch_assoc($result)){
						echo	'<span  class="big"><mark>'.$row["NAME"].'<span> &nbsp'.$row["NAME_BLUE"].'</span> </mark></span>';
					
						echo '<p><span class ="small">'.$row["TITLE"].' <span>'.$row["TITLE_BLUE"].' </span></span>';
						
						}
						
					}else{
						echo mysqli_error($conn);
					}
					?>
					
				  
				</div>
				
				<div class="brief_intro">
				<?php
					$sql = "SELECT INTRO FROM banner";
					
					if($result = mysqli_query($conn,$sql)){
					//ALL ELEMENTS IN SINGLE QUOTE
						while($row = mysqli_fetch_assoc($result)){
						echo '<span><mark>'.$row["INTRO"].'</span></mark><br><br>';
					
						
						
						}
						
					}else{
						echo mysqli_error($conn);
					}
				
				
				?>
					
				</div>
				
				
				<div class="social_media_links">
					<a href="https://web.facebook.com/obadiahlikita"><img src="images/social1.jpg" onmouseover="this.src='images/social1_blue.jpg'" 
						onmouseout ="this.src='images/social1.jpg'"></a>
					<a href="https://www.linkedin.com/in/obadiah-adamu-likita-2b0b85120/"><img src="images/social2.jpg" onmouseover="this.src='images/social2_blue.jpg'" 
						onmouseout ="this.src='images/social2.jpg'"></a>
					<a href="http://www.twitter.com"><img src="images/social3.jpg" onmouseover="this.src='images/social3_blue.jpg'" 
						onmouseout ="this.src='images/social3.jpg'"></a>
				</div>
				<br>
			</div>
			
			<br>
	<!-- Eduction section-->
			<div class="education" id="education_section">
			
					<div class="E1">
						  HIS EDUCATION 
					</div>
					<!--Doctorate Degree-->
					<hr>
					<?php
					$sql = "SELECT * FROM education";
					
					if($result = mysqli_query($conn,$sql)){
					//ALL ELEMENTS IN SINGLE QUOTE THEN ATTRIBUTES AND STRING VALUES IN DOUBLE
						while($row = mysqli_fetch_assoc($result)){
			  echo '<div class="E3">
						<img src="images/badge.jpg"> <span>'.$row["LEVEL"].'</span> <p>
						<img src="images/calender.jpg"><span>'.$row["START_YEAR"].' - '.$row["END_YEAR"].'</span>
						<div>'.$row["CONTENT"].
						'</div>
					</div>';
					
						
						
						}
						
					}else{
						echo mysqli_error($conn);
					}
					
					
					
					?>
					
					<br>
					<br>
					<br>
					
					
			
			</div>
			
			<br>
			
		<!-- Work Experience section-->
		<div class="work_experience" id="work_experience">
			<div class="w1">
			WORK EXPERIENCE
			</div>
			<hr>
			<div class="w2">
			<?php
			$sql = "SELECT * FROM work_experience";
			$clearfix = 0;		
					if($result = mysqli_query($conn,$sql)){
					//ALL ELEMENTS IN SINGLE QUOTE THEN ATTRIBUTES AND STRING VALUES IN DOUBLE
						while($row = mysqli_fetch_assoc($result)){
						 echo '<div class="card1"><span>'.$row["POST"].'</span>
				<img src="images/brief_case.jpg"><p><p><b>'.$row["DATE_STARTED"].' - '.$row["END_DATE"].'</b><p>'.$row["CONTENT"].'
				<br>
				</div>';
				$clearfix +=1;
				if($clearfix%2 == 0){
					echo '<div class="clearfix">
				<br>
				</div>';
				}
						
						
						}
						
					}else{
						echo mysqli_error($conn);
					}
					
					
					
					?>
			
			
			
			

				
			</div>
		
		
		</div>
		<br>
		
		
		
		
		<br>
<!-- buy my books sections -->
	<div class = "publications" id="buy_my_book">
		<div class="wrapper">
			<div class="b1">
				PUBLICATIONS
			</div>
			<hr>
			<?php
			$sql = "SELECT* FROM publications";
			
			if($result = mysqli_query($conn,$sql)){
				 while($rows = mysqli_fetch_assoc($result)){
					 echo '<div class="b2" >
			
				<span ><img src="'.$rows["BOOK_COVER"].'" >
						'.$rows["DESCRIPTION"].'

				
			</div>
			
			<div class="clearfix"></div>
			<a href="'.$rows["LINK"].'"style="text-decoration:none;"><div class="buy_button">
				<span> BUY THIS BOOK </span>
			</div>
			</a>
	
			
			<div class="clearfix"></div>
				<hr>
			<br>';
			
			
	
				
				 }	
				 }else{
				 echo mysqli_error($conn);}
			
			
			?>
			
			
		
			<hr>
			<br>
			
		</div> 		
		
	
	</div>
	<br>
	<!--award section--->
	<div class="award" id="awards">	
		<div class="a1">
		AWARDS CEREMONIES
		<p> Hover your mouse on the picture to pause the slide</p>
		</div>
		
			  
		
		<hr>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			  <!-- progress bar code -->
			  
					<?php
					
						$sql = "SELECT slide_number FROM progress_bar";
						$slider_num = 0;
						 
						
						if($result = mysqli_query($conn,$sql)){
							while($rows = mysqli_fetch_array($result)){
								
								if($slider_num == 0){
									echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$rows["slide_number"].' class="active"></li>';
								
									
								}else{
									
									echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$rows["slide_number"].'></li>';
						
								}
							$slider_num = +1;
								
							}
							
						}else{
							echo "query error";
						}
					?> 
			<!---	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
				
			  </ol>
			  <div class="carousel-inner">
					<?php
						$sql = "SELECT * FROM awards";
						$img_number = 1;
						 
						
						if($result = mysqli_query($conn,$sql)){
							while($rows = mysqli_fetch_array($result)){
								
								if($img_number == 1){
									echo '<div class="carousel-item active">
								<img class="d-block w-100" src="'.$rows["IMG_LINK"].'" alt="slide">
								</div>';
									
								}else{
									echo '<div class="carousel-item">
								<img class="d-block w-100" src="'.$rows["IMG_LINK"].'" alt="slide">
								</div>';
									
								}
							$img_number +=1;
								
							}
							
						}else{
							echo "query error";
						}
					
					?>
				
				
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
		
		</div>
		<br>
	</div>
<!-- contact section-->

	<br>
		<div class="contact_wrapper" id="contact_section">
				<div class="row">
					<div class="col-sm-8 contact_sec">
						<div class="contact_form" >CONTACT </div>
						<form id = "contact_form" method="POST" onsubmit="alert('Processing Data...... press OK')" >
							  <div class="form-group">
								<label for="exampleFormControlInput1">Full Name</label>
								<input type="text" class="form-control" name = "name"id="exampleFormControlInput1" placeholder="Please enter your full name" required>
							  </div>
							  
							  <div class="form-group">
								<label for="exampleFormControlInput1">Email address</label>
								<input type="email" class="form-control" name = "email" id="exampleFormControlInput1" placeholder="name@example.com" required>
							  </div>
							  
							  <div class="form-group">
								<label for="exampleFormControlTextarea1">Type Your FeedBack</label>
								<textarea class="form-control" name ="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
							  </div>
							  <button  class="btn btn-primary mb-2" onclick ="send_data()">SUBMIT</button>
						</form>
						<br>
						<br>
					
					</div>
					
				<div class="col-sm-4 address_and_images">
								<div > <img src="images/address_icon.jpg" ><span>
								NUMBER 23 LIKITA ROAD <P style="line-height:1em;">
								JANRUWA KADUNA</span></div>
								<hr>
								<div > <img src="images/phone_number_icon.jpg" ><span>
								081453432 <P style="line-height:1em;">
								080667865</span></div>
								<hr>
								<div> <img src="images/email_icon.jpg"  ><span>
								info@revlikita.com <P style="line-height:1em;">
								revlikita@gmail.com</span></div>
								<hr>
								<div > 
								<a href="https://web.facebook.com/obadiahlikita"><img src="images/social1.jpg" onmouseover="this.src='images/social1_blue.jpg'" 
								onmouseout ="this.src='images/social1.jpg'"></a>
								<a href="https://www.linkedin.com/in/obadiah-adamu-likita-2b0b85120/"><img src="images/social2.jpg" onmouseover="this.src='images/social2_blue.jpg'" 
								onmouseout ="this.src='images/social2.jpg'"></a>
								<a href="http://www.twitter.com"><img src="images/social3.jpg" onmouseover="this.src='images/social3_blue.jpg'" 
								onmouseout ="this.src='images/social3.jpg'"></a>
								
								</div>
							
					
						
				</div> 


				</div>
		<!--- invisible contact -->
				<hr>
			<div class="invisible_contact_divs_wrapper">
				<div class="invisible_contact_divs">
					<img src="images/address_icon.jpg" ><p>
					<span>
								NUMBER 23 LIKITA ROAD <P style="line-height:1em;">
								JANRUWA KADUNA</span>
				</div>
				<hr>
				<div class="invisible_contact_divs">
					<img src="images/phone_number_icon.jpg" ><span><p>
								081453432 <P style="line-height:1em;">
								080667865</span>
				</div>
				<hr>
				<div class="invisible_contact_divs">
					<img src="images/email_icon.jpg"  ><span><p>
								info@revlikita.com <P style="line-height:1em;">
								revlikita@gmail.com</span><p>
								
						<a href="http://www.facebook.com"><img src="images/social1.jpg" onmouseover="this.src='images/social1_blue.jpg'" 
								onmouseout ="this.src='images/social1.jpg'"></a>
								<a href="http://www.linkedin.com"><img src="images/social2.jpg" onmouseover="this.src='images/social2_blue.jpg'" 
								onmouseout ="this.src='images/social2.jpg'"></a>
								<a href="http://www.twitter.com"><img src="images/social3.jpg" onmouseover="this.src='images/social3_blue.jpg'" 
								onmouseout ="this.src='images/social3.jpg'"></a>
				</div>
			</div>
		</div><!-- contact section ends just added this div-->	
		<!-- footer section-->
		<div class="footer_section">
						<span >&copy 2021 Pheel Innovations Total ICT Solutions<p>
								<img src="images/phone_number_icon_small.jpg">08162620931 </span><p>
								<a href="edit_index.php"> Login</a>
						
						
			
		</div>
	
	
	</div>			
</div>
<!-- just removed this div </div>-->
<!-- footer_section-->





	
	
	



	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
  <script>
  // check the width of window for aligninng the push div 
	function widths(){
		lWidth = window.innerWidth;
	alert(lWidth);
	}
	// speed of award carousel
  $('.carousel').carousel({
   interval: 1500
  });
  // function to toogle drop mobile view navigation.
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function send_data(){
	
var name = document.getElementById("contact_form").elements[0].value;
var email = document.getElementById("contact_form").elements[1].value;
var message = document.getElementById("contact_form").elements[2].value;


  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    response = this.responseText;
    alert(response);
	location.reload();
  }
  xhttp.open("POST", "mailer.php?name=" + name + "&email=" + email + "&message=" + message, true);
  xhttp.send();
}

 
  </script>
  
</body>
</html>