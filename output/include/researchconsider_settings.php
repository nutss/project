<?php
$tdataresearchconsider = array();
$tdataresearchconsider[".searchableFields"] = array();
$tdataresearchconsider[".ShortName"] = "researchconsider";
$tdataresearchconsider[".OwnerID"] = "";
$tdataresearchconsider[".OriginalTable"] = "researchConsider";


$tdataresearchconsider[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchconsider[".originalPagesByType"] = $tdataresearchconsider[".pagesByType"];
$tdataresearchconsider[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchconsider[".originalPages"] = $tdataresearchconsider[".pages"];
$tdataresearchconsider[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchconsider[".originalDefaultPages"] = $tdataresearchconsider[".defaultPages"];

//	field labels
$fieldLabelsresearchconsider = array();
$fieldToolTipsresearchconsider = array();
$pageTitlesresearchconsider = array();
$placeHoldersresearchconsider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchconsider["English"] = array();
	$fieldToolTipsresearchconsider["English"] = array();
	$placeHoldersresearchconsider["English"] = array();
	$pageTitlesresearchconsider["English"] = array();
	$fieldLabelsresearchconsider["English"]["id"] = "ID";
	$fieldToolTipsresearchconsider["English"]["id"] = "";
	$placeHoldersresearchconsider["English"]["id"] = "ID";
	$fieldLabelsresearchconsider["English"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchconsider["English"]["researchTypeID"] = "";
	$placeHoldersresearchconsider["English"]["researchTypeID"] = "Research Type ID";
	$fieldLabelsresearchconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchconsider["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsider["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldLabelsresearchconsider["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchconsider["English"]["processName"] = "";
	$placeHoldersresearchconsider["English"]["processName"] = "Process Name";
	$fieldLabelsresearchconsider["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchconsider["English"]["stepName"] = "";
	$placeHoldersresearchconsider["English"]["stepName"] = "Step Name";
	$fieldLabelsresearchconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchconsider["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsider["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldLabelsresearchconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchconsider["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsider["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldLabelsresearchconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchconsider["English"]["entryUserName"] = "";
	$placeHoldersresearchconsider["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchconsider["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchconsider["English"]["entryTime"] = "";
	$placeHoldersresearchconsider["English"]["entryTime"] = "Entry Time";
	$fieldLabelsresearchconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchconsider["English"]["researchConsiderName"] = "";
	$placeHoldersresearchconsider["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldLabelsresearchconsider["English"]["researchConsiderGroupAuthorized"] = "Research Consider Group Authorized";
	$fieldToolTipsresearchconsider["English"]["researchConsiderGroupAuthorized"] = "";
	$placeHoldersresearchconsider["English"]["researchConsiderGroupAuthorized"] = "";
	if (count($fieldToolTipsresearchconsider["English"]))
		$tdataresearchconsider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchconsider["Thai"] = array();
	$fieldToolTipsresearchconsider["Thai"] = array();
	$placeHoldersresearchconsider["Thai"] = array();
	$pageTitlesresearchconsider["Thai"] = array();
	$fieldLabelsresearchconsider["Thai"]["id"] = "ID";
	$fieldToolTipsresearchconsider["Thai"]["id"] = "";
	$placeHoldersresearchconsider["Thai"]["id"] = "ID";
	$fieldLabelsresearchconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchconsider["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsider["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldLabelsresearchconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchconsider["Thai"]["processName"] = "";
	$placeHoldersresearchconsider["Thai"]["processName"] = "กระบวนการ";
	$fieldLabelsresearchconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchconsider["Thai"]["stepName"] = "";
	$placeHoldersresearchconsider["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldLabelsresearchconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchconsider["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsider["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldLabelsresearchconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchconsider["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsider["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldLabelsresearchconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchconsider["Thai"]["entryUserName"] = "";
	$placeHoldersresearchconsider["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchconsider["Thai"]["entryTime"] = "";
	$placeHoldersresearchconsider["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsresearchconsider["Thai"]["researchTypeID"] = "ประเภททุน";
	$fieldToolTipsresearchconsider["Thai"]["researchTypeID"] = "";
	$placeHoldersresearchconsider["Thai"]["researchTypeID"] = "ประเภททุน";
	$fieldLabelsresearchconsider["Thai"]["researchConsiderName"] = "การดำเนินงาน";
	$fieldToolTipsresearchconsider["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchconsider["Thai"]["researchConsiderName"] = "การพิจารณา";
	$fieldLabelsresearchconsider["Thai"]["researchConsiderGroupAuthorized"] = "กลุ่มผู้ใช้งาน";
	$fieldToolTipsresearchconsider["Thai"]["researchConsiderGroupAuthorized"] = "";
	$placeHoldersresearchconsider["Thai"]["researchConsiderGroupAuthorized"] = "";
	if (count($fieldToolTipsresearchconsider["Thai"]))
		$tdataresearchconsider[".isUseToolTips"] = true;
}


	$tdataresearchconsider[".NCSearch"] = true;



$tdataresearchconsider[".shortTableName"] = "researchconsider";
$tdataresearchconsider[".nSecOptions"] = 0;

$tdataresearchconsider[".mainTableOwnerID"] = "";
$tdataresearchconsider[".entityType"] = 0;
$tdataresearchconsider[".connId"] = "mc_at_192_168_1_111";


$tdataresearchconsider[".strOriginalTableName"] = "researchConsider";

	



$tdataresearchconsider[".showAddInPopup"] = false;

$tdataresearchconsider[".showEditInPopup"] = false;

$tdataresearchconsider[".showViewInPopup"] = false;

$tdataresearchconsider[".listAjax"] = false;
//	temporary
//$tdataresearchconsider[".listAjax"] = false;

	$tdataresearchconsider[".audit"] = true;

	$tdataresearchconsider[".locking"] = false;


$pages = $tdataresearchconsider[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchconsider[".edit"] = true;
	$tdataresearchconsider[".afterEditAction"] = 1;
	$tdataresearchconsider[".closePopupAfterEdit"] = 1;
	$tdataresearchconsider[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchconsider[".add"] = true;
$tdataresearchconsider[".afterAddAction"] = 1;
$tdataresearchconsider[".closePopupAfterAdd"] = 1;
$tdataresearchconsider[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchconsider[".list"] = true;
}



$tdataresearchconsider[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchconsider[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchconsider[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchconsider[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchconsider[".printFriendly"] = true;
}



$tdataresearchconsider[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchconsider[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchconsider[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchconsider[".isUseAjaxSuggest"] = true;

$tdataresearchconsider[".rowHighlite"] = true;



												

$tdataresearchconsider[".ajaxCodeSnippetAdded"] = false;

$tdataresearchconsider[".buttonsAdded"] = false;

$tdataresearchconsider[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchconsider[".isUseTimeForSearch"] = false;


$tdataresearchconsider[".badgeColor"] = "00c2c5";


$tdataresearchconsider[".allSearchFields"] = array();
$tdataresearchconsider[".filterFields"] = array();
$tdataresearchconsider[".requiredSearchFields"] = array();

$tdataresearchconsider[".googleLikeFields"] = array();
$tdataresearchconsider[".googleLikeFields"][] = "id";
$tdataresearchconsider[".googleLikeFields"][] = "researchTypeID";
$tdataresearchconsider[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchconsider[".googleLikeFields"][] = "processName";
$tdataresearchconsider[".googleLikeFields"][] = "stepName";
$tdataresearchconsider[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchconsider[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchconsider[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchconsider[".googleLikeFields"][] = "researchConsiderGroupAuthorized";
$tdataresearchconsider[".googleLikeFields"][] = "entryUserName";
$tdataresearchconsider[".googleLikeFields"][] = "entryTime";



$tdataresearchconsider[".tableType"] = "list";

$tdataresearchconsider[".printerPageOrientation"] = 0;
$tdataresearchconsider[".nPrinterPageScale"] = 100;

$tdataresearchconsider[".nPrinterSplitRecords"] = 40;

$tdataresearchconsider[".geocodingEnabled"] = false;










$tdataresearchconsider[".pageSize"] = 20;

$tdataresearchconsider[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY processName,researchConsiderNumber";
$tdataresearchconsider[".strOrderBy"] = $tstrOrderBy;

$tdataresearchconsider[".orderindexes"] = array();
	$tdataresearchconsider[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "processName");

	$tdataresearchconsider[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "researchConsiderNumber");



$tdataresearchconsider[".sqlHead"] = "SELECT id,  	researchTypeID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	researchConsiderGroupAuthorized,  	entryUserName,  	entryTime";
$tdataresearchconsider[".sqlFrom"] = "FROM researchConsider";
$tdataresearchconsider[".sqlWhereExpr"] = "";
$tdataresearchconsider[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchconsider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchconsider[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchconsider[".highlightSearchResults"] = true;

$tableKeysresearchconsider = array();
$tableKeysresearchconsider[] = "id";
$tdataresearchconsider[".Keys"] = $tableKeysresearchconsider;


$tdataresearchconsider[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","id");
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


	$tdataresearchconsider["id"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "id";
//	researchTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchTypeID";
	$fdata["GoodName"] = "researchTypeID";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchTypeID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "typeName";

	

	
	$edata["LookupOrderBy"] = "typeName";

	
	
	
	

	
	
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


	$tdataresearchconsider["researchTypeID"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchTypeID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchConsiderNumber");
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


	$tdataresearchconsider["researchConsiderNumber"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","processName");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "process";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "processName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "processName";

	

	
	$edata["LookupOrderBy"] = "processName";

	
	
	
	

	
	
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


	$tdataresearchconsider["processName"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","stepName");
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


	$tdataresearchconsider["stepName"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchConsiderFile");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "statusType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "statusValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusName";

				$edata["LookupWhere"] = "statusType = 'researchConsiderFile'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataresearchconsider["researchConsiderFile"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchRegisterDesc");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "statusType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "statusValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusName";

				$edata["LookupWhere"] = "statusType = 'researchRegisterDesc'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataresearchconsider["researchRegisterDesc"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchConsiderName");
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


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataresearchconsider["researchConsiderName"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchConsiderName";
//	researchConsiderGroupAuthorized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchConsiderGroupAuthorized";
	$fdata["GoodName"] = "researchConsiderGroupAuthorized";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","researchConsiderGroupAuthorized");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "project_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Label";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Label";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataresearchconsider["researchConsiderGroupAuthorized"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "researchConsiderGroupAuthorized";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","entryUserName");
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


	$tdataresearchconsider["entryUserName"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsider","entryTime");
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


	$tdataresearchconsider["entryTime"] = $fdata;
		$tdataresearchconsider[".searchableFields"][] = "entryTime";


$tables_data["researchConsider"]=&$tdataresearchconsider;
$field_labels["researchConsider"] = &$fieldLabelsresearchconsider;
$fieldToolTips["researchConsider"] = &$fieldToolTipsresearchconsider;
$placeHolders["researchConsider"] = &$placeHoldersresearchconsider;
$page_titles["researchConsider"] = &$pageTitlesresearchconsider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchConsider"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchConsider"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchType";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchType";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchtype";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchConsider"][0] = $masterParams;
				$masterTablesData["researchConsider"][0]["masterKeys"] = array();
	$masterTablesData["researchConsider"][0]["masterKeys"][]="id";
				$masterTablesData["researchConsider"][0]["detailKeys"] = array();
	$masterTablesData["researchConsider"][0]["detailKeys"][]="researchTypeID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchconsider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchTypeID,  	researchConsiderNumber,  	processName,  	stepName,  	researchConsiderFile,  	researchRegisterDesc,  	researchConsiderName,  	researchConsiderGroupAuthorized,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchConsider";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY processName,researchConsiderNumber";
	
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
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchConsider";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto8["m_sql"] = "researchTypeID";
$proto8["m_srcTableName"] = "researchConsider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto10["m_sql"] = "researchConsiderNumber";
$proto10["m_srcTableName"] = "researchConsider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto12["m_sql"] = "processName";
$proto12["m_srcTableName"] = "researchConsider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto14["m_sql"] = "stepName";
$proto14["m_srcTableName"] = "researchConsider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto16["m_sql"] = "researchConsiderFile";
$proto16["m_srcTableName"] = "researchConsider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto18["m_sql"] = "researchRegisterDesc";
$proto18["m_srcTableName"] = "researchConsider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto20["m_sql"] = "researchConsiderName";
$proto20["m_srcTableName"] = "researchConsider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderGroupAuthorized",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto22["m_sql"] = "researchConsiderGroupAuthorized";
$proto22["m_srcTableName"] = "researchConsider";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "researchConsider";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "researchConsider";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "researchConsider";
$proto29["m_srcTableName"] = "researchConsider";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "researchTypeID";
$proto29["m_columns"][] = "researchConsiderNumber";
$proto29["m_columns"][] = "processName";
$proto29["m_columns"][] = "stepName";
$proto29["m_columns"][] = "researchConsiderFile";
$proto29["m_columns"][] = "researchRegisterDesc";
$proto29["m_columns"][] = "researchConsiderName";
$proto29["m_columns"][] = "researchConsiderGroupAuthorized";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "researchConsider";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "researchConsider";
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
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 1;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsider"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="researchConsider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchconsider = createSqlQuery_researchconsider();


	
				;

											

$tdataresearchconsider[".sqlquery"] = $queryData_researchconsider;



include_once(getabspath("include/researchconsider_events.php"));
$tableEvents["researchConsider"] = new eventclass_researchconsider;
$tdataresearchconsider[".hasEvents"] = true;

?>