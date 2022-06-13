<?php
$tdataprojectstepcombobox01 = array();
$tdataprojectstepcombobox01[".searchableFields"] = array();
$tdataprojectstepcombobox01[".ShortName"] = "projectstepcombobox01";
$tdataprojectstepcombobox01[".OwnerID"] = "";
$tdataprojectstepcombobox01[".OriginalTable"] = "ProjectStep";


$tdataprojectstepcombobox01[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataprojectstepcombobox01[".originalPagesByType"] = $tdataprojectstepcombobox01[".pagesByType"];
$tdataprojectstepcombobox01[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataprojectstepcombobox01[".originalPages"] = $tdataprojectstepcombobox01[".pages"];
$tdataprojectstepcombobox01[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataprojectstepcombobox01[".originalDefaultPages"] = $tdataprojectstepcombobox01[".defaultPages"];

//	field labels
$fieldLabelsprojectstepcombobox01 = array();
$fieldToolTipsprojectstepcombobox01 = array();
$pageTitlesprojectstepcombobox01 = array();
$placeHoldersprojectstepcombobox01 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectstepcombobox01["English"] = array();
	$fieldToolTipsprojectstepcombobox01["English"] = array();
	$placeHoldersprojectstepcombobox01["English"] = array();
	$pageTitlesprojectstepcombobox01["English"] = array();
	$fieldLabelsprojectstepcombobox01["English"]["stepName"] = "Step Name";
	$fieldToolTipsprojectstepcombobox01["English"]["stepName"] = "";
	$placeHoldersprojectstepcombobox01["English"]["stepName"] = "";
	$fieldLabelsprojectstepcombobox01["English"]["id"] = "ID";
	$fieldToolTipsprojectstepcombobox01["English"]["id"] = "";
	$placeHoldersprojectstepcombobox01["English"]["id"] = "";
	$fieldLabelsprojectstepcombobox01["English"]["stepNumber"] = "Step Number";
	$fieldToolTipsprojectstepcombobox01["English"]["stepNumber"] = "";
	$placeHoldersprojectstepcombobox01["English"]["stepNumber"] = "";
	if (count($fieldToolTipsprojectstepcombobox01["English"]))
		$tdataprojectstepcombobox01[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectstepcombobox01["Thai"] = array();
	$fieldToolTipsprojectstepcombobox01["Thai"] = array();
	$placeHoldersprojectstepcombobox01["Thai"] = array();
	$pageTitlesprojectstepcombobox01["Thai"] = array();
	$fieldLabelsprojectstepcombobox01["Thai"]["stepName"] = "ขั้นตอน";
	$fieldToolTipsprojectstepcombobox01["Thai"]["stepName"] = "";
	$placeHoldersprojectstepcombobox01["Thai"]["stepName"] = "";
	$fieldLabelsprojectstepcombobox01["Thai"]["id"] = "ID";
	$fieldToolTipsprojectstepcombobox01["Thai"]["id"] = "";
	$placeHoldersprojectstepcombobox01["Thai"]["id"] = "";
	$fieldLabelsprojectstepcombobox01["Thai"]["stepNumber"] = "ลำดับขั้นตอน";
	$fieldToolTipsprojectstepcombobox01["Thai"]["stepNumber"] = "";
	$placeHoldersprojectstepcombobox01["Thai"]["stepNumber"] = "";
	if (count($fieldToolTipsprojectstepcombobox01["Thai"]))
		$tdataprojectstepcombobox01[".isUseToolTips"] = true;
}


	$tdataprojectstepcombobox01[".NCSearch"] = true;



$tdataprojectstepcombobox01[".shortTableName"] = "projectstepcombobox01";
$tdataprojectstepcombobox01[".nSecOptions"] = 0;

$tdataprojectstepcombobox01[".mainTableOwnerID"] = "";
$tdataprojectstepcombobox01[".entityType"] = 1;
$tdataprojectstepcombobox01[".connId"] = "mc_at_192_168_1_111";


$tdataprojectstepcombobox01[".strOriginalTableName"] = "ProjectStep";

	



$tdataprojectstepcombobox01[".showAddInPopup"] = false;

$tdataprojectstepcombobox01[".showEditInPopup"] = false;

$tdataprojectstepcombobox01[".showViewInPopup"] = false;

$tdataprojectstepcombobox01[".listAjax"] = false;
//	temporary
//$tdataprojectstepcombobox01[".listAjax"] = false;

	$tdataprojectstepcombobox01[".audit"] = false;

	$tdataprojectstepcombobox01[".locking"] = false;


$pages = $tdataprojectstepcombobox01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectstepcombobox01[".edit"] = true;
	$tdataprojectstepcombobox01[".afterEditAction"] = 0;
	$tdataprojectstepcombobox01[".closePopupAfterEdit"] = 1;
	$tdataprojectstepcombobox01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectstepcombobox01[".add"] = true;
$tdataprojectstepcombobox01[".afterAddAction"] = 0;
$tdataprojectstepcombobox01[".closePopupAfterAdd"] = 1;
$tdataprojectstepcombobox01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectstepcombobox01[".list"] = true;
}



$tdataprojectstepcombobox01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectstepcombobox01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectstepcombobox01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectstepcombobox01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectstepcombobox01[".printFriendly"] = true;
}



$tdataprojectstepcombobox01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectstepcombobox01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectstepcombobox01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectstepcombobox01[".isUseAjaxSuggest"] = true;

$tdataprojectstepcombobox01[".rowHighlite"] = true;





$tdataprojectstepcombobox01[".ajaxCodeSnippetAdded"] = false;

$tdataprojectstepcombobox01[".buttonsAdded"] = false;

$tdataprojectstepcombobox01[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojectstepcombobox01[".isUseTimeForSearch"] = false;


$tdataprojectstepcombobox01[".badgeColor"] = "EDCA00";


$tdataprojectstepcombobox01[".allSearchFields"] = array();
$tdataprojectstepcombobox01[".filterFields"] = array();
$tdataprojectstepcombobox01[".requiredSearchFields"] = array();

$tdataprojectstepcombobox01[".googleLikeFields"] = array();
$tdataprojectstepcombobox01[".googleLikeFields"][] = "id";
$tdataprojectstepcombobox01[".googleLikeFields"][] = "stepNumber";
$tdataprojectstepcombobox01[".googleLikeFields"][] = "stepName";



$tdataprojectstepcombobox01[".tableType"] = "list";

$tdataprojectstepcombobox01[".printerPageOrientation"] = 0;
$tdataprojectstepcombobox01[".nPrinterPageScale"] = 100;

$tdataprojectstepcombobox01[".nPrinterSplitRecords"] = 40;

$tdataprojectstepcombobox01[".geocodingEnabled"] = false;










$tdataprojectstepcombobox01[".pageSize"] = 20;

$tdataprojectstepcombobox01[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectstepcombobox01[".strOrderBy"] = $tstrOrderBy;

$tdataprojectstepcombobox01[".orderindexes"] = array();


$tdataprojectstepcombobox01[".sqlHead"] = "SELECT project.id,  ProjectStep.stepNumber,  ProjectStep.stepName";
$tdataprojectstepcombobox01[".sqlFrom"] = "FROM ProjectType  INNER JOIN ProjectStep ON ProjectType.id = ProjectStep.projectTypeID  INNER JOIN project ON ProjectType.typeName = project.ProjectTypeName";
$tdataprojectstepcombobox01[".sqlWhereExpr"] = "";
$tdataprojectstepcombobox01[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectstepcombobox01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectstepcombobox01[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectstepcombobox01[".highlightSearchResults"] = true;

$tableKeysprojectstepcombobox01 = array();
$tdataprojectstepcombobox01[".Keys"] = $tableKeysprojectstepcombobox01;


$tdataprojectstepcombobox01[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("ProjectStepComboBox01","id");
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


	$tdataprojectstepcombobox01["id"] = $fdata;
		$tdataprojectstepcombobox01[".searchableFields"][] = "id";
//	stepNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stepNumber";
	$fdata["GoodName"] = "stepNumber";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStepComboBox01","stepNumber");
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


	$tdataprojectstepcombobox01["stepNumber"] = $fdata;
		$tdataprojectstepcombobox01[".searchableFields"][] = "stepNumber";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStepComboBox01","stepName");
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


	$tdataprojectstepcombobox01["stepName"] = $fdata;
		$tdataprojectstepcombobox01[".searchableFields"][] = "stepName";


$tables_data["ProjectStepComboBox01"]=&$tdataprojectstepcombobox01;
$field_labels["ProjectStepComboBox01"] = &$fieldLabelsprojectstepcombobox01;
$fieldToolTips["ProjectStepComboBox01"] = &$fieldToolTipsprojectstepcombobox01;
$placeHolders["ProjectStepComboBox01"] = &$placeHoldersprojectstepcombobox01;
$page_titles["ProjectStepComboBox01"] = &$pageTitlesprojectstepcombobox01;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectStepComboBox01"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectStepComboBox01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectstepcombobox01()
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
	"m_srcTableName" => "ProjectStepComboBox01"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "ProjectStepComboBox01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stepNumber",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStepComboBox01"
));

$proto8["m_sql"] = "ProjectStep.stepNumber";
$proto8["m_srcTableName"] = "ProjectStepComboBox01";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStepComboBox01"
));

$proto10["m_sql"] = "ProjectStep.stepName";
$proto10["m_srcTableName"] = "ProjectStepComboBox01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "ProjectType";
$proto13["m_srcTableName"] = "ProjectStepComboBox01";
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
$proto12["m_srcTableName"] = "ProjectStepComboBox01";
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
$proto17["m_srcTableName"] = "ProjectStepComboBox01";
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
$proto16["m_srcTableName"] = "ProjectStepComboBox01";
$proto18=array();
$proto18["m_sql"] = "ProjectType.id = ProjectStep.projectTypeID";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectStepComboBox01"
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
$proto21["m_srcTableName"] = "ProjectStepComboBox01";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "projectName";
$proto21["m_columns"][] = "projectStart";
$proto21["m_columns"][] = "projectEnd";
$proto21["m_columns"][] = "ProjectTypeName";
$proto21["m_columns"][] = "companyName";
$proto21["m_columns"][] = "DocumentCheckStatus";
$proto21["m_columns"][] = "projectBudgetCost";
$proto21["m_columns"][] = "projectFile";
$proto21["m_columns"][] = "screenDate";
$proto21["m_columns"][] = "screenStatus";
$proto21["m_columns"][] = "screenReason";
$proto21["m_columns"][] = "approveDate";
$proto21["m_columns"][] = "approveStatus";
$proto21["m_columns"][] = "approveReason";
$proto21["m_columns"][] = "entryTime";
$proto21["m_columns"][] = "entryUserName";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN project ON ProjectType.typeName = project.ProjectTypeName";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ProjectStepComboBox01";
$proto22=array();
$proto22["m_sql"] = "ProjectType.typeName = project.ProjectTypeName";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectStepComboBox01"
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
$proto0["m_srcTableName"]="ProjectStepComboBox01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectstepcombobox01 = createSqlQuery_projectstepcombobox01();


	
				;

			

$tdataprojectstepcombobox01[".sqlquery"] = $queryData_projectstepcombobox01;



$tableEvents["ProjectStepComboBox01"] = new eventsBase;
$tdataprojectstepcombobox01[".hasEvents"] = false;

?>