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
		if( !isset( $lookupTableLinks["consider"] ) ) {
			$lookupTableLinks["consider"] = array();
		}
		if( !isset( $lookupTableLinks["consider"]["researchconsider.researchConsiderName"] )) {
			$lookupTableLinks["consider"]["researchconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["consider"]["researchconsider.researchConsiderName"]["edit"] = array("table" => "researchConsider", "field" => "researchConsiderName", "page" => "edit");
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
		if( !isset( $lookupTableLinks["researchProjectGroup"] ) ) {
			$lookupTableLinks["researchProjectGroup"] = array();
		}
		if( !isset( $lookupTableLinks["researchProjectGroup"]["researchscholarshipproposal.researchProjectGroupName"] )) {
			$lookupTableLinks["researchProjectGroup"]["researchscholarshipproposal.researchProjectGroupName"] = array();
		}
		$lookupTableLinks["researchProjectGroup"]["researchscholarshipproposal.researchProjectGroupName"]["edit"] = array("table" => "researchScholarshipProposal", "field" => "researchProjectGroupName", "page" => "edit");
		if( !isset( $lookupTableLinks["consider"] ) ) {
			$lookupTableLinks["consider"] = array();
		}
		if( !isset( $lookupTableLinks["consider"]["researchscholarshipconsider.researchConsiderName"] )) {
			$lookupTableLinks["consider"]["researchscholarshipconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["consider"]["researchscholarshipconsider.researchConsiderName"]["edit"] = array("table" => "researchScholarshipConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["researchScholarshipRegister"] ) ) {
			$lookupTableLinks["researchScholarshipRegister"] = array();
		}
		if( !isset( $lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"] )) {
			$lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"] = array();
		}
		$lookupTableLinks["researchScholarshipRegister"]["researchprojectproposal.researchRegisterID"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchRegisterID", "page" => "edit");
		if( !isset( $lookupTableLinks["researchProjectGroup"] ) ) {
			$lookupTableLinks["researchProjectGroup"] = array();
		}
		if( !isset( $lookupTableLinks["researchProjectGroup"]["researchprojectproposal.researchProjectGroupName"] )) {
			$lookupTableLinks["researchProjectGroup"]["researchprojectproposal.researchProjectGroupName"] = array();
		}
		$lookupTableLinks["researchProjectGroup"]["researchprojectproposal.researchProjectGroupName"]["edit"] = array("table" => "researchProjectProposal", "field" => "researchProjectGroupName", "page" => "edit");
		if( !isset( $lookupTableLinks["consider"] ) ) {
			$lookupTableLinks["consider"] = array();
		}
		if( !isset( $lookupTableLinks["consider"]["researchdisburseconsider.researchConsiderName"] )) {
			$lookupTableLinks["consider"]["researchdisburseconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["consider"]["researchdisburseconsider.researchConsiderName"]["edit"] = array("table" => "researchDisburseConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["consider"] ) ) {
			$lookupTableLinks["consider"] = array();
		}
		if( !isset( $lookupTableLinks["consider"]["researchappointmentconsider.researchConsiderName"] )) {
			$lookupTableLinks["consider"]["researchappointmentconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["consider"]["researchappointmentconsider.researchConsiderName"]["edit"] = array("table" => "researchAppointmentConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["consider"] ) ) {
			$lookupTableLinks["consider"] = array();
		}
		if( !isset( $lookupTableLinks["consider"]["researchrenewalconsider.researchConsiderName"] )) {
			$lookupTableLinks["consider"]["researchrenewalconsider.researchConsiderName"] = array();
		}
		$lookupTableLinks["consider"]["researchrenewalconsider.researchConsiderName"]["edit"] = array("table" => "researchRenewalConsider", "field" => "researchConsiderName", "page" => "edit");
		if( !isset( $lookupTableLinks["researchType"] ) ) {
			$lookupTableLinks["researchType"] = array();
		}
		if( !isset( $lookupTableLinks["researchType"]["researchprojectregister.researchType"] )) {
			$lookupTableLinks["researchType"]["researchprojectregister.researchType"] = array();
		}
		$lookupTableLinks["researchType"]["researchprojectregister.researchType"]["edit"] = array("table" => "researchProjectRegister", "field" => "researchType", "page" => "edit");
}

?>