<?php
$tdataresearchoperatingperiod = array();
$tdataresearchoperatingperiod[".searchableFields"] = array();
$tdataresearchoperatingperiod[".ShortName"] = "researchoperatingperiod";
$tdataresearchoperatingperiod[".OwnerID"] = "";
$tdataresearchoperatingperiod[".OriginalTable"] = "researchOperatingPeriod";


$tdataresearchoperatingperiod[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchoperatingperiod[".originalPagesByType"] = $tdataresearchoperatingperiod[".pagesByType"];
$tdataresearchoperatingperiod[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchoperatingperiod[".originalPages"] = $tdataresearchoperatingperiod[".pages"];
$tdataresearchoperatingperiod[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchoperatingperiod[".originalDefaultPages"] = $tdataresearchoperatingperiod[".defaultPages"];

//	field labels
$fieldLabelsresearchoperatingperiod = array();
$fieldToolTipsresearchoperatingperiod = array();
$pageTitlesresearchoperatingperiod = array();
$placeHoldersresearchoperatingperiod = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchoperatingperiod["English"] = array();
	$fieldToolTipsresearchoperatingperiod["English"] = array();
	$placeHoldersresearchoperatingperiod["English"] = array();
	$pageTitlesresearchoperatingperiod["English"] = array();
	$fieldLabelsresearchoperatingperiod["English"]["id"] = "Id";
	$fieldToolTipsresearchoperatingperiod["English"]["id"] = "";
	$placeHoldersresearchoperatingperiod["English"]["id"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchoperatingperiod["English"]["researchProjectID"] = "";
	$placeHoldersresearchoperatingperiod["English"]["researchProjectID"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["researchOperatingPeriodNo"] = "Research Operating Period No";
	$fieldToolTipsresearchoperatingperiod["English"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchoperatingperiod["English"]["researchOperatingPeriodNo"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["researchOperatingPeriodEndDate"] = "Research Operating Period End Date";
	$fieldToolTipsresearchoperatingperiod["English"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchoperatingperiod["English"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["researchOperatingPeriodDisburse"] = "Research Operating Period Disburse";
	$fieldToolTipsresearchoperatingperiod["English"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchoperatingperiod["English"]["researchOperatingPeriodDisburse"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["researchOperatingPeriodDisbursePercent"] = "Research Operating Period Disburse Percent";
	$fieldToolTipsresearchoperatingperiod["English"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchoperatingperiod["English"]["researchOperatingPeriodDisbursePercent"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchoperatingperiod["English"]["entryUserName"] = "";
	$placeHoldersresearchoperatingperiod["English"]["entryUserName"] = "";
	$fieldLabelsresearchoperatingperiod["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchoperatingperiod["English"]["entryTime"] = "";
	$placeHoldersresearchoperatingperiod["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchoperatingperiod["English"]))
		$tdataresearchoperatingperiod[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchoperatingperiod["Thai"] = array();
	$fieldToolTipsresearchoperatingperiod["Thai"] = array();
	$placeHoldersresearchoperatingperiod["Thai"] = array();
	$pageTitlesresearchoperatingperiod["Thai"] = array();
	$fieldLabelsresearchoperatingperiod["Thai"]["id"] = "ID";
	$fieldToolTipsresearchoperatingperiod["Thai"]["id"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["id"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["researchOperatingPeriodNo"] = "งวดที่";
	$fieldToolTipsresearchoperatingperiod["Thai"]["researchOperatingPeriodNo"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["researchOperatingPeriodNo"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["researchOperatingPeriodEndDate"] = "วันสิ้นสุดงวด";
	$fieldToolTipsresearchoperatingperiod["Thai"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["researchOperatingPeriodDisburse"] = "ยอดเบิกจ่าย";
	$fieldToolTipsresearchoperatingperiod["Thai"]["researchOperatingPeriodDisburse"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["researchOperatingPeriodDisburse"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "ร้อยละเบิกจ่าย";
	$fieldToolTipsresearchoperatingperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["researchOperatingPeriodDisbursePercent"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchoperatingperiod["Thai"]["entryUserName"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchoperatingperiod["Thai"]["entryTime"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["entryTime"] = "";
	$fieldLabelsresearchoperatingperiod["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchoperatingperiod["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchoperatingperiod["Thai"]["researchProjectID"] = "";
	if (count($fieldToolTipsresearchoperatingperiod["Thai"]))
		$tdataresearchoperatingperiod[".isUseToolTips"] = true;
}


	$tdataresearchoperatingperiod[".NCSearch"] = true;



$tdataresearchoperatingperiod[".shortTableName"] = "researchoperatingperiod";
$tdataresearchoperatingperiod[".nSecOptions"] = 0;

$tdataresearchoperatingperiod[".mainTableOwnerID"] = "";
$tdataresearchoperatingperiod[".entityType"] = 0;
$tdataresearchoperatingperiod[".connId"] = "mc_at_192_168_1_111";


$tdataresearchoperatingperiod[".strOriginalTableName"] = "researchOperatingPeriod";

	



$tdataresearchoperatingperiod[".showAddInPopup"] = false;

$tdataresearchoperatingperiod[".showEditInPopup"] = false;

$tdataresearchoperatingperiod[".showViewInPopup"] = false;

$tdataresearchoperatingperiod[".listAjax"] = false;
//	temporary
//$tdataresearchoperatingperiod[".listAjax"] = false;

	$tdataresearchoperatingperiod[".audit"] = false;

	$tdataresearchoperatingperiod[".locking"] = false;


$pages = $tdataresearchoperatingperiod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchoperatingperiod[".edit"] = true;
	$tdataresearchoperatingperiod[".afterEditAction"] = 1;
	$tdataresearchoperatingperiod[".closePopupAfterEdit"] = 1;
	$tdataresearchoperatingperiod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchoperatingperiod[".add"] = true;
$tdataresearchoperatingperiod[".afterAddAction"] = 1;
$tdataresearchoperatingperiod[".closePopupAfterAdd"] = 1;
$tdataresearchoperatingperiod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchoperatingperiod[".list"] = true;
}



$tdataresearchoperatingperiod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchoperatingperiod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchoperatingperiod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchoperatingperiod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchoperatingperiod[".printFriendly"] = true;
}



$tdataresearchoperatingperiod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchoperatingperiod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchoperatingperiod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchoperatingperiod[".isUseAjaxSuggest"] = true;

$tdataresearchoperatingperiod[".rowHighlite"] = true;





$tdataresearchoperatingperiod[".ajaxCodeSnippetAdded"] = false;

$tdataresearchoperatingperiod[".buttonsAdded"] = false;

$tdataresearchoperatingperiod[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchoperatingperiod[".isUseTimeForSearch"] = false;


$tdataresearchoperatingperiod[".badgeColor"] = "2f4f4f";


$tdataresearchoperatingperiod[".allSearchFields"] = array();
$tdataresearchoperatingperiod[".filterFields"] = array();
$tdataresearchoperatingperiod[".requiredSearchFields"] = array();

$tdataresearchoperatingperiod[".googleLikeFields"] = array();
$tdataresearchoperatingperiod[".googleLikeFields"][] = "id";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "researchProjectID";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "researchOperatingPeriodNo";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "researchOperatingPeriodEndDate";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "researchOperatingPeriodDisburse";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "researchOperatingPeriodDisbursePercent";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "entryUserName";
$tdataresearchoperatingperiod[".googleLikeFields"][] = "entryTime";



$tdataresearchoperatingperiod[".tableType"] = "list";

$tdataresearchoperatingperiod[".printerPageOrientation"] = 0;
$tdataresearchoperatingperiod[".nPrinterPageScale"] = 100;

$tdataresearchoperatingperiod[".nPrinterSplitRecords"] = 40;

$tdataresearchoperatingperiod[".geocodingEnabled"] = false;










$tdataresearchoperatingperiod[".pageSize"] = 20;

$tdataresearchoperatingperiod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchoperatingperiod[".strOrderBy"] = $tstrOrderBy;

$tdataresearchoperatingperiod[".orderindexes"] = array();


$tdataresearchoperatingperiod[".sqlHead"] = "SELECT id,  	researchProjectID,  	researchOperatingPeriodNo,  	researchOperatingPeriodEndDate,  	researchOperatingPeriodDisburse,  	researchOperatingPeriodDisbursePercent,  	entryUserName,  	entryTime";
$tdataresearchoperatingperiod[".sqlFrom"] = "FROM researchOperatingPeriod";
$tdataresearchoperatingperiod[".sqlWhereExpr"] = "";
$tdataresearchoperatingperiod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchoperatingperiod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchoperatingperiod[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchoperatingperiod[".highlightSearchResults"] = true;

$tableKeysresearchoperatingperiod = array();
$tableKeysresearchoperatingperiod[] = "id";
$tdataresearchoperatingperiod[".Keys"] = $tableKeysresearchoperatingperiod;


$tdataresearchoperatingperiod[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","id");
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


	$tdataresearchoperatingperiod["id"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "id";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","researchProjectID");
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


	$tdataresearchoperatingperiod["researchProjectID"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "researchProjectID";
//	researchOperatingPeriodNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchOperatingPeriodNo";
	$fdata["GoodName"] = "researchOperatingPeriodNo";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","researchOperatingPeriodNo");
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


	$tdataresearchoperatingperiod["researchOperatingPeriodNo"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "researchOperatingPeriodNo";
//	researchOperatingPeriodEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchOperatingPeriodEndDate";
	$fdata["GoodName"] = "researchOperatingPeriodEndDate";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","researchOperatingPeriodEndDate");
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


	$tdataresearchoperatingperiod["researchOperatingPeriodEndDate"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "researchOperatingPeriodEndDate";
//	researchOperatingPeriodDisburse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchOperatingPeriodDisburse";
	$fdata["GoodName"] = "researchOperatingPeriodDisburse";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","researchOperatingPeriodDisburse");
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


	$tdataresearchoperatingperiod["researchOperatingPeriodDisburse"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "researchOperatingPeriodDisburse";
//	researchOperatingPeriodDisbursePercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["GoodName"] = "researchOperatingPeriodDisbursePercent";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","researchOperatingPeriodDisbursePercent");
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


	$tdataresearchoperatingperiod["researchOperatingPeriodDisbursePercent"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "researchOperatingPeriodDisbursePercent";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","entryUserName");
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


	$tdataresearchoperatingperiod["entryUserName"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchOperatingPeriod";
	$fdata["Label"] = GetFieldLabel("researchOperatingPeriod","entryTime");
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


	$tdataresearchoperatingperiod["entryTime"] = $fdata;
		$tdataresearchoperatingperiod[".searchableFields"][] = "entryTime";


$tables_data["researchOperatingPeriod"]=&$tdataresearchoperatingperiod;
$field_labels["researchOperatingPeriod"] = &$fieldLabelsresearchoperatingperiod;
$fieldToolTips["researchOperatingPeriod"] = &$fieldToolTipsresearchoperatingperiod;
$placeHolders["researchOperatingPeriod"] = &$placeHoldersresearchoperatingperiod;
$page_titles["researchOperatingPeriod"] = &$pageTitlesresearchoperatingperiod;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchOperatingPeriod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchOperatingPeriod"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchScholarshipProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchscholarshipproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchOperatingPeriod"][0] = $masterParams;
				$masterTablesData["researchOperatingPeriod"][0]["masterKeys"] = array();
	$masterTablesData["researchOperatingPeriod"][0]["masterKeys"][]="id";
				$masterTablesData["researchOperatingPeriod"][0]["detailKeys"] = array();
	$masterTablesData["researchOperatingPeriod"][0]["detailKeys"][]="researchProjectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchoperatingperiod()
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
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchOperatingPeriod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto8["m_sql"] = "researchProjectID";
$proto8["m_srcTableName"] = "researchOperatingPeriod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodNo",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto10["m_sql"] = "researchOperatingPeriodNo";
$proto10["m_srcTableName"] = "researchOperatingPeriod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodEndDate",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto12["m_sql"] = "researchOperatingPeriodEndDate";
$proto12["m_srcTableName"] = "researchOperatingPeriod";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisburse",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto14["m_sql"] = "researchOperatingPeriodDisburse";
$proto14["m_srcTableName"] = "researchOperatingPeriod";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodDisbursePercent",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto16["m_sql"] = "researchOperatingPeriodDisbursePercent";
$proto16["m_srcTableName"] = "researchOperatingPeriod";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "researchOperatingPeriod";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchOperatingPeriod",
	"m_srcTableName" => "researchOperatingPeriod"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "researchOperatingPeriod";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "researchOperatingPeriod";
$proto23["m_srcTableName"] = "researchOperatingPeriod";
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
$proto22["m_srcTableName"] = "researchOperatingPeriod";
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
$proto0["m_srcTableName"]="researchOperatingPeriod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchoperatingperiod = createSqlQuery_researchoperatingperiod();


	
				;

								

$tdataresearchoperatingperiod[".sqlquery"] = $queryData_researchoperatingperiod;



$tableEvents["researchOperatingPeriod"] = new eventsBase;
$tdataresearchoperatingperiod[".hasEvents"] = false;

?>