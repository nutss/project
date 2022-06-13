<?php
$tdatataskdisburselistall = array();
$tdatataskdisburselistall[".searchableFields"] = array();
$tdatataskdisburselistall[".ShortName"] = "taskdisburselistall";
$tdatataskdisburselistall[".OwnerID"] = "";
$tdatataskdisburselistall[".OriginalTable"] = "taskDisburse";


$tdatataskdisburselistall[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisburselistall[".originalPagesByType"] = $tdatataskdisburselistall[".pagesByType"];
$tdatataskdisburselistall[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisburselistall[".originalPages"] = $tdatataskdisburselistall[".pages"];
$tdatataskdisburselistall[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisburselistall[".originalDefaultPages"] = $tdatataskdisburselistall[".defaultPages"];

//	field labels
$fieldLabelstaskdisburselistall = array();
$fieldToolTipstaskdisburselistall = array();
$pageTitlestaskdisburselistall = array();
$placeHolderstaskdisburselistall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisburselistall["English"] = array();
	$fieldToolTipstaskdisburselistall["English"] = array();
	$placeHolderstaskdisburselistall["English"] = array();
	$pageTitlestaskdisburselistall["English"] = array();
	$fieldLabelstaskdisburselistall["English"]["id"] = "ID";
	$fieldToolTipstaskdisburselistall["English"]["id"] = "";
	$placeHolderstaskdisburselistall["English"]["id"] = "";
	$fieldLabelstaskdisburselistall["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskdisburselistall["English"]["projectID"] = "";
	$placeHolderstaskdisburselistall["English"]["projectID"] = "";
	$fieldLabelstaskdisburselistall["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisburselistall["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselistall["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselistall["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisburselistall["English"]["progressStep"] = "";
	$placeHolderstaskdisburselistall["English"]["progressStep"] = "";
	$fieldLabelstaskdisburselistall["English"]["disburseStatus"] = "Disburse Status";
	$fieldToolTipstaskdisburselistall["English"]["disburseStatus"] = "";
	$placeHolderstaskdisburselistall["English"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselistall["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisburselistall["English"]["disburseDesc"] = "";
	$placeHolderstaskdisburselistall["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselistall["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisburselistall["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselistall["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselistall["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisburselistall["English"]["disburseAmount"] = "";
	$placeHolderstaskdisburselistall["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselistall["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisburselistall["English"]["entryUserName"] = "";
	$placeHolderstaskdisburselistall["English"]["entryUserName"] = "";
	$fieldLabelstaskdisburselistall["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisburselistall["English"]["entryTime"] = "";
	$placeHolderstaskdisburselistall["English"]["entryTime"] = "";
	$fieldLabelstaskdisburselistall["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisburselistall["English"]["approveStatus"] = "";
	$placeHolderstaskdisburselistall["English"]["approveStatus"] = "";
	$fieldLabelstaskdisburselistall["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisburselistall["English"]["approveDate"] = "";
	$placeHolderstaskdisburselistall["English"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisburselistall["English"]))
		$tdatataskdisburselistall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisburselistall["Thai"] = array();
	$fieldToolTipstaskdisburselistall["Thai"] = array();
	$placeHolderstaskdisburselistall["Thai"] = array();
	$pageTitlestaskdisburselistall["Thai"] = array();
	$fieldLabelstaskdisburselistall["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisburselistall["Thai"]["id"] = "";
	$placeHolderstaskdisburselistall["Thai"]["id"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskdisburselistall["Thai"]["projectID"] = "";
	$placeHolderstaskdisburselistall["Thai"]["projectID"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["trackDisburseDate"] = "วันที่เบิกจ่าย";
	$fieldToolTipstaskdisburselistall["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselistall["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["progressStep"] = "รายละเอียดขั้นตอน";
	$fieldToolTipstaskdisburselistall["Thai"]["progressStep"] = "";
	$placeHolderstaskdisburselistall["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["disburseStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburselistall["Thai"]["disburseStatus"] = "";
	$placeHolderstaskdisburselistall["Thai"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["disburseDesc"] = "รายละเอียดเบิกจ่าย";
	$fieldToolTipstaskdisburselistall["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisburselistall["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisburselistall["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselistall["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["disburseAmount"] = "จำนวนเงินเบิกจ่าย";
	$fieldToolTipstaskdisburselistall["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisburselistall["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskdisburselistall["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisburselistall["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisburselistall["Thai"]["entryTime"] = "";
	$placeHolderstaskdisburselistall["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["approveStatus"] = "สถานะการอนุมัติ";
	$fieldToolTipstaskdisburselistall["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisburselistall["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisburselistall["Thai"]["approveDate"] = "วันที่อนุมัติ";
	$fieldToolTipstaskdisburselistall["Thai"]["approveDate"] = "";
	$placeHolderstaskdisburselistall["Thai"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisburselistall["Thai"]))
		$tdatataskdisburselistall[".isUseToolTips"] = true;
}


	$tdatataskdisburselistall[".NCSearch"] = true;



$tdatataskdisburselistall[".shortTableName"] = "taskdisburselistall";
$tdatataskdisburselistall[".nSecOptions"] = 0;

$tdatataskdisburselistall[".mainTableOwnerID"] = "";
$tdatataskdisburselistall[".entityType"] = 1;
$tdatataskdisburselistall[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisburselistall[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisburselistall[".showAddInPopup"] = false;

$tdatataskdisburselistall[".showEditInPopup"] = false;

$tdatataskdisburselistall[".showViewInPopup"] = false;

$tdatataskdisburselistall[".listAjax"] = false;
//	temporary
//$tdatataskdisburselistall[".listAjax"] = false;

	$tdatataskdisburselistall[".audit"] = false;

	$tdatataskdisburselistall[".locking"] = false;


$pages = $tdatataskdisburselistall[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisburselistall[".edit"] = true;
	$tdatataskdisburselistall[".afterEditAction"] = 0;
	$tdatataskdisburselistall[".closePopupAfterEdit"] = 1;
	$tdatataskdisburselistall[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisburselistall[".add"] = true;
$tdatataskdisburselistall[".afterAddAction"] = 1;
$tdatataskdisburselistall[".closePopupAfterAdd"] = 1;
$tdatataskdisburselistall[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisburselistall[".list"] = true;
}



$tdatataskdisburselistall[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisburselistall[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisburselistall[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisburselistall[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisburselistall[".printFriendly"] = true;
}



$tdatataskdisburselistall[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisburselistall[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisburselistall[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisburselistall[".isUseAjaxSuggest"] = true;

$tdatataskdisburselistall[".rowHighlite"] = true;





$tdatataskdisburselistall[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisburselistall[".buttonsAdded"] = false;

$tdatataskdisburselistall[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisburselistall[".isUseTimeForSearch"] = false;


$tdatataskdisburselistall[".badgeColor"] = "DC143C";


$tdatataskdisburselistall[".allSearchFields"] = array();
$tdatataskdisburselistall[".filterFields"] = array();
$tdatataskdisburselistall[".requiredSearchFields"] = array();

$tdatataskdisburselistall[".googleLikeFields"] = array();
$tdatataskdisburselistall[".googleLikeFields"][] = "id";
$tdatataskdisburselistall[".googleLikeFields"][] = "projectID";
$tdatataskdisburselistall[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisburselistall[".googleLikeFields"][] = "progressStep";
$tdatataskdisburselistall[".googleLikeFields"][] = "disburseStatus";
$tdatataskdisburselistall[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisburselistall[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisburselistall[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisburselistall[".googleLikeFields"][] = "approveStatus";
$tdatataskdisburselistall[".googleLikeFields"][] = "approveDate";
$tdatataskdisburselistall[".googleLikeFields"][] = "entryUserName";
$tdatataskdisburselistall[".googleLikeFields"][] = "entryTime";



$tdatataskdisburselistall[".tableType"] = "list";

$tdatataskdisburselistall[".printerPageOrientation"] = 0;
$tdatataskdisburselistall[".nPrinterPageScale"] = 100;

$tdatataskdisburselistall[".nPrinterSplitRecords"] = 40;

$tdatataskdisburselistall[".geocodingEnabled"] = false;










$tdatataskdisburselistall[".pageSize"] = 20;

$tdatataskdisburselistall[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
$tdatataskdisburselistall[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisburselistall[".orderindexes"] = array();
	$tdatataskdisburselistall[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "taskDisburse.projectID");

	$tdatataskdisburselistall[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "taskDisburse.trackDisburseDate");



$tdatataskdisburselistall[".sqlHead"] = "SELECT taskDisburse.id,  	taskDisburse.projectID,  	taskDisburse.trackDisburseDate,  	taskDisburse.progressStep,  	taskDisburse.disburseStatus,  	taskDisburse.disburseDesc,  	taskDisburse.disburseAmount,  	taskDisburse.disburseAttFille,  	taskDisburse.approveStatus,  	taskDisburse.approveDate,  	project.entryUserName,  	taskDisburse.entryTime";
$tdatataskdisburselistall[".sqlFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$tdatataskdisburselistall[".sqlWhereExpr"] = "";
$tdatataskdisburselistall[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisburselistall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisburselistall[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisburselistall[".highlightSearchResults"] = true;

$tableKeystaskdisburselistall = array();
$tableKeystaskdisburselistall[] = "id";
$tdatataskdisburselistall[".Keys"] = $tableKeystaskdisburselistall;


$tdatataskdisburselistall[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.id";

	
	
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


	$tdatataskdisburselistall["id"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.projectID";

	
	
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
	$edata["LookupTable"] = "project";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "projectName";

	

	
	$edata["LookupOrderBy"] = "projectName";

	
	
	
	

	
	
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


	$tdatataskdisburselistall["projectID"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","trackDisburseDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "trackDisburseDate";

		$fdata["sourceSingle"] = "trackDisburseDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.trackDisburseDate";

	
	
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


	$tdatataskdisburselistall["trackDisburseDate"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","progressStep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStep";

		$fdata["sourceSingle"] = "progressStep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.progressStep";

	
	
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
	$edata["LookupTable"] = "ProjectStep";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stepName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stepName";

	

	
	$edata["LookupOrderBy"] = "stepNumber";

	
	
	
	

	
	
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


	$tdatataskdisburselistall["progressStep"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "progressStep";
//	disburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseStatus";
	$fdata["GoodName"] = "disburseStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","disburseStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disburseStatus";

		$fdata["sourceSingle"] = "disburseStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.disburseStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatataskdisburselistall["disburseStatus"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "disburseStatus";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","disburseDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disburseDesc";

		$fdata["sourceSingle"] = "disburseDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.disburseDesc";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatataskdisburselistall["disburseDesc"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","disburseAmount");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "disburseAmount";

		$fdata["sourceSingle"] = "disburseAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.disburseAmount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatataskdisburselistall["disburseAmount"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","disburseAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "disburseAttFille";

		$fdata["sourceSingle"] = "disburseAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.disburseAttFille";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatataskdisburselistall["disburseAttFille"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.approveStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatataskdisburselistall["approveStatus"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.approveDate";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatataskdisburselistall["approveDate"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.entryUserName";

	
	
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


	$tdatataskdisburselistall["entryUserName"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListAll","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskDisburse.entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatataskdisburselistall["entryTime"] = $fdata;
		$tdatataskdisburselistall[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseListAll"]=&$tdatataskdisburselistall;
$field_labels["taskDisburseListAll"] = &$fieldLabelstaskdisburselistall;
$fieldToolTips["taskDisburseListAll"] = &$fieldToolTipstaskdisburselistall;
$placeHolders["taskDisburseListAll"] = &$placeHolderstaskdisburselistall;
$page_titles["taskDisburseListAll"] = &$pageTitlestaskdisburselistall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseListAll"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseListAll"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisburselistall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskDisburse.id,  	taskDisburse.projectID,  	taskDisburse.trackDisburseDate,  	taskDisburse.progressStep,  	taskDisburse.disburseStatus,  	taskDisburse.disburseDesc,  	taskDisburse.disburseAmount,  	taskDisburse.disburseAttFille,  	taskDisburse.approveStatus,  	taskDisburse.approveDate,  	project.entryUserName,  	taskDisburse.entryTime";
$proto0["m_strFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
	
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
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto6["m_sql"] = "taskDisburse.id";
$proto6["m_srcTableName"] = "taskDisburseListAll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto8["m_sql"] = "taskDisburse.projectID";
$proto8["m_srcTableName"] = "taskDisburseListAll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto10["m_sql"] = "taskDisburse.trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseListAll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto12["m_sql"] = "taskDisburse.progressStep";
$proto12["m_srcTableName"] = "taskDisburseListAll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto14["m_sql"] = "taskDisburse.disburseStatus";
$proto14["m_srcTableName"] = "taskDisburseListAll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto16["m_sql"] = "taskDisburse.disburseDesc";
$proto16["m_srcTableName"] = "taskDisburseListAll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto18["m_sql"] = "taskDisburse.disburseAmount";
$proto18["m_srcTableName"] = "taskDisburseListAll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto20["m_sql"] = "taskDisburse.disburseAttFille";
$proto20["m_srcTableName"] = "taskDisburseListAll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto22["m_sql"] = "taskDisburse.approveStatus";
$proto22["m_srcTableName"] = "taskDisburseListAll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto24["m_sql"] = "taskDisburse.approveDate";
$proto24["m_srcTableName"] = "taskDisburseListAll";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto26["m_sql"] = "project.entryUserName";
$proto26["m_srcTableName"] = "taskDisburseListAll";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto28["m_sql"] = "taskDisburse.entryTime";
$proto28["m_srcTableName"] = "taskDisburseListAll";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburseListAll";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "projectID";
$proto31["m_columns"][] = "trackDisburseDate";
$proto31["m_columns"][] = "progressStep";
$proto31["m_columns"][] = "disburseStatus";
$proto31["m_columns"][] = "disburseDesc";
$proto31["m_columns"][] = "disburseAmount";
$proto31["m_columns"][] = "disburseAttFille";
$proto31["m_columns"][] = "approveStatus";
$proto31["m_columns"][] = "approveDate";
$proto31["m_columns"][] = "entryUserName";
$proto31["m_columns"][] = "entryTime";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "taskDisburse";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "taskDisburseListAll";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "project";
$proto35["m_srcTableName"] = "taskDisburseListAll";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "projectName";
$proto35["m_columns"][] = "projectStart";
$proto35["m_columns"][] = "projectEnd";
$proto35["m_columns"][] = "researchFundingType";
$proto35["m_columns"][] = "contactName";
$proto35["m_columns"][] = "approveStatus";
$proto35["m_columns"][] = "approveDate";
$proto35["m_columns"][] = "DocumentCheckStatus";
$proto35["m_columns"][] = "projectBudgetCost";
$proto35["m_columns"][] = "projectBudgetRemain";
$proto35["m_columns"][] = "projectFile";
$proto35["m_columns"][] = "entryUserName";
$proto35["m_columns"][] = "entryTime";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "taskDisburseListAll";
$proto36=array();
$proto36["m_sql"] = "taskDisburse.projectID = project.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= project.id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListAll"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskDisburseListAll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisburselistall = createSqlQuery_taskdisburselistall();


	
				;

												

$tdatataskdisburselistall[".sqlquery"] = $queryData_taskdisburselistall;



include_once(getabspath("include/taskdisburselistall_events.php"));
$tableEvents["taskDisburseListAll"] = new eventclass_taskdisburselistall;
$tdatataskdisburselistall[".hasEvents"] = true;

$query = &$queryData_taskdisburselistall;
$table = "taskDisburseListAll";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>