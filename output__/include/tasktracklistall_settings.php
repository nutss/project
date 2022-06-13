<?php
$tdatatasktracklistall = array();
$tdatatasktracklistall[".searchableFields"] = array();
$tdatatasktracklistall[".ShortName"] = "tasktracklistall";
$tdatatasktracklistall[".OwnerID"] = "";
$tdatatasktracklistall[".OriginalTable"] = "taskTrack";


$tdatatasktracklistall[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasktracklistall[".originalPagesByType"] = $tdatatasktracklistall[".pagesByType"];
$tdatatasktracklistall[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasktracklistall[".originalPages"] = $tdatatasktracklistall[".pages"];
$tdatatasktracklistall[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasktracklistall[".originalDefaultPages"] = $tdatatasktracklistall[".defaultPages"];

//	field labels
$fieldLabelstasktracklistall = array();
$fieldToolTipstasktracklistall = array();
$pageTitlestasktracklistall = array();
$placeHolderstasktracklistall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasktracklistall["English"] = array();
	$fieldToolTipstasktracklistall["English"] = array();
	$placeHolderstasktracklistall["English"] = array();
	$pageTitlestasktracklistall["English"] = array();
	$fieldLabelstasktracklistall["English"]["id"] = "ID";
	$fieldToolTipstasktracklistall["English"]["id"] = "";
	$placeHolderstasktracklistall["English"]["id"] = "";
	$fieldLabelstasktracklistall["English"]["projectID"] = "Project Name";
	$fieldToolTipstasktracklistall["English"]["projectID"] = "";
	$placeHolderstasktracklistall["English"]["projectID"] = "";
	$fieldLabelstasktracklistall["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstasktracklistall["English"]["entryUserName"] = "";
	$placeHolderstasktracklistall["English"]["entryUserName"] = "";
	$fieldLabelstasktracklistall["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstasktracklistall["English"]["entryTime"] = "";
	$placeHolderstasktracklistall["English"]["entryTime"] = "";
	$fieldLabelstasktracklistall["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstasktracklistall["English"]["progressStep"] = "";
	$placeHolderstasktracklistall["English"]["progressStep"] = "";
	$fieldLabelstasktracklistall["English"]["trackAppointDate"] = "Track Appoint Date";
	$fieldToolTipstasktracklistall["English"]["trackAppointDate"] = "";
	$placeHolderstasktracklistall["English"]["trackAppointDate"] = "";
	$fieldLabelstasktracklistall["English"]["trackStatus"] = "Track Status";
	$fieldToolTipstasktracklistall["English"]["trackStatus"] = "";
	$placeHolderstasktracklistall["English"]["trackStatus"] = "";
	$fieldLabelstasktracklistall["English"]["trackDesc"] = "Track Desc";
	$fieldToolTipstasktracklistall["English"]["trackDesc"] = "";
	$placeHolderstasktracklistall["English"]["trackDesc"] = "";
	$fieldLabelstasktracklistall["English"]["trackAttFille"] = "Track Att Fille";
	$fieldToolTipstasktracklistall["English"]["trackAttFille"] = "";
	$placeHolderstasktracklistall["English"]["trackAttFille"] = "";
	if (count($fieldToolTipstasktracklistall["English"]))
		$tdatatasktracklistall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstasktracklistall["Thai"] = array();
	$fieldToolTipstasktracklistall["Thai"] = array();
	$placeHolderstasktracklistall["Thai"] = array();
	$pageTitlestasktracklistall["Thai"] = array();
	$fieldLabelstasktracklistall["Thai"]["id"] = "ID";
	$fieldToolTipstasktracklistall["Thai"]["id"] = "";
	$placeHolderstasktracklistall["Thai"]["id"] = "";
	$fieldLabelstasktracklistall["Thai"]["projectID"] = "ชื่อโครวการ";
	$fieldToolTipstasktracklistall["Thai"]["projectID"] = "";
	$placeHolderstasktracklistall["Thai"]["projectID"] = "";
	$fieldLabelstasktracklistall["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstasktracklistall["Thai"]["entryUserName"] = "";
	$placeHolderstasktracklistall["Thai"]["entryUserName"] = "";
	$fieldLabelstasktracklistall["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstasktracklistall["Thai"]["entryTime"] = "";
	$placeHolderstasktracklistall["Thai"]["entryTime"] = "";
	$fieldLabelstasktracklistall["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstasktracklistall["Thai"]["progressStep"] = "";
	$placeHolderstasktracklistall["Thai"]["progressStep"] = "";
	$fieldLabelstasktracklistall["Thai"]["trackAppointDate"] = "วันที่นัดหมาย";
	$fieldToolTipstasktracklistall["Thai"]["trackAppointDate"] = "";
	$placeHolderstasktracklistall["Thai"]["trackAppointDate"] = "";
	$fieldLabelstasktracklistall["Thai"]["trackStatus"] = "สถานะขั้นตอน";
	$fieldToolTipstasktracklistall["Thai"]["trackStatus"] = "";
	$placeHolderstasktracklistall["Thai"]["trackStatus"] = "";
	$fieldLabelstasktracklistall["Thai"]["trackDesc"] = "รายละเอียดขั้นตอน";
	$fieldToolTipstasktracklistall["Thai"]["trackDesc"] = "";
	$placeHolderstasktracklistall["Thai"]["trackDesc"] = "";
	$fieldLabelstasktracklistall["Thai"]["trackAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstasktracklistall["Thai"]["trackAttFille"] = "";
	$placeHolderstasktracklistall["Thai"]["trackAttFille"] = "";
	if (count($fieldToolTipstasktracklistall["Thai"]))
		$tdatatasktracklistall[".isUseToolTips"] = true;
}


	$tdatatasktracklistall[".NCSearch"] = true;



$tdatatasktracklistall[".shortTableName"] = "tasktracklistall";
$tdatatasktracklistall[".nSecOptions"] = 0;

$tdatatasktracklistall[".mainTableOwnerID"] = "";
$tdatatasktracklistall[".entityType"] = 1;
$tdatatasktracklistall[".connId"] = "mc_at_192_168_1_111";


$tdatatasktracklistall[".strOriginalTableName"] = "taskTrack";

	



$tdatatasktracklistall[".showAddInPopup"] = false;

$tdatatasktracklistall[".showEditInPopup"] = false;

$tdatatasktracklistall[".showViewInPopup"] = false;

$tdatatasktracklistall[".listAjax"] = false;
//	temporary
//$tdatatasktracklistall[".listAjax"] = false;

	$tdatatasktracklistall[".audit"] = false;

	$tdatatasktracklistall[".locking"] = false;


$pages = $tdatatasktracklistall[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasktracklistall[".edit"] = true;
	$tdatatasktracklistall[".afterEditAction"] = 0;
	$tdatatasktracklistall[".closePopupAfterEdit"] = 1;
	$tdatatasktracklistall[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasktracklistall[".add"] = true;
$tdatatasktracklistall[".afterAddAction"] = 0;
$tdatatasktracklistall[".closePopupAfterAdd"] = 1;
$tdatatasktracklistall[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasktracklistall[".list"] = true;
}



$tdatatasktracklistall[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasktracklistall[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasktracklistall[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasktracklistall[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasktracklistall[".printFriendly"] = true;
}



$tdatatasktracklistall[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasktracklistall[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasktracklistall[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasktracklistall[".isUseAjaxSuggest"] = true;

$tdatatasktracklistall[".rowHighlite"] = true;





$tdatatasktracklistall[".ajaxCodeSnippetAdded"] = false;

$tdatatasktracklistall[".buttonsAdded"] = false;

$tdatatasktracklistall[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasktracklistall[".isUseTimeForSearch"] = false;


$tdatatasktracklistall[".badgeColor"] = "E8926F";


$tdatatasktracklistall[".allSearchFields"] = array();
$tdatatasktracklistall[".filterFields"] = array();
$tdatatasktracklistall[".requiredSearchFields"] = array();

$tdatatasktracklistall[".googleLikeFields"] = array();
$tdatatasktracklistall[".googleLikeFields"][] = "id";
$tdatatasktracklistall[".googleLikeFields"][] = "projectID";
$tdatatasktracklistall[".googleLikeFields"][] = "trackAppointDate";
$tdatatasktracklistall[".googleLikeFields"][] = "progressStep";
$tdatatasktracklistall[".googleLikeFields"][] = "trackStatus";
$tdatatasktracklistall[".googleLikeFields"][] = "trackDesc";
$tdatatasktracklistall[".googleLikeFields"][] = "trackAttFille";
$tdatatasktracklistall[".googleLikeFields"][] = "entryUserName";
$tdatatasktracklistall[".googleLikeFields"][] = "entryTime";



$tdatatasktracklistall[".tableType"] = "list";

$tdatatasktracklistall[".printerPageOrientation"] = 0;
$tdatatasktracklistall[".nPrinterPageScale"] = 100;

$tdatatasktracklistall[".nPrinterSplitRecords"] = 40;

$tdatatasktracklistall[".geocodingEnabled"] = false;










$tdatatasktracklistall[".pageSize"] = 20;

$tdatatasktracklistall[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatasktracklistall[".strOrderBy"] = $tstrOrderBy;

$tdatatasktracklistall[".orderindexes"] = array();


$tdatatasktracklistall[".sqlHead"] = "SELECT id,  	projectID,  	trackAppointDate,  	progressStep,  	trackStatus,  	trackDesc,  	trackAttFille,  	entryUserName,  	entryTime";
$tdatatasktracklistall[".sqlFrom"] = "FROM taskTrack";
$tdatatasktracklistall[".sqlWhereExpr"] = "";
$tdatatasktracklistall[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasktracklistall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasktracklistall[".arrGroupsPerPage"] = $arrGPP;

$tdatatasktracklistall[".highlightSearchResults"] = true;

$tableKeystasktracklistall = array();
$tableKeystasktracklistall[] = "id";
$tdatatasktracklistall[".Keys"] = $tableKeystasktracklistall;


$tdatatasktracklistall[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","id");
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


	$tdatatasktracklistall["id"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","projectID");
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


	$tdatatasktracklistall["projectID"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "projectID";
//	trackAppointDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackAppointDate";
	$fdata["GoodName"] = "trackAppointDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","trackAppointDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "trackAppointDate";

		$fdata["sourceSingle"] = "trackAppointDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackAppointDate";

	
	
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


	$tdatatasktracklistall["trackAppointDate"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "trackAppointDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","progressStep");
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


	$tdatatasktracklistall["progressStep"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "progressStep";
//	trackStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "trackStatus";
	$fdata["GoodName"] = "trackStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","trackStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackStatus";

		$fdata["sourceSingle"] = "trackStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackStatus";

	
	
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


	$tdatatasktracklistall["trackStatus"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "trackStatus";
//	trackDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trackDesc";
	$fdata["GoodName"] = "trackDesc";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","trackDesc");
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


	$tdatatasktracklistall["trackDesc"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "trackDesc";
//	trackAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "trackAttFille";
	$fdata["GoodName"] = "trackAttFille";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","trackAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "trackAttFille";

		$fdata["sourceSingle"] = "trackAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackAttFille";

	
	
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


	$tdatatasktracklistall["trackAttFille"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "trackAttFille";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","entryUserName");
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


	$tdatatasktracklistall["entryUserName"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("taskTrackListAll","entryTime");
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


	$tdatatasktracklistall["entryTime"] = $fdata;
		$tdatatasktracklistall[".searchableFields"][] = "entryTime";


$tables_data["taskTrackListAll"]=&$tdatatasktracklistall;
$field_labels["taskTrackListAll"] = &$fieldLabelstasktracklistall;
$fieldToolTips["taskTrackListAll"] = &$fieldToolTipstasktracklistall;
$placeHolders["taskTrackListAll"] = &$placeHolderstasktracklistall;
$page_titles["taskTrackListAll"] = &$pageTitlestasktracklistall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskTrackListAll"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskTrackListAll"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasktracklistall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectID,  	trackAppointDate,  	progressStep,  	trackStatus,  	trackDesc,  	trackAttFille,  	entryUserName,  	entryTime";
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
	"m_srcTableName" => "taskTrackListAll"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskTrackListAll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskTrackListAll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAppointDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto10["m_sql"] = "trackAppointDate";
$proto10["m_srcTableName"] = "taskTrackListAll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskTrackListAll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "trackStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto14["m_sql"] = "trackStatus";
$proto14["m_srcTableName"] = "taskTrackListAll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDesc",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto16["m_sql"] = "trackDesc";
$proto16["m_srcTableName"] = "taskTrackListAll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAttFille",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto18["m_sql"] = "trackAttFille";
$proto18["m_srcTableName"] = "taskTrackListAll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto20["m_sql"] = "entryUserName";
$proto20["m_srcTableName"] = "taskTrackListAll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "taskTrackListAll"
));

$proto22["m_sql"] = "entryTime";
$proto22["m_srcTableName"] = "taskTrackListAll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "taskTrack";
$proto25["m_srcTableName"] = "taskTrackListAll";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "projectID";
$proto25["m_columns"][] = "trackAppointDate";
$proto25["m_columns"][] = "progressStep";
$proto25["m_columns"][] = "trackStatus";
$proto25["m_columns"][] = "trackDesc";
$proto25["m_columns"][] = "trackAttFille";
$proto25["m_columns"][] = "entryUserName";
$proto25["m_columns"][] = "entryTime";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "taskTrack";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "taskTrackListAll";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskTrackListAll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasktracklistall = createSqlQuery_tasktracklistall();


	
				;

									

$tdatatasktracklistall[".sqlquery"] = $queryData_tasktracklistall;



$tableEvents["taskTrackListAll"] = new eventsBase;
$tdatatasktracklistall[".hasEvents"] = false;

?>