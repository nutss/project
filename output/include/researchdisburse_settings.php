<?php
$tdataresearchdisburse = array();
$tdataresearchdisburse[".searchableFields"] = array();
$tdataresearchdisburse[".ShortName"] = "researchdisburse";
$tdataresearchdisburse[".OwnerID"] = "";
$tdataresearchdisburse[".OriginalTable"] = "researchOperatingPeriod";


$tdataresearchdisburse[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchdisburse[".originalPagesByType"] = $tdataresearchdisburse[".pagesByType"];
$tdataresearchdisburse[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchdisburse[".originalPages"] = $tdataresearchdisburse[".pages"];
$tdataresearchdisburse[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchdisburse[".originalDefaultPages"] = $tdataresearchdisburse[".defaultPages"];

//	field labels
$fieldLabelsresearchdisburse = array();
$fieldToolTipsresearchdisburse = array();
$pageTitlesresearchdisburse = array();
$placeHoldersresearchdisburse = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchdisburse["English"] = array();
	$fieldToolTipsresearchdisburse["English"] = array();
	$placeHoldersresearchdisburse["English"] = array();
	$pageTitlesresearchdisburse["English"] = array();
	$fieldLabelsresearchdisburse["English"]["id"] = "ID";
	$fieldToolTipsresearchdisburse["English"]["id"] = "";
	$placeHoldersresearchdisburse["English"]["id"] = "";
	$fieldLabelsresearchdisburse["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchdisburse["English"]["researchProjectID"] = "";
	$placeHoldersresearchdisburse["English"]["researchProjectID"] = "";
	$fieldLabelsresearchdisburse["English"]["researchOperatingPeriodNo"] = "Research Operating Period No";
	$fieldToolTipsresearchdisburse["English"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchdisburse["English"]["researchOperatingPeriodNo"] = "";
	$fieldLabelsresearchdisburse["English"]["researchOperatingPeriodEndDate"] = "Research Operating Period End Date";
	$fieldToolTipsresearchdisburse["English"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchdisburse["English"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchdisburse["English"]["researchOperatingPeriodDisburse"] = "Research Operating Period Disburse";
	$fieldToolTipsresearchdisburse["English"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchdisburse["English"]["researchOperatingPeriodDisburse"] = "";
	$fieldLabelsresearchdisburse["English"]["researchOperatingPeriodDisbursePercent"] = "Research Operating Period Disburse Percent";
	$fieldToolTipsresearchdisburse["English"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchdisburse["English"]["researchOperatingPeriodDisbursePercent"] = "";
	$fieldLabelsresearchdisburse["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchdisburse["English"]["entryUserName"] = "";
	$placeHoldersresearchdisburse["English"]["entryUserName"] = "";
	$fieldLabelsresearchdisburse["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchdisburse["English"]["entryTime"] = "";
	$placeHoldersresearchdisburse["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchdisburse["English"]))
		$tdataresearchdisburse[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchdisburse["Thai"] = array();
	$fieldToolTipsresearchdisburse["Thai"] = array();
	$placeHoldersresearchdisburse["Thai"] = array();
	$pageTitlesresearchdisburse["Thai"] = array();
	$fieldLabelsresearchdisburse["Thai"]["id"] = "ID";
	$fieldToolTipsresearchdisburse["Thai"]["id"] = "";
	$placeHoldersresearchdisburse["Thai"]["id"] = "";
	$fieldLabelsresearchdisburse["Thai"]["researchOperatingPeriodNo"] = "งวดที่";
	$fieldToolTipsresearchdisburse["Thai"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchdisburse["Thai"]["researchOperatingPeriodNo"] = "";
	$fieldLabelsresearchdisburse["Thai"]["researchOperatingPeriodEndDate"] = "วันสิ้นสุดงวด";
	$fieldToolTipsresearchdisburse["Thai"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchdisburse["Thai"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchdisburse["Thai"]["researchOperatingPeriodDisburse"] = "ยอดเบิกจ่าย";
	$fieldToolTipsresearchdisburse["Thai"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchdisburse["Thai"]["researchOperatingPeriodDisburse"] = "";
	$fieldLabelsresearchdisburse["Thai"]["researchOperatingPeriodDisbursePercent"] = "ร้อยละเบิกจ่าย";
	$fieldToolTipsresearchdisburse["Thai"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchdisburse["Thai"]["researchOperatingPeriodDisbursePercent"] = "";
	$fieldLabelsresearchdisburse["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchdisburse["Thai"]["entryUserName"] = "";
	$placeHoldersresearchdisburse["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchdisburse["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchdisburse["Thai"]["entryTime"] = "";
	$placeHoldersresearchdisburse["Thai"]["entryTime"] = "";
	$fieldLabelsresearchdisburse["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchdisburse["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchdisburse["Thai"]["researchProjectID"] = "";
	if (count($fieldToolTipsresearchdisburse["Thai"]))
		$tdataresearchdisburse[".isUseToolTips"] = true;
}


	$tdataresearchdisburse[".NCSearch"] = true;



$tdataresearchdisburse[".shortTableName"] = "researchdisburse";
$tdataresearchdisburse[".nSecOptions"] = 0;

$tdataresearchdisburse[".mainTableOwnerID"] = "";
$tdataresearchdisburse[".entityType"] = 1;
$tdataresearchdisburse[".connId"] = "mc_at_192_168_1_111";


$tdataresearchdisburse[".strOriginalTableName"] = "researchOperatingPeriod";

	



$tdataresearchdisburse[".showAddInPopup"] = false;

$tdataresearchdisburse[".showEditInPopup"] = false;

$tdataresearchdisburse[".showViewInPopup"] = false;

$tdataresearchdisburse[".listAjax"] = false;
//	temporary
//$tdataresearchdisburse[".listAjax"] = false;

	$tdataresearchdisburse[".audit"] = false;

	$tdataresearchdisburse[".locking"] = false;


$pages = $tdataresearchdisburse[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchdisburse[".edit"] = true;
	$tdataresearchdisburse[".afterEditAction"] = 1;
	$tdataresearchdisburse[".closePopupAfterEdit"] = 1;
	$tdataresearchdisburse[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchdisburse[".add"] = true;
$tdataresearchdisburse[".afterAddAction"] = 1;
$tdataresearchdisburse[".closePopupAfterAdd"] = 1;
$tdataresearchdisburse[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchdisburse[".list"] = true;
}



$tdataresearchdisburse[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchdisburse[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchdisburse[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchdisburse[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchdisburse[".printFriendly"] = true;
}



$tdataresearchdisburse[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchdisburse[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchdisburse[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchdisburse[".isUseAjaxSuggest"] = true;

$tdataresearchdisburse[".rowHighlite"] = true;





$tdataresearchdisburse[".ajaxCodeSnippetAdded"] = false;

$tdataresearchdisburse[".buttonsAdded"] = false;

$tdataresearchdisburse[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchdisburse[".isUseTimeForSearch"] = false;


$tdataresearchdisburse[".badgeColor"] = "8fbc8b";


$tdataresearchdisburse[".allSearchFields"] = array();
$tdataresearchdisburse[".filterFields"] = array();
$tdataresearchdisburse[".requiredSearchFields"] = array();

$tdataresearchdisburse[".googleLikeFields"] = array();
$tdataresearchdisburse[".googleLikeFields"][] = "id";
$tdataresearchdisburse[".googleLikeFields"][] = "researchProjectID";
$tdataresearchdisburse[".googleLikeFields"][] = "researchOperatingPeriodNo";
$tdataresearchdisburse[".googleLikeFields"][] = "researchOperatingPeriodEndDate";
$tdataresearchdisburse[".googleLikeFields"][] = "researchOperatingPeriodDisburse";
$tdataresearchdisburse[".googleLikeFields"][] = "researchOperatingPeriodDisbursePercent";
$tdataresearchdisburse[".googleLikeFields"][] = "entryUserName";
$tdataresearchdisburse[".googleLikeFields"][] = "entryTime";



$tdataresearchdisburse[".tableType"] = "list";

$tdataresearchdisburse[".printerPageOrientation"] = 0;
$tdataresearchdisburse[".nPrinterPageScale"] = 100;

$tdataresearchdisburse[".nPrinterSplitRecords"] = 40;

$tdataresearchdisburse[".geocodingEnabled"] = false;










$tdataresearchdisburse[".pageSize"] = 20;

$tdataresearchdisburse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchdisburse[".strOrderBy"] = $tstrOrderBy;

$tdataresearchdisburse[".orderindexes"] = array();


$tdataresearchdisburse[".sqlHead"] = "SELECT id,  	researchProjectID,  	researchOperatingPeriodNo,  	researchOperatingPeriodEndDate,  	researchOperatingPeriodDisburse,  	researchOperatingPeriodDisbursePercent,  	entryUserName,  	entryTime";
$tdataresearchdisburse[".sqlFrom"] = "FROM researchOperatingPeriod";
$tdataresearchdisburse[".sqlWhereExpr"] = "";
$tdataresearchdisburse[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchdisburse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchdisburse[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchdisburse[".highlightSearchResults"] = true;

$tableKeysresearchdisburse = array();
$tableKeysresearchdisburse[] = "id";
$tdataresearchdisburse[".Keys"] = $tableKeysresearchdisburse;


$tdataresearchdisburse[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","id");
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


	$tdataresearchdisburse["id"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "id";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","researchProjectID");
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


	$tdataresearchdisburse["researchProjectID"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "researchProjectID";
//	researchOperatingPeriodNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchOperatingPeriodNo";
	$fdata["GoodName"] = "researchOperatingPeriodNo";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","researchOperatingPeriodNo");
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


	$tdataresearchdisburse["researchOperatingPeriodNo"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "researchOperatingPeriodNo";
//	researchOperatingPeriodEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchOperatingPeriodEndDate";
	$fdata["GoodName"] = "researchOperatingPeriodEndDate";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","researchOperatingPeriodEndDate");
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


	$tdataresearchdisburse["researchOperatingPeriodEndDate"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "researchOperatingPeriodEndDate";
//	researchOperatingPeriodDisburse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchOperatingPeriodDisburse";
	$fdata["GoodName"] = "researchOperatingPeriodDisburse";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","researchOperatingPeriodDisburse");
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


	$tdataresearchdisburse["researchOperatingPeriodDisburse"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "researchOperatingPeriodDisburse";
//	researchOperatingPeriodDisbursePercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["GoodName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","researchOperatingPeriodDisbursePercent");
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


	$tdataresearchdisburse["researchOperatingPeriodDisbursePercent"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "researchOperatingPeriodDisbursePercent";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","entryUserName");
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


	$tdataresearchdisburse["entryUserName"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchDisburse","entryTime");
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


	$tdataresearchdisburse["entryTime"] = $fdata;
		$tdataresearchdisburse[".searchableFields"][] = "entryTime";


$tables_data["researchDisburse"]=&$tdataresearchdisburse;
$field_labels["researchDisburse"] = &$fieldLabelsresearchdisburse;
$fieldToolTips["researchDisburse"] = &$fieldToolTipsresearchdisburse;
$placeHolders["researchDisburse"] = &$placeHoldersresearchdisburse;
$page_titles["researchDisburse"] = &$pageTitlesresearchdisburse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchDisburse"] = array();
//	researchDisburseConsider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchDisburseConsider";
		$detailsParam["dOriginalTable"] = "researchDisburseConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchdisburseconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchDisburseConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchDisburse"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchDisburse"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchDisburse"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchDisburse"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchDisburse"][$dIndex]["detailKeys"][]="researchDisburseID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchDisburse"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchDisburse"][0] = $masterParams;
				$masterTablesData["researchDisburse"][0]["masterKeys"] = array();
	$masterTablesData["researchDisburse"][0]["masterKeys"][]="id";
				$masterTablesData["researchDisburse"][0]["detailKeys"] = array();
	$masterTablesData["researchDisburse"][0]["detailKeys"][]="researchProjectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchdisburse()
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
	"m_srcTableName" => "researchDisburse"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchDisburse";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto8["m_sql"] = "researchProjectID";
$proto8["m_srcTableName"] = "researchDisburse";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodNo",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto10["m_sql"] = "researchOperatingPeriodNo";
$proto10["m_srcTableName"] = "researchDisburse";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodEndDate",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto12["m_sql"] = "researchOperatingPeriodEndDate";
$proto12["m_srcTableName"] = "researchDisburse";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisburse",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto14["m_sql"] = "researchOperatingPeriodDisburse";
$proto14["m_srcTableName"] = "researchDisburse";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisbursePercent",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto16["m_sql"] = "researchOperatingPeriodDisbursePercent";
$proto16["m_srcTableName"] = "researchDisburse";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "researchDisburse";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchDisburse"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "researchDisburse";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "researchOperatingPeriod";
$proto23["m_srcTableName"] = "researchDisburse";
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
$proto22["m_srcTableName"] = "researchDisburse";
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
$proto0["m_srcTableName"]="researchDisburse";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchdisburse = createSqlQuery_researchdisburse();


	
				;

								

$tdataresearchdisburse[".sqlquery"] = $queryData_researchdisburse;



include_once(getabspath("include/researchdisburse_events.php"));
$tableEvents["researchDisburse"] = new eventclass_researchdisburse;
$tdataresearchdisburse[".hasEvents"] = true;

?>