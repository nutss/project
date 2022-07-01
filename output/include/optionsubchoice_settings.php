<?php
$tdataoptionsubchoice = array();
$tdataoptionsubchoice[".searchableFields"] = array();
$tdataoptionsubchoice[".ShortName"] = "optionsubchoice";
$tdataoptionsubchoice[".OwnerID"] = "";
$tdataoptionsubchoice[".OriginalTable"] = "optionSubChoice";


$tdataoptionsubchoice[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsubchoice[".originalPagesByType"] = $tdataoptionsubchoice[".pagesByType"];
$tdataoptionsubchoice[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsubchoice[".originalPages"] = $tdataoptionsubchoice[".pages"];
$tdataoptionsubchoice[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsubchoice[".originalDefaultPages"] = $tdataoptionsubchoice[".defaultPages"];

//	field labels
$fieldLabelsoptionsubchoice = array();
$fieldToolTipsoptionsubchoice = array();
$pageTitlesoptionsubchoice = array();
$placeHoldersoptionsubchoice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsubchoice["English"] = array();
	$fieldToolTipsoptionsubchoice["English"] = array();
	$placeHoldersoptionsubchoice["English"] = array();
	$pageTitlesoptionsubchoice["English"] = array();
	$fieldLabelsoptionsubchoice["English"]["id"] = "Id";
	$fieldToolTipsoptionsubchoice["English"]["id"] = "";
	$placeHoldersoptionsubchoice["English"]["id"] = "";
	$fieldLabelsoptionsubchoice["English"]["optionSubID"] = "Option Sub ID";
	$fieldToolTipsoptionsubchoice["English"]["optionSubID"] = "";
	$placeHoldersoptionsubchoice["English"]["optionSubID"] = "";
	$fieldLabelsoptionsubchoice["English"]["optionSubName"] = "Option Sub Name";
	$fieldToolTipsoptionsubchoice["English"]["optionSubName"] = "";
	$placeHoldersoptionsubchoice["English"]["optionSubName"] = "";
	$fieldLabelsoptionsubchoice["English"]["optionSubValue"] = "Option Sub Value";
	$fieldToolTipsoptionsubchoice["English"]["optionSubValue"] = "";
	$placeHoldersoptionsubchoice["English"]["optionSubValue"] = "";
	$fieldLabelsoptionsubchoice["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsoptionsubchoice["English"]["entryUserName"] = "";
	$placeHoldersoptionsubchoice["English"]["entryUserName"] = "";
	$fieldLabelsoptionsubchoice["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsoptionsubchoice["English"]["entryTime"] = "";
	$placeHoldersoptionsubchoice["English"]["entryTime"] = "";
	if (count($fieldToolTipsoptionsubchoice["English"]))
		$tdataoptionsubchoice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsubchoice["Thai"] = array();
	$fieldToolTipsoptionsubchoice["Thai"] = array();
	$placeHoldersoptionsubchoice["Thai"] = array();
	$pageTitlesoptionsubchoice["Thai"] = array();
	$fieldLabelsoptionsubchoice["Thai"]["id"] = "Id";
	$fieldToolTipsoptionsubchoice["Thai"]["id"] = "";
	$placeHoldersoptionsubchoice["Thai"]["id"] = "";
	$fieldLabelsoptionsubchoice["Thai"]["optionSubID"] = "OPTION_SUB_ID";
	$fieldToolTipsoptionsubchoice["Thai"]["optionSubID"] = "";
	$placeHoldersoptionsubchoice["Thai"]["optionSubID"] = "";
	$fieldLabelsoptionsubchoice["Thai"]["optionSubName"] = "ชื่อตัวเลือกย่อย";
	$fieldToolTipsoptionsubchoice["Thai"]["optionSubName"] = "";
	$placeHoldersoptionsubchoice["Thai"]["optionSubName"] = "";
	$fieldLabelsoptionsubchoice["Thai"]["optionSubValue"] = "ค่าตัวเลือกย่อย";
	$fieldToolTipsoptionsubchoice["Thai"]["optionSubValue"] = "";
	$placeHoldersoptionsubchoice["Thai"]["optionSubValue"] = "";
	$fieldLabelsoptionsubchoice["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsoptionsubchoice["Thai"]["entryUserName"] = "";
	$placeHoldersoptionsubchoice["Thai"]["entryUserName"] = "";
	$fieldLabelsoptionsubchoice["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsoptionsubchoice["Thai"]["entryTime"] = "";
	$placeHoldersoptionsubchoice["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsoptionsubchoice["Thai"]))
		$tdataoptionsubchoice[".isUseToolTips"] = true;
}


	$tdataoptionsubchoice[".NCSearch"] = true;



$tdataoptionsubchoice[".shortTableName"] = "optionsubchoice";
$tdataoptionsubchoice[".nSecOptions"] = 0;

$tdataoptionsubchoice[".mainTableOwnerID"] = "";
$tdataoptionsubchoice[".entityType"] = 0;
$tdataoptionsubchoice[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsubchoice[".strOriginalTableName"] = "optionSubChoice";

	



$tdataoptionsubchoice[".showAddInPopup"] = false;

$tdataoptionsubchoice[".showEditInPopup"] = false;

$tdataoptionsubchoice[".showViewInPopup"] = false;

$tdataoptionsubchoice[".listAjax"] = false;
//	temporary
//$tdataoptionsubchoice[".listAjax"] = false;

	$tdataoptionsubchoice[".audit"] = false;

	$tdataoptionsubchoice[".locking"] = false;


$pages = $tdataoptionsubchoice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsubchoice[".edit"] = true;
	$tdataoptionsubchoice[".afterEditAction"] = 1;
	$tdataoptionsubchoice[".closePopupAfterEdit"] = 1;
	$tdataoptionsubchoice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsubchoice[".add"] = true;
$tdataoptionsubchoice[".afterAddAction"] = 1;
$tdataoptionsubchoice[".closePopupAfterAdd"] = 1;
$tdataoptionsubchoice[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsubchoice[".list"] = true;
}



$tdataoptionsubchoice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsubchoice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsubchoice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsubchoice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsubchoice[".printFriendly"] = true;
}



$tdataoptionsubchoice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsubchoice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsubchoice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsubchoice[".isUseAjaxSuggest"] = true;

$tdataoptionsubchoice[".rowHighlite"] = true;





$tdataoptionsubchoice[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsubchoice[".buttonsAdded"] = false;

$tdataoptionsubchoice[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsubchoice[".isUseTimeForSearch"] = false;


$tdataoptionsubchoice[".badgeColor"] = "cd853f";


$tdataoptionsubchoice[".allSearchFields"] = array();
$tdataoptionsubchoice[".filterFields"] = array();
$tdataoptionsubchoice[".requiredSearchFields"] = array();

$tdataoptionsubchoice[".googleLikeFields"] = array();
$tdataoptionsubchoice[".googleLikeFields"][] = "id";
$tdataoptionsubchoice[".googleLikeFields"][] = "optionSubID";
$tdataoptionsubchoice[".googleLikeFields"][] = "optionSubName";
$tdataoptionsubchoice[".googleLikeFields"][] = "optionSubValue";
$tdataoptionsubchoice[".googleLikeFields"][] = "entryUserName";
$tdataoptionsubchoice[".googleLikeFields"][] = "entryTime";



$tdataoptionsubchoice[".tableType"] = "list";

$tdataoptionsubchoice[".printerPageOrientation"] = 0;
$tdataoptionsubchoice[".nPrinterPageScale"] = 100;

$tdataoptionsubchoice[".nPrinterSplitRecords"] = 40;

$tdataoptionsubchoice[".geocodingEnabled"] = false;










$tdataoptionsubchoice[".pageSize"] = 20;

$tdataoptionsubchoice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsubchoice[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsubchoice[".orderindexes"] = array();


$tdataoptionsubchoice[".sqlHead"] = "SELECT id,  	optionSubID,  	optionSubName,  	optionSubValue,  	entryUserName,  	entryTime";
$tdataoptionsubchoice[".sqlFrom"] = "FROM optionSubChoice";
$tdataoptionsubchoice[".sqlWhereExpr"] = "";
$tdataoptionsubchoice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsubchoice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsubchoice[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsubchoice[".highlightSearchResults"] = true;

$tableKeysoptionsubchoice = array();
$tableKeysoptionsubchoice[] = "id";
$tdataoptionsubchoice[".Keys"] = $tableKeysoptionsubchoice;


$tdataoptionsubchoice[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","id");
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


	$tdataoptionsubchoice["id"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "id";
//	optionSubID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "optionSubID";
	$fdata["GoodName"] = "optionSubID";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","optionSubID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "optionSubID";

		$fdata["sourceSingle"] = "optionSubID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionSubID";

	
	
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


	$tdataoptionsubchoice["optionSubID"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "optionSubID";
//	optionSubName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "optionSubName";
	$fdata["GoodName"] = "optionSubName";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","optionSubName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionSubName";

		$fdata["sourceSingle"] = "optionSubName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionSubName";

	
	
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


	$tdataoptionsubchoice["optionSubName"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "optionSubName";
//	optionSubValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "optionSubValue";
	$fdata["GoodName"] = "optionSubValue";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","optionSubValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionSubValue";

		$fdata["sourceSingle"] = "optionSubValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionSubValue";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdataoptionsubchoice["optionSubValue"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "optionSubValue";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","entryUserName");
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


	$tdataoptionsubchoice["entryUserName"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "optionSubChoice";
	$fdata["Label"] = GetFieldLabel("optionSubChoice","entryTime");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataoptionsubchoice["entryTime"] = $fdata;
		$tdataoptionsubchoice[".searchableFields"][] = "entryTime";


$tables_data["optionSubChoice"]=&$tdataoptionsubchoice;
$field_labels["optionSubChoice"] = &$fieldLabelsoptionsubchoice;
$fieldToolTips["optionSubChoice"] = &$fieldToolTipsoptionsubchoice;
$placeHolders["optionSubChoice"] = &$placeHoldersoptionsubchoice;
$page_titles["optionSubChoice"] = &$pageTitlesoptionsubchoice;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSubChoice"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSubChoice"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="optionSub";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="optionSub";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "optionsub";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["optionSubChoice"][0] = $masterParams;
				$masterTablesData["optionSubChoice"][0]["masterKeys"] = array();
	$masterTablesData["optionSubChoice"][0]["masterKeys"][]="id";
				$masterTablesData["optionSubChoice"][0]["detailKeys"] = array();
	$masterTablesData["optionSubChoice"][0]["detailKeys"][]="optionSubID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsubchoice()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	optionSubID,  	optionSubName,  	optionSubValue,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM optionSubChoice";
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
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "optionSubChoice";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "optionSubID",
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto8["m_sql"] = "optionSubID";
$proto8["m_srcTableName"] = "optionSubChoice";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "optionSubName",
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto10["m_sql"] = "optionSubName";
$proto10["m_srcTableName"] = "optionSubChoice";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "optionSubValue",
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto12["m_sql"] = "optionSubValue";
$proto12["m_srcTableName"] = "optionSubChoice";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto14["m_sql"] = "entryUserName";
$proto14["m_srcTableName"] = "optionSubChoice";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "optionSubChoice",
	"m_srcTableName" => "optionSubChoice"
));

$proto16["m_sql"] = "entryTime";
$proto16["m_srcTableName"] = "optionSubChoice";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "optionSubChoice";
$proto19["m_srcTableName"] = "optionSubChoice";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "optionSubID";
$proto19["m_columns"][] = "optionSubName";
$proto19["m_columns"][] = "optionSubValue";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "optionSubChoice";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "optionSubChoice";
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
$proto0["m_srcTableName"]="optionSubChoice";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsubchoice = createSqlQuery_optionsubchoice();


	
				;

						

$tdataoptionsubchoice[".sqlquery"] = $queryData_optionsubchoice;



$tableEvents["optionSubChoice"] = new eventsBase;
$tdataoptionsubchoice[".hasEvents"] = false;

?>