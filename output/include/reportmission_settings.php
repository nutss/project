<?php
$tdatareportmission = array();
$tdatareportmission[".searchableFields"] = array();
$tdatareportmission[".ShortName"] = "reportmission";
$tdatareportmission[".OwnerID"] = "";
$tdatareportmission[".OriginalTable"] = "missionFollow";


$tdatareportmission[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatareportmission[".originalPagesByType"] = $tdatareportmission[".pagesByType"];
$tdatareportmission[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatareportmission[".originalPages"] = $tdatareportmission[".pages"];
$tdatareportmission[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatareportmission[".originalDefaultPages"] = $tdatareportmission[".defaultPages"];

//	field labels
$fieldLabelsreportmission = array();
$fieldToolTipsreportmission = array();
$pageTitlesreportmission = array();
$placeHoldersreportmission = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmission["English"] = array();
	$fieldToolTipsreportmission["English"] = array();
	$placeHoldersreportmission["English"] = array();
	$pageTitlesreportmission["English"] = array();
	$fieldLabelsreportmission["English"]["id"] = "ID";
	$fieldToolTipsreportmission["English"]["id"] = "";
	$placeHoldersreportmission["English"]["id"] = "";
	$fieldLabelsreportmission["English"]["missionFollowNo"] = "Mission Follow No";
	$fieldToolTipsreportmission["English"]["missionFollowNo"] = "";
	$placeHoldersreportmission["English"]["missionFollowNo"] = "";
	$fieldLabelsreportmission["English"]["missionFollowName"] = "Mission Follow Name";
	$fieldToolTipsreportmission["English"]["missionFollowName"] = "";
	$placeHoldersreportmission["English"]["missionFollowName"] = "";
	$fieldLabelsreportmission["English"]["missionFollowEndDate"] = "Mission Follow End Date";
	$fieldToolTipsreportmission["English"]["missionFollowEndDate"] = "";
	$placeHoldersreportmission["English"]["missionFollowEndDate"] = "";
	$fieldLabelsreportmission["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsreportmission["English"]["entryUserName"] = "";
	$placeHoldersreportmission["English"]["entryUserName"] = "";
	$fieldLabelsreportmission["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldToolTipsreportmission["English"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportmission["English"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportmission["English"]["UseTime"] = "Use Time";
	$fieldToolTipsreportmission["English"]["UseTime"] = "";
	$placeHoldersreportmission["English"]["UseTime"] = "";
	$fieldLabelsreportmission["English"]["overdueTime"] = "Overdue Time";
	$fieldToolTipsreportmission["English"]["overdueTime"] = "";
	$placeHoldersreportmission["English"]["overdueTime"] = "";
	$fieldLabelsreportmission["English"]["missionFollowStartDate"] = "Mission Follow Start Date";
	$fieldToolTipsreportmission["English"]["missionFollowStartDate"] = "";
	$placeHoldersreportmission["English"]["missionFollowStartDate"] = "";
	$fieldLabelsreportmission["English"]["missionFollowActionStatus"] = "Mission Follow Action Status";
	$fieldToolTipsreportmission["English"]["missionFollowActionStatus"] = "";
	$placeHoldersreportmission["English"]["missionFollowActionStatus"] = "";
	$fieldLabelsreportmission["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportmission["English"]["missionFollowID"] = "";
	$placeHoldersreportmission["English"]["missionFollowID"] = "";
	if (count($fieldToolTipsreportmission["English"]))
		$tdatareportmission[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmission["Thai"] = array();
	$fieldToolTipsreportmission["Thai"] = array();
	$placeHoldersreportmission["Thai"] = array();
	$pageTitlesreportmission["Thai"] = array();
	$fieldLabelsreportmission["Thai"]["id"] = "";
	$fieldToolTipsreportmission["Thai"]["id"] = "";
	$placeHoldersreportmission["Thai"]["id"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowNo"] = "รหัสภารกิจ";
	$fieldToolTipsreportmission["Thai"]["missionFollowNo"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowNo"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowName"] = "ภารกิจ";
	$fieldToolTipsreportmission["Thai"]["missionFollowName"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowName"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowEndDate"] = "สิ้นสุดภารกิจ";
	$fieldToolTipsreportmission["Thai"]["missionFollowEndDate"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowEndDate"] = "";
	$fieldLabelsreportmission["Thai"]["entryUserName"] = "มอบหมายโดย";
	$fieldToolTipsreportmission["Thai"]["entryUserName"] = "";
	$placeHoldersreportmission["Thai"]["entryUserName"] = "";
	$fieldLabelsreportmission["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldToolTipsreportmission["Thai"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportmission["Thai"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportmission["Thai"]["UseTime"] = "เวลาที่ใช้";
	$fieldToolTipsreportmission["Thai"]["UseTime"] = "";
	$placeHoldersreportmission["Thai"]["UseTime"] = "";
	$fieldLabelsreportmission["Thai"]["overdueTime"] = "เกินกำหนด";
	$fieldToolTipsreportmission["Thai"]["overdueTime"] = "";
	$placeHoldersreportmission["Thai"]["overdueTime"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowStartDate"] = "เริ่มต้นภารกิจ";
	$fieldToolTipsreportmission["Thai"]["missionFollowStartDate"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowStartDate"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowActionStatus"] = "สถานะ";
	$fieldToolTipsreportmission["Thai"]["missionFollowActionStatus"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowActionStatus"] = "";
	$fieldLabelsreportmission["Thai"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportmission["Thai"]["missionFollowID"] = "";
	$placeHoldersreportmission["Thai"]["missionFollowID"] = "";
	if (count($fieldToolTipsreportmission["Thai"]))
		$tdatareportmission[".isUseToolTips"] = true;
}


	$tdatareportmission[".NCSearch"] = true;



$tdatareportmission[".shortTableName"] = "reportmission";
$tdatareportmission[".nSecOptions"] = 0;

$tdatareportmission[".mainTableOwnerID"] = "";
$tdatareportmission[".entityType"] = 1;
$tdatareportmission[".connId"] = "mc_at_192_168_1_111";


$tdatareportmission[".strOriginalTableName"] = "missionFollow";

	



$tdatareportmission[".showAddInPopup"] = false;

$tdatareportmission[".showEditInPopup"] = false;

$tdatareportmission[".showViewInPopup"] = false;

$tdatareportmission[".listAjax"] = false;
//	temporary
//$tdatareportmission[".listAjax"] = false;

	$tdatareportmission[".audit"] = true;

	$tdatareportmission[".locking"] = false;


$pages = $tdatareportmission[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmission[".edit"] = true;
	$tdatareportmission[".afterEditAction"] = 1;
	$tdatareportmission[".closePopupAfterEdit"] = 1;
	$tdatareportmission[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmission[".add"] = true;
$tdatareportmission[".afterAddAction"] = 1;
$tdatareportmission[".closePopupAfterAdd"] = 1;
$tdatareportmission[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmission[".list"] = true;
}



$tdatareportmission[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmission[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmission[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmission[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmission[".printFriendly"] = true;
}



$tdatareportmission[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmission[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmission[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmission[".isUseAjaxSuggest"] = true;

$tdatareportmission[".rowHighlite"] = true;



						

$tdatareportmission[".ajaxCodeSnippetAdded"] = false;

$tdatareportmission[".buttonsAdded"] = false;

$tdatareportmission[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportmission[".isUseTimeForSearch"] = false;


$tdatareportmission[".badgeColor"] = "edca00";


$tdatareportmission[".allSearchFields"] = array();
$tdatareportmission[".filterFields"] = array();
$tdatareportmission[".requiredSearchFields"] = array();

$tdatareportmission[".googleLikeFields"] = array();
$tdatareportmission[".googleLikeFields"][] = "id";
$tdatareportmission[".googleLikeFields"][] = "missionFollowID";
$tdatareportmission[".googleLikeFields"][] = "missionFollowNo";
$tdatareportmission[".googleLikeFields"][] = "missionFollowName";
$tdatareportmission[".googleLikeFields"][] = "missionAssignmentResponsibleName";
$tdatareportmission[".googleLikeFields"][] = "entryUserName";
$tdatareportmission[".googleLikeFields"][] = "missionFollowStartDate";
$tdatareportmission[".googleLikeFields"][] = "missionFollowEndDate";
$tdatareportmission[".googleLikeFields"][] = "UseTime";
$tdatareportmission[".googleLikeFields"][] = "overdueTime";
$tdatareportmission[".googleLikeFields"][] = "missionFollowActionStatus";



$tdatareportmission[".tableType"] = "list";

$tdatareportmission[".printerPageOrientation"] = 0;
$tdatareportmission[".nPrinterPageScale"] = 100;

$tdatareportmission[".nPrinterSplitRecords"] = 40;

$tdatareportmission[".geocodingEnabled"] = false;










$tdatareportmission[".pageSize"] = 20;

$tdatareportmission[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmission[".strOrderBy"] = $tstrOrderBy;

$tdatareportmission[".orderindexes"] = array();


$tdatareportmission[".sqlHead"] = "SELECT missionAssignment.id,  missionAssignment.missionFollowID,  missionFollow.missionFollowNo,  missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName,  missionAssignment.entryUserName,  missionFollow.missionFollowStartDate,  missionFollow.missionFollowEndDate,  DATEDIFF(missionFollow.missionFollowEndDate, missionFollow.missionFollowStartDate) AS UseTime,  DATEDIFF(CURDATE(),missionFollow.missionFollowEndDate) AS overdueTime,  missionFollow.missionFollowActionStatus";
$tdatareportmission[".sqlFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$tdatareportmission[".sqlWhereExpr"] = "";
$tdatareportmission[".sqlTail"] = "";

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
$tdatareportmission[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmission[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmission[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmission[".highlightSearchResults"] = true;

$tableKeysreportmission = array();
$tableKeysreportmission[] = "id";
$tdatareportmission[".Keys"] = $tableKeysreportmission;


$tdatareportmission[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportMission","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.id";

	
	
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


	$tdatareportmission["id"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "id";
//	missionFollowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "missionFollowID";
	$fdata["GoodName"] = "missionFollowID";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionFollowID";

	
	
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


	$tdatareportmission["missionFollowID"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowID";
//	missionFollowNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionFollowNo";
	$fdata["GoodName"] = "missionFollowNo";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowNo";

		$fdata["sourceSingle"] = "missionFollowNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowNo";

	
	
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


	$tdatareportmission["missionFollowNo"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowNo";
//	missionFollowName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionFollowName";
	$fdata["GoodName"] = "missionFollowName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowName";

		$fdata["sourceSingle"] = "missionFollowName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowName";

	
	
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
	$edata["LookupTable"] = "missionFollow";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "missionFollowName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "missionFollowName";

	

	
	$edata["LookupOrderBy"] = "missionFollowNo";

	
	
	
	

	
	
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


	$tdatareportmission["missionFollowName"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowName";
//	missionAssignmentResponsibleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "missionAssignmentResponsibleName";
	$fdata["GoodName"] = "missionAssignmentResponsibleName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionAssignmentResponsibleName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentResponsibleName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionAssignmentResponsibleName";

	
	
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
	$edata["LookupTable"] = "staffUsers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffFullName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffFullName";

	

	
	$edata["LookupOrderBy"] = "staffFullName";

	
	
	
	

	
	
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


	$tdatareportmission["missionAssignmentResponsibleName"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionAssignmentResponsibleName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportMission","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.entryUserName";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatareportmission["entryUserName"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "entryUserName";
//	missionFollowStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "missionFollowStartDate";
	$fdata["GoodName"] = "missionFollowStartDate";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "missionFollowStartDate";

		$fdata["sourceSingle"] = "missionFollowStartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowStartDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatareportmission["missionFollowStartDate"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowStartDate";
//	missionFollowEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "missionFollowEndDate";
	$fdata["GoodName"] = "missionFollowEndDate";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "missionFollowEndDate";

		$fdata["sourceSingle"] = "missionFollowEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowEndDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatareportmission["missionFollowEndDate"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowEndDate";
//	UseTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UseTime";
	$fdata["GoodName"] = "UseTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMission","UseTime");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UseTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(missionFollow.missionFollowEndDate, missionFollow.missionFollowStartDate)";

	
	
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


	$tdatareportmission["UseTime"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "UseTime";
//	overdueTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "overdueTime";
	$fdata["GoodName"] = "overdueTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMission","overdueTime");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "overdueTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(CURDATE(),missionFollow.missionFollowEndDate)";

	
	
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


	$tdatareportmission["overdueTime"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "overdueTime";
//	missionFollowActionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "missionFollowActionStatus";
	$fdata["GoodName"] = "missionFollowActionStatus";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportMission","missionFollowActionStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus";

		$fdata["sourceSingle"] = "missionFollowActionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowActionStatus";

	
	
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


	$tdatareportmission["missionFollowActionStatus"] = $fdata;
		$tdatareportmission[".searchableFields"][] = "missionFollowActionStatus";


$tables_data["ReportMission"]=&$tdatareportmission;
$field_labels["ReportMission"] = &$fieldLabelsreportmission;
$fieldToolTips["ReportMission"] = &$fieldToolTipsreportmission;
$placeHolders["ReportMission"] = &$placeHoldersreportmission;
$page_titles["ReportMission"] = &$pageTitlesreportmission;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMission"] = array();
//	ReportGraphmissionFollow
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportGraphmissionFollow";
		$detailsParam["dOriginalTable"] = "missionFollow";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "reportgraphmissionfollow";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportGraphmissionFollow");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportMission"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportMission"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportMission"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportMission"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportMission"][$dIndex]["detailKeys"][]="id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMission"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmission()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "missionAssignment.id,  missionAssignment.missionFollowID,  missionFollow.missionFollowNo,  missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName,  missionAssignment.entryUserName,  missionFollow.missionFollowStartDate,  missionFollow.missionFollowEndDate,  DATEDIFF(missionFollow.missionFollowEndDate, missionFollow.missionFollowStartDate) AS UseTime,  DATEDIFF(CURDATE(),missionFollow.missionFollowEndDate) AS overdueTime,  missionFollow.missionFollowActionStatus";
$proto0["m_strFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
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
	"m_strName" => "id",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportMission"
));

$proto6["m_sql"] = "missionAssignment.id";
$proto6["m_srcTableName"] = "ReportMission";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowID",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportMission"
));

$proto8["m_sql"] = "missionAssignment.missionFollowID";
$proto8["m_srcTableName"] = "ReportMission";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowNo",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto10["m_sql"] = "missionFollow.missionFollowNo";
$proto10["m_srcTableName"] = "ReportMission";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto12["m_sql"] = "missionFollow.missionFollowName";
$proto12["m_srcTableName"] = "ReportMission";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentResponsibleName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportMission"
));

$proto14["m_sql"] = "missionAssignment.missionAssignmentResponsibleName";
$proto14["m_srcTableName"] = "ReportMission";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportMission"
));

$proto16["m_sql"] = "missionAssignment.entryUserName";
$proto16["m_srcTableName"] = "ReportMission";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowStartDate",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto18["m_sql"] = "missionFollow.missionFollowStartDate";
$proto18["m_srcTableName"] = "ReportMission";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowEndDate",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto20["m_sql"] = "missionFollow.missionFollowEndDate";
$proto20["m_srcTableName"] = "ReportMission";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowEndDate"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowStartDate"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "DATEDIFF(missionFollow.missionFollowEndDate, missionFollow.missionFollowStartDate)";
$proto22["m_srcTableName"] = "ReportMission";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "UseTime";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CURDATE()"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowEndDate"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "DATEDIFF(CURDATE(),missionFollow.missionFollowEndDate)";
$proto26["m_srcTableName"] = "ReportMission";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "overdueTime";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowActionStatus",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto30["m_sql"] = "missionFollow.missionFollowActionStatus";
$proto30["m_srcTableName"] = "ReportMission";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "missionFollow";
$proto33["m_srcTableName"] = "ReportMission";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "missionFollowNo";
$proto33["m_columns"][] = "missionFollowName";
$proto33["m_columns"][] = "missionFollowStartDate";
$proto33["m_columns"][] = "missionFollowEndDate";
$proto33["m_columns"][] = "missionFollowDocFile";
$proto33["m_columns"][] = "missionFollowActionStatus";
$proto33["m_columns"][] = "missionFollowStatus";
$proto33["m_columns"][] = "missionFollowHeadName";
$proto33["m_columns"][] = "entryUserName";
$proto33["m_columns"][] = "entryTime";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "missionFollow";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "ReportMission";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "missionAssignment";
$proto37["m_srcTableName"] = "ReportMission";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "missionFollowID";
$proto37["m_columns"][] = "missionAssignmentNo";
$proto37["m_columns"][] = "missionAssignmentName";
$proto37["m_columns"][] = "missionAssignmentFile";
$proto37["m_columns"][] = "missionAssignmentDesc";
$proto37["m_columns"][] = "missionAssignmentConsiderName";
$proto37["m_columns"][] = "missionAssignmentConsiderValue";
$proto37["m_columns"][] = "missionAssignmentResponsibleName";
$proto37["m_columns"][] = "entryUserName";
$proto37["m_columns"][] = "entryTime";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "ReportMission";
$proto38=array();
$proto38["m_sql"] = "missionFollow.id = missionAssignment.missionFollowID";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportMission"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= missionAssignment.missionFollowID";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMission";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmission = createSqlQuery_reportmission();


	
				;

											

$tdatareportmission[".sqlquery"] = $queryData_reportmission;



include_once(getabspath("include/reportmission_events.php"));
$tableEvents["ReportMission"] = new eventclass_reportmission;
$tdatareportmission[".hasEvents"] = true;

?>