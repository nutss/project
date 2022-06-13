<?php
$tdatatasktrackapprove = array();
$tdatatasktrackapprove[".searchableFields"] = array();
$tdatatasktrackapprove[".ShortName"] = "tasktrackapprove";
$tdatatasktrackapprove[".OwnerID"] = "";
$tdatatasktrackapprove[".OriginalTable"] = "taskTrack";


$tdatatasktrackapprove[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasktrackapprove[".originalPagesByType"] = $tdatatasktrackapprove[".pagesByType"];
$tdatatasktrackapprove[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasktrackapprove[".originalPages"] = $tdatatasktrackapprove[".pages"];
$tdatatasktrackapprove[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasktrackapprove[".originalDefaultPages"] = $tdatatasktrackapprove[".defaultPages"];

//	field labels
$fieldLabelstasktrackapprove = array();
$fieldToolTipstasktrackapprove = array();
$pageTitlestasktrackapprove = array();
$placeHolderstasktrackapprove = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasktrackapprove["English"] = array();
	$fieldToolTipstasktrackapprove["English"] = array();
	$placeHolderstasktrackapprove["English"] = array();
	$pageTitlestasktrackapprove["English"] = array();
	$fieldLabelstasktrackapprove["English"]["id"] = "ID";
	$fieldToolTipstasktrackapprove["English"]["id"] = "";
	$placeHolderstasktrackapprove["English"]["id"] = "";
	$fieldLabelstasktrackapprove["English"]["projectID"] = "Project Name";
	$fieldToolTipstasktrackapprove["English"]["projectID"] = "";
	$placeHolderstasktrackapprove["English"]["projectID"] = "";
	$fieldLabelstasktrackapprove["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstasktrackapprove["English"]["entryUserName"] = "";
	$placeHolderstasktrackapprove["English"]["entryUserName"] = "";
	$fieldLabelstasktrackapprove["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstasktrackapprove["English"]["entryTime"] = "";
	$placeHolderstasktrackapprove["English"]["entryTime"] = "";
	$fieldLabelstasktrackapprove["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstasktrackapprove["English"]["progressStep"] = "";
	$placeHolderstasktrackapprove["English"]["progressStep"] = "";
	$fieldLabelstasktrackapprove["English"]["trackDesc"] = "Track Desc";
	$fieldToolTipstasktrackapprove["English"]["trackDesc"] = "";
	$placeHolderstasktrackapprove["English"]["trackDesc"] = "";
	$fieldLabelstasktrackapprove["English"]["trackAttFille"] = "Track Att Fille";
	$fieldToolTipstasktrackapprove["English"]["trackAttFille"] = "";
	$placeHolderstasktrackapprove["English"]["trackAttFille"] = "";
	$fieldLabelstasktrackapprove["English"]["trackDate"] = "Track Date";
	$fieldToolTipstasktrackapprove["English"]["trackDate"] = "";
	$placeHolderstasktrackapprove["English"]["trackDate"] = "";
	$fieldLabelstasktrackapprove["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstasktrackapprove["English"]["approveDate"] = "";
	$placeHolderstasktrackapprove["English"]["approveDate"] = "";
	$fieldLabelstasktrackapprove["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstasktrackapprove["English"]["approveStatus"] = "";
	$placeHolderstasktrackapprove["English"]["approveStatus"] = "";
	$fieldLabelstasktrackapprove["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstasktrackapprove["English"]["approveReason"] = "";
	$placeHolderstasktrackapprove["English"]["approveReason"] = "";
	$fieldLabelstasktrackapprove["English"]["progressDate"] = "Progress Date";
	$fieldToolTipstasktrackapprove["English"]["progressDate"] = "";
	$placeHolderstasktrackapprove["English"]["progressDate"] = "";
	$fieldLabelstasktrackapprove["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstasktrackapprove["English"]["progressStatus"] = "";
	$placeHolderstasktrackapprove["English"]["progressStatus"] = "";
	$fieldLabelstasktrackapprove["English"]["progressReason"] = "Progress Reason";
	$fieldToolTipstasktrackapprove["English"]["progressReason"] = "";
	$placeHolderstasktrackapprove["English"]["progressReason"] = "";
	$fieldLabelstasktrackapprove["English"]["contactName"] = "Contact Name";
	$fieldToolTipstasktrackapprove["English"]["contactName"] = "";
	$placeHolderstasktrackapprove["English"]["contactName"] = "";
	if (count($fieldToolTipstasktrackapprove["English"]))
		$tdatatasktrackapprove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstasktrackapprove["Thai"] = array();
	$fieldToolTipstasktrackapprove["Thai"] = array();
	$placeHolderstasktrackapprove["Thai"] = array();
	$pageTitlestasktrackapprove["Thai"] = array();
	$fieldLabelstasktrackapprove["Thai"]["id"] = "ID";
	$fieldToolTipstasktrackapprove["Thai"]["id"] = "";
	$placeHolderstasktrackapprove["Thai"]["id"] = "";
	$fieldLabelstasktrackapprove["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstasktrackapprove["Thai"]["projectID"] = "";
	$placeHolderstasktrackapprove["Thai"]["projectID"] = "";
	$fieldLabelstasktrackapprove["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstasktrackapprove["Thai"]["entryUserName"] = "";
	$placeHolderstasktrackapprove["Thai"]["entryUserName"] = "";
	$fieldLabelstasktrackapprove["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstasktrackapprove["Thai"]["entryTime"] = "";
	$placeHolderstasktrackapprove["Thai"]["entryTime"] = "";
	$fieldLabelstasktrackapprove["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstasktrackapprove["Thai"]["progressStep"] = "";
	$placeHolderstasktrackapprove["Thai"]["progressStep"] = "";
	$fieldLabelstasktrackapprove["Thai"]["trackDesc"] = "รายละเอียดติดตามโครงการ";
	$fieldToolTipstasktrackapprove["Thai"]["trackDesc"] = "";
	$placeHolderstasktrackapprove["Thai"]["trackDesc"] = "";
	$fieldLabelstasktrackapprove["Thai"]["trackAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstasktrackapprove["Thai"]["trackAttFille"] = "";
	$placeHolderstasktrackapprove["Thai"]["trackAttFille"] = "";
	$fieldLabelstasktrackapprove["Thai"]["trackDate"] = "วันที่ติดตามโครงการ";
	$fieldToolTipstasktrackapprove["Thai"]["trackDate"] = "";
	$placeHolderstasktrackapprove["Thai"]["trackDate"] = "";
	$fieldLabelstasktrackapprove["Thai"]["approveDate"] = "วันที่อนุมัติงานตามงวด";
	$fieldToolTipstasktrackapprove["Thai"]["approveDate"] = "";
	$placeHolderstasktrackapprove["Thai"]["approveDate"] = "";
	$fieldLabelstasktrackapprove["Thai"]["approveStatus"] = "สถานะอนุมัติงานตามงวด";
	$fieldToolTipstasktrackapprove["Thai"]["approveStatus"] = "";
	$placeHolderstasktrackapprove["Thai"]["approveStatus"] = "";
	$fieldLabelstasktrackapprove["Thai"]["approveReason"] = "เหตุผลอนุมัติงานตามงวด";
	$fieldToolTipstasktrackapprove["Thai"]["approveReason"] = "";
	$placeHolderstasktrackapprove["Thai"]["approveReason"] = "";
	$fieldLabelstasktrackapprove["Thai"]["progressDate"] = "วันที่ตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktrackapprove["Thai"]["progressDate"] = "";
	$placeHolderstasktrackapprove["Thai"]["progressDate"] = "";
	$fieldLabelstasktrackapprove["Thai"]["progressStatus"] = "สถานะตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktrackapprove["Thai"]["progressStatus"] = "";
	$placeHolderstasktrackapprove["Thai"]["progressStatus"] = "";
	$fieldLabelstasktrackapprove["Thai"]["progressReason"] = "เหตุผลตรวจสอบความก้าวหน้า";
	$fieldToolTipstasktrackapprove["Thai"]["progressReason"] = "";
	$placeHolderstasktrackapprove["Thai"]["progressReason"] = "";
	$fieldLabelstasktrackapprove["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipstasktrackapprove["Thai"]["contactName"] = "";
	$placeHolderstasktrackapprove["Thai"]["contactName"] = "";
	if (count($fieldToolTipstasktrackapprove["Thai"]))
		$tdatatasktrackapprove[".isUseToolTips"] = true;
}


	$tdatatasktrackapprove[".NCSearch"] = true;



$tdatatasktrackapprove[".shortTableName"] = "tasktrackapprove";
$tdatatasktrackapprove[".nSecOptions"] = 0;

$tdatatasktrackapprove[".mainTableOwnerID"] = "";
$tdatatasktrackapprove[".entityType"] = 1;
$tdatatasktrackapprove[".connId"] = "mc_at_192_168_1_111";


$tdatatasktrackapprove[".strOriginalTableName"] = "taskTrack";

	



$tdatatasktrackapprove[".showAddInPopup"] = false;

$tdatatasktrackapprove[".showEditInPopup"] = false;

$tdatatasktrackapprove[".showViewInPopup"] = false;

$tdatatasktrackapprove[".listAjax"] = false;
//	temporary
//$tdatatasktrackapprove[".listAjax"] = false;

	$tdatatasktrackapprove[".audit"] = false;

	$tdatatasktrackapprove[".locking"] = false;


$pages = $tdatatasktrackapprove[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasktrackapprove[".edit"] = true;
	$tdatatasktrackapprove[".afterEditAction"] = 0;
	$tdatatasktrackapprove[".closePopupAfterEdit"] = 1;
	$tdatatasktrackapprove[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatasktrackapprove[".add"] = true;
$tdatatasktrackapprove[".afterAddAction"] = 0;
$tdatatasktrackapprove[".closePopupAfterAdd"] = 1;
$tdatatasktrackapprove[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasktrackapprove[".list"] = true;
}



$tdatatasktrackapprove[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasktrackapprove[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasktrackapprove[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasktrackapprove[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasktrackapprove[".printFriendly"] = true;
}



$tdatatasktrackapprove[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasktrackapprove[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasktrackapprove[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasktrackapprove[".isUseAjaxSuggest"] = true;

$tdatatasktrackapprove[".rowHighlite"] = true;





$tdatatasktrackapprove[".ajaxCodeSnippetAdded"] = false;

$tdatatasktrackapprove[".buttonsAdded"] = false;

$tdatatasktrackapprove[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasktrackapprove[".isUseTimeForSearch"] = false;


$tdatatasktrackapprove[".badgeColor"] = "E8926F";


$tdatatasktrackapprove[".allSearchFields"] = array();
$tdatatasktrackapprove[".filterFields"] = array();
$tdatatasktrackapprove[".requiredSearchFields"] = array();

$tdatatasktrackapprove[".googleLikeFields"] = array();
$tdatatasktrackapprove[".googleLikeFields"][] = "projectID";
$tdatatasktrackapprove[".googleLikeFields"][] = "trackDate";
$tdatatasktrackapprove[".googleLikeFields"][] = "progressStep";
$tdatatasktrackapprove[".googleLikeFields"][] = "trackDesc";
$tdatatasktrackapprove[".googleLikeFields"][] = "trackAttFille";
$tdatatasktrackapprove[".googleLikeFields"][] = "contactName";
$tdatatasktrackapprove[".googleLikeFields"][] = "progressDate";
$tdatatasktrackapprove[".googleLikeFields"][] = "progressStatus";
$tdatatasktrackapprove[".googleLikeFields"][] = "progressReason";
$tdatatasktrackapprove[".googleLikeFields"][] = "approveDate";
$tdatatasktrackapprove[".googleLikeFields"][] = "approveStatus";
$tdatatasktrackapprove[".googleLikeFields"][] = "approveReason";
$tdatatasktrackapprove[".googleLikeFields"][] = "entryUserName";
$tdatatasktrackapprove[".googleLikeFields"][] = "entryTime";



$tdatatasktrackapprove[".tableType"] = "list";

$tdatatasktrackapprove[".printerPageOrientation"] = 0;
$tdatatasktrackapprove[".nPrinterPageScale"] = 100;

$tdatatasktrackapprove[".nPrinterSplitRecords"] = 40;

$tdatatasktrackapprove[".geocodingEnabled"] = false;










$tdatatasktrackapprove[".pageSize"] = 20;

$tdatatasktrackapprove[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatasktrackapprove[".strOrderBy"] = $tstrOrderBy;

$tdatatasktrackapprove[".orderindexes"] = array();


$tdatatasktrackapprove[".sqlHead"] = "SELECT taskTrack.id,  	taskTrack.projectID,  	taskTrack.trackDate,  	taskTrack.progressStep,  	taskTrack.trackDesc,  	taskTrack.trackAttFille,  	taskTrack.contactName,  	taskTrack.progressDate,  	taskTrack.progressStatus,  	taskTrack.progressReason,  	taskTrack.approveDate,  	taskTrack.approveStatus,  	taskTrack.approveReason,  	taskTrack.entryUserName,  	taskTrack.entryTime";
$tdatatasktrackapprove[".sqlFrom"] = "FROM taskTrack";
$tdatatasktrackapprove[".sqlWhereExpr"] = "";
$tdatatasktrackapprove[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasktrackapprove[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasktrackapprove[".arrGroupsPerPage"] = $arrGPP;

$tdatatasktrackapprove[".highlightSearchResults"] = true;

$tableKeystasktrackapprove = array();
$tableKeystasktrackapprove[] = "id";
$tdatatasktrackapprove[".Keys"] = $tableKeystasktrackapprove;


$tdatatasktrackapprove[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","id");
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


	$tdatatasktrackapprove["id"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","projectID");
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


	$tdatatasktrackapprove["projectID"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "projectID";
//	trackDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDate";
	$fdata["GoodName"] = "trackDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","trackDate");
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


	$tdatatasktrackapprove["trackDate"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "trackDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","progressStep");
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


	$tdatatasktrackapprove["progressStep"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "progressStep";
//	trackDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "trackDesc";
	$fdata["GoodName"] = "trackDesc";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","trackDesc");
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


	$tdatatasktrackapprove["trackDesc"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "trackDesc";
//	trackAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trackAttFille";
	$fdata["GoodName"] = "trackAttFille";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","trackAttFille");
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


	$tdatatasktrackapprove["trackAttFille"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "trackAttFille";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","contactName");
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


	$tdatatasktrackapprove["contactName"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "contactName";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","progressDate");
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


	$tdatatasktrackapprove["progressDate"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "progressDate";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","progressStatus");
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


	$tdatatasktrackapprove["progressStatus"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "progressStatus";
//	progressReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progressReason";
	$fdata["GoodName"] = "progressReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","progressReason");
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


	$tdatatasktrackapprove["progressReason"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "progressReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","approveDate");
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


	$tdatatasktrackapprove["approveDate"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","approveStatus");
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


	$tdatatasktrackapprove["approveStatus"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","approveReason");
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


	$tdatatasktrackapprove["approveReason"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","entryUserName");
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


	$tdatatasktrackapprove["entryUserName"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackApprove","entryTime");
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


	$tdatatasktrackapprove["entryTime"] = $fdata;
		$tdatatasktrackapprove[".searchableFields"][] = "entryTime";


$tables_data["taskTrackApprove"]=&$tdatatasktrackapprove;
$field_labels["taskTrackApprove"] = &$fieldLabelstasktrackapprove;
$fieldToolTips["taskTrackApprove"] = &$fieldToolTipstasktrackapprove;
$placeHolders["taskTrackApprove"] = &$placeHolderstasktrackapprove;
$page_titles["taskTrackApprove"] = &$pageTitlestasktrackapprove;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskTrackApprove"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskTrackApprove"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasktrackapprove()
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
	"m_srcTableName" => "taskTrackApprove"
));

$proto6["m_sql"] = "taskTrack.id";
$proto6["m_srcTableName"] = "taskTrackApprove";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto8["m_sql"] = "taskTrack.projectID";
$proto8["m_srcTableName"] = "taskTrackApprove";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto10["m_sql"] = "taskTrack.trackDate";
$proto10["m_srcTableName"] = "taskTrackApprove";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto12["m_sql"] = "taskTrack.progressStep";
$proto12["m_srcTableName"] = "taskTrackApprove";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDesc",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto14["m_sql"] = "taskTrack.trackDesc";
$proto14["m_srcTableName"] = "taskTrackApprove";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAttFille",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto16["m_sql"] = "taskTrack.trackAttFille";
$proto16["m_srcTableName"] = "taskTrackApprove";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto18["m_sql"] = "taskTrack.contactName";
$proto18["m_srcTableName"] = "taskTrackApprove";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto20["m_sql"] = "taskTrack.progressDate";
$proto20["m_srcTableName"] = "taskTrackApprove";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto22["m_sql"] = "taskTrack.progressStatus";
$proto22["m_srcTableName"] = "taskTrackApprove";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progressReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto24["m_sql"] = "taskTrack.progressReason";
$proto24["m_srcTableName"] = "taskTrackApprove";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto26["m_sql"] = "taskTrack.approveDate";
$proto26["m_srcTableName"] = "taskTrackApprove";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto28["m_sql"] = "taskTrack.approveStatus";
$proto28["m_srcTableName"] = "taskTrackApprove";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto30["m_sql"] = "taskTrack.approveReason";
$proto30["m_srcTableName"] = "taskTrackApprove";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto32["m_sql"] = "taskTrack.entryUserName";
$proto32["m_srcTableName"] = "taskTrackApprove";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackApprove"
));

$proto34["m_sql"] = "taskTrack.entryTime";
$proto34["m_srcTableName"] = "taskTrackApprove";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "taskTrack";
$proto37["m_srcTableName"] = "taskTrackApprove";
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
$proto36["m_srcTableName"] = "taskTrackApprove";
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
$proto0["m_srcTableName"]="taskTrackApprove";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasktrackapprove = createSqlQuery_tasktrackapprove();


	
				;

															

$tdatatasktrackapprove[".sqlquery"] = $queryData_tasktrackapprove;



include_once(getabspath("include/tasktrackapprove_events.php"));
$tableEvents["taskTrackApprove"] = new eventclass_tasktrackapprove;
$tdatatasktrackapprove[".hasEvents"] = true;

$query = &$queryData_tasktrackapprove;
$table = "taskTrackApprove";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>