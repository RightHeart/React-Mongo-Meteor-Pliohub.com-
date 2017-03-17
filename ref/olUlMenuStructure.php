<?php
if($isOl){$olUl="ol";}else{$olUl="ul";}
echo "<$olUl class='$olUlClass'>";
for($i=0;$i<count($olUlList);$i++){
    if(count($olUlListChild[$i])>0){$parentLiAddClass=' parentLi';}else{$parentLiAddClass='';}
    echo "<li class='$parentLiClass$parentLiAddClass'>$olUlList[$i]";
    for($j=0;$j<count($olUlListChild[$i]);$j++){
        if($j==0){echo "<$olUl class='$olUlSubClass'>";}
        echo "<li>".$olUlListChild[$i][$j]."</li>";
        if($j==count($olUlListChild[$i])-1){echo "</$olUl>";}
    }
    echo "</li>";
}
echo "</$olUl>";
unset($isOl);
unset($olUlClass);
unset($olUlSubClass);
unset($parentLiClass);
?>