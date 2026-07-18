<?php 
include("..\blog_admin\includes\dbcon.php");

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
	 
	<link rel ="stylesheet" type="text/css" href="../styles/style.css">
	
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
<?php
$sql = "SELECT * FROM mails ORDER BY  ID DESC";
?>
<div class="row" id="container" >

	<div class="col-sm-4 about_img mailviewer"  ><br>
	<!--	<button onclick = "widths();">click to show screen size </button>-->
		<div id="about_img_div_one">
		<a href ="#welcome_section" style="text-decoration:none"><img src="../images/ashimolowo3.jpg"></a></div>
		
		<br>
		<!-- dont forget to  remove style and put in stylesheet-->
	<?php	
		
		if($result = mysqli_query($conn,$sql)){
			while($row = mysqli_fetch_assoc($result)){
				
				
				echo "<a href = '#welcome_section'class = 'mlinks' id ='".$row["ID"]."' style='text-align:left;'> <div id ='".$row["ID"]."'>"."SENDER: ".$row["NAME"]. "<p id ='".$row["ID"]."'>EMAIL: ".$row["EMAIL"].
						"<p id ='".$row["ID"]."'> DATE: ".$row["DATE"]. "</div></a>";
				
						
			}
		}
			
		?>
		
		
		
		
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
			<!-- mailer header-->
			
			<div  id="welcome_section">
					<div class="blog_page_header_thick" >
						<span >MAILS</span>
						<div>Read Comments and Suggestions From Viewers of Your Website</div>
					</div>
			
				
				
				
			
		
	<!-- Eduction section-->
			<div class="education mailviewer" id="education_section">
			
					<div class="E1">
						  Mail
					</div>
					<hr>
				<div id="mailcontainer">	
					
					<?php
					$sql = "SELECT * FROM mails ORDER BY ID DESC LIMIT 1";
					
					if($result = mysqli_query($conn,$sql)){
					//ALL ELEMENTS IN SINGLE QUOTE THEN ATTRIBUTES AND STRING VALUES IN DOUBLE
						while($row = mysqli_fetch_assoc($result)){
			  echo '<div class="E3">
						<img src="../images/badge.jpg"> <span> '.$row["NAME"].'</span> <p>
						<img src="../images/calender.jpg"><span> '.$row["EMAIL"].'</span> <p>
						<img src="../images/calender.jpg"><span> '.$row["DATE"].'</span>
						<div><b> CONTENT </b> <p>'.$row["MESSAGE"].
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
			
			</div>
			
			
<!-- contact section-->

		<!-- contact section ends just added this div-->	
		<!-- footer section-->
		<div class="footer_section">
						<span >&copy 2021 Pheel Innovations Total ICT Solutions<p>
								<img src="images/phone_number_icon_small.jpg">08162620931 </span><p>
								<a href="edit_index.php"> LogOut</a>
						
						
			
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

// grab mail links
// codes to try and get id for maillink elements so we can use them to fetch mail from db
var mail_links = document.getElementsByClassName("mlinks");

for(i = 0; i < mail_links.length; i++){
	mail_links[i].addEventListener("click", loadmail);
	
	
}
function loadmail(){
	 
	var x = event.target.id;
	
			
			
		


		  const xhttp = new XMLHttpRequest();
		  xhttp.onload = function() {
			  alert(x);
			  
			document.getElementById("mailcontainer").innerHTML = this.responseText;
			
			
		  }
		  xhttp.open("POST", "fetchmail.php?id=" + x, true);
		  xhttp.send();
		
	
	
	
	
}
 
  </script>
  
</body>
</html>