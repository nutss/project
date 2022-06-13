<?php
$tdatataskprogresslist = array();
$tdatataskprogresslist[".searchableFields"] = array();
$tdatataskprogresslist[".ShortName"] = "taskprogresslist";
$tdatataskprogresslist[".OwnerID"] = "";
$tdatataskprogresslist[".OriginalTable"] = "taskProgress";


$tdatataskprogresslist[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskprogresslist[".originalPagesByType"] = $tdatataskprogresslist[".pagesByType"];
$tdatataskprogresslist[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskprogresslist[".originalPages"] = $tdatataskprogresslist[".pages"];
$tdatataskprogresslist[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskprogresslist[".originalDefaultPages"] = $tdatataskprogresslist[".defaultPages"];

//	field labels
$fieldLabelstaskprogresslist = array();
$fieldToolTipstaskprogresslist = array();
$pageTitlestaskprogresslist = array();
$placeHolderstaskprogresslist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskprogresslist["English"] = array();
	$fieldToolTipstaskprogresslist["English"] = array();
	$placeHolderstaskprogresslist["English"] = array();
	$pageTitlestaskprogresslist["English"] = array();
	$fieldLabelstaskprogresslist["English"]["id"] = "ID";
	$fieldToolTipstaskprogresslist["English"]["id"] = "";
	$placeHolderstaskprogresslist["English"]["id"] = "";
	$fieldLabelstaskprogresslist["English"]["projectID"] = "Project Name";
	$fieldToolTipstaskprogresslist["English"]["projectID"] = "";
	$placeHolderstaskprogresslist["English"]["projectID"] = "";
	$fieldLabelstaskprogresslist["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskprogresslist["English"]["progressStep"] = "";
	$placeHolderstaskprogresslist["English"]["progressStep"] = "";
	$fieldLabelstaskprogresslist["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstaskprogresslist["English"]["progressStatus"] = "";
	$placeHolderstaskprogresslist["English"]["progressStatus"] = "";
	$fieldLabelstaskprogresslist["English"]["progressDesc"] = "Progress Desc";
	$fieldToolTipstaskprogresslist["English"]["progressDesc"] = "";
	$placeHolderstaskprogresslist["English"]["progressDesc"] = "";
	$fieldLabelstaskprogresslist["English"]["progressAttFille"] = "Progress Att Fille";
	$fieldToolTipstaskprogresslist["English"]["progressAttFille"] = "";
	$placeHolderstaskprogresslist["English"]["progressAttFille"] = "";
	$fieldLabelstaskprogresslist["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskprogresslist["English"]["entryUserName"] = "";
	$placeHolderstaskprogresslist["English"]["entryUserName"] = "";
	$fieldLabelstaskprogresslist["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskprogresslist["English"]["entryTime"] = "";
	$placeHolderstaskprogresslist["English"]["entryTime"] = "";
	$fieldLabelstaskprogresslist["English"]["progressDate"] = "Progress Date";
	$fieldToolTipstaskprogresslist["English"]["progressDate"] = "";
	$placeHolderstaskprogresslist["English"]["progressDate"] = "";
	if (count($fieldToolTipstaskprogresslist["English"]))
		$tdatataskprogresslist[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskprogresslist["Thai"] = array();
	$fieldToolTipstaskprogresslist["Thai"] = array();
	$placeHolderstaskprogresslist["Thai"] = array();
	$pageTitlestaskprogresslist["Thai"] = array();
	$fieldLabelstaskprogresslist["Thai"]["id"] = "ID";
	$fieldToolTipstaskprogresslist["Thai"]["id"] = "";
	$placeHolderstaskprogresslist["Thai"]["id"] = "";
	$fieldLabelstaskprogresslist["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskprogresslist["Thai"]["projectID"] = "";
	$placeHolderstaskprogresslist["Thai"]["projectID"] = "";
	$fieldLabelstaskprogresslist["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskprogresslist["Thai"]["progressStep"] = "";
	$placeHolderstaskprogresslist["Thai"]["progressStep"] = "";
	$fieldLabelstaskprogresslist["Thai"]["progressStatus"] = "สถานะความคืบหน้า";
	$fieldToolTipstaskprogresslist["Thai"]["progressStatus"] = "";
	$placeHolderstaskprogresslist["Thai"]["progressStatus"] = "";
	$fieldLabelstaskprogresslist["Thai"]["progressDesc"] = "รายละเอียดความคืบหน้า";
	$fieldToolTipstaskprogresslist["Thai"]["progressDesc"] = "";
	$placeHolderstaskprogresslist["Thai"]["progressDesc"] = "";
	$fieldLabelstaskprogresslist["Thai"]["progressAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskprogresslist["Thai"]["progressAttFille"] = "";
	$placeHolderstaskprogresslist["Thai"]["progressAttFille"] = "";
	$fieldLabelstaskprogresslist["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskprogresslist["Thai"]["entryUserName"] = "";
	$placeHolderstaskprogresslist["Thai"]["entryUserName"] = "";
	$fieldLabelstaskprogresslist["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskprogresslist["Thai"]["entryTime"] = "";
	$placeHolderstaskprogresslist["Thai"]["entryTime"] = "";
	$fieldLabelstaskprogresslist["Thai"]["progressDate"] = "วันที่ความคืบหน้า";
	$fieldToolTipstaskprogresslist["Thai"]["progressDate"] = "";
	$placeHolderstaskprogresslist["Thai"]["progressDate"] = "";
	if (count($fieldToolTipstaskprogresslist["Thai"]))
		$tdatataskprogresslist[".isUseToolTips"] = true;
}


	$tdatataskprogresslist[".NCSearch"] = true;



$tdatataskprogresslist[".shortTableName"] = "taskprogresslist";
$tdatataskprogresslist[".nSecOptions"] = 0;

$tdatataskprogresslist[".mainTableOwnerID"] = "";
$tdatataskprogresslist[".entityType"] = 1;
$tdatataskprogresslist[".connId"] = "mc_at_192_168_1_111";


$tdatataskprogresslist[".strOriginalTableName"] = "taskProgress";

	



$tdatataskprogresslist[".showAddInPopup"] = false;

$tdatataskprogresslist[".showEditInPopup"] = false;

$tdatataskprogresslist[".showViewInPopup"] = false;

$tdatataskprogresslist[".listAjax"] = false;
//	temporary
//$tdatataskprogresslist[".listAjax"] = false;

	$tdatataskprogresslist[".audit"] = false;

	$tdatataskprogresslist[".locking"] = false;


$pages = $tdatataskprogresslist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskprogresslist[".edit"] = true;
	$tdatataskprogresslist[".afterEditAction"] = 0;
	$tdatataskprogresslist[".closePopupAfterEdit"] = 1;
	$tdatataskprogresslist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskprogresslist[".add"] = true;
$tdatataskprogresslist[".afterAddAction"] = 1;
$tdatataskprogresslist[".closePopupAfterAdd"] = 1;
$tdatataskprogresslist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskprogresslist[".list"] = true;
}



$tdatataskprogresslist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskprogresslist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskprogresslist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskprogresslist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskprogresslist[".printFriendly"] = true;
}



$tdatataskprogresslist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskprogresslist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskprogresslist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskprogresslist[".isUseAjaxSuggest"] = true;

$tdatataskprogresslist[".rowHighlite"] = true;





$tdatataskprogresslist[".ajaxCodeSnippetAdded"] = false;

$tdatataskprogresslist[".buttonsAdded"] = false;

$tdatataskprogresslist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskprogresslist[".isUseTimeForSearch"] = false;


$tdatataskprogresslist[".badgeColor"] = "D2691E";


$tdatataskprogresslist[".allSearchFields"] = array();
$tdatataskprogresslist[".filterFields"] = array();
$tdatataskprogresslist[".requiredSearchFields"] = array();

$tdatataskprogresslist[".googleLikeFields"] = array();
$tdatataskprogresslist[".googleLikeFields"][] = "projectID";
$tdatataskprogresslist[".googleLikeFields"][] = "progressDate";
$tdatataskprogresslist[".googleLikeFields"][] = "progressStep";
$tdatataskprogresslist[".googleLikeFields"][] = "progressStatus";
$tdatataskprogresslist[".googleLikeFields"][] = "progressDesc";
$tdatataskprogresslist[".googleLikeFields"][] = "progressAttFille";
$tdatataskprogresslist[".googleLikeFields"][] = "entryUserName";
$tdatataskprogresslist[".googleLikeFields"][] = "entryTime";



$tdatataskprogresslist[".tableType"] = "list";

$tdatataskprogresslist[".printerPageOrientation"] = 0;
$tdatataskprogresslist[".nPrinterPageScale"] = 100;

$tdatataskprogresslist[".nPrinterSplitRecords"] = 40;

$tdatataskprogresslist[".geocodingEnabled"] = false;










$tdatataskprogresslist[".pageSize"] = 20;

$tdatataskprogresslist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskprogresslist[".strOrderBy"] = $tstrOrderBy;

$tdatataskprogresslist[".orderindexes"] = array();


$tdatataskprogresslist[".sqlHead"] = "SELECT taskProgress.id,  taskProgress.projectID,  taskProgress.progressDate,  taskProgress.progressStep,  taskProgress.progressStatus,  taskProgress.progressDesc,  taskProgress.progressAttFille,  project.entryUserName,  taskProgress.entryTime";
$tdatataskprogresslist[".sqlFrom"] = "FROM taskProgress  RIGHT OUTER JOIN project ON project.id = taskProgress.projectID";
$tdatataskprogresslist[".sqlWhereExpr"] = "";
$tdatataskprogresslist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskprogresslist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskprogresslist[".arrGroupsPerPage"] = $arrGPP;

$tdatataskprogresslist[".highlightSearchResults"] = true;

$tableKeystaskprogresslist = array();
$tableKeystaskprogresslist[] = "id";
$tdatataskprogresslist[".Keys"] = $tableKeystaskprogresslist;


$tdatataskprogresslist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.id";

	
	
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


	$tdatataskprogresslist["id"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.projectID";

	
	
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


	$tdatataskprogresslist["projectID"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "projectID";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","progressDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.progressDate";

	
	
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


	$tdatataskprogresslist["progressDate"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "progressDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","progressStep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStep";

		$fdata["sourceSingle"] = "progressStep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.progressStep";

	
	
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


	$tdatataskprogresslist["progressStep"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "progressStep";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","progressStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressStatus";

		$fdata["sourceSingle"] = "progressStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.progressStatus";

	
	
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
	$edata["LookupValues"][] = "Working";
	$edata["LookupValues"][] = "Finish";
	$edata["LookupValues"][] = "Cancel";

	
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


	$tdatataskprogresslist["progressStatus"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "progressStatus";
//	progressDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "progressDesc";
	$fdata["GoodName"] = "progressDesc";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","progressDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressDesc";

		$fdata["sourceSingle"] = "progressDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.progressDesc";

	
	
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


	$tdatataskprogresslist["progressDesc"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "progressDesc";
//	progressAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "progressAttFille";
	$fdata["GoodName"] = "progressAttFille";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","progressAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "progressAttFille";

		$fdata["sourceSingle"] = "progressAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.progressAttFille";

	
	
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


	$tdatataskprogresslist["progressAttFille"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "progressAttFille";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskProgressList","entryUserName");
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


	$tdatataskprogresslist["entryUserName"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgressList","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskProgress.entryTime";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatataskprogresslist["entryTime"] = $fdata;
		$tdatataskprogresslist[".searchableFields"][] = "entryTime";


$tables_data["taskProgressList"]=&$tdatataskprogresslist;
$field_labels["taskProgressList"] = &$fieldLabelstaskprogresslist;
$fieldToolTips["taskProgressList"] = &$fieldToolTipstaskprogresslist;
$placeHolders["taskProgressList"] = &$placeHolderstaskprogresslist;
$page_titles["taskProgressList"] = &$pageTitlestaskprogresslist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskProgressList"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskProgressList"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskprogresslist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskProgress.id,  taskProgress.projectID,  taskProgress.progressDate,  taskProgress.progressStep,  taskProgress.progressStatus,  taskProgress.progressDesc,  taskProgress.progressAttFille,  project.entryUserName,  taskProgress.entryTime";
$proto0["m_strFrom"] = "FROM taskProgress  RIGHT OUTER JOIN project ON project.id = taskProgress.projectID";
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
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto6["m_sql"] = "taskProgress.id";
$proto6["m_srcTableName"] = "taskProgressList";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto8["m_sql"] = "taskProgress.projectID";
$proto8["m_srcTableName"] = "taskProgressList";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto10["m_sql"] = "taskProgress.progressDate";
$proto10["m_srcTableName"] = "taskProgressList";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto12["m_sql"] = "taskProgress.progressStep";
$proto12["m_srcTableName"] = "taskProgressList";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto14["m_sql"] = "taskProgress.progressStatus";
$proto14["m_srcTableName"] = "taskProgressList";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDesc",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto16["m_sql"] = "taskProgress.progressDesc";
$proto16["m_srcTableName"] = "taskProgressList";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "progressAttFille",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto18["m_sql"] = "taskProgress.progressAttFille";
$proto18["m_srcTableName"] = "taskProgressList";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskProgressList"
));

$proto20["m_sql"] = "project.entryUserName";
$proto20["m_srcTableName"] = "taskProgressList";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto22["m_sql"] = "taskProgress.entryTime";
$proto22["m_srcTableName"] = "taskProgressList";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "taskProgress";
$proto25["m_srcTableName"] = "taskProgressList";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "projectID";
$proto25["m_columns"][] = "progressDate";
$proto25["m_columns"][] = "progressStep";
$proto25["m_columns"][] = "progressStatus";
$proto25["m_columns"][] = "progressDesc";
$proto25["m_columns"][] = "progressAttFille";
$proto25["m_columns"][] = "entryUserName";
$proto25["m_columns"][] = "entryTime";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "taskProgress";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "taskProgressList";
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
												$proto28=array();
$proto28["m_link"] = "SQLL_RIGHTJOIN";
			$proto29=array();
$proto29["m_strName"] = "project";
$proto29["m_srcTableName"] = "taskProgressList";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "projectName";
$proto29["m_columns"][] = "projectStart";
$proto29["m_columns"][] = "projectEnd";
$proto29["m_columns"][] = "ProjectTypeName";
$proto29["m_columns"][] = "companyName";
$proto29["m_columns"][] = "projectBudgetCost";
$proto29["m_columns"][] = "projectFile";
$proto29["m_columns"][] = "DocumentCheckDate";
$proto29["m_columns"][] = "DocumentCheckStatus";
$proto29["m_columns"][] = "DocumentCheckReason";
$proto29["m_columns"][] = "screenDate";
$proto29["m_columns"][] = "screenStatus";
$proto29["m_columns"][] = "screenReason";
$proto29["m_columns"][] = "approveDate";
$proto29["m_columns"][] = "approveStatus";
$proto29["m_columns"][] = "approveReason";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "RIGHT OUTER JOIN project ON project.id = taskProgress.projectID";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "taskProgressList";
$proto30=array();
$proto30["m_sql"] = "project.id = taskProgress.projectID";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "taskProgressList"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= taskProgress.projectID";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgressList"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskProgressList";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskprogresslist = createSqlQuery_taskprogresslist();


	
				;

									

$tdatataskprogresslist[".sqlquery"] = $queryData_taskprogresslist;



include_once(getabspath("include/taskprogresslist_events.php"));
$tableEvents["taskProgressList"] = new eventclass_taskprogresslist;
$tdatataskprogresslist[".hasEvents"] = true;

$query = &$queryData_taskprogresslist;
$table = "taskProgressList";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>