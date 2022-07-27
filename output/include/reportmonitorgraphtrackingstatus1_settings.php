<?php
$tdatareportmonitorgraphtrackingstatus1 = array();
$tdatareportmonitorgraphtrackingstatus1[".searchableFields"] = array();
$tdatareportmonitorgraphtrackingstatus1[".ShortName"] = "reportmonitorgraphtrackingstatus1";
$tdatareportmonitorgraphtrackingstatus1[".OwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus1[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorgraphtrackingstatus1[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatareportmonitorgraphtrackingstatus1[".originalPagesByType"] = $tdatareportmonitorgraphtrackingstatus1[".pagesByType"];
$tdatareportmonitorgraphtrackingstatus1[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorgraphtrackingstatus1[".originalPages"] = $tdatareportmonitorgraphtrackingstatus1[".pages"];
$tdatareportmonitorgraphtrackingstatus1[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatareportmonitorgraphtrackingstatus1[".originalDefaultPages"] = $tdatareportmonitorgraphtrackingstatus1[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorgraphtrackingstatus1 = array();
$fieldToolTipsreportmonitorgraphtrackingstatus1 = array();
$pageTitlesreportmonitorgraphtrackingstatus1 = array();
$placeHoldersreportmonitorgraphtrackingstatus1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorgraphtrackingstatus1["English"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus1["English"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus1["English"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus1["English"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus1["English"]["projectStatuss"] = "Project Statuss";
	$fieldToolTipsreportmonitorgraphtrackingstatus1["English"]["projectStatuss"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus1["English"]["projectStatuss"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus1["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus1["English"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus1["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus1["English"]))
		$tdatareportmonitorgraphtrackingstatus1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorgraphtrackingstatus1["Thai"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus1["Thai"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus1["Thai"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus1["Thai"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus1["Thai"]["projectStatuss"] = "สถานะการดำเนินการโครงการ";
	$fieldToolTipsreportmonitorgraphtrackingstatus1["Thai"]["projectStatuss"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus1["Thai"]["projectStatuss"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus1["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus1["Thai"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus1["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus1["Thai"]))
		$tdatareportmonitorgraphtrackingstatus1[".isUseToolTips"] = true;
}


	$tdatareportmonitorgraphtrackingstatus1[".NCSearch"] = true;

	$tdatareportmonitorgraphtrackingstatus1[".ChartRefreshTime"] = 0;


$tdatareportmonitorgraphtrackingstatus1[".shortTableName"] = "reportmonitorgraphtrackingstatus1";
$tdatareportmonitorgraphtrackingstatus1[".nSecOptions"] = 0;

$tdatareportmonitorgraphtrackingstatus1[".mainTableOwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus1[".entityType"] = 3;
$tdatareportmonitorgraphtrackingstatus1[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorgraphtrackingstatus1[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorgraphtrackingstatus1[".showAddInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus1[".showEditInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus1[".showViewInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus1[".listAjax"] = false;
//	temporary
//$tdatareportmonitorgraphtrackingstatus1[".listAjax"] = false;

	$tdatareportmonitorgraphtrackingstatus1[".audit"] = false;

	$tdatareportmonitorgraphtrackingstatus1[".locking"] = false;


$pages = $tdatareportmonitorgraphtrackingstatus1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorgraphtrackingstatus1[".edit"] = true;
	$tdatareportmonitorgraphtrackingstatus1[".afterEditAction"] = 1;
	$tdatareportmonitorgraphtrackingstatus1[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorgraphtrackingstatus1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorgraphtrackingstatus1[".add"] = true;
$tdatareportmonitorgraphtrackingstatus1[".afterAddAction"] = 1;
$tdatareportmonitorgraphtrackingstatus1[".closePopupAfterAdd"] = 1;
$tdatareportmonitorgraphtrackingstatus1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorgraphtrackingstatus1[".list"] = true;
}



$tdatareportmonitorgraphtrackingstatus1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorgraphtrackingstatus1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorgraphtrackingstatus1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorgraphtrackingstatus1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorgraphtrackingstatus1[".printFriendly"] = true;
}



$tdatareportmonitorgraphtrackingstatus1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorgraphtrackingstatus1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorgraphtrackingstatus1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorgraphtrackingstatus1[".isUseAjaxSuggest"] = true;




												

$tdatareportmonitorgraphtrackingstatus1[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorgraphtrackingstatus1[".buttonsAdded"] = false;

$tdatareportmonitorgraphtrackingstatus1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportmonitorgraphtrackingstatus1[".isUseTimeForSearch"] = false;


$tdatareportmonitorgraphtrackingstatus1[".badgeColor"] = "4169e1";


$tdatareportmonitorgraphtrackingstatus1[".allSearchFields"] = array();
$tdatareportmonitorgraphtrackingstatus1[".filterFields"] = array();
$tdatareportmonitorgraphtrackingstatus1[".requiredSearchFields"] = array();

$tdatareportmonitorgraphtrackingstatus1[".googleLikeFields"] = array();
$tdatareportmonitorgraphtrackingstatus1[".googleLikeFields"][] = "projectStatuss";
$tdatareportmonitorgraphtrackingstatus1[".googleLikeFields"][] = "id";



$tdatareportmonitorgraphtrackingstatus1[".tableType"] = "chart";

$tdatareportmonitorgraphtrackingstatus1[".printerPageOrientation"] = 0;
$tdatareportmonitorgraphtrackingstatus1[".nPrinterPageScale"] = 100;

$tdatareportmonitorgraphtrackingstatus1[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorgraphtrackingstatus1[".geocodingEnabled"] = false;



// chart settings
$tdatareportmonitorgraphtrackingstatus1[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatareportmonitorgraphtrackingstatus1[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorgraphtrackingstatus1[".orderindexes"] = array();


$tdatareportmonitorgraphtrackingstatus1[".sqlHead"] = "SELECT IF(researchScholarshipProposal.projectStatus = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.projectStatus) AS projectStatuss,  researchScholarshipProposal.id";
$tdatareportmonitorgraphtrackingstatus1[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorgraphtrackingstatus1[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorgraphtrackingstatus1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorgraphtrackingstatus1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorgraphtrackingstatus1[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorgraphtrackingstatus1[".highlightSearchResults"] = true;

$tableKeysreportmonitorgraphtrackingstatus1 = array();
$tdatareportmonitorgraphtrackingstatus1[".Keys"] = $tableKeysreportmonitorgraphtrackingstatus1;


$tdatareportmonitorgraphtrackingstatus1[".hideMobileList"] = array();




//	projectStatuss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projectStatuss";
	$fdata["GoodName"] = "projectStatuss";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus1","projectStatuss");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatuss";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(researchScholarshipProposal.projectStatus = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.projectStatus)";

	
	
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


	$tdatareportmonitorgraphtrackingstatus1["projectStatuss"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus1[".searchableFields"][] = "projectStatuss";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus1","id");
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


	$tdatareportmonitorgraphtrackingstatus1["id"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus1[".searchableFields"][] = "id";

$tdatareportmonitorgraphtrackingstatus1[".groupChart"] = true;
$tdatareportmonitorgraphtrackingstatus1[".chartLabelInterval"] = 0;
$tdatareportmonitorgraphtrackingstatus1[".chartLabelField"] = "projectStatuss";
$tdatareportmonitorgraphtrackingstatus1[".chartSeries"] = array();
$tdatareportmonitorgraphtrackingstatus1[".chartSeries"][] = array( 
	"field" => "id",
	"total" => "COUNT"
);
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">ReportMonitorGraphTrackingStatus1</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '</attr>';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '<attr value="1">
		<attr value="name">projectStatuss</attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '<attr value="head">'.xmlencode("สถานะการดำเนินการโครงการ").'</attr>
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
$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '<attr value="0">
		<attr value="name">projectStatuss</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus1","projectStatuss")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '<attr value="1">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus1","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareportmonitorgraphtrackingstatus1[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">ReportMonitorGraphTrackingStatus1</attr>
<attr value="short_table_name">reportmonitorgraphtrackingstatus1</attr>
</attr>

</chart>';

$tables_data["ReportMonitorGraphTrackingStatus1"]=&$tdatareportmonitorgraphtrackingstatus1;
$field_labels["ReportMonitorGraphTrackingStatus1"] = &$fieldLabelsreportmonitorgraphtrackingstatus1;
$fieldToolTips["ReportMonitorGraphTrackingStatus1"] = &$fieldToolTipsreportmonitorgraphtrackingstatus1;
$placeHolders["ReportMonitorGraphTrackingStatus1"] = &$placeHoldersreportmonitorgraphtrackingstatus1;
$page_titles["ReportMonitorGraphTrackingStatus1"] = &$pageTitlesreportmonitorgraphtrackingstatus1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorGraphTrackingStatus1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorGraphTrackingStatus1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorGraphTrackingStatus1"][0] = $masterParams;
				$masterTablesData["ReportMonitorGraphTrackingStatus1"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus1"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorGraphTrackingStatus1"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus1"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorgraphtrackingstatus1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IF(researchScholarshipProposal.projectStatus = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.projectStatus) AS projectStatuss,  researchScholarshipProposal.id";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.projectStatus <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchScholarshipProposal.projectStatus <> ''";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<> ''";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.projectStatus = ''"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'ไม่ได้กำหหนด'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.projectStatus"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "IF(researchScholarshipProposal.projectStatus = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.projectStatus)";
$proto6["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "projectStatuss";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus1"
));

$proto11["m_sql"] = "researchScholarshipProposal.id";
$proto11["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "researchScholarshipProposal";
$proto14["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "researchRegisterID";
$proto14["m_columns"][] = "researchProjectNo";
$proto14["m_columns"][] = "researchProjectGroupName";
$proto14["m_columns"][] = "researchProjectNameThai";
$proto14["m_columns"][] = "researchProjectNameEng";
$proto14["m_columns"][] = "researchProjectPeriodYear";
$proto14["m_columns"][] = "researchProjectPeriodMonth";
$proto14["m_columns"][] = "researchProjectStartDate";
$proto14["m_columns"][] = "researchProjectEndDate";
$proto14["m_columns"][] = "researchOperatingPeriodEndDate";
$proto14["m_columns"][] = "researchProjectRequestedBudget";
$proto14["m_columns"][] = "researchProjectDepartment";
$proto14["m_columns"][] = "researchProjectMainField";
$proto14["m_columns"][] = "researchProjectSubField";
$proto14["m_columns"][] = "researchProjectHeadName";
$proto14["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto14["m_columns"][] = "researchProjectAffiliationName";
$proto14["m_columns"][] = "researchProjectAffiliationPosition";
$proto14["m_columns"][] = "researchProjectSubAffiliationName";
$proto14["m_columns"][] = "researchProjectAffiliationMobile";
$proto14["m_columns"][] = "researchProjectAffiliationTelephone";
$proto14["m_columns"][] = "researchProjectAffiliationEmail";
$proto14["m_columns"][] = "researchProjectFile";
$proto14["m_columns"][] = "researchProjectBankAccountName";
$proto14["m_columns"][] = "researchProjectBankNo";
$proto14["m_columns"][] = "researchProjectBankName";
$proto14["m_columns"][] = "researchProjectStatus";
$proto14["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto14["m_columns"][] = "researchProjectAppointmentStatus";
$proto14["m_columns"][] = "researchProjectDisburseStatus";
$proto14["m_columns"][] = "contractSignDate";
$proto14["m_columns"][] = "contractSignFile";
$proto14["m_columns"][] = "projectStatusDesc";
$proto14["m_columns"][] = "projectStatus";
$proto14["m_columns"][] = "trackingProjectDesc";
$proto14["m_columns"][] = "trackingProjectDescResult";
$proto14["m_columns"][] = "geographiesID";
$proto14["m_columns"][] = "geographiesName";
$proto14["m_columns"][] = "provincesID";
$proto14["m_columns"][] = "provincesName";
$proto14["m_columns"][] = "districtsID";
$proto14["m_columns"][] = "districtsName";
$proto14["m_columns"][] = "amphuresID";
$proto14["m_columns"][] = "amphuresName";
$proto14["m_columns"][] = "entryUserName";
$proto14["m_columns"][] = "entryTime";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "researchScholarshipProposal";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipRegister";
$proto18["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "researchRegisterNo";
$proto18["m_columns"][] = "researchRegisterName";
$proto18["m_columns"][] = "researchRegisterStartDate";
$proto18["m_columns"][] = "researchRegisterEndDate";
$proto18["m_columns"][] = "researchRegisterFile";
$proto18["m_columns"][] = "researchType";
$proto18["m_columns"][] = "researchRegisterStatus";
$proto18["m_columns"][] = "entryUserName";
$proto18["m_columns"][] = "entryTime";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "ReportMonitorGraphTrackingStatus1";
$proto19=array();
$proto19["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus1"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= researchScholarshipRegister.id";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMonitorGraphTrackingStatus1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorgraphtrackingstatus1 = createSqlQuery_reportmonitorgraphtrackingstatus1();


	
				;

		

$tdatareportmonitorgraphtrackingstatus1[".sqlquery"] = $queryData_reportmonitorgraphtrackingstatus1;



$tableEvents["ReportMonitorGraphTrackingStatus1"] = new eventsBase;
$tdatareportmonitorgraphtrackingstatus1[".hasEvents"] = false;

?>