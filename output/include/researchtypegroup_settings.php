<?php
$tdataresearchtypegroup = array();
$tdataresearchtypegroup[".searchableFields"] = array();
$tdataresearchtypegroup[".ShortName"] = "researchtypegroup";
$tdataresearchtypegroup[".OwnerID"] = "";
$tdataresearchtypegroup[".OriginalTable"] = "researchTypeGroup";


$tdataresearchtypegroup[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchtypegroup[".originalPagesByType"] = $tdataresearchtypegroup[".pagesByType"];
$tdataresearchtypegroup[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchtypegroup[".originalPages"] = $tdataresearchtypegroup[".pages"];
$tdataresearchtypegroup[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchtypegroup[".originalDefaultPages"] = $tdataresearchtypegroup[".defaultPages"];

//	field labels
$fieldLabelsresearchtypegroup = array();
$fieldToolTipsresearchtypegroup = array();
$pageTitlesresearchtypegroup = array();
$placeHoldersresearchtypegroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchtypegroup["English"] = array();
	$fieldToolTipsresearchtypegroup["English"] = array();
	$placeHoldersresearchtypegroup["English"] = array();
	$pageTitlesresearchtypegroup["English"] = array();
	$fieldLabelsresearchtypegroup["English"]["id"] = "Id";
	$fieldToolTipsresearchtypegroup["English"]["id"] = "";
	$placeHoldersresearchtypegroup["English"]["id"] = "";
	$fieldLabelsresearchtypegroup["English"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchtypegroup["English"]["researchTypeID"] = "";
	$placeHoldersresearchtypegroup["English"]["researchTypeID"] = "";
	$fieldLabelsresearchtypegroup["English"]["optionGroupNumber"] = "Option Group Number";
	$fieldToolTipsresearchtypegroup["English"]["optionGroupNumber"] = "";
	$placeHoldersresearchtypegroup["English"]["optionGroupNumber"] = "";
	$fieldLabelsresearchtypegroup["English"]["optionName"] = "Option Name";
	$fieldToolTipsresearchtypegroup["English"]["optionName"] = "";
	$placeHoldersresearchtypegroup["English"]["optionName"] = "";
	$fieldLabelsresearchtypegroup["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchtypegroup["English"]["entryUserName"] = "";
	$placeHoldersresearchtypegroup["English"]["entryUserName"] = "";
	$fieldLabelsresearchtypegroup["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchtypegroup["English"]["entryTime"] = "";
	$placeHoldersresearchtypegroup["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchtypegroup["English"]))
		$tdataresearchtypegroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchtypegroup["Thai"] = array();
	$fieldToolTipsresearchtypegroup["Thai"] = array();
	$placeHoldersresearchtypegroup["Thai"] = array();
	$pageTitlesresearchtypegroup["Thai"] = array();
	$fieldLabelsresearchtypegroup["Thai"]["id"] = "Id";
	$fieldToolTipsresearchtypegroup["Thai"]["id"] = "";
	$placeHoldersresearchtypegroup["Thai"]["id"] = "";
	$fieldLabelsresearchtypegroup["Thai"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchtypegroup["Thai"]["researchTypeID"] = "";
	$placeHoldersresearchtypegroup["Thai"]["researchTypeID"] = "";
	$fieldLabelsresearchtypegroup["Thai"]["optionGroupNumber"] = "รหัสกลุ่ม";
	$fieldToolTipsresearchtypegroup["Thai"]["optionGroupNumber"] = "";
	$placeHoldersresearchtypegroup["Thai"]["optionGroupNumber"] = "";
	$fieldLabelsresearchtypegroup["Thai"]["optionName"] = "ชื่อกลุ่ม";
	$fieldToolTipsresearchtypegroup["Thai"]["optionName"] = "";
	$placeHoldersresearchtypegroup["Thai"]["optionName"] = "";
	$fieldLabelsresearchtypegroup["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchtypegroup["Thai"]["entryUserName"] = "";
	$placeHoldersresearchtypegroup["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchtypegroup["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchtypegroup["Thai"]["entryTime"] = "";
	$placeHoldersresearchtypegroup["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchtypegroup["Thai"]))
		$tdataresearchtypegroup[".isUseToolTips"] = true;
}


	$tdataresearchtypegroup[".NCSearch"] = true;



$tdataresearchtypegroup[".shortTableName"] = "researchtypegroup";
$tdataresearchtypegroup[".nSecOptions"] = 0;

$tdataresearchtypegroup[".mainTableOwnerID"] = "";
$tdataresearchtypegroup[".entityType"] = 0;
$tdataresearchtypegroup[".connId"] = "mc_at_192_168_1_111";


$tdataresearchtypegroup[".strOriginalTableName"] = "researchTypeGroup";

	



$tdataresearchtypegroup[".showAddInPopup"] = false;

$tdataresearchtypegroup[".showEditInPopup"] = false;

$tdataresearchtypegroup[".showViewInPopup"] = false;

$tdataresearchtypegroup[".listAjax"] = false;
//	temporary
//$tdataresearchtypegroup[".listAjax"] = false;

	$tdataresearchtypegroup[".audit"] = false;

	$tdataresearchtypegroup[".locking"] = false;


$pages = $tdataresearchtypegroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchtypegroup[".edit"] = true;
	$tdataresearchtypegroup[".afterEditAction"] = 1;
	$tdataresearchtypegroup[".closePopupAfterEdit"] = 1;
	$tdataresearchtypegroup[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchtypegroup[".add"] = true;
$tdataresearchtypegroup[".afterAddAction"] = 1;
$tdataresearchtypegroup[".closePopupAfterAdd"] = 1;
$tdataresearchtypegroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchtypegroup[".list"] = true;
}



$tdataresearchtypegroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchtypegroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchtypegroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchtypegroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchtypegroup[".printFriendly"] = true;
}



$tdataresearchtypegroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchtypegroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchtypegroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchtypegroup[".isUseAjaxSuggest"] = true;

$tdataresearchtypegroup[".rowHighlite"] = true;



												

$tdataresearchtypegroup[".ajaxCodeSnippetAdded"] = false;

$tdataresearchtypegroup[".buttonsAdded"] = false;

$tdataresearchtypegroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchtypegroup[".isUseTimeForSearch"] = false;


$tdataresearchtypegroup[".badgeColor"] = "d2691e";


$tdataresearchtypegroup[".allSearchFields"] = array();
$tdataresearchtypegroup[".filterFields"] = array();
$tdataresearchtypegroup[".requiredSearchFields"] = array();

$tdataresearchtypegroup[".googleLikeFields"] = array();
$tdataresearchtypegroup[".googleLikeFields"][] = "id";
$tdataresearchtypegroup[".googleLikeFields"][] = "researchTypeID";
$tdataresearchtypegroup[".googleLikeFields"][] = "optionGroupNumber";
$tdataresearchtypegroup[".googleLikeFields"][] = "optionName";
$tdataresearchtypegroup[".googleLikeFields"][] = "entryUserName";
$tdataresearchtypegroup[".googleLikeFields"][] = "entryTime";



$tdataresearchtypegroup[".tableType"] = "list";

$tdataresearchtypegroup[".printerPageOrientation"] = 0;
$tdataresearchtypegroup[".nPrinterPageScale"] = 100;

$tdataresearchtypegroup[".nPrinterSplitRecords"] = 40;

$tdataresearchtypegroup[".geocodingEnabled"] = false;










$tdataresearchtypegroup[".pageSize"] = 20;

$tdataresearchtypegroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchtypegroup[".strOrderBy"] = $tstrOrderBy;

$tdataresearchtypegroup[".orderindexes"] = array();


$tdataresearchtypegroup[".sqlHead"] = "SELECT id,  	researchTypeID,  	optionGroupNumber,  	optionName,  	entryUserName,  	entryTime";
$tdataresearchtypegroup[".sqlFrom"] = "FROM researchTypeGroup";
$tdataresearchtypegroup[".sqlWhereExpr"] = "";
$tdataresearchtypegroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchtypegroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchtypegroup[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchtypegroup[".highlightSearchResults"] = true;

$tableKeysresearchtypegroup = array();
$tableKeysresearchtypegroup[] = "id";
$tdataresearchtypegroup[".Keys"] = $tableKeysresearchtypegroup;


$tdataresearchtypegroup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","id");
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


	$tdataresearchtypegroup["id"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "id";
//	researchTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchTypeID";
	$fdata["GoodName"] = "researchTypeID";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","researchTypeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchTypeID";

		$fdata["sourceSingle"] = "researchTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchTypeID";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataresearchtypegroup["researchTypeID"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "researchTypeID";
//	optionGroupNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "optionGroupNumber";
	$fdata["GoodName"] = "optionGroupNumber";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","optionGroupNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionGroupNumber";

		$fdata["sourceSingle"] = "optionGroupNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionGroupNumber";

	
	
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


	$tdataresearchtypegroup["optionGroupNumber"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "optionGroupNumber";
//	optionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "optionName";
	$fdata["GoodName"] = "optionName";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","optionName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionName";

		$fdata["sourceSingle"] = "optionName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionName";

	
	
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


	$tdataresearchtypegroup["optionName"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "optionName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","entryUserName");
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


	$tdataresearchtypegroup["entryUserName"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("researchTypeGroup","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
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


	$tdataresearchtypegroup["entryTime"] = $fdata;
		$tdataresearchtypegroup[".searchableFields"][] = "entryTime";


$tables_data["researchTypeGroup"]=&$tdataresearchtypegroup;
$field_labels["researchTypeGroup"] = &$fieldLabelsresearchtypegroup;
$fieldToolTips["researchTypeGroup"] = &$fieldToolTipsresearchtypegroup;
$placeHolders["researchTypeGroup"] = &$placeHoldersresearchtypegroup;
$page_titles["researchTypeGroup"] = &$pageTitlesresearchtypegroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchTypeGroup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchTypeGroup"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchType";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchType";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchtype";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchTypeGroup"][0] = $masterParams;
				$masterTablesData["researchTypeGroup"][0]["masterKeys"] = array();
	$masterTablesData["researchTypeGroup"][0]["masterKeys"][]="id";
				$masterTablesData["researchTypeGroup"][0]["detailKeys"] = array();
	$masterTablesData["researchTypeGroup"][0]["detailKeys"][]="researchTypeID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchtypegroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchTypeID,  	optionGroupNumber,  	optionName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchTypeGroup";
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
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchTypeGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto8["m_sql"] = "researchTypeID";
$proto8["m_srcTableName"] = "researchTypeGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupNumber",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto10["m_sql"] = "optionGroupNumber";
$proto10["m_srcTableName"] = "researchTypeGroup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "optionName",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto12["m_sql"] = "optionName";
$proto12["m_srcTableName"] = "researchTypeGroup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto14["m_sql"] = "entryUserName";
$proto14["m_srcTableName"] = "researchTypeGroup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "researchTypeGroup"
));

$proto16["m_sql"] = "entryTime";
$proto16["m_srcTableName"] = "researchTypeGroup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "researchTypeGroup";
$proto19["m_srcTableName"] = "researchTypeGroup";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "researchTypeID";
$proto19["m_columns"][] = "optionGroupNumber";
$proto19["m_columns"][] = "optionName";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "researchTypeGroup";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "researchTypeGroup";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchTypeGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchtypegroup = createSqlQuery_researchtypegroup();


	
				;

						

$tdataresearchtypegroup[".sqlquery"] = $queryData_researchtypegroup;



$tableEvents["researchTypeGroup"] = new eventsBase;
$tdataresearchtypegroup[".hasEvents"] = false;

?>