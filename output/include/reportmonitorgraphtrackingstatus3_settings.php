<?php
$tdatareportmonitorgraphtrackingstatus3 = array();
$tdatareportmonitorgraphtrackingstatus3[".searchableFields"] = array();
$tdatareportmonitorgraphtrackingstatus3[".ShortName"] = "reportmonitorgraphtrackingstatus3";
$tdatareportmonitorgraphtrackingstatus3[".OwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus3[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorgraphtrackingstatus3[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatareportmonitorgraphtrackingstatus3[".originalPagesByType"] = $tdatareportmonitorgraphtrackingstatus3[".pagesByType"];
$tdatareportmonitorgraphtrackingstatus3[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorgraphtrackingstatus3[".originalPages"] = $tdatareportmonitorgraphtrackingstatus3[".pages"];
$tdatareportmonitorgraphtrackingstatus3[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatareportmonitorgraphtrackingstatus3[".originalDefaultPages"] = $tdatareportmonitorgraphtrackingstatus3[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorgraphtrackingstatus3 = array();
$fieldToolTipsreportmonitorgraphtrackingstatus3 = array();
$pageTitlesreportmonitorgraphtrackingstatus3 = array();
$placeHoldersreportmonitorgraphtrackingstatus3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorgraphtrackingstatus3["English"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus3["English"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus3["English"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus3["English"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus3["English"]["researchProjectDisburseStatuss"] = "Research Project Disburse Statuss";
	$fieldToolTipsreportmonitorgraphtrackingstatus3["English"]["researchProjectDisburseStatuss"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus3["English"]["researchProjectDisburseStatuss"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus3["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus3["English"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus3["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus3["English"]))
		$tdatareportmonitorgraphtrackingstatus3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorgraphtrackingstatus3["Thai"] = array();
	$fieldToolTipsreportmonitorgraphtrackingstatus3["Thai"] = array();
	$placeHoldersreportmonitorgraphtrackingstatus3["Thai"] = array();
	$pageTitlesreportmonitorgraphtrackingstatus3["Thai"] = array();
	$fieldLabelsreportmonitorgraphtrackingstatus3["Thai"]["researchProjectDisburseStatuss"] = "สถานะการเบิกจ่าย";
	$fieldToolTipsreportmonitorgraphtrackingstatus3["Thai"]["researchProjectDisburseStatuss"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus3["Thai"]["researchProjectDisburseStatuss"] = "";
	$fieldLabelsreportmonitorgraphtrackingstatus3["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorgraphtrackingstatus3["Thai"]["id"] = "";
	$placeHoldersreportmonitorgraphtrackingstatus3["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorgraphtrackingstatus3["Thai"]))
		$tdatareportmonitorgraphtrackingstatus3[".isUseToolTips"] = true;
}


	$tdatareportmonitorgraphtrackingstatus3[".NCSearch"] = true;

	$tdatareportmonitorgraphtrackingstatus3[".ChartRefreshTime"] = 0;


$tdatareportmonitorgraphtrackingstatus3[".shortTableName"] = "reportmonitorgraphtrackingstatus3";
$tdatareportmonitorgraphtrackingstatus3[".nSecOptions"] = 0;

$tdatareportmonitorgraphtrackingstatus3[".mainTableOwnerID"] = "";
$tdatareportmonitorgraphtrackingstatus3[".entityType"] = 3;
$tdatareportmonitorgraphtrackingstatus3[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorgraphtrackingstatus3[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorgraphtrackingstatus3[".showAddInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus3[".showEditInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus3[".showViewInPopup"] = false;

$tdatareportmonitorgraphtrackingstatus3[".listAjax"] = false;
//	temporary
//$tdatareportmonitorgraphtrackingstatus3[".listAjax"] = false;

	$tdatareportmonitorgraphtrackingstatus3[".audit"] = false;

	$tdatareportmonitorgraphtrackingstatus3[".locking"] = false;


$pages = $tdatareportmonitorgraphtrackingstatus3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorgraphtrackingstatus3[".edit"] = true;
	$tdatareportmonitorgraphtrackingstatus3[".afterEditAction"] = 1;
	$tdatareportmonitorgraphtrackingstatus3[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorgraphtrackingstatus3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorgraphtrackingstatus3[".add"] = true;
$tdatareportmonitorgraphtrackingstatus3[".afterAddAction"] = 1;
$tdatareportmonitorgraphtrackingstatus3[".closePopupAfterAdd"] = 1;
$tdatareportmonitorgraphtrackingstatus3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorgraphtrackingstatus3[".list"] = true;
}



$tdatareportmonitorgraphtrackingstatus3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorgraphtrackingstatus3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorgraphtrackingstatus3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorgraphtrackingstatus3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorgraphtrackingstatus3[".printFriendly"] = true;
}



$tdatareportmonitorgraphtrackingstatus3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorgraphtrackingstatus3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorgraphtrackingstatus3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorgraphtrackingstatus3[".isUseAjaxSuggest"] = true;




												

$tdatareportmonitorgraphtrackingstatus3[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorgraphtrackingstatus3[".buttonsAdded"] = false;

$tdatareportmonitorgraphtrackingstatus3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportmonitorgraphtrackingstatus3[".isUseTimeForSearch"] = false;


$tdatareportmonitorgraphtrackingstatus3[".badgeColor"] = "4169e1";


$tdatareportmonitorgraphtrackingstatus3[".allSearchFields"] = array();
$tdatareportmonitorgraphtrackingstatus3[".filterFields"] = array();
$tdatareportmonitorgraphtrackingstatus3[".requiredSearchFields"] = array();

$tdatareportmonitorgraphtrackingstatus3[".googleLikeFields"] = array();
$tdatareportmonitorgraphtrackingstatus3[".googleLikeFields"][] = "researchProjectDisburseStatuss";
$tdatareportmonitorgraphtrackingstatus3[".googleLikeFields"][] = "id";



$tdatareportmonitorgraphtrackingstatus3[".tableType"] = "chart";

$tdatareportmonitorgraphtrackingstatus3[".printerPageOrientation"] = 0;
$tdatareportmonitorgraphtrackingstatus3[".nPrinterPageScale"] = 100;

$tdatareportmonitorgraphtrackingstatus3[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorgraphtrackingstatus3[".geocodingEnabled"] = false;



// chart settings
$tdatareportmonitorgraphtrackingstatus3[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatareportmonitorgraphtrackingstatus3[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorgraphtrackingstatus3[".orderindexes"] = array();


$tdatareportmonitorgraphtrackingstatus3[".sqlHead"] = "    SELECT IF(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%', 'ยอดเบิกจ่าย', 'ยอดค้างเบิกจ่าย') AS researchProjectDisburseStatuss,  researchScholarshipProposal.id";
$tdatareportmonitorgraphtrackingstatus3[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorgraphtrackingstatus3[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorgraphtrackingstatus3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorgraphtrackingstatus3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorgraphtrackingstatus3[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorgraphtrackingstatus3[".highlightSearchResults"] = true;

$tableKeysreportmonitorgraphtrackingstatus3 = array();
$tdatareportmonitorgraphtrackingstatus3[".Keys"] = $tableKeysreportmonitorgraphtrackingstatus3;


$tdatareportmonitorgraphtrackingstatus3[".hideMobileList"] = array();




//	researchProjectDisburseStatuss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "researchProjectDisburseStatuss";
	$fdata["GoodName"] = "researchProjectDisburseStatuss";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus3","researchProjectDisburseStatuss");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDisburseStatuss";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%', 'ยอดเบิกจ่าย', 'ยอดค้างเบิกจ่าย')";

	
	
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


	$tdatareportmonitorgraphtrackingstatus3["researchProjectDisburseStatuss"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus3[".searchableFields"][] = "researchProjectDisburseStatuss";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorGraphTrackingStatus3","id");
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


	$tdatareportmonitorgraphtrackingstatus3["id"] = $fdata;
		$tdatareportmonitorgraphtrackingstatus3[".searchableFields"][] = "id";

$tdatareportmonitorgraphtrackingstatus3[".chartLabelField"] = "researchProjectDisburseStatuss";
$tdatareportmonitorgraphtrackingstatus3[".chartSeries"] = array();
$tdatareportmonitorgraphtrackingstatus3[".chartSeries"][] = array( 
	"field" => "id",
	"total" => ""
);
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">ReportMonitorGraphTrackingStatus3</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '</attr>';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '<attr value="1">
		<attr value="name">researchProjectDisburseStatuss</attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '<attr value="head">'.xmlencode("สถานะการเบิกจ่าย").'</attr>
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
$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '<attr value="0">
		<attr value="name">researchProjectDisburseStatuss</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus3","researchProjectDisburseStatuss")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '<attr value="1">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportMonitorGraphTrackingStatus3","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareportmonitorgraphtrackingstatus3[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">ReportMonitorGraphTrackingStatus3</attr>
<attr value="short_table_name">reportmonitorgraphtrackingstatus3</attr>
</attr>

</chart>';

$tables_data["ReportMonitorGraphTrackingStatus3"]=&$tdatareportmonitorgraphtrackingstatus3;
$field_labels["ReportMonitorGraphTrackingStatus3"] = &$fieldLabelsreportmonitorgraphtrackingstatus3;
$fieldToolTips["ReportMonitorGraphTrackingStatus3"] = &$fieldToolTipsreportmonitorgraphtrackingstatus3;
$placeHolders["ReportMonitorGraphTrackingStatus3"] = &$placeHoldersreportmonitorgraphtrackingstatus3;
$page_titles["ReportMonitorGraphTrackingStatus3"] = &$pageTitlesreportmonitorgraphtrackingstatus3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorGraphTrackingStatus3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorGraphTrackingStatus3"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorGraphTrackingStatus3"][0] = $masterParams;
				$masterTablesData["ReportMonitorGraphTrackingStatus3"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus3"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorGraphTrackingStatus3"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorGraphTrackingStatus3"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorgraphtrackingstatus3()
{
$proto0=array();
$proto0["m_strHead"] = "    SELECT";
$proto0["m_strFieldList"] = "IF(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%', 'ยอดเบิกจ่าย', 'ยอดค้างเบิกจ่าย') AS researchProjectDisburseStatuss,  researchScholarshipProposal.id";
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
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus3"
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
	"m_sql" => "researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'ยอดเบิกจ่าย'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'ยอดค้างเบิกจ่าย'"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "IF(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%', 'ยอดเบิกจ่าย', 'ยอดค้างเบิกจ่าย')";
$proto6["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "researchProjectDisburseStatuss";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus3"
));

$proto11["m_sql"] = "researchScholarshipProposal.id";
$proto11["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "researchScholarshipProposal";
$proto14["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
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
$proto13["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
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
$proto18["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
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
$proto17["m_srcTableName"] = "ReportMonitorGraphTrackingStatus3";
$proto19=array();
$proto19["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorGraphTrackingStatus3"
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
$proto0["m_srcTableName"]="ReportMonitorGraphTrackingStatus3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorgraphtrackingstatus3 = createSqlQuery_reportmonitorgraphtrackingstatus3();


	
				;

		

$tdatareportmonitorgraphtrackingstatus3[".sqlquery"] = $queryData_reportmonitorgraphtrackingstatus3;



$tableEvents["ReportMonitorGraphTrackingStatus3"] = new eventsBase;
$tdatareportmonitorgraphtrackingstatus3[".hasEvents"] = false;

?>