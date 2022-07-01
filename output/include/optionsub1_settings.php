<?php
$tdataoptionsub1 = array();
$tdataoptionsub1[".searchableFields"] = array();
$tdataoptionsub1[".ShortName"] = "optionsub1";
$tdataoptionsub1[".OwnerID"] = "";
$tdataoptionsub1[".OriginalTable"] = "optionSub";


$tdataoptionsub1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub1[".originalPagesByType"] = $tdataoptionsub1[".pagesByType"];
$tdataoptionsub1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub1[".originalPages"] = $tdataoptionsub1[".pages"];
$tdataoptionsub1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub1[".originalDefaultPages"] = $tdataoptionsub1[".defaultPages"];

//	field labels
$fieldLabelsoptionsub1 = array();
$fieldToolTipsoptionsub1 = array();
$pageTitlesoptionsub1 = array();
$placeHoldersoptionsub1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub1["English"] = array();
	$fieldToolTipsoptionsub1["English"] = array();
	$placeHoldersoptionsub1["English"] = array();
	$pageTitlesoptionsub1["English"] = array();
	$fieldLabelsoptionsub1["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsoptionsub1["English"]["researchConsiderName"] = "";
	$placeHoldersoptionsub1["English"]["researchConsiderName"] = "";
	if (count($fieldToolTipsoptionsub1["English"]))
		$tdataoptionsub1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub1["Thai"] = array();
	$fieldToolTipsoptionsub1["Thai"] = array();
	$placeHoldersoptionsub1["Thai"] = array();
	$pageTitlesoptionsub1["Thai"] = array();
	$fieldLabelsoptionsub1["Thai"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsoptionsub1["Thai"]["researchConsiderName"] = "";
	$placeHoldersoptionsub1["Thai"]["researchConsiderName"] = "";
	if (count($fieldToolTipsoptionsub1["Thai"]))
		$tdataoptionsub1[".isUseToolTips"] = true;
}


	$tdataoptionsub1[".NCSearch"] = true;



$tdataoptionsub1[".shortTableName"] = "optionsub1";
$tdataoptionsub1[".nSecOptions"] = 0;

$tdataoptionsub1[".mainTableOwnerID"] = "";
$tdataoptionsub1[".entityType"] = 1;
$tdataoptionsub1[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub1[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub1[".showAddInPopup"] = false;

$tdataoptionsub1[".showEditInPopup"] = false;

$tdataoptionsub1[".showViewInPopup"] = false;

$tdataoptionsub1[".listAjax"] = false;
//	temporary
//$tdataoptionsub1[".listAjax"] = false;

	$tdataoptionsub1[".audit"] = true;

	$tdataoptionsub1[".locking"] = false;


$pages = $tdataoptionsub1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub1[".edit"] = true;
	$tdataoptionsub1[".afterEditAction"] = 1;
	$tdataoptionsub1[".closePopupAfterEdit"] = 1;
	$tdataoptionsub1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub1[".add"] = true;
$tdataoptionsub1[".afterAddAction"] = 1;
$tdataoptionsub1[".closePopupAfterAdd"] = 1;
$tdataoptionsub1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub1[".list"] = true;
}



$tdataoptionsub1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub1[".printFriendly"] = true;
}



$tdataoptionsub1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub1[".isUseAjaxSuggest"] = true;

$tdataoptionsub1[".rowHighlite"] = true;





$tdataoptionsub1[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub1[".buttonsAdded"] = false;

$tdataoptionsub1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub1[".isUseTimeForSearch"] = false;


$tdataoptionsub1[".badgeColor"] = "DC143C";


$tdataoptionsub1[".allSearchFields"] = array();
$tdataoptionsub1[".filterFields"] = array();
$tdataoptionsub1[".requiredSearchFields"] = array();

$tdataoptionsub1[".googleLikeFields"] = array();
$tdataoptionsub1[".googleLikeFields"][] = "researchConsiderName";



$tdataoptionsub1[".tableType"] = "list";

$tdataoptionsub1[".printerPageOrientation"] = 0;
$tdataoptionsub1[".nPrinterPageScale"] = 100;

$tdataoptionsub1[".nPrinterSplitRecords"] = 40;

$tdataoptionsub1[".geocodingEnabled"] = false;










$tdataoptionsub1[".pageSize"] = 20;

$tdataoptionsub1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsub1[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub1[".orderindexes"] = array();


$tdataoptionsub1[".sqlHead"] = "SELECT researchConsiderName";
$tdataoptionsub1[".sqlFrom"] = "FROM researchConsider";
$tdataoptionsub1[".sqlWhereExpr"] = "";
$tdataoptionsub1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub1[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub1[".highlightSearchResults"] = true;

$tableKeysoptionsub1 = array();
$tdataoptionsub1[".Keys"] = $tableKeysoptionsub1;


$tdataoptionsub1[".hideMobileList"] = array();




//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub1","researchConsiderName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderName";

	
	
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


	$tdataoptionsub1["researchConsiderName"] = $fdata;
		$tdataoptionsub1[".searchableFields"][] = "researchConsiderName";


$tables_data["optionSub1"]=&$tdataoptionsub1;
$field_labels["optionSub1"] = &$fieldLabelsoptionsub1;
$fieldToolTips["optionSub1"] = &$fieldToolTipsoptionsub1;
$placeHolders["optionSub1"] = &$placeHoldersoptionsub1;
$page_titles["optionSub1"] = &$pageTitlesoptionsub1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchConsiderName";
$proto0["m_strFrom"] = "FROM researchConsider";
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
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub1"
));

$proto6["m_sql"] = "researchConsiderName";
$proto6["m_srcTableName"] = "optionSub1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "researchConsider";
$proto9["m_srcTableName"] = "optionSub1";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "id";
$proto9["m_columns"][] = "researchTypeID";
$proto9["m_columns"][] = "researchConsiderNumber";
$proto9["m_columns"][] = "processName";
$proto9["m_columns"][] = "stepName";
$proto9["m_columns"][] = "researchConsiderFile";
$proto9["m_columns"][] = "researchRegisterDesc";
$proto9["m_columns"][] = "researchConsiderName";
$proto9["m_columns"][] = "entryUserName";
$proto9["m_columns"][] = "entryTime";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "researchConsider";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "optionSub1";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="optionSub1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub1 = createSqlQuery_optionsub1();


	
				;

	

$tdataoptionsub1[".sqlquery"] = $queryData_optionsub1;



$tableEvents["optionSub1"] = new eventsBase;
$tdataoptionsub1[".hasEvents"] = false;

?>