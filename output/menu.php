<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!Security::isGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/researchappointment_events.php"));
$tableEvents["researchAppointment"] = new eventclass_researchappointment;
include_once(getabspath("include/researchdisburse_events.php"));
$tableEvents["researchDisburse"] = new eventclass_researchdisburse;
include_once(getabspath("include/researchrenewal_events.php"));
$tableEvents["researchRenewal"] = new eventclass_researchrenewal;
include_once(getabspath("include/researchscholarshipproposal_events.php"));
$tableEvents["researchScholarshipProposal"] = new eventclass_researchscholarshipproposal;
include_once(getabspath("include/researchprojectproposal_events.php"));
$tableEvents["researchProjectProposal"] = new eventclass_researchprojectproposal;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>