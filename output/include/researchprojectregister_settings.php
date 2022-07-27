<?php
$tdataresearchprojectregister = array();
$tdataresearchprojectregister[".searchableFields"] = array();
$tdataresearchprojectregister[".ShortName"] = "researchprojectregister";
$tdataresearchprojectregister[".OwnerID"] = "";
$tdataresearchprojectregister[".OriginalTable"] = "researchScholarshipRegister";


$tdataresearchprojectregister[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchprojectregister[".originalPagesByType"] = $tdataresearchprojectregister[".pagesByType"];
$tdataresearchprojectregister[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchprojectregister[".originalPages"] = $tdataresearchprojectregister[".pages"];
$tdataresearchprojectregister[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchprojectregister[".originalDefaultPages"] = $tdataresearchprojectregister[".defaultPages"];

//	field labels
$fieldLabelsresearchprojectregister = array();
$fieldToolTipsresearchprojectregister = array();
$pageTitlesresearchprojectregister = array();
$placeHoldersresearchprojectregister = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchprojectregister["English"] = array();
	$fieldToolTipsresearchprojectregister["English"] = array();
	$placeHoldersresearchprojectregister["English"] = array();
	$pageTitlesresearchprojectregister["English"] = array();
	$fieldLabelsresearchprojectregister["English"]["id"] = "ID";
	$fieldToolTipsresearchprojectregister["English"]["id"] = "";
	$placeHoldersresearchprojectregister["English"]["id"] = "ID";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterNo"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterNo"] = "Research Register No";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterName"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterName"] = "Research Register Name";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterFile"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterFile"] = "Research Register File";
	$fieldLabelsresearchprojectregister["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchprojectregister["English"]["researchType"] = "";
	$placeHoldersresearchprojectregister["English"]["researchType"] = "Research Type";
	$fieldLabelsresearchprojectregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsresearchprojectregister["English"]["researchRegisterStatus"] = "";
	$placeHoldersresearchprojectregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldLabelsresearchprojectregister["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectregister["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectregister["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchprojectregister["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectregister["English"]["entryTime"] = "";
	$placeHoldersresearchprojectregister["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchprojectregister["English"]))
		$tdataresearchprojectregister[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchprojectregister["Thai"] = array();
	$fieldToolTipsresearchprojectregister["Thai"] = array();
	$placeHoldersresearchprojectregister["Thai"] = array();
	$pageTitlesresearchprojectregister["Thai"] = array();
	$fieldLabelsresearchprojectregister["Thai"]["id"] = "ID";
	$fieldToolTipsresearchprojectregister["Thai"]["id"] = "";
	$placeHoldersresearchprojectregister["Thai"]["id"] = "ID";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterNo"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterName"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterFile"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldLabelsresearchprojectregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchprojectregister["Thai"]["researchType"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldLabelsresearchprojectregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsresearchprojectregister["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersresearchprojectregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldLabelsresearchprojectregister["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchprojectregister["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectregister["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchprojectregister["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchprojectregister["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectregister["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsresearchprojectregister["Thai"]))
		$tdataresearchprojectregister[".isUseToolTips"] = true;
}


	$tdataresearchprojectregister[".NCSearch"] = true;



$tdataresearchprojectregister[".shortTableName"] = "researchprojectregister";
$tdataresearchprojectregister[".nSecOptions"] = 0;

$tdataresearchprojectregister[".mainTableOwnerID"] = "";
$tdataresearchprojectregister[".entityType"] = 1;
$tdataresearchprojectregister[".connId"] = "mc_at_192_168_1_111";


$tdataresearchprojectregister[".strOriginalTableName"] = "researchScholarshipRegister";

	



$tdataresearchprojectregister[".showAddInPopup"] = false;

$tdataresearchprojectregister[".showEditInPopup"] = false;

$tdataresearchprojectregister[".showViewInPopup"] = false;

$tdataresearchprojectregister[".listAjax"] = false;
//	temporary
//$tdataresearchprojectregister[".listAjax"] = false;

	$tdataresearchprojectregister[".audit"] = true;

	$tdataresearchprojectregister[".locking"] = false;


$pages = $tdataresearchprojectregister[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchprojectregister[".edit"] = true;
	$tdataresearchprojectregister[".afterEditAction"] = 1;
	$tdataresearchprojectregister[".closePopupAfterEdit"] = 1;
	$tdataresearchprojectregister[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchprojectregister[".add"] = true;
$tdataresearchprojectregister[".afterAddAction"] = 1;
$tdataresearchprojectregister[".closePopupAfterAdd"] = 1;
$tdataresearchprojectregister[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchprojectregister[".list"] = true;
}



$tdataresearchprojectregister[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchprojectregister[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchprojectregister[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchprojectregister[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchprojectregister[".printFriendly"] = true;
}



$tdataresearchprojectregister[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchprojectregister[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchprojectregister[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchprojectregister[".isUseAjaxSuggest"] = true;

$tdataresearchprojectregister[".rowHighlite"] = true;



						

$tdataresearchprojectregister[".ajaxCodeSnippetAdded"] = false;

$tdataresearchprojectregister[".buttonsAdded"] = false;

$tdataresearchprojectregister[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchprojectregister[".isUseTimeForSearch"] = false;


$tdataresearchprojectregister[".badgeColor"] = "CD853F";


$tdataresearchprojectregister[".allSearchFields"] = array();
$tdataresearchprojectregister[".filterFields"] = array();
$tdataresearchprojectregister[".requiredSearchFields"] = array();

$tdataresearchprojectregister[".googleLikeFields"] = array();
$tdataresearchprojectregister[".googleLikeFields"][] = "id";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterNo";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterName";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterFile";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchType";
$tdataresearchprojectregister[".googleLikeFields"][] = "researchRegisterStatus";
$tdataresearchprojectregister[".googleLikeFields"][] = "entryUserName";
$tdataresearchprojectregister[".googleLikeFields"][] = "entryTime";



$tdataresearchprojectregister[".tableType"] = "list";

$tdataresearchprojectregister[".printerPageOrientation"] = 0;
$tdataresearchprojectregister[".nPrinterPageScale"] = 100;

$tdataresearchprojectregister[".nPrinterSplitRecords"] = 40;

$tdataresearchprojectregister[".geocodingEnabled"] = false;










$tdataresearchprojectregister[".pageSize"] = 20;

$tdataresearchprojectregister[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchprojectregister[".strOrderBy"] = $tstrOrderBy;

$tdataresearchprojectregister[".orderindexes"] = array();


$tdataresearchprojectregister[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchType,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataresearchprojectregister[".sqlFrom"] = "FROM researchScholarshipRegister";
$tdataresearchprojectregister[".sqlWhereExpr"] = "";
$tdataresearchprojectregister[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchprojectregister[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchprojectregister[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchprojectregister[".highlightSearchResults"] = true;

$tableKeysresearchprojectregister = array();
$tableKeysresearchprojectregister[] = "id";
$tdataresearchprojectregister[".Keys"] = $tableKeysresearchprojectregister;


$tdataresearchprojectregister[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataresearchprojectregister["id"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRegisterNo";

		$fdata["sourceSingle"] = "researchRegisterNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterNo";

	
	
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


	$tdataresearchprojectregister["researchRegisterNo"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterNo";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRegisterName";

		$fdata["sourceSingle"] = "researchRegisterName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterName";

	
	
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


	$tdataresearchprojectregister["researchRegisterName"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchRegisterStartDate";

		$fdata["sourceSingle"] = "researchRegisterStartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterStartDate";

	
	
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


	$tdataresearchprojectregister["researchRegisterStartDate"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchRegisterEndDate";

		$fdata["sourceSingle"] = "researchRegisterEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterEndDate";

	
	
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


	$tdataresearchprojectregister["researchRegisterEndDate"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchRegisterFile";

		$fdata["sourceSingle"] = "researchRegisterFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterFile";

	
	
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


	$tdataresearchprojectregister["researchRegisterFile"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterFile";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchType";

		$fdata["sourceSingle"] = "researchType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchType";

	
	
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
	$edata["LookupTable"] = "researchType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "typeName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "typeName";

				$edata["LookupWhere"] = "typeName IN (:session.typeName)";


	
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


	$tdataresearchprojectregister["researchType"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchType";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","researchRegisterStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRegisterStatus";

		$fdata["sourceSingle"] = "researchRegisterStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterStatus";

	
	
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
	$edata["LookupValues"][] = "ยังไม่เปิดรับสมัคร";
	$edata["LookupValues"][] = "เปิดรับสมัคร";
	$edata["LookupValues"][] = "ปิดรับสมัคร";
	$edata["LookupValues"][] = "ยกเลิก";

	
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


	$tdataresearchprojectregister["researchRegisterStatus"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","entryUserName");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataresearchprojectregister["entryUserName"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectRegister","entryTime");
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdataresearchprojectregister["entryTime"] = $fdata;
		$tdataresearchprojectregister[".searchableFields"][] = "entryTime";


$tables_data["researchProjectRegister"]=&$tdataresearchprojectregister;
$field_labels["researchProjectRegister"] = &$fieldLabelsresearchprojectregister;
$fieldToolTips["researchProjectRegister"] = &$fieldToolTipsresearchprojectregister;
$placeHolders["researchProjectRegister"] = &$placeHoldersresearchprojectregister;
$page_titles["researchProjectRegister"] = &$pageTitlesresearchprojectregister;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProjectRegister"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectRegister"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectregister()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchRegisterNo,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchType,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchScholarshipRegister";
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
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProjectRegister";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "researchProjectRegister";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto10["m_sql"] = "researchRegisterName";
$proto10["m_srcTableName"] = "researchProjectRegister";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto12["m_sql"] = "researchRegisterStartDate";
$proto12["m_srcTableName"] = "researchProjectRegister";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto14["m_sql"] = "researchRegisterEndDate";
$proto14["m_srcTableName"] = "researchProjectRegister";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto16["m_sql"] = "researchRegisterFile";
$proto16["m_srcTableName"] = "researchProjectRegister";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto18["m_sql"] = "researchType";
$proto18["m_srcTableName"] = "researchProjectRegister";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "researchProjectRegister";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchProjectRegister";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectRegister"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchProjectRegister";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchScholarshipRegister";
$proto27["m_srcTableName"] = "researchProjectRegister";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "researchRegisterNo";
$proto27["m_columns"][] = "researchRegisterName";
$proto27["m_columns"][] = "researchRegisterStartDate";
$proto27["m_columns"][] = "researchRegisterEndDate";
$proto27["m_columns"][] = "researchRegisterFile";
$proto27["m_columns"][] = "researchType";
$proto27["m_columns"][] = "researchRegisterStatus";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "entryTime";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "researchScholarshipRegister";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "researchProjectRegister";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchProjectRegister";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchprojectregister = createSqlQuery_researchprojectregister();


	
				;

										

$tdataresearchprojectregister[".sqlquery"] = $queryData_researchprojectregister;



include_once(getabspath("include/researchprojectregister_events.php"));
$tableEvents["researchProjectRegister"] = new eventclass_researchprojectregister;
$tdataresearchprojectregister[".hasEvents"] = true;

$query = &$queryData_researchprojectregister;
$table = "researchProjectRegister";
// here goes EVENT_INIT_TABLE event


		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchScholarshipRegister`.`researchType` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>