<?php
$tdataoptionsubchoice3 = array();
$tdataoptionsubchoice3[".searchableFields"] = array();
$tdataoptionsubchoice3[".ShortName"] = "optionsubchoice3";
$tdataoptionsubchoice3[".OwnerID"] = "";
$tdataoptionsubchoice3[".OriginalTable"] = "optionSubChoice";


$tdataoptionsubchoice3[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsubchoice3[".originalPagesByType"] = $tdataoptionsubchoice3[".pagesByType"];
$tdataoptionsubchoice3[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsubchoice3[".originalPages"] = $tdataoptionsubchoice3[".pages"];
$tdataoptionsubchoice3[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsubchoice3[".originalDefaultPages"] = $tdataoptionsubchoice3[".defaultPages"];

//	field labels
$fieldLabelsoptionsubchoice3 = array();
$fieldToolTipsoptionsubchoice3 = array();
$pageTitlesoptionsubchoice3 = array();
$placeHoldersoptionsubchoice3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsubchoice3["English"] = array();
	$fieldToolTipsoptionsubchoice3["English"] = array();
	$placeHoldersoptionsubchoice3["English"] = array();
	$pageTitlesoptionsubchoice3["English"] = array();
	$fieldLabelsoptionsubchoice3["English"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsubchoice3["English"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsubchoice3["English"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsubchoice3["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsubchoice3["English"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsubchoice3["English"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsubchoice3["English"]["processName"] = "Process Name";
	$fieldToolTipsoptionsubchoice3["English"]["processName"] = "";
	$placeHoldersoptionsubchoice3["English"]["processName"] = "";
	if (count($fieldToolTipsoptionsubchoice3["English"]))
		$tdataoptionsubchoice3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsubchoice3["Thai"] = array();
	$fieldToolTipsoptionsubchoice3["Thai"] = array();
	$placeHoldersoptionsubchoice3["Thai"] = array();
	$pageTitlesoptionsubchoice3["Thai"] = array();
	$fieldLabelsoptionsubchoice3["Thai"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsubchoice3["Thai"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsubchoice3["Thai"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsubchoice3["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsubchoice3["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsubchoice3["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsubchoice3["Thai"]["processName"] = "Process Name";
	$fieldToolTipsoptionsubchoice3["Thai"]["processName"] = "";
	$placeHoldersoptionsubchoice3["Thai"]["processName"] = "";
	if (count($fieldToolTipsoptionsubchoice3["Thai"]))
		$tdataoptionsubchoice3[".isUseToolTips"] = true;
}


	$tdataoptionsubchoice3[".NCSearch"] = true;



$tdataoptionsubchoice3[".shortTableName"] = "optionsubchoice3";
$tdataoptionsubchoice3[".nSecOptions"] = 0;

$tdataoptionsubchoice3[".mainTableOwnerID"] = "";
$tdataoptionsubchoice3[".entityType"] = 1;
$tdataoptionsubchoice3[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsubchoice3[".strOriginalTableName"] = "optionSubChoice";

	



$tdataoptionsubchoice3[".showAddInPopup"] = false;

$tdataoptionsubchoice3[".showEditInPopup"] = false;

$tdataoptionsubchoice3[".showViewInPopup"] = false;

$tdataoptionsubchoice3[".listAjax"] = false;
//	temporary
//$tdataoptionsubchoice3[".listAjax"] = false;

	$tdataoptionsubchoice3[".audit"] = false;

	$tdataoptionsubchoice3[".locking"] = false;


$pages = $tdataoptionsubchoice3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsubchoice3[".edit"] = true;
	$tdataoptionsubchoice3[".afterEditAction"] = 1;
	$tdataoptionsubchoice3[".closePopupAfterEdit"] = 1;
	$tdataoptionsubchoice3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsubchoice3[".add"] = true;
$tdataoptionsubchoice3[".afterAddAction"] = 1;
$tdataoptionsubchoice3[".closePopupAfterAdd"] = 1;
$tdataoptionsubchoice3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsubchoice3[".list"] = true;
}



$tdataoptionsubchoice3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsubchoice3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsubchoice3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsubchoice3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsubchoice3[".printFriendly"] = true;
}



$tdataoptionsubchoice3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsubchoice3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsubchoice3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsubchoice3[".isUseAjaxSuggest"] = true;

$tdataoptionsubchoice3[".rowHighlite"] = true;





$tdataoptionsubchoice3[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsubchoice3[".buttonsAdded"] = false;

$tdataoptionsubchoice3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsubchoice3[".isUseTimeForSearch"] = false;


$tdataoptionsubchoice3[".badgeColor"] = "DAA520";


$tdataoptionsubchoice3[".allSearchFields"] = array();
$tdataoptionsubchoice3[".filterFields"] = array();
$tdataoptionsubchoice3[".requiredSearchFields"] = array();

$tdataoptionsubchoice3[".googleLikeFields"] = array();
$tdataoptionsubchoice3[".googleLikeFields"][] = "researchConsiderNameExtract";
$tdataoptionsubchoice3[".googleLikeFields"][] = "researchConsiderNumber";
$tdataoptionsubchoice3[".googleLikeFields"][] = "processName";



$tdataoptionsubchoice3[".tableType"] = "list";

$tdataoptionsubchoice3[".printerPageOrientation"] = 0;
$tdataoptionsubchoice3[".nPrinterPageScale"] = 100;

$tdataoptionsubchoice3[".nPrinterSplitRecords"] = 40;

$tdataoptionsubchoice3[".geocodingEnabled"] = false;










$tdataoptionsubchoice3[".pageSize"] = 20;

$tdataoptionsubchoice3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsubchoice3[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsubchoice3[".orderindexes"] = array();


$tdataoptionsubchoice3[".sqlHead"] = "  SELECT SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$tdataoptionsubchoice3[".sqlFrom"] = "FROM  	researchConsider";
$tdataoptionsubchoice3[".sqlWhereExpr"] = "";
$tdataoptionsubchoice3[".sqlTail"] = "UNION  SELECT  	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', -1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName   FROM  	researchConsider";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsubchoice3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsubchoice3[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsubchoice3[".highlightSearchResults"] = true;

$tableKeysoptionsubchoice3 = array();
$tdataoptionsubchoice3[".Keys"] = $tableKeysoptionsubchoice3;


$tdataoptionsubchoice3[".hideMobileList"] = array();




//	researchConsiderNameExtract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchConsiderNameExtract";
	$fdata["GoodName"] = "researchConsiderNameExtract";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("optionSubChoice3","researchConsiderNameExtract");
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


	$tdataoptionsubchoice3["researchConsiderNameExtract"] = $fdata;
		$tdataoptionsubchoice3[".searchableFields"][] = "researchConsiderNameExtract";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSubChoice3","researchConsiderNumber");
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


	$tdataoptionsubchoice3["researchConsiderNumber"] = $fdata;
		$tdataoptionsubchoice3[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSubChoice3","processName");
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


	$tdataoptionsubchoice3["processName"] = $fdata;
		$tdataoptionsubchoice3[".searchableFields"][] = "processName";


$tables_data["optionSubChoice3"]=&$tdataoptionsubchoice3;
$field_labels["optionSubChoice3"] = &$fieldLabelsoptionsubchoice3;
$fieldToolTips["optionSubChoice3"] = &$fieldToolTipsoptionsubchoice3;
$placeHolders["optionSubChoice3"] = &$placeHoldersoptionsubchoice3;
$page_titles["optionSubChoice3"] = &$pageTitlesoptionsubchoice3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSubChoice3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSubChoice3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsubchoice3()
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
$proto6["m_srcTableName"] = "optionSubChoice3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "researchConsiderNameExtract";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSubChoice3"
));

$proto11["m_sql"] = "researchConsider.researchConsiderNumber";
$proto11["m_srcTableName"] = "optionSubChoice3";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSubChoice3"
));

$proto13["m_sql"] = "researchConsider.processName";
$proto13["m_srcTableName"] = "optionSubChoice3";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "researchConsider";
$proto16["m_srcTableName"] = "optionSubChoice3";
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
$proto15["m_srcTableName"] = "optionSubChoice3";
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
$proto0["m_srcTableName"]="optionSubChoice3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsubchoice3 = createSqlQuery_optionsubchoice3();


	
				;

			

$tdataoptionsubchoice3[".sqlquery"] = $queryData_optionsubchoice3;



$tableEvents["optionSubChoice3"] = new eventsBase;
$tdataoptionsubchoice3[".hasEvents"] = false;

?>