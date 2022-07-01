<?php
$tdataresearchrenewalconsider = array();
$tdataresearchrenewalconsider[".searchableFields"] = array();
$tdataresearchrenewalconsider[".ShortName"] = "researchrenewalconsider";
$tdataresearchrenewalconsider[".OwnerID"] = "";
$tdataresearchrenewalconsider[".OriginalTable"] = "researchRenewalConsider";


$tdataresearchrenewalconsider[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchrenewalconsider[".originalPagesByType"] = $tdataresearchrenewalconsider[".pagesByType"];
$tdataresearchrenewalconsider[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchrenewalconsider[".originalPages"] = $tdataresearchrenewalconsider[".pages"];
$tdataresearchrenewalconsider[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchrenewalconsider[".originalDefaultPages"] = $tdataresearchrenewalconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchrenewalconsider = array();
$fieldToolTipsresearchrenewalconsider = array();
$pageTitlesresearchrenewalconsider = array();
$placeHoldersresearchrenewalconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchrenewalconsider["English"] = array();
	$fieldToolTipsresearchrenewalconsider["English"] = array();
	$placeHoldersresearchrenewalconsider["English"] = array();
	$pageTitlesresearchrenewalconsider["English"] = array();
	$fieldLabelsresearchrenewalconsider["English"]["id"] = "Id";
	$fieldToolTipsresearchrenewalconsider["English"]["id"] = "";
	$placeHoldersresearchrenewalconsider["English"]["id"] = "Id";
	$fieldLabelsresearchrenewalconsider["English"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldToolTipsresearchrenewalconsider["English"]["researchRenewalID"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldLabelsresearchrenewalconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchrenewalconsider["English"]["processName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["processName"] = "Process Name";
	$fieldLabelsresearchrenewalconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchrenewalconsider["English"]["stepName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["stepName"] = "Step Name";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldLabelsresearchrenewalconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchrenewalconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldLabelsresearchrenewalconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchrenewalconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchrenewalconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchrenewalconsider["English"]["entryTime"] = "";
	$placeHoldersresearchrenewalconsider["English"]["entryTime"] = "Entry Time";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderValue"] = "Research Consider Value";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderValue"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderValue"] = "Research Consider Value";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderFileCheck"] = "Research Consider File Check";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderFileCheck"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderFileCheck"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchRegisterDescCheck"] = "Research Register Desc Check";
	$fieldToolTipsresearchrenewalconsider["English"]["researchRegisterDescCheck"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchRegisterDescCheck"] = "";
	if (count($fieldToolTipsresearchrenewalconsider["English"]))
		$tdataresearchrenewalconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchrenewalconsider["Thai"] = array();
	$fieldToolTipsresearchrenewalconsider["Thai"] = array();
	$placeHoldersresearchrenewalconsider["Thai"] = array();
	$pageTitlesresearchrenewalconsider["Thai"] = array();
	$fieldLabelsresearchrenewalconsider["Thai"]["id"] = "Id";
	$fieldToolTipsresearchrenewalconsider["Thai"]["id"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["id"] = "Id";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchRenewalID"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldLabelsresearchrenewalconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["processName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldLabelsresearchrenewalconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchrenewalconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderName"] = "ชื่อการพิจารณา";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderName"] = "ชื่อการพิจารณา";
	$fieldLabelsresearchrenewalconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchrenewalconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderValue"] = "การพิจารณา";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderValue"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderValue"] = "ค่าการพิจารณา";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderFileCheck"] = "ตรวจสอบเอกสารแนบ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderFileCheck"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderFileCheck"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchRegisterDescCheck"] = "ตรวจสอบหมายเหตุ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchRegisterDescCheck"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchRegisterDescCheck"] = "";
	if (count($fieldToolTipsresearchrenewalconsider["Thai"]))
		$tdataresearchrenewalconsider[".isUseToolTips"] = true;
}


	$tdataresearchrenewalconsider[".NCSearch"] = true;



$tdataresearchrenewalconsider[".shortTableName"] = "researchrenewalconsider";
$tdataresearchrenewalconsider[".nSecOptions"] = 0;

$tdataresearchrenewalconsider[".mainTableOwnerID"] = "";
$tdataresearchrenewalconsider[".entityType"] = 0;
$tdataresearchrenewalconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchrenewalconsider[".strOriginalTableName"] = "researchRenewalConsider";

	



$tdataresearchrenewalconsider[".showAddInPopup"] = false;

$tdataresearchrenewalconsider[".showEditInPopup"] = false;

$tdataresearchrenewalconsider[".showViewInPopup"] = false;

$tdataresearchrenewalconsider[".listAjax"] = false;
//	temporary
//$tdataresearchrenewalconsider[".listAjax"] = false;

	$tdataresearchrenewalconsider[".audit"] = true;

	$tdataresearchrenewalconsider[".locking"] = false;


$pages = $tdataresearchrenewalconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchrenewalconsider[".edit"] = true;
	$tdataresearchrenewalconsider[".afterEditAction"] = 1;
	$tdataresearchrenewalconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchrenewalconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchrenewalconsider[".add"] = true;
$tdataresearchrenewalconsider[".afterAddAction"] = 1;
$tdataresearchrenewalconsider[".closePopupAfterAdd"] = 1;
$tdataresearchrenewalconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchrenewalconsider[".list"] = true;
}



$tdataresearchrenewalconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchrenewalconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchrenewalconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchrenewalconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchrenewalconsider[".printFriendly"] = true;
}



$tdataresearchrenewalconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchrenewalconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchrenewalconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchrenewalconsider[".isUseAjaxSuggest"] = true;

$tdataresearchrenewalconsider[".rowHighlite"] = true;





$tdataresearchrenewalconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchrenewalconsider[".buttonsAdded"] = false;

$tdataresearchrenewalconsider[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchrenewalconsider[".isUseTimeForSearch"] = false;


$tdataresearchrenewalconsider[".badgeColor"] = "8fbc8b";


$tdataresearchrenewalconsider[".allSearchFields"] = array();
$tdataresearchrenewalconsider[".filterFields"] = array();
$tdataresearchrenewalconsider[".requiredSearchFields"] = array();

$tdataresearchrenewalconsider[".googleLikeFields"] = array();
$tdataresearchrenewalconsider[".googleLikeFields"][] = "id";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchRenewalID";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "processName";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "stepName";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderFileCheck";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchRegisterDescCheck";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderValue";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchrenewalconsider[".tableType"] = "list";

$tdataresearchrenewalconsider[".printerPageOrientation"] = 0;
$tdataresearchrenewalconsider[".nPrinterPageScale"] = 100;

$tdataresearchrenewalconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchrenewalconsider[".geocodingEnabled"] = false;










$tdataresearchrenewalconsider[".pageSize"] = 20;

$tdataresearchrenewalconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchrenewalconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchrenewalconsider[".orderindexes"] = array();


$tdataresearchrenewalconsider[".sqlHead"] = "SELECT id,  	researchRenewalID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchConsiderFileCheck,  	researchRegisterDesc,  	researchRegisterDescCheck,  	researchConsiderName,  	researchConsiderValue,  	entryUserName,  	entryTime";
$tdataresearchrenewalconsider[".sqlFrom"] = "FROM researchRenewalConsider";
$tdataresearchrenewalconsider[".sqlWhereExpr"] = "";
$tdataresearchrenewalconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchrenewalconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchrenewalconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchrenewalconsider[".highlightSearchResults"] = true;

$tableKeysresearchrenewalconsider = array();
$tableKeysresearchrenewalconsider[] = "id";
$tdataresearchrenewalconsider[".Keys"] = $tableKeysresearchrenewalconsider;


$tdataresearchrenewalconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","id");
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


	$tdataresearchrenewalconsider["id"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "id";
//	researchRenewalID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRenewalID";
	$fdata["GoodName"] = "researchRenewalID";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchRenewalID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRenewalID";

		$fdata["sourceSingle"] = "researchRenewalID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRenewalID";

	
	
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


	$tdataresearchrenewalconsider["researchRenewalID"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchRenewalID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchConsiderNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderNumber";

		$fdata["sourceSingle"] = "researchConsiderNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderNumber";

	
	
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


	$tdataresearchrenewalconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","processName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "processName";

		$fdata["sourceSingle"] = "processName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "processName";

	
	
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


	$tdataresearchrenewalconsider["processName"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","stepName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stepName";

		$fdata["sourceSingle"] = "stepName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stepName";

	
	
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


	$tdataresearchrenewalconsider["stepName"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchConsiderFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchConsiderFile";

		$fdata["sourceSingle"] = "researchConsiderFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderFile";

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


	$tdataresearchrenewalconsider["researchConsiderFile"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchConsiderFile";
//	researchConsiderFileCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFileCheck";
	$fdata["GoodName"] = "researchConsiderFileCheck";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchConsiderFileCheck");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderFileCheck";

		$fdata["sourceSingle"] = "researchConsiderFileCheck";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderFileCheck";

	
	
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


	$tdataresearchrenewalconsider["researchConsiderFileCheck"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchConsiderFileCheck";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchRegisterDesc");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchRegisterDesc";

		$fdata["sourceSingle"] = "researchRegisterDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterDesc";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataresearchrenewalconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchRegisterDescCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchRegisterDescCheck";
	$fdata["GoodName"] = "researchRegisterDescCheck";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchRegisterDescCheck");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRegisterDescCheck";

		$fdata["sourceSingle"] = "researchRegisterDescCheck";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterDescCheck";

	
	
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


	$tdataresearchrenewalconsider["researchRegisterDescCheck"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchRegisterDescCheck";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchConsiderName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderName";

		$fdata["sourceSingle"] = "researchConsiderName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderName";

	
	
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
	$edata["LookupTable"] = "optionSub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID = 2";


	
	$edata["LookupOrderBy"] = "optionName";

	
	
	
	

	
	
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


	$tdataresearchrenewalconsider["researchConsiderName"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchConsiderName";
//	researchConsiderValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchConsiderValue";
	$fdata["GoodName"] = "researchConsiderValue";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","researchConsiderValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderValue";

		$fdata["sourceSingle"] = "researchConsiderValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderValue";

	
	
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
	$edata["LookupTable"] = "considerChoice";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ChoiceName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ChoiceName";

				$edata["LookupWhere"] = "(ChoiceType='researchRenewalConsider') AND (ConsiderID = ':id')";


	
	$edata["LookupOrderBy"] = "ChoiceName";

	
	
	
	

	
	
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


	$tdataresearchrenewalconsider["researchConsiderValue"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "researchConsiderValue";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","entryUserName");
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


	$tdataresearchrenewalconsider["entryUserName"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRenewalConsider";
	$fdata["Label"] = GetFieldLabel("researchRenewalConsider","entryTime");
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


	$tdataresearchrenewalconsider["entryTime"] = $fdata;
		$tdataresearchrenewalconsider[".searchableFields"][] = "entryTime";


$tables_data["researchRenewalConsider"]=&$tdataresearchrenewalconsider;
$field_labels["researchRenewalConsider"] = &$fieldLabelsresearchrenewalconsider;
$fieldToolTips["researchRenewalConsider"] = &$fieldToolTipsresearchrenewalconsider;
$placeHolders["researchRenewalConsider"] = &$placeHoldersresearchrenewalconsider;
$page_titles["researchRenewalConsider"] = &$pageTitlesresearchrenewalconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchRenewalConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchRenewalConsider"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchRenewal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchRenewal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchrenewal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchRenewalConsider"][0] = $masterParams;
				$masterTablesData["researchRenewalConsider"][0]["masterKeys"] = array();
	$masterTablesData["researchRenewalConsider"][0]["masterKeys"][]="id";
				$masterTablesData["researchRenewalConsider"][0]["detailKeys"] = array();
	$masterTablesData["researchRenewalConsider"][0]["detailKeys"][]="researchRenewalID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchrenewalconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchRenewalID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchConsiderFileCheck,  	researchRegisterDesc,  	researchRegisterDescCheck,  	researchConsiderName,  	researchConsiderValue,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchRenewalConsider";
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
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchRenewalConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRenewalID",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto8["m_sql"] = "researchRenewalID";
$proto8["m_srcTableName"] = "researchRenewalConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto10["m_sql"] = "researchConsiderNumber";
$proto10["m_srcTableName"] = "researchRenewalConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto12["m_sql"] = "processName";
$proto12["m_srcTableName"] = "researchRenewalConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto14["m_sql"] = "stepName";
$proto14["m_srcTableName"] = "researchRenewalConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto16["m_sql"] = "researchConsiderFile";
$proto16["m_srcTableName"] = "researchRenewalConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFileCheck",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto18["m_sql"] = "researchConsiderFileCheck";
$proto18["m_srcTableName"] = "researchRenewalConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto20["m_sql"] = "researchRegisterDesc";
$proto20["m_srcTableName"] = "researchRenewalConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDescCheck",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto22["m_sql"] = "researchRegisterDescCheck";
$proto22["m_srcTableName"] = "researchRenewalConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto24["m_sql"] = "researchConsiderName";
$proto24["m_srcTableName"] = "researchRenewalConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderValue",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto26["m_sql"] = "researchConsiderValue";
$proto26["m_srcTableName"] = "researchRenewalConsider";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto28["m_sql"] = "entryUserName";
$proto28["m_srcTableName"] = "researchRenewalConsider";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto30["m_sql"] = "entryTime";
$proto30["m_srcTableName"] = "researchRenewalConsider";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "researchRenewalConsider";
$proto33["m_srcTableName"] = "researchRenewalConsider";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "researchRenewalID";
$proto33["m_columns"][] = "researchConsiderNumber";
$proto33["m_columns"][] = "processName";
$proto33["m_columns"][] = "stepName";
$proto33["m_columns"][] = "researchConsiderFile";
$proto33["m_columns"][] = "researchConsiderFileCheck";
$proto33["m_columns"][] = "researchRegisterDesc";
$proto33["m_columns"][] = "researchRegisterDescCheck";
$proto33["m_columns"][] = "researchConsiderName";
$proto33["m_columns"][] = "researchConsiderValue";
$proto33["m_columns"][] = "entryUserName";
$proto33["m_columns"][] = "entryTime";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "researchRenewalConsider";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "researchRenewalConsider";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchRenewalConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchrenewalconsider = createSqlQuery_researchrenewalconsider();


	
				;

													

$tdataresearchrenewalconsider[".sqlquery"] = $queryData_researchrenewalconsider;



include_once(getabspath("include/researchrenewalconsider_events.php"));
$tableEvents["researchRenewalConsider"] = new eventclass_researchrenewalconsider;
$tdataresearchrenewalconsider[".hasEvents"] = true;

?>