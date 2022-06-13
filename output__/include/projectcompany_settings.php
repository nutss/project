<?php
$tdataprojectcompany = array();
$tdataprojectcompany[".searchableFields"] = array();
$tdataprojectcompany[".ShortName"] = "projectcompany";
$tdataprojectcompany[".OwnerID"] = "";
$tdataprojectcompany[".OriginalTable"] = "ProjectCompany";


$tdataprojectcompany[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectcompany[".originalPagesByType"] = $tdataprojectcompany[".pagesByType"];
$tdataprojectcompany[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectcompany[".originalPages"] = $tdataprojectcompany[".pages"];
$tdataprojectcompany[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectcompany[".originalDefaultPages"] = $tdataprojectcompany[".defaultPages"];

//	field labels
$fieldLabelsprojectcompany = array();
$fieldToolTipsprojectcompany = array();
$pageTitlesprojectcompany = array();
$placeHoldersprojectcompany = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectcompany["English"] = array();
	$fieldToolTipsprojectcompany["English"] = array();
	$placeHoldersprojectcompany["English"] = array();
	$pageTitlesprojectcompany["English"] = array();
	$fieldLabelsprojectcompany["English"]["id"] = "ID";
	$fieldToolTipsprojectcompany["English"]["id"] = "";
	$placeHoldersprojectcompany["English"]["id"] = "";
	$fieldLabelsprojectcompany["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojectcompany["English"]["companyName"] = "";
	$placeHoldersprojectcompany["English"]["companyName"] = "";
	$fieldLabelsprojectcompany["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectcompany["English"]["entryUserName"] = "";
	$placeHoldersprojectcompany["English"]["entryUserName"] = "";
	$fieldLabelsprojectcompany["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectcompany["English"]["entryTime"] = "";
	$placeHoldersprojectcompany["English"]["entryTime"] = "";
	if (count($fieldToolTipsprojectcompany["English"]))
		$tdataprojectcompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectcompany["Thai"] = array();
	$fieldToolTipsprojectcompany["Thai"] = array();
	$placeHoldersprojectcompany["Thai"] = array();
	$pageTitlesprojectcompany["Thai"] = array();
	$fieldLabelsprojectcompany["Thai"]["id"] = "ID";
	$fieldToolTipsprojectcompany["Thai"]["id"] = "";
	$placeHoldersprojectcompany["Thai"]["id"] = "";
	$fieldLabelsprojectcompany["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojectcompany["Thai"]["companyName"] = "";
	$placeHoldersprojectcompany["Thai"]["companyName"] = "";
	$fieldLabelsprojectcompany["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprojectcompany["Thai"]["entryUserName"] = "";
	$placeHoldersprojectcompany["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectcompany["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectcompany["Thai"]["entryTime"] = "";
	$placeHoldersprojectcompany["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsprojectcompany["Thai"]))
		$tdataprojectcompany[".isUseToolTips"] = true;
}


	$tdataprojectcompany[".NCSearch"] = true;



$tdataprojectcompany[".shortTableName"] = "projectcompany";
$tdataprojectcompany[".nSecOptions"] = 0;

$tdataprojectcompany[".mainTableOwnerID"] = "";
$tdataprojectcompany[".entityType"] = 0;
$tdataprojectcompany[".connId"] = "mc_at_192_168_1_111";


$tdataprojectcompany[".strOriginalTableName"] = "ProjectCompany";

	



$tdataprojectcompany[".showAddInPopup"] = false;

$tdataprojectcompany[".showEditInPopup"] = false;

$tdataprojectcompany[".showViewInPopup"] = false;

$tdataprojectcompany[".listAjax"] = false;
//	temporary
//$tdataprojectcompany[".listAjax"] = false;

	$tdataprojectcompany[".audit"] = false;

	$tdataprojectcompany[".locking"] = false;


$pages = $tdataprojectcompany[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectcompany[".edit"] = true;
	$tdataprojectcompany[".afterEditAction"] = 1;
	$tdataprojectcompany[".closePopupAfterEdit"] = 1;
	$tdataprojectcompany[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectcompany[".add"] = true;
$tdataprojectcompany[".afterAddAction"] = 1;
$tdataprojectcompany[".closePopupAfterAdd"] = 1;
$tdataprojectcompany[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectcompany[".list"] = true;
}



$tdataprojectcompany[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectcompany[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectcompany[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectcompany[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectcompany[".printFriendly"] = true;
}



$tdataprojectcompany[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectcompany[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectcompany[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectcompany[".isUseAjaxSuggest"] = true;

$tdataprojectcompany[".rowHighlite"] = true;





$tdataprojectcompany[".ajaxCodeSnippetAdded"] = false;

$tdataprojectcompany[".buttonsAdded"] = false;

$tdataprojectcompany[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojectcompany[".isUseTimeForSearch"] = false;


$tdataprojectcompany[".badgeColor"] = "1E90FF";


$tdataprojectcompany[".allSearchFields"] = array();
$tdataprojectcompany[".filterFields"] = array();
$tdataprojectcompany[".requiredSearchFields"] = array();

$tdataprojectcompany[".googleLikeFields"] = array();
$tdataprojectcompany[".googleLikeFields"][] = "id";
$tdataprojectcompany[".googleLikeFields"][] = "companyName";
$tdataprojectcompany[".googleLikeFields"][] = "entryUserName";
$tdataprojectcompany[".googleLikeFields"][] = "entryTime";



$tdataprojectcompany[".tableType"] = "list";

$tdataprojectcompany[".printerPageOrientation"] = 0;
$tdataprojectcompany[".nPrinterPageScale"] = 100;

$tdataprojectcompany[".nPrinterSplitRecords"] = 40;

$tdataprojectcompany[".geocodingEnabled"] = false;










$tdataprojectcompany[".pageSize"] = 20;

$tdataprojectcompany[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectcompany[".strOrderBy"] = $tstrOrderBy;

$tdataprojectcompany[".orderindexes"] = array();


$tdataprojectcompany[".sqlHead"] = "SELECT id,  	companyName,  	entryUserName,  	entryTime";
$tdataprojectcompany[".sqlFrom"] = "FROM ProjectCompany";
$tdataprojectcompany[".sqlWhereExpr"] = "";
$tdataprojectcompany[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectcompany[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectcompany[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectcompany[".highlightSearchResults"] = true;

$tableKeysprojectcompany = array();
$tableKeysprojectcompany[] = "id";
$tdataprojectcompany[".Keys"] = $tableKeysprojectcompany;


$tdataprojectcompany[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ProjectCompany";
	$fdata["Label"] = GetFieldLabel("ProjectCompany","id");
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


	$tdataprojectcompany["id"] = $fdata;
		$tdataprojectcompany[".searchableFields"][] = "id";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "ProjectCompany";
	$fdata["Label"] = GetFieldLabel("ProjectCompany","companyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "companyName";

		$fdata["sourceSingle"] = "companyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "companyName";

	
	
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


	$tdataprojectcompany["companyName"] = $fdata;
		$tdataprojectcompany[".searchableFields"][] = "companyName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "ProjectCompany";
	$fdata["Label"] = GetFieldLabel("ProjectCompany","entryUserName");
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


	$tdataprojectcompany["entryUserName"] = $fdata;
		$tdataprojectcompany[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "ProjectCompany";
	$fdata["Label"] = GetFieldLabel("ProjectCompany","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectcompany["entryTime"] = $fdata;
		$tdataprojectcompany[".searchableFields"][] = "entryTime";


$tables_data["ProjectCompany"]=&$tdataprojectcompany;
$field_labels["ProjectCompany"] = &$fieldLabelsprojectcompany;
$fieldToolTips["ProjectCompany"] = &$fieldToolTipsprojectcompany;
$placeHolders["ProjectCompany"] = &$placeHoldersprojectcompany;
$page_titles["ProjectCompany"] = &$pageTitlesprojectcompany;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectCompany"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectCompany"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectcompany()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	companyName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM ProjectCompany";
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
	"m_strTable" => "ProjectCompany",
	"m_srcTableName" => "ProjectCompany"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ProjectCompany";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "ProjectCompany",
	"m_srcTableName" => "ProjectCompany"
));

$proto8["m_sql"] = "companyName";
$proto8["m_srcTableName"] = "ProjectCompany";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "ProjectCompany",
	"m_srcTableName" => "ProjectCompany"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "ProjectCompany";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "ProjectCompany",
	"m_srcTableName" => "ProjectCompany"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "ProjectCompany";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "ProjectCompany";
$proto15["m_srcTableName"] = "ProjectCompany";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "companyName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "ProjectCompany";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ProjectCompany";
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
$proto0["m_srcTableName"]="ProjectCompany";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectcompany = createSqlQuery_projectcompany();


	
				;

				

$tdataprojectcompany[".sqlquery"] = $queryData_projectcompany;



$tableEvents["ProjectCompany"] = new eventsBase;
$tdataprojectcompany[".hasEvents"] = false;

?>