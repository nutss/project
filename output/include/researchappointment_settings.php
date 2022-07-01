<?php
$tdataresearchappointment = array();
$tdataresearchappointment[".searchableFields"] = array();
$tdataresearchappointment[".ShortName"] = "researchappointment";
$tdataresearchappointment[".OwnerID"] = "";
$tdataresearchappointment[".OriginalTable"] = "researchAppointment";


$tdataresearchappointment[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchappointment[".originalPagesByType"] = $tdataresearchappointment[".pagesByType"];
$tdataresearchappointment[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchappointment[".originalPages"] = $tdataresearchappointment[".pages"];
$tdataresearchappointment[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchappointment[".originalDefaultPages"] = $tdataresearchappointment[".defaultPages"];

//	field labels
$fieldLabelsresearchappointment = array();
$fieldToolTipsresearchappointment = array();
$pageTitlesresearchappointment = array();
$placeHoldersresearchappointment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchappointment["English"] = array();
	$fieldToolTipsresearchappointment["English"] = array();
	$placeHoldersresearchappointment["English"] = array();
	$pageTitlesresearchappointment["English"] = array();
	$fieldLabelsresearchappointment["English"]["id"] = "ID";
	$fieldToolTipsresearchappointment["English"]["id"] = "";
	$placeHoldersresearchappointment["English"]["id"] = "ID";
	$fieldLabelsresearchappointment["English"]["researchProjectID"] = "Research Project ID";
	$fieldToolTipsresearchappointment["English"]["researchProjectID"] = "";
	$placeHoldersresearchappointment["English"]["researchProjectID"] = "Research Project ID";
	$fieldLabelsresearchappointment["English"]["researchAppointmentNo"] = "Research Appointment No";
	$fieldToolTipsresearchappointment["English"]["researchAppointmentNo"] = "";
	$placeHoldersresearchappointment["English"]["researchAppointmentNo"] = "Research Appointment No";
	$fieldLabelsresearchappointment["English"]["researchAppointmentPeriod"] = "Research Appointment Period";
	$fieldToolTipsresearchappointment["English"]["researchAppointmentPeriod"] = "";
	$placeHoldersresearchappointment["English"]["researchAppointmentPeriod"] = "Research Appointment Period";
	$fieldLabelsresearchappointment["English"]["researchAppointmentDate"] = "Research Appointment Date";
	$fieldToolTipsresearchappointment["English"]["researchAppointmentDate"] = "";
	$placeHoldersresearchappointment["English"]["researchAppointmentDate"] = "Research Appointment Date";
	$fieldLabelsresearchappointment["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchappointment["English"]["entryUserName"] = "";
	$placeHoldersresearchappointment["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchappointment["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchappointment["English"]["entryTime"] = "";
	$placeHoldersresearchappointment["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchappointment["English"]))
		$tdataresearchappointment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchappointment["Thai"] = array();
	$fieldToolTipsresearchappointment["Thai"] = array();
	$placeHoldersresearchappointment["Thai"] = array();
	$pageTitlesresearchappointment["Thai"] = array();
	$fieldLabelsresearchappointment["Thai"]["id"] = "ID";
	$fieldToolTipsresearchappointment["Thai"]["id"] = "";
	$placeHoldersresearchappointment["Thai"]["id"] = "ID";
	$fieldLabelsresearchappointment["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldToolTipsresearchappointment["Thai"]["researchProjectID"] = "";
	$placeHoldersresearchappointment["Thai"]["researchProjectID"] = "PROJECT_ID";
	$fieldLabelsresearchappointment["Thai"]["researchAppointmentNo"] = "ครั้งที่";
	$fieldToolTipsresearchappointment["Thai"]["researchAppointmentNo"] = "";
	$placeHoldersresearchappointment["Thai"]["researchAppointmentNo"] = "ครั้งที่";
	$fieldLabelsresearchappointment["Thai"]["researchAppointmentPeriod"] = "งวดที่";
	$fieldToolTipsresearchappointment["Thai"]["researchAppointmentPeriod"] = "";
	$placeHoldersresearchappointment["Thai"]["researchAppointmentPeriod"] = "งวดที่";
	$fieldLabelsresearchappointment["Thai"]["researchAppointmentDate"] = "วันที่นัดหมาย";
	$fieldToolTipsresearchappointment["Thai"]["researchAppointmentDate"] = "";
	$placeHoldersresearchappointment["Thai"]["researchAppointmentDate"] = "วันที่นัดหมาย";
	$fieldLabelsresearchappointment["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchappointment["Thai"]["entryUserName"] = "";
	$placeHoldersresearchappointment["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchappointment["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchappointment["Thai"]["entryTime"] = "";
	$placeHoldersresearchappointment["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsresearchappointment["Thai"]))
		$tdataresearchappointment[".isUseToolTips"] = true;
}


	$tdataresearchappointment[".NCSearch"] = true;



$tdataresearchappointment[".shortTableName"] = "researchappointment";
$tdataresearchappointment[".nSecOptions"] = 0;

$tdataresearchappointment[".mainTableOwnerID"] = "";
$tdataresearchappointment[".entityType"] = 0;
$tdataresearchappointment[".connId"] = "mc_at_192_168_1_111";


$tdataresearchappointment[".strOriginalTableName"] = "researchAppointment";

	



$tdataresearchappointment[".showAddInPopup"] = false;

$tdataresearchappointment[".showEditInPopup"] = false;

$tdataresearchappointment[".showViewInPopup"] = false;

$tdataresearchappointment[".listAjax"] = false;
//	temporary
//$tdataresearchappointment[".listAjax"] = false;

	$tdataresearchappointment[".audit"] = true;

	$tdataresearchappointment[".locking"] = false;


$pages = $tdataresearchappointment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchappointment[".edit"] = true;
	$tdataresearchappointment[".afterEditAction"] = 1;
	$tdataresearchappointment[".closePopupAfterEdit"] = 1;
	$tdataresearchappointment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchappointment[".add"] = true;
$tdataresearchappointment[".afterAddAction"] = 1;
$tdataresearchappointment[".closePopupAfterAdd"] = 1;
$tdataresearchappointment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchappointment[".list"] = true;
}



$tdataresearchappointment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchappointment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchappointment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchappointment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchappointment[".printFriendly"] = true;
}



$tdataresearchappointment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchappointment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchappointment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchappointment[".isUseAjaxSuggest"] = true;

$tdataresearchappointment[".rowHighlite"] = true;





$tdataresearchappointment[".ajaxCodeSnippetAdded"] = false;

$tdataresearchappointment[".buttonsAdded"] = false;

$tdataresearchappointment[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchappointment[".isUseTimeForSearch"] = false;


$tdataresearchappointment[".badgeColor"] = "8fbc8b";


$tdataresearchappointment[".allSearchFields"] = array();
$tdataresearchappointment[".filterFields"] = array();
$tdataresearchappointment[".requiredSearchFields"] = array();

$tdataresearchappointment[".googleLikeFields"] = array();
$tdataresearchappointment[".googleLikeFields"][] = "id";
$tdataresearchappointment[".googleLikeFields"][] = "researchProjectID";
$tdataresearchappointment[".googleLikeFields"][] = "researchAppointmentNo";
$tdataresearchappointment[".googleLikeFields"][] = "researchAppointmentPeriod";
$tdataresearchappointment[".googleLikeFields"][] = "researchAppointmentDate";
$tdataresearchappointment[".googleLikeFields"][] = "entryUserName";
$tdataresearchappointment[".googleLikeFields"][] = "entryTime";



$tdataresearchappointment[".tableType"] = "list";

$tdataresearchappointment[".printerPageOrientation"] = 0;
$tdataresearchappointment[".nPrinterPageScale"] = 100;

$tdataresearchappointment[".nPrinterSplitRecords"] = 40;

$tdataresearchappointment[".geocodingEnabled"] = false;










$tdataresearchappointment[".pageSize"] = 20;

$tdataresearchappointment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchappointment[".strOrderBy"] = $tstrOrderBy;

$tdataresearchappointment[".orderindexes"] = array();


$tdataresearchappointment[".sqlHead"] = "SELECT id,  	researchProjectID,  	researchAppointmentNo,  	researchAppointmentPeriod,  	researchAppointmentDate,  	entryUserName,  	entryTime";
$tdataresearchappointment[".sqlFrom"] = "FROM researchAppointment";
$tdataresearchappointment[".sqlWhereExpr"] = "";
$tdataresearchappointment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchappointment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchappointment[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchappointment[".highlightSearchResults"] = true;

$tableKeysresearchappointment = array();
$tableKeysresearchappointment[] = "id";
$tdataresearchappointment[".Keys"] = $tableKeysresearchappointment;


$tdataresearchappointment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","id");
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


	$tdataresearchappointment["id"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "id";
//	researchProjectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchProjectID";
	$fdata["GoodName"] = "researchProjectID";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","researchProjectID");
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


	$tdataresearchappointment["researchProjectID"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "researchProjectID";
//	researchAppointmentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchAppointmentNo";
	$fdata["GoodName"] = "researchAppointmentNo";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","researchAppointmentNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchAppointmentNo";

		$fdata["sourceSingle"] = "researchAppointmentNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchAppointmentNo";

	
	
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


	$tdataresearchappointment["researchAppointmentNo"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "researchAppointmentNo";
//	researchAppointmentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchAppointmentPeriod";
	$fdata["GoodName"] = "researchAppointmentPeriod";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","researchAppointmentPeriod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchAppointmentPeriod";

		$fdata["sourceSingle"] = "researchAppointmentPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchAppointmentPeriod";

	
	
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


	$tdataresearchappointment["researchAppointmentPeriod"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "researchAppointmentPeriod";
//	researchAppointmentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchAppointmentDate";
	$fdata["GoodName"] = "researchAppointmentDate";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","researchAppointmentDate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchAppointmentDate";

		$fdata["sourceSingle"] = "researchAppointmentDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchAppointmentDate";

	
	
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


	$tdataresearchappointment["researchAppointmentDate"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "researchAppointmentDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","entryUserName");
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


	$tdataresearchappointment["entryUserName"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchAppointment";
	$fdata["Label"] = GetFieldLabel("researchAppointment","entryTime");
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


	$tdataresearchappointment["entryTime"] = $fdata;
		$tdataresearchappointment[".searchableFields"][] = "entryTime";


$tables_data["researchAppointment"]=&$tdataresearchappointment;
$field_labels["researchAppointment"] = &$fieldLabelsresearchappointment;
$fieldToolTips["researchAppointment"] = &$fieldToolTipsresearchappointment;
$placeHolders["researchAppointment"] = &$placeHoldersresearchappointment;
$page_titles["researchAppointment"] = &$pageTitlesresearchappointment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchAppointment"] = array();
//	researchAppointmentConsider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchAppointmentConsider";
		$detailsParam["dOriginalTable"] = "researchAppointmentConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchappointmentconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchAppointmentConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchAppointment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchAppointment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchAppointment"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchAppointment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchAppointment"][$dIndex]["detailKeys"][]="researchAppointmentID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchAppointment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchAppointment"][0] = $masterParams;
				$masterTablesData["researchAppointment"][0]["masterKeys"] = array();
	$masterTablesData["researchAppointment"][0]["masterKeys"][]="id";
				$masterTablesData["researchAppointment"][0]["detailKeys"] = array();
	$masterTablesData["researchAppointment"][0]["detailKeys"][]="researchProjectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchappointment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchProjectID,  	researchAppointmentNo,  	researchAppointmentPeriod,  	researchAppointmentDate,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchAppointment";
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
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchAppointment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectID",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto8["m_sql"] = "researchProjectID";
$proto8["m_srcTableName"] = "researchAppointment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchAppointmentNo",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto10["m_sql"] = "researchAppointmentNo";
$proto10["m_srcTableName"] = "researchAppointment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchAppointmentPeriod",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto12["m_sql"] = "researchAppointmentPeriod";
$proto12["m_srcTableName"] = "researchAppointment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchAppointmentDate",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto14["m_sql"] = "researchAppointmentDate";
$proto14["m_srcTableName"] = "researchAppointment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto16["m_sql"] = "entryUserName";
$proto16["m_srcTableName"] = "researchAppointment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchAppointment",
	"m_srcTableName" => "researchAppointment"
));

$proto18["m_sql"] = "entryTime";
$proto18["m_srcTableName"] = "researchAppointment";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "researchAppointment";
$proto21["m_srcTableName"] = "researchAppointment";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "researchProjectID";
$proto21["m_columns"][] = "researchAppointmentNo";
$proto21["m_columns"][] = "researchAppointmentPeriod";
$proto21["m_columns"][] = "researchAppointmentDate";
$proto21["m_columns"][] = "entryUserName";
$proto21["m_columns"][] = "entryTime";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "researchAppointment";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "researchAppointment";
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
$proto0["m_srcTableName"]="researchAppointment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchappointment = createSqlQuery_researchappointment();


	
				;

							

$tdataresearchappointment[".sqlquery"] = $queryData_researchappointment;



include_once(getabspath("include/researchappointment_events.php"));
$tableEvents["researchAppointment"] = new eventclass_researchappointment;
$tdataresearchappointment[".hasEvents"] = true;

?>