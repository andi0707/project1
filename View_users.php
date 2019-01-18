<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   

<title>View Records</title>
</head>
<body>
<?php

include ("db.php");

$view_users_query="select * from users";//select query for viewing users.  
                
                
        $run=mysqli_query($con,$view_users_query);//here run the sql query.  

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Username</font></th>
<th><font color='Red'>First name</font></th>
<th><font color='Red'>Last Name </font></th>
<th><font color='Red'>Email</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>";

while($row = mysqli_fetch_array( $run ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['username'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['fname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['lname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['email'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="insert.php">Insert new record</a></p>
</body>
</html>













