<?php
$tdatareportmonitorprojectstatus2 = array();
$tdatareportmonitorprojectstatus2[".searchableFields"] = array();
$tdatareportmonitorprojectstatus2[".ShortName"] = "reportmonitorprojectstatus2";
$tdatareportmonitorprojectstatus2[".OwnerID"] = "";
$tdatareportmonitorprojectstatus2[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus2[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus2[".originalPagesByType"] = $tdatareportmonitorprojectstatus2[".pagesByType"];
$tdatareportmonitorprojectstatus2[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus2[".originalPages"] = $tdatareportmonitorprojectstatus2[".pages"];
$tdatareportmonitorprojectstatus2[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus2[".originalDefaultPages"] = $tdatareportmonitorprojectstatus2[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus2 = array();
$fieldToolTipsreportmonitorprojectstatus2 = array();
$pageTitlesreportmonitorprojectstatus2 = array();
$placeHoldersreportmonitorprojectstatus2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus2["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus2["English"] = array();
	$placeHoldersreportmonitorprojectstatus2["English"] = array();
	$pageTitlesreportmonitorprojectstatus2["English"] = array();
	$fieldLabelsreportmonitorprojectstatus2["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus2["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus2["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus2["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus2["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus2["English"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus2["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus2["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus2["English"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus2["English"]))
		$tdatareportmonitorprojectstatus2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus2["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus2["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus2["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus2["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus2["Thai"]["projectStatusName"] = "สถานะอยู่ระหว่างการดำเนินการ";
	$fieldToolTipsreportmonitorprojectstatus2["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus2["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus2["Thai"]["projectStatusCount"] = "";
	$fieldToolTipsreportmonitorprojectstatus2["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus2["Thai"]["projectStatusCount"] = "";
	$fieldLabelsreportmonitorprojectstatus2["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus2["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus2["Thai"]["id"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus2["Thai"]))
		$tdatareportmonitorprojectstatus2[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus2[".NCSearch"] = true;



$tdatareportmonitorprojectstatus2[".shortTableName"] = "reportmonitorprojectstatus2";
$tdatareportmonitorprojectstatus2[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus2[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus2[".entityType"] = 1;
$tdatareportmonitorprojectstatus2[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus2[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus2[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus2[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus2[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus2[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus2[".listAjax"] = false;

	$tdatareportmonitorprojectstatus2[".audit"] = true;

	$tdatareportmonitorprojectstatus2[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus2[".edit"] = true;
	$tdatareportmonitorprojectstatus2[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus2[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus2[".add"] = true;
$tdatareportmonitorprojectstatus2[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus2[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus2[".list"] = true;
}



$tdatareportmonitorprojectstatus2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus2[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus2[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus2[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus2[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus2[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus2[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus2[".badgeColor"] = "4169e1";


$tdatareportmonitorprojectstatus2[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus2[".filterFields"] = array();
$tdatareportmonitorprojectstatus2[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus2[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus2[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus2[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus2[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus2[".tableType"] = "list";

$tdatareportmonitorprojectstatus2[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus2[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus2[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus2[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus2[".pageSize"] = 20;

$tdatareportmonitorprojectstatus2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus2[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus2[".orderindexes"] = array();


$tdatareportmonitorprojectstatus2[".sqlHead"] = "SELECT researchScholarshipProposal.id,  'อยู่ระหว่างการดำเนินการ' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$tdatareportmonitorprojectstatus2[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorprojectstatus2[".sqlWhereExpr"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการดำเนินการ') AND (researchScholarshipProposal.projectStatus <> '')";
$tdatareportmonitorprojectstatus2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus2[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus2[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus2 = array();
$tdatareportmonitorprojectstatus2[".Keys"] = $tableKeysreportmonitorprojectstatus2;


$tdatareportmonitorprojectstatus2[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus2","id");
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


	$tdatareportmonitorprojectstatus2["id"] = $fdata;
		$tdatareportmonitorprojectstatus2[".searchableFields"][] = "id";
//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus2","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'อยู่ระหว่างการดำเนินการ'";

	
	
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


	$tdatareportmonitorprojectstatus2["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus2[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus2","projectStatusCount");
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


	$tdatareportmonitorprojectstatus2["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus2[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus2"]=&$tdatareportmonitorprojectstatus2;
$field_labels["ReportMonitorProjectStatus2"] = &$fieldLabelsreportmonitorprojectstatus2;
$fieldToolTips["ReportMonitorProjectStatus2"] = &$fieldToolTipsreportmonitorprojectstatus2;
$placeHolders["ReportMonitorProjectStatus2"] = &$placeHoldersreportmonitorprojectstatus2;
$page_titles["ReportMonitorProjectStatus2"] = &$pageTitlesreportmonitorprojectstatus2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus2"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus2"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus2"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus2"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus2"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'อยู่ระหว่างการดำเนินการ' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการดำเนินการ') AND (researchScholarshipProposal.projectStatus <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการดำเนินการ') AND (researchScholarshipProposal.projectStatus <> '')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(researchScholarshipProposal.projectStatus ='อยู่ระหว่างการดำเนินการ') AND (researchScholarshipProposal.projectStatus <> '')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "researchScholarshipProposal.projectStatus ='อยู่ระหว่างการดำเนินการ'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus2"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='อยู่ระหว่างการดำเนินการ'";
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
	"m_srcTableName" => "ReportMonitorProjectStatus2"
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
	"m_srcTableName" => "ReportMonitorProjectStatus2"
));

$proto10["m_sql"] = "researchScholarshipProposal.id";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'อยู่ระหว่างการดำเนินการ'"
));

$proto12["m_sql"] = "'อยู่ระหว่างการดำเนินการ'";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus2";
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
	"m_srcTableName" => "ReportMonitorProjectStatus2"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(researchScholarshipProposal.id)";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipProposal";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus2";
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
$proto17["m_srcTableName"] = "ReportMonitorProjectStatus2";
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
$proto22["m_srcTableName"] = "ReportMonitorProjectStatus2";
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
$proto21["m_srcTableName"] = "ReportMonitorProjectStatus2";
$proto23=array();
$proto23["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus2"
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
$proto0["m_srcTableName"]="ReportMonitorProjectStatus2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus2 = createSqlQuery_reportmonitorprojectstatus2();


	
				;

			

$tdatareportmonitorprojectstatus2[".sqlquery"] = $queryData_reportmonitorprojectstatus2;



include_once(getabspath("include/reportmonitorprojectstatus2_events.php"));
$tableEvents["ReportMonitorProjectStatus2"] = new eventclass_reportmonitorprojectstatus2;
$tdatareportmonitorprojectstatus2[".hasEvents"] = true;

?>