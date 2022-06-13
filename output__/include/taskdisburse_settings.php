<?php
$tdatataskdisburse = array();
$tdatataskdisburse[".searchableFields"] = array();
$tdatataskdisburse[".ShortName"] = "taskdisburse";
$tdatataskdisburse[".OwnerID"] = "";
$tdatataskdisburse[".OriginalTable"] = "taskDisburse";


$tdatataskdisburse[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskdisburse[".originalPagesByType"] = $tdatataskdisburse[".pagesByType"];
$tdatataskdisburse[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskdisburse[".originalPages"] = $tdatataskdisburse[".pages"];
$tdatataskdisburse[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskdisburse[".originalDefaultPages"] = $tdatataskdisburse[".defaultPages"];

//	field labels
$fieldLabelstaskdisburse = array();
$fieldToolTipstaskdisburse = array();
$pageTitlestaskdisburse = array();
$placeHolderstaskdisburse = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisburse["English"] = array();
	$fieldToolTipstaskdisburse["English"] = array();
	$placeHolderstaskdisburse["English"] = array();
	$pageTitlestaskdisburse["English"] = array();
	$fieldLabelstaskdisburse["English"]["id"] = "ID";
	$fieldToolTipstaskdisburse["English"]["id"] = "";
	$placeHolderstaskdisburse["English"]["id"] = "";
	$fieldLabelstaskdisburse["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskdisburse["English"]["projectID"] = "";
	$placeHolderstaskdisburse["English"]["projectID"] = "";
	$fieldLabelstaskdisburse["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisburse["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburse["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburse["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisburse["English"]["progressStep"] = "";
	$placeHolderstaskdisburse["English"]["progressStep"] = "";
	$fieldLabelstaskdisburse["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisburse["English"]["disburseDesc"] = "";
	$placeHolderstaskdisburse["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisburse["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisburse["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisburse["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburse["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisburse["English"]["disburseAmount"] = "";
	$placeHolderstaskdisburse["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisburse["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisburse["English"]["entryUserName"] = "";
	$placeHolderstaskdisburse["English"]["entryUserName"] = "";
	$fieldLabelstaskdisburse["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisburse["English"]["entryTime"] = "";
	$placeHolderstaskdisburse["English"]["entryTime"] = "";
	$fieldLabelstaskdisburse["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskdisburse["English"]["approveStatus"] = "";
	$placeHolderstaskdisburse["English"]["approveStatus"] = "";
	$fieldLabelstaskdisburse["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskdisburse["English"]["approveDate"] = "";
	$placeHolderstaskdisburse["English"]["approveDate"] = "";
	$fieldLabelstaskdisburse["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskdisburse["English"]["approveReason"] = "";
	$placeHolderstaskdisburse["English"]["approveReason"] = "";
	if (count($fieldToolTipstaskdisburse["English"]))
		$tdatataskdisburse[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisburse["Thai"] = array();
	$fieldToolTipstaskdisburse["Thai"] = array();
	$placeHolderstaskdisburse["Thai"] = array();
	$pageTitlestaskdisburse["Thai"] = array();
	$fieldLabelstaskdisburse["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisburse["Thai"]["id"] = "";
	$placeHolderstaskdisburse["Thai"]["id"] = "";
	$fieldLabelstaskdisburse["Thai"]["projectID"] = "Project ID";
	$fieldToolTipstaskdisburse["Thai"]["projectID"] = "";
	$placeHolderstaskdisburse["Thai"]["projectID"] = "";
	$fieldLabelstaskdisburse["Thai"]["trackDisburseDate"] = "วันที่ขออนุมัติการเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburse["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburse["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskdisburse["Thai"]["progressStep"] = "";
	$placeHolderstaskdisburse["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisburse["Thai"]["disburseDesc"] = "รายละเอียดการเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisburse["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisburse["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisburse["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisburse["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburse["Thai"]["disburseAmount"] = "จำนวนเงินการเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisburse["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisburse["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskdisburse["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisburse["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisburse["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisburse["Thai"]["entryTime"] = "";
	$placeHolderstaskdisburse["Thai"]["entryTime"] = "";
	$fieldLabelstaskdisburse["Thai"]["approveStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["approveStatus"] = "";
	$placeHolderstaskdisburse["Thai"]["approveStatus"] = "";
	$fieldLabelstaskdisburse["Thai"]["approveDate"] = "วันที่อนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["approveDate"] = "";
	$placeHolderstaskdisburse["Thai"]["approveDate"] = "";
	$fieldLabelstaskdisburse["Thai"]["approveReason"] = "เหตุผลอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburse["Thai"]["approveReason"] = "";
	$placeHolderstaskdisburse["Thai"]["approveReason"] = "";
	if (count($fieldToolTipstaskdisburse["Thai"]))
		$tdatataskdisburse[".isUseToolTips"] = true;
}


	$tdatataskdisburse[".NCSearch"] = true;



$tdatataskdisburse[".shortTableName"] = "taskdisburse";
$tdatataskdisburse[".nSecOptions"] = 0;

$tdatataskdisburse[".mainTableOwnerID"] = "";
$tdatataskdisburse[".entityType"] = 0;
$tdatataskdisburse[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisburse[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisburse[".showAddInPopup"] = false;

$tdatataskdisburse[".showEditInPopup"] = false;

$tdatataskdisburse[".showViewInPopup"] = false;

$tdatataskdisburse[".listAjax"] = false;
//	temporary
//$tdatataskdisburse[".listAjax"] = false;

	$tdatataskdisburse[".audit"] = false;

	$tdatataskdisburse[".locking"] = false;


$pages = $tdatataskdisburse[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisburse[".edit"] = true;
	$tdatataskdisburse[".afterEditAction"] = 0;
	$tdatataskdisburse[".closePopupAfterEdit"] = 1;
	$tdatataskdisburse[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisburse[".add"] = true;
$tdatataskdisburse[".afterAddAction"] = 1;
$tdatataskdisburse[".closePopupAfterAdd"] = 1;
$tdatataskdisburse[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisburse[".list"] = true;
}



$tdatataskdisburse[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisburse[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisburse[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisburse[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisburse[".printFriendly"] = true;
}



$tdatataskdisburse[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisburse[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisburse[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisburse[".isUseAjaxSuggest"] = true;

$tdatataskdisburse[".rowHighlite"] = true;





$tdatataskdisburse[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisburse[".buttonsAdded"] = false;

$tdatataskdisburse[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisburse[".isUseTimeForSearch"] = false;


$tdatataskdisburse[".badgeColor"] = "db7093";


$tdatataskdisburse[".allSearchFields"] = array();
$tdatataskdisburse[".filterFields"] = array();
$tdatataskdisburse[".requiredSearchFields"] = array();

$tdatataskdisburse[".googleLikeFields"] = array();
$tdatataskdisburse[".googleLikeFields"][] = "projectID";
$tdatataskdisburse[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisburse[".googleLikeFields"][] = "progressStep";
$tdatataskdisburse[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisburse[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisburse[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisburse[".googleLikeFields"][] = "approveStatus";
$tdatataskdisburse[".googleLikeFields"][] = "approveDate";
$tdatataskdisburse[".googleLikeFields"][] = "approveReason";
$tdatataskdisburse[".googleLikeFields"][] = "entryUserName";
$tdatataskdisburse[".googleLikeFields"][] = "entryTime";



$tdatataskdisburse[".tableType"] = "list";

$tdatataskdisburse[".printerPageOrientation"] = 0;
$tdatataskdisburse[".nPrinterPageScale"] = 100;

$tdatataskdisburse[".nPrinterSplitRecords"] = 40;

$tdatataskdisburse[".geocodingEnabled"] = false;










$tdatataskdisburse[".pageSize"] = 20;

$tdatataskdisburse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskdisburse[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisburse[".orderindexes"] = array();


$tdatataskdisburse[".sqlHead"] = "SELECT id,  	projectID,  	trackDisburseDate,  	progressStep,  	disburseDesc,  	disburseAmount,  	disburseAttFille,  	approveStatus,  	approveDate,  	approveReason,  	entryUserName,  	entryTime";
$tdatataskdisburse[".sqlFrom"] = "FROM taskDisburse";
$tdatataskdisburse[".sqlWhereExpr"] = "";
$tdatataskdisburse[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisburse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisburse[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisburse[".highlightSearchResults"] = true;

$tableKeystaskdisburse = array();
$tableKeystaskdisburse[] = "id";
$tdatataskdisburse[".Keys"] = $tableKeystaskdisburse;


$tdatataskdisburse[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","id");
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


	$tdatataskdisburse["id"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","projectID");
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


	$tdatataskdisburse["projectID"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","trackDisburseDate");
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


	$tdatataskdisburse["trackDisburseDate"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","progressStep");
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


	$tdatataskdisburse["progressStep"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "progressStep";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","disburseDesc");
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


	$tdatataskdisburse["disburseDesc"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "disburseDesc";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","disburseAmount");
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


	$tdatataskdisburse["disburseAmount"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "disburseAmount";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","disburseAttFille");
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


	$tdatataskdisburse["disburseAttFille"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "disburseAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","approveStatus");
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


	$tdatataskdisburse["approveStatus"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","approveDate");
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


	$tdatataskdisburse["approveDate"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "approveDate";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","approveReason");
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


	$tdatataskdisburse["approveReason"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","entryUserName");
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


	$tdatataskdisburse["entryUserName"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburse","entryTime");
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


	$tdatataskdisburse["entryTime"] = $fdata;
		$tdatataskdisburse[".searchableFields"][] = "entryTime";


$tables_data["taskDisburse"]=&$tdatataskdisburse;
$field_labels["taskDisburse"] = &$fieldLabelstaskdisburse;
$fieldToolTips["taskDisburse"] = &$fieldToolTipstaskdisburse;
$placeHolders["taskDisburse"] = &$placeHolderstaskdisburse;
$page_titles["taskDisburse"] = &$pageTitlestaskdisburse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburse"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburse"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskDisburse"][0] = $masterParams;
				$masterTablesData["taskDisburse"][0]["masterKeys"] = array();
	$masterTablesData["taskDisburse"][0]["masterKeys"][]="id";
				$masterTablesData["taskDisburse"][0]["detailKeys"] = array();
	$masterTablesData["taskDisburse"][0]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusApprove";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusapprove";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskDisburse"][1] = $masterParams;
				$masterTablesData["taskDisburse"][1]["masterKeys"] = array();
	$masterTablesData["taskDisburse"][1]["masterKeys"][]="id";
				$masterTablesData["taskDisburse"][1]["detailKeys"] = array();
	$masterTablesData["taskDisburse"][1]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusScreen";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusscreen";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskDisburse"][2] = $masterParams;
				$masterTablesData["taskDisburse"][2]["masterKeys"] = array();
	$masterTablesData["taskDisburse"][2]["masterKeys"][]="id";
				$masterTablesData["taskDisburse"][2]["detailKeys"] = array();
	$masterTablesData["taskDisburse"][2]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisburse()
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
	"m_srcTableName" => "taskDisburse"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskDisburse";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskDisburse";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto10["m_sql"] = "trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburse";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskDisburse";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto14["m_sql"] = "disburseDesc";
$proto14["m_srcTableName"] = "taskDisburse";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto16["m_sql"] = "disburseAmount";
$proto16["m_srcTableName"] = "taskDisburse";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto18["m_sql"] = "disburseAttFille";
$proto18["m_srcTableName"] = "taskDisburse";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto20["m_sql"] = "approveStatus";
$proto20["m_srcTableName"] = "taskDisburse";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto22["m_sql"] = "approveDate";
$proto22["m_srcTableName"] = "taskDisburse";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto24["m_sql"] = "approveReason";
$proto24["m_srcTableName"] = "taskDisburse";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto26["m_sql"] = "entryUserName";
$proto26["m_srcTableName"] = "taskDisburse";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburse"
));

$proto28["m_sql"] = "entryTime";
$proto28["m_srcTableName"] = "taskDisburse";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "taskDisburse";
$proto31["m_srcTableName"] = "taskDisburse";
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
$proto30["m_srcTableName"] = "taskDisburse";
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
$proto0["m_srcTableName"]="taskDisburse";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisburse = createSqlQuery_taskdisburse();


	
				;

												

$tdatataskdisburse[".sqlquery"] = $queryData_taskdisburse;



include_once(getabspath("include/taskdisburse_events.php"));
$tableEvents["taskDisburse"] = new eventclass_taskdisburse;
$tdatataskdisburse[".hasEvents"] = true;

?>