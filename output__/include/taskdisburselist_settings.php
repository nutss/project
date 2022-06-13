<?php
$tdatataskdisburselist = array();
$tdatataskdisburselist[".searchableFields"] = array();
$tdatataskdisburselist[".ShortName"] = "taskdisburselist";
$tdatataskdisburselist[".OwnerID"] = "";
$tdatataskdisburselist[".OriginalTable"] = "taskDisburse";


$tdatataskdisburselist[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatataskdisburselist[".originalPagesByType"] = $tdatataskdisburselist[".pagesByType"];
$tdatataskdisburselist[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatataskdisburselist[".originalPages"] = $tdatataskdisburselist[".pages"];
$tdatataskdisburselist[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatataskdisburselist[".originalDefaultPages"] = $tdatataskdisburselist[".defaultPages"];

//	field labels
$fieldLabelstaskdisburselist = array();
$fieldToolTipstaskdisburselist = array();
$pageTitlestaskdisburselist = array();
$placeHolderstaskdisburselist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskdisburselist["English"] = array();
	$fieldToolTipstaskdisburselist["English"] = array();
	$placeHolderstaskdisburselist["English"] = array();
	$pageTitlestaskdisburselist["English"] = array();
	$fieldLabelstaskdisburselist["English"]["id"] = "ID";
	$fieldToolTipstaskdisburselist["English"]["id"] = "";
	$placeHolderstaskdisburselist["English"]["id"] = "";
	$fieldLabelstaskdisburselist["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskdisburselist["English"]["projectID"] = "";
	$placeHolderstaskdisburselist["English"]["projectID"] = "";
	$fieldLabelstaskdisburselist["English"]["trackDisburseDate"] = "Track Disburse Date";
	$fieldToolTipstaskdisburselist["English"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselist["English"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselist["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskdisburselist["English"]["progressStep"] = "";
	$placeHolderstaskdisburselist["English"]["progressStep"] = "";
	$fieldLabelstaskdisburselist["English"]["disburseStatus"] = "Disburse Status";
	$fieldToolTipstaskdisburselist["English"]["disburseStatus"] = "";
	$placeHolderstaskdisburselist["English"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselist["English"]["disburseDesc"] = "Disburse Desc";
	$fieldToolTipstaskdisburselist["English"]["disburseDesc"] = "";
	$placeHolderstaskdisburselist["English"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselist["English"]["disburseAttFille"] = "Disburse Att Fille";
	$fieldToolTipstaskdisburselist["English"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselist["English"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselist["English"]["disburseAmount"] = "Disburse Amount";
	$fieldToolTipstaskdisburselist["English"]["disburseAmount"] = "";
	$placeHolderstaskdisburselist["English"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselist["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskdisburselist["English"]["entryUserName"] = "";
	$placeHolderstaskdisburselist["English"]["entryUserName"] = "";
	$fieldLabelstaskdisburselist["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskdisburselist["English"]["entryTime"] = "";
	$placeHolderstaskdisburselist["English"]["entryTime"] = "";
	if (count($fieldToolTipstaskdisburselist["English"]))
		$tdatataskdisburselist[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskdisburselist["Thai"] = array();
	$fieldToolTipstaskdisburselist["Thai"] = array();
	$placeHolderstaskdisburselist["Thai"] = array();
	$pageTitlestaskdisburselist["Thai"] = array();
	$fieldLabelstaskdisburselist["Thai"]["id"] = "ID";
	$fieldToolTipstaskdisburselist["Thai"]["id"] = "";
	$placeHolderstaskdisburselist["Thai"]["id"] = "";
	$fieldLabelstaskdisburselist["Thai"]["projectID"] = "ชื่อโครวการ";
	$fieldToolTipstaskdisburselist["Thai"]["projectID"] = "";
	$placeHolderstaskdisburselist["Thai"]["projectID"] = "";
	$fieldLabelstaskdisburselist["Thai"]["trackDisburseDate"] = "วันที่เบิกจ่าย";
	$fieldToolTipstaskdisburselist["Thai"]["trackDisburseDate"] = "";
	$placeHolderstaskdisburselist["Thai"]["trackDisburseDate"] = "";
	$fieldLabelstaskdisburselist["Thai"]["progressStep"] = "รายละเอียดขั้นตอน";
	$fieldToolTipstaskdisburselist["Thai"]["progressStep"] = "";
	$placeHolderstaskdisburselist["Thai"]["progressStep"] = "";
	$fieldLabelstaskdisburselist["Thai"]["disburseStatus"] = "สถานะอนุมัติเบิกจ่าย";
	$fieldToolTipstaskdisburselist["Thai"]["disburseStatus"] = "";
	$placeHolderstaskdisburselist["Thai"]["disburseStatus"] = "";
	$fieldLabelstaskdisburselist["Thai"]["disburseDesc"] = "รายละเอียดเบิกจ่าย";
	$fieldToolTipstaskdisburselist["Thai"]["disburseDesc"] = "";
	$placeHolderstaskdisburselist["Thai"]["disburseDesc"] = "";
	$fieldLabelstaskdisburselist["Thai"]["disburseAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskdisburselist["Thai"]["disburseAttFille"] = "";
	$placeHolderstaskdisburselist["Thai"]["disburseAttFille"] = "";
	$fieldLabelstaskdisburselist["Thai"]["disburseAmount"] = "จำนวนเงินเบิกจ่าย";
	$fieldToolTipstaskdisburselist["Thai"]["disburseAmount"] = "";
	$placeHolderstaskdisburselist["Thai"]["disburseAmount"] = "";
	$fieldLabelstaskdisburselist["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskdisburselist["Thai"]["entryUserName"] = "";
	$placeHolderstaskdisburselist["Thai"]["entryUserName"] = "";
	$fieldLabelstaskdisburselist["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskdisburselist["Thai"]["entryTime"] = "";
	$placeHolderstaskdisburselist["Thai"]["entryTime"] = "";
	if (count($fieldToolTipstaskdisburselist["Thai"]))
		$tdatataskdisburselist[".isUseToolTips"] = true;
}


	$tdatataskdisburselist[".NCSearch"] = true;



$tdatataskdisburselist[".shortTableName"] = "taskdisburselist";
$tdatataskdisburselist[".nSecOptions"] = 0;

$tdatataskdisburselist[".mainTableOwnerID"] = "";
$tdatataskdisburselist[".entityType"] = 1;
$tdatataskdisburselist[".connId"] = "mc_at_192_168_1_111";


$tdatataskdisburselist[".strOriginalTableName"] = "taskDisburse";

	



$tdatataskdisburselist[".showAddInPopup"] = false;

$tdatataskdisburselist[".showEditInPopup"] = false;

$tdatataskdisburselist[".showViewInPopup"] = false;

$tdatataskdisburselist[".listAjax"] = false;
//	temporary
//$tdatataskdisburselist[".listAjax"] = false;

	$tdatataskdisburselist[".audit"] = false;

	$tdatataskdisburselist[".locking"] = false;


$pages = $tdatataskdisburselist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskdisburselist[".edit"] = true;
	$tdatataskdisburselist[".afterEditAction"] = 1;
	$tdatataskdisburselist[".closePopupAfterEdit"] = 1;
	$tdatataskdisburselist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskdisburselist[".add"] = true;
$tdatataskdisburselist[".afterAddAction"] = 1;
$tdatataskdisburselist[".closePopupAfterAdd"] = 1;
$tdatataskdisburselist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskdisburselist[".list"] = true;
}



$tdatataskdisburselist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskdisburselist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskdisburselist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskdisburselist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskdisburselist[".printFriendly"] = true;
}



$tdatataskdisburselist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskdisburselist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskdisburselist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskdisburselist[".isUseAjaxSuggest"] = true;

$tdatataskdisburselist[".rowHighlite"] = true;





$tdatataskdisburselist[".ajaxCodeSnippetAdded"] = false;

$tdatataskdisburselist[".buttonsAdded"] = false;

$tdatataskdisburselist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskdisburselist[".isUseTimeForSearch"] = false;


$tdatataskdisburselist[".badgeColor"] = "DC143C";


$tdatataskdisburselist[".allSearchFields"] = array();
$tdatataskdisburselist[".filterFields"] = array();
$tdatataskdisburselist[".requiredSearchFields"] = array();

$tdatataskdisburselist[".googleLikeFields"] = array();
$tdatataskdisburselist[".googleLikeFields"][] = "id";
$tdatataskdisburselist[".googleLikeFields"][] = "projectID";
$tdatataskdisburselist[".googleLikeFields"][] = "trackDisburseDate";
$tdatataskdisburselist[".googleLikeFields"][] = "progressStep";
$tdatataskdisburselist[".googleLikeFields"][] = "disburseStatus";
$tdatataskdisburselist[".googleLikeFields"][] = "disburseDesc";
$tdatataskdisburselist[".googleLikeFields"][] = "disburseAttFille";
$tdatataskdisburselist[".googleLikeFields"][] = "disburseAmount";
$tdatataskdisburselist[".googleLikeFields"][] = "entryUserName";
$tdatataskdisburselist[".googleLikeFields"][] = "entryTime";



$tdatataskdisburselist[".tableType"] = "list";

$tdatataskdisburselist[".printerPageOrientation"] = 0;
$tdatataskdisburselist[".nPrinterPageScale"] = 100;

$tdatataskdisburselist[".nPrinterSplitRecords"] = 40;

$tdatataskdisburselist[".geocodingEnabled"] = false;










$tdatataskdisburselist[".pageSize"] = 20;

$tdatataskdisburselist[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY projectID DESC, trackDisburseDate DESC";
$tdatataskdisburselist[".strOrderBy"] = $tstrOrderBy;

$tdatataskdisburselist[".orderindexes"] = array();
	$tdatataskdisburselist[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "projectID");

	$tdatataskdisburselist[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "trackDisburseDate");



$tdatataskdisburselist[".sqlHead"] = "SELECT id,  projectID,  trackDisburseDate,  progressStep,  disburseStatus,  disburseDesc,  disburseAttFille,  disburseAmount,  entryUserName,  entryTime";
$tdatataskdisburselist[".sqlFrom"] = "FROM taskDisburse";
$tdatataskdisburselist[".sqlWhereExpr"] = "";
$tdatataskdisburselist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskdisburselist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskdisburselist[".arrGroupsPerPage"] = $arrGPP;

$tdatataskdisburselist[".highlightSearchResults"] = true;

$tableKeystaskdisburselist = array();
$tableKeystaskdisburselist[] = "id";
$tdatataskdisburselist[".Keys"] = $tableKeystaskdisburselist;


$tdatataskdisburselist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","id");
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


	$tdatataskdisburselist["id"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","projectID");
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


	$tdatataskdisburselist["projectID"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "projectID";
//	trackDisburseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDisburseDate";
	$fdata["GoodName"] = "trackDisburseDate";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","trackDisburseDate");
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


	$tdatataskdisburselist["trackDisburseDate"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "trackDisburseDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","progressStep");
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


	$tdatataskdisburselist["progressStep"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "progressStep";
//	disburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "disburseStatus";
	$fdata["GoodName"] = "disburseStatus";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","disburseStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disburseStatus";

		$fdata["sourceSingle"] = "disburseStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disburseStatus";

	
	
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


	$tdatataskdisburselist["disburseStatus"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "disburseStatus";
//	disburseDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "disburseDesc";
	$fdata["GoodName"] = "disburseDesc";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","disburseDesc");
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


	$tdatataskdisburselist["disburseDesc"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "disburseDesc";
//	disburseAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disburseAttFille";
	$fdata["GoodName"] = "disburseAttFille";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","disburseAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "disburseAttFille";

		$fdata["sourceSingle"] = "disburseAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disburseAttFille";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatataskdisburselist["disburseAttFille"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "disburseAttFille";
//	disburseAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disburseAmount";
	$fdata["GoodName"] = "disburseAmount";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","disburseAmount");
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


	$tdatataskdisburselist["disburseAmount"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "disburseAmount";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","entryUserName");
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


	$tdatataskdisburselist["entryUserName"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskDisburse";
	$fdata["Label"] = GetFieldLabel("taskDisburseList","entryTime");
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


	$tdatataskdisburselist["entryTime"] = $fdata;
		$tdatataskdisburselist[".searchableFields"][] = "entryTime";


$tables_data["taskDisburseList"]=&$tdatataskdisburselist;
$field_labels["taskDisburseList"] = &$fieldLabelstaskdisburselist;
$fieldToolTips["taskDisburseList"] = &$fieldToolTipstaskdisburselist;
$placeHolders["taskDisburseList"] = &$placeHolderstaskdisburselist;
$page_titles["taskDisburseList"] = &$pageTitlestaskdisburselist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskDisburseList"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskDisburseList"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskdisburselist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  projectID,  trackDisburseDate,  progressStep,  disburseStatus,  disburseDesc,  disburseAttFille,  disburseAmount,  entryUserName,  entryTime";
$proto0["m_strFrom"] = "FROM taskDisburse";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY projectID DESC, trackDisburseDate DESC";
	
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
	"m_srcTableName" => "taskDisburseList"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskDisburseList";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskDisburseList";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto10["m_sql"] = "trackDisburseDate";
$proto10["m_srcTableName"] = "taskDisburseList";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskDisburseList";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseStatus",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto14["m_sql"] = "disburseStatus";
$proto14["m_srcTableName"] = "taskDisburseList";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseDesc",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto16["m_sql"] = "disburseDesc";
$proto16["m_srcTableName"] = "taskDisburseList";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAttFille",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto18["m_sql"] = "disburseAttFille";
$proto18["m_srcTableName"] = "taskDisburseList";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto20["m_sql"] = "disburseAmount";
$proto20["m_srcTableName"] = "taskDisburseList";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "taskDisburseList";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "taskDisburseList";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "taskDisburse";
$proto27["m_srcTableName"] = "taskDisburseList";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "projectID";
$proto27["m_columns"][] = "trackDisburseDate";
$proto27["m_columns"][] = "progressStep";
$proto27["m_columns"][] = "disburseStatus";
$proto27["m_columns"][] = "disburseDesc";
$proto27["m_columns"][] = "disburseAttFille";
$proto27["m_columns"][] = "disburseAmount";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "entryTime";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "taskDisburse";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "taskDisburseList";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "trackDisburseDate",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "taskDisburseList"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskDisburseList";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskdisburselist = createSqlQuery_taskdisburselist();


	
				;

										

$tdatataskdisburselist[".sqlquery"] = $queryData_taskdisburselist;



$tableEvents["taskDisburseList"] = new eventsBase;
$tdatataskdisburselist[".hasEvents"] = false;

?>