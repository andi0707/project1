<html>
<head>
<title>Search for a user</title>


    <style>
   body{
   width:2000px;
	font-family:calibri;
   
    background-color: bisque;
   }
   

</style>
    





</head>
<body>
<h2> Search for a user below:</h2><br /><br />
<form action="profile.php" method="get">
  <table>
   <tr>
    <td>Username:</td><td><input type="text" id="username" name="username" /></td></tr>
    <tr>
    <td><input type="submit" name="submit" id="submit"  value="View Profile" /></td>
    </tr>


  </table>


</form>
</body>
</html>
<?php

include_once 'profile.php';
require 'db.php';
 header("Location: profile.php");
 if($_GET['username'] != ''){
     echo $_GET['username'];

 } else 
 die('doesnt work'); 
;?>