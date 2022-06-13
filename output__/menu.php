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

include_once(getabspath("include/project_events.php"));
$tableEvents["project"] = new eventclass_project;
include_once(getabspath("include/tasktrack_events.php"));
$tableEvents["taskTrack"] = new eventclass_tasktrack;
include_once(getabspath("include/projectstatusapprove_events.php"));
$tableEvents["projectStatusApprove"] = new eventclass_projectstatusapprove;
include_once(getabspath("include/taskdisburse_events.php"));
$tableEvents["taskDisburse"] = new eventclass_taskdisburse;
include_once(getabspath("include/tasktrackapprove_events.php"));
$tableEvents["taskTrackApprove"] = new eventclass_tasktrackapprove;
include_once(getabspath("include/projectassign_events.php"));
$tableEvents["projectAssign"] = new eventclass_projectassign;
include_once(getabspath("include/taskrenew_events.php"));
$tableEvents["taskRenew"] = new eventclass_taskrenew;
include_once(getabspath("include/taskrenewapprove_events.php"));
$tableEvents["taskRenewApprove"] = new eventclass_taskrenewapprove;
include_once(getabspath("include/projectstatusscreen_events.php"));
$tableEvents["projectStatusScreen"] = new eventclass_projectstatusscreen;
include_once(getabspath("include/taskdisburseapprove_events.php"));
$tableEvents["taskDisburseApprove"] = new eventclass_taskdisburseapprove;
include_once(getabspath("include/taskrenewoinion_events.php"));
$tableEvents["taskRenewOinion"] = new eventclass_taskrenewoinion;

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