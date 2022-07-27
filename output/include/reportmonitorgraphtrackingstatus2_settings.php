<?php
$tdatareportmonitorgraphtrackingstatus2 = array();
$tdatareportmonitorgraphtrackingstatus2[".searchableFields"] = array();
$tdatareportmonitorgraphtrackingstatus2[".ShortName"] = "reportmonitorgraphtrackingstatus2";
$tdatareportmonitorgraphtrackingstatus2[".OwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus2[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorgraphtrackingstatus2[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatareportmonitorgraphtrackingstatus2[".originalPagesByType"] = $tdatareportmonitorgraphtrackingstatus2[".pagesByType"];
$tdatareportmonitorgraphtrackingstatus2[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorgraphtrackingstatus2[".originalPages"] = $tdatareportmonitorgraphtrackingstatus2[".pages"];
$tdatareportmonitorgraphtrackingstatus2[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatareportmonitorgraphtrackingstatus2[".originalDefaultPages"] = $tdatareportmonitorgraphtrackingstatus2[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorgraphtrackingstatus2 = array();
$fieldToolTipsreportmonitorgraphtrackingstatus2 = array();
$pageTitlesreportmonitorgraphtrackingstatus2 = array();
$placeHoldersreportmonitorgraphtrackingstatus2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorgraphtrackingstatus2["English"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus2["English"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus2["English"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus2["English"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus2["English"]["trackingProjectDescResultCount"] = "Tracking Project Desc Result Count";
	$fieldToolTipsreportmonitorgraphtrackingstatus2["English"]["trackingProjectDescResultCount"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus2["English"]["trackingProjectDescResultCount"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus2["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus2["English"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus2["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus2["English"]))
		$tdatareportmonitorgraphtrackingstatus2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorgraphtrackingstatus2["Thai"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus2["Thai"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus2["Thai"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus2["Thai"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus2["Thai"]["trackingProjectDescResultCount"] = "จำนวนสถานะการนำไปใช้ประโยชน์";
	$fieldToolTipsreportmonitorgraphtrackingstatus2["Thai"]["trackingProjectDescResultCount"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus2["Thai"]["trackingProjectDescResultCount"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus2["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus2["Thai"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus2["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus2["Thai"]))
		$tdatareportmonitorgraphtrackingstatus2[".isUseToolTips"] = true;
}


	$tdatareportmonitorgraphtrackingstatus2[".NCSearch"] = true;

	$tdatareportmonitorgraphtrackingstatus2[".ChartRefreshTime"] = 0;


$tdatareportmonitorgraphtrackingstatus2[".shortTableName"] = "reportmonitorgraphtrackingstatus2";
$tdatareportmonitorgraphtrackingstatus2[".nSecOptions"] = 0;

$tdatareportmonitorgraphtrackingstatus2[".mainTableOwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus2[".entityType"] = 3;
$tdatareportmonitorgraphtrackingstatus2[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorgraphtrackingstatus2[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorgraphtrackingstatus2[".showAddInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus2[".showEditInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus2[".showViewInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus2[".listAjax"] = false;
//	temporary
//$tdatareportmonitorgraphtrackingstatus2[".listAjax"] = false;

	$tdatareportmonitorgraphtrackingstatus2[".audit"] = false;

	$tdatareportmonitorgraphtrackingstatus2[".locking"] = false;


$pages = $tdatareportmonitorgraphtrackingstatus2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorgraphtrackingstatus2[".edit"] = true;
	$tdatareportmonitorgraphtrackingstatus2[".afterEditAction"] = 1;
	$tdatareportmonitorgraphtrackingstatus2[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorgraphtrackingstatus2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorgraphtrackingstatus2[".add"] = true;
$tdatareportmonitorgraphtrackingstatus2[".afterAddAction"] = 1;
$tdatareportmonitorgraphtrackingstatus2[".closePopupAfterAdd"] = 1;
$tdatareportmonitorgraphtrackingstatus2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorgraphtrackingstatus2[".list"] = true;
}



$tdatareportmonitorgraphtrackingstatus2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorgraphtrackingstatus2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorgraphtrackingstatus2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorgraphtrackingstatus2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorgraphtrackingstatus2[".printFriendly"] = true;
}



$tdatareportmonitorgraphtrackingstatus2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorgraphtrackingstatus2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorgraphtrackingstatus2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorgraphtrackingstatus2[".isUseAjaxSuggest"] = true;




												

$tdatareportmonitorgraphtrackingstatus2[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorgraphtrackingstatus2[".buttonsAdded"] = false;

$tdatareportmonitorgraphtrackingstatus2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportmonitorgraphtrackingstatus2[".isUseTimeForSearch"] = false;


$tdatareportmonitorgraphtrackingstatus2[".badgeColor"] = "e07878";


$tdatareportmonitorgraphtrackingstatus2[".allSearchFields"] = array();
$tdatareportmonitorgraphtrackingstatus2[".filterFields"] = array();
$tdatareportmonitorgraphtrackingstatus2[".requiredSearchFields"] = array();

$tdatareportmonitorgraphtrackingstatus2[".googleLikeFields"] = array();
$tdatareportmonitorgraphtrackingstatus2[".googleLikeFields"][] = "trackingProjectDescResultCount";
$tdatareportmonitorgraphtrackingstatus2[".googleLikeFields"][] = "id";



$tdatareportmonitorgraphtrackingstatus2[".tableType"] = "chart";

$tdatareportmonitorgraphtrackingstatus2[".printerPageOrientation"] = 0;
$tdatareportmonitorgraphtrackingstatus2[".nPrinterPageScale"] = 100;

$tdatareportmonitorgraphtrackingstatus2[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorgraphtrackingstatus2[".geocodingEnabled"] = false;



// chart settings
$tdatareportmonitorgraphtrackingstatus2[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatareportmonitorgraphtrackingstatus2[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorgraphtrackingstatus2[".orderindexes"] = array();


$tdatareportmonitorgraphtrackingstatus2[".sqlHead"] = "SELECT IF(researchScholarshipProposal.trackingProjectDescResult = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.trackingProjectDescResult) AS trackingProjectDescResultCount,  researchScholarshipProposal.id";
$tdatareportmonitorgraphtrackingstatus2[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorgraphtrackingstatus2[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorgraphtrackingstatus2[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatareportmonitorgraphtrackingstatus2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorgraphtrackingstatus2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorgraphtrackingstatus2[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorgraphtrackingstatus2[".highlightSearchResults"] = true;

$tableKeysreportmonitorgraphtrackingstatus2 = array();
$tdatareportmonitorgraphtrackingstatus2[".Keys"] = $tableKeysreportmonitorgraphtrackingstatus2;


$tdatareportmonitorgraphtrackingstatus2[".hideMobileList"] = array();




//	trackingProjectDescResultCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "trackingProjectDescResultCount";
	$fdata["GoodName"] = "trackingProjectDescResultCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus2","trackingProjectDescResultCount");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingProjectDescResultCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(researchScholarshipProposal.trackingProjectDescResult = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.trackingProjectDescResult)";

	
	
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


	$tdatareportmonitorgraphtrackingstatus2["trackingProjectDescResultCount"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus2[".searchableFields"][] = "trackingProjectDescResultCount";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus2","id");
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


	$tdatareportmonitorgraphtrackingstatus2["id"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus2[".searchableFields"][] = "id";

$tdatareportmonitorgraphtrackingstatus2[".groupChart"] = true;
$tdatareportmonitorgraphtrackingstatus2[".chartLabelInterval"] = 0;
$tdatareportmonitorgraphtrackingstatus2[".chartLabelField"] = "trackingProjectDescResultCount";
$tdatareportmonitorgraphtrackingstatus2[".chartSeries"] = array();
$tdatareportmonitorgraphtrackingstatus2[".chartSeries"][] = array( 
	"field" => "id",
	"total" => "COUNT"
);
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">ReportMonitorGraphTrackingStatus2</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '</attr>';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '<attr value="1">
		<attr value="name">trackingProjectDescResultCount</attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '<attr value="head">'.xmlencode("สถานะนำไปใช้ประโยชน์").'</attr>
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
$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '<attr value="0">
		<attr value="name">trackingProjectDescResultCount</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus2","trackingProjectDescResultCount")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '<attr value="1">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus2","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareportmonitorgraphtrackingstatus2[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">ReportMonitorGraphTrackingStatus2</attr>
<attr value="short_table_name">reportmonitorgraphtrackingstatus2</attr>
</attr>

</chart>';

$tables_data["ReportMonitorGraphTrackingStatus2"]=&$tdatareportmonitorgraphtrackingstatus2;
$field_labels["ReportMonitorGraphTrackingStatus2"] = &$fieldLabelsreportmonitorgraphtrackingstatus2;
$fieldToolTips["ReportMonitorGraphTrackingStatus2"] = &$fieldToolTipsreportmonitorgraphtrackingstatus2;
$placeHolders["ReportMonitorGraphTrackingStatus2"] = &$placeHoldersreportmonitorgraphtrackingstatus2;
$page_titles["ReportMonitorGraphTrackingStatus2"] = &$pageTitlesreportmonitorgraphtrackingstatus2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorGraphTrackingStatus2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorGraphTrackingStatus2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorGraphTrackingStatus2"][0] = $masterParams;
				$masterTablesData["ReportMonitorGraphTrackingStatus2"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus2"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorGraphTrackingStatus2"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus2"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorgraphtrackingstatus2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IF(researchScholarshipProposal.trackingProjectDescResult = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.trackingProjectDescResult) AS trackingProjectDescResultCount,  researchScholarshipProposal.id";
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
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus2"
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
	"m_sql" => "researchScholarshipProposal.trackingProjectDescResult = ''"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'ไม่ได้กำหหนด'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.trackingProjectDescResult"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "IF(researchScholarshipProposal.trackingProjectDescResult = '', 'ไม่ได้กำหหนด', researchScholarshipProposal.trackingProjectDescResult)";
$proto6["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "trackingProjectDescResultCount";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus2"
));

$proto11["m_sql"] = "researchScholarshipProposal.id";
$proto11["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "researchScholarshipProposal";
$proto14["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
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
$proto13["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
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
$proto18["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
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
$proto17["m_srcTableName"] = "ReportMonitorGraphTrackingStatus2";
$proto19=array();
$proto19["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus2"
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
$proto0["m_srcTableName"]="ReportMonitorGraphTrackingStatus2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorgraphtrackingstatus2 = createSqlQuery_reportmonitorgraphtrackingstatus2();


	
				;

		

$tdatareportmonitorgraphtrackingstatus2[".sqlquery"] = $queryData_reportmonitorgraphtrackingstatus2;



$tableEvents["ReportMonitorGraphTrackingStatus2"] = new eventsBase;
$tdatareportmonitorgraphtrackingstatus2[".hasEvents"] = false;

?>