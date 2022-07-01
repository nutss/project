<?php
$tdataresearchconsiderview = array();
$tdataresearchconsiderview[".searchableFields"] = array();
$tdataresearchconsiderview[".ShortName"] = "researchconsiderview";
$tdataresearchconsiderview[".OwnerID"] = "";
$tdataresearchconsiderview[".OriginalTable"] = "researchConsider";


$tdataresearchconsiderview[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchconsiderview[".originalPagesByType"] = $tdataresearchconsiderview[".pagesByType"];
$tdataresearchconsiderview[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchconsiderview[".originalPages"] = $tdataresearchconsiderview[".pages"];
$tdataresearchconsiderview[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchconsiderview[".originalDefaultPages"] = $tdataresearchconsiderview[".defaultPages"];

//	field labels
$fieldLabelsresearchconsiderview = array();
$fieldToolTipsresearchconsiderview = array();
$pageTitlesresearchconsiderview = array();
$placeHoldersresearchconsiderview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchconsiderview["English"] = array();
	$fieldToolTipsresearchconsiderview["English"] = array();
	$placeHoldersresearchconsiderview["English"] = array();
	$pageTitlesresearchconsiderview["English"] = array();
	$fieldLabelsresearchconsiderview["English"]["id"] = "ID";
	$fieldToolTipsresearchconsiderview["English"]["id"] = "";
	$placeHoldersresearchconsiderview["English"]["id"] = "";
	$fieldLabelsresearchconsiderview["English"]["researchTypeID"] = "Research Type ID";
	$fieldToolTipsresearchconsiderview["English"]["researchTypeID"] = "";
	$placeHoldersresearchconsiderview["English"]["researchTypeID"] = "";
	$fieldLabelsresearchconsiderview["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchconsiderview["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderview["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderview["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchconsiderview["English"]["processName"] = "";
	$placeHoldersresearchconsiderview["English"]["processName"] = "";
	$fieldLabelsresearchconsiderview["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchconsiderview["English"]["stepName"] = "";
	$placeHoldersresearchconsiderview["English"]["stepName"] = "";
	$fieldLabelsresearchconsiderview["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchconsiderview["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderview["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderview["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchconsiderview["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderview["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderview["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchconsiderview["English"]["entryUserName"] = "";
	$placeHoldersresearchconsiderview["English"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderview["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchconsiderview["English"]["entryTime"] = "";
	$placeHoldersresearchconsiderview["English"]["entryTime"] = "";
	$fieldLabelsresearchconsiderview["English"]["researchConsiderName"] = "Research Consider Name";
	$fieldToolTipsresearchconsiderview["English"]["researchConsiderName"] = "";
	$placeHoldersresearchconsiderview["English"]["researchConsiderName"] = "";
	if (count($fieldToolTipsresearchconsiderview["English"]))
		$tdataresearchconsiderview[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchconsiderview["Thai"] = array();
	$fieldToolTipsresearchconsiderview["Thai"] = array();
	$placeHoldersresearchconsiderview["Thai"] = array();
	$pageTitlesresearchconsiderview["Thai"] = array();
	$fieldLabelsresearchconsiderview["Thai"]["id"] = "ID";
	$fieldToolTipsresearchconsiderview["Thai"]["id"] = "";
	$placeHoldersresearchconsiderview["Thai"]["id"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchconsiderview["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderview["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchconsiderview["Thai"]["processName"] = "";
	$placeHoldersresearchconsiderview["Thai"]["processName"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchconsiderview["Thai"]["stepName"] = "";
	$placeHoldersresearchconsiderview["Thai"]["stepName"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchconsiderview["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderview["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchconsiderview["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderview["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchconsiderview["Thai"]["entryUserName"] = "";
	$placeHoldersresearchconsiderview["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchconsiderview["Thai"]["entryTime"] = "";
	$placeHoldersresearchconsiderview["Thai"]["entryTime"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["researchTypeID"] = "ประเภททุน";
	$fieldToolTipsresearchconsiderview["Thai"]["researchTypeID"] = "";
	$placeHoldersresearchconsiderview["Thai"]["researchTypeID"] = "";
	$fieldLabelsresearchconsiderview["Thai"]["researchConsiderName"] = "การพิจารณา";
	$fieldToolTipsresearchconsiderview["Thai"]["researchConsiderName"] = "";
	$placeHoldersresearchconsiderview["Thai"]["researchConsiderName"] = "";
	if (count($fieldToolTipsresearchconsiderview["Thai"]))
		$tdataresearchconsiderview[".isUseToolTips"] = true;
}


	$tdataresearchconsiderview[".NCSearch"] = true;



$tdataresearchconsiderview[".shortTableName"] = "researchconsiderview";
$tdataresearchconsiderview[".nSecOptions"] = 0;

$tdataresearchconsiderview[".mainTableOwnerID"] = "";
$tdataresearchconsiderview[".entityType"] = 1;
$tdataresearchconsiderview[".connId"] = "mc_at_192_168_1_111";


$tdataresearchconsiderview[".strOriginalTableName"] = "researchConsider";

	



$tdataresearchconsiderview[".showAddInPopup"] = false;

$tdataresearchconsiderview[".showEditInPopup"] = false;

$tdataresearchconsiderview[".showViewInPopup"] = false;

$tdataresearchconsiderview[".listAjax"] = false;
//	temporary
//$tdataresearchconsiderview[".listAjax"] = false;

	$tdataresearchconsiderview[".audit"] = true;

	$tdataresearchconsiderview[".locking"] = false;


$pages = $tdataresearchconsiderview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchconsiderview[".edit"] = true;
	$tdataresearchconsiderview[".afterEditAction"] = 1;
	$tdataresearchconsiderview[".closePopupAfterEdit"] = 1;
	$tdataresearchconsiderview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchconsiderview[".add"] = true;
$tdataresearchconsiderview[".afterAddAction"] = 1;
$tdataresearchconsiderview[".closePopupAfterAdd"] = 1;
$tdataresearchconsiderview[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchconsiderview[".list"] = true;
}



$tdataresearchconsiderview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchconsiderview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchconsiderview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchconsiderview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchconsiderview[".printFriendly"] = true;
}



$tdataresearchconsiderview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchconsiderview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchconsiderview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchconsiderview[".isUseAjaxSuggest"] = true;

$tdataresearchconsiderview[".rowHighlite"] = true;





$tdataresearchconsiderview[".ajaxCodeSnippetAdded"] = false;

$tdataresearchconsiderview[".buttonsAdded"] = false;

$tdataresearchconsiderview[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchconsiderview[".isUseTimeForSearch"] = false;


$tdataresearchconsiderview[".badgeColor"] = "EDCA00";


$tdataresearchconsiderview[".allSearchFields"] = array();
$tdataresearchconsiderview[".filterFields"] = array();
$tdataresearchconsiderview[".requiredSearchFields"] = array();

$tdataresearchconsiderview[".googleLikeFields"] = array();
$tdataresearchconsiderview[".googleLikeFields"][] = "researchTypeID";
$tdataresearchconsiderview[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchconsiderview[".googleLikeFields"][] = "processName";
$tdataresearchconsiderview[".googleLikeFields"][] = "stepName";
$tdataresearchconsiderview[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchconsiderview[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchconsiderview[".googleLikeFields"][] = "researchConsiderName";
$tdataresearchconsiderview[".googleLikeFields"][] = "entryUserName";
$tdataresearchconsiderview[".googleLikeFields"][] = "entryTime";



$tdataresearchconsiderview[".tableType"] = "list";

$tdataresearchconsiderview[".printerPageOrientation"] = 0;
$tdataresearchconsiderview[".nPrinterPageScale"] = 100;

$tdataresearchconsiderview[".nPrinterSplitRecords"] = 40;

$tdataresearchconsiderview[".geocodingEnabled"] = false;










$tdataresearchconsiderview[".pageSize"] = 20;

$tdataresearchconsiderview[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY researchConsider.researchTypeID, researchConsider.processName, researchConsider.researchConsiderNumber";
$tdataresearchconsiderview[".strOrderBy"] = $tstrOrderBy;

$tdataresearchconsiderview[".orderindexes"] = array();
	$tdataresearchconsiderview[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "researchConsider.researchTypeID");

	$tdataresearchconsiderview[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "researchConsider.processName");

	$tdataresearchconsiderview[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "researchConsider.researchConsiderNumber");



$tdataresearchconsiderview[".sqlHead"] = "SELECT researchConsider.id,  researchConsider.researchTypeID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderName,  researchConsider.entryUserName,  researchConsider.entryTime";
$tdataresearchconsiderview[".sqlFrom"] = "FROM researchConsider  INNER JOIN researchType ON researchType.id = researchConsider.researchTypeID";
$tdataresearchconsiderview[".sqlWhereExpr"] = "";
$tdataresearchconsiderview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchconsiderview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchconsiderview[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchconsiderview[".highlightSearchResults"] = true;

$tableKeysresearchconsiderview = array();
$tableKeysresearchconsiderview[] = "id";
$tdataresearchconsiderview[".Keys"] = $tableKeysresearchconsiderview;


$tdataresearchconsiderview[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.id";

	
	
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


	$tdataresearchconsiderview["id"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "id";
//	researchTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchTypeID";
	$fdata["GoodName"] = "researchTypeID";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","researchTypeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchTypeID";

		$fdata["sourceSingle"] = "researchTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchTypeID";

	
	
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


	$tdataresearchconsiderview["researchTypeID"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "researchTypeID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","researchConsiderNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderNumber";

		$fdata["sourceSingle"] = "researchConsiderNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderNumber";

	
	
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


	$tdataresearchconsiderview["researchConsiderNumber"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","processName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "processName";

		$fdata["sourceSingle"] = "processName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.processName";

	
	
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


	$tdataresearchconsiderview["processName"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","stepName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stepName";

		$fdata["sourceSingle"] = "stepName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.stepName";

	
	
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


	$tdataresearchconsiderview["stepName"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","researchConsiderFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchConsiderFile";

		$fdata["sourceSingle"] = "researchConsiderFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderFile";

	
	
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


	$tdataresearchconsiderview["researchConsiderFile"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","researchRegisterDesc");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchRegisterDesc";

		$fdata["sourceSingle"] = "researchRegisterDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchRegisterDesc";

	
	
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


	$tdataresearchconsiderview["researchRegisterDesc"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchConsiderName";
	$fdata["GoodName"] = "researchConsiderName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","researchConsiderName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderName";

		$fdata["sourceSingle"] = "researchConsiderName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderName";

	
	
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


	$tdataresearchconsiderview["researchConsiderName"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "researchConsiderName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.entryUserName";

	
	
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


	$tdataresearchconsiderview["entryUserName"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderView","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.entryTime";

	
	
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


	$tdataresearchconsiderview["entryTime"] = $fdata;
		$tdataresearchconsiderview[".searchableFields"][] = "entryTime";


$tables_data["researchConsiderView"]=&$tdataresearchconsiderview;
$field_labels["researchConsiderView"] = &$fieldLabelsresearchconsiderview;
$fieldToolTips["researchConsiderView"] = &$fieldToolTipsresearchconsiderview;
$placeHolders["researchConsiderView"] = &$placeHoldersresearchconsiderview;
$page_titles["researchConsiderView"] = &$pageTitlesresearchconsiderview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchConsiderView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchConsiderView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchconsiderview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchConsider.id,  researchConsider.researchTypeID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderName,  researchConsider.entryUserName,  researchConsider.entryTime";
$proto0["m_strFrom"] = "FROM researchConsider  INNER JOIN researchType ON researchType.id = researchConsider.researchTypeID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY researchConsider.researchTypeID, researchConsider.processName, researchConsider.researchConsiderNumber";
	
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
	"m_srcTableName" => "researchConsiderView"
));

$proto6["m_sql"] = "researchConsider.id";
$proto6["m_srcTableName"] = "researchConsiderView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto8["m_sql"] = "researchConsider.researchTypeID";
$proto8["m_srcTableName"] = "researchConsiderView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto10["m_sql"] = "researchConsider.researchConsiderNumber";
$proto10["m_srcTableName"] = "researchConsiderView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto12["m_sql"] = "researchConsider.processName";
$proto12["m_srcTableName"] = "researchConsiderView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto14["m_sql"] = "researchConsider.stepName";
$proto14["m_srcTableName"] = "researchConsiderView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto16["m_sql"] = "researchConsider.researchConsiderFile";
$proto16["m_srcTableName"] = "researchConsiderView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto18["m_sql"] = "researchConsider.researchRegisterDesc";
$proto18["m_srcTableName"] = "researchConsiderView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto20["m_sql"] = "researchConsider.researchConsiderName";
$proto20["m_srcTableName"] = "researchConsiderView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto22["m_sql"] = "researchConsider.entryUserName";
$proto22["m_srcTableName"] = "researchConsiderView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto24["m_sql"] = "researchConsider.entryTime";
$proto24["m_srcTableName"] = "researchConsiderView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "researchConsider";
$proto27["m_srcTableName"] = "researchConsiderView";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "researchTypeID";
$proto27["m_columns"][] = "researchConsiderNumber";
$proto27["m_columns"][] = "processName";
$proto27["m_columns"][] = "stepName";
$proto27["m_columns"][] = "researchConsiderFile";
$proto27["m_columns"][] = "researchRegisterDesc";
$proto27["m_columns"][] = "researchConsiderName";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "entryTime";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "researchConsider";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "researchConsiderView";
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
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "researchType";
$proto31["m_srcTableName"] = "researchConsiderView";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "typeNumber";
$proto31["m_columns"][] = "typeName";
$proto31["m_columns"][] = "entryUserName";
$proto31["m_columns"][] = "entryTime";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN researchType ON researchType.id = researchConsider.researchTypeID";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "researchConsiderView";
$proto32=array();
$proto32["m_sql"] = "researchType.id = researchConsider.researchTypeID";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchConsiderView"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= researchConsider.researchTypeID";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "researchTypeID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderView"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="researchConsiderView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchconsiderview = createSqlQuery_researchconsiderview();


	
				;

										

$tdataresearchconsiderview[".sqlquery"] = $queryData_researchconsiderview;



include_once(getabspath("include/researchconsiderview_events.php"));
$tableEvents["researchConsiderView"] = new eventclass_researchconsiderview;
$tdataresearchconsiderview[".hasEvents"] = true;

$query = &$queryData_researchconsiderview;
$table = "researchConsiderView";
// here goes EVENT_INIT_TABLE event

		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchType`.`typeName` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>