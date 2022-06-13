<?php
$tdataprojectassign = array();
$tdataprojectassign[".searchableFields"] = array();
$tdataprojectassign[".ShortName"] = "projectassign";
$tdataprojectassign[".OwnerID"] = "";
$tdataprojectassign[".OriginalTable"] = "project";


$tdataprojectassign[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdataprojectassign[".originalPagesByType"] = $tdataprojectassign[".pagesByType"];
$tdataprojectassign[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdataprojectassign[".originalPages"] = $tdataprojectassign[".pages"];
$tdataprojectassign[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdataprojectassign[".originalDefaultPages"] = $tdataprojectassign[".defaultPages"];

//	field labels
$fieldLabelsprojectassign = array();
$fieldToolTipsprojectassign = array();
$pageTitlesprojectassign = array();
$placeHoldersprojectassign = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectassign["English"] = array();
	$fieldToolTipsprojectassign["English"] = array();
	$placeHoldersprojectassign["English"] = array();
	$pageTitlesprojectassign["English"] = array();
	$fieldLabelsprojectassign["English"]["id"] = "ID";
	$fieldToolTipsprojectassign["English"]["id"] = "";
	$placeHoldersprojectassign["English"]["id"] = "";
	$fieldLabelsprojectassign["English"]["projectName"] = "Project Name";
	$fieldToolTipsprojectassign["English"]["projectName"] = "";
	$placeHoldersprojectassign["English"]["projectName"] = "";
	$fieldLabelsprojectassign["English"]["projectStart"] = "Project Start";
	$fieldToolTipsprojectassign["English"]["projectStart"] = "";
	$placeHoldersprojectassign["English"]["projectStart"] = "";
	$fieldLabelsprojectassign["English"]["projectEnd"] = "Project End";
	$fieldToolTipsprojectassign["English"]["projectEnd"] = "";
	$placeHoldersprojectassign["English"]["projectEnd"] = "";
	$fieldLabelsprojectassign["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipsprojectassign["English"]["projectBudgetCost"] = "";
	$placeHoldersprojectassign["English"]["projectBudgetCost"] = "";
	$fieldLabelsprojectassign["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectassign["English"]["entryUserName"] = "";
	$placeHoldersprojectassign["English"]["entryUserName"] = "";
	$fieldLabelsprojectassign["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectassign["English"]["entryTime"] = "";
	$placeHoldersprojectassign["English"]["entryTime"] = "";
	$fieldLabelsprojectassign["English"]["disbureAmounts"] = "Disbure Amounts";
	$fieldToolTipsprojectassign["English"]["disbureAmounts"] = "";
	$placeHoldersprojectassign["English"]["disbureAmounts"] = "";
	$fieldLabelsprojectassign["English"]["ProjectTypeName"] = "Project Type Name";
	$fieldToolTipsprojectassign["English"]["ProjectTypeName"] = "";
	$placeHoldersprojectassign["English"]["ProjectTypeName"] = "";
	$fieldLabelsprojectassign["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojectassign["English"]["companyName"] = "";
	$placeHoldersprojectassign["English"]["companyName"] = "";
	if (count($fieldToolTipsprojectassign["English"]))
		$tdataprojectassign[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectassign["Thai"] = array();
	$fieldToolTipsprojectassign["Thai"] = array();
	$placeHoldersprojectassign["Thai"] = array();
	$pageTitlesprojectassign["Thai"] = array();
	$fieldLabelsprojectassign["Thai"]["id"] = "ID";
	$fieldToolTipsprojectassign["Thai"]["id"] = "";
	$placeHoldersprojectassign["Thai"]["id"] = "";
	$fieldLabelsprojectassign["Thai"]["projectName"] = "ชื่อโครงการทุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["projectName"] = "";
	$placeHoldersprojectassign["Thai"]["projectName"] = "";
	$fieldLabelsprojectassign["Thai"]["projectStart"] = "วันเริ่มโครงการทุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["projectStart"] = "";
	$placeHoldersprojectassign["Thai"]["projectStart"] = "";
	$fieldLabelsprojectassign["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการทุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["projectEnd"] = "";
	$placeHoldersprojectassign["Thai"]["projectEnd"] = "";
	$fieldLabelsprojectassign["Thai"]["projectBudgetCost"] = "มูลค่าโครงการทุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["projectBudgetCost"] = "";
	$placeHoldersprojectassign["Thai"]["projectBudgetCost"] = "";
	$fieldLabelsprojectassign["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipsprojectassign["Thai"]["entryUserName"] = "";
	$placeHoldersprojectassign["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectassign["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectassign["Thai"]["entryTime"] = "";
	$placeHoldersprojectassign["Thai"]["entryTime"] = "";
	$fieldLabelsprojectassign["Thai"]["disbureAmounts"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipsprojectassign["Thai"]["disbureAmounts"] = "";
	$placeHoldersprojectassign["Thai"]["disbureAmounts"] = "";
	$fieldLabelsprojectassign["Thai"]["ProjectTypeName"] = "ประเภททุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["ProjectTypeName"] = "";
	$placeHoldersprojectassign["Thai"]["ProjectTypeName"] = "";
	$fieldLabelsprojectassign["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojectassign["Thai"]["companyName"] = "";
	$placeHoldersprojectassign["Thai"]["companyName"] = "";
	if (count($fieldToolTipsprojectassign["Thai"]))
		$tdataprojectassign[".isUseToolTips"] = true;
}


	$tdataprojectassign[".NCSearch"] = true;



$tdataprojectassign[".shortTableName"] = "projectassign";
$tdataprojectassign[".nSecOptions"] = 0;

$tdataprojectassign[".mainTableOwnerID"] = "";
$tdataprojectassign[".entityType"] = 1;
$tdataprojectassign[".connId"] = "mc_at_192_168_1_111";


$tdataprojectassign[".strOriginalTableName"] = "project";

	



$tdataprojectassign[".showAddInPopup"] = false;

$tdataprojectassign[".showEditInPopup"] = false;

$tdataprojectassign[".showViewInPopup"] = false;

$tdataprojectassign[".listAjax"] = false;
//	temporary
//$tdataprojectassign[".listAjax"] = false;

	$tdataprojectassign[".audit"] = false;

	$tdataprojectassign[".locking"] = false;


$pages = $tdataprojectassign[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectassign[".edit"] = true;
	$tdataprojectassign[".afterEditAction"] = 0;
	$tdataprojectassign[".closePopupAfterEdit"] = 1;
	$tdataprojectassign[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectassign[".add"] = true;
$tdataprojectassign[".afterAddAction"] = 0;
$tdataprojectassign[".closePopupAfterAdd"] = 1;
$tdataprojectassign[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectassign[".list"] = true;
}



$tdataprojectassign[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectassign[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectassign[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectassign[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectassign[".printFriendly"] = true;
}



$tdataprojectassign[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectassign[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectassign[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectassign[".isUseAjaxSuggest"] = true;

$tdataprojectassign[".rowHighlite"] = true;





$tdataprojectassign[".ajaxCodeSnippetAdded"] = false;

$tdataprojectassign[".buttonsAdded"] = false;

$tdataprojectassign[".addPageEvents"] = true;

// use timepicker for search panel
$tdataprojectassign[".isUseTimeForSearch"] = false;


$tdataprojectassign[".badgeColor"] = "778899";


$tdataprojectassign[".allSearchFields"] = array();
$tdataprojectassign[".filterFields"] = array();
$tdataprojectassign[".requiredSearchFields"] = array();

$tdataprojectassign[".googleLikeFields"] = array();
$tdataprojectassign[".googleLikeFields"][] = "id";
$tdataprojectassign[".googleLikeFields"][] = "projectName";
$tdataprojectassign[".googleLikeFields"][] = "projectStart";
$tdataprojectassign[".googleLikeFields"][] = "projectEnd";
$tdataprojectassign[".googleLikeFields"][] = "ProjectTypeName";
$tdataprojectassign[".googleLikeFields"][] = "companyName";
$tdataprojectassign[".googleLikeFields"][] = "projectBudgetCost";
$tdataprojectassign[".googleLikeFields"][] = "disbureAmounts";
$tdataprojectassign[".googleLikeFields"][] = "entryUserName";
$tdataprojectassign[".googleLikeFields"][] = "entryTime";



$tdataprojectassign[".tableType"] = "list";

$tdataprojectassign[".printerPageOrientation"] = 0;
$tdataprojectassign[".nPrinterPageScale"] = 100;

$tdataprojectassign[".nPrinterSplitRecords"] = 40;

$tdataprojectassign[".geocodingEnabled"] = false;










$tdataprojectassign[".pageSize"] = 20;

$tdataprojectassign[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectassign[".strOrderBy"] = $tstrOrderBy;

$tdataprojectassign[".orderindexes"] = array();


$tdataprojectassign[".sqlHead"] = "SELECT project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) AS disbureAmounts,  project.entryUserName,  project.entryTime";
$tdataprojectassign[".sqlFrom"] = "FROM project  LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$tdataprojectassign[".sqlWhereExpr"] = "";
$tdataprojectassign[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataprojectassign[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectassign[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectassign[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectassign[".highlightSearchResults"] = true;

$tableKeysprojectassign = array();
$tableKeysprojectassign[] = "id";
$tdataprojectassign[".Keys"] = $tableKeysprojectassign;


$tdataprojectassign[".hideMobileList"] = array();
		$tdataprojectassign[".hideMobileList"][1] = array();
$tdataprojectassign[".hideMobileList"][1]["id"] = true;
		$tdataprojectassign[".hideMobileList"][5] = array();
$tdataprojectassign[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","id");
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


	$tdataprojectassign["id"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","projectName");
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


	$tdataprojectassign["projectName"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","projectStart");
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


	$tdataprojectassign["projectStart"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","projectEnd");
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


	$tdataprojectassign["projectEnd"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "projectEnd";
//	ProjectTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProjectTypeName";
	$fdata["GoodName"] = "ProjectTypeName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","ProjectTypeName");
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ProjectStep";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stepName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stepName";

	

	
	$edata["LookupOrderBy"] = "stepNumber";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprojectassign["ProjectTypeName"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "ProjectTypeName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","companyName");
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


	$tdataprojectassign["companyName"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "companyName";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","projectBudgetCost");
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


	$tdataprojectassign["projectBudgetCost"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "projectBudgetCost";
//	disbureAmounts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "disbureAmounts";
	$fdata["GoodName"] = "disbureAmounts";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("projectAssign","disbureAmounts");
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


	$tdataprojectassign["disbureAmounts"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "disbureAmounts";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","entryUserName");
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


	$tdataprojectassign["entryUserName"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("projectAssign","entryTime");
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


	$tdataprojectassign["entryTime"] = $fdata;
		$tdataprojectassign[".searchableFields"][] = "entryTime";


$tables_data["projectAssign"]=&$tdataprojectassign;
$field_labels["projectAssign"] = &$fieldLabelsprojectassign;
$fieldToolTips["projectAssign"] = &$fieldToolTipsprojectassign;
$placeHolders["projectAssign"] = &$placeHoldersprojectassign;
$page_titles["projectAssign"] = &$pageTitlesprojectassign;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["projectAssign"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["projectAssign"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectassign()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project.id,  project.projectName,  project.projectStart,  project.projectEnd,  project.ProjectTypeName,  project.companyName,  project.projectBudgetCost,  SUM(taskDisburse.disburseAmount) AS disbureAmounts,  project.entryUserName,  project.entryTime";
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
	"m_srcTableName" => "projectAssign"
));

$proto6["m_sql"] = "project.id";
$proto6["m_srcTableName"] = "projectAssign";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto8["m_sql"] = "project.projectName";
$proto8["m_srcTableName"] = "projectAssign";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto10["m_sql"] = "project.projectStart";
$proto10["m_srcTableName"] = "projectAssign";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto12["m_sql"] = "project.projectEnd";
$proto12["m_srcTableName"] = "projectAssign";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ProjectTypeName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto14["m_sql"] = "project.ProjectTypeName";
$proto14["m_srcTableName"] = "projectAssign";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto16["m_sql"] = "project.companyName";
$proto16["m_srcTableName"] = "projectAssign";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto18["m_sql"] = "project.projectBudgetCost";
$proto18["m_srcTableName"] = "projectAssign";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_SUM";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "disburseAmount",
	"m_strTable" => "taskDisburse",
	"m_srcTableName" => "projectAssign"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "SUM(taskDisburse.disburseAmount)";
$proto20["m_srcTableName"] = "projectAssign";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "disbureAmounts";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto23["m_sql"] = "project.entryUserName";
$proto23["m_srcTableName"] = "projectAssign";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto25["m_sql"] = "project.entryTime";
$proto25["m_srcTableName"] = "projectAssign";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "project";
$proto28["m_srcTableName"] = "projectAssign";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "projectName";
$proto28["m_columns"][] = "projectStart";
$proto28["m_columns"][] = "projectEnd";
$proto28["m_columns"][] = "ProjectTypeName";
$proto28["m_columns"][] = "companyName";
$proto28["m_columns"][] = "projectBudgetCost";
$proto28["m_columns"][] = "projectFile";
$proto28["m_columns"][] = "DocumentCheckDate";
$proto28["m_columns"][] = "DocumentCheckStatus";
$proto28["m_columns"][] = "DocumentCheckReason";
$proto28["m_columns"][] = "screenDate";
$proto28["m_columns"][] = "screenStatus";
$proto28["m_columns"][] = "screenReason";
$proto28["m_columns"][] = "approveDate";
$proto28["m_columns"][] = "approveStatus";
$proto28["m_columns"][] = "approveReason";
$proto28["m_columns"][] = "entryUserName";
$proto28["m_columns"][] = "entryTime";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "project";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "projectAssign";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "taskDisburse";
$proto32["m_srcTableName"] = "projectAssign";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "projectID";
$proto32["m_columns"][] = "trackDisburseDate";
$proto32["m_columns"][] = "progressStep";
$proto32["m_columns"][] = "disburseDesc";
$proto32["m_columns"][] = "disburseAmount";
$proto32["m_columns"][] = "disburseAttFille";
$proto32["m_columns"][] = "approveStatus";
$proto32["m_columns"][] = "approveDate";
$proto32["m_columns"][] = "approveReason";
$proto32["m_columns"][] = "entryUserName";
$proto32["m_columns"][] = "entryTime";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN taskDisburse ON project.id = taskDisburse.projectID";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "projectAssign";
$proto33=array();
$proto33["m_sql"] = "project.id = taskDisburse.projectID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= taskDisburse.projectID";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "project",
	"m_srcTableName" => "projectAssign"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projectAssign";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectassign = createSqlQuery_projectassign();


	
				;

										

$tdataprojectassign[".sqlquery"] = $queryData_projectassign;



include_once(getabspath("include/projectassign_events.php"));
$tableEvents["projectAssign"] = new eventclass_projectassign;
$tdataprojectassign[".hasEvents"] = true;

$query = &$queryData_projectassign;
$table = "projectAssign";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>