<?php
$tdataproject_audit = array();
$tdataproject_audit[".searchableFields"] = array();
$tdataproject_audit[".ShortName"] = "project_audit";
$tdataproject_audit[".OwnerID"] = "";
$tdataproject_audit[".OriginalTable"] = "project_audit";


$tdataproject_audit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproject_audit[".originalPagesByType"] = $tdataproject_audit[".pagesByType"];
$tdataproject_audit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproject_audit[".originalPages"] = $tdataproject_audit[".pages"];
$tdataproject_audit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproject_audit[".originalDefaultPages"] = $tdataproject_audit[".defaultPages"];

//	field labels
$fieldLabelsproject_audit = array();
$fieldToolTipsproject_audit = array();
$pageTitlesproject_audit = array();
$placeHoldersproject_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject_audit["English"] = array();
	$fieldToolTipsproject_audit["English"] = array();
	$placeHoldersproject_audit["English"] = array();
	$pageTitlesproject_audit["English"] = array();
	$fieldLabelsproject_audit["English"]["id"] = "ID";
	$fieldToolTipsproject_audit["English"]["id"] = "";
	$placeHoldersproject_audit["English"]["id"] = "";
	$fieldLabelsproject_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipsproject_audit["English"]["datetime"] = "";
	$placeHoldersproject_audit["English"]["datetime"] = "";
	$fieldLabelsproject_audit["English"]["ip"] = "IP";
	$fieldToolTipsproject_audit["English"]["ip"] = "";
	$placeHoldersproject_audit["English"]["ip"] = "";
	$fieldLabelsproject_audit["English"]["user"] = "User";
	$fieldToolTipsproject_audit["English"]["user"] = "";
	$placeHoldersproject_audit["English"]["user"] = "";
	$fieldLabelsproject_audit["English"]["table"] = "Table";
	$fieldToolTipsproject_audit["English"]["table"] = "";
	$placeHoldersproject_audit["English"]["table"] = "";
	$fieldLabelsproject_audit["English"]["action"] = "Action";
	$fieldToolTipsproject_audit["English"]["action"] = "";
	$placeHoldersproject_audit["English"]["action"] = "";
	$fieldLabelsproject_audit["English"]["description"] = "Description";
	$fieldToolTipsproject_audit["English"]["description"] = "";
	$placeHoldersproject_audit["English"]["description"] = "";
	if (count($fieldToolTipsproject_audit["English"]))
		$tdataproject_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsproject_audit["Thai"] = array();
	$fieldToolTipsproject_audit["Thai"] = array();
	$placeHoldersproject_audit["Thai"] = array();
	$pageTitlesproject_audit["Thai"] = array();
	$fieldLabelsproject_audit["Thai"]["id"] = "ID";
	$fieldToolTipsproject_audit["Thai"]["id"] = "";
	$placeHoldersproject_audit["Thai"]["id"] = "";
	$fieldLabelsproject_audit["Thai"]["datetime"] = "วันที่/เวลา";
	$fieldToolTipsproject_audit["Thai"]["datetime"] = "";
	$placeHoldersproject_audit["Thai"]["datetime"] = "";
	$fieldLabelsproject_audit["Thai"]["ip"] = "IP";
	$fieldToolTipsproject_audit["Thai"]["ip"] = "";
	$placeHoldersproject_audit["Thai"]["ip"] = "";
	$fieldLabelsproject_audit["Thai"]["user"] = "ผู้ใช้งาน";
	$fieldToolTipsproject_audit["Thai"]["user"] = "";
	$placeHoldersproject_audit["Thai"]["user"] = "";
	$fieldLabelsproject_audit["Thai"]["table"] = "Table";
	$fieldToolTipsproject_audit["Thai"]["table"] = "";
	$placeHoldersproject_audit["Thai"]["table"] = "";
	$fieldLabelsproject_audit["Thai"]["action"] = "Action";
	$fieldToolTipsproject_audit["Thai"]["action"] = "";
	$placeHoldersproject_audit["Thai"]["action"] = "";
	$fieldLabelsproject_audit["Thai"]["description"] = "รายละเอียด";
	$fieldToolTipsproject_audit["Thai"]["description"] = "";
	$placeHoldersproject_audit["Thai"]["description"] = "";
	if (count($fieldToolTipsproject_audit["Thai"]))
		$tdataproject_audit[".isUseToolTips"] = true;
}


	$tdataproject_audit[".NCSearch"] = true;



$tdataproject_audit[".shortTableName"] = "project_audit";
$tdataproject_audit[".nSecOptions"] = 0;

$tdataproject_audit[".mainTableOwnerID"] = "";
$tdataproject_audit[".entityType"] = 0;
$tdataproject_audit[".connId"] = "mc_at_192_168_1_111";


$tdataproject_audit[".strOriginalTableName"] = "project_audit";

	



$tdataproject_audit[".showAddInPopup"] = false;

$tdataproject_audit[".showEditInPopup"] = false;

$tdataproject_audit[".showViewInPopup"] = false;

$tdataproject_audit[".listAjax"] = false;
//	temporary
//$tdataproject_audit[".listAjax"] = false;

	$tdataproject_audit[".audit"] = false;

	$tdataproject_audit[".locking"] = false;


$pages = $tdataproject_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproject_audit[".edit"] = true;
	$tdataproject_audit[".afterEditAction"] = 1;
	$tdataproject_audit[".closePopupAfterEdit"] = 1;
	$tdataproject_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproject_audit[".add"] = true;
$tdataproject_audit[".afterAddAction"] = 1;
$tdataproject_audit[".closePopupAfterAdd"] = 1;
$tdataproject_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproject_audit[".list"] = true;
}



$tdataproject_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproject_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproject_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproject_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproject_audit[".printFriendly"] = true;
}



$tdataproject_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproject_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproject_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproject_audit[".isUseAjaxSuggest"] = true;

$tdataproject_audit[".rowHighlite"] = true;



						

$tdataproject_audit[".ajaxCodeSnippetAdded"] = false;

$tdataproject_audit[".buttonsAdded"] = false;

$tdataproject_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject_audit[".isUseTimeForSearch"] = false;


$tdataproject_audit[".badgeColor"] = "DAA520";


$tdataproject_audit[".allSearchFields"] = array();
$tdataproject_audit[".filterFields"] = array();
$tdataproject_audit[".requiredSearchFields"] = array();

$tdataproject_audit[".googleLikeFields"] = array();
$tdataproject_audit[".googleLikeFields"][] = "id";
$tdataproject_audit[".googleLikeFields"][] = "datetime";
$tdataproject_audit[".googleLikeFields"][] = "ip";
$tdataproject_audit[".googleLikeFields"][] = "user";
$tdataproject_audit[".googleLikeFields"][] = "table";
$tdataproject_audit[".googleLikeFields"][] = "action";
$tdataproject_audit[".googleLikeFields"][] = "description";



$tdataproject_audit[".tableType"] = "list";

$tdataproject_audit[".printerPageOrientation"] = 0;
$tdataproject_audit[".nPrinterPageScale"] = 100;

$tdataproject_audit[".nPrinterSplitRecords"] = 40;

$tdataproject_audit[".geocodingEnabled"] = false;










$tdataproject_audit[".pageSize"] = 20;

$tdataproject_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproject_audit[".strOrderBy"] = $tstrOrderBy;

$tdataproject_audit[".orderindexes"] = array();


$tdataproject_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdataproject_audit[".sqlFrom"] = "FROM project_audit";
$tdataproject_audit[".sqlWhereExpr"] = "";
$tdataproject_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject_audit[".arrGroupsPerPage"] = $arrGPP;

$tdataproject_audit[".highlightSearchResults"] = true;

$tableKeysproject_audit = array();
$tableKeysproject_audit[] = "id";
$tdataproject_audit[".Keys"] = $tableKeysproject_audit;


$tdataproject_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdataproject_audit["id"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

		$fdata["sourceSingle"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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


	$tdataproject_audit["datetime"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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


	$tdataproject_audit["ip"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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


	$tdataproject_audit["user"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

		$fdata["sourceSingle"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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


	$tdataproject_audit["table"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

		$fdata["sourceSingle"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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


	$tdataproject_audit["action"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "project_audit";
	$fdata["Label"] = GetFieldLabel("project_audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdataproject_audit["description"] = $fdata;
		$tdataproject_audit[".searchableFields"][] = "description";


$tables_data["project_audit"]=&$tdataproject_audit;
$field_labels["project_audit"] = &$fieldLabelsproject_audit;
$fieldToolTips["project_audit"] = &$fieldToolTipsproject_audit;
$placeHolders["project_audit"] = &$placeHoldersproject_audit;
$page_titles["project_audit"] = &$pageTitlesproject_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["project_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["project_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_project_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM project_audit";
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
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "project_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "project_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "project_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "project_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "project_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "project_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "project_audit",
	"m_srcTableName" => "project_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "project_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "project_audit";
$proto21["m_srcTableName"] = "project_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "project_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "project_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="project_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project_audit = createSqlQuery_project_audit();


	
				;

							

$tdataproject_audit[".sqlquery"] = $queryData_project_audit;



$tableEvents["project_audit"] = new eventsBase;
$tdataproject_audit[".hasEvents"] = false;

?>