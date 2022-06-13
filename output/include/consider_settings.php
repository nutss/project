<?php
$tdataconsider = array();
$tdataconsider[".searchableFields"] = array();
$tdataconsider[".ShortName"] = "consider";
$tdataconsider[".OwnerID"] = "";
$tdataconsider[".OriginalTable"] = "consider";


$tdataconsider[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsider[".originalPagesByType"] = $tdataconsider[".pagesByType"];
$tdataconsider[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsider[".originalPages"] = $tdataconsider[".pages"];
$tdataconsider[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsider[".originalDefaultPages"] = $tdataconsider[".defaultPages"];

//	field labels
$fieldLabelsconsider = array();
$fieldToolTipsconsider = array();
$pageTitlesconsider = array();
$placeHoldersconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsider["English"] = array();
	$fieldToolTipsconsider["English"] = array();
	$placeHoldersconsider["English"] = array();
	$pageTitlesconsider["English"] = array();
	$fieldLabelsconsider["English"]["id"] = "ID";
	$fieldToolTipsconsider["English"]["id"] = "";
	$placeHoldersconsider["English"]["id"] = "";
	$fieldLabelsconsider["English"]["considerName"] = "Consider Name";
	$fieldToolTipsconsider["English"]["considerName"] = "";
	$placeHoldersconsider["English"]["considerName"] = "";
	$fieldLabelsconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsconsider["English"]["entryUserName"] = "";
	$placeHoldersconsider["English"]["entryUserName"] = "";
	$fieldLabelsconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsconsider["English"]["entryTime"] = "";
	$placeHoldersconsider["English"]["entryTime"] = "";
	if (count($fieldToolTipsconsider["English"]))
		$tdataconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsconsider["Thai"] = array();
	$fieldToolTipsconsider["Thai"] = array();
	$placeHoldersconsider["Thai"] = array();
	$pageTitlesconsider["Thai"] = array();
	$fieldLabelsconsider["Thai"]["id"] = "ID";
	$fieldToolTipsconsider["Thai"]["id"] = "";
	$placeHoldersconsider["Thai"]["id"] = "";
	$fieldLabelsconsider["Thai"]["considerName"] = "ชื่อการพิจารณา";
	$fieldToolTipsconsider["Thai"]["considerName"] = "";
	$placeHoldersconsider["Thai"]["considerName"] = "";
	$fieldLabelsconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsconsider["Thai"]["entryUserName"] = "";
	$placeHoldersconsider["Thai"]["entryUserName"] = "";
	$fieldLabelsconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsconsider["Thai"]["entryTime"] = "";
	$placeHoldersconsider["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsconsider["Thai"]))
		$tdataconsider[".isUseToolTips"] = true;
}


	$tdataconsider[".NCSearch"] = true;



$tdataconsider[".shortTableName"] = "consider";
$tdataconsider[".nSecOptions"] = 0;

$tdataconsider[".mainTableOwnerID"] = "";
$tdataconsider[".entityType"] = 0;
$tdataconsider[".connId"] = "mc_at_192_168_1_111";


$tdataconsider[".strOriginalTableName"] = "consider";

	



$tdataconsider[".showAddInPopup"] = false;

$tdataconsider[".showEditInPopup"] = false;

$tdataconsider[".showViewInPopup"] = false;

$tdataconsider[".listAjax"] = false;
//	temporary
//$tdataconsider[".listAjax"] = false;

	$tdataconsider[".audit"] = false;

	$tdataconsider[".locking"] = false;


$pages = $tdataconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsider[".edit"] = true;
	$tdataconsider[".afterEditAction"] = 1;
	$tdataconsider[".closePopupAfterEdit"] = 1;
	$tdataconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsider[".add"] = true;
$tdataconsider[".afterAddAction"] = 1;
$tdataconsider[".closePopupAfterAdd"] = 1;
$tdataconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsider[".list"] = true;
}



$tdataconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsider[".printFriendly"] = true;
}



$tdataconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsider[".isUseAjaxSuggest"] = true;

$tdataconsider[".rowHighlite"] = true;





$tdataconsider[".ajaxCodeSnippetAdded"] = false;

$tdataconsider[".buttonsAdded"] = false;

$tdataconsider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsider[".isUseTimeForSearch"] = false;


$tdataconsider[".badgeColor"] = "6B8E23";


$tdataconsider[".allSearchFields"] = array();
$tdataconsider[".filterFields"] = array();
$tdataconsider[".requiredSearchFields"] = array();

$tdataconsider[".googleLikeFields"] = array();
$tdataconsider[".googleLikeFields"][] = "id";
$tdataconsider[".googleLikeFields"][] = "considerName";
$tdataconsider[".googleLikeFields"][] = "entryUserName";
$tdataconsider[".googleLikeFields"][] = "entryTime";



$tdataconsider[".tableType"] = "list";

$tdataconsider[".printerPageOrientation"] = 0;
$tdataconsider[".nPrinterPageScale"] = 100;

$tdataconsider[".nPrinterSplitRecords"] = 40;

$tdataconsider[".geocodingEnabled"] = false;










$tdataconsider[".pageSize"] = 20;

$tdataconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsider[".strOrderBy"] = $tstrOrderBy;

$tdataconsider[".orderindexes"] = array();


$tdataconsider[".sqlHead"] = "SELECT id,  	considerName,  	entryUserName,  	entryTime";
$tdataconsider[".sqlFrom"] = "FROM consider";
$tdataconsider[".sqlWhereExpr"] = "";
$tdataconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataconsider[".highlightSearchResults"] = true;

$tableKeysconsider = array();
$tableKeysconsider[] = "id";
$tdataconsider[".Keys"] = $tableKeysconsider;


$tdataconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "consider";
	$fdata["Label"] = GetFieldLabel("consider","id");
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


	$tdataconsider["id"] = $fdata;
		$tdataconsider[".searchableFields"][] = "id";
//	considerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "considerName";
	$fdata["GoodName"] = "considerName";
	$fdata["ownerTable"] = "consider";
	$fdata["Label"] = GetFieldLabel("consider","considerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "considerName";

		$fdata["sourceSingle"] = "considerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "considerName";

	
	
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


	$tdataconsider["considerName"] = $fdata;
		$tdataconsider[".searchableFields"][] = "considerName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "consider";
	$fdata["Label"] = GetFieldLabel("consider","entryUserName");
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


	$tdataconsider["entryUserName"] = $fdata;
		$tdataconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "consider";
	$fdata["Label"] = GetFieldLabel("consider","entryTime");
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


	$tdataconsider["entryTime"] = $fdata;
		$tdataconsider[".searchableFields"][] = "entryTime";


$tables_data["consider"]=&$tdataconsider;
$field_labels["consider"] = &$fieldLabelsconsider;
$fieldToolTips["consider"] = &$fieldToolTipsconsider;
$placeHolders["consider"] = &$placeHoldersconsider;
$page_titles["consider"] = &$pageTitlesconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["consider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["consider"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	considerName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM consider";
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
	"m_strTable" => "consider",
	"m_srcTableName" => "consider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "consider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "considerName",
	"m_strTable" => "consider",
	"m_srcTableName" => "consider"
));

$proto8["m_sql"] = "considerName";
$proto8["m_srcTableName"] = "consider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "consider",
	"m_srcTableName" => "consider"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "consider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "consider",
	"m_srcTableName" => "consider"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "consider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "consider";
$proto15["m_srcTableName"] = "consider";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "considerName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "consider";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "consider";
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
$proto0["m_srcTableName"]="consider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consider = createSqlQuery_consider();


	
				;

				

$tdataconsider[".sqlquery"] = $queryData_consider;



$tableEvents["consider"] = new eventsBase;
$tdataconsider[".hasEvents"] = false;

?>