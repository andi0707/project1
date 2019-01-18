

<?php

require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
            // Redirect user to index.php
      header("Location: index.php");
         }else{
  echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
  }
    }else{
?>
     <html>
    <head>
        <meta charset="utf-8">
    
 
<title>Registration</title>
 
<style> 


.body{
  margin: 0;
  padding: 0;
  background:#fff;
background: transparent;
  color:#fff;
  font-family: Arial;
  font-size: 12px;
}



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
.form input[type=text]{

width: 250px;
  height: 30px;
  
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
background-color: white;

} 

 .form input[type=password]{


      width: 250px;
  height: 30px;
  
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color:black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
   
   }
   .form input [type=submit]{

      width: 260px;
  height: 35px;
  background: black;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
   }
    
  .form input[type=submit]:hover{
  opacity: 0.8;
}

.form input[type=submit]:active{
  opacity: 0.6;
}

.form input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.form input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.form input[type=submit]:focus{
  outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
  
   .Input{
  width: 250px;
  height: 30px;
  


   }

      .form h1{

        color: white;
      }

.form p{
  color:white;
}
   
   
.Admin_login a{


height: 300px;
  width: 400px;
  
  
}

</style>
    
</head>
    
    
    
    <body>
    
   
     
<div class="form">
  <h1>Log In</h1>

  <form action="" method="post" name="login">
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <input name="submit" type="submit" value="Login" />
<div class="Admin_login">

<p><a href="Admin_login.php">Admin Page</a><p/>
</div> 
  </form>
  
  <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>

<?php } ?>
</body>
</html>