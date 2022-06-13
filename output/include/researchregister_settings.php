<?php
$tdataresearchregister = array();
$tdataresearchregister[".searchableFields"] = array();
$tdataresearchregister[".ShortName"] = "researchregister";
$tdataresearchregister[".OwnerID"] = "";
$tdataresearchregister[".OriginalTable"] = "researchRegister";


$tdataresearchregister[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchregister[".originalPagesByType"] = $tdataresearchregister[".pagesByType"];
$tdataresearchregister[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchregister[".originalPages"] = $tdataresearchregister[".pages"];
$tdataresearchregister[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchregister[".originalDefaultPages"] = $tdataresearchregister[".defaultPages"];

//	field labels
$fieldLabelsresearchregister = array();
$fieldToolTipsresearchregister = array();
$pageTitlesresearchregister = array();
$placeHoldersresearchregister = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchregister["English"] = array();
	$fieldToolTipsresearchregister["English"] = array();
	$placeHoldersresearchregister["English"] = array();
	$pageTitlesresearchregister["English"] = array();
	$fieldLabelsresearchregister["English"]["id"] = "ID";
	$fieldToolTipsresearchregister["English"]["id"] = "";
	$placeHoldersresearchregister["English"]["id"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsresearchregister["English"]["researchRegisterNo"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterNo"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsresearchregister["English"]["researchRegisterName"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterName"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsresearchregister["English"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsresearchregister["English"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsresearchregister["English"]["researchRegisterFile"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterFile"] = "";
	$fieldLabelsresearchregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsresearchregister["English"]["researchRegisterStatus"] = "";
	$placeHoldersresearchregister["English"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchregister["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchregister["English"]["entryUserName"] = "";
	$placeHoldersresearchregister["English"]["entryUserName"] = "";
	$fieldLabelsresearchregister["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchregister["English"]["entryTime"] = "";
	$placeHoldersresearchregister["English"]["entryTime"] = "";
	$fieldLabelsresearchregister["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchregister["English"]["researchType"] = "";
	$placeHoldersresearchregister["English"]["researchType"] = "";
	if (count($fieldToolTipsresearchregister["English"]))
		$tdataresearchregister[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchregister["Thai"] = array();
	$fieldToolTipsresearchregister["Thai"] = array();
	$placeHoldersresearchregister["Thai"] = array();
	$pageTitlesresearchregister["Thai"] = array();
	$fieldLabelsresearchregister["Thai"]["id"] = "ID";
	$fieldToolTipsresearchregister["Thai"]["id"] = "";
	$placeHoldersresearchregister["Thai"]["id"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterNo"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterNo"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterName"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterName"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterFile"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterFile"] = "";
	$fieldLabelsresearchregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsresearchregister["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersresearchregister["Thai"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchregister["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchregister["Thai"]["entryUserName"] = "";
	$placeHoldersresearchregister["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchregister["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchregister["Thai"]["entryTime"] = "";
	$placeHoldersresearchregister["Thai"]["entryTime"] = "";
	$fieldLabelsresearchregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchregister["Thai"]["researchType"] = "";
	$placeHoldersresearchregister["Thai"]["researchType"] = "";
	if (count($fieldToolTipsresearchregister["Thai"]))
		$tdataresearchregister[".isUseToolTips"] = true;
}


	$tdataresearchregister[".NCSearch"] = true;



$tdataresearchregister[".shortTableName"] = "researchregister";
$tdataresearchregister[".nSecOptions"] = 0;

$tdataresearchregister[".mainTableOwnerID"] = "";
$tdataresearchregister[".entityType"] = 0;
$tdataresearchregister[".connId"] = "mc_at_192_168_1_111";


$tdataresearchregister[".strOriginalTableName"] = "researchRegister";

	



$tdataresearchregister[".showAddInPopup"] = false;

$tdataresearchregister[".showEditInPopup"] = false;

$tdataresearchregister[".showViewInPopup"] = false;

$tdataresearchregister[".listAjax"] = false;
//	temporary
//$tdataresearchregister[".listAjax"] = false;

	$tdataresearchregister[".audit"] = false;

	$tdataresearchregister[".locking"] = false;


$pages = $tdataresearchregister[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchregister[".edit"] = true;
	$tdataresearchregister[".afterEditAction"] = 1;
	$tdataresearchregister[".closePopupAfterEdit"] = 1;
	$tdataresearchregister[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchregister[".add"] = true;
$tdataresearchregister[".afterAddAction"] = 1;
$tdataresearchregister[".closePopupAfterAdd"] = 1;
$tdataresearchregister[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchregister[".list"] = true;
}



$tdataresearchregister[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchregister[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchregister[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchregister[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchregister[".printFriendly"] = true;
}



$tdataresearchregister[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchregister[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchregister[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchregister[".isUseAjaxSuggest"] = true;

$tdataresearchregister[".rowHighlite"] = true;





$tdataresearchregister[".ajaxCodeSnippetAdded"] = false;

$tdataresearchregister[".buttonsAdded"] = false;

$tdataresearchregister[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchregister[".isUseTimeForSearch"] = false;


$tdataresearchregister[".badgeColor"] = "DC143C";


$tdataresearchregister[".allSearchFields"] = array();
$tdataresearchregister[".filterFields"] = array();
$tdataresearchregister[".requiredSearchFields"] = array();

$tdataresearchregister[".googleLikeFields"] = array();
$tdataresearchregister[".googleLikeFields"][] = "id";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterNo";
$tdataresearchregister[".googleLikeFields"][] = "researchType";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterName";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterFile";
$tdataresearchregister[".googleLikeFields"][] = "researchRegisterStatus";
$tdataresearchregister[".googleLikeFields"][] = "entryUserName";
$tdataresearchregister[".googleLikeFields"][] = "entryTime";



$tdataresearchregister[".tableType"] = "list";

$tdataresearchregister[".printerPageOrientation"] = 0;
$tdataresearchregister[".nPrinterPageScale"] = 100;

$tdataresearchregister[".nPrinterSplitRecords"] = 40;

$tdataresearchregister[".geocodingEnabled"] = false;










$tdataresearchregister[".pageSize"] = 20;

$tdataresearchregister[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchregister[".strOrderBy"] = $tstrOrderBy;

$tdataresearchregister[".orderindexes"] = array();


$tdataresearchregister[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchType,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataresearchregister[".sqlFrom"] = "FROM researchRegister";
$tdataresearchregister[".sqlWhereExpr"] = "";
$tdataresearchregister[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchregister[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchregister[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchregister[".highlightSearchResults"] = true;

$tableKeysresearchregister = array();
$tableKeysresearchregister[] = "id";
$tdataresearchregister[".Keys"] = $tableKeysresearchregister;


$tdataresearchregister[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","id");
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


	$tdataresearchregister["id"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterNo");
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


	$tdataresearchregister["researchRegisterNo"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterNo";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchType");
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


	$tdataresearchregister["researchType"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchType";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterName");
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


	$tdataresearchregister["researchRegisterName"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterStartDate");
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


	$tdataresearchregister["researchRegisterStartDate"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterEndDate");
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


	$tdataresearchregister["researchRegisterEndDate"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterFile");
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


	$tdataresearchregister["researchRegisterFile"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterFile";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","researchRegisterStatus");
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
	$edata["LookupValues"][] = "เปิดรับสมัคร";
	$edata["LookupValues"][] = "ปิดรับสมัคร";

	
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


	$tdataresearchregister["researchRegisterStatus"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","entryUserName");
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


	$tdataresearchregister["entryUserName"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchRegister","entryTime");
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


	$tdataresearchregister["entryTime"] = $fdata;
		$tdataresearchregister[".searchableFields"][] = "entryTime";


$tables_data["researchRegister"]=&$tdataresearchregister;
$field_labels["researchRegister"] = &$fieldLabelsresearchregister;
$fieldToolTips["researchRegister"] = &$fieldToolTipsresearchregister;
$placeHolders["researchRegister"] = &$placeHoldersresearchregister;
$page_titles["researchRegister"] = &$pageTitlesresearchregister;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchRegister"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchRegister"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchregister()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchRegisterNo,  	researchType,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchRegister";
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
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchRegister";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "researchRegister";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto10["m_sql"] = "researchType";
$proto10["m_srcTableName"] = "researchRegister";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto12["m_sql"] = "researchRegisterName";
$proto12["m_srcTableName"] = "researchRegister";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto14["m_sql"] = "researchRegisterStartDate";
$proto14["m_srcTableName"] = "researchRegister";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto16["m_sql"] = "researchRegisterEndDate";
$proto16["m_srcTableName"] = "researchRegister";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto18["m_sql"] = "researchRegisterFile";
$proto18["m_srcTableName"] = "researchRegister";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "researchRegister";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchRegister";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchRegister"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchRegister";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchRegister";
$proto27["m_srcTableName"] = "researchRegister";
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
$proto26["m_sql"] = "researchRegister";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "researchRegister";
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
$proto0["m_srcTableName"]="researchRegister";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchregister = createSqlQuery_researchregister();


	
				;

										

$tdataresearchregister[".sqlquery"] = $queryData_researchregister;



$tableEvents["researchRegister"] = new eventsBase;
$tdataresearchregister[".hasEvents"] = false;

?>