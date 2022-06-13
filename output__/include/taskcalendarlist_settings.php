<?php
$tdatataskcalendarlist = array();
$tdatataskcalendarlist[".searchableFields"] = array();
$tdatataskcalendarlist[".ShortName"] = "taskcalendarlist";
$tdatataskcalendarlist[".OwnerID"] = "";
$tdatataskcalendarlist[".OriginalTable"] = "taskCalendar";


$tdatataskcalendarlist[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskcalendarlist[".originalPagesByType"] = $tdatataskcalendarlist[".pagesByType"];
$tdatataskcalendarlist[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskcalendarlist[".originalPages"] = $tdatataskcalendarlist[".pages"];
$tdatataskcalendarlist[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskcalendarlist[".originalDefaultPages"] = $tdatataskcalendarlist[".defaultPages"];

//	field labels
$fieldLabelstaskcalendarlist = array();
$fieldToolTipstaskcalendarlist = array();
$pageTitlestaskcalendarlist = array();
$placeHolderstaskcalendarlist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskcalendarlist["English"] = array();
	$fieldToolTipstaskcalendarlist["English"] = array();
	$placeHolderstaskcalendarlist["English"] = array();
	$pageTitlestaskcalendarlist["English"] = array();
	$fieldLabelstaskcalendarlist["English"]["id"] = "ID";
	$fieldToolTipstaskcalendarlist["English"]["id"] = "";
	$placeHolderstaskcalendarlist["English"]["id"] = "";
	$fieldLabelstaskcalendarlist["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskcalendarlist["English"]["projectID"] = "";
	$placeHolderstaskcalendarlist["English"]["projectID"] = "";
	$fieldLabelstaskcalendarlist["English"]["mettingType"] = "Metting Type";
	$fieldToolTipstaskcalendarlist["English"]["mettingType"] = "";
	$placeHolderstaskcalendarlist["English"]["mettingType"] = "";
	$fieldLabelstaskcalendarlist["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstaskcalendarlist["English"]["progressStatus"] = "";
	$placeHolderstaskcalendarlist["English"]["progressStatus"] = "";
	$fieldLabelstaskcalendarlist["English"]["contactName"] = "Contact Name";
	$fieldToolTipstaskcalendarlist["English"]["contactName"] = "";
	$placeHolderstaskcalendarlist["English"]["contactName"] = "";
	$fieldLabelstaskcalendarlist["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskcalendarlist["English"]["entryUserName"] = "";
	$placeHolderstaskcalendarlist["English"]["entryUserName"] = "";
	$fieldLabelstaskcalendarlist["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskcalendarlist["English"]["entryTime"] = "";
	$placeHolderstaskcalendarlist["English"]["entryTime"] = "";
	$fieldLabelstaskcalendarlist["English"]["progressAppointDate"] = "Progress Appoint Date";
	$fieldToolTipstaskcalendarlist["English"]["progressAppointDate"] = "";
	$placeHolderstaskcalendarlist["English"]["progressAppointDate"] = "";
	if (count($fieldToolTipstaskcalendarlist["English"]))
		$tdatataskcalendarlist[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskcalendarlist["Thai"] = array();
	$fieldToolTipstaskcalendarlist["Thai"] = array();
	$placeHolderstaskcalendarlist["Thai"] = array();
	$pageTitlestaskcalendarlist["Thai"] = array();
	$fieldLabelstaskcalendarlist["Thai"]["id"] = "ID";
	$fieldToolTipstaskcalendarlist["Thai"]["id"] = "";
	$placeHolderstaskcalendarlist["Thai"]["id"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskcalendarlist["Thai"]["projectID"] = "";
	$placeHolderstaskcalendarlist["Thai"]["projectID"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["mettingType"] = "ประเภทการประชุม";
	$fieldToolTipstaskcalendarlist["Thai"]["mettingType"] = "";
	$placeHolderstaskcalendarlist["Thai"]["mettingType"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["progressStatus"] = "สถานะการประชุม";
	$fieldToolTipstaskcalendarlist["Thai"]["progressStatus"] = "";
	$placeHolderstaskcalendarlist["Thai"]["progressStatus"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipstaskcalendarlist["Thai"]["contactName"] = "";
	$placeHolderstaskcalendarlist["Thai"]["contactName"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskcalendarlist["Thai"]["entryUserName"] = "";
	$placeHolderstaskcalendarlist["Thai"]["entryUserName"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskcalendarlist["Thai"]["entryTime"] = "";
	$placeHolderstaskcalendarlist["Thai"]["entryTime"] = "";
	$fieldLabelstaskcalendarlist["Thai"]["progressAppointDate"] = "วันที่นัดหมาย";
	$fieldToolTipstaskcalendarlist["Thai"]["progressAppointDate"] = "";
	$placeHolderstaskcalendarlist["Thai"]["progressAppointDate"] = "";
	if (count($fieldToolTipstaskcalendarlist["Thai"]))
		$tdatataskcalendarlist[".isUseToolTips"] = true;
}


	$tdatataskcalendarlist[".NCSearch"] = true;



$tdatataskcalendarlist[".shortTableName"] = "taskcalendarlist";
$tdatataskcalendarlist[".nSecOptions"] = 0;

$tdatataskcalendarlist[".mainTableOwnerID"] = "";
$tdatataskcalendarlist[".entityType"] = 1;
$tdatataskcalendarlist[".connId"] = "mc_at_192_168_1_111";


$tdatataskcalendarlist[".strOriginalTableName"] = "taskCalendar";

	



$tdatataskcalendarlist[".showAddInPopup"] = false;

$tdatataskcalendarlist[".showEditInPopup"] = false;

$tdatataskcalendarlist[".showViewInPopup"] = false;

$tdatataskcalendarlist[".listAjax"] = false;
//	temporary
//$tdatataskcalendarlist[".listAjax"] = false;

	$tdatataskcalendarlist[".audit"] = false;

	$tdatataskcalendarlist[".locking"] = false;


$pages = $tdatataskcalendarlist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskcalendarlist[".edit"] = true;
	$tdatataskcalendarlist[".afterEditAction"] = 0;
	$tdatataskcalendarlist[".closePopupAfterEdit"] = 1;
	$tdatataskcalendarlist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskcalendarlist[".add"] = true;
$tdatataskcalendarlist[".afterAddAction"] = 0;
$tdatataskcalendarlist[".closePopupAfterAdd"] = 1;
$tdatataskcalendarlist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskcalendarlist[".list"] = true;
}



$tdatataskcalendarlist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskcalendarlist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskcalendarlist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskcalendarlist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskcalendarlist[".printFriendly"] = true;
}



$tdatataskcalendarlist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskcalendarlist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskcalendarlist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskcalendarlist[".isUseAjaxSuggest"] = true;

$tdatataskcalendarlist[".rowHighlite"] = true;





$tdatataskcalendarlist[".ajaxCodeSnippetAdded"] = false;

$tdatataskcalendarlist[".buttonsAdded"] = false;

$tdatataskcalendarlist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskcalendarlist[".isUseTimeForSearch"] = false;


$tdatataskcalendarlist[".badgeColor"] = "2F4F4F";


$tdatataskcalendarlist[".allSearchFields"] = array();
$tdatataskcalendarlist[".filterFields"] = array();
$tdatataskcalendarlist[".requiredSearchFields"] = array();

$tdatataskcalendarlist[".googleLikeFields"] = array();
$tdatataskcalendarlist[".googleLikeFields"][] = "id";
$tdatataskcalendarlist[".googleLikeFields"][] = "projectID";
$tdatataskcalendarlist[".googleLikeFields"][] = "progressAppointDate";
$tdatataskcalendarlist[".googleLikeFields"][] = "mettingType";
$tdatataskcalendarlist[".googleLikeFields"][] = "progressStatus";
$tdatataskcalendarlist[".googleLikeFields"][] = "contactName";
$tdatataskcalendarlist[".googleLikeFields"][] = "entryUserName";
$tdatataskcalendarlist[".googleLikeFields"][] = "entryTime";



$tdatataskcalendarlist[".tableType"] = "list";

$tdatataskcalendarlist[".printerPageOrientation"] = 0;
$tdatataskcalendarlist[".nPrinterPageScale"] = 100;

$tdatataskcalendarlist[".nPrinterSplitRecords"] = 40;

$tdatataskcalendarlist[".geocodingEnabled"] = false;










$tdatataskcalendarlist[".pageSize"] = 20;

$tdatataskcalendarlist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskcalendarlist[".strOrderBy"] = $tstrOrderBy;

$tdatataskcalendarlist[".orderindexes"] = array();


$tdatataskcalendarlist[".sqlHead"] = "  SELECT taskCalendar.id,  taskCalendar.projectID,  taskCalendar.progressAppointDate,  taskCalendar.mettingType,  taskCalendar.progressStatus,  taskCalendar.contactName,  project.entryUserName,  taskCalendar.entryTime";
$tdatataskcalendarlist[".sqlFrom"] = "FROM taskCalendar  LEFT OUTER JOIN project ON taskCalendar.projectID = project.id";
$tdatataskcalendarlist[".sqlWhereExpr"] = "";
$tdatataskcalendarlist[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatataskcalendarlist[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskcalendarlist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskcalendarlist[".arrGroupsPerPage"] = $arrGPP;

$tdatataskcalendarlist[".highlightSearchResults"] = true;

$tableKeystaskcalendarlist = array();
$tableKeystaskcalendarlist[] = "id";
$tdatataskcalendarlist[".Keys"] = $tableKeystaskcalendarlist;


$tdatataskcalendarlist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.id";

	
	
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


	$tdatataskcalendarlist["id"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.projectID";

	
	
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


	$tdatataskcalendarlist["projectID"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "projectID";
//	progressAppointDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "progressAppointDate";
	$fdata["GoodName"] = "progressAppointDate";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","progressAppointDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressAppointDate";

		$fdata["sourceSingle"] = "progressAppointDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.progressAppointDate";

	
	
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


	$tdatataskcalendarlist["progressAppointDate"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "progressAppointDate";
//	mettingType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mettingType";
	$fdata["GoodName"] = "mettingType";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","mettingType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mettingType";

		$fdata["sourceSingle"] = "mettingType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.mettingType";

	
	
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
	$edata["LookupValues"][] = "Microsoft Teams";
	$edata["LookupValues"][] = "Skype";
	$edata["LookupValues"][] = "Onsite";

	
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


	$tdatataskcalendarlist["mettingType"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "mettingType";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","progressStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStatus";

		$fdata["sourceSingle"] = "progressStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.progressStatus";

	
	
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


	$tdatataskcalendarlist["progressStatus"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "progressStatus";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.contactName";

	
	
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


	$tdatataskcalendarlist["contactName"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "contactName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","entryUserName");
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


	$tdatataskcalendarlist["entryUserName"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskCalendar";
	$fdata["Label"] = GetFieldLabel("taskCalendarList","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskCalendar.entryTime";

	
	
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


	$tdatataskcalendarlist["entryTime"] = $fdata;
		$tdatataskcalendarlist[".searchableFields"][] = "entryTime";


$tables_data["taskCalendarList"]=&$tdatataskcalendarlist;
$field_labels["taskCalendarList"] = &$fieldLabelstaskcalendarlist;
$fieldToolTips["taskCalendarList"] = &$fieldToolTipstaskcalendarlist;
$placeHolders["taskCalendarList"] = &$placeHolderstaskcalendarlist;
$page_titles["taskCalendarList"] = &$pageTitlestaskcalendarlist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskCalendarList"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskCalendarList"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskcalendarlist()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "taskCalendar.id,  taskCalendar.projectID,  taskCalendar.progressAppointDate,  taskCalendar.mettingType,  taskCalendar.progressStatus,  taskCalendar.contactName,  project.entryUserName,  taskCalendar.entryTime";
$proto0["m_strFrom"] = "FROM taskCalendar  LEFT OUTER JOIN project ON taskCalendar.projectID = project.id";
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
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto6["m_sql"] = "taskCalendar.id";
$proto6["m_srcTableName"] = "taskCalendarList";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto8["m_sql"] = "taskCalendar.projectID";
$proto8["m_srcTableName"] = "taskCalendarList";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "progressAppointDate",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto10["m_sql"] = "taskCalendar.progressAppointDate";
$proto10["m_srcTableName"] = "taskCalendarList";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mettingType",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto12["m_sql"] = "taskCalendar.mettingType";
$proto12["m_srcTableName"] = "taskCalendarList";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto14["m_sql"] = "taskCalendar.progressStatus";
$proto14["m_srcTableName"] = "taskCalendarList";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto16["m_sql"] = "taskCalendar.contactName";
$proto16["m_srcTableName"] = "taskCalendarList";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskCalendarList"
));

$proto18["m_sql"] = "project.entryUserName";
$proto18["m_srcTableName"] = "taskCalendarList";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto20["m_sql"] = "taskCalendar.entryTime";
$proto20["m_srcTableName"] = "taskCalendarList";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "taskCalendar";
$proto23["m_srcTableName"] = "taskCalendarList";
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
$proto22["m_srcTableName"] = "taskCalendarList";
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
												$proto26=array();
$proto26["m_link"] = "SQLL_LEFTJOIN";
			$proto27=array();
$proto27["m_strName"] = "project";
$proto27["m_srcTableName"] = "taskCalendarList";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "projectName";
$proto27["m_columns"][] = "projectStart";
$proto27["m_columns"][] = "projectEnd";
$proto27["m_columns"][] = "ProjectTypeName";
$proto27["m_columns"][] = "companyName";
$proto27["m_columns"][] = "projectBudgetCost";
$proto27["m_columns"][] = "projectFile";
$proto27["m_columns"][] = "DocumentCheckDate";
$proto27["m_columns"][] = "DocumentCheckStatus";
$proto27["m_columns"][] = "DocumentCheckReason";
$proto27["m_columns"][] = "screenDate";
$proto27["m_columns"][] = "screenStatus";
$proto27["m_columns"][] = "screenReason";
$proto27["m_columns"][] = "approveDate";
$proto27["m_columns"][] = "approveStatus";
$proto27["m_columns"][] = "approveReason";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "entryTime";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "LEFT OUTER JOIN project ON taskCalendar.projectID = project.id";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "taskCalendarList";
$proto28=array();
$proto28["m_sql"] = "taskCalendar.projectID = project.id";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= project.id";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "taskCalendar",
	"m_srcTableName" => "taskCalendarList"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskCalendarList";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskcalendarlist = createSqlQuery_taskcalendarlist();


	
				;

								

$tdatataskcalendarlist[".sqlquery"] = $queryData_taskcalendarlist;



include_once(getabspath("include/taskcalendarlist_events.php"));
$tableEvents["taskCalendarList"] = new eventclass_taskcalendarlist;
$tdatataskcalendarlist[".hasEvents"] = true;

$query = &$queryData_taskcalendarlist;
$table = "taskCalendarList";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>