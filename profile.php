

<html>
<head>
    
<title><?php echo $username; ?> s profile</title>

   
    <style>
   body{
   width:2000px;
  font-family:calibri;
   
    background-color: bisque;
   }
   

</style>
    </head>

<body>

<?php

require('db.php');
 if(isset($_GET['username'])){

    $username = $_GET['username']; 
    mysql_connect("localhost", "root", "") or die ("could not connect t the server");
    mysql_select_db("users") or die("this database was not found");
    $userquery = mysql_query("SELECT * FROM users WHERE username='$username'") or die("the query could be fale please try again");
    if(mysql_num_rows($userquery) != 1){
        die("that username could not be found!");
    }
    while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){
     $fname = $row['fname'];
     $lname = $row['lname'];
       $email = $row['email'];
       $dbusername = $row['username'];
      
      
       }
       if($username != $dbusername){
         die ("there has been a fatal error please try again. ");
       }
      
      
?>
<h2><?php echo $username; ?>  profile</h2>
<table>
<tr>
<td>First name:</td><td><?php echo $fname; ?></td>
</tr>
<tr>
<td>Last name:</td><td><?php echo $lname; ?></td>
</tr>
<tr>
<td>email:</td><td><?php echo $email; ?></td>
</tr>
<tr>
<td>username:</td><td><?php echo $dbusername; ?></td>
</tr>



</table>


<?php      
 }else die("You need  to specify a username!");


?>
<?php 
session_start();
require("db.php");
include 'imagesdisplayes.php';


mysql_connect("localhost", "root", "") or die ("could not connect t the server");
    mysql_select_db("users") or die("this database was not found");
$result = mysql_query("SELECT *  FROM photos ORDER BY id DESC ")or die("If the photo do not uploadet please try again");;

while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';

echo '<p id="caption">'.$row['caption'].' </p>';
echo '<p><img src="'.$row['location'].'" width=500 height=500></p>';
 


echo '</div>';


}
?>

</body>
</html>
