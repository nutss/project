<?php
$tdataprojectstatusall = array();
$tdataprojectstatusall[".searchableFields"] = array();
$tdataprojectstatusall[".ShortName"] = "projectstatusall";
$tdataprojectstatusall[".OwnerID"] = "";
$tdataprojectstatusall[".OriginalTable"] = "project";


$tdataprojectstatusall[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectstatusall[".originalPagesByType"] = $tdataprojectstatusall[".pagesByType"];
$tdataprojectstatusall[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectstatusall[".originalPages"] = $tdataprojectstatusall[".pages"];
$tdataprojectstatusall[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectstatusall[".originalDefaultPages"] = $tdataprojectstatusall[".defaultPages"];

//	field labels
$fieldLabelsprojectstatusall = array();
$fieldToolTipsprojectstatusall = array();
$pageTitlesprojectstatusall = array();
$placeHoldersprojectstatusall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectstatusall["English"] = array();
	$fieldToolTipsprojectstatusall["English"] = array();
	$placeHoldersprojectstatusall["English"] = array();
	$pageTitlesprojectstatusall["English"] = array();
	$fieldLabelsprojectstatusall["English"]["id"] = "ID";
	$fieldToolTipsprojectstatusall["English"]["id"] = "";
	$placeHoldersprojectstatusall["English"]["id"] = "";
	$fieldLabelsprojectstatusall["English"]["projectName"] = "Project Name";
	$fieldToolTipsprojectstatusall["English"]["projectName"] = "";
	$placeHoldersprojectstatusall["English"]["projectName"] = "";
	$fieldLabelsprojectstatusall["English"]["projectStart"] = "Project Start";
	$fieldToolTipsprojectstatusall["English"]["projectStart"] = "";
	$placeHoldersprojectstatusall["English"]["projectStart"] = "";
	$fieldLabelsprojectstatusall["English"]["projectEnd"] = "Project End";
	$fieldToolTipsprojectstatusall["English"]["projectEnd"] = "";
	$placeHoldersprojectstatusall["English"]["projectEnd"] = "";
	$fieldLabelsprojectstatusall["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipsprojectstatusall["English"]["approveStatus"] = "";
	$placeHoldersprojectstatusall["English"]["approveStatus"] = "";
	$fieldLabelsprojectstatusall["English"]["approveDate"] = "Approve Date";
	$fieldToolTipsprojectstatusall["English"]["approveDate"] = "";
	$placeHoldersprojectstatusall["English"]["approveDate"] = "";
	$fieldLabelsprojectstatusall["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipsprojectstatusall["English"]["DocumentCheckStatus"] = "";
	$placeHoldersprojectstatusall["English"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojectstatusall["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipsprojectstatusall["English"]["projectBudgetCost"] = "";
	$placeHoldersprojectstatusall["English"]["projectBudgetCost"] = "";
	$fieldLabelsprojectstatusall["English"]["projectFile"] = "Project File";
	$fieldToolTipsprojectstatusall["English"]["projectFile"] = "";
	$placeHoldersprojectstatusall["English"]["projectFile"] = "";
	$fieldLabelsprojectstatusall["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectstatusall["English"]["entryUserName"] = "";
	$placeHoldersprojectstatusall["English"]["entryUserName"] = "";
	$fieldLabelsprojectstatusall["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectstatusall["English"]["entryTime"] = "";
	$placeHoldersprojectstatusall["English"]["entryTime"] = "";
	$fieldLabelsprojectstatusall["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipsprojectstatusall["English"]["disbureAmounts"] = "";
	$placeHoldersprojectstatusall["English"]["disbureAmounts"] = "";
	$fieldLabelsprojectstatusall["English"]["screenDate"] = "Screen Date";
	$fieldToolTipsprojectstatusall["English"]["screenDate"] = "";
	$placeHoldersprojectstatusall["English"]["screenDate"] = "";
	$fieldLabelsprojectstatusall["English"]["screenStatus"] = "Screen Status";
	$fieldToolTipsprojectstatusall["English"]["screenStatus"] = "";
	$placeHoldersprojectstatusall["English"]["screenStatus"] = "";
	$fieldLabelsprojectstatusall["English"]["screenReason"] = "Screen Reason\"เหตุผลการกลั่นกรองคำขอทุนวิจัย,,,,";
	$fieldToolTipsprojectstatusall["English"]["screenReason"] = "";
	$placeHoldersprojectstatusall["English"]["screenReason"] = "";
	$fieldLabelsprojectstatusall["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipsprojectstatusall["English"]["approveReason"] = "";
	$placeHoldersprojectstatusall["English"]["approveReason"] = "";
	$fieldLabelsprojectstatusall["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipsprojectstatusall["English"]["ProjectTypeName"] = "";
	$placeHoldersprojectstatusall["English"]["ProjectTypeName"] = "";
	$fieldLabelsprojectstatusall["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojectstatusall["English"]["companyName"] = "";
	$placeHoldersprojectstatusall["English"]["companyName"] = "";
	$fieldLabelsprojectstatusall["English"]["DocumentCheckDate"] = "Document Check Date";
	$fieldToolTipsprojectstatusall["English"]["DocumentCheckDate"] = "";
	$placeHoldersprojectstatusall["English"]["DocumentCheckDate"] = "";
	$fieldLabelsprojectstatusall["English"]["DocumentCheckReason"] = "Document Check Reason";
	$fieldToolTipsprojectstatusall["English"]["DocumentCheckReason"] = "";
	$placeHoldersprojectstatusall["English"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojectstatusall["English"]))
		$tdataprojectstatusall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectstatusall["Thai"] = array();
	$fieldToolTipsprojectstatusall["Thai"] = array();
	$placeHoldersprojectstatusall["Thai"] = array();
	$pageTitlesprojectstatusall["Thai"] = array();
	$fieldLabelsprojectstatusall["Thai"]["id"] = "ID";
	$fieldToolTipsprojectstatusall["Thai"]["id"] = "";
	$placeHoldersprojectstatusall["Thai"]["id"] = "";
	$fieldLabelsprojectstatusall["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipsprojectstatusall["Thai"]["projectName"] = "";
	$placeHoldersprojectstatusall["Thai"]["projectName"] = "";
	$fieldLabelsprojectstatusall["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipsprojectstatusall["Thai"]["projectStart"] = "";
	$placeHoldersprojectstatusall["Thai"]["projectStart"] = "";
	$fieldLabelsprojectstatusall["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipsprojectstatusall["Thai"]["projectEnd"] = "";
	$placeHoldersprojectstatusall["Thai"]["projectEnd"] = "";
	$fieldLabelsprojectstatusall["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["approveStatus"] = "";
	$placeHoldersprojectstatusall["Thai"]["approveStatus"] = "";
	$fieldLabelsprojectstatusall["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["approveDate"] = "";
	$placeHoldersprojectstatusall["Thai"]["approveDate"] = "";
	$fieldLabelsprojectstatusall["Thai"]["DocumentCheckStatus"] = "สถานะการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["DocumentCheckStatus"] = "";
	$placeHoldersprojectstatusall["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojectstatusall["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["projectBudgetCost"] = "";
	$placeHoldersprojectstatusall["Thai"]["projectBudgetCost"] = "";
	$fieldLabelsprojectstatusall["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["projectFile"] = "";
	$placeHoldersprojectstatusall["Thai"]["projectFile"] = "";
	$fieldLabelsprojectstatusall["Thai"]["entryUserName"] = "ผู้ดูแลโครงการทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["entryUserName"] = "";
	$placeHoldersprojectstatusall["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectstatusall["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectstatusall["Thai"]["entryTime"] = "";
	$placeHoldersprojectstatusall["Thai"]["entryTime"] = "";
	$fieldLabelsprojectstatusall["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipsprojectstatusall["Thai"]["disbureAmounts"] = "";
	$placeHoldersprojectstatusall["Thai"]["disbureAmounts"] = "";
	$fieldLabelsprojectstatusall["Thai"]["screenDate"] = "วันที่การกลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["screenDate"] = "";
	$placeHoldersprojectstatusall["Thai"]["screenDate"] = "";
	$fieldLabelsprojectstatusall["Thai"]["screenStatus"] = "สถานะการกลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["screenStatus"] = "";
	$placeHoldersprojectstatusall["Thai"]["screenStatus"] = "";
	$fieldLabelsprojectstatusall["Thai"]["screenReason"] = "เหตุผลการกลั่นกรอง";
	$fieldToolTipsprojectstatusall["Thai"]["screenReason"] = "";
	$placeHoldersprojectstatusall["Thai"]["screenReason"] = "";
	$fieldLabelsprojectstatusall["Thai"]["approveReason"] = "เหตุผลการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["approveReason"] = "";
	$placeHoldersprojectstatusall["Thai"]["approveReason"] = "";
	$fieldLabelsprojectstatusall["Thai"]["ProjectTypeName"] = "ประเภททุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["ProjectTypeName"] = "";
	$placeHoldersprojectstatusall["Thai"]["ProjectTypeName"] = "";
	$fieldLabelsprojectstatusall["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["companyName"] = "";
	$placeHoldersprojectstatusall["Thai"]["companyName"] = "";
	$fieldLabelsprojectstatusall["Thai"]["DocumentCheckDate"] = "วันที่การตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["DocumentCheckDate"] = "";
	$placeHoldersprojectstatusall["Thai"]["DocumentCheckDate"] = "";
	$fieldLabelsprojectstatusall["Thai"]["DocumentCheckReason"] = "เหตุผลการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusall["Thai"]["DocumentCheckReason"] = "";
	$placeHoldersprojectstatusall["Thai"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojectstatusall["Thai"]))
		$tdataprojectstatusall[".isUseToolTips"] = true;
}


	$tdataprojectstatusall[".NCSearch"] = true;



$tdataprojectstatusall[".shortTableName"] = "projectstatusall";
$tdataprojectstatusall[".nSecOptions"] = 0;

$tdataprojectstatusall[".mainTableOwnerID"] = "";
$tdataprojectstatusall[".entityType"] = 1;
$tdataprojectstatusall[".connId"] = "mc_at_192_168_1_111";


$tdataprojectstatusall[".strOriginalTableName"] = "project";

	



$tdataprojectstatusall[".showAddInPopup"] = false;

$tdataprojectstatusall[".showEditInPopup"] = false;

$tdataprojectstatusall[".showViewInPopup"] = false;

$tdataprojectstatusall[".listAjax"] = false;
//	temporary
//$tdataprojectstatusall[".listAjax"] = false;

	$tdataprojectstatusall[".audit"] = false;

	$tdataprojectstatusall[".locking"] = false;


$pages = $tdataprojectstatusall[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectstatusall[".edit"] = true;
	$tdataprojectstatusall[".afterEditAction"] = 0;
	$tdataprojectstatusall[".closePopupAfterEdit"] = 1;
	$tdataprojectstatusall[".afterEditActionDetTable"] = "taskDisburse";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectstatusall[".add"] = true;
$tdataprojectstatusall[".afterAddAction"] = 0;
$tdataprojectstatusall[".closePopupAfterAdd"] = 0;
$tdataprojectstatusall[".afterAddActionDetTable"] = "taskCalendar";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectstatusall[".list"] = true;
}



$tdataprojectstatusall[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectstatusall[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectstatusall[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectstatusall[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectstatusall[".printFriendly"] = true;
}



$tdataprojectstatusall[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectstatusall[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectstatusall[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectstatusall[".isUseAjaxSuggest"] = true;

$tdataprojectstatusall[".rowHighlite"] = true;





$tdataprojectstatusall[".ajaxCodeSnippetAdded"] = false;

$tdataprojectstatusall[".buttonsAdded"] = false;

$tdataprojectstatusall[".addPageEvents"] = true;

// use timepicker for search panel
$tdataprojectstatusall[".isUseTimeForSearch"] = false;


$tdataprojectstatusall[".badgeColor"] = "8FBC8B";


$tdataprojectstatusall[".allSearchFields"] = array();
$tdataprojectstatusall[".filterFields"] = array();
$tdataprojectstatusall[".requiredSearchFields"] = array();

$tdataprojectstatusall[".googleLikeFields"] = array();
$tdataprojectstatusall[".googleLikeFields"][] = "projectName";
$tdataprojectstatusall[".googleLikeFields"][] = "projectStart";
$tdataprojectstatusall[".googleLikeFields"][] = "projectEnd";
$tdataprojectstatusall[".googleLikeFields"][] = "ProjectTypeName";
$tdataprojectstatusall[".googleLikeFields"][] = "companyName";
$tdataprojectstatusall[".googleLikeFields"][] = "DocumentCheckDate";
$tdataprojectstatusall[".googleLikeFields"][] = "DocumentCheckStatus";
$tdataprojectstatusall[".googleLikeFields"][] = "DocumentCheckReason";
$tdataprojectstatusall[".googleLikeFields"][] = "screenDate";
$tdataprojectstatusall[".googleLikeFields"][] = "screenStatus";
$tdataprojectstatusall[".googleLikeFields"][] = "screenReason";
$tdataprojectstatusall[".googleLikeFields"][] = "approveDate";
$tdataprojectstatusall[".googleLikeFields"][] = "approveStatus";
$tdataprojectstatusall[".googleLikeFields"][] = "approveReason";
$tdataprojectstatusall[".googleLikeFields"][] = "projectBudgetCost";
$tdataprojectstatusall[".googleLikeFields"][] = "projectFile";
$tdataprojectstatusall[".googleLikeFields"][] = "entryUserName";
$tdataprojectstatusall[".googleLikeFields"][] = "entryTime";



$tdataprojectstatusall[".tableType"] = "list";

$tdataprojectstatusall[".printerPageOrientation"] = 0;
$tdataprojectstatusall[".nPrinterPageScale"] = 100;

$tdataprojectstatusall[".nPrinterSplitRecords"] = 40;

$tdataprojectstatusall[".geocodingEnabled"] = false;










$tdataprojectstatusall[".pageSize"] = 20;

$tdataprojectstatusall[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectstatusall[".strOrderBy"] = $tstrOrderBy;

$tdataprojectstatusall[".orderindexes"] = array();


$tdataprojectstatusall[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.DocumentCheckDate,  project.DocumentCheckStatus,  project.DocumentCheckReason,  project.screenDate,  project.screenStatus,  project.screenReason,  project.approveDate,  project.approveStatus,  project.approveReason,  project.projectBudgetCost,  project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$tdataprojectstatusall[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdataprojectstatusall[".sqlWhereExpr"] = "";
$tdataprojectstatusall[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectstatusall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectstatusall[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectstatusall[".highlightSearchResults"] = true;

$tableKeysprojectstatusall = array();
$tableKeysprojectstatusall[] = "id";
$tdataprojectstatusall[".Keys"] = $tableKeysprojectstatusall;


$tdataprojectstatusall[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","id");
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


	$tdataprojectstatusall["id"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","projectName");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataprojectstatusall["projectName"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","projectStart");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataprojectstatusall["projectStart"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","projectEnd");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataprojectstatusall["projectEnd"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","ProjectTypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ProjectTypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.ProjectTypeName";

	
	
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
	$edata["LookupTable"] = "ProjectType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "typeName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "typeName";

	

	
	$edata["LookupOrderBy"] = "typeNumber";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectstatusall["ProjectTypeName"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","companyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "companyName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.companyName";

	
	
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
	$edata["LookupTable"] = "ProjectCompany";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "companyName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "companyName";

	

	
	$edata["LookupOrderBy"] = "companyName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectstatusall["companyName"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "companyName";
//	DocumentCheckDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DocumentCheckDate";
	$fdata["GoodName"] = "DocumentCheckDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","DocumentCheckDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "DocumentCheckDate";

		$fdata["sourceSingle"] = "DocumentCheckDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.DocumentCheckDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataprojectstatusall["DocumentCheckDate"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "DocumentCheckDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","DocumentCheckStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DocumentCheckStatus";

		$fdata["sourceSingle"] = "DocumentCheckStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.DocumentCheckStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ผ่าน";
	$edata["LookupValues"][] = "ไม่ผ่าน";
	$edata["LookupValues"][] = "รอตรวจสอบ";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectstatusall["DocumentCheckStatus"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "DocumentCheckStatus";
//	DocumentCheckReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckReason";
	$fdata["GoodName"] = "DocumentCheckReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","DocumentCheckReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DocumentCheckReason";

		$fdata["sourceSingle"] = "DocumentCheckReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.DocumentCheckReason";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataprojectstatusall["DocumentCheckReason"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "DocumentCheckReason";
//	screenDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "screenDate";
	$fdata["GoodName"] = "screenDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","screenDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "screenDate";

		$fdata["sourceSingle"] = "screenDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.screenDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataprojectstatusall["screenDate"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "screenDate";
//	screenStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "screenStatus";
	$fdata["GoodName"] = "screenStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","screenStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "screenStatus";

		$fdata["sourceSingle"] = "screenStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.screenStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ผ่าน";
	$edata["LookupValues"][] = "ไม่ผ่าน";
	$edata["LookupValues"][] = "รอตรวจสอบ";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectstatusall["screenStatus"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "screenStatus";
//	screenReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "screenReason";
	$fdata["GoodName"] = "screenReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","screenReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "screenReason";

		$fdata["sourceSingle"] = "screenReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.screenReason";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataprojectstatusall["screenReason"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "screenReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","approveDate");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataprojectstatusall["approveDate"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.approveStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "อนุมัติ";
	$edata["LookupValues"][] = "ไม่อนุมัติ";
	$edata["LookupValues"][] = "รออนุมัติ";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprojectstatusall["approveStatus"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","approveReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveReason";

		$fdata["sourceSingle"] = "approveReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.approveReason";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataprojectstatusall["approveReason"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "approveReason";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","projectBudgetCost");
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


	$tdataprojectstatusall["projectBudgetCost"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","disbureAmounts");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "disbureAmounts";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataprojectstatusall["disbureAmounts"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","projectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "projectFile";

		$fdata["sourceSingle"] = "projectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.projectFile";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataprojectstatusall["projectFile"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","entryUserName");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataprojectstatusall["entryUserName"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusAll","entryTime");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprojectstatusall["entryTime"] = $fdata;
		$tdataprojectstatusall[".searchableFields"][] = "entryTime";


$tables_data["projectStatusAll"]=&$tdataprojectstatusall;
$field_labels["projectStatusAll"] = &$fieldLabelsprojectstatusall;
$fieldToolTips["projectStatusAll"] = &$fieldToolTipsprojectstatusall;
$placeHolders["projectStatusAll"] = &$placeHoldersprojectstatusall;
$page_titles["projectStatusAll"] = &$pageTitlesprojectstatusall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["projectStatusAll"] = array();
//	taskTrack
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="taskTrack";
		$detailsParam["dOriginalTable"] = "taskTrack";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tasktrack";
	$detailsParam["dCaptionTable"] = GetTableCaption("taskTrack");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["projectStatusAll"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"][]="projectID";
//	taskDisburse
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="taskDisburse";
		$detailsParam["dOriginalTable"] = "taskDisburse";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "taskdisburse";
	$detailsParam["dCaptionTable"] = GetTableCaption("taskDisburse");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["projectStatusAll"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"][]="projectID";
//	taskRenew
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="taskRenew";
		$detailsParam["dOriginalTable"] = "taskRenew";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "taskrenew";
	$detailsParam["dCaptionTable"] = GetTableCaption("taskRenew");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["projectStatusAll"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusAll"][$dIndex]["detailKeys"][]="projectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["projectStatusAll"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectstatusall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.DocumentCheckDate,  project.DocumentCheckStatus,  project.DocumentCheckReason,  project.screenDate,  project.screenStatus,  project.screenReason,  project.approveDate,  project.approveStatus,  project.approveReason,  project.projectBudgetCost,  project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
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
	"m_srcTableName" => "projectStatusAll"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "projectStatusAll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "projectStatusAll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "projectStatusAll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "projectStatusAll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "projectStatusAll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "projectStatusAll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto18["m_sql"] = "project.DocumentCheckDate";
$proto18["m_srcTableName"] = "projectStatusAll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto20["m_sql"] = "project.DocumentCheckStatus";
$proto20["m_srcTableName"] = "projectStatusAll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto22["m_sql"] = "project.DocumentCheckReason";
$proto22["m_srcTableName"] = "projectStatusAll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "screenDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto24["m_sql"] = "project.screenDate";
$proto24["m_srcTableName"] = "projectStatusAll";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "screenStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto26["m_sql"] = "project.screenStatus";
$proto26["m_srcTableName"] = "projectStatusAll";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "screenReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto28["m_sql"] = "project.screenReason";
$proto28["m_srcTableName"] = "projectStatusAll";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto30["m_sql"] = "project.approveDate";
$proto30["m_srcTableName"] = "projectStatusAll";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto32["m_sql"] = "project.approveStatus";
$proto32["m_srcTableName"] = "projectStatusAll";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto34["m_sql"] = "project.approveReason";
$proto34["m_srcTableName"] = "projectStatusAll";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto36["m_sql"] = "project.projectBudgetCost";
$proto36["m_srcTableName"] = "projectStatusAll";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)"
));

$proto38["m_sql"] = "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)";
$proto38["m_srcTableName"] = "projectStatusAll";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto40["m_sql"] = "project.projectFile";
$proto40["m_srcTableName"] = "projectStatusAll";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto42["m_sql"] = "project.entryUserName";
$proto42["m_srcTableName"] = "projectStatusAll";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto44["m_sql"] = "project.entryTime";
$proto44["m_srcTableName"] = "projectStatusAll";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "project";
$proto47["m_srcTableName"] = "projectStatusAll";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "projectName";
$proto47["m_columns"][] = "projectStart";
$proto47["m_columns"][] = "projectEnd";
$proto47["m_columns"][] = "ProjectTypeName";
$proto47["m_columns"][] = "companyName";
$proto47["m_columns"][] = "projectBudgetCost";
$proto47["m_columns"][] = "projectFile";
$proto47["m_columns"][] = "DocumentCheckDate";
$proto47["m_columns"][] = "DocumentCheckStatus";
$proto47["m_columns"][] = "DocumentCheckReason";
$proto47["m_columns"][] = "screenDate";
$proto47["m_columns"][] = "screenStatus";
$proto47["m_columns"][] = "screenReason";
$proto47["m_columns"][] = "approveDate";
$proto47["m_columns"][] = "approveStatus";
$proto47["m_columns"][] = "approveReason";
$proto47["m_columns"][] = "entryUserName";
$proto47["m_columns"][] = "entryTime";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "project";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "projectStatusAll";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_LEFTJOIN";
			$proto51=array();
$proto51["m_strName"] = "taskDisburse";
$proto51["m_srcTableName"] = "projectStatusAll";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "projectID";
$proto51["m_columns"][] = "trackDisburseDate";
$proto51["m_columns"][] = "progressStep";
$proto51["m_columns"][] = "disburseStatus";
$proto51["m_columns"][] = "disburseDesc";
$proto51["m_columns"][] = "disburseAmount";
$proto51["m_columns"][] = "disburseAttFille";
$proto51["m_columns"][] = "approveStatus";
$proto51["m_columns"][] = "approveDate";
$proto51["m_columns"][] = "approveReason";
$proto51["m_columns"][] = "entryUserName";
$proto51["m_columns"][] = "entryTime";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "projectStatusAll";
$proto52=array();
$proto52["m_sql"] = "project.id = taskDisburse.projectID";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= taskDisburse.projectID";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusAll"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projectStatusAll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectstatusall = createSqlQuery_projectstatusall();


	
				;

																				

$tdataprojectstatusall[".sqlquery"] = $queryData_projectstatusall;



include_once(getabspath("include/projectstatusall_events.php"));
$tableEvents["projectStatusAll"] = new eventclass_projectstatusall;
$tdataprojectstatusall[".hasEvents"] = true;

$query = &$queryData_projectstatusall;
$table = "projectStatusAll";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>