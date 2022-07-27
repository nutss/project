<?php
$tdatareportmonitorprojectstatus5 = array();
$tdatareportmonitorprojectstatus5[".searchableFields"] = array();
$tdatareportmonitorprojectstatus5[".ShortName"] = "reportmonitorprojectstatus5";
$tdatareportmonitorprojectstatus5[".OwnerID"] = "";
$tdatareportmonitorprojectstatus5[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus5[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus5[".originalPagesByType"] = $tdatareportmonitorprojectstatus5[".pagesByType"];
$tdatareportmonitorprojectstatus5[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus5[".originalPages"] = $tdatareportmonitorprojectstatus5[".pages"];
$tdatareportmonitorprojectstatus5[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus5[".originalDefaultPages"] = $tdatareportmonitorprojectstatus5[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus5 = array();
$fieldToolTipsreportmonitorprojectstatus5 = array();
$pageTitlesreportmonitorprojectstatus5 = array();
$placeHoldersreportmonitorprojectstatus5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus5["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus5["English"] = array();
	$placeHoldersreportmonitorprojectstatus5["English"] = array();
	$pageTitlesreportmonitorprojectstatus5["English"] = array();
	$fieldLabelsreportmonitorprojectstatus5["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus5["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus5["English"]["id"] = "";
	$fieldLabelsreportmonitorprojectstatus5["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus5["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus5["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus5["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus5["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus5["English"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus5["English"]))
		$tdatareportmonitorprojectstatus5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus5["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus5["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus5["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus5["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus5["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus5["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus5["Thai"]["id"] = "";
	$fieldLabelsreportmonitorprojectstatus5["Thai"]["projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldToolTipsreportmonitorprojectstatus5["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus5["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus5["Thai"]["projectStatusCount"] = "";
	$fieldToolTipsreportmonitorprojectstatus5["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus5["Thai"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus5["Thai"]))
		$tdatareportmonitorprojectstatus5[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus5[".NCSearch"] = true;



$tdatareportmonitorprojectstatus5[".shortTableName"] = "reportmonitorprojectstatus5";
$tdatareportmonitorprojectstatus5[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus5[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus5[".entityType"] = 1;
$tdatareportmonitorprojectstatus5[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus5[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus5[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus5[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus5[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus5[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus5[".listAjax"] = false;

	$tdatareportmonitorprojectstatus5[".audit"] = true;

	$tdatareportmonitorprojectstatus5[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus5[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus5[".edit"] = true;
	$tdatareportmonitorprojectstatus5[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus5[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus5[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus5[".add"] = true;
$tdatareportmonitorprojectstatus5[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus5[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus5[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus5[".list"] = true;
}



$tdatareportmonitorprojectstatus5[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus5[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus5[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus5[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus5[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus5[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus5[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus5[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus5[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus5[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus5[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus5[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus5[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus5[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus5[".badgeColor"] = "bc8f8f";


$tdatareportmonitorprojectstatus5[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus5[".filterFields"] = array();
$tdatareportmonitorprojectstatus5[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus5[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus5[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus5[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus5[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus5[".tableType"] = "list";

$tdatareportmonitorprojectstatus5[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus5[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus5[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus5[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus5[".pageSize"] = 20;

$tdatareportmonitorprojectstatus5[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus5[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus5[".orderindexes"] = array();


$tdatareportmonitorprojectstatus5[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'นำไปใช้ประโยชน์' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$tdatareportmonitorprojectstatus5[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorprojectstatus5[".sqlWhereExpr"] = "(researchScholarshipProposal.trackingProjectDescResult ='นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$tdatareportmonitorprojectstatus5[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus5[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus5[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus5 = array();
$tdatareportmonitorprojectstatus5[".Keys"] = $tableKeysreportmonitorprojectstatus5;


$tdatareportmonitorprojectstatus5[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus5","id");
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


	$tdatareportmonitorprojectstatus5["id"] = $fdata;
		$tdatareportmonitorprojectstatus5[".searchableFields"][] = "id";
//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus5","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'นำไปใช้ประโยชน์'";

	
	
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


	$tdatareportmonitorprojectstatus5["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus5[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus5","projectStatusCount");
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


	$tdatareportmonitorprojectstatus5["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus5[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus5"]=&$tdatareportmonitorprojectstatus5;
$field_labels["ReportMonitorProjectStatus5"] = &$fieldLabelsreportmonitorprojectstatus5;
$fieldToolTips["ReportMonitorProjectStatus5"] = &$fieldToolTipsreportmonitorprojectstatus5;
$placeHolders["ReportMonitorProjectStatus5"] = &$placeHoldersreportmonitorprojectstatus5;
$page_titles["ReportMonitorProjectStatus5"] = &$pageTitlesreportmonitorprojectstatus5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus5"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus5"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus5"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus5"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus5"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus5"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus5"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'นำไปใช้ประโยชน์' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.trackingProjectDescResult ='นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(researchScholarshipProposal.trackingProjectDescResult ='นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(researchScholarshipProposal.trackingProjectDescResult ='นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "researchScholarshipProposal.trackingProjectDescResult ='นำไปใช้ประโยชน์'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "trackingProjectDescResult",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus5"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='นำไปใช้ประโยชน์'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "researchScholarshipProposal.trackingProjectDescResult <> ''";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "trackingProjectDescResult",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus5"
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
	"m_srcTableName" => "ReportMonitorProjectStatus5"
));

$proto10["m_sql"] = "researchScholarshipProposal.id";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'นำไปใช้ประโยชน์'"
));

$proto12["m_sql"] = "'นำไปใช้ประโยชน์'";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus5";
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
	"m_srcTableName" => "ReportMonitorProjectStatus5"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(researchScholarshipProposal.id)";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipProposal";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus5";
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
$proto17["m_srcTableName"] = "ReportMonitorProjectStatus5";
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
$proto22["m_srcTableName"] = "ReportMonitorProjectStatus5";
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
$proto21["m_srcTableName"] = "ReportMonitorProjectStatus5";
$proto23=array();
$proto23["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus5"
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
$proto0["m_srcTableName"]="ReportMonitorProjectStatus5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus5 = createSqlQuery_reportmonitorprojectstatus5();


	
				;

			

$tdatareportmonitorprojectstatus5[".sqlquery"] = $queryData_reportmonitorprojectstatus5;



include_once(getabspath("include/reportmonitorprojectstatus5_events.php"));
$tableEvents["ReportMonitorProjectStatus5"] = new eventclass_reportmonitorprojectstatus5;
$tdatareportmonitorprojectstatus5[".hasEvents"] = true;

?>