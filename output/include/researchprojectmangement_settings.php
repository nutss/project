<?php
$tdataresearchprojectmangement = array();
$tdataresearchprojectmangement[".searchableFields"] = array();
$tdataresearchprojectmangement[".ShortName"] = "researchprojectmangement";
$tdataresearchprojectmangement[".OwnerID"] = "";
$tdataresearchprojectmangement[".OriginalTable"] = "researchRegister";


$tdataresearchprojectmangement[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchprojectmangement[".originalPagesByType"] = $tdataresearchprojectmangement[".pagesByType"];
$tdataresearchprojectmangement[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchprojectmangement[".originalPages"] = $tdataresearchprojectmangement[".pages"];
$tdataresearchprojectmangement[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchprojectmangement[".originalDefaultPages"] = $tdataresearchprojectmangement[".defaultPages"];

//	field labels
$fieldLabelsresearchprojectmangement = array();
$fieldToolTipsresearchprojectmangement = array();
$pageTitlesresearchprojectmangement = array();
$placeHoldersresearchprojectmangement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchprojectmangement["English"] = array();
	$fieldToolTipsresearchprojectmangement["English"] = array();
	$placeHoldersresearchprojectmangement["English"] = array();
	$pageTitlesresearchprojectmangement["English"] = array();
	$fieldLabelsresearchprojectmangement["English"]["id"] = "ID";
	$fieldToolTipsresearchprojectmangement["English"]["id"] = "";
	$placeHoldersresearchprojectmangement["English"]["id"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterNo"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterNo"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterName"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterName"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterFile"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterFile"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsresearchprojectmangement["English"]["researchRegisterStatus"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchprojectmangement["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectmangement["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectmangement["English"]["entryUserName"] = "";
	$fieldLabelsresearchprojectmangement["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectmangement["English"]["entryTime"] = "";
	$placeHoldersresearchprojectmangement["English"]["entryTime"] = "";
	$fieldLabelsresearchprojectmangement["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchprojectmangement["English"]["researchType"] = "";
	$placeHoldersresearchprojectmangement["English"]["researchType"] = "";
	if (count($fieldToolTipsresearchprojectmangement["English"]))
		$tdataresearchprojectmangement[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchprojectmangement["Thai"] = array();
	$fieldToolTipsresearchprojectmangement["Thai"] = array();
	$placeHoldersresearchprojectmangement["Thai"] = array();
	$pageTitlesresearchprojectmangement["Thai"] = array();
	$fieldLabelsresearchprojectmangement["Thai"]["id"] = "ID";
	$fieldToolTipsresearchprojectmangement["Thai"]["id"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["id"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterNo"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterNo"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterName"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterName"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterFile"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterFile"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchprojectmangement["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchprojectmangement["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["entryTime"] = "";
	$fieldLabelsresearchprojectmangement["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchprojectmangement["Thai"]["researchType"] = "";
	$placeHoldersresearchprojectmangement["Thai"]["researchType"] = "";
	if (count($fieldToolTipsresearchprojectmangement["Thai"]))
		$tdataresearchprojectmangement[".isUseToolTips"] = true;
}


	$tdataresearchprojectmangement[".NCSearch"] = true;



$tdataresearchprojectmangement[".shortTableName"] = "researchprojectmangement";
$tdataresearchprojectmangement[".nSecOptions"] = 0;

$tdataresearchprojectmangement[".mainTableOwnerID"] = "";
$tdataresearchprojectmangement[".entityType"] = 1;
$tdataresearchprojectmangement[".connId"] = "mc_at_192_168_1_111";


$tdataresearchprojectmangement[".strOriginalTableName"] = "researchRegister";

	



$tdataresearchprojectmangement[".showAddInPopup"] = false;

$tdataresearchprojectmangement[".showEditInPopup"] = false;

$tdataresearchprojectmangement[".showViewInPopup"] = false;

$tdataresearchprojectmangement[".listAjax"] = false;
//	temporary
//$tdataresearchprojectmangement[".listAjax"] = false;

	$tdataresearchprojectmangement[".audit"] = false;

	$tdataresearchprojectmangement[".locking"] = false;


$pages = $tdataresearchprojectmangement[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchprojectmangement[".edit"] = true;
	$tdataresearchprojectmangement[".afterEditAction"] = 1;
	$tdataresearchprojectmangement[".closePopupAfterEdit"] = 1;
	$tdataresearchprojectmangement[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchprojectmangement[".add"] = true;
$tdataresearchprojectmangement[".afterAddAction"] = 1;
$tdataresearchprojectmangement[".closePopupAfterAdd"] = 1;
$tdataresearchprojectmangement[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchprojectmangement[".list"] = true;
}



$tdataresearchprojectmangement[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchprojectmangement[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchprojectmangement[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchprojectmangement[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchprojectmangement[".printFriendly"] = true;
}



$tdataresearchprojectmangement[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchprojectmangement[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchprojectmangement[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchprojectmangement[".isUseAjaxSuggest"] = true;

$tdataresearchprojectmangement[".rowHighlite"] = true;





$tdataresearchprojectmangement[".ajaxCodeSnippetAdded"] = false;

$tdataresearchprojectmangement[".buttonsAdded"] = false;

$tdataresearchprojectmangement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchprojectmangement[".isUseTimeForSearch"] = false;


$tdataresearchprojectmangement[".badgeColor"] = "6da5c8";


$tdataresearchprojectmangement[".allSearchFields"] = array();
$tdataresearchprojectmangement[".filterFields"] = array();
$tdataresearchprojectmangement[".requiredSearchFields"] = array();

$tdataresearchprojectmangement[".googleLikeFields"] = array();
$tdataresearchprojectmangement[".googleLikeFields"][] = "id";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterNo";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchType";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterName";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterFile";
$tdataresearchprojectmangement[".googleLikeFields"][] = "researchRegisterStatus";
$tdataresearchprojectmangement[".googleLikeFields"][] = "entryUserName";
$tdataresearchprojectmangement[".googleLikeFields"][] = "entryTime";



$tdataresearchprojectmangement[".tableType"] = "list";

$tdataresearchprojectmangement[".printerPageOrientation"] = 0;
$tdataresearchprojectmangement[".nPrinterPageScale"] = 100;

$tdataresearchprojectmangement[".nPrinterSplitRecords"] = 40;

$tdataresearchprojectmangement[".geocodingEnabled"] = false;










$tdataresearchprojectmangement[".pageSize"] = 20;

$tdataresearchprojectmangement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchprojectmangement[".strOrderBy"] = $tstrOrderBy;

$tdataresearchprojectmangement[".orderindexes"] = array();


$tdataresearchprojectmangement[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchType,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataresearchprojectmangement[".sqlFrom"] = "FROM researchRegister";
$tdataresearchprojectmangement[".sqlWhereExpr"] = "";
$tdataresearchprojectmangement[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchprojectmangement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchprojectmangement[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchprojectmangement[".highlightSearchResults"] = true;

$tableKeysresearchprojectmangement = array();
$tableKeysresearchprojectmangement[] = "id";
$tdataresearchprojectmangement[".Keys"] = $tableKeysresearchprojectmangement;


$tdataresearchprojectmangement[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","id");
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


	$tdataresearchprojectmangement["id"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterNo");
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


	$tdataresearchprojectmangement["researchRegisterNo"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterNo";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchType");
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


	$tdataresearchprojectmangement["researchType"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchType";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterName");
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


	$tdataresearchprojectmangement["researchRegisterName"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterStartDate");
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


	$tdataresearchprojectmangement["researchRegisterStartDate"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterEndDate");
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


	$tdataresearchprojectmangement["researchRegisterEndDate"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterFile");
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


	$tdataresearchprojectmangement["researchRegisterFile"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterFile";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","researchRegisterStatus");
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


	$tdataresearchprojectmangement["researchRegisterStatus"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","entryUserName");
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


	$tdataresearchprojectmangement["entryUserName"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectMangement","entryTime");
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


	$tdataresearchprojectmangement["entryTime"] = $fdata;
		$tdataresearchprojectmangement[".searchableFields"][] = "entryTime";


$tables_data["researchProjectMangement"]=&$tdataresearchprojectmangement;
$field_labels["researchProjectMangement"] = &$fieldLabelsresearchprojectmangement;
$fieldToolTips["researchProjectMangement"] = &$fieldToolTipsresearchprojectmangement;
$placeHolders["researchProjectMangement"] = &$placeHoldersresearchprojectmangement;
$page_titles["researchProjectMangement"] = &$pageTitlesresearchprojectmangement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProjectMangement"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectMangement"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchProjectConsider";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectConsider";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectconsider";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchProjectMangement"][0] = $masterParams;
				$masterTablesData["researchProjectMangement"][0]["masterKeys"] = array();
	$masterTablesData["researchProjectMangement"][0]["masterKeys"][]="researchProjectID";
				$masterTablesData["researchProjectMangement"][0]["detailKeys"] = array();
	$masterTablesData["researchProjectMangement"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectmangement()
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
	"m_srcTableName" => "researchProjectMangement"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProjectMangement";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "researchProjectMangement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto10["m_sql"] = "researchType";
$proto10["m_srcTableName"] = "researchProjectMangement";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto12["m_sql"] = "researchRegisterName";
$proto12["m_srcTableName"] = "researchProjectMangement";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto14["m_sql"] = "researchRegisterStartDate";
$proto14["m_srcTableName"] = "researchProjectMangement";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto16["m_sql"] = "researchRegisterEndDate";
$proto16["m_srcTableName"] = "researchProjectMangement";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto18["m_sql"] = "researchRegisterFile";
$proto18["m_srcTableName"] = "researchProjectMangement";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "researchProjectMangement";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchProjectMangement";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProjectMangement"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchProjectMangement";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchRegister";
$proto27["m_srcTableName"] = "researchProjectMangement";
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
$proto26["m_srcTableName"] = "researchProjectMangement";
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
$proto0["m_srcTableName"]="researchProjectMangement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchprojectmangement = createSqlQuery_researchprojectmangement();


	
				;

										

$tdataresearchprojectmangement[".sqlquery"] = $queryData_researchprojectmangement;



$tableEvents["researchProjectMangement"] = new eventsBase;
$tdataresearchprojectmangement[".hasEvents"] = false;

?>