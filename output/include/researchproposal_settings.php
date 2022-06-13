<?php
$tdataresearchproposal = array();
$tdataresearchproposal[".searchableFields"] = array();
$tdataresearchproposal[".ShortName"] = "researchproposal";
$tdataresearchproposal[".OwnerID"] = "";
$tdataresearchproposal[".OriginalTable"] = "researchRegister";


$tdataresearchproposal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchproposal[".originalPagesByType"] = $tdataresearchproposal[".pagesByType"];
$tdataresearchproposal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchproposal[".originalPages"] = $tdataresearchproposal[".pages"];
$tdataresearchproposal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchproposal[".originalDefaultPages"] = $tdataresearchproposal[".defaultPages"];

//	field labels
$fieldLabelsresearchproposal = array();
$fieldToolTipsresearchproposal = array();
$pageTitlesresearchproposal = array();
$placeHoldersresearchproposal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchproposal["English"] = array();
	$fieldToolTipsresearchproposal["English"] = array();
	$placeHoldersresearchproposal["English"] = array();
	$pageTitlesresearchproposal["English"] = array();
	$fieldLabelsresearchproposal["English"]["id"] = "ID";
	$fieldToolTipsresearchproposal["English"]["id"] = "";
	$placeHoldersresearchproposal["English"]["id"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterNo"] = "Research Register No";
	$fieldToolTipsresearchproposal["English"]["researchRegisterNo"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterNo"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterName"] = "Research Register Name";
	$fieldToolTipsresearchproposal["English"]["researchRegisterName"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterName"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterStartDate"] = "Research Register Start Date";
	$fieldToolTipsresearchproposal["English"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterEndDate"] = "Research Register End Date";
	$fieldToolTipsresearchproposal["English"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterFile"] = "Research Register File";
	$fieldToolTipsresearchproposal["English"]["researchRegisterFile"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterFile"] = "";
	$fieldLabelsresearchproposal["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsresearchproposal["English"]["researchRegisterStatus"] = "";
	$placeHoldersresearchproposal["English"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchproposal["English"]["entryUserName"] = "";
	$placeHoldersresearchproposal["English"]["entryUserName"] = "";
	$fieldLabelsresearchproposal["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchproposal["English"]["entryTime"] = "";
	$placeHoldersresearchproposal["English"]["entryTime"] = "";
	$fieldLabelsresearchproposal["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchproposal["English"]["researchType"] = "";
	$placeHoldersresearchproposal["English"]["researchType"] = "";
	if (count($fieldToolTipsresearchproposal["English"]))
		$tdataresearchproposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchproposal["Thai"] = array();
	$fieldToolTipsresearchproposal["Thai"] = array();
	$placeHoldersresearchproposal["Thai"] = array();
	$pageTitlesresearchproposal["Thai"] = array();
	$fieldLabelsresearchproposal["Thai"]["id"] = "ID";
	$fieldToolTipsresearchproposal["Thai"]["id"] = "";
	$placeHoldersresearchproposal["Thai"]["id"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterNo"] = "รหัสการรับสมัคร";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterNo"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterNo"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterName"] = "ชื่อโครงการ";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterName"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterName"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterStartDate"] = "เริ่มต้นการรับสมัคร";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterStartDate"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterStartDate"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterEndDate"] = "สิ้นสุดการรับสมัคร";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterEndDate"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterEndDate"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterFile"] = "เอกสารโครงการ";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterFile"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterFile"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsresearchproposal["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersresearchproposal["Thai"]["researchRegisterStatus"] = "";
	$fieldLabelsresearchproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchproposal["Thai"]["entryUserName"] = "";
	$placeHoldersresearchproposal["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchproposal["Thai"]["entryTime"] = "";
	$placeHoldersresearchproposal["Thai"]["entryTime"] = "";
	$fieldLabelsresearchproposal["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchproposal["Thai"]["researchType"] = "";
	$placeHoldersresearchproposal["Thai"]["researchType"] = "";
	if (count($fieldToolTipsresearchproposal["Thai"]))
		$tdataresearchproposal[".isUseToolTips"] = true;
}


	$tdataresearchproposal[".NCSearch"] = true;



$tdataresearchproposal[".shortTableName"] = "researchproposal";
$tdataresearchproposal[".nSecOptions"] = 0;

$tdataresearchproposal[".mainTableOwnerID"] = "";
$tdataresearchproposal[".entityType"] = 1;
$tdataresearchproposal[".connId"] = "mc_at_192_168_1_111";


$tdataresearchproposal[".strOriginalTableName"] = "researchRegister";

	



$tdataresearchproposal[".showAddInPopup"] = false;

$tdataresearchproposal[".showEditInPopup"] = false;

$tdataresearchproposal[".showViewInPopup"] = false;

$tdataresearchproposal[".listAjax"] = false;
//	temporary
//$tdataresearchproposal[".listAjax"] = false;

	$tdataresearchproposal[".audit"] = false;

	$tdataresearchproposal[".locking"] = false;


$pages = $tdataresearchproposal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchproposal[".edit"] = true;
	$tdataresearchproposal[".afterEditAction"] = 1;
	$tdataresearchproposal[".closePopupAfterEdit"] = 1;
	$tdataresearchproposal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchproposal[".add"] = true;
$tdataresearchproposal[".afterAddAction"] = 1;
$tdataresearchproposal[".closePopupAfterAdd"] = 1;
$tdataresearchproposal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchproposal[".list"] = true;
}



$tdataresearchproposal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchproposal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchproposal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchproposal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchproposal[".printFriendly"] = true;
}



$tdataresearchproposal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchproposal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchproposal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchproposal[".isUseAjaxSuggest"] = true;

$tdataresearchproposal[".rowHighlite"] = true;





$tdataresearchproposal[".ajaxCodeSnippetAdded"] = false;

$tdataresearchproposal[".buttonsAdded"] = false;

$tdataresearchproposal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchproposal[".isUseTimeForSearch"] = false;


$tdataresearchproposal[".badgeColor"] = "6da5c8";


$tdataresearchproposal[".allSearchFields"] = array();
$tdataresearchproposal[".filterFields"] = array();
$tdataresearchproposal[".requiredSearchFields"] = array();

$tdataresearchproposal[".googleLikeFields"] = array();
$tdataresearchproposal[".googleLikeFields"][] = "id";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterNo";
$tdataresearchproposal[".googleLikeFields"][] = "researchType";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterName";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterStartDate";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterEndDate";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterFile";
$tdataresearchproposal[".googleLikeFields"][] = "researchRegisterStatus";
$tdataresearchproposal[".googleLikeFields"][] = "entryUserName";
$tdataresearchproposal[".googleLikeFields"][] = "entryTime";



$tdataresearchproposal[".tableType"] = "list";

$tdataresearchproposal[".printerPageOrientation"] = 0;
$tdataresearchproposal[".nPrinterPageScale"] = 100;

$tdataresearchproposal[".nPrinterSplitRecords"] = 40;

$tdataresearchproposal[".geocodingEnabled"] = false;










$tdataresearchproposal[".pageSize"] = 20;

$tdataresearchproposal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchproposal[".strOrderBy"] = $tstrOrderBy;

$tdataresearchproposal[".orderindexes"] = array();


$tdataresearchproposal[".sqlHead"] = "SELECT id,  	researchRegisterNo,  	researchType,  	researchRegisterName,  	researchRegisterStartDate,  	researchRegisterEndDate,  	researchRegisterFile,  	researchRegisterStatus,  	entryUserName,  	entryTime";
$tdataresearchproposal[".sqlFrom"] = "FROM researchRegister";
$tdataresearchproposal[".sqlWhereExpr"] = "";
$tdataresearchproposal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchproposal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchproposal[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchproposal[".highlightSearchResults"] = true;

$tableKeysresearchproposal = array();
$tableKeysresearchproposal[] = "id";
$tdataresearchproposal[".Keys"] = $tableKeysresearchproposal;


$tdataresearchproposal[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","id");
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


	$tdataresearchproposal["id"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "id";
//	researchRegisterNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterNo";
	$fdata["GoodName"] = "researchRegisterNo";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterNo");
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


	$tdataresearchproposal["researchRegisterNo"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterNo";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchType");
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


	$tdataresearchproposal["researchType"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchType";
//	researchRegisterName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterName";
	$fdata["GoodName"] = "researchRegisterName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterName");
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


	$tdataresearchproposal["researchRegisterName"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterName";
//	researchRegisterStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchRegisterStartDate";
	$fdata["GoodName"] = "researchRegisterStartDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterStartDate");
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


	$tdataresearchproposal["researchRegisterStartDate"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterStartDate";
//	researchRegisterEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchRegisterEndDate";
	$fdata["GoodName"] = "researchRegisterEndDate";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterEndDate");
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


	$tdataresearchproposal["researchRegisterEndDate"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterEndDate";
//	researchRegisterFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterFile";
	$fdata["GoodName"] = "researchRegisterFile";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterFile");
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


	$tdataresearchproposal["researchRegisterFile"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterFile";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","researchRegisterStatus");
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


	$tdataresearchproposal["researchRegisterStatus"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "researchRegisterStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","entryUserName");
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


	$tdataresearchproposal["entryUserName"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchRegister";
	$fdata["Label"] = GetFieldLabel("researchProposal","entryTime");
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


	$tdataresearchproposal["entryTime"] = $fdata;
		$tdataresearchproposal[".searchableFields"][] = "entryTime";


$tables_data["researchProposal"]=&$tdataresearchproposal;
$field_labels["researchProposal"] = &$fieldLabelsresearchproposal;
$fieldToolTips["researchProposal"] = &$fieldToolTipsresearchproposal;
$placeHolders["researchProposal"] = &$placeHoldersresearchproposal;
$page_titles["researchProposal"] = &$pageTitlesresearchproposal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProposal"] = array();
//	researchProjectConsider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchProjectConsider";
		$detailsParam["dOriginalTable"] = "researchProjectConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchprojectconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchProjectConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProposal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchproposal()
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
	"m_srcTableName" => "researchProposal"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProposal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterNo",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto8["m_sql"] = "researchRegisterNo";
$proto8["m_srcTableName"] = "researchProposal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto10["m_sql"] = "researchType";
$proto10["m_srcTableName"] = "researchProposal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto12["m_sql"] = "researchRegisterName";
$proto12["m_srcTableName"] = "researchProposal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStartDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto14["m_sql"] = "researchRegisterStartDate";
$proto14["m_srcTableName"] = "researchProposal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterEndDate",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto16["m_sql"] = "researchRegisterEndDate";
$proto16["m_srcTableName"] = "researchProposal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterFile",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto18["m_sql"] = "researchRegisterFile";
$proto18["m_srcTableName"] = "researchProposal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto20["m_sql"] = "researchRegisterStatus";
$proto20["m_srcTableName"] = "researchProposal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto22["m_sql"] = "entryUserName";
$proto22["m_srcTableName"] = "researchProposal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchRegister",
	"m_srcTableName" => "researchProposal"
));

$proto24["m_sql"] = "entryTime";
$proto24["m_srcTableName"] = "researchProposal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchRegister";
$proto27["m_srcTableName"] = "researchProposal";
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
$proto26["m_srcTableName"] = "researchProposal";
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
$proto0["m_srcTableName"]="researchProposal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchproposal = createSqlQuery_researchproposal();


	
				;

										

$tdataresearchproposal[".sqlquery"] = $queryData_researchproposal;



$tableEvents["researchProposal"] = new eventsBase;
$tdataresearchproposal[".hasEvents"] = false;

?>