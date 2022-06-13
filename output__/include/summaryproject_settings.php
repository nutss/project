<?php
$tdatasummaryproject = array();
$tdatasummaryproject[".searchableFields"] = array();
$tdatasummaryproject[".ShortName"] = "summaryproject";
$tdatasummaryproject[".OwnerID"] = "";
$tdatasummaryproject[".OriginalTable"] = "project";


$tdatasummaryproject[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatasummaryproject[".originalPagesByType"] = $tdatasummaryproject[".pagesByType"];
$tdatasummaryproject[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatasummaryproject[".originalPages"] = $tdatasummaryproject[".pages"];
$tdatasummaryproject[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatasummaryproject[".originalDefaultPages"] = $tdatasummaryproject[".defaultPages"];

//	field labels
$fieldLabelssummaryproject = array();
$fieldToolTipssummaryproject = array();
$pageTitlessummaryproject = array();
$placeHolderssummaryproject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssummaryproject["English"] = array();
	$fieldToolTipssummaryproject["English"] = array();
	$placeHolderssummaryproject["English"] = array();
	$pageTitlessummaryproject["English"] = array();
	$fieldLabelssummaryproject["English"]["id"] = "ID";
	$fieldToolTipssummaryproject["English"]["id"] = "";
	$placeHolderssummaryproject["English"]["id"] = "";
	$fieldLabelssummaryproject["English"]["projectName"] = "Project Name";
	$fieldToolTipssummaryproject["English"]["projectName"] = "";
	$placeHolderssummaryproject["English"]["projectName"] = "";
	$fieldLabelssummaryproject["English"]["projectStart"] = "Project Start";
	$fieldToolTipssummaryproject["English"]["projectStart"] = "";
	$placeHolderssummaryproject["English"]["projectStart"] = "";
	$fieldLabelssummaryproject["English"]["projectEnd"] = "Project End";
	$fieldToolTipssummaryproject["English"]["projectEnd"] = "";
	$placeHolderssummaryproject["English"]["projectEnd"] = "";
	$fieldLabelssummaryproject["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipssummaryproject["English"]["approveStatus"] = "";
	$placeHolderssummaryproject["English"]["approveStatus"] = "";
	$fieldLabelssummaryproject["English"]["approveDate"] = "Approve Date";
	$fieldToolTipssummaryproject["English"]["approveDate"] = "";
	$placeHolderssummaryproject["English"]["approveDate"] = "";
	$fieldLabelssummaryproject["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipssummaryproject["English"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryproject["English"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryproject["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipssummaryproject["English"]["projectBudgetCost"] = "";
	$placeHolderssummaryproject["English"]["projectBudgetCost"] = "";
	$fieldLabelssummaryproject["English"]["projectFile"] = "Project File";
	$fieldToolTipssummaryproject["English"]["projectFile"] = "";
	$placeHolderssummaryproject["English"]["projectFile"] = "";
	$fieldLabelssummaryproject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipssummaryproject["English"]["entryUserName"] = "";
	$placeHolderssummaryproject["English"]["entryUserName"] = "";
	$fieldLabelssummaryproject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipssummaryproject["English"]["entryTime"] = "";
	$placeHolderssummaryproject["English"]["entryTime"] = "";
	$fieldLabelssummaryproject["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipssummaryproject["English"]["disbureAmounts"] = "";
	$placeHolderssummaryproject["English"]["disbureAmounts"] = "";
	$fieldLabelssummaryproject["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipssummaryproject["English"]["ProjectTypeName"] = "";
	$placeHolderssummaryproject["English"]["ProjectTypeName"] = "";
	$fieldLabelssummaryproject["English"]["companyName"] = "Company Name";
	$fieldToolTipssummaryproject["English"]["companyName"] = "";
	$placeHolderssummaryproject["English"]["companyName"] = "";
	if (count($fieldToolTipssummaryproject["English"]))
		$tdatasummaryproject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelssummaryproject["Thai"] = array();
	$fieldToolTipssummaryproject["Thai"] = array();
	$placeHolderssummaryproject["Thai"] = array();
	$pageTitlessummaryproject["Thai"] = array();
	$fieldLabelssummaryproject["Thai"]["id"] = "ID";
	$fieldToolTipssummaryproject["Thai"]["id"] = "";
	$placeHolderssummaryproject["Thai"]["id"] = "";
	$fieldLabelssummaryproject["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipssummaryproject["Thai"]["projectName"] = "";
	$placeHolderssummaryproject["Thai"]["projectName"] = "";
	$fieldLabelssummaryproject["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipssummaryproject["Thai"]["projectStart"] = "";
	$placeHolderssummaryproject["Thai"]["projectStart"] = "";
	$fieldLabelssummaryproject["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipssummaryproject["Thai"]["projectEnd"] = "";
	$placeHolderssummaryproject["Thai"]["projectEnd"] = "";
	$fieldLabelssummaryproject["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipssummaryproject["Thai"]["approveStatus"] = "";
	$placeHolderssummaryproject["Thai"]["approveStatus"] = "";
	$fieldLabelssummaryproject["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipssummaryproject["Thai"]["approveDate"] = "";
	$placeHolderssummaryproject["Thai"]["approveDate"] = "";
	$fieldLabelssummaryproject["Thai"]["DocumentCheckStatus"] = "สถานะการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipssummaryproject["Thai"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryproject["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryproject["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipssummaryproject["Thai"]["projectBudgetCost"] = "";
	$placeHolderssummaryproject["Thai"]["projectBudgetCost"] = "";
	$fieldLabelssummaryproject["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipssummaryproject["Thai"]["projectFile"] = "";
	$placeHolderssummaryproject["Thai"]["projectFile"] = "";
	$fieldLabelssummaryproject["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipssummaryproject["Thai"]["entryUserName"] = "";
	$placeHolderssummaryproject["Thai"]["entryUserName"] = "";
	$fieldLabelssummaryproject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipssummaryproject["Thai"]["entryTime"] = "";
	$placeHolderssummaryproject["Thai"]["entryTime"] = "";
	$fieldLabelssummaryproject["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipssummaryproject["Thai"]["disbureAmounts"] = "";
	$placeHolderssummaryproject["Thai"]["disbureAmounts"] = "";
	$fieldLabelssummaryproject["Thai"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipssummaryproject["Thai"]["ProjectTypeName"] = "";
	$placeHolderssummaryproject["Thai"]["ProjectTypeName"] = "";
	$fieldLabelssummaryproject["Thai"]["companyName"] = "Company Name";
	$fieldToolTipssummaryproject["Thai"]["companyName"] = "";
	$placeHolderssummaryproject["Thai"]["companyName"] = "";
	if (count($fieldToolTipssummaryproject["Thai"]))
		$tdatasummaryproject[".isUseToolTips"] = true;
}


	$tdatasummaryproject[".NCSearch"] = true;



$tdatasummaryproject[".shortTableName"] = "summaryproject";
$tdatasummaryproject[".nSecOptions"] = 0;

$tdatasummaryproject[".mainTableOwnerID"] = "";
$tdatasummaryproject[".entityType"] = 2;
$tdatasummaryproject[".connId"] = "mc_at_192_168_1_111";


$tdatasummaryproject[".strOriginalTableName"] = "project";

	



$tdatasummaryproject[".showAddInPopup"] = false;

$tdatasummaryproject[".showEditInPopup"] = false;

$tdatasummaryproject[".showViewInPopup"] = false;

$tdatasummaryproject[".listAjax"] = false;
//	temporary
//$tdatasummaryproject[".listAjax"] = false;

	$tdatasummaryproject[".audit"] = false;

	$tdatasummaryproject[".locking"] = false;


$pages = $tdatasummaryproject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasummaryproject[".edit"] = true;
	$tdatasummaryproject[".afterEditAction"] = 0;
	$tdatasummaryproject[".closePopupAfterEdit"] = 1;
	$tdatasummaryproject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasummaryproject[".add"] = true;
$tdatasummaryproject[".afterAddAction"] = 1;
$tdatasummaryproject[".closePopupAfterAdd"] = 1;
$tdatasummaryproject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasummaryproject[".list"] = true;
}



$tdatasummaryproject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasummaryproject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasummaryproject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasummaryproject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasummaryproject[".printFriendly"] = true;
}



$tdatasummaryproject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasummaryproject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasummaryproject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasummaryproject[".isUseAjaxSuggest"] = true;






$tdatasummaryproject[".ajaxCodeSnippetAdded"] = false;

$tdatasummaryproject[".buttonsAdded"] = false;

$tdatasummaryproject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasummaryproject[".isUseTimeForSearch"] = false;


$tdatasummaryproject[".badgeColor"] = "5F9EA0";


$tdatasummaryproject[".allSearchFields"] = array();
$tdatasummaryproject[".filterFields"] = array();
$tdatasummaryproject[".requiredSearchFields"] = array();

$tdatasummaryproject[".googleLikeFields"] = array();
$tdatasummaryproject[".googleLikeFields"][] = "id";
$tdatasummaryproject[".googleLikeFields"][] = "projectName";
$tdatasummaryproject[".googleLikeFields"][] = "projectStart";
$tdatasummaryproject[".googleLikeFields"][] = "projectEnd";
$tdatasummaryproject[".googleLikeFields"][] = "ProjectTypeName";
$tdatasummaryproject[".googleLikeFields"][] = "companyName";
$tdatasummaryproject[".googleLikeFields"][] = "approveStatus";
$tdatasummaryproject[".googleLikeFields"][] = "approveDate";
$tdatasummaryproject[".googleLikeFields"][] = "DocumentCheckStatus";
$tdatasummaryproject[".googleLikeFields"][] = "projectBudgetCost";
$tdatasummaryproject[".googleLikeFields"][] = "disbureAmounts";
$tdatasummaryproject[".googleLikeFields"][] = "projectFile";
$tdatasummaryproject[".googleLikeFields"][] = "entryUserName";
$tdatasummaryproject[".googleLikeFields"][] = "entryTime";



$tdatasummaryproject[".tableType"] = "report";

$tdatasummaryproject[".printerPageOrientation"] = 0;
$tdatasummaryproject[".nPrinterPageScale"] = 100;

$tdatasummaryproject[".nPrinterSplitRecords"] = 40;

$tdatasummaryproject[".geocodingEnabled"] = false;

//report settings

$tdatasummaryproject[".reportPrintGroupsPerPage"] = 3;
$tdatasummaryproject[".reportPrintRecordsPerPage"] = 40;

$tdatasummaryproject[".pageSizeGroups"] = 5;
$tdatasummaryproject[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatasummaryproject[".strOrderBy"] = $tstrOrderBy;

$tdatasummaryproject[".orderindexes"] = array();


$tdatasummaryproject[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$tdatasummaryproject[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdatasummaryproject[".sqlWhereExpr"] = "";
$tdatasummaryproject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasummaryproject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasummaryproject[".arrGroupsPerPage"] = $arrGPP;

$tdatasummaryproject[".highlightSearchResults"] = true;

$tableKeyssummaryproject = array();
$tableKeyssummaryproject[] = "id";
$tdatasummaryproject[".Keys"] = $tableKeyssummaryproject;


$tdatasummaryproject[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatasummaryproject["id"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","projectName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectName";

		$fdata["sourceSingle"] = "projectName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasummaryproject["projectName"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","projectStart");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "projectStart";

		$fdata["sourceSingle"] = "projectStart";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectStart";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasummaryproject["projectStart"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","projectEnd");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "projectEnd";

		$fdata["sourceSingle"] = "projectEnd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectEnd";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasummaryproject["projectEnd"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","ProjectTypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ProjectTypeName";

		$fdata["sourceSingle"] = "ProjectTypeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.ProjectTypeName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasummaryproject["ProjectTypeName"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","companyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "companyName";

		$fdata["sourceSingle"] = "companyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.companyName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasummaryproject["companyName"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "companyName";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.approveStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatasummaryproject["approveStatus"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.approveDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasummaryproject["approveDate"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "approveDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","DocumentCheckStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DocumentCheckStatus";

		$fdata["sourceSingle"] = "DocumentCheckStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.DocumentCheckStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatasummaryproject["DocumentCheckStatus"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "DocumentCheckStatus";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","projectBudgetCost");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "projectBudgetCost";

		$fdata["sourceSingle"] = "projectBudgetCost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectBudgetCost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatasummaryproject["projectBudgetCost"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SummaryProject","disbureAmounts");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "disbureAmounts";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(taskDisburse.disburseAmount)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatasummaryproject["disbureAmounts"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","projectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "projectFile";

		$fdata["sourceSingle"] = "projectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectFile";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatasummaryproject["projectFile"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.entryUserName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatasummaryproject["entryUserName"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProject","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasummaryproject["entryTime"] = $fdata;
		$tdatasummaryproject[".searchableFields"][] = "entryTime";


$tables_data["SummaryProject"]=&$tdatasummaryproject;
$field_labels["SummaryProject"] = &$fieldLabelssummaryproject;
$fieldToolTips["SummaryProject"] = &$fieldToolTipssummaryproject;
$placeHolders["SummaryProject"] = &$placeHolderssummaryproject;
$page_titles["SummaryProject"] = &$pageTitlessummaryproject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SummaryProject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SummaryProject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_summaryproject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$proto0["m_strFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
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
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "SummaryProject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "SummaryProject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "SummaryProject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "SummaryProject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "SummaryProject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "SummaryProject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto18["m_sql"] = "project.approveStatus";
$proto18["m_srcTableName"] = "SummaryProject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto20["m_sql"] = "project.approveDate";
$proto20["m_srcTableName"] = "SummaryProject";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto22["m_sql"] = "project.DocumentCheckStatus";
$proto22["m_srcTableName"] = "SummaryProject";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto24["m_sql"] = "project.projectBudgetCost";
$proto24["m_srcTableName"] = "SummaryProject";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_SUM";
$proto27["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "SummaryProject"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SUM(taskDisburse.disburseAmount)";
$proto26["m_srcTableName"] = "SummaryProject";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto29["m_sql"] = "project.projectFile";
$proto29["m_srcTableName"] = "SummaryProject";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto31["m_sql"] = "project.entryUserName";
$proto31["m_srcTableName"] = "SummaryProject";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto33["m_sql"] = "project.entryTime";
$proto33["m_srcTableName"] = "SummaryProject";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "project";
$proto36["m_srcTableName"] = "SummaryProject";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "projectName";
$proto36["m_columns"][] = "projectStart";
$proto36["m_columns"][] = "projectEnd";
$proto36["m_columns"][] = "ProjectTypeName";
$proto36["m_columns"][] = "companyName";
$proto36["m_columns"][] = "projectBudgetCost";
$proto36["m_columns"][] = "projectFile";
$proto36["m_columns"][] = "DocumentCheckDate";
$proto36["m_columns"][] = "DocumentCheckStatus";
$proto36["m_columns"][] = "DocumentCheckReason";
$proto36["m_columns"][] = "screenDate";
$proto36["m_columns"][] = "screenStatus";
$proto36["m_columns"][] = "screenReason";
$proto36["m_columns"][] = "approveDate";
$proto36["m_columns"][] = "approveStatus";
$proto36["m_columns"][] = "approveReason";
$proto36["m_columns"][] = "entryUserName";
$proto36["m_columns"][] = "entryTime";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "project";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "SummaryProject";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "taskDisburse";
$proto40["m_srcTableName"] = "SummaryProject";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "id";
$proto40["m_columns"][] = "projectID";
$proto40["m_columns"][] = "trackDisburseDate";
$proto40["m_columns"][] = "progressStep";
$proto40["m_columns"][] = "disburseDesc";
$proto40["m_columns"][] = "disburseAmount";
$proto40["m_columns"][] = "disburseAttFille";
$proto40["m_columns"][] = "approveStatus";
$proto40["m_columns"][] = "approveDate";
$proto40["m_columns"][] = "approveReason";
$proto40["m_columns"][] = "entryUserName";
$proto40["m_columns"][] = "entryTime";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "SummaryProject";
$proto41=array();
$proto41["m_sql"] = "project.id = taskDisburse.projectID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= taskDisburse.projectID";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProject"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SummaryProject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_summaryproject = createSqlQuery_summaryproject();


	
				;

														

$tdatasummaryproject[".sqlquery"] = $queryData_summaryproject;



$tableEvents["SummaryProject"] = new eventsBase;
$tdatasummaryproject[".hasEvents"] = false;

?>