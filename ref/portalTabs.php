<?php
$idtype2="<div class='menu-header clear-fix pjbackground_topnav_header_menu_bg_gif brT8 xmT10'>
<div class='right-content'><p>".
//<span><button type=button name=pjimage class='pjimage pjimage_topnav_new_features_icon_gif' alt=New features onfocus=this.blur(); ></button> <a class=hand>New Features</a></span>
//<span><button type=button name=pjimage class='pjimage pjimage_topnav_feedback_icon_gif' alt=feedback onfocus=this.blur(); ></button> <a class=hand>Feedback</a></span>
"$menuBarRightContent</p>
</div></div>";
$idtype2.="<div class='tabs clear-fix$cssClassPortalTab' style='position: relative;'> <!--Change tabs to tabs-gone to not display tabs-->
<ul id='nav' class='clear-fix'>";

for($i=0;$i<count($portalLevel1MenuText);$i++){

    if($usePageNameForPortalTab){    if($portalLevel1MenuLink[$i]==$pageParentTabName&&!$portalTabActiveClassDisabled){$isThisActiveTab=TRUE;$portalActiveTab=$i;} else{$isThisActiveTab=FALSE;}    }
    else{                            if($portalActiveTab==$i&&!$portalTabActiveClassDisabled)                         {$isThisActiveTab=TRUE;} else{$isThisActiveTab=FALSE;}    }

    if($isThisActiveTab){$activeClass=" activelink";$activeClassAttr=" class='activelink'";}
    else{$activeClass='';$activeClassAttr="";}

    //$selClass=($i==$portalActiveTab&&$portalActiveTab!=='')?" class='activelink'":'';

    $idtype2.="\n<li$activeClassAttr><a href='$portalLevel1MenuLink[$i]'>$portalLevel1MenuText[$i]</a></li>";
}

$idtype2.="</ul></div>";

echo $idtype2;

unset($portalLevel1MenuText);
unset($portalLevel1MenuLink);
unset($usePageNameForPortalTab);
unset($cssClassPortalTab);
?>