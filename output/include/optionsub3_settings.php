<?php
$tdataoptionsub3 = array();
$tdataoptionsub3[".searchableFields"] = array();
$tdataoptionsub3[".ShortName"] = "optionsub3";
$tdataoptionsub3[".OwnerID"] = "";
$tdataoptionsub3[".OriginalTable"] = "optionSub";


$tdataoptionsub3[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub3[".originalPagesByType"] = $tdataoptionsub3[".pagesByType"];
$tdataoptionsub3[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub3[".originalPages"] = $tdataoptionsub3[".pages"];
$tdataoptionsub3[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub3[".originalDefaultPages"] = $tdataoptionsub3[".defaultPages"];

//	field labels
$fieldLabelsoptionsub3 = array();
$fieldToolTipsoptionsub3 = array();
$pageTitlesoptionsub3 = array();
$placeHoldersoptionsub3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub3["English"] = array();
	$fieldToolTipsoptionsub3["English"] = array();
	$placeHoldersoptionsub3["English"] = array();
	$pageTitlesoptionsub3["English"] = array();
	$fieldLabelsoptionsub3["English"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsub3["English"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsub3["English"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsub3["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub3["English"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub3["English"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub3["English"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub3["English"]["processName"] = "";
	$placeHoldersoptionsub3["English"]["processName"] = "";
	if (count($fieldToolTipsoptionsub3["English"]))
		$tdataoptionsub3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub3["Thai"] = array();
	$fieldToolTipsoptionsub3["Thai"] = array();
	$placeHoldersoptionsub3["Thai"] = array();
	$pageTitlesoptionsub3["Thai"] = array();
	$fieldLabelsoptionsub3["Thai"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsub3["Thai"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsub3["Thai"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsub3["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub3["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub3["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub3["Thai"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub3["Thai"]["processName"] = "";
	$placeHoldersoptionsub3["Thai"]["processName"] = "";
	if (count($fieldToolTipsoptionsub3["Thai"]))
		$tdataoptionsub3[".isUseToolTips"] = true;
}


	$tdataoptionsub3[".NCSearch"] = true;



$tdataoptionsub3[".shortTableName"] = "optionsub3";
$tdataoptionsub3[".nSecOptions"] = 0;

$tdataoptionsub3[".mainTableOwnerID"] = "";
$tdataoptionsub3[".entityType"] = 1;
$tdataoptionsub3[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub3[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub3[".showAddInPopup"] = false;

$tdataoptionsub3[".showEditInPopup"] = false;

$tdataoptionsub3[".showViewInPopup"] = false;

$tdataoptionsub3[".listAjax"] = false;
//	temporary
//$tdataoptionsub3[".listAjax"] = false;

	$tdataoptionsub3[".audit"] = true;

	$tdataoptionsub3[".locking"] = false;


$pages = $tdataoptionsub3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub3[".edit"] = true;
	$tdataoptionsub3[".afterEditAction"] = 1;
	$tdataoptionsub3[".closePopupAfterEdit"] = 1;
	$tdataoptionsub3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub3[".add"] = true;
$tdataoptionsub3[".afterAddAction"] = 1;
$tdataoptionsub3[".closePopupAfterAdd"] = 1;
$tdataoptionsub3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub3[".list"] = true;
}



$tdataoptionsub3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub3[".printFriendly"] = true;
}



$tdataoptionsub3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub3[".isUseAjaxSuggest"] = true;

$tdataoptionsub3[".rowHighlite"] = true;





$tdataoptionsub3[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub3[".buttonsAdded"] = false;

$tdataoptionsub3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub3[".isUseTimeForSearch"] = false;


$tdataoptionsub3[".badgeColor"] = "E67349";


$tdataoptionsub3[".allSearchFields"] = array();
$tdataoptionsub3[".filterFields"] = array();
$tdataoptionsub3[".requiredSearchFields"] = array();

$tdataoptionsub3[".googleLikeFields"] = array();
$tdataoptionsub3[".googleLikeFields"][] = "researchConsiderNameExtract";
$tdataoptionsub3[".googleLikeFields"][] = "researchConsiderNumber";
$tdataoptionsub3[".googleLikeFields"][] = "processName";



$tdataoptionsub3[".tableType"] = "list";

$tdataoptionsub3[".printerPageOrientation"] = 0;
$tdataoptionsub3[".nPrinterPageScale"] = 100;

$tdataoptionsub3[".nPrinterSplitRecords"] = 40;

$tdataoptionsub3[".geocodingEnabled"] = false;










$tdataoptionsub3[".pageSize"] = 20;

$tdataoptionsub3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsub3[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub3[".orderindexes"] = array();


$tdataoptionsub3[".sqlHead"] = "  SELECT SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$tdataoptionsub3[".sqlFrom"] = "FROM  	researchConsider";
$tdataoptionsub3[".sqlWhereExpr"] = "";
$tdataoptionsub3[".sqlTail"] = "UNION  SELECT  	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', -1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName   FROM  	researchConsider";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub3[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub3[".highlightSearchResults"] = true;

$tableKeysoptionsub3 = array();
$tdataoptionsub3[".Keys"] = $tableKeysoptionsub3;


$tdataoptionsub3[".hideMobileList"] = array();




//	researchConsiderNameExtract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchConsiderNameExtract";
	$fdata["GoodName"] = "researchConsiderNameExtract";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("optionSub3","researchConsiderNameExtract");
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


	$tdataoptionsub3["researchConsiderNameExtract"] = $fdata;
		$tdataoptionsub3[".searchableFields"][] = "researchConsiderNameExtract";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub3","researchConsiderNumber");
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


	$tdataoptionsub3["researchConsiderNumber"] = $fdata;
		$tdataoptionsub3[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub3","processName");
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


	$tdataoptionsub3["processName"] = $fdata;
		$tdataoptionsub3[".searchableFields"][] = "processName";


$tables_data["optionSub3"]=&$tdataoptionsub3;
$field_labels["optionSub3"] = &$fieldLabelsoptionsub3;
$fieldToolTips["optionSub3"] = &$fieldToolTipsoptionsub3;
$placeHolders["optionSub3"] = &$placeHoldersoptionsub3;
$page_titles["optionSub3"] = &$pageTitlesoptionsub3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub3()
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
$proto6["m_srcTableName"] = "optionSub3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "researchConsiderNameExtract";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub3"
));

$proto11["m_sql"] = "researchConsider.researchConsiderNumber";
$proto11["m_srcTableName"] = "optionSub3";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub3"
));

$proto13["m_sql"] = "researchConsider.processName";
$proto13["m_srcTableName"] = "optionSub3";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "researchConsider";
$proto16["m_srcTableName"] = "optionSub3";
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
$proto15["m_srcTableName"] = "optionSub3";
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
$proto0["m_srcTableName"]="optionSub3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub3 = createSqlQuery_optionsub3();


	
				;

			

$tdataoptionsub3[".sqlquery"] = $queryData_optionsub3;



$tableEvents["optionSub3"] = new eventsBase;
$tdataoptionsub3[".hasEvents"] = false;

?>