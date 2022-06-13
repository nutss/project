<?php
$tdatataskdisbursestatusreject = array();
$tdatataskdisbursestatusreject[".searchableFields"] = array();
$tdatataskdisbursestatusreject[".ShortName"] = "taskdisbursestatusreject";
$tdatataskdisbursestatusreject[".OwnerID"] = "";
$tdatataskdisbursestatusreject[".OriginalTable"] = "taskDisburse";


$tdatataskdisbursestatusreject[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisbursestatusreject[".originalPagesByType"] = $tdatataskdisbursestatusreject[".pagesByType"];
$tdatataskdisbursestatusreject[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisbursestatusreject[".originalPages"] = $tdatataskdisbursestatusreject[".pages"];
$tdatataskdisbursestatusreject[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisbursestatusreject[".originalDefaultPages"] = $tdatataskdisbursestatusreject[".defaultPages"];

//	field labels
$fieldLabelstaskdisbursestatusreject = array();
$fieldToolTipstaskdisbursestatusreject = array();
$pageTitlestaskdisbursestatusreject = array();
$placeHolderstaskdisbursestatusreject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisbursestatusreject["English"] = array();
	$fieldToolTipstaskdisbursestatusreject["English"] = array();
	$placeHolderstaskdisbursestatusreject["English"] = array();
	$pageTitlestaskdisbursestatusreject["English"] = array();
	$fieldLabelstaskdisbursestatusreject["English"]["id"] = "ID";
	$fieldToolTipstaskdisbursestatusreject["English"]["id"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["id"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskdisbursestatusreject["English"]["projectID"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["projectID"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisbursestatusreject["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisbursestatusreject["English"]["progressStep"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["progressStep"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["disburseStatus"] = "Disburse Status";
	$fieldToolTipstaskdisbursestatusreject["English"]["disburseStatus"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["disburseStatus"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisbursestatusreject["English"]["disburseDesc"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisbursestatusreject["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisbursestatusreject["English"]["disburseAmount"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisbursestatusreject["English"]["entryUserName"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["entryUserName"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisbursestatusreject["English"]["entryTime"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["entryTime"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisbursestatusreject["English"]["approveStatus"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["approveStatus"] = "";
	$fieldLabelstaskdisbursestatusreject["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisbursestatusreject["English"]["approveDate"] = "";
	$placeHolderstaskdisbursestatusreject["English"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisbursestatusreject["English"]))
		$tdatataskdisbursestatusreject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisbursestatusreject["Thai"] = array();
	$fieldToolTipstaskdisbursestatusreject["Thai"] = array();
	$placeHolderstaskdisbursestatusreject["Thai"] = array();
	$pageTitlestaskdisbursestatusreject["Thai"] = array();
	$fieldLabelstaskdisbursestatusreject["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["id"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["id"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["projectID"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["projectID"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["trackDisburseDate"] = "วันที่เบิกจ่าย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["progressStep"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["disburseStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["disburseStatus"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["disburseStatus"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["disburseDesc"] = "รายละเอียดเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["disburseAmount"] = "จำนวนเงินเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["entryTime"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisbursestatusreject["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskdisbursestatusreject["Thai"]["approveDate"] = "";
	$placeHolderstaskdisbursestatusreject["Thai"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisbursestatusreject["Thai"]))
		$tdatataskdisbursestatusreject[".isUseToolTips"] = true;
}


	$tdatataskdisbursestatusreject[".NCSearch"] = true;



$tdatataskdisbursestatusreject[".shortTableName"] = "taskdisbursestatusreject";
$tdatataskdisbursestatusreject[".nSecOptions"] = 0;

$tdatataskdisbursestatusreject[".mainTableOwnerID"] = "";
$tdatataskdisbursestatusreject[".entityType"] = 1;
$tdatataskdisbursestatusreject[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisbursestatusreject[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisbursestatusreject[".showAddInPopup"] = false;

$tdatataskdisbursestatusreject[".showEditInPopup"] = false;

$tdatataskdisbursestatusreject[".showViewInPopup"] = false;

$tdatataskdisbursestatusreject[".listAjax"] = false;
//	temporary
//$tdatataskdisbursestatusreject[".listAjax"] = false;

	$tdatataskdisbursestatusreject[".audit"] = false;

	$tdatataskdisbursestatusreject[".locking"] = false;


$pages = $tdatataskdisbursestatusreject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisbursestatusreject[".edit"] = true;
	$tdatataskdisbursestatusreject[".afterEditAction"] = 0;
	$tdatataskdisbursestatusreject[".closePopupAfterEdit"] = 1;
	$tdatataskdisbursestatusreject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisbursestatusreject[".add"] = true;
$tdatataskdisbursestatusreject[".afterAddAction"] = 1;
$tdatataskdisbursestatusreject[".closePopupAfterAdd"] = 1;
$tdatataskdisbursestatusreject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisbursestatusreject[".list"] = true;
}



$tdatataskdisbursestatusreject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisbursestatusreject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisbursestatusreject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisbursestatusreject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisbursestatusreject[".printFriendly"] = true;
}



$tdatataskdisbursestatusreject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisbursestatusreject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisbursestatusreject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisbursestatusreject[".isUseAjaxSuggest"] = true;

$tdatataskdisbursestatusreject[".rowHighlite"] = true;





$tdatataskdisbursestatusreject[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisbursestatusreject[".buttonsAdded"] = false;

$tdatataskdisbursestatusreject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisbursestatusreject[".isUseTimeForSearch"] = false;


$tdatataskdisbursestatusreject[".badgeColor"] = "CFAE83";


$tdatataskdisbursestatusreject[".allSearchFields"] = array();
$tdatataskdisbursestatusreject[".filterFields"] = array();
$tdatataskdisbursestatusreject[".requiredSearchFields"] = array();

$tdatataskdisbursestatusreject[".googleLikeFields"] = array();
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "projectID";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "progressStep";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "disburseStatus";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "approveStatus";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "approveDate";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "entryUserName";
$tdatataskdisbursestatusreject[".googleLikeFields"][] = "entryTime";



$tdatataskdisbursestatusreject[".tableType"] = "list";

$tdatataskdisbursestatusreject[".printerPageOrientation"] = 0;
$tdatataskdisbursestatusreject[".nPrinterPageScale"] = 100;

$tdatataskdisbursestatusreject[".nPrinterSplitRecords"] = 40;

$tdatataskdisbursestatusreject[".geocodingEnabled"] = false;










$tdatataskdisbursestatusreject[".pageSize"] = 20;

$tdatataskdisbursestatusreject[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
$tdatataskdisbursestatusreject[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisbursestatusreject[".orderindexes"] = array();
	$tdatataskdisbursestatusreject[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "taskDisburse.projectID");

	$tdatataskdisbursestatusreject[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "taskDisburse.trackDisburseDate");



$tdatataskdisbursestatusreject[".sqlHead"] = "  SELECT taskDisburse.id,  taskDisburse.projectID,  taskDisburse.trackDisburseDate,  taskDisburse.progressStep,  taskDisburse.disburseStatus,  taskDisburse.disburseDesc,  taskDisburse.disburseAmount,  taskDisburse.disburseAttFille,  taskDisburse.approveStatus,  taskDisburse.approveDate,  project.entryUserName,  taskDisburse.entryTime";
$tdatataskdisbursestatusreject[".sqlFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$tdatataskdisbursestatusreject[".sqlWhereExpr"] = "(taskDisburse.disburseStatus = 0)";
$tdatataskdisbursestatusreject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisbursestatusreject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisbursestatusreject[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisbursestatusreject[".highlightSearchResults"] = true;

$tableKeystaskdisbursestatusreject = array();
$tableKeystaskdisbursestatusreject[] = "id";
$tdatataskdisbursestatusreject[".Keys"] = $tableKeystaskdisbursestatusreject;


$tdatataskdisbursestatusreject[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","id");
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


	$tdatataskdisbursestatusreject["id"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","projectID");
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


	$tdatataskdisbursestatusreject["projectID"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","trackDisburseDate");
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


	$tdatataskdisbursestatusreject["trackDisburseDate"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","progressStep");
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
	$edata["LookupTable"] = "CB_ProjectStep01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stepName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stepName";

				$edata["LookupWhereCode"] = true;


	
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


	$tdatataskdisbursestatusreject["progressStep"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "progressStep";
//	disburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseStatus";
	$fdata["GoodName"] = "disburseStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","disburseStatus");
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


	$tdatataskdisbursestatusreject["disburseStatus"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "disburseStatus";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","disburseDesc");
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


	$tdatataskdisbursestatusreject["disburseDesc"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","disburseAmount");
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


	$tdatataskdisbursestatusreject["disburseAmount"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","disburseAttFille");
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


	$tdatataskdisbursestatusreject["disburseAttFille"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","approveStatus");
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


	$tdatataskdisbursestatusreject["approveStatus"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","approveDate");
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


	$tdatataskdisbursestatusreject["approveDate"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","entryUserName");
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


	$tdatataskdisbursestatusreject["entryUserName"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusReject","entryTime");
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


	$tdatataskdisbursestatusreject["entryTime"] = $fdata;
		$tdatataskdisbursestatusreject[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseStatusReject"]=&$tdatataskdisbursestatusreject;
$field_labels["taskDisburseStatusReject"] = &$fieldLabelstaskdisbursestatusreject;
$fieldToolTips["taskDisburseStatusReject"] = &$fieldToolTipstaskdisbursestatusreject;
$placeHolders["taskDisburseStatusReject"] = &$placeHolderstaskdisbursestatusreject;
$page_titles["taskDisburseStatusReject"] = &$pageTitlestaskdisbursestatusreject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseStatusReject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseStatusReject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisbursestatusreject()
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
	"m_srcTableName" => "taskDisburseStatusReject"
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
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto6["m_sql"] = "taskDisburse.id";
$proto6["m_srcTableName"] = "taskDisburseStatusReject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto8["m_sql"] = "taskDisburse.projectID";
$proto8["m_srcTableName"] = "taskDisburseStatusReject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto10["m_sql"] = "taskDisburse.trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseStatusReject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto12["m_sql"] = "taskDisburse.progressStep";
$proto12["m_srcTableName"] = "taskDisburseStatusReject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto14["m_sql"] = "taskDisburse.disburseStatus";
$proto14["m_srcTableName"] = "taskDisburseStatusReject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto16["m_sql"] = "taskDisburse.disburseDesc";
$proto16["m_srcTableName"] = "taskDisburseStatusReject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto18["m_sql"] = "taskDisburse.disburseAmount";
$proto18["m_srcTableName"] = "taskDisburseStatusReject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto20["m_sql"] = "taskDisburse.disburseAttFille";
$proto20["m_srcTableName"] = "taskDisburseStatusReject";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto22["m_sql"] = "taskDisburse.approveStatus";
$proto22["m_srcTableName"] = "taskDisburseStatusReject";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto24["m_sql"] = "taskDisburse.approveDate";
$proto24["m_srcTableName"] = "taskDisburseStatusReject";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto26["m_sql"] = "project.entryUserName";
$proto26["m_srcTableName"] = "taskDisburseStatusReject";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto28["m_sql"] = "taskDisburse.entryTime";
$proto28["m_srcTableName"] = "taskDisburseStatusReject";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburseStatusReject";
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
$proto31["m_columns"][] = "approveReason";
$proto31["m_columns"][] = "entryUserName";
$proto31["m_columns"][] = "entryTime";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "taskDisburse";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "taskDisburseStatusReject";
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
$proto35["m_srcTableName"] = "taskDisburseStatusReject";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "projectName";
$proto35["m_columns"][] = "projectStart";
$proto35["m_columns"][] = "projectEnd";
$proto35["m_columns"][] = "ProjectTypeName";
$proto35["m_columns"][] = "companyName";
$proto35["m_columns"][] = "projectBudgetCost";
$proto35["m_columns"][] = "projectFile";
$proto35["m_columns"][] = "DocumentCheckDate";
$proto35["m_columns"][] = "DocumentCheckStatus";
$proto35["m_columns"][] = "DocumentCheckReason";
$proto35["m_columns"][] = "screenDate";
$proto35["m_columns"][] = "screenStatus";
$proto35["m_columns"][] = "screenReason";
$proto35["m_columns"][] = "approveDate";
$proto35["m_columns"][] = "approveStatus";
$proto35["m_columns"][] = "approveReason";
$proto35["m_columns"][] = "entryUserName";
$proto35["m_columns"][] = "entryTime";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "taskDisburseStatusReject";
$proto36=array();
$proto36["m_sql"] = "taskDisburse.projectID = project.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
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
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusReject"
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
	"m_srcTableName" => "taskDisburseStatusReject"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskDisburseStatusReject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisbursestatusreject = createSqlQuery_taskdisbursestatusreject();


	
				;

												

$tdatataskdisbursestatusreject[".sqlquery"] = $queryData_taskdisbursestatusreject;



include_once(getabspath("include/taskdisbursestatusreject_events.php"));
$tableEvents["taskDisburseStatusReject"] = new eventclass_taskdisbursestatusreject;
$tdatataskdisbursestatusreject[".hasEvents"] = true;

$query = &$queryData_taskdisbursestatusreject;
$table = "taskDisburseStatusReject";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>