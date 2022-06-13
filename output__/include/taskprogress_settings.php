<?php
$tdatataskprogress = array();
$tdatataskprogress[".searchableFields"] = array();
$tdatataskprogress[".ShortName"] = "taskprogress";
$tdatataskprogress[".OwnerID"] = "";
$tdatataskprogress[".OriginalTable"] = "taskProgress";


$tdatataskprogress[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskprogress[".originalPagesByType"] = $tdatataskprogress[".pagesByType"];
$tdatataskprogress[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskprogress[".originalPages"] = $tdatataskprogress[".pages"];
$tdatataskprogress[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskprogress[".originalDefaultPages"] = $tdatataskprogress[".defaultPages"];

//	field labels
$fieldLabelstaskprogress = array();
$fieldToolTipstaskprogress = array();
$pageTitlestaskprogress = array();
$placeHolderstaskprogress = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskprogress["English"] = array();
	$fieldToolTipstaskprogress["English"] = array();
	$placeHolderstaskprogress["English"] = array();
	$pageTitlestaskprogress["English"] = array();
	$fieldLabelstaskprogress["English"]["id"] = "ID";
	$fieldToolTipstaskprogress["English"]["id"] = "";
	$placeHolderstaskprogress["English"]["id"] = "";
	$fieldLabelstaskprogress["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskprogress["English"]["projectID"] = "";
	$placeHolderstaskprogress["English"]["projectID"] = "";
	$fieldLabelstaskprogress["English"]["progressStep"] = "Progress Step";
	$fieldToolTipstaskprogress["English"]["progressStep"] = "";
	$placeHolderstaskprogress["English"]["progressStep"] = "";
	$fieldLabelstaskprogress["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipstaskprogress["English"]["progressStatus"] = "";
	$placeHolderstaskprogress["English"]["progressStatus"] = "";
	$fieldLabelstaskprogress["English"]["progressDesc"] = "Progress Desc";
	$fieldToolTipstaskprogress["English"]["progressDesc"] = "";
	$placeHolderstaskprogress["English"]["progressDesc"] = "";
	$fieldLabelstaskprogress["English"]["progressAttFille"] = "Progress Att Fille";
	$fieldToolTipstaskprogress["English"]["progressAttFille"] = "";
	$placeHolderstaskprogress["English"]["progressAttFille"] = "";
	$fieldLabelstaskprogress["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskprogress["English"]["entryUserName"] = "";
	$placeHolderstaskprogress["English"]["entryUserName"] = "";
	$fieldLabelstaskprogress["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskprogress["English"]["entryTime"] = "";
	$placeHolderstaskprogress["English"]["entryTime"] = "";
	$fieldLabelstaskprogress["English"]["progressDate"] = "Progress Date";
	$fieldToolTipstaskprogress["English"]["progressDate"] = "";
	$placeHolderstaskprogress["English"]["progressDate"] = "";
	if (count($fieldToolTipstaskprogress["English"]))
		$tdatataskprogress[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskprogress["Thai"] = array();
	$fieldToolTipstaskprogress["Thai"] = array();
	$placeHolderstaskprogress["Thai"] = array();
	$pageTitlestaskprogress["Thai"] = array();
	$fieldLabelstaskprogress["Thai"]["id"] = "ID";
	$fieldToolTipstaskprogress["Thai"]["id"] = "";
	$placeHolderstaskprogress["Thai"]["id"] = "";
	$fieldLabelstaskprogress["Thai"]["projectID"] = "Project ID";
	$fieldToolTipstaskprogress["Thai"]["projectID"] = "";
	$placeHolderstaskprogress["Thai"]["projectID"] = "";
	$fieldLabelstaskprogress["Thai"]["progressStep"] = "ลำดับขั้นตอน";
	$fieldToolTipstaskprogress["Thai"]["progressStep"] = "";
	$placeHolderstaskprogress["Thai"]["progressStep"] = "";
	$fieldLabelstaskprogress["Thai"]["progressStatus"] = "สถานะความคืบหน้า";
	$fieldToolTipstaskprogress["Thai"]["progressStatus"] = "";
	$placeHolderstaskprogress["Thai"]["progressStatus"] = "";
	$fieldLabelstaskprogress["Thai"]["progressDesc"] = "รายละเอียดความคืบหน้า";
	$fieldToolTipstaskprogress["Thai"]["progressDesc"] = "";
	$placeHolderstaskprogress["Thai"]["progressDesc"] = "";
	$fieldLabelstaskprogress["Thai"]["progressAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskprogress["Thai"]["progressAttFille"] = "";
	$placeHolderstaskprogress["Thai"]["progressAttFille"] = "";
	$fieldLabelstaskprogress["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskprogress["Thai"]["entryUserName"] = "";
	$placeHolderstaskprogress["Thai"]["entryUserName"] = "";
	$fieldLabelstaskprogress["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskprogress["Thai"]["entryTime"] = "";
	$placeHolderstaskprogress["Thai"]["entryTime"] = "";
	$fieldLabelstaskprogress["Thai"]["progressDate"] = "วันที่ความคืบหน้า";
	$fieldToolTipstaskprogress["Thai"]["progressDate"] = "";
	$placeHolderstaskprogress["Thai"]["progressDate"] = "";
	if (count($fieldToolTipstaskprogress["Thai"]))
		$tdatataskprogress[".isUseToolTips"] = true;
}


	$tdatataskprogress[".NCSearch"] = true;



$tdatataskprogress[".shortTableName"] = "taskprogress";
$tdatataskprogress[".nSecOptions"] = 0;

$tdatataskprogress[".mainTableOwnerID"] = "";
$tdatataskprogress[".entityType"] = 0;
$tdatataskprogress[".connId"] = "mc_at_192_168_1_111";


$tdatataskprogress[".strOriginalTableName"] = "taskProgress";

	



$tdatataskprogress[".showAddInPopup"] = false;

$tdatataskprogress[".showEditInPopup"] = false;

$tdatataskprogress[".showViewInPopup"] = false;

$tdatataskprogress[".listAjax"] = false;
//	temporary
//$tdatataskprogress[".listAjax"] = false;

	$tdatataskprogress[".audit"] = false;

	$tdatataskprogress[".locking"] = false;


$pages = $tdatataskprogress[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskprogress[".edit"] = true;
	$tdatataskprogress[".afterEditAction"] = 0;
	$tdatataskprogress[".closePopupAfterEdit"] = 1;
	$tdatataskprogress[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskprogress[".add"] = true;
$tdatataskprogress[".afterAddAction"] = 1;
$tdatataskprogress[".closePopupAfterAdd"] = 1;
$tdatataskprogress[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskprogress[".list"] = true;
}



$tdatataskprogress[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskprogress[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskprogress[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskprogress[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskprogress[".printFriendly"] = true;
}



$tdatataskprogress[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskprogress[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskprogress[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskprogress[".isUseAjaxSuggest"] = true;

$tdatataskprogress[".rowHighlite"] = true;





$tdatataskprogress[".ajaxCodeSnippetAdded"] = false;

$tdatataskprogress[".buttonsAdded"] = false;

$tdatataskprogress[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskprogress[".isUseTimeForSearch"] = false;


$tdatataskprogress[".badgeColor"] = "4169e1";


$tdatataskprogress[".allSearchFields"] = array();
$tdatataskprogress[".filterFields"] = array();
$tdatataskprogress[".requiredSearchFields"] = array();

$tdatataskprogress[".googleLikeFields"] = array();
$tdatataskprogress[".googleLikeFields"][] = "projectID";
$tdatataskprogress[".googleLikeFields"][] = "progressDate";
$tdatataskprogress[".googleLikeFields"][] = "progressStep";
$tdatataskprogress[".googleLikeFields"][] = "progressStatus";
$tdatataskprogress[".googleLikeFields"][] = "progressDesc";
$tdatataskprogress[".googleLikeFields"][] = "progressAttFille";
$tdatataskprogress[".googleLikeFields"][] = "entryUserName";
$tdatataskprogress[".googleLikeFields"][] = "entryTime";



$tdatataskprogress[".tableType"] = "list";

$tdatataskprogress[".printerPageOrientation"] = 0;
$tdatataskprogress[".nPrinterPageScale"] = 100;

$tdatataskprogress[".nPrinterSplitRecords"] = 40;

$tdatataskprogress[".geocodingEnabled"] = false;










$tdatataskprogress[".pageSize"] = 20;

$tdatataskprogress[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskprogress[".strOrderBy"] = $tstrOrderBy;

$tdatataskprogress[".orderindexes"] = array();


$tdatataskprogress[".sqlHead"] = "SELECT id,  	projectID,  	progressDate,  	progressStep,  	progressStatus,  	progressDesc,  	progressAttFille,  	entryUserName,  	entryTime";
$tdatataskprogress[".sqlFrom"] = "FROM taskProgress";
$tdatataskprogress[".sqlWhereExpr"] = "";
$tdatataskprogress[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskprogress[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskprogress[".arrGroupsPerPage"] = $arrGPP;

$tdatataskprogress[".highlightSearchResults"] = true;

$tableKeystaskprogress = array();
$tableKeystaskprogress[] = "id";
$tdatataskprogress[".Keys"] = $tableKeystaskprogress;


$tdatataskprogress[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","id");
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


	$tdatataskprogress["id"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","projectID");
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


	$tdatataskprogress["projectID"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "projectID";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","progressDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "progressDate";

	
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


	$tdatataskprogress["progressDate"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "progressDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","progressStep");
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


	$tdatataskprogress["progressStep"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "progressStep";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","progressStatus");
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
	$edata["LookupValues"][] = "Planing";
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


	$tdatataskprogress["progressStatus"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "progressStatus";
//	progressDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "progressDesc";
	$fdata["GoodName"] = "progressDesc";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","progressDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "progressDesc";

		$fdata["sourceSingle"] = "progressDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressDesc";

	
	
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


	$tdatataskprogress["progressDesc"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "progressDesc";
//	progressAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "progressAttFille";
	$fdata["GoodName"] = "progressAttFille";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","progressAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "progressAttFille";

		$fdata["sourceSingle"] = "progressAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressAttFille";

	
	
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


	$tdatataskprogress["progressAttFille"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "progressAttFille";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","entryUserName");
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


	$tdatataskprogress["entryUserName"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskProgress";
	$fdata["Label"] = GetFieldLabel("taskProgress","entryTime");
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatataskprogress["entryTime"] = $fdata;
		$tdatataskprogress[".searchableFields"][] = "entryTime";


$tables_data["taskProgress"]=&$tdatataskprogress;
$field_labels["taskProgress"] = &$fieldLabelstaskprogress;
$fieldToolTips["taskProgress"] = &$fieldToolTipstaskprogress;
$placeHolders["taskProgress"] = &$placeHolderstaskprogress;
$page_titles["taskProgress"] = &$pageTitlestaskprogress;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskProgress"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskProgress"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectType1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projecttype1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskProgress"][0] = $masterParams;
				$masterTablesData["taskProgress"][0]["masterKeys"] = array();
	$masterTablesData["taskProgress"][0]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][0]["detailKeys"] = array();
	$masterTablesData["taskProgress"][0]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][1] = $masterParams;
				$masterTablesData["taskProgress"][1]["masterKeys"] = array();
	$masterTablesData["taskProgress"][1]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][1]["detailKeys"] = array();
	$masterTablesData["taskProgress"][1]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][2] = $masterParams;
				$masterTablesData["taskProgress"][2]["masterKeys"] = array();
	$masterTablesData["taskProgress"][2]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][2]["detailKeys"] = array();
	$masterTablesData["taskProgress"][2]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][3] = $masterParams;
				$masterTablesData["taskProgress"][3]["masterKeys"] = array();
	$masterTablesData["taskProgress"][3]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][3]["detailKeys"] = array();
	$masterTablesData["taskProgress"][3]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][4] = $masterParams;
				$masterTablesData["taskProgress"][4]["masterKeys"] = array();
	$masterTablesData["taskProgress"][4]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][4]["detailKeys"] = array();
	$masterTablesData["taskProgress"][4]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][5] = $masterParams;
				$masterTablesData["taskProgress"][5]["masterKeys"] = array();
	$masterTablesData["taskProgress"][5]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][5]["detailKeys"] = array();
	$masterTablesData["taskProgress"][5]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][6] = $masterParams;
				$masterTablesData["taskProgress"][6]["masterKeys"] = array();
	$masterTablesData["taskProgress"][6]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][6]["detailKeys"] = array();
	$masterTablesData["taskProgress"][6]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][7] = $masterParams;
				$masterTablesData["taskProgress"][7]["masterKeys"] = array();
	$masterTablesData["taskProgress"][7]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][7]["detailKeys"] = array();
	$masterTablesData["taskProgress"][7]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskProgress"][8] = $masterParams;
				$masterTablesData["taskProgress"][8]["masterKeys"] = array();
	$masterTablesData["taskProgress"][8]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][8]["detailKeys"] = array();
	$masterTablesData["taskProgress"][8]["detailKeys"][]="projectID";
		
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
					$masterTablesData["taskProgress"][9] = $masterParams;
				$masterTablesData["taskProgress"][9]["masterKeys"] = array();
	$masterTablesData["taskProgress"][9]["masterKeys"][]="id";
				$masterTablesData["taskProgress"][9]["detailKeys"] = array();
	$masterTablesData["taskProgress"][9]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskprogress()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectID,  	progressDate,  	progressStep,  	progressStatus,  	progressDesc,  	progressAttFille,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM taskProgress";
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
	"m_srcTableName" => "taskProgress"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskProgress";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskProgress";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto10["m_sql"] = "progressDate";
$proto10["m_srcTableName"] = "taskProgress";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "taskProgress";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto14["m_sql"] = "progressStatus";
$proto14["m_srcTableName"] = "taskProgress";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDesc",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto16["m_sql"] = "progressDesc";
$proto16["m_srcTableName"] = "taskProgress";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "progressAttFille",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto18["m_sql"] = "progressAttFille";
$proto18["m_srcTableName"] = "taskProgress";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto20["m_sql"] = "entryUserName";
$proto20["m_srcTableName"] = "taskProgress";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskProgress",
	"m_srcTableName" => "taskProgress"
));

$proto22["m_sql"] = "entryTime";
$proto22["m_srcTableName"] = "taskProgress";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "taskProgress";
$proto25["m_srcTableName"] = "taskProgress";
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
$proto24["m_srcTableName"] = "taskProgress";
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
$proto0["m_srcTableName"]="taskProgress";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskprogress = createSqlQuery_taskprogress();


	
				;

									

$tdatataskprogress[".sqlquery"] = $queryData_taskprogress;



$tableEvents["taskProgress"] = new eventsBase;
$tdatataskprogress[".hasEvents"] = false;

?>