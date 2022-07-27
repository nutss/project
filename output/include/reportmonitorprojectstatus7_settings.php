<?php
$tdatareportmonitorprojectstatus7 = array();
$tdatareportmonitorprojectstatus7[".searchableFields"] = array();
$tdatareportmonitorprojectstatus7[".ShortName"] = "reportmonitorprojectstatus7";
$tdatareportmonitorprojectstatus7[".OwnerID"] = "";
$tdatareportmonitorprojectstatus7[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus7[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus7[".originalPagesByType"] = $tdatareportmonitorprojectstatus7[".pagesByType"];
$tdatareportmonitorprojectstatus7[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus7[".originalPages"] = $tdatareportmonitorprojectstatus7[".pages"];
$tdatareportmonitorprojectstatus7[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus7[".originalDefaultPages"] = $tdatareportmonitorprojectstatus7[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus7 = array();
$fieldToolTipsreportmonitorprojectstatus7 = array();
$pageTitlesreportmonitorprojectstatus7 = array();
$placeHoldersreportmonitorprojectstatus7 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus7["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus7["English"] = array();
	$placeHoldersreportmonitorprojectstatus7["English"] = array();
	$pageTitlesreportmonitorprojectstatus7["English"] = array();
	$fieldLabelsreportmonitorprojectstatus7["English"]["researchProjectDisburse"] = "Research Project Disburse";
	$fieldToolTipsreportmonitorprojectstatus7["English"]["researchProjectDisburse"] = "";
	$placeHoldersreportmonitorprojectstatus7["English"]["researchProjectDisburse"] = "";
	$fieldLabelsreportmonitorprojectstatus7["English"]["researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
	$fieldToolTipsreportmonitorprojectstatus7["English"]["researchOperatingPeriodDisburseCount"] = "";
	$placeHoldersreportmonitorprojectstatus7["English"]["researchOperatingPeriodDisburseCount"] = "";
	$fieldLabelsreportmonitorprojectstatus7["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus7["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus7["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus7["English"]))
		$tdatareportmonitorprojectstatus7[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus7["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus7["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus7["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus7["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus7["Thai"]["researchProjectDisburse"] = "สถานะเบิกจ่าย";
	$fieldToolTipsreportmonitorprojectstatus7["Thai"]["researchProjectDisburse"] = "";
	$placeHoldersreportmonitorprojectstatus7["Thai"]["researchProjectDisburse"] = "";
	$fieldLabelsreportmonitorprojectstatus7["Thai"]["researchOperatingPeriodDisburseCount"] = "ยอดเบิกจ่าย";
	$fieldToolTipsreportmonitorprojectstatus7["Thai"]["researchOperatingPeriodDisburseCount"] = "";
	$placeHoldersreportmonitorprojectstatus7["Thai"]["researchOperatingPeriodDisburseCount"] = "";
	$fieldLabelsreportmonitorprojectstatus7["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus7["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus7["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus7["Thai"]))
		$tdatareportmonitorprojectstatus7[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus7[".NCSearch"] = true;



$tdatareportmonitorprojectstatus7[".shortTableName"] = "reportmonitorprojectstatus7";
$tdatareportmonitorprojectstatus7[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus7[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus7[".entityType"] = 1;
$tdatareportmonitorprojectstatus7[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus7[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus7[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus7[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus7[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus7[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus7[".listAjax"] = false;

	$tdatareportmonitorprojectstatus7[".audit"] = true;

	$tdatareportmonitorprojectstatus7[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus7[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus7[".edit"] = true;
	$tdatareportmonitorprojectstatus7[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus7[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus7[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus7[".add"] = true;
$tdatareportmonitorprojectstatus7[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus7[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus7[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus7[".list"] = true;
}



$tdatareportmonitorprojectstatus7[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus7[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus7[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus7[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus7[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus7[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus7[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus7[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus7[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus7[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus7[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus7[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus7[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus7[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus7[".badgeColor"] = "9acd32";


$tdatareportmonitorprojectstatus7[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus7[".filterFields"] = array();
$tdatareportmonitorprojectstatus7[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus7[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus7[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus7[".googleLikeFields"][] = "researchProjectDisburse";
$tdatareportmonitorprojectstatus7[".googleLikeFields"][] = "researchOperatingPeriodDisburseCount";



$tdatareportmonitorprojectstatus7[".tableType"] = "list";

$tdatareportmonitorprojectstatus7[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus7[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus7[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus7[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus7[".pageSize"] = 20;

$tdatareportmonitorprojectstatus7[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus7[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus7[".orderindexes"] = array();


$tdatareportmonitorprojectstatus7[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'ยอดเบิกจ่าย' AS 'researchProjectDisburse',  IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0) AS 'researchOperatingPeriodDisburseCount'";
$tdatareportmonitorprojectstatus7[".sqlFrom"] = "FROM  	researchScholarshipProposal  	INNER JOIN  	researchOperatingPeriod  	ON   researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$tdatareportmonitorprojectstatus7[".sqlWhereExpr"] = "(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%')";
$tdatareportmonitorprojectstatus7[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus7[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus7[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus7[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus7 = array();
$tdatareportmonitorprojectstatus7[".Keys"] = $tableKeysreportmonitorprojectstatus7;


$tdatareportmonitorprojectstatus7[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus7","id");
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


	$tdatareportmonitorprojectstatus7["id"] = $fdata;
		$tdatareportmonitorprojectstatus7[".searchableFields"][] = "id";
//	researchProjectDisburse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectDisburse";
	$fdata["GoodName"] = "researchProjectDisburse";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus7","researchProjectDisburse");
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


	$tdatareportmonitorprojectstatus7["researchProjectDisburse"] = $fdata;
		$tdatareportmonitorprojectstatus7[".searchableFields"][] = "researchProjectDisburse";
//	researchOperatingPeriodDisburseCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchOperatingPeriodDisburseCount";
	$fdata["GoodName"] = "researchOperatingPeriodDisburseCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus7","researchOperatingPeriodDisburseCount");
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


	$tdatareportmonitorprojectstatus7["researchOperatingPeriodDisburseCount"] = $fdata;
		$tdatareportmonitorprojectstatus7[".searchableFields"][] = "researchOperatingPeriodDisburseCount";


$tables_data["ReportMonitorProjectStatus7"]=&$tdatareportmonitorprojectstatus7;
$field_labels["ReportMonitorProjectStatus7"] = &$fieldLabelsreportmonitorprojectstatus7;
$fieldToolTips["ReportMonitorProjectStatus7"] = &$fieldToolTipsreportmonitorprojectstatus7;
$placeHolders["ReportMonitorProjectStatus7"] = &$placeHoldersreportmonitorprojectstatus7;
$page_titles["ReportMonitorProjectStatus7"] = &$pageTitlesreportmonitorprojectstatus7;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus7"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus7"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus7"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus7"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus7"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus7"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus7"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus7()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'ยอดเบิกจ่าย' AS 'researchProjectDisburse',  IFNULL(SUM(researchOperatingPeriod.researchOperatingPeriodDisburse),0) AS 'researchOperatingPeriodDisburseCount'";
$proto0["m_strFrom"] = "FROM  	researchScholarshipProposal  	INNER JOIN  	researchOperatingPeriod  	ON   researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$proto0["m_strWhere"] = "(researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchScholarshipProposal.researchProjectDisburseStatus LIKE '%100.00%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchProjectDisburseStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus7"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "LIKE '%100.00%'";
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
	"m_srcTableName" => "ReportMonitorProjectStatus7"
));

$proto6["m_sql"] = "researchScholarshipProposal.id";
$proto6["m_srcTableName"] = "ReportMonitorProjectStatus7";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'ยอดเบิกจ่าย'"
));

$proto8["m_sql"] = "'ยอดเบิกจ่าย'";
$proto8["m_srcTableName"] = "ReportMonitorProjectStatus7";
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
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus7";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "researchOperatingPeriodDisburseCount";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "researchScholarshipProposal";
$proto15["m_srcTableName"] = "ReportMonitorProjectStatus7";
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
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus7";
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
$proto19["m_srcTableName"] = "ReportMonitorProjectStatus7";
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
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus7";
$proto20=array();
$proto20["m_sql"] = "researchScholarshipProposal.id = researchOperatingPeriod.researchProjectID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus7"
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
$proto0["m_srcTableName"]="ReportMonitorProjectStatus7";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus7 = createSqlQuery_reportmonitorprojectstatus7();


	
				;

			

$tdatareportmonitorprojectstatus7[".sqlquery"] = $queryData_reportmonitorprojectstatus7;



include_once(getabspath("include/reportmonitorprojectstatus7_events.php"));
$tableEvents["ReportMonitorProjectStatus7"] = new eventclass_reportmonitorprojectstatus7;
$tdatareportmonitorprojectstatus7[".hasEvents"] = true;

?>