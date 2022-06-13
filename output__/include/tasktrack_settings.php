<?php
$tdatatasktrack = array();
$tdatatasktrack[".searchableFields"] = array();
$tdatatasktrack[".ShortName"] = "tasktrack";
$tdatatasktrack[".OwnerID"] = "";
$tdatatasktrack[".OriginalTable"] = "taskTrack";


$tdatatasktrack[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasktrack[".originalPagesByType"] = $tdatatasktrack[".pagesByType"];
$tdatatasktrack[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasktrack[".originalPages"] = $tdatatasktrack[".pages"];
$tdatatasktrack[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasktrack[".originalDefaultPages"] = $tdatatasktrack[".defaultPages"];

//	field labels
$fieldLabelstasktrack = array();
$fieldToolTipstasktrack = array();
$pageTitlestasktrack = array();
$placeHolderstasktrack = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasktrack["English"] = array();
	$fieldToolTipstasktrack["English"] = array();
	$placeHolderstasktrack["English"] = array();
	$pageTitlestasktrack["English"] = array();
	$fieldLabelstasktrack["English"]["id"] = "ID";
	$fieldToolTipstasktrack["English"]["id"] = "";
	$placeHolderstasktrack["English"]["id"] = "";
	$fieldLabelstasktrack["English"]["projectID"] = "Project ID";
	$fieldToolTipstasktrack["English"]["projectID"] = "";
	$placeHolderstasktrack["English"]["projectID"] = "";
	$fieldLabelstasktrack["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstasktrack["English"]["entryUserName"] = "";
	$placeHolderstasktrack["English"]["entryUserName"] = "";
	$fieldLabelstasktrack["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstasktrack["English"]["entryTime"] = "";
	$placeHolderstasktrack["English"]["entryTime"] = "";
	$fieldLabelstasktrack["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstasktrack["English"]["progressStep"] = "";
	$placeHolderstasktrack["English"]["progressStep"] = "";
	$fieldLabelstasktrack["English"]["trackDesc"] = "Track Desc";
	$fieldToolTipstasktrack["English"]["trackDesc"] = "";
	$placeHolderstasktrack["English"]["trackDesc"] = "";
	$fieldLabelstasktrack["English"]["trackAttFille"] = "Track Att Fille";
	$fieldToolTipstasktrack["English"]["trackAttFille"] = "";
	$placeHolderstasktrack["English"]["trackAttFille"] = "";
	$fieldLabelstasktrack["English"]["trackDate"] = "Track Date";
	$fieldToolTipstasktrack["English"]["trackDate"] = "";
	$placeHolderstasktrack["English"]["trackDate"] = "";
	$fieldLabelstasktrack["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstasktrack["English"]["approveDate"] = "";
	$placeHolderstasktrack["English"]["approveDate"] = "";
	$fieldLabelstasktrack["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstasktrack["English"]["approveStatus"] = "";
	$placeHolderstasktrack["English"]["approveStatus"] = "";
	$fieldLabelstasktrack["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstasktrack["English"]["approveReason"] = "";
	$placeHolderstasktrack["English"]["approveReason"] = "";
	$fieldLabelstasktrack["English"]["contactName"] = "Contact Name";
	$fieldToolTipstasktrack["English"]["contactName"] = "";
	$placeHolderstasktrack["English"]["contactName"] = "";
	$fieldLabelstasktrack["English"]["progressDate"] = "Progress Date";
	$fieldToolTipstasktrack["English"]["progressDate"] = "";
	$placeHolderstasktrack["English"]["progressDate"] = "";
	$fieldLabelstasktrack["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstasktrack["English"]["progressStatus"] = "";
	$placeHolderstasktrack["English"]["progressStatus"] = "";
	$fieldLabelstasktrack["English"]["progressReason"] = "Progress Reason";
	$fieldToolTipstasktrack["English"]["progressReason"] = "";
	$placeHolderstasktrack["English"]["progressReason"] = "";
	if (count($fieldToolTipstasktrack["English"]))
		$tdatatasktrack[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstasktrack["Thai"] = array();
	$fieldToolTipstasktrack["Thai"] = array();
	$placeHolderstasktrack["Thai"] = array();
	$pageTitlestasktrack["Thai"] = array();
	$fieldLabelstasktrack["Thai"]["id"] = "ID";
	$fieldToolTipstasktrack["Thai"]["id"] = "";
	$placeHolderstasktrack["Thai"]["id"] = "";
	$fieldLabelstasktrack["Thai"]["projectID"] = "Project ID";
	$fieldToolTipstasktrack["Thai"]["projectID"] = "";
	$placeHolderstasktrack["Thai"]["projectID"] = "";
	$fieldLabelstasktrack["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstasktrack["Thai"]["entryUserName"] = "";
	$placeHolderstasktrack["Thai"]["entryUserName"] = "";
	$fieldLabelstasktrack["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstasktrack["Thai"]["entryTime"] = "";
	$placeHolderstasktrack["Thai"]["entryTime"] = "";
	$fieldLabelstasktrack["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstasktrack["Thai"]["progressStep"] = "";
	$placeHolderstasktrack["Thai"]["progressStep"] = "";
	$fieldLabelstasktrack["Thai"]["trackDesc"] = "รายละเอียดติดตามงาน";
	$fieldToolTipstasktrack["Thai"]["trackDesc"] = "";
	$placeHolderstasktrack["Thai"]["trackDesc"] = "";
	$fieldLabelstasktrack["Thai"]["trackAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstasktrack["Thai"]["trackAttFille"] = "";
	$placeHolderstasktrack["Thai"]["trackAttFille"] = "";
	$fieldLabelstasktrack["Thai"]["trackDate"] = "วันที่ติดตามงาน";
	$fieldToolTipstasktrack["Thai"]["trackDate"] = "";
	$placeHolderstasktrack["Thai"]["trackDate"] = "";
	$fieldLabelstasktrack["Thai"]["approveDate"] = "วันที่อนุมัติงานตามงวด";
	$fieldToolTipstasktrack["Thai"]["approveDate"] = "";
	$placeHolderstasktrack["Thai"]["approveDate"] = "";
	$fieldLabelstasktrack["Thai"]["approveStatus"] = "สถานะอนุมัติงานตามงวด";
	$fieldToolTipstasktrack["Thai"]["approveStatus"] = "";
	$placeHolderstasktrack["Thai"]["approveStatus"] = "";
	$fieldLabelstasktrack["Thai"]["approveReason"] = "เหตุผลอนุมัติงานตามงวด";
	$fieldToolTipstasktrack["Thai"]["approveReason"] = "";
	$placeHolderstasktrack["Thai"]["approveReason"] = "";
	$fieldLabelstasktrack["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipstasktrack["Thai"]["contactName"] = "";
	$placeHolderstasktrack["Thai"]["contactName"] = "";
	$fieldLabelstasktrack["Thai"]["progressDate"] = "วันที่ตรวจสอบความคืบหน้า";
	$fieldToolTipstasktrack["Thai"]["progressDate"] = "";
	$placeHolderstasktrack["Thai"]["progressDate"] = "";
	$fieldLabelstasktrack["Thai"]["progressStatus"] = "สถานะตรวจสอบความคืบหน้า";
	$fieldToolTipstasktrack["Thai"]["progressStatus"] = "";
	$placeHolderstasktrack["Thai"]["progressStatus"] = "";
	$fieldLabelstasktrack["Thai"]["progressReason"] = "เหตุผลตรวจสอบความคืบหน้า";
	$fieldToolTipstasktrack["Thai"]["progressReason"] = "";
	$placeHolderstasktrack["Thai"]["progressReason"] = "";
	if (count($fieldToolTipstasktrack["Thai"]))
		$tdatatasktrack[".isUseToolTips"] = true;
}


	$tdatatasktrack[".NCSearch"] = true;



$tdatatasktrack[".shortTableName"] = "tasktrack";
$tdatatasktrack[".nSecOptions"] = 0;

$tdatatasktrack[".mainTableOwnerID"] = "";
$tdatatasktrack[".entityType"] = 0;
$tdatatasktrack[".connId"] = "mc_at_192_168_1_111";


$tdatatasktrack[".strOriginalTableName"] = "taskTrack";

	



$tdatatasktrack[".showAddInPopup"] = false;

$tdatatasktrack[".showEditInPopup"] = false;

$tdatatasktrack[".showViewInPopup"] = false;

$tdatatasktrack[".listAjax"] = false;
//	temporary
//$tdatatasktrack[".listAjax"] = false;

	$tdatatasktrack[".audit"] = false;

	$tdatatasktrack[".locking"] = false;


$pages = $tdatatasktrack[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasktrack[".edit"] = true;
	$tdatatasktrack[".afterEditAction"] = 0;
	$tdatatasktrack[".closePopupAfterEdit"] = 1;
	$tdatatasktrack[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatasktrack[".add"] = true;
$tdatatasktrack[".afterAddAction"] = 0;
$tdatatasktrack[".closePopupAfterAdd"] = 1;
$tdatatasktrack[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasktrack[".list"] = true;
}



$tdatatasktrack[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasktrack[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasktrack[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasktrack[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasktrack[".printFriendly"] = true;
}



$tdatatasktrack[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasktrack[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasktrack[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasktrack[".isUseAjaxSuggest"] = true;

$tdatatasktrack[".rowHighlite"] = true;





$tdatatasktrack[".ajaxCodeSnippetAdded"] = false;

$tdatatasktrack[".buttonsAdded"] = false;

$tdatatasktrack[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasktrack[".isUseTimeForSearch"] = false;


$tdatatasktrack[".badgeColor"] = "0080c0";


$tdatatasktrack[".allSearchFields"] = array();
$tdatatasktrack[".filterFields"] = array();
$tdatatasktrack[".requiredSearchFields"] = array();

$tdatatasktrack[".googleLikeFields"] = array();
$tdatatasktrack[".googleLikeFields"][] = "projectID";
$tdatatasktrack[".googleLikeFields"][] = "trackDate";
$tdatatasktrack[".googleLikeFields"][] = "progressStep";
$tdatatasktrack[".googleLikeFields"][] = "trackDesc";
$tdatatasktrack[".googleLikeFields"][] = "trackAttFille";
$tdatatasktrack[".googleLikeFields"][] = "contactName";
$tdatatasktrack[".googleLikeFields"][] = "progressDate";
$tdatatasktrack[".googleLikeFields"][] = "progressStatus";
$tdatatasktrack[".googleLikeFields"][] = "progressReason";
$tdatatasktrack[".googleLikeFields"][] = "approveDate";
$tdatatasktrack[".googleLikeFields"][] = "approveStatus";
$tdatatasktrack[".googleLikeFields"][] = "approveReason";
$tdatatasktrack[".googleLikeFields"][] = "entryUserName";
$tdatatasktrack[".googleLikeFields"][] = "entryTime";



$tdatatasktrack[".tableType"] = "list";

$tdatatasktrack[".printerPageOrientation"] = 0;
$tdatatasktrack[".nPrinterPageScale"] = 100;

$tdatatasktrack[".nPrinterSplitRecords"] = 40;

$tdatatasktrack[".geocodingEnabled"] = false;










$tdatatasktrack[".pageSize"] = 20;

$tdatatasktrack[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatasktrack[".strOrderBy"] = $tstrOrderBy;

$tdatatasktrack[".orderindexes"] = array();


$tdatatasktrack[".sqlHead"] = "SELECT id,  	projectID,  	trackDate,  	progressStep,  	trackDesc,  	trackAttFille,  	contactName,  	progressDate,  	progressStatus,  	progressReason,  	approveDate,  	approveStatus,  	approveReason,  	entryUserName,  	entryTime";
$tdatatasktrack[".sqlFrom"] = "FROM taskTrack";
$tdatatasktrack[".sqlWhereExpr"] = "";
$tdatatasktrack[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasktrack[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasktrack[".arrGroupsPerPage"] = $arrGPP;

$tdatatasktrack[".highlightSearchResults"] = true;

$tableKeystasktrack = array();
$tableKeystasktrack[] = "id";
$tdatatasktrack[".Keys"] = $tableKeystasktrack;


$tdatatasktrack[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","id");
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


	$tdatatasktrack["id"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","projectID");
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


	$tdatatasktrack["projectID"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "projectID";
//	trackDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDate";
	$fdata["GoodName"] = "trackDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","trackDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "trackDate";

		$fdata["sourceSingle"] = "trackDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackDate";

	
	
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


	$tdatatasktrack["trackDate"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "trackDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","progressStep");
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


	$tdatatasktrack["progressStep"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "progressStep";
//	trackDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "trackDesc";
	$fdata["GoodName"] = "trackDesc";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","trackDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackDesc";

		$fdata["sourceSingle"] = "trackDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackDesc";

	
	
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


	$tdatatasktrack["trackDesc"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "trackDesc";
//	trackAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trackAttFille";
	$fdata["GoodName"] = "trackAttFille";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","trackAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "trackAttFille";

		$fdata["sourceSingle"] = "trackAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackAttFille";

	
	
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


	$tdatatasktrack["trackAttFille"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "trackAttFille";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactName";

	
	
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
	$edata["LookupTable"] = "CB_ProjectContact01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contactName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contactName";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "contactName";

	
	
	
	

	
	
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


	$tdatatasktrack["contactName"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "contactName";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","progressDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressDate";

		$fdata["sourceSingle"] = "progressDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressDate";

	
	
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


	$tdatatasktrack["progressDate"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "progressDate";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","progressStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStatus";

		$fdata["sourceSingle"] = "progressStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressStatus";

	
	
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
	$edata["LookupValues"][] = "ผ่าน";
	$edata["LookupValues"][] = "ไม่ผ่าน";
	$edata["LookupValues"][] = "รอตรวจสอบ";

	
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


	$tdatatasktrack["progressStatus"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "progressStatus";
//	progressReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progressReason";
	$fdata["GoodName"] = "progressReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","progressReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressReason";

		$fdata["sourceSingle"] = "progressReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressReason";

	
	
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


	$tdatatasktrack["progressReason"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "progressReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","approveDate");
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


	$tdatatasktrack["approveDate"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","approveStatus");
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


	$tdatatasktrack["approveStatus"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","approveReason");
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


	$tdatatasktrack["approveReason"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","entryUserName");
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


	$tdatatasktrack["entryUserName"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrack","entryTime");
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


	$tdatatasktrack["entryTime"] = $fdata;
		$tdatatasktrack[".searchableFields"][] = "entryTime";


$tables_data["taskTrack"]=&$tdatatasktrack;
$field_labels["taskTrack"] = &$fieldLabelstasktrack;
$fieldToolTips["taskTrack"] = &$fieldToolTipstasktrack;
$placeHolders["taskTrack"] = &$placeHolderstasktrack;
$page_titles["taskTrack"] = &$pageTitlestasktrack;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskTrack"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskTrack"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskTrack"][0] = $masterParams;
				$masterTablesData["taskTrack"][0]["masterKeys"] = array();
	$masterTablesData["taskTrack"][0]["masterKeys"][]="id";
				$masterTablesData["taskTrack"][0]["detailKeys"] = array();
	$masterTablesData["taskTrack"][0]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskTrack"][1] = $masterParams;
				$masterTablesData["taskTrack"][1]["masterKeys"] = array();
	$masterTablesData["taskTrack"][1]["masterKeys"][]="id";
				$masterTablesData["taskTrack"][1]["detailKeys"] = array();
	$masterTablesData["taskTrack"][1]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskTrack"][2] = $masterParams;
				$masterTablesData["taskTrack"][2]["masterKeys"] = array();
	$masterTablesData["taskTrack"][2]["masterKeys"][]="id";
				$masterTablesData["taskTrack"][2]["detailKeys"] = array();
	$masterTablesData["taskTrack"][2]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasktrack()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectID,  	trackDate,  	progressStep,  	trackDesc,  	trackAttFille,  	contactName,  	progressDate,  	progressStatus,  	progressReason,  	approveDate,  	approveStatus,  	approveReason,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM taskTrack";
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
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskTrack";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskTrack";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto10["m_sql"] = "trackDate";
$proto10["m_srcTableName"] = "taskTrack";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskTrack";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDesc",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto14["m_sql"] = "trackDesc";
$proto14["m_srcTableName"] = "taskTrack";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAttFille",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto16["m_sql"] = "trackAttFille";
$proto16["m_srcTableName"] = "taskTrack";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto18["m_sql"] = "contactName";
$proto18["m_srcTableName"] = "taskTrack";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto20["m_sql"] = "progressDate";
$proto20["m_srcTableName"] = "taskTrack";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto22["m_sql"] = "progressStatus";
$proto22["m_srcTableName"] = "taskTrack";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progressReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto24["m_sql"] = "progressReason";
$proto24["m_srcTableName"] = "taskTrack";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto26["m_sql"] = "approveDate";
$proto26["m_srcTableName"] = "taskTrack";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto28["m_sql"] = "approveStatus";
$proto28["m_srcTableName"] = "taskTrack";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto30["m_sql"] = "approveReason";
$proto30["m_srcTableName"] = "taskTrack";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto32["m_sql"] = "entryUserName";
$proto32["m_srcTableName"] = "taskTrack";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrack"
));

$proto34["m_sql"] = "entryTime";
$proto34["m_srcTableName"] = "taskTrack";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "taskTrack";
$proto37["m_srcTableName"] = "taskTrack";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "projectID";
$proto37["m_columns"][] = "trackDate";
$proto37["m_columns"][] = "progressStep";
$proto37["m_columns"][] = "trackDesc";
$proto37["m_columns"][] = "trackAttFille";
$proto37["m_columns"][] = "contactName";
$proto37["m_columns"][] = "progressDate";
$proto37["m_columns"][] = "progressStatus";
$proto37["m_columns"][] = "progressReason";
$proto37["m_columns"][] = "approveDate";
$proto37["m_columns"][] = "approveStatus";
$proto37["m_columns"][] = "approveReason";
$proto37["m_columns"][] = "entryUserName";
$proto37["m_columns"][] = "entryTime";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "taskTrack";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "taskTrack";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskTrack";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasktrack = createSqlQuery_tasktrack();


	
				;

															

$tdatatasktrack[".sqlquery"] = $queryData_tasktrack;



include_once(getabspath("include/tasktrack_events.php"));
$tableEvents["taskTrack"] = new eventclass_tasktrack;
$tdatatasktrack[".hasEvents"] = true;

?>