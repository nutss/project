<?php
$tdataresearchrenewal = array();
$tdataresearchrenewal[".searchableFields"] = array();
$tdataresearchrenewal[".ShortName"] = "researchrenewal";
$tdataresearchrenewal[".OwnerID"] = "";
$tdataresearchrenewal[".OriginalTable"] = "researchRenewal";


$tdataresearchrenewal[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchrenewal[".originalPagesByType"] = $tdataresearchrenewal[".pagesByType"];
$tdataresearchrenewal[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchrenewal[".originalPages"] = $tdataresearchrenewal[".pages"];
$tdataresearchrenewal[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchrenewal[".originalDefaultPages"] = $tdataresearchrenewal[".defaultPages"];

//	field labels
$fieldLabelsresearchrenewal = array();
$fieldToolTipsresearchrenewal = array();
$pageTitlesresearchrenewal = array();
$placeHoldersresearchrenewal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchrenewal["English"] = array();
	$fieldToolTipsresearchrenewal["English"] = array();
	$placeHoldersresearchrenewal["English"] = array();
	$pageTitlesresearchrenewal["English"] = array();
	$fieldLabelsresearchrenewal["English"]["id"] = "ID";
	$fieldToolTipsresearchrenewal["English"]["id"] = "";
	$placeHoldersresearchrenewal["English"]["id"] = "ID";
	$fieldLabelsresearchrenewal["English"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchrenewal["English"]["researchProjectID"] = "";
	$placeHoldersresearchrenewal["English"]["researchProjectID"] = "PROJECT_ID";
	$fieldLabelsresearchrenewal["English"]["researchRenewalNo"] = "Research Renewal No";
	$fieldToolTipsresearchrenewal["English"]["researchRenewalNo"] = "";
	$placeHoldersresearchrenewal["English"]["researchRenewalNo"] = "Research Renewal No";
	$fieldLabelsresearchrenewal["English"]["researchRenewalPeriod"] = "Research Renewal Period";
	$fieldToolTipsresearchrenewal["English"]["researchRenewalPeriod"] = "";
	$placeHoldersresearchrenewal["English"]["researchRenewalPeriod"] = "Research Renewal Period";
	$fieldLabelsresearchrenewal["English"]["researchAppointmentDay"] = "Research Appointment Day";
	$fieldToolTipsresearchrenewal["English"]["researchAppointmentDay"] = "";
	$placeHoldersresearchrenewal["English"]["researchAppointmentDay"] = "Research Appointment Day";
	$fieldLabelsresearchrenewal["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchrenewal["English"]["entryUserName"] = "";
	$placeHoldersresearchrenewal["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchrenewal["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchrenewal["English"]["entryTime"] = "";
	$placeHoldersresearchrenewal["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchrenewal["English"]))
		$tdataresearchrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchrenewal["Thai"] = array();
	$fieldToolTipsresearchrenewal["Thai"] = array();
	$placeHoldersresearchrenewal["Thai"] = array();
	$pageTitlesresearchrenewal["Thai"] = array();
	$fieldLabelsresearchrenewal["Thai"]["id"] = "ID";
	$fieldToolTipsresearchrenewal["Thai"]["id"] = "";
	$placeHoldersresearchrenewal["Thai"]["id"] = "ID";
	$fieldLabelsresearchrenewal["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchrenewal["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchrenewal["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldLabelsresearchrenewal["Thai"]["researchRenewalNo"] = "ครั้งที่";
	$fieldToolTipsresearchrenewal["Thai"]["researchRenewalNo"] = "";
	$placeHoldersresearchrenewal["Thai"]["researchRenewalNo"] = "ครั้งที่";
	$fieldLabelsresearchrenewal["Thai"]["researchRenewalPeriod"] = "งวดที่";
	$fieldToolTipsresearchrenewal["Thai"]["researchRenewalPeriod"] = "";
	$placeHoldersresearchrenewal["Thai"]["researchRenewalPeriod"] = "งวดที่";
	$fieldLabelsresearchrenewal["Thai"]["researchAppointmentDay"] = "จำนวนวัน";
	$fieldToolTipsresearchrenewal["Thai"]["researchAppointmentDay"] = "";
	$placeHoldersresearchrenewal["Thai"]["researchAppointmentDay"] = "จำนวนวัน";
	$fieldLabelsresearchrenewal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchrenewal["Thai"]["entryUserName"] = "";
	$placeHoldersresearchrenewal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchrenewal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchrenewal["Thai"]["entryTime"] = "";
	$placeHoldersresearchrenewal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsresearchrenewal["Thai"]))
		$tdataresearchrenewal[".isUseToolTips"] = true;
}


	$tdataresearchrenewal[".NCSearch"] = true;



$tdataresearchrenewal[".shortTableName"] = "researchrenewal";
$tdataresearchrenewal[".nSecOptions"] = 0;

$tdataresearchrenewal[".mainTableOwnerID"] = "";
$tdataresearchrenewal[".entityType"] = 0;
$tdataresearchrenewal[".connId"] = "mc_at_192_168_1_111";


$tdataresearchrenewal[".strOriginalTableName"] = "researchRenewal";

	



$tdataresearchrenewal[".showAddInPopup"] = false;

$tdataresearchrenewal[".showEditInPopup"] = false;

$tdataresearchrenewal[".showViewInPopup"] = false;

$tdataresearchrenewal[".listAjax"] = false;
//	temporary
//$tdataresearchrenewal[".listAjax"] = false;

	$tdataresearchrenewal[".audit"] = true;

	$tdataresearchrenewal[".locking"] = false;


$pages = $tdataresearchrenewal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchrenewal[".edit"] = true;
	$tdataresearchrenewal[".afterEditAction"] = 1;
	$tdataresearchrenewal[".closePopupAfterEdit"] = 1;
	$tdataresearchrenewal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchrenewal[".add"] = true;
$tdataresearchrenewal[".afterAddAction"] = 1;
$tdataresearchrenewal[".closePopupAfterAdd"] = 1;
$tdataresearchrenewal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchrenewal[".list"] = true;
}



$tdataresearchrenewal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchrenewal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchrenewal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchrenewal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchrenewal[".printFriendly"] = true;
}



$tdataresearchrenewal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchrenewal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchrenewal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchrenewal[".isUseAjaxSuggest"] = true;

$tdataresearchrenewal[".rowHighlite"] = true;





$tdataresearchrenewal[".ajaxCodeSnippetAdded"] = false;

$tdataresearchrenewal[".buttonsAdded"] = false;

$tdataresearchrenewal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchrenewal[".isUseTimeForSearch"] = false;


$tdataresearchrenewal[".badgeColor"] = "8fbc8b";


$tdataresearchrenewal[".allSearchFields"] = array();
$tdataresearchrenewal[".filterFields"] = array();
$tdataresearchrenewal[".requiredSearchFields"] = array();

$tdataresearchrenewal[".googleLikeFields"] = array();
$tdataresearchrenewal[".googleLikeFields"][] = "id";
$tdataresearchrenewal[".googleLikeFields"][] = "researchProjectID";
$tdataresearchrenewal[".googleLikeFields"][] = "researchRenewalNo";
$tdataresearchrenewal[".googleLikeFields"][] = "researchRenewalPeriod";
$tdataresearchrenewal[".googleLikeFields"][] = "researchAppointmentDay";
$tdataresearchrenewal[".googleLikeFields"][] = "entryUserName";
$tdataresearchrenewal[".googleLikeFields"][] = "entryTime";



$tdataresearchrenewal[".tableType"] = "list";

$tdataresearchrenewal[".printerPageOrientation"] = 0;
$tdataresearchrenewal[".nPrinterPageScale"] = 100;

$tdataresearchrenewal[".nPrinterSplitRecords"] = 40;

$tdataresearchrenewal[".geocodingEnabled"] = false;










$tdataresearchrenewal[".pageSize"] = 20;

$tdataresearchrenewal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchrenewal[".strOrderBy"] = $tstrOrderBy;

$tdataresearchrenewal[".orderindexes"] = array();


$tdataresearchrenewal[".sqlHead"] = "SELECT id,  	researchProjectID,  	researchRenewalNo,  	researchRenewalPeriod,  	researchAppointmentDay,  	entryUserName,  	entryTime";
$tdataresearchrenewal[".sqlFrom"] = "FROM researchRenewal";
$tdataresearchrenewal[".sqlWhereExpr"] = "";
$tdataresearchrenewal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchrenewal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchrenewal[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchrenewal[".highlightSearchResults"] = true;

$tableKeysresearchrenewal = array();
$tableKeysresearchrenewal[] = "id";
$tdataresearchrenewal[".Keys"] = $tableKeysresearchrenewal;


$tdataresearchrenewal[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","id");
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


	$tdataresearchrenewal["id"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "id";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","researchProjectID");
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


	$tdataresearchrenewal["researchProjectID"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "researchProjectID";
//	researchRenewalNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchRenewalNo";
	$fdata["GoodName"] = "researchRenewalNo";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","researchRenewalNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRenewalNo";

		$fdata["sourceSingle"] = "researchRenewalNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRenewalNo";

	
	
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


	$tdataresearchrenewal["researchRenewalNo"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "researchRenewalNo";
//	researchRenewalPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRenewalPeriod";
	$fdata["GoodName"] = "researchRenewalPeriod";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","researchRenewalPeriod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRenewalPeriod";

		$fdata["sourceSingle"] = "researchRenewalPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRenewalPeriod";

	
	
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


	$tdataresearchrenewal["researchRenewalPeriod"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "researchRenewalPeriod";
//	researchAppointmentDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchAppointmentDay";
	$fdata["GoodName"] = "researchAppointmentDay";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","researchAppointmentDay");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchAppointmentDay";

		$fdata["sourceSingle"] = "researchAppointmentDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchAppointmentDay";

	
	
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


	$tdataresearchrenewal["researchAppointmentDay"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "researchAppointmentDay";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","entryUserName");
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


	$tdataresearchrenewal["entryUserName"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRenewal";
	$fdata["Label"] = GetFieldLabel("researchRenewal","entryTime");
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


	$tdataresearchrenewal["entryTime"] = $fdata;
		$tdataresearchrenewal[".searchableFields"][] = "entryTime";


$tables_data["researchRenewal"]=&$tdataresearchrenewal;
$field_labels["researchRenewal"] = &$fieldLabelsresearchrenewal;
$fieldToolTips["researchRenewal"] = &$fieldToolTipsresearchrenewal;
$placeHolders["researchRenewal"] = &$placeHoldersresearchrenewal;
$page_titles["researchRenewal"] = &$pageTitlesresearchrenewal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchRenewal"] = array();
//	researchRenewalConsider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchRenewalConsider";
		$detailsParam["dOriginalTable"] = "researchRenewalConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchrenewalconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchRenewalConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchRenewal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchRenewal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchRenewal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchRenewal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchRenewal"][$dIndex]["detailKeys"][]="researchRenewalID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchRenewal"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchRenewal"][0] = $masterParams;
				$masterTablesData["researchRenewal"][0]["masterKeys"] = array();
	$masterTablesData["researchRenewal"][0]["masterKeys"][]="id";
				$masterTablesData["researchRenewal"][0]["detailKeys"] = array();
	$masterTablesData["researchRenewal"][0]["detailKeys"][]="researchProjectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchrenewal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchProjectID,  	researchRenewalNo,  	researchRenewalPeriod,  	researchAppointmentDay,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchRenewal";
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
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchRenewal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto8["m_sql"] = "researchProjectID";
$proto8["m_srcTableName"] = "researchRenewal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRenewalNo",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto10["m_sql"] = "researchRenewalNo";
$proto10["m_srcTableName"] = "researchRenewal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRenewalPeriod",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto12["m_sql"] = "researchRenewalPeriod";
$proto12["m_srcTableName"] = "researchRenewal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchAppointmentDay",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto14["m_sql"] = "researchAppointmentDay";
$proto14["m_srcTableName"] = "researchRenewal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto16["m_sql"] = "entryUserName";
$proto16["m_srcTableName"] = "researchRenewal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRenewal",
	"m_srcTableName" => "researchRenewal"
));

$proto18["m_sql"] = "entryTime";
$proto18["m_srcTableName"] = "researchRenewal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "researchRenewal";
$proto21["m_srcTableName"] = "researchRenewal";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "researchProjectID";
$proto21["m_columns"][] = "researchRenewalNo";
$proto21["m_columns"][] = "researchRenewalPeriod";
$proto21["m_columns"][] = "researchAppointmentDay";
$proto21["m_columns"][] = "entryUserName";
$proto21["m_columns"][] = "entryTime";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "researchRenewal";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "researchRenewal";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchRenewal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchrenewal = createSqlQuery_researchrenewal();


	
				;

							

$tdataresearchrenewal[".sqlquery"] = $queryData_researchrenewal;



include_once(getabspath("include/researchrenewal_events.php"));
$tableEvents["researchRenewal"] = new eventclass_researchrenewal;
$tdataresearchrenewal[".hasEvents"] = true;

?>