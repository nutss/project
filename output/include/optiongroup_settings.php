<?php
$tdataoptiongroup = array();
$tdataoptiongroup[".searchableFields"] = array();
$tdataoptiongroup[".ShortName"] = "optiongroup";
$tdataoptiongroup[".OwnerID"] = "";
$tdataoptiongroup[".OriginalTable"] = "optionGroup";


$tdataoptiongroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoptiongroup[".originalPagesByType"] = $tdataoptiongroup[".pagesByType"];
$tdataoptiongroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoptiongroup[".originalPages"] = $tdataoptiongroup[".pages"];
$tdataoptiongroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoptiongroup[".originalDefaultPages"] = $tdataoptiongroup[".defaultPages"];

//	field labels
$fieldLabelsoptiongroup = array();
$fieldToolTipsoptiongroup = array();
$pageTitlesoptiongroup = array();
$placeHoldersoptiongroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoptiongroup["English"] = array();
	$fieldToolTipsoptiongroup["English"] = array();
	$placeHoldersoptiongroup["English"] = array();
	$pageTitlesoptiongroup["English"] = array();
	$fieldLabelsoptiongroup["English"]["id"] = "ID";
	$fieldToolTipsoptiongroup["English"]["id"] = "";
	$placeHoldersoptiongroup["English"]["id"] = "ID";
	$fieldLabelsoptiongroup["English"]["optionGroupName"] = "Option Group Name";
	$fieldToolTipsoptiongroup["English"]["optionGroupName"] = "";
	$placeHoldersoptiongroup["English"]["optionGroupName"] = "Option Group Name";
	$fieldLabelsoptiongroup["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsoptiongroup["English"]["entryUserName"] = "";
	$placeHoldersoptiongroup["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsoptiongroup["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsoptiongroup["English"]["entryTime"] = "";
	$placeHoldersoptiongroup["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsoptiongroup["English"]))
		$tdataoptiongroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsoptiongroup["Thai"] = array();
	$fieldToolTipsoptiongroup["Thai"] = array();
	$placeHoldersoptiongroup["Thai"] = array();
	$pageTitlesoptiongroup["Thai"] = array();
	$fieldLabelsoptiongroup["Thai"]["id"] = "ID";
	$fieldToolTipsoptiongroup["Thai"]["id"] = "";
	$placeHoldersoptiongroup["Thai"]["id"] = "ID";
	$fieldLabelsoptiongroup["Thai"]["optionGroupName"] = "ตัวเลือกในระบบ";
	$fieldToolTipsoptiongroup["Thai"]["optionGroupName"] = "";
	$placeHoldersoptiongroup["Thai"]["optionGroupName"] = "ตัวเลือกในระบบ";
	$fieldLabelsoptiongroup["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsoptiongroup["Thai"]["entryUserName"] = "";
	$placeHoldersoptiongroup["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsoptiongroup["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsoptiongroup["Thai"]["entryTime"] = "";
	$placeHoldersoptiongroup["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsoptiongroup["Thai"]))
		$tdataoptiongroup[".isUseToolTips"] = true;
}


	$tdataoptiongroup[".NCSearch"] = true;



$tdataoptiongroup[".shortTableName"] = "optiongroup";
$tdataoptiongroup[".nSecOptions"] = 0;

$tdataoptiongroup[".mainTableOwnerID"] = "";
$tdataoptiongroup[".entityType"] = 0;
$tdataoptiongroup[".connId"] = "mc_at_192_168_1_111";


$tdataoptiongroup[".strOriginalTableName"] = "optionGroup";

	



$tdataoptiongroup[".showAddInPopup"] = false;

$tdataoptiongroup[".showEditInPopup"] = false;

$tdataoptiongroup[".showViewInPopup"] = false;

$tdataoptiongroup[".listAjax"] = false;
//	temporary
//$tdataoptiongroup[".listAjax"] = false;

	$tdataoptiongroup[".audit"] = true;

	$tdataoptiongroup[".locking"] = false;


$pages = $tdataoptiongroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoptiongroup[".edit"] = true;
	$tdataoptiongroup[".afterEditAction"] = 1;
	$tdataoptiongroup[".closePopupAfterEdit"] = 1;
	$tdataoptiongroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoptiongroup[".add"] = true;
$tdataoptiongroup[".afterAddAction"] = 1;
$tdataoptiongroup[".closePopupAfterAdd"] = 1;
$tdataoptiongroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoptiongroup[".list"] = true;
}



$tdataoptiongroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoptiongroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoptiongroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoptiongroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoptiongroup[".printFriendly"] = true;
}



$tdataoptiongroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoptiongroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoptiongroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoptiongroup[".isUseAjaxSuggest"] = true;

$tdataoptiongroup[".rowHighlite"] = true;



						

$tdataoptiongroup[".ajaxCodeSnippetAdded"] = false;

$tdataoptiongroup[".buttonsAdded"] = false;

$tdataoptiongroup[".addPageEvents"] = true;

// use timepicker for search panel
$tdataoptiongroup[".isUseTimeForSearch"] = false;


$tdataoptiongroup[".badgeColor"] = "CD853F";


$tdataoptiongroup[".allSearchFields"] = array();
$tdataoptiongroup[".filterFields"] = array();
$tdataoptiongroup[".requiredSearchFields"] = array();

$tdataoptiongroup[".googleLikeFields"] = array();
$tdataoptiongroup[".googleLikeFields"][] = "id";
$tdataoptiongroup[".googleLikeFields"][] = "optionGroupName";
$tdataoptiongroup[".googleLikeFields"][] = "entryUserName";
$tdataoptiongroup[".googleLikeFields"][] = "entryTime";



$tdataoptiongroup[".tableType"] = "list";

$tdataoptiongroup[".printerPageOrientation"] = 0;
$tdataoptiongroup[".nPrinterPageScale"] = 100;

$tdataoptiongroup[".nPrinterSplitRecords"] = 40;

$tdataoptiongroup[".geocodingEnabled"] = false;










$tdataoptiongroup[".pageSize"] = 20;

$tdataoptiongroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoptiongroup[".strOrderBy"] = $tstrOrderBy;

$tdataoptiongroup[".orderindexes"] = array();


$tdataoptiongroup[".sqlHead"] = "SELECT id,  	optionGroupName,  	entryUserName,  	entryTime";
$tdataoptiongroup[".sqlFrom"] = "FROM optionGroup";
$tdataoptiongroup[".sqlWhereExpr"] = "";
$tdataoptiongroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoptiongroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoptiongroup[".arrGroupsPerPage"] = $arrGPP;

$tdataoptiongroup[".highlightSearchResults"] = true;

$tableKeysoptiongroup = array();
$tableKeysoptiongroup[] = "id";
$tdataoptiongroup[".Keys"] = $tableKeysoptiongroup;


$tdataoptiongroup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "optionGroup";
	$fdata["Label"] = GetFieldLabel("optionGroup","id");
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


	$tdataoptiongroup["id"] = $fdata;
		$tdataoptiongroup[".searchableFields"][] = "id";
//	optionGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "optionGroupName";
	$fdata["GoodName"] = "optionGroupName";
	$fdata["ownerTable"] = "optionGroup";
	$fdata["Label"] = GetFieldLabel("optionGroup","optionGroupName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "optionGroupName";

		$fdata["sourceSingle"] = "optionGroupName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "optionGroupName";

	
	
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


	$tdataoptiongroup["optionGroupName"] = $fdata;
		$tdataoptiongroup[".searchableFields"][] = "optionGroupName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "optionGroup";
	$fdata["Label"] = GetFieldLabel("optionGroup","entryUserName");
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


	$tdataoptiongroup["entryUserName"] = $fdata;
		$tdataoptiongroup[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "optionGroup";
	$fdata["Label"] = GetFieldLabel("optionGroup","entryTime");
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


	$tdataoptiongroup["entryTime"] = $fdata;
		$tdataoptiongroup[".searchableFields"][] = "entryTime";


$tables_data["optionGroup"]=&$tdataoptiongroup;
$field_labels["optionGroup"] = &$fieldLabelsoptiongroup;
$fieldToolTips["optionGroup"] = &$fieldToolTipsoptiongroup;
$placeHolders["optionGroup"] = &$placeHoldersoptiongroup;
$page_titles["optionGroup"] = &$pageTitlesoptiongroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["optionGroup"] = array();
//	optionSub
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="optionSub";
		$detailsParam["dOriginalTable"] = "optionSub";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "optionsub";
	$detailsParam["dCaptionTable"] = GetTableCaption("optionSub");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["optionGroup"][$dIndex] = $detailsParam;

	
		$detailsTablesData["optionGroup"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["optionGroup"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["optionGroup"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["optionGroup"][$dIndex]["detailKeys"][]="optionGroupID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["optionGroup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_optiongroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	optionGroupName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM optionGroup";
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
	"m_strTable" => "optionGroup",
	"m_srcTableName" => "optionGroup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "optionGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "optionGroupName",
	"m_strTable" => "optionGroup",
	"m_srcTableName" => "optionGroup"
));

$proto8["m_sql"] = "optionGroupName";
$proto8["m_srcTableName"] = "optionGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "optionGroup",
	"m_srcTableName" => "optionGroup"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "optionGroup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "optionGroup",
	"m_srcTableName" => "optionGroup"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "optionGroup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "optionGroup";
$proto15["m_srcTableName"] = "optionGroup";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "optionGroupName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "optionGroup";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "optionGroup";
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
$proto0["m_srcTableName"]="optionGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_optiongroup = createSqlQuery_optiongroup();


	
				;

				

$tdataoptiongroup[".sqlquery"] = $queryData_optiongroup;



include_once(getabspath("include/optiongroup_events.php"));
$tableEvents["optionGroup"] = new eventclass_optiongroup;
$tdataoptiongroup[".hasEvents"] = true;

?>