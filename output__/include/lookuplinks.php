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

		if( !isset( $lookupTableLinks["ProjectCompany"] ) ) {
			$lookupTableLinks["ProjectCompany"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectCompany"]["projectcontact.companyName"] )) {
			$lookupTableLinks["ProjectCompany"]["projectcontact.companyName"] = array();
		}
		$lookupTableLinks["ProjectCompany"]["projectcontact.companyName"]["edit"] = array("table" => "ProjectContact", "field" => "companyName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectType"] ) ) {
			$lookupTableLinks["ProjectType"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectType"]["projectstep.projectTypeID"] )) {
			$lookupTableLinks["ProjectType"]["projectstep.projectTypeID"] = array();
		}
		$lookupTableLinks["ProjectType"]["projectstep.projectTypeID"]["edit"] = array("table" => "ProjectStep", "field" => "projectTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectType"] ) ) {
			$lookupTableLinks["ProjectType"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectType"]["project.ProjectTypeName"] )) {
			$lookupTableLinks["ProjectType"]["project.ProjectTypeName"] = array();
		}
		$lookupTableLinks["ProjectType"]["project.ProjectTypeName"]["edit"] = array("table" => "project", "field" => "ProjectTypeName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectCompany"] ) ) {
			$lookupTableLinks["ProjectCompany"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectCompany"]["project.companyName"] )) {
			$lookupTableLinks["ProjectCompany"]["project.companyName"] = array();
		}
		$lookupTableLinks["ProjectCompany"]["project.companyName"]["edit"] = array("table" => "project", "field" => "companyName", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectStep01"] ) ) {
			$lookupTableLinks["CB_ProjectStep01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectStep01"]["tasktrack.progressStep"] )) {
			$lookupTableLinks["CB_ProjectStep01"]["tasktrack.progressStep"] = array();
		}
		$lookupTableLinks["CB_ProjectStep01"]["tasktrack.progressStep"]["edit"] = array("table" => "taskTrack", "field" => "progressStep", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectContact01"] ) ) {
			$lookupTableLinks["CB_ProjectContact01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectContact01"]["tasktrack.contactName"] )) {
			$lookupTableLinks["CB_ProjectContact01"]["tasktrack.contactName"] = array();
		}
		$lookupTableLinks["CB_ProjectContact01"]["tasktrack.contactName"]["edit"] = array("table" => "taskTrack", "field" => "contactName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectType"] ) ) {
			$lookupTableLinks["ProjectType"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectType"]["projectstatusapprove.ProjectTypeName"] )) {
			$lookupTableLinks["ProjectType"]["projectstatusapprove.ProjectTypeName"] = array();
		}
		$lookupTableLinks["ProjectType"]["projectstatusapprove.ProjectTypeName"]["edit"] = array("table" => "projectStatusApprove", "field" => "ProjectTypeName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectCompany"] ) ) {
			$lookupTableLinks["ProjectCompany"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectCompany"]["projectstatusapprove.companyName"] )) {
			$lookupTableLinks["ProjectCompany"]["projectstatusapprove.companyName"] = array();
		}
		$lookupTableLinks["ProjectCompany"]["projectstatusapprove.companyName"]["edit"] = array("table" => "projectStatusApprove", "field" => "companyName", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectStep01"] ) ) {
			$lookupTableLinks["CB_ProjectStep01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectStep01"]["taskdisburse.progressStep"] )) {
			$lookupTableLinks["CB_ProjectStep01"]["taskdisburse.progressStep"] = array();
		}
		$lookupTableLinks["CB_ProjectStep01"]["taskdisburse.progressStep"]["edit"] = array("table" => "taskDisburse", "field" => "progressStep", "page" => "edit");
		if( !isset( $lookupTableLinks["project"] ) ) {
			$lookupTableLinks["project"] = array();
		}
		if( !isset( $lookupTableLinks["project"]["tasktrackapprove.projectID"] )) {
			$lookupTableLinks["project"]["tasktrackapprove.projectID"] = array();
		}
		$lookupTableLinks["project"]["tasktrackapprove.projectID"]["edit"] = array("table" => "taskTrackApprove", "field" => "projectID", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectStep01"] ) ) {
			$lookupTableLinks["CB_ProjectStep01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectStep01"]["tasktrackapprove.progressStep"] )) {
			$lookupTableLinks["CB_ProjectStep01"]["tasktrackapprove.progressStep"] = array();
		}
		$lookupTableLinks["CB_ProjectStep01"]["tasktrackapprove.progressStep"]["edit"] = array("table" => "taskTrackApprove", "field" => "progressStep", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectContact01"] ) ) {
			$lookupTableLinks["CB_ProjectContact01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectContact01"]["tasktrackapprove.contactName"] )) {
			$lookupTableLinks["CB_ProjectContact01"]["tasktrackapprove.contactName"] = array();
		}
		$lookupTableLinks["CB_ProjectContact01"]["tasktrackapprove.contactName"]["edit"] = array("table" => "taskTrackApprove", "field" => "contactName", "page" => "edit");
		if( !isset( $lookupTableLinks["project"] ) ) {
			$lookupTableLinks["project"] = array();
		}
		if( !isset( $lookupTableLinks["project"]["summarytasktrack.projectID"] )) {
			$lookupTableLinks["project"]["summarytasktrack.projectID"] = array();
		}
		$lookupTableLinks["project"]["summarytasktrack.projectID"]["search"] = array("table" => "SummaryTaskTrack", "field" => "projectID", "page" => "search");
		if( !isset( $lookupTableLinks["ProjectStep"] ) ) {
			$lookupTableLinks["ProjectStep"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectStep"]["summarytasktrack.progressStep"] )) {
			$lookupTableLinks["ProjectStep"]["summarytasktrack.progressStep"] = array();
		}
		$lookupTableLinks["ProjectStep"]["summarytasktrack.progressStep"]["search"] = array("table" => "SummaryTaskTrack", "field" => "progressStep", "page" => "search");
		if( !isset( $lookupTableLinks["ProjectStep"] ) ) {
			$lookupTableLinks["ProjectStep"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectStep"]["projectassign.ProjectTypeName"] )) {
			$lookupTableLinks["ProjectStep"]["projectassign.ProjectTypeName"] = array();
		}
		$lookupTableLinks["ProjectStep"]["projectassign.ProjectTypeName"]["edit"] = array("table" => "projectAssign", "field" => "ProjectTypeName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectCompany"] ) ) {
			$lookupTableLinks["ProjectCompany"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectCompany"]["projectassign.companyName"] )) {
			$lookupTableLinks["ProjectCompany"]["projectassign.companyName"] = array();
		}
		$lookupTableLinks["ProjectCompany"]["projectassign.companyName"]["edit"] = array("table" => "projectAssign", "field" => "companyName", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["projectassign.entryUserName"] )) {
			$lookupTableLinks["staffUsers"]["projectassign.entryUserName"] = array();
		}
		$lookupTableLinks["staffUsers"]["projectassign.entryUserName"]["edit"] = array("table" => "projectAssign", "field" => "entryUserName", "page" => "edit");
		if( !isset( $lookupTableLinks["project"] ) ) {
			$lookupTableLinks["project"] = array();
		}
		if( !isset( $lookupTableLinks["project"]["taskrenewapprove.projectID"] )) {
			$lookupTableLinks["project"]["taskrenewapprove.projectID"] = array();
		}
		$lookupTableLinks["project"]["taskrenewapprove.projectID"]["edit"] = array("table" => "taskRenewApprove", "field" => "projectID", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectType"] ) ) {
			$lookupTableLinks["ProjectType"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectType"]["projectstatusscreen.ProjectTypeName"] )) {
			$lookupTableLinks["ProjectType"]["projectstatusscreen.ProjectTypeName"] = array();
		}
		$lookupTableLinks["ProjectType"]["projectstatusscreen.ProjectTypeName"]["edit"] = array("table" => "projectStatusScreen", "field" => "ProjectTypeName", "page" => "edit");
		if( !isset( $lookupTableLinks["ProjectCompany"] ) ) {
			$lookupTableLinks["ProjectCompany"] = array();
		}
		if( !isset( $lookupTableLinks["ProjectCompany"]["projectstatusscreen.companyName"] )) {
			$lookupTableLinks["ProjectCompany"]["projectstatusscreen.companyName"] = array();
		}
		$lookupTableLinks["ProjectCompany"]["projectstatusscreen.companyName"]["edit"] = array("table" => "projectStatusScreen", "field" => "companyName", "page" => "edit");
		if( !isset( $lookupTableLinks["CB_ProjectStep01"] ) ) {
			$lookupTableLinks["CB_ProjectStep01"] = array();
		}
		if( !isset( $lookupTableLinks["CB_ProjectStep01"]["taskdisburseapprove.progressStep"] )) {
			$lookupTableLinks["CB_ProjectStep01"]["taskdisburseapprove.progressStep"] = array();
		}
		$lookupTableLinks["CB_ProjectStep01"]["taskdisburseapprove.progressStep"]["edit"] = array("table" => "taskDisburseApprove", "field" => "progressStep", "page" => "edit");
		if( !isset( $lookupTableLinks["project"] ) ) {
			$lookupTableLinks["project"] = array();
		}
		if( !isset( $lookupTableLinks["project"]["taskrenewoinion.projectID"] )) {
			$lookupTableLinks["project"]["taskrenewoinion.projectID"] = array();
		}
		$lookupTableLinks["project"]["taskrenewoinion.projectID"]["edit"] = array("table" => "taskRenewOinion", "field" => "projectID", "page" => "edit");
}

?>