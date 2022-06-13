<?php
$tdataprojectcontact = array();
$tdataprojectcontact[".searchableFields"] = array();
$tdataprojectcontact[".ShortName"] = "projectcontact";
$tdataprojectcontact[".OwnerID"] = "";
$tdataprojectcontact[".OriginalTable"] = "ProjectContact";


$tdataprojectcontact[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojectcontact[".originalPagesByType"] = $tdataprojectcontact[".pagesByType"];
$tdataprojectcontact[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojectcontact[".originalPages"] = $tdataprojectcontact[".pages"];
$tdataprojectcontact[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojectcontact[".originalDefaultPages"] = $tdataprojectcontact[".defaultPages"];

//	field labels
$fieldLabelsprojectcontact = array();
$fieldToolTipsprojectcontact = array();
$pageTitlesprojectcontact = array();
$placeHoldersprojectcontact = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojectcontact["English"] = array();
	$fieldToolTipsprojectcontact["English"] = array();
	$placeHoldersprojectcontact["English"] = array();
	$pageTitlesprojectcontact["English"] = array();
	$fieldLabelsprojectcontact["English"]["id"] = "ID";
	$fieldToolTipsprojectcontact["English"]["id"] = "";
	$placeHoldersprojectcontact["English"]["id"] = "";
	$fieldLabelsprojectcontact["English"]["contactName"] = "Contact Name";
	$fieldToolTipsprojectcontact["English"]["contactName"] = "";
	$placeHoldersprojectcontact["English"]["contactName"] = "";
	$fieldLabelsprojectcontact["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojectcontact["English"]["entryTime"] = "";
	$placeHoldersprojectcontact["English"]["entryTime"] = "";
	$fieldLabelsprojectcontact["English"]["contactAddress"] = "Contact Address";
	$fieldToolTipsprojectcontact["English"]["contactAddress"] = "";
	$placeHoldersprojectcontact["English"]["contactAddress"] = "";
	$fieldLabelsprojectcontact["English"]["contactTelephone"] = "Contact Telephone";
	$fieldToolTipsprojectcontact["English"]["contactTelephone"] = "";
	$placeHoldersprojectcontact["English"]["contactTelephone"] = "";
	$fieldLabelsprojectcontact["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojectcontact["English"]["entryUserName"] = "";
	$placeHoldersprojectcontact["English"]["entryUserName"] = "";
	$fieldLabelsprojectcontact["English"]["companyName"] = "Company Name";
	$fieldToolTipsprojectcontact["English"]["companyName"] = "";
	$placeHoldersprojectcontact["English"]["companyName"] = "";
	$fieldLabelsprojectcontact["English"]["contactEmail"] = "Contact Email";
	$fieldToolTipsprojectcontact["English"]["contactEmail"] = "";
	$placeHoldersprojectcontact["English"]["contactEmail"] = "";
	if (count($fieldToolTipsprojectcontact["English"]))
		$tdataprojectcontact[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojectcontact["Thai"] = array();
	$fieldToolTipsprojectcontact["Thai"] = array();
	$placeHoldersprojectcontact["Thai"] = array();
	$pageTitlesprojectcontact["Thai"] = array();
	$fieldLabelsprojectcontact["Thai"]["id"] = "ID";
	$fieldToolTipsprojectcontact["Thai"]["id"] = "";
	$placeHoldersprojectcontact["Thai"]["id"] = "";
	$fieldLabelsprojectcontact["Thai"]["contactName"] = "ผู้ติดต่อ";
	$fieldToolTipsprojectcontact["Thai"]["contactName"] = "";
	$placeHoldersprojectcontact["Thai"]["contactName"] = "";
	$fieldLabelsprojectcontact["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojectcontact["Thai"]["entryTime"] = "";
	$placeHoldersprojectcontact["Thai"]["entryTime"] = "";
	$fieldLabelsprojectcontact["Thai"]["contactAddress"] = "ที่อยู่";
	$fieldToolTipsprojectcontact["Thai"]["contactAddress"] = "";
	$placeHoldersprojectcontact["Thai"]["contactAddress"] = "";
	$fieldLabelsprojectcontact["Thai"]["contactTelephone"] = "โทรศัพท์";
	$fieldToolTipsprojectcontact["Thai"]["contactTelephone"] = "";
	$placeHoldersprojectcontact["Thai"]["contactTelephone"] = "";
	$fieldLabelsprojectcontact["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprojectcontact["Thai"]["entryUserName"] = "";
	$placeHoldersprojectcontact["Thai"]["entryUserName"] = "";
	$fieldLabelsprojectcontact["Thai"]["companyName"] = "บริษัท/สังกัด ผู้ขอทุนวิจัย";
	$fieldToolTipsprojectcontact["Thai"]["companyName"] = "";
	$placeHoldersprojectcontact["Thai"]["companyName"] = "";
	$fieldLabelsprojectcontact["Thai"]["contactEmail"] = "อีเมล์​";
	$fieldToolTipsprojectcontact["Thai"]["contactEmail"] = "";
	$placeHoldersprojectcontact["Thai"]["contactEmail"] = "";
	if (count($fieldToolTipsprojectcontact["Thai"]))
		$tdataprojectcontact[".isUseToolTips"] = true;
}


	$tdataprojectcontact[".NCSearch"] = true;



$tdataprojectcontact[".shortTableName"] = "projectcontact";
$tdataprojectcontact[".nSecOptions"] = 0;

$tdataprojectcontact[".mainTableOwnerID"] = "";
$tdataprojectcontact[".entityType"] = 0;
$tdataprojectcontact[".connId"] = "mc_at_192_168_1_111";


$tdataprojectcontact[".strOriginalTableName"] = "ProjectContact";

	



$tdataprojectcontact[".showAddInPopup"] = false;

$tdataprojectcontact[".showEditInPopup"] = false;

$tdataprojectcontact[".showViewInPopup"] = false;

$tdataprojectcontact[".listAjax"] = false;
//	temporary
//$tdataprojectcontact[".listAjax"] = false;

	$tdataprojectcontact[".audit"] = false;

	$tdataprojectcontact[".locking"] = false;


$pages = $tdataprojectcontact[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojectcontact[".edit"] = true;
	$tdataprojectcontact[".afterEditAction"] = 0;
	$tdataprojectcontact[".closePopupAfterEdit"] = 1;
	$tdataprojectcontact[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojectcontact[".add"] = true;
$tdataprojectcontact[".afterAddAction"] = 0;
$tdataprojectcontact[".closePopupAfterAdd"] = 1;
$tdataprojectcontact[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojectcontact[".list"] = true;
}



$tdataprojectcontact[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojectcontact[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojectcontact[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojectcontact[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojectcontact[".printFriendly"] = true;
}



$tdataprojectcontact[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojectcontact[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojectcontact[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojectcontact[".isUseAjaxSuggest"] = true;

$tdataprojectcontact[".rowHighlite"] = true;





$tdataprojectcontact[".ajaxCodeSnippetAdded"] = false;

$tdataprojectcontact[".buttonsAdded"] = false;

$tdataprojectcontact[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojectcontact[".isUseTimeForSearch"] = false;


$tdataprojectcontact[".badgeColor"] = "00C2C5";


$tdataprojectcontact[".allSearchFields"] = array();
$tdataprojectcontact[".filterFields"] = array();
$tdataprojectcontact[".requiredSearchFields"] = array();

$tdataprojectcontact[".googleLikeFields"] = array();
$tdataprojectcontact[".googleLikeFields"][] = "id";
$tdataprojectcontact[".googleLikeFields"][] = "contactName";
$tdataprojectcontact[".googleLikeFields"][] = "companyName";
$tdataprojectcontact[".googleLikeFields"][] = "contactAddress";
$tdataprojectcontact[".googleLikeFields"][] = "contactTelephone";
$tdataprojectcontact[".googleLikeFields"][] = "contactEmail";
$tdataprojectcontact[".googleLikeFields"][] = "entryUserName";
$tdataprojectcontact[".googleLikeFields"][] = "entryTime";



$tdataprojectcontact[".tableType"] = "list";

$tdataprojectcontact[".printerPageOrientation"] = 0;
$tdataprojectcontact[".nPrinterPageScale"] = 100;

$tdataprojectcontact[".nPrinterSplitRecords"] = 40;

$tdataprojectcontact[".geocodingEnabled"] = false;










$tdataprojectcontact[".pageSize"] = 20;

$tdataprojectcontact[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojectcontact[".strOrderBy"] = $tstrOrderBy;

$tdataprojectcontact[".orderindexes"] = array();


$tdataprojectcontact[".sqlHead"] = "SELECT id,  	contactName,  	companyName,  	contactAddress,  	contactTelephone,  	contactEmail,  	entryUserName,  	entryTime";
$tdataprojectcontact[".sqlFrom"] = "FROM ProjectContact";
$tdataprojectcontact[".sqlWhereExpr"] = "";
$tdataprojectcontact[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojectcontact[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojectcontact[".arrGroupsPerPage"] = $arrGPP;

$tdataprojectcontact[".highlightSearchResults"] = true;

$tableKeysprojectcontact = array();
$tableKeysprojectcontact[] = "id";
$tdataprojectcontact[".Keys"] = $tableKeysprojectcontact;


$tdataprojectcontact[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","id");
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


	$tdataprojectcontact["id"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "id";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","contactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactName";

		$fdata["sourceSingle"] = "contactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactName";

	
	
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


	$tdataprojectcontact["contactName"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "contactName";
//	companyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "companyName";
	$fdata["GoodName"] = "companyName";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","companyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "companyName";

		$fdata["sourceSingle"] = "companyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "companyName";

	
	
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
	$edata["LookupTable"] = "ProjectCompany";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "companyName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "companyName";

	

	
	$edata["LookupOrderBy"] = "companyName";

	
	
	
	

	
	
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


	$tdataprojectcontact["companyName"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "companyName";
//	contactAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contactAddress";
	$fdata["GoodName"] = "contactAddress";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","contactAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactAddress";

		$fdata["sourceSingle"] = "contactAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactAddress";

	
	
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


	$tdataprojectcontact["contactAddress"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "contactAddress";
//	contactTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contactTelephone";
	$fdata["GoodName"] = "contactTelephone";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","contactTelephone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactTelephone";

		$fdata["sourceSingle"] = "contactTelephone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactTelephone";

	
	
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


	$tdataprojectcontact["contactTelephone"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "contactTelephone";
//	contactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contactEmail";
	$fdata["GoodName"] = "contactEmail";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","contactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contactEmail";

		$fdata["sourceSingle"] = "contactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactEmail";

	
	
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


	$tdataprojectcontact["contactEmail"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "contactEmail";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","entryUserName");
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


	$tdataprojectcontact["entryUserName"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "ProjectContact";
	$fdata["Label"] = GetFieldLabel("ProjectContact","entryTime");
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


	$tdataprojectcontact["entryTime"] = $fdata;
		$tdataprojectcontact[".searchableFields"][] = "entryTime";


$tables_data["ProjectContact"]=&$tdataprojectcontact;
$field_labels["ProjectContact"] = &$fieldLabelsprojectcontact;
$fieldToolTips["ProjectContact"] = &$fieldToolTipsprojectcontact;
$placeHolders["ProjectContact"] = &$placeHoldersprojectcontact;
$page_titles["ProjectContact"] = &$pageTitlesprojectcontact;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectContact"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectContact"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projectcontact()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	contactName,  	companyName,  	contactAddress,  	contactTelephone,  	contactEmail,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM ProjectContact";
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
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ProjectContact";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto8["m_sql"] = "contactName";
$proto8["m_srcTableName"] = "ProjectContact";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "companyName",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto10["m_sql"] = "companyName";
$proto10["m_srcTableName"] = "ProjectContact";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contactAddress",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto12["m_sql"] = "contactAddress";
$proto12["m_srcTableName"] = "ProjectContact";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contactTelephone",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto14["m_sql"] = "contactTelephone";
$proto14["m_srcTableName"] = "ProjectContact";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contactEmail",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto16["m_sql"] = "contactEmail";
$proto16["m_srcTableName"] = "ProjectContact";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto18["m_sql"] = "entryUserName";
$proto18["m_srcTableName"] = "ProjectContact";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "ProjectContact",
	"m_srcTableName" => "ProjectContact"
));

$proto20["m_sql"] = "entryTime";
$proto20["m_srcTableName"] = "ProjectContact";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ProjectContact";
$proto23["m_srcTableName"] = "ProjectContact";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "contactName";
$proto23["m_columns"][] = "companyName";
$proto23["m_columns"][] = "contactAddress";
$proto23["m_columns"][] = "contactTelephone";
$proto23["m_columns"][] = "contactEmail";
$proto23["m_columns"][] = "entryUserName";
$proto23["m_columns"][] = "entryTime";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "ProjectContact";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "ProjectContact";
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
$proto0["m_srcTableName"]="ProjectContact";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projectcontact = createSqlQuery_projectcontact();


	
				;

								

$tdataprojectcontact[".sqlquery"] = $queryData_projectcontact;



$tableEvents["ProjectContact"] = new eventsBase;
$tdataprojectcontact[".hasEvents"] = false;

?>