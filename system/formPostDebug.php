<?php
$headerRow="<tr class='boldRow'><td class='alignCenter'>KEY</td><td class='alignCenter'>VALUE</td></tr>";
echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<style type='text/css'>
body{font: 12px Arial;}
table{border-collapse:collapse;border-spacing:0;}
table td{padding:5px;border:1px solid #ccc;}
.redColor{color:#f00;font-weight:bold;}
.boldRow{font-weight:bold;color:#0064b1;}
.alignRight{text-align:right;}
.alignCenter{text-align:center;}
</style>
  <title>Hello!</title>
</head>
<body><div style='margin:20px;'>
<input type='button' value='Back' onclick='window.history.back();'>
<table>

<tr><td colspan='2' class='redColor'>POST = ".count($_POST)."</td></tr>
$headerRow";
foreach($_POST as $key=>$value){echo "<tr><td class='alignRight'>$key</td><td>$value</td></tr>";}

echo "<tr><td colspan='2' class='redColor'>FILES = ".count($_FILES)."</td></tr>
$headerRow";
foreach($_FILES as $key=>$value){echo "<tr><td class='alignRight'>$key</td><td>".$_FILES[$key]["name"]."</td></tr>";}

echo "</table></div></body></html>";

//if(isset($_FILES["c4"])){
//echo $_FILES["c1"]["name"]."<br />";
//}
//echo $_FILES["file"]["type"]."<br />";

?>