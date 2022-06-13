<?php
$tdataprojectmangement = array();
$tdataprojectmangement[".searchableFields"] = array();
$tdataprojectmangement[".ShortName"] = "projectmangement";
$tdataprojectmangement[".OwnerID"] = "";
$tdataprojectmangement[".OriginalTable"] = "researchRegister";


$tdataprojectmangement[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectmangement[".originalPagesByType"] = $tdataprojectmangement[".pagesByType"];
$tdataprojectmangement[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectmangement[".originalPages"] = $tdataprojectmangement[".pages"];
$tdataprojectmangement[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectmangement[".originalDefaultPages"] = $tdataprojectmangement[".defaultPages"];

//	field labels
$fieldLabelsprojectmangement = array();
$fieldToolTipsprojectmangement = array();
$pageTitlesprojectmangement = array();
$placeHoldersprojectmangement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectmangement["English"] = array();
	$fieldToolTipsprojectmangement["English"] = array();
	$placeHoldersprojectmangement["English"] = array();
	$pageTitlesprojectmangement["English"] = array();
	$fieldLabelsprojectmangement["English"]["id"] = "ID";
	$fieldToolTipsprojectmangement["English"]["id"] = "";
	$placeHoldersprojectmangement["English"]["id"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsprojectmangement["English"]["researchRegisterNo"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterNo"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsprojectmangement["English"]["researchRegisterName"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterName"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsprojectmangement["English"]["researchRegisterStartDate"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterStartDate"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsprojectmangement["English"]["researchRegisterEndDate"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterEndDate"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsprojectmangement["English"]["researchRegisterFile"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterFile"] = "";
	$fieldLabelsprojectmangement["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsprojectmangement["English"]["researchRegisterStatus"] = "";
	$placeHoldersprojectmangement["English"]["researchRegisterStatus"] = "";
	$fieldLabelsprojectmangement["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectmangement["English"]["entryUserName"] = "";
	$placeHoldersprojectmangement["English"]["entryUserName"] = "";
	$fieldLabelsprojectmangement["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectmangement["English"]["entryTime"] = "";
	$placeHoldersprojectmangement["English"]["entryTime"] = "";
	$fieldLabelsprojectmangement["English"]["researchType"] = "Research Type";
	$fieldToolTipsprojectmangement["English"]["researchType"] = "";
	$placeHoldersprojectmangement["English"]["researchType"] = "";
	if (count($fieldToolTipsprojectmangement["English"]))
		$tdataprojectmangement[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectmangement["Thai"] = array();
	$fieldToolTipsprojectmangement["Thai"] = array();
	$placeHoldersprojectmangement["Thai"] = array();
	$pageTitlesprojectmangement["Thai"] = array();
	$fieldLabelsprojectmangement["Thai"]["id"] = "ID";
	$fieldToolTipsprojectmangement["Thai"]["id"] = "";
	$placeHoldersprojectmangement["Thai"]["id"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterNo"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterNo"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterName"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterName"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterStartDate"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterEndDate"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterFile"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterFile"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsprojectmangement["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersprojectmangement["Thai"]["researchRegisterStatus"] = "";
	$fieldLabelsprojectmangement["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprojectmangement["Thai"]["entryUserName"] = "";
	$placeHoldersprojectmangement["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectmangement["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectmangement["Thai"]["entryTime"] = "";
	$placeHoldersprojectmangement["Thai"]["entryTime"] = "";
	$fieldLabelsprojectmangement["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsprojectmangement["Thai"]["researchType"] = "";
	$placeHoldersprojectmangement["Thai"]["researchType"] = "";
	if (count($fieldToolTipsprojectmangement["Thai"]))
		$tdataprojectmangement[".isUseToolTips"] = true;
}


	$tdataprojectmangement[".NCSearch"] = true;



$tdataprojectmangement[".shortTableName"] = "projectmangement";
$tdataprojectmangement[".nSecOptions"] = 0;

$tdataprojectmangement[".mainTableOwnerID"] = "";
$tdataprojectmangement[".entityType"] = 1;
$tdataprojectmangement[".connId"] = "mc_at_192_168_1_111";


$tdataprojectmangement[".strOriginalTableName"] = "researchRegister";

	



$tdataprojectmangement[".showAddInPopup"] = false;

$tdataprojectmangement[".showEditInPopup"] = false;

$tdataprojectmangement[".showViewInPopup"] = false;

$tdataprojectmangement[".listAjax"] = false;
//	temporary
//$tdataprojectmangement[".listAjax"] = false;

	$tdataprojectmangement[".audit"] = false;

	$tdataprojectmangement[".locking"] = false;


$pages = $tdataprojectmangement[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectmangement[".edit"] = true;
	$tdataprojectmangement[".afterEditAction"] = 1;
	$tdataprojectmangement[".closePopupAfterEdit"] = 1;
	$tdataprojectmangement[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectmangement[".add"] = true;
$tdataprojectmangement[".afterAddAction"] = 1;
$tdataprojectmangement[".closePopupAfterAdd"] = 1;
$tdataprojectmangement[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectmangement[".list"] = true;
}



$tdataprojectmangement[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectmangement[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectmangement[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectmangement[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectmangement[".printFriendly"] = true;
}



$tdataprojectmangement[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectmangement[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectmangement[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectmangement[".isUseAjaxSuggest"] = true;

$tdataprojectmangement[".rowHighlite"] = true;





$tdataprojectmangement[".ajaxCodeSnippetAdded"] = false;

$tdataprojectmangement[".buttonsAdded"] = false;

$tdataprojectmangement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojectmangement[".isUseTimeForSearch"] = false;


$tdataprojectmangement[".badgeColor"] = "6DA5C8";


$tdataprojectmangement[".allSearchFields"] = array();
$tdataprojectmangement[".filterFields"] = array();
$tdataprojectmangement[".requiredSearchFields"] = array();

$tdataprojectmangement[".googleLikeFields"] = array();
$tdataprojectmangement[".googleLikeFields"][] = "id";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterNo";
$tdataprojectmangement[".googleLikeFields"][] = "researchType";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterName";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterFile";
$tdataprojectmangement[".googleLikeFields"][] = "researchRegisterStatus";
$tdataprojectmangement[".googleLikeFields"][] = "entryUserName";
$tdataprojectmangement[".googleLikeFields"][] = "entryTime";



$tdataprojectmangement[".tableType"] = "list";

$tdataprojectmangement[".printerPageOrientation"] = 0;
$tdataprojectmangement[".nPrinterPageScale"] = 100;

$tdataprojectmangement[".nPrinterSplitRecords"] = 40;

$tdataprojectmangement[".geocodingEnabled"] = false;










$tdataprojectmangement[".pageSize"] = 20;

$tdataprojectmangement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectmangement[".strOrderBy"] = $tstrOrderBy;

$tdataprojectmangement[".orderindexes"] = array();


$tdataprojectmangement[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchType,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataprojectmangement[".sqlFrom"] = "FROM researchRegister";
$tdataprojectmangement[".sqlWhereExpr"] = "";
$tdataprojectmangement[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectmangement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectmangement[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectmangement[".highlightSearchResults"] = true;

$tableKeysprojectmangement = array();
$tableKeysprojectmangement[] = "id";
$tdataprojectmangement[".Keys"] = $tableKeysprojectmangement;


$tdataprojectmangement[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","id");
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


	$tdataprojectmangement["id"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterNo");
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


	$tdataprojectmangement["researchRegisterNo"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterNo";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchType");
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


	$tdataprojectmangement["researchType"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchType";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterName");
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


	$tdataprojectmangement["researchRegisterName"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterStartDate");
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


	$tdataprojectmangement["researchRegisterStartDate"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterEndDate");
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


	$tdataprojectmangement["researchRegisterEndDate"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterFile");
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


	$tdataprojectmangement["researchRegisterFile"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterFile";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","researchRegisterStatus");
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


	$tdataprojectmangement["researchRegisterStatus"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","entryUserName");
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


	$tdataprojectmangement["entryUserName"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("ProjectMangement","entryTime");
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


	$tdataprojectmangement["entryTime"] = $fdata;
		$tdataprojectmangement[".searchableFields"][] = "entryTime";


$tables_data["ProjectMangement"]=&$tdataprojectmangement;
$field_labels["ProjectMangement"] = &$fieldLabelsprojectmangement;
$fieldToolTips["ProjectMangement"] = &$fieldToolTipsprojectmangement;
$placeHolders["ProjectMangement"] = &$placeHoldersprojectmangement;
$page_titles["ProjectMangement"] = &$pageTitlesprojectmangement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectMangement"] = array();
//	researchConsider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchConsider";
		$detailsParam["dOriginalTable"] = "researchConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ProjectMangement"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ProjectMangement"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ProjectMangement"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ProjectMangement"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ProjectMangement"][$dIndex]["detailKeys"][]="researchRegisterID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectMangement"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectmangement()
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
	"m_srcTableName" => "ProjectMangement"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ProjectMangement";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "ProjectMangement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto10["m_sql"] = "researchType";
$proto10["m_srcTableName"] = "ProjectMangement";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto12["m_sql"] = "researchRegisterName";
$proto12["m_srcTableName"] = "ProjectMangement";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto14["m_sql"] = "researchRegisterStartDate";
$proto14["m_srcTableName"] = "ProjectMangement";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto16["m_sql"] = "researchRegisterEndDate";
$proto16["m_srcTableName"] = "ProjectMangement";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto18["m_sql"] = "researchRegisterFile";
$proto18["m_srcTableName"] = "ProjectMangement";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "ProjectMangement";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "ProjectMangement";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "ProjectMangement"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "ProjectMangement";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchRegister";
$proto27["m_srcTableName"] = "ProjectMangement";
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
$proto26["m_srcTableName"] = "ProjectMangement";
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
$proto0["m_srcTableName"]="ProjectMangement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectmangement = createSqlQuery_projectmangement();


	
				;

										

$tdataprojectmangement[".sqlquery"] = $queryData_projectmangement;



$tableEvents["ProjectMangement"] = new eventsBase;
$tdataprojectmangement[".hasEvents"] = false;

?>