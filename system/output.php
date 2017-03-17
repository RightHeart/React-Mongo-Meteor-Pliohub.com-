<?php
function copyThisArray($arrayToCopyFrom){for($i=0;$i<count($arrayToCopyFrom);$i++){$returnThisArray[]=$arrayToCopyFrom[$i];}return $returnThisArray;}
$output[]="a";
$output[]="b";
//$output=copyThisArray;
$string="ALTER TABLE `client`<br />";
for($i=0;$i<count($output);$i++){
$string.="ADD `$output[$i]` INT NOT NULL";
if($i==count($output)-1){continue;}
$string.=",<br />";
}
echo "$string";
?>