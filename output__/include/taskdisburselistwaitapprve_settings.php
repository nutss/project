<?php
$tdatataskdisburselistwaitapprve = array();
$tdatataskdisburselistwaitapprve[".searchableFields"] = array();
$tdatataskdisburselistwaitapprve[".ShortName"] = "taskdisburselistwaitapprve";
$tdatataskdisburselistwaitapprve[".OwnerID"] = "";
$tdatataskdisburselistwaitapprve[".OriginalTable"] = "taskDisburse";


$tdatataskdisburselistwaitapprve[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisburselistwaitapprve[".originalPagesByType"] = $tdatataskdisburselistwaitapprve[".pagesByType"];
$tdatataskdisburselistwaitapprve[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisburselistwaitapprve[".originalPages"] = $tdatataskdisburselistwaitapprve[".pages"];
$tdatataskdisburselistwaitapprve[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisburselistwaitapprve[".originalDefaultPages"] = $tdatataskdisburselistwaitapprve[".defaultPages"];

//	field labels
$fieldLabelstaskdisburselistwaitapprve = array();
$fieldToolTipstaskdisburselistwaitapprve = array();
$pageTitlestaskdisburselistwaitapprve = array();
$placeHolderstaskdisburselistwaitapprve = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisburselistwaitapprve["English"] = array();
	$fieldToolTipstaskdisburselistwaitapprve["English"] = array();
	$placeHolderstaskdisburselistwaitapprve["English"] = array();
	$pageTitlestaskdisburselistwaitapprve["English"] = array();
	$fieldLabelstaskdisburselistwaitapprve["English"]["id"] = "ID";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["id"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["id"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["projectID"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["projectID"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["progressStep"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["progressStep"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["disburseStatus"] = "Disburse Status";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["disburseStatus"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["disburseDesc"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["disburseAmount"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["entryUserName"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["entryUserName"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["entryTime"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["entryTime"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["approveStatus"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["approveStatus"] = "";
	$fieldLabelstaskdisburselistwaitapprve["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisburselistwaitapprve["English"]["approveDate"] = "";
	$placeHolderstaskdisburselistwaitapprve["English"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisburselistwaitapprve["English"]))
		$tdatataskdisburselistwaitapprve[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisburselistwaitapprve["Thai"] = array();
	$fieldToolTipstaskdisburselistwaitapprve["Thai"] = array();
	$placeHolderstaskdisburselistwaitapprve["Thai"] = array();
	$pageTitlestaskdisburselistwaitapprve["Thai"] = array();
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["id"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["id"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["projectID"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["projectID"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["trackDisburseDate"] = "วันที่เบิกจ่าย";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["progressStep"] = "รายละเอียดขั้นตอน";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["progressStep"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["disburseStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["disburseStatus"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["disburseDesc"] = "รายละเอียดเบิกจ่าย";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["disburseAmount"] = "จำนวนเงินเบิกจ่าย";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["entryTime"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["approveStatus"] = "สถานะการอนุมัติ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisburselistwaitapprve["Thai"]["approveDate"] = "วันที่อนุมัติ";
	$fieldToolTipstaskdisburselistwaitapprve["Thai"]["approveDate"] = "";
	$placeHolderstaskdisburselistwaitapprve["Thai"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisburselistwaitapprve["Thai"]))
		$tdatataskdisburselistwaitapprve[".isUseToolTips"] = true;
}


	$tdatataskdisburselistwaitapprve[".NCSearch"] = true;



$tdatataskdisburselistwaitapprve[".shortTableName"] = "taskdisburselistwaitapprve";
$tdatataskdisburselistwaitapprve[".nSecOptions"] = 0;

$tdatataskdisburselistwaitapprve[".mainTableOwnerID"] = "";
$tdatataskdisburselistwaitapprve[".entityType"] = 1;
$tdatataskdisburselistwaitapprve[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisburselistwaitapprve[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisburselistwaitapprve[".showAddInPopup"] = false;

$tdatataskdisburselistwaitapprve[".showEditInPopup"] = false;

$tdatataskdisburselistwaitapprve[".showViewInPopup"] = false;

$tdatataskdisburselistwaitapprve[".listAjax"] = false;
//	temporary
//$tdatataskdisburselistwaitapprve[".listAjax"] = false;

	$tdatataskdisburselistwaitapprve[".audit"] = false;

	$tdatataskdisburselistwaitapprve[".locking"] = false;


$pages = $tdatataskdisburselistwaitapprve[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisburselistwaitapprve[".edit"] = true;
	$tdatataskdisburselistwaitapprve[".afterEditAction"] = 0;
	$tdatataskdisburselistwaitapprve[".closePopupAfterEdit"] = 1;
	$tdatataskdisburselistwaitapprve[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisburselistwaitapprve[".add"] = true;
$tdatataskdisburselistwaitapprve[".afterAddAction"] = 1;
$tdatataskdisburselistwaitapprve[".closePopupAfterAdd"] = 1;
$tdatataskdisburselistwaitapprve[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisburselistwaitapprve[".list"] = true;
}



$tdatataskdisburselistwaitapprve[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisburselistwaitapprve[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisburselistwaitapprve[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisburselistwaitapprve[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisburselistwaitapprve[".printFriendly"] = true;
}



$tdatataskdisburselistwaitapprve[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisburselistwaitapprve[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisburselistwaitapprve[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisburselistwaitapprve[".isUseAjaxSuggest"] = true;

$tdatataskdisburselistwaitapprve[".rowHighlite"] = true;





$tdatataskdisburselistwaitapprve[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisburselistwaitapprve[".buttonsAdded"] = false;

$tdatataskdisburselistwaitapprve[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisburselistwaitapprve[".isUseTimeForSearch"] = false;


$tdatataskdisburselistwaitapprve[".badgeColor"] = "CFAE83";


$tdatataskdisburselistwaitapprve[".allSearchFields"] = array();
$tdatataskdisburselistwaitapprve[".filterFields"] = array();
$tdatataskdisburselistwaitapprve[".requiredSearchFields"] = array();

$tdatataskdisburselistwaitapprve[".googleLikeFields"] = array();
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "id";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "projectID";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "progressStep";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "disburseStatus";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "approveStatus";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "approveDate";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "entryUserName";
$tdatataskdisburselistwaitapprve[".googleLikeFields"][] = "entryTime";



$tdatataskdisburselistwaitapprve[".tableType"] = "list";

$tdatataskdisburselistwaitapprve[".printerPageOrientation"] = 0;
$tdatataskdisburselistwaitapprve[".nPrinterPageScale"] = 100;

$tdatataskdisburselistwaitapprve[".nPrinterSplitRecords"] = 40;

$tdatataskdisburselistwaitapprve[".geocodingEnabled"] = false;










$tdatataskdisburselistwaitapprve[".pageSize"] = 20;

$tdatataskdisburselistwaitapprve[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
$tdatataskdisburselistwaitapprve[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisburselistwaitapprve[".orderindexes"] = array();
	$tdatataskdisburselistwaitapprve[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "taskDisburse.projectID");

	$tdatataskdisburselistwaitapprve[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "taskDisburse.trackDisburseDate");



$tdatataskdisburselistwaitapprve[".sqlHead"] = "  SELECT taskDisburse.id,  taskDisburse.projectID,  taskDisburse.trackDisburseDate,  taskDisburse.progressStep,  taskDisburse.disburseStatus,  taskDisburse.disburseDesc,  taskDisburse.disburseAmount,  taskDisburse.disburseAttFille,  taskDisburse.approveStatus,  taskDisburse.approveDate,  project.entryUserName,  taskDisburse.entryTime";
$tdatataskdisburselistwaitapprve[".sqlFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$tdatataskdisburselistwaitapprve[".sqlWhereExpr"] = "(taskDisburse.disburseStatus = 0)";
$tdatataskdisburselistwaitapprve[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisburselistwaitapprve[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisburselistwaitapprve[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisburselistwaitapprve[".highlightSearchResults"] = true;

$tableKeystaskdisburselistwaitapprve = array();
$tableKeystaskdisburselistwaitapprve[] = "id";
$tdatataskdisburselistwaitapprve[".Keys"] = $tableKeystaskdisburselistwaitapprve;


$tdatataskdisburselistwaitapprve[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","id");
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


	$tdatataskdisburselistwaitapprve["id"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","projectID");
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


	$tdatataskdisburselistwaitapprve["projectID"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","trackDisburseDate");
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


	$tdatataskdisburselistwaitapprve["trackDisburseDate"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","progressStep");
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


	$tdatataskdisburselistwaitapprve["progressStep"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "progressStep";
//	disburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseStatus";
	$fdata["GoodName"] = "disburseStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","disburseStatus");
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


	$tdatataskdisburselistwaitapprve["disburseStatus"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "disburseStatus";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","disburseDesc");
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


	$tdatataskdisburselistwaitapprve["disburseDesc"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","disburseAmount");
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


	$tdatataskdisburselistwaitapprve["disburseAmount"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","disburseAttFille");
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


	$tdatataskdisburselistwaitapprve["disburseAttFille"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","approveStatus");
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


	$tdatataskdisburselistwaitapprve["approveStatus"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","approveDate");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatataskdisburselistwaitapprve["approveDate"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","entryUserName");
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


	$tdatataskdisburselistwaitapprve["entryUserName"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseListWaitApprve","entryTime");
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


	$tdatataskdisburselistwaitapprve["entryTime"] = $fdata;
		$tdatataskdisburselistwaitapprve[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseListWaitApprve"]=&$tdatataskdisburselistwaitapprve;
$field_labels["taskDisburseListWaitApprve"] = &$fieldLabelstaskdisburselistwaitapprve;
$fieldToolTips["taskDisburseListWaitApprve"] = &$fieldToolTipstaskdisburselistwaitapprve;
$placeHolders["taskDisburseListWaitApprve"] = &$placeHolderstaskdisburselistwaitapprve;
$page_titles["taskDisburseListWaitApprve"] = &$pageTitlestaskdisburselistwaitapprve;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseListWaitApprve"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseListWaitApprve"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisburselistwaitapprve()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "taskDisburse.id,  taskDisburse.projectID,  taskDisburse.trackDisburseDate,  taskDisburse.progressStep,  taskDisburse.disburseStatus,  taskDisburse.disburseDesc,  taskDisburse.disburseAmount,  taskDisburse.disburseAttFille,  taskDisburse.approveStatus,  taskDisburse.approveDate,  project.entryUserName,  taskDisburse.entryTime";
$proto0["m_strFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$proto0["m_strWhere"] = "(taskDisburse.disburseStatus = 0)";
$proto0["m_strOrderBy"] = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "taskDisburse.disburseStatus = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 0";
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
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto6["m_sql"] = "taskDisburse.id";
$proto6["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto8["m_sql"] = "taskDisburse.projectID";
$proto8["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto10["m_sql"] = "taskDisburse.trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto12["m_sql"] = "taskDisburse.progressStep";
$proto12["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto14["m_sql"] = "taskDisburse.disburseStatus";
$proto14["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto16["m_sql"] = "taskDisburse.disburseDesc";
$proto16["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto18["m_sql"] = "taskDisburse.disburseAmount";
$proto18["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto20["m_sql"] = "taskDisburse.disburseAttFille";
$proto20["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto22["m_sql"] = "taskDisburse.approveStatus";
$proto22["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto24["m_sql"] = "taskDisburse.approveDate";
$proto24["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto26["m_sql"] = "project.entryUserName";
$proto26["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto28["m_sql"] = "taskDisburse.entryTime";
$proto28["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburseListWaitApprve";
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
$proto30["m_srcTableName"] = "taskDisburseListWaitApprve";
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
$proto35["m_srcTableName"] = "taskDisburseListWaitApprve";
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
$proto34["m_srcTableName"] = "taskDisburseListWaitApprve";
$proto36=array();
$proto36["m_sql"] = "taskDisburse.projectID = project.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
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
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseListWaitApprve"
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
	"m_srcTableName" => "taskDisburseListWaitApprve"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskDisburseListWaitApprve";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisburselistwaitapprve = createSqlQuery_taskdisburselistwaitapprve();


	
				;

												

$tdatataskdisburselistwaitapprve[".sqlquery"] = $queryData_taskdisburselistwaitapprve;



include_once(getabspath("include/taskdisburselistwaitapprve_events.php"));
$tableEvents["taskDisburseListWaitApprve"] = new eventclass_taskdisburselistwaitapprve;
$tdatataskdisburselistwaitapprve[".hasEvents"] = true;

$query = &$queryData_taskdisburselistwaitapprve;
$table = "taskDisburseListWaitApprve";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>