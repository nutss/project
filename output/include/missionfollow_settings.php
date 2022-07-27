<?php
$tdatamissionfollow = array();
$tdatamissionfollow[".searchableFields"] = array();
$tdatamissionfollow[".ShortName"] = "missionfollow";
$tdatamissionfollow[".OwnerID"] = "";
$tdatamissionfollow[".OriginalTable"] = "missionFollow";


$tdatamissionfollow[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamissionfollow[".originalPagesByType"] = $tdatamissionfollow[".pagesByType"];
$tdatamissionfollow[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamissionfollow[".originalPages"] = $tdatamissionfollow[".pages"];
$tdatamissionfollow[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamissionfollow[".originalDefaultPages"] = $tdatamissionfollow[".defaultPages"];

//	field labels
$fieldLabelsmissionfollow = array();
$fieldToolTipsmissionfollow = array();
$pageTitlesmissionfollow = array();
$placeHoldersmissionfollow = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmissionfollow["English"] = array();
	$fieldToolTipsmissionfollow["English"] = array();
	$placeHoldersmissionfollow["English"] = array();
	$pageTitlesmissionfollow["English"] = array();
	$fieldLabelsmissionfollow["English"]["id"] = "ID";
	$fieldToolTipsmissionfollow["English"]["id"] = "";
	$placeHoldersmissionfollow["English"]["id"] = "ID";
	$fieldLabelsmissionfollow["English"]["missionFollowNo"] = "Mission Follow No";
	$fieldToolTipsmissionfollow["English"]["missionFollowNo"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowNo"] = "Mission Follow No";
	$fieldLabelsmissionfollow["English"]["missionFollowName"] = "Mission Follow Name";
	$fieldToolTipsmissionfollow["English"]["missionFollowName"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowName"] = "Mission Follow Name";
	$fieldLabelsmissionfollow["English"]["missionFollowStartDate"] = "Mission Follow Start Date";
	$fieldToolTipsmissionfollow["English"]["missionFollowStartDate"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowStartDate"] = "Mission Follow Start Date";
	$fieldLabelsmissionfollow["English"]["missionFollowEndDate"] = "Mission Follow End Date";
	$fieldToolTipsmissionfollow["English"]["missionFollowEndDate"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowEndDate"] = "Mission Follow End Date";
	$fieldLabelsmissionfollow["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsmissionfollow["English"]["entryUserName"] = "";
	$placeHoldersmissionfollow["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsmissionfollow["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsmissionfollow["English"]["entryTime"] = "";
	$placeHoldersmissionfollow["English"]["entryTime"] = "Entry Time";
	$fieldLabelsmissionfollow["English"]["missionFollowStatus"] = "Mission Follow Status";
	$fieldToolTipsmissionfollow["English"]["missionFollowStatus"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowStatus"] = "";
	$fieldLabelsmissionfollow["English"]["missionFollowDocFile"] = "Mission Follow Doc File";
	$fieldToolTipsmissionfollow["English"]["missionFollowDocFile"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowDocFile"] = "";
	$fieldLabelsmissionfollow["English"]["missionFollowActionStatus"] = "Mission Follow Action Status";
	$fieldToolTipsmissionfollow["English"]["missionFollowActionStatus"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowActionStatus"] = "";
	$fieldLabelsmissionfollow["English"]["missionFollowHeadName"] = "Mission Follow Head Name";
	$fieldToolTipsmissionfollow["English"]["missionFollowHeadName"] = "";
	$placeHoldersmissionfollow["English"]["missionFollowHeadName"] = "";
	if (count($fieldToolTipsmissionfollow["English"]))
		$tdatamissionfollow[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsmissionfollow["Thai"] = array();
	$fieldToolTipsmissionfollow["Thai"] = array();
	$placeHoldersmissionfollow["Thai"] = array();
	$pageTitlesmissionfollow["Thai"] = array();
	$fieldLabelsmissionfollow["Thai"]["id"] = "ID";
	$fieldToolTipsmissionfollow["Thai"]["id"] = "";
	$placeHoldersmissionfollow["Thai"]["id"] = "ID";
	$fieldLabelsmissionfollow["Thai"]["missionFollowNo"] = "รหัสภารกิจ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowNo"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowNo"] = "รหัสภารกิจ";
	$fieldLabelsmissionfollow["Thai"]["missionFollowName"] = "ชื่อภารกิจ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowName"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowName"] = "ชื่อภารกิจ";
	$fieldLabelsmissionfollow["Thai"]["missionFollowStartDate"] = "เริ่มต้นภารกิจ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowStartDate"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowStartDate"] = "เริ่มต้นภารกิจ";
	$fieldLabelsmissionfollow["Thai"]["missionFollowEndDate"] = "สิ้นสุดภารกิจ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowEndDate"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowEndDate"] = "สิ้นสุดภารกิจ";
	$fieldLabelsmissionfollow["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsmissionfollow["Thai"]["entryUserName"] = "";
	$placeHoldersmissionfollow["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsmissionfollow["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsmissionfollow["Thai"]["entryTime"] = "";
	$placeHoldersmissionfollow["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsmissionfollow["Thai"]["missionFollowStatus"] = "สถานะ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowStatus"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowStatus"] = "";
	$fieldLabelsmissionfollow["Thai"]["missionFollowDocFile"] = "เอกสารโครงการ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowDocFile"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowDocFile"] = "";
	$fieldLabelsmissionfollow["Thai"]["missionFollowActionStatus"] = "สถานะการดำเนินการ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowActionStatus"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowActionStatus"] = "";
	$fieldLabelsmissionfollow["Thai"]["missionFollowHeadName"] = "หัวหน้าภารกิจ";
	$fieldToolTipsmissionfollow["Thai"]["missionFollowHeadName"] = "";
	$placeHoldersmissionfollow["Thai"]["missionFollowHeadName"] = "";
	if (count($fieldToolTipsmissionfollow["Thai"]))
		$tdatamissionfollow[".isUseToolTips"] = true;
}


	$tdatamissionfollow[".NCSearch"] = true;



$tdatamissionfollow[".shortTableName"] = "missionfollow";
$tdatamissionfollow[".nSecOptions"] = 0;

$tdatamissionfollow[".mainTableOwnerID"] = "";
$tdatamissionfollow[".entityType"] = 0;
$tdatamissionfollow[".connId"] = "mc_at_192_168_1_111";


$tdatamissionfollow[".strOriginalTableName"] = "missionFollow";

	



$tdatamissionfollow[".showAddInPopup"] = false;

$tdatamissionfollow[".showEditInPopup"] = false;

$tdatamissionfollow[".showViewInPopup"] = false;

$tdatamissionfollow[".listAjax"] = false;
//	temporary
//$tdatamissionfollow[".listAjax"] = false;

	$tdatamissionfollow[".audit"] = true;

	$tdatamissionfollow[".locking"] = false;


$pages = $tdatamissionfollow[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamissionfollow[".edit"] = true;
	$tdatamissionfollow[".afterEditAction"] = 1;
	$tdatamissionfollow[".closePopupAfterEdit"] = 1;
	$tdatamissionfollow[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamissionfollow[".add"] = true;
$tdatamissionfollow[".afterAddAction"] = 1;
$tdatamissionfollow[".closePopupAfterAdd"] = 1;
$tdatamissionfollow[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamissionfollow[".list"] = true;
}



$tdatamissionfollow[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamissionfollow[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamissionfollow[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamissionfollow[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamissionfollow[".printFriendly"] = true;
}



$tdatamissionfollow[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamissionfollow[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamissionfollow[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamissionfollow[".isUseAjaxSuggest"] = true;

$tdatamissionfollow[".rowHighlite"] = true;



						

$tdatamissionfollow[".ajaxCodeSnippetAdded"] = false;

$tdatamissionfollow[".buttonsAdded"] = false;

$tdatamissionfollow[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamissionfollow[".isUseTimeForSearch"] = false;


$tdatamissionfollow[".badgeColor"] = "4169E1";


$tdatamissionfollow[".allSearchFields"] = array();
$tdatamissionfollow[".filterFields"] = array();
$tdatamissionfollow[".requiredSearchFields"] = array();

$tdatamissionfollow[".googleLikeFields"] = array();
$tdatamissionfollow[".googleLikeFields"][] = "id";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowNo";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowName";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowStartDate";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowEndDate";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowDocFile";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowActionStatus";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowStatus";
$tdatamissionfollow[".googleLikeFields"][] = "missionFollowHeadName";
$tdatamissionfollow[".googleLikeFields"][] = "entryUserName";
$tdatamissionfollow[".googleLikeFields"][] = "entryTime";



$tdatamissionfollow[".tableType"] = "list";

$tdatamissionfollow[".printerPageOrientation"] = 0;
$tdatamissionfollow[".nPrinterPageScale"] = 100;

$tdatamissionfollow[".nPrinterSplitRecords"] = 40;

$tdatamissionfollow[".geocodingEnabled"] = false;










$tdatamissionfollow[".pageSize"] = 20;

$tdatamissionfollow[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamissionfollow[".strOrderBy"] = $tstrOrderBy;

$tdatamissionfollow[".orderindexes"] = array();


$tdatamissionfollow[".sqlHead"] = "SELECT id,  	missionFollowNo,  	missionFollowName,  	missionFollowStartDate,  	missionFollowEndDate,  	missionFollowDocFile,  	missionFollowActionStatus,  	missionFollowStatus,  	missionFollowHeadName,  	entryUserName,  	entryTime";
$tdatamissionfollow[".sqlFrom"] = "FROM missionFollow";
$tdatamissionfollow[".sqlWhereExpr"] = "";
$tdatamissionfollow[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamissionfollow[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamissionfollow[".arrGroupsPerPage"] = $arrGPP;

$tdatamissionfollow[".highlightSearchResults"] = true;

$tableKeysmissionfollow = array();
$tableKeysmissionfollow[] = "id";
$tdatamissionfollow[".Keys"] = $tableKeysmissionfollow;


$tdatamissionfollow[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatamissionfollow["id"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "id";
//	missionFollowNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "missionFollowNo";
	$fdata["GoodName"] = "missionFollowNo";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowNo";

		$fdata["sourceSingle"] = "missionFollowNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowNo";

	
	
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


	$tdatamissionfollow["missionFollowNo"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowNo";
//	missionFollowName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionFollowName";
	$fdata["GoodName"] = "missionFollowName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowName";

		$fdata["sourceSingle"] = "missionFollowName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowName";

	
	
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


	$tdatamissionfollow["missionFollowName"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowName";
//	missionFollowStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionFollowStartDate";
	$fdata["GoodName"] = "missionFollowStartDate";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "missionFollowStartDate";

		$fdata["sourceSingle"] = "missionFollowStartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowStartDate";

	
	
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


	$tdatamissionfollow["missionFollowStartDate"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowStartDate";
//	missionFollowEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "missionFollowEndDate";
	$fdata["GoodName"] = "missionFollowEndDate";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "missionFollowEndDate";

		$fdata["sourceSingle"] = "missionFollowEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowEndDate";

	
	
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


	$tdatamissionfollow["missionFollowEndDate"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowEndDate";
//	missionFollowDocFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "missionFollowDocFile";
	$fdata["GoodName"] = "missionFollowDocFile";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowDocFile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowDocFile";

		$fdata["sourceSingle"] = "missionFollowDocFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowDocFile";

	
	
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


	$tdatamissionfollow["missionFollowDocFile"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowDocFile";
//	missionFollowActionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "missionFollowActionStatus";
	$fdata["GoodName"] = "missionFollowActionStatus";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowActionStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus";

		$fdata["sourceSingle"] = "missionFollowActionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowActionStatus";

	
	
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

				$edata["LookupWhere"] = "optionGroupID = 1";


	
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


	$tdatamissionfollow["missionFollowActionStatus"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowActionStatus";
//	missionFollowStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "missionFollowStatus";
	$fdata["GoodName"] = "missionFollowStatus";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowStatus";

		$fdata["sourceSingle"] = "missionFollowStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatamissionfollow["missionFollowStatus"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowStatus";
//	missionFollowHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "missionFollowHeadName";
	$fdata["GoodName"] = "missionFollowHeadName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","missionFollowHeadName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowHeadName";

		$fdata["sourceSingle"] = "missionFollowHeadName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowHeadName";

	
	
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


	$tdatamissionfollow["missionFollowHeadName"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "missionFollowHeadName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","entryUserName");
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


	$tdatamissionfollow["entryUserName"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("missionFollow","entryTime");
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


	$tdatamissionfollow["entryTime"] = $fdata;
		$tdatamissionfollow[".searchableFields"][] = "entryTime";


$tables_data["missionFollow"]=&$tdatamissionfollow;
$field_labels["missionFollow"] = &$fieldLabelsmissionfollow;
$fieldToolTips["missionFollow"] = &$fieldToolTipsmissionfollow;
$placeHolders["missionFollow"] = &$placeHoldersmissionfollow;
$page_titles["missionFollow"] = &$pageTitlesmissionfollow;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["missionFollow"] = array();
//	missionAssignment
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="missionAssignment";
		$detailsParam["dOriginalTable"] = "missionAssignment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "missionassignment";
	$detailsParam["dCaptionTable"] = GetTableCaption("missionAssignment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["missionFollow"][$dIndex] = $detailsParam;

	
		$detailsTablesData["missionFollow"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["missionFollow"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["missionFollow"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["missionFollow"][$dIndex]["detailKeys"][]="missionFollowID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["missionFollow"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_missionfollow()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	missionFollowNo,  	missionFollowName,  	missionFollowStartDate,  	missionFollowEndDate,  	missionFollowDocFile,  	missionFollowActionStatus,  	missionFollowStatus,  	missionFollowHeadName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM missionFollow";
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
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "missionFollow";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowNo",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto8["m_sql"] = "missionFollowNo";
$proto8["m_srcTableName"] = "missionFollow";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto10["m_sql"] = "missionFollowName";
$proto10["m_srcTableName"] = "missionFollow";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowStartDate",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto12["m_sql"] = "missionFollowStartDate";
$proto12["m_srcTableName"] = "missionFollow";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowEndDate",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto14["m_sql"] = "missionFollowEndDate";
$proto14["m_srcTableName"] = "missionFollow";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowDocFile",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto16["m_sql"] = "missionFollowDocFile";
$proto16["m_srcTableName"] = "missionFollow";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowActionStatus",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto18["m_sql"] = "missionFollowActionStatus";
$proto18["m_srcTableName"] = "missionFollow";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowStatus",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto20["m_sql"] = "missionFollowStatus";
$proto20["m_srcTableName"] = "missionFollow";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowHeadName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto22["m_sql"] = "missionFollowHeadName";
$proto22["m_srcTableName"] = "missionFollow";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "missionFollow";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "missionFollow"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "missionFollow";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "missionFollow";
$proto29["m_srcTableName"] = "missionFollow";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "missionFollowNo";
$proto29["m_columns"][] = "missionFollowName";
$proto29["m_columns"][] = "missionFollowStartDate";
$proto29["m_columns"][] = "missionFollowEndDate";
$proto29["m_columns"][] = "missionFollowDocFile";
$proto29["m_columns"][] = "missionFollowActionStatus";
$proto29["m_columns"][] = "missionFollowStatus";
$proto29["m_columns"][] = "missionFollowHeadName";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "missionFollow";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "missionFollow";
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
$proto0["m_srcTableName"]="missionFollow";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_missionfollow = createSqlQuery_missionfollow();


	
				;

											

$tdatamissionfollow[".sqlquery"] = $queryData_missionfollow;



include_once(getabspath("include/missionfollow_events.php"));
$tableEvents["missionFollow"] = new eventclass_missionfollow;
$tdatamissionfollow[".hasEvents"] = true;

?>