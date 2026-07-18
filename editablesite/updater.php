<?php
require("../blog_admin/includes/dbcon.php");
if(@$_REQUEST["id"] == "banner"){
	echo "YOUR BANNER ID IS  : {$_REQUEST["id"]}";
	echo "\n YOUR NAME IS : {$_REQUEST["name"]}";
	echo "\n YOUR NAME BLUE is : {$_REQUEST["name_blue"]}";
	echo "\n YOUR TITLE IS: {$_REQUEST["title"]}";
	echo "\n YOUR TITLE_BLUE IS: {$_REQUEST["title_blue"]}";
	echo "\n YOUR BRIEF INTRO IS: {$_REQUEST["brief_intro"]}";
	$id =  $_REQUEST["id"];
	$name = $_REQUEST["name"];
	$name_blue = $_REQUEST["name_blue"];
	$title = $_REQUEST["title"];
	$title_blue = $_REQUEST["title_blue"];
	$brief_intro = $_REQUEST["brief_intro"];
	$sql = "UPDATE banner SET INTRO = '$brief_intro', NAME = '$name', NAME_BLUE = '$name_blue', TITLE = '$title', TITLE_BLUE ='$title_blue' ";
	
	echo $id,$name,$name_blue, $title, $title_blue, $brief_intro;
	
	if($results = mysqli_query($conn,$sql)){
		echo "Table Updated";
	}else{
		echo mysqli_error($conn);
	}
	
}

   /*section id*/
if(@$_REQUEST["id"] == "education"){
	echo"request block is being runed \n";
	echo "\n YOUR SECTION ID IS :{$_REQUEST["id"]}";
	echo "\n YOUR REQUEST ID IS : {$_REQUEST["request_id"]}";
	echo "\n YOUR LEVEL IS : {$_REQUEST["level"]}";
	echo "\n YOUR START AND END YEAR IS: {$_REQUEST["start_and_end_year"]}";
	echo "\n YOUR CONTENT IS : {$_REQUEST["content"]} \n";
	$id = $_REQUEST["request_id"];
	$level = $_REQUEST["level"];
	echo $start_year =substr($_REQUEST["start_and_end_year"],0,4);
	echo "\n";
	echo $end_year = substr($_REQUEST["start_and_end_year"],7,4);
	$content = $_REQUEST["content"];
	
	$sql = "UPDATE education SET LEVEL = '$level', START_YEAR = '$start_year', END_YEAR = '$end_year', CONTENT ='$content' WHERE ID = '$id' ";
	
	
	
	if($results = mysqli_query($conn,$sql)){
		echo "Table Updated";
	}else{
		echo mysqli_error($conn);
	}
	
}
if(@$_REQUEST["id"] == "education_update"){
	echo "we are runing the education qualification commands";
	
	echo"request block is being runed \n";
	echo "\n YOUR SECTION ID IS :{$_REQUEST["id"]}";
	echo "\n YOUR REQUEST ID IS : {$_REQUEST["request_id"]}";
	echo "\n YOUR LEVEL IS : {$_REQUEST["level"]}";
	echo "\n YOUR START AND END YEAR IS: {$_REQUEST["start_and_end_year"]}";
	echo "\n YOUR CONTENT IS : {$_REQUEST["content"]} \n";
	$id = $_REQUEST["request_id"];
	$level = $_REQUEST["level"];
	echo $start_year =substr($_REQUEST["start_and_end_year"],0,4);
	echo "\n";
	echo $end_year = substr($_REQUEST["start_and_end_year"],7,4);
	$content = $_REQUEST["content"];
	
	$sql = "INSERT INTO education (LEVEL, START_YEAR, END_YEAR, CONTENT )VALUES('$level','$start_year','$end_year','$content') ";
	
	
	
	if($results = mysqli_query($conn,$sql)){
		echo "Table Updated";
	}else{
		echo mysqli_error($conn);
	}
}
	/*section id*/
if(@$_REQUEST["id"] == "work_experience"){
	echo "we are about to update work experience table";
	echo "\n";
	echo $_REQUEST["id"];/*section id*/
	echo "\n";
	echo $id = $_REQUEST["request_id"];/*request id*/
	echo "\n";
	echo $post = $_REQUEST["post"];
	echo "\n";
	echo $start_end_date = $_REQUEST["start_end_date"];
	echo "\n";
	echo $content = $_REQUEST["content"];
	echo "\n";
	echo $start_year =substr($_REQUEST["start_end_date"],0,4);
	echo "\n";
	echo $end_year = substr($_REQUEST["start_end_date"],7,4);
	// remember sql query should carry the exact collumned name
	
	$sql = "UPDATE work_experience SET POST = '$post', DATE_STARTED = '$start_year', END_DATE = '$end_year', CONTENT ='$content' WHERE ID = '$id' ";
	
	if($results = mysqli_query($conn,$sql)){
		echo "Table Updated";
	}else{
		echo mysqli_error($conn);
	}
	
}
if(@$_REQUEST["id"] == "add_work_experience"){
	echo "we are about to update work experience table";
	echo "\n";
	echo $_REQUEST["id"];/*section id*/
	echo "\n";
	echo $id = $_REQUEST["request_id"];/*request id*/
	echo "\n";
	echo $post = $_REQUEST["post"];
	echo "\n";
	echo $start_end_date = $_REQUEST["start_end_date"];
	echo "\n";
	echo $content = $_REQUEST["content"];
	echo "\n";
	echo $start_year =substr($_REQUEST["start_end_date"],0,4);
	echo "\n";
	echo $end_year = substr($_REQUEST["start_end_date"],7,4);
	// remember sql query should carry the exact collumned name
	
	$sql = "INSERT INTO work_experience (POST, DATE_STARTED, END_DATE, CONTENT )VALUES('$post','$start_year','$end_year','$content') ";
	
	
	
	if($results = mysqli_query($conn,$sql)){
		echo "<br> work experience has been added";
	}else{
		echo mysqli_error($conn);
	}
	
}if(@$_REQUEST["id"]==""){
	echo "<br>". "process form" ."<br>";
	echo "book name<br>". $book_name =$_POST["book_title"];
	echo "paylink<br>". $pay_link = $_POST["pay_link"]."<br>";
	echo "book description <br>". $book_description = $_POST["description"]."<br>";
	echo "requestid<br>". $request_id = $_POST["request_id"]."<br>";
	
	
	


// Config
echo "current workking dir : " . $currentDirectory = getcwd();
echo "<br>";
$uploadDirectory = "/../images/";
$fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 
$fileLimitMb = 5; // File limit in MB
$uploadOk = true;

echo $fileName = $_FILES['cover_image']['name'];
//echo $fileName;
echo"<br>".  $fileSize = $_FILES['cover_image']['size'];
echO "<br>". $fileTmpName  = $_FILES['cover_image']['tmp_name'];
echo "<br>". $fileType = $_FILES['cover_image']['type'];
echo "<br> file extension : ".$fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
  //strtolower(end(explode('.',$fileName)));
//$fileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

echo "<br> file upload path :". $uploadPath = $currentDirectory . $uploadDirectory . $book_name.'.'. $fileExtension; 
echo "<br> book cover link for db : ". $book_cover_link_for_db = "images/".$book_name.'.'. $fileExtension;

// Check if image file is an actual image or fake image
if (isset($_POST["submit"])) {
	if (getimagesize($fileTmpName) !== false) {         //or 0 or null
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = true;
	} else {
		echo "File is not an image.";
		$uploadOk = false;
	}
}

// Check if file already exists
//if ($uploadDirectory . basename($fileName)) {
//	echo "File already exists.";
//	$uploadOk = false;
//}

// Check file size
if ($fileSize > ($fileLimitMb * 100000)) {
	echo "File must be less than" . $fileLimitMb . "MB.";
	$uploadOk = false;
}
// check file type
	switch($fileExtension){
		case "jpg":
		$uploadOk = true;
		echo "file is a jpg type";
		break;
		case "jpeg":
		$uploadOk = true;
		echo "file is a jpeg type";
		break;
		case "png":
		$uploadOk = true;
		echo "file is a png type";
		break;
		default:
		$uploadOk = false;
		echo "file must be an image";
		
		
	}
 
/*
// Allow certain file formats; needs to do foreach from array fileExtensionsAllowed
if($imageFileType != $fileExtensionsAllowed) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = false;
}
*/
// Check if $uploadOk then process

if ($uploadOk == false) {
	echo "File couldn't be uploaded.";

} else {
	
	if (move_uploaded_file($fileTmpName, $uploadPath)) {
		echo "The file ". basename($fileName). " has been uploaded.";
		
		// update db with new details
		$sql = "INSERT INTO publications (BOOK_COVER,LINK,DESCRIPTION)VALUES('$book_cover_link_for_db','$pay_link','$book_description') WHERE id = '$request_id' ";
	
	
	
	if($results = mysqli_query($conn,$sql)){
		echo "<br>book has been successfully updated in database";
	}else{
		echo mysqli_error($conn);
	}
		// delete old picture
		//
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}



}









?>