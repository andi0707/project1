
<?php
session_start();
// Destroying  Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: login.php");
}
?>
