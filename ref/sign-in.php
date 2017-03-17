<?php
$formPostDebug="processVlogin.php";
$submitVlogin2=$globalObject->globalBtn('','Sign in','submitVlogin2',' mT5');
echo "
<div class='xbF00 xpTB20L40R20'>
    <h3 class='c0f70b8 mB20 fltL'>Sign in</h3>".
    $globalObject->gParagraph("Don't have an account? <span class='middotSeparator'>&middot;</span>
    <a href='sign-up.php'>Sign Up</a>",' fltL mB20 mL20 mT10',' fs11').
    "$clrB
    <div class='pA10 bgEaeef2 fltL brA5'>
        <form name='formVlogin2' id='formVlogin2' method='post' action='$formPostDebug' enctype='multipart/form-data'>
        <input type='hidden' name='source' value='desktop' />
        <table>".
        $globalObject->gTblInputTextRow('Email','username','',' smallipopInput validate[required]',"title='Enter your username' ").
        $globalObject->gTblInputTextRow('Password','passcode','',' smallipopInput validate[required]',"title='Enter your password' ",'','password').
        $globalObject->gTblCheckRow('&nbsp;','checkboxName','',' checked'," <span class='vaMiddle'>&nbsp;Remember me</span>").
        //$globalObject->gTblContentRow("&nbsp;","By clicking on Sign Up, I agree to the <a href='terms.php'>terms of service</a>.").
        $globalObject->gTblContentRow("&nbsp;",$submitVlogin2).
        "</table>
        </form>".$globalObject->gParagraph("<a href='forgot-password.php'>Forgot password?</a>",' mT15 mL5',' fs11')."
    </div>
    $clrB
</div>";
?>