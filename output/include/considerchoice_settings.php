<?php
$tdataconsiderchoice = array();
$tdataconsiderchoice[".searchableFields"] = array();
$tdataconsiderchoice[".ShortName"] = "considerchoice";
$tdataconsiderchoice[".OwnerID"] = "";
$tdataconsiderchoice[".OriginalTable"] = "considerChoice";


$tdataconsiderchoice[".pagesByType"] = my_json_decode( "{}" );
$tdataconsiderchoice[".originalPagesByType"] = $tdataconsiderchoice[".pagesByType"];
$tdataconsiderchoice[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataconsiderchoice[".originalPages"] = $tdataconsiderchoice[".pages"];
$tdataconsiderchoice[".defaultPages"] = my_json_decode( "{}" );
$tdataconsiderchoice[".originalDefaultPages"] = $tdataconsiderchoice[".defaultPages"];

//	field labels
$fieldLabelsconsiderchoice = array();
$fieldToolTipsconsiderchoice = array();
$pageTitlesconsiderchoice = array();
$placeHoldersconsiderchoice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsiderchoice["English"] = array();
	$fieldToolTipsconsiderchoice["English"] = array();
	$placeHoldersconsiderchoice["English"] = array();
	$pageTitlesconsiderchoice["English"] = array();
	$fieldLabelsconsiderchoice["English"]["id"] = "Id";
	$fieldToolTipsconsiderchoice["English"]["id"] = "";
	$placeHoldersconsiderchoice["English"]["id"] = "";
	$fieldLabelsconsiderchoice["English"]["ConsiderID"] = "Consider ID";
	$fieldToolTipsconsiderchoice["English"]["ConsiderID"] = "";
	$placeHoldersconsiderchoice["English"]["ConsiderID"] = "";
	$fieldLabelsconsiderchoice["English"]["ChoiceType"] = "Choice Type";
	$fieldToolTipsconsiderchoice["English"]["ChoiceType"] = "";
	$placeHoldersconsiderchoice["English"]["ChoiceType"] = "";
	$fieldLabelsconsiderchoice["English"]["ChoiceNameGroup"] = "Choice Name Group";
	$fieldToolTipsconsiderchoice["English"]["ChoiceNameGroup"] = "";
	$placeHoldersconsiderchoice["English"]["ChoiceNameGroup"] = "";
	$fieldLabelsconsiderchoice["English"]["ChoiceName"] = "Choice Name";
	$fieldToolTipsconsiderchoice["English"]["ChoiceName"] = "";
	$placeHoldersconsiderchoice["English"]["ChoiceName"] = "";
	$fieldLabelsconsiderchoice["English"]["ChoiceValue"] = "Choice Value";
	$fieldToolTipsconsiderchoice["English"]["ChoiceValue"] = "";
	$placeHoldersconsiderchoice["English"]["ChoiceValue"] = "";
	$fieldLabelsconsiderchoice["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsconsiderchoice["English"]["entryUserName"] = "";
	$placeHoldersconsiderchoice["English"]["entryUserName"] = "";
	$fieldLabelsconsiderchoice["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsconsiderchoice["English"]["entryTime"] = "";
	$placeHoldersconsiderchoice["English"]["entryTime"] = "";
	if (count($fieldToolTipsconsiderchoice["English"]))
		$tdataconsiderchoice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsconsiderchoice["Thai"] = array();
	$fieldToolTipsconsiderchoice["Thai"] = array();
	$placeHoldersconsiderchoice["Thai"] = array();
	$pageTitlesconsiderchoice["Thai"] = array();
	$fieldLabelsconsiderchoice["Thai"]["id"] = "Id";
	$fieldToolTipsconsiderchoice["Thai"]["id"] = "";
	$placeHoldersconsiderchoice["Thai"]["id"] = "";
	$fieldLabelsconsiderchoice["Thai"]["ConsiderID"] = "Consider ID";
	$fieldToolTipsconsiderchoice["Thai"]["ConsiderID"] = "";
	$placeHoldersconsiderchoice["Thai"]["ConsiderID"] = "";
	$fieldLabelsconsiderchoice["Thai"]["ChoiceType"] = "Choice Type";
	$fieldToolTipsconsiderchoice["Thai"]["ChoiceType"] = "";
	$placeHoldersconsiderchoice["Thai"]["ChoiceType"] = "";
	$fieldLabelsconsiderchoice["Thai"]["ChoiceNameGroup"] = "Choice Name Group";
	$fieldToolTipsconsiderchoice["Thai"]["ChoiceNameGroup"] = "";
	$placeHoldersconsiderchoice["Thai"]["ChoiceNameGroup"] = "";
	$fieldLabelsconsiderchoice["Thai"]["ChoiceName"] = "Choice Name";
	$fieldToolTipsconsiderchoice["Thai"]["ChoiceName"] = "";
	$placeHoldersconsiderchoice["Thai"]["ChoiceName"] = "";
	$fieldLabelsconsiderchoice["Thai"]["ChoiceValue"] = "Choice Value";
	$fieldToolTipsconsiderchoice["Thai"]["ChoiceValue"] = "";
	$placeHoldersconsiderchoice["Thai"]["ChoiceValue"] = "";
	$fieldLabelsconsiderchoice["Thai"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsconsiderchoice["Thai"]["entryUserName"] = "";
	$placeHoldersconsiderchoice["Thai"]["entryUserName"] = "";
	$fieldLabelsconsiderchoice["Thai"]["entryTime"] = "Entry Time";
	$fieldToolTipsconsiderchoice["Thai"]["entryTime"] = "";
	$placeHoldersconsiderchoice["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsconsiderchoice["Thai"]))
		$tdataconsiderchoice[".isUseToolTips"] = true;
}


	$tdataconsiderchoice[".NCSearch"] = true;



$tdataconsiderchoice[".shortTableName"] = "considerchoice";
$tdataconsiderchoice[".nSecOptions"] = 0;

$tdataconsiderchoice[".mainTableOwnerID"] = "";
$tdataconsiderchoice[".entityType"] = 0;
$tdataconsiderchoice[".connId"] = "mc_at_192_168_1_111";


$tdataconsiderchoice[".strOriginalTableName"] = "considerChoice";

	



$tdataconsiderchoice[".showAddInPopup"] = false;

$tdataconsiderchoice[".showEditInPopup"] = false;

$tdataconsiderchoice[".showViewInPopup"] = false;

$tdataconsiderchoice[".listAjax"] = false;
//	temporary
//$tdataconsiderchoice[".listAjax"] = false;

	$tdataconsiderchoice[".audit"] = false;

	$tdataconsiderchoice[".locking"] = false;


$pages = $tdataconsiderchoice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsiderchoice[".edit"] = true;
	$tdataconsiderchoice[".afterEditAction"] = 1;
	$tdataconsiderchoice[".closePopupAfterEdit"] = 1;
	$tdataconsiderchoice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsiderchoice[".add"] = true;
$tdataconsiderchoice[".afterAddAction"] = 1;
$tdataconsiderchoice[".closePopupAfterAdd"] = 1;
$tdataconsiderchoice[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsiderchoice[".list"] = true;
}



$tdataconsiderchoice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsiderchoice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsiderchoice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsiderchoice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsiderchoice[".printFriendly"] = true;
}



$tdataconsiderchoice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsiderchoice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsiderchoice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsiderchoice[".isUseAjaxSuggest"] = true;

$tdataconsiderchoice[".rowHighlite"] = true;





$tdataconsiderchoice[".ajaxCodeSnippetAdded"] = false;

$tdataconsiderchoice[".buttonsAdded"] = false;

$tdataconsiderchoice[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsiderchoice[".isUseTimeForSearch"] = false;


$tdataconsiderchoice[".badgeColor"] = "D2691E";


$tdataconsiderchoice[".allSearchFields"] = array();
$tdataconsiderchoice[".filterFields"] = array();
$tdataconsiderchoice[".requiredSearchFields"] = array();

$tdataconsiderchoice[".googleLikeFields"] = array();
$tdataconsiderchoice[".googleLikeFields"][] = "id";
$tdataconsiderchoice[".googleLikeFields"][] = "ConsiderID";
$tdataconsiderchoice[".googleLikeFields"][] = "ChoiceType";
$tdataconsiderchoice[".googleLikeFields"][] = "ChoiceNameGroup";
$tdataconsiderchoice[".googleLikeFields"][] = "ChoiceName";
$tdataconsiderchoice[".googleLikeFields"][] = "ChoiceValue";
$tdataconsiderchoice[".googleLikeFields"][] = "entryUserName";
$tdataconsiderchoice[".googleLikeFields"][] = "entryTime";



$tdataconsiderchoice[".tableType"] = "list";

$tdataconsiderchoice[".printerPageOrientation"] = 0;
$tdataconsiderchoice[".nPrinterPageScale"] = 100;

$tdataconsiderchoice[".nPrinterSplitRecords"] = 40;

$tdataconsiderchoice[".geocodingEnabled"] = false;










$tdataconsiderchoice[".pageSize"] = 20;

$tdataconsiderchoice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsiderchoice[".strOrderBy"] = $tstrOrderBy;

$tdataconsiderchoice[".orderindexes"] = array();


$tdataconsiderchoice[".sqlHead"] = "SELECT id,  	ConsiderID,  	ChoiceType,  	ChoiceNameGroup,  	ChoiceName,  	ChoiceValue,  	entryUserName,  	entryTime";
$tdataconsiderchoice[".sqlFrom"] = "FROM considerChoice";
$tdataconsiderchoice[".sqlWhereExpr"] = "";
$tdataconsiderchoice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsiderchoice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsiderchoice[".arrGroupsPerPage"] = $arrGPP;

$tdataconsiderchoice[".highlightSearchResults"] = true;

$tableKeysconsiderchoice = array();
$tableKeysconsiderchoice[] = "id";
$tdataconsiderchoice[".Keys"] = $tableKeysconsiderchoice;


$tdataconsiderchoice[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","id");
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


	$tdataconsiderchoice["id"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "id";
//	ConsiderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ConsiderID";
	$fdata["GoodName"] = "ConsiderID";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","ConsiderID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsiderID";

		$fdata["sourceSingle"] = "ConsiderID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsiderID";

	
	
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


	$tdataconsiderchoice["ConsiderID"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "ConsiderID";
//	ChoiceType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ChoiceType";
	$fdata["GoodName"] = "ChoiceType";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","ChoiceType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ChoiceType";

		$fdata["sourceSingle"] = "ChoiceType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChoiceType";

	
	
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


	$tdataconsiderchoice["ChoiceType"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "ChoiceType";
//	ChoiceNameGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ChoiceNameGroup";
	$fdata["GoodName"] = "ChoiceNameGroup";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","ChoiceNameGroup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ChoiceNameGroup";

		$fdata["sourceSingle"] = "ChoiceNameGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChoiceNameGroup";

	
	
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


	$tdataconsiderchoice["ChoiceNameGroup"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "ChoiceNameGroup";
//	ChoiceName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ChoiceName";
	$fdata["GoodName"] = "ChoiceName";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","ChoiceName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ChoiceName";

		$fdata["sourceSingle"] = "ChoiceName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChoiceName";

	
	
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


	$tdataconsiderchoice["ChoiceName"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "ChoiceName";
//	ChoiceValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ChoiceValue";
	$fdata["GoodName"] = "ChoiceValue";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","ChoiceValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ChoiceValue";

		$fdata["sourceSingle"] = "ChoiceValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChoiceValue";

	
	
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


	$tdataconsiderchoice["ChoiceValue"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "ChoiceValue";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","entryUserName");
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


	$tdataconsiderchoice["entryUserName"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "considerChoice";
	$fdata["Label"] = GetFieldLabel("considerChoice","entryTime");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataconsiderchoice["entryTime"] = $fdata;
		$tdataconsiderchoice[".searchableFields"][] = "entryTime";


$tables_data["considerChoice"]=&$tdataconsiderchoice;
$field_labels["considerChoice"] = &$fieldLabelsconsiderchoice;
$fieldToolTips["considerChoice"] = &$fieldToolTipsconsiderchoice;
$placeHolders["considerChoice"] = &$placeHoldersconsiderchoice;
$page_titles["considerChoice"] = &$pageTitlesconsiderchoice;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["considerChoice"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["considerChoice"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_considerchoice()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ConsiderID,  	ChoiceType,  	ChoiceNameGroup,  	ChoiceName,  	ChoiceValue,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM considerChoice";
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
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "considerChoice";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsiderID",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto8["m_sql"] = "ConsiderID";
$proto8["m_srcTableName"] = "considerChoice";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ChoiceType",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto10["m_sql"] = "ChoiceType";
$proto10["m_srcTableName"] = "considerChoice";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ChoiceNameGroup",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto12["m_sql"] = "ChoiceNameGroup";
$proto12["m_srcTableName"] = "considerChoice";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ChoiceName",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto14["m_sql"] = "ChoiceName";
$proto14["m_srcTableName"] = "considerChoice";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ChoiceValue",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto16["m_sql"] = "ChoiceValue";
$proto16["m_srcTableName"] = "considerChoice";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "considerChoice";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "considerChoice",
	"m_srcTableName" => "considerChoice"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "considerChoice";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "considerChoice";
$proto23["m_srcTableName"] = "considerChoice";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "ConsiderID";
$proto23["m_columns"][] = "ChoiceType";
$proto23["m_columns"][] = "ChoiceNameGroup";
$proto23["m_columns"][] = "ChoiceName";
$proto23["m_columns"][] = "ChoiceValue";
$proto23["m_columns"][] = "entryUserName";
$proto23["m_columns"][] = "entryTime";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "considerChoice";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "considerChoice";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="considerChoice";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_considerchoice = createSqlQuery_considerchoice();


	
				;

								

$tdataconsiderchoice[".sqlquery"] = $queryData_considerchoice;



$tableEvents["considerChoice"] = new eventsBase;
$tdataconsiderchoice[".hasEvents"] = false;

?>