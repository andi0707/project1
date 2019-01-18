



<?php
require('db.php');
$id=$_REQUEST['id'];
$delete_query = "DELETE FROM users WHERE id=$id"; 
           
        $run=mysqli_query($con,$delete_query);//here run the sql query. 
$row = mysqli_fetch_array($run);


header("Location: View_users.php"); 
?>