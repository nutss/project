<?php
$tdataprojectstep = array();
$tdataprojectstep[".searchableFields"] = array();
$tdataprojectstep[".ShortName"] = "projectstep";
$tdataprojectstep[".OwnerID"] = "";
$tdataprojectstep[".OriginalTable"] = "ProjectStep";


$tdataprojectstep[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectstep[".originalPagesByType"] = $tdataprojectstep[".pagesByType"];
$tdataprojectstep[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectstep[".originalPages"] = $tdataprojectstep[".pages"];
$tdataprojectstep[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectstep[".originalDefaultPages"] = $tdataprojectstep[".defaultPages"];

//	field labels
$fieldLabelsprojectstep = array();
$fieldToolTipsprojectstep = array();
$pageTitlesprojectstep = array();
$placeHoldersprojectstep = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectstep["English"] = array();
	$fieldToolTipsprojectstep["English"] = array();
	$placeHoldersprojectstep["English"] = array();
	$pageTitlesprojectstep["English"] = array();
	$fieldLabelsprojectstep["English"]["id"] = "ID";
	$fieldToolTipsprojectstep["English"]["id"] = "";
	$placeHoldersprojectstep["English"]["id"] = "";
	$fieldLabelsprojectstep["English"]["stepNumber"] = "Step Number";
	$fieldToolTipsprojectstep["English"]["stepNumber"] = "";
	$placeHoldersprojectstep["English"]["stepNumber"] = "";
	$fieldLabelsprojectstep["English"]["stepName"] = "Step Name";
	$fieldToolTipsprojectstep["English"]["stepName"] = "";
	$placeHoldersprojectstep["English"]["stepName"] = "";
	$fieldLabelsprojectstep["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectstep["English"]["entryUserName"] = "";
	$placeHoldersprojectstep["English"]["entryUserName"] = "";
	$fieldLabelsprojectstep["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectstep["English"]["entryTime"] = "";
	$placeHoldersprojectstep["English"]["entryTime"] = "";
	$fieldLabelsprojectstep["English"]["projectTypeID"] = "Project Type ID";
	$fieldToolTipsprojectstep["English"]["projectTypeID"] = "";
	$placeHoldersprojectstep["English"]["projectTypeID"] = "";
	if (count($fieldToolTipsprojectstep["English"]))
		$tdataprojectstep[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectstep["Thai"] = array();
	$fieldToolTipsprojectstep["Thai"] = array();
	$placeHoldersprojectstep["Thai"] = array();
	$pageTitlesprojectstep["Thai"] = array();
	$fieldLabelsprojectstep["Thai"]["id"] = "ID";
	$fieldToolTipsprojectstep["Thai"]["id"] = "";
	$placeHoldersprojectstep["Thai"]["id"] = "";
	$fieldLabelsprojectstep["Thai"]["stepNumber"] = "ลำดับขั้นตอน";
	$fieldToolTipsprojectstep["Thai"]["stepNumber"] = "";
	$placeHoldersprojectstep["Thai"]["stepNumber"] = "";
	$fieldLabelsprojectstep["Thai"]["stepName"] = "ขั้นตอน";
	$fieldToolTipsprojectstep["Thai"]["stepName"] = "";
	$placeHoldersprojectstep["Thai"]["stepName"] = "";
	$fieldLabelsprojectstep["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprojectstep["Thai"]["entryUserName"] = "";
	$placeHoldersprojectstep["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectstep["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectstep["Thai"]["entryTime"] = "";
	$placeHoldersprojectstep["Thai"]["entryTime"] = "";
	$fieldLabelsprojectstep["Thai"]["projectTypeID"] = "ประเภทโครงการ";
	$fieldToolTipsprojectstep["Thai"]["projectTypeID"] = "";
	$placeHoldersprojectstep["Thai"]["projectTypeID"] = "";
	if (count($fieldToolTipsprojectstep["Thai"]))
		$tdataprojectstep[".isUseToolTips"] = true;
}


	$tdataprojectstep[".NCSearch"] = true;



$tdataprojectstep[".shortTableName"] = "projectstep";
$tdataprojectstep[".nSecOptions"] = 0;

$tdataprojectstep[".mainTableOwnerID"] = "";
$tdataprojectstep[".entityType"] = 0;
$tdataprojectstep[".connId"] = "mc_at_192_168_1_111";


$tdataprojectstep[".strOriginalTableName"] = "ProjectStep";

	



$tdataprojectstep[".showAddInPopup"] = false;

$tdataprojectstep[".showEditInPopup"] = false;

$tdataprojectstep[".showViewInPopup"] = false;

$tdataprojectstep[".listAjax"] = false;
//	temporary
//$tdataprojectstep[".listAjax"] = false;

	$tdataprojectstep[".audit"] = false;

	$tdataprojectstep[".locking"] = false;


$pages = $tdataprojectstep[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectstep[".edit"] = true;
	$tdataprojectstep[".afterEditAction"] = 0;
	$tdataprojectstep[".closePopupAfterEdit"] = 1;
	$tdataprojectstep[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectstep[".add"] = true;
$tdataprojectstep[".afterAddAction"] = 0;
$tdataprojectstep[".closePopupAfterAdd"] = 1;
$tdataprojectstep[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectstep[".list"] = true;
}



$tdataprojectstep[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectstep[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectstep[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectstep[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectstep[".printFriendly"] = true;
}



$tdataprojectstep[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectstep[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectstep[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectstep[".isUseAjaxSuggest"] = true;

$tdataprojectstep[".rowHighlite"] = true;





$tdataprojectstep[".ajaxCodeSnippetAdded"] = false;

$tdataprojectstep[".buttonsAdded"] = false;

$tdataprojectstep[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojectstep[".isUseTimeForSearch"] = false;


$tdataprojectstep[".badgeColor"] = "2F4F4F";


$tdataprojectstep[".allSearchFields"] = array();
$tdataprojectstep[".filterFields"] = array();
$tdataprojectstep[".requiredSearchFields"] = array();

$tdataprojectstep[".googleLikeFields"] = array();
$tdataprojectstep[".googleLikeFields"][] = "id";
$tdataprojectstep[".googleLikeFields"][] = "projectTypeID";
$tdataprojectstep[".googleLikeFields"][] = "stepNumber";
$tdataprojectstep[".googleLikeFields"][] = "stepName";
$tdataprojectstep[".googleLikeFields"][] = "entryUserName";
$tdataprojectstep[".googleLikeFields"][] = "entryTime";



$tdataprojectstep[".tableType"] = "list";

$tdataprojectstep[".printerPageOrientation"] = 0;
$tdataprojectstep[".nPrinterPageScale"] = 100;

$tdataprojectstep[".nPrinterSplitRecords"] = 40;

$tdataprojectstep[".geocodingEnabled"] = false;










$tdataprojectstep[".pageSize"] = 20;

$tdataprojectstep[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectstep[".strOrderBy"] = $tstrOrderBy;

$tdataprojectstep[".orderindexes"] = array();


$tdataprojectstep[".sqlHead"] = "SELECT id,  	projectTypeID,  	stepNumber,  	stepName,  	entryUserName,  	entryTime";
$tdataprojectstep[".sqlFrom"] = "FROM ProjectStep";
$tdataprojectstep[".sqlWhereExpr"] = "";
$tdataprojectstep[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectstep[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectstep[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectstep[".highlightSearchResults"] = true;

$tableKeysprojectstep = array();
$tableKeysprojectstep[] = "id";
$tdataprojectstep[".Keys"] = $tableKeysprojectstep;


$tdataprojectstep[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","id");
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


	$tdataprojectstep["id"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "id";
//	projectTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectTypeID";
	$fdata["GoodName"] = "projectTypeID";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","projectTypeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectTypeID";

		$fdata["sourceSingle"] = "projectTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projectTypeID";

	
	
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
	$edata["LookupTable"] = "ProjectType";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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


	$tdataprojectstep["projectTypeID"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "projectTypeID";
//	stepNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stepNumber";
	$fdata["GoodName"] = "stepNumber";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","stepNumber");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "stepNumber";

		$fdata["sourceSingle"] = "stepNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stepNumber";

	
	
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


	$tdataprojectstep["stepNumber"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "stepNumber";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","stepName");
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


	$tdataprojectstep["stepName"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "stepName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","entryUserName");
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


	$tdataprojectstep["entryUserName"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "ProjectStep";
	$fdata["Label"] = GetFieldLabel("ProjectStep","entryTime");
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


	$tdataprojectstep["entryTime"] = $fdata;
		$tdataprojectstep[".searchableFields"][] = "entryTime";


$tables_data["ProjectStep"]=&$tdataprojectstep;
$field_labels["ProjectStep"] = &$fieldLabelsprojectstep;
$fieldToolTips["ProjectStep"] = &$fieldToolTipsprojectstep;
$placeHolders["ProjectStep"] = &$placeHoldersprojectstep;
$page_titles["ProjectStep"] = &$pageTitlesprojectstep;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectStep"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectStep"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectstep()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	projectTypeID,  	stepNumber,  	stepName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM ProjectStep";
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
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ProjectStep";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectTypeID",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto8["m_sql"] = "projectTypeID";
$proto8["m_srcTableName"] = "ProjectStep";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stepNumber",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto10["m_sql"] = "stepNumber";
$proto10["m_srcTableName"] = "ProjectStep";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto12["m_sql"] = "stepName";
$proto12["m_srcTableName"] = "ProjectStep";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto14["m_sql"] = "entryUserName";
$proto14["m_srcTableName"] = "ProjectStep";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "ProjectStep",
	"m_srcTableName" => "ProjectStep"
));

$proto16["m_sql"] = "entryTime";
$proto16["m_srcTableName"] = "ProjectStep";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ProjectStep";
$proto19["m_srcTableName"] = "ProjectStep";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "projectTypeID";
$proto19["m_columns"][] = "stepNumber";
$proto19["m_columns"][] = "stepName";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ProjectStep";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ProjectStep";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ProjectStep";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectstep = createSqlQuery_projectstep();


	
				;

						

$tdataprojectstep[".sqlquery"] = $queryData_projectstep;



$tableEvents["ProjectStep"] = new eventsBase;
$tdataprojectstep[".hasEvents"] = false;

?>