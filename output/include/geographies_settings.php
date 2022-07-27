<?php
$tdatageographies = array();
$tdatageographies[".searchableFields"] = array();
$tdatageographies[".ShortName"] = "geographies";
$tdatageographies[".OwnerID"] = "";
$tdatageographies[".OriginalTable"] = "geographies";


$tdatageographies[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatageographies[".originalPagesByType"] = $tdatageographies[".pagesByType"];
$tdatageographies[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatageographies[".originalPages"] = $tdatageographies[".pages"];
$tdatageographies[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatageographies[".originalDefaultPages"] = $tdatageographies[".defaultPages"];

//	field labels
$fieldLabelsgeographies = array();
$fieldToolTipsgeographies = array();
$pageTitlesgeographies = array();
$placeHoldersgeographies = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgeographies["English"] = array();
	$fieldToolTipsgeographies["English"] = array();
	$placeHoldersgeographies["English"] = array();
	$pageTitlesgeographies["English"] = array();
	$fieldLabelsgeographies["English"]["id"] = "Id";
	$fieldToolTipsgeographies["English"]["id"] = "";
	$placeHoldersgeographies["English"]["id"] = "";
	$fieldLabelsgeographies["English"]["name"] = "Name";
	$fieldToolTipsgeographies["English"]["name"] = "";
	$placeHoldersgeographies["English"]["name"] = "";
	if (count($fieldToolTipsgeographies["English"]))
		$tdatageographies[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsgeographies["Thai"] = array();
	$fieldToolTipsgeographies["Thai"] = array();
	$placeHoldersgeographies["Thai"] = array();
	$pageTitlesgeographies["Thai"] = array();
	$fieldLabelsgeographies["Thai"]["id"] = "ID";
	$fieldToolTipsgeographies["Thai"]["id"] = "";
	$placeHoldersgeographies["Thai"]["id"] = "";
	$fieldLabelsgeographies["Thai"]["name"] = "ภาค";
	$fieldToolTipsgeographies["Thai"]["name"] = "";
	$placeHoldersgeographies["Thai"]["name"] = "";
	if (count($fieldToolTipsgeographies["Thai"]))
		$tdatageographies[".isUseToolTips"] = true;
}


	$tdatageographies[".NCSearch"] = true;



$tdatageographies[".shortTableName"] = "geographies";
$tdatageographies[".nSecOptions"] = 0;

$tdatageographies[".mainTableOwnerID"] = "";
$tdatageographies[".entityType"] = 0;
$tdatageographies[".connId"] = "mc_at_192_168_1_111";


$tdatageographies[".strOriginalTableName"] = "geographies";

	



$tdatageographies[".showAddInPopup"] = false;

$tdatageographies[".showEditInPopup"] = false;

$tdatageographies[".showViewInPopup"] = false;

$tdatageographies[".listAjax"] = false;
//	temporary
//$tdatageographies[".listAjax"] = false;

	$tdatageographies[".audit"] = false;

	$tdatageographies[".locking"] = false;


$pages = $tdatageographies[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatageographies[".edit"] = true;
	$tdatageographies[".afterEditAction"] = 1;
	$tdatageographies[".closePopupAfterEdit"] = 1;
	$tdatageographies[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatageographies[".add"] = true;
$tdatageographies[".afterAddAction"] = 1;
$tdatageographies[".closePopupAfterAdd"] = 1;
$tdatageographies[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatageographies[".list"] = true;
}



$tdatageographies[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatageographies[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatageographies[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatageographies[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatageographies[".printFriendly"] = true;
}



$tdatageographies[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatageographies[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatageographies[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatageographies[".isUseAjaxSuggest"] = true;

$tdatageographies[".rowHighlite"] = true;



						

$tdatageographies[".ajaxCodeSnippetAdded"] = false;

$tdatageographies[".buttonsAdded"] = false;

$tdatageographies[".addPageEvents"] = false;

// use timepicker for search panel
$tdatageographies[".isUseTimeForSearch"] = false;


$tdatageographies[".badgeColor"] = "B22222";


$tdatageographies[".allSearchFields"] = array();
$tdatageographies[".filterFields"] = array();
$tdatageographies[".requiredSearchFields"] = array();

$tdatageographies[".googleLikeFields"] = array();
$tdatageographies[".googleLikeFields"][] = "id";
$tdatageographies[".googleLikeFields"][] = "name";



$tdatageographies[".tableType"] = "list";

$tdatageographies[".printerPageOrientation"] = 0;
$tdatageographies[".nPrinterPageScale"] = 100;

$tdatageographies[".nPrinterSplitRecords"] = 40;

$tdatageographies[".geocodingEnabled"] = false;










$tdatageographies[".pageSize"] = 20;

$tdatageographies[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatageographies[".strOrderBy"] = $tstrOrderBy;

$tdatageographies[".orderindexes"] = array();


$tdatageographies[".sqlHead"] = "SELECT id,  	name";
$tdatageographies[".sqlFrom"] = "FROM geographies";
$tdatageographies[".sqlWhereExpr"] = "";
$tdatageographies[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatageographies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatageographies[".arrGroupsPerPage"] = $arrGPP;

$tdatageographies[".highlightSearchResults"] = true;

$tableKeysgeographies = array();
$tableKeysgeographies[] = "id";
$tdatageographies[".Keys"] = $tableKeysgeographies;


$tdatageographies[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "geographies";
	$fdata["Label"] = GetFieldLabel("geographies","id");
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


	$tdatageographies["id"] = $fdata;
		$tdatageographies[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "geographies";
	$fdata["Label"] = GetFieldLabel("geographies","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatageographies["name"] = $fdata;
		$tdatageographies[".searchableFields"][] = "name";


$tables_data["geographies"]=&$tdatageographies;
$field_labels["geographies"] = &$fieldLabelsgeographies;
$fieldToolTips["geographies"] = &$fieldToolTipsgeographies;
$placeHolders["geographies"] = &$placeHoldersgeographies;
$page_titles["geographies"] = &$pageTitlesgeographies;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["geographies"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["geographies"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_geographies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM geographies";
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
	"m_strTable" => "geographies",
	"m_srcTableName" => "geographies"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "geographies";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "geographies",
	"m_srcTableName" => "geographies"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "geographies";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "geographies";
$proto11["m_srcTableName"] = "geographies";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "geographies";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "geographies";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="geographies";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_geographies = createSqlQuery_geographies();


	
				;

		

$tdatageographies[".sqlquery"] = $queryData_geographies;



$tableEvents["geographies"] = new eventsBase;
$tdatageographies[".hasEvents"] = false;

?>