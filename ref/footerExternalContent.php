<?php
/*
echo "<!--SOF: right container-->
<div class='fltR bF00' style=''>
<div class='fltL pA10 fs11' style=''>
fsdf
</div>
</div><!--EOF: right container-->
<!--SOF: left container-->
<div class='fltL bF00' style=''>
<div class='fltL pA10 fs11' style=''>
<img src='includes/imga3.png' />
</div>
</div><!--EOF: left container-->
<div class='clrB'></div>";
*/
$footerSiteLinksText[]="Terms";
$footerSiteLinksText[]="Privacy";
$footerSiteLinksText[]="Blog";
    $footerSiteLinksLink[]="terms.php";
    $footerSiteLinksLink[]="privacy.php";
    $footerSiteLinksLink[]="http://blog.$DOMAIN_NAME.com";
$footerSiteLinksAttr[2]=" target='_blank'";
echo "
<div class='xclsx3a xbF00 pTB0LR10'>".
//<div class='XbF00 h5' style=''></div>
"<div class='fs11 xcF3f3f3 c333 xmT10 mB5 fltR'>Copyright &copy; ".date('Y')." $COMPANY_NAME. All rights reserved.</div>
<div id='ftrLink' class='fs11 c808080 xmT10 mB5 fltL'>";
//include("footerSiteLinks.php");
echo
//<a href='http://forums.$DOMAIN_NAME.com' target='_blank'>Forums</a> &nbsp;
"
</div>
$clrB
</div>";
?>