<?php
$tdatastaffusers = array();
$tdatastaffusers[".searchableFields"] = array();
$tdatastaffusers[".ShortName"] = "staffusers";
$tdatastaffusers[".OwnerID"] = "";
$tdatastaffusers[".OriginalTable"] = "staffUsers";


$tdatastaffusers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatastaffusers[".originalPagesByType"] = $tdatastaffusers[".pagesByType"];
$tdatastaffusers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatastaffusers[".originalPages"] = $tdatastaffusers[".pages"];
$tdatastaffusers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatastaffusers[".originalDefaultPages"] = $tdatastaffusers[".defaultPages"];

//	field labels
$fieldLabelsstaffusers = array();
$fieldToolTipsstaffusers = array();
$pageTitlesstaffusers = array();
$placeHoldersstaffusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaffusers["English"] = array();
	$fieldToolTipsstaffusers["English"] = array();
	$placeHoldersstaffusers["English"] = array();
	$pageTitlesstaffusers["English"] = array();
	$fieldLabelsstaffusers["English"]["id"] = "Id";
	$fieldToolTipsstaffusers["English"]["id"] = "";
	$placeHoldersstaffusers["English"]["id"] = "Id";
	$fieldLabelsstaffusers["English"]["staffFullName"] = "Staff Full Name";
	$fieldToolTipsstaffusers["English"]["staffFullName"] = "";
	$placeHoldersstaffusers["English"]["staffFullName"] = "Staff Full Name";
	$fieldLabelsstaffusers["English"]["staffUsername"] = "Staff Username";
	$fieldToolTipsstaffusers["English"]["staffUsername"] = "";
	$placeHoldersstaffusers["English"]["staffUsername"] = "Staff Username";
	$fieldLabelsstaffusers["English"]["staffPassword"] = "Staff Password";
	$fieldToolTipsstaffusers["English"]["staffPassword"] = "";
	$placeHoldersstaffusers["English"]["staffPassword"] = "Staff Password";
	$fieldLabelsstaffusers["English"]["staffEmail"] = "Staff Email";
	$fieldToolTipsstaffusers["English"]["staffEmail"] = "";
	$placeHoldersstaffusers["English"]["staffEmail"] = "Staff Email";
	$fieldLabelsstaffusers["English"]["staffStatus"] = "Staff Status";
	$fieldToolTipsstaffusers["English"]["staffStatus"] = "";
	$placeHoldersstaffusers["English"]["staffStatus"] = "Staff Status";
	$fieldLabelsstaffusers["English"]["staffEmailNotify"] = "Staff Email Notify";
	$fieldToolTipsstaffusers["English"]["staffEmailNotify"] = "";
	$placeHoldersstaffusers["English"]["staffEmailNotify"] = "Staff Email Notify";
	$fieldLabelsstaffusers["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsstaffusers["English"]["entryUserName"] = "";
	$placeHoldersstaffusers["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsstaffusers["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsstaffusers["English"]["entryTime"] = "";
	$placeHoldersstaffusers["English"]["entryTime"] = "Entry Time";
	$fieldLabelsstaffusers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsstaffusers["English"]["reset_token"] = "";
	$placeHoldersstaffusers["English"]["reset_token"] = "";
	$fieldLabelsstaffusers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsstaffusers["English"]["reset_date"] = "";
	$placeHoldersstaffusers["English"]["reset_date"] = "";
	if (count($fieldToolTipsstaffusers["English"]))
		$tdatastaffusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsstaffusers["Thai"] = array();
	$fieldToolTipsstaffusers["Thai"] = array();
	$placeHoldersstaffusers["Thai"] = array();
	$pageTitlesstaffusers["Thai"] = array();
	$fieldLabelsstaffusers["Thai"]["id"] = "Id";
	$fieldToolTipsstaffusers["Thai"]["id"] = "";
	$placeHoldersstaffusers["Thai"]["id"] = "Id";
	$fieldLabelsstaffusers["Thai"]["staffFullName"] = "ชื่อ";
	$fieldToolTipsstaffusers["Thai"]["staffFullName"] = "";
	$placeHoldersstaffusers["Thai"]["staffFullName"] = "ชื่อ";
	$fieldLabelsstaffusers["Thai"]["staffUsername"] = "Username";
	$fieldToolTipsstaffusers["Thai"]["staffUsername"] = "";
	$placeHoldersstaffusers["Thai"]["staffUsername"] = "รหัสผู้ใช้งาน";
	$fieldLabelsstaffusers["Thai"]["staffPassword"] = "รหัสผ่าน";
	$fieldToolTipsstaffusers["Thai"]["staffPassword"] = "";
	$placeHoldersstaffusers["Thai"]["staffPassword"] = "รหัสผ่าน";
	$fieldLabelsstaffusers["Thai"]["staffEmail"] = "E-Mail";
	$fieldToolTipsstaffusers["Thai"]["staffEmail"] = "";
	$placeHoldersstaffusers["Thai"]["staffEmail"] = "แจ้งเตือน E-Mail";
	$fieldLabelsstaffusers["Thai"]["staffStatus"] = "สถานะ";
	$fieldToolTipsstaffusers["Thai"]["staffStatus"] = "";
	$placeHoldersstaffusers["Thai"]["staffStatus"] = "สถานะ";
	$fieldLabelsstaffusers["Thai"]["staffEmailNotify"] = "แจ้งเตือน E-Mail";
	$fieldToolTipsstaffusers["Thai"]["staffEmailNotify"] = "";
	$placeHoldersstaffusers["Thai"]["staffEmailNotify"] = "แจ้งเตือน E-Mail";
	$fieldLabelsstaffusers["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsstaffusers["Thai"]["entryUserName"] = "";
	$placeHoldersstaffusers["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsstaffusers["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsstaffusers["Thai"]["entryTime"] = "";
	$placeHoldersstaffusers["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsstaffusers["Thai"]["reset_token"] = "Reset Token";
	$fieldToolTipsstaffusers["Thai"]["reset_token"] = "";
	$placeHoldersstaffusers["Thai"]["reset_token"] = "";
	$fieldLabelsstaffusers["Thai"]["reset_date"] = "Reset Date";
	$fieldToolTipsstaffusers["Thai"]["reset_date"] = "";
	$placeHoldersstaffusers["Thai"]["reset_date"] = "";
	if (count($fieldToolTipsstaffusers["Thai"]))
		$tdatastaffusers[".isUseToolTips"] = true;
}


	$tdatastaffusers[".NCSearch"] = true;



$tdatastaffusers[".shortTableName"] = "staffusers";
$tdatastaffusers[".nSecOptions"] = 0;

$tdatastaffusers[".mainTableOwnerID"] = "";
$tdatastaffusers[".entityType"] = 0;
$tdatastaffusers[".connId"] = "mc_at_192_168_1_111";


$tdatastaffusers[".strOriginalTableName"] = "staffUsers";

	



$tdatastaffusers[".showAddInPopup"] = false;

$tdatastaffusers[".showEditInPopup"] = false;

$tdatastaffusers[".showViewInPopup"] = false;

$tdatastaffusers[".listAjax"] = false;
//	temporary
//$tdatastaffusers[".listAjax"] = false;

	$tdatastaffusers[".audit"] = true;

	$tdatastaffusers[".locking"] = false;


$pages = $tdatastaffusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastaffusers[".edit"] = true;
	$tdatastaffusers[".afterEditAction"] = 0;
	$tdatastaffusers[".closePopupAfterEdit"] = 1;
	$tdatastaffusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastaffusers[".add"] = true;
$tdatastaffusers[".afterAddAction"] = 0;
$tdatastaffusers[".closePopupAfterAdd"] = 1;
$tdatastaffusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastaffusers[".list"] = true;
}



$tdatastaffusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastaffusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastaffusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastaffusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastaffusers[".printFriendly"] = true;
}



$tdatastaffusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastaffusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastaffusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastaffusers[".isUseAjaxSuggest"] = true;

$tdatastaffusers[".rowHighlite"] = true;



						

$tdatastaffusers[".ajaxCodeSnippetAdded"] = false;

$tdatastaffusers[".buttonsAdded"] = false;

$tdatastaffusers[".addPageEvents"] = true;

// use timepicker for search panel
$tdatastaffusers[".isUseTimeForSearch"] = false;


$tdatastaffusers[".badgeColor"] = "7B68EE";


$tdatastaffusers[".allSearchFields"] = array();
$tdatastaffusers[".filterFields"] = array();
$tdatastaffusers[".requiredSearchFields"] = array();

$tdatastaffusers[".googleLikeFields"] = array();
$tdatastaffusers[".googleLikeFields"][] = "id";
$tdatastaffusers[".googleLikeFields"][] = "staffFullName";
$tdatastaffusers[".googleLikeFields"][] = "staffUsername";
$tdatastaffusers[".googleLikeFields"][] = "staffPassword";
$tdatastaffusers[".googleLikeFields"][] = "staffEmail";
$tdatastaffusers[".googleLikeFields"][] = "staffStatus";
$tdatastaffusers[".googleLikeFields"][] = "staffEmailNotify";
$tdatastaffusers[".googleLikeFields"][] = "entryUserName";
$tdatastaffusers[".googleLikeFields"][] = "entryTime";



$tdatastaffusers[".tableType"] = "list";

$tdatastaffusers[".printerPageOrientation"] = 0;
$tdatastaffusers[".nPrinterPageScale"] = 100;

$tdatastaffusers[".nPrinterSplitRecords"] = 40;

$tdatastaffusers[".geocodingEnabled"] = false;










$tdatastaffusers[".pageSize"] = 20;

$tdatastaffusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastaffusers[".strOrderBy"] = $tstrOrderBy;

$tdatastaffusers[".orderindexes"] = array();


$tdatastaffusers[".sqlHead"] = "SELECT id,  staffFullName,  staffUsername,  staffPassword,  staffEmail,  staffStatus,  staffEmailNotify,  entryUserName,  entryTime,  reset_token,  reset_date";
$tdatastaffusers[".sqlFrom"] = "FROM staffUsers";
$tdatastaffusers[".sqlWhereExpr"] = "";
$tdatastaffusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaffusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaffusers[".arrGroupsPerPage"] = $arrGPP;

$tdatastaffusers[".highlightSearchResults"] = true;

$tableKeysstaffusers = array();
$tableKeysstaffusers[] = "id";
$tdatastaffusers[".Keys"] = $tableKeysstaffusers;


$tdatastaffusers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","id");
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


	$tdatastaffusers["id"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "id";
//	staffFullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "staffFullName";
	$fdata["GoodName"] = "staffFullName";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffFullName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffFullName";

		$fdata["sourceSingle"] = "staffFullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffFullName";

	
	
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


	$tdatastaffusers["staffFullName"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffFullName";
//	staffUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "staffUsername";
	$fdata["GoodName"] = "staffUsername";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffUsername");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffUsername";

		$fdata["sourceSingle"] = "staffUsername";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffUsername";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatastaffusers["staffUsername"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffUsername";
//	staffPassword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "staffPassword";
	$fdata["GoodName"] = "staffPassword";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffPassword");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffPassword";

		$fdata["sourceSingle"] = "staffPassword";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffPassword";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatastaffusers["staffPassword"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffPassword";
//	staffEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "staffEmail";
	$fdata["GoodName"] = "staffEmail";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffEmail";

		$fdata["sourceSingle"] = "staffEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffEmail";

	
	
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
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
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


	$tdatastaffusers["staffEmail"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffEmail";
//	staffStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "staffStatus";
	$fdata["GoodName"] = "staffStatus";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffStatus");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "staffStatus";

		$fdata["sourceSingle"] = "staffStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffStatus";

	
	
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

				$edata["LookupWhere"] = "statusType = 'staffStatus'";


	
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


	$tdatastaffusers["staffStatus"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffStatus";
//	staffEmailNotify
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "staffEmailNotify";
	$fdata["GoodName"] = "staffEmailNotify";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","staffEmailNotify");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffEmailNotify";

		$fdata["sourceSingle"] = "staffEmailNotify";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffEmailNotify";

	
	
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

				$edata["LookupWhere"] = "statusType = 'staffEmailNotify'";


	
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


	$tdatastaffusers["staffEmailNotify"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "staffEmailNotify";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUserName";

	
	
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


	$tdatastaffusers["entryUserName"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","entryTime");
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


	$tdatastaffusers["entryTime"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "entryTime";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatastaffusers["reset_token"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "staffUsers";
	$fdata["Label"] = GetFieldLabel("staffUsers","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatastaffusers["reset_date"] = $fdata;
		$tdatastaffusers[".searchableFields"][] = "reset_date";


$tables_data["staffUsers"]=&$tdatastaffusers;
$field_labels["staffUsers"] = &$fieldLabelsstaffusers;
$fieldToolTips["staffUsers"] = &$fieldToolTipsstaffusers;
$placeHolders["staffUsers"] = &$placeHoldersstaffusers;
$page_titles["staffUsers"] = &$pageTitlesstaffusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["staffUsers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["staffUsers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_staffusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  staffFullName,  staffUsername,  staffPassword,  staffEmail,  staffStatus,  staffEmailNotify,  entryUserName,  entryTime,  reset_token,  reset_date";
$proto0["m_strFrom"] = "FROM staffUsers";
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
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "staffUsers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "staffFullName",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto8["m_sql"] = "staffFullName";
$proto8["m_srcTableName"] = "staffUsers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "staffUsername",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto10["m_sql"] = "staffUsername";
$proto10["m_srcTableName"] = "staffUsers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "staffPassword",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto12["m_sql"] = "staffPassword";
$proto12["m_srcTableName"] = "staffUsers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "staffEmail",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto14["m_sql"] = "staffEmail";
$proto14["m_srcTableName"] = "staffUsers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "staffStatus",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto16["m_sql"] = "staffStatus";
$proto16["m_srcTableName"] = "staffUsers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "staffEmailNotify",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto18["m_sql"] = "staffEmailNotify";
$proto18["m_srcTableName"] = "staffUsers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto20["m_sql"] = "entryUserName";
$proto20["m_srcTableName"] = "staffUsers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto22["m_sql"] = "entryTime";
$proto22["m_srcTableName"] = "staffUsers";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto24["m_sql"] = "reset_token";
$proto24["m_srcTableName"] = "staffUsers";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "staffUsers",
	"m_srcTableName" => "staffUsers"
));

$proto26["m_sql"] = "reset_date";
$proto26["m_srcTableName"] = "staffUsers";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "staffUsers";
$proto29["m_srcTableName"] = "staffUsers";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "staffFullName";
$proto29["m_columns"][] = "staffUsername";
$proto29["m_columns"][] = "staffPassword";
$proto29["m_columns"][] = "staffEmail";
$proto29["m_columns"][] = "staffStatus";
$proto29["m_columns"][] = "staffEmailNotify";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$proto29["m_columns"][] = "apikey";
$proto29["m_columns"][] = "reset_token";
$proto29["m_columns"][] = "reset_date";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "staffUsers";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "staffUsers";
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
$proto0["m_srcTableName"]="staffUsers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staffusers = createSqlQuery_staffusers();


	
				;

											

$tdatastaffusers[".sqlquery"] = $queryData_staffusers;



include_once(getabspath("include/staffusers_events.php"));
$tableEvents["staffUsers"] = new eventclass_staffusers;
$tdatastaffusers[".hasEvents"] = true;

?>