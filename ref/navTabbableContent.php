<?php
echo "
    <div class='tab-content'>";
    for($i=0;$i<count($tabbableName);$i++){
        if($tabbableIndex==$i&&!$tabbableActiveClassDisabled){$tabbableActiveClass=" active";$tabbableActiveClassAttr=" class='active'";}
        else{$tabbableActiveClass='';$tabbableActiveClassAttr="";}
    echo "
        <div class='tab-pane$tabbableActiveClass' id='tab$i'>
        <p>$tabbableText[$i]</p>
        </div>";
    }
echo "
    </div>";
?>