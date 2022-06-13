<?php
$tdatataskdisburseapprove = array();
$tdatataskdisburseapprove[".searchableFields"] = array();
$tdatataskdisburseapprove[".ShortName"] = "taskdisburseapprove";
$tdatataskdisburseapprove[".OwnerID"] = "";
$tdatataskdisburseapprove[".OriginalTable"] = "taskDisburse";


$tdatataskdisburseapprove[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisburseapprove[".originalPagesByType"] = $tdatataskdisburseapprove[".pagesByType"];
$tdatataskdisburseapprove[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisburseapprove[".originalPages"] = $tdatataskdisburseapprove[".pages"];
$tdatataskdisburseapprove[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisburseapprove[".originalDefaultPages"] = $tdatataskdisburseapprove[".defaultPages"];

//	field labels
$fieldLabelstaskdisburseapprove = array();
$fieldToolTipstaskdisburseapprove = array();
$pageTitlestaskdisburseapprove = array();
$placeHolderstaskdisburseapprove = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisburseapprove["English"] = array();
	$fieldToolTipstaskdisburseapprove["English"] = array();
	$placeHolderstaskdisburseapprove["English"] = array();
	$pageTitlestaskdisburseapprove["English"] = array();
	$fieldLabelstaskdisburseapprove["English"]["id"] = "ID";
	$fieldToolTipstaskdisburseapprove["English"]["id"] = "";
	$placeHolderstaskdisburseapprove["English"]["id"] = "";
	$fieldLabelstaskdisburseapprove["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskdisburseapprove["English"]["projectID"] = "";
	$placeHolderstaskdisburseapprove["English"]["projectID"] = "";
	$fieldLabelstaskdisburseapprove["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisburseapprove["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburseapprove["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburseapprove["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisburseapprove["English"]["progressStep"] = "";
	$placeHolderstaskdisburseapprove["English"]["progressStep"] = "";
	$fieldLabelstaskdisburseapprove["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisburseapprove["English"]["disburseDesc"] = "";
	$placeHolderstaskdisburseapprove["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisburseapprove["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisburseapprove["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisburseapprove["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburseapprove["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisburseapprove["English"]["disburseAmount"] = "";
	$placeHolderstaskdisburseapprove["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisburseapprove["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisburseapprove["English"]["entryUserName"] = "";
	$placeHolderstaskdisburseapprove["English"]["entryUserName"] = "";
	$fieldLabelstaskdisburseapprove["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisburseapprove["English"]["entryTime"] = "";
	$placeHolderstaskdisburseapprove["English"]["entryTime"] = "";
	$fieldLabelstaskdisburseapprove["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisburseapprove["English"]["approveStatus"] = "";
	$placeHolderstaskdisburseapprove["English"]["approveStatus"] = "";
	$fieldLabelstaskdisburseapprove["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisburseapprove["English"]["approveDate"] = "";
	$placeHolderstaskdisburseapprove["English"]["approveDate"] = "";
	$fieldLabelstaskdisburseapprove["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskdisburseapprove["English"]["approveReason"] = "";
	$placeHolderstaskdisburseapprove["English"]["approveReason"] = "";
	if (count($fieldToolTipstaskdisburseapprove["English"]))
		$tdatataskdisburseapprove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisburseapprove["Thai"] = array();
	$fieldToolTipstaskdisburseapprove["Thai"] = array();
	$placeHolderstaskdisburseapprove["Thai"] = array();
	$pageTitlestaskdisburseapprove["Thai"] = array();
	$fieldLabelstaskdisburseapprove["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisburseapprove["Thai"]["id"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["id"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["projectID"] = "Project ID";
	$fieldToolTipstaskdisburseapprove["Thai"]["projectID"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["projectID"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["trackDisburseDate"] = "วันที่ขออนุมัติการเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskdisburseapprove["Thai"]["progressStep"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["disburseDesc"] = "รายละเอียดการเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisburseapprove["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["disburseAmount"] = "จำนวนเงินการเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskdisburseapprove["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisburseapprove["Thai"]["entryTime"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["approveStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["approveDate"] = "วันที่อนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["approveDate"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["approveDate"] = "";
	$fieldLabelstaskdisburseapprove["Thai"]["approveReason"] = "เหตุผลอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburseapprove["Thai"]["approveReason"] = "";
	$placeHolderstaskdisburseapprove["Thai"]["approveReason"] = "";
	if (count($fieldToolTipstaskdisburseapprove["Thai"]))
		$tdatataskdisburseapprove[".isUseToolTips"] = true;
}


	$tdatataskdisburseapprove[".NCSearch"] = true;



$tdatataskdisburseapprove[".shortTableName"] = "taskdisburseapprove";
$tdatataskdisburseapprove[".nSecOptions"] = 0;

$tdatataskdisburseapprove[".mainTableOwnerID"] = "";
$tdatataskdisburseapprove[".entityType"] = 1;
$tdatataskdisburseapprove[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisburseapprove[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisburseapprove[".showAddInPopup"] = false;

$tdatataskdisburseapprove[".showEditInPopup"] = false;

$tdatataskdisburseapprove[".showViewInPopup"] = false;

$tdatataskdisburseapprove[".listAjax"] = false;
//	temporary
//$tdatataskdisburseapprove[".listAjax"] = false;

	$tdatataskdisburseapprove[".audit"] = false;

	$tdatataskdisburseapprove[".locking"] = false;


$pages = $tdatataskdisburseapprove[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisburseapprove[".edit"] = true;
	$tdatataskdisburseapprove[".afterEditAction"] = 0;
	$tdatataskdisburseapprove[".closePopupAfterEdit"] = 1;
	$tdatataskdisburseapprove[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisburseapprove[".add"] = true;
$tdatataskdisburseapprove[".afterAddAction"] = 1;
$tdatataskdisburseapprove[".closePopupAfterAdd"] = 1;
$tdatataskdisburseapprove[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisburseapprove[".list"] = true;
}



$tdatataskdisburseapprove[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisburseapprove[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisburseapprove[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisburseapprove[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisburseapprove[".printFriendly"] = true;
}



$tdatataskdisburseapprove[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisburseapprove[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisburseapprove[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisburseapprove[".isUseAjaxSuggest"] = true;

$tdatataskdisburseapprove[".rowHighlite"] = true;





$tdatataskdisburseapprove[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisburseapprove[".buttonsAdded"] = false;

$tdatataskdisburseapprove[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisburseapprove[".isUseTimeForSearch"] = false;


$tdatataskdisburseapprove[".badgeColor"] = "4169E1";


$tdatataskdisburseapprove[".allSearchFields"] = array();
$tdatataskdisburseapprove[".filterFields"] = array();
$tdatataskdisburseapprove[".requiredSearchFields"] = array();

$tdatataskdisburseapprove[".googleLikeFields"] = array();
$tdatataskdisburseapprove[".googleLikeFields"][] = "projectID";
$tdatataskdisburseapprove[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisburseapprove[".googleLikeFields"][] = "progressStep";
$tdatataskdisburseapprove[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisburseapprove[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisburseapprove[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisburseapprove[".googleLikeFields"][] = "approveStatus";
$tdatataskdisburseapprove[".googleLikeFields"][] = "approveDate";
$tdatataskdisburseapprove[".googleLikeFields"][] = "approveReason";
$tdatataskdisburseapprove[".googleLikeFields"][] = "entryUserName";
$tdatataskdisburseapprove[".googleLikeFields"][] = "entryTime";



$tdatataskdisburseapprove[".tableType"] = "list";

$tdatataskdisburseapprove[".printerPageOrientation"] = 0;
$tdatataskdisburseapprove[".nPrinterPageScale"] = 100;

$tdatataskdisburseapprove[".nPrinterSplitRecords"] = 40;

$tdatataskdisburseapprove[".geocodingEnabled"] = false;










$tdatataskdisburseapprove[".pageSize"] = 20;

$tdatataskdisburseapprove[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskdisburseapprove[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisburseapprove[".orderindexes"] = array();


$tdatataskdisburseapprove[".sqlHead"] = "SELECT id,  	projectID,  	trackDisburseDate,  	progressStep,  	disburseDesc,  	disburseAmount,  	disburseAttFille,  	approveStatus,  	approveDate,  	approveReason,  	entryUserName,  	entryTime";
$tdatataskdisburseapprove[".sqlFrom"] = "FROM taskDisburse";
$tdatataskdisburseapprove[".sqlWhereExpr"] = "";
$tdatataskdisburseapprove[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisburseapprove[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisburseapprove[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisburseapprove[".highlightSearchResults"] = true;

$tableKeystaskdisburseapprove = array();
$tableKeystaskdisburseapprove[] = "id";
$tdatataskdisburseapprove[".Keys"] = $tableKeystaskdisburseapprove;


$tdatataskdisburseapprove[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatataskdisburseapprove["id"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectID";

	
	
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


	$tdatataskdisburseapprove["projectID"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","trackDisburseDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "trackDisburseDate";

		$fdata["sourceSingle"] = "trackDisburseDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackDisburseDate";

	
	
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


	$tdatataskdisburseapprove["trackDisburseDate"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","progressStep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStep";

		$fdata["sourceSingle"] = "progressStep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressStep";

	
	
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


	$tdatataskdisburseapprove["progressStep"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "progressStep";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","disburseDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disburseDesc";

		$fdata["sourceSingle"] = "disburseDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disburseDesc";

	
	
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


	$tdatataskdisburseapprove["disburseDesc"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","disburseAmount");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "disburseAmount";

		$fdata["sourceSingle"] = "disburseAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disburseAmount";

	
	
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


	$tdatataskdisburseapprove["disburseAmount"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","disburseAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "disburseAttFille";

		$fdata["sourceSingle"] = "disburseAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disburseAttFille";

	
	
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


	$tdatataskdisburseapprove["disburseAttFille"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "รออนุมัติ";
	$edata["LookupValues"][] = "อนุมัติ";
	$edata["LookupValues"][] = "ไม่อนุมัติ";

	
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


	$tdatataskdisburseapprove["approveStatus"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveDate";

	
	
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


	$tdatataskdisburseapprove["approveDate"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "approveDate";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","approveReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveReason";

		$fdata["sourceSingle"] = "approveReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveReason";

	
	
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


	$tdatataskdisburseapprove["approveReason"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUserName";

	
	
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


	$tdatataskdisburseapprove["entryUserName"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseApprove","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
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


	$tdatataskdisburseapprove["entryTime"] = $fdata;
		$tdatataskdisburseapprove[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseApprove"]=&$tdatataskdisburseapprove;
$field_labels["taskDisburseApprove"] = &$fieldLabelstaskdisburseapprove;
$fieldToolTips["taskDisburseApprove"] = &$fieldToolTipstaskdisburseapprove;
$placeHolders["taskDisburseApprove"] = &$placeHolderstaskdisburseapprove;
$page_titles["taskDisburseApprove"] = &$pageTitlestaskdisburseapprove;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseApprove"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseApprove"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisburseapprove()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectID,  	trackDisburseDate,  	progressStep,  	disburseDesc,  	disburseAmount,  	disburseAttFille,  	approveStatus,  	approveDate,  	approveReason,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM taskDisburse";
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
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskDisburseApprove";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskDisburseApprove";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto10["m_sql"] = "trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseApprove";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskDisburseApprove";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto14["m_sql"] = "disburseDesc";
$proto14["m_srcTableName"] = "taskDisburseApprove";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto16["m_sql"] = "disburseAmount";
$proto16["m_srcTableName"] = "taskDisburseApprove";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto18["m_sql"] = "disburseAttFille";
$proto18["m_srcTableName"] = "taskDisburseApprove";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto20["m_sql"] = "approveStatus";
$proto20["m_srcTableName"] = "taskDisburseApprove";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto22["m_sql"] = "approveDate";
$proto22["m_srcTableName"] = "taskDisburseApprove";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto24["m_sql"] = "approveReason";
$proto24["m_srcTableName"] = "taskDisburseApprove";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto26["m_sql"] = "entryUserName";
$proto26["m_srcTableName"] = "taskDisburseApprove";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseApprove"
));

$proto28["m_sql"] = "entryTime";
$proto28["m_srcTableName"] = "taskDisburseApprove";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburseApprove";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "projectID";
$proto31["m_columns"][] = "trackDisburseDate";
$proto31["m_columns"][] = "progressStep";
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
$proto30["m_srcTableName"] = "taskDisburseApprove";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskDisburseApprove";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisburseapprove = createSqlQuery_taskdisburseapprove();


	
				;

												

$tdatataskdisburseapprove[".sqlquery"] = $queryData_taskdisburseapprove;



include_once(getabspath("include/taskdisburseapprove_events.php"));
$tableEvents["taskDisburseApprove"] = new eventclass_taskdisburseapprove;
$tdatataskdisburseapprove[".hasEvents"] = true;

?>