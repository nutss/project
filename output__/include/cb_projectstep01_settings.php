<?php
$tdatacb_projectstep01 = array();
$tdatacb_projectstep01[".searchableFields"] = array();
$tdatacb_projectstep01[".ShortName"] = "cb_projectstep01";
$tdatacb_projectstep01[".OwnerID"] = "";
$tdatacb_projectstep01[".OriginalTable"] = "ProjectStep";


$tdatacb_projectstep01[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacb_projectstep01[".originalPagesByType"] = $tdatacb_projectstep01[".pagesByType"];
$tdatacb_projectstep01[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacb_projectstep01[".originalPages"] = $tdatacb_projectstep01[".pages"];
$tdatacb_projectstep01[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacb_projectstep01[".originalDefaultPages"] = $tdatacb_projectstep01[".defaultPages"];

//	field labels
$fieldLabelscb_projectstep01 = array();
$fieldToolTipscb_projectstep01 = array();
$pageTitlescb_projectstep01 = array();
$placeHolderscb_projectstep01 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscb_projectstep01["English"] = array();
	$fieldToolTipscb_projectstep01["English"] = array();
	$placeHolderscb_projectstep01["English"] = array();
	$pageTitlescb_projectstep01["English"] = array();
	$fieldLabelscb_projectstep01["English"]["stepName"] = "Step Name";
	$fieldToolTipscb_projectstep01["English"]["stepName"] = "";
	$placeHolderscb_projectstep01["English"]["stepName"] = "";
	$fieldLabelscb_projectstep01["English"]["id"] = "ID";
	$fieldToolTipscb_projectstep01["English"]["id"] = "";
	$placeHolderscb_projectstep01["English"]["id"] = "";
	$fieldLabelscb_projectstep01["English"]["stepNumber"] = "Step Number";
	$fieldToolTipscb_projectstep01["English"]["stepNumber"] = "";
	$placeHolderscb_projectstep01["English"]["stepNumber"] = "";
	if (count($fieldToolTipscb_projectstep01["English"]))
		$tdatacb_projectstep01[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelscb_projectstep01["Thai"] = array();
	$fieldToolTipscb_projectstep01["Thai"] = array();
	$placeHolderscb_projectstep01["Thai"] = array();
	$pageTitlescb_projectstep01["Thai"] = array();
	$fieldLabelscb_projectstep01["Thai"]["stepName"] = "ขั้นตอน";
	$fieldToolTipscb_projectstep01["Thai"]["stepName"] = "";
	$placeHolderscb_projectstep01["Thai"]["stepName"] = "";
	$fieldLabelscb_projectstep01["Thai"]["id"] = "ID";
	$fieldToolTipscb_projectstep01["Thai"]["id"] = "";
	$placeHolderscb_projectstep01["Thai"]["id"] = "";
	$fieldLabelscb_projectstep01["Thai"]["stepNumber"] = "ลำดับขั้นตอน";
	$fieldToolTipscb_projectstep01["Thai"]["stepNumber"] = "";
	$placeHolderscb_projectstep01["Thai"]["stepNumber"] = "";
	if (count($fieldToolTipscb_projectstep01["Thai"]))
		$tdatacb_projectstep01[".isUseToolTips"] = true;
}


	$tdatacb_projectstep01[".NCSearch"] = true;



$tdatacb_projectstep01[".shortTableName"] = "cb_projectstep01";
$tdatacb_projectstep01[".nSecOptions"] = 0;

$tdatacb_projectstep01[".mainTableOwnerID"] = "";
$tdatacb_projectstep01[".entityType"] = 1;
$tdatacb_projectstep01[".connId"] = "mc_at_192_168_1_111";


$tdatacb_projectstep01[".strOriginalTableName"] = "ProjectStep";

	



$tdatacb_projectstep01[".showAddInPopup"] = false;

$tdatacb_projectstep01[".showEditInPopup"] = false;

$tdatacb_projectstep01[".showViewInPopup"] = false;

$tdatacb_projectstep01[".listAjax"] = false;
//	temporary
//$tdatacb_projectstep01[".listAjax"] = false;

	$tdatacb_projectstep01[".audit"] = false;

	$tdatacb_projectstep01[".locking"] = false;


$pages = $tdatacb_projectstep01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacb_projectstep01[".edit"] = true;
	$tdatacb_projectstep01[".afterEditAction"] = 0;
	$tdatacb_projectstep01[".closePopupAfterEdit"] = 1;
	$tdatacb_projectstep01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacb_projectstep01[".add"] = true;
$tdatacb_projectstep01[".afterAddAction"] = 0;
$tdatacb_projectstep01[".closePopupAfterAdd"] = 1;
$tdatacb_projectstep01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacb_projectstep01[".list"] = true;
}



$tdatacb_projectstep01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacb_projectstep01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacb_projectstep01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacb_projectstep01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacb_projectstep01[".printFriendly"] = true;
}



$tdatacb_projectstep01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacb_projectstep01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacb_projectstep01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacb_projectstep01[".isUseAjaxSuggest"] = true;

$tdatacb_projectstep01[".rowHighlite"] = true;





$tdatacb_projectstep01[".ajaxCodeSnippetAdded"] = false;

$tdatacb_projectstep01[".buttonsAdded"] = false;

$tdatacb_projectstep01[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacb_projectstep01[".isUseTimeForSearch"] = false;


$tdatacb_projectstep01[".badgeColor"] = "EDCA00";


$tdatacb_projectstep01[".allSearchFields"] = array();
$tdatacb_projectstep01[".filterFields"] = array();
$tdatacb_projectstep01[".requiredSearchFields"] = array();

$tdatacb_projectstep01[".googleLikeFields"] = array();
$tdatacb_projectstep01[".googleLikeFields"][] = "id";
$tdatacb_projectstep01[".googleLikeFields"][] = "stepNumber";
$tdatacb_projectstep01[".googleLikeFields"][] = "stepName";



$tdatacb_projectstep01[".tableType"] = "list";

$tdatacb_projectstep01[".printerPageOrientation"] = 0;
$tdatacb_projectstep01[".nPrinterPageScale"] = 100;

$tdatacb_projectstep01[".nPrinterSplitRecords"] = 40;

$tdatacb_projectstep01[".geocodingEnabled"] = false;










$tdatacb_projectstep01[".pageSize"] = 20;

$tdatacb_projectstep01[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacb_projectstep01[".strOrderBy"] = $tstrOrderBy;

$tdatacb_projectstep01[".orderindexes"] = array();


$tdatacb_projectstep01[".sqlHead"] = "SELECT project.id,  ProjectStep.stepNumber,  ProjectStep.stepName";
$tdatacb_projectstep01[".sqlFrom"] = "FROM ProjectType  INNER JOIN ProjectStep ON ProjectType.id = ProjectStep.projectTypeID  INNER JOIN project ON ProjectType.typeName = project.ProjectTypeName";
$tdatacb_projectstep01[".sqlWhereExpr"] = "";
$tdatacb_projectstep01[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacb_projectstep01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacb_projectstep01[".arrGroupsPerPage"] = $arrGPP;

$tdatacb_projectstep01[".highlightSearchResults"] = true;

$tableKeyscb_projectstep01 = array();
$tdatacb_projectstep01[".Keys"] = $tableKeyscb_projectstep01;


$tdatacb_projectstep01[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("CB_ProjectStep01","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.id";

	
	
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


	$tdatacb_projectstep01["id"] = $fdata;
		$tdatacb_projectstep01[".searchableFields"][] = "id";
//	stepNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stepNumber";
	$fdata["GoodName"] = "stepNumber";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("CB_ProjectStep01","stepNumber");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "stepNumber";

		$fdata["sourceSingle"] = "stepNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProjectStep.stepNumber";

	
	
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


	$tdatacb_projectstep01["stepNumber"] = $fdata;
		$tdatacb_projectstep01[".searchableFields"][] = "stepNumber";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("CB_ProjectStep01","stepName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stepName";

		$fdata["sourceSingle"] = "stepName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProjectStep.stepName";

	
	
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


	$tdatacb_projectstep01["stepName"] = $fdata;
		$tdatacb_projectstep01[".searchableFields"][] = "stepName";


$tables_data["CB_ProjectStep01"]=&$tdatacb_projectstep01;
$field_labels["CB_ProjectStep01"] = &$fieldLabelscb_projectstep01;
$fieldToolTips["CB_ProjectStep01"] = &$fieldToolTipscb_projectstep01;
$placeHolders["CB_ProjectStep01"] = &$placeHolderscb_projectstep01;
$page_titles["CB_ProjectStep01"] = &$pageTitlescb_projectstep01;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["CB_ProjectStep01"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["CB_ProjectStep01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cb_projectstep01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  ProjectStep.stepNumber,  ProjectStep.stepName";
$proto0["m_strFrom"] = "FROM ProjectType  INNER JOIN ProjectStep ON ProjectType.id = ProjectStep.projectTypeID  INNER JOIN project ON ProjectType.typeName = project.ProjectTypeName";
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
	"m_strTable" => "project",
	"m_srcTableName" => "CB_ProjectStep01"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "CB_ProjectStep01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stepNumber",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "CB_ProjectStep01"
));

$proto8["m_sql"] = "ProjectStep.stepNumber";
$proto8["m_srcTableName"] = "CB_ProjectStep01";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "CB_ProjectStep01"
));

$proto10["m_sql"] = "ProjectStep.stepName";
$proto10["m_srcTableName"] = "CB_ProjectStep01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "ProjectType";
$proto13["m_srcTableName"] = "CB_ProjectStep01";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "typeNumber";
$proto13["m_columns"][] = "typeName";
$proto13["m_columns"][] = "entryUserName";
$proto13["m_columns"][] = "entryTime";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "ProjectType";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "CB_ProjectStep01";
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
$proto17["m_strName"] = "ProjectStep";
$proto17["m_srcTableName"] = "CB_ProjectStep01";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "projectTypeID";
$proto17["m_columns"][] = "stepNumber";
$proto17["m_columns"][] = "stepName";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "entryTime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN ProjectStep ON ProjectType.id = ProjectStep.projectTypeID";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "CB_ProjectStep01";
$proto18=array();
$proto18["m_sql"] = "ProjectType.id = ProjectStep.projectTypeID";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "CB_ProjectStep01"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= ProjectStep.projectTypeID";
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
$proto21["m_strName"] = "project";
$proto21["m_srcTableName"] = "CB_ProjectStep01";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "projectName";
$proto21["m_columns"][] = "projectStart";
$proto21["m_columns"][] = "projectEnd";
$proto21["m_columns"][] = "ProjectTypeName";
$proto21["m_columns"][] = "companyName";
$proto21["m_columns"][] = "projectBudgetCost";
$proto21["m_columns"][] = "projectFile";
$proto21["m_columns"][] = "DocumentCheckDate";
$proto21["m_columns"][] = "DocumentCheckStatus";
$proto21["m_columns"][] = "DocumentCheckReason";
$proto21["m_columns"][] = "screenDate";
$proto21["m_columns"][] = "screenStatus";
$proto21["m_columns"][] = "screenReason";
$proto21["m_columns"][] = "approveDate";
$proto21["m_columns"][] = "approveStatus";
$proto21["m_columns"][] = "approveReason";
$proto21["m_columns"][] = "entryUserName";
$proto21["m_columns"][] = "entryTime";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN project ON ProjectType.typeName = project.ProjectTypeName";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "CB_ProjectStep01";
$proto22=array();
$proto22["m_sql"] = "ProjectType.typeName = project.ProjectTypeName";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "CB_ProjectStep01"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= project.ProjectTypeName";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CB_ProjectStep01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cb_projectstep01 = createSqlQuery_cb_projectstep01();


	
				;

			

$tdatacb_projectstep01[".sqlquery"] = $queryData_cb_projectstep01;



$tableEvents["CB_ProjectStep01"] = new eventsBase;
$tdatacb_projectstep01[".hasEvents"] = false;

?>