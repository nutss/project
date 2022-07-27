<?php
$tdatadistricts = array();
$tdatadistricts[".searchableFields"] = array();
$tdatadistricts[".ShortName"] = "districts";
$tdatadistricts[".OwnerID"] = "";
$tdatadistricts[".OriginalTable"] = "districts";


$tdatadistricts[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatadistricts[".originalPagesByType"] = $tdatadistricts[".pagesByType"];
$tdatadistricts[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatadistricts[".originalPages"] = $tdatadistricts[".pages"];
$tdatadistricts[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatadistricts[".originalDefaultPages"] = $tdatadistricts[".defaultPages"];

//	field labels
$fieldLabelsdistricts = array();
$fieldToolTipsdistricts = array();
$pageTitlesdistricts = array();
$placeHoldersdistricts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdistricts["English"] = array();
	$fieldToolTipsdistricts["English"] = array();
	$placeHoldersdistricts["English"] = array();
	$pageTitlesdistricts["English"] = array();
	$fieldLabelsdistricts["English"]["id"] = "Id";
	$fieldToolTipsdistricts["English"]["id"] = "";
	$placeHoldersdistricts["English"]["id"] = "";
	$fieldLabelsdistricts["English"]["zip_code"] = "Zip Code";
	$fieldToolTipsdistricts["English"]["zip_code"] = "";
	$placeHoldersdistricts["English"]["zip_code"] = "";
	$fieldLabelsdistricts["English"]["name_th"] = "Name Th";
	$fieldToolTipsdistricts["English"]["name_th"] = "";
	$placeHoldersdistricts["English"]["name_th"] = "";
	$fieldLabelsdistricts["English"]["name_en"] = "Name En";
	$fieldToolTipsdistricts["English"]["name_en"] = "";
	$placeHoldersdistricts["English"]["name_en"] = "";
	$fieldLabelsdistricts["English"]["amphure_id"] = "Amphure Id";
	$fieldToolTipsdistricts["English"]["amphure_id"] = "";
	$placeHoldersdistricts["English"]["amphure_id"] = "";
	if (count($fieldToolTipsdistricts["English"]))
		$tdatadistricts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsdistricts["Thai"] = array();
	$fieldToolTipsdistricts["Thai"] = array();
	$placeHoldersdistricts["Thai"] = array();
	$pageTitlesdistricts["Thai"] = array();
	$fieldLabelsdistricts["Thai"]["id"] = "ID";
	$fieldToolTipsdistricts["Thai"]["id"] = "";
	$placeHoldersdistricts["Thai"]["id"] = "";
	$fieldLabelsdistricts["Thai"]["zip_code"] = "รหัสไปรษณีย์";
	$fieldToolTipsdistricts["Thai"]["zip_code"] = "";
	$placeHoldersdistricts["Thai"]["zip_code"] = "";
	$fieldLabelsdistricts["Thai"]["name_th"] = "แขวง/ตำบล";
	$fieldToolTipsdistricts["Thai"]["name_th"] = "";
	$placeHoldersdistricts["Thai"]["name_th"] = "";
	$fieldLabelsdistricts["Thai"]["name_en"] = "Districts";
	$fieldToolTipsdistricts["Thai"]["name_en"] = "";
	$placeHoldersdistricts["Thai"]["name_en"] = "";
	$fieldLabelsdistricts["Thai"]["amphure_id"] = "Amphure Id";
	$fieldToolTipsdistricts["Thai"]["amphure_id"] = "";
	$placeHoldersdistricts["Thai"]["amphure_id"] = "";
	if (count($fieldToolTipsdistricts["Thai"]))
		$tdatadistricts[".isUseToolTips"] = true;
}


	$tdatadistricts[".NCSearch"] = true;



$tdatadistricts[".shortTableName"] = "districts";
$tdatadistricts[".nSecOptions"] = 0;

$tdatadistricts[".mainTableOwnerID"] = "";
$tdatadistricts[".entityType"] = 0;
$tdatadistricts[".connId"] = "mc_at_192_168_1_111";


$tdatadistricts[".strOriginalTableName"] = "districts";

	



$tdatadistricts[".showAddInPopup"] = false;

$tdatadistricts[".showEditInPopup"] = false;

$tdatadistricts[".showViewInPopup"] = false;

$tdatadistricts[".listAjax"] = false;
//	temporary
//$tdatadistricts[".listAjax"] = false;

	$tdatadistricts[".audit"] = false;

	$tdatadistricts[".locking"] = false;


$pages = $tdatadistricts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadistricts[".edit"] = true;
	$tdatadistricts[".afterEditAction"] = 1;
	$tdatadistricts[".closePopupAfterEdit"] = 1;
	$tdatadistricts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadistricts[".add"] = true;
$tdatadistricts[".afterAddAction"] = 1;
$tdatadistricts[".closePopupAfterAdd"] = 1;
$tdatadistricts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadistricts[".list"] = true;
}



$tdatadistricts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadistricts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadistricts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadistricts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadistricts[".printFriendly"] = true;
}



$tdatadistricts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadistricts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadistricts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadistricts[".isUseAjaxSuggest"] = true;

$tdatadistricts[".rowHighlite"] = true;



						

$tdatadistricts[".ajaxCodeSnippetAdded"] = false;

$tdatadistricts[".buttonsAdded"] = false;

$tdatadistricts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadistricts[".isUseTimeForSearch"] = false;


$tdatadistricts[".badgeColor"] = "B22222";


$tdatadistricts[".allSearchFields"] = array();
$tdatadistricts[".filterFields"] = array();
$tdatadistricts[".requiredSearchFields"] = array();

$tdatadistricts[".googleLikeFields"] = array();
$tdatadistricts[".googleLikeFields"][] = "id";
$tdatadistricts[".googleLikeFields"][] = "zip_code";
$tdatadistricts[".googleLikeFields"][] = "name_th";
$tdatadistricts[".googleLikeFields"][] = "name_en";
$tdatadistricts[".googleLikeFields"][] = "amphure_id";



$tdatadistricts[".tableType"] = "list";

$tdatadistricts[".printerPageOrientation"] = 0;
$tdatadistricts[".nPrinterPageScale"] = 100;

$tdatadistricts[".nPrinterSplitRecords"] = 40;

$tdatadistricts[".geocodingEnabled"] = false;










$tdatadistricts[".pageSize"] = 20;

$tdatadistricts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadistricts[".strOrderBy"] = $tstrOrderBy;

$tdatadistricts[".orderindexes"] = array();


$tdatadistricts[".sqlHead"] = "SELECT id,  	zip_code,  	name_th,  	name_en,  	amphure_id";
$tdatadistricts[".sqlFrom"] = "FROM districts";
$tdatadistricts[".sqlWhereExpr"] = "";
$tdatadistricts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadistricts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadistricts[".arrGroupsPerPage"] = $arrGPP;

$tdatadistricts[".highlightSearchResults"] = true;

$tableKeysdistricts = array();
$tableKeysdistricts[] = "id";
$tdatadistricts[".Keys"] = $tableKeysdistricts;


$tdatadistricts[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","id");
	$fdata["FieldType"] = 200;


	
	
			

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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=6";

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


	$tdatadistricts["id"] = $fdata;
		$tdatadistricts[".searchableFields"][] = "id";
//	zip_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "zip_code";
	$fdata["GoodName"] = "zip_code";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","zip_code");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "zip_code";

		$fdata["sourceSingle"] = "zip_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip_code";

	
	
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


	$tdatadistricts["zip_code"] = $fdata;
		$tdatadistricts[".searchableFields"][] = "zip_code";
//	name_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name_th";
	$fdata["GoodName"] = "name_th";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","name_th");
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


	$tdatadistricts["name_th"] = $fdata;
		$tdatadistricts[".searchableFields"][] = "name_th";
//	name_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_en";
	$fdata["GoodName"] = "name_en";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","name_en");
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


	$tdatadistricts["name_en"] = $fdata;
		$tdatadistricts[".searchableFields"][] = "name_en";
//	amphure_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amphure_id";
	$fdata["GoodName"] = "amphure_id";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","amphure_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "amphure_id";

		$fdata["sourceSingle"] = "amphure_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amphure_id";

	
	
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


	$tdatadistricts["amphure_id"] = $fdata;
		$tdatadistricts[".searchableFields"][] = "amphure_id";


$tables_data["districts"]=&$tdatadistricts;
$field_labels["districts"] = &$fieldLabelsdistricts;
$fieldToolTips["districts"] = &$fieldToolTipsdistricts;
$placeHolders["districts"] = &$placeHoldersdistricts;
$page_titles["districts"] = &$pageTitlesdistricts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["districts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["districts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_districts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	zip_code,  	name_th,  	name_en,  	amphure_id";
$proto0["m_strFrom"] = "FROM districts";
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
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "districts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_code",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto8["m_sql"] = "zip_code";
$proto8["m_srcTableName"] = "districts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name_th",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto10["m_sql"] = "name_th";
$proto10["m_srcTableName"] = "districts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name_en",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto12["m_sql"] = "name_en";
$proto12["m_srcTableName"] = "districts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "amphure_id",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto14["m_sql"] = "amphure_id";
$proto14["m_srcTableName"] = "districts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "districts";
$proto17["m_srcTableName"] = "districts";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "zip_code";
$proto17["m_columns"][] = "name_th";
$proto17["m_columns"][] = "name_en";
$proto17["m_columns"][] = "amphure_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "districts";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "districts";
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
$proto0["m_srcTableName"]="districts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_districts = createSqlQuery_districts();


	
				;

					

$tdatadistricts[".sqlquery"] = $queryData_districts;



$tableEvents["districts"] = new eventsBase;
$tdatadistricts[".hasEvents"] = false;

?>