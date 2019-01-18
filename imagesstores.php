

<form action="imagesdisplayes.php" method="post" enctype="multipart/form-data" name="add">
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

//connect to data based
mysql_connect("localhost", "root", "") or die ("could not connect to the server");
    mysql_select_db("users") or die("this database was not found");
$result = mysql_query("SELECT *  FROM photos ORDER BY id DESC ")or die(" please try again");;

while($row = mysql_fetch_array($result))
{
    //take path from data based
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
 

echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';


}
?>