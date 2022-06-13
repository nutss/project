<?php
$tdatataskcalendar = array();
$tdatataskcalendar[".searchableFields"] = array();
$tdatataskcalendar[".ShortName"] = "taskcalendar";
$tdatataskcalendar[".OwnerID"] = "";
$tdatataskcalendar[".OriginalTable"] = "taskCalendar";


$tdatataskcalendar[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskcalendar[".originalPagesByType"] = $tdatataskcalendar[".pagesByType"];
$tdatataskcalendar[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskcalendar[".originalPages"] = $tdatataskcalendar[".pages"];
$tdatataskcalendar[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskcalendar[".originalDefaultPages"] = $tdatataskcalendar[".defaultPages"];

//	field labels
$fieldLabelstaskcalendar = array();
$fieldToolTipstaskcalendar = array();
$pageTitlestaskcalendar = array();
$placeHolderstaskcalendar = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskcalendar["English"] = array();
	$fieldToolTipstaskcalendar["English"] = array();
	$placeHolderstaskcalendar["English"] = array();
	$pageTitlestaskcalendar["English"] = array();
	$fieldLabelstaskcalendar["English"]["id"] = "ID";
	$fieldToolTipstaskcalendar["English"]["id"] = "";
	$placeHolderstaskcalendar["English"]["id"] = "";
	$fieldLabelstaskcalendar["English"]["projectID"] = "PROJECT_ID";
	$fieldToolTipstaskcalendar["English"]["projectID"] = "";
	$placeHolderstaskcalendar["English"]["projectID"] = "";
	$fieldLabelstaskcalendar["English"]["mettingType"] = "Metting Type";
	$fieldToolTipstaskcalendar["English"]["mettingType"] = "";
	$placeHolderstaskcalendar["English"]["mettingType"] = "";
	$fieldLabelstaskcalendar["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstaskcalendar["English"]["progressStatus"] = "";
	$placeHolderstaskcalendar["English"]["progressStatus"] = "";
	$fieldLabelstaskcalendar["English"]["contactName"] = "Contact Name";
	$fieldToolTipstaskcalendar["English"]["contactName"] = "";
	$placeHolderstaskcalendar["English"]["contactName"] = "";
	$fieldLabelstaskcalendar["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskcalendar["English"]["entryUserName"] = "";
	$placeHolderstaskcalendar["English"]["entryUserName"] = "";
	$fieldLabelstaskcalendar["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskcalendar["English"]["entryTime"] = "";
	$placeHolderstaskcalendar["English"]["entryTime"] = "";
	$fieldLabelstaskcalendar["English"]["progressAppointDate"] = "Progress Appoint Date";
	$fieldToolTipstaskcalendar["English"]["progressAppointDate"] = "";
	$placeHolderstaskcalendar["English"]["progressAppointDate"] = "";
	if (count($fieldToolTipstaskcalendar["English"]))
		$tdatataskcalendar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskcalendar["Thai"] = array();
	$fieldToolTipstaskcalendar["Thai"] = array();
	$placeHolderstaskcalendar["Thai"] = array();
	$pageTitlestaskcalendar["Thai"] = array();
	$fieldLabelstaskcalendar["Thai"]["id"] = "ID";
	$fieldToolTipstaskcalendar["Thai"]["id"] = "";
	$placeHolderstaskcalendar["Thai"]["id"] = "";
	$fieldLabelstaskcalendar["Thai"]["projectID"] = "PROJECT_ID";
	$fieldToolTipstaskcalendar["Thai"]["projectID"] = "";
	$placeHolderstaskcalendar["Thai"]["projectID"] = "";
	$fieldLabelstaskcalendar["Thai"]["mettingType"] = "ประเภทการประชุม";
	$fieldToolTipstaskcalendar["Thai"]["mettingType"] = "";
	$placeHolderstaskcalendar["Thai"]["mettingType"] = "";
	$fieldLabelstaskcalendar["Thai"]["progressStatus"] = "สถานะการประชุม";
	$fieldToolTipstaskcalendar["Thai"]["progressStatus"] = "";
	$placeHolderstaskcalendar["Thai"]["progressStatus"] = "";
	$fieldLabelstaskcalendar["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipstaskcalendar["Thai"]["contactName"] = "";
	$placeHolderstaskcalendar["Thai"]["contactName"] = "";
	$fieldLabelstaskcalendar["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskcalendar["Thai"]["entryUserName"] = "";
	$placeHolderstaskcalendar["Thai"]["entryUserName"] = "";
	$fieldLabelstaskcalendar["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskcalendar["Thai"]["entryTime"] = "";
	$placeHolderstaskcalendar["Thai"]["entryTime"] = "";
	$fieldLabelstaskcalendar["Thai"]["progressAppointDate"] = "วันที่นัดหมาย";
	$fieldToolTipstaskcalendar["Thai"]["progressAppointDate"] = "";
	$placeHolderstaskcalendar["Thai"]["progressAppointDate"] = "";
	if (count($fieldToolTipstaskcalendar["Thai"]))
		$tdatataskcalendar[".isUseToolTips"] = true;
}


	$tdatataskcalendar[".NCSearch"] = true;



$tdatataskcalendar[".shortTableName"] = "taskcalendar";
$tdatataskcalendar[".nSecOptions"] = 0;

$tdatataskcalendar[".mainTableOwnerID"] = "";
$tdatataskcalendar[".entityType"] = 0;
$tdatataskcalendar[".connId"] = "mc_at_192_168_1_111";


$tdatataskcalendar[".strOriginalTableName"] = "taskCalendar";

	



$tdatataskcalendar[".showAddInPopup"] = false;

$tdatataskcalendar[".showEditInPopup"] = false;

$tdatataskcalendar[".showViewInPopup"] = false;

$tdatataskcalendar[".listAjax"] = false;
//	temporary
//$tdatataskcalendar[".listAjax"] = false;

	$tdatataskcalendar[".audit"] = false;

	$tdatataskcalendar[".locking"] = false;


$pages = $tdatataskcalendar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskcalendar[".edit"] = true;
	$tdatataskcalendar[".afterEditAction"] = 0;
	$tdatataskcalendar[".closePopupAfterEdit"] = 1;
	$tdatataskcalendar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskcalendar[".add"] = true;
$tdatataskcalendar[".afterAddAction"] = 0;
$tdatataskcalendar[".closePopupAfterAdd"] = 1;
$tdatataskcalendar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskcalendar[".list"] = true;
}



$tdatataskcalendar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskcalendar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskcalendar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskcalendar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskcalendar[".printFriendly"] = true;
}



$tdatataskcalendar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskcalendar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskcalendar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskcalendar[".isUseAjaxSuggest"] = true;

$tdatataskcalendar[".rowHighlite"] = true;





$tdatataskcalendar[".ajaxCodeSnippetAdded"] = false;

$tdatataskcalendar[".buttonsAdded"] = false;

$tdatataskcalendar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskcalendar[".isUseTimeForSearch"] = false;


$tdatataskcalendar[".badgeColor"] = "008080";


$tdatataskcalendar[".allSearchFields"] = array();
$tdatataskcalendar[".filterFields"] = array();
$tdatataskcalendar[".requiredSearchFields"] = array();

$tdatataskcalendar[".googleLikeFields"] = array();
$tdatataskcalendar[".googleLikeFields"][] = "id";
$tdatataskcalendar[".googleLikeFields"][] = "projectID";
$tdatataskcalendar[".googleLikeFields"][] = "progressAppointDate";
$tdatataskcalendar[".googleLikeFields"][] = "mettingType";
$tdatataskcalendar[".googleLikeFields"][] = "progressStatus";
$tdatataskcalendar[".googleLikeFields"][] = "contactName";
$tdatataskcalendar[".googleLikeFields"][] = "entryUserName";
$tdatataskcalendar[".googleLikeFields"][] = "entryTime";



$tdatataskcalendar[".tableType"] = "list";

$tdatataskcalendar[".printerPageOrientation"] = 0;
$tdatataskcalendar[".nPrinterPageScale"] = 100;

$tdatataskcalendar[".nPrinterSplitRecords"] = 40;

$tdatataskcalendar[".geocodingEnabled"] = false;










$tdatataskcalendar[".pageSize"] = 20;

$tdatataskcalendar[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY projectID DESC";
$tdatataskcalendar[".strOrderBy"] = $tstrOrderBy;

$tdatataskcalendar[".orderindexes"] = array();
	$tdatataskcalendar[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "projectID");



$tdatataskcalendar[".sqlHead"] = "SELECT id,  projectID,  progressAppointDate,  mettingType,  progressStatus,  contactName,  entryUserName,  entryTime";
$tdatataskcalendar[".sqlFrom"] = "FROM taskCalendar";
$tdatataskcalendar[".sqlWhereExpr"] = "";
$tdatataskcalendar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskcalendar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskcalendar[".arrGroupsPerPage"] = $arrGPP;

$tdatataskcalendar[".highlightSearchResults"] = true;

$tableKeystaskcalendar = array();
$tableKeystaskcalendar[] = "id";
$tdatataskcalendar[".Keys"] = $tableKeystaskcalendar;


$tdatataskcalendar[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","id");
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


	$tdatataskcalendar["id"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","projectID");
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


	$tdatataskcalendar["projectID"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "projectID";
//	progressAppointDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "progressAppointDate";
	$fdata["GoodName"] = "progressAppointDate";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","progressAppointDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressAppointDate";

		$fdata["sourceSingle"] = "progressAppointDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressAppointDate";

	
	
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


	$tdatataskcalendar["progressAppointDate"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "progressAppointDate";
//	mettingType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mettingType";
	$fdata["GoodName"] = "mettingType";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","mettingType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mettingType";

		$fdata["sourceSingle"] = "mettingType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mettingType";

	
	
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
	$edata["LookupValues"][] = "Facebook Messenger";
	$edata["LookupValues"][] = "Google Meet";
	$edata["LookupValues"][] = "Microsoft Teams ";
	$edata["LookupValues"][] = "Skype";
	$edata["LookupValues"][] = "Onsite";

	
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


	$tdatataskcalendar["mettingType"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "mettingType";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","progressStatus");
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
	$edata["LookupValues"][] = "Planning";
	$edata["LookupValues"][] = "Implementation";
	$edata["LookupValues"][] = "Monitoring";

	
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


	$tdatataskcalendar["progressStatus"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "progressStatus";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","contactName");
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
	$edata["LookupTable"] = "ProjectContact";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contactName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contactName";

	

	
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


	$tdatataskcalendar["contactName"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "contactName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","entryUserName");
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


	$tdatataskcalendar["entryUserName"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendar","entryTime");
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


	$tdatataskcalendar["entryTime"] = $fdata;
		$tdatataskcalendar[".searchableFields"][] = "entryTime";


$tables_data["taskCalendar"]=&$tdatataskcalendar;
$field_labels["taskCalendar"] = &$fieldLabelstaskcalendar;
$fieldToolTips["taskCalendar"] = &$fieldToolTipstaskcalendar;
$placeHolders["taskCalendar"] = &$placeHolderstaskcalendar;
$page_titles["taskCalendar"] = &$pageTitlestaskcalendar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskCalendar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskCalendar"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][0] = $masterParams;
				$masterTablesData["taskCalendar"][0]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][0]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][0]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][0]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][1] = $masterParams;
				$masterTablesData["taskCalendar"][1]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][1]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][1]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][1]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][2] = $masterParams;
				$masterTablesData["taskCalendar"][2]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][2]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][2]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][2]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][3] = $masterParams;
				$masterTablesData["taskCalendar"][3]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][3]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][3]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][3]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType5";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype5";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][4] = $masterParams;
				$masterTablesData["taskCalendar"][4]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][4]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][4]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][4]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType4";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype4";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][5] = $masterParams;
				$masterTablesData["taskCalendar"][5]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][5]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][5]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][5]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType6";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype6";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][6] = $masterParams;
				$masterTablesData["taskCalendar"][6]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][6]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][6]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][6]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusAll";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusall";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][7] = $masterParams;
				$masterTablesData["taskCalendar"][7]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][7]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][7]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][7]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusReject";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusreject";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskCalendar"][8] = $masterParams;
				$masterTablesData["taskCalendar"][8]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][8]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][8]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][8]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskCalendar"][9] = $masterParams;
				$masterTablesData["taskCalendar"][9]["masterKeys"] = array();
	$masterTablesData["taskCalendar"][9]["masterKeys"][]="id";
				$masterTablesData["taskCalendar"][9]["detailKeys"] = array();
	$masterTablesData["taskCalendar"][9]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskcalendar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  projectID,  progressAppointDate,  mettingType,  progressStatus,  contactName,  entryUserName,  entryTime";
$proto0["m_strFrom"] = "FROM taskCalendar";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY projectID DESC";
	
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
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskCalendar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskCalendar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "progressAppointDate",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto10["m_sql"] = "progressAppointDate";
$proto10["m_srcTableName"] = "taskCalendar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mettingType",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto12["m_sql"] = "mettingType";
$proto12["m_srcTableName"] = "taskCalendar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto14["m_sql"] = "progressStatus";
$proto14["m_srcTableName"] = "taskCalendar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto16["m_sql"] = "contactName";
$proto16["m_srcTableName"] = "taskCalendar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "taskCalendar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "taskCalendar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "taskCalendar";
$proto23["m_srcTableName"] = "taskCalendar";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "projectID";
$proto23["m_columns"][] = "progressAppointDate";
$proto23["m_columns"][] = "mettingType";
$proto23["m_columns"][] = "progressStatus";
$proto23["m_columns"][] = "contactName";
$proto23["m_columns"][] = "entryUserName";
$proto23["m_columns"][] = "entryTime";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "taskCalendar";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "taskCalendar";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendar"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="taskCalendar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskcalendar = createSqlQuery_taskcalendar();


	
				;

								

$tdatataskcalendar[".sqlquery"] = $queryData_taskcalendar;



$tableEvents["taskCalendar"] = new eventsBase;
$tdatataskcalendar[".hasEvents"] = false;

?>