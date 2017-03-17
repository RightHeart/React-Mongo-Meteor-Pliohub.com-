<?php
/*
For Page Auth Required, allow/toggle the following:
includes/authClient.php
includes/settingsPageAuthRequired.php
includes/headerInternal.php
$highlightRightMenu=FALSE;
*/

include("includes/authClient.php"); // redirect invalid user & Settings for Pages which require Authentication

// Page-specific variables
$threeLevelMenuActiveTab=2; // for top nav
$pageParentTabName="index.php"; // applies to only menus which has highlighted sub-tabs. This becomes the active parent tab of sub-tab ($thisPageNameLink).
$thisPageNameLink="index.php";
$thisPageNameText="Page Title";

$passCodeGET=$_GET['pass_code'];
$failCodeGET=$_GET['fail_code'];

// Page-specific includes
//include("includes/connection.php");
//if($global_dbConnection){echo "Connected";}else{echo "NOT Connected";} // debug
// Variables(include Arrays,Objects,etc)
include("includes/countriesStatesProvinces.php"); // countries, countries values, state/provinces labels, state/provinces names, state/provinces values
include("includes/allCountriesWithTop.php");
// Tables

// After tables includes

// Global includes
include("includes/g.php");
// Recommended use is for DB-related tasks. Must be placed after g.php, otherwise use authClient.php for access to settings which doesn't use all DB Tables.
include("includes/settingsPageAuthNotRequired.php");
//include("includes/settingsPageAuthRequired.php");

// Miscellaneous includes and variables which may need g.php
include("includes/variablesClientSettings.php");
//$thisPageNameText=$vStackedTabText[$vStackedActiveTab];
//$globalSubheaderText="Subheader text.";

$processed=$_GET['processed'];

//$processed=$processed==='true'?true:false;
// in short
$processed=($processed==='true');

// also this way
//$processed=string_boolean($processed);

// Ready to operate

//if($globalMobileObject->is_mobile()&&$mobileRedirect){$url = "http://www.///.com/mobile/";header("Location: " . $url);}

echo $globalObject->htmlDoctypeHead(). // DOCTYPE, <head>
// title, description, keywords, classification
$globalObject->htmlNoAuthPagesTitle().$globalObject->htmlNoAuthPagesDescription().$globalObject->htmlNoAuthPagesKeywords();
/*$globalObject->htmlNoAuthPagesClassification().*/
// Page-specific CSS - includes and inline
echo "<link rel='stylesheet' type='text/css' href='css/ddimgtooltip.css' />";
echo "<link rel='stylesheet' href='css/iview.css' />
<link rel='stylesheet' href='css/skin2/style.css' />";
echo $globalObject->htmlNoAuthPagesCss(); // css

// Page-specific JS - includes and inline
echo "
<script type='text/javascript'>
function doAct(){alert('test');return false;
var thisForm=document.doActForm;
";
/*for($i=0;$i<count($reqFieldEntity);$i++){$currentField="thisForm.".$reqFieldEntity[$i];
echo "if($currentField.value==''){ $REQUIRED_FIELD_ALERT $currentField.focus(); $currentField.$REQUIRED_FIELD_BG;return false;}\n";}*/
echo "
//alert('good to submit');return false;
thisForm.submit();
} // EOF: doAct()
</script>";

echo //$globalObject->getXmlHttpObject(). // GetXmlHttpObject()
$globalObject->googleAnalyticsJs(). // ga.js
$globalObject->htmlCloseHeadStartBody("$BODY_PADDING_DEFAULT_EXTERNAL $BODY_PLAIN_BG_DEFAULT_EXTERNAL $BODY_IMG_BG_DEFAULT_EXTERNAL"," onload=\"document.formVlogin1.xusername.focus();\""); // </head> <body class='' attribute=''>
//$highlightRightMenu=FALSE;
//$tabActiveClassDisabled=TRUE;
include("includes/headerExternal.php");
//include("includes/headerInternal.php");
include("includes/subheaderExternal.php");
//$threeLevelMenuActiveTab=1;
$usePageNameForTab=TRUE;
//$cssClassNavbarAfterSubheader=" cssClassName1 cssClassName2..";
include("includes/navbarAfterSubheaderExternal.php");

/************************** SOF: HTML DOM DIVs **************************/
//$BG_AFTER_NAVBAR_AFTER_SUBHEADER_DEFAULT_EXTERNAL='';
//$PAGE_MAT_DEFAULT_EXTERNAL=$PAGE_MAT_1_H410RepX;
include("includes/centeredContainerWrapperExternalOpen.php"); // SOF: <centeredContainerWrapperExternal>
include("includes/centeredContainerExternalOpen.php"); // SOF: <centeredContainerExternal>

    include("includes/index1.php");
/*
    $portalActiveTab=0;$portalActiveSubtab=1;
    $usePageNameForPortalTab=TRUE;
    $usePageNameForPortalSubtab=TRUE;
//    $portalTabActiveClassDisabled=TRUE;
//    $portalSubtabActiveClassDisabled=TRUE;
    //$cssClassPortalTab=' bF00';
    //$cssClassPortalSubtab=' bF00';
    include("includes/portalTabsSubtabs.php");

    echo $globalObject->colW_2p50(' xbF00 fltR xgColumnShadow brTR5'); // SOF: colW_2p50
    include("includes/colW_2p50.php");
    echo "</div>";             // EOF: colW_2p50

    echo $globalObject->colW_7p30(' xbF00 brTL5 fltL bgFff brB5'); // SOF: colW_7p30

        echo $globalObject->colW_1p80(' xbF00 brTL5 brBL5 bgFff fltL'); // SOF: colW_1p80
        include("includes/colW_1p80.php");
        echo "</div>";        // EOF: colW_1p80

        echo $globalObject->colW_5p50('brTL5 brBL5 xbF00 bgFff fltL'); // SOF: colW_5p50
            echo "<div class='brTL5 brBL5 bE5e5e5L minH600'>";
            include("includes/index.php");
            echo "</div>";
        echo "</div>$clrB";        // EOF: colW_5p50

        include("includes/index2.php");

    echo "</div>$clrB";        // EOF: colW_7p30
*/
include("includes/centeredContainerExternalClose.php"); // EOF: <centeredContainerExternal>
include("includes/centeredContainerWrapperExternalClose.php"); // EOF: <centeredContainerWrapperExternal>
/************************** EOF: HTML DOM DIVs **************************/

/*echo "
<div id='background-image'>
	<img src='$img/bckg.jpg' width='1820' height='1024' />
</div>
";*/
include("includes/footerExternal.php");
include("includes/goTop.php");
include("includes/feedbackDialog.php");
// EOF: HTML

// Global .JS files at end
include("includes/gExternalJsInc.php"); // jQuery, Modernizr, Smallipop, Bootstrap, jQuery UI.

// Page-specific .JS files at end
include("includes/jQueryValidationJsInc.php");
include("includes/jQueryRatyJsInc.php");
include("includes/jqueryCycleJsInc.php");
include("includes/iViewSsJsInc.php");
include("includes/jqueryFullscreenJsInc.php");
//include("includes/emailCheckRegHelperJsInc.php");

echo $globalObject->startOfJqueryDomReadyShort();

// Global JS inside jQuery DOM ready for login, loginDropDown, search, smallipop, dialog, dialog buttons, feedback,
include("includes/gExternalJs.php");

// Page-specific JS inside jQuery DOM ready.

for($i=1;$i<=5;$i++){
    $photoFileName[]="$userThumbsDir/".$i."_0.jpg";
    $photoFileCaption[]="This is Caption $i";
}

// $photoFileName, $photoFileCaption are needed to use imgTooltipJs.php
include("includes/imgTooltipJs.php");

echo "
$('.globalHint').smallipop({
theme: 'blue xwhiteTransparent xfatShadow',
});
".
//$('#formEditSome').validationEngine('attach', {promptPosition:'topRight', scroll: true, autoPositionUpdate:true, validationEventTrigger:'keyup blur change'});
//$('#submitEditSome').click(function() {    $('#formEditSome').submit();return false;    });
"
$('#formVlogin1').validationEngine('attach', {promptPosition:'topRight', scroll: false, autoPositionUpdate:true, validationEventTrigger:'keyup blur'});
$('#submitVlogin1').click(function(){    $('#formVlogin1').submit();return false;    });

$('#formVlogin2').validationEngine('attach', {promptPosition:'topRight', scroll: false, autoPositionUpdate:true, validationEventTrigger:'keyup blur'});
$('#submitVlogin2').click(function(){    $('#formVlogin2').submit();return false;    });

$('#formSignUp').validationEngine('attach', {promptPosition:'topRight', scroll: false, autoPositionUpdate:true, validationEventTrigger:'keyup blur'});
$('#submitSignUp').click(function(){    $('#formSignUp').submit();return false;    });

$('#formContactForm').validationEngine('attach', {promptPosition:'topRight', scroll: false, autoPositionUpdate:true, validationEventTrigger:'keyup blur'});
$('#submitContactForm').click(function(){    $('#formContactForm').submit();return false;    });

$('#star1').raty({
scoreName: 'score1',
target: '#starsHint1',
targetKeep: true,
click: function(score1, evt) { if(score1>0){ $('#star1').validationEngine('hide'); } }
});

$('#formSomeThing').validationEngine('attach', {promptPosition:'topRight', scroll: true, autoPositionUpdate:true, validationEventTrigger:'keyup blur change'});

$('#submitSomeThing').click(function() {
    if($('[name=score1]').val()==''){
        $('#star1').validationEngine('showPrompt', '* This field is required.', 'error', 'topRight', true);
        $('#formSomeThing').validationEngine('validate'); // to show form other fields errors also
        return false;
    }
    if($('[name=checkboxName]').prop('checked')==false){
    alert('Unchecked');
    }

    $('#formSomeThing').submit();
    return false;
});

$('#cyclePics').cycle({
    fx: 'fade',
    speed: 'fast',
    timeout: 0,
    next: '#next2',
    prev: '#prev2'
});

$('#iview2').iView({
	pauseTime: 5000,
	pauseOnHover: false,
    animationSpeed: 200,
	directionNav: false,
	directionNavHide: false,
	controlNav: true,
	controlNavNextPrev: false,
	controlNavTooltip: false,
	nextLabel: 'Next',
	previousLabel: 'Previous',
	playLabel: 'Play',
	pauseLabel: 'Pause',
    timer: '360Bar',
    timerBg: '#EEE',
    timerColor: '#000',
    timerDiameter: 40,
    timerPadding: 3,
    timerPosition: 'top-right'
});

$('#datepicker1,#datepicker2').datepicker({
   // inline: true
});
";

echo $globalObject->endOfJqueryDomReady().
$globalObject->closeBodyHtml(); // </body> </html>
//$globalObject->closeBodyHtml($closeDbConnection=TRUE); // </body> </html>
//     timerStroke: 8,
?>