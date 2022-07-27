<?php
$tdatatypegroup_search_lookup = array();
$tdatatypegroup_search_lookup[".searchableFields"] = array();
$tdatatypegroup_search_lookup[".ShortName"] = "typegroup_search_lookup";
$tdatatypegroup_search_lookup[".OwnerID"] = "";
$tdatatypegroup_search_lookup[".OriginalTable"] = "researchTypeGroup";


$tdatatypegroup_search_lookup[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatypegroup_search_lookup[".originalPagesByType"] = $tdatatypegroup_search_lookup[".pagesByType"];
$tdatatypegroup_search_lookup[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatypegroup_search_lookup[".originalPages"] = $tdatatypegroup_search_lookup[".pages"];
$tdatatypegroup_search_lookup[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatypegroup_search_lookup[".originalDefaultPages"] = $tdatatypegroup_search_lookup[".defaultPages"];

//	field labels
$fieldLabelstypegroup_search_lookup = array();
$fieldToolTipstypegroup_search_lookup = array();
$pageTitlestypegroup_search_lookup = array();
$placeHolderstypegroup_search_lookup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstypegroup_search_lookup["English"] = array();
	$fieldToolTipstypegroup_search_lookup["English"] = array();
	$placeHolderstypegroup_search_lookup["English"] = array();
	$pageTitlestypegroup_search_lookup["English"] = array();
	$fieldLabelstypegroup_search_lookup["English"]["optionName"] = "Option Name";
	$fieldToolTipstypegroup_search_lookup["English"]["optionName"] = "";
	$placeHolderstypegroup_search_lookup["English"]["optionName"] = "";
	$fieldLabelstypegroup_search_lookup["English"]["optionGroupNumber"] = "Option Group Number";
	$fieldToolTipstypegroup_search_lookup["English"]["optionGroupNumber"] = "";
	$placeHolderstypegroup_search_lookup["English"]["optionGroupNumber"] = "";
	$fieldLabelstypegroup_search_lookup["English"]["id"] = "Id";
	$fieldToolTipstypegroup_search_lookup["English"]["id"] = "";
	$placeHolderstypegroup_search_lookup["English"]["id"] = "";
	if (count($fieldToolTipstypegroup_search_lookup["English"]))
		$tdatatypegroup_search_lookup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstypegroup_search_lookup["Thai"] = array();
	$fieldToolTipstypegroup_search_lookup["Thai"] = array();
	$placeHolderstypegroup_search_lookup["Thai"] = array();
	$pageTitlestypegroup_search_lookup["Thai"] = array();
	$fieldLabelstypegroup_search_lookup["Thai"]["optionName"] = "ชื่อกลุ่ม";
	$fieldToolTipstypegroup_search_lookup["Thai"]["optionName"] = "";
	$placeHolderstypegroup_search_lookup["Thai"]["optionName"] = "";
	$fieldLabelstypegroup_search_lookup["Thai"]["optionGroupNumber"] = "รหัสกลุ่ม";
	$fieldToolTipstypegroup_search_lookup["Thai"]["optionGroupNumber"] = "";
	$placeHolderstypegroup_search_lookup["Thai"]["optionGroupNumber"] = "";
	$fieldLabelstypegroup_search_lookup["Thai"]["id"] = "Id";
	$fieldToolTipstypegroup_search_lookup["Thai"]["id"] = "";
	$placeHolderstypegroup_search_lookup["Thai"]["id"] = "";
	if (count($fieldToolTipstypegroup_search_lookup["Thai"]))
		$tdatatypegroup_search_lookup[".isUseToolTips"] = true;
}


	$tdatatypegroup_search_lookup[".NCSearch"] = true;



$tdatatypegroup_search_lookup[".shortTableName"] = "typegroup_search_lookup";
$tdatatypegroup_search_lookup[".nSecOptions"] = 0;

$tdatatypegroup_search_lookup[".mainTableOwnerID"] = "";
$tdatatypegroup_search_lookup[".entityType"] = 1;
$tdatatypegroup_search_lookup[".connId"] = "mc_at_192_168_1_111";


$tdatatypegroup_search_lookup[".strOriginalTableName"] = "researchTypeGroup";

	



$tdatatypegroup_search_lookup[".showAddInPopup"] = false;

$tdatatypegroup_search_lookup[".showEditInPopup"] = false;

$tdatatypegroup_search_lookup[".showViewInPopup"] = false;

$tdatatypegroup_search_lookup[".listAjax"] = false;
//	temporary
//$tdatatypegroup_search_lookup[".listAjax"] = false;

	$tdatatypegroup_search_lookup[".audit"] = false;

	$tdatatypegroup_search_lookup[".locking"] = false;


$pages = $tdatatypegroup_search_lookup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatypegroup_search_lookup[".edit"] = true;
	$tdatatypegroup_search_lookup[".afterEditAction"] = 1;
	$tdatatypegroup_search_lookup[".closePopupAfterEdit"] = 1;
	$tdatatypegroup_search_lookup[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatypegroup_search_lookup[".add"] = true;
$tdatatypegroup_search_lookup[".afterAddAction"] = 1;
$tdatatypegroup_search_lookup[".closePopupAfterAdd"] = 1;
$tdatatypegroup_search_lookup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatypegroup_search_lookup[".list"] = true;
}



$tdatatypegroup_search_lookup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatypegroup_search_lookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatypegroup_search_lookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatypegroup_search_lookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatypegroup_search_lookup[".printFriendly"] = true;
}



$tdatatypegroup_search_lookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatypegroup_search_lookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatypegroup_search_lookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatypegroup_search_lookup[".isUseAjaxSuggest"] = true;

$tdatatypegroup_search_lookup[".rowHighlite"] = true;



						

$tdatatypegroup_search_lookup[".ajaxCodeSnippetAdded"] = false;

$tdatatypegroup_search_lookup[".buttonsAdded"] = false;

$tdatatypegroup_search_lookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatypegroup_search_lookup[".isUseTimeForSearch"] = false;


$tdatatypegroup_search_lookup[".badgeColor"] = "2F4F4F";


$tdatatypegroup_search_lookup[".allSearchFields"] = array();
$tdatatypegroup_search_lookup[".filterFields"] = array();
$tdatatypegroup_search_lookup[".requiredSearchFields"] = array();

$tdatatypegroup_search_lookup[".googleLikeFields"] = array();
$tdatatypegroup_search_lookup[".googleLikeFields"][] = "id";
$tdatatypegroup_search_lookup[".googleLikeFields"][] = "optionName";
$tdatatypegroup_search_lookup[".googleLikeFields"][] = "optionGroupNumber";



$tdatatypegroup_search_lookup[".tableType"] = "list";

$tdatatypegroup_search_lookup[".printerPageOrientation"] = 0;
$tdatatypegroup_search_lookup[".nPrinterPageScale"] = 100;

$tdatatypegroup_search_lookup[".nPrinterSplitRecords"] = 40;

$tdatatypegroup_search_lookup[".geocodingEnabled"] = false;










$tdatatypegroup_search_lookup[".pageSize"] = 20;

$tdatatypegroup_search_lookup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatypegroup_search_lookup[".strOrderBy"] = $tstrOrderBy;

$tdatatypegroup_search_lookup[".orderindexes"] = array();


$tdatatypegroup_search_lookup[".sqlHead"] = "SELECT researchScholarshipRegister.id,  	researchTypeGroup.optionName,  	researchTypeGroup.optionGroupNumber";
$tdatatypegroup_search_lookup[".sqlFrom"] = "FROM  	researchTypeGroup  	INNER JOIN  	researchType  	ON   		researchTypeGroup.researchTypeID = researchType.id  	INNER JOIN  	researchScholarshipRegister  	ON   		researchType.typeName = researchScholarshipRegister.researchType";
$tdatatypegroup_search_lookup[".sqlWhereExpr"] = "";
$tdatatypegroup_search_lookup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatypegroup_search_lookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatypegroup_search_lookup[".arrGroupsPerPage"] = $arrGPP;

$tdatatypegroup_search_lookup[".highlightSearchResults"] = true;

$tableKeystypegroup_search_lookup = array();
$tdatatypegroup_search_lookup[".Keys"] = $tableKeystypegroup_search_lookup;


$tdatatypegroup_search_lookup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("TypeGroup_Search_Lookup","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipRegister.id";

	
	
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


	$tdatatypegroup_search_lookup["id"] = $fdata;
		$tdatatypegroup_search_lookup[".searchableFields"][] = "id";
//	optionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "optionName";
	$fdata["GoodName"] = "optionName";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("TypeGroup_Search_Lookup","optionName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionName";

		$fdata["sourceSingle"] = "optionName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchTypeGroup.optionName";

	
	
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


	$tdatatypegroup_search_lookup["optionName"] = $fdata;
		$tdatatypegroup_search_lookup[".searchableFields"][] = "optionName";
//	optionGroupNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "optionGroupNumber";
	$fdata["GoodName"] = "optionGroupNumber";
	$fdata["ownerTable"] = "researchTypeGroup";
	$fdata["Label"] = GetFieldLabel("TypeGroup_Search_Lookup","optionGroupNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionGroupNumber";

		$fdata["sourceSingle"] = "optionGroupNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchTypeGroup.optionGroupNumber";

	
	
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


	$tdatatypegroup_search_lookup["optionGroupNumber"] = $fdata;
		$tdatatypegroup_search_lookup[".searchableFields"][] = "optionGroupNumber";


$tables_data["TypeGroup_Search_Lookup"]=&$tdatatypegroup_search_lookup;
$field_labels["TypeGroup_Search_Lookup"] = &$fieldLabelstypegroup_search_lookup;
$fieldToolTips["TypeGroup_Search_Lookup"] = &$fieldToolTipstypegroup_search_lookup;
$placeHolders["TypeGroup_Search_Lookup"] = &$placeHolderstypegroup_search_lookup;
$page_titles["TypeGroup_Search_Lookup"] = &$pageTitlestypegroup_search_lookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TypeGroup_Search_Lookup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TypeGroup_Search_Lookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_typegroup_search_lookup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipRegister.id,  	researchTypeGroup.optionName,  	researchTypeGroup.optionGroupNumber";
$proto0["m_strFrom"] = "FROM  	researchTypeGroup  	INNER JOIN  	researchType  	ON   		researchTypeGroup.researchTypeID = researchType.id  	INNER JOIN  	researchScholarshipRegister  	ON   		researchType.typeName = researchScholarshipRegister.researchType";
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
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "TypeGroup_Search_Lookup"
));

$proto6["m_sql"] = "researchScholarshipRegister.id";
$proto6["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "optionName",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "TypeGroup_Search_Lookup"
));

$proto8["m_sql"] = "researchTypeGroup.optionName";
$proto8["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupNumber",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "TypeGroup_Search_Lookup"
));

$proto10["m_sql"] = "researchTypeGroup.optionGroupNumber";
$proto10["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "researchTypeGroup";
$proto13["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "researchTypeID";
$proto13["m_columns"][] = "optionGroupNumber";
$proto13["m_columns"][] = "optionName";
$proto13["m_columns"][] = "entryUserName";
$proto13["m_columns"][] = "entryTime";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "researchTypeGroup";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "researchType";
$proto17["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "typeNumber";
$proto17["m_columns"][] = "typeName";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "entryTime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN  	researchType  	ON   		researchTypeGroup.researchTypeID = researchType.id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto18=array();
$proto18["m_sql"] = "researchTypeGroup.researchTypeID = researchType.id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchTypeGroup",
	"m_srcTableName" => "TypeGroup_Search_Lookup"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= researchType.id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "researchScholarshipRegister";
$proto21["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "researchRegisterNo";
$proto21["m_columns"][] = "researchRegisterName";
$proto21["m_columns"][] = "researchRegisterStartDate";
$proto21["m_columns"][] = "researchRegisterEndDate";
$proto21["m_columns"][] = "researchRegisterFile";
$proto21["m_columns"][] = "researchType";
$proto21["m_columns"][] = "researchRegisterStatus";
$proto21["m_columns"][] = "entryUserName";
$proto21["m_columns"][] = "entryTime";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN  	researchScholarshipRegister  	ON   		researchType.typeName = researchScholarshipRegister.researchType";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "TypeGroup_Search_Lookup";
$proto22=array();
$proto22["m_sql"] = "researchType.typeName = researchScholarshipRegister.researchType";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "researchType",
	"m_srcTableName" => "TypeGroup_Search_Lookup"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= researchScholarshipRegister.researchType";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TypeGroup_Search_Lookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_typegroup_search_lookup = createSqlQuery_typegroup_search_lookup();


	
				;

			

$tdatatypegroup_search_lookup[".sqlquery"] = $queryData_typegroup_search_lookup;



$tableEvents["TypeGroup_Search_Lookup"] = new eventsBase;
$tdatatypegroup_search_lookup[".hasEvents"] = false;

?>