<?php
$tdatareportmonitorprojectstatus1 = array();
$tdatareportmonitorprojectstatus1[".searchableFields"] = array();
$tdatareportmonitorprojectstatus1[".ShortName"] = "reportmonitorprojectstatus1";
$tdatareportmonitorprojectstatus1[".OwnerID"] = "";
$tdatareportmonitorprojectstatus1[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus1[".originalPagesByType"] = $tdatareportmonitorprojectstatus1[".pagesByType"];
$tdatareportmonitorprojectstatus1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus1[".originalPages"] = $tdatareportmonitorprojectstatus1[".pages"];
$tdatareportmonitorprojectstatus1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus1[".originalDefaultPages"] = $tdatareportmonitorprojectstatus1[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus1 = array();
$fieldToolTipsreportmonitorprojectstatus1 = array();
$pageTitlesreportmonitorprojectstatus1 = array();
$placeHoldersreportmonitorprojectstatus1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus1["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus1["English"] = array();
	$placeHoldersreportmonitorprojectstatus1["English"] = array();
	$pageTitlesreportmonitorprojectstatus1["English"] = array();
	$fieldLabelsreportmonitorprojectstatus1["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus1["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus1["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus1["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus1["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus1["English"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus1["English"]))
		$tdatareportmonitorprojectstatus1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus1["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus1["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus1["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus1["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus1["Thai"]["projectStatusName"] = "สถานะโครงการสิ้นสุด";
	$fieldToolTipsreportmonitorprojectstatus1["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus1["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus1["Thai"]["projectStatusCount"] = "";
	$fieldToolTipsreportmonitorprojectstatus1["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus1["Thai"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus1["Thai"]))
		$tdatareportmonitorprojectstatus1[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus1[".NCSearch"] = true;



$tdatareportmonitorprojectstatus1[".shortTableName"] = "reportmonitorprojectstatus1";
$tdatareportmonitorprojectstatus1[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus1[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus1[".entityType"] = 1;
$tdatareportmonitorprojectstatus1[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus1[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus1[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus1[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus1[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus1[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus1[".listAjax"] = false;

	$tdatareportmonitorprojectstatus1[".audit"] = true;

	$tdatareportmonitorprojectstatus1[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus1[".edit"] = true;
	$tdatareportmonitorprojectstatus1[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus1[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus1[".add"] = true;
$tdatareportmonitorprojectstatus1[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus1[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus1[".list"] = true;
}



$tdatareportmonitorprojectstatus1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus1[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus1[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus1[".rowHighlite"] = true;





$tdatareportmonitorprojectstatus1[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus1[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus1[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus1[".badgeColor"] = "7B68EE";


$tdatareportmonitorprojectstatus1[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus1[".filterFields"] = array();
$tdatareportmonitorprojectstatus1[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus1[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus1[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus1[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus1[".tableType"] = "list";

$tdatareportmonitorprojectstatus1[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus1[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus1[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus1[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus1[".pageSize"] = 20;

$tdatareportmonitorprojectstatus1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus1[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus1[".orderindexes"] = array();


$tdatareportmonitorprojectstatus1[".sqlHead"] = "SELECT 'สิ้นสุดโครงการ' AS projectStatusName,  COUNT(id) AS projectStatusCount";
$tdatareportmonitorprojectstatus1[".sqlFrom"] = "FROM researchScholarshipProposal";
$tdatareportmonitorprojectstatus1[".sqlWhereExpr"] = "(projectStatus ='สิ้นสุดโครงการ')";
$tdatareportmonitorprojectstatus1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus1[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus1[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus1 = array();
$tdatareportmonitorprojectstatus1[".Keys"] = $tableKeysreportmonitorprojectstatus1;


$tdatareportmonitorprojectstatus1[".hideMobileList"] = array();




//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus1","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'สิ้นสุดโครงการ'";

	
	
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


	$tdatareportmonitorprojectstatus1["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus1[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus1","projectStatusCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectStatusCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(id)";

	
	
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


	$tdatareportmonitorprojectstatus1["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus1[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus1"]=&$tdatareportmonitorprojectstatus1;
$field_labels["ReportMonitorProjectStatus1"] = &$fieldLabelsreportmonitorprojectstatus1;
$fieldToolTips["ReportMonitorProjectStatus1"] = &$fieldToolTipsreportmonitorprojectstatus1;
$placeHolders["ReportMonitorProjectStatus1"] = &$placeHoldersreportmonitorprojectstatus1;
$page_titles["ReportMonitorProjectStatus1"] = &$pageTitlesreportmonitorprojectstatus1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'สิ้นสุดโครงการ' AS projectStatusName,  COUNT(id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal";
$proto0["m_strWhere"] = "(projectStatus ='สิ้นสุดโครงการ')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "projectStatus ='สิ้นสุดโครงการ'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='สิ้นสุดโครงการ'";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "'สิ้นสุดโครงการ'"
));

$proto6["m_sql"] = "'สิ้นสุดโครงการ'";
$proto6["m_srcTableName"] = "ReportMonitorProjectStatus1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "projectStatusName";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus1"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(id)";
$proto8["m_srcTableName"] = "ReportMonitorProjectStatus1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "researchScholarshipProposal";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus1";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "researchRegisterID";
$proto12["m_columns"][] = "researchProjectNo";
$proto12["m_columns"][] = "researchProjectGroupName";
$proto12["m_columns"][] = "researchProjectNameThai";
$proto12["m_columns"][] = "researchProjectNameEng";
$proto12["m_columns"][] = "researchProjectPeriodYear";
$proto12["m_columns"][] = "researchProjectPeriodMonth";
$proto12["m_columns"][] = "researchProjectEndDate";
$proto12["m_columns"][] = "researchOperatingPeriodEndDate";
$proto12["m_columns"][] = "researchProjectRequestedBudget";
$proto12["m_columns"][] = "researchProjectDepartment";
$proto12["m_columns"][] = "researchProjectMainField";
$proto12["m_columns"][] = "researchProjectSubField";
$proto12["m_columns"][] = "researchProjectHeadName";
$proto12["m_columns"][] = "researchProjectAffiliationName";
$proto12["m_columns"][] = "researchProjectSubAffiliationName";
$proto12["m_columns"][] = "researchProjectAffiliationMobile";
$proto12["m_columns"][] = "researchProjectAffiliationTelephone";
$proto12["m_columns"][] = "researchProjectAffiliationEmail";
$proto12["m_columns"][] = "researchProjectFile";
$proto12["m_columns"][] = "researchProjectBankAccountName";
$proto12["m_columns"][] = "researchProjectBankNo";
$proto12["m_columns"][] = "researchProjectBankName";
$proto12["m_columns"][] = "researchProjectStatus";
$proto12["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto12["m_columns"][] = "researchProjectAppointmentStatus";
$proto12["m_columns"][] = "researchProjectDisburseStatus";
$proto12["m_columns"][] = "contractSignDate";
$proto12["m_columns"][] = "contractSignFile";
$proto12["m_columns"][] = "projectStatusDesc";
$proto12["m_columns"][] = "projectStatus";
$proto12["m_columns"][] = "trackingProjectDesc";
$proto12["m_columns"][] = "trackingProjectDescResult";
$proto12["m_columns"][] = "entryUserName";
$proto12["m_columns"][] = "entryTime";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "researchScholarshipProposal";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "ReportMonitorProjectStatus1";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMonitorProjectStatus1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus1 = createSqlQuery_reportmonitorprojectstatus1();


	
				;

		

$tdatareportmonitorprojectstatus1[".sqlquery"] = $queryData_reportmonitorprojectstatus1;



include_once(getabspath("include/reportmonitorprojectstatus1_events.php"));
$tableEvents["ReportMonitorProjectStatus1"] = new eventclass_reportmonitorprojectstatus1;
$tdatareportmonitorprojectstatus1[".hasEvents"] = true;

$query = &$queryData_reportmonitorprojectstatus1;
$table = "ReportMonitorProjectStatus1";
// here goes EVENT_INIT_TABLE event
		

		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchScholarshipRegister`.`researchType` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>