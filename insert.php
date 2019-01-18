<?php
function valid($id, $username, $fname,$lname, $email)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Insert Records</title>
</head>
<body>


<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Insert Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>UserName<em>*</em></font></b></td>
<td><label>
<input type="text" name="username" value="<?php echo $username; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>First Name<em>*</em></font></b></td>
<td><label>
<input type="text" name=" fname" value="<?php echo $fname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Last Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="lname" value="<?php echo $lname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Email<em>*</em></font></b></td>
<td><label>
<input type="text" name="email" value="<?php echo $email; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

include('db.php');

if (isset($_POST['submit']))
{


$id = $_POST['id'];
$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
$fname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$lname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));

if ($username == '' || $fname == '' || $lname == '' || $email== '')
{

$error = 'ERROR: Please enetr the details!';


valid( $username, $fname,$lname, $email, '');
}
else
{

$insert_query=("INSERT users SET  username='$username', fname='$fname', lname='$lname' ,email='$email' ")or die(mysql_error());//select query for viewing users.  
 $run=mysqli_query($con,$insert_query);//here run the sql query. 
$row = mysqli_fetch_array($run);

header("Location: View_users.php");
}
}
else
{
valid('','','','', '');
}

?>