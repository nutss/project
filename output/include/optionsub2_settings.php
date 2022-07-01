<?php
$tdataoptionsub2 = array();
$tdataoptionsub2[".searchableFields"] = array();
$tdataoptionsub2[".ShortName"] = "optionsub2";
$tdataoptionsub2[".OwnerID"] = "";
$tdataoptionsub2[".OriginalTable"] = "optionSub";


$tdataoptionsub2[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptionsub2[".originalPagesByType"] = $tdataoptionsub2[".pagesByType"];
$tdataoptionsub2[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptionsub2[".originalPages"] = $tdataoptionsub2[".pages"];
$tdataoptionsub2[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptionsub2[".originalDefaultPages"] = $tdataoptionsub2[".defaultPages"];

//	field labels
$fieldLabelsoptionsub2 = array();
$fieldToolTipsoptionsub2 = array();
$pageTitlesoptionsub2 = array();
$placeHoldersoptionsub2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptionsub2["English"] = array();
	$fieldToolTipsoptionsub2["English"] = array();
	$placeHoldersoptionsub2["English"] = array();
	$pageTitlesoptionsub2["English"] = array();
	$fieldLabelsoptionsub2["English"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
	$fieldToolTipsoptionsub2["English"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "";
	$placeHoldersoptionsub2["English"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "";
	$fieldLabelsoptionsub2["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub2["English"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub2["English"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub2["English"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub2["English"]["processName"] = "";
	$placeHoldersoptionsub2["English"]["processName"] = "";
	if (count($fieldToolTipsoptionsub2["English"]))
		$tdataoptionsub2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptionsub2["Thai"] = array();
	$fieldToolTipsoptionsub2["Thai"] = array();
	$placeHoldersoptionsub2["Thai"] = array();
	$pageTitlesoptionsub2["Thai"] = array();
	$fieldLabelsoptionsub2["Thai"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
	$fieldToolTipsoptionsub2["Thai"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "";
	$placeHoldersoptionsub2["Thai"]["SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__"] = "";
	$fieldLabelsoptionsub2["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsoptionsub2["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersoptionsub2["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsoptionsub2["Thai"]["processName"] = "Process Name";
	$fieldToolTipsoptionsub2["Thai"]["processName"] = "";
	$placeHoldersoptionsub2["Thai"]["processName"] = "";
	if (count($fieldToolTipsoptionsub2["Thai"]))
		$tdataoptionsub2[".isUseToolTips"] = true;
}


	$tdataoptionsub2[".NCSearch"] = true;



$tdataoptionsub2[".shortTableName"] = "optionsub2";
$tdataoptionsub2[".nSecOptions"] = 0;

$tdataoptionsub2[".mainTableOwnerID"] = "";
$tdataoptionsub2[".entityType"] = 1;
$tdataoptionsub2[".connId"] = "mc_at_192_168_1_111";


$tdataoptionsub2[".strOriginalTableName"] = "optionSub";

	



$tdataoptionsub2[".showAddInPopup"] = false;

$tdataoptionsub2[".showEditInPopup"] = false;

$tdataoptionsub2[".showViewInPopup"] = false;

$tdataoptionsub2[".listAjax"] = false;
//	temporary
//$tdataoptionsub2[".listAjax"] = false;

	$tdataoptionsub2[".audit"] = true;

	$tdataoptionsub2[".locking"] = false;


$pages = $tdataoptionsub2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptionsub2[".edit"] = true;
	$tdataoptionsub2[".afterEditAction"] = 1;
	$tdataoptionsub2[".closePopupAfterEdit"] = 1;
	$tdataoptionsub2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptionsub2[".add"] = true;
$tdataoptionsub2[".afterAddAction"] = 1;
$tdataoptionsub2[".closePopupAfterAdd"] = 1;
$tdataoptionsub2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptionsub2[".list"] = true;
}



$tdataoptionsub2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptionsub2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptionsub2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptionsub2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptionsub2[".printFriendly"] = true;
}



$tdataoptionsub2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptionsub2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptionsub2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptionsub2[".isUseAjaxSuggest"] = true;

$tdataoptionsub2[".rowHighlite"] = true;





$tdataoptionsub2[".ajaxCodeSnippetAdded"] = false;

$tdataoptionsub2[".buttonsAdded"] = false;

$tdataoptionsub2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoptionsub2[".isUseTimeForSearch"] = false;


$tdataoptionsub2[".badgeColor"] = "4682B4";


$tdataoptionsub2[".allSearchFields"] = array();
$tdataoptionsub2[".filterFields"] = array();
$tdataoptionsub2[".requiredSearchFields"] = array();

$tdataoptionsub2[".googleLikeFields"] = array();
$tdataoptionsub2[".googleLikeFields"][] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
$tdataoptionsub2[".googleLikeFields"][] = "researchConsiderNumber";
$tdataoptionsub2[".googleLikeFields"][] = "processName";



$tdataoptionsub2[".tableType"] = "list";

$tdataoptionsub2[".printerPageOrientation"] = 0;
$tdataoptionsub2[".nPrinterPageScale"] = 100;

$tdataoptionsub2[".nPrinterSplitRecords"] = 40;

$tdataoptionsub2[".geocodingEnabled"] = false;










$tdataoptionsub2[".pageSize"] = 20;

$tdataoptionsub2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptionsub2[".strOrderBy"] = $tstrOrderBy;

$tdataoptionsub2[".orderindexes"] = array();


$tdataoptionsub2[".sqlHead"] = "  SELECT SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ),  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
$tdataoptionsub2[".sqlFrom"] = "FROM  	researchConsider";
$tdataoptionsub2[".sqlWhereExpr"] = "";
$tdataoptionsub2[".sqlTail"] = "UNION  SELECT  	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/',-1),  	researchConsider.researchConsiderNumber,  	researchConsider.processName   FROM  	researchConsider";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptionsub2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptionsub2[".arrGroupsPerPage"] = $arrGPP;

$tdataoptionsub2[".highlightSearchResults"] = true;

$tableKeysoptionsub2 = array();
$tdataoptionsub2[".Keys"] = $tableKeysoptionsub2;


$tdataoptionsub2[".hideMobileList"] = array();




//	SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
	$fdata["GoodName"] = "SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("optionSub2","SUBSTRING_INDEX__researchConsider_researchConsiderName_______1__");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";

	
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


	$tdataoptionsub2["SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )"] = $fdata;
		$tdataoptionsub2[".searchableFields"][] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 )";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub2","researchConsiderNumber");
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


	$tdataoptionsub2["researchConsiderNumber"] = $fdata;
		$tdataoptionsub2[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("optionSub2","processName");
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


	$tdataoptionsub2["processName"] = $fdata;
		$tdataoptionsub2[".searchableFields"][] = "processName";


$tables_data["optionSub2"]=&$tdataoptionsub2;
$field_labels["optionSub2"] = &$fieldLabelsoptionsub2;
$fieldToolTips["optionSub2"] = &$fieldToolTipsoptionsub2;
$placeHolders["optionSub2"] = &$placeHoldersoptionsub2;
$page_titles["optionSub2"] = &$pageTitlesoptionsub2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionSub2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionSub2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optionsub2()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "SUBSTRING_INDEX( researchConsider.researchConsiderName, '/', 1 ),  	researchConsider.researchConsiderNumber,  	researchConsider.processName";
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
$proto6["m_srcTableName"] = "optionSub2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub2"
));

$proto11["m_sql"] = "researchConsider.researchConsiderNumber";
$proto11["m_srcTableName"] = "optionSub2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "optionSub2"
));

$proto13["m_sql"] = "researchConsider.processName";
$proto13["m_srcTableName"] = "optionSub2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "researchConsider";
$proto16["m_srcTableName"] = "optionSub2";
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
$proto15["m_srcTableName"] = "optionSub2";
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
$proto0["m_srcTableName"]="optionSub2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optionsub2 = createSqlQuery_optionsub2();


	
				;

			

$tdataoptionsub2[".sqlquery"] = $queryData_optionsub2;



$tableEvents["optionSub2"] = new eventsBase;
$tdataoptionsub2[".hasEvents"] = false;

?>