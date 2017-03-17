<?php
/*
echo "
<!-- ui-dialog -->
<div id='feedbackDialog' title='Report any Ideas, Improvements, Bugs &amp; any General Feedback'>

            <div class='alert alert-info mTB10'>
                <span class='icon-info-sign'></span> We appreciate your comments about your website experience and will use your input to make the experience better.
            </div>";
$formPostDebug="formPostDebug.php";
echo "<form name='formFeedbackDialog' id='formFeedbackDialog' method='post' action='$formPostDebug'>
<table>".
$globalObject->gTblInputTextRow('Subject','subject','',' smallipopInput validate[required]',"title='Enter Subject of Feedback' ").
$globalObject->gTblInputTextRow('Your Email','email','',' smallipopInput validate[required]',"title='Enter your email address' ").
$globalObject->gTblTextareaRow('Comments','comments','',' w400 smallipopInput validate[required]'," title='Enter your comments with explanation'",'6').
$globalObject->gTblContentRow("Overall Rating for $COMPANY_NAME","<div id='star' class='fltL'></div> <div id='starsHint' class='fltL'></div>").
"</table></form>
</div>";

/*echo "<div id='oo_tab' class='xoo_tab_right' tabindex='0'>
    <div><span></span></div>
    <div class='screen_reader'>Activate to launch comment card</div>
</div>";*x/

$helpButtonHtml="<div class='xbF00 fltL FbHelpBtn'><img class='helpButton' title='Saves your Feedback so you can see it in your account (You will need to Login)' src='$img/help-icon-16x16.png' /></div>";
*/

?>