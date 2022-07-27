<?php
$tdataprovinces = array();
$tdataprovinces[".searchableFields"] = array();
$tdataprovinces[".ShortName"] = "provinces";
$tdataprovinces[".OwnerID"] = "";
$tdataprovinces[".OriginalTable"] = "provinces";


$tdataprovinces[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataprovinces[".originalPagesByType"] = $tdataprovinces[".pagesByType"];
$tdataprovinces[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataprovinces[".originalPages"] = $tdataprovinces[".pages"];
$tdataprovinces[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataprovinces[".originalDefaultPages"] = $tdataprovinces[".defaultPages"];

//	field labels
$fieldLabelsprovinces = array();
$fieldToolTipsprovinces = array();
$pageTitlesprovinces = array();
$placeHoldersprovinces = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprovinces["English"] = array();
	$fieldToolTipsprovinces["English"] = array();
	$placeHoldersprovinces["English"] = array();
	$pageTitlesprovinces["English"] = array();
	$fieldLabelsprovinces["English"]["id"] = "Id";
	$fieldToolTipsprovinces["English"]["id"] = "";
	$placeHoldersprovinces["English"]["id"] = "";
	$fieldLabelsprovinces["English"]["code"] = "Code";
	$fieldToolTipsprovinces["English"]["code"] = "";
	$placeHoldersprovinces["English"]["code"] = "";
	$fieldLabelsprovinces["English"]["name_th"] = "Name Th";
	$fieldToolTipsprovinces["English"]["name_th"] = "";
	$placeHoldersprovinces["English"]["name_th"] = "";
	$fieldLabelsprovinces["English"]["name_en"] = "Name En";
	$fieldToolTipsprovinces["English"]["name_en"] = "";
	$placeHoldersprovinces["English"]["name_en"] = "";
	$fieldLabelsprovinces["English"]["geography_id"] = "Geography Id";
	$fieldToolTipsprovinces["English"]["geography_id"] = "";
	$placeHoldersprovinces["English"]["geography_id"] = "";
	if (count($fieldToolTipsprovinces["English"]))
		$tdataprovinces[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprovinces["Thai"] = array();
	$fieldToolTipsprovinces["Thai"] = array();
	$placeHoldersprovinces["Thai"] = array();
	$pageTitlesprovinces["Thai"] = array();
	$fieldLabelsprovinces["Thai"]["id"] = "ID";
	$fieldToolTipsprovinces["Thai"]["id"] = "";
	$placeHoldersprovinces["Thai"]["id"] = "";
	$fieldLabelsprovinces["Thai"]["code"] = "รหัสจังหวัด";
	$fieldToolTipsprovinces["Thai"]["code"] = "";
	$placeHoldersprovinces["Thai"]["code"] = "";
	$fieldLabelsprovinces["Thai"]["name_th"] = "จังหวัด";
	$fieldToolTipsprovinces["Thai"]["name_th"] = "";
	$placeHoldersprovinces["Thai"]["name_th"] = "";
	$fieldLabelsprovinces["Thai"]["name_en"] = "Provinces";
	$fieldToolTipsprovinces["Thai"]["name_en"] = "";
	$placeHoldersprovinces["Thai"]["name_en"] = "";
	$fieldLabelsprovinces["Thai"]["geography_id"] = "Geography Id";
	$fieldToolTipsprovinces["Thai"]["geography_id"] = "";
	$placeHoldersprovinces["Thai"]["geography_id"] = "";
	if (count($fieldToolTipsprovinces["Thai"]))
		$tdataprovinces[".isUseToolTips"] = true;
}


	$tdataprovinces[".NCSearch"] = true;



$tdataprovinces[".shortTableName"] = "provinces";
$tdataprovinces[".nSecOptions"] = 0;

$tdataprovinces[".mainTableOwnerID"] = "";
$tdataprovinces[".entityType"] = 0;
$tdataprovinces[".connId"] = "mc_at_192_168_1_111";


$tdataprovinces[".strOriginalTableName"] = "provinces";

	



$tdataprovinces[".showAddInPopup"] = false;

$tdataprovinces[".showEditInPopup"] = false;

$tdataprovinces[".showViewInPopup"] = false;

$tdataprovinces[".listAjax"] = false;
//	temporary
//$tdataprovinces[".listAjax"] = false;

	$tdataprovinces[".audit"] = false;

	$tdataprovinces[".locking"] = false;


$pages = $tdataprovinces[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprovinces[".edit"] = true;
	$tdataprovinces[".afterEditAction"] = 1;
	$tdataprovinces[".closePopupAfterEdit"] = 1;
	$tdataprovinces[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprovinces[".add"] = true;
$tdataprovinces[".afterAddAction"] = 1;
$tdataprovinces[".closePopupAfterAdd"] = 1;
$tdataprovinces[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprovinces[".list"] = true;
}



$tdataprovinces[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprovinces[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprovinces[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprovinces[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprovinces[".printFriendly"] = true;
}



$tdataprovinces[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprovinces[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprovinces[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprovinces[".isUseAjaxSuggest"] = true;

$tdataprovinces[".rowHighlite"] = true;



						

$tdataprovinces[".ajaxCodeSnippetAdded"] = false;

$tdataprovinces[".buttonsAdded"] = false;

$tdataprovinces[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprovinces[".isUseTimeForSearch"] = false;


$tdataprovinces[".badgeColor"] = "9ACD32";


$tdataprovinces[".allSearchFields"] = array();
$tdataprovinces[".filterFields"] = array();
$tdataprovinces[".requiredSearchFields"] = array();

$tdataprovinces[".googleLikeFields"] = array();
$tdataprovinces[".googleLikeFields"][] = "id";
$tdataprovinces[".googleLikeFields"][] = "code";
$tdataprovinces[".googleLikeFields"][] = "name_th";
$tdataprovinces[".googleLikeFields"][] = "name_en";
$tdataprovinces[".googleLikeFields"][] = "geography_id";



$tdataprovinces[".tableType"] = "list";

$tdataprovinces[".printerPageOrientation"] = 0;
$tdataprovinces[".nPrinterPageScale"] = 100;

$tdataprovinces[".nPrinterSplitRecords"] = 40;

$tdataprovinces[".geocodingEnabled"] = false;










$tdataprovinces[".pageSize"] = 20;

$tdataprovinces[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprovinces[".strOrderBy"] = $tstrOrderBy;

$tdataprovinces[".orderindexes"] = array();


$tdataprovinces[".sqlHead"] = "SELECT id,  	code,  	name_th,  	name_en,  	geography_id";
$tdataprovinces[".sqlFrom"] = "FROM provinces";
$tdataprovinces[".sqlWhereExpr"] = "";
$tdataprovinces[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprovinces[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprovinces[".arrGroupsPerPage"] = $arrGPP;

$tdataprovinces[".highlightSearchResults"] = true;

$tableKeysprovinces = array();
$tableKeysprovinces[] = "id";
$tdataprovinces[".Keys"] = $tableKeysprovinces;


$tdataprovinces[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","id");
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


	$tdataprovinces["id"] = $fdata;
		$tdataprovinces[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "code";

		$fdata["sourceSingle"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataprovinces["code"] = $fdata;
		$tdataprovinces[".searchableFields"][] = "code";
//	name_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name_th";
	$fdata["GoodName"] = "name_th";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","name_th");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name_th";

		$fdata["sourceSingle"] = "name_th";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_th";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataprovinces["name_th"] = $fdata;
		$tdataprovinces[".searchableFields"][] = "name_th";
//	name_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_en";
	$fdata["GoodName"] = "name_en";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","name_en");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name_en";

		$fdata["sourceSingle"] = "name_en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_en";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataprovinces["name_en"] = $fdata;
		$tdataprovinces[".searchableFields"][] = "name_en";
//	geography_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "geography_id";
	$fdata["GoodName"] = "geography_id";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","geography_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "geography_id";

		$fdata["sourceSingle"] = "geography_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "geography_id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataprovinces["geography_id"] = $fdata;
		$tdataprovinces[".searchableFields"][] = "geography_id";


$tables_data["provinces"]=&$tdataprovinces;
$field_labels["provinces"] = &$fieldLabelsprovinces;
$fieldToolTips["provinces"] = &$fieldToolTipsprovinces;
$placeHolders["provinces"] = &$placeHoldersprovinces;
$page_titles["provinces"] = &$pageTitlesprovinces;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["provinces"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["provinces"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_provinces()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	name_th,  	name_en,  	geography_id";
$proto0["m_strFrom"] = "FROM provinces";
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
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "provinces";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "provinces";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name_th",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto10["m_sql"] = "name_th";
$proto10["m_srcTableName"] = "provinces";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name_en",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto12["m_sql"] = "name_en";
$proto12["m_srcTableName"] = "provinces";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "geography_id",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto14["m_sql"] = "geography_id";
$proto14["m_srcTableName"] = "provinces";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "provinces";
$proto17["m_srcTableName"] = "provinces";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "code";
$proto17["m_columns"][] = "name_th";
$proto17["m_columns"][] = "name_en";
$proto17["m_columns"][] = "geography_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "provinces";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "provinces";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="provinces";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_provinces = createSqlQuery_provinces();


	
				;

					

$tdataprovinces[".sqlquery"] = $queryData_provinces;



$tableEvents["provinces"] = new eventsBase;
$tdataprovinces[".hasEvents"] = false;

?>