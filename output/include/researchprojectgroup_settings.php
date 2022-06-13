<?php
$tdataresearchprojectgroup = array();
$tdataresearchprojectgroup[".searchableFields"] = array();
$tdataresearchprojectgroup[".ShortName"] = "researchprojectgroup";
$tdataresearchprojectgroup[".OwnerID"] = "";
$tdataresearchprojectgroup[".OriginalTable"] = "researchProjectGroup";


$tdataresearchprojectgroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresearchprojectgroup[".originalPagesByType"] = $tdataresearchprojectgroup[".pagesByType"];
$tdataresearchprojectgroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresearchprojectgroup[".originalPages"] = $tdataresearchprojectgroup[".pages"];
$tdataresearchprojectgroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresearchprojectgroup[".originalDefaultPages"] = $tdataresearchprojectgroup[".defaultPages"];

//	field labels
$fieldLabelsresearchprojectgroup = array();
$fieldToolTipsresearchprojectgroup = array();
$pageTitlesresearchprojectgroup = array();
$placeHoldersresearchprojectgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchprojectgroup["English"] = array();
	$fieldToolTipsresearchprojectgroup["English"] = array();
	$placeHoldersresearchprojectgroup["English"] = array();
	$pageTitlesresearchprojectgroup["English"] = array();
	$fieldLabelsresearchprojectgroup["English"]["id"] = "Id";
	$fieldToolTipsresearchprojectgroup["English"]["id"] = "";
	$placeHoldersresearchprojectgroup["English"]["id"] = "";
	$fieldLabelsresearchprojectgroup["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldToolTipsresearchprojectgroup["English"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectgroup["English"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchprojectgroup["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectgroup["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectgroup["English"]["entryUserName"] = "";
	$fieldLabelsresearchprojectgroup["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectgroup["English"]["entryTime"] = "";
	$placeHoldersresearchprojectgroup["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectgroup["English"]))
		$tdataresearchprojectgroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchprojectgroup["Thai"] = array();
	$fieldToolTipsresearchprojectgroup["Thai"] = array();
	$placeHoldersresearchprojectgroup["Thai"] = array();
	$pageTitlesresearchprojectgroup["Thai"] = array();
	$fieldLabelsresearchprojectgroup["Thai"]["id"] = "ID";
	$fieldToolTipsresearchprojectgroup["Thai"]["id"] = "";
	$placeHoldersresearchprojectgroup["Thai"]["id"] = "";
	$fieldLabelsresearchprojectgroup["Thai"]["researchProjectGroupName"] = "กลุ่มข้อเสนอขอรับทุน";
	$fieldToolTipsresearchprojectgroup["Thai"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectgroup["Thai"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchprojectgroup["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchprojectgroup["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectgroup["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchprojectgroup["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchprojectgroup["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectgroup["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectgroup["Thai"]))
		$tdataresearchprojectgroup[".isUseToolTips"] = true;
}


	$tdataresearchprojectgroup[".NCSearch"] = true;



$tdataresearchprojectgroup[".shortTableName"] = "researchprojectgroup";
$tdataresearchprojectgroup[".nSecOptions"] = 0;

$tdataresearchprojectgroup[".mainTableOwnerID"] = "";
$tdataresearchprojectgroup[".entityType"] = 0;
$tdataresearchprojectgroup[".connId"] = "mc_at_192_168_1_111";


$tdataresearchprojectgroup[".strOriginalTableName"] = "researchProjectGroup";

	



$tdataresearchprojectgroup[".showAddInPopup"] = false;

$tdataresearchprojectgroup[".showEditInPopup"] = false;

$tdataresearchprojectgroup[".showViewInPopup"] = false;

$tdataresearchprojectgroup[".listAjax"] = false;
//	temporary
//$tdataresearchprojectgroup[".listAjax"] = false;

	$tdataresearchprojectgroup[".audit"] = false;

	$tdataresearchprojectgroup[".locking"] = false;


$pages = $tdataresearchprojectgroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchprojectgroup[".edit"] = true;
	$tdataresearchprojectgroup[".afterEditAction"] = 1;
	$tdataresearchprojectgroup[".closePopupAfterEdit"] = 1;
	$tdataresearchprojectgroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchprojectgroup[".add"] = true;
$tdataresearchprojectgroup[".afterAddAction"] = 1;
$tdataresearchprojectgroup[".closePopupAfterAdd"] = 1;
$tdataresearchprojectgroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchprojectgroup[".list"] = true;
}



$tdataresearchprojectgroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchprojectgroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchprojectgroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchprojectgroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchprojectgroup[".printFriendly"] = true;
}



$tdataresearchprojectgroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchprojectgroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchprojectgroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchprojectgroup[".isUseAjaxSuggest"] = true;

$tdataresearchprojectgroup[".rowHighlite"] = true;





$tdataresearchprojectgroup[".ajaxCodeSnippetAdded"] = false;

$tdataresearchprojectgroup[".buttonsAdded"] = false;

$tdataresearchprojectgroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchprojectgroup[".isUseTimeForSearch"] = false;


$tdataresearchprojectgroup[".badgeColor"] = "6B8E23";


$tdataresearchprojectgroup[".allSearchFields"] = array();
$tdataresearchprojectgroup[".filterFields"] = array();
$tdataresearchprojectgroup[".requiredSearchFields"] = array();

$tdataresearchprojectgroup[".googleLikeFields"] = array();
$tdataresearchprojectgroup[".googleLikeFields"][] = "id";
$tdataresearchprojectgroup[".googleLikeFields"][] = "researchProjectGroupName";
$tdataresearchprojectgroup[".googleLikeFields"][] = "entryUserName";
$tdataresearchprojectgroup[".googleLikeFields"][] = "entryTime";



$tdataresearchprojectgroup[".tableType"] = "list";

$tdataresearchprojectgroup[".printerPageOrientation"] = 0;
$tdataresearchprojectgroup[".nPrinterPageScale"] = 100;

$tdataresearchprojectgroup[".nPrinterSplitRecords"] = 40;

$tdataresearchprojectgroup[".geocodingEnabled"] = false;










$tdataresearchprojectgroup[".pageSize"] = 20;

$tdataresearchprojectgroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchprojectgroup[".strOrderBy"] = $tstrOrderBy;

$tdataresearchprojectgroup[".orderindexes"] = array();


$tdataresearchprojectgroup[".sqlHead"] = "SELECT id,  	researchProjectGroupName,  	entryUserName,  	entryTime";
$tdataresearchprojectgroup[".sqlFrom"] = "FROM researchProjectGroup";
$tdataresearchprojectgroup[".sqlWhereExpr"] = "";
$tdataresearchprojectgroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchprojectgroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchprojectgroup[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchprojectgroup[".highlightSearchResults"] = true;

$tableKeysresearchprojectgroup = array();
$tableKeysresearchprojectgroup[] = "id";
$tdataresearchprojectgroup[".Keys"] = $tableKeysresearchprojectgroup;


$tdataresearchprojectgroup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchProjectGroup";
	$fdata["Label"] = GetFieldLabel("researchProjectGroup","id");
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


	$tdataresearchprojectgroup["id"] = $fdata;
		$tdataresearchprojectgroup[".searchableFields"][] = "id";
//	researchProjectGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectGroupName";
	$fdata["GoodName"] = "researchProjectGroupName";
	$fdata["ownerTable"] = "researchProjectGroup";
	$fdata["Label"] = GetFieldLabel("researchProjectGroup","researchProjectGroupName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectGroupName";

		$fdata["sourceSingle"] = "researchProjectGroupName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectGroupName";

	
	
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


	$tdataresearchprojectgroup["researchProjectGroupName"] = $fdata;
		$tdataresearchprojectgroup[".searchableFields"][] = "researchProjectGroupName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchProjectGroup";
	$fdata["Label"] = GetFieldLabel("researchProjectGroup","entryUserName");
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


	$tdataresearchprojectgroup["entryUserName"] = $fdata;
		$tdataresearchprojectgroup[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchProjectGroup";
	$fdata["Label"] = GetFieldLabel("researchProjectGroup","entryTime");
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


	$tdataresearchprojectgroup["entryTime"] = $fdata;
		$tdataresearchprojectgroup[".searchableFields"][] = "entryTime";


$tables_data["researchProjectGroup"]=&$tdataresearchprojectgroup;
$field_labels["researchProjectGroup"] = &$fieldLabelsresearchprojectgroup;
$fieldToolTips["researchProjectGroup"] = &$fieldToolTipsresearchprojectgroup;
$placeHolders["researchProjectGroup"] = &$placeHoldersresearchprojectgroup;
$page_titles["researchProjectGroup"] = &$pageTitlesresearchprojectgroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProjectGroup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectGroup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectgroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchProjectGroupName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchProjectGroup";
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
	"m_strTable" => "researchProjectGroup",
	"m_srcTableName" => "researchProjectGroup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProjectGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectGroupName",
	"m_strTable" => "researchProjectGroup",
	"m_srcTableName" => "researchProjectGroup"
));

$proto8["m_sql"] = "researchProjectGroupName";
$proto8["m_srcTableName"] = "researchProjectGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchProjectGroup",
	"m_srcTableName" => "researchProjectGroup"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "researchProjectGroup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchProjectGroup",
	"m_srcTableName" => "researchProjectGroup"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "researchProjectGroup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "researchProjectGroup";
$proto15["m_srcTableName"] = "researchProjectGroup";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "researchProjectGroupName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "researchProjectGroup";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "researchProjectGroup";
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
$proto0["m_srcTableName"]="researchProjectGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchprojectgroup = createSqlQuery_researchprojectgroup();


	
				;

				

$tdataresearchprojectgroup[".sqlquery"] = $queryData_researchprojectgroup;



$tableEvents["researchProjectGroup"] = new eventsBase;
$tdataresearchprojectgroup[".hasEvents"] = false;

?>