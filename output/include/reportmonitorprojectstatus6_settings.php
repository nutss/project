<?php
$tdatareportmonitorprojectstatus6 = array();
$tdatareportmonitorprojectstatus6[".searchableFields"] = array();
$tdatareportmonitorprojectstatus6[".ShortName"] = "reportmonitorprojectstatus6";
$tdatareportmonitorprojectstatus6[".OwnerID"] = "";
$tdatareportmonitorprojectstatus6[".OriginalTable"] = "researchScholarshipProposal";


$tdatareportmonitorprojectstatus6[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatareportmonitorprojectstatus6[".originalPagesByType"] = $tdatareportmonitorprojectstatus6[".pagesByType"];
$tdatareportmonitorprojectstatus6[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitorprojectstatus6[".originalPages"] = $tdatareportmonitorprojectstatus6[".pages"];
$tdatareportmonitorprojectstatus6[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatareportmonitorprojectstatus6[".originalDefaultPages"] = $tdatareportmonitorprojectstatus6[".defaultPages"];

//	field labels
$fieldLabelsreportmonitorprojectstatus6 = array();
$fieldToolTipsreportmonitorprojectstatus6 = array();
$pageTitlesreportmonitorprojectstatus6 = array();
$placeHoldersreportmonitorprojectstatus6 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitorprojectstatus6["English"] = array();
	$fieldToolTipsreportmonitorprojectstatus6["English"] = array();
	$placeHoldersreportmonitorprojectstatus6["English"] = array();
	$pageTitlesreportmonitorprojectstatus6["English"] = array();
	$fieldLabelsreportmonitorprojectstatus6["English"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus6["English"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus6["English"]["id"] = "";
	$fieldLabelsreportmonitorprojectstatus6["English"]["projectStatusName"] = "Project Status Name";
	$fieldToolTipsreportmonitorprojectstatus6["English"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus6["English"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus6["English"]["projectStatusCount"] = "Project Status Count";
	$fieldToolTipsreportmonitorprojectstatus6["English"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus6["English"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus6["English"]))
		$tdatareportmonitorprojectstatus6[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitorprojectstatus6["Thai"] = array();
	$fieldToolTipsreportmonitorprojectstatus6["Thai"] = array();
	$placeHoldersreportmonitorprojectstatus6["Thai"] = array();
	$pageTitlesreportmonitorprojectstatus6["Thai"] = array();
	$fieldLabelsreportmonitorprojectstatus6["Thai"]["id"] = "Id";
	$fieldToolTipsreportmonitorprojectstatus6["Thai"]["id"] = "";
	$placeHoldersreportmonitorprojectstatus6["Thai"]["id"] = "";
	$fieldLabelsreportmonitorprojectstatus6["Thai"]["projectStatusName"] = "ยังไม่นำไปใช้ประโยชน์";
	$fieldToolTipsreportmonitorprojectstatus6["Thai"]["projectStatusName"] = "";
	$placeHoldersreportmonitorprojectstatus6["Thai"]["projectStatusName"] = "";
	$fieldLabelsreportmonitorprojectstatus6["Thai"]["projectStatusCount"] = "จำนวนยังไม่นำไปใช้ประโยชน์";
	$fieldToolTipsreportmonitorprojectstatus6["Thai"]["projectStatusCount"] = "";
	$placeHoldersreportmonitorprojectstatus6["Thai"]["projectStatusCount"] = "";
	if (count($fieldToolTipsreportmonitorprojectstatus6["Thai"]))
		$tdatareportmonitorprojectstatus6[".isUseToolTips"] = true;
}


	$tdatareportmonitorprojectstatus6[".NCSearch"] = true;



$tdatareportmonitorprojectstatus6[".shortTableName"] = "reportmonitorprojectstatus6";
$tdatareportmonitorprojectstatus6[".nSecOptions"] = 0;

$tdatareportmonitorprojectstatus6[".mainTableOwnerID"] = "";
$tdatareportmonitorprojectstatus6[".entityType"] = 1;
$tdatareportmonitorprojectstatus6[".connId"] = "mc_at_192_168_1_111";


$tdatareportmonitorprojectstatus6[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdatareportmonitorprojectstatus6[".showAddInPopup"] = false;

$tdatareportmonitorprojectstatus6[".showEditInPopup"] = false;

$tdatareportmonitorprojectstatus6[".showViewInPopup"] = false;

$tdatareportmonitorprojectstatus6[".listAjax"] = false;
//	temporary
//$tdatareportmonitorprojectstatus6[".listAjax"] = false;

	$tdatareportmonitorprojectstatus6[".audit"] = true;

	$tdatareportmonitorprojectstatus6[".locking"] = false;


$pages = $tdatareportmonitorprojectstatus6[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportmonitorprojectstatus6[".edit"] = true;
	$tdatareportmonitorprojectstatus6[".afterEditAction"] = 1;
	$tdatareportmonitorprojectstatus6[".closePopupAfterEdit"] = 1;
	$tdatareportmonitorprojectstatus6[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportmonitorprojectstatus6[".add"] = true;
$tdatareportmonitorprojectstatus6[".afterAddAction"] = 1;
$tdatareportmonitorprojectstatus6[".closePopupAfterAdd"] = 1;
$tdatareportmonitorprojectstatus6[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportmonitorprojectstatus6[".list"] = true;
}



$tdatareportmonitorprojectstatus6[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportmonitorprojectstatus6[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportmonitorprojectstatus6[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportmonitorprojectstatus6[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportmonitorprojectstatus6[".printFriendly"] = true;
}



$tdatareportmonitorprojectstatus6[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportmonitorprojectstatus6[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportmonitorprojectstatus6[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportmonitorprojectstatus6[".isUseAjaxSuggest"] = true;

$tdatareportmonitorprojectstatus6[".rowHighlite"] = true;



												

$tdatareportmonitorprojectstatus6[".ajaxCodeSnippetAdded"] = false;

$tdatareportmonitorprojectstatus6[".buttonsAdded"] = false;

$tdatareportmonitorprojectstatus6[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportmonitorprojectstatus6[".isUseTimeForSearch"] = false;


$tdatareportmonitorprojectstatus6[".badgeColor"] = "8fbc8b";


$tdatareportmonitorprojectstatus6[".allSearchFields"] = array();
$tdatareportmonitorprojectstatus6[".filterFields"] = array();
$tdatareportmonitorprojectstatus6[".requiredSearchFields"] = array();

$tdatareportmonitorprojectstatus6[".googleLikeFields"] = array();
$tdatareportmonitorprojectstatus6[".googleLikeFields"][] = "id";
$tdatareportmonitorprojectstatus6[".googleLikeFields"][] = "projectStatusName";
$tdatareportmonitorprojectstatus6[".googleLikeFields"][] = "projectStatusCount";



$tdatareportmonitorprojectstatus6[".tableType"] = "list";

$tdatareportmonitorprojectstatus6[".printerPageOrientation"] = 0;
$tdatareportmonitorprojectstatus6[".nPrinterPageScale"] = 100;

$tdatareportmonitorprojectstatus6[".nPrinterSplitRecords"] = 40;

$tdatareportmonitorprojectstatus6[".geocodingEnabled"] = false;










$tdatareportmonitorprojectstatus6[".pageSize"] = 20;

$tdatareportmonitorprojectstatus6[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportmonitorprojectstatus6[".strOrderBy"] = $tstrOrderBy;

$tdatareportmonitorprojectstatus6[".orderindexes"] = array();


$tdatareportmonitorprojectstatus6[".sqlHead"] = "  SELECT researchScholarshipProposal.id,  'ไม่นำไปใช้ประโยชน์' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$tdatareportmonitorprojectstatus6[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportmonitorprojectstatus6[".sqlWhereExpr"] = "(researchScholarshipProposal.trackingProjectDescResult <> 'นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$tdatareportmonitorprojectstatus6[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportmonitorprojectstatus6[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportmonitorprojectstatus6[".arrGroupsPerPage"] = $arrGPP;

$tdatareportmonitorprojectstatus6[".highlightSearchResults"] = true;

$tableKeysreportmonitorprojectstatus6 = array();
$tdatareportmonitorprojectstatus6[".Keys"] = $tableKeysreportmonitorprojectstatus6;


$tdatareportmonitorprojectstatus6[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus6","id");
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


	$tdatareportmonitorprojectstatus6["id"] = $fdata;
		$tdatareportmonitorprojectstatus6[".searchableFields"][] = "id";
//	projectStatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectStatusName";
	$fdata["GoodName"] = "projectStatusName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus6","projectStatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'ไม่นำไปใช้ประโยชน์'";

	
	
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


	$tdatareportmonitorprojectstatus6["projectStatusName"] = $fdata;
		$tdatareportmonitorprojectstatus6[".searchableFields"][] = "projectStatusName";
//	projectStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStatusCount";
	$fdata["GoodName"] = "projectStatusCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportMonitorProjectStatus6","projectStatusCount");
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


	$tdatareportmonitorprojectstatus6["projectStatusCount"] = $fdata;
		$tdatareportmonitorprojectstatus6[".searchableFields"][] = "projectStatusCount";


$tables_data["ReportMonitorProjectStatus6"]=&$tdatareportmonitorprojectstatus6;
$field_labels["ReportMonitorProjectStatus6"] = &$fieldLabelsreportmonitorprojectstatus6;
$fieldToolTips["ReportMonitorProjectStatus6"] = &$fieldToolTipsreportmonitorprojectstatus6;
$placeHolders["ReportMonitorProjectStatus6"] = &$placeHoldersreportmonitorprojectstatus6;
$page_titles["ReportMonitorProjectStatus6"] = &$pageTitlesreportmonitorprojectstatus6;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportMonitorProjectStatus6"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportMonitorProjectStatus6"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipRegister";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportSearchresearchRegister";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportsearchresearchregister";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportMonitorProjectStatus6"][0] = $masterParams;
				$masterTablesData["ReportMonitorProjectStatus6"][0]["masterKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus6"][0]["masterKeys"][]="id";
				$masterTablesData["ReportMonitorProjectStatus6"][0]["detailKeys"] = array();
	$masterTablesData["ReportMonitorProjectStatus6"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportmonitorprojectstatus6()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  'ไม่นำไปใช้ประโยชน์' AS projectStatusName,  COUNT(researchScholarshipProposal.id) AS projectStatusCount";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.trackingProjectDescResult <> 'นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(researchScholarshipProposal.trackingProjectDescResult <> 'นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(researchScholarshipProposal.trackingProjectDescResult <> 'นำไปใช้ประโยชน์') AND (researchScholarshipProposal.trackingProjectDescResult <> '')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "researchScholarshipProposal.trackingProjectDescResult <> 'นำไปใช้ประโยชน์'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "trackingProjectDescResult",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus6"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<> 'นำไปใช้ประโยชน์'";
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
	"m_srcTableName" => "ReportMonitorProjectStatus6"
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
	"m_srcTableName" => "ReportMonitorProjectStatus6"
));

$proto10["m_sql"] = "researchScholarshipProposal.id";
$proto10["m_srcTableName"] = "ReportMonitorProjectStatus6";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'ไม่นำไปใช้ประโยชน์'"
));

$proto12["m_sql"] = "'ไม่นำไปใช้ประโยชน์'";
$proto12["m_srcTableName"] = "ReportMonitorProjectStatus6";
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
	"m_srcTableName" => "ReportMonitorProjectStatus6"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(researchScholarshipProposal.id)";
$proto14["m_srcTableName"] = "ReportMonitorProjectStatus6";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "projectStatusCount";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "researchScholarshipProposal";
$proto18["m_srcTableName"] = "ReportMonitorProjectStatus6";
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
$proto17["m_srcTableName"] = "ReportMonitorProjectStatus6";
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
$proto22["m_srcTableName"] = "ReportMonitorProjectStatus6";
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
$proto21["m_srcTableName"] = "ReportMonitorProjectStatus6";
$proto23=array();
$proto23["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportMonitorProjectStatus6"
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
$proto0["m_srcTableName"]="ReportMonitorProjectStatus6";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportmonitorprojectstatus6 = createSqlQuery_reportmonitorprojectstatus6();


	
				;

			

$tdatareportmonitorprojectstatus6[".sqlquery"] = $queryData_reportmonitorprojectstatus6;



include_once(getabspath("include/reportmonitorprojectstatus6_events.php"));
$tableEvents["ReportMonitorProjectStatus6"] = new eventclass_reportmonitorprojectstatus6;
$tdatareportmonitorprojectstatus6[".hasEvents"] = true;

?>