<?php
session_start();
session_unset();
$_SESSION["permit"]="true";
?>

Artlcle successfully uploaded <br>

<a href="admin.php">upload another article</a><br>
<a href="../blog.php">return to blog page</a>