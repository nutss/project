<?php
$tdataamphures = array();
$tdataamphures[".searchableFields"] = array();
$tdataamphures[".ShortName"] = "amphures";
$tdataamphures[".OwnerID"] = "";
$tdataamphures[".OriginalTable"] = "amphures";


$tdataamphures[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataamphures[".originalPagesByType"] = $tdataamphures[".pagesByType"];
$tdataamphures[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataamphures[".originalPages"] = $tdataamphures[".pages"];
$tdataamphures[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataamphures[".originalDefaultPages"] = $tdataamphures[".defaultPages"];

//	field labels
$fieldLabelsamphures = array();
$fieldToolTipsamphures = array();
$pageTitlesamphures = array();
$placeHoldersamphures = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsamphures["English"] = array();
	$fieldToolTipsamphures["English"] = array();
	$placeHoldersamphures["English"] = array();
	$pageTitlesamphures["English"] = array();
	$fieldLabelsamphures["English"]["id"] = "Id";
	$fieldToolTipsamphures["English"]["id"] = "";
	$placeHoldersamphures["English"]["id"] = "";
	$fieldLabelsamphures["English"]["code"] = "Code";
	$fieldToolTipsamphures["English"]["code"] = "";
	$placeHoldersamphures["English"]["code"] = "";
	$fieldLabelsamphures["English"]["name_th"] = "Name Th";
	$fieldToolTipsamphures["English"]["name_th"] = "";
	$placeHoldersamphures["English"]["name_th"] = "";
	$fieldLabelsamphures["English"]["name_en"] = "Name En";
	$fieldToolTipsamphures["English"]["name_en"] = "";
	$placeHoldersamphures["English"]["name_en"] = "";
	$fieldLabelsamphures["English"]["province_id"] = "Province Id";
	$fieldToolTipsamphures["English"]["province_id"] = "";
	$placeHoldersamphures["English"]["province_id"] = "";
	if (count($fieldToolTipsamphures["English"]))
		$tdataamphures[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsamphures["Thai"] = array();
	$fieldToolTipsamphures["Thai"] = array();
	$placeHoldersamphures["Thai"] = array();
	$pageTitlesamphures["Thai"] = array();
	$fieldLabelsamphures["Thai"]["id"] = "ID";
	$fieldToolTipsamphures["Thai"]["id"] = "";
	$placeHoldersamphures["Thai"]["id"] = "";
	$fieldLabelsamphures["Thai"]["code"] = "รหัส เขต/อำเภอ";
	$fieldToolTipsamphures["Thai"]["code"] = "";
	$placeHoldersamphures["Thai"]["code"] = "";
	$fieldLabelsamphures["Thai"]["name_th"] = "เขต/อำเภอ";
	$fieldToolTipsamphures["Thai"]["name_th"] = "";
	$placeHoldersamphures["Thai"]["name_th"] = "";
	$fieldLabelsamphures["Thai"]["name_en"] = "Name En";
	$fieldToolTipsamphures["Thai"]["name_en"] = "";
	$placeHoldersamphures["Thai"]["name_en"] = "";
	$fieldLabelsamphures["Thai"]["province_id"] = "ProvinceID";
	$fieldToolTipsamphures["Thai"]["province_id"] = "";
	$placeHoldersamphures["Thai"]["province_id"] = "";
	if (count($fieldToolTipsamphures["Thai"]))
		$tdataamphures[".isUseToolTips"] = true;
}


	$tdataamphures[".NCSearch"] = true;



$tdataamphures[".shortTableName"] = "amphures";
$tdataamphures[".nSecOptions"] = 0;

$tdataamphures[".mainTableOwnerID"] = "";
$tdataamphures[".entityType"] = 0;
$tdataamphures[".connId"] = "mc_at_192_168_1_111";


$tdataamphures[".strOriginalTableName"] = "amphures";

	



$tdataamphures[".showAddInPopup"] = false;

$tdataamphures[".showEditInPopup"] = false;

$tdataamphures[".showViewInPopup"] = false;

$tdataamphures[".listAjax"] = false;
//	temporary
//$tdataamphures[".listAjax"] = false;

	$tdataamphures[".audit"] = false;

	$tdataamphures[".locking"] = false;


$pages = $tdataamphures[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataamphures[".edit"] = true;
	$tdataamphures[".afterEditAction"] = 1;
	$tdataamphures[".closePopupAfterEdit"] = 1;
	$tdataamphures[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataamphures[".add"] = true;
$tdataamphures[".afterAddAction"] = 1;
$tdataamphures[".closePopupAfterAdd"] = 1;
$tdataamphures[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataamphures[".list"] = true;
}



$tdataamphures[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataamphures[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataamphures[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataamphures[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataamphures[".printFriendly"] = true;
}



$tdataamphures[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataamphures[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataamphures[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataamphures[".isUseAjaxSuggest"] = true;

$tdataamphures[".rowHighlite"] = true;



						

$tdataamphures[".ajaxCodeSnippetAdded"] = false;

$tdataamphures[".buttonsAdded"] = false;

$tdataamphures[".addPageEvents"] = false;

// use timepicker for search panel
$tdataamphures[".isUseTimeForSearch"] = false;


$tdataamphures[".badgeColor"] = "5F9EA0";


$tdataamphures[".allSearchFields"] = array();
$tdataamphures[".filterFields"] = array();
$tdataamphures[".requiredSearchFields"] = array();

$tdataamphures[".googleLikeFields"] = array();
$tdataamphures[".googleLikeFields"][] = "id";
$tdataamphures[".googleLikeFields"][] = "code";
$tdataamphures[".googleLikeFields"][] = "name_th";
$tdataamphures[".googleLikeFields"][] = "name_en";
$tdataamphures[".googleLikeFields"][] = "province_id";



$tdataamphures[".tableType"] = "list";

$tdataamphures[".printerPageOrientation"] = 0;
$tdataamphures[".nPrinterPageScale"] = 100;

$tdataamphures[".nPrinterSplitRecords"] = 40;

$tdataamphures[".geocodingEnabled"] = false;










$tdataamphures[".pageSize"] = 20;

$tdataamphures[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataamphures[".strOrderBy"] = $tstrOrderBy;

$tdataamphures[".orderindexes"] = array();


$tdataamphures[".sqlHead"] = "SELECT id,  	code,  	name_th,  	name_en,  	province_id";
$tdataamphures[".sqlFrom"] = "FROM amphures";
$tdataamphures[".sqlWhereExpr"] = "";
$tdataamphures[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataamphures[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataamphures[".arrGroupsPerPage"] = $arrGPP;

$tdataamphures[".highlightSearchResults"] = true;

$tableKeysamphures = array();
$tableKeysamphures[] = "id";
$tdataamphures[".Keys"] = $tableKeysamphures;


$tdataamphures[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "amphures";
	$fdata["Label"] = GetFieldLabel("amphures","id");
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


	$tdataamphures["id"] = $fdata;
		$tdataamphures[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "amphures";
	$fdata["Label"] = GetFieldLabel("amphures","code");
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdataamphures["code"] = $fdata;
		$tdataamphures[".searchableFields"][] = "code";
//	name_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name_th";
	$fdata["GoodName"] = "name_th";
	$fdata["ownerTable"] = "amphures";
	$fdata["Label"] = GetFieldLabel("amphures","name_th");
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


	$tdataamphures["name_th"] = $fdata;
		$tdataamphures[".searchableFields"][] = "name_th";
//	name_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_en";
	$fdata["GoodName"] = "name_en";
	$fdata["ownerTable"] = "amphures";
	$fdata["Label"] = GetFieldLabel("amphures","name_en");
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


	$tdataamphures["name_en"] = $fdata;
		$tdataamphures[".searchableFields"][] = "name_en";
//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "amphures";
	$fdata["Label"] = GetFieldLabel("amphures","province_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "province_id";

		$fdata["sourceSingle"] = "province_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province_id";

	
	
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


	$tdataamphures["province_id"] = $fdata;
		$tdataamphures[".searchableFields"][] = "province_id";


$tables_data["amphures"]=&$tdataamphures;
$field_labels["amphures"] = &$fieldLabelsamphures;
$fieldToolTips["amphures"] = &$fieldToolTipsamphures;
$placeHolders["amphures"] = &$placeHoldersamphures;
$page_titles["amphures"] = &$pageTitlesamphures;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["amphures"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["amphures"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_amphures()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	name_th,  	name_en,  	province_id";
$proto0["m_strFrom"] = "FROM amphures";
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
	"m_strTable" => "amphures",
	"m_srcTableName" => "amphures"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "amphures";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "amphures",
	"m_srcTableName" => "amphures"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "amphures";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name_th",
	"m_strTable" => "amphures",
	"m_srcTableName" => "amphures"
));

$proto10["m_sql"] = "name_th";
$proto10["m_srcTableName"] = "amphures";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name_en",
	"m_strTable" => "amphures",
	"m_srcTableName" => "amphures"
));

$proto12["m_sql"] = "name_en";
$proto12["m_srcTableName"] = "amphures";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "province_id",
	"m_strTable" => "amphures",
	"m_srcTableName" => "amphures"
));

$proto14["m_sql"] = "province_id";
$proto14["m_srcTableName"] = "amphures";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "amphures";
$proto17["m_srcTableName"] = "amphures";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "code";
$proto17["m_columns"][] = "name_th";
$proto17["m_columns"][] = "name_en";
$proto17["m_columns"][] = "province_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "amphures";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "amphures";
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
$proto0["m_srcTableName"]="amphures";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_amphures = createSqlQuery_amphures();


	
				;

					

$tdataamphures[".sqlquery"] = $queryData_amphures;



$tableEvents["amphures"] = new eventsBase;
$tdataamphures[".hasEvents"] = false;

?>