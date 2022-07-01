<?php
$tdatareportmonitorgraphtrackingstatus = array();
$tdatareportmonitorgraphtrackingstatus[".searchableFields"] = array();
$tdatareportmonitorgraphtrackingstatus[".ShortName"] = "reportmonitorgraphtrackingstatus";
$tdatareportmonitorgraphtrackingstatus[".OwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorgraphtrackingstatus[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatareportmonitorgraphtrackingstatus[".originalPagesByType"] = $tdatareportmonitorgraphtrackingstatus[".pagesByType"];
$tdatareportmonitorgraphtrackingstatus[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorgraphtrackingstatus[".originalPages"] = $tdatareportmonitorgraphtrackingstatus[".pages"];
$tdatareportmonitorgraphtrackingstatus[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatareportmonitorgraphtrackingstatus[".originalDefaultPages"] = $tdatareportmonitorgraphtrackingstatus[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorgraphtrackingstatus = array();
$fieldToolTipsreportmonitorgraphtrackingstatus = array();
$pageTitlesreportmonitorgraphtrackingstatus = array();
$placeHoldersreportmonitorgraphtrackingstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorgraphtrackingstatus["English"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus["English"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus["English"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus["English"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus["English"]["projectStatus"] = "Project Status";
	$fieldToolTipsreportmonitorgraphtrackingstatus["English"]["projectStatus"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus["English"]["projectStatus"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorgraphtrackingstatus["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus["English"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus["English"]))
		$tdatareportmonitorgraphtrackingstatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorgraphtrackingstatus["Thai"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus["Thai"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus["Thai"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus["Thai"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus["Thai"]["projectStatus"] = "Project Status";
	$fieldToolTipsreportmonitorgraphtrackingstatus["Thai"]["projectStatus"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus["Thai"]["projectStatus"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus["Thai"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorgraphtrackingstatus["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus["Thai"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus["Thai"]))
		$tdatareportmonitorgraphtrackingstatus[".isUseToolTips"] = true;
}


	$tdatareportmonitorgraphtrackingstatus[".NCSearch"] = true;

	$tdatareportmonitorgraphtrackingstatus[".ChartRefreshTime"] = 0;


$tdatareportmonitorgraphtrackingstatus[".shortTableName"] = "reportmonitorgraphtrackingstatus";
$tdatareportmonitorgraphtrackingstatus[".nSecOptions"] = 0;

$tdatareportmonitorgraphtrackingstatus[".mainTableOwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus[".entityType"] = 3;
$tdatareportmonitorgraphtrackingstatus[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorgraphtrackingstatus[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorgraphtrackingstatus[".showAddInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus[".showEditInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus[".showViewInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus[".listAjax"] = false;
//	temporary
//$tdatareportmonitorgraphtrackingstatus[".listAjax"] = false;

	$tdatareportmonitorgraphtrackingstatus[".audit"] = false;

	$tdatareportmonitorgraphtrackingstatus[".locking"] = false;


$pages = $tdatareportmonitorgraphtrackingstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorgraphtrackingstatus[".edit"] = true;
	$tdatareportmonitorgraphtrackingstatus[".afterEditAction"] = 1;
	$tdatareportmonitorgraphtrackingstatus[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorgraphtrackingstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorgraphtrackingstatus[".add"] = true;
$tdatareportmonitorgraphtrackingstatus[".afterAddAction"] = 1;
$tdatareportmonitorgraphtrackingstatus[".closePopupAfterAdd"] = 1;
$tdatareportmonitorgraphtrackingstatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorgraphtrackingstatus[".list"] = true;
}



$tdatareportmonitorgraphtrackingstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorgraphtrackingstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorgraphtrackingstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorgraphtrackingstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorgraphtrackingstatus[".printFriendly"] = true;
}



$tdatareportmonitorgraphtrackingstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorgraphtrackingstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorgraphtrackingstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorgraphtrackingstatus[".isUseAjaxSuggest"] = true;






$tdatareportmonitorgraphtrackingstatus[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorgraphtrackingstatus[".buttonsAdded"] = false;

$tdatareportmonitorgraphtrackingstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportmonitorgraphtrackingstatus[".isUseTimeForSearch"] = false;


$tdatareportmonitorgraphtrackingstatus[".badgeColor"] = "EDCA00";


$tdatareportmonitorgraphtrackingstatus[".allSearchFields"] = array();
$tdatareportmonitorgraphtrackingstatus[".filterFields"] = array();
$tdatareportmonitorgraphtrackingstatus[".requiredSearchFields"] = array();

$tdatareportmonitorgraphtrackingstatus[".googleLikeFields"] = array();
$tdatareportmonitorgraphtrackingstatus[".googleLikeFields"][] = "projectStatus";
$tdatareportmonitorgraphtrackingstatus[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorgraphtrackingstatus[".tableType"] = "chart";

$tdatareportmonitorgraphtrackingstatus[".printerPageOrientation"] = 0;
$tdatareportmonitorgraphtrackingstatus[".nPrinterPageScale"] = 100;

$tdatareportmonitorgraphtrackingstatus[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorgraphtrackingstatus[".geocodingEnabled"] = false;



// chart settings
$tdatareportmonitorgraphtrackingstatus[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatareportmonitorgraphtrackingstatus[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorgraphtrackingstatus[".orderindexes"] = array();


$tdatareportmonitorgraphtrackingstatus[".sqlHead"] = "SELECT researchScholarshipProposal.projectStatus,  	COUNT(id) As 'projectStatusCount'";
$tdatareportmonitorgraphtrackingstatus[".sqlFrom"] = "FROM  	researchScholarshipProposal";
$tdatareportmonitorgraphtrackingstatus[".sqlWhereExpr"] = "";
$tdatareportmonitorgraphtrackingstatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorgraphtrackingstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorgraphtrackingstatus[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorgraphtrackingstatus[".highlightSearchResults"] = true;

$tableKeysreportmonitorgraphtrackingstatus = array();
$tdatareportmonitorgraphtrackingstatus[".Keys"] = $tableKeysreportmonitorgraphtrackingstatus;


$tdatareportmonitorgraphtrackingstatus[".hideMobileList"] = array();




//	projectStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projectStatus";
	$fdata["GoodName"] = "projectStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus","projectStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatus";

		$fdata["sourceSingle"] = "projectStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.projectStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportmonitorgraphtrackingstatus["projectStatus"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus[".searchableFields"][] = "projectStatus";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus","projectStatusCount");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportmonitorgraphtrackingstatus["projectStatusCount"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus[".searchableFields"][] = "projectStatusCount";

$tdatareportmonitorgraphtrackingstatus[".chartLabelField"] = "projectStatus";
$tdatareportmonitorgraphtrackingstatus[".chartSeries"] = array();
$tdatareportmonitorgraphtrackingstatus[".chartSeries"][] = array( 
	"field" => "projectStatusCount",
	"total" => ""
);
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">ReportMonitorGraphTrackingStatus</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '<attr value="0">
			<attr value="name">projectStatusCount</attr>';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '</attr>';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '<attr value="1">
		<attr value="name">projectStatus</attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '<attr value="head">'.xmlencode("สถานะการดำเนินการโครงการ").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("researchRegisterID").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '<attr value="0">
		<attr value="name">projectStatus</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus","projectStatus")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '<attr value="1">
		<attr value="name">projectStatusCount</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus","projectStatusCount")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareportmonitorgraphtrackingstatus[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">ReportMonitorGraphTrackingStatus</attr>
<attr value="short_table_name">reportmonitorgraphtrackingstatus</attr>
</attr>

</chart>';

$tables_data["ReportMonitorGraphTrackingStatus"]=&$tdatareportmonitorgraphtrackingstatus;
$field_labels["ReportMonitorGraphTrackingStatus"] = &$fieldLabelsreportmonitorgraphtrackingstatus;
$fieldToolTips["ReportMonitorGraphTrackingStatus"] = &$fieldToolTipsreportmonitorgraphtrackingstatus;
$placeHolders["ReportMonitorGraphTrackingStatus"] = &$placeHoldersreportmonitorgraphtrackingstatus;
$page_titles["ReportMonitorGraphTrackingStatus"] = &$pageTitlesreportmonitorgraphtrackingstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorGraphTrackingStatus"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorGraphTrackingStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorgraphtrackingstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.projectStatus,  	COUNT(id) As 'projectStatusCount'";
$proto0["m_strFrom"] = "FROM  	researchScholarshipProposal";
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
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus"
));

$proto6["m_sql"] = "researchScholarshipProposal.projectStatus";
$proto6["m_srcTableName"] = "ReportMonitorGraphTrackingStatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(id)";
$proto8["m_srcTableName"] = "ReportMonitorGraphTrackingStatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "researchScholarshipProposal";
$proto12["m_srcTableName"] = "ReportMonitorGraphTrackingStatus";
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
$proto11["m_srcTableName"] = "ReportMonitorGraphTrackingStatus";
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
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMonitorGraphTrackingStatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorgraphtrackingstatus = createSqlQuery_reportmonitorgraphtrackingstatus();


	
				;

		

$tdatareportmonitorgraphtrackingstatus[".sqlquery"] = $queryData_reportmonitorgraphtrackingstatus;



$tableEvents["ReportMonitorGraphTrackingStatus"] = new eventsBase;
$tdatareportmonitorgraphtrackingstatus[".hasEvents"] = false;

?>