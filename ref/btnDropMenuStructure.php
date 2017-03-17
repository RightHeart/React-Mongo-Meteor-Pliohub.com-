<?php
echo "<ul class='dropdown-menu$ulDropdownClasses'>";
    for($i=0;$i<count($btnDropDownText);$i++){
    if($btnDropDownText[$i]=='divider'){echo "<li class='divider'></li>";/*continue; moved down for sake of header to not be skipped */}
    if($btnDropDownHead[$i]!=''){echo "<li class='nav-header'>$btnDropDownHead[$i]</li>";}
    if($btnDropDownText[$i]=='divider'){continue;}
    echo "<li><a href='$btnDropDownLink[$i]'>$btnDropDownText[$i]</a></li>";
    }
echo "</ul>";
unset($ulDropdownClasses);
?>