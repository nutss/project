<?php
$tdataresearchappointmentconsider = array();
$tdataresearchappointmentconsider[".searchableFields"] = array();
$tdataresearchappointmentconsider[".ShortName"] = "researchappointmentconsider";
$tdataresearchappointmentconsider[".OwnerID"] = "";
$tdataresearchappointmentconsider[".OriginalTable"] = "researchAppointmentConsider";


$tdataresearchappointmentconsider[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchappointmentconsider[".originalPagesByType"] = $tdataresearchappointmentconsider[".pagesByType"];
$tdataresearchappointmentconsider[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchappointmentconsider[".originalPages"] = $tdataresearchappointmentconsider[".pages"];
$tdataresearchappointmentconsider[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchappointmentconsider[".originalDefaultPages"] = $tdataresearchappointmentconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchappointmentconsider = array();
$fieldToolTipsresearchappointmentconsider = array();
$pageTitlesresearchappointmentconsider = array();
$placeHoldersresearchappointmentconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchappointmentconsider["English"] = array();
	$fieldToolTipsresearchappointmentconsider["English"] = array();
	$placeHoldersresearchappointmentconsider["English"] = array();
	$pageTitlesresearchappointmentconsider["English"] = array();
	$fieldLabelsresearchappointmentconsider["English"]["id"] = "ID";
	$fieldToolTipsresearchappointmentconsider["English"]["id"] = "";
	$placeHoldersresearchappointmentconsider["English"]["id"] = "ID";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldLabelsresearchappointmentconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchappointmentconsider["English"]["processName"] = "";
	$placeHoldersresearchappointmentconsider["English"]["processName"] = "Process Name";
	$fieldLabelsresearchappointmentconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchappointmentconsider["English"]["stepName"] = "";
	$placeHoldersresearchappointmentconsider["English"]["stepName"] = "Step Name";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldLabelsresearchappointmentconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchappointmentconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldLabelsresearchappointmentconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchappointmentconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchappointmentconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchappointmentconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchappointmentconsider["English"]["entryTime"] = "";
	$placeHoldersresearchappointmentconsider["English"]["entryTime"] = "Entry Time";
	$fieldLabelsresearchappointmentconsider["English"]["researchAppointmentID"] = "APPOINTMENT_ID";
	$fieldToolTipsresearchappointmentconsider["English"]["researchAppointmentID"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchAppointmentID"] = "APPOINTMENT_ID";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderValue"] = "Research Consider Value";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderValue"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderValue"] = "Research Consider Value";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderFileCheck"] = "Research Consider File Check";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderFileCheck"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderFileCheck"] = "";
	$fieldLabelsresearchappointmentconsider["English"]["researchRegisterDescCheck"] = "Research Register Desc Check";
	$fieldToolTipsresearchappointmentconsider["English"]["researchRegisterDescCheck"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchRegisterDescCheck"] = "";
	$fieldLabelsresearchappointmentconsider["English"]["researchConsiderGroupAuthorized"] = "Research Consider Group Authorized";
	$fieldToolTipsresearchappointmentconsider["English"]["researchConsiderGroupAuthorized"] = "";
	$placeHoldersresearchappointmentconsider["English"]["researchConsiderGroupAuthorized"] = "";
	if (count($fieldToolTipsresearchappointmentconsider["English"]))
		$tdataresearchappointmentconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchappointmentconsider["Thai"] = array();
	$fieldToolTipsresearchappointmentconsider["Thai"] = array();
	$placeHoldersresearchappointmentconsider["Thai"] = array();
	$pageTitlesresearchappointmentconsider["Thai"] = array();
	$fieldLabelsresearchappointmentconsider["Thai"]["id"] = "ID";
	$fieldToolTipsresearchappointmentconsider["Thai"]["id"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["id"] = "ID";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderNumber"] = "??????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderNumber"] = "??????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["processName"] = "???????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["processName"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["processName"] = "???????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["stepName"] = "?????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["stepName"] = "?????????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderFile"] = "???????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderFile"] = "???????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchRegisterDesc"] = "????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchRegisterDesc"] = "????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderName"] = "????????????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderName"] = "??????????????????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["entryUserName"] = "?????????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["entryUserName"] = "?????????????????????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["entryTime"] = "??????????????????/????????????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["entryTime"] = "??????????????????/????????????????????????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchAppointmentID"] = "APPOINTMENT_ID";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchAppointmentID"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchAppointmentID"] = "APPOINTMENT_ID";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderValue"] = "????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderValue"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderValue"] = "???????????????????????????????????????";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderFileCheck"] = "????????????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderFileCheck"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderFileCheck"] = "";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchRegisterDescCheck"] = "?????????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchRegisterDescCheck"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchRegisterDescCheck"] = "";
	$fieldLabelsresearchappointmentconsider["Thai"]["researchConsiderGroupAuthorized"] = "??????????????????????????????????????????";
	$fieldToolTipsresearchappointmentconsider["Thai"]["researchConsiderGroupAuthorized"] = "";
	$placeHoldersresearchappointmentconsider["Thai"]["researchConsiderGroupAuthorized"] = "";
	if (count($fieldToolTipsresearchappointmentconsider["Thai"]))
		$tdataresearchappointmentconsider[".isUseToolTips"] = true;
}


	$tdataresearchappointmentconsider[".NCSearch"] = true;



$tdataresearchappointmentconsider[".shortTableName"] = "researchappointmentconsider";
$tdataresearchappointmentconsider[".nSecOptions"] = 0;

$tdataresearchappointmentconsider[".mainTableOwnerID"] = "";
$tdataresearchappointmentconsider[".entityType"] = 0;
$tdataresearchappointmentconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchappointmentconsider[".strOriginalTableName"] = "researchAppointmentConsider";

	



$tdataresearchappointmentconsider[".showAddInPopup"] = false;

$tdataresearchappointmentconsider[".showEditInPopup"] = false;

$tdataresearchappointmentconsider[".showViewInPopup"] = false;

$tdataresearchappointmentconsider[".listAjax"] = false;
//	temporary
//$tdataresearchappointmentconsider[".listAjax"] = false;

	$tdataresearchappointmentconsider[".audit"] = true;

	$tdataresearchappointmentconsider[".locking"] = false;


$pages = $tdataresearchappointmentconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchappointmentconsider[".edit"] = true;
	$tdataresearchappointmentconsider[".afterEditAction"] = 1;
	$tdataresearchappointmentconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchappointmentconsider[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchappointmentconsider[".add"] = true;
$tdataresearchappointmentconsider[".afterAddAction"] = 1;
$tdataresearchappointmentconsider[".closePopupAfterAdd"] = 1;
$tdataresearchappointmentconsider[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchappointmentconsider[".list"] = true;
}



$tdataresearchappointmentconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchappointmentconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchappointmentconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchappointmentconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchappointmentconsider[".printFriendly"] = true;
}



$tdataresearchappointmentconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchappointmentconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchappointmentconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchappointmentconsider[".isUseAjaxSuggest"] = true;

$tdataresearchappointmentconsider[".rowHighlite"] = true;



												

$tdataresearchappointmentconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchappointmentconsider[".buttonsAdded"] = false;

$tdataresearchappointmentconsider[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchappointmentconsider[".isUseTimeForSearch"] = false;


$tdataresearchappointmentconsider[".badgeColor"] = "8fbc8b";


$tdataresearchappointmentconsider[".allSearchFields"] = array();
$tdataresearchappointmentconsider[".filterFields"] = array();
$tdataresearchappointmentconsider[".requiredSearchFields"] = array();

$tdataresearchappointmentconsider[".googleLikeFields"] = array();
$tdataresearchappointmentconsider[".googleLikeFields"][] = "id";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchAppointmentID";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "processName";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "stepName";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderFileCheck";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchRegisterDescCheck";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderValue";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "researchConsiderGroupAuthorized";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchappointmentconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchappointmentconsider[".tableType"] = "list";

$tdataresearchappointmentconsider[".printerPageOrientation"] = 0;
$tdataresearchappointmentconsider[".nPrinterPageScale"] = 100;

$tdataresearchappointmentconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchappointmentconsider[".geocodingEnabled"] = false;










$tdataresearchappointmentconsider[".pageSize"] = 20;

$tdataresearchappointmentconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchappointmentconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchappointmentconsider[".orderindexes"] = array();


$tdataresearchappointmentconsider[".sqlHead"] = "SELECT id,  	researchAppointmentID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchConsiderFileCheck,  	researchRegisterDesc,  	researchRegisterDescCheck,  	researchConsiderName,  	researchConsiderValue,  	researchConsiderGroupAuthorized,  	entryUserName,  	entryTime";
$tdataresearchappointmentconsider[".sqlFrom"] = "FROM researchAppointmentConsider";
$tdataresearchappointmentconsider[".sqlWhereExpr"] = "";
$tdataresearchappointmentconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchappointmentconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchappointmentconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchappointmentconsider[".highlightSearchResults"] = true;

$tableKeysresearchappointmentconsider = array();
$tableKeysresearchappointmentconsider[] = "id";
$tdataresearchappointmentconsider[".Keys"] = $tableKeysresearchappointmentconsider;


$tdataresearchappointmentconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","id");
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


	$tdataresearchappointmentconsider["id"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "id";
//	researchAppointmentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchAppointmentID";
	$fdata["GoodName"] = "researchAppointmentID";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchAppointmentID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchAppointmentID";

		$fdata["sourceSingle"] = "researchAppointmentID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchAppointmentID";

	
	
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


	$tdataresearchappointmentconsider["researchAppointmentID"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchAppointmentID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderNumber");
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


	$tdataresearchappointmentconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","processName");
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


	$tdataresearchappointmentconsider["processName"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","stepName");
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


	$tdataresearchappointmentconsider["stepName"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderFile");
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


	$tdataresearchappointmentconsider["researchConsiderFile"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderFile";
//	researchConsiderFileCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFileCheck";
	$fdata["GoodName"] = "researchConsiderFileCheck";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderFileCheck");
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


	$tdataresearchappointmentconsider["researchConsiderFileCheck"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderFileCheck";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchRegisterDesc");
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


	$tdataresearchappointmentconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchRegisterDescCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchRegisterDescCheck";
	$fdata["GoodName"] = "researchRegisterDescCheck";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchRegisterDescCheck");
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


	$tdataresearchappointmentconsider["researchRegisterDescCheck"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchRegisterDescCheck";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderName");
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


	$tdataresearchappointmentconsider["researchConsiderName"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderName";
//	researchConsiderValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchConsiderValue";
	$fdata["GoodName"] = "researchConsiderValue";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderValue");
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

				$edata["LookupWhere"] = "(ChoiceType='researchAppointmentConsider') AND (ConsiderID = ':id')";


	
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


	$tdataresearchappointmentconsider["researchConsiderValue"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderValue";
//	researchConsiderGroupAuthorized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "researchConsiderGroupAuthorized";
	$fdata["GoodName"] = "researchConsiderGroupAuthorized";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","researchConsiderGroupAuthorized");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderGroupAuthorized";

		$fdata["sourceSingle"] = "researchConsiderGroupAuthorized";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsiderGroupAuthorized";

	
	
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


	$tdataresearchappointmentconsider["researchConsiderGroupAuthorized"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "researchConsiderGroupAuthorized";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","entryUserName");
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


	$tdataresearchappointmentconsider["entryUserName"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchAppointmentConsider";
	$fdata["Label"] = GetFieldLabel("researchAppointmentConsider","entryTime");
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


	$tdataresearchappointmentconsider["entryTime"] = $fdata;
		$tdataresearchappointmentconsider[".searchableFields"][] = "entryTime";


$tables_data["researchAppointmentConsider"]=&$tdataresearchappointmentconsider;
$field_labels["researchAppointmentConsider"] = &$fieldLabelsresearchappointmentconsider;
$fieldToolTips["researchAppointmentConsider"] = &$fieldToolTipsresearchappointmentconsider;
$placeHolders["researchAppointmentConsider"] = &$placeHoldersresearchappointmentconsider;
$page_titles["researchAppointmentConsider"] = &$pageTitlesresearchappointmentconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchAppointmentConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchAppointmentConsider"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchAppointment";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchAppointment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchappointment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchAppointmentConsider"][0] = $masterParams;
				$masterTablesData["researchAppointmentConsider"][0]["masterKeys"] = array();
	$masterTablesData["researchAppointmentConsider"][0]["masterKeys"][]="id";
				$masterTablesData["researchAppointmentConsider"][0]["detailKeys"] = array();
	$masterTablesData["researchAppointmentConsider"][0]["detailKeys"][]="researchAppointmentID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchappointmentconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchAppointmentID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchConsiderFileCheck,  	researchRegisterDesc,  	researchRegisterDescCheck,  	researchConsiderName,  	researchConsiderValue,  	researchConsiderGroupAuthorized,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchAppointmentConsider";
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
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchAppointmentConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchAppointmentID",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto8["m_sql"] = "researchAppointmentID";
$proto8["m_srcTableName"] = "researchAppointmentConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto10["m_sql"] = "researchConsiderNumber";
$proto10["m_srcTableName"] = "researchAppointmentConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto12["m_sql"] = "processName";
$proto12["m_srcTableName"] = "researchAppointmentConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto14["m_sql"] = "stepName";
$proto14["m_srcTableName"] = "researchAppointmentConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto16["m_sql"] = "researchConsiderFile";
$proto16["m_srcTableName"] = "researchAppointmentConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFileCheck",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto18["m_sql"] = "researchConsiderFileCheck";
$proto18["m_srcTableName"] = "researchAppointmentConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto20["m_sql"] = "researchRegisterDesc";
$proto20["m_srcTableName"] = "researchAppointmentConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDescCheck",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto22["m_sql"] = "researchRegisterDescCheck";
$proto22["m_srcTableName"] = "researchAppointmentConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto24["m_sql"] = "researchConsiderName";
$proto24["m_srcTableName"] = "researchAppointmentConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderValue",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto26["m_sql"] = "researchConsiderValue";
$proto26["m_srcTableName"] = "researchAppointmentConsider";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderGroupAuthorized",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto28["m_sql"] = "researchConsiderGroupAuthorized";
$proto28["m_srcTableName"] = "researchAppointmentConsider";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto30["m_sql"] = "entryUserName";
$proto30["m_srcTableName"] = "researchAppointmentConsider";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchAppointmentConsider",
	"m_srcTableName" => "researchAppointmentConsider"
));

$proto32["m_sql"] = "entryTime";
$proto32["m_srcTableName"] = "researchAppointmentConsider";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "researchAppointmentConsider";
$proto35["m_srcTableName"] = "researchAppointmentConsider";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "researchAppointmentID";
$proto35["m_columns"][] = "researchConsiderNumber";
$proto35["m_columns"][] = "processName";
$proto35["m_columns"][] = "stepName";
$proto35["m_columns"][] = "researchConsiderFile";
$proto35["m_columns"][] = "researchConsiderFileCheck";
$proto35["m_columns"][] = "researchRegisterDesc";
$proto35["m_columns"][] = "researchRegisterDescCheck";
$proto35["m_columns"][] = "researchConsiderName";
$proto35["m_columns"][] = "researchConsiderValue";
$proto35["m_columns"][] = "researchConsiderGroupAuthorized";
$proto35["m_columns"][] = "entryUserName";
$proto35["m_columns"][] = "entryTime";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "researchAppointmentConsider";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "researchAppointmentConsider";
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
$proto0["m_srcTableName"]="researchAppointmentConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchappointmentconsider = createSqlQuery_researchappointmentconsider();


	
				;

														

$tdataresearchappointmentconsider[".sqlquery"] = $queryData_researchappointmentconsider;



include_once(getabspath("include/researchappointmentconsider_events.php"));
$tableEvents["researchAppointmentConsider"] = new eventclass_researchappointmentconsider;
$tdataresearchappointmentconsider[".hasEvents"] = true;

?>