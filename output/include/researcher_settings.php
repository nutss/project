<?php
$tdataresearcher = array();
$tdataresearcher[".searchableFields"] = array();
$tdataresearcher[".ShortName"] = "researcher";
$tdataresearcher[".OwnerID"] = "";
$tdataresearcher[".OriginalTable"] = "researcher";


$tdataresearcher[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearcher[".originalPagesByType"] = $tdataresearcher[".pagesByType"];
$tdataresearcher[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearcher[".originalPages"] = $tdataresearcher[".pages"];
$tdataresearcher[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearcher[".originalDefaultPages"] = $tdataresearcher[".defaultPages"];

//	field labels
$fieldLabelsresearcher = array();
$fieldToolTipsresearcher = array();
$pageTitlesresearcher = array();
$placeHoldersresearcher = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearcher["English"] = array();
	$fieldToolTipsresearcher["English"] = array();
	$placeHoldersresearcher["English"] = array();
	$pageTitlesresearcher["English"] = array();
	$fieldLabelsresearcher["English"]["id"] = "Id";
	$fieldToolTipsresearcher["English"]["id"] = "";
	$placeHoldersresearcher["English"]["id"] = "";
	$fieldLabelsresearcher["English"]["projectID"] = "Project ID";
	$fieldToolTipsresearcher["English"]["projectID"] = "";
	$placeHoldersresearcher["English"]["projectID"] = "";
	$fieldLabelsresearcher["English"]["researchProjectNumber"] = "Research Project Number";
	$fieldToolTipsresearcher["English"]["researchProjectNumber"] = "";
	$placeHoldersresearcher["English"]["researchProjectNumber"] = "";
	$fieldLabelsresearcher["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearcher["English"]["researchType"] = "";
	$placeHoldersresearcher["English"]["researchType"] = "";
	$fieldLabelsresearcher["English"]["researchProjectName"] = "Research Project Name";
	$fieldToolTipsresearcher["English"]["researchProjectName"] = "";
	$placeHoldersresearcher["English"]["researchProjectName"] = "";
	$fieldLabelsresearcher["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearcher["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearcher["English"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearcher["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearcher["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearcher["English"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearcher["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearcher["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearcher["English"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearcher["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearcher["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearcher["English"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearcher["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearcher["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearcher["English"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearcher["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearcher["English"]["entryUserName"] = "";
	$placeHoldersresearcher["English"]["entryUserName"] = "";
	$fieldLabelsresearcher["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearcher["English"]["entryTime"] = "";
	$placeHoldersresearcher["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearcher["English"]))
		$tdataresearcher[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearcher["Thai"] = array();
	$fieldToolTipsresearcher["Thai"] = array();
	$placeHoldersresearcher["Thai"] = array();
	$pageTitlesresearcher["Thai"] = array();
	$fieldLabelsresearcher["Thai"]["id"] = "ID";
	$fieldToolTipsresearcher["Thai"]["id"] = "";
	$placeHoldersresearcher["Thai"]["id"] = "";
	$fieldLabelsresearcher["Thai"]["projectID"] = "Project ID";
	$fieldToolTipsresearcher["Thai"]["projectID"] = "";
	$placeHoldersresearcher["Thai"]["projectID"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectNumber"] = "ลำดับนักวิจัย";
	$fieldToolTipsresearcher["Thai"]["researchProjectNumber"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectNumber"] = "";
	$fieldLabelsresearcher["Thai"]["researchType"] = "ประเภทนักวิจัย";
	$fieldToolTipsresearcher["Thai"]["researchType"] = "";
	$placeHoldersresearcher["Thai"]["researchType"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectName"] = "ชื่อผู้ร่วมเสนอโครงการ";
	$fieldToolTipsresearcher["Thai"]["researchProjectName"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectName"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย/มหาลัย";
	$fieldToolTipsresearcher["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย/คณะ";
	$fieldToolTipsresearcher["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearcher["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearcher["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearcher["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearcher["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearcher["Thai"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearcher["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearcher["Thai"]["entryUserName"] = "";
	$placeHoldersresearcher["Thai"]["entryUserName"] = "";
	$fieldLabelsresearcher["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearcher["Thai"]["entryTime"] = "";
	$placeHoldersresearcher["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearcher["Thai"]))
		$tdataresearcher[".isUseToolTips"] = true;
}


	$tdataresearcher[".NCSearch"] = true;



$tdataresearcher[".shortTableName"] = "researcher";
$tdataresearcher[".nSecOptions"] = 0;

$tdataresearcher[".mainTableOwnerID"] = "";
$tdataresearcher[".entityType"] = 0;
$tdataresearcher[".connId"] = "mc_at_192_168_1_111";


$tdataresearcher[".strOriginalTableName"] = "researcher";

	



$tdataresearcher[".showAddInPopup"] = false;

$tdataresearcher[".showEditInPopup"] = false;

$tdataresearcher[".showViewInPopup"] = false;

$tdataresearcher[".listAjax"] = false;
//	temporary
//$tdataresearcher[".listAjax"] = false;

	$tdataresearcher[".audit"] = false;

	$tdataresearcher[".locking"] = false;


$pages = $tdataresearcher[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearcher[".edit"] = true;
	$tdataresearcher[".afterEditAction"] = 1;
	$tdataresearcher[".closePopupAfterEdit"] = 1;
	$tdataresearcher[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearcher[".add"] = true;
$tdataresearcher[".afterAddAction"] = 1;
$tdataresearcher[".closePopupAfterAdd"] = 1;
$tdataresearcher[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearcher[".list"] = true;
}



$tdataresearcher[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearcher[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearcher[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearcher[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearcher[".printFriendly"] = true;
}



$tdataresearcher[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearcher[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearcher[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearcher[".isUseAjaxSuggest"] = true;

$tdataresearcher[".rowHighlite"] = true;



												

$tdataresearcher[".ajaxCodeSnippetAdded"] = false;

$tdataresearcher[".buttonsAdded"] = false;

$tdataresearcher[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearcher[".isUseTimeForSearch"] = false;


$tdataresearcher[".badgeColor"] = "2f4f4f";


$tdataresearcher[".allSearchFields"] = array();
$tdataresearcher[".filterFields"] = array();
$tdataresearcher[".requiredSearchFields"] = array();

$tdataresearcher[".googleLikeFields"] = array();
$tdataresearcher[".googleLikeFields"][] = "id";
$tdataresearcher[".googleLikeFields"][] = "projectID";
$tdataresearcher[".googleLikeFields"][] = "researchProjectNumber";
$tdataresearcher[".googleLikeFields"][] = "researchType";
$tdataresearcher[".googleLikeFields"][] = "researchProjectName";
$tdataresearcher[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearcher[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearcher[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearcher[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearcher[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearcher[".googleLikeFields"][] = "entryUserName";
$tdataresearcher[".googleLikeFields"][] = "entryTime";



$tdataresearcher[".tableType"] = "list";

$tdataresearcher[".printerPageOrientation"] = 0;
$tdataresearcher[".nPrinterPageScale"] = 100;

$tdataresearcher[".nPrinterSplitRecords"] = 40;

$tdataresearcher[".geocodingEnabled"] = false;










$tdataresearcher[".pageSize"] = 20;

$tdataresearcher[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearcher[".strOrderBy"] = $tstrOrderBy;

$tdataresearcher[".orderindexes"] = array();


$tdataresearcher[".sqlHead"] = "SELECT id,  	projectID,  	researchProjectNumber,  	researchType,  	researchProjectName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	entryUserName,  	entryTime";
$tdataresearcher[".sqlFrom"] = "FROM researcher";
$tdataresearcher[".sqlWhereExpr"] = "";
$tdataresearcher[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearcher[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearcher[".arrGroupsPerPage"] = $arrGPP;

$tdataresearcher[".highlightSearchResults"] = true;

$tableKeysresearcher = array();
$tableKeysresearcher[] = "id";
$tdataresearcher[".Keys"] = $tableKeysresearcher;


$tdataresearcher[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","id");
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


	$tdataresearcher["id"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","projectID");
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


	$tdataresearcher["projectID"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "projectID";
//	researchProjectNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectNumber";
	$fdata["GoodName"] = "researchProjectNumber";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectNumber");
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


	$tdataresearcher["researchProjectNumber"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectNumber";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchType");
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


	$tdataresearcher["researchType"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchType";
//	researchProjectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectName";
	$fdata["GoodName"] = "researchProjectName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectName");
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


	$tdataresearcher["researchProjectName"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectAffiliationName");
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


	$tdataresearcher["researchProjectAffiliationName"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectSubAffiliationName");
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


	$tdataresearcher["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectAffiliationMobile");
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


	$tdataresearcher["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectAffiliationTelephone");
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


	$tdataresearcher["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","researchProjectAffiliationEmail");
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


	$tdataresearcher["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "researchProjectAffiliationEmail";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","entryUserName");
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


	$tdataresearcher["entryUserName"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researcher";
	$fdata["Label"] = GetFieldLabel("researcher","entryTime");
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


	$tdataresearcher["entryTime"] = $fdata;
		$tdataresearcher[".searchableFields"][] = "entryTime";


$tables_data["researcher"]=&$tdataresearcher;
$field_labels["researcher"] = &$fieldLabelsresearcher;
$fieldToolTips["researcher"] = &$fieldToolTipsresearcher;
$placeHolders["researcher"] = &$placeHoldersresearcher;
$page_titles["researcher"] = &$pageTitlesresearcher;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researcher"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researcher"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchScholarshipProposal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchScholarshipProposal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchscholarshipproposal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researcher"][0] = $masterParams;
				$masterTablesData["researcher"][0]["masterKeys"] = array();
	$masterTablesData["researcher"][0]["masterKeys"][]="id";
				$masterTablesData["researcher"][0]["detailKeys"] = array();
	$masterTablesData["researcher"][0]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researcher()
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
	"m_srcTableName" => "researcher"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researcher";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "researcher";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNumber",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto10["m_sql"] = "researchProjectNumber";
$proto10["m_srcTableName"] = "researcher";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto12["m_sql"] = "researchType";
$proto12["m_srcTableName"] = "researcher";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto14["m_sql"] = "researchProjectName";
$proto14["m_srcTableName"] = "researcher";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto16["m_sql"] = "researchProjectAffiliationName";
$proto16["m_srcTableName"] = "researcher";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto18["m_sql"] = "researchProjectSubAffiliationName";
$proto18["m_srcTableName"] = "researcher";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto20["m_sql"] = "researchProjectAffiliationMobile";
$proto20["m_srcTableName"] = "researcher";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto22["m_sql"] = "researchProjectAffiliationTelephone";
$proto22["m_srcTableName"] = "researcher";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto24["m_sql"] = "researchProjectAffiliationEmail";
$proto24["m_srcTableName"] = "researcher";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto26["m_sql"] = "entryUserName";
$proto26["m_srcTableName"] = "researcher";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researcher",
	"m_srcTableName" => "researcher"
));

$proto28["m_sql"] = "entryTime";
$proto28["m_srcTableName"] = "researcher";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "researcher";
$proto31["m_srcTableName"] = "researcher";
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
$proto30["m_srcTableName"] = "researcher";
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
$proto0["m_srcTableName"]="researcher";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researcher = createSqlQuery_researcher();


	
				;

												

$tdataresearcher[".sqlquery"] = $queryData_researcher;



$tableEvents["researcher"] = new eventsBase;
$tdataresearcher[".hasEvents"] = false;

?>