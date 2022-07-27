<?php
$tdataresearchtype = array();
$tdataresearchtype[".searchableFields"] = array();
$tdataresearchtype[".ShortName"] = "researchtype";
$tdataresearchtype[".OwnerID"] = "";
$tdataresearchtype[".OriginalTable"] = "researchType";


$tdataresearchtype[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchtype[".originalPagesByType"] = $tdataresearchtype[".pagesByType"];
$tdataresearchtype[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchtype[".originalPages"] = $tdataresearchtype[".pages"];
$tdataresearchtype[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchtype[".originalDefaultPages"] = $tdataresearchtype[".defaultPages"];

//	field labels
$fieldLabelsresearchtype = array();
$fieldToolTipsresearchtype = array();
$pageTitlesresearchtype = array();
$placeHoldersresearchtype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchtype["English"] = array();
	$fieldToolTipsresearchtype["English"] = array();
	$placeHoldersresearchtype["English"] = array();
	$pageTitlesresearchtype["English"] = array();
	$fieldLabelsresearchtype["English"]["id"] = "ID";
	$fieldToolTipsresearchtype["English"]["id"] = "";
	$placeHoldersresearchtype["English"]["id"] = "ID";
	$fieldLabelsresearchtype["English"]["typeNumber"] = "Type Number";
	$fieldToolTipsresearchtype["English"]["typeNumber"] = "";
	$placeHoldersresearchtype["English"]["typeNumber"] = "Type Number";
	$fieldLabelsresearchtype["English"]["typeName"] = "Type Name";
	$fieldToolTipsresearchtype["English"]["typeName"] = "";
	$placeHoldersresearchtype["English"]["typeName"] = "Type Name";
	$fieldLabelsresearchtype["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchtype["English"]["entryUserName"] = "";
	$placeHoldersresearchtype["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchtype["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchtype["English"]["entryTime"] = "";
	$placeHoldersresearchtype["English"]["entryTime"] = "Entry Time";
	if (count($fieldToolTipsresearchtype["English"]))
		$tdataresearchtype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchtype["Thai"] = array();
	$fieldToolTipsresearchtype["Thai"] = array();
	$placeHoldersresearchtype["Thai"] = array();
	$pageTitlesresearchtype["Thai"] = array();
	$fieldLabelsresearchtype["Thai"]["id"] = "ID";
	$fieldToolTipsresearchtype["Thai"]["id"] = "";
	$placeHoldersresearchtype["Thai"]["id"] = "ID";
	$fieldLabelsresearchtype["Thai"]["typeNumber"] = "ลำดับประเภททุน";
	$fieldToolTipsresearchtype["Thai"]["typeNumber"] = "";
	$placeHoldersresearchtype["Thai"]["typeNumber"] = "ลำดับประเภททุน";
	$fieldLabelsresearchtype["Thai"]["typeName"] = "ชื่อประเภททุน";
	$fieldToolTipsresearchtype["Thai"]["typeName"] = "";
	$placeHoldersresearchtype["Thai"]["typeName"] = "ชื่อประเภททุน";
	$fieldLabelsresearchtype["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchtype["Thai"]["entryUserName"] = "";
	$placeHoldersresearchtype["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchtype["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchtype["Thai"]["entryTime"] = "";
	$placeHoldersresearchtype["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	if (count($fieldToolTipsresearchtype["Thai"]))
		$tdataresearchtype[".isUseToolTips"] = true;
}


	$tdataresearchtype[".NCSearch"] = true;



$tdataresearchtype[".shortTableName"] = "researchtype";
$tdataresearchtype[".nSecOptions"] = 0;

$tdataresearchtype[".mainTableOwnerID"] = "";
$tdataresearchtype[".entityType"] = 0;
$tdataresearchtype[".connId"] = "mc_at_192_168_1_111";


$tdataresearchtype[".strOriginalTableName"] = "researchType";

	



$tdataresearchtype[".showAddInPopup"] = false;

$tdataresearchtype[".showEditInPopup"] = false;

$tdataresearchtype[".showViewInPopup"] = false;

$tdataresearchtype[".listAjax"] = false;
//	temporary
//$tdataresearchtype[".listAjax"] = false;

	$tdataresearchtype[".audit"] = true;

	$tdataresearchtype[".locking"] = false;


$pages = $tdataresearchtype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchtype[".edit"] = true;
	$tdataresearchtype[".afterEditAction"] = 1;
	$tdataresearchtype[".closePopupAfterEdit"] = 1;
	$tdataresearchtype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchtype[".add"] = true;
$tdataresearchtype[".afterAddAction"] = 1;
$tdataresearchtype[".closePopupAfterAdd"] = 1;
$tdataresearchtype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchtype[".list"] = true;
}



$tdataresearchtype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchtype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchtype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchtype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchtype[".printFriendly"] = true;
}



$tdataresearchtype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchtype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchtype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchtype[".isUseAjaxSuggest"] = true;

$tdataresearchtype[".rowHighlite"] = true;



						

$tdataresearchtype[".ajaxCodeSnippetAdded"] = false;

$tdataresearchtype[".buttonsAdded"] = false;

$tdataresearchtype[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchtype[".isUseTimeForSearch"] = false;


$tdataresearchtype[".badgeColor"] = "D2691E";


$tdataresearchtype[".allSearchFields"] = array();
$tdataresearchtype[".filterFields"] = array();
$tdataresearchtype[".requiredSearchFields"] = array();

$tdataresearchtype[".googleLikeFields"] = array();
$tdataresearchtype[".googleLikeFields"][] = "id";
$tdataresearchtype[".googleLikeFields"][] = "typeNumber";
$tdataresearchtype[".googleLikeFields"][] = "typeName";
$tdataresearchtype[".googleLikeFields"][] = "entryUserName";
$tdataresearchtype[".googleLikeFields"][] = "entryTime";



$tdataresearchtype[".tableType"] = "list";

$tdataresearchtype[".printerPageOrientation"] = 0;
$tdataresearchtype[".nPrinterPageScale"] = 100;

$tdataresearchtype[".nPrinterSplitRecords"] = 40;

$tdataresearchtype[".geocodingEnabled"] = false;










$tdataresearchtype[".pageSize"] = 20;

$tdataresearchtype[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY typeNumber";
$tdataresearchtype[".strOrderBy"] = $tstrOrderBy;

$tdataresearchtype[".orderindexes"] = array();
	$tdataresearchtype[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "typeNumber");



$tdataresearchtype[".sqlHead"] = "SELECT id,  	typeNumber,  	typeName,  	entryUserName,  	entryTime";
$tdataresearchtype[".sqlFrom"] = "FROM researchType";
$tdataresearchtype[".sqlWhereExpr"] = "";
$tdataresearchtype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchtype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchtype[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchtype[".highlightSearchResults"] = true;

$tableKeysresearchtype = array();
$tableKeysresearchtype[] = "id";
$tdataresearchtype[".Keys"] = $tableKeysresearchtype;


$tdataresearchtype[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchType";
	$fdata["Label"] = GetFieldLabel("researchType","id");
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


	$tdataresearchtype["id"] = $fdata;
		$tdataresearchtype[".searchableFields"][] = "id";
//	typeNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "typeNumber";
	$fdata["GoodName"] = "typeNumber";
	$fdata["ownerTable"] = "researchType";
	$fdata["Label"] = GetFieldLabel("researchType","typeNumber");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "typeNumber";

		$fdata["sourceSingle"] = "typeNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeNumber";

	
	
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


	$tdataresearchtype["typeNumber"] = $fdata;
		$tdataresearchtype[".searchableFields"][] = "typeNumber";
//	typeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "typeName";
	$fdata["GoodName"] = "typeName";
	$fdata["ownerTable"] = "researchType";
	$fdata["Label"] = GetFieldLabel("researchType","typeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "typeName";

		$fdata["sourceSingle"] = "typeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeName";

	
	
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


	$tdataresearchtype["typeName"] = $fdata;
		$tdataresearchtype[".searchableFields"][] = "typeName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchType";
	$fdata["Label"] = GetFieldLabel("researchType","entryUserName");
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


	$tdataresearchtype["entryUserName"] = $fdata;
		$tdataresearchtype[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchType";
	$fdata["Label"] = GetFieldLabel("researchType","entryTime");
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


	$tdataresearchtype["entryTime"] = $fdata;
		$tdataresearchtype[".searchableFields"][] = "entryTime";


$tables_data["researchType"]=&$tdataresearchtype;
$field_labels["researchType"] = &$fieldLabelsresearchtype;
$fieldToolTips["researchType"] = &$fieldToolTipsresearchtype;
$placeHolders["researchType"] = &$placeHoldersresearchtype;
$page_titles["researchType"] = &$pageTitlesresearchtype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchType"] = array();
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


		
	$detailsTablesData["researchType"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchType"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchType"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchType"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchType"][$dIndex]["detailKeys"][]="researchTypeID";
//	researchTypeGroup
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchTypeGroup";
		$detailsParam["dOriginalTable"] = "researchTypeGroup";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchtypegroup";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchTypeGroup");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchType"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchType"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchType"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchType"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchType"][$dIndex]["detailKeys"][]="researchTypeID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchType"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchtype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	typeNumber,  	typeName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchType";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY typeNumber";
	
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
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchType";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "typeNumber",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto8["m_sql"] = "typeNumber";
$proto8["m_srcTableName"] = "researchType";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto10["m_sql"] = "typeName";
$proto10["m_srcTableName"] = "researchType";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto12["m_sql"] = "entryUserName";
$proto12["m_srcTableName"] = "researchType";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto14["m_sql"] = "entryTime";
$proto14["m_srcTableName"] = "researchType";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "researchType";
$proto17["m_srcTableName"] = "researchType";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "typeNumber";
$proto17["m_columns"][] = "typeName";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "entryTime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "researchType";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "researchType";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "typeNumber",
	"m_strTable" => "researchType",
	"m_srcTableName" => "researchType"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="researchType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchtype = createSqlQuery_researchtype();


	
				;

					

$tdataresearchtype[".sqlquery"] = $queryData_researchtype;



include_once(getabspath("include/researchtype_events.php"));
$tableEvents["researchType"] = new eventclass_researchtype;
$tdataresearchtype[".hasEvents"] = true;

$query = &$queryData_researchtype;
$table = "researchType";
// here goes EVENT_INIT_TABLE event

		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchType`.`typeName` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>