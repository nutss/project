<?php
$tdataprojecttype2 = array();
$tdataprojecttype2[".searchableFields"] = array();
$tdataprojecttype2[".ShortName"] = "projecttype2";
$tdataprojecttype2[".OwnerID"] = "";
$tdataprojecttype2[".OriginalTable"] = "project";


$tdataprojecttype2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojecttype2[".originalPagesByType"] = $tdataprojecttype2[".pagesByType"];
$tdataprojecttype2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojecttype2[".originalPages"] = $tdataprojecttype2[".pages"];
$tdataprojecttype2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojecttype2[".originalDefaultPages"] = $tdataprojecttype2[".defaultPages"];

//	field labels
$fieldLabelsprojecttype2 = array();
$fieldToolTipsprojecttype2 = array();
$pageTitlesprojecttype2 = array();
$placeHoldersprojecttype2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojecttype2["English"] = array();
	$fieldToolTipsprojecttype2["English"] = array();
	$placeHoldersprojecttype2["English"] = array();
	$pageTitlesprojecttype2["English"] = array();
	$fieldLabelsprojecttype2["English"]["id"] = "ID";
	$fieldToolTipsprojecttype2["English"]["id"] = "";
	$placeHoldersprojecttype2["English"]["id"] = "";
	$fieldLabelsprojecttype2["English"]["projectName"] = "Project Name";
	$fieldToolTipsprojecttype2["English"]["projectName"] = "";
	$placeHoldersprojecttype2["English"]["projectName"] = "";
	$fieldLabelsprojecttype2["English"]["projectStart"] = "Project Start";
	$fieldToolTipsprojecttype2["English"]["projectStart"] = "";
	$placeHoldersprojecttype2["English"]["projectStart"] = "";
	$fieldLabelsprojecttype2["English"]["projectEnd"] = "Project End";
	$fieldToolTipsprojecttype2["English"]["projectEnd"] = "";
	$placeHoldersprojecttype2["English"]["projectEnd"] = "";
	$fieldLabelsprojecttype2["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipsprojecttype2["English"]["approveStatus"] = "";
	$placeHoldersprojecttype2["English"]["approveStatus"] = "";
	$fieldLabelsprojecttype2["English"]["approveDate"] = "Approve Date";
	$fieldToolTipsprojecttype2["English"]["approveDate"] = "";
	$placeHoldersprojecttype2["English"]["approveDate"] = "";
	$fieldLabelsprojecttype2["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipsprojecttype2["English"]["DocumentCheckStatus"] = "";
	$placeHoldersprojecttype2["English"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojecttype2["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipsprojecttype2["English"]["projectBudgetCost"] = "";
	$placeHoldersprojecttype2["English"]["projectBudgetCost"] = "";
	$fieldLabelsprojecttype2["English"]["projectFile"] = "Project File";
	$fieldToolTipsprojecttype2["English"]["projectFile"] = "";
	$placeHoldersprojecttype2["English"]["projectFile"] = "";
	$fieldLabelsprojecttype2["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojecttype2["English"]["entryUserName"] = "";
	$placeHoldersprojecttype2["English"]["entryUserName"] = "";
	$fieldLabelsprojecttype2["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojecttype2["English"]["entryTime"] = "";
	$placeHoldersprojecttype2["English"]["entryTime"] = "";
	$fieldLabelsprojecttype2["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipsprojecttype2["English"]["disbureAmounts"] = "";
	$placeHoldersprojecttype2["English"]["disbureAmounts"] = "";
	$fieldLabelsprojecttype2["English"]["screenDate"] = "Screen Date";
	$fieldToolTipsprojecttype2["English"]["screenDate"] = "";
	$placeHoldersprojecttype2["English"]["screenDate"] = "";
	$fieldLabelsprojecttype2["English"]["screenStatus"] = "Screen Status";
	$fieldToolTipsprojecttype2["English"]["screenStatus"] = "";
	$placeHoldersprojecttype2["English"]["screenStatus"] = "";
	$fieldLabelsprojecttype2["English"]["screenReason"] = "Screen Reason\"เหตุผลการกลั่นกรองคำขอทุนวิจัย,,,,";
	$fieldToolTipsprojecttype2["English"]["screenReason"] = "";
	$placeHoldersprojecttype2["English"]["screenReason"] = "";
	$fieldLabelsprojecttype2["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipsprojecttype2["English"]["approveReason"] = "";
	$placeHoldersprojecttype2["English"]["approveReason"] = "";
	$fieldLabelsprojecttype2["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipsprojecttype2["English"]["ProjectTypeName"] = "";
	$placeHoldersprojecttype2["English"]["ProjectTypeName"] = "";
	$fieldLabelsprojecttype2["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojecttype2["English"]["companyName"] = "";
	$placeHoldersprojecttype2["English"]["companyName"] = "";
	$fieldLabelsprojecttype2["English"]["DocumentCheckDate"] = "Document Check Date";
	$fieldToolTipsprojecttype2["English"]["DocumentCheckDate"] = "";
	$placeHoldersprojecttype2["English"]["DocumentCheckDate"] = "";
	$fieldLabelsprojecttype2["English"]["DocumentCheckReason"] = "Document Check Reason";
	$fieldToolTipsprojecttype2["English"]["DocumentCheckReason"] = "";
	$placeHoldersprojecttype2["English"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojecttype2["English"]))
		$tdataprojecttype2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojecttype2["Thai"] = array();
	$fieldToolTipsprojecttype2["Thai"] = array();
	$placeHoldersprojecttype2["Thai"] = array();
	$pageTitlesprojecttype2["Thai"] = array();
	$fieldLabelsprojecttype2["Thai"]["id"] = "ID";
	$fieldToolTipsprojecttype2["Thai"]["id"] = "";
	$placeHoldersprojecttype2["Thai"]["id"] = "";
	$fieldLabelsprojecttype2["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipsprojecttype2["Thai"]["projectName"] = "";
	$placeHoldersprojecttype2["Thai"]["projectName"] = "";
	$fieldLabelsprojecttype2["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipsprojecttype2["Thai"]["projectStart"] = "";
	$placeHoldersprojecttype2["Thai"]["projectStart"] = "";
	$fieldLabelsprojecttype2["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipsprojecttype2["Thai"]["projectEnd"] = "";
	$placeHoldersprojecttype2["Thai"]["projectEnd"] = "";
	$fieldLabelsprojecttype2["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["approveStatus"] = "";
	$placeHoldersprojecttype2["Thai"]["approveStatus"] = "";
	$fieldLabelsprojecttype2["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["approveDate"] = "";
	$placeHoldersprojecttype2["Thai"]["approveDate"] = "";
	$fieldLabelsprojecttype2["Thai"]["DocumentCheckStatus"] = "สถานะการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["DocumentCheckStatus"] = "";
	$placeHoldersprojecttype2["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelsprojecttype2["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["projectBudgetCost"] = "";
	$placeHoldersprojecttype2["Thai"]["projectBudgetCost"] = "";
	$fieldLabelsprojecttype2["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["projectFile"] = "";
	$placeHoldersprojecttype2["Thai"]["projectFile"] = "";
	$fieldLabelsprojecttype2["Thai"]["entryUserName"] = "ผู้ดูแลโครงการทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["entryUserName"] = "";
	$placeHoldersprojecttype2["Thai"]["entryUserName"] = "";
	$fieldLabelsprojecttype2["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojecttype2["Thai"]["entryTime"] = "";
	$placeHoldersprojecttype2["Thai"]["entryTime"] = "";
	$fieldLabelsprojecttype2["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipsprojecttype2["Thai"]["disbureAmounts"] = "";
	$placeHoldersprojecttype2["Thai"]["disbureAmounts"] = "";
	$fieldLabelsprojecttype2["Thai"]["screenDate"] = "วันที่การกลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["screenDate"] = "";
	$placeHoldersprojecttype2["Thai"]["screenDate"] = "";
	$fieldLabelsprojecttype2["Thai"]["screenStatus"] = "สถานะการกลั่นกรองคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["screenStatus"] = "";
	$placeHoldersprojecttype2["Thai"]["screenStatus"] = "";
	$fieldLabelsprojecttype2["Thai"]["screenReason"] = "เหตุผลการกลั่นกรอง";
	$fieldToolTipsprojecttype2["Thai"]["screenReason"] = "";
	$placeHoldersprojecttype2["Thai"]["screenReason"] = "";
	$fieldLabelsprojecttype2["Thai"]["approveReason"] = "เหตุผลการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["approveReason"] = "";
	$placeHoldersprojecttype2["Thai"]["approveReason"] = "";
	$fieldLabelsprojecttype2["Thai"]["ProjectTypeName"] = "ประเภททุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["ProjectTypeName"] = "";
	$placeHoldersprojecttype2["Thai"]["ProjectTypeName"] = "";
	$fieldLabelsprojecttype2["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["companyName"] = "";
	$placeHoldersprojecttype2["Thai"]["companyName"] = "";
	$fieldLabelsprojecttype2["Thai"]["DocumentCheckDate"] = "วันที่การตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["DocumentCheckDate"] = "";
	$placeHoldersprojecttype2["Thai"]["DocumentCheckDate"] = "";
	$fieldLabelsprojecttype2["Thai"]["DocumentCheckReason"] = "เหตุผลการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsprojecttype2["Thai"]["DocumentCheckReason"] = "";
	$placeHoldersprojecttype2["Thai"]["DocumentCheckReason"] = "";
	if (count($fieldToolTipsprojecttype2["Thai"]))
		$tdataprojecttype2[".isUseToolTips"] = true;
}


	$tdataprojecttype2[".NCSearch"] = true;



$tdataprojecttype2[".shortTableName"] = "projecttype2";
$tdataprojecttype2[".nSecOptions"] = 0;

$tdataprojecttype2[".mainTableOwnerID"] = "";
$tdataprojecttype2[".entityType"] = 1;
$tdataprojecttype2[".connId"] = "mc_at_192_168_1_111";


$tdataprojecttype2[".strOriginalTableName"] = "project";

	



$tdataprojecttype2[".showAddInPopup"] = false;

$tdataprojecttype2[".showEditInPopup"] = false;

$tdataprojecttype2[".showViewInPopup"] = false;

$tdataprojecttype2[".listAjax"] = false;
//	temporary
//$tdataprojecttype2[".listAjax"] = false;

	$tdataprojecttype2[".audit"] = false;

	$tdataprojecttype2[".locking"] = false;


$pages = $tdataprojecttype2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojecttype2[".edit"] = true;
	$tdataprojecttype2[".afterEditAction"] = 0;
	$tdataprojecttype2[".closePopupAfterEdit"] = 1;
	$tdataprojecttype2[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataprojecttype2[".add"] = true;
$tdataprojecttype2[".afterAddAction"] = 0;
$tdataprojecttype2[".closePopupAfterAdd"] = 1;
$tdataprojecttype2[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojecttype2[".list"] = true;
}



$tdataprojecttype2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojecttype2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojecttype2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojecttype2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojecttype2[".printFriendly"] = true;
}



$tdataprojecttype2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojecttype2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojecttype2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojecttype2[".isUseAjaxSuggest"] = true;

$tdataprojecttype2[".rowHighlite"] = true;





$tdataprojecttype2[".ajaxCodeSnippetAdded"] = false;

$tdataprojecttype2[".buttonsAdded"] = false;

$tdataprojecttype2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojecttype2[".isUseTimeForSearch"] = false;


$tdataprojecttype2[".badgeColor"] = "4169e1";


$tdataprojecttype2[".allSearchFields"] = array();
$tdataprojecttype2[".filterFields"] = array();
$tdataprojecttype2[".requiredSearchFields"] = array();

$tdataprojecttype2[".googleLikeFields"] = array();
$tdataprojecttype2[".googleLikeFields"][] = "projectName";
$tdataprojecttype2[".googleLikeFields"][] = "projectStart";
$tdataprojecttype2[".googleLikeFields"][] = "projectEnd";
$tdataprojecttype2[".googleLikeFields"][] = "ProjectTypeName";
$tdataprojecttype2[".googleLikeFields"][] = "companyName";
$tdataprojecttype2[".googleLikeFields"][] = "DocumentCheckDate";
$tdataprojecttype2[".googleLikeFields"][] = "DocumentCheckStatus";
$tdataprojecttype2[".googleLikeFields"][] = "DocumentCheckReason";
$tdataprojecttype2[".googleLikeFields"][] = "screenDate";
$tdataprojecttype2[".googleLikeFields"][] = "screenStatus";
$tdataprojecttype2[".googleLikeFields"][] = "screenReason";
$tdataprojecttype2[".googleLikeFields"][] = "approveDate";
$tdataprojecttype2[".googleLikeFields"][] = "approveStatus";
$tdataprojecttype2[".googleLikeFields"][] = "approveReason";
$tdataprojecttype2[".googleLikeFields"][] = "projectBudgetCost";
$tdataprojecttype2[".googleLikeFields"][] = "projectFile";
$tdataprojecttype2[".googleLikeFields"][] = "entryUserName";
$tdataprojecttype2[".googleLikeFields"][] = "entryTime";



$tdataprojecttype2[".tableType"] = "list";

$tdataprojecttype2[".printerPageOrientation"] = 0;
$tdataprojecttype2[".nPrinterPageScale"] = 100;

$tdataprojecttype2[".nPrinterSplitRecords"] = 40;

$tdataprojecttype2[".geocodingEnabled"] = false;










$tdataprojecttype2[".pageSize"] = 20;

$tdataprojecttype2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojecttype2[".strOrderBy"] = $tstrOrderBy;

$tdataprojecttype2[".orderindexes"] = array();


$tdataprojecttype2[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.DocumentCheckDate,  project.DocumentCheckStatus,  project.DocumentCheckReason,  project.screenDate,  project.screenStatus,  project.screenReason,  project.approveDate,  project.approveStatus,  project.approveReason,  project.projectBudgetCost,  project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$tdataprojecttype2[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdataprojecttype2[".sqlWhereExpr"] = "(project.ProjectTypeName = 'ทุน อุตสาหกรรมป้องกันประเทศ')";
$tdataprojecttype2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojecttype2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojecttype2[".arrGroupsPerPage"] = $arrGPP;

$tdataprojecttype2[".highlightSearchResults"] = true;

$tableKeysprojecttype2 = array();
$tableKeysprojecttype2[] = "id";
$tdataprojecttype2[".Keys"] = $tableKeysprojecttype2;


$tdataprojecttype2[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","id");
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


	$tdataprojecttype2["id"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","projectName");
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


	$tdataprojecttype2["projectName"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","projectStart");
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


	$tdataprojecttype2["projectStart"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","projectEnd");
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


	$tdataprojecttype2["projectEnd"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","ProjectTypeName");
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


	$tdataprojecttype2["ProjectTypeName"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","companyName");
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


	$tdataprojecttype2["companyName"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "companyName";
//	DocumentCheckDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DocumentCheckDate";
	$fdata["GoodName"] = "DocumentCheckDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","DocumentCheckDate");
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


	$tdataprojecttype2["DocumentCheckDate"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "DocumentCheckDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","DocumentCheckStatus");
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


	$tdataprojecttype2["DocumentCheckStatus"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "DocumentCheckStatus";
//	DocumentCheckReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckReason";
	$fdata["GoodName"] = "DocumentCheckReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","DocumentCheckReason");
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


	$tdataprojecttype2["DocumentCheckReason"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "DocumentCheckReason";
//	screenDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "screenDate";
	$fdata["GoodName"] = "screenDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","screenDate");
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


	$tdataprojecttype2["screenDate"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "screenDate";
//	screenStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "screenStatus";
	$fdata["GoodName"] = "screenStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","screenStatus");
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


	$tdataprojecttype2["screenStatus"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "screenStatus";
//	screenReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "screenReason";
	$fdata["GoodName"] = "screenReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","screenReason");
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


	$tdataprojecttype2["screenReason"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "screenReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","approveDate");
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


	$tdataprojecttype2["approveDate"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","approveStatus");
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
	$edata["LookupValues"][] = "รออนุมัติ";
	$edata["LookupValues"][] = "อนุมัติ";
	$edata["LookupValues"][] = "ไม่อนุมัติ";

	
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


	$tdataprojecttype2["approveStatus"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","approveReason");
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


	$tdataprojecttype2["approveReason"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "approveReason";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","projectBudgetCost");
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


	$tdataprojecttype2["projectBudgetCost"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("projectType2","disbureAmounts");
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


	$tdataprojecttype2["disbureAmounts"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","projectFile");
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


	$tdataprojecttype2["projectFile"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","entryUserName");
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


	$tdataprojecttype2["entryUserName"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectType2","entryTime");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprojecttype2["entryTime"] = $fdata;
		$tdataprojecttype2[".searchableFields"][] = "entryTime";


$tables_data["projectType2"]=&$tdataprojecttype2;
$field_labels["projectType2"] = &$fieldLabelsprojecttype2;
$fieldToolTips["projectType2"] = &$fieldToolTipsprojecttype2;
$placeHolders["projectType2"] = &$placeHoldersprojecttype2;
$page_titles["projectType2"] = &$pageTitlesprojecttype2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["projectType2"] = array();
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


		
	$detailsTablesData["projectType2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectType2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectType2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["detailKeys"][]="projectID";
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


		
	$detailsTablesData["projectType2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectType2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectType2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["detailKeys"][]="projectID";
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


		
	$detailsTablesData["projectType2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projectType2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["projectType2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projectType2"][$dIndex]["detailKeys"][]="projectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["projectType2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projecttype2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.DocumentCheckDate,  project.DocumentCheckStatus,  project.DocumentCheckReason,  project.screenDate,  project.screenStatus,  project.screenReason,  project.approveDate,  project.approveStatus,  project.approveReason,  project.projectBudgetCost,  project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0) AS disbureAmounts,  project.projectFile,  project.entryUserName,  project.entryTime";
$proto0["m_strFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto0["m_strWhere"] = "(project.ProjectTypeName = 'ทุน อุตสาหกรรมป้องกันประเทศ')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "project.ProjectTypeName = 'ทุน อุตสาหกรรมป้องกันประเทศ'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'ทุน อุตสาหกรรมป้องกันประเทศ'";
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
	"m_srcTableName" => "projectType2"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "projectType2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "projectType2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "projectType2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "projectType2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "projectType2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "projectType2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto18["m_sql"] = "project.DocumentCheckDate";
$proto18["m_srcTableName"] = "projectType2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto20["m_sql"] = "project.DocumentCheckStatus";
$proto20["m_srcTableName"] = "projectType2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto22["m_sql"] = "project.DocumentCheckReason";
$proto22["m_srcTableName"] = "projectType2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "screenDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto24["m_sql"] = "project.screenDate";
$proto24["m_srcTableName"] = "projectType2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "screenStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto26["m_sql"] = "project.screenStatus";
$proto26["m_srcTableName"] = "projectType2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "screenReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto28["m_sql"] = "project.screenReason";
$proto28["m_srcTableName"] = "projectType2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto30["m_sql"] = "project.approveDate";
$proto30["m_srcTableName"] = "projectType2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto32["m_sql"] = "project.approveStatus";
$proto32["m_srcTableName"] = "projectType2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto34["m_sql"] = "project.approveReason";
$proto34["m_srcTableName"] = "projectType2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto36["m_sql"] = "project.projectBudgetCost";
$proto36["m_srcTableName"] = "projectType2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)"
));

$proto38["m_sql"] = "project.projectBudgetCost - IFNULL(SUM(taskDisburse.disburseAmount),0)";
$proto38["m_srcTableName"] = "projectType2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto40["m_sql"] = "project.projectFile";
$proto40["m_srcTableName"] = "projectType2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto42["m_sql"] = "project.entryUserName";
$proto42["m_srcTableName"] = "projectType2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
));

$proto44["m_sql"] = "project.entryTime";
$proto44["m_srcTableName"] = "projectType2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "project";
$proto47["m_srcTableName"] = "projectType2";
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
$proto46["m_srcTableName"] = "projectType2";
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
$proto51["m_srcTableName"] = "projectType2";
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
$proto50["m_srcTableName"] = "projectType2";
$proto52=array();
$proto52["m_sql"] = "project.id = taskDisburse.projectID";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectType2"
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
	"m_srcTableName" => "projectType2"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projectType2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projecttype2 = createSqlQuery_projecttype2();


	
				;

																				

$tdataprojecttype2[".sqlquery"] = $queryData_projecttype2;



include_once(getabspath("include/projecttype2_events.php"));
$tableEvents["projectType2"] = new eventclass_projecttype2;
$tdataprojecttype2[".hasEvents"] = true;

$query = &$queryData_projecttype2;
$table = "projectType2";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>