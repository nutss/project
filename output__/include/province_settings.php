<?php
$tdataprovince = array();
$tdataprovince[".searchableFields"] = array();
$tdataprovince[".ShortName"] = "province";
$tdataprovince[".OwnerID"] = "";
$tdataprovince[".OriginalTable"] = "province";


$tdataprovince[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprovince[".originalPagesByType"] = $tdataprovince[".pagesByType"];
$tdataprovince[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprovince[".originalPages"] = $tdataprovince[".pages"];
$tdataprovince[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprovince[".originalDefaultPages"] = $tdataprovince[".defaultPages"];

//	field labels
$fieldLabelsprovince = array();
$fieldToolTipsprovince = array();
$pageTitlesprovince = array();
$placeHoldersprovince = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprovince["English"] = array();
	$fieldToolTipsprovince["English"] = array();
	$placeHoldersprovince["English"] = array();
	$pageTitlesprovince["English"] = array();
	$fieldLabelsprovince["English"]["id"] = "Id";
	$fieldToolTipsprovince["English"]["id"] = "";
	$placeHoldersprovince["English"]["id"] = "";
	$fieldLabelsprovince["English"]["name_th"] = "Name Th";
	$fieldToolTipsprovince["English"]["name_th"] = "";
	$placeHoldersprovince["English"]["name_th"] = "";
	$fieldLabelsprovince["English"]["name_en"] = "Name En";
	$fieldToolTipsprovince["English"]["name_en"] = "";
	$placeHoldersprovince["English"]["name_en"] = "";
	$fieldLabelsprovince["English"]["geography_id"] = "Geography Id";
	$fieldToolTipsprovince["English"]["geography_id"] = "";
	$placeHoldersprovince["English"]["geography_id"] = "";
	if (count($fieldToolTipsprovince["English"]))
		$tdataprovince[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprovince["Thai"] = array();
	$fieldToolTipsprovince["Thai"] = array();
	$placeHoldersprovince["Thai"] = array();
	$pageTitlesprovince["Thai"] = array();
	$fieldLabelsprovince["Thai"]["id"] = "Id";
	$fieldToolTipsprovince["Thai"]["id"] = "";
	$placeHoldersprovince["Thai"]["id"] = "";
	$fieldLabelsprovince["Thai"]["name_th"] = "Name Th";
	$fieldToolTipsprovince["Thai"]["name_th"] = "";
	$placeHoldersprovince["Thai"]["name_th"] = "";
	$fieldLabelsprovince["Thai"]["name_en"] = "Name En";
	$fieldToolTipsprovince["Thai"]["name_en"] = "";
	$placeHoldersprovince["Thai"]["name_en"] = "";
	$fieldLabelsprovince["Thai"]["geography_id"] = "Geography Id";
	$fieldToolTipsprovince["Thai"]["geography_id"] = "";
	$placeHoldersprovince["Thai"]["geography_id"] = "";
	if (count($fieldToolTipsprovince["Thai"]))
		$tdataprovince[".isUseToolTips"] = true;
}


	$tdataprovince[".NCSearch"] = true;



$tdataprovince[".shortTableName"] = "province";
$tdataprovince[".nSecOptions"] = 0;

$tdataprovince[".mainTableOwnerID"] = "";
$tdataprovince[".entityType"] = 7;
$tdataprovince[".connId"] = "rest";


$tdataprovince[".strOriginalTableName"] = "province";

	



$tdataprovince[".showAddInPopup"] = false;

$tdataprovince[".showEditInPopup"] = false;

$tdataprovince[".showViewInPopup"] = false;

$tdataprovince[".listAjax"] = false;
//	temporary
//$tdataprovince[".listAjax"] = false;

	$tdataprovince[".audit"] = false;

	$tdataprovince[".locking"] = false;


$pages = $tdataprovince[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprovince[".edit"] = true;
	$tdataprovince[".afterEditAction"] = 1;
	$tdataprovince[".closePopupAfterEdit"] = 1;
	$tdataprovince[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprovince[".add"] = true;
$tdataprovince[".afterAddAction"] = 1;
$tdataprovince[".closePopupAfterAdd"] = 1;
$tdataprovince[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprovince[".list"] = true;
}



$tdataprovince[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprovince[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprovince[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprovince[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprovince[".printFriendly"] = true;
}



$tdataprovince[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprovince[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprovince[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprovince[".isUseAjaxSuggest"] = false;

$tdataprovince[".rowHighlite"] = true;





$tdataprovince[".ajaxCodeSnippetAdded"] = false;

$tdataprovince[".buttonsAdded"] = false;

$tdataprovince[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprovince[".isUseTimeForSearch"] = false;


$tdataprovince[".badgeColor"] = "4682B4";


$tdataprovince[".allSearchFields"] = array();
$tdataprovince[".filterFields"] = array();
$tdataprovince[".requiredSearchFields"] = array();

$tdataprovince[".googleLikeFields"] = array();
$tdataprovince[".googleLikeFields"][] = "id";
$tdataprovince[".googleLikeFields"][] = "name_th";
$tdataprovince[".googleLikeFields"][] = "name_en";
$tdataprovince[".googleLikeFields"][] = "geography_id";




$tdataprovince[".printerPageOrientation"] = 0;
$tdataprovince[".nPrinterPageScale"] = 100;

$tdataprovince[".nPrinterSplitRecords"] = 40;

$tdataprovince[".geocodingEnabled"] = false;










$tdataprovince[".pageSize"] = 20;

$tdataprovince[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprovince[".strOrderBy"] = $tstrOrderBy;

$tdataprovince[".orderindexes"] = array();


$tdataprovince[".sqlHead"] = "";
$tdataprovince[".sqlFrom"] = "";
$tdataprovince[".sqlWhereExpr"] = "";
$tdataprovince[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprovince[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprovince[".arrGroupsPerPage"] = $arrGPP;

$tdataprovince[".highlightSearchResults"] = true;

$tableKeysprovince = array();
$tdataprovince[".Keys"] = $tableKeysprovince;


$tdataprovince[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("province","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/id";

	
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


	$tdataprovince["id"] = $fdata;
		$tdataprovince[".searchableFields"][] = "id";
//	name_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name_th";
	$fdata["GoodName"] = "name_th";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("province","name_th");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/name_th";

	
		$fdata["FullName"] = "name_th";

	
	
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


	$tdataprovince["name_th"] = $fdata;
		$tdataprovince[".searchableFields"][] = "name_th";
//	name_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name_en";
	$fdata["GoodName"] = "name_en";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("province","name_en");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/name_en";

	
		$fdata["FullName"] = "name_en";

	
	
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


	$tdataprovince["name_en"] = $fdata;
		$tdataprovince[".searchableFields"][] = "name_en";
//	geography_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "geography_id";
	$fdata["GoodName"] = "geography_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("province","geography_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/geography_id";

	
		$fdata["FullName"] = "geography_id";

	
	
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


	$tdataprovince["geography_id"] = $fdata;
		$tdataprovince[".searchableFields"][] = "geography_id";


$tables_data["province"]=&$tdataprovince;
$field_labels["province"] = &$fieldLabelsprovince;
$fieldToolTips["province"] = &$fieldToolTipsprovince;
$placeHolders["province"] = &$placeHoldersprovince;
$page_titles["province"] = &$pageTitlesprovince;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["province"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["province"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/province_ops.php" ) );



	
				;

				

$tdataprovince[".sqlquery"] = $queryData_province;



$tableEvents["province"] = new eventsBase;
$tdataprovince[".hasEvents"] = false;

?>