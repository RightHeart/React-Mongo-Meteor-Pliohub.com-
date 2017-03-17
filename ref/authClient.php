<?php
/*
Uncomment this with mysql_close($global_dbConnection); at bottom
if($deviceType==2){$logoutUrl="../logoutClient.php?deviceType=mobile";}else{$logoutUrl="logoutClient.php";}
include("connection.php");
$cookieClientUsername=$_COOKIE['clientUsername'];$cookieClientPasscode=$_COOKIE['clientPasscode'];
if($cookieClientUsername==""||$cookieClientPasscode==""){header("Location: $logoutUrl");}

include("tblClient.php");

$qa="SELECT * FROM client WHERE username LIKE BINARY '$cookieClientUsername' AND passcode LIKE BINARY '$cookieClientPasscode' AND accountStatus='1'";
$rsa=mysql_query($qa);//echo $qa;
if(mysql_num_rows($rsa)>0){

    $tblClientRowOnce=mysql_fetch_array($rsa);

    for($i=0;$i<count($tblClientFld);$i++){     $fo_tblClientFld[$i]=$tblClientRowOnce[$tblClientFld[$i]];      }

}
else{header("Location: $logoutUrl");}
*/

// Settings
$GREETING_USER=$fo_tblClientFld[1];
$GREETING_USER="Abcdef";
$lastLogin=$fo_tblClientFld[40];

//mysql_close($global_dbConnection);
?>