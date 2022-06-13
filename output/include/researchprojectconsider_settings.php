<?php
$tdataresearchprojectconsider = array();
$tdataresearchprojectconsider[".searchableFields"] = array();
$tdataresearchprojectconsider[".ShortName"] = "researchprojectconsider";
$tdataresearchprojectconsider[".OwnerID"] = "";
$tdataresearchprojectconsider[".OriginalTable"] = "researchProjectConsider";


$tdataresearchprojectconsider[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresearchprojectconsider[".originalPagesByType"] = $tdataresearchprojectconsider[".pagesByType"];
$tdataresearchprojectconsider[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresearchprojectconsider[".originalPages"] = $tdataresearchprojectconsider[".pages"];
$tdataresearchprojectconsider[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresearchprojectconsider[".originalDefaultPages"] = $tdataresearchprojectconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchprojectconsider = array();
$fieldToolTipsresearchprojectconsider = array();
$pageTitlesresearchprojectconsider = array();
$placeHoldersresearchprojectconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchprojectconsider["English"] = array();
	$fieldToolTipsresearchprojectconsider["English"] = array();
	$placeHoldersresearchprojectconsider["English"] = array();
	$pageTitlesresearchprojectconsider["English"] = array();
	$fieldLabelsresearchprojectconsider["English"]["id"] = "Id";
	$fieldToolTipsresearchprojectconsider["English"]["id"] = "";
	$placeHoldersresearchprojectconsider["English"]["id"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchprojectconsider["English"]["researchTypeID"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchTypeID"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchprojectconsider["English"]["researchProjectID"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchProjectID"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchprojectconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchprojectconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchprojectconsider["English"]["processName"] = "";
	$placeHoldersresearchprojectconsider["English"]["processName"] = "";
	$fieldLabelsresearchprojectconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchprojectconsider["English"]["stepName"] = "";
	$placeHoldersresearchprojectconsider["English"]["stepName"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchprojectconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchprojectconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchprojectconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchprojectconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchprojectconsider["English"]["researchConsiderName"] = "";
	$fieldLabelsresearchprojectconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectconsider["English"]["entryUserName"] = "";
	$fieldLabelsresearchprojectconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectconsider["English"]["entryTime"] = "";
	$placeHoldersresearchprojectconsider["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectconsider["English"]))
		$tdataresearchprojectconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchprojectconsider["Thai"] = array();
	$fieldToolTipsresearchprojectconsider["Thai"] = array();
	$placeHoldersresearchprojectconsider["Thai"] = array();
	$pageTitlesresearchprojectconsider["Thai"] = array();
	$fieldLabelsresearchprojectconsider["Thai"]["id"] = "Id";
	$fieldToolTipsresearchprojectconsider["Thai"]["id"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["id"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchTypeID"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchTypeID"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchProjectID"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["processName"] = "Process Name";
	$fieldToolTipsresearchprojectconsider["Thai"]["processName"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["processName"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["stepName"] = "Step Name";
	$fieldToolTipsresearchprojectconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["stepName"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchprojectconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["researchConsiderName"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchprojectconsider["Thai"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectconsider["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectconsider["Thai"]))
		$tdataresearchprojectconsider[".isUseToolTips"] = true;
}


	$tdataresearchprojectconsider[".NCSearch"] = true;



$tdataresearchprojectconsider[".shortTableName"] = "researchprojectconsider";
$tdataresearchprojectconsider[".nSecOptions"] = 0;

$tdataresearchprojectconsider[".mainTableOwnerID"] = "";
$tdataresearchprojectconsider[".entityType"] = 0;
$tdataresearchprojectconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchprojectconsider[".strOriginalTableName"] = "researchProjectConsider";

	



$tdataresearchprojectconsider[".showAddInPopup"] = false;

$tdataresearchprojectconsider[".showEditInPopup"] = false;

$tdataresearchprojectconsider[".showViewInPopup"] = false;

$tdataresearchprojectconsider[".listAjax"] = false;
//	temporary
//$tdataresearchprojectconsider[".listAjax"] = false;

	$tdataresearchprojectconsider[".audit"] = false;

	$tdataresearchprojectconsider[".locking"] = false;


$pages = $tdataresearchprojectconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchprojectconsider[".edit"] = true;
	$tdataresearchprojectconsider[".afterEditAction"] = 1;
	$tdataresearchprojectconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchprojectconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchprojectconsider[".add"] = true;
$tdataresearchprojectconsider[".afterAddAction"] = 1;
$tdataresearchprojectconsider[".closePopupAfterAdd"] = 1;
$tdataresearchprojectconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchprojectconsider[".list"] = true;
}



$tdataresearchprojectconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchprojectconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchprojectconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchprojectconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchprojectconsider[".printFriendly"] = true;
}



$tdataresearchprojectconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchprojectconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchprojectconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchprojectconsider[".isUseAjaxSuggest"] = true;

$tdataresearchprojectconsider[".rowHighlite"] = true;





$tdataresearchprojectconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchprojectconsider[".buttonsAdded"] = false;

$tdataresearchprojectconsider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchprojectconsider[".isUseTimeForSearch"] = false;


$tdataresearchprojectconsider[".badgeColor"] = "6DA5C8";


$tdataresearchprojectconsider[".allSearchFields"] = array();
$tdataresearchprojectconsider[".filterFields"] = array();
$tdataresearchprojectconsider[".requiredSearchFields"] = array();

$tdataresearchprojectconsider[".googleLikeFields"] = array();
$tdataresearchprojectconsider[".googleLikeFields"][] = "id";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchTypeID";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchProjectID";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchprojectconsider[".googleLikeFields"][] = "processName";
$tdataresearchprojectconsider[".googleLikeFields"][] = "stepName";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchprojectconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchprojectconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchprojectconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchprojectconsider[".tableType"] = "list";

$tdataresearchprojectconsider[".printerPageOrientation"] = 0;
$tdataresearchprojectconsider[".nPrinterPageScale"] = 100;

$tdataresearchprojectconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchprojectconsider[".geocodingEnabled"] = false;










$tdataresearchprojectconsider[".pageSize"] = 20;

$tdataresearchprojectconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchprojectconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchprojectconsider[".orderindexes"] = array();


$tdataresearchprojectconsider[".sqlHead"] = "SELECT id,  	researchTypeID,  	researchProjectID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$tdataresearchprojectconsider[".sqlFrom"] = "FROM researchProjectConsider";
$tdataresearchprojectconsider[".sqlWhereExpr"] = "";
$tdataresearchprojectconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchprojectconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchprojectconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchprojectconsider[".highlightSearchResults"] = true;

$tableKeysresearchprojectconsider = array();
$tableKeysresearchprojectconsider[] = "id";
$tdataresearchprojectconsider[".Keys"] = $tableKeysresearchprojectconsider;


$tdataresearchprojectconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","id");
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


	$tdataresearchprojectconsider["id"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "id";
//	researchTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchTypeID";
	$fdata["GoodName"] = "researchTypeID";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchTypeID");
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


	$tdataresearchprojectconsider["researchTypeID"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchTypeID";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchProjectID");
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


	$tdataresearchprojectconsider["researchProjectID"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchProjectID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchConsiderNumber");
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


	$tdataresearchprojectconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","processName");
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


	$tdataresearchprojectconsider["processName"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","stepName");
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


	$tdataresearchprojectconsider["stepName"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchConsiderFile");
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


	$tdataresearchprojectconsider["researchConsiderFile"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchRegisterDesc");
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


	$tdataresearchprojectconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","researchConsiderName");
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


	$tdataresearchprojectconsider["researchConsiderName"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "researchConsiderName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","entryUserName");
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


	$tdataresearchprojectconsider["entryUserName"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchProjectConsider";
	$fdata["Label"] = GetFieldLabel("researchProjectConsider","entryTime");
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


	$tdataresearchprojectconsider["entryTime"] = $fdata;
		$tdataresearchprojectconsider[".searchableFields"][] = "entryTime";


$tables_data["researchProjectConsider"]=&$tdataresearchprojectconsider;
$field_labels["researchProjectConsider"] = &$fieldLabelsresearchprojectconsider;
$fieldToolTips["researchProjectConsider"] = &$fieldToolTipsresearchprojectconsider;
$placeHolders["researchProjectConsider"] = &$placeHoldersresearchprojectconsider;
$page_titles["researchProjectConsider"] = &$pageTitlesresearchprojectconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProjectConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectConsider"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchTypeID,  	researchProjectID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchProjectConsider";
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
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProjectConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto8["m_sql"] = "researchTypeID";
$proto8["m_srcTableName"] = "researchProjectConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto10["m_sql"] = "researchProjectID";
$proto10["m_srcTableName"] = "researchProjectConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto12["m_sql"] = "researchConsiderNumber";
$proto12["m_srcTableName"] = "researchProjectConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto14["m_sql"] = "processName";
$proto14["m_srcTableName"] = "researchProjectConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto16["m_sql"] = "stepName";
$proto16["m_srcTableName"] = "researchProjectConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto18["m_sql"] = "researchConsiderFile";
$proto18["m_srcTableName"] = "researchProjectConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto20["m_sql"] = "researchRegisterDesc";
$proto20["m_srcTableName"] = "researchProjectConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto22["m_sql"] = "researchConsiderName";
$proto22["m_srcTableName"] = "researchProjectConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "researchProjectConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchProjectConsider",
	"m_srcTableName" => "researchProjectConsider"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "researchProjectConsider";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "researchProjectConsider";
$proto29["m_srcTableName"] = "researchProjectConsider";
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
$proto28["m_sql"] = "researchProjectConsider";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "researchProjectConsider";
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
$proto0["m_srcTableName"]="researchProjectConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchprojectconsider = createSqlQuery_researchprojectconsider();


	
				;

											

$tdataresearchprojectconsider[".sqlquery"] = $queryData_researchprojectconsider;



$tableEvents["researchProjectConsider"] = new eventsBase;
$tdataresearchprojectconsider[".hasEvents"] = false;

?>