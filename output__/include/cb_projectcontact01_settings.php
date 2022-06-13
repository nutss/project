<?php
$tdatacb_projectcontact01 = array();
$tdatacb_projectcontact01[".searchableFields"] = array();
$tdatacb_projectcontact01[".ShortName"] = "cb_projectcontact01";
$tdatacb_projectcontact01[".OwnerID"] = "";
$tdatacb_projectcontact01[".OriginalTable"] = "ProjectContact";


$tdatacb_projectcontact01[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacb_projectcontact01[".originalPagesByType"] = $tdatacb_projectcontact01[".pagesByType"];
$tdatacb_projectcontact01[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacb_projectcontact01[".originalPages"] = $tdatacb_projectcontact01[".pages"];
$tdatacb_projectcontact01[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacb_projectcontact01[".originalDefaultPages"] = $tdatacb_projectcontact01[".defaultPages"];

//	field labels
$fieldLabelscb_projectcontact01 = array();
$fieldToolTipscb_projectcontact01 = array();
$pageTitlescb_projectcontact01 = array();
$placeHolderscb_projectcontact01 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscb_projectcontact01["English"] = array();
	$fieldToolTipscb_projectcontact01["English"] = array();
	$placeHolderscb_projectcontact01["English"] = array();
	$pageTitlescb_projectcontact01["English"] = array();
	$fieldLabelscb_projectcontact01["English"]["contactName"] = "Contact Name";
	$fieldToolTipscb_projectcontact01["English"]["contactName"] = "";
	$placeHolderscb_projectcontact01["English"]["contactName"] = "";
	if (count($fieldToolTipscb_projectcontact01["English"]))
		$tdatacb_projectcontact01[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelscb_projectcontact01["Thai"] = array();
	$fieldToolTipscb_projectcontact01["Thai"] = array();
	$placeHolderscb_projectcontact01["Thai"] = array();
	$pageTitlescb_projectcontact01["Thai"] = array();
	$fieldLabelscb_projectcontact01["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipscb_projectcontact01["Thai"]["contactName"] = "";
	$placeHolderscb_projectcontact01["Thai"]["contactName"] = "";
	if (count($fieldToolTipscb_projectcontact01["Thai"]))
		$tdatacb_projectcontact01[".isUseToolTips"] = true;
}


	$tdatacb_projectcontact01[".NCSearch"] = true;



$tdatacb_projectcontact01[".shortTableName"] = "cb_projectcontact01";
$tdatacb_projectcontact01[".nSecOptions"] = 0;

$tdatacb_projectcontact01[".mainTableOwnerID"] = "";
$tdatacb_projectcontact01[".entityType"] = 1;
$tdatacb_projectcontact01[".connId"] = "mc_at_192_168_1_111";


$tdatacb_projectcontact01[".strOriginalTableName"] = "ProjectContact";

	



$tdatacb_projectcontact01[".showAddInPopup"] = false;

$tdatacb_projectcontact01[".showEditInPopup"] = false;

$tdatacb_projectcontact01[".showViewInPopup"] = false;

$tdatacb_projectcontact01[".listAjax"] = false;
//	temporary
//$tdatacb_projectcontact01[".listAjax"] = false;

	$tdatacb_projectcontact01[".audit"] = false;

	$tdatacb_projectcontact01[".locking"] = false;


$pages = $tdatacb_projectcontact01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacb_projectcontact01[".edit"] = true;
	$tdatacb_projectcontact01[".afterEditAction"] = 0;
	$tdatacb_projectcontact01[".closePopupAfterEdit"] = 1;
	$tdatacb_projectcontact01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacb_projectcontact01[".add"] = true;
$tdatacb_projectcontact01[".afterAddAction"] = 0;
$tdatacb_projectcontact01[".closePopupAfterAdd"] = 1;
$tdatacb_projectcontact01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacb_projectcontact01[".list"] = true;
}



$tdatacb_projectcontact01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacb_projectcontact01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacb_projectcontact01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacb_projectcontact01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacb_projectcontact01[".printFriendly"] = true;
}



$tdatacb_projectcontact01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacb_projectcontact01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacb_projectcontact01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacb_projectcontact01[".isUseAjaxSuggest"] = false;

$tdatacb_projectcontact01[".rowHighlite"] = true;





$tdatacb_projectcontact01[".ajaxCodeSnippetAdded"] = false;

$tdatacb_projectcontact01[".buttonsAdded"] = false;

$tdatacb_projectcontact01[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacb_projectcontact01[".isUseTimeForSearch"] = false;


$tdatacb_projectcontact01[".badgeColor"] = "E8926F";


$tdatacb_projectcontact01[".allSearchFields"] = array();
$tdatacb_projectcontact01[".filterFields"] = array();
$tdatacb_projectcontact01[".requiredSearchFields"] = array();

$tdatacb_projectcontact01[".googleLikeFields"] = array();
$tdatacb_projectcontact01[".googleLikeFields"][] = "contactName";



$tdatacb_projectcontact01[".tableType"] = "list";

$tdatacb_projectcontact01[".printerPageOrientation"] = 0;
$tdatacb_projectcontact01[".nPrinterPageScale"] = 100;

$tdatacb_projectcontact01[".nPrinterSplitRecords"] = 40;

$tdatacb_projectcontact01[".geocodingEnabled"] = false;










$tdatacb_projectcontact01[".pageSize"] = 20;

$tdatacb_projectcontact01[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacb_projectcontact01[".strOrderBy"] = $tstrOrderBy;

$tdatacb_projectcontact01[".orderindexes"] = array();


$tdatacb_projectcontact01[".sqlHead"] = "SELECT ProjectContact.contactName";
$tdatacb_projectcontact01[".sqlFrom"] = "FROM  	ProjectContact  	INNER JOIN project ON ProjectContact.companyName = project.companyName";
$tdatacb_projectcontact01[".sqlWhereExpr"] = "";
$tdatacb_projectcontact01[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacb_projectcontact01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacb_projectcontact01[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscb_projectcontact01 = array();
$tdatacb_projectcontact01[".Keys"] = $tableKeyscb_projectcontact01;


$tdatacb_projectcontact01[".hideMobileList"] = array();
		$tdatacb_projectcontact01[".hideMobileList"][1] = array();
$tdatacb_projectcontact01[".hideMobileList"][1]["contactName"] = true;
		$tdatacb_projectcontact01[".hideMobileList"][5] = array();
$tdatacb_projectcontact01[".hideMobileList"][5]["contactName"] = true;




//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("CB_ProjectContact01","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProjectContact.contactName";

	
	
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


	$tdatacb_projectcontact01["contactName"] = $fdata;
		$tdatacb_projectcontact01[".searchableFields"][] = "contactName";


$tables_data["CB_ProjectContact01"]=&$tdatacb_projectcontact01;
$field_labels["CB_ProjectContact01"] = &$fieldLabelscb_projectcontact01;
$fieldToolTips["CB_ProjectContact01"] = &$fieldToolTipscb_projectcontact01;
$placeHolders["CB_ProjectContact01"] = &$placeHolderscb_projectcontact01;
$page_titles["CB_ProjectContact01"] = &$pageTitlescb_projectcontact01;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["CB_ProjectContact01"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["CB_ProjectContact01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cb_projectcontact01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProjectContact.contactName";
$proto0["m_strFrom"] = "FROM  	ProjectContact  	INNER JOIN project ON ProjectContact.companyName = project.companyName";
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
	"m_strName" => "contactName",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "CB_ProjectContact01"
));

$proto6["m_sql"] = "ProjectContact.contactName";
$proto6["m_srcTableName"] = "CB_ProjectContact01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "ProjectContact";
$proto9["m_srcTableName"] = "CB_ProjectContact01";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "id";
$proto9["m_columns"][] = "contactName";
$proto9["m_columns"][] = "companyName";
$proto9["m_columns"][] = "contactAddress";
$proto9["m_columns"][] = "contactTelephone";
$proto9["m_columns"][] = "contactEmail";
$proto9["m_columns"][] = "entryUserName";
$proto9["m_columns"][] = "entryTime";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "ProjectContact";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "CB_ProjectContact01";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
												$proto12=array();
$proto12["m_link"] = "SQLL_INNERJOIN";
			$proto13=array();
$proto13["m_strName"] = "project";
$proto13["m_srcTableName"] = "CB_ProjectContact01";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "projectName";
$proto13["m_columns"][] = "projectStart";
$proto13["m_columns"][] = "projectEnd";
$proto13["m_columns"][] = "ProjectTypeName";
$proto13["m_columns"][] = "companyName";
$proto13["m_columns"][] = "projectBudgetCost";
$proto13["m_columns"][] = "projectFile";
$proto13["m_columns"][] = "DocumentCheckDate";
$proto13["m_columns"][] = "DocumentCheckStatus";
$proto13["m_columns"][] = "DocumentCheckReason";
$proto13["m_columns"][] = "screenDate";
$proto13["m_columns"][] = "screenStatus";
$proto13["m_columns"][] = "screenReason";
$proto13["m_columns"][] = "approveDate";
$proto13["m_columns"][] = "approveStatus";
$proto13["m_columns"][] = "approveReason";
$proto13["m_columns"][] = "entryUserName";
$proto13["m_columns"][] = "entryTime";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "INNER JOIN project ON ProjectContact.companyName = project.companyName";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "CB_ProjectContact01";
$proto14=array();
$proto14["m_sql"] = "ProjectContact.companyName = project.companyName";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "CB_ProjectContact01"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= project.companyName";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CB_ProjectContact01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cb_projectcontact01 = createSqlQuery_cb_projectcontact01();


	
				;

	

$tdatacb_projectcontact01[".sqlquery"] = $queryData_cb_projectcontact01;



$tableEvents["CB_ProjectContact01"] = new eventsBase;
$tdatacb_projectcontact01[".hasEvents"] = false;

?>