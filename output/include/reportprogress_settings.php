<?php
$tdatareportprogress = array();
$tdatareportprogress[".searchableFields"] = array();
$tdatareportprogress[".ShortName"] = "reportprogress";
$tdatareportprogress[".OwnerID"] = "";
$tdatareportprogress[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportprogress[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareportprogress[".originalPagesByType"] = $tdatareportprogress[".pagesByType"];
$tdatareportprogress[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareportprogress[".originalPages"] = $tdatareportprogress[".pages"];
$tdatareportprogress[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareportprogress[".originalDefaultPages"] = $tdatareportprogress[".defaultPages"];

//	field labels
$fieldLabelsreportprogress = array();
$fieldToolTipsreportprogress = array();
$pageTitlesreportprogress = array();
$placeHoldersreportprogress = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportprogress["English"] = array();
	$fieldToolTipsreportprogress["English"] = array();
	$placeHoldersreportprogress["English"] = array();
	$pageTitlesreportprogress["English"] = array();
	$fieldLabelsreportprogress["English"]["researchProjectNo"] = "Research Project No";
	$fieldToolTipsreportprogress["English"]["researchProjectNo"] = "";
	$placeHoldersreportprogress["English"]["researchProjectNo"] = "";
	$fieldLabelsreportprogress["English"]["researchType"] = "Research Type";
	$fieldToolTipsreportprogress["English"]["researchType"] = "";
	$placeHoldersreportprogress["English"]["researchType"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldToolTipsreportprogress["English"]["researchProjectHeadName"] = "";
	$placeHoldersreportprogress["English"]["researchProjectHeadName"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectAppointmentStatus"] = "Research Project Appointment Status";
	$fieldToolTipsreportprogress["English"]["researchProjectAppointmentStatus"] = "";
	$placeHoldersreportprogress["English"]["researchProjectAppointmentStatus"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectDisburseStatus"] = "Research Project Disburse Status";
	$fieldToolTipsreportprogress["English"]["researchProjectDisburseStatus"] = "";
	$placeHoldersreportprogress["English"]["researchProjectDisburseStatus"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectEndDate"] = "Research Project End Date";
	$fieldToolTipsreportprogress["English"]["researchProjectEndDate"] = "";
	$placeHoldersreportprogress["English"]["researchProjectEndDate"] = "";
	$fieldLabelsreportprogress["English"]["trackingProjectDescResult"] = "Tracking Project Desc Result";
	$fieldToolTipsreportprogress["English"]["trackingProjectDescResult"] = "";
	$placeHoldersreportprogress["English"]["trackingProjectDescResult"] = "";
	$fieldLabelsreportprogress["English"]["projectStatus"] = "Project Status";
	$fieldToolTipsreportprogress["English"]["projectStatus"] = "";
	$placeHoldersreportprogress["English"]["projectStatus"] = "";
	$fieldLabelsreportprogress["English"]["id"] = "ID";
	$fieldToolTipsreportprogress["English"]["id"] = "";
	$placeHoldersreportprogress["English"]["id"] = "";
	$fieldLabelsreportprogress["English"]["UseTime"] = "Use Time";
	$fieldToolTipsreportprogress["English"]["UseTime"] = "";
	$placeHoldersreportprogress["English"]["UseTime"] = "";
	$fieldLabelsreportprogress["English"]["overdueTime"] = "Overdue Time";
	$fieldToolTipsreportprogress["English"]["overdueTime"] = "";
	$placeHoldersreportprogress["English"]["overdueTime"] = "";
	$fieldLabelsreportprogress["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsreportprogress["English"]["researchRegisterID"] = "";
	$placeHoldersreportprogress["English"]["researchRegisterID"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldToolTipsreportprogress["English"]["researchProjectNameThai"] = "";
	$placeHoldersreportprogress["English"]["researchProjectNameThai"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldToolTipsreportprogress["English"]["researchProjectNameEng"] = "";
	$placeHoldersreportprogress["English"]["researchProjectNameEng"] = "";
	$fieldLabelsreportprogress["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsreportprogress["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersreportprogress["English"]["researchProjectAffiliationName"] = "";
	if (count($fieldToolTipsreportprogress["English"]))
		$tdatareportprogress[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportprogress["Thai"] = array();
	$fieldToolTipsreportprogress["Thai"] = array();
	$placeHoldersreportprogress["Thai"] = array();
	$pageTitlesreportprogress["Thai"] = array();
	$fieldLabelsreportprogress["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldToolTipsreportprogress["Thai"]["researchProjectNo"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectNo"] = "";
	$fieldLabelsreportprogress["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsreportprogress["Thai"]["researchType"] = "";
	$placeHoldersreportprogress["Thai"]["researchType"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectHeadName"] = "หัวหน้าโครงการ";
	$fieldToolTipsreportprogress["Thai"]["researchProjectHeadName"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectHeadName"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectAppointmentStatus"] = "การดำเนินการ";
	$fieldToolTipsreportprogress["Thai"]["researchProjectAppointmentStatus"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectAppointmentStatus"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectDisburseStatus"] = "การเบิกจ่าย";
	$fieldToolTipsreportprogress["Thai"]["researchProjectDisburseStatus"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectDisburseStatus"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectEndDate"] = "วันที่สิ้นสุด";
	$fieldToolTipsreportprogress["Thai"]["researchProjectEndDate"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectEndDate"] = "";
	$fieldLabelsreportprogress["Thai"]["trackingProjectDescResult"] = "นำไปใช้จริง";
	$fieldToolTipsreportprogress["Thai"]["trackingProjectDescResult"] = "";
	$placeHoldersreportprogress["Thai"]["trackingProjectDescResult"] = "";
	$fieldLabelsreportprogress["Thai"]["projectStatus"] = "สถานะ";
	$fieldToolTipsreportprogress["Thai"]["projectStatus"] = "";
	$placeHoldersreportprogress["Thai"]["projectStatus"] = "";
	$fieldLabelsreportprogress["Thai"]["id"] = "ID";
	$fieldToolTipsreportprogress["Thai"]["id"] = "";
	$placeHoldersreportprogress["Thai"]["id"] = "";
	$fieldLabelsreportprogress["Thai"]["UseTime"] = "เวลาที่ใช้";
	$fieldToolTipsreportprogress["Thai"]["UseTime"] = "";
	$placeHoldersreportprogress["Thai"]["UseTime"] = "";
	$fieldLabelsreportprogress["Thai"]["overdueTime"] = "เกินกำหนด";
	$fieldToolTipsreportprogress["Thai"]["overdueTime"] = "";
	$placeHoldersreportprogress["Thai"]["overdueTime"] = "";
	$fieldLabelsreportprogress["Thai"]["researchRegisterID"] = "การรับสมัครขอรับทุนวิจัย";
	$fieldToolTipsreportprogress["Thai"]["researchRegisterID"] = "";
	$placeHoldersreportprogress["Thai"]["researchRegisterID"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldToolTipsreportprogress["Thai"]["researchProjectNameThai"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectNameThai"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldToolTipsreportprogress["Thai"]["researchProjectNameEng"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectNameEng"] = "";
	$fieldLabelsreportprogress["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsreportprogress["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersreportprogress["Thai"]["researchProjectAffiliationName"] = "";
	if (count($fieldToolTipsreportprogress["Thai"]))
		$tdatareportprogress[".isUseToolTips"] = true;
}


	$tdatareportprogress[".NCSearch"] = true;



$tdatareportprogress[".shortTableName"] = "reportprogress";
$tdatareportprogress[".nSecOptions"] = 0;

$tdatareportprogress[".mainTableOwnerID"] = "";
$tdatareportprogress[".entityType"] = 1;
$tdatareportprogress[".connId"] = "mc_at_192_168_1_111";


$tdatareportprogress[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportprogress[".showAddInPopup"] = false;

$tdatareportprogress[".showEditInPopup"] = false;

$tdatareportprogress[".showViewInPopup"] = false;

$tdatareportprogress[".listAjax"] = false;
//	temporary
//$tdatareportprogress[".listAjax"] = false;

	$tdatareportprogress[".audit"] = true;

	$tdatareportprogress[".locking"] = false;


$pages = $tdatareportprogress[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportprogress[".edit"] = true;
	$tdatareportprogress[".afterEditAction"] = 1;
	$tdatareportprogress[".closePopupAfterEdit"] = 1;
	$tdatareportprogress[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportprogress[".add"] = true;
$tdatareportprogress[".afterAddAction"] = 1;
$tdatareportprogress[".closePopupAfterAdd"] = 1;
$tdatareportprogress[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportprogress[".list"] = true;
}



$tdatareportprogress[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportprogress[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportprogress[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportprogress[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportprogress[".printFriendly"] = true;
}



$tdatareportprogress[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportprogress[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportprogress[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportprogress[".isUseAjaxSuggest"] = true;

$tdatareportprogress[".rowHighlite"] = true;



						

$tdatareportprogress[".ajaxCodeSnippetAdded"] = false;

$tdatareportprogress[".buttonsAdded"] = false;

$tdatareportprogress[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportprogress[".isUseTimeForSearch"] = false;


$tdatareportprogress[".badgeColor"] = "B22222";


$tdatareportprogress[".allSearchFields"] = array();
$tdatareportprogress[".filterFields"] = array();
$tdatareportprogress[".requiredSearchFields"] = array();

$tdatareportprogress[".googleLikeFields"] = array();
$tdatareportprogress[".googleLikeFields"][] = "researchProjectNo";
$tdatareportprogress[".googleLikeFields"][] = "researchType";
$tdatareportprogress[".googleLikeFields"][] = "researchRegisterID";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectNameThai";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectNameEng";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectHeadName";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectAppointmentStatus";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectDisburseStatus";
$tdatareportprogress[".googleLikeFields"][] = "researchProjectEndDate";
$tdatareportprogress[".googleLikeFields"][] = "UseTime";
$tdatareportprogress[".googleLikeFields"][] = "overdueTime";
$tdatareportprogress[".googleLikeFields"][] = "trackingProjectDescResult";
$tdatareportprogress[".googleLikeFields"][] = "projectStatus";
$tdatareportprogress[".googleLikeFields"][] = "id";



$tdatareportprogress[".tableType"] = "list";

$tdatareportprogress[".printerPageOrientation"] = 0;
$tdatareportprogress[".nPrinterPageScale"] = 100;

$tdatareportprogress[".nPrinterSplitRecords"] = 40;

$tdatareportprogress[".geocodingEnabled"] = false;










$tdatareportprogress[".pageSize"] = 20;

$tdatareportprogress[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportprogress[".strOrderBy"] = $tstrOrderBy;

$tdatareportprogress[".orderindexes"] = array();


$tdatareportprogress[".sqlHead"] = "SELECT researchScholarshipProposal.researchProjectNo,  researchScholarshipRegister.researchType,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectAppointmentStatus,  researchScholarshipProposal.researchProjectDisburseStatus,  researchScholarshipProposal.researchProjectEndDate,  IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.contractSignDate), DATEDIFF(CURDATE(), researchScholarshipProposal.contractSignDate)) AS UseTime,  IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.researchOperatingPeriodEndDate), DATEDIFF(CURDATE(), researchScholarshipProposal.researchOperatingPeriodEndDate)) AS overdueTime,  researchScholarshipProposal.trackingProjectDescResult,  researchScholarshipProposal.projectStatus,  researchScholarshipProposal.id";
$tdatareportprogress[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportprogress[".sqlWhereExpr"] = "";
$tdatareportprogress[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatareportprogress[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportprogress[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportprogress[".arrGroupsPerPage"] = $arrGPP;

$tdatareportprogress[".highlightSearchResults"] = true;

$tableKeysreportprogress = array();
$tableKeysreportprogress[] = "id";
$tdatareportprogress[".Keys"] = $tableKeysreportprogress;


$tdatareportprogress[".hideMobileList"] = array();




//	researchProjectNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchProjectNo";
	$fdata["GoodName"] = "researchProjectNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNo";

		$fdata["sourceSingle"] = "researchProjectNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectNo"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectNo";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipRegister.researchType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchScholarshipRegister";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "researchType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchType";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "researchRegisterID";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchType"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchType";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchRegisterID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRegisterID";

		$fdata["sourceSingle"] = "researchRegisterID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchRegisterID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchScholarshipRegister";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchRegisterName";

	

	
	$edata["LookupOrderBy"] = "researchRegisterName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "researchType", "lookup" => "researchType" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "researchProjectAffiliationName";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchRegisterID"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchRegisterID";
//	researchProjectNameThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchProjectNameThai";
	$fdata["GoodName"] = "researchProjectNameThai";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectNameThai");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameThai";

		$fdata["sourceSingle"] = "researchProjectNameThai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNameThai";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectNameThai"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectNameThai";
//	researchProjectNameEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectNameEng";
	$fdata["GoodName"] = "researchProjectNameEng";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectNameEng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameEng";

		$fdata["sourceSingle"] = "researchProjectNameEng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNameEng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectNameEng"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectNameEng";
//	researchProjectHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectHeadName";
	$fdata["GoodName"] = "researchProjectHeadName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectHeadName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectHeadName";

		$fdata["sourceSingle"] = "researchProjectHeadName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectHeadName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectHeadName"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectHeadName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationName";

		$fdata["sourceSingle"] = "researchProjectAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchProjectProposal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "researchProjectAffiliationName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchProjectAffiliationName";

	

	
	$edata["LookupOrderBy"] = "researchProjectAffiliationName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "researchRegisterID", "lookup" => "id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectAffiliationName"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectAppointmentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectAppointmentStatus";
	$fdata["GoodName"] = "researchProjectAppointmentStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectAppointmentStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAppointmentStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAppointmentStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectAppointmentStatus"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectAppointmentStatus";
//	researchProjectDisburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectDisburseStatus";
	$fdata["GoodName"] = "researchProjectDisburseStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectDisburseStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDisburseStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectDisburseStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectDisburseStatus"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectDisburseStatus";
//	researchProjectEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectEndDate";
	$fdata["GoodName"] = "researchProjectEndDate";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","researchProjectEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchProjectEndDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectEndDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["researchProjectEndDate"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "researchProjectEndDate";
//	UseTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UseTime";
	$fdata["GoodName"] = "UseTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportProgress","UseTime");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UseTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.contractSignDate), DATEDIFF(CURDATE(), researchScholarshipProposal.contractSignDate))";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["UseTime"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "UseTime";
//	overdueTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "overdueTime";
	$fdata["GoodName"] = "overdueTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportProgress","overdueTime");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "overdueTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.researchOperatingPeriodEndDate), DATEDIFF(CURDATE(), researchScholarshipProposal.researchOperatingPeriodEndDate))";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["overdueTime"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "overdueTime";
//	trackingProjectDescResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingProjectDescResult";
	$fdata["GoodName"] = "trackingProjectDescResult";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","trackingProjectDescResult");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingProjectDescResult";

		$fdata["sourceSingle"] = "trackingProjectDescResult";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.trackingProjectDescResult";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "optionSub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID = 3";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["trackingProjectDescResult"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "trackingProjectDescResult";
//	projectStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "projectStatus";
	$fdata["GoodName"] = "projectStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","projectStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatus";

		$fdata["sourceSingle"] = "projectStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.projectStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "optionSub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID = 1";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["projectStatus"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "projectStatus";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportProgress","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportprogress["id"] = $fdata;
		$tdatareportprogress[".searchableFields"][] = "id";


$tables_data["ReportProgress"]=&$tdatareportprogress;
$field_labels["ReportProgress"] = &$fieldLabelsreportprogress;
$fieldToolTips["ReportProgress"] = &$fieldToolTipsreportprogress;
$placeHolders["ReportProgress"] = &$placeHoldersreportprogress;
$page_titles["ReportProgress"] = &$pageTitlesreportprogress;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportProgress"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportProgress"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportprogress()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.researchProjectNo,  researchScholarshipRegister.researchType,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectAppointmentStatus,  researchScholarshipProposal.researchProjectDisburseStatus,  researchScholarshipProposal.researchProjectEndDate,  IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.contractSignDate), DATEDIFF(CURDATE(), researchScholarshipProposal.contractSignDate)) AS UseTime,  IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.researchOperatingPeriodEndDate), DATEDIFF(CURDATE(), researchScholarshipProposal.researchOperatingPeriodEndDate)) AS overdueTime,  researchScholarshipProposal.trackingProjectDescResult,  researchScholarshipProposal.projectStatus,  researchScholarshipProposal.id";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto6["m_sql"] = "researchScholarshipProposal.researchProjectNo";
$proto6["m_srcTableName"] = "ReportProgress";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "ReportProgress"
));

$proto8["m_sql"] = "researchScholarshipRegister.researchType";
$proto8["m_srcTableName"] = "ReportProgress";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto10["m_sql"] = "researchScholarshipProposal.researchRegisterID";
$proto10["m_srcTableName"] = "ReportProgress";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameThai",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto12["m_sql"] = "researchScholarshipProposal.researchProjectNameThai";
$proto12["m_srcTableName"] = "ReportProgress";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameEng",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto14["m_sql"] = "researchScholarshipProposal.researchProjectNameEng";
$proto14["m_srcTableName"] = "ReportProgress";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectHeadName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto16["m_sql"] = "researchScholarshipProposal.researchProjectHeadName";
$proto16["m_srcTableName"] = "ReportProgress";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto18["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationName";
$proto18["m_srcTableName"] = "ReportProgress";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAppointmentStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto20["m_sql"] = "researchScholarshipProposal.researchProjectAppointmentStatus";
$proto20["m_srcTableName"] = "ReportProgress";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDisburseStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto22["m_sql"] = "researchScholarshipProposal.researchProjectDisburseStatus";
$proto22["m_srcTableName"] = "ReportProgress";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectEndDate",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto24["m_sql"] = "researchScholarshipProposal.researchProjectEndDate";
$proto24["m_srcTableName"] = "ReportProgress";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ'"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.contractSignDate)"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEDIFF(CURDATE(), researchScholarshipProposal.contractSignDate)"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.contractSignDate), DATEDIFF(CURDATE(), researchScholarshipProposal.contractSignDate))";
$proto26["m_srcTableName"] = "ReportProgress";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "UseTime";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ'"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.researchOperatingPeriodEndDate)"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEDIFF(CURDATE(), researchScholarshipProposal.researchOperatingPeriodEndDate)"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "IF(researchScholarshipProposal.projectStatus  = 'สิ้นสุดโครงการ', DATEDIFF(researchScholarshipProposal.researchProjectEndDate, researchScholarshipProposal.researchOperatingPeriodEndDate), DATEDIFF(CURDATE(), researchScholarshipProposal.researchOperatingPeriodEndDate))";
$proto31["m_srcTableName"] = "ReportProgress";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "overdueTime";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "trackingProjectDescResult",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto36["m_sql"] = "researchScholarshipProposal.trackingProjectDescResult";
$proto36["m_srcTableName"] = "ReportProgress";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto38["m_sql"] = "researchScholarshipProposal.projectStatus";
$proto38["m_srcTableName"] = "ReportProgress";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto40["m_sql"] = "researchScholarshipProposal.id";
$proto40["m_srcTableName"] = "ReportProgress";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "researchScholarshipProposal";
$proto43["m_srcTableName"] = "ReportProgress";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "researchRegisterID";
$proto43["m_columns"][] = "researchProjectNo";
$proto43["m_columns"][] = "researchProjectGroupName";
$proto43["m_columns"][] = "researchProjectNameThai";
$proto43["m_columns"][] = "researchProjectNameEng";
$proto43["m_columns"][] = "researchProjectPeriodYear";
$proto43["m_columns"][] = "researchProjectPeriodMonth";
$proto43["m_columns"][] = "researchProjectStartDate";
$proto43["m_columns"][] = "researchProjectEndDate";
$proto43["m_columns"][] = "researchOperatingPeriodEndDate";
$proto43["m_columns"][] = "researchProjectRequestedBudget";
$proto43["m_columns"][] = "researchProjectDepartment";
$proto43["m_columns"][] = "researchProjectMainField";
$proto43["m_columns"][] = "researchProjectSubField";
$proto43["m_columns"][] = "researchProjectHeadName";
$proto43["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto43["m_columns"][] = "researchProjectAffiliationName";
$proto43["m_columns"][] = "researchProjectAffiliationPosition";
$proto43["m_columns"][] = "researchProjectSubAffiliationName";
$proto43["m_columns"][] = "researchProjectAffiliationMobile";
$proto43["m_columns"][] = "researchProjectAffiliationTelephone";
$proto43["m_columns"][] = "researchProjectAffiliationEmail";
$proto43["m_columns"][] = "researchProjectFile";
$proto43["m_columns"][] = "researchProjectBankAccountName";
$proto43["m_columns"][] = "researchProjectBankNo";
$proto43["m_columns"][] = "researchProjectBankName";
$proto43["m_columns"][] = "researchProjectStatus";
$proto43["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto43["m_columns"][] = "researchProjectAppointmentStatus";
$proto43["m_columns"][] = "researchProjectDisburseStatus";
$proto43["m_columns"][] = "contractSignDate";
$proto43["m_columns"][] = "contractSignFile";
$proto43["m_columns"][] = "projectStatusDesc";
$proto43["m_columns"][] = "projectStatus";
$proto43["m_columns"][] = "trackingProjectDesc";
$proto43["m_columns"][] = "trackingProjectDescResult";
$proto43["m_columns"][] = "geographiesID";
$proto43["m_columns"][] = "geographiesName";
$proto43["m_columns"][] = "provincesID";
$proto43["m_columns"][] = "provincesName";
$proto43["m_columns"][] = "districtsID";
$proto43["m_columns"][] = "districtsName";
$proto43["m_columns"][] = "amphuresID";
$proto43["m_columns"][] = "amphuresName";
$proto43["m_columns"][] = "entryUserName";
$proto43["m_columns"][] = "entryTime";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "researchScholarshipProposal";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "ReportProgress";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "researchScholarshipRegister";
$proto47["m_srcTableName"] = "ReportProgress";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "researchRegisterNo";
$proto47["m_columns"][] = "researchRegisterName";
$proto47["m_columns"][] = "researchRegisterStartDate";
$proto47["m_columns"][] = "researchRegisterEndDate";
$proto47["m_columns"][] = "researchRegisterFile";
$proto47["m_columns"][] = "researchType";
$proto47["m_columns"][] = "researchRegisterStatus";
$proto47["m_columns"][] = "entryUserName";
$proto47["m_columns"][] = "entryTime";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "ReportProgress";
$proto48=array();
$proto48["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportProgress"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= researchScholarshipRegister.id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportProgress";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportprogress = createSqlQuery_reportprogress();


	
				;

															

$tdatareportprogress[".sqlquery"] = $queryData_reportprogress;



include_once(getabspath("include/reportprogress_events.php"));
$tableEvents["ReportProgress"] = new eventclass_reportprogress;
$tdatareportprogress[".hasEvents"] = true;

?>