<?php
$tdatastatustype = array();
$tdatastatustype[".searchableFields"] = array();
$tdatastatustype[".ShortName"] = "statustype";
$tdatastatustype[".OwnerID"] = "";
$tdatastatustype[".OriginalTable"] = "statusType";


$tdatastatustype[".pagesByType"] = my_json_decode( "{}" );
$tdatastatustype[".originalPagesByType"] = $tdatastatustype[".pagesByType"];
$tdatastatustype[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatastatustype[".originalPages"] = $tdatastatustype[".pages"];
$tdatastatustype[".defaultPages"] = my_json_decode( "{}" );
$tdatastatustype[".originalDefaultPages"] = $tdatastatustype[".defaultPages"];

//	field labels
$fieldLabelsstatustype = array();
$fieldToolTipsstatustype = array();
$pageTitlesstatustype = array();
$placeHoldersstatustype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatustype["English"] = array();
	$fieldToolTipsstatustype["English"] = array();
	$placeHoldersstatustype["English"] = array();
	$pageTitlesstatustype["English"] = array();
	$fieldLabelsstatustype["English"]["id"] = "Id";
	$fieldToolTipsstatustype["English"]["id"] = "";
	$placeHoldersstatustype["English"]["id"] = "";
	$fieldLabelsstatustype["English"]["statusType"] = "Status Type";
	$fieldToolTipsstatustype["English"]["statusType"] = "";
	$placeHoldersstatustype["English"]["statusType"] = "";
	$fieldLabelsstatustype["English"]["statusName"] = "Status Name";
	$fieldToolTipsstatustype["English"]["statusName"] = "";
	$placeHoldersstatustype["English"]["statusName"] = "";
	$fieldLabelsstatustype["English"]["statusValue"] = "Status Value";
	$fieldToolTipsstatustype["English"]["statusValue"] = "";
	$placeHoldersstatustype["English"]["statusValue"] = "";
	$fieldLabelsstatustype["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsstatustype["English"]["entryUserName"] = "";
	$placeHoldersstatustype["English"]["entryUserName"] = "";
	$fieldLabelsstatustype["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsstatustype["English"]["entryTime"] = "";
	$placeHoldersstatustype["English"]["entryTime"] = "";
	if (count($fieldToolTipsstatustype["English"]))
		$tdatastatustype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsstatustype["Thai"] = array();
	$fieldToolTipsstatustype["Thai"] = array();
	$placeHoldersstatustype["Thai"] = array();
	$pageTitlesstatustype["Thai"] = array();
	$fieldLabelsstatustype["Thai"]["id"] = "Id";
	$fieldToolTipsstatustype["Thai"]["id"] = "";
	$placeHoldersstatustype["Thai"]["id"] = "";
	$fieldLabelsstatustype["Thai"]["statusType"] = "Status Type";
	$fieldToolTipsstatustype["Thai"]["statusType"] = "";
	$placeHoldersstatustype["Thai"]["statusType"] = "";
	$fieldLabelsstatustype["Thai"]["statusName"] = "Status Name";
	$fieldToolTipsstatustype["Thai"]["statusName"] = "";
	$placeHoldersstatustype["Thai"]["statusName"] = "";
	$fieldLabelsstatustype["Thai"]["statusValue"] = "Status Value";
	$fieldToolTipsstatustype["Thai"]["statusValue"] = "";
	$placeHoldersstatustype["Thai"]["statusValue"] = "";
	$fieldLabelsstatustype["Thai"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsstatustype["Thai"]["entryUserName"] = "";
	$placeHoldersstatustype["Thai"]["entryUserName"] = "";
	$fieldLabelsstatustype["Thai"]["entryTime"] = "Entry Time";
	$fieldToolTipsstatustype["Thai"]["entryTime"] = "";
	$placeHoldersstatustype["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsstatustype["Thai"]))
		$tdatastatustype[".isUseToolTips"] = true;
}


	$tdatastatustype[".NCSearch"] = true;



$tdatastatustype[".shortTableName"] = "statustype";
$tdatastatustype[".nSecOptions"] = 0;

$tdatastatustype[".mainTableOwnerID"] = "";
$tdatastatustype[".entityType"] = 0;
$tdatastatustype[".connId"] = "mc_at_192_168_1_111";


$tdatastatustype[".strOriginalTableName"] = "statusType";

	



$tdatastatustype[".showAddInPopup"] = false;

$tdatastatustype[".showEditInPopup"] = false;

$tdatastatustype[".showViewInPopup"] = false;

$tdatastatustype[".listAjax"] = false;
//	temporary
//$tdatastatustype[".listAjax"] = false;

	$tdatastatustype[".audit"] = false;

	$tdatastatustype[".locking"] = false;


$pages = $tdatastatustype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatustype[".edit"] = true;
	$tdatastatustype[".afterEditAction"] = 1;
	$tdatastatustype[".closePopupAfterEdit"] = 1;
	$tdatastatustype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastatustype[".add"] = true;
$tdatastatustype[".afterAddAction"] = 1;
$tdatastatustype[".closePopupAfterAdd"] = 1;
$tdatastatustype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatustype[".list"] = true;
}



$tdatastatustype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatustype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatustype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatustype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatustype[".printFriendly"] = true;
}



$tdatastatustype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatustype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatustype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatustype[".isUseAjaxSuggest"] = true;

$tdatastatustype[".rowHighlite"] = true;



						

$tdatastatustype[".ajaxCodeSnippetAdded"] = false;

$tdatastatustype[".buttonsAdded"] = false;

$tdatastatustype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatustype[".isUseTimeForSearch"] = false;


$tdatastatustype[".badgeColor"] = "BC8F8F";


$tdatastatustype[".allSearchFields"] = array();
$tdatastatustype[".filterFields"] = array();
$tdatastatustype[".requiredSearchFields"] = array();

$tdatastatustype[".googleLikeFields"] = array();
$tdatastatustype[".googleLikeFields"][] = "id";
$tdatastatustype[".googleLikeFields"][] = "statusType";
$tdatastatustype[".googleLikeFields"][] = "statusName";
$tdatastatustype[".googleLikeFields"][] = "statusValue";
$tdatastatustype[".googleLikeFields"][] = "entryUserName";
$tdatastatustype[".googleLikeFields"][] = "entryTime";



$tdatastatustype[".tableType"] = "list";

$tdatastatustype[".printerPageOrientation"] = 0;
$tdatastatustype[".nPrinterPageScale"] = 100;

$tdatastatustype[".nPrinterSplitRecords"] = 40;

$tdatastatustype[".geocodingEnabled"] = false;










$tdatastatustype[".pageSize"] = 20;

$tdatastatustype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatustype[".strOrderBy"] = $tstrOrderBy;

$tdatastatustype[".orderindexes"] = array();


$tdatastatustype[".sqlHead"] = "SELECT id,  	statusType,  	statusName,  	statusValue,  	entryUserName,  	entryTime";
$tdatastatustype[".sqlFrom"] = "FROM statusType";
$tdatastatustype[".sqlWhereExpr"] = "";
$tdatastatustype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatustype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatustype[".arrGroupsPerPage"] = $arrGPP;

$tdatastatustype[".highlightSearchResults"] = true;

$tableKeysstatustype = array();
$tableKeysstatustype[] = "id";
$tdatastatustype[".Keys"] = $tableKeysstatustype;


$tdatastatustype[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","id");
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


	$tdatastatustype["id"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "id";
//	statusType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "statusType";
	$fdata["GoodName"] = "statusType";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","statusType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statusType";

		$fdata["sourceSingle"] = "statusType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusType";

	
	
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


	$tdatastatustype["statusType"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "statusType";
//	statusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "statusName";
	$fdata["GoodName"] = "statusName";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","statusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statusName";

		$fdata["sourceSingle"] = "statusName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusName";

	
	
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


	$tdatastatustype["statusName"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "statusName";
//	statusValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "statusValue";
	$fdata["GoodName"] = "statusValue";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","statusValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statusValue";

		$fdata["sourceSingle"] = "statusValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusValue";

	
	
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


	$tdatastatustype["statusValue"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "statusValue";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","entryUserName");
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


	$tdatastatustype["entryUserName"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "statusType";
	$fdata["Label"] = GetFieldLabel("statusType","entryTime");
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


	$tdatastatustype["entryTime"] = $fdata;
		$tdatastatustype[".searchableFields"][] = "entryTime";


$tables_data["statusType"]=&$tdatastatustype;
$field_labels["statusType"] = &$fieldLabelsstatustype;
$fieldToolTips["statusType"] = &$fieldToolTipsstatustype;
$placeHolders["statusType"] = &$placeHoldersstatustype;
$page_titles["statusType"] = &$pageTitlesstatustype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["statusType"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["statusType"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_statustype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	statusType,  	statusName,  	statusValue,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM statusType";
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
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "statusType";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "statusType",
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto8["m_sql"] = "statusType";
$proto8["m_srcTableName"] = "statusType";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "statusName",
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto10["m_sql"] = "statusName";
$proto10["m_srcTableName"] = "statusType";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "statusValue",
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto12["m_sql"] = "statusValue";
$proto12["m_srcTableName"] = "statusType";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto14["m_sql"] = "entryUserName";
$proto14["m_srcTableName"] = "statusType";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "statusType",
	"m_srcTableName" => "statusType"
));

$proto16["m_sql"] = "entryTime";
$proto16["m_srcTableName"] = "statusType";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "statusType";
$proto19["m_srcTableName"] = "statusType";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "statusType";
$proto19["m_columns"][] = "statusName";
$proto19["m_columns"][] = "statusValue";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "statusType";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "statusType";
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
$proto0["m_srcTableName"]="statusType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_statustype = createSqlQuery_statustype();


	
				;

						

$tdatastatustype[".sqlquery"] = $queryData_statustype;



$tableEvents["statusType"] = new eventsBase;
$tdatastatustype[".hasEvents"] = false;

?>