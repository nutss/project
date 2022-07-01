<?php
$tdataresearchperiod = array();
$tdataresearchperiod[".searchableFields"] = array();
$tdataresearchperiod[".ShortName"] = "researchperiod";
$tdataresearchperiod[".OwnerID"] = "";
$tdataresearchperiod[".OriginalTable"] = "researchOperatingPeriod";


$tdataresearchperiod[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchperiod[".originalPagesByType"] = $tdataresearchperiod[".pagesByType"];
$tdataresearchperiod[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchperiod[".originalPages"] = $tdataresearchperiod[".pages"];
$tdataresearchperiod[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchperiod[".originalDefaultPages"] = $tdataresearchperiod[".defaultPages"];

//	field labels
$fieldLabelsresearchperiod = array();
$fieldToolTipsresearchperiod = array();
$pageTitlesresearchperiod = array();
$placeHoldersresearchperiod = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchperiod["English"] = array();
	$fieldToolTipsresearchperiod["English"] = array();
	$placeHoldersresearchperiod["English"] = array();
	$pageTitlesresearchperiod["English"] = array();
	$fieldLabelsresearchperiod["English"]["id"] = "Id";
	$fieldToolTipsresearchperiod["English"]["id"] = "";
	$placeHoldersresearchperiod["English"]["id"] = "Id";
	$fieldLabelsresearchperiod["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchperiod["English"]["researchProjectID"] = "";
	$placeHoldersresearchperiod["English"]["researchProjectID"] = "Research Project ID";
	$fieldLabelsresearchperiod["English"]["researchOperatingPeriodNo"] = "Research Operating Period No";
	$fieldToolTipsresearchperiod["English"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchperiod["English"]["researchOperatingPeriodNo"] = "Research Operating Period No";
	$fieldLabelsresearchperiod["English"]["researchOperatingPeriodEndDate"] = "Research Operating Period End Date";
	$fieldToolTipsresearchperiod["English"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchperiod["English"]["researchOperatingPeriodEndDate"] = "Research Operating Period End Date";
	$fieldLabelsresearchperiod["English"]["researchOperatingPeriodDisburse"] = "Research Operating Period Disburse";
	$fieldToolTipsresearchperiod["English"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchperiod["English"]["researchOperatingPeriodDisburse"] = "Research Operating Period Disburse";
	$fieldLabelsresearchperiod["English"]["researchOperatingPeriodDisbursePercent"] = "Research Operating Period Disburse Percent";
	$fieldToolTipsresearchperiod["English"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchperiod["English"]["researchOperatingPeriodDisbursePercent"] = "Research Operating Period Disburse Percent";
	$fieldLabelsresearchperiod["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchperiod["English"]["entryUserName"] = "";
	$placeHoldersresearchperiod["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchperiod["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchperiod["English"]["entryTime"] = "";
	$placeHoldersresearchperiod["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchperiod["English"]))
		$tdataresearchperiod[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchperiod["Thai"] = array();
	$fieldToolTipsresearchperiod["Thai"] = array();
	$placeHoldersresearchperiod["Thai"] = array();
	$pageTitlesresearchperiod["Thai"] = array();
	$fieldLabelsresearchperiod["Thai"]["id"] = "ID";
	$fieldToolTipsresearchperiod["Thai"]["id"] = "";
	$placeHoldersresearchperiod["Thai"]["id"] = "ID";
	$fieldLabelsresearchperiod["Thai"]["researchOperatingPeriodNo"] = "งวดที่";
	$fieldToolTipsresearchperiod["Thai"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchperiod["Thai"]["researchOperatingPeriodNo"] = "งวดที่";
	$fieldLabelsresearchperiod["Thai"]["researchOperatingPeriodEndDate"] = "วันสิ้นสุดงวด";
	$fieldToolTipsresearchperiod["Thai"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchperiod["Thai"]["researchOperatingPeriodEndDate"] = "วันสิ้นสุดงวด";
	$fieldLabelsresearchperiod["Thai"]["researchOperatingPeriodDisburse"] = "ยอดเบิกจ่าย";
	$fieldToolTipsresearchperiod["Thai"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchperiod["Thai"]["researchOperatingPeriodDisburse"] = "ยอดเบิกจ่าย";
	$fieldLabelsresearchperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "ร้อยละเบิกจ่าย";
	$fieldToolTipsresearchperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "ร้อยละเบิกจ่าย";
	$fieldLabelsresearchperiod["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchperiod["Thai"]["entryUserName"] = "";
	$placeHoldersresearchperiod["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchperiod["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchperiod["Thai"]["entryTime"] = "";
	$placeHoldersresearchperiod["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsresearchperiod["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchperiod["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchperiod["Thai"]["researchProjectID"] = "PROJECT_ID";
	if (count($fieldToolTipsresearchperiod["Thai"]))
		$tdataresearchperiod[".isUseToolTips"] = true;
}


	$tdataresearchperiod[".NCSearch"] = true;



$tdataresearchperiod[".shortTableName"] = "researchperiod";
$tdataresearchperiod[".nSecOptions"] = 0;

$tdataresearchperiod[".mainTableOwnerID"] = "";
$tdataresearchperiod[".entityType"] = 1;
$tdataresearchperiod[".connId"] = "mc_at_192_168_1_111";


$tdataresearchperiod[".strOriginalTableName"] = "researchOperatingPeriod";

	



$tdataresearchperiod[".showAddInPopup"] = false;

$tdataresearchperiod[".showEditInPopup"] = false;

$tdataresearchperiod[".showViewInPopup"] = false;

$tdataresearchperiod[".listAjax"] = false;
//	temporary
//$tdataresearchperiod[".listAjax"] = false;

	$tdataresearchperiod[".audit"] = true;

	$tdataresearchperiod[".locking"] = false;


$pages = $tdataresearchperiod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchperiod[".edit"] = true;
	$tdataresearchperiod[".afterEditAction"] = 1;
	$tdataresearchperiod[".closePopupAfterEdit"] = 1;
	$tdataresearchperiod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchperiod[".add"] = true;
$tdataresearchperiod[".afterAddAction"] = 1;
$tdataresearchperiod[".closePopupAfterAdd"] = 1;
$tdataresearchperiod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchperiod[".list"] = true;
}



$tdataresearchperiod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchperiod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchperiod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchperiod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchperiod[".printFriendly"] = true;
}



$tdataresearchperiod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchperiod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchperiod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchperiod[".isUseAjaxSuggest"] = true;

$tdataresearchperiod[".rowHighlite"] = true;





$tdataresearchperiod[".ajaxCodeSnippetAdded"] = false;

$tdataresearchperiod[".buttonsAdded"] = false;

$tdataresearchperiod[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchperiod[".isUseTimeForSearch"] = false;


$tdataresearchperiod[".badgeColor"] = "8fbc8b";


$tdataresearchperiod[".allSearchFields"] = array();
$tdataresearchperiod[".filterFields"] = array();
$tdataresearchperiod[".requiredSearchFields"] = array();

$tdataresearchperiod[".googleLikeFields"] = array();
$tdataresearchperiod[".googleLikeFields"][] = "id";
$tdataresearchperiod[".googleLikeFields"][] = "researchProjectID";
$tdataresearchperiod[".googleLikeFields"][] = "researchOperatingPeriodNo";
$tdataresearchperiod[".googleLikeFields"][] = "researchOperatingPeriodEndDate";
$tdataresearchperiod[".googleLikeFields"][] = "researchOperatingPeriodDisburse";
$tdataresearchperiod[".googleLikeFields"][] = "researchOperatingPeriodDisbursePercent";
$tdataresearchperiod[".googleLikeFields"][] = "entryUserName";
$tdataresearchperiod[".googleLikeFields"][] = "entryTime";



$tdataresearchperiod[".tableType"] = "list";

$tdataresearchperiod[".printerPageOrientation"] = 0;
$tdataresearchperiod[".nPrinterPageScale"] = 100;

$tdataresearchperiod[".nPrinterSplitRecords"] = 40;

$tdataresearchperiod[".geocodingEnabled"] = false;










$tdataresearchperiod[".pageSize"] = 20;

$tdataresearchperiod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchperiod[".strOrderBy"] = $tstrOrderBy;

$tdataresearchperiod[".orderindexes"] = array();


$tdataresearchperiod[".sqlHead"] = "SELECT id,  	researchProjectID,  	researchOperatingPeriodNo,  	researchOperatingPeriodEndDate,  	researchOperatingPeriodDisburse,  	researchOperatingPeriodDisbursePercent,  	entryUserName,  	entryTime";
$tdataresearchperiod[".sqlFrom"] = "FROM researchOperatingPeriod";
$tdataresearchperiod[".sqlWhereExpr"] = "";
$tdataresearchperiod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchperiod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchperiod[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchperiod[".highlightSearchResults"] = true;

$tableKeysresearchperiod = array();
$tableKeysresearchperiod[] = "id";
$tdataresearchperiod[".Keys"] = $tableKeysresearchperiod;


$tdataresearchperiod[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","id");
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


	$tdataresearchperiod["id"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "id";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","researchProjectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchProjectID";

		$fdata["sourceSingle"] = "researchProjectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectID";

	
	
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


	$tdataresearchperiod["researchProjectID"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "researchProjectID";
//	researchOperatingPeriodNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchOperatingPeriodNo";
	$fdata["GoodName"] = "researchOperatingPeriodNo";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","researchOperatingPeriodNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodNo";

		$fdata["sourceSingle"] = "researchOperatingPeriodNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchOperatingPeriodNo";

	
	
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


	$tdataresearchperiod["researchOperatingPeriodNo"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "researchOperatingPeriodNo";
//	researchOperatingPeriodEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchOperatingPeriodEndDate";
	$fdata["GoodName"] = "researchOperatingPeriodEndDate";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","researchOperatingPeriodEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodEndDate";

		$fdata["sourceSingle"] = "researchOperatingPeriodEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchOperatingPeriodEndDate";

	
	
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


	$tdataresearchperiod["researchOperatingPeriodEndDate"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "researchOperatingPeriodEndDate";
//	researchOperatingPeriodDisburse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchOperatingPeriodDisburse";
	$fdata["GoodName"] = "researchOperatingPeriodDisburse";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","researchOperatingPeriodDisburse");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodDisburse";

		$fdata["sourceSingle"] = "researchOperatingPeriodDisburse";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchOperatingPeriodDisburse";

	
	
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


	$tdataresearchperiod["researchOperatingPeriodDisburse"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "researchOperatingPeriodDisburse";
//	researchOperatingPeriodDisbursePercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["GoodName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","researchOperatingPeriodDisbursePercent");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodDisbursePercent";

		$fdata["sourceSingle"] = "researchOperatingPeriodDisbursePercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchOperatingPeriodDisbursePercent";

	
	
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


	$tdataresearchperiod["researchOperatingPeriodDisbursePercent"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "researchOperatingPeriodDisbursePercent";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","entryUserName");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataresearchperiod["entryUserName"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchPeriod","entryTime");
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdataresearchperiod["entryTime"] = $fdata;
		$tdataresearchperiod[".searchableFields"][] = "entryTime";


$tables_data["researchPeriod"]=&$tdataresearchperiod;
$field_labels["researchPeriod"] = &$fieldLabelsresearchperiod;
$fieldToolTips["researchPeriod"] = &$fieldToolTipsresearchperiod;
$placeHolders["researchPeriod"] = &$placeHoldersresearchperiod;
$page_titles["researchPeriod"] = &$pageTitlesresearchperiod;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchPeriod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchPeriod"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchPeriod"][0] = $masterParams;
				$masterTablesData["researchPeriod"][0]["masterKeys"] = array();
	$masterTablesData["researchPeriod"][0]["masterKeys"][]="id";
				$masterTablesData["researchPeriod"][0]["detailKeys"] = array();
	$masterTablesData["researchPeriod"][0]["detailKeys"][]="researchProjectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchperiod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchProjectID,  	researchOperatingPeriodNo,  	researchOperatingPeriodEndDate,  	researchOperatingPeriodDisburse,  	researchOperatingPeriodDisbursePercent,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchOperatingPeriod";
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
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchPeriod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto8["m_sql"] = "researchProjectID";
$proto8["m_srcTableName"] = "researchPeriod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodNo",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto10["m_sql"] = "researchOperatingPeriodNo";
$proto10["m_srcTableName"] = "researchPeriod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodEndDate",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto12["m_sql"] = "researchOperatingPeriodEndDate";
$proto12["m_srcTableName"] = "researchPeriod";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisburse",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto14["m_sql"] = "researchOperatingPeriodDisburse";
$proto14["m_srcTableName"] = "researchPeriod";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisbursePercent",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto16["m_sql"] = "researchOperatingPeriodDisbursePercent";
$proto16["m_srcTableName"] = "researchPeriod";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "researchPeriod";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchPeriod"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "researchPeriod";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "researchOperatingPeriod";
$proto23["m_srcTableName"] = "researchPeriod";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "researchProjectID";
$proto23["m_columns"][] = "researchOperatingPeriodNo";
$proto23["m_columns"][] = "researchOperatingPeriodEndDate";
$proto23["m_columns"][] = "researchOperatingPeriodDisburse";
$proto23["m_columns"][] = "researchOperatingPeriodDisbursePercent";
$proto23["m_columns"][] = "entryUserName";
$proto23["m_columns"][] = "entryTime";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "researchOperatingPeriod";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "researchPeriod";
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
$proto0["m_srcTableName"]="researchPeriod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchperiod = createSqlQuery_researchperiod();


	
				;

								

$tdataresearchperiod[".sqlquery"] = $queryData_researchperiod;



include_once(getabspath("include/researchperiod_events.php"));
$tableEvents["researchPeriod"] = new eventclass_researchperiod;
$tdataresearchperiod[".hasEvents"] = true;

?>