<?php
session_start();
require("db.php");




$username = $_SESSION["username"];

$query = "SELECT * FROM users WHERE username='$username'";


$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows = mysqli_fetch_array($result)) {
    $username = $rows["username"];
   $lname = $rows["lname"];
   $fname = $rows["fname"];
    $email = $rows["email"];
        
    echo "
    <table>
    </td><td>$fname $lname</td></tr>
        <tr><td>First Name</td><td> : </td><td>$fname,</td></tr>
              <tr><td>Last Name</td><td> : </td><td>$lname,</td></tr>  
        <tr><td>User Name</td><td> : </td><td>$username</td></tr>
         
        <tr><td>Email</td><td> : </td><td>$email</td></tr>
    </table>
    ";
}

?>


<html>
    <head>
    <style>
   body{
   width:2000px;
	font-family:calibri;
   
    background-color: bisque;
   }
   

</style>
    </head>
 
    
    <form action="imagesdisplayes.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1"  />
 </form>
<br />
Photo Archieve
<br />
<br />
<?php

require("db.php");

include 'imagesdisplayes.php';


$username = $_SESSION["username"];

mysql_connect("localhost", "root", "") or die ("could not connect the the server");
    mysql_select_db("users") or die("this database was not found");

    $result = mysql_query("SELECT *  FROM photos ORDER BY id DESC ")or die("");

while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';

echo '<p id="caption">'.$row['caption'].' </p>';
echo '<p><img src="'.$row['location'].'" width=500 height=500></p>';
 


echo '</div>';
}


?>
 

