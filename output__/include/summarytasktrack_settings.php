<?php
$tdatasummarytasktrack = array();
$tdatasummarytasktrack[".searchableFields"] = array();
$tdatasummarytasktrack[".ShortName"] = "summarytasktrack";
$tdatasummarytasktrack[".OwnerID"] = "";
$tdatasummarytasktrack[".OriginalTable"] = "taskTrack";


$tdatasummarytasktrack[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatasummarytasktrack[".originalPagesByType"] = $tdatasummarytasktrack[".pagesByType"];
$tdatasummarytasktrack[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatasummarytasktrack[".originalPages"] = $tdatasummarytasktrack[".pages"];
$tdatasummarytasktrack[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatasummarytasktrack[".originalDefaultPages"] = $tdatasummarytasktrack[".defaultPages"];

//	field labels
$fieldLabelssummarytasktrack = array();
$fieldToolTipssummarytasktrack = array();
$pageTitlessummarytasktrack = array();
$placeHolderssummarytasktrack = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssummarytasktrack["English"] = array();
	$fieldToolTipssummarytasktrack["English"] = array();
	$placeHolderssummarytasktrack["English"] = array();
	$pageTitlessummarytasktrack["English"] = array();
	$fieldLabelssummarytasktrack["English"]["id"] = "ID";
	$fieldToolTipssummarytasktrack["English"]["id"] = "";
	$placeHolderssummarytasktrack["English"]["id"] = "";
	$fieldLabelssummarytasktrack["English"]["projectID"] = "Project Name";
	$fieldToolTipssummarytasktrack["English"]["projectID"] = "";
	$placeHolderssummarytasktrack["English"]["projectID"] = "";
	$fieldLabelssummarytasktrack["English"]["progressStep"] = "Progress Step";
	$fieldToolTipssummarytasktrack["English"]["progressStep"] = "";
	$placeHolderssummarytasktrack["English"]["progressStep"] = "";
	$fieldLabelssummarytasktrack["English"]["trackDesc"] = "Track Desc";
	$fieldToolTipssummarytasktrack["English"]["trackDesc"] = "";
	$placeHolderssummarytasktrack["English"]["trackDesc"] = "";
	$fieldLabelssummarytasktrack["English"]["trackAttFille"] = "Track Att Fille";
	$fieldToolTipssummarytasktrack["English"]["trackAttFille"] = "";
	$placeHolderssummarytasktrack["English"]["trackAttFille"] = "";
	$fieldLabelssummarytasktrack["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipssummarytasktrack["English"]["entryUserName"] = "";
	$placeHolderssummarytasktrack["English"]["entryUserName"] = "";
	$fieldLabelssummarytasktrack["English"]["entryTime"] = "Entry Time";
	$fieldToolTipssummarytasktrack["English"]["entryTime"] = "";
	$placeHolderssummarytasktrack["English"]["entryTime"] = "";
	$fieldLabelssummarytasktrack["English"]["trackDate"] = "Track Date";
	$fieldToolTipssummarytasktrack["English"]["trackDate"] = "";
	$placeHolderssummarytasktrack["English"]["trackDate"] = "";
	$fieldLabelssummarytasktrack["English"]["approveDate"] = "Approve Date";
	$fieldToolTipssummarytasktrack["English"]["approveDate"] = "";
	$placeHolderssummarytasktrack["English"]["approveDate"] = "";
	$fieldLabelssummarytasktrack["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipssummarytasktrack["English"]["approveStatus"] = "";
	$placeHolderssummarytasktrack["English"]["approveStatus"] = "";
	$fieldLabelssummarytasktrack["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipssummarytasktrack["English"]["approveReason"] = "";
	$placeHolderssummarytasktrack["English"]["approveReason"] = "";
	$fieldLabelssummarytasktrack["English"]["contactName"] = "Contact Name";
	$fieldToolTipssummarytasktrack["English"]["contactName"] = "";
	$placeHolderssummarytasktrack["English"]["contactName"] = "";
	$fieldLabelssummarytasktrack["English"]["progressDate"] = "Progress Date";
	$fieldToolTipssummarytasktrack["English"]["progressDate"] = "";
	$placeHolderssummarytasktrack["English"]["progressDate"] = "";
	$fieldLabelssummarytasktrack["English"]["progressStatus"] = "Progress Status";
	$fieldToolTipssummarytasktrack["English"]["progressStatus"] = "";
	$placeHolderssummarytasktrack["English"]["progressStatus"] = "";
	$fieldLabelssummarytasktrack["English"]["progressReason"] = "Progress Reason";
	$fieldToolTipssummarytasktrack["English"]["progressReason"] = "";
	$placeHolderssummarytasktrack["English"]["progressReason"] = "";
	if (count($fieldToolTipssummarytasktrack["English"]))
		$tdatasummarytasktrack[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelssummarytasktrack["Thai"] = array();
	$fieldToolTipssummarytasktrack["Thai"] = array();
	$placeHolderssummarytasktrack["Thai"] = array();
	$pageTitlessummarytasktrack["Thai"] = array();
	$fieldLabelssummarytasktrack["Thai"]["id"] = "ID";
	$fieldToolTipssummarytasktrack["Thai"]["id"] = "";
	$placeHolderssummarytasktrack["Thai"]["id"] = "";
	$fieldLabelssummarytasktrack["Thai"]["projectID"] = "โครงการ";
	$fieldToolTipssummarytasktrack["Thai"]["projectID"] = "";
	$placeHolderssummarytasktrack["Thai"]["projectID"] = "";
	$fieldLabelssummarytasktrack["Thai"]["progressStep"] = "รายละเอียดขั้นตอน";
	$fieldToolTipssummarytasktrack["Thai"]["progressStep"] = "";
	$placeHolderssummarytasktrack["Thai"]["progressStep"] = "";
	$fieldLabelssummarytasktrack["Thai"]["trackDesc"] = "รายละเอียดขั้นตอน";
	$fieldToolTipssummarytasktrack["Thai"]["trackDesc"] = "";
	$placeHolderssummarytasktrack["Thai"]["trackDesc"] = "";
	$fieldLabelssummarytasktrack["Thai"]["trackAttFille"] = "ผู้บันทึกรายการ";
	$fieldToolTipssummarytasktrack["Thai"]["trackAttFille"] = "";
	$placeHolderssummarytasktrack["Thai"]["trackAttFille"] = "";
	$fieldLabelssummarytasktrack["Thai"]["entryUserName"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipssummarytasktrack["Thai"]["entryUserName"] = "";
	$placeHolderssummarytasktrack["Thai"]["entryUserName"] = "";
	$fieldLabelssummarytasktrack["Thai"]["entryTime"] = "ผู้ดูแลโครงการ";
	$fieldToolTipssummarytasktrack["Thai"]["entryTime"] = "";
	$placeHolderssummarytasktrack["Thai"]["entryTime"] = "";
	$fieldLabelssummarytasktrack["Thai"]["trackDate"] = "วันที่ติดตามโครงการ";
	$fieldToolTipssummarytasktrack["Thai"]["trackDate"] = "";
	$placeHolderssummarytasktrack["Thai"]["trackDate"] = "";
	$fieldLabelssummarytasktrack["Thai"]["approveDate"] = "Approve Date";
	$fieldToolTipssummarytasktrack["Thai"]["approveDate"] = "";
	$placeHolderssummarytasktrack["Thai"]["approveDate"] = "";
	$fieldLabelssummarytasktrack["Thai"]["approveStatus"] = "Approve Status";
	$fieldToolTipssummarytasktrack["Thai"]["approveStatus"] = "";
	$placeHolderssummarytasktrack["Thai"]["approveStatus"] = "";
	$fieldLabelssummarytasktrack["Thai"]["approveReason"] = "Approve Reason";
	$fieldToolTipssummarytasktrack["Thai"]["approveReason"] = "";
	$placeHolderssummarytasktrack["Thai"]["approveReason"] = "";
	$fieldLabelssummarytasktrack["Thai"]["contactName"] = "Contact Name";
	$fieldToolTipssummarytasktrack["Thai"]["contactName"] = "";
	$placeHolderssummarytasktrack["Thai"]["contactName"] = "";
	$fieldLabelssummarytasktrack["Thai"]["progressDate"] = "Progress Date";
	$fieldToolTipssummarytasktrack["Thai"]["progressDate"] = "";
	$placeHolderssummarytasktrack["Thai"]["progressDate"] = "";
	$fieldLabelssummarytasktrack["Thai"]["progressStatus"] = "Progress Status";
	$fieldToolTipssummarytasktrack["Thai"]["progressStatus"] = "";
	$placeHolderssummarytasktrack["Thai"]["progressStatus"] = "";
	$fieldLabelssummarytasktrack["Thai"]["progressReason"] = "Progress Reason";
	$fieldToolTipssummarytasktrack["Thai"]["progressReason"] = "";
	$placeHolderssummarytasktrack["Thai"]["progressReason"] = "";
	if (count($fieldToolTipssummarytasktrack["Thai"]))
		$tdatasummarytasktrack[".isUseToolTips"] = true;
}


	$tdatasummarytasktrack[".NCSearch"] = true;



$tdatasummarytasktrack[".shortTableName"] = "summarytasktrack";
$tdatasummarytasktrack[".nSecOptions"] = 0;

$tdatasummarytasktrack[".mainTableOwnerID"] = "";
$tdatasummarytasktrack[".entityType"] = 2;
$tdatasummarytasktrack[".connId"] = "mc_at_192_168_1_111";


$tdatasummarytasktrack[".strOriginalTableName"] = "taskTrack";

	



$tdatasummarytasktrack[".showAddInPopup"] = false;

$tdatasummarytasktrack[".showEditInPopup"] = false;

$tdatasummarytasktrack[".showViewInPopup"] = false;

$tdatasummarytasktrack[".listAjax"] = false;
//	temporary
//$tdatasummarytasktrack[".listAjax"] = false;

	$tdatasummarytasktrack[".audit"] = false;

	$tdatasummarytasktrack[".locking"] = false;


$pages = $tdatasummarytasktrack[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasummarytasktrack[".edit"] = true;
	$tdatasummarytasktrack[".afterEditAction"] = 0;
	$tdatasummarytasktrack[".closePopupAfterEdit"] = 1;
	$tdatasummarytasktrack[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasummarytasktrack[".add"] = true;
$tdatasummarytasktrack[".afterAddAction"] = 1;
$tdatasummarytasktrack[".closePopupAfterAdd"] = 1;
$tdatasummarytasktrack[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasummarytasktrack[".list"] = true;
}



$tdatasummarytasktrack[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasummarytasktrack[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasummarytasktrack[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasummarytasktrack[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasummarytasktrack[".printFriendly"] = true;
}



$tdatasummarytasktrack[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasummarytasktrack[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasummarytasktrack[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasummarytasktrack[".isUseAjaxSuggest"] = true;






$tdatasummarytasktrack[".ajaxCodeSnippetAdded"] = false;

$tdatasummarytasktrack[".buttonsAdded"] = false;

$tdatasummarytasktrack[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasummarytasktrack[".isUseTimeForSearch"] = false;


$tdatasummarytasktrack[".badgeColor"] = "5F9EA0";


$tdatasummarytasktrack[".allSearchFields"] = array();
$tdatasummarytasktrack[".filterFields"] = array();
$tdatasummarytasktrack[".requiredSearchFields"] = array();

$tdatasummarytasktrack[".googleLikeFields"] = array();
$tdatasummarytasktrack[".googleLikeFields"][] = "id";
$tdatasummarytasktrack[".googleLikeFields"][] = "projectID";
$tdatasummarytasktrack[".googleLikeFields"][] = "trackDate";
$tdatasummarytasktrack[".googleLikeFields"][] = "progressStep";
$tdatasummarytasktrack[".googleLikeFields"][] = "trackDesc";
$tdatasummarytasktrack[".googleLikeFields"][] = "trackAttFille";
$tdatasummarytasktrack[".googleLikeFields"][] = "contactName";
$tdatasummarytasktrack[".googleLikeFields"][] = "progressDate";
$tdatasummarytasktrack[".googleLikeFields"][] = "progressStatus";
$tdatasummarytasktrack[".googleLikeFields"][] = "progressReason";
$tdatasummarytasktrack[".googleLikeFields"][] = "approveDate";
$tdatasummarytasktrack[".googleLikeFields"][] = "approveStatus";
$tdatasummarytasktrack[".googleLikeFields"][] = "approveReason";
$tdatasummarytasktrack[".googleLikeFields"][] = "entryUserName";
$tdatasummarytasktrack[".googleLikeFields"][] = "entryTime";



$tdatasummarytasktrack[".tableType"] = "report";

$tdatasummarytasktrack[".printerPageOrientation"] = 0;
$tdatasummarytasktrack[".nPrinterPageScale"] = 100;

$tdatasummarytasktrack[".nPrinterSplitRecords"] = 40;

$tdatasummarytasktrack[".geocodingEnabled"] = false;

//report settings

$tdatasummarytasktrack[".reportPrintGroupsPerPage"] = 3;
$tdatasummarytasktrack[".reportPrintRecordsPerPage"] = 40;

$tdatasummarytasktrack[".pageSizeGroups"] = 5;
$tdatasummarytasktrack[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatasummarytasktrack[".strOrderBy"] = $tstrOrderBy;

$tdatasummarytasktrack[".orderindexes"] = array();


$tdatasummarytasktrack[".sqlHead"] = "SELECT id,  	projectID,  	trackDate,  	progressStep,  	trackDesc,  	trackAttFille,  	contactName,  	progressDate,  	progressStatus,  	progressReason,  	approveDate,  	approveStatus,  	approveReason,  	entryUserName,  	entryTime";
$tdatasummarytasktrack[".sqlFrom"] = "FROM taskTrack";
$tdatasummarytasktrack[".sqlWhereExpr"] = "";
$tdatasummarytasktrack[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasummarytasktrack[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasummarytasktrack[".arrGroupsPerPage"] = $arrGPP;

$tdatasummarytasktrack[".highlightSearchResults"] = true;

$tableKeyssummarytasktrack = array();
$tableKeyssummarytasktrack[] = "id";
$tdatasummarytasktrack[".Keys"] = $tableKeyssummarytasktrack;


$tdatasummarytasktrack[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["id"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","projectID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["projectID"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "projectID";
//	trackDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trackDate";
	$fdata["GoodName"] = "trackDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","trackDate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["trackDate"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "trackDate";
//	progressStep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "progressStep";
	$fdata["GoodName"] = "progressStep";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","progressStep");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["progressStep"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "progressStep";
//	trackDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "trackDesc";
	$fdata["GoodName"] = "trackDesc";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","trackDesc");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["trackDesc"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "trackDesc";
//	trackAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trackAttFille";
	$fdata["GoodName"] = "trackAttFille";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","trackAttFille");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["trackAttFille"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "trackAttFille";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","contactName");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["contactName"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "contactName";
//	progressDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "progressDate";
	$fdata["GoodName"] = "progressDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","progressDate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["progressDate"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "progressDate";
//	progressStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "progressStatus";
	$fdata["GoodName"] = "progressStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","progressStatus");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["progressStatus"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "progressStatus";
//	progressReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progressReason";
	$fdata["GoodName"] = "progressReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","progressReason");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["progressReason"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "progressReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","approveDate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["approveDate"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","approveStatus");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["approveStatus"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","approveReason");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["approveReason"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","entryUserName");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["entryUserName"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskTrack";
	$fdata["Label"] = GetFieldLabel("SummaryTaskTrack","entryTime");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatasummarytasktrack["entryTime"] = $fdata;
		$tdatasummarytasktrack[".searchableFields"][] = "entryTime";


$tables_data["SummaryTaskTrack"]=&$tdatasummarytasktrack;
$field_labels["SummaryTaskTrack"] = &$fieldLabelssummarytasktrack;
$fieldToolTips["SummaryTaskTrack"] = &$fieldToolTipssummarytasktrack;
$placeHolders["SummaryTaskTrack"] = &$placeHolderssummarytasktrack;
$page_titles["SummaryTaskTrack"] = &$pageTitlessummarytasktrack;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SummaryTaskTrack"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SummaryTaskTrack"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_summarytasktrack()
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
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "SummaryTaskTrack";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "SummaryTaskTrack";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto10["m_sql"] = "trackDate";
$proto10["m_srcTableName"] = "SummaryTaskTrack";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStep",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto12["m_sql"] = "progressStep";
$proto12["m_srcTableName"] = "SummaryTaskTrack";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "trackDesc",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto14["m_sql"] = "trackDesc";
$proto14["m_srcTableName"] = "SummaryTaskTrack";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "trackAttFille",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto16["m_sql"] = "trackAttFille";
$proto16["m_srcTableName"] = "SummaryTaskTrack";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto18["m_sql"] = "contactName";
$proto18["m_srcTableName"] = "SummaryTaskTrack";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "progressDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto20["m_sql"] = "progressDate";
$proto20["m_srcTableName"] = "SummaryTaskTrack";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "progressStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto22["m_sql"] = "progressStatus";
$proto22["m_srcTableName"] = "SummaryTaskTrack";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progressReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto24["m_sql"] = "progressReason";
$proto24["m_srcTableName"] = "SummaryTaskTrack";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto26["m_sql"] = "approveDate";
$proto26["m_srcTableName"] = "SummaryTaskTrack";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto28["m_sql"] = "approveStatus";
$proto28["m_srcTableName"] = "SummaryTaskTrack";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto30["m_sql"] = "approveReason";
$proto30["m_srcTableName"] = "SummaryTaskTrack";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto32["m_sql"] = "entryUserName";
$proto32["m_srcTableName"] = "SummaryTaskTrack";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskTrack",
	"m_srcTableName" => "SummaryTaskTrack"
));

$proto34["m_sql"] = "entryTime";
$proto34["m_srcTableName"] = "SummaryTaskTrack";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "taskTrack";
$proto37["m_srcTableName"] = "SummaryTaskTrack";
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
$proto36["m_srcTableName"] = "SummaryTaskTrack";
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
$proto0["m_srcTableName"]="SummaryTaskTrack";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_summarytasktrack = createSqlQuery_summarytasktrack();


	
				;

															

$tdatasummarytasktrack[".sqlquery"] = $queryData_summarytasktrack;



$tableEvents["SummaryTaskTrack"] = new eventsBase;
$tdatasummarytasktrack[".hasEvents"] = false;

?>