<?php
$tdataassignproject = array();
$tdataassignproject[".searchableFields"] = array();
$tdataassignproject[".ShortName"] = "assignproject";
$tdataassignproject[".OwnerID"] = "";
$tdataassignproject[".OriginalTable"] = "project";


$tdataassignproject[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdataassignproject[".originalPagesByType"] = $tdataassignproject[".pagesByType"];
$tdataassignproject[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdataassignproject[".originalPages"] = $tdataassignproject[".pages"];
$tdataassignproject[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdataassignproject[".originalDefaultPages"] = $tdataassignproject[".defaultPages"];

//	field labels
$fieldLabelsassignproject = array();
$fieldToolTipsassignproject = array();
$pageTitlesassignproject = array();
$placeHoldersassignproject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsassignproject["English"] = array();
	$fieldToolTipsassignproject["English"] = array();
	$placeHoldersassignproject["English"] = array();
	$pageTitlesassignproject["English"] = array();
	$fieldLabelsassignproject["English"]["id"] = "ID";
	$fieldToolTipsassignproject["English"]["id"] = "";
	$placeHoldersassignproject["English"]["id"] = "";
	$fieldLabelsassignproject["English"]["projectName"] = "Project Name";
	$fieldToolTipsassignproject["English"]["projectName"] = "";
	$placeHoldersassignproject["English"]["projectName"] = "";
	$fieldLabelsassignproject["English"]["projectStart"] = "Project Start";
	$fieldToolTipsassignproject["English"]["projectStart"] = "";
	$placeHoldersassignproject["English"]["projectStart"] = "";
	$fieldLabelsassignproject["English"]["projectEnd"] = "Project End";
	$fieldToolTipsassignproject["English"]["projectEnd"] = "";
	$placeHoldersassignproject["English"]["projectEnd"] = "";
	$fieldLabelsassignproject["English"]["researchFundingType"] = "Research Funding Type";
	$fieldToolTipsassignproject["English"]["researchFundingType"] = "";
	$placeHoldersassignproject["English"]["researchFundingType"] = "";
	$fieldLabelsassignproject["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipsassignproject["English"]["approveStatus"] = "";
	$placeHoldersassignproject["English"]["approveStatus"] = "";
	$fieldLabelsassignproject["English"]["approveDate"] = "Approve Date";
	$fieldToolTipsassignproject["English"]["approveDate"] = "";
	$placeHoldersassignproject["English"]["approveDate"] = "";
	$fieldLabelsassignproject["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipsassignproject["English"]["DocumentCheckStatus"] = "";
	$placeHoldersassignproject["English"]["DocumentCheckStatus"] = "";
	$fieldLabelsassignproject["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipsassignproject["English"]["projectBudgetCost"] = "";
	$placeHoldersassignproject["English"]["projectBudgetCost"] = "";
	$fieldLabelsassignproject["English"]["projectFile"] = "Project File";
	$fieldToolTipsassignproject["English"]["projectFile"] = "";
	$placeHoldersassignproject["English"]["projectFile"] = "";
	$fieldLabelsassignproject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsassignproject["English"]["entryUserName"] = "";
	$placeHoldersassignproject["English"]["entryUserName"] = "";
	$fieldLabelsassignproject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsassignproject["English"]["entryTime"] = "";
	$placeHoldersassignproject["English"]["entryTime"] = "";
	$fieldLabelsassignproject["English"]["contactName"] = "Contact Name";
	$fieldToolTipsassignproject["English"]["contactName"] = "";
	$placeHoldersassignproject["English"]["contactName"] = "";
	$fieldLabelsassignproject["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipsassignproject["English"]["disbureAmounts"] = "";
	$placeHoldersassignproject["English"]["disbureAmounts"] = "";
	if (count($fieldToolTipsassignproject["English"]))
		$tdataassignproject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsassignproject["Thai"] = array();
	$fieldToolTipsassignproject["Thai"] = array();
	$placeHoldersassignproject["Thai"] = array();
	$pageTitlesassignproject["Thai"] = array();
	$fieldLabelsassignproject["Thai"]["id"] = "ID";
	$fieldToolTipsassignproject["Thai"]["id"] = "";
	$placeHoldersassignproject["Thai"]["id"] = "";
	$fieldLabelsassignproject["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipsassignproject["Thai"]["projectName"] = "";
	$placeHoldersassignproject["Thai"]["projectName"] = "";
	$fieldLabelsassignproject["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipsassignproject["Thai"]["projectStart"] = "";
	$placeHoldersassignproject["Thai"]["projectStart"] = "";
	$fieldLabelsassignproject["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipsassignproject["Thai"]["projectEnd"] = "";
	$placeHoldersassignproject["Thai"]["projectEnd"] = "";
	$fieldLabelsassignproject["Thai"]["researchFundingType"] = "ประเภททุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["researchFundingType"] = "";
	$placeHoldersassignproject["Thai"]["researchFundingType"] = "";
	$fieldLabelsassignproject["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["approveStatus"] = "";
	$placeHoldersassignproject["Thai"]["approveStatus"] = "";
	$fieldLabelsassignproject["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["approveDate"] = "";
	$placeHoldersassignproject["Thai"]["approveDate"] = "";
	$fieldLabelsassignproject["Thai"]["DocumentCheckStatus"] = "สถานะการตรวจเอกสารคำขอทุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["DocumentCheckStatus"] = "";
	$placeHoldersassignproject["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelsassignproject["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["projectBudgetCost"] = "";
	$placeHoldersassignproject["Thai"]["projectBudgetCost"] = "";
	$fieldLabelsassignproject["Thai"]["projectFile"] = "ไฟล์โครงการทุนวิจัย";
	$fieldToolTipsassignproject["Thai"]["projectFile"] = "";
	$placeHoldersassignproject["Thai"]["projectFile"] = "";
	$fieldLabelsassignproject["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipsassignproject["Thai"]["entryUserName"] = "";
	$placeHoldersassignproject["Thai"]["entryUserName"] = "";
	$fieldLabelsassignproject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsassignproject["Thai"]["entryTime"] = "";
	$placeHoldersassignproject["Thai"]["entryTime"] = "";
	$fieldLabelsassignproject["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipsassignproject["Thai"]["contactName"] = "";
	$placeHoldersassignproject["Thai"]["contactName"] = "";
	$fieldLabelsassignproject["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipsassignproject["Thai"]["disbureAmounts"] = "";
	$placeHoldersassignproject["Thai"]["disbureAmounts"] = "";
	if (count($fieldToolTipsassignproject["Thai"]))
		$tdataassignproject[".isUseToolTips"] = true;
}


	$tdataassignproject[".NCSearch"] = true;



$tdataassignproject[".shortTableName"] = "assignproject";
$tdataassignproject[".nSecOptions"] = 0;

$tdataassignproject[".mainTableOwnerID"] = "";
$tdataassignproject[".entityType"] = 1;
$tdataassignproject[".connId"] = "mc_at_192_168_1_111";


$tdataassignproject[".strOriginalTableName"] = "project";

	



$tdataassignproject[".showAddInPopup"] = false;

$tdataassignproject[".showEditInPopup"] = false;

$tdataassignproject[".showViewInPopup"] = false;

$tdataassignproject[".listAjax"] = false;
//	temporary
//$tdataassignproject[".listAjax"] = false;

	$tdataassignproject[".audit"] = false;

	$tdataassignproject[".locking"] = false;


$pages = $tdataassignproject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataassignproject[".edit"] = true;
	$tdataassignproject[".afterEditAction"] = 0;
	$tdataassignproject[".closePopupAfterEdit"] = 1;
	$tdataassignproject[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataassignproject[".add"] = true;
$tdataassignproject[".afterAddAction"] = 0;
$tdataassignproject[".closePopupAfterAdd"] = 1;
$tdataassignproject[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataassignproject[".list"] = true;
}



$tdataassignproject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataassignproject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataassignproject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataassignproject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataassignproject[".printFriendly"] = true;
}



$tdataassignproject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataassignproject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataassignproject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataassignproject[".isUseAjaxSuggest"] = true;

$tdataassignproject[".rowHighlite"] = true;





$tdataassignproject[".ajaxCodeSnippetAdded"] = false;

$tdataassignproject[".buttonsAdded"] = false;

$tdataassignproject[".addPageEvents"] = true;

// use timepicker for search panel
$tdataassignproject[".isUseTimeForSearch"] = false;


$tdataassignproject[".badgeColor"] = "778899";


$tdataassignproject[".allSearchFields"] = array();
$tdataassignproject[".filterFields"] = array();
$tdataassignproject[".requiredSearchFields"] = array();

$tdataassignproject[".googleLikeFields"] = array();
$tdataassignproject[".googleLikeFields"][] = "id";
$tdataassignproject[".googleLikeFields"][] = "projectName";
$tdataassignproject[".googleLikeFields"][] = "projectStart";
$tdataassignproject[".googleLikeFields"][] = "projectEnd";
$tdataassignproject[".googleLikeFields"][] = "researchFundingType";
$tdataassignproject[".googleLikeFields"][] = "contactName";
$tdataassignproject[".googleLikeFields"][] = "approveStatus";
$tdataassignproject[".googleLikeFields"][] = "approveDate";
$tdataassignproject[".googleLikeFields"][] = "DocumentCheckStatus";
$tdataassignproject[".googleLikeFields"][] = "projectBudgetCost";
$tdataassignproject[".googleLikeFields"][] = "disbureAmounts";
$tdataassignproject[".googleLikeFields"][] = "projectFile";
$tdataassignproject[".googleLikeFields"][] = "entryUserName";
$tdataassignproject[".googleLikeFields"][] = "entryTime";



$tdataassignproject[".tableType"] = "list";

$tdataassignproject[".printerPageOrientation"] = 0;
$tdataassignproject[".nPrinterPageScale"] = 100;

$tdataassignproject[".nPrinterSplitRecords"] = 40;

$tdataassignproject[".geocodingEnabled"] = false;










$tdataassignproject[".pageSize"] = 20;

$tdataassignproject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataassignproject[".strOrderBy"] = $tstrOrderBy;

$tdataassignproject[".orderindexes"] = array();


$tdataassignproject[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.researchFundingType,  project.contactName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) As 'disbureAmounts',  project.projectFile,  project.entryUserName,  project.entryTime";
$tdataassignproject[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdataassignproject[".sqlWhereExpr"] = "";
$tdataassignproject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataassignproject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataassignproject[".arrGroupsPerPage"] = $arrGPP;

$tdataassignproject[".highlightSearchResults"] = true;

$tableKeysassignproject = array();
$tableKeysassignproject[] = "id";
$tdataassignproject[".Keys"] = $tableKeysassignproject;


$tdataassignproject[".hideMobileList"] = array();
		$tdataassignproject[".hideMobileList"][1] = array();
$tdataassignproject[".hideMobileList"][1]["id"] = true;
		$tdataassignproject[".hideMobileList"][5] = array();
$tdataassignproject[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","id");
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


	$tdataassignproject["id"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","projectName");
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


	$tdataassignproject["projectName"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","projectStart");
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


	$tdataassignproject["projectStart"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","projectEnd");
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


	$tdataassignproject["projectEnd"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "projectEnd";
//	researchFundingType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchFundingType";
	$fdata["GoodName"] = "researchFundingType";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","researchFundingType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchFundingType";

		$fdata["sourceSingle"] = "researchFundingType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.researchFundingType";

	
	
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


	$tdataassignproject["researchFundingType"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "researchFundingType";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.contactName";

	
	
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
	$edata["LookupTable"] = "ProjectContact";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contactName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contactName";

	

	
	$edata["LookupOrderBy"] = "contactName";

	
	
	
	

	
	
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


	$tdataassignproject["contactName"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "contactName";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","approveStatus");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataassignproject["approveStatus"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","approveDate");
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


	$tdataassignproject["approveDate"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "approveDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","DocumentCheckStatus");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataassignproject["DocumentCheckStatus"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "DocumentCheckStatus";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","projectBudgetCost");
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


	$tdataassignproject["projectBudgetCost"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AssignProject","disbureAmounts");
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


	$tdataassignproject["disbureAmounts"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "disbureAmounts";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","projectFile");
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


	$tdataassignproject["projectFile"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","entryUserName");
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


	$tdataassignproject["entryUserName"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("AssignProject","entryTime");
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


	$tdataassignproject["entryTime"] = $fdata;
		$tdataassignproject[".searchableFields"][] = "entryTime";


$tables_data["AssignProject"]=&$tdataassignproject;
$field_labels["AssignProject"] = &$fieldLabelsassignproject;
$fieldToolTips["AssignProject"] = &$fieldToolTipsassignproject;
$placeHolders["AssignProject"] = &$placeHoldersassignproject;
$page_titles["AssignProject"] = &$pageTitlesassignproject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AssignProject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AssignProject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_assignproject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.researchFundingType,  project.contactName,  project.approveStatus,  project.approveDate,  project.DocumentCheckStatus,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) As 'disbureAmounts',  project.projectFile,  project.entryUserName,  project.entryTime";
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
	"m_srcTableName" => "AssignProject"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "AssignProject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "AssignProject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "AssignProject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "AssignProject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchFundingType",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto14["m_sql"] = "project.researchFundingType";
$proto14["m_srcTableName"] = "AssignProject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto16["m_sql"] = "project.contactName";
$proto16["m_srcTableName"] = "AssignProject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto18["m_sql"] = "project.approveStatus";
$proto18["m_srcTableName"] = "AssignProject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto20["m_sql"] = "project.approveDate";
$proto20["m_srcTableName"] = "AssignProject";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto22["m_sql"] = "project.DocumentCheckStatus";
$proto22["m_srcTableName"] = "AssignProject";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto24["m_sql"] = "project.projectBudgetCost";
$proto24["m_srcTableName"] = "AssignProject";
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
	"m_srcTableName" => "AssignProject"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SUM(taskDisburse.disburseAmount)";
$proto26["m_srcTableName"] = "AssignProject";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto29["m_sql"] = "project.projectFile";
$proto29["m_srcTableName"] = "AssignProject";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto31["m_sql"] = "project.entryUserName";
$proto31["m_srcTableName"] = "AssignProject";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
));

$proto33["m_sql"] = "project.entryTime";
$proto33["m_srcTableName"] = "AssignProject";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "project";
$proto36["m_srcTableName"] = "AssignProject";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "projectName";
$proto36["m_columns"][] = "projectStart";
$proto36["m_columns"][] = "projectEnd";
$proto36["m_columns"][] = "researchFundingType";
$proto36["m_columns"][] = "contactName";
$proto36["m_columns"][] = "DocumentCheckStatus";
$proto36["m_columns"][] = "projectBudgetCost";
$proto36["m_columns"][] = "projectFile";
$proto36["m_columns"][] = "screenDate";
$proto36["m_columns"][] = "screenStatus";
$proto36["m_columns"][] = "screenReason";
$proto36["m_columns"][] = "approveDate";
$proto36["m_columns"][] = "approveStatus";
$proto36["m_columns"][] = "approveReason";
$proto36["m_columns"][] = "entryTime";
$proto36["m_columns"][] = "entryUserName";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "project";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "AssignProject";
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
$proto40["m_srcTableName"] = "AssignProject";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "id";
$proto40["m_columns"][] = "projectID";
$proto40["m_columns"][] = "trackDisburseDate";
$proto40["m_columns"][] = "progressStep";
$proto40["m_columns"][] = "disburseStatus";
$proto40["m_columns"][] = "disburseDesc";
$proto40["m_columns"][] = "disburseAmount";
$proto40["m_columns"][] = "disburseAttFille";
$proto40["m_columns"][] = "approveStatus";
$proto40["m_columns"][] = "approveDate";
$proto40["m_columns"][] = "entryUserName";
$proto40["m_columns"][] = "entryTime";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "AssignProject";
$proto41=array();
$proto41["m_sql"] = "project.id = taskDisburse.projectID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "AssignProject"
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
	"m_srcTableName" => "AssignProject"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AssignProject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_assignproject = createSqlQuery_assignproject();


	
				;

														

$tdataassignproject[".sqlquery"] = $queryData_assignproject;



include_once(getabspath("include/assignproject_events.php"));
$tableEvents["AssignProject"] = new eventclass_assignproject;
$tdataassignproject[".hasEvents"] = true;

$query = &$queryData_assignproject;
$table = "AssignProject";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>