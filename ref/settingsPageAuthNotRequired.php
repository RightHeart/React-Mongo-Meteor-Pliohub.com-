<?php
/* SOF: Portal */
// Portal-specific tables, functions, variables, etc goes here in this file.
// shared tables, functions, variables, etc among multiple portals goes in gVariablesFunctions.php
include("gVariablesFunctions.php");
/* EOF: Portal */

$pageAuthRequired = 2;

/* CAUTION: Never put a divider at the end. Always put an item after divider. */

/*
$level1MenuText[0]="Tab 1";
$level1MenuText[1]="Tab 2";
$level1MenuText[2]="Tab 3";
    $level1MenuLink[0]="#";
    $level1MenuLink[1]="services.php"; // this # is used hardcoded rather in loop (for dropdown parent) but here just for consistency
    $level1MenuLink[2]="#";

// Specify the position BEFORE which divider-vertical will be displayed.
for($i=0;$i<count($level1MenuText);$i++){    $level1MenuDivider[$i]=TRUE;    }
// specific index divider
//$level1MenuDivider[2]=TRUE;

$level2MenuText['services.php'][0]="Option 1";
$level2MenuText['services.php'][1]="Option 2";
$level2MenuText['services.php'][2]="Option 3";
$level2MenuText['services.php'][3]="Option 4";
$level2MenuText['services.php'][4]="More";
    $level2MenuLink['services.php'][0]="#";
    $level2MenuLink['services.php'][1]="#";
    $level2MenuLink['services.php'][2]="#";
    $level2MenuLink['services.php'][3]="#";
    $level2MenuLink['services.php'][4]="#";

// Specify the position BEFORE which navHeader will be displayed and specify text. Notice the variable is changed.
$level2MenuHead[1][2]="Nav Header"; // navHeader
$level2MenuDivider[1][2]=TRUE;
$level2MenuDivider[1][4]=TRUE;

$level3MenuText[1][1][]="Sub Option 1";
$level3MenuText[1][1][]="Sub Option 2";
    $level3MenuLink[1][1][]="#";
    $level3MenuLink[1][1][]="#";

$portalLevel1MenuText[0]="Business";
$portalLevel1MenuLink[0]="business.php";
    $portalLevel2MenuText[0][]="Legal";
    $portalLevel2MenuText[0][]="Services";
    $portalLevel2MenuText[0][]="Financial";
    $portalLevel2MenuLink[0][]="#";
    $portalLevel2MenuLink[0][]="services.php";
    $portalLevel2MenuLink[0][]="#";

$portalLevel1MenuText[1]="Tab 2";
$portalLevel1MenuLink[1]="#";

$portalLevel3MenuText[0][1][]="Sub Sub-tab 1";
$portalLevel3MenuText[0][1][]="Sub Sub-tab 2";
    $portalLevel3MenuLink[0][1][]="#";
    $portalLevel3MenuLink[0][1][]="#";
//*/
?>