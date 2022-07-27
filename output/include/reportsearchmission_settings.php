<?php
$tdatareportsearchmission = array();
$tdatareportsearchmission[".searchableFields"] = array();
$tdatareportsearchmission[".ShortName"] = "reportsearchmission";
$tdatareportsearchmission[".OwnerID"] = "";
$tdatareportsearchmission[".OriginalTable"] = "missionFollow";


$tdatareportsearchmission[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatareportsearchmission[".originalPagesByType"] = $tdatareportsearchmission[".pagesByType"];
$tdatareportsearchmission[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatareportsearchmission[".originalPages"] = $tdatareportsearchmission[".pages"];
$tdatareportsearchmission[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatareportsearchmission[".originalDefaultPages"] = $tdatareportsearchmission[".defaultPages"];

//	field labels
$fieldLabelsreportsearchmission = array();
$fieldToolTipsreportsearchmission = array();
$pageTitlesreportsearchmission = array();
$placeHoldersreportsearchmission = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportsearchmission["English"] = array();
	$fieldToolTipsreportsearchmission["English"] = array();
	$placeHoldersreportsearchmission["English"] = array();
	$pageTitlesreportsearchmission["English"] = array();
	$fieldLabelsreportsearchmission["English"]["missionFollowName"] = "Mission Follow Name";
	$fieldToolTipsreportsearchmission["English"]["missionFollowName"] = "";
	$placeHoldersreportsearchmission["English"]["missionFollowName"] = "";
	$fieldLabelsreportsearchmission["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldToolTipsreportsearchmission["English"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportsearchmission["English"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportsearchmission["English"]["id"] = "ID";
	$fieldToolTipsreportsearchmission["English"]["id"] = "";
	$placeHoldersreportsearchmission["English"]["id"] = "";
	$fieldLabelsreportsearchmission["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportsearchmission["English"]["missionFollowID"] = "";
	$placeHoldersreportsearchmission["English"]["missionFollowID"] = "";
	if (count($fieldToolTipsreportsearchmission["English"]))
		$tdatareportsearchmission[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportsearchmission["Thai"] = array();
	$fieldToolTipsreportsearchmission["Thai"] = array();
	$placeHoldersreportsearchmission["Thai"] = array();
	$pageTitlesreportsearchmission["Thai"] = array();
	$fieldLabelsreportsearchmission["Thai"]["missionFollowName"] = "ชื่อภารกิจ";
	$fieldToolTipsreportsearchmission["Thai"]["missionFollowName"] = "";
	$placeHoldersreportsearchmission["Thai"]["missionFollowName"] = "";
	$fieldLabelsreportsearchmission["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldToolTipsreportsearchmission["Thai"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportsearchmission["Thai"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportsearchmission["Thai"]["id"] = "ID";
	$fieldToolTipsreportsearchmission["Thai"]["id"] = "";
	$placeHoldersreportsearchmission["Thai"]["id"] = "";
	$fieldLabelsreportsearchmission["Thai"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportsearchmission["Thai"]["missionFollowID"] = "";
	$placeHoldersreportsearchmission["Thai"]["missionFollowID"] = "";
	if (count($fieldToolTipsreportsearchmission["Thai"]))
		$tdatareportsearchmission[".isUseToolTips"] = true;
}


	$tdatareportsearchmission[".NCSearch"] = true;



$tdatareportsearchmission[".shortTableName"] = "reportsearchmission";
$tdatareportsearchmission[".nSecOptions"] = 0;

$tdatareportsearchmission[".mainTableOwnerID"] = "";
$tdatareportsearchmission[".entityType"] = 1;
$tdatareportsearchmission[".connId"] = "mc_at_192_168_1_111";


$tdatareportsearchmission[".strOriginalTableName"] = "missionFollow";

	



$tdatareportsearchmission[".showAddInPopup"] = false;

$tdatareportsearchmission[".showEditInPopup"] = false;

$tdatareportsearchmission[".showViewInPopup"] = false;

$tdatareportsearchmission[".listAjax"] = false;
//	temporary
//$tdatareportsearchmission[".listAjax"] = false;

	$tdatareportsearchmission[".audit"] = true;

	$tdatareportsearchmission[".locking"] = false;


$pages = $tdatareportsearchmission[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportsearchmission[".edit"] = true;
	$tdatareportsearchmission[".afterEditAction"] = 1;
	$tdatareportsearchmission[".closePopupAfterEdit"] = 1;
	$tdatareportsearchmission[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportsearchmission[".add"] = true;
$tdatareportsearchmission[".afterAddAction"] = 1;
$tdatareportsearchmission[".closePopupAfterAdd"] = 1;
$tdatareportsearchmission[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportsearchmission[".list"] = true;
}



$tdatareportsearchmission[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportsearchmission[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportsearchmission[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportsearchmission[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportsearchmission[".printFriendly"] = true;
}



$tdatareportsearchmission[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportsearchmission[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportsearchmission[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportsearchmission[".isUseAjaxSuggest"] = true;

$tdatareportsearchmission[".rowHighlite"] = true;



						

$tdatareportsearchmission[".ajaxCodeSnippetAdded"] = false;

$tdatareportsearchmission[".buttonsAdded"] = false;

$tdatareportsearchmission[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportsearchmission[".isUseTimeForSearch"] = false;


$tdatareportsearchmission[".badgeColor"] = "5F9EA0";


$tdatareportsearchmission[".allSearchFields"] = array();
$tdatareportsearchmission[".filterFields"] = array();
$tdatareportsearchmission[".requiredSearchFields"] = array();

$tdatareportsearchmission[".googleLikeFields"] = array();
$tdatareportsearchmission[".googleLikeFields"][] = "missionFollowID";
$tdatareportsearchmission[".googleLikeFields"][] = "id";
$tdatareportsearchmission[".googleLikeFields"][] = "missionFollowName";
$tdatareportsearchmission[".googleLikeFields"][] = "missionAssignmentResponsibleName";



$tdatareportsearchmission[".tableType"] = "list";

$tdatareportsearchmission[".printerPageOrientation"] = 0;
$tdatareportsearchmission[".nPrinterPageScale"] = 100;

$tdatareportsearchmission[".nPrinterSplitRecords"] = 40;

$tdatareportsearchmission[".geocodingEnabled"] = false;










$tdatareportsearchmission[".pageSize"] = 20;

$tdatareportsearchmission[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportsearchmission[".strOrderBy"] = $tstrOrderBy;

$tdatareportsearchmission[".orderindexes"] = array();


$tdatareportsearchmission[".sqlHead"] = "SELECT missionAssignment.missionFollowID,  missionAssignment.id,    missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName";
$tdatareportsearchmission[".sqlFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$tdatareportsearchmission[".sqlWhereExpr"] = "";
$tdatareportsearchmission[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportsearchmission[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportsearchmission[".arrGroupsPerPage"] = $arrGPP;

$tdatareportsearchmission[".highlightSearchResults"] = true;

$tableKeysreportsearchmission = array();
$tdatareportsearchmission[".Keys"] = $tableKeysreportsearchmission;


$tdatareportsearchmission[".hideMobileList"] = array();




//	missionFollowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "missionFollowID";
	$fdata["GoodName"] = "missionFollowID";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportSearchMission","missionFollowID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionFollowID";

	
	
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


	$tdatareportsearchmission["missionFollowID"] = $fdata;
		$tdatareportsearchmission[".searchableFields"][] = "missionFollowID";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportSearchMission","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatareportsearchmission["id"] = $fdata;
		$tdatareportsearchmission[".searchableFields"][] = "id";
//	missionFollowName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionFollowName";
	$fdata["GoodName"] = "missionFollowName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportSearchMission","missionFollowName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowName";

		$fdata["sourceSingle"] = "missionFollowName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowName";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "missionFollow";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "missionFollowName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "missionFollowName";

	

	
	$edata["LookupOrderBy"] = "missionFollowName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatareportsearchmission["missionFollowName"] = $fdata;
		$tdatareportsearchmission[".searchableFields"][] = "missionFollowName";
//	missionAssignmentResponsibleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionAssignmentResponsibleName";
	$fdata["GoodName"] = "missionAssignmentResponsibleName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportSearchMission","missionAssignmentResponsibleName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentResponsibleName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionAssignmentResponsibleName";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "staffUsers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffFullName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffFullName";

	

	
	$edata["LookupOrderBy"] = "staffFullName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatareportsearchmission["missionAssignmentResponsibleName"] = $fdata;
		$tdatareportsearchmission[".searchableFields"][] = "missionAssignmentResponsibleName";


$tables_data["ReportSearchMission"]=&$tdatareportsearchmission;
$field_labels["ReportSearchMission"] = &$fieldLabelsreportsearchmission;
$fieldToolTips["ReportSearchMission"] = &$fieldToolTipsreportsearchmission;
$placeHolders["ReportSearchMission"] = &$placeHoldersreportsearchmission;
$page_titles["ReportSearchMission"] = &$pageTitlesreportsearchmission;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportSearchMission"] = array();
//	ReportGraphmissionFollow
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportGraphmissionFollow";
		$detailsParam["dOriginalTable"] = "missionFollow";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "reportgraphmissionfollow";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportGraphmissionFollow");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchMission"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchMission"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchMission"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchMission"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchMission"][$dIndex]["detailKeys"][]="id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportSearchMission"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportsearchmission()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "missionAssignment.missionFollowID,  missionAssignment.id,    missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName";
$proto0["m_strFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
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
	"m_strName" => "missionFollowID",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportSearchMission"
));

$proto6["m_sql"] = "missionAssignment.missionFollowID";
$proto6["m_srcTableName"] = "ReportSearchMission";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportSearchMission"
));

$proto8["m_sql"] = "missionAssignment.id";
$proto8["m_srcTableName"] = "ReportSearchMission";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportSearchMission"
));

$proto10["m_sql"] = "missionFollow.missionFollowName";
$proto10["m_srcTableName"] = "ReportSearchMission";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentResponsibleName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportSearchMission"
));

$proto12["m_sql"] = "missionAssignment.missionAssignmentResponsibleName";
$proto12["m_srcTableName"] = "ReportSearchMission";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "missionFollow";
$proto15["m_srcTableName"] = "ReportSearchMission";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "missionFollowNo";
$proto15["m_columns"][] = "missionFollowName";
$proto15["m_columns"][] = "missionFollowStartDate";
$proto15["m_columns"][] = "missionFollowEndDate";
$proto15["m_columns"][] = "missionFollowDocFile";
$proto15["m_columns"][] = "missionFollowActionStatus";
$proto15["m_columns"][] = "missionFollowStatus";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "missionFollow";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ReportSearchMission";
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
$proto19["m_strName"] = "missionAssignment";
$proto19["m_srcTableName"] = "ReportSearchMission";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "missionFollowID";
$proto19["m_columns"][] = "missionAssignmentNo";
$proto19["m_columns"][] = "missionAssignmentName";
$proto19["m_columns"][] = "missionAssignmentFile";
$proto19["m_columns"][] = "missionAssignmentDesc";
$proto19["m_columns"][] = "missionAssignmentConsiderName";
$proto19["m_columns"][] = "missionAssignmentConsiderValue";
$proto19["m_columns"][] = "missionAssignmentResponsibleName";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ReportSearchMission";
$proto20=array();
$proto20["m_sql"] = "missionFollow.id = missionAssignment.missionFollowID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportSearchMission"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= missionAssignment.missionFollowID";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportSearchMission";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportsearchmission = createSqlQuery_reportsearchmission();


	
				;

				

$tdatareportsearchmission[".sqlquery"] = $queryData_reportsearchmission;



include_once(getabspath("include/reportsearchmission_events.php"));
$tableEvents["ReportSearchMission"] = new eventclass_reportsearchmission;
$tdatareportsearchmission[".hasEvents"] = true;

?>