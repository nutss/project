<?php
$tdataresearchresearcher = array();
$tdataresearchresearcher[".searchableFields"] = array();
$tdataresearchresearcher[".ShortName"] = "researchresearcher";
$tdataresearchresearcher[".OwnerID"] = "";
$tdataresearchresearcher[".OriginalTable"] = "researcher";


$tdataresearchresearcher[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchresearcher[".originalPagesByType"] = $tdataresearchresearcher[".pagesByType"];
$tdataresearchresearcher[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchresearcher[".originalPages"] = $tdataresearchresearcher[".pages"];
$tdataresearchresearcher[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchresearcher[".originalDefaultPages"] = $tdataresearchresearcher[".defaultPages"];

//	field labels
$fieldLabelsresearchresearcher = array();
$fieldToolTipsresearchresearcher = array();
$pageTitlesresearchresearcher = array();
$placeHoldersresearchresearcher = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchresearcher["English"] = array();
	$fieldToolTipsresearchresearcher["English"] = array();
	$placeHoldersresearchresearcher["English"] = array();
	$pageTitlesresearchresearcher["English"] = array();
	$fieldLabelsresearchresearcher["English"]["id"] = "Id";
	$fieldToolTipsresearchresearcher["English"]["id"] = "";
	$placeHoldersresearchresearcher["English"]["id"] = "";
	$fieldLabelsresearchresearcher["English"]["projectID"] = "Project ID";
	$fieldToolTipsresearchresearcher["English"]["projectID"] = "";
	$placeHoldersresearchresearcher["English"]["projectID"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectNumber"] = "Research Project Number";
	$fieldToolTipsresearchresearcher["English"]["researchProjectNumber"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectNumber"] = "";
	$fieldLabelsresearchresearcher["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchresearcher["English"]["researchType"] = "";
	$placeHoldersresearchresearcher["English"]["researchType"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectName"] = "Research Project Name";
	$fieldToolTipsresearchresearcher["English"]["researchProjectName"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectName"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearchresearcher["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearchresearcher["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearchresearcher["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearchresearcher["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchresearcher["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearchresearcher["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchresearcher["English"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchresearcher["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchresearcher["English"]["entryUserName"] = "";
	$placeHoldersresearchresearcher["English"]["entryUserName"] = "";
	$fieldLabelsresearchresearcher["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchresearcher["English"]["entryTime"] = "";
	$placeHoldersresearchresearcher["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchresearcher["English"]))
		$tdataresearchresearcher[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchresearcher["Thai"] = array();
	$fieldToolTipsresearchresearcher["Thai"] = array();
	$placeHoldersresearchresearcher["Thai"] = array();
	$pageTitlesresearchresearcher["Thai"] = array();
	$fieldLabelsresearchresearcher["Thai"]["id"] = "ID";
	$fieldToolTipsresearchresearcher["Thai"]["id"] = "";
	$placeHoldersresearchresearcher["Thai"]["id"] = "";
	$fieldLabelsresearchresearcher["Thai"]["projectID"] = "Project ID";
	$fieldToolTipsresearchresearcher["Thai"]["projectID"] = "";
	$placeHoldersresearchresearcher["Thai"]["projectID"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectNumber"] = "ลำดับนักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectNumber"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectNumber"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchType"] = "ประเภทนักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchType"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchType"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectName"] = "ชื่อผู้ร่วมเสนอโครงการ";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectName"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectName"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchresearcher["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearchresearcher["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchresearcher["Thai"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchresearcher["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchresearcher["Thai"]["entryUserName"] = "";
	$placeHoldersresearchresearcher["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchresearcher["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchresearcher["Thai"]["entryTime"] = "";
	$placeHoldersresearchresearcher["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchresearcher["Thai"]))
		$tdataresearchresearcher[".isUseToolTips"] = true;
}


	$tdataresearchresearcher[".NCSearch"] = true;



$tdataresearchresearcher[".shortTableName"] = "researchresearcher";
$tdataresearchresearcher[".nSecOptions"] = 0;

$tdataresearchresearcher[".mainTableOwnerID"] = "";
$tdataresearchresearcher[".entityType"] = 1;
$tdataresearchresearcher[".connId"] = "mc_at_192_168_1_111";


$tdataresearchresearcher[".strOriginalTableName"] = "researcher";

	



$tdataresearchresearcher[".showAddInPopup"] = false;

$tdataresearchresearcher[".showEditInPopup"] = false;

$tdataresearchresearcher[".showViewInPopup"] = false;

$tdataresearchresearcher[".listAjax"] = false;
//	temporary
//$tdataresearchresearcher[".listAjax"] = false;

	$tdataresearchresearcher[".audit"] = false;

	$tdataresearchresearcher[".locking"] = false;


$pages = $tdataresearchresearcher[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchresearcher[".edit"] = true;
	$tdataresearchresearcher[".afterEditAction"] = 1;
	$tdataresearchresearcher[".closePopupAfterEdit"] = 1;
	$tdataresearchresearcher[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchresearcher[".add"] = true;
$tdataresearchresearcher[".afterAddAction"] = 1;
$tdataresearchresearcher[".closePopupAfterAdd"] = 1;
$tdataresearchresearcher[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchresearcher[".list"] = true;
}



$tdataresearchresearcher[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchresearcher[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchresearcher[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchresearcher[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchresearcher[".printFriendly"] = true;
}



$tdataresearchresearcher[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchresearcher[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchresearcher[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchresearcher[".isUseAjaxSuggest"] = true;

$tdataresearchresearcher[".rowHighlite"] = true;



												

$tdataresearchresearcher[".ajaxCodeSnippetAdded"] = false;

$tdataresearchresearcher[".buttonsAdded"] = false;

$tdataresearchresearcher[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchresearcher[".isUseTimeForSearch"] = false;


$tdataresearchresearcher[".badgeColor"] = "8fbc8b";


$tdataresearchresearcher[".allSearchFields"] = array();
$tdataresearchresearcher[".filterFields"] = array();
$tdataresearchresearcher[".requiredSearchFields"] = array();

$tdataresearchresearcher[".googleLikeFields"] = array();
$tdataresearchresearcher[".googleLikeFields"][] = "id";
$tdataresearchresearcher[".googleLikeFields"][] = "projectID";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectNumber";
$tdataresearchresearcher[".googleLikeFields"][] = "researchType";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectName";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearchresearcher[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearchresearcher[".googleLikeFields"][] = "entryUserName";
$tdataresearchresearcher[".googleLikeFields"][] = "entryTime";



$tdataresearchresearcher[".tableType"] = "list";

$tdataresearchresearcher[".printerPageOrientation"] = 0;
$tdataresearchresearcher[".nPrinterPageScale"] = 100;

$tdataresearchresearcher[".nPrinterSplitRecords"] = 40;

$tdataresearchresearcher[".geocodingEnabled"] = false;










$tdataresearchresearcher[".pageSize"] = 20;

$tdataresearchresearcher[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchresearcher[".strOrderBy"] = $tstrOrderBy;

$tdataresearchresearcher[".orderindexes"] = array();


$tdataresearchresearcher[".sqlHead"] = "SELECT id,  	projectID,  	researchProjectNumber,  	researchType,  	researchProjectName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	entryUserName,  	entryTime";
$tdataresearchresearcher[".sqlFrom"] = "FROM researcher";
$tdataresearchresearcher[".sqlWhereExpr"] = "";
$tdataresearchresearcher[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchresearcher[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchresearcher[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchresearcher[".highlightSearchResults"] = true;

$tableKeysresearchresearcher = array();
$tableKeysresearchresearcher[] = "id";
$tdataresearchresearcher[".Keys"] = $tableKeysresearchresearcher;


$tdataresearchresearcher[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","id");
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


	$tdataresearchresearcher["id"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataresearchresearcher["projectID"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "projectID";
//	researchProjectNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectNumber";
	$fdata["GoodName"] = "researchProjectNumber";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectNumber");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "researchProjectNumber";

		$fdata["sourceSingle"] = "researchProjectNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectNumber";

	
	
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


	$tdataresearchresearcher["researchProjectNumber"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectNumber";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchType");
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
	$edata["LookupTable"] = "optionSub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID=6";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
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


	$tdataresearchresearcher["researchType"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchType";
//	researchProjectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectName";
	$fdata["GoodName"] = "researchProjectName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectName";

		$fdata["sourceSingle"] = "researchProjectName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectName";

	
	
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


	$tdataresearchresearcher["researchProjectName"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationName";

		$fdata["sourceSingle"] = "researchProjectAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationName";

	
	
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


	$tdataresearchresearcher["researchProjectAffiliationName"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectSubAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectSubAffiliationName";

		$fdata["sourceSingle"] = "researchProjectSubAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectSubAffiliationName";

	
	
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


	$tdataresearchresearcher["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectAffiliationMobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationMobile";

		$fdata["sourceSingle"] = "researchProjectAffiliationMobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationMobile";

	
	
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


	$tdataresearchresearcher["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectAffiliationTelephone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationTelephone";

		$fdata["sourceSingle"] = "researchProjectAffiliationTelephone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationTelephone";

	
	
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


	$tdataresearchresearcher["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","researchProjectAffiliationEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationEmail";

		$fdata["sourceSingle"] = "researchProjectAffiliationEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationEmail";

	
	
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


	$tdataresearchresearcher["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "researchProjectAffiliationEmail";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","entryUserName");
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


	$tdataresearchresearcher["entryUserName"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researchResearcher","entryTime");
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


	$tdataresearchresearcher["entryTime"] = $fdata;
		$tdataresearchresearcher[".searchableFields"][] = "entryTime";


$tables_data["researchResearcher"]=&$tdataresearchresearcher;
$field_labels["researchResearcher"] = &$fieldLabelsresearchresearcher;
$fieldToolTips["researchResearcher"] = &$fieldToolTipsresearchresearcher;
$placeHolders["researchResearcher"] = &$placeHoldersresearchresearcher;
$page_titles["researchResearcher"] = &$pageTitlesresearchresearcher;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchResearcher"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchResearcher"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchProjectProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchprojectproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchResearcher"][0] = $masterParams;
				$masterTablesData["researchResearcher"][0]["masterKeys"] = array();
	$masterTablesData["researchResearcher"][0]["masterKeys"][]="id";
				$masterTablesData["researchResearcher"][0]["detailKeys"] = array();
	$masterTablesData["researchResearcher"][0]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchresearcher()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectID,  	researchProjectNumber,  	researchType,  	researchProjectName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researcher";
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
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchResearcher";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "researchResearcher";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNumber",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto10["m_sql"] = "researchProjectNumber";
$proto10["m_srcTableName"] = "researchResearcher";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto12["m_sql"] = "researchType";
$proto12["m_srcTableName"] = "researchResearcher";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto14["m_sql"] = "researchProjectName";
$proto14["m_srcTableName"] = "researchResearcher";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto16["m_sql"] = "researchProjectAffiliationName";
$proto16["m_srcTableName"] = "researchResearcher";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto18["m_sql"] = "researchProjectSubAffiliationName";
$proto18["m_srcTableName"] = "researchResearcher";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto20["m_sql"] = "researchProjectAffiliationMobile";
$proto20["m_srcTableName"] = "researchResearcher";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto22["m_sql"] = "researchProjectAffiliationTelephone";
$proto22["m_srcTableName"] = "researchResearcher";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto24["m_sql"] = "researchProjectAffiliationEmail";
$proto24["m_srcTableName"] = "researchResearcher";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto26["m_sql"] = "entryUserName";
$proto26["m_srcTableName"] = "researchResearcher";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researchResearcher"
));

$proto28["m_sql"] = "entryTime";
$proto28["m_srcTableName"] = "researchResearcher";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "researcher";
$proto31["m_srcTableName"] = "researchResearcher";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "projectID";
$proto31["m_columns"][] = "researchProjectNumber";
$proto31["m_columns"][] = "researchType";
$proto31["m_columns"][] = "researchProjectName";
$proto31["m_columns"][] = "researchProjectAffiliationName";
$proto31["m_columns"][] = "researchProjectSubAffiliationName";
$proto31["m_columns"][] = "researchProjectAffiliationMobile";
$proto31["m_columns"][] = "researchProjectAffiliationTelephone";
$proto31["m_columns"][] = "researchProjectAffiliationEmail";
$proto31["m_columns"][] = "entryUserName";
$proto31["m_columns"][] = "entryTime";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "researcher";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "researchResearcher";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchResearcher";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchresearcher = createSqlQuery_researchresearcher();


	
				;

												

$tdataresearchresearcher[".sqlquery"] = $queryData_researchresearcher;



$tableEvents["researchResearcher"] = new eventsBase;
$tdataresearchresearcher[".hasEvents"] = false;

?>