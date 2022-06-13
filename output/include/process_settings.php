<?php
$tdataprocess = array();
$tdataprocess[".searchableFields"] = array();
$tdataprocess[".ShortName"] = "process";
$tdataprocess[".OwnerID"] = "";
$tdataprocess[".OriginalTable"] = "process";


$tdataprocess[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprocess[".originalPagesByType"] = $tdataprocess[".pagesByType"];
$tdataprocess[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprocess[".originalPages"] = $tdataprocess[".pages"];
$tdataprocess[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprocess[".originalDefaultPages"] = $tdataprocess[".defaultPages"];

//	field labels
$fieldLabelsprocess = array();
$fieldToolTipsprocess = array();
$pageTitlesprocess = array();
$placeHoldersprocess = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocess["English"] = array();
	$fieldToolTipsprocess["English"] = array();
	$placeHoldersprocess["English"] = array();
	$pageTitlesprocess["English"] = array();
	$fieldLabelsprocess["English"]["id"] = "Id";
	$fieldToolTipsprocess["English"]["id"] = "";
	$placeHoldersprocess["English"]["id"] = "";
	$fieldLabelsprocess["English"]["processName"] = "Process Name";
	$fieldToolTipsprocess["English"]["processName"] = "";
	$placeHoldersprocess["English"]["processName"] = "";
	$fieldLabelsprocess["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprocess["English"]["entryUserName"] = "";
	$placeHoldersprocess["English"]["entryUserName"] = "";
	$fieldLabelsprocess["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprocess["English"]["entryTime"] = "";
	$placeHoldersprocess["English"]["entryTime"] = "";
	if (count($fieldToolTipsprocess["English"]))
		$tdataprocess[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprocess["Thai"] = array();
	$fieldToolTipsprocess["Thai"] = array();
	$placeHoldersprocess["Thai"] = array();
	$pageTitlesprocess["Thai"] = array();
	$fieldLabelsprocess["Thai"]["id"] = "Id";
	$fieldToolTipsprocess["Thai"]["id"] = "";
	$placeHoldersprocess["Thai"]["id"] = "";
	$fieldLabelsprocess["Thai"]["processName"] = "ชื่อกระบวนการ";
	$fieldToolTipsprocess["Thai"]["processName"] = "";
	$placeHoldersprocess["Thai"]["processName"] = "";
	$fieldLabelsprocess["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprocess["Thai"]["entryUserName"] = "";
	$placeHoldersprocess["Thai"]["entryUserName"] = "";
	$fieldLabelsprocess["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprocess["Thai"]["entryTime"] = "";
	$placeHoldersprocess["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsprocess["Thai"]))
		$tdataprocess[".isUseToolTips"] = true;
}


	$tdataprocess[".NCSearch"] = true;



$tdataprocess[".shortTableName"] = "process";
$tdataprocess[".nSecOptions"] = 0;

$tdataprocess[".mainTableOwnerID"] = "";
$tdataprocess[".entityType"] = 0;
$tdataprocess[".connId"] = "mc_at_192_168_1_111";


$tdataprocess[".strOriginalTableName"] = "process";

	



$tdataprocess[".showAddInPopup"] = false;

$tdataprocess[".showEditInPopup"] = false;

$tdataprocess[".showViewInPopup"] = false;

$tdataprocess[".listAjax"] = false;
//	temporary
//$tdataprocess[".listAjax"] = false;

	$tdataprocess[".audit"] = false;

	$tdataprocess[".locking"] = false;


$pages = $tdataprocess[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocess[".edit"] = true;
	$tdataprocess[".afterEditAction"] = 1;
	$tdataprocess[".closePopupAfterEdit"] = 1;
	$tdataprocess[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocess[".add"] = true;
$tdataprocess[".afterAddAction"] = 1;
$tdataprocess[".closePopupAfterAdd"] = 1;
$tdataprocess[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocess[".list"] = true;
}



$tdataprocess[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocess[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocess[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocess[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocess[".printFriendly"] = true;
}



$tdataprocess[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocess[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocess[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocess[".isUseAjaxSuggest"] = true;

$tdataprocess[".rowHighlite"] = true;





$tdataprocess[".ajaxCodeSnippetAdded"] = false;

$tdataprocess[".buttonsAdded"] = false;

$tdataprocess[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocess[".isUseTimeForSearch"] = false;


$tdataprocess[".badgeColor"] = "6B8E23";


$tdataprocess[".allSearchFields"] = array();
$tdataprocess[".filterFields"] = array();
$tdataprocess[".requiredSearchFields"] = array();

$tdataprocess[".googleLikeFields"] = array();
$tdataprocess[".googleLikeFields"][] = "id";
$tdataprocess[".googleLikeFields"][] = "processName";
$tdataprocess[".googleLikeFields"][] = "entryUserName";
$tdataprocess[".googleLikeFields"][] = "entryTime";



$tdataprocess[".tableType"] = "list";

$tdataprocess[".printerPageOrientation"] = 0;
$tdataprocess[".nPrinterPageScale"] = 100;

$tdataprocess[".nPrinterSplitRecords"] = 40;

$tdataprocess[".geocodingEnabled"] = false;










$tdataprocess[".pageSize"] = 20;

$tdataprocess[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprocess[".strOrderBy"] = $tstrOrderBy;

$tdataprocess[".orderindexes"] = array();


$tdataprocess[".sqlHead"] = "SELECT id,  	processName,  	entryUserName,  	entryTime";
$tdataprocess[".sqlFrom"] = "FROM process";
$tdataprocess[".sqlWhereExpr"] = "";
$tdataprocess[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocess[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocess[".arrGroupsPerPage"] = $arrGPP;

$tdataprocess[".highlightSearchResults"] = true;

$tableKeysprocess = array();
$tableKeysprocess[] = "id";
$tdataprocess[".Keys"] = $tableKeysprocess;


$tdataprocess[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "process";
	$fdata["Label"] = GetFieldLabel("process","id");
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


	$tdataprocess["id"] = $fdata;
		$tdataprocess[".searchableFields"][] = "id";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "process";
	$fdata["Label"] = GetFieldLabel("process","processName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "processName";

		$fdata["sourceSingle"] = "processName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "processName";

	
	
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


	$tdataprocess["processName"] = $fdata;
		$tdataprocess[".searchableFields"][] = "processName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "process";
	$fdata["Label"] = GetFieldLabel("process","entryUserName");
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


	$tdataprocess["entryUserName"] = $fdata;
		$tdataprocess[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "process";
	$fdata["Label"] = GetFieldLabel("process","entryTime");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataprocess["entryTime"] = $fdata;
		$tdataprocess[".searchableFields"][] = "entryTime";


$tables_data["process"]=&$tdataprocess;
$field_labels["process"] = &$fieldLabelsprocess;
$fieldToolTips["process"] = &$fieldToolTipsprocess;
$placeHolders["process"] = &$placeHoldersprocess;
$page_titles["process"] = &$pageTitlesprocess;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["process"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["process"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_process()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	processName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM process";
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
	"m_strTable" => "process",
	"m_srcTableName" => "process"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "process";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "process",
	"m_srcTableName" => "process"
));

$proto8["m_sql"] = "processName";
$proto8["m_srcTableName"] = "process";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "process",
	"m_srcTableName" => "process"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "process";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "process",
	"m_srcTableName" => "process"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "process";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "process";
$proto15["m_srcTableName"] = "process";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "processName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "process";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "process";
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
$proto0["m_srcTableName"]="process";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_process = createSqlQuery_process();


	
				;

				

$tdataprocess[".sqlquery"] = $queryData_process;



$tableEvents["process"] = new eventsBase;
$tdataprocess[".hasEvents"] = false;

?>