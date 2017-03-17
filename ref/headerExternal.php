<?php
/* SETTINGS FOR HOVER - ADD(enable hover) / REMOVE(disable hover) */
/*
$navMenuHover=TRUE;
$cssClassULnav=" navHover";
$caretClass='caret caretFFF';
*/

/*$threeLevelMenuActiveTab=0; // for top nav
$level1MenuAttribute[0]=" $ringMeAttribute title='$CALL_CLIENT_BTN_ALT_DEFAULT_EXTERNAL'";*/

/*for($i=0;$i<count($level1MenuText);$i++){
    //if($level1MenuText[$i]=='Blog'){$level1MenuTarget[$i]='_blank';}
    $level1MenuTarget[$i]='_blank';
}*/

//$cssClassULnav=" pull-right pL15";

/*if($highlightRightMenu===FALSE){$tabActiveClassDisabled=TRUE;}
for($i=0;$i<count($level1MenuText);$i++){    $level1MenuDivider[$i]=TRUE;    }*/

echo "
    <div class='navbar ".$HEADER_NAVBAR_DEFAULT_EXTERNAL." navbar-fixed-top'>
        <div class='navbar-inner'>
            <div class='container'>";
//                <a class='brand' href='index.php'>$COMPANY_NAME</a>";
//$level2MenuLink[5][0].="?deid=$fo_tblDeUserFld[0]";
//include("threeLevelMenuStructure.php");

/*<form class='navbar-form pull-left'>
<input type='text' class='span2'>
<button type='submit' class='btn'>Submit</button>
</form>


DONE
<form class='form-search pull-right'>
<div class='input-append xbF00' style='padding-top:5px;'>
<input type='text' class='span2 search-query' style='height:20px;padding-left:10px;'>
<button type='submit' class='btn'>Search</button>
</div>
</form>
*/

/*
echo "
<!-- The drop down menu -->
<ul class='nav pull-right pL15'>".
"<li$signUpTabClass><a href='sign-up.php'>Sign Up</a></li>".
"<li class='divider-vertical'></li>
<li class='dropdown$signInTabClass'>
<a class='dropdown-toggle' href='#' data-toggle='dropdown'>Sign In <strong class='caret'></strong></a>
<div class='dropdown-menu' style='padding:15px;'>
<!-- Login form here -->".

// XOM BUP
// <form action='' method='post'>
// <input id='user_username' style='margin-bottom: 15px;' type='text' name='user[username]' size='30' />
// <input id='user_password' style='margin-bottom: 15px;' type='password' name='user[password]' size='30' />
// <input id='user_remember_me' style='float: left; margin-right: 10px;' type='checkbox' name='user[remember_me]' value='1' />
// <label class='string optional' for='user_remember_me'> Remember me</label>
// <input class='btn btn-primary' style='clear: left; width: 100%; height: 32px; font-size: 13px;' type='submit' name='commit' value='Sign In' />
// </form>
"";
$formPostDebug="processVlogin.php";
//$formPostDebug="formPostDebug.php";
echo "<form name='formVlogin' id='formVlogin' method='post' action='$formPostDebug'>
<input type='hidden' name='source' value='desktop' />
<fieldset>
<label>Email</label>
<input name='username' id='username' class='input-large validate[required]' type='text'>

<label style='margin-top:10px;'>Password</label>
<input name='passcode' id='passcode' class='input-large validate[required]' type='password'>".
//<span class='help-block'>Example block-level help text here.</span>
"
<div class='xbF00' style='padding-top:10px;'>
<button type='submit' id='submitVlogin' class='btn pull-right'>Sign in</button>
<label class='checkbox' style='padding-top:10px;'>
<input type='checkbox' class='mT4' checked> Remember me
</label>
<br />
<a href='forgot-password.php' class='fs12'>Forgot password?</a>
</div>
".
//<button type='submit' class='btn'>Submit</button>
//<input class='btn btn-primary' style='clear: left; width: 100%; height: 32px; font-size: 13px;' type='submit' name='commit' value='Sign In' />
"
</fieldset>
</form>

</div>
</li>
</ul>";
//*/

// 0__________0__________0__________0 SOF: headerInternal 0__________0__________0__________0
// below unset only if above menu disabled
/*
unset($level1MenuText);
unset($level2MenuText);
unset($level3MenuText);
  unset($level1MenuLink);
  unset($level2MenuLink);
  unset($level3MenuLink);
$level1MenuText[0]="$GREETING_USER";
$level1MenuText[1]="Tab 1";
    $level1MenuLink[0]="profile.php"; // this # is used hardcoded rather in loop but here just for consistency
    $level1MenuLink[1]="tab.php";

$level2MenuText['profile.php'][0]="Settings";
$level2MenuText['profile.php'][1]="Logout";
    $level2MenuLink['profile.php'][0]="editProfile.php";
    $level2MenuLink['profile.php'][1]="logoutClient.php";

$level2MenuText['tab.php'][0]="Tab 1 Option 1";
$level2MenuText['tab.php'][1]="Tab 1 Option 2";
    $level2MenuLink['tab.php'][0]="#";
    $level2MenuLink['tab.php'][1]="#";

$cssClassULnav=" pull-right pL15";
if($highlightRightMenu===FALSE){$tabActiveClassDisabled=TRUE;}
include("threeLevelMenuStructure.php");
//echo "<p class='xbF00 fltR pT13 mL10 fs12 cFff'>Text</p>";
//*/
//echo "<form class='navbar-search pull-right'>
//<div class='input-append xbF00' style='padding-top:0px;'><input type='text' class='span2 search-query' placeholder='Search' style='height:20px;'></div></form>";
// 0__________0__________0__________0 EOF: headerInternal 0__________0__________0__________0
/*
echo "<div class='xbF00 fltR xpT10 pT5 mB5'>".
"<a href='$FACEBOOK_URL' target='_blank' class='fltL mR5'><img src='$img/facebook-icon.png' /></a>".
"<a href='$TWITTER_URL' target='_blank' class='fltL mR5'><img src='$img/twitter-icon.png' /></a>".
//"<a href='$GOOGLEPLUS_URL' target='_blank' class='fltL mR5'><img src='$img/google-plus-icon.png' /></a>".
//"<a href='$LINKEDIN_URL' target='_blank' class='fltL mR5'><img src='$img/linkedin-icon.png' /></a>".
//"<a href='$YOUTUBE_URL' target='_blank' class='fltL mR5'><img src='$img/youtube-icon.png' /></a>".
"</div>";
/*
echo "<div class='xbF00 fltR mR5 mT5'>
    <a href='$FACEBOOK_URL' target='_blank' class='socialMediaIcons facebookIcon'>Facebook</a>
    <a href='$TWITTER_URL' target='_blank' class='socialMediaIcons twitterIcon'>Twitter</a>
    <a href='$GOOGLEPLUS_URL' target='_blank' class='socialMediaIcons googleplusIcon'>Google+</a>
    <a href='$LINKEDIN_URL' target='_blank' class='socialMediaIcons linkedinIcon'>LinkedIn</a>
    <a href='$YOUTUBE_URL' target='_blank' class='socialMediaIcons1 youTubeIcon1'>YouTube</a>
</div>";
//*/
echo "
            </div>
        </div>
    </div>";
?>