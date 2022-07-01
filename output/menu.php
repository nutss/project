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

include_once(getabspath("include/staffusers_events.php"));
$tableEvents["staffUsers"] = new eventclass_staffusers;
include_once(getabspath("include/researchtype_events.php"));
$tableEvents["researchType"] = new eventclass_researchtype;
include_once(getabspath("include/researchoperatingperiod_events.php"));
$tableEvents["researchOperatingPeriod"] = new eventclass_researchoperatingperiod;
include_once(getabspath("include/researchappointment_events.php"));
$tableEvents["researchAppointment"] = new eventclass_researchappointment;
include_once(getabspath("include/researchdisburse_events.php"));
$tableEvents["researchDisburse"] = new eventclass_researchdisburse;
include_once(getabspath("include/researchrenewal_events.php"));
$tableEvents["researchRenewal"] = new eventclass_researchrenewal;
include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
include_once(getabspath("include/researchconsider_events.php"));
$tableEvents["researchConsider"] = new eventclass_researchconsider;
include_once(getabspath("include/researchscholarshipregister_events.php"));
$tableEvents["researchScholarshipRegister"] = new eventclass_researchscholarshipregister;
include_once(getabspath("include/researchscholarshipproposal_events.php"));
$tableEvents["researchScholarshipProposal"] = new eventclass_researchscholarshipproposal;
include_once(getabspath("include/researchscholarshipconsider_events.php"));
$tableEvents["researchScholarshipConsider"] = new eventclass_researchscholarshipconsider;
include_once(getabspath("include/researchprojectproposal_events.php"));
$tableEvents["researchProjectProposal"] = new eventclass_researchprojectproposal;
include_once(getabspath("include/researchdisburseconsider_events.php"));
$tableEvents["researchDisburseConsider"] = new eventclass_researchdisburseconsider;
include_once(getabspath("include/researchappointmentconsider_events.php"));
$tableEvents["researchAppointmentConsider"] = new eventclass_researchappointmentconsider;
include_once(getabspath("include/researchrenewalconsider_events.php"));
$tableEvents["researchRenewalConsider"] = new eventclass_researchrenewalconsider;
include_once(getabspath("include/researchperiod_events.php"));
$tableEvents["researchPeriod"] = new eventclass_researchperiod;
include_once(getabspath("include/researchprojectregister_events.php"));
$tableEvents["researchProjectRegister"] = new eventclass_researchprojectregister;
include_once(getabspath("include/missionfollow_events.php"));
$tableEvents["missionFollow"] = new eventclass_missionfollow;
include_once(getabspath("include/missionassignment_events.php"));
$tableEvents["missionAssignment"] = new eventclass_missionassignment;
include_once(getabspath("include/optiongroup_events.php"));
$tableEvents["optionGroup"] = new eventclass_optiongroup;
include_once(getabspath("include/optionsub_events.php"));
$tableEvents["optionSub"] = new eventclass_optionsub;
include_once(getabspath("include/researchconsiderview_events.php"));
$tableEvents["researchConsiderView"] = new eventclass_researchconsiderview;
include_once(getabspath("include/reportprogress_events.php"));
$tableEvents["ReportProgress"] = new eventclass_reportprogress;
include_once(getabspath("include/reportmonitorprojectstatus1_events.php"));
$tableEvents["ReportMonitorProjectStatus1"] = new eventclass_reportmonitorprojectstatus1;
include_once(getabspath("include/reportmonitorprojectstatus2_events.php"));
$tableEvents["ReportMonitorProjectStatus2"] = new eventclass_reportmonitorprojectstatus2;
include_once(getabspath("include/reportmonitorprojectstatus3_events.php"));
$tableEvents["ReportMonitorProjectStatus3"] = new eventclass_reportmonitorprojectstatus3;
include_once(getabspath("include/reportmonitorprojectstatus4_events.php"));
$tableEvents["ReportMonitorProjectStatus4"] = new eventclass_reportmonitorprojectstatus4;

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