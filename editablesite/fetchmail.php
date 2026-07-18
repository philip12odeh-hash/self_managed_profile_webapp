<?php

require("../blog_admin/includes/dbcon.php");

$id = $_REQUEST["id"];



$sql = "SELECT NAME, EMAIL, DATE, MESSAGE FROM mails WHERE ID = {$id}";
					
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

