<?php
echo "
<ol class='breadcrumb'>";
    for($i=0;$i<count($breadcrumbText);$i++){
        if($breadcrumbActive==$i&&!$breadcrumbActiveClassDisabled){$breadcrumbActiveClass=" active";$breadcrumbActiveClassAttr=" class='active'";}
                else{$breadcrumbActiveClass='';$breadcrumbActiveClassAttr="";}
        echo "<li$breadcrumbActiveClassAttr>";
        if($breadcrumbActive!=$i||$breadcrumbActiveClassDisabled){echo "<a href='$breadcrumbLink[$i]'>";}
        echo "$breadcrumbText[$i]";
        if($breadcrumbActive!=$i||$breadcrumbActiveClassDisabled){echo "</a>";}
        echo "</li>";
    }
echo "
</ol>
";
unset($breadcrumbActiveClassDisabled);
?>