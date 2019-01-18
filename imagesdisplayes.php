<?php
require("db.php");
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"img/" . $_FILES["image"]["name"]);
			
			$location="img/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			 mysql_connect("localhost", "root", "") or die ("could not connect t the server");
    mysql_select_db("users") or die("this database was not found");
			$save=mysql_query("INSERT INTO photos (location, caption) VALUES ('$location','$caption')")or die(mysql_error());
                        $result = mysql_query($save) or die(mysql_error());
	
			
			exit();					
	}
?>
