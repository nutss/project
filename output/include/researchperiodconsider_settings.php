<?php
$tdataresearchperiodconsider = array();
$tdataresearchperiodconsider[".searchableFields"] = array();
$tdataresearchperiodconsider[".ShortName"] = "researchperiodconsider";
$tdataresearchperiodconsider[".OwnerID"] = "";
$tdataresearchperiodconsider[".OriginalTable"] = "researchPeriodConsider";


$tdataresearchperiodconsider[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresearchperiodconsider[".originalPagesByType"] = $tdataresearchperiodconsider[".pagesByType"];
$tdataresearchperiodconsider[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresearchperiodconsider[".originalPages"] = $tdataresearchperiodconsider[".pages"];
$tdataresearchperiodconsider[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresearchperiodconsider[".originalDefaultPages"] = $tdataresearchperiodconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchperiodconsider = array();
$fieldToolTipsresearchperiodconsider = array();
$pageTitlesresearchperiodconsider = array();
$placeHoldersresearchperiodconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchperiodconsider["English"] = array();
	$fieldToolTipsresearchperiodconsider["English"] = array();
	$placeHoldersresearchperiodconsider["English"] = array();
	$pageTitlesresearchperiodconsider["English"] = array();
	$fieldLabelsresearchperiodconsider["English"]["id"] = "Id";
	$fieldToolTipsresearchperiodconsider["English"]["id"] = "";
	$placeHoldersresearchperiodconsider["English"]["id"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchperiodconsider["English"]["researchTypeID"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchTypeID"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchperiodconsider["English"]["researchProjectID"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchProjectID"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchperiodconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchperiodconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchperiodconsider["English"]["processName"] = "";
	$placeHoldersresearchperiodconsider["English"]["processName"] = "";
	$fieldLabelsresearchperiodconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchperiodconsider["English"]["stepName"] = "";
	$placeHoldersresearchperiodconsider["English"]["stepName"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchperiodconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchperiodconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchperiodconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchperiodconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchperiodconsider["English"]["researchConsiderName"] = "";
	$fieldLabelsresearchperiodconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchperiodconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchperiodconsider["English"]["entryUserName"] = "";
	$fieldLabelsresearchperiodconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchperiodconsider["English"]["entryTime"] = "";
	$placeHoldersresearchperiodconsider["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchperiodconsider["English"]))
		$tdataresearchperiodconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchperiodconsider["Thai"] = array();
	$fieldToolTipsresearchperiodconsider["Thai"] = array();
	$placeHoldersresearchperiodconsider["Thai"] = array();
	$pageTitlesresearchperiodconsider["Thai"] = array();
	$fieldLabelsresearchperiodconsider["Thai"]["id"] = "Id";
	$fieldToolTipsresearchperiodconsider["Thai"]["id"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["id"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchTypeID"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchTypeID"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchProjectID"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["processName"] = "Process Name";
	$fieldToolTipsresearchperiodconsider["Thai"]["processName"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["processName"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["stepName"] = "Step Name";
	$fieldToolTipsresearchperiodconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["stepName"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchperiodconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["researchConsiderName"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchperiodconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchperiodconsider["Thai"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchperiodconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchperiodconsider["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchperiodconsider["Thai"]))
		$tdataresearchperiodconsider[".isUseToolTips"] = true;
}


	$tdataresearchperiodconsider[".NCSearch"] = true;



$tdataresearchperiodconsider[".shortTableName"] = "researchperiodconsider";
$tdataresearchperiodconsider[".nSecOptions"] = 0;

$tdataresearchperiodconsider[".mainTableOwnerID"] = "";
$tdataresearchperiodconsider[".entityType"] = 0;
$tdataresearchperiodconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchperiodconsider[".strOriginalTableName"] = "researchPeriodConsider";

	



$tdataresearchperiodconsider[".showAddInPopup"] = false;

$tdataresearchperiodconsider[".showEditInPopup"] = false;

$tdataresearchperiodconsider[".showViewInPopup"] = false;

$tdataresearchperiodconsider[".listAjax"] = false;
//	temporary
//$tdataresearchperiodconsider[".listAjax"] = false;

	$tdataresearchperiodconsider[".audit"] = false;

	$tdataresearchperiodconsider[".locking"] = false;


$pages = $tdataresearchperiodconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchperiodconsider[".edit"] = true;
	$tdataresearchperiodconsider[".afterEditAction"] = 1;
	$tdataresearchperiodconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchperiodconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchperiodconsider[".add"] = true;
$tdataresearchperiodconsider[".afterAddAction"] = 1;
$tdataresearchperiodconsider[".closePopupAfterAdd"] = 1;
$tdataresearchperiodconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchperiodconsider[".list"] = true;
}



$tdataresearchperiodconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchperiodconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchperiodconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchperiodconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchperiodconsider[".printFriendly"] = true;
}



$tdataresearchperiodconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchperiodconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchperiodconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchperiodconsider[".isUseAjaxSuggest"] = true;

$tdataresearchperiodconsider[".rowHighlite"] = true;





$tdataresearchperiodconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchperiodconsider[".buttonsAdded"] = false;

$tdataresearchperiodconsider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchperiodconsider[".isUseTimeForSearch"] = false;


$tdataresearchperiodconsider[".badgeColor"] = "B22222";


$tdataresearchperiodconsider[".allSearchFields"] = array();
$tdataresearchperiodconsider[".filterFields"] = array();
$tdataresearchperiodconsider[".requiredSearchFields"] = array();

$tdataresearchperiodconsider[".googleLikeFields"] = array();
$tdataresearchperiodconsider[".googleLikeFields"][] = "id";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchTypeID";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchProjectID";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchperiodconsider[".googleLikeFields"][] = "processName";
$tdataresearchperiodconsider[".googleLikeFields"][] = "stepName";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchperiodconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchperiodconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchperiodconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchperiodconsider[".tableType"] = "list";

$tdataresearchperiodconsider[".printerPageOrientation"] = 0;
$tdataresearchperiodconsider[".nPrinterPageScale"] = 100;

$tdataresearchperiodconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchperiodconsider[".geocodingEnabled"] = false;










$tdataresearchperiodconsider[".pageSize"] = 20;

$tdataresearchperiodconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchperiodconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchperiodconsider[".orderindexes"] = array();


$tdataresearchperiodconsider[".sqlHead"] = "SELECT id,  	researchTypeID,  	researchProjectID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$tdataresearchperiodconsider[".sqlFrom"] = "FROM researchPeriodConsider";
$tdataresearchperiodconsider[".sqlWhereExpr"] = "";
$tdataresearchperiodconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchperiodconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchperiodconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchperiodconsider[".highlightSearchResults"] = true;

$tableKeysresearchperiodconsider = array();
$tableKeysresearchperiodconsider[] = "id";
$tdataresearchperiodconsider[".Keys"] = $tableKeysresearchperiodconsider;


$tdataresearchperiodconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","id");
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


	$tdataresearchperiodconsider["id"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "id";
//	researchTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchTypeID";
	$fdata["GoodName"] = "researchTypeID";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchTypeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchTypeID";

		$fdata["sourceSingle"] = "researchTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchTypeID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataresearchperiodconsider["researchTypeID"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchTypeID";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchProjectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchProjectID";

		$fdata["sourceSingle"] = "researchProjectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataresearchperiodconsider["researchProjectID"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchProjectID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchConsiderNumber");
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


	$tdataresearchperiodconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","processName");
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


	$tdataresearchperiodconsider["processName"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","stepName");
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


	$tdataresearchperiodconsider["stepName"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchConsiderFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchConsiderFile";

		$fdata["sourceSingle"] = "researchConsiderFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderFile";

	
	
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


	$tdataresearchperiodconsider["researchConsiderFile"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchRegisterDesc");
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


	$tdataresearchperiodconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","researchConsiderName");
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


	$tdataresearchperiodconsider["researchConsiderName"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "researchConsiderName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","entryUserName");
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


	$tdataresearchperiodconsider["entryUserName"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchPeriodConsider";
	$fdata["Label"] = GetFieldLabel("researchPeriodConsider","entryTime");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataresearchperiodconsider["entryTime"] = $fdata;
		$tdataresearchperiodconsider[".searchableFields"][] = "entryTime";


$tables_data["researchPeriodConsider"]=&$tdataresearchperiodconsider;
$field_labels["researchPeriodConsider"] = &$fieldLabelsresearchperiodconsider;
$fieldToolTips["researchPeriodConsider"] = &$fieldToolTipsresearchperiodconsider;
$placeHolders["researchPeriodConsider"] = &$placeHoldersresearchperiodconsider;
$page_titles["researchPeriodConsider"] = &$pageTitlesresearchperiodconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchPeriodConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchPeriodConsider"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchperiodconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchTypeID,  	researchProjectID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchPeriodConsider";
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
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchPeriodConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto8["m_sql"] = "researchTypeID";
$proto8["m_srcTableName"] = "researchPeriodConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto10["m_sql"] = "researchProjectID";
$proto10["m_srcTableName"] = "researchPeriodConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto12["m_sql"] = "researchConsiderNumber";
$proto12["m_srcTableName"] = "researchPeriodConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto14["m_sql"] = "processName";
$proto14["m_srcTableName"] = "researchPeriodConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto16["m_sql"] = "stepName";
$proto16["m_srcTableName"] = "researchPeriodConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto18["m_sql"] = "researchConsiderFile";
$proto18["m_srcTableName"] = "researchPeriodConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto20["m_sql"] = "researchRegisterDesc";
$proto20["m_srcTableName"] = "researchPeriodConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto22["m_sql"] = "researchConsiderName";
$proto22["m_srcTableName"] = "researchPeriodConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "researchPeriodConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchPeriodConsider",
	"m_srcTableName" => "researchPeriodConsider"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "researchPeriodConsider";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "researchPeriodConsider";
$proto29["m_srcTableName"] = "researchPeriodConsider";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "researchTypeID";
$proto29["m_columns"][] = "researchProjectID";
$proto29["m_columns"][] = "researchConsiderNumber";
$proto29["m_columns"][] = "processName";
$proto29["m_columns"][] = "stepName";
$proto29["m_columns"][] = "researchConsiderFile";
$proto29["m_columns"][] = "researchRegisterDesc";
$proto29["m_columns"][] = "researchConsiderName";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "researchPeriodConsider";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "researchPeriodConsider";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchPeriodConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchperiodconsider = createSqlQuery_researchperiodconsider();


	
				;

											

$tdataresearchperiodconsider[".sqlquery"] = $queryData_researchperiodconsider;



$tableEvents["researchPeriodConsider"] = new eventsBase;
$tdataresearchperiodconsider[".hasEvents"] = false;

?>