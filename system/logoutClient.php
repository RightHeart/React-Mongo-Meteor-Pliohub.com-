<?php
// admin
$past= time()-1; //this makes the time in the past to destroy the cookie
setcookie(clientUsername, gone, $past);setcookie(clientPasscode, gone, $past);
$deviceType=$_GET['deviceType'];
if($deviceType=='mobile'){$continue="mobile/index.php";}else{$continue="sign-in.php?pass_code=client_logout";}
//$continue="index.php";
//$continue="postLogout.php";
//$continue="sign-in.php?pass_code=client_logout";
header("Location: $continue");
?>