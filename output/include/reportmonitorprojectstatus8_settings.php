<?php
$tdatareportmonitorprojectstatus8 = array();
$tdatareportmonitorprojectstatus8[".searchableFields"] = array();
$tdatareportmonitorprojectstatus8[".ShortName"] = "reportmonitorprojectstatus8";
$tdatareportmonitorprojectstatus8[".OwnerID"] = "";
$tdatareportmonitorprojectstatus8[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus8[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus8[".originalPagesByType"] = $tdatareportmonitorprojectstatus8[".pagesByType"];
$tdatareportmonitorprojectstatus8[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus8[".originalPages"] = $tdatareportmonitorprojectstatus8[".pages"];
$tdatareportmonitorprojectstatus8[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus8[".originalDefaultPages"] = $tdatareportmonitorprojectstatus8[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus8 = array();
$fieldToolTipsreportmonitorprojectstatus8 = array();
$pageTitlesreportmonitorprojectstatus8 = array();
$placeHoldersreportmonitorprojectstatus8 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus8["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus8["English"] = array();
	$placeHoldersreportmonitorprojectstatus8["English"] = array();
	$pageTitlesreportmonitorprojectstatus8["English"] = array();
	$fieldLabelsreportmonitorprojectstatus8["English"]["researchProjectDisburse"] = "Research Project Disburse";
	$fieldToolTipsreportmonitorprojectstatus8["English"]["researchProjectDisburse"] = "";
	$placeHoldersreportmonitorprojectstatus8["English"]["researchProjectDisburse"] = "";
	$fieldLabelsreportmonitorprojectstatus8["English"]["researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
	$fieldToolTipsreportmonitorprojectstatus8["English"]["researchOperatingPeriodDisburseCount"] = "";
	$placeHoldersreportmonitorprojectstatus8["English"]["researchOperatingPeriodDisburseCount"] = "";
	$fieldLabelsreportmonitorprojectstatus8["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus8["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus8["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus8["English"]))
		$tdatareportmonitorprojectstatus8[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus8["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus8["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus8["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus8["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus8["Thai"]["researchProjectDisburse"] = "สถานะค้างเบิกจ่าย";
	$fieldToolTipsreportmonitorprojectstatus8["Thai"]["researchProjectDisburse"] = "";
	$placeHoldersreportmonitorprojectstatus8["Thai"]["researchProjectDisburse"] = "";
	$fieldLabelsreportmonitorprojectstatus8["Thai"]["researchOperatingPeriodDisburseCount"] = "ยอดค้างเบิกจ่าย";
	$fieldToolTipsreportmonitorprojectstatus8["Thai"]["researchOperatingPeriodDisburseCount"] = "";
	$placeHoldersreportmonitorprojectstatus8["Thai"]["researchOperatingPeriodDisburseCount"] = "";
	$fieldLabelsreportmonitorprojectstatus8["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus8["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus8["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus8["Thai"]))
		$tdatareportmonitorprojectstatus8[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus8[".NCSearch"] = true;



$tdatareportmonitorprojectstatus8[".shortTableName"] = "reportmonitorprojectstatus8";
$tdatareportmonitorprojectstatus8[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus8[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus8[".entityType"] = 1;
$tdatareportmonitorprojectstatus8[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus8[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus8[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus8[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus8[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus8[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus8[".listAjax"] = false;

	$tdatareportmonitorprojectstatus8[".audit"] = true;

	$tdatareportmonitorprojectstatus8[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus8[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus8[".edit"] = true;
	$tdatareportmonitorprojectstatus8[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus8[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus8[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus8[".add"] = true;
$tdatareportmonitorprojectstatus8[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus8[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus8[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus8[".list"] = true;
}



$tdatareportmonitorprojectstatus8[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus8[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus8[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus8[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus8[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus8[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus8[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus8[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus8[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus8[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus8[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus8[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus8[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus8[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus8[".badgeColor"] = "e67349";


$tdatareportmonitorprojectstatus8[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus8[".filterFields"] = array();
$tdatareportmonitorprojectstatus8[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus8[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus8[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus8[".googleLikeFields"][] = "researchProjectDisburse";
$tdatareportmonitorprojectstatus8[".googleLikeFields"][] = "researchOperatingPeriodDisburseCount";



$tdatareportmonitorprojectstatus8[".tableType"] = "list";

$tdatareportmonitorprojectstatus8[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus8[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus8[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus8[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus8[".pageSize"] = 20;

$tdatareportmonitorprojectstatus8[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus8[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus8[".orderindexes"] = array();


$tdatareportmonitorprojectstatus8[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'ยอดเบิกจ่าย' AS 'researchProjectDisburse',  IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0) AS 'researchOperatingPeriodDisburseCount'";
$tdatareportmonitorprojectstatus8[".sqlFrom"] = "FROM  	researchScholarshipProposal  	INNER JOIN  	researchOperatingPeriod  	ON   researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$tdatareportmonitorprojectstatus8[".sqlWhereExpr"] = "(researchScholarshipProposal.researchProjectDisburseStatus NOT LIKE '%100.00%')";
$tdatareportmonitorprojectstatus8[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus8[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus8[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus8[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus8 = array();
$tdatareportmonitorprojectstatus8[".Keys"] = $tableKeysreportmonitorprojectstatus8;


$tdatareportmonitorprojectstatus8[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus8","id");
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


	$tdatareportmonitorprojectstatus8["id"] = $fdata;
		$tdatareportmonitorprojectstatus8[".searchableFields"][] = "id";
//	researchProjectDisburse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectDisburse";
	$fdata["GoodName"] = "researchProjectDisburse";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus8","researchProjectDisburse");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDisburse";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'ยอดเบิกจ่าย'";

	
	
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


	$tdatareportmonitorprojectstatus8["researchProjectDisburse"] = $fdata;
		$tdatareportmonitorprojectstatus8[".searchableFields"][] = "researchProjectDisburse";
//	researchOperatingPeriodDisburseCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchOperatingPeriodDisburseCount";
	$fdata["GoodName"] = "researchOperatingPeriodDisburseCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus8","researchOperatingPeriodDisburseCount");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodDisburseCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatareportmonitorprojectstatus8["researchOperatingPeriodDisburseCount"] = $fdata;
		$tdatareportmonitorprojectstatus8[".searchableFields"][] = "researchOperatingPeriodDisburseCount";


$tables_data["ReportMonitorProjectStatus8"]=&$tdatareportmonitorprojectstatus8;
$field_labels["ReportMonitorProjectStatus8"] = &$fieldLabelsreportmonitorprojectstatus8;
$fieldToolTips["ReportMonitorProjectStatus8"] = &$fieldToolTipsreportmonitorprojectstatus8;
$placeHolders["ReportMonitorProjectStatus8"] = &$placeHoldersreportmonitorprojectstatus8;
$page_titles["ReportMonitorProjectStatus8"] = &$pageTitlesreportmonitorprojectstatus8;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus8"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus8"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus8"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus8"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus8"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus8"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus8"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus8()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'ยอดเบิกจ่าย' AS 'researchProjectDisburse',  IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0) AS 'researchOperatingPeriodDisburseCount'";
$proto0["m_strFrom"] = "FROM  	researchScholarshipProposal  	INNER JOIN  	researchOperatingPeriod  	ON   researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$proto0["m_strWhere"] = "(researchScholarshipProposal.researchProjectDisburseStatus NOT LIKE '%100.00%')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchScholarshipProposal.researchProjectDisburseStatus NOT LIKE '%100.00%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchProjectDisburseStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus8"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "NOT LIKE '%100.00%'";
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
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus8"
));

$proto6["m_sql"] = "researchScholarshipProposal.id";
$proto6["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'ยอดเบิกจ่าย'"
));

$proto8["m_sql"] = "'ยอดเบิกจ่าย'";
$proto8["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "researchProjectDisburse";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(researchOperatingPeriod.researchOperatingPeriodDisburse)"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0)";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "researchOperatingPeriodDisburseCount";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "researchScholarshipProposal";
$proto15["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "researchRegisterID";
$proto15["m_columns"][] = "researchProjectNo";
$proto15["m_columns"][] = "researchProjectGroupName";
$proto15["m_columns"][] = "researchProjectNameThai";
$proto15["m_columns"][] = "researchProjectNameEng";
$proto15["m_columns"][] = "researchProjectPeriodYear";
$proto15["m_columns"][] = "researchProjectPeriodMonth";
$proto15["m_columns"][] = "researchProjectStartDate";
$proto15["m_columns"][] = "researchProjectEndDate";
$proto15["m_columns"][] = "researchOperatingPeriodEndDate";
$proto15["m_columns"][] = "researchProjectRequestedBudget";
$proto15["m_columns"][] = "researchProjectDepartment";
$proto15["m_columns"][] = "researchProjectMainField";
$proto15["m_columns"][] = "researchProjectSubField";
$proto15["m_columns"][] = "researchProjectHeadName";
$proto15["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto15["m_columns"][] = "researchProjectAffiliationName";
$proto15["m_columns"][] = "researchProjectAffiliationPosition";
$proto15["m_columns"][] = "researchProjectSubAffiliationName";
$proto15["m_columns"][] = "researchProjectAffiliationMobile";
$proto15["m_columns"][] = "researchProjectAffiliationTelephone";
$proto15["m_columns"][] = "researchProjectAffiliationEmail";
$proto15["m_columns"][] = "researchProjectFile";
$proto15["m_columns"][] = "researchProjectBankAccountName";
$proto15["m_columns"][] = "researchProjectBankNo";
$proto15["m_columns"][] = "researchProjectBankName";
$proto15["m_columns"][] = "researchProjectStatus";
$proto15["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto15["m_columns"][] = "researchProjectAppointmentStatus";
$proto15["m_columns"][] = "researchProjectDisburseStatus";
$proto15["m_columns"][] = "contractSignDate";
$proto15["m_columns"][] = "contractSignFile";
$proto15["m_columns"][] = "projectStatusDesc";
$proto15["m_columns"][] = "projectStatus";
$proto15["m_columns"][] = "trackingProjectDesc";
$proto15["m_columns"][] = "trackingProjectDescResult";
$proto15["m_columns"][] = "geographiesID";
$proto15["m_columns"][] = "geographiesName";
$proto15["m_columns"][] = "provincesID";
$proto15["m_columns"][] = "provincesName";
$proto15["m_columns"][] = "districtsID";
$proto15["m_columns"][] = "districtsName";
$proto15["m_columns"][] = "amphuresID";
$proto15["m_columns"][] = "amphuresName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "researchScholarshipProposal";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "researchOperatingPeriod";
$proto19["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "researchProjectID";
$proto19["m_columns"][] = "researchOperatingPeriodNo";
$proto19["m_columns"][] = "researchOperatingPeriodName";
$proto19["m_columns"][] = "researchOperatingPeriodEndDate";
$proto19["m_columns"][] = "researchOperatingPeriodDisburse";
$proto19["m_columns"][] = "researchOperatingPeriodDisbursePercent";
$proto19["m_columns"][] = "researchProjectDisburseStatus";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN  	researchOperatingPeriod  	ON   researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus8";
$proto20=array();
$proto20["m_sql"] = "researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus8"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= researchOperatingPeriod.researchProjectID";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportMonitorProjectStatus8";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus8 = createSqlQuery_reportmonitorprojectstatus8();


	
				;

			

$tdatareportmonitorprojectstatus8[".sqlquery"] = $queryData_reportmonitorprojectstatus8;



include_once(getabspath("include/reportmonitorprojectstatus8_events.php"));
$tableEvents["ReportMonitorProjectStatus8"] = new eventclass_reportmonitorprojectstatus8;
$tdatareportmonitorprojectstatus8[".hasEvents"] = true;

?>