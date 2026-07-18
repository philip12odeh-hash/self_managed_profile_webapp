<?php
include "blog_admin/includes/dbcon.php";?>

<!DOCTYPE html>
<html lang="en">
<title>blog</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawsome/svg">
	 
	<link rel ="stylesheet" type="text/css" href="styles/style.css">

<body>
<?php
// query to pull all data from database
	$sql = "SELECT* FROM articles_record";
	


	if($result = mysqli_query($conn,$sql)){
		if(mysqli_num_rows($result)>0){
			
			while($row = mysqli_fetch_array($result)){
			
			
			
			}
			
				  
			
		}else{echo "it returned nothing";}
	}else{echo "query error";}

?>
	<div class="blog_page_header_thin" id="top" >
	
	    		
		<a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
		<a href="http://www.twitter.com/"><i class="fab fa-twitter-square"></i></a>
		<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
		
		

	
	</div>
	<div class="blog_page_header_thick" >
	<span >Articles</span>
	<div>Find My Digitally Published Articles Here!!!</div>
	
	<br>
	<br>
	
	
	
	
	</div>
	<div class="blog_page_header_thin2" >
	
	  <a href="index.php"><span >&nbsp Back</span></a>
	  <a href="blog_admin/login.php" style="float:right"><span >&nbsp Login</span></a>
	  
	<br>
	</div>
	
	
	<!--post link sections-->
	<div class="row">
	<div class="col-sm-3"  ><br>
	
		<?php
				$sql = "SELECT* FROM articles_record";
				
			$num = 1;

				if($result = mysqli_query($conn,$sql)){
					if(mysqli_num_rows($result)>0){
						
						while($row = mysqli_fetch_array($result)){
						echo '<a href="#article_title_and_date1" >
								<div class="post_link" >
									<img src="'; echo str_replace('../','',$row["article_image"]).'" >
									<div >'; echo $row["article_title"].'
										 <p>
										<span>';echo $row["article_date"].'</span>
									</div>
									
									
								</div>
								</a>
								
								<hr>';
						
						
						}
						 
							  
						
					}else{echo "it returned nothing";}
				}else{echo "query error";}

	?>
	
		
		
	</div>
	
	
		
		
		
		
		
		
	<!-- welcome section -->	
	<div class="col-sm-9"  >
		
		<div class ="articles_wrapper" >
		<br>
		<?php
					$sql = "SELECT* FROM articles_record";
					
				

					if($result = mysqli_query($conn,$sql)){
						if(mysqli_num_rows($result)>0){
							
							while($row = mysqli_fetch_array($result)){
									echo'<div class="article_title_and_date" id="article_title_and_date1" >';
									echo $row["article_title"].'<p>
								<span >';echo "Posted On ".$row["article_date"].'</span>
							
							</div>
							<hr>
							<div class="article_content" >
								<img src="';echo str_replace('../','',$row["article_image"]).'" >
														';echo $row["article_content"].'
								</div><!-- article content close-->
									<div class="back_to_top">
									<a href="#top"><img src="images/back_to_top.jpg"></a>
									</div>';
							
							
							}
							 
								  
							
						}else{echo "it returned nothing";}
					}else{echo "query error";}

		?>
			
				
		</div><!-- ariticle wrapper close-->
		</div><!-- column sm 9 div close-->
			
	</div><!-- row div close-->
			
			<div class="clearfix">
			</div>
			<hr>
			
			
			
			
			
	

	<div class="footer_section" >
				<span >&copy 2021 Pheel Innovations Total ICT Solutions<p>
						<img src="images/phone_number_icon_small.jpg">08162620931</span>
	
	</div>	
	
<?php
	mysqli_close($conn);

?>	
	

</body>
</html>