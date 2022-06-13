<?php
$tdataresearchdisburseconsider = array();
$tdataresearchdisburseconsider[".searchableFields"] = array();
$tdataresearchdisburseconsider[".ShortName"] = "researchdisburseconsider";
$tdataresearchdisburseconsider[".OwnerID"] = "";
$tdataresearchdisburseconsider[".OriginalTable"] = "researchDisburseConsider";


$tdataresearchdisburseconsider[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchdisburseconsider[".originalPagesByType"] = $tdataresearchdisburseconsider[".pagesByType"];
$tdataresearchdisburseconsider[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchdisburseconsider[".originalPages"] = $tdataresearchdisburseconsider[".pages"];
$tdataresearchdisburseconsider[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchdisburseconsider[".originalDefaultPages"] = $tdataresearchdisburseconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchdisburseconsider = array();
$fieldToolTipsresearchdisburseconsider = array();
$pageTitlesresearchdisburseconsider = array();
$placeHoldersresearchdisburseconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchdisburseconsider["English"] = array();
	$fieldToolTipsresearchdisburseconsider["English"] = array();
	$placeHoldersresearchdisburseconsider["English"] = array();
	$pageTitlesresearchdisburseconsider["English"] = array();
	$fieldLabelsresearchdisburseconsider["English"]["id"] = "ID";
	$fieldToolTipsresearchdisburseconsider["English"]["id"] = "";
	$placeHoldersresearchdisburseconsider["English"]["id"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["researchDisburseID"] = "Research Disburse ID";
	$fieldToolTipsresearchdisburseconsider["English"]["researchDisburseID"] = "";
	$placeHoldersresearchdisburseconsider["English"]["researchDisburseID"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchdisburseconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchdisburseconsider["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchdisburseconsider["English"]["processName"] = "";
	$placeHoldersresearchdisburseconsider["English"]["processName"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchdisburseconsider["English"]["stepName"] = "";
	$placeHoldersresearchdisburseconsider["English"]["stepName"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchdisburseconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchdisburseconsider["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchdisburseconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchdisburseconsider["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchdisburseconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchdisburseconsider["English"]["researchConsiderName"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchdisburseconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchdisburseconsider["English"]["entryUserName"] = "";
	$fieldLabelsresearchdisburseconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchdisburseconsider["English"]["entryTime"] = "";
	$placeHoldersresearchdisburseconsider["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchdisburseconsider["English"]))
		$tdataresearchdisburseconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchdisburseconsider["Thai"] = array();
	$fieldToolTipsresearchdisburseconsider["Thai"] = array();
	$placeHoldersresearchdisburseconsider["Thai"] = array();
	$pageTitlesresearchdisburseconsider["Thai"] = array();
	$fieldLabelsresearchdisburseconsider["Thai"]["id"] = "ID";
	$fieldToolTipsresearchdisburseconsider["Thai"]["id"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["id"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchdisburseconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchdisburseconsider["Thai"]["processName"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["processName"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchdisburseconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["stepName"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchdisburseconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchdisburseconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["researchConsiderName"] = "การพิจารณา";
	$fieldToolTipsresearchdisburseconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["researchConsiderName"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchdisburseconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchdisburseconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["entryTime"] = "";
	$fieldLabelsresearchdisburseconsider["Thai"]["researchDisburseID"] = "DISBURSE_ID";
	$fieldToolTipsresearchdisburseconsider["Thai"]["researchDisburseID"] = "";
	$placeHoldersresearchdisburseconsider["Thai"]["researchDisburseID"] = "";
	if (count($fieldToolTipsresearchdisburseconsider["Thai"]))
		$tdataresearchdisburseconsider[".isUseToolTips"] = true;
}


	$tdataresearchdisburseconsider[".NCSearch"] = true;



$tdataresearchdisburseconsider[".shortTableName"] = "researchdisburseconsider";
$tdataresearchdisburseconsider[".nSecOptions"] = 0;

$tdataresearchdisburseconsider[".mainTableOwnerID"] = "";
$tdataresearchdisburseconsider[".entityType"] = 0;
$tdataresearchdisburseconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchdisburseconsider[".strOriginalTableName"] = "researchDisburseConsider";

	



$tdataresearchdisburseconsider[".showAddInPopup"] = false;

$tdataresearchdisburseconsider[".showEditInPopup"] = false;

$tdataresearchdisburseconsider[".showViewInPopup"] = false;

$tdataresearchdisburseconsider[".listAjax"] = false;
//	temporary
//$tdataresearchdisburseconsider[".listAjax"] = false;

	$tdataresearchdisburseconsider[".audit"] = false;

	$tdataresearchdisburseconsider[".locking"] = false;


$pages = $tdataresearchdisburseconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchdisburseconsider[".edit"] = true;
	$tdataresearchdisburseconsider[".afterEditAction"] = 1;
	$tdataresearchdisburseconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchdisburseconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchdisburseconsider[".add"] = true;
$tdataresearchdisburseconsider[".afterAddAction"] = 1;
$tdataresearchdisburseconsider[".closePopupAfterAdd"] = 1;
$tdataresearchdisburseconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchdisburseconsider[".list"] = true;
}



$tdataresearchdisburseconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchdisburseconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchdisburseconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchdisburseconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchdisburseconsider[".printFriendly"] = true;
}



$tdataresearchdisburseconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchdisburseconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchdisburseconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchdisburseconsider[".isUseAjaxSuggest"] = true;

$tdataresearchdisburseconsider[".rowHighlite"] = true;





$tdataresearchdisburseconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchdisburseconsider[".buttonsAdded"] = false;

$tdataresearchdisburseconsider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchdisburseconsider[".isUseTimeForSearch"] = false;


$tdataresearchdisburseconsider[".badgeColor"] = "8fbc8b";


$tdataresearchdisburseconsider[".allSearchFields"] = array();
$tdataresearchdisburseconsider[".filterFields"] = array();
$tdataresearchdisburseconsider[".requiredSearchFields"] = array();

$tdataresearchdisburseconsider[".googleLikeFields"] = array();
$tdataresearchdisburseconsider[".googleLikeFields"][] = "id";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "researchDisburseID";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "processName";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "stepName";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchdisburseconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchdisburseconsider[".tableType"] = "list";

$tdataresearchdisburseconsider[".printerPageOrientation"] = 0;
$tdataresearchdisburseconsider[".nPrinterPageScale"] = 100;

$tdataresearchdisburseconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchdisburseconsider[".geocodingEnabled"] = false;










$tdataresearchdisburseconsider[".pageSize"] = 20;

$tdataresearchdisburseconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchdisburseconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchdisburseconsider[".orderindexes"] = array();


$tdataresearchdisburseconsider[".sqlHead"] = "SELECT id,  	researchDisburseID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$tdataresearchdisburseconsider[".sqlFrom"] = "FROM researchDisburseConsider";
$tdataresearchdisburseconsider[".sqlWhereExpr"] = "";
$tdataresearchdisburseconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchdisburseconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchdisburseconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchdisburseconsider[".highlightSearchResults"] = true;

$tableKeysresearchdisburseconsider = array();
$tableKeysresearchdisburseconsider[] = "id";
$tdataresearchdisburseconsider[".Keys"] = $tableKeysresearchdisburseconsider;


$tdataresearchdisburseconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","id");
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


	$tdataresearchdisburseconsider["id"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "id";
//	researchDisburseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchDisburseID";
	$fdata["GoodName"] = "researchDisburseID";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","researchDisburseID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchDisburseID";

		$fdata["sourceSingle"] = "researchDisburseID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchDisburseID";

	
	
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


	$tdataresearchdisburseconsider["researchDisburseID"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "researchDisburseID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","researchConsiderNumber");
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


	$tdataresearchdisburseconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","processName");
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


	$tdataresearchdisburseconsider["processName"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","stepName");
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresearchdisburseconsider["stepName"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","researchConsiderFile");
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


	$tdataresearchdisburseconsider["researchConsiderFile"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","researchRegisterDesc");
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


	$tdataresearchdisburseconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","researchConsiderName");
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


	$tdataresearchdisburseconsider["researchConsiderName"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "researchConsiderName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","entryUserName");
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


	$tdataresearchdisburseconsider["entryUserName"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchDisburseConsider";
	$fdata["Label"] = GetFieldLabel("researchDisburseConsider","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
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


	$tdataresearchdisburseconsider["entryTime"] = $fdata;
		$tdataresearchdisburseconsider[".searchableFields"][] = "entryTime";


$tables_data["researchDisburseConsider"]=&$tdataresearchdisburseconsider;
$field_labels["researchDisburseConsider"] = &$fieldLabelsresearchdisburseconsider;
$fieldToolTips["researchDisburseConsider"] = &$fieldToolTipsresearchdisburseconsider;
$placeHolders["researchDisburseConsider"] = &$placeHoldersresearchdisburseconsider;
$page_titles["researchDisburseConsider"] = &$pageTitlesresearchdisburseconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchDisburseConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchDisburseConsider"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchOperatingPeriod";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchDisburse";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchdisburse";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchDisburseConsider"][0] = $masterParams;
				$masterTablesData["researchDisburseConsider"][0]["masterKeys"] = array();
	$masterTablesData["researchDisburseConsider"][0]["masterKeys"][]="id";
				$masterTablesData["researchDisburseConsider"][0]["detailKeys"] = array();
	$masterTablesData["researchDisburseConsider"][0]["detailKeys"][]="researchDisburseID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchdisburseconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchDisburseID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchDisburseConsider";
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
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchDisburseConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchDisburseID",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto8["m_sql"] = "researchDisburseID";
$proto8["m_srcTableName"] = "researchDisburseConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto10["m_sql"] = "researchConsiderNumber";
$proto10["m_srcTableName"] = "researchDisburseConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto12["m_sql"] = "processName";
$proto12["m_srcTableName"] = "researchDisburseConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto14["m_sql"] = "stepName";
$proto14["m_srcTableName"] = "researchDisburseConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto16["m_sql"] = "researchConsiderFile";
$proto16["m_srcTableName"] = "researchDisburseConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto18["m_sql"] = "researchRegisterDesc";
$proto18["m_srcTableName"] = "researchDisburseConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto20["m_sql"] = "researchConsiderName";
$proto20["m_srcTableName"] = "researchDisburseConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchDisburseConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchDisburseConsider",
	"m_srcTableName" => "researchDisburseConsider"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchDisburseConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchDisburseConsider";
$proto27["m_srcTableName"] = "researchDisburseConsider";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "researchDisburseID";
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
$proto26["m_sql"] = "researchDisburseConsider";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "researchDisburseConsider";
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
$proto0["m_srcTableName"]="researchDisburseConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchdisburseconsider = createSqlQuery_researchdisburseconsider();


	
				;

										

$tdataresearchdisburseconsider[".sqlquery"] = $queryData_researchdisburseconsider;



$tableEvents["researchDisburseConsider"] = new eventsBase;
$tdataresearchdisburseconsider[".hasEvents"] = false;

?>