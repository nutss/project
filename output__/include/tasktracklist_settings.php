<?php
$tdatatasktracklist = array();
$tdatatasktracklist[".searchableFields"] = array();
$tdatatasktracklist[".ShortName"] = "tasktracklist";
$tdatatasktracklist[".OwnerID"] = "";
$tdatatasktracklist[".OriginalTable"] = "taskTrack";


$tdatatasktracklist[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasktracklist[".originalPagesByType"] = $tdatatasktracklist[".pagesByType"];
$tdatatasktracklist[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasktracklist[".originalPages"] = $tdatatasktracklist[".pages"];
$tdatatasktracklist[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasktracklist[".originalDefaultPages"] = $tdatatasktracklist[".defaultPages"];

//	field labels
$fieldLabelstasktracklist = array();
$fieldToolTipstasktracklist = array();
$pageTitlestasktracklist = array();
$placeHolderstasktracklist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasktracklist["English"] = array();
	$fieldToolTipstasktracklist["English"] = array();
	$placeHolderstasktracklist["English"] = array();
	$pageTitlestasktracklist["English"] = array();
	$fieldLabelstasktracklist["English"]["id"] = "ID";
	$fieldToolTipstasktracklist["English"]["id"] = "";
	$placeHolderstasktracklist["English"]["id"] = "";
	$fieldLabelstasktracklist["English"]["projectID"] = "Project Name";
	$fieldToolTipstasktracklist["English"]["projectID"] = "";
	$placeHolderstasktracklist["English"]["projectID"] = "";
	$fieldLabelstasktracklist["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstasktracklist["English"]["entryUserName"] = "";
	$placeHolderstasktracklist["English"]["entryUserName"] = "";
	$fieldLabelstasktracklist["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstasktracklist["English"]["entryTime"] = "";
	$placeHolderstasktracklist["English"]["entryTime"] = "";
	$fieldLabelstasktracklist["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstasktracklist["English"]["progressStep"] = "";
	$placeHolderstasktracklist["English"]["progressStep"] = "";
	$fieldLabelstasktracklist["English"]["trackDesc"] = "Track Desc";
	$fieldToolTipstasktracklist["English"]["trackDesc"] = "";
	$placeHolderstasktracklist["English"]["trackDesc"] = "";
	$fieldLabelstasktracklist["English"]["trackAttFille"] = "Track Att Fille";
	$fieldToolTipstasktracklist["English"]["trackAttFille"] = "";
	$placeHolderstasktracklist["English"]["trackAttFille"] = "";
	$fieldLabelstasktracklist["English"]["trackDate"] = "Track Date";
	$fieldToolTipstasktracklist["English"]["trackDate"] = "";
	$placeHolderstasktracklist["English"]["trackDate"] = "";
	$fieldLabelstasktracklist["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstasktracklist["English"]["approveDate"] = "";
	$placeHolderstasktracklist["English"]["approveDate"] = "";
	$fieldLabelstasktracklist["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstasktracklist["English"]["approveStatus"] = "";
	$placeHolderstasktracklist["English"]["approveStatus"] = "";
	$fieldLabelstasktracklist["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstasktracklist["English"]["approveReason"] = "";
	$placeHolderstasktracklist["English"]["approveReason"] = "";
	$fieldLabelstasktracklist["English"]["progressDate"] = "Progress Date";
	$fieldToolTipstasktracklist["English"]["progressDate"] = "";
	$placeHolderstasktracklist["English"]["progressDate"] = "";
	$fieldLabelstasktracklist["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstasktracklist["English"]["progressStatus"] = "";
	$placeHolderstasktracklist["English"]["progressStatus"] = "";
	$fieldLabelstasktracklist["English"]["progressReason"] = "Progress Reason";
	$fieldToolTipstasktracklist["English"]["progressReason"] = "";
	$placeHolderstasktracklist["English"]["progressReason"] = "";
	$fieldLabelstasktracklist["English"]["contactName"] = "Contact Name";
	$fieldToolTipstasktracklist["English"]["contactName"] = "";
	$placeHolderstasktracklist["English"]["contactName"] = "";
	if (count($fieldToolTipstasktracklist["English"]))
		$tdatatasktracklist[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstasktracklist["Thai"] = array();
	$fieldToolTipstasktracklist["Thai"] = array();
	$placeHolderstasktracklist["Thai"] = array();
	$pageTitlestasktracklist["Thai"] = array();
	$fieldLabelstasktracklist["Thai"]["id"] = "ID";
	$fieldToolTipstasktracklist["Thai"]["id"] = "";
	$placeHolderstasktracklist["Thai"]["id"] = "";
	$fieldLabelstasktracklist["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstasktracklist["Thai"]["projectID"] = "";
	$placeHolderstasktracklist["Thai"]["projectID"] = "";
	$fieldLabelstasktracklist["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstasktracklist["Thai"]["entryUserName"] = "";
	$placeHolderstasktracklist["Thai"]["entryUserName"] = "";
	$fieldLabelstasktracklist["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstasktracklist["Thai"]["entryTime"] = "";
	$placeHolderstasktracklist["Thai"]["entryTime"] = "";
	$fieldLabelstasktracklist["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstasktracklist["Thai"]["progressStep"] = "";
	$placeHolderstasktracklist["Thai"]["progressStep"] = "";
	$fieldLabelstasktracklist["Thai"]["trackDesc"] = "รายละเอียดติดตามโครงการ";
	$fieldToolTipstasktracklist["Thai"]["trackDesc"] = "";
	$placeHolderstasktracklist["Thai"]["trackDesc"] = "";
	$fieldLabelstasktracklist["Thai"]["trackAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstasktracklist["Thai"]["trackAttFille"] = "";
	$placeHolderstasktracklist["Thai"]["trackAttFille"] = "";
	$fieldLabelstasktracklist["Thai"]["trackDate"] = "วันที่ติดตามโครงการ";
	$fieldToolTipstasktracklist["Thai"]["trackDate"] = "";
	$placeHolderstasktracklist["Thai"]["trackDate"] = "";
	$fieldLabelstasktracklist["Thai"]["approveDate"] = "วันที่อนุมัติงานตามงวด";
	$fieldToolTipstasktracklist["Thai"]["approveDate"] = "";
	$placeHolderstasktracklist["Thai"]["approveDate"] = "";
	$fieldLabelstasktracklist["Thai"]["approveStatus"] = "สถานะอนุมัติงานตามงวด";
	$fieldToolTipstasktracklist["Thai"]["approveStatus"] = "";
	$placeHolderstasktracklist["Thai"]["approveStatus"] = "";
	$fieldLabelstasktracklist["Thai"]["approveReason"] = "เหตุผลอนุมัติงานตามงวด";
	$fieldToolTipstasktracklist["Thai"]["approveReason"] = "";
	$placeHolderstasktracklist["Thai"]["approveReason"] = "";
	$fieldLabelstasktracklist["Thai"]["progressDate"] = "วันที่ตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktracklist["Thai"]["progressDate"] = "";
	$placeHolderstasktracklist["Thai"]["progressDate"] = "";
	$fieldLabelstasktracklist["Thai"]["progressStatus"] = "สถานะตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktracklist["Thai"]["progressStatus"] = "";
	$placeHolderstasktracklist["Thai"]["progressStatus"] = "";
	$fieldLabelstasktracklist["Thai"]["progressReason"] = "เหตุผลตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktracklist["Thai"]["progressReason"] = "";
	$placeHolderstasktracklist["Thai"]["progressReason"] = "";
	$fieldLabelstasktracklist["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipstasktracklist["Thai"]["contactName"] = "";
	$placeHolderstasktracklist["Thai"]["contactName"] = "";
	if (count($fieldToolTipstasktracklist["Thai"]))
		$tdatatasktracklist[".isUseToolTips"] = true;
}


	$tdatatasktracklist[".NCSearch"] = true;



$tdatatasktracklist[".shortTableName"] = "tasktracklist";
$tdatatasktracklist[".nSecOptions"] = 0;

$tdatatasktracklist[".mainTableOwnerID"] = "";
$tdatatasktracklist[".entityType"] = 1;
$tdatatasktracklist[".connId"] = "mc_at_192_168_1_111";


$tdatatasktracklist[".strOriginalTableName"] = "taskTrack";

	



$tdatatasktracklist[".showAddInPopup"] = false;

$tdatatasktracklist[".showEditInPopup"] = false;

$tdatatasktracklist[".showViewInPopup"] = false;

$tdatatasktracklist[".listAjax"] = false;
//	temporary
//$tdatatasktracklist[".listAjax"] = false;

	$tdatatasktracklist[".audit"] = false;

	$tdatatasktracklist[".locking"] = false;


$pages = $tdatatasktracklist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasktracklist[".edit"] = true;
	$tdatatasktracklist[".afterEditAction"] = 0;
	$tdatatasktracklist[".closePopupAfterEdit"] = 1;
	$tdatatasktracklist[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatasktracklist[".add"] = true;
$tdatatasktracklist[".afterAddAction"] = 0;
$tdatatasktracklist[".closePopupAfterAdd"] = 1;
$tdatatasktracklist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasktracklist[".list"] = true;
}



$tdatatasktracklist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasktracklist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasktracklist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasktracklist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasktracklist[".printFriendly"] = true;
}



$tdatatasktracklist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasktracklist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasktracklist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasktracklist[".isUseAjaxSuggest"] = true;

$tdatatasktracklist[".rowHighlite"] = true;





$tdatatasktracklist[".ajaxCodeSnippetAdded"] = false;

$tdatatasktracklist[".buttonsAdded"] = false;

$tdatatasktracklist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasktracklist[".isUseTimeForSearch"] = false;


$tdatatasktracklist[".badgeColor"] = "E8926F";


$tdatatasktracklist[".allSearchFields"] = array();
$tdatatasktracklist[".filterFields"] = array();
$tdatatasktracklist[".requiredSearchFields"] = array();

$tdatatasktracklist[".googleLikeFields"] = array();
$tdatatasktracklist[".googleLikeFields"][] = "projectID";
$tdatatasktracklist[".googleLikeFields"][] = "trackDate";
$tdatatasktracklist[".googleLikeFields"][] = "progressStep";
$tdatatasktracklist[".googleLikeFields"][] = "trackDesc";
$tdatatasktracklist[".googleLikeFields"][] = "trackAttFille";
$tdatatasktracklist[".googleLikeFields"][] = "contactName";
$tdatatasktracklist[".googleLikeFields"][] = "progressDate";
$tdatatasktracklist[".googleLikeFields"][] = "progressStatus";
$tdatatasktracklist[".googleLikeFields"][] = "progressReason";
$tdatatasktracklist[".googleLikeFields"][] = "approveDate";
$tdatatasktracklist[".googleLikeFields"][] = "approveStatus";
$tdatatasktracklist[".googleLikeFields"][] = "approveReason";
$tdatatasktracklist[".googleLikeFields"][] = "entryUserName";
$tdatatasktracklist[".googleLikeFields"][] = "entryTime";



$tdatatasktracklist[".tableType"] = "list";

$tdatatasktracklist[".printerPageOrientation"] = 0;
$tdatatasktracklist[".nPrinterPageScale"] = 100;

$tdatatasktracklist[".nPrinterSplitRecords"] = 40;

$tdatatasktracklist[".geocodingEnabled"] = false;










$tdatatasktracklist[".pageSize"] = 20;

$tdatatasktracklist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatasktracklist[".strOrderBy"] = $tstrOrderBy;

$tdatatasktracklist[".orderindexes"] = array();


$tdatatasktracklist[".sqlHead"] = "SELECT taskTrack.id,  	taskTrack.projectID,  	taskTrack.trackDate,  	taskTrack.progressStep,  	taskTrack.trackDesc,  	taskTrack.trackAttFille,  	taskTrack.contactName,  	taskTrack.progressDate,  	taskTrack.progressStatus,  	taskTrack.progressReason,  	taskTrack.approveDate,  	taskTrack.approveStatus,  	taskTrack.approveReason,  	taskTrack.entryUserName,  	taskTrack.entryTime";
$tdatatasktracklist[".sqlFrom"] = "FROM taskTrack";
$tdatatasktracklist[".sqlWhereExpr"] = "";
$tdatatasktracklist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasktracklist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasktracklist[".arrGroupsPerPage"] = $arrGPP;

$tdatatasktracklist[".highlightSearchResults"] = true;

$tableKeystasktracklist = array();
$tableKeystasktracklist[] = "id";
$tdatatasktracklist[".Keys"] = $tableKeystasktracklist;


$tdatatasktracklist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.id";

	
	
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


	$tdatatasktracklist["id"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.projectID";

	
	
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


	$tdatatasktracklist["projectID"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "projectID";
//	trackDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDate";
	$fdata["GoodName"] = "trackDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","trackDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "trackDate";

		$fdata["sourceSingle"] = "trackDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.trackDate";

	
	
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


	$tdatatasktracklist["trackDate"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "trackDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","progressStep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStep";

		$fdata["sourceSingle"] = "progressStep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.progressStep";

	
	
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


	$tdatatasktracklist["progressStep"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "progressStep";
//	trackDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "trackDesc";
	$fdata["GoodName"] = "trackDesc";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","trackDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackDesc";

		$fdata["sourceSingle"] = "trackDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.trackDesc";

	
	
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


	$tdatatasktracklist["trackDesc"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "trackDesc";
//	trackAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trackAttFille";
	$fdata["GoodName"] = "trackAttFille";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","trackAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "trackAttFille";

		$fdata["sourceSingle"] = "trackAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.trackAttFille";

	
	
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


	$tdatatasktracklist["trackAttFille"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "trackAttFille";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.contactName";

	
	
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


	$tdatatasktracklist["contactName"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "contactName";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","progressDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressDate";

		$fdata["sourceSingle"] = "progressDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.progressDate";

	
	
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


	$tdatatasktracklist["progressDate"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "progressDate";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","progressStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStatus";

		$fdata["sourceSingle"] = "progressStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.progressStatus";

	
	
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


	$tdatatasktracklist["progressStatus"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "progressStatus";
//	progressReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progressReason";
	$fdata["GoodName"] = "progressReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","progressReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressReason";

		$fdata["sourceSingle"] = "progressReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.progressReason";

	
	
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


	$tdatatasktracklist["progressReason"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "progressReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.approveDate";

	
	
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


	$tdatatasktracklist["approveDate"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.approveStatus";

	
	
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


	$tdatatasktracklist["approveStatus"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","approveReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveReason";

		$fdata["sourceSingle"] = "approveReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.approveReason";

	
	
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


	$tdatatasktracklist["approveReason"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.entryUserName";

	
	
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


	$tdatatasktracklist["entryUserName"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackList","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskTrack.entryTime";

	
	
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


	$tdatatasktracklist["entryTime"] = $fdata;
		$tdatatasktracklist[".searchableFields"][] = "entryTime";


$tables_data["taskTrackList"]=&$tdatatasktracklist;
$field_labels["taskTrackList"] = &$fieldLabelstasktracklist;
$fieldToolTips["taskTrackList"] = &$fieldToolTipstasktracklist;
$placeHolders["taskTrackList"] = &$placeHolderstasktracklist;
$page_titles["taskTrackList"] = &$pageTitlestasktracklist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskTrackList"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskTrackList"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasktracklist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskTrack.id,  	taskTrack.projectID,  	taskTrack.trackDate,  	taskTrack.progressStep,  	taskTrack.trackDesc,  	taskTrack.trackAttFille,  	taskTrack.contactName,  	taskTrack.progressDate,  	taskTrack.progressStatus,  	taskTrack.progressReason,  	taskTrack.approveDate,  	taskTrack.approveStatus,  	taskTrack.approveReason,  	taskTrack.entryUserName,  	taskTrack.entryTime";
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
	"m_srcTableName" => "taskTrackList"
));

$proto6["m_sql"] = "taskTrack.id";
$proto6["m_srcTableName"] = "taskTrackList";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto8["m_sql"] = "taskTrack.projectID";
$proto8["m_srcTableName"] = "taskTrackList";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto10["m_sql"] = "taskTrack.trackDate";
$proto10["m_srcTableName"] = "taskTrackList";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto12["m_sql"] = "taskTrack.progressStep";
$proto12["m_srcTableName"] = "taskTrackList";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDesc",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto14["m_sql"] = "taskTrack.trackDesc";
$proto14["m_srcTableName"] = "taskTrackList";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAttFille",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto16["m_sql"] = "taskTrack.trackAttFille";
$proto16["m_srcTableName"] = "taskTrackList";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto18["m_sql"] = "taskTrack.contactName";
$proto18["m_srcTableName"] = "taskTrackList";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto20["m_sql"] = "taskTrack.progressDate";
$proto20["m_srcTableName"] = "taskTrackList";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto22["m_sql"] = "taskTrack.progressStatus";
$proto22["m_srcTableName"] = "taskTrackList";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progressReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto24["m_sql"] = "taskTrack.progressReason";
$proto24["m_srcTableName"] = "taskTrackList";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto26["m_sql"] = "taskTrack.approveDate";
$proto26["m_srcTableName"] = "taskTrackList";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto28["m_sql"] = "taskTrack.approveStatus";
$proto28["m_srcTableName"] = "taskTrackList";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto30["m_sql"] = "taskTrack.approveReason";
$proto30["m_srcTableName"] = "taskTrackList";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto32["m_sql"] = "taskTrack.entryUserName";
$proto32["m_srcTableName"] = "taskTrackList";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackList"
));

$proto34["m_sql"] = "taskTrack.entryTime";
$proto34["m_srcTableName"] = "taskTrackList";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "taskTrack";
$proto37["m_srcTableName"] = "taskTrackList";
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
$proto36["m_srcTableName"] = "taskTrackList";
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
$proto0["m_srcTableName"]="taskTrackList";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasktracklist = createSqlQuery_tasktracklist();


	
				;

															

$tdatatasktracklist[".sqlquery"] = $queryData_tasktracklist;



include_once(getabspath("include/tasktracklist_events.php"));
$tableEvents["taskTrackList"] = new eventclass_tasktracklist;
$tdatatasktracklist[".hasEvents"] = true;

$query = &$queryData_tasktracklist;
$table = "taskTrackList";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>