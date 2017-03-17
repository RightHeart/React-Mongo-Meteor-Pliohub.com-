<?php
$formPostDebug="processClientSignup.php";
$submitSignUp=$globalObject->globalBtn('','Sign Up','submitSignUp',' mT10','button');
echo "
<div class='xbF00 pTB20L40R20'>
    <h3 class='c0f70b8 mB20 fltL'>Sign up</h3>".
    //$globalObject->gParagraph("Already have an account? <a href='sign-in.php'>Sign In</a>",' fltL mB20 mL20 mT10',' fs11').
    "$clrB
    <div class='pA10 bgEaeef2 fltL brA5'>
        <form name='formSignUp' id='formSignUp' method='post' action='$formPostDebug' enctype='multipart/form-data'>
        <table>".
        $globalObject->gTblInputTextRow('First Name','firstName','',' smallipopInput validate[required]',"title='$ENTER_FIELD' ").
        $globalObject->gTblInputTextRow('Last Name','lastName','',' smallipopInput validate[required]',"title='$ENTER_FIELD' ").
        $globalObject->gTblInputTextRow('Email','email','',' smallipopInput validate[required]',"title='$ENTER_FIELD' ").
        //$globalObject->gTblInputTextRow('Username','username','',' smallipopInput validate[required]',"title='$ENTER_FIELD' ").
        $globalObject->gTblInputTextRow('Password','passcode','',' smallipopInput validate[required]',"title='$ENTER_FIELD' ",'','password').
        //$globalObject->gTblContentRow("&nbsp;","By clicking on Sign Up, I agree to the <a href='terms.php'>terms of service</a>.").
        $globalObject->gTblContentRow("&nbsp;",$submitSignUp).
        "</table>
        </form>
    </div>
    $clrB
</div>";
?>