<?php
echo "<dl class='$dlClass'>";
    for($i=0;$i<count($descListTerm);$i++){
    echo "<dt class='$dtClass'>$descListTerm[$i]</dt><dd class='$ddClass'>$descListDesc[$i]</dd>";
    }
echo "</dl>";
?>