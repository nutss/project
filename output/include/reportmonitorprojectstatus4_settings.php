<?php
$tdatareportmonitorprojectstatus4 = array();
$tdatareportmonitorprojectstatus4[".searchableFields"] = array();
$tdatareportmonitorprojectstatus4[".ShortName"] = "reportmonitorprojectstatus4";
$tdatareportmonitorprojectstatus4[".OwnerID"] = "";
$tdatareportmonitorprojectstatus4[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus4[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus4[".originalPagesByType"] = $tdatareportmonitorprojectstatus4[".pagesByType"];
$tdatareportmonitorprojectstatus4[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus4[".originalPages"] = $tdatareportmonitorprojectstatus4[".pages"];
$tdatareportmonitorprojectstatus4[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus4[".originalDefaultPages"] = $tdatareportmonitorprojectstatus4[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus4 = array();
$fieldToolTipsreportmonitorprojectstatus4 = array();
$pageTitlesreportmonitorprojectstatus4 = array();
$placeHoldersreportmonitorprojectstatus4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus4["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus4["English"] = array();
	$placeHoldersreportmonitorprojectstatus4["English"] = array();
	$pageTitlesreportmonitorprojectstatus4["English"] = array();
	$fieldLabelsreportmonitorprojectstatus4["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus4["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus4["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus4["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus4["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus4["English"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus4["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus4["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus4["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus4["English"]))
		$tdatareportmonitorprojectstatus4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus4["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus4["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus4["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus4["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus4["Thai"]["projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldToolTipsreportmonitorprojectstatus4["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus4["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus4["Thai"]["projectStatusCount"] = "";
	$fieldToolTipsreportmonitorprojectstatus4["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus4["Thai"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus4["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus4["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus4["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus4["Thai"]))
		$tdatareportmonitorprojectstatus4[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus4[".NCSearch"] = true;



$tdatareportmonitorprojectstatus4[".shortTableName"] = "reportmonitorprojectstatus4";
$tdatareportmonitorprojectstatus4[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus4[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus4[".entityType"] = 1;
$tdatareportmonitorprojectstatus4[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus4[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus4[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus4[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus4[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus4[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus4[".listAjax"] = false;

	$tdatareportmonitorprojectstatus4[".audit"] = true;

	$tdatareportmonitorprojectstatus4[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus4[".edit"] = true;
	$tdatareportmonitorprojectstatus4[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus4[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus4[".add"] = true;
$tdatareportmonitorprojectstatus4[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus4[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus4[".list"] = true;
}



$tdatareportmonitorprojectstatus4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus4[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus4[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus4[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus4[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus4[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus4[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus4[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus4[".badgeColor"] = "4169e1";


$tdatareportmonitorprojectstatus4[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus4[".filterFields"] = array();
$tdatareportmonitorprojectstatus4[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus4[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus4[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus4[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus4[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus4[".tableType"] = "list";

$tdatareportmonitorprojectstatus4[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus4[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus4[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus4[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus4[".pageSize"] = 20;

$tdatareportmonitorprojectstatus4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus4[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus4[".orderindexes"] = array();


$tdatareportmonitorprojectstatus4[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'ยกเลิกโครงการ' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$tdatareportmonitorprojectstatus4[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorprojectstatus4[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus ='ยกเลิกโครงการ') AND (researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorprojectstatus4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus4[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus4[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus4 = array();
$tdatareportmonitorprojectstatus4[".Keys"] = $tableKeysreportmonitorprojectstatus4;


$tdatareportmonitorprojectstatus4[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus4","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.id";

	
	
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


	$tdatareportmonitorprojectstatus4["id"] = $fdata;
		$tdatareportmonitorprojectstatus4[".searchableFields"][] = "id";
//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus4","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'ยกเลิกโครงการ'";

	
	
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


	$tdatareportmonitorprojectstatus4["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus4[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus4","projectStatusCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectStatusCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(researchScholarshipProposal.id)";

	
	
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


	$tdatareportmonitorprojectstatus4["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus4[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus4"]=&$tdatareportmonitorprojectstatus4;
$field_labels["ReportMonitorProjectStatus4"] = &$fieldLabelsreportmonitorprojectstatus4;
$fieldToolTips["ReportMonitorProjectStatus4"] = &$fieldToolTipsreportmonitorprojectstatus4;
$placeHolders["ReportMonitorProjectStatus4"] = &$placeHoldersreportmonitorprojectstatus4;
$page_titles["ReportMonitorProjectStatus4"] = &$pageTitlesreportmonitorprojectstatus4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus4"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus4"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus4"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus4"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus4"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus4"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'ยกเลิกโครงการ' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.projectStatus ='ยกเลิกโครงการ') AND (researchScholarshipProposal.projectStatus <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(researchScholarshipProposal.projectStatus ='ยกเลิกโครงการ') AND (researchScholarshipProposal.projectStatus <> '')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(researchScholarshipProposal.projectStatus ='ยกเลิกโครงการ') AND (researchScholarshipProposal.projectStatus <> '')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "researchScholarshipProposal.projectStatus ='ยกเลิกโครงการ'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus4"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='ยกเลิกโครงการ'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "researchScholarshipProposal.projectStatus <> ''";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus4"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "<> ''";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus4"
));

$proto10["m_sql"] = "researchScholarshipProposal.id";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'ยกเลิกโครงการ'"
));

$proto12["m_sql"] = "'ยกเลิกโครงการ'";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "projectStatusName";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus4"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(researchScholarshipProposal.id)";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipProposal";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "researchRegisterID";
$proto18["m_columns"][] = "researchProjectNo";
$proto18["m_columns"][] = "researchProjectGroupName";
$proto18["m_columns"][] = "researchProjectNameThai";
$proto18["m_columns"][] = "researchProjectNameEng";
$proto18["m_columns"][] = "researchProjectPeriodYear";
$proto18["m_columns"][] = "researchProjectPeriodMonth";
$proto18["m_columns"][] = "researchProjectStartDate";
$proto18["m_columns"][] = "researchProjectEndDate";
$proto18["m_columns"][] = "researchOperatingPeriodEndDate";
$proto18["m_columns"][] = "researchProjectRequestedBudget";
$proto18["m_columns"][] = "researchProjectDepartment";
$proto18["m_columns"][] = "researchProjectMainField";
$proto18["m_columns"][] = "researchProjectSubField";
$proto18["m_columns"][] = "researchProjectHeadName";
$proto18["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto18["m_columns"][] = "researchProjectAffiliationName";
$proto18["m_columns"][] = "researchProjectAffiliationPosition";
$proto18["m_columns"][] = "researchProjectSubAffiliationName";
$proto18["m_columns"][] = "researchProjectAffiliationMobile";
$proto18["m_columns"][] = "researchProjectAffiliationTelephone";
$proto18["m_columns"][] = "researchProjectAffiliationEmail";
$proto18["m_columns"][] = "researchProjectFile";
$proto18["m_columns"][] = "researchProjectBankAccountName";
$proto18["m_columns"][] = "researchProjectBankNo";
$proto18["m_columns"][] = "researchProjectBankName";
$proto18["m_columns"][] = "researchProjectStatus";
$proto18["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto18["m_columns"][] = "researchProjectAppointmentStatus";
$proto18["m_columns"][] = "researchProjectDisburseStatus";
$proto18["m_columns"][] = "contractSignDate";
$proto18["m_columns"][] = "contractSignFile";
$proto18["m_columns"][] = "projectStatusDesc";
$proto18["m_columns"][] = "projectStatus";
$proto18["m_columns"][] = "trackingProjectDesc";
$proto18["m_columns"][] = "trackingProjectDescResult";
$proto18["m_columns"][] = "geographiesID";
$proto18["m_columns"][] = "geographiesName";
$proto18["m_columns"][] = "provincesID";
$proto18["m_columns"][] = "provincesName";
$proto18["m_columns"][] = "districtsID";
$proto18["m_columns"][] = "districtsName";
$proto18["m_columns"][] = "amphuresID";
$proto18["m_columns"][] = "amphuresName";
$proto18["m_columns"][] = "entryUserName";
$proto18["m_columns"][] = "entryTime";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "researchScholarshipProposal";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_INNERJOIN";
			$proto22=array();
$proto22["m_strName"] = "researchScholarshipRegister";
$proto22["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "researchRegisterNo";
$proto22["m_columns"][] = "researchRegisterName";
$proto22["m_columns"][] = "researchRegisterStartDate";
$proto22["m_columns"][] = "researchRegisterEndDate";
$proto22["m_columns"][] = "researchRegisterFile";
$proto22["m_columns"][] = "researchType";
$proto22["m_columns"][] = "researchRegisterStatus";
$proto22["m_columns"][] = "entryUserName";
$proto22["m_columns"][] = "entryTime";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "ReportMonitorProjectStatus4";
$proto23=array();
$proto23["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus4"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= researchScholarshipRegister.id";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMonitorProjectStatus4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus4 = createSqlQuery_reportmonitorprojectstatus4();


	
				;

			

$tdatareportmonitorprojectstatus4[".sqlquery"] = $queryData_reportmonitorprojectstatus4;



include_once(getabspath("include/reportmonitorprojectstatus4_events.php"));
$tableEvents["ReportMonitorProjectStatus4"] = new eventclass_reportmonitorprojectstatus4;
$tdatareportmonitorprojectstatus4[".hasEvents"] = true;

?>