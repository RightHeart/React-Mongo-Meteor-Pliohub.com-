<?php
echo "
<ul class='pagination$paginationClasses'>";
    for($i=0;$i<count($paginationText);$i++){
        if($i==0){echo "<li".(($disablePrev)?" class='disabled'":'')."><a href='$prevLink'>&laquo;</a></li>";}

        if($activePage==$i&&!$paginationActiveClassDisabled){$paginationActiveClass=" active";$paginationActiveClassAttr=" class='active'";}
                else{$paginationActiveClass='';$paginationActiveClassAttr='';}
        echo "<li$paginationActiveClassAttr><a href='$paginationLink[$i]'>$paginationText[$i]";
        if($activePage==$i&&!$paginationActiveClassDisabled){echo " <span class='sr-only'>(current)</span>";}
        echo "</a></li>";

        if($i==count($paginationText)-1){echo "<li".(($disableNext)?" class='disabled'":'')."><a href='$nextLink'>&raquo;</a></li>";}
    }
echo "
</ul>
";
unset($paginationActiveClassDisabled);
unset($activePage);
unset($prevLink);
unset($nextLink);
unset($disablePrev);
unset($disableNext);
?>