<?php
// file was created for the sole purpose of test no intergral use in app
require("includes/dbcon.php");
// declear all variable

$articles_id = "";
$articles_title = "The sixth Article";
$articles_title = str_replace(" ","_",$articles_title,$articles_title);
//echo $articles_title; 
$articles_date = "SELECT DATE_FORMAT(CURDATE(),'%d - %m - %Y')";
	if($date = mysqli_query($conn,$articles_date)){
		if(mysqli_num_rows($date)>0){
			$row = mysqli_fetch_array($date);
			$articles_date = $row[0];
		}else{echo "it returned nothing";}
	}else{echo "query error";}
	echo $articles_date."<br>";
	
$articles_author = "Magnus Kpaku";
$articles_content = addslashes('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales luctus nisl, mattis vulputate lacus aliquet vitae. 
Sed non orci ac nulla pellentesque sollicitudin eu et augue. Fusce scelerisque justo ut nisl aliquet sodales nec in odio. Nulla id erat sapien. 
Vestibulum diam nulla, interdum ac magna at, aliquam consequat lorem. Nam risus dolor, vulputate eu ipsum luctus, sagittis tincidunt lorem. In 
quis felis at nisl efficitur condimentum. Proin egestas sagittis ipsum, eget dignissim ante sagittis id. Suspendisse sed <p>velit felis. Maecenas 
vel pellentesque velit, a facilisis dolor. Nullam sed ante tortor.

Suspendisse lobortis blandit risus, ac fermentum libero euismod at. Suspendisse aliquam turpis sit amet lobortis elementum. Vestibulum pellentesque
 aliquet diam vel fringilla. Maecenas lacinia vel sem sit amet ornare. Cras pretium quam purus, in ultricies purus mollis eu. Duis nec mollis metus, 
 id consequat lacus. Donec tempus laoreet nisl. Fusce a volutpat ligula. Integer ut libero dapibus, feugiat erat sit amet, imperdiet purus. Nam ut massa 
 blandit, vulputate eros non, placerat erat.

Nulla vel semper diam. Fusce malesuada faucibus mi,echo ;nec varius est blandit luctus.<p> Vivamus lobortis facilisis cursus. Nunc efficitur sem nulla, quis 
pharetra nisi malesuada eget. Fusce bibendum neque at magna sagittis, nec tempus quam pretium. Pellentesque habitant morbi tristique senectus et netus 
et malesuada fames ac turpis egestas. Aliquam finibus congue nulla, sit amet sodales tellus interdum aliquet. Suspendisse porta lobortis aliquam. Vivamus 
rhoncus porttitor ligula eu facilisis.

Ut et maximus neque. Cras vehicula consectetur arcu. Curabitur massa sem,<p> convallis in orci eget, suscipit pellentesque tortor. Pellentesque sit amet laoreet
 tortor. Nullam urna orci, pellentesque a elit non, tristique malesuada leo. Donec elementum, turpis sed rutrum consequat, libero nulla condimentum nulla,
 et euismod justo odio quis libero. Aliquam eu consequat lacus.

Aliquam vulputate, nibh quis pulvinar imperdiet, nulla "ipsum" finibus odio, vitae maximus tellus neque sed libero. Maecenas et nulla lectus. Duis et ligula sit 
amet odio facilisis viverra eu sed velit. Morbi vestibulum finibus metus vitae molestie. Sed tristique eros eget mattis dictum. Morbi pulvinar mattis nunc, 
eget pulvinar nibh accumsan nec. Nam pharetra felis libero, vitae tempus urna euismod a. Proin dignissim faucibus quam, in malesuada augue blandit sed. 
Suspendisse suscipit massa ex, at placerat leo viverra vitae. Nulla consequat in nibh euismod bibendum. Praesent accumsan nibh sit amet mauris fermentum 
pharetra. Aenean rhoncus nulla nec ligula rutrum, non vulputate eros sagittis. Sed interdum rutrum viverra. 
In dapibus pharetra tristique. Nullam laoreet ex nisi, ut pharetra tellus fermentum ut. Aliquam ornare vitae nunc quis aliquam.');

$articles_content;
$articles_image ="images/".$articles_title.".jpg";

// insert data into databases; 
 



$sql = "INSERT INTO articles_record(article_id,article_title,article_date,article_author,article_content,article_image)
VALUES ('','$articles_title','$articles_date','$articles_author','$articles_content','$articles_image')";
	

if(mysqli_query($conn,$sql)){
		//echo "query_successfull";
}else{
	echo "query errror";
}
echo mysqli_error($conn);

echo "data intered successfully";
mysqli_close($conn);
	
/**/


?>