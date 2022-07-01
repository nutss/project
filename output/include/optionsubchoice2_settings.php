<?php
$tdataoptionsubchoice2 = array();
$tdataoptionsubchoice2[".searchableFields"] = array();
$tdataoptionsubchoice2[".ShortName"] = "optionsubchoice2";
$tdataoptionsubchoice2[".OwnerID"] = "";
$tdataoptionsubchoice2[".OriginalTable"] = "optionSubChoice";


$tdataoptionsubchoice2[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsubchoice2[".originalPagesByType"] = $tdataoptionsubchoice2[".pagesByType"];
$tdataoptionsubchoice2[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsubchoice2[".originalPages"] = $tdataoptionsubchoice2[".pages"];
$tdataoptionsubchoice2[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsubchoice2[".originalDefaultPages"] = $tdataoptionsubchoice2[".defaultPages"];

//	field labels
$fieldLabelsoptionsubchoice2 = array();
$fieldToolTipsoptionsubchoice2 = array();
$pageTitlesoptionsubchoice2 = array();
$placeHoldersoptionsubchoice2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsubchoice2["English"] = array();
	$fieldToolTipsoptionsubchoice2["English"] = array();
	$placeHoldersoptionsubchoice2["English"] = array();
	$pageTitlesoptionsubchoice2["English"] = array();
	$fieldLabelsoptionsubchoice2["English"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsubchoice2["English"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsubchoice2["English"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsubchoice2["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsubchoice2["English"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsubchoice2["English"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsubchoice2["English"]["processName"] = "Process Name";
	$fieldToolTipsoptionsubchoice2["English"]["processName"] = "";
	$placeHoldersoptionsubchoice2["English"]["processName"] = "";
	if (count($fieldToolTipsoptionsubchoice2["English"]))
		$tdataoptionsubchoice2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsubchoice2["Thai"] = array();
	$fieldToolTipsoptionsubchoice2["Thai"] = array();
	$placeHoldersoptionsubchoice2["Thai"] = array();
	$pageTitlesoptionsubchoice2["Thai"] = array();
	$fieldLabelsoptionsubchoice2["Thai"]["researchConsiderNameExtract"] = "Research Consider Name Extract";
	$fieldToolTipsoptionsubchoice2["Thai"]["researchConsiderNameExtract"] = "";
	$placeHoldersoptionsubchoice2["Thai"]["researchConsiderNameExtract"] = "";
	$fieldLabelsoptionsubchoice2["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsubchoice2["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsubchoice2["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsubchoice2["Thai"]["processName"] = "Process Name";
	$fieldToolTipsoptionsubchoice2["Thai"]["processName"] = "";
	$placeHoldersoptionsubchoice2["Thai"]["processName"] = "";
	if (count($fieldToolTipsoptionsubchoice2["Thai"]))
		$tdataoptionsubchoice2[".isUseToolTips"] = true;
}


	$tdataoptionsubchoice2[".NCSearch"] = true;



$tdataoptionsubchoice2[".shortTableName"] = "optionsubchoice2";
$tdataoptionsubchoice2[".nSecOptions"] = 0;

$tdataoptionsubchoice2[".mainTableOwnerID"] = "";
$tdataoptionsubchoice2[".entityType"] = 1;
$tdataoptionsubchoice2[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsubchoice2[".strOriginalTableName"] = "optionSubChoice";

	



$tdataoptionsubchoice2[".showAddInPopup"] = false;

$tdataoptionsubchoice2[".showEditInPopup"] = false;

$tdataoptionsubchoice2[".showViewInPopup"] = false;

$tdataoptionsubchoice2[".listAjax"] = false;
//	temporary
//$tdataoptionsubchoice2[".listAjax"] = false;

	$tdataoptionsubchoice2[".audit"] = false;

	$tdataoptionsubchoice2[".locking"] = false;


$pages = $tdataoptionsubchoice2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsubchoice2[".edit"] = true;
	$tdataoptionsubchoice2[".afterEditAction"] = 1;
	$tdataoptionsubchoice2[".closePopupAfterEdit"] = 1;
	$tdataoptionsubchoice2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsubchoice2[".add"] = true;
$tdataoptionsubchoice2[".afterAddAction"] = 1;
$tdataoptionsubchoice2[".closePopupAfterAdd"] = 1;
$tdataoptionsubchoice2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsubchoice2[".list"] = true;
}



$tdataoptionsubchoice2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsubchoice2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsubchoice2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsubchoice2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsubchoice2[".printFriendly"] = true;
}



$tdataoptionsubchoice2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsubchoice2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsubchoice2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsubchoice2[".isUseAjaxSuggest"] = true;

$tdataoptionsubchoice2[".rowHighlite"] = true;





$tdataoptionsubchoice2[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsubchoice2[".buttonsAdded"] = false;

$tdataoptionsubchoice2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsubchoice2[".isUseTimeForSearch"] = false;


$tdataoptionsubchoice2[".badgeColor"] = "2F4F4F";


$tdataoptionsubchoice2[".allSearchFields"] = array();
$tdataoptionsubchoice2[".filterFields"] = array();
$tdataoptionsubchoice2[".requiredSearchFields"] = array();

$tdataoptionsubchoice2[".googleLikeFields"] = array();
$tdataoptionsubchoice2[".googleLikeFields"][] = "researchConsiderNameExtract";
$tdataoptionsubchoice2[".googleLikeFields"][] = "researchConsiderNumber";
$tdataoptionsubchoice2[".googleLikeFields"][] = "processName";



$tdataoptionsubchoice2[".tableType"] = "list";

$tdataoptionsubchoice2[".printerPageOrientation"] = 0;
$tdataoptionsubchoice2[".nPrinterPageScale"] = 100;

$tdataoptionsubchoice2[".nPrinterSplitRecords"] = 40;

$tdataoptionsubchoice2[".geocodingEnabled"] = false;










$tdataoptionsubchoice2[".pageSize"] = 20;

$tdataoptionsubchoice2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsubchoice2[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsubchoice2[".orderindexes"] = array();


$tdataoptionsubchoice2[".sqlHead"] = "  SELECT SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$tdataoptionsubchoice2[".sqlFrom"] = "FROM  	researchConsider";
$tdataoptionsubchoice2[".sqlWhereExpr"] = "";
$tdataoptionsubchoice2[".sqlTail"] = "UNION  SELECT  	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', -1 ) As `researchConsiderNameExtract`,  	researchConsider.researchConsiderNumber,  	researchConsider.processName   FROM  	researchConsider";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsubchoice2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsubchoice2[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsubchoice2[".highlightSearchResults"] = true;

$tableKeysoptionsubchoice2 = array();
$tdataoptionsubchoice2[".Keys"] = $tableKeysoptionsubchoice2;


$tdataoptionsubchoice2[".hideMobileList"] = array();




//	researchConsiderNameExtract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchConsiderNameExtract";
	$fdata["GoodName"] = "researchConsiderNameExtract";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("optionSubChoice2","researchConsiderNameExtract");
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


	$tdataoptionsubchoice2["researchConsiderNameExtract"] = $fdata;
		$tdataoptionsubchoice2[".searchableFields"][] = "researchConsiderNameExtract";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSubChoice2","researchConsiderNumber");
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


	$tdataoptionsubchoice2["researchConsiderNumber"] = $fdata;
		$tdataoptionsubchoice2[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSubChoice2","processName");
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


	$tdataoptionsubchoice2["processName"] = $fdata;
		$tdataoptionsubchoice2[".searchableFields"][] = "processName";


$tables_data["optionSubChoice2"]=&$tdataoptionsubchoice2;
$field_labels["optionSubChoice2"] = &$fieldLabelsoptionsubchoice2;
$fieldToolTips["optionSubChoice2"] = &$fieldToolTipsoptionsubchoice2;
$placeHolders["optionSubChoice2"] = &$placeHoldersoptionsubchoice2;
$page_titles["optionSubChoice2"] = &$pageTitlesoptionsubchoice2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSubChoice2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSubChoice2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsubchoice2()
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
$proto6["m_srcTableName"] = "optionSubChoice2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "researchConsiderNameExtract";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSubChoice2"
));

$proto11["m_sql"] = "researchConsider.researchConsiderNumber";
$proto11["m_srcTableName"] = "optionSubChoice2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSubChoice2"
));

$proto13["m_sql"] = "researchConsider.processName";
$proto13["m_srcTableName"] = "optionSubChoice2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "researchConsider";
$proto16["m_srcTableName"] = "optionSubChoice2";
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
$proto15["m_srcTableName"] = "optionSubChoice2";
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
$proto0["m_srcTableName"]="optionSubChoice2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsubchoice2 = createSqlQuery_optionsubchoice2();


	
				;

			

$tdataoptionsubchoice2[".sqlquery"] = $queryData_optionsubchoice2;



$tableEvents["optionSubChoice2"] = new eventsBase;
$tdataoptionsubchoice2[".hasEvents"] = false;

?>