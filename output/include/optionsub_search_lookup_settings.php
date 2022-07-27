<?php
$tdataoptionsub_search_lookup = array();
$tdataoptionsub_search_lookup[".searchableFields"] = array();
$tdataoptionsub_search_lookup[".ShortName"] = "optionsub_search_lookup";
$tdataoptionsub_search_lookup[".OwnerID"] = "";
$tdataoptionsub_search_lookup[".OriginalTable"] = "optionSub";


$tdataoptionsub_search_lookup[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub_search_lookup[".originalPagesByType"] = $tdataoptionsub_search_lookup[".pagesByType"];
$tdataoptionsub_search_lookup[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub_search_lookup[".originalPages"] = $tdataoptionsub_search_lookup[".pages"];
$tdataoptionsub_search_lookup[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub_search_lookup[".originalDefaultPages"] = $tdataoptionsub_search_lookup[".defaultPages"];

//	field labels
$fieldLabelsoptionsub_search_lookup = array();
$fieldToolTipsoptionsub_search_lookup = array();
$pageTitlesoptionsub_search_lookup = array();
$placeHoldersoptionsub_search_lookup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub_search_lookup["English"] = array();
	$fieldToolTipsoptionsub_search_lookup["English"] = array();
	$placeHoldersoptionsub_search_lookup["English"] = array();
	$pageTitlesoptionsub_search_lookup["English"] = array();
	$fieldLabelsoptionsub_search_lookup["English"]["id"] = "ID";
	$fieldToolTipsoptionsub_search_lookup["English"]["id"] = "";
	$placeHoldersoptionsub_search_lookup["English"]["id"] = "";
	$fieldLabelsoptionsub_search_lookup["English"]["optionGroupID"] = "Option Group ID";
	$fieldToolTipsoptionsub_search_lookup["English"]["optionGroupID"] = "";
	$placeHoldersoptionsub_search_lookup["English"]["optionGroupID"] = "";
	$fieldLabelsoptionsub_search_lookup["English"]["optionGroupNumber"] = "Option Group Number";
	$fieldToolTipsoptionsub_search_lookup["English"]["optionGroupNumber"] = "";
	$placeHoldersoptionsub_search_lookup["English"]["optionGroupNumber"] = "";
	$fieldLabelsoptionsub_search_lookup["English"]["optionName"] = "Option Name";
	$fieldToolTipsoptionsub_search_lookup["English"]["optionName"] = "";
	$placeHoldersoptionsub_search_lookup["English"]["optionName"] = "";
	if (count($fieldToolTipsoptionsub_search_lookup["English"]))
		$tdataoptionsub_search_lookup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub_search_lookup["Thai"] = array();
	$fieldToolTipsoptionsub_search_lookup["Thai"] = array();
	$placeHoldersoptionsub_search_lookup["Thai"] = array();
	$pageTitlesoptionsub_search_lookup["Thai"] = array();
	$fieldLabelsoptionsub_search_lookup["Thai"]["id"] = "ID";
	$fieldToolTipsoptionsub_search_lookup["Thai"]["id"] = "";
	$placeHoldersoptionsub_search_lookup["Thai"]["id"] = "";
	$fieldLabelsoptionsub_search_lookup["Thai"]["optionGroupID"] = "รหัสกลุ่ม (ID)";
	$fieldToolTipsoptionsub_search_lookup["Thai"]["optionGroupID"] = "";
	$placeHoldersoptionsub_search_lookup["Thai"]["optionGroupID"] = "";
	$fieldLabelsoptionsub_search_lookup["Thai"]["optionGroupNumber"] = "รหัสกลุ่ม";
	$fieldToolTipsoptionsub_search_lookup["Thai"]["optionGroupNumber"] = "";
	$placeHoldersoptionsub_search_lookup["Thai"]["optionGroupNumber"] = "";
	$fieldLabelsoptionsub_search_lookup["Thai"]["optionName"] = "ชื่อกลุ่ม";
	$fieldToolTipsoptionsub_search_lookup["Thai"]["optionName"] = "";
	$placeHoldersoptionsub_search_lookup["Thai"]["optionName"] = "";
	if (count($fieldToolTipsoptionsub_search_lookup["Thai"]))
		$tdataoptionsub_search_lookup[".isUseToolTips"] = true;
}


	$tdataoptionsub_search_lookup[".NCSearch"] = true;



$tdataoptionsub_search_lookup[".shortTableName"] = "optionsub_search_lookup";
$tdataoptionsub_search_lookup[".nSecOptions"] = 0;

$tdataoptionsub_search_lookup[".mainTableOwnerID"] = "";
$tdataoptionsub_search_lookup[".entityType"] = 1;
$tdataoptionsub_search_lookup[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub_search_lookup[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub_search_lookup[".showAddInPopup"] = false;

$tdataoptionsub_search_lookup[".showEditInPopup"] = false;

$tdataoptionsub_search_lookup[".showViewInPopup"] = false;

$tdataoptionsub_search_lookup[".listAjax"] = false;
//	temporary
//$tdataoptionsub_search_lookup[".listAjax"] = false;

	$tdataoptionsub_search_lookup[".audit"] = true;

	$tdataoptionsub_search_lookup[".locking"] = false;


$pages = $tdataoptionsub_search_lookup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub_search_lookup[".edit"] = true;
	$tdataoptionsub_search_lookup[".afterEditAction"] = 1;
	$tdataoptionsub_search_lookup[".closePopupAfterEdit"] = 1;
	$tdataoptionsub_search_lookup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub_search_lookup[".add"] = true;
$tdataoptionsub_search_lookup[".afterAddAction"] = 1;
$tdataoptionsub_search_lookup[".closePopupAfterAdd"] = 1;
$tdataoptionsub_search_lookup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub_search_lookup[".list"] = true;
}



$tdataoptionsub_search_lookup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub_search_lookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub_search_lookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub_search_lookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub_search_lookup[".printFriendly"] = true;
}



$tdataoptionsub_search_lookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub_search_lookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub_search_lookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub_search_lookup[".isUseAjaxSuggest"] = true;

$tdataoptionsub_search_lookup[".rowHighlite"] = true;



						

$tdataoptionsub_search_lookup[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub_search_lookup[".buttonsAdded"] = false;

$tdataoptionsub_search_lookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub_search_lookup[".isUseTimeForSearch"] = false;


$tdataoptionsub_search_lookup[".badgeColor"] = "CD853F";


$tdataoptionsub_search_lookup[".allSearchFields"] = array();
$tdataoptionsub_search_lookup[".filterFields"] = array();
$tdataoptionsub_search_lookup[".requiredSearchFields"] = array();

$tdataoptionsub_search_lookup[".googleLikeFields"] = array();
$tdataoptionsub_search_lookup[".googleLikeFields"][] = "id";
$tdataoptionsub_search_lookup[".googleLikeFields"][] = "optionGroupID";
$tdataoptionsub_search_lookup[".googleLikeFields"][] = "optionGroupNumber";
$tdataoptionsub_search_lookup[".googleLikeFields"][] = "optionName";



$tdataoptionsub_search_lookup[".tableType"] = "list";

$tdataoptionsub_search_lookup[".printerPageOrientation"] = 0;
$tdataoptionsub_search_lookup[".nPrinterPageScale"] = 100;

$tdataoptionsub_search_lookup[".nPrinterSplitRecords"] = 40;

$tdataoptionsub_search_lookup[".geocodingEnabled"] = false;










$tdataoptionsub_search_lookup[".pageSize"] = 20;

$tdataoptionsub_search_lookup[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY optionGroupNumber DESC, optionName DESC";
$tdataoptionsub_search_lookup[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub_search_lookup[".orderindexes"] = array();
	$tdataoptionsub_search_lookup[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "optionGroupNumber");

	$tdataoptionsub_search_lookup[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "optionName");



$tdataoptionsub_search_lookup[".sqlHead"] = "SELECT id,  optionGroupID,  optionGroupNumber,  optionName";
$tdataoptionsub_search_lookup[".sqlFrom"] = "FROM optionSub";
$tdataoptionsub_search_lookup[".sqlWhereExpr"] = "";
$tdataoptionsub_search_lookup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub_search_lookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub_search_lookup[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub_search_lookup[".highlightSearchResults"] = true;

$tableKeysoptionsub_search_lookup = array();
$tableKeysoptionsub_search_lookup[] = "id";
$tdataoptionsub_search_lookup[".Keys"] = $tableKeysoptionsub_search_lookup;


$tdataoptionsub_search_lookup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub_Search_Lookup","id");
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


	$tdataoptionsub_search_lookup["id"] = $fdata;
		$tdataoptionsub_search_lookup[".searchableFields"][] = "id";
//	optionGroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "optionGroupID";
	$fdata["GoodName"] = "optionGroupID";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub_Search_Lookup","optionGroupID");
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


	$tdataoptionsub_search_lookup["optionGroupID"] = $fdata;
		$tdataoptionsub_search_lookup[".searchableFields"][] = "optionGroupID";
//	optionGroupNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "optionGroupNumber";
	$fdata["GoodName"] = "optionGroupNumber";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub_Search_Lookup","optionGroupNumber");
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


	$tdataoptionsub_search_lookup["optionGroupNumber"] = $fdata;
		$tdataoptionsub_search_lookup[".searchableFields"][] = "optionGroupNumber";
//	optionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "optionName";
	$fdata["GoodName"] = "optionName";
	$fdata["ownerTable"] = "optionSub";
	$fdata["Label"] = GetFieldLabel("optionSub_Search_Lookup","optionName");
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


	$tdataoptionsub_search_lookup["optionName"] = $fdata;
		$tdataoptionsub_search_lookup[".searchableFields"][] = "optionName";


$tables_data["optionSub_Search_Lookup"]=&$tdataoptionsub_search_lookup;
$field_labels["optionSub_Search_Lookup"] = &$fieldLabelsoptionsub_search_lookup;
$fieldToolTips["optionSub_Search_Lookup"] = &$fieldToolTipsoptionsub_search_lookup;
$placeHolders["optionSub_Search_Lookup"] = &$placeHoldersoptionsub_search_lookup;
$page_titles["optionSub_Search_Lookup"] = &$pageTitlesoptionsub_search_lookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub_Search_Lookup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub_Search_Lookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub_search_lookup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  optionGroupID,  optionGroupNumber,  optionName";
$proto0["m_strFrom"] = "FROM optionSub";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY optionGroupNumber DESC, optionName DESC";
	
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
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "optionSub_Search_Lookup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupID",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto8["m_sql"] = "optionGroupID";
$proto8["m_srcTableName"] = "optionSub_Search_Lookup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupNumber",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto10["m_sql"] = "optionGroupNumber";
$proto10["m_srcTableName"] = "optionSub_Search_Lookup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "optionName",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto12["m_sql"] = "optionName";
$proto12["m_srcTableName"] = "optionSub_Search_Lookup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "optionSub";
$proto15["m_srcTableName"] = "optionSub_Search_Lookup";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "optionGroupID";
$proto15["m_columns"][] = "optionGroupNumber";
$proto15["m_columns"][] = "optionName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "optionSub";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "optionSub_Search_Lookup";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "optionGroupNumber",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "optionName",
	"m_strTable" => "optionSub",
	"m_srcTableName" => "optionSub_Search_Lookup"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="optionSub_Search_Lookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub_search_lookup = createSqlQuery_optionsub_search_lookup();


	
				;

				

$tdataoptionsub_search_lookup[".sqlquery"] = $queryData_optionsub_search_lookup;



include_once(getabspath("include/optionsub_search_lookup_events.php"));
$tableEvents["optionSub_Search_Lookup"] = new eventclass_optionsub_search_lookup;
$tdataoptionsub_search_lookup[".hasEvents"] = true;

?>