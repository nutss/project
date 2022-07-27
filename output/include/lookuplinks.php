<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["staffusers.staffStatus"] )) {
			$lookupTableLinks["statusType"]["staffusers.staffStatus"] = array();
		}
		$lookupTableLinks["statusType"]["staffusers.staffStatus"]["edit"] = array("table" => "staffUsers", "field" => "staffStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["staffusers.staffEmailNotify"] )) {
			$lookupTableLinks["statusType"]["staffusers.staffEmailNotify"] = array();
		}
		$lookupTableLinks["statusType"]["staffusers.staffEmailNotify"]["edit"] = array("table" => "staffUsers", "field" => "staffEmailNotify", "page" => "edit");
		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["admin_users.staffStatus"] )) {
			$lookupTableLinks["statusType"]["admin_users.staffStatus"] = array();
		}
		$lookupTableLinks["statusType"]["admin_users.staffStatus"]["edit"] = array("table" => "admin_users", "field" => "staffStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["admin_users.staffEmailNotify"] )) {
			$lookupTableLinks["statusType"]["admin_users.staffEmailNotify"] = array();
		}
		$lookupTableLinks["statusType"]["admin_users.staffEmailNotify"]["edit"] = array("table" => "admin_users", "field" => "staffEmailNotify", "page" => "edit");
		if( !isset( $lookupTableLinks["researchType"] ) ) {
			$lookupTableLinks["researchType"] = array();
		}
		if( !isset( $lookupTableLinks["researchType"]["researchconsider.researchTypeID"] )) {
			$lookupTableLinks["researchType"]["researchconsider.researchTypeID"] = array();
		}
		$lookupTableLinks["researchType"]["researchconsider.researchTypeID"]["edit"] = array("table" => "researchConsider", "field" => "researchTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["process"] ) ) {
			$lookupTableLinks["process"] = array();
		}
		if( !isset( $lookupTableLinks["process"]["researchconsider.processName"] )) {
			$lookupTableLinks["process"]["researchconsider.processName"] = array();
		}
		$lookupTableLinks["process"]["researchconsider.processName"]["edit"] = array("table" => "researchConsider", "field" => "processName", "page" => "edit");
		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["researchconsider.researchConsiderFile"] )) {
			$lookupTableLinks["statusType"]["researchconsider.researchConsiderFile"] = array();
		}
		$lookupTableLinks["statusType"]["researchconsider.researchConsiderFile"]["edit"] = array("table" => "researchConsider", "field" => "researchConsiderFile", "page" => "edit");
		if( !isset( $lookupTableLinks["statusType"] ) ) {
			$lookupTableLinks["statusType"] = array();
		}
		if( !isset( $lookupTableLinks["statusType"]["researchconsider.researchRegisterDesc"] )) {
			$lookupTableLinks["statusType"]["researchconsider.researchRegisterDesc"] = array();
		}
		$lookupTableLinks["statusType"]["researchconsider.researchRegisterDesc"]["edit"] = array("table" => "researchConsider", "field" => "researchRegisterDesc", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchconsider.researchConsiderName"] )) {
			$lookupTableLinks["optionSub"]["researchconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchconsider.researchConsiderName"]["edit"] = array("table" => "researchConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["project_uggroups"] ) ) {
			$lookupTableLinks["project_uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["project_uggroups"]["researchconsider.researchConsiderGroupAuthorized"] )) {
			$lookupTableLinks["project_uggroups"]["researchconsider.researchConsiderGroupAuthorized"] = array();
		}
		$lookupTableLinks["project_uggroups"]["researchconsider.researchConsiderGroupAuthorized"]["edit"] = array("table" => "researchConsider", "field" => "researchConsiderGroupAuthorized", "page" => "edit");
		if( !isset( $lookupTableLinks["researchType"] ) ) {
			$lookupTableLinks["researchType"] = array();
		}
		if( !isset( $lookupTableLinks["researchType"]["researchscholarshipregister.researchType"] )) {
			$lookupTableLinks["researchType"]["researchscholarshipregister.researchType"] = array();
		}
		$lookupTableLinks["researchType"]["researchscholarshipregister.researchType"]["edit"] = array("table" => "researchScholarshipRegister", "field" => "researchType", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["researchscholarshipproposal.researchRegisterID"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["researchscholarshipproposal.researchRegisterID"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["researchscholarshipproposal.researchRegisterID"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchRegisterID", "page" => "edit");
		if( !isset( $lookupTableLinks["TypeGroup_Search_Lookup"] ) ) {
			$lookupTableLinks["TypeGroup_Search_Lookup"] = array();
		}
		if( !isset( $lookupTableLinks["TypeGroup_Search_Lookup"]["researchscholarshipproposal.researchProjectGroupName"] )) {
			$lookupTableLinks["TypeGroup_Search_Lookup"]["researchscholarshipproposal.researchProjectGroupName"] = array();
		}
		$lookupTableLinks["TypeGroup_Search_Lookup"]["researchscholarshipproposal.researchProjectGroupName"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchProjectGroupName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPrefixName"] )) {
			$lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPrefixName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPrefixName"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchProjectAffiliationPrefixName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPosition"] )) {
			$lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPosition"] = array();
		}
		$lookupTableLinks["optionSub"]["researchscholarshipproposal.researchProjectAffiliationPosition"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchProjectAffiliationPosition", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub_Search_Lookup"] ) ) {
			$lookupTableLinks["optionSub_Search_Lookup"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub_Search_Lookup"]["researchscholarshipproposal.researchProjectBankName"] )) {
			$lookupTableLinks["optionSub_Search_Lookup"]["researchscholarshipproposal.researchProjectBankName"] = array();
		}
		$lookupTableLinks["optionSub_Search_Lookup"]["researchscholarshipproposal.researchProjectBankName"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchProjectBankName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchscholarshipproposal.projectStatus"] )) {
			$lookupTableLinks["optionSub"]["researchscholarshipproposal.projectStatus"] = array();
		}
		$lookupTableLinks["optionSub"]["researchscholarshipproposal.projectStatus"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "projectStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["geographies"] ) ) {
			$lookupTableLinks["geographies"] = array();
		}
		if( !isset( $lookupTableLinks["geographies"]["researchscholarshipproposal.geographiesID"] )) {
			$lookupTableLinks["geographies"]["researchscholarshipproposal.geographiesID"] = array();
		}
		$lookupTableLinks["geographies"]["researchscholarshipproposal.geographiesID"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "geographiesID", "page" => "edit");
		if( !isset( $lookupTableLinks["provinces"] ) ) {
			$lookupTableLinks["provinces"] = array();
		}
		if( !isset( $lookupTableLinks["provinces"]["researchscholarshipproposal.provincesID"] )) {
			$lookupTableLinks["provinces"]["researchscholarshipproposal.provincesID"] = array();
		}
		$lookupTableLinks["provinces"]["researchscholarshipproposal.provincesID"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "provincesID", "page" => "edit");
		if( !isset( $lookupTableLinks["amphures"] ) ) {
			$lookupTableLinks["amphures"] = array();
		}
		if( !isset( $lookupTableLinks["amphures"]["researchscholarshipproposal.amphuresID"] )) {
			$lookupTableLinks["amphures"]["researchscholarshipproposal.amphuresID"] = array();
		}
		$lookupTableLinks["amphures"]["researchscholarshipproposal.amphuresID"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "amphuresID", "page" => "edit");
		if( !isset( $lookupTableLinks["districts"] ) ) {
			$lookupTableLinks["districts"] = array();
		}
		if( !isset( $lookupTableLinks["districts"]["researchscholarshipproposal.districtsID"] )) {
			$lookupTableLinks["districts"]["researchscholarshipproposal.districtsID"] = array();
		}
		$lookupTableLinks["districts"]["researchscholarshipproposal.districtsID"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "districtsID", "page" => "edit");
		if( !isset( $lookupTableLinks["considerChoice"] ) ) {
			$lookupTableLinks["considerChoice"] = array();
		}
		if( !isset( $lookupTableLinks["considerChoice"]["researchscholarshipconsider.researchConsiderValue"] )) {
			$lookupTableLinks["considerChoice"]["researchscholarshipconsider.researchConsiderValue"] = array();
		}
		$lookupTableLinks["considerChoice"]["researchscholarshipconsider.researchConsiderValue"]["edit"] = array("table" => "researchScholarshipConsider", "field" => "researchConsiderValue", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchRegisterID", "page" => "edit");
		if( !isset( $lookupTableLinks["TypeGroup_Search_Lookup"] ) ) {
			$lookupTableLinks["TypeGroup_Search_Lookup"] = array();
		}
		if( !isset( $lookupTableLinks["TypeGroup_Search_Lookup"]["researchprojectproposal.researchProjectGroupName"] )) {
			$lookupTableLinks["TypeGroup_Search_Lookup"]["researchprojectproposal.researchProjectGroupName"] = array();
		}
		$lookupTableLinks["TypeGroup_Search_Lookup"]["researchprojectproposal.researchProjectGroupName"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchProjectGroupName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPrefixName"] )) {
			$lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPrefixName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPrefixName"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchProjectAffiliationPrefixName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPosition"] )) {
			$lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPosition"] = array();
		}
		$lookupTableLinks["optionSub"]["researchprojectproposal.researchProjectAffiliationPosition"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchProjectAffiliationPosition", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub_Search_Lookup"] ) ) {
			$lookupTableLinks["optionSub_Search_Lookup"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub_Search_Lookup"]["researchprojectproposal.researchProjectBankName"] )) {
			$lookupTableLinks["optionSub_Search_Lookup"]["researchprojectproposal.researchProjectBankName"] = array();
		}
		$lookupTableLinks["optionSub_Search_Lookup"]["researchprojectproposal.researchProjectBankName"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchProjectBankName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchprojectproposal.projectStatus"] )) {
			$lookupTableLinks["optionSub"]["researchprojectproposal.projectStatus"] = array();
		}
		$lookupTableLinks["optionSub"]["researchprojectproposal.projectStatus"]["edit"] = array("table" => "researchProjectProposal", "field" => "projectStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchprojectproposal.trackingProjectDescResult"] )) {
			$lookupTableLinks["optionSub"]["researchprojectproposal.trackingProjectDescResult"] = array();
		}
		$lookupTableLinks["optionSub"]["researchprojectproposal.trackingProjectDescResult"]["edit"] = array("table" => "researchProjectProposal", "field" => "trackingProjectDescResult", "page" => "edit");
		if( !isset( $lookupTableLinks["geographies"] ) ) {
			$lookupTableLinks["geographies"] = array();
		}
		if( !isset( $lookupTableLinks["geographies"]["researchprojectproposal.geographiesID"] )) {
			$lookupTableLinks["geographies"]["researchprojectproposal.geographiesID"] = array();
		}
		$lookupTableLinks["geographies"]["researchprojectproposal.geographiesID"]["edit"] = array("table" => "researchProjectProposal", "field" => "geographiesID", "page" => "edit");
		if( !isset( $lookupTableLinks["provinces"] ) ) {
			$lookupTableLinks["provinces"] = array();
		}
		if( !isset( $lookupTableLinks["provinces"]["researchprojectproposal.provincesID"] )) {
			$lookupTableLinks["provinces"]["researchprojectproposal.provincesID"] = array();
		}
		$lookupTableLinks["provinces"]["researchprojectproposal.provincesID"]["edit"] = array("table" => "researchProjectProposal", "field" => "provincesID", "page" => "edit");
		if( !isset( $lookupTableLinks["amphures"] ) ) {
			$lookupTableLinks["amphures"] = array();
		}
		if( !isset( $lookupTableLinks["amphures"]["researchprojectproposal.amphuresID"] )) {
			$lookupTableLinks["amphures"]["researchprojectproposal.amphuresID"] = array();
		}
		$lookupTableLinks["amphures"]["researchprojectproposal.amphuresID"]["edit"] = array("table" => "researchProjectProposal", "field" => "amphuresID", "page" => "edit");
		if( !isset( $lookupTableLinks["districts"] ) ) {
			$lookupTableLinks["districts"] = array();
		}
		if( !isset( $lookupTableLinks["districts"]["researchprojectproposal.districtsID"] )) {
			$lookupTableLinks["districts"]["researchprojectproposal.districtsID"] = array();
		}
		$lookupTableLinks["districts"]["researchprojectproposal.districtsID"]["edit"] = array("table" => "researchProjectProposal", "field" => "districtsID", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchdisburseconsider.researchConsiderName"] )) {
			$lookupTableLinks["optionSub"]["researchdisburseconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchdisburseconsider.researchConsiderName"]["edit"] = array("table" => "researchDisburseConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["considerChoice"] ) ) {
			$lookupTableLinks["considerChoice"] = array();
		}
		if( !isset( $lookupTableLinks["considerChoice"]["researchdisburseconsider.researchConsiderValue"] )) {
			$lookupTableLinks["considerChoice"]["researchdisburseconsider.researchConsiderValue"] = array();
		}
		$lookupTableLinks["considerChoice"]["researchdisburseconsider.researchConsiderValue"]["edit"] = array("table" => "researchDisburseConsider", "field" => "researchConsiderValue", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchappointmentconsider.researchConsiderName"] )) {
			$lookupTableLinks["optionSub"]["researchappointmentconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchappointmentconsider.researchConsiderName"]["edit"] = array("table" => "researchAppointmentConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["considerChoice"] ) ) {
			$lookupTableLinks["considerChoice"] = array();
		}
		if( !isset( $lookupTableLinks["considerChoice"]["researchappointmentconsider.researchConsiderValue"] )) {
			$lookupTableLinks["considerChoice"]["researchappointmentconsider.researchConsiderValue"] = array();
		}
		$lookupTableLinks["considerChoice"]["researchappointmentconsider.researchConsiderValue"]["edit"] = array("table" => "researchAppointmentConsider", "field" => "researchConsiderValue", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchrenewalconsider.researchConsiderName"] )) {
			$lookupTableLinks["optionSub"]["researchrenewalconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["optionSub"]["researchrenewalconsider.researchConsiderName"]["edit"] = array("table" => "researchRenewalConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["considerChoice"] ) ) {
			$lookupTableLinks["considerChoice"] = array();
		}
		if( !isset( $lookupTableLinks["considerChoice"]["researchrenewalconsider.researchConsiderValue"] )) {
			$lookupTableLinks["considerChoice"]["researchrenewalconsider.researchConsiderValue"] = array();
		}
		$lookupTableLinks["considerChoice"]["researchrenewalconsider.researchConsiderValue"]["edit"] = array("table" => "researchRenewalConsider", "field" => "researchConsiderValue", "page" => "edit");
		if( !isset( $lookupTableLinks["researchType"] ) ) {
			$lookupTableLinks["researchType"] = array();
		}
		if( !isset( $lookupTableLinks["researchType"]["researchprojectregister.researchType"] )) {
			$lookupTableLinks["researchType"]["researchprojectregister.researchType"] = array();
		}
		$lookupTableLinks["researchType"]["researchprojectregister.researchType"]["edit"] = array("table" => "researchProjectRegister", "field" => "researchType", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["missionfollow.missionFollowActionStatus"] )) {
			$lookupTableLinks["optionSub"]["missionfollow.missionFollowActionStatus"] = array();
		}
		$lookupTableLinks["optionSub"]["missionfollow.missionFollowActionStatus"]["edit"] = array("table" => "missionFollow", "field" => "missionFollowActionStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["missionassignment.missionAssignmentConsiderName"] )) {
			$lookupTableLinks["optionSub"]["missionassignment.missionAssignmentConsiderName"] = array();
		}
		$lookupTableLinks["optionSub"]["missionassignment.missionAssignmentConsiderName"]["edit"] = array("table" => "missionAssignment", "field" => "missionAssignmentConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["considerChoice"] ) ) {
			$lookupTableLinks["considerChoice"] = array();
		}
		if( !isset( $lookupTableLinks["considerChoice"]["missionassignment.missionAssignmentConsiderValue"] )) {
			$lookupTableLinks["considerChoice"]["missionassignment.missionAssignmentConsiderValue"] = array();
		}
		$lookupTableLinks["considerChoice"]["missionassignment.missionAssignmentConsiderValue"]["edit"] = array("table" => "missionAssignment", "field" => "missionAssignmentConsiderValue", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["missionassignment.missionAssignmentResponsibleName"] )) {
			$lookupTableLinks["staffUsers"]["missionassignment.missionAssignmentResponsibleName"] = array();
		}
		$lookupTableLinks["staffUsers"]["missionassignment.missionAssignmentResponsibleName"]["edit"] = array("table" => "missionAssignment", "field" => "missionAssignmentResponsibleName", "page" => "edit");
		if( !isset( $lookupTableLinks["researchType"] ) ) {
			$lookupTableLinks["researchType"] = array();
		}
		if( !isset( $lookupTableLinks["researchType"]["project_uggroups.typeName"] )) {
			$lookupTableLinks["researchType"]["project_uggroups.typeName"] = array();
		}
		$lookupTableLinks["researchType"]["project_uggroups.typeName"]["edit"] = array("table" => "project_uggroups", "field" => "typeName", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchType"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchType"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchType"]["edit"] = array("table" => "ReportProgress", "field" => "researchType", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchRegisterID"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchRegisterID"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["reportprogress.researchRegisterID"]["edit"] = array("table" => "ReportProgress", "field" => "researchRegisterID", "page" => "edit");
		if( !isset( $lookupTableLinks["researchProjectProposal"] ) ) {
			$lookupTableLinks["researchProjectProposal"] = array();
		}
		if( !isset( $lookupTableLinks["researchProjectProposal"]["reportprogress.researchProjectAffiliationName"] )) {
			$lookupTableLinks["researchProjectProposal"]["reportprogress.researchProjectAffiliationName"] = array();
		}
		$lookupTableLinks["researchProjectProposal"]["reportprogress.researchProjectAffiliationName"]["edit"] = array("table" => "ReportProgress", "field" => "researchProjectAffiliationName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["reportprogress.trackingProjectDescResult"] )) {
			$lookupTableLinks["optionSub"]["reportprogress.trackingProjectDescResult"] = array();
		}
		$lookupTableLinks["optionSub"]["reportprogress.trackingProjectDescResult"]["edit"] = array("table" => "ReportProgress", "field" => "trackingProjectDescResult", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["reportprogress.projectStatus"] )) {
			$lookupTableLinks["optionSub"]["reportprogress.projectStatus"] = array();
		}
		$lookupTableLinks["optionSub"]["reportprogress.projectStatus"]["edit"] = array("table" => "ReportProgress", "field" => "projectStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchRegisterID"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchRegisterID"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchRegisterID"]["edit"] = array("table" => "ReportSearchresearchRegister", "field" => "researchRegisterID", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchType"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchType"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["reportsearchresearchregister.researchType"]["edit"] = array("table" => "ReportSearchresearchRegister", "field" => "researchType", "page" => "edit");
		if( !isset( $lookupTableLinks["missionFollow"] ) ) {
			$lookupTableLinks["missionFollow"] = array();
		}
		if( !isset( $lookupTableLinks["missionFollow"]["reportmission.missionFollowName"] )) {
			$lookupTableLinks["missionFollow"]["reportmission.missionFollowName"] = array();
		}
		$lookupTableLinks["missionFollow"]["reportmission.missionFollowName"]["edit"] = array("table" => "ReportMission", "field" => "missionFollowName", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["reportmission.missionAssignmentResponsibleName"] )) {
			$lookupTableLinks["staffUsers"]["reportmission.missionAssignmentResponsibleName"] = array();
		}
		$lookupTableLinks["staffUsers"]["reportmission.missionAssignmentResponsibleName"]["edit"] = array("table" => "ReportMission", "field" => "missionAssignmentResponsibleName", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["reportgraphmissionfollow.missionFollowActionStatus"] )) {
			$lookupTableLinks["optionSub"]["reportgraphmissionfollow.missionFollowActionStatus"] = array();
		}
		$lookupTableLinks["optionSub"]["reportgraphmissionfollow.missionFollowActionStatus"]["search"] = array("table" => "ReportGraphmissionFollow", "field" => "missionFollowActionStatus", "page" => "search");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researcher.researchType"] )) {
			$lookupTableLinks["optionSub"]["researcher.researchType"] = array();
		}
		$lookupTableLinks["optionSub"]["researcher.researchType"]["edit"] = array("table" => "researcher", "field" => "researchType", "page" => "edit");
		if( !isset( $lookupTableLinks["optionSub"] ) ) {
			$lookupTableLinks["optionSub"] = array();
		}
		if( !isset( $lookupTableLinks["optionSub"]["researchresearcher.researchType"] )) {
			$lookupTableLinks["optionSub"]["researchresearcher.researchType"] = array();
		}
		$lookupTableLinks["optionSub"]["researchresearcher.researchType"]["edit"] = array("table" => "researchResearcher", "field" => "researchType", "page" => "edit");
}

?>