<?php
echo "
<table class='table'>";
if($hasHead){    echo "<thead><tr>";    for($i=0;$i<count($tblRowHead);$i++){echo "<th>$tblRowHead[$i]</th>";}    echo "</tr></thead>";    }
echo "<tbody>";
// fetch any index to count number of rows. Then loop through rows, and under each row loop through columns ($j) in row ($i)
// number of rows    = count($tblRowText[0])
// number of columns = count($tblRowText)
for($i=0;$i<count($tblRowText[0]);$i++){    echo "<tr>";    for($j=0;$j<count($tblRowText);$j++){echo "<td>".$tblRowText[$j][$i]."</td>";}    echo "</tr>";    }
echo "</tbody></table>";
unset($hasHead);
?>