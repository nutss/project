<?php
$tdatasummaryprojectdelay = array();
$tdatasummaryprojectdelay[".searchableFields"] = array();
$tdatasummaryprojectdelay[".ShortName"] = "summaryprojectdelay";
$tdatasummaryprojectdelay[".OwnerID"] = "";
$tdatasummaryprojectdelay[".OriginalTable"] = "project";


$tdatasummaryprojectdelay[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatasummaryprojectdelay[".originalPagesByType"] = $tdatasummaryprojectdelay[".pagesByType"];
$tdatasummaryprojectdelay[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatasummaryprojectdelay[".originalPages"] = $tdatasummaryprojectdelay[".pages"];
$tdatasummaryprojectdelay[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatasummaryprojectdelay[".originalDefaultPages"] = $tdatasummaryprojectdelay[".defaultPages"];

//	field labels
$fieldLabelssummaryprojectdelay = array();
$fieldToolTipssummaryprojectdelay = array();
$pageTitlessummaryprojectdelay = array();
$placeHolderssummaryprojectdelay = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssummaryprojectdelay["English"] = array();
	$fieldToolTipssummaryprojectdelay["English"] = array();
	$placeHolderssummaryprojectdelay["English"] = array();
	$pageTitlessummaryprojectdelay["English"] = array();
	$fieldLabelssummaryprojectdelay["English"]["id"] = "ID";
	$fieldToolTipssummaryprojectdelay["English"]["id"] = "";
	$placeHolderssummaryprojectdelay["English"]["id"] = "";
	$fieldLabelssummaryprojectdelay["English"]["projectName"] = "Project Name";
	$fieldToolTipssummaryprojectdelay["English"]["projectName"] = "";
	$placeHolderssummaryprojectdelay["English"]["projectName"] = "";
	$fieldLabelssummaryprojectdelay["English"]["projectStart"] = "Project Start";
	$fieldToolTipssummaryprojectdelay["English"]["projectStart"] = "";
	$placeHolderssummaryprojectdelay["English"]["projectStart"] = "";
	$fieldLabelssummaryprojectdelay["English"]["projectEnd"] = "Project End";
	$fieldToolTipssummaryprojectdelay["English"]["projectEnd"] = "";
	$placeHolderssummaryprojectdelay["English"]["projectEnd"] = "";
	$fieldLabelssummaryprojectdelay["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipssummaryprojectdelay["English"]["approveStatus"] = "";
	$placeHolderssummaryprojectdelay["English"]["approveStatus"] = "";
	$fieldLabelssummaryprojectdelay["English"]["approveDate"] = "Approve Date";
	$fieldToolTipssummaryprojectdelay["English"]["approveDate"] = "";
	$placeHolderssummaryprojectdelay["English"]["approveDate"] = "";
	$fieldLabelssummaryprojectdelay["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipssummaryprojectdelay["English"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryprojectdelay["English"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryprojectdelay["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipssummaryprojectdelay["English"]["projectBudgetCost"] = "";
	$placeHolderssummaryprojectdelay["English"]["projectBudgetCost"] = "";
	$fieldLabelssummaryprojectdelay["English"]["projectFile"] = "Project File";
	$fieldToolTipssummaryprojectdelay["English"]["projectFile"] = "";
	$placeHolderssummaryprojectdelay["English"]["projectFile"] = "";
	$fieldLabelssummaryprojectdelay["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipssummaryprojectdelay["English"]["entryUserName"] = "";
	$placeHolderssummaryprojectdelay["English"]["entryUserName"] = "";
	$fieldLabelssummaryprojectdelay["English"]["entryTime"] = "Entry Time";
	$fieldToolTipssummaryprojectdelay["English"]["entryTime"] = "";
	$placeHolderssummaryprojectdelay["English"]["entryTime"] = "";
	$fieldLabelssummaryprojectdelay["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipssummaryprojectdelay["English"]["disbureAmounts"] = "";
	$placeHolderssummaryprojectdelay["English"]["disbureAmounts"] = "";
	$fieldLabelssummaryprojectdelay["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipssummaryprojectdelay["English"]["ProjectTypeName"] = "";
	$placeHolderssummaryprojectdelay["English"]["ProjectTypeName"] = "";
	$fieldLabelssummaryprojectdelay["English"]["companyName"] = "Company Name";
	$fieldToolTipssummaryprojectdelay["English"]["companyName"] = "";
	$placeHolderssummaryprojectdelay["English"]["companyName"] = "";
	if (count($fieldToolTipssummaryprojectdelay["English"]))
		$tdatasummaryprojectdelay[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelssummaryprojectdelay["Thai"] = array();
	$fieldToolTipssummaryprojectdelay["Thai"] = array();
	$placeHolderssummaryprojectdelay["Thai"] = array();
	$pageTitlessummaryprojectdelay["Thai"] = array();
	$fieldLabelssummaryprojectdelay["Thai"]["id"] = "ID";
	$fieldToolTipssummaryprojectdelay["Thai"]["id"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["id"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipssummaryprojectdelay["Thai"]["projectName"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["projectName"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipssummaryprojectdelay["Thai"]["projectStart"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["projectStart"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipssummaryprojectdelay["Thai"]["projectEnd"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["projectEnd"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipssummaryprojectdelay["Thai"]["approveStatus"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["approveStatus"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipssummaryprojectdelay["Thai"]["approveDate"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["approveDate"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["DocumentCheckStatus"] = "สถานะการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipssummaryprojectdelay["Thai"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipssummaryprojectdelay["Thai"]["projectBudgetCost"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["projectBudgetCost"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipssummaryprojectdelay["Thai"]["projectFile"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["projectFile"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipssummaryprojectdelay["Thai"]["entryUserName"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["entryUserName"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipssummaryprojectdelay["Thai"]["entryTime"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["entryTime"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipssummaryprojectdelay["Thai"]["disbureAmounts"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["disbureAmounts"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipssummaryprojectdelay["Thai"]["ProjectTypeName"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["ProjectTypeName"] = "";
	$fieldLabelssummaryprojectdelay["Thai"]["companyName"] = "Company Name";
	$fieldToolTipssummaryprojectdelay["Thai"]["companyName"] = "";
	$placeHolderssummaryprojectdelay["Thai"]["companyName"] = "";
	if (count($fieldToolTipssummaryprojectdelay["Thai"]))
		$tdatasummaryprojectdelay[".isUseToolTips"] = true;
}


	$tdatasummaryprojectdelay[".NCSearch"] = true;



$tdatasummaryprojectdelay[".shortTableName"] = "summaryprojectdelay";
$tdatasummaryprojectdelay[".nSecOptions"] = 0;

$tdatasummaryprojectdelay[".mainTableOwnerID"] = "";
$tdatasummaryprojectdelay[".entityType"] = 2;
$tdatasummaryprojectdelay[".connId"] = "mc_at_192_168_1_111";


$tdatasummaryprojectdelay[".strOriginalTableName"] = "project";

	



$tdatasummaryprojectdelay[".showAddInPopup"] = false;

$tdatasummaryprojectdelay[".showEditInPopup"] = false;

$tdatasummaryprojectdelay[".showViewInPopup"] = false;

$tdatasummaryprojectdelay[".listAjax"] = false;
//	temporary
//$tdatasummaryprojectdelay[".listAjax"] = false;

	$tdatasummaryprojectdelay[".audit"] = false;

	$tdatasummaryprojectdelay[".locking"] = false;


$pages = $tdatasummaryprojectdelay[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasummaryprojectdelay[".edit"] = true;
	$tdatasummaryprojectdelay[".afterEditAction"] = 0;
	$tdatasummaryprojectdelay[".closePopupAfterEdit"] = 1;
	$tdatasummaryprojectdelay[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasummaryprojectdelay[".add"] = true;
$tdatasummaryprojectdelay[".afterAddAction"] = 1;
$tdatasummaryprojectdelay[".closePopupAfterAdd"] = 1;
$tdatasummaryprojectdelay[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasummaryprojectdelay[".list"] = true;
}



$tdatasummaryprojectdelay[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasummaryprojectdelay[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasummaryprojectdelay[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasummaryprojectdelay[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasummaryprojectdelay[".printFriendly"] = true;
}



$tdatasummaryprojectdelay[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasummaryprojectdelay[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasummaryprojectdelay[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasummaryprojectdelay[".isUseAjaxSuggest"] = true;






$tdatasummaryprojectdelay[".ajaxCodeSnippetAdded"] = false;

$tdatasummaryprojectdelay[".buttonsAdded"] = false;

$tdatasummaryprojectdelay[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasummaryprojectdelay[".isUseTimeForSearch"] = false;


$tdatasummaryprojectdelay[".badgeColor"] = "9ACD32";


$tdatasummaryprojectdelay[".allSearchFields"] = array();
$tdatasummaryprojectdelay[".filterFields"] = array();
$tdatasummaryprojectdelay[".requiredSearchFields"] = array();

$tdatasummaryprojectdelay[".googleLikeFields"] = array();
$tdatasummaryprojectdelay[".googleLikeFields"][] = "id";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "projectName";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "projectStart";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "projectEnd";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "ProjectTypeName";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "companyName";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "approveStatus";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "approveDate";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "DocumentCheckStatus";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "projectBudgetCost";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "disbureAmounts";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "projectFile";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "entryUserName";
$tdatasummaryprojectdelay[".googleLikeFields"][] = "entryTime";



$tdatasummaryprojectdelay[".tableType"] = "report";

$tdatasummaryprojectdelay[".printerPageOrientation"] = 0;
$tdatasummaryprojectdelay[".nPrinterPageScale"] = 100;

$tdatasummaryprojectdelay[".nPrinterSplitRecords"] = 40;

$tdatasummaryprojectdelay[".geocodingEnabled"] = false;

//report settings

$tdatasummaryprojectdelay[".reportPrintGroupsPerPage"] = 3;
$tdatasummaryprojectdelay[".reportPrintRecordsPerPage"] = 40;

$tdatasummaryprojectdelay[".pageSizeGroups"] = 5;
$tdatasummaryprojectdelay[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatasummaryprojectdelay[".strOrderBy"] = $tstrOrderBy;

$tdatasummaryprojectdelay[".orderindexes"] = array();


$tdatasummaryprojectdelay[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) As 'disbureAmounts',  project.projectFile,  project.entryUserName,  project.entryTime";
$tdatasummaryprojectdelay[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdatasummaryprojectdelay[".sqlWhereExpr"] = "(project.projectEnd > CURDATE())";
$tdatasummaryprojectdelay[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasummaryprojectdelay[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasummaryprojectdelay[".arrGroupsPerPage"] = $arrGPP;

$tdatasummaryprojectdelay[".highlightSearchResults"] = true;

$tableKeyssummaryprojectdelay = array();
$tableKeyssummaryprojectdelay[] = "id";
$tdatasummaryprojectdelay[".Keys"] = $tableKeyssummaryprojectdelay;


$tdatasummaryprojectdelay[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","id");
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


	$tdatasummaryprojectdelay["id"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","projectName");
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


	$tdatasummaryprojectdelay["projectName"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","projectStart");
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


	$tdatasummaryprojectdelay["projectStart"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","projectEnd");
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


	$tdatasummaryprojectdelay["projectEnd"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","ProjectTypeName");
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


	$tdatasummaryprojectdelay["ProjectTypeName"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","companyName");
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


	$tdatasummaryprojectdelay["companyName"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "companyName";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","approveStatus");
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


	$tdatasummaryprojectdelay["approveStatus"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","approveDate");
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


	$tdatasummaryprojectdelay["approveDate"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "approveDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","DocumentCheckStatus");
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


	$tdatasummaryprojectdelay["DocumentCheckStatus"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "DocumentCheckStatus";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","projectBudgetCost");
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


	$tdatasummaryprojectdelay["projectBudgetCost"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","disbureAmounts");
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


	$tdatasummaryprojectdelay["disbureAmounts"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","projectFile");
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


	$tdatasummaryprojectdelay["projectFile"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","entryUserName");
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


	$tdatasummaryprojectdelay["entryUserName"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryProjectDelay","entryTime");
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


	$tdatasummaryprojectdelay["entryTime"] = $fdata;
		$tdatasummaryprojectdelay[".searchableFields"][] = "entryTime";


$tables_data["SummaryProjectDelay"]=&$tdatasummaryprojectdelay;
$field_labels["SummaryProjectDelay"] = &$fieldLabelssummaryprojectdelay;
$fieldToolTips["SummaryProjectDelay"] = &$fieldToolTipssummaryprojectdelay;
$placeHolders["SummaryProjectDelay"] = &$placeHolderssummaryprojectdelay;
$page_titles["SummaryProjectDelay"] = &$pageTitlessummaryprojectdelay;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SummaryProjectDelay"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SummaryProjectDelay"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_summaryprojectdelay()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) As 'disbureAmounts',  project.projectFile,  project.entryUserName,  project.entryTime";
$proto0["m_strFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto0["m_strWhere"] = "(project.projectEnd > CURDATE())";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "project.projectEnd > CURDATE()";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "> CURDATE()";
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
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "SummaryProjectDelay";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "SummaryProjectDelay";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "SummaryProjectDelay";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "SummaryProjectDelay";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "SummaryProjectDelay";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "SummaryProjectDelay";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto18["m_sql"] = "project.approveStatus";
$proto18["m_srcTableName"] = "SummaryProjectDelay";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto20["m_sql"] = "project.approveDate";
$proto20["m_srcTableName"] = "SummaryProjectDelay";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto22["m_sql"] = "project.DocumentCheckStatus";
$proto22["m_srcTableName"] = "SummaryProjectDelay";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto24["m_sql"] = "project.projectBudgetCost";
$proto24["m_srcTableName"] = "SummaryProjectDelay";
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
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SUM(taskDisburse.disburseAmount)";
$proto26["m_srcTableName"] = "SummaryProjectDelay";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto29["m_sql"] = "project.projectFile";
$proto29["m_srcTableName"] = "SummaryProjectDelay";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto31["m_sql"] = "project.entryUserName";
$proto31["m_srcTableName"] = "SummaryProjectDelay";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto33["m_sql"] = "project.entryTime";
$proto33["m_srcTableName"] = "SummaryProjectDelay";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "project";
$proto36["m_srcTableName"] = "SummaryProjectDelay";
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
$proto35["m_srcTableName"] = "SummaryProjectDelay";
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
$proto40["m_srcTableName"] = "SummaryProjectDelay";
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
$proto39["m_srcTableName"] = "SummaryProjectDelay";
$proto41=array();
$proto41["m_sql"] = "project.id = taskDisburse.projectID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryProjectDelay"
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
	"m_srcTableName" => "SummaryProjectDelay"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SummaryProjectDelay";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_summaryprojectdelay = createSqlQuery_summaryprojectdelay();


	
				;

														

$tdatasummaryprojectdelay[".sqlquery"] = $queryData_summaryprojectdelay;



$tableEvents["SummaryProjectDelay"] = new eventsBase;
$tdatasummaryprojectdelay[".hasEvents"] = false;

?>