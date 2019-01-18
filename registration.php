


    <?php
   
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username); 
  $fname = stripslashes($_REQUEST['fname']);
  $fname = mysqli_real_escape_string($con,$fname);
        $lname = stripslashes($_REQUEST['lname']);
  $lname = mysqli_real_escape_string($con,$lname);
        $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password,fname,lname, email, trn_date)
VALUES ('$username', '".md5($password)."','$fname','$lname', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<html>
    <head>
    
 
 
<title>Registration</title>
<style>
   

 body  {
      position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background-image: url(https://cdnw.phpfox.com/uploads/2017/04/Social-network-1.png);
  
  

  z-index: -999;
     
   }
   



   div.form{
      

position: absolute;
  top: calc(40% - 40px);
  left: calc(50% - 180px);
  height: 250px;
  width: 350px;
  padding: 10px;
  
  
background-color: black;
  
z-index: -999;
}







   .Input{
       width: 10em;
        font-size:20px;
       
   }

   .form h1{
    color:white;
   }
   

</style>
    </head>
    <body>
        

<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" class="Input" name="username" placeholder="Username" required />
<input type="text" class="Input" name="fname" placeholder="First Name" required />
<input type="text" class="Input" name="lname" placeholder="Last Name" required />
<input type="email" class="Input" name="email" placeholder="Email" required />
<input type="password" class="Input" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />



</form>
</div>
    
    
<?php } ?>
</body>
</html>
