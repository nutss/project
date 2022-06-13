<?php
$tdatasummaryreport = array();
$tdatasummaryreport[".searchableFields"] = array();
$tdatasummaryreport[".ShortName"] = "summaryreport";
$tdatasummaryreport[".OwnerID"] = "";
$tdatasummaryreport[".OriginalTable"] = "project";


$tdatasummaryreport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatasummaryreport[".originalPagesByType"] = $tdatasummaryreport[".pagesByType"];
$tdatasummaryreport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatasummaryreport[".originalPages"] = $tdatasummaryreport[".pages"];
$tdatasummaryreport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatasummaryreport[".originalDefaultPages"] = $tdatasummaryreport[".defaultPages"];

//	field labels
$fieldLabelssummaryreport = array();
$fieldToolTipssummaryreport = array();
$pageTitlessummaryreport = array();
$placeHolderssummaryreport = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssummaryreport["English"] = array();
	$fieldToolTipssummaryreport["English"] = array();
	$placeHolderssummaryreport["English"] = array();
	$pageTitlessummaryreport["English"] = array();
	$fieldLabelssummaryreport["English"]["id"] = "ID";
	$fieldToolTipssummaryreport["English"]["id"] = "";
	$placeHolderssummaryreport["English"]["id"] = "";
	$fieldLabelssummaryreport["English"]["projectName"] = "Project Name";
	$fieldToolTipssummaryreport["English"]["projectName"] = "";
	$placeHolderssummaryreport["English"]["projectName"] = "";
	$fieldLabelssummaryreport["English"]["projectStart"] = "Project Start";
	$fieldToolTipssummaryreport["English"]["projectStart"] = "";
	$placeHolderssummaryreport["English"]["projectStart"] = "";
	$fieldLabelssummaryreport["English"]["projectEnd"] = "Project End";
	$fieldToolTipssummaryreport["English"]["projectEnd"] = "";
	$placeHolderssummaryreport["English"]["projectEnd"] = "";
	$fieldLabelssummaryreport["English"]["researchFundingType"] = "Research Funding Type";
	$fieldToolTipssummaryreport["English"]["researchFundingType"] = "";
	$placeHolderssummaryreport["English"]["researchFundingType"] = "";
	$fieldLabelssummaryreport["English"]["contactName"] = "Contact Name";
	$fieldToolTipssummaryreport["English"]["contactName"] = "";
	$placeHolderssummaryreport["English"]["contactName"] = "";
	$fieldLabelssummaryreport["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipssummaryreport["English"]["approveStatus"] = "";
	$placeHolderssummaryreport["English"]["approveStatus"] = "";
	$fieldLabelssummaryreport["English"]["approveDate"] = "Approve Date";
	$fieldToolTipssummaryreport["English"]["approveDate"] = "";
	$placeHolderssummaryreport["English"]["approveDate"] = "";
	$fieldLabelssummaryreport["English"]["DocumentCheckStatus"] = "Document Check Status";
	$fieldToolTipssummaryreport["English"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryreport["English"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryreport["English"]["projectBudgetCost"] = "Project Budget Cost";
	$fieldToolTipssummaryreport["English"]["projectBudgetCost"] = "";
	$placeHolderssummaryreport["English"]["projectBudgetCost"] = "";
	$fieldLabelssummaryreport["English"]["projectBudgetRemain"] = "Project Budget Remain";
	$fieldToolTipssummaryreport["English"]["projectBudgetRemain"] = "";
	$placeHolderssummaryreport["English"]["projectBudgetRemain"] = "";
	$fieldLabelssummaryreport["English"]["projectFile"] = "Project File";
	$fieldToolTipssummaryreport["English"]["projectFile"] = "";
	$placeHolderssummaryreport["English"]["projectFile"] = "";
	$fieldLabelssummaryreport["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipssummaryreport["English"]["entryUserName"] = "";
	$placeHolderssummaryreport["English"]["entryUserName"] = "";
	$fieldLabelssummaryreport["English"]["entryTime"] = "Entry Time";
	$fieldToolTipssummaryreport["English"]["entryTime"] = "";
	$placeHolderssummaryreport["English"]["entryTime"] = "";
	if (count($fieldToolTipssummaryreport["English"]))
		$tdatasummaryreport[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelssummaryreport["Thai"] = array();
	$fieldToolTipssummaryreport["Thai"] = array();
	$placeHolderssummaryreport["Thai"] = array();
	$pageTitlessummaryreport["Thai"] = array();
	$fieldLabelssummaryreport["Thai"]["id"] = "ID";
	$fieldToolTipssummaryreport["Thai"]["id"] = "";
	$placeHolderssummaryreport["Thai"]["id"] = "";
	$fieldLabelssummaryreport["Thai"]["projectName"] = "ชื่อโครงการ";
	$fieldToolTipssummaryreport["Thai"]["projectName"] = "";
	$placeHolderssummaryreport["Thai"]["projectName"] = "";
	$fieldLabelssummaryreport["Thai"]["projectStart"] = "วันเริ่มโครงการ";
	$fieldToolTipssummaryreport["Thai"]["projectStart"] = "";
	$placeHolderssummaryreport["Thai"]["projectStart"] = "";
	$fieldLabelssummaryreport["Thai"]["projectEnd"] = "วันสิ้นสุดโครงการ";
	$fieldToolTipssummaryreport["Thai"]["projectEnd"] = "";
	$placeHolderssummaryreport["Thai"]["projectEnd"] = "";
	$fieldLabelssummaryreport["Thai"]["researchFundingType"] = "ประเภททุนวิจัย";
	$fieldToolTipssummaryreport["Thai"]["researchFundingType"] = "";
	$placeHolderssummaryreport["Thai"]["researchFundingType"] = "";
	$fieldLabelssummaryreport["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipssummaryreport["Thai"]["contactName"] = "";
	$placeHolderssummaryreport["Thai"]["contactName"] = "";
	$fieldLabelssummaryreport["Thai"]["approveStatus"] = "สถานะการอนุมัติ";
	$fieldToolTipssummaryreport["Thai"]["approveStatus"] = "";
	$placeHolderssummaryreport["Thai"]["approveStatus"] = "";
	$fieldLabelssummaryreport["Thai"]["approveDate"] = "วันที่อนุมัติ";
	$fieldToolTipssummaryreport["Thai"]["approveDate"] = "";
	$placeHolderssummaryreport["Thai"]["approveDate"] = "";
	$fieldLabelssummaryreport["Thai"]["DocumentCheckStatus"] = "ความพร้อมของเอกสาร";
	$fieldToolTipssummaryreport["Thai"]["DocumentCheckStatus"] = "";
	$placeHolderssummaryreport["Thai"]["DocumentCheckStatus"] = "";
	$fieldLabelssummaryreport["Thai"]["projectBudgetCost"] = "มูลค่าโครงการ";
	$fieldToolTipssummaryreport["Thai"]["projectBudgetCost"] = "";
	$placeHolderssummaryreport["Thai"]["projectBudgetCost"] = "";
	$fieldLabelssummaryreport["Thai"]["projectBudgetRemain"] = "มูลค่าโครงการคงเหลือ";
	$fieldToolTipssummaryreport["Thai"]["projectBudgetRemain"] = "";
	$placeHolderssummaryreport["Thai"]["projectBudgetRemain"] = "";
	$fieldLabelssummaryreport["Thai"]["projectFile"] = "ไฟล์โครงการ";
	$fieldToolTipssummaryreport["Thai"]["projectFile"] = "";
	$placeHolderssummaryreport["Thai"]["projectFile"] = "";
	$fieldLabelssummaryreport["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipssummaryreport["Thai"]["entryUserName"] = "";
	$placeHolderssummaryreport["Thai"]["entryUserName"] = "";
	$fieldLabelssummaryreport["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipssummaryreport["Thai"]["entryTime"] = "";
	$placeHolderssummaryreport["Thai"]["entryTime"] = "";
	if (count($fieldToolTipssummaryreport["Thai"]))
		$tdatasummaryreport[".isUseToolTips"] = true;
}


	$tdatasummaryreport[".NCSearch"] = true;



$tdatasummaryreport[".shortTableName"] = "summaryreport";
$tdatasummaryreport[".nSecOptions"] = 0;

$tdatasummaryreport[".mainTableOwnerID"] = "";
$tdatasummaryreport[".entityType"] = 2;
$tdatasummaryreport[".connId"] = "mc_at_192_168_1_111";


$tdatasummaryreport[".strOriginalTableName"] = "project";

	



$tdatasummaryreport[".showAddInPopup"] = false;

$tdatasummaryreport[".showEditInPopup"] = false;

$tdatasummaryreport[".showViewInPopup"] = false;

$tdatasummaryreport[".listAjax"] = false;
//	temporary
//$tdatasummaryreport[".listAjax"] = false;

	$tdatasummaryreport[".audit"] = false;

	$tdatasummaryreport[".locking"] = false;


$pages = $tdatasummaryreport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasummaryreport[".edit"] = true;
	$tdatasummaryreport[".afterEditAction"] = 1;
	$tdatasummaryreport[".closePopupAfterEdit"] = 1;
	$tdatasummaryreport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasummaryreport[".add"] = true;
$tdatasummaryreport[".afterAddAction"] = 1;
$tdatasummaryreport[".closePopupAfterAdd"] = 1;
$tdatasummaryreport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasummaryreport[".list"] = true;
}



$tdatasummaryreport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasummaryreport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasummaryreport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasummaryreport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasummaryreport[".printFriendly"] = true;
}



$tdatasummaryreport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasummaryreport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasummaryreport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasummaryreport[".isUseAjaxSuggest"] = true;






$tdatasummaryreport[".ajaxCodeSnippetAdded"] = false;

$tdatasummaryreport[".buttonsAdded"] = false;

$tdatasummaryreport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasummaryreport[".isUseTimeForSearch"] = false;


$tdatasummaryreport[".badgeColor"] = "5F9EA0";


$tdatasummaryreport[".allSearchFields"] = array();
$tdatasummaryreport[".filterFields"] = array();
$tdatasummaryreport[".requiredSearchFields"] = array();

$tdatasummaryreport[".googleLikeFields"] = array();
$tdatasummaryreport[".googleLikeFields"][] = "id";
$tdatasummaryreport[".googleLikeFields"][] = "projectName";
$tdatasummaryreport[".googleLikeFields"][] = "projectStart";
$tdatasummaryreport[".googleLikeFields"][] = "projectEnd";
$tdatasummaryreport[".googleLikeFields"][] = "researchFundingType";
$tdatasummaryreport[".googleLikeFields"][] = "contactName";
$tdatasummaryreport[".googleLikeFields"][] = "approveStatus";
$tdatasummaryreport[".googleLikeFields"][] = "approveDate";
$tdatasummaryreport[".googleLikeFields"][] = "DocumentCheckStatus";
$tdatasummaryreport[".googleLikeFields"][] = "projectBudgetCost";
$tdatasummaryreport[".googleLikeFields"][] = "projectBudgetRemain";
$tdatasummaryreport[".googleLikeFields"][] = "projectFile";
$tdatasummaryreport[".googleLikeFields"][] = "entryUserName";
$tdatasummaryreport[".googleLikeFields"][] = "entryTime";



$tdatasummaryreport[".tableType"] = "report";

$tdatasummaryreport[".printerPageOrientation"] = 0;
$tdatasummaryreport[".nPrinterPageScale"] = 100;

$tdatasummaryreport[".nPrinterSplitRecords"] = 40;

$tdatasummaryreport[".geocodingEnabled"] = false;

//report settings

$tdatasummaryreport[".reportPrintGroupsPerPage"] = 3;
$tdatasummaryreport[".reportPrintRecordsPerPage"] = 40;

$tdatasummaryreport[".pageSizeGroups"] = 5;
$tdatasummaryreport[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatasummaryreport[".strOrderBy"] = $tstrOrderBy;

$tdatasummaryreport[".orderindexes"] = array();


$tdatasummaryreport[".sqlHead"] = "SELECT id,  	projectName,  	projectStart,  	projectEnd,  	researchFundingType,  	contactName,  	approveStatus,  	approveDate,  	DocumentCheckStatus,  	projectBudgetCost,  	projectBudgetRemain,  	projectFile,  	entryUserName,  	entryTime";
$tdatasummaryreport[".sqlFrom"] = "FROM project";
$tdatasummaryreport[".sqlWhereExpr"] = "";
$tdatasummaryreport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasummaryreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasummaryreport[".arrGroupsPerPage"] = $arrGPP;

$tdatasummaryreport[".highlightSearchResults"] = true;

$tableKeyssummaryreport = array();
$tableKeyssummaryreport[] = "id";
$tdatasummaryreport[".Keys"] = $tableKeyssummaryreport;


$tdatasummaryreport[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatasummaryreport["id"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "id";
//	projectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectName";
	$fdata["GoodName"] = "projectName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectName";

		$fdata["sourceSingle"] = "projectName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectName";

	
	
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


	$tdatasummaryreport["projectName"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectName";
//	projectStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projectStart";
	$fdata["GoodName"] = "projectStart";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectStart");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "projectStart";

		$fdata["sourceSingle"] = "projectStart";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectStart";

	
	
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


	$tdatasummaryreport["projectStart"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectStart";
//	projectEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projectEnd";
	$fdata["GoodName"] = "projectEnd";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectEnd");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "projectEnd";

		$fdata["sourceSingle"] = "projectEnd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectEnd";

	
	
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


	$tdatasummaryreport["projectEnd"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectEnd";
//	researchFundingType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchFundingType";
	$fdata["GoodName"] = "researchFundingType";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","researchFundingType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchFundingType";

		$fdata["sourceSingle"] = "researchFundingType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchFundingType";

	
	
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


	$tdatasummaryreport["researchFundingType"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "researchFundingType";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactName";

	
	
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


	$tdatasummaryreport["contactName"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "contactName";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveStatus";

	
	
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


	$tdatasummaryreport["approveStatus"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveDate";

	
	
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


	$tdatasummaryreport["approveDate"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "approveDate";
//	DocumentCheckStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocumentCheckStatus";
	$fdata["GoodName"] = "DocumentCheckStatus";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","DocumentCheckStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DocumentCheckStatus";

		$fdata["sourceSingle"] = "DocumentCheckStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentCheckStatus";

	
	
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


	$tdatasummaryreport["DocumentCheckStatus"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "DocumentCheckStatus";
//	projectBudgetCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "projectBudgetCost";
	$fdata["GoodName"] = "projectBudgetCost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectBudgetCost");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "projectBudgetCost";

		$fdata["sourceSingle"] = "projectBudgetCost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectBudgetCost";

	
	
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


	$tdatasummaryreport["projectBudgetCost"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectBudgetCost";
//	projectBudgetRemain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "projectBudgetRemain";
	$fdata["GoodName"] = "projectBudgetRemain";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectBudgetRemain");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "projectBudgetRemain";

		$fdata["sourceSingle"] = "projectBudgetRemain";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectBudgetRemain";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
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


	$tdatasummaryreport["projectBudgetRemain"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectBudgetRemain";
//	projectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "projectFile";
	$fdata["GoodName"] = "projectFile";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","projectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "projectFile";

		$fdata["sourceSingle"] = "projectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectFile";

	
	
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


	$tdatasummaryreport["projectFile"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "projectFile";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUserName";

	
	
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


	$tdatasummaryreport["entryUserName"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("SummaryReport","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
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


	$tdatasummaryreport["entryTime"] = $fdata;
		$tdatasummaryreport[".searchableFields"][] = "entryTime";


$tables_data["SummaryReport"]=&$tdatasummaryreport;
$field_labels["SummaryReport"] = &$fieldLabelssummaryreport;
$fieldToolTips["SummaryReport"] = &$fieldToolTipssummaryreport;
$placeHolders["SummaryReport"] = &$placeHolderssummaryreport;
$page_titles["SummaryReport"] = &$pageTitlessummaryreport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SummaryReport"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SummaryReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_summaryreport()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectName,  	projectStart,  	projectEnd,  	researchFundingType,  	contactName,  	approveStatus,  	approveDate,  	DocumentCheckStatus,  	projectBudgetCost,  	projectBudgetRemain,  	projectFile,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM project";
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
	"m_srcTableName" => "SummaryReport"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "SummaryReport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto8["m_sql"] = "projectName";
$proto8["m_srcTableName"] = "SummaryReport";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStart",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto10["m_sql"] = "projectStart";
$proto10["m_srcTableName"] = "SummaryReport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projectEnd",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto12["m_sql"] = "projectEnd";
$proto12["m_srcTableName"] = "SummaryReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchFundingType",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto14["m_sql"] = "researchFundingType";
$proto14["m_srcTableName"] = "SummaryReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto16["m_sql"] = "contactName";
$proto16["m_srcTableName"] = "SummaryReport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto18["m_sql"] = "approveStatus";
$proto18["m_srcTableName"] = "SummaryReport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto20["m_sql"] = "approveDate";
$proto20["m_srcTableName"] = "SummaryReport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentCheckStatus",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto22["m_sql"] = "DocumentCheckStatus";
$proto22["m_srcTableName"] = "SummaryReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetCost",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto24["m_sql"] = "projectBudgetCost";
$proto24["m_srcTableName"] = "SummaryReport";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "projectBudgetRemain",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto26["m_sql"] = "projectBudgetRemain";
$proto26["m_srcTableName"] = "SummaryReport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "projectFile",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto28["m_sql"] = "projectFile";
$proto28["m_srcTableName"] = "SummaryReport";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto30["m_sql"] = "entryUserName";
$proto30["m_srcTableName"] = "SummaryReport";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "project",
	"m_srcTableName" => "SummaryReport"
));

$proto32["m_sql"] = "entryTime";
$proto32["m_srcTableName"] = "SummaryReport";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "project";
$proto35["m_srcTableName"] = "SummaryReport";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "projectName";
$proto35["m_columns"][] = "projectStart";
$proto35["m_columns"][] = "projectEnd";
$proto35["m_columns"][] = "researchFundingType";
$proto35["m_columns"][] = "contactName";
$proto35["m_columns"][] = "approveStatus";
$proto35["m_columns"][] = "approveDate";
$proto35["m_columns"][] = "DocumentCheckStatus";
$proto35["m_columns"][] = "projectBudgetCost";
$proto35["m_columns"][] = "projectBudgetRemain";
$proto35["m_columns"][] = "projectFile";
$proto35["m_columns"][] = "entryUserName";
$proto35["m_columns"][] = "entryTime";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "project";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "SummaryReport";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SummaryReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_summaryreport = createSqlQuery_summaryreport();


	
				;

														

$tdatasummaryreport[".sqlquery"] = $queryData_summaryreport;



$tableEvents["SummaryReport"] = new eventsBase;
$tdatasummaryreport[".hasEvents"] = false;

?>