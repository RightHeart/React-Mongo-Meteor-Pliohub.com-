<?php
echo
//"<div id='closingWrap'><div id='closing' class='closingInCtnr clearfix'></div></div>$clrB".
"<div id='footerWrap'>
    <div id='footer' class='container_12 clearfix'>".
//        <div class="inside"> … </div>
"
    </div>
</div>
".
$globalObject->footerExternal(); // SOF <footerExternal><footerExternalInnerWrapper> - Master footer
    include("includes/footerExternalContent.php"); // content inside footerExternal
echo "</div></div>

"; // EOF: <.footerExternalInnerWrapper><.footerExternal> - Master footer


/*"<div id='leftFeedback'>
<a href='#'><img alt='Feedback' src='$img/feedback-button.png'/></a>
</div>
"*/
if($IS_CLIENT_IP_LOCAL){echo "<div id='bottomRightFeedback'><a href='#'><img alt='Feedback' src='$img/feedback-button-small-horizontal.png'/></a></div>";}
?>