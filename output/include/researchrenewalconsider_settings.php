<?php
$tdataresearchrenewalconsider = array();
$tdataresearchrenewalconsider[".searchableFields"] = array();
$tdataresearchrenewalconsider[".ShortName"] = "researchrenewalconsider";
$tdataresearchrenewalconsider[".OwnerID"] = "";
$tdataresearchrenewalconsider[".OriginalTable"] = "researchRenewalConsider";


$tdataresearchrenewalconsider[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchrenewalconsider[".originalPagesByType"] = $tdataresearchrenewalconsider[".pagesByType"];
$tdataresearchrenewalconsider[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchrenewalconsider[".originalPages"] = $tdataresearchrenewalconsider[".pages"];
$tdataresearchrenewalconsider[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$placeHoldersresearchrenewalconsider["English"]["id"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldToolTipsresearchrenewalconsider["English"]["researchRenewalID"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchRenewalID"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchrenewalconsider["English"]["processName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["processName"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchrenewalconsider["English"]["stepName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["stepName"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchrenewalconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchrenewalconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["researchConsiderName"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchrenewalconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchrenewalconsider["English"]["entryUserName"] = "";
	$fieldLabelsresearchrenewalconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchrenewalconsider["English"]["entryTime"] = "";
	$placeHoldersresearchrenewalconsider["English"]["entryTime"] = "";
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
	$placeHoldersresearchrenewalconsider["Thai"]["id"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchRenewalID"] = "RENEWAL_ID";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchRenewalID"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchRenewalID"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["processName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["processName"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchrenewalconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["stepName"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["researchConsiderName"] = "การพิจารณา";
	$fieldToolTipsresearchrenewalconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["researchConsiderName"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchrenewalconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchrenewalconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchrenewalconsider["Thai"]["entryTime"] = "";
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

	$tdataresearchrenewalconsider[".audit"] = false;

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

$tdataresearchrenewalconsider[".addPageEvents"] = false;

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
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchrenewalconsider[".googleLikeFields"][] = "researchConsiderName";
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


$tdataresearchrenewalconsider[".sqlHead"] = "SELECT id,  	researchRenewalID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
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
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	$edata["LookupTable"] = "consider";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "considerName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "considerName";

	

	
	$edata["LookupOrderBy"] = "considerName";

	
	
	
	

	
	
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
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	$fdata["Index"] = 10;
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
$proto0["m_strFieldList"] = "id,  	researchRenewalID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
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
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto18["m_sql"] = "researchRegisterDesc";
$proto18["m_srcTableName"] = "researchRenewalConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto20["m_sql"] = "researchConsiderName";
$proto20["m_srcTableName"] = "researchRenewalConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchRenewalConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRenewalConsider",
	"m_srcTableName" => "researchRenewalConsider"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchRenewalConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchRenewalConsider";
$proto27["m_srcTableName"] = "researchRenewalConsider";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "researchRenewalID";
$proto27["m_columns"][] = "researchConsiderNumber";
$proto27["m_columns"][] = "processName";
$proto27["m_columns"][] = "stepName";
$proto27["m_columns"][] = "researchConsiderFile";
$proto27["m_columns"][] = "researchRegisterDesc";
$proto27["m_columns"][] = "researchConsiderName";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "entryTime";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "researchRenewalConsider";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "researchRenewalConsider";
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
$proto0["m_srcTableName"]="researchRenewalConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchrenewalconsider = createSqlQuery_researchrenewalconsider();


	
				;

										

$tdataresearchrenewalconsider[".sqlquery"] = $queryData_researchrenewalconsider;



$tableEvents["researchRenewalConsider"] = new eventsBase;
$tdataresearchrenewalconsider[".hasEvents"] = false;

?>