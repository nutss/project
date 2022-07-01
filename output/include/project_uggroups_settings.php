<?php
$tdataproject_uggroups = array();
$tdataproject_uggroups[".searchableFields"] = array();
$tdataproject_uggroups[".ShortName"] = "project_uggroups";
$tdataproject_uggroups[".OwnerID"] = "";
$tdataproject_uggroups[".OriginalTable"] = "project_uggroups";


$tdataproject_uggroups[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproject_uggroups[".originalPagesByType"] = $tdataproject_uggroups[".pagesByType"];
$tdataproject_uggroups[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproject_uggroups[".originalPages"] = $tdataproject_uggroups[".pages"];
$tdataproject_uggroups[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproject_uggroups[".originalDefaultPages"] = $tdataproject_uggroups[".defaultPages"];

//	field labels
$fieldLabelsproject_uggroups = array();
$fieldToolTipsproject_uggroups = array();
$pageTitlesproject_uggroups = array();
$placeHoldersproject_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject_uggroups["English"] = array();
	$fieldToolTipsproject_uggroups["English"] = array();
	$placeHoldersproject_uggroups["English"] = array();
	$pageTitlesproject_uggroups["English"] = array();
	$fieldLabelsproject_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipsproject_uggroups["English"]["GroupID"] = "";
	$placeHoldersproject_uggroups["English"]["GroupID"] = "";
	$fieldLabelsproject_uggroups["English"]["Label"] = "Label";
	$fieldToolTipsproject_uggroups["English"]["Label"] = "";
	$placeHoldersproject_uggroups["English"]["Label"] = "";
	$fieldLabelsproject_uggroups["English"]["typeName"] = "Type Name";
	$fieldToolTipsproject_uggroups["English"]["typeName"] = "";
	$placeHoldersproject_uggroups["English"]["typeName"] = "";
	if (count($fieldToolTipsproject_uggroups["English"]))
		$tdataproject_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsproject_uggroups["Thai"] = array();
	$fieldToolTipsproject_uggroups["Thai"] = array();
	$placeHoldersproject_uggroups["Thai"] = array();
	$pageTitlesproject_uggroups["Thai"] = array();
	$fieldLabelsproject_uggroups["Thai"]["GroupID"] = "Group ID";
	$fieldToolTipsproject_uggroups["Thai"]["GroupID"] = "";
	$placeHoldersproject_uggroups["Thai"]["GroupID"] = "";
	$fieldLabelsproject_uggroups["Thai"]["Label"] = "กลุ่มผู้ใช้งานระบบ";
	$fieldToolTipsproject_uggroups["Thai"]["Label"] = "";
	$placeHoldersproject_uggroups["Thai"]["Label"] = "";
	$fieldLabelsproject_uggroups["Thai"]["typeName"] = "ประเภททุน";
	$fieldToolTipsproject_uggroups["Thai"]["typeName"] = "";
	$placeHoldersproject_uggroups["Thai"]["typeName"] = "";
	if (count($fieldToolTipsproject_uggroups["Thai"]))
		$tdataproject_uggroups[".isUseToolTips"] = true;
}


	$tdataproject_uggroups[".NCSearch"] = true;



$tdataproject_uggroups[".shortTableName"] = "project_uggroups";
$tdataproject_uggroups[".nSecOptions"] = 0;

$tdataproject_uggroups[".mainTableOwnerID"] = "";
$tdataproject_uggroups[".entityType"] = 0;
$tdataproject_uggroups[".connId"] = "mc_at_192_168_1_111";


$tdataproject_uggroups[".strOriginalTableName"] = "project_uggroups";

	



$tdataproject_uggroups[".showAddInPopup"] = false;

$tdataproject_uggroups[".showEditInPopup"] = false;

$tdataproject_uggroups[".showViewInPopup"] = false;

$tdataproject_uggroups[".listAjax"] = false;
//	temporary
//$tdataproject_uggroups[".listAjax"] = false;

	$tdataproject_uggroups[".audit"] = false;

	$tdataproject_uggroups[".locking"] = false;


$pages = $tdataproject_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproject_uggroups[".edit"] = true;
	$tdataproject_uggroups[".afterEditAction"] = 1;
	$tdataproject_uggroups[".closePopupAfterEdit"] = 1;
	$tdataproject_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproject_uggroups[".add"] = true;
$tdataproject_uggroups[".afterAddAction"] = 1;
$tdataproject_uggroups[".closePopupAfterAdd"] = 1;
$tdataproject_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproject_uggroups[".list"] = true;
}



$tdataproject_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproject_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproject_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproject_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproject_uggroups[".printFriendly"] = true;
}



$tdataproject_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproject_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproject_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproject_uggroups[".isUseAjaxSuggest"] = true;

$tdataproject_uggroups[".rowHighlite"] = true;





$tdataproject_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdataproject_uggroups[".buttonsAdded"] = false;

$tdataproject_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject_uggroups[".isUseTimeForSearch"] = false;


$tdataproject_uggroups[".badgeColor"] = "E67349";


$tdataproject_uggroups[".allSearchFields"] = array();
$tdataproject_uggroups[".filterFields"] = array();
$tdataproject_uggroups[".requiredSearchFields"] = array();

$tdataproject_uggroups[".googleLikeFields"] = array();
$tdataproject_uggroups[".googleLikeFields"][] = "GroupID";
$tdataproject_uggroups[".googleLikeFields"][] = "Label";
$tdataproject_uggroups[".googleLikeFields"][] = "typeName";



$tdataproject_uggroups[".tableType"] = "list";

$tdataproject_uggroups[".printerPageOrientation"] = 0;
$tdataproject_uggroups[".nPrinterPageScale"] = 100;

$tdataproject_uggroups[".nPrinterSplitRecords"] = 40;

$tdataproject_uggroups[".geocodingEnabled"] = false;










$tdataproject_uggroups[".pageSize"] = 20;

$tdataproject_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproject_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataproject_uggroups[".orderindexes"] = array();


$tdataproject_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`,  	typeName";
$tdataproject_uggroups[".sqlFrom"] = "FROM project_uggroups";
$tdataproject_uggroups[".sqlWhereExpr"] = "";
$tdataproject_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataproject_uggroups[".highlightSearchResults"] = true;

$tableKeysproject_uggroups = array();
$tableKeysproject_uggroups[] = "GroupID";
$tdataproject_uggroups[".Keys"] = $tableKeysproject_uggroups;


$tdataproject_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "project_uggroups";
	$fdata["Label"] = GetFieldLabel("project_uggroups","GroupID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "GroupID";

		$fdata["sourceSingle"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdataproject_uggroups["GroupID"] = $fdata;
		$tdataproject_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "project_uggroups";
	$fdata["Label"] = GetFieldLabel("project_uggroups","Label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Label";

		$fdata["sourceSingle"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataproject_uggroups["Label"] = $fdata;
		$tdataproject_uggroups[".searchableFields"][] = "Label";
//	typeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "typeName";
	$fdata["GoodName"] = "typeName";
	$fdata["ownerTable"] = "project_uggroups";
	$fdata["Label"] = GetFieldLabel("project_uggroups","typeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "typeName";

		$fdata["sourceSingle"] = "typeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeName";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "typeName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "typeName";

	

	
	$edata["LookupOrderBy"] = "typeNumber";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataproject_uggroups["typeName"] = $fdata;
		$tdataproject_uggroups[".searchableFields"][] = "typeName";


$tables_data["project_uggroups"]=&$tdataproject_uggroups;
$field_labels["project_uggroups"] = &$fieldLabelsproject_uggroups;
$fieldToolTips["project_uggroups"] = &$fieldToolTipsproject_uggroups;
$placeHolders["project_uggroups"] = &$placeHoldersproject_uggroups;
$page_titles["project_uggroups"] = &$pageTitlesproject_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["project_uggroups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["project_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_project_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`,  	typeName";
$proto0["m_strFrom"] = "FROM project_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "project_uggroups",
	"m_srcTableName" => "project_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "project_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "project_uggroups",
	"m_srcTableName" => "project_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "project_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "project_uggroups",
	"m_srcTableName" => "project_uggroups"
));

$proto10["m_sql"] = "typeName";
$proto10["m_srcTableName"] = "project_uggroups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "project_uggroups";
$proto13["m_srcTableName"] = "project_uggroups";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "Label";
$proto13["m_columns"][] = "typeName";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "project_uggroups";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "project_uggroups";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="project_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project_uggroups = createSqlQuery_project_uggroups();


	
				;

			

$tdataproject_uggroups[".sqlquery"] = $queryData_project_uggroups;



$tableEvents["project_uggroups"] = new eventsBase;
$tdataproject_uggroups[".hasEvents"] = false;

?>