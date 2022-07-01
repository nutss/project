<?php
$tdatamissionassignmentview = array();
$tdatamissionassignmentview[".searchableFields"] = array();
$tdatamissionassignmentview[".ShortName"] = "missionassignmentview";
$tdatamissionassignmentview[".OwnerID"] = "";
$tdatamissionassignmentview[".OriginalTable"] = "missionAssignment";


$tdatamissionassignmentview[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamissionassignmentview[".originalPagesByType"] = $tdatamissionassignmentview[".pagesByType"];
$tdatamissionassignmentview[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamissionassignmentview[".originalPages"] = $tdatamissionassignmentview[".pages"];
$tdatamissionassignmentview[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamissionassignmentview[".originalDefaultPages"] = $tdatamissionassignmentview[".defaultPages"];

//	field labels
$fieldLabelsmissionassignmentview = array();
$fieldToolTipsmissionassignmentview = array();
$pageTitlesmissionassignmentview = array();
$placeHoldersmissionassignmentview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmissionassignmentview["English"] = array();
	$fieldToolTipsmissionassignmentview["English"] = array();
	$placeHoldersmissionassignmentview["English"] = array();
	$pageTitlesmissionassignmentview["English"] = array();
	$fieldLabelsmissionassignmentview["English"]["id"] = "ID";
	$fieldToolTipsmissionassignmentview["English"]["id"] = "";
	$placeHoldersmissionassignmentview["English"]["id"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsmissionassignmentview["English"]["missionFollowID"] = "";
	$placeHoldersmissionassignmentview["English"]["missionFollowID"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentNo"] = "Mission Assignment No";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentNo"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentNo"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentName"] = "Mission Assignment Name";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentName"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentName"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentFile"] = "Mission Assignment File";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentFile"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentFile"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentDesc"] = "Mission Assignment Desc";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentDesc"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentDesc"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentConsiderName"] = "Mission Assignment Consider Name";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentConsiderName"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentConsiderName"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsmissionassignmentview["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsmissionassignmentview["English"]["entryUserName"] = "";
	$placeHoldersmissionassignmentview["English"]["entryUserName"] = "";
	$fieldLabelsmissionassignmentview["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsmissionassignmentview["English"]["entryTime"] = "";
	$placeHoldersmissionassignmentview["English"]["entryTime"] = "";
	$fieldLabelsmissionassignmentview["English"]["missionAssignmentConsiderValue"] = "Mission Assignment Consider Value";
	$fieldToolTipsmissionassignmentview["English"]["missionAssignmentConsiderValue"] = "";
	$placeHoldersmissionassignmentview["English"]["missionAssignmentConsiderValue"] = "";
	if (count($fieldToolTipsmissionassignmentview["English"]))
		$tdatamissionassignmentview[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsmissionassignmentview["Thai"] = array();
	$fieldToolTipsmissionassignmentview["Thai"] = array();
	$placeHoldersmissionassignmentview["Thai"] = array();
	$pageTitlesmissionassignmentview["Thai"] = array();
	$fieldLabelsmissionassignmentview["Thai"]["id"] = "ID";
	$fieldToolTipsmissionassignmentview["Thai"]["id"] = "";
	$placeHoldersmissionassignmentview["Thai"]["id"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentNo"] = "การมอบหมายที่";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentNo"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentNo"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentName"] = "หัวข้อมอบหมาย";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentName"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentName"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentFile"] = "เอกสารแนบ";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentFile"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentFile"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentDesc"] = "หมายเหตุ";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentDesc"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentDesc"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentConsiderName"] = "ชื่อการพิจารณา";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentConsiderName"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentConsiderName"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsmissionassignmentview["Thai"]["entryUserName"] = "";
	$placeHoldersmissionassignmentview["Thai"]["entryUserName"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsmissionassignmentview["Thai"]["entryTime"] = "";
	$placeHoldersmissionassignmentview["Thai"]["entryTime"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionFollowID"] = "ภารกิจ";
	$fieldToolTipsmissionassignmentview["Thai"]["missionFollowID"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionFollowID"] = "";
	$fieldLabelsmissionassignmentview["Thai"]["missionAssignmentConsiderValue"] = "การพิจารณา";
	$fieldToolTipsmissionassignmentview["Thai"]["missionAssignmentConsiderValue"] = "";
	$placeHoldersmissionassignmentview["Thai"]["missionAssignmentConsiderValue"] = "";
	if (count($fieldToolTipsmissionassignmentview["Thai"]))
		$tdatamissionassignmentview[".isUseToolTips"] = true;
}


	$tdatamissionassignmentview[".NCSearch"] = true;



$tdatamissionassignmentview[".shortTableName"] = "missionassignmentview";
$tdatamissionassignmentview[".nSecOptions"] = 0;

$tdatamissionassignmentview[".mainTableOwnerID"] = "";
$tdatamissionassignmentview[".entityType"] = 1;
$tdatamissionassignmentview[".connId"] = "mc_at_192_168_1_111";


$tdatamissionassignmentview[".strOriginalTableName"] = "missionAssignment";

	



$tdatamissionassignmentview[".showAddInPopup"] = false;

$tdatamissionassignmentview[".showEditInPopup"] = false;

$tdatamissionassignmentview[".showViewInPopup"] = false;

$tdatamissionassignmentview[".listAjax"] = false;
//	temporary
//$tdatamissionassignmentview[".listAjax"] = false;

	$tdatamissionassignmentview[".audit"] = true;

	$tdatamissionassignmentview[".locking"] = false;


$pages = $tdatamissionassignmentview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamissionassignmentview[".edit"] = true;
	$tdatamissionassignmentview[".afterEditAction"] = 1;
	$tdatamissionassignmentview[".closePopupAfterEdit"] = 1;
	$tdatamissionassignmentview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamissionassignmentview[".add"] = true;
$tdatamissionassignmentview[".afterAddAction"] = 1;
$tdatamissionassignmentview[".closePopupAfterAdd"] = 1;
$tdatamissionassignmentview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamissionassignmentview[".list"] = true;
}



$tdatamissionassignmentview[".strSortControlSettingsJSON"] = "[]";




if( $pages[PAGE_VIEW] ) {
$tdatamissionassignmentview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamissionassignmentview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamissionassignmentview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamissionassignmentview[".printFriendly"] = true;
}



$tdatamissionassignmentview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamissionassignmentview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamissionassignmentview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamissionassignmentview[".isUseAjaxSuggest"] = true;

$tdatamissionassignmentview[".rowHighlite"] = true;





$tdatamissionassignmentview[".ajaxCodeSnippetAdded"] = false;

$tdatamissionassignmentview[".buttonsAdded"] = false;

$tdatamissionassignmentview[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamissionassignmentview[".isUseTimeForSearch"] = false;


$tdatamissionassignmentview[".badgeColor"] = "DAA520";


$tdatamissionassignmentview[".allSearchFields"] = array();
$tdatamissionassignmentview[".filterFields"] = array();
$tdatamissionassignmentview[".requiredSearchFields"] = array();

$tdatamissionassignmentview[".googleLikeFields"] = array();
$tdatamissionassignmentview[".googleLikeFields"][] = "id";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionFollowID";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentNo";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentName";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentFile";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentDesc";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentConsiderName";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentConsiderValue";
$tdatamissionassignmentview[".googleLikeFields"][] = "missionAssignmentResponsibleName";
$tdatamissionassignmentview[".googleLikeFields"][] = "entryUserName";
$tdatamissionassignmentview[".googleLikeFields"][] = "entryTime";



$tdatamissionassignmentview[".tableType"] = "list";

$tdatamissionassignmentview[".printerPageOrientation"] = 0;
$tdatamissionassignmentview[".nPrinterPageScale"] = 100;

$tdatamissionassignmentview[".nPrinterSplitRecords"] = 40;

$tdatamissionassignmentview[".geocodingEnabled"] = false;










$tdatamissionassignmentview[".pageSize"] = 20;

$tdatamissionassignmentview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamissionassignmentview[".strOrderBy"] = $tstrOrderBy;

$tdatamissionassignmentview[".orderindexes"] = array();


$tdatamissionassignmentview[".sqlHead"] = "SELECT id,  	missionFollowID,  	missionAssignmentNo,  	missionAssignmentName,  	missionAssignmentFile,  	missionAssignmentDesc,  	missionAssignmentConsiderName,  	missionAssignmentConsiderValue,  	missionAssignmentResponsibleName,  	entryUserName,  	entryTime";
$tdatamissionassignmentview[".sqlFrom"] = "FROM missionAssignment";
$tdatamissionassignmentview[".sqlWhereExpr"] = "";
$tdatamissionassignmentview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamissionassignmentview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamissionassignmentview[".arrGroupsPerPage"] = $arrGPP;

$tdatamissionassignmentview[".highlightSearchResults"] = true;

$tableKeysmissionassignmentview = array();
$tableKeysmissionassignmentview[] = "id";
$tdatamissionassignmentview[".Keys"] = $tableKeysmissionassignmentview;


$tdatamissionassignmentview[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","id");
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


	$tdatamissionassignmentview["id"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "id";
//	missionFollowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "missionFollowID";
	$fdata["GoodName"] = "missionFollowID";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionFollowID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowID";

		$fdata["sourceSingle"] = "missionFollowID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollowID";

	
	
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
	$edata["LookupTable"] = "missionFollow";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "missionFollowName";

	

	
	$edata["LookupOrderBy"] = "missionFollowName";

	
	
	
	

	
	
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


	$tdatamissionassignmentview["missionFollowID"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionFollowID";
//	missionAssignmentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionAssignmentNo";
	$fdata["GoodName"] = "missionAssignmentNo";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentNo";

		$fdata["sourceSingle"] = "missionAssignmentNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentNo";

	
	
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


	$tdatamissionassignmentview["missionAssignmentNo"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentNo";
//	missionAssignmentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionAssignmentName";
	$fdata["GoodName"] = "missionAssignmentName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentName";

		$fdata["sourceSingle"] = "missionAssignmentName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentName";

	
	
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


	$tdatamissionassignmentview["missionAssignmentName"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentName";
//	missionAssignmentFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "missionAssignmentFile";
	$fdata["GoodName"] = "missionAssignmentFile";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "missionAssignmentFile";

		$fdata["sourceSingle"] = "missionAssignmentFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentFile";

	
	
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


	$tdatamissionassignmentview["missionAssignmentFile"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentFile";
//	missionAssignmentDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "missionAssignmentDesc";
	$fdata["GoodName"] = "missionAssignmentDesc";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentDesc");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "missionAssignmentDesc";

		$fdata["sourceSingle"] = "missionAssignmentDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentDesc";

	
	
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


	$tdatamissionassignmentview["missionAssignmentDesc"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentDesc";
//	missionAssignmentConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "missionAssignmentConsiderName";
	$fdata["GoodName"] = "missionAssignmentConsiderName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentConsiderName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentConsiderName";

		$fdata["sourceSingle"] = "missionAssignmentConsiderName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentConsiderName";

	
	
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


	
	$edata["LookupOrderBy"] = "optionName";

	
	
	
	

	
	
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


	$tdatamissionassignmentview["missionAssignmentConsiderName"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentConsiderName";
//	missionAssignmentConsiderValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "missionAssignmentConsiderValue";
	$fdata["GoodName"] = "missionAssignmentConsiderValue";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentConsiderValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentConsiderValue";

		$fdata["sourceSingle"] = "missionAssignmentConsiderValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentConsiderValue";

	
	
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
	$edata["LookupTable"] = "considerChoice";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ChoiceName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ChoiceName";

				$edata["LookupWhere"] = "(ChoiceType='optionSub')";


	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
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


	$tdatamissionassignmentview["missionAssignmentConsiderValue"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentConsiderValue";
//	missionAssignmentResponsibleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "missionAssignmentResponsibleName";
	$fdata["GoodName"] = "missionAssignmentResponsibleName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","missionAssignmentResponsibleName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentResponsibleName";

		$fdata["sourceSingle"] = "missionAssignmentResponsibleName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentResponsibleName";

	
	
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
	$edata["LookupTable"] = "staffUsers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffUsername";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffFullName";

	

	
	$edata["LookupOrderBy"] = "staffUsername";

	
	
	
	

	
	
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


	$tdatamissionassignmentview["missionAssignmentResponsibleName"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "missionAssignmentResponsibleName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","entryUserName");
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


	$tdatamissionassignmentview["entryUserName"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignmentView","entryTime");
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


	$tdatamissionassignmentview["entryTime"] = $fdata;
		$tdatamissionassignmentview[".searchableFields"][] = "entryTime";


$tables_data["missionAssignmentView"]=&$tdatamissionassignmentview;
$field_labels["missionAssignmentView"] = &$fieldLabelsmissionassignmentview;
$fieldToolTips["missionAssignmentView"] = &$fieldToolTipsmissionassignmentview;
$placeHolders["missionAssignmentView"] = &$placeHoldersmissionassignmentview;
$page_titles["missionAssignmentView"] = &$pageTitlesmissionassignmentview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["missionAssignmentView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["missionAssignmentView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_missionassignmentview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	missionFollowID,  	missionAssignmentNo,  	missionAssignmentName,  	missionAssignmentFile,  	missionAssignmentDesc,  	missionAssignmentConsiderName,  	missionAssignmentConsiderValue,  	missionAssignmentResponsibleName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM missionAssignment";
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
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "missionAssignmentView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowID",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto8["m_sql"] = "missionFollowID";
$proto8["m_srcTableName"] = "missionAssignmentView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentNo",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto10["m_sql"] = "missionAssignmentNo";
$proto10["m_srcTableName"] = "missionAssignmentView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto12["m_sql"] = "missionAssignmentName";
$proto12["m_srcTableName"] = "missionAssignmentView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentFile",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto14["m_sql"] = "missionAssignmentFile";
$proto14["m_srcTableName"] = "missionAssignmentView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentDesc",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto16["m_sql"] = "missionAssignmentDesc";
$proto16["m_srcTableName"] = "missionAssignmentView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentConsiderName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto18["m_sql"] = "missionAssignmentConsiderName";
$proto18["m_srcTableName"] = "missionAssignmentView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentConsiderValue",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto20["m_sql"] = "missionAssignmentConsiderValue";
$proto20["m_srcTableName"] = "missionAssignmentView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentResponsibleName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto22["m_sql"] = "missionAssignmentResponsibleName";
$proto22["m_srcTableName"] = "missionAssignmentView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "missionAssignmentView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignmentView"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "missionAssignmentView";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "missionAssignment";
$proto29["m_srcTableName"] = "missionAssignmentView";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "missionFollowID";
$proto29["m_columns"][] = "missionAssignmentNo";
$proto29["m_columns"][] = "missionAssignmentName";
$proto29["m_columns"][] = "missionAssignmentFile";
$proto29["m_columns"][] = "missionAssignmentDesc";
$proto29["m_columns"][] = "missionAssignmentConsiderName";
$proto29["m_columns"][] = "missionAssignmentConsiderValue";
$proto29["m_columns"][] = "missionAssignmentResponsibleName";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "missionAssignment";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "missionAssignmentView";
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
$proto0["m_srcTableName"]="missionAssignmentView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_missionassignmentview = createSqlQuery_missionassignmentview();


	
				;

											

$tdatamissionassignmentview[".sqlquery"] = $queryData_missionassignmentview;



include_once(getabspath("include/missionassignmentview_events.php"));
$tableEvents["missionAssignmentView"] = new eventclass_missionassignmentview;
$tdatamissionassignmentview[".hasEvents"] = true;

?>