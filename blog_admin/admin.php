<?php
// this is where bulk of the program is situated.
// this section checks if the user is logged in else it will redirrect him to loging age
session_start();
if(isset($_SESSION["permit"])){
	
}else{
	header("location:login.php");
}
// section end

// This section grabs the article id and the article date for automating the date and id of articles
require "includes/dbcon.php";
$sql = "SELECT article_id FROM articles_record";
	
 $count = 0;

	if($result = mysqli_query($conn,$sql)){
		if(mysqli_num_rows($result)>0){
			
			while($row = mysqli_fetch_array($result)){
			 
			$count = $row["article_id"];
			}
			
				  
			
		}else{echo "it returned nothing";}
	}else{echo "query error";}
	
	
	// create a current days date for use with new posts
	$articles_date = "SELECT DATE_FORMAT(CURDATE(),'%d / %m / %Y')";
	if($date = mysqli_query($conn,$articles_date)){
		if(mysqli_num_rows($date)>0){
			$row = mysqli_fetch_array($date);
			$articles_date = $row[0];
		}else{echo "it returned nothing";}
	}else{echo "query error";}
	
//section ends
// the below function contains the boiler plate command for updating posting and deleting post
function updated_delete_post($sql){
	// sql
	global $conn,$img_save_dir,$destination;
	
				echo "<br> everything is ready to go";
			/*$sql = "INSERT INTO articles_record(article_id,article_title,article_date,article_author,article_content,article_image)
			VALUE('$article_id','$title','$articles_date','$author','$content','$destination')";*/
			if($result = mysqli_query($conn,$sql)){
					if(move_uploaded_file($img_save_dir,$destination)){
						echo "<br>image upload  and query succesfull";// here mean everything has worked
						header("location:success.php");
					}else{echo "<br>query success but image failure";}
			}else{
				echo "<br> query erro <br>";
				echo mysqli_error($conn);
			}
}
?>
<!DOCTYPE html>
<html lang="en" id = "top">
<title>Admin</title>
				<!-- Required meta tags -->
					<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
				<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				<!------ Include the above in your HEAD tag ---------->

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
				<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawsome/svg">
	 
	<link rel ="stylesheet" type="text/css" href="../styles/style.css">
	

<body>
	<div class="blog_page_header_thin" id="top" >
    		
		<a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
		<a href="http://www.twitter.com/"><i class="fab fa-twitter-square"></i></a>
		<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
		
	</div>
	<div class="blog_page_header_thick" >
	<span >WELCOME DR. LIKITA</span>
	<div>Add Update Delete and Manage Your Blog Posts Here</div>
	
	<br>
	<br> 
	</div>
	<div class="blog_page_header_thin2" >
		<a href="../blog.php"><span >&nbsp Back</span></a>
		<a href="logout.php" style="float:right"><span >&nbsp LogOut</span></a>
	  
	<br>
	</div>
	<!-- create new post form -->
		<div class="new_post_form" style="margin-left:40px;">
			<form action = "admin.php" method = "POST" enctype = "multipart/form-data">
			<br>
			<input type = "text" name = "ID" id="ID" value = "<?php echo'Article Number : '.$count + 1; ?>"  required disabled>
			<input type ="text" name ="TITLE" id ="TITLE" placeholder="Enter Title Of Article" required>
			<input type ="text" name ="DATE" id ="DATE" value = "<?php echo $articles_date;?>" required disabled> <br>
			
		<center><span> Type Your post here </span> <br>
			<textarea id = "CONTENT" name="CONTENT" rows="15" cols="150" required>
				
			</textarea><br> </center>
			<input type ="text" name ="AUTHOR" placeholder="article author" required>
			<input type ="file" name ="IMAGE"  required><br>
			<input type ="submit" id = "SUBM" value="Post Article">
			
			

			
			</form>
			
			
		
		
		</div>
		
		<div class="list_of_post">
		
		
		</div>
		
	<?php
	// This section is the processing code section to collect data from html form
		$pass = 0;
		// collect data from form.
		if(isset($_POST["TITLE"]) && !empty($_POST["TITLE"])  
		&& isset($_POST["CONTENT"]) && !empty($_POST["CONTENT"]) 
		&& isset($_POST["AUTHOR"]) && !empty($_POST["AUTHOR"])){
			$title = htmlspecialchars($_POST["TITLE"]);
		$content = htmlspecialchars($_POST["CONTENT"]);
		$author = htmlspecialchars($_POST["AUTHOR"]);
			
			
			//echo $title.$content.$author;
		
		
		
		
		
		//grab image
		if(isset($_FILES['IMAGE']['name']) && !empty($_FILES['IMAGE']['name']) ){
			$img_format = $_FILES['IMAGE']['type'];
		 $img_name = $_FILES['IMAGE']['name'];
		$img_size = $_FILES['IMAGE']['size'];
		$img_save_dir =  $_FILES['IMAGE']['tmp_name'];
			//echo "<br> image confirmation";
			//echo $img_format.$img_name.$img_size.$img_save_dir;
			
			if($img_format == "image/jpeg"){
				if($img_size < 2000000 && $img_size > 0 ){
					//echo "image format correct and size correct <br>";
					//echo "Picture format:".$img_format."<br> Picture name:". 
					//$img_name."<br> picture size:".$img_size."<br> 
					//picture saves directory:".$img_save_dir;
					
				echo $destination = "../images/".str_replace(" ","_",$title).".jpg";
					$pass = 1;
				}else{
							echo "pls make sure image is less than 2mb size";
					}
				}else{
					echo "please make sure your image is jpeg format";
				}
			
		}
		
		}
		// grap id and date and prep them;
		$articles_date = $articles_date;
		$article_id_no_increment = $count;
		// the id of the last articles id in the database plus one will be the value of the id for the next article.
		$article_id = $count + 1;
		
		
		
		//upload image to dir and upload data to db
		
		if($pass == 1 && isset($_SESSION["new_post_value"])){
			//editing an article
			$req_id =  $_SESSION["request_id"];
				echo "<br> everything is ready to go";
			$sql = "UPDATE articles_record SET article_title = '$title', article_author='$author',article_content ='$content', 
			article_image = '$destination' WHERE article_id ='$req_id'";
			updated_delete_post($sql);
		}else if($pass == 1){
			//uploading new article
			$sql = "INSERT INTO articles_record(article_id,article_title,article_date,article_author,article_content,article_image)
			VALUE('$article_id','$title','$articles_date','$author','$content','$destination')";
			updated_delete_post($sql);
		}else{
			//echo "some param need to be set";
		}
		
		
	
	
	
		
	?>

	<!-- grab the articles from database and populate edit and delete table-->
	
<div style="background-color:blue; font-size:120%; color:white;">	<center> <h1> Edit/Delete Old Post </h1> </center> </div>
	
	<!-- Dynamic table start here -->
	
			<div class="container">
				<div class="row">
							
							
							<div class="col-md-12">
							
							<div class="table-responsive">

									
								  <table id="mytable" class="table table-bordred table-striped">
									   
									   <thead>
									   
									   
									   <th>ARTICLE DATE</th>
										<th>ARTICLE TITLE</th>
										  <th>EDIT</th>
										   <th>DELETE</th>
									   </thead>
						<tbody>
				<?php
				// string to deferenciate delete from edit
				$del ="delete";
				// fetch data needed from db
					$sql = "SELECT article_date, article_id, article_title FROM articles_record";
					//$element_id = 1;
					if($result = mysqli_query($conn,$sql)){
					//dynamic table	
						while($row = mysqli_fetch_assoc($result)){
							
					echo	'	<tr> ';
					echo	'<td> '.$row["article_date"].'</td>';
					echo	'<td> '.$row["article_title"].'</td>';
					echo	'<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button   class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><a href="#top" style="color:white"><span  id='.$row["article_id"].' class="glyphicon glyphicon-pencil"href="#top"></span></a></button></p></td>
						<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><a href="#top" style="color:white"><span id='.$del.$row["article_id"].' class="glyphicon glyphicon-trash"></span></a></button></p></td>
					    </tr>';
					//	$element_id +=1;	
						}
						
					}else{
						echo mysqli_error($conn);
					}
				// dynamic table ends	
				?>	
						
					   	</tbody>
							
					</table>

					
					  </div>
					</div>
				</div>		
			</div>
			<div class="clearfix"></div>
	
	<script>
	//code for button compression effec
			$(document).ready(function(){
		$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
							$(this).prop("checked", true);
						});

					} else {
						$("#mytable input[type=checkbox]").each(function () {
							$(this).prop("checked", false);
						});
					}
				});
				
				$("[data-toggle=tooltip]").tooltip();
			});
	// button compression effect ends here
	
	// ajax call.
	
	function loadDoc() {
		alert("ajax fired");
		// grab clicked elements id
		var x = event.target.id;
		alert(x);
		if(confirm("Are You Sure You Want to Proceed ?")){
			if(x != ""){
			
			var updated_post_value = document.getElementById("SUBM").value = "Update Post";
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				if(this.responseText == ""){
				alert("Row successfully deleted");
				location.reload();
			}else{
						var returned_result = this.responseText;
					//console.log(returned_result);
					returned_result = JSON.parse(returned_result);
					//console.log(returned_result);
					article_id = returned_result.article_id;
					article_date = returned_result.article_date;
					article_title = returned_result.article_title;
					article_content = returned_result.article_content;
					
				 document.getElementById("CONTENT").innerHTML = article_content;
				document.getElementById("ID").value = "Ariticle Number : " + article_id;
				 document.getElementById("DATE").value = article_date;
				 document.getElementById("TITLE").value = article_title;
				//document.getElementById("demo").innerHTML = this.responseText; // testing name value pair sent
			}
			
		}
		 
		}
	  }else{
		  alert("please Try Again request not Picked");
	  }
		
		
		}else{
			location.reload();
		};
		
		
	 
	  xhttp.open("POST", "delete_edit_post.php?request_id=" + x + "&updated_post_value=" + updated_post_value, true);
	  
  xhttp.send();
}

// This section helps us grab the elements clicked on the table
function ajax_call(){
	var x = event.target.id;
	alert(x);
	console.log(typeof x);
	
	// everthing we need should be here
	//algo
	// determine the particular article that is clicked for editing 
	// pass a request to ajax to retrieve the content from a php file that can access the db for the content of that 
	//requeat
	// collect returned data and put inside the forms for editing.
		
	}
	

var buttons = document.getElementsByClassName("btn");

for(i = 0; i < buttons.length; i++){
	buttons[i].addEventListener("click", loadDoc);
	
	
}

// The test Hello

	</script>
	
<div id="demo">
Hello what ever i have here will be replace by ajax on click of a button
</div>
	

	
	
	<!-- footer section-->
	<div class="footer_section" >
				<span >&copy 2021 Pheel Innovations Total ICT Solutions<p>
						<img src="../images/phone_number_icon_small.jpg">08162620931</span>
	
	</div>	
</body>
</html>