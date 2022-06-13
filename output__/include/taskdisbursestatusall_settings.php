<?php
$tdatataskdisbursestatusall = array();
$tdatataskdisbursestatusall[".searchableFields"] = array();
$tdatataskdisbursestatusall[".ShortName"] = "taskdisbursestatusall";
$tdatataskdisbursestatusall[".OwnerID"] = "";
$tdatataskdisbursestatusall[".OriginalTable"] = "taskDisburse";


$tdatataskdisbursestatusall[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisbursestatusall[".originalPagesByType"] = $tdatataskdisbursestatusall[".pagesByType"];
$tdatataskdisbursestatusall[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisbursestatusall[".originalPages"] = $tdatataskdisbursestatusall[".pages"];
$tdatataskdisbursestatusall[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisbursestatusall[".originalDefaultPages"] = $tdatataskdisbursestatusall[".defaultPages"];

//	field labels
$fieldLabelstaskdisbursestatusall = array();
$fieldToolTipstaskdisbursestatusall = array();
$pageTitlestaskdisbursestatusall = array();
$placeHolderstaskdisbursestatusall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisbursestatusall["English"] = array();
	$fieldToolTipstaskdisbursestatusall["English"] = array();
	$placeHolderstaskdisbursestatusall["English"] = array();
	$pageTitlestaskdisbursestatusall["English"] = array();
	$fieldLabelstaskdisbursestatusall["English"]["id"] = "ID";
	$fieldToolTipstaskdisbursestatusall["English"]["id"] = "";
	$placeHolderstaskdisbursestatusall["English"]["id"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskdisbursestatusall["English"]["projectID"] = "";
	$placeHolderstaskdisbursestatusall["English"]["projectID"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisbursestatusall["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisbursestatusall["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisbursestatusall["English"]["progressStep"] = "";
	$placeHolderstaskdisbursestatusall["English"]["progressStep"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["disburseStatus"] = "Disburse Status";
	$fieldToolTipstaskdisbursestatusall["English"]["disburseStatus"] = "";
	$placeHolderstaskdisbursestatusall["English"]["disburseStatus"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisbursestatusall["English"]["disburseDesc"] = "";
	$placeHolderstaskdisbursestatusall["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisbursestatusall["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisbursestatusall["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisbursestatusall["English"]["disburseAmount"] = "";
	$placeHolderstaskdisbursestatusall["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisbursestatusall["English"]["entryUserName"] = "";
	$placeHolderstaskdisbursestatusall["English"]["entryUserName"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisbursestatusall["English"]["entryTime"] = "";
	$placeHolderstaskdisbursestatusall["English"]["entryTime"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisbursestatusall["English"]["approveStatus"] = "";
	$placeHolderstaskdisbursestatusall["English"]["approveStatus"] = "";
	$fieldLabelstaskdisbursestatusall["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisbursestatusall["English"]["approveDate"] = "";
	$placeHolderstaskdisbursestatusall["English"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisbursestatusall["English"]))
		$tdatataskdisbursestatusall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisbursestatusall["Thai"] = array();
	$fieldToolTipstaskdisbursestatusall["Thai"] = array();
	$placeHolderstaskdisbursestatusall["Thai"] = array();
	$pageTitlestaskdisbursestatusall["Thai"] = array();
	$fieldLabelstaskdisbursestatusall["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisbursestatusall["Thai"]["id"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["id"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskdisbursestatusall["Thai"]["projectID"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["projectID"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["trackDisburseDate"] = "วันที่เบิกจ่าย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskdisbursestatusall["Thai"]["progressStep"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["disburseStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["disburseStatus"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["disburseStatus"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["disburseDesc"] = "รายละเอียดเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisbursestatusall["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["disburseAmount"] = "จำนวนเงินเบิกจ่าย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskdisbursestatusall["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisbursestatusall["Thai"]["entryTime"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisbursestatusall["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskdisbursestatusall["Thai"]["approveDate"] = "";
	$placeHolderstaskdisbursestatusall["Thai"]["approveDate"] = "";
	if (count($fieldToolTipstaskdisbursestatusall["Thai"]))
		$tdatataskdisbursestatusall[".isUseToolTips"] = true;
}


	$tdatataskdisbursestatusall[".NCSearch"] = true;



$tdatataskdisbursestatusall[".shortTableName"] = "taskdisbursestatusall";
$tdatataskdisbursestatusall[".nSecOptions"] = 0;

$tdatataskdisbursestatusall[".mainTableOwnerID"] = "";
$tdatataskdisbursestatusall[".entityType"] = 1;
$tdatataskdisbursestatusall[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisbursestatusall[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisbursestatusall[".showAddInPopup"] = false;

$tdatataskdisbursestatusall[".showEditInPopup"] = false;

$tdatataskdisbursestatusall[".showViewInPopup"] = false;

$tdatataskdisbursestatusall[".listAjax"] = false;
//	temporary
//$tdatataskdisbursestatusall[".listAjax"] = false;

	$tdatataskdisbursestatusall[".audit"] = false;

	$tdatataskdisbursestatusall[".locking"] = false;


$pages = $tdatataskdisbursestatusall[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisbursestatusall[".edit"] = true;
	$tdatataskdisbursestatusall[".afterEditAction"] = 0;
	$tdatataskdisbursestatusall[".closePopupAfterEdit"] = 1;
	$tdatataskdisbursestatusall[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisbursestatusall[".add"] = true;
$tdatataskdisbursestatusall[".afterAddAction"] = 1;
$tdatataskdisbursestatusall[".closePopupAfterAdd"] = 1;
$tdatataskdisbursestatusall[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisbursestatusall[".list"] = true;
}



$tdatataskdisbursestatusall[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisbursestatusall[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisbursestatusall[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisbursestatusall[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisbursestatusall[".printFriendly"] = true;
}



$tdatataskdisbursestatusall[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisbursestatusall[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisbursestatusall[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisbursestatusall[".isUseAjaxSuggest"] = true;

$tdatataskdisbursestatusall[".rowHighlite"] = true;





$tdatataskdisbursestatusall[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisbursestatusall[".buttonsAdded"] = false;

$tdatataskdisbursestatusall[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisbursestatusall[".isUseTimeForSearch"] = false;


$tdatataskdisbursestatusall[".badgeColor"] = "DC143C";


$tdatataskdisbursestatusall[".allSearchFields"] = array();
$tdatataskdisbursestatusall[".filterFields"] = array();
$tdatataskdisbursestatusall[".requiredSearchFields"] = array();

$tdatataskdisbursestatusall[".googleLikeFields"] = array();
$tdatataskdisbursestatusall[".googleLikeFields"][] = "projectID";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "progressStep";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "disburseStatus";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "approveStatus";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "approveDate";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "entryUserName";
$tdatataskdisbursestatusall[".googleLikeFields"][] = "entryTime";



$tdatataskdisbursestatusall[".tableType"] = "list";

$tdatataskdisbursestatusall[".printerPageOrientation"] = 0;
$tdatataskdisbursestatusall[".nPrinterPageScale"] = 100;

$tdatataskdisbursestatusall[".nPrinterSplitRecords"] = 40;

$tdatataskdisbursestatusall[".geocodingEnabled"] = false;










$tdatataskdisbursestatusall[".pageSize"] = 20;

$tdatataskdisbursestatusall[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY taskDisburse.projectID DESC, taskDisburse.trackDisburseDate DESC";
$tdatataskdisbursestatusall[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisbursestatusall[".orderindexes"] = array();
	$tdatataskdisbursestatusall[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "taskDisburse.projectID");

	$tdatataskdisbursestatusall[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "taskDisburse.trackDisburseDate");



$tdatataskdisbursestatusall[".sqlHead"] = "SELECT taskDisburse.id,  	taskDisburse.projectID,  	taskDisburse.trackDisburseDate,  	taskDisburse.progressStep,  	taskDisburse.disburseStatus,  	taskDisburse.disburseDesc,  	taskDisburse.disburseAmount,  	taskDisburse.disburseAttFille,  	taskDisburse.approveStatus,  	taskDisburse.approveDate,  	project.entryUserName,  	taskDisburse.entryTime";
$tdatataskdisbursestatusall[".sqlFrom"] = "FROM taskDisburse  LEFT OUTER JOIN project ON taskDisburse.projectID = project.id";
$tdatataskdisbursestatusall[".sqlWhereExpr"] = "";
$tdatataskdisbursestatusall[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisbursestatusall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisbursestatusall[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisbursestatusall[".highlightSearchResults"] = true;

$tableKeystaskdisbursestatusall = array();
$tableKeystaskdisbursestatusall[] = "id";
$tdatataskdisbursestatusall[".Keys"] = $tableKeystaskdisbursestatusall;


$tdatataskdisbursestatusall[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","id");
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


	$tdatataskdisbursestatusall["id"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","projectID");
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


	$tdatataskdisbursestatusall["projectID"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","trackDisburseDate");
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


	$tdatataskdisbursestatusall["trackDisburseDate"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","progressStep");
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


	$tdatataskdisbursestatusall["progressStep"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "progressStep";
//	disburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseStatus";
	$fdata["GoodName"] = "disburseStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","disburseStatus");
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


	$tdatataskdisbursestatusall["disburseStatus"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "disburseStatus";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","disburseDesc");
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


	$tdatataskdisbursestatusall["disburseDesc"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","disburseAmount");
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


	$tdatataskdisbursestatusall["disburseAmount"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","disburseAttFille");
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


	$tdatataskdisbursestatusall["disburseAttFille"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","approveStatus");
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


	$tdatataskdisbursestatusall["approveStatus"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","approveDate");
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


	$tdatataskdisbursestatusall["approveDate"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","entryUserName");
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


	$tdatataskdisbursestatusall["entryUserName"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseStatusAll","entryTime");
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


	$tdatataskdisbursestatusall["entryTime"] = $fdata;
		$tdatataskdisbursestatusall[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseStatusAll"]=&$tdatataskdisbursestatusall;
$field_labels["taskDisburseStatusAll"] = &$fieldLabelstaskdisbursestatusall;
$fieldToolTips["taskDisburseStatusAll"] = &$fieldToolTipstaskdisbursestatusall;
$placeHolders["taskDisburseStatusAll"] = &$placeHolderstaskdisbursestatusall;
$page_titles["taskDisburseStatusAll"] = &$pageTitlestaskdisbursestatusall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseStatusAll"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseStatusAll"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisbursestatusall()
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
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto6["m_sql"] = "taskDisburse.id";
$proto6["m_srcTableName"] = "taskDisburseStatusAll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto8["m_sql"] = "taskDisburse.projectID";
$proto8["m_srcTableName"] = "taskDisburseStatusAll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto10["m_sql"] = "taskDisburse.trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseStatusAll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto12["m_sql"] = "taskDisburse.progressStep";
$proto12["m_srcTableName"] = "taskDisburseStatusAll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto14["m_sql"] = "taskDisburse.disburseStatus";
$proto14["m_srcTableName"] = "taskDisburseStatusAll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto16["m_sql"] = "taskDisburse.disburseDesc";
$proto16["m_srcTableName"] = "taskDisburseStatusAll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto18["m_sql"] = "taskDisburse.disburseAmount";
$proto18["m_srcTableName"] = "taskDisburseStatusAll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto20["m_sql"] = "taskDisburse.disburseAttFille";
$proto20["m_srcTableName"] = "taskDisburseStatusAll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto22["m_sql"] = "taskDisburse.approveStatus";
$proto22["m_srcTableName"] = "taskDisburseStatusAll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto24["m_sql"] = "taskDisburse.approveDate";
$proto24["m_srcTableName"] = "taskDisburseStatusAll";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto26["m_sql"] = "project.entryUserName";
$proto26["m_srcTableName"] = "taskDisburseStatusAll";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto28["m_sql"] = "taskDisburse.entryTime";
$proto28["m_srcTableName"] = "taskDisburseStatusAll";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburseStatusAll";
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
$proto30["m_srcTableName"] = "taskDisburseStatusAll";
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
$proto35["m_srcTableName"] = "taskDisburseStatusAll";
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
$proto34["m_srcTableName"] = "taskDisburseStatusAll";
$proto36=array();
$proto36["m_sql"] = "taskDisburse.projectID = project.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
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
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseStatusAll"
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
	"m_srcTableName" => "taskDisburseStatusAll"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskDisburseStatusAll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisbursestatusall = createSqlQuery_taskdisbursestatusall();


	
				;

												

$tdatataskdisbursestatusall[".sqlquery"] = $queryData_taskdisbursestatusall;



include_once(getabspath("include/taskdisbursestatusall_events.php"));
$tableEvents["taskDisburseStatusAll"] = new eventclass_taskdisbursestatusall;
$tdatataskdisbursestatusall[".hasEvents"] = true;

$query = &$queryData_taskdisbursestatusall;
$table = "taskDisburseStatusAll";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>