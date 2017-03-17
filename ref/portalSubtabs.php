<?php
echo "<div style='position:relative;'>
<div class='pjbackground_topnav_secondary_bg_gif' style='position:absolute;top:0;left:0;width:100%;'></div>
<div class='integrated-menu$cssClassPortalSubtab'>
<ul id='subnav' class='nav'>";

for($i=0;$i<count($portalLevel2MenuText[$portalActiveTab]);$i++){

    if($usePageNameForPortalSubtab){    if($portalLevel2MenuLink[$portalActiveTab][$i]==$thisPageNameLink&&!$portalSubtabActiveClassDisabled){$isThisActiveTab=TRUE;} else{$isThisActiveTab=FALSE;}    }
    else{                               if($portalActiveSubtab==$i&&!$portalSubtabActiveClassDisabled)                                        {$isThisActiveTab=TRUE;} else{$isThisActiveTab=FALSE;}    }

    if($isThisActiveTab){$activeClass=" activelink";$activeClassAttr=" class='activelink'";}
    else{$activeClass='';$activeClassAttr="";}

//    $selClass=($i==$portalActiveSubtab)?" class='activelink'":'';
    $dividerLine=($i<count($portalLevel2MenuText[$portalActiveTab])-1)?"<li class='divider'><button type='button' name='pjimage' class='pjimage pjimage_topnav_menu_side_borders_gif' onfocus='this.blur();' ></button></li>":'';
    // not used yet $lastClass=($i==count($portalLevel2MenuText[$portalActiveTab])-1)?" class='last'":'';
    echo "<li$activeClassAttr><a href='".$portalLevel2MenuLink[$portalActiveTab][$i]."'>".$portalLevel2MenuText[$portalActiveTab][$i];
    $k=count($portalLevel3MenuText[$portalActiveTab][$i]);
    //if($k>0){echo "&nbsp;<button type='button' name='pjimage' class='pjimage hand pjimage_topnav_drop_down_arrow_gif' onfocus='this.blur();' ></button>";}
    if($k>0){echo "<span class='portalSubtabDDicon'></span>";}
    echo "</a>";
    if($k>0){echo "<ul>";for($j=0;$j<$k;$j++){$lastZlass=($j==$k-1)?" class='last-nav-item'":'';
    echo "<li$lastZlass><a href='".$portalLevel3MenuLink[$portalActiveTab][$i][$j]."'>".$portalLevel3MenuText[$portalActiveTab][$i][$j]."</a></li>";}echo "</ul>";}
    echo "</li>$dividerLine";
} // end of loop i

echo "</ul>
</div><!--EOF: integrated-menu-->
</div><!--EOF: relative position-->";
//echo "<div class='menu-gradient pjbackground_topnav_menu_gradient_gif' style='clear: both;margin-bottom:0px;'></div>";

// ------------------------------------------------------------------------

/* Loop built from this
<li class='activelink'><a href='#'>Check Email</a></li>
<li class='divider'><button type='button' name='pjimage' class='pjimage pjimage_topnav_menu_side_borders_gif' onfocus='this.blur();' ></button></li>

<li><span class='hand'>Compose</span></li>
<li class='divider'><button type='button' name='pjimage' class='pjimage  pjimage_topnav_menu_side_borders_gif' onfocus='this.blur();' ></button></li>

<li><span class='hand'>Address Book".
"&nbsp;<button type='button' name='pjimage' class='pjimage hand pjimage_topnav_drop_down_arrow_gif' onfocus='this.blur();' ></button>".
"</span>"."
<ul>
<li><a href='#'>Link</a></li>
<li><a href='#'>Link</a></li>
<li class='last-nav-item'><a href='#'>Link</a></li>
</ul>
</li>
<li class='divider'><button type='button' name='pjimage' class='pjimage  pjimage_topnav_menu_side_borders_gif' onfocus='this.blur();' ></button></li>

<li class='last'>
<span class='hand'>Help&nbsp;<button type='button' name='pjimage' class='pjimage hand pjimage_topnav_drop_down_arrow_gif'   onfocus='this.blur();' ></button></span>
<ul id='help_dropdown'>
<li><a href='#'>Link</a></li>
<li class='last-nav-item'><a href='#'>Link</a></li>
</ul>
</li>
*/

unset($portalLevel2MenuText);
unset($portalLevel2MenuLink);
unset($portalLevel3MenuText);
unset($portalLevel3MenuLink);
unset($usePageNameForPortalSubtab);
unset($cssClassPortalSubtab);
?>