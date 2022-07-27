<?php
$tdataresearchscholarshipregister = array();
$tdataresearchscholarshipregister[".searchableFields"] = array();
$tdataresearchscholarshipregister[".ShortName"] = "researchscholarshipregister";
$tdataresearchscholarshipregister[".OwnerID"] = "";
$tdataresearchscholarshipregister[".OriginalTable"] = "researchScholarshipRegister";


$tdataresearchscholarshipregister[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchscholarshipregister[".originalPagesByType"] = $tdataresearchscholarshipregister[".pagesByType"];
$tdataresearchscholarshipregister[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchscholarshipregister[".originalPages"] = $tdataresearchscholarshipregister[".pages"];
$tdataresearchscholarshipregister[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchscholarshipregister[".originalDefaultPages"] = $tdataresearchscholarshipregister[".defaultPages"];

//	field labels
$fieldLabelsresearchscholarshipregister = array();
$fieldToolTipsresearchscholarshipregister = array();
$pageTitlesresearchscholarshipregister = array();
$placeHoldersresearchscholarshipregister = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchscholarshipregister["English"] = array();
	$fieldToolTipsresearchscholarshipregister["English"] = array();
	$placeHoldersresearchscholarshipregister["English"] = array();
	$pageTitlesresearchscholarshipregister["English"] = array();
	$fieldLabelsresearchscholarshipregister["English"]["id"] = "ID";
	$fieldToolTipsresearchscholarshipregister["English"]["id"] = "";
	$placeHoldersresearchscholarshipregister["English"]["id"] = "ID";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterNo"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterNo"] = "Research Register No";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterName"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterName"] = "Research Register Name";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterFile"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterFile"] = "Research Register File";
	$fieldLabelsresearchscholarshipregister["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchscholarshipregister["English"]["researchType"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchType"] = "Research Type";
	$fieldLabelsresearchscholarshipregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsresearchscholarshipregister["English"]["researchRegisterStatus"] = "";
	$placeHoldersresearchscholarshipregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldLabelsresearchscholarshipregister["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchscholarshipregister["English"]["entryUserName"] = "";
	$placeHoldersresearchscholarshipregister["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchscholarshipregister["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchscholarshipregister["English"]["entryTime"] = "";
	$placeHoldersresearchscholarshipregister["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchscholarshipregister["English"]))
		$tdataresearchscholarshipregister[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchscholarshipregister["Thai"] = array();
	$fieldToolTipsresearchscholarshipregister["Thai"] = array();
	$placeHoldersresearchscholarshipregister["Thai"] = array();
	$pageTitlesresearchscholarshipregister["Thai"] = array();
	$fieldLabelsresearchscholarshipregister["Thai"]["id"] = "ID";
	$fieldToolTipsresearchscholarshipregister["Thai"]["id"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["id"] = "ID";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterNo"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterName"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterFile"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchType"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldLabelsresearchscholarshipregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsresearchscholarshipregister["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldLabelsresearchscholarshipregister["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchscholarshipregister["Thai"]["entryUserName"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchscholarshipregister["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchscholarshipregister["Thai"]["entryTime"] = "";
	$placeHoldersresearchscholarshipregister["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsresearchscholarshipregister["Thai"]))
		$tdataresearchscholarshipregister[".isUseToolTips"] = true;
}


	$tdataresearchscholarshipregister[".NCSearch"] = true;



$tdataresearchscholarshipregister[".shortTableName"] = "researchscholarshipregister";
$tdataresearchscholarshipregister[".nSecOptions"] = 0;

$tdataresearchscholarshipregister[".mainTableOwnerID"] = "";
$tdataresearchscholarshipregister[".entityType"] = 0;
$tdataresearchscholarshipregister[".connId"] = "mc_at_192_168_1_111";


$tdataresearchscholarshipregister[".strOriginalTableName"] = "researchScholarshipRegister";

	



$tdataresearchscholarshipregister[".showAddInPopup"] = false;

$tdataresearchscholarshipregister[".showEditInPopup"] = false;

$tdataresearchscholarshipregister[".showViewInPopup"] = false;

$tdataresearchscholarshipregister[".listAjax"] = false;
//	temporary
//$tdataresearchscholarshipregister[".listAjax"] = false;

	$tdataresearchscholarshipregister[".audit"] = true;

	$tdataresearchscholarshipregister[".locking"] = false;


$pages = $tdataresearchscholarshipregister[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchscholarshipregister[".edit"] = true;
	$tdataresearchscholarshipregister[".afterEditAction"] = 1;
	$tdataresearchscholarshipregister[".closePopupAfterEdit"] = 1;
	$tdataresearchscholarshipregister[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchscholarshipregister[".add"] = true;
$tdataresearchscholarshipregister[".afterAddAction"] = 1;
$tdataresearchscholarshipregister[".closePopupAfterAdd"] = 1;
$tdataresearchscholarshipregister[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchscholarshipregister[".list"] = true;
}



$tdataresearchscholarshipregister[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchscholarshipregister[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchscholarshipregister[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchscholarshipregister[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchscholarshipregister[".printFriendly"] = true;
}



$tdataresearchscholarshipregister[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchscholarshipregister[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchscholarshipregister[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchscholarshipregister[".isUseAjaxSuggest"] = true;

$tdataresearchscholarshipregister[".rowHighlite"] = true;



						

$tdataresearchscholarshipregister[".ajaxCodeSnippetAdded"] = false;

$tdataresearchscholarshipregister[".buttonsAdded"] = false;

$tdataresearchscholarshipregister[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchscholarshipregister[".isUseTimeForSearch"] = false;


$tdataresearchscholarshipregister[".badgeColor"] = "E8926F";


$tdataresearchscholarshipregister[".allSearchFields"] = array();
$tdataresearchscholarshipregister[".filterFields"] = array();
$tdataresearchscholarshipregister[".requiredSearchFields"] = array();

$tdataresearchscholarshipregister[".googleLikeFields"] = array();
$tdataresearchscholarshipregister[".googleLikeFields"][] = "id";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterNo";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterName";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterFile";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchType";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "researchRegisterStatus";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "entryUserName";
$tdataresearchscholarshipregister[".googleLikeFields"][] = "entryTime";



$tdataresearchscholarshipregister[".tableType"] = "list";

$tdataresearchscholarshipregister[".printerPageOrientation"] = 0;
$tdataresearchscholarshipregister[".nPrinterPageScale"] = 100;

$tdataresearchscholarshipregister[".nPrinterSplitRecords"] = 40;

$tdataresearchscholarshipregister[".geocodingEnabled"] = false;










$tdataresearchscholarshipregister[".pageSize"] = 20;

$tdataresearchscholarshipregister[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchscholarshipregister[".strOrderBy"] = $tstrOrderBy;

$tdataresearchscholarshipregister[".orderindexes"] = array();


$tdataresearchscholarshipregister[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchType,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataresearchscholarshipregister[".sqlFrom"] = "FROM researchScholarshipRegister";
$tdataresearchscholarshipregister[".sqlWhereExpr"] = "";
$tdataresearchscholarshipregister[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchscholarshipregister[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchscholarshipregister[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchscholarshipregister[".highlightSearchResults"] = true;

$tableKeysresearchscholarshipregister = array();
$tableKeysresearchscholarshipregister[] = "id";
$tdataresearchscholarshipregister[".Keys"] = $tableKeysresearchscholarshipregister;


$tdataresearchscholarshipregister[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","id");
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


	$tdataresearchscholarshipregister["id"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterNo");
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


	$tdataresearchscholarshipregister["researchRegisterNo"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterNo";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterName");
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


	$tdataresearchscholarshipregister["researchRegisterName"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterStartDate");
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresearchscholarshipregister["researchRegisterStartDate"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterEndDate");
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


	$tdataresearchscholarshipregister["researchRegisterEndDate"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterFile");
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


	$tdataresearchscholarshipregister["researchRegisterFile"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterFile";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchType");
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


	$tdataresearchscholarshipregister["researchType"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchType";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","researchRegisterStatus");
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


	$tdataresearchscholarshipregister["researchRegisterStatus"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","entryUserName");
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


	$tdataresearchscholarshipregister["entryUserName"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchScholarshipRegister","entryTime");
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


	$tdataresearchscholarshipregister["entryTime"] = $fdata;
		$tdataresearchscholarshipregister[".searchableFields"][] = "entryTime";


$tables_data["researchScholarshipRegister"]=&$tdataresearchscholarshipregister;
$field_labels["researchScholarshipRegister"] = &$fieldLabelsresearchscholarshipregister;
$fieldToolTips["researchScholarshipRegister"] = &$fieldToolTipsresearchscholarshipregister;
$placeHolders["researchScholarshipRegister"] = &$placeHoldersresearchscholarshipregister;
$page_titles["researchScholarshipRegister"] = &$pageTitlesresearchscholarshipregister;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchScholarshipRegister"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchScholarshipRegister"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchscholarshipregister()
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
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchScholarshipRegister";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "researchScholarshipRegister";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto10["m_sql"] = "researchRegisterName";
$proto10["m_srcTableName"] = "researchScholarshipRegister";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto12["m_sql"] = "researchRegisterStartDate";
$proto12["m_srcTableName"] = "researchScholarshipRegister";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto14["m_sql"] = "researchRegisterEndDate";
$proto14["m_srcTableName"] = "researchScholarshipRegister";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto16["m_sql"] = "researchRegisterFile";
$proto16["m_srcTableName"] = "researchScholarshipRegister";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto18["m_sql"] = "researchType";
$proto18["m_srcTableName"] = "researchScholarshipRegister";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "researchScholarshipRegister";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchScholarshipRegister";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchScholarshipRegister"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchScholarshipRegister";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchScholarshipRegister";
$proto27["m_srcTableName"] = "researchScholarshipRegister";
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
$proto26["m_srcTableName"] = "researchScholarshipRegister";
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
$proto0["m_srcTableName"]="researchScholarshipRegister";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchscholarshipregister = createSqlQuery_researchscholarshipregister();


	
				;

										

$tdataresearchscholarshipregister[".sqlquery"] = $queryData_researchscholarshipregister;



include_once(getabspath("include/researchscholarshipregister_events.php"));
$tableEvents["researchScholarshipRegister"] = new eventclass_researchscholarshipregister;
$tdataresearchscholarshipregister[".hasEvents"] = true;

$query = &$queryData_researchscholarshipregister;
$table = "researchScholarshipRegister";
// here goes EVENT_INIT_TABLE event
		

		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchScholarshipRegister`.`researchType` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>