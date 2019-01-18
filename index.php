<?php
//include auth.php file on all secure pages
include("auth.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body{
   width:2000px;
  font-family:calibri;
    
   background-image: url(https://www.livechatinc.com/wp-content/uploads/2017/04/1-most-popular-social-network-sites@2x.png);
  
  z-index: -999;

   }
   div.form{
        
                width:2000px;
          background-color: red;
              color:blue;
               text-align:center;
               font-size:40px;
               position:relative;
       
       
   }

div.myprofile{
         
               width: 2000px;
                           
                display: inline;
              
               text-align:center;
               font-size:40px;
                                                    
                margin: 0em;   
                       
                padding: 0em;
       
   }
   div.search{
        
               width: 2000px;
                           
                display: inline;
              
               text-align:center;
               font-size:40px;
                                                    
                margin: 10em;    
                        padding: 3em;
                       
       
   }
   div.logout{
      
               width: 2000px;
                           
          display: inline;
                
               text-align:center;
               font-size:40px;
                                                    
               margin: 10em;   
                       padding: 3em: 
                       
       
   }
   
a {
    display:block; 
 color: red;

margin: 2em;

}



</style>
</head>
<body>
    
    
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
</div>
    
<div class="myprofile">

<p><a href="my-profile.php">My profile</a><p/>
</div>
<div class="search">
<p><a href="search.php">Search for people</a><p/>
</div>
<div class="logout">
    <a href="logout.php">Logout</a>
    </div>



</body>
</html>