<?php
$tdataoptionsub = array();
$tdataoptionsub[".searchableFields"] = array();
$tdataoptionsub[".ShortName"] = "optionsub";
$tdataoptionsub[".OwnerID"] = "";
$tdataoptionsub[".OriginalTable"] = "optionSub";


$tdataoptionsub[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub[".originalPagesByType"] = $tdataoptionsub[".pagesByType"];
$tdataoptionsub[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub[".originalPages"] = $tdataoptionsub[".pages"];
$tdataoptionsub[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub[".originalDefaultPages"] = $tdataoptionsub[".defaultPages"];

//	field labels
$fieldLabelsoptionsub = array();
$fieldToolTipsoptionsub = array();
$pageTitlesoptionsub = array();
$placeHoldersoptionsub = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub["English"] = array();
	$fieldToolTipsoptionsub["English"] = array();
	$placeHoldersoptionsub["English"] = array();
	$pageTitlesoptionsub["English"] = array();
	$fieldLabelsoptionsub["English"]["id"] = "ID";
	$fieldToolTipsoptionsub["English"]["id"] = "";
	$placeHoldersoptionsub["English"]["id"] = "ID";
	$fieldLabelsoptionsub["English"]["optionGroupID"] = "Option Group ID";
	$fieldToolTipsoptionsub["English"]["optionGroupID"] = "";
	$placeHoldersoptionsub["English"]["optionGroupID"] = "Option Group ID";
	$fieldLabelsoptionsub["English"]["optionName"] = "Option Name";
	$fieldToolTipsoptionsub["English"]["optionName"] = "";
	$placeHoldersoptionsub["English"]["optionName"] = "Option Name";
	$fieldLabelsoptionsub["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsoptionsub["English"]["entryUserName"] = "";
	$placeHoldersoptionsub["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsoptionsub["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsoptionsub["English"]["entryTime"] = "";
	$placeHoldersoptionsub["English"]["entryTime"] = "Entry Time";
	$fieldLabelsoptionsub["English"]["optionGroupNumber"] = "Option Group Number";
	$fieldToolTipsoptionsub["English"]["optionGroupNumber"] = "";
	$placeHoldersoptionsub["English"]["optionGroupNumber"] = "";
	if (count($fieldToolTipsoptionsub["English"]))
		$tdataoptionsub[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub["Thai"] = array();
	$fieldToolTipsoptionsub["Thai"] = array();
	$placeHoldersoptionsub["Thai"] = array();
	$pageTitlesoptionsub["Thai"] = array();
	$fieldLabelsoptionsub["Thai"]["id"] = "ID";
	$fieldToolTipsoptionsub["Thai"]["id"] = "";
	$placeHoldersoptionsub["Thai"]["id"] = "ID";
	$fieldLabelsoptionsub["Thai"]["optionGroupID"] = "OPTION_GROUP_ID";
	$fieldToolTipsoptionsub["Thai"]["optionGroupID"] = "";
	$placeHoldersoptionsub["Thai"]["optionGroupID"] = "OPTION_GROUP_ID";
	$fieldLabelsoptionsub["Thai"]["optionName"] = "กลุ่มตัวเลือก";
	$fieldToolTipsoptionsub["Thai"]["optionName"] = "";
	$placeHoldersoptionsub["Thai"]["optionName"] = "กลุ่มตัวเลือก";
	$fieldLabelsoptionsub["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsoptionsub["Thai"]["entryUserName"] = "";
	$placeHoldersoptionsub["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsoptionsub["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsoptionsub["Thai"]["entryTime"] = "";
	$placeHoldersoptionsub["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsoptionsub["Thai"]["optionGroupNumber"] = "รหัสตัวเลือก";
	$fieldToolTipsoptionsub["Thai"]["optionGroupNumber"] = "";
	$placeHoldersoptionsub["Thai"]["optionGroupNumber"] = "";
	if (count($fieldToolTipsoptionsub["Thai"]))
		$tdataoptionsub[".isUseToolTips"] = true;
}


	$tdataoptionsub[".NCSearch"] = true;



$tdataoptionsub[".shortTableName"] = "optionsub";
$tdataoptionsub[".nSecOptions"] = 0;

$tdataoptionsub[".mainTableOwnerID"] = "";
$tdataoptionsub[".entityType"] = 0;
$tdataoptionsub[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub[".showAddInPopup"] = false;

$tdataoptionsub[".showEditInPopup"] = false;

$tdataoptionsub[".showViewInPopup"] = false;

$tdataoptionsub[".listAjax"] = false;
//	temporary
//$tdataoptionsub[".listAjax"] = false;

	$tdataoptionsub[".audit"] = true;

	$tdataoptionsub[".locking"] = false;


$pages = $tdataoptionsub[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub[".edit"] = true;
	$tdataoptionsub[".afterEditAction"] = 1;
	$tdataoptionsub[".closePopupAfterEdit"] = 1;
	$tdataoptionsub[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub[".add"] = true;
$tdataoptionsub[".afterAddAction"] = 1;
$tdataoptionsub[".closePopupAfterAdd"] = 1;
$tdataoptionsub[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub[".list"] = true;
}



$tdataoptionsub[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub[".printFriendly"] = true;
}



$tdataoptionsub[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub[".isUseAjaxSuggest"] = true;

$tdataoptionsub[".rowHighlite"] = true;



												

$tdataoptionsub[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub[".buttonsAdded"] = false;

$tdataoptionsub[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub[".isUseTimeForSearch"] = false;


$tdataoptionsub[".badgeColor"] = "cd853f";


$tdataoptionsub[".allSearchFields"] = array();
$tdataoptionsub[".filterFields"] = array();
$tdataoptionsub[".requiredSearchFields"] = array();

$tdataoptionsub[".googleLikeFields"] = array();
$tdataoptionsub[".googleLikeFields"][] = "id";
$tdataoptionsub[".googleLikeFields"][] = "optionGroupID";
$tdataoptionsub[".googleLikeFields"][] = "optionGroupNumber";
$tdataoptionsub[".googleLikeFields"][] = "optionName";
$tdataoptionsub[".googleLikeFields"][] = "entryUserName";
$tdataoptionsub[".googleLikeFields"][] = "entryTime";



$tdataoptionsub[".tableType"] = "list";

$tdataoptionsub[".printerPageOrientation"] = 0;
$tdataoptionsub[".nPrinterPageScale"] = 100;

$tdataoptionsub[".nPrinterSplitRecords"] = 40;

$tdataoptionsub[".geocodingEnabled"] = false;










$tdataoptionsub[".pageSize"] = 20;

$tdataoptionsub[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsub[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub[".orderindexes"] = array();


$tdataoptionsub[".sqlHead"] = "SELECT id,  	optionGroupID,  	optionGroupNumber,  	optionName,  	entryUserName,  	entryTime";
$tdataoptionsub[".sqlFrom"] = "FROM optionSub";
$tdataoptionsub[".sqlWhereExpr"] = "";
$tdataoptionsub[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub[".highlightSearchResults"] = true;

$tableKeysoptionsub = array();
$tableKeysoptionsub[] = "id";
$tdataoptionsub[".Keys"] = $tableKeysoptionsub;


$tdataoptionsub[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","id");
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


	$tdataoptionsub["id"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "id";
//	optionGroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "optionGroupID";
	$fdata["GoodName"] = "optionGroupID";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","optionGroupID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "optionGroupID";

		$fdata["sourceSingle"] = "optionGroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionGroupID";

	
	
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


	$tdataoptionsub["optionGroupID"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "optionGroupID";
//	optionGroupNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "optionGroupNumber";
	$fdata["GoodName"] = "optionGroupNumber";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","optionGroupNumber");
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


	$tdataoptionsub["optionGroupNumber"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "optionGroupNumber";
//	optionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "optionName";
	$fdata["GoodName"] = "optionName";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","optionName");
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


	$tdataoptionsub["optionName"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "optionName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","entryUserName");
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


	$tdataoptionsub["entryUserName"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub","entryTime");
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


	$tdataoptionsub["entryTime"] = $fdata;
		$tdataoptionsub[".searchableFields"][] = "entryTime";


$tables_data["optionSub"]=&$tdataoptionsub;
$field_labels["optionSub"] = &$fieldLabelsoptionsub;
$fieldToolTips["optionSub"] = &$fieldToolTipsoptionsub;
$placeHolders["optionSub"] = &$placeHoldersoptionsub;
$page_titles["optionSub"] = &$pageTitlesoptionsub;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="optionGroup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="optionGroup";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "optiongroup";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["optionSub"][0] = $masterParams;
				$masterTablesData["optionSub"][0]["masterKeys"] = array();
	$masterTablesData["optionSub"][0]["masterKeys"][]="id";
				$masterTablesData["optionSub"][0]["detailKeys"] = array();
	$masterTablesData["optionSub"][0]["detailKeys"][]="optionGroupID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	optionGroupID,  	optionGroupNumber,  	optionName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM optionSub";
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
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "optionSub";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupID",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto8["m_sql"] = "optionGroupID";
$proto8["m_srcTableName"] = "optionSub";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupNumber",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto10["m_sql"] = "optionGroupNumber";
$proto10["m_srcTableName"] = "optionSub";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "optionName",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto12["m_sql"] = "optionName";
$proto12["m_srcTableName"] = "optionSub";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto14["m_sql"] = "entryUserName";
$proto14["m_srcTableName"] = "optionSub";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub"
));

$proto16["m_sql"] = "entryTime";
$proto16["m_srcTableName"] = "optionSub";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "optionSub";
$proto19["m_srcTableName"] = "optionSub";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "optionGroupID";
$proto19["m_columns"][] = "optionGroupNumber";
$proto19["m_columns"][] = "optionName";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "optionSub";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "optionSub";
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
$proto0["m_srcTableName"]="optionSub";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub = createSqlQuery_optionsub();


	
				;

						

$tdataoptionsub[".sqlquery"] = $queryData_optionsub;



include_once(getabspath("include/optionsub_events.php"));
$tableEvents["optionSub"] = new eventclass_optionsub;
$tdataoptionsub[".hasEvents"] = true;

?>