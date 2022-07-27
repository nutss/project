<?php
$tdatareportmonitorprojectstatus3 = array();
$tdatareportmonitorprojectstatus3[".searchableFields"] = array();
$tdatareportmonitorprojectstatus3[".ShortName"] = "reportmonitorprojectstatus3";
$tdatareportmonitorprojectstatus3[".OwnerID"] = "";
$tdatareportmonitorprojectstatus3[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus3[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus3[".originalPagesByType"] = $tdatareportmonitorprojectstatus3[".pagesByType"];
$tdatareportmonitorprojectstatus3[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus3[".originalPages"] = $tdatareportmonitorprojectstatus3[".pages"];
$tdatareportmonitorprojectstatus3[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus3[".originalDefaultPages"] = $tdatareportmonitorprojectstatus3[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus3 = array();
$fieldToolTipsreportmonitorprojectstatus3 = array();
$pageTitlesreportmonitorprojectstatus3 = array();
$placeHoldersreportmonitorprojectstatus3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus3["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus3["English"] = array();
	$placeHoldersreportmonitorprojectstatus3["English"] = array();
	$pageTitlesreportmonitorprojectstatus3["English"] = array();
	$fieldLabelsreportmonitorprojectstatus3["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus3["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus3["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus3["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus3["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus3["English"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus3["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus3["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus3["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus3["English"]))
		$tdatareportmonitorprojectstatus3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus3["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus3["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus3["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus3["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus3["Thai"]["projectStatusName"] = "สถานะอยู่ระหว่างการขยายเวลา";
	$fieldToolTipsreportmonitorprojectstatus3["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus3["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus3["Thai"]["projectStatusCount"] = "";
	$fieldToolTipsreportmonitorprojectstatus3["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus3["Thai"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus3["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus3["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus3["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus3["Thai"]))
		$tdatareportmonitorprojectstatus3[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus3[".NCSearch"] = true;



$tdatareportmonitorprojectstatus3[".shortTableName"] = "reportmonitorprojectstatus3";
$tdatareportmonitorprojectstatus3[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus3[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus3[".entityType"] = 1;
$tdatareportmonitorprojectstatus3[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus3[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus3[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus3[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus3[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus3[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus3[".listAjax"] = false;

	$tdatareportmonitorprojectstatus3[".audit"] = true;

	$tdatareportmonitorprojectstatus3[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus3[".edit"] = true;
	$tdatareportmonitorprojectstatus3[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus3[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus3[".add"] = true;
$tdatareportmonitorprojectstatus3[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus3[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus3[".list"] = true;
}



$tdatareportmonitorprojectstatus3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus3[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus3[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus3[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus3[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus3[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus3[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus3[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus3[".badgeColor"] = "4169e1";


$tdatareportmonitorprojectstatus3[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus3[".filterFields"] = array();
$tdatareportmonitorprojectstatus3[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus3[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus3[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus3[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus3[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus3[".tableType"] = "list";

$tdatareportmonitorprojectstatus3[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus3[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus3[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus3[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus3[".pageSize"] = 20;

$tdatareportmonitorprojectstatus3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus3[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus3[".orderindexes"] = array();


$tdatareportmonitorprojectstatus3[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'อยู่ระหว่างการขยายเวลา' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$tdatareportmonitorprojectstatus3[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorprojectstatus3[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการขยายเวลา') AND (researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorprojectstatus3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus3[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus3[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus3 = array();
$tdatareportmonitorprojectstatus3[".Keys"] = $tableKeysreportmonitorprojectstatus3;


$tdatareportmonitorprojectstatus3[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus3","id");
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


	$tdatareportmonitorprojectstatus3["id"] = $fdata;
		$tdatareportmonitorprojectstatus3[".searchableFields"][] = "id";
//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus3","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'อยู่ระหว่างการขยายเวลา'";

	
	
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


	$tdatareportmonitorprojectstatus3["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus3[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus3","projectStatusCount");
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


	$tdatareportmonitorprojectstatus3["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus3[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus3"]=&$tdatareportmonitorprojectstatus3;
$field_labels["ReportMonitorProjectStatus3"] = &$fieldLabelsreportmonitorprojectstatus3;
$fieldToolTips["ReportMonitorProjectStatus3"] = &$fieldToolTipsreportmonitorprojectstatus3;
$placeHolders["ReportMonitorProjectStatus3"] = &$placeHoldersreportmonitorprojectstatus3;
$page_titles["ReportMonitorProjectStatus3"] = &$pageTitlesreportmonitorprojectstatus3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus3"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus3"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus3"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus3"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus3"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus3"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'อยู่ระหว่างการขยายเวลา' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการขยายเวลา') AND (researchScholarshipProposal.projectStatus <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการขยายเวลา') AND (researchScholarshipProposal.projectStatus <> '')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการขยายเวลา') AND (researchScholarshipProposal.projectStatus <> '')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "researchScholarshipProposal.projectStatus ='อยู่ระหว่างการขยายเวลา'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus3"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='อยู่ระหว่างการขยายเวลา'";
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
	"m_srcTableName" => "ReportMonitorProjectStatus3"
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
	"m_srcTableName" => "ReportMonitorProjectStatus3"
));

$proto10["m_sql"] = "researchScholarshipProposal.id";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'อยู่ระหว่างการขยายเวลา'"
));

$proto12["m_sql"] = "'อยู่ระหว่างการขยายเวลา'";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus3";
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
	"m_srcTableName" => "ReportMonitorProjectStatus3"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(researchScholarshipProposal.id)";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipProposal";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus3";
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
$proto17["m_srcTableName"] = "ReportMonitorProjectStatus3";
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
$proto22["m_srcTableName"] = "ReportMonitorProjectStatus3";
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
$proto21["m_srcTableName"] = "ReportMonitorProjectStatus3";
$proto23=array();
$proto23["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus3"
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
$proto0["m_srcTableName"]="ReportMonitorProjectStatus3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus3 = createSqlQuery_reportmonitorprojectstatus3();


	
				;

			

$tdatareportmonitorprojectstatus3[".sqlquery"] = $queryData_reportmonitorprojectstatus3;



include_once(getabspath("include/reportmonitorprojectstatus3_events.php"));
$tableEvents["ReportMonitorProjectStatus3"] = new eventclass_reportmonitorprojectstatus3;
$tdatareportmonitorprojectstatus3[".hasEvents"] = true;

?>