<?php
$tdataoptionsub4 = array();
$tdataoptionsub4[".searchableFields"] = array();
$tdataoptionsub4[".ShortName"] = "optionsub4";
$tdataoptionsub4[".OwnerID"] = "";
$tdataoptionsub4[".OriginalTable"] = "optionSub";


$tdataoptionsub4[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub4[".originalPagesByType"] = $tdataoptionsub4[".pagesByType"];
$tdataoptionsub4[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub4[".originalPages"] = $tdataoptionsub4[".pages"];
$tdataoptionsub4[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub4[".originalDefaultPages"] = $tdataoptionsub4[".defaultPages"];

//	field labels
$fieldLabelsoptionsub4 = array();
$fieldToolTipsoptionsub4 = array();
$pageTitlesoptionsub4 = array();
$placeHoldersoptionsub4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub4["English"] = array();
	$fieldToolTipsoptionsub4["English"] = array();
	$placeHoldersoptionsub4["English"] = array();
	$pageTitlesoptionsub4["English"] = array();
	$fieldLabelsoptionsub4["English"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsub4["English"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsub4["English"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsub4["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub4["English"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub4["English"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub4["English"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub4["English"]["processName"] = "";
	$placeHoldersoptionsub4["English"]["processName"] = "";
	if (count($fieldToolTipsoptionsub4["English"]))
		$tdataoptionsub4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub4["Thai"] = array();
	$fieldToolTipsoptionsub4["Thai"] = array();
	$placeHoldersoptionsub4["Thai"] = array();
	$pageTitlesoptionsub4["Thai"] = array();
	$fieldLabelsoptionsub4["Thai"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsub4["Thai"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsub4["Thai"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsub4["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub4["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub4["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub4["Thai"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub4["Thai"]["processName"] = "";
	$placeHoldersoptionsub4["Thai"]["processName"] = "";
	if (count($fieldToolTipsoptionsub4["Thai"]))
		$tdataoptionsub4[".isUseToolTips"] = true;
}


	$tdataoptionsub4[".NCSearch"] = true;



$tdataoptionsub4[".shortTableName"] = "optionsub4";
$tdataoptionsub4[".nSecOptions"] = 0;

$tdataoptionsub4[".mainTableOwnerID"] = "";
$tdataoptionsub4[".entityType"] = 1;
$tdataoptionsub4[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub4[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub4[".showAddInPopup"] = false;

$tdataoptionsub4[".showEditInPopup"] = false;

$tdataoptionsub4[".showViewInPopup"] = false;

$tdataoptionsub4[".listAjax"] = false;
//	temporary
//$tdataoptionsub4[".listAjax"] = false;

	$tdataoptionsub4[".audit"] = true;

	$tdataoptionsub4[".locking"] = false;


$pages = $tdataoptionsub4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub4[".edit"] = true;
	$tdataoptionsub4[".afterEditAction"] = 1;
	$tdataoptionsub4[".closePopupAfterEdit"] = 1;
	$tdataoptionsub4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub4[".add"] = true;
$tdataoptionsub4[".afterAddAction"] = 1;
$tdataoptionsub4[".closePopupAfterAdd"] = 1;
$tdataoptionsub4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub4[".list"] = true;
}



$tdataoptionsub4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub4[".printFriendly"] = true;
}



$tdataoptionsub4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub4[".isUseAjaxSuggest"] = true;

$tdataoptionsub4[".rowHighlite"] = true;





$tdataoptionsub4[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub4[".buttonsAdded"] = false;

$tdataoptionsub4[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub4[".isUseTimeForSearch"] = false;


$tdataoptionsub4[".badgeColor"] = "E67349";


$tdataoptionsub4[".allSearchFields"] = array();
$tdataoptionsub4[".filterFields"] = array();
$tdataoptionsub4[".requiredSearchFields"] = array();

$tdataoptionsub4[".googleLikeFields"] = array();
$tdataoptionsub4[".googleLikeFields"][] = "researchConsiderNameExtract";
$tdataoptionsub4[".googleLikeFields"][] = "researchConsiderNumber";
$tdataoptionsub4[".googleLikeFields"][] = "processName";



$tdataoptionsub4[".tableType"] = "list";

$tdataoptionsub4[".printerPageOrientation"] = 0;
$tdataoptionsub4[".nPrinterPageScale"] = 100;

$tdataoptionsub4[".nPrinterSplitRecords"] = 40;

$tdataoptionsub4[".geocodingEnabled"] = false;










$tdataoptionsub4[".pageSize"] = 20;

$tdataoptionsub4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsub4[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub4[".orderindexes"] = array();


$tdataoptionsub4[".sqlHead"] = "  SELECT SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$tdataoptionsub4[".sqlFrom"] = "FROM  	researchConsider";
$tdataoptionsub4[".sqlWhereExpr"] = "";
$tdataoptionsub4[".sqlTail"] = "UNION  SELECT  	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', -1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName   FROM  	researchConsider";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub4[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub4[".highlightSearchResults"] = true;

$tableKeysoptionsub4 = array();
$tdataoptionsub4[".Keys"] = $tableKeysoptionsub4;


$tdataoptionsub4[".hideMobileList"] = array();




//	researchConsiderNameExtract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchConsiderNameExtract";
	$fdata["GoodName"] = "researchConsiderNameExtract";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("optionSub4","researchConsiderNameExtract");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderNameExtract";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";

	
	
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


	$tdataoptionsub4["researchConsiderNameExtract"] = $fdata;
		$tdataoptionsub4[".searchableFields"][] = "researchConsiderNameExtract";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub4","researchConsiderNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderNumber";

	
	
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


	$tdataoptionsub4["researchConsiderNumber"] = $fdata;
		$tdataoptionsub4[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub4","processName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "processName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.processName";

	
	
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


	$tdataoptionsub4["processName"] = $fdata;
		$tdataoptionsub4[".searchableFields"][] = "processName";


$tables_data["optionSub4"]=&$tdataoptionsub4;
$field_labels["optionSub4"] = &$fieldLabelsoptionsub4;
$fieldToolTips["optionSub4"] = &$fieldToolTipsoptionsub4;
$placeHolders["optionSub4"] = &$placeHoldersoptionsub4;
$page_titles["optionSub4"] = &$pageTitlesoptionsub4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub4()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$proto0["m_strFrom"] = "FROM  	researchConsider";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchConsider.researchConsiderName"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'/'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "SUBSTRING_INDEX";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
$proto6["m_srcTableName"] = "optionSub4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "researchConsiderNameExtract";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub4"
));

$proto11["m_sql"] = "researchConsider.researchConsiderNumber";
$proto11["m_srcTableName"] = "optionSub4";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub4"
));

$proto13["m_sql"] = "researchConsider.processName";
$proto13["m_srcTableName"] = "optionSub4";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "researchConsider";
$proto16["m_srcTableName"] = "optionSub4";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "researchTypeID";
$proto16["m_columns"][] = "researchConsiderNumber";
$proto16["m_columns"][] = "processName";
$proto16["m_columns"][] = "stepName";
$proto16["m_columns"][] = "researchConsiderFile";
$proto16["m_columns"][] = "researchRegisterDesc";
$proto16["m_columns"][] = "researchConsiderName";
$proto16["m_columns"][] = "entryUserName";
$proto16["m_columns"][] = "entryTime";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "researchConsider";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "optionSub4";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="optionSub4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub4 = createSqlQuery_optionsub4();


	
				;

			

$tdataoptionsub4[".sqlquery"] = $queryData_optionsub4;



$tableEvents["optionSub4"] = new eventsBase;
$tdataoptionsub4[".hasEvents"] = false;

?>