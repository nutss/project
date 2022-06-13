<?php
$tdataprojectstatusapprove = array();
$tdataprojectstatusapprove[".searchableFields"] = array();
$tdataprojectstatusapprove[".ShortName"] = "projectstatusapprove";
$tdataprojectstatusapprove[".OwnerID"] = "";
$tdataprojectstatusapprove[".OriginalTable"] = "project";


$tdataprojectstatusapprove[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectstatusapprove[".originalPagesByType"] = $tdataprojectstatusapprove[".pagesByType"];
$tdataprojectstatusapprove[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectstatusapprove[".originalPages"] = $tdataprojectstatusapprove[".pages"];
$tdataprojectstatusapprove[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectstatusapprove[".originalDefaultPages"] = $tdataprojectstatusapprove[".defaultPages"];

//	field labels
$fieldLabelsprojectstatusapprove = array();
$fieldToolTipsprojectstatusapprove = array();
$pageTitlesprojectstatusapprove = array();
$placeHoldersprojectstatusapprove = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectstatusapprove["English"] = array();
	$fieldToolTipsprojectstatusapprove["English"] = array();
	$placeHoldersprojectstatusapprove["English"] = array();
	$pageTitlesprojectstatusapprove["English"] = array();
	$fieldLabelsprojectstatusapprove["English"]["id"] = "ID";
	$fieldToolTipsprojectstatusapprove["English"]["id"] = "";
	$placeHoldersprojectstatusapprove["English"]["id"] = "";
	$fieldLabelsprojectstatusapprove["English"]["projectName"] = "Project Name";
	$fieldToolTipsprojectstatusapprove["English"]["projectName"] = "";
	$placeHoldersprojectstatusapprove["English"]["projectName"] = "";
	$fieldLabelsprojectstatusapprove["English"]["projectStart"] = "Project Start";
	$fieldToolTipsprojectstatusapprove["English"]["projectStart"] = "";
	$placeHoldersprojectstatusapprove["English"]["projectStart"] = "";
	$fieldLabelsprojectstatusapprove["English"]["projectEnd"] = "Project End";
	$fieldToolTipsprojectstatusapprove["English"]["projectEnd"] = "";
	$placeHoldersprojectstatusapprove["English"]["projectEnd"] = "";
	$fieldLabelsprojectstatusapprove["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipsprojectstatusapprove["English"]["approveStatus"] = "";
	$placeHoldersprojectstatusapprove["English"]["approveStatus"] = "";
	$fieldLabelsprojectstatusapprove["English"]["approveDate"] = "Approve Date";
	$fieldToolTipsprojectstatusapprove["English"]["approveDate"] = "";
	$placeHoldersprojectstatusapprove["English"]["approveDate"] = "";
	$fieldLabelsprojectstatusapprove["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipsprojectstatusapprove["English"]["DocumentCheckStatus"] = "";
	$placeHoldersprojectstatusapprove["English"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojectstatusapprove["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipsprojectstatusapprove["English"]["projectBudgetCost"] = "";
	$placeHoldersprojectstatusapprove["English"]["projectBudgetCost"] = "";
	$fieldLabelsprojectstatusapprove["English"]["projectFile"] = "Project File";
	$fieldToolTipsprojectstatusapprove["English"]["projectFile"] = "";
	$placeHoldersprojectstatusapprove["English"]["projectFile"] = "";
	$fieldLabelsprojectstatusapprove["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectstatusapprove["English"]["entryUserName"] = "";
	$placeHoldersprojectstatusapprove["English"]["entryUserName"] = "";
	$fieldLabelsprojectstatusapprove["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectstatusapprove["English"]["entryTime"] = "";
	$placeHoldersprojectstatusapprove["English"]["entryTime"] = "";
	$fieldLabelsprojectstatusapprove["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipsprojectstatusapprove["English"]["disbureAmounts"] = "";
	$placeHoldersprojectstatusapprove["English"]["disbureAmounts"] = "";
	$fieldLabelsprojectstatusapprove["English"]["screenDate"] = "Screen Date";
	$fieldToolTipsprojectstatusapprove["English"]["screenDate"] = "";
	$placeHoldersprojectstatusapprove["English"]["screenDate"] = "";
	$fieldLabelsprojectstatusapprove["English"]["screenStatus"] = "Screen Status";
	$fieldToolTipsprojectstatusapprove["English"]["screenStatus"] = "";
	$placeHoldersprojectstatusapprove["English"]["screenStatus"] = "";
	$fieldLabelsprojectstatusapprove["English"]["screenReason"] = "Screen Reason\"เหตุผลการกลั่นกรองคำขอทุนวิจัย,,,,";
	$fieldToolTipsprojectstatusapprove["English"]["screenReason"] = "";
	$placeHoldersprojectstatusapprove["English"]["screenReason"] = "";
	$fieldLabelsprojectstatusapprove["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipsprojectstatusapprove["English"]["approveReason"] = "";
	$placeHoldersprojectstatusapprove["English"]["approveReason"] = "";
	$fieldLabelsprojectstatusapprove["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipsprojectstatusapprove["English"]["ProjectTypeName"] = "";
	$placeHoldersprojectstatusapprove["English"]["ProjectTypeName"] = "";
	$fieldLabelsprojectstatusapprove["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojectstatusapprove["English"]["companyName"] = "";
	$placeHoldersprojectstatusapprove["English"]["companyName"] = "";
	$fieldLabelsprojectstatusapprove["English"]["DocumentCheckDate"] = "Document Check Date";
	$fieldToolTipsprojectstatusapprove["English"]["DocumentCheckDate"] = "";
	$placeHoldersprojectstatusapprove["English"]["DocumentCheckDate"] = "";
	$fieldLabelsprojectstatusapprove["English"]["DocumentCheckReason"] = "Document Check Reason";
	$fieldToolTipsprojectstatusapprove["English"]["DocumentCheckReason"] = "";
	$placeHoldersprojectstatusapprove["English"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojectstatusapprove["English"]))
		$tdataprojectstatusapprove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectstatusapprove["Thai"] = array();
	$fieldToolTipsprojectstatusapprove["Thai"] = array();
	$placeHoldersprojectstatusapprove["Thai"] = array();
	$pageTitlesprojectstatusapprove["Thai"] = array();
	$fieldLabelsprojectstatusapprove["Thai"]["id"] = "ID";
	$fieldToolTipsprojectstatusapprove["Thai"]["id"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["id"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipsprojectstatusapprove["Thai"]["projectName"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["projectName"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipsprojectstatusapprove["Thai"]["projectStart"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["projectStart"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipsprojectstatusapprove["Thai"]["projectEnd"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["projectEnd"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["approveStatus"] = "สถานะอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["approveStatus"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["approveStatus"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["approveDate"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["approveDate"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["DocumentCheckStatus"] = "สถานะตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["DocumentCheckStatus"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["projectBudgetCost"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["projectBudgetCost"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["projectFile"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["projectFile"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["entryUserName"] = "ผู้ดูแลโครงการทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["entryUserName"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectstatusapprove["Thai"]["entryTime"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["entryTime"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipsprojectstatusapprove["Thai"]["disbureAmounts"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["disbureAmounts"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["screenDate"] = "วันที่กลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["screenDate"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["screenDate"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["screenStatus"] = "สถานะกลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["screenStatus"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["screenStatus"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["screenReason"] = "เหตุผลกลั่นกรอง";
	$fieldToolTipsprojectstatusapprove["Thai"]["screenReason"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["screenReason"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["approveReason"] = "เหตุผลอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["approveReason"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["approveReason"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["ProjectTypeName"] = "ประเภททุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["ProjectTypeName"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["ProjectTypeName"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["companyName"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["companyName"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["DocumentCheckDate"] = "วันที่ตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["DocumentCheckDate"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["DocumentCheckDate"] = "";
	$fieldLabelsprojectstatusapprove["Thai"]["DocumentCheckReason"] = "เหตุผลตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojectstatusapprove["Thai"]["DocumentCheckReason"] = "";
	$placeHoldersprojectstatusapprove["Thai"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojectstatusapprove["Thai"]))
		$tdataprojectstatusapprove[".isUseToolTips"] = true;
}


	$tdataprojectstatusapprove[".NCSearch"] = true;



$tdataprojectstatusapprove[".shortTableName"] = "projectstatusapprove";
$tdataprojectstatusapprove[".nSecOptions"] = 0;

$tdataprojectstatusapprove[".mainTableOwnerID"] = "";
$tdataprojectstatusapprove[".entityType"] = 1;
$tdataprojectstatusapprove[".connId"] = "mc_at_192_168_1_111";


$tdataprojectstatusapprove[".strOriginalTableName"] = "project";

	



$tdataprojectstatusapprove[".showAddInPopup"] = false;

$tdataprojectstatusapprove[".showEditInPopup"] = false;

$tdataprojectstatusapprove[".showViewInPopup"] = false;

$tdataprojectstatusapprove[".listAjax"] = false;
//	temporary
//$tdataprojectstatusapprove[".listAjax"] = false;

	$tdataprojectstatusapprove[".audit"] = false;

	$tdataprojectstatusapprove[".locking"] = false;


$pages = $tdataprojectstatusapprove[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectstatusapprove[".edit"] = true;
	$tdataprojectstatusapprove[".afterEditAction"] = 0;
	$tdataprojectstatusapprove[".closePopupAfterEdit"] = 1;
	$tdataprojectstatusapprove[".afterEditActionDetTable"] = "taskDisburse";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectstatusapprove[".add"] = true;
$tdataprojectstatusapprove[".afterAddAction"] = 0;
$tdataprojectstatusapprove[".closePopupAfterAdd"] = 0;
$tdataprojectstatusapprove[".afterAddActionDetTable"] = "taskCalendar";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectstatusapprove[".list"] = true;
}



$tdataprojectstatusapprove[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectstatusapprove[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectstatusapprove[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectstatusapprove[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectstatusapprove[".printFriendly"] = true;
}



$tdataprojectstatusapprove[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectstatusapprove[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectstatusapprove[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectstatusapprove[".isUseAjaxSuggest"] = true;

$tdataprojectstatusapprove[".rowHighlite"] = true;





$tdataprojectstatusapprove[".ajaxCodeSnippetAdded"] = false;

$tdataprojectstatusapprove[".buttonsAdded"] = false;

$tdataprojectstatusapprove[".addPageEvents"] = true;

// use timepicker for search panel
$tdataprojectstatusapprove[".isUseTimeForSearch"] = false;


$tdataprojectstatusapprove[".badgeColor"] = "8FBC8B";


$tdataprojectstatusapprove[".allSearchFields"] = array();
$tdataprojectstatusapprove[".filterFields"] = array();
$tdataprojectstatusapprove[".requiredSearchFields"] = array();

$tdataprojectstatusapprove[".googleLikeFields"] = array();
$tdataprojectstatusapprove[".googleLikeFields"][] = "projectName";
$tdataprojectstatusapprove[".googleLikeFields"][] = "projectStart";
$tdataprojectstatusapprove[".googleLikeFields"][] = "projectEnd";
$tdataprojectstatusapprove[".googleLikeFields"][] = "ProjectTypeName";
$tdataprojectstatusapprove[".googleLikeFields"][] = "companyName";
$tdataprojectstatusapprove[".googleLikeFields"][] = "DocumentCheckDate";
$tdataprojectstatusapprove[".googleLikeFields"][] = "DocumentCheckStatus";
$tdataprojectstatusapprove[".googleLikeFields"][] = "DocumentCheckReason";
$tdataprojectstatusapprove[".googleLikeFields"][] = "screenDate";
$tdataprojectstatusapprove[".googleLikeFields"][] = "screenStatus";
$tdataprojectstatusapprove[".googleLikeFields"][] = "screenReason";
$tdataprojectstatusapprove[".googleLikeFields"][] = "approveDate";
$tdataprojectstatusapprove[".googleLikeFields"][] = "approveStatus";
$tdataprojectstatusapprove[".googleLikeFields"][] = "approveReason";
$tdataprojectstatusapprove[".googleLikeFields"][] = "projectBudgetCost";
$tdataprojectstatusapprove[".googleLikeFields"][] = "projectFile";
$tdataprojectstatusapprove[".googleLikeFields"][] = "entryUserName";
$tdataprojectstatusapprove[".googleLikeFields"][] = "entryTime";



$tdataprojectstatusapprove[".tableType"] = "list";

$tdataprojectstatusapprove[".printerPageOrientation"] = 0;
$tdataprojectstatusapprove[".nPrinterPageScale"] = 100;

$tdataprojectstatusapprove[".nPrinterSplitRecords"] = 40;

$tdataprojectstatusapprove[".geocodingEnabled"] = false;










$tdataprojectstatusapprove[".pageSize"] = 20;

$tdataprojectstatusapprove[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectstatusapprove[".strOrderBy"] = $tstrOrderBy;

$tdataprojectstatusapprove[".orderindexes"] = array();


$tdataprojectstatusapprove[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.DocumentCheckDate,  project.DocumentCheckStatus,  project.DocumentCheckReason,  project.screenDate,  project.screenStatus,  project.screenReason,  project.approveDate,  project.approveStatus,  project.approveReason,  project.projectBudgetCost,  project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$tdataprojectstatusapprove[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdataprojectstatusapprove[".sqlWhereExpr"] = "";
$tdataprojectstatusapprove[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectstatusapprove[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectstatusapprove[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectstatusapprove[".highlightSearchResults"] = true;

$tableKeysprojectstatusapprove = array();
$tableKeysprojectstatusapprove[] = "id";
$tdataprojectstatusapprove[".Keys"] = $tableKeysprojectstatusapprove;


$tdataprojectstatusapprove[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","id");
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


	$tdataprojectstatusapprove["id"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","projectName");
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


	$tdataprojectstatusapprove["projectName"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","projectStart");
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


	$tdataprojectstatusapprove["projectStart"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","projectEnd");
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


	$tdataprojectstatusapprove["projectEnd"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","ProjectTypeName");
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


	$tdataprojectstatusapprove["ProjectTypeName"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","companyName");
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


	$tdataprojectstatusapprove["companyName"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "companyName";
//	DocumentCheckDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DocumentCheckDate";
	$fdata["GoodName"] = "DocumentCheckDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","DocumentCheckDate");
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


	$tdataprojectstatusapprove["DocumentCheckDate"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "DocumentCheckDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","DocumentCheckStatus");
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


	$tdataprojectstatusapprove["DocumentCheckStatus"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "DocumentCheckStatus";
//	DocumentCheckReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckReason";
	$fdata["GoodName"] = "DocumentCheckReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","DocumentCheckReason");
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


	$tdataprojectstatusapprove["DocumentCheckReason"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "DocumentCheckReason";
//	screenDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "screenDate";
	$fdata["GoodName"] = "screenDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","screenDate");
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


	$tdataprojectstatusapprove["screenDate"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "screenDate";
//	screenStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "screenStatus";
	$fdata["GoodName"] = "screenStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","screenStatus");
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


	$tdataprojectstatusapprove["screenStatus"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "screenStatus";
//	screenReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "screenReason";
	$fdata["GoodName"] = "screenReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","screenReason");
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


	$tdataprojectstatusapprove["screenReason"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "screenReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","approveDate");
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


	$tdataprojectstatusapprove["approveDate"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","approveStatus");
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


	$tdataprojectstatusapprove["approveStatus"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","approveReason");
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


	$tdataprojectstatusapprove["approveReason"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "approveReason";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","projectBudgetCost");
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


	$tdataprojectstatusapprove["projectBudgetCost"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","disbureAmounts");
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


	$tdataprojectstatusapprove["disbureAmounts"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","projectFile");
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


	$tdataprojectstatusapprove["projectFile"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","entryUserName");
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


	$tdataprojectstatusapprove["entryUserName"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectStatusApprove","entryTime");
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


	$tdataprojectstatusapprove["entryTime"] = $fdata;
		$tdataprojectstatusapprove[".searchableFields"][] = "entryTime";


$tables_data["projectStatusApprove"]=&$tdataprojectstatusapprove;
$field_labels["projectStatusApprove"] = &$fieldLabelsprojectstatusapprove;
$fieldToolTips["projectStatusApprove"] = &$fieldToolTipsprojectstatusapprove;
$placeHolders["projectStatusApprove"] = &$placeHoldersprojectstatusapprove;
$page_titles["projectStatusApprove"] = &$pageTitlesprojectstatusapprove;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["projectStatusApprove"] = array();
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


		
	$detailsTablesData["projectStatusApprove"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"][]="projectID";
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


		
	$detailsTablesData["projectStatusApprove"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"][]="projectID";
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


		
	$detailsTablesData["projectStatusApprove"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectStatusApprove"][$dIndex]["detailKeys"][]="projectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["projectStatusApprove"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectstatusapprove()
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
	"m_srcTableName" => "projectStatusApprove"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "projectStatusApprove";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "projectStatusApprove";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "projectStatusApprove";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "projectStatusApprove";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "projectStatusApprove";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "projectStatusApprove";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto18["m_sql"] = "project.DocumentCheckDate";
$proto18["m_srcTableName"] = "projectStatusApprove";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto20["m_sql"] = "project.DocumentCheckStatus";
$proto20["m_srcTableName"] = "projectStatusApprove";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto22["m_sql"] = "project.DocumentCheckReason";
$proto22["m_srcTableName"] = "projectStatusApprove";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "screenDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto24["m_sql"] = "project.screenDate";
$proto24["m_srcTableName"] = "projectStatusApprove";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "screenStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto26["m_sql"] = "project.screenStatus";
$proto26["m_srcTableName"] = "projectStatusApprove";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "screenReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto28["m_sql"] = "project.screenReason";
$proto28["m_srcTableName"] = "projectStatusApprove";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto30["m_sql"] = "project.approveDate";
$proto30["m_srcTableName"] = "projectStatusApprove";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto32["m_sql"] = "project.approveStatus";
$proto32["m_srcTableName"] = "projectStatusApprove";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto34["m_sql"] = "project.approveReason";
$proto34["m_srcTableName"] = "projectStatusApprove";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto36["m_sql"] = "project.projectBudgetCost";
$proto36["m_srcTableName"] = "projectStatusApprove";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)"
));

$proto38["m_sql"] = "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)";
$proto38["m_srcTableName"] = "projectStatusApprove";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto40["m_sql"] = "project.projectFile";
$proto40["m_srcTableName"] = "projectStatusApprove";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto42["m_sql"] = "project.entryUserName";
$proto42["m_srcTableName"] = "projectStatusApprove";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
));

$proto44["m_sql"] = "project.entryTime";
$proto44["m_srcTableName"] = "projectStatusApprove";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "project";
$proto47["m_srcTableName"] = "projectStatusApprove";
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
$proto46["m_srcTableName"] = "projectStatusApprove";
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
$proto51["m_srcTableName"] = "projectStatusApprove";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "projectID";
$proto51["m_columns"][] = "trackDisburseDate";
$proto51["m_columns"][] = "progressStep";
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
$proto50["m_srcTableName"] = "projectStatusApprove";
$proto52=array();
$proto52["m_sql"] = "project.id = taskDisburse.projectID";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectStatusApprove"
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
	"m_srcTableName" => "projectStatusApprove"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projectStatusApprove";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectstatusapprove = createSqlQuery_projectstatusapprove();


	
				;

																				

$tdataprojectstatusapprove[".sqlquery"] = $queryData_projectstatusapprove;



include_once(getabspath("include/projectstatusapprove_events.php"));
$tableEvents["projectStatusApprove"] = new eventclass_projectstatusapprove;
$tdataprojectstatusapprove[".hasEvents"] = true;

$query = &$queryData_projectstatusapprove;
$table = "projectStatusApprove";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>