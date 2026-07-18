<?php
require("includes/dbcon.php");
session_start();
//$request_id = $_REQUEST["request_id"];
//echo $request_id;
//check and see if ajax request sent something.

if(isset($_REQUEST["request_id"])&& !empty($_REQUEST["request_id"])){
	
	if(str_contains($_REQUEST["request_id"],"delete")){
					//echo "Yes it is a delete request";
					$req_id = substr($_REQUEST["request_id"],6);
					
					$req_id = intval($req_id);// convert to number
					$sql = "DELETE FROM articles_record WHERE article_id = {$req_id}";
						if($result = mysqli_query($conn,$sql)){
							//echo "query successfull";
							
						}else{
							echo mysqli_error($conn);
						}
	}else{
			//echo "it is an update request";
				//echo "something was sent";
			//echo $_REQUEST["request_id"];
			$req_id = $_REQUEST["request_id"]; 
			$_SESSION["new_post_value"] = $_REQUEST["updated_post_value"];
			$req_id = intval($req_id); // convert it to number;
			$_SESSION["request_id"] = $req_id;
			//echo gettype($req_id);
			// query database to retrieve article content
			$sql = "SELECT article_id, article_date, article_content, article_title FROM articles_record WHERE article_id = {$req_id}";
			if($result = mysqli_query($conn,$sql)){
				//echo "query successfull";
				if(mysqli_num_rows($result)>0){
					//echo "query returned something";
					while($rows = mysqli_fetch_assoc($result)){
						//print_r($rows);
						// this is the response text in json format
						$json = json_encode($rows);
						print_r($json);
					}
				}else{
					echo "query returned nothing";
				}
			}else{
				echo mysqli_error($conn);
			}
	}
	
}else{
	// this will be stored as the response text for js
	echo "sorry your request did not run please try again";
}





?>