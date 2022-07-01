<?php
$tdatamissionassignment = array();
$tdatamissionassignment[".searchableFields"] = array();
$tdatamissionassignment[".ShortName"] = "missionassignment";
$tdatamissionassignment[".OwnerID"] = "";
$tdatamissionassignment[".OriginalTable"] = "missionAssignment";


$tdatamissionassignment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamissionassignment[".originalPagesByType"] = $tdatamissionassignment[".pagesByType"];
$tdatamissionassignment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamissionassignment[".originalPages"] = $tdatamissionassignment[".pages"];
$tdatamissionassignment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamissionassignment[".originalDefaultPages"] = $tdatamissionassignment[".defaultPages"];

//	field labels
$fieldLabelsmissionassignment = array();
$fieldToolTipsmissionassignment = array();
$pageTitlesmissionassignment = array();
$placeHoldersmissionassignment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmissionassignment["English"] = array();
	$fieldToolTipsmissionassignment["English"] = array();
	$placeHoldersmissionassignment["English"] = array();
	$pageTitlesmissionassignment["English"] = array();
	$fieldLabelsmissionassignment["English"]["id"] = "ID";
	$fieldToolTipsmissionassignment["English"]["id"] = "";
	$placeHoldersmissionassignment["English"]["id"] = "ID";
	$fieldLabelsmissionassignment["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsmissionassignment["English"]["missionFollowID"] = "";
	$placeHoldersmissionassignment["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldLabelsmissionassignment["English"]["missionAssignmentNo"] = "Mission Assignment No";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentNo"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentNo"] = "Mission Assignment No";
	$fieldLabelsmissionassignment["English"]["missionAssignmentName"] = "Mission Assignment Name";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentName"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentName"] = "Mission Assignment Name";
	$fieldLabelsmissionassignment["English"]["missionAssignmentFile"] = "Mission Assignment File";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentFile"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentFile"] = "Mission Assignment File";
	$fieldLabelsmissionassignment["English"]["missionAssignmentDesc"] = "Mission Assignment Desc";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentDesc"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentDesc"] = "Mission Assignment Desc";
	$fieldLabelsmissionassignment["English"]["missionAssignmentConsiderName"] = "Mission Assignment Consider Name";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentConsiderName"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentConsiderName"] = "Mission Assignment Consider Name";
	$fieldLabelsmissionassignment["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldLabelsmissionassignment["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsmissionassignment["English"]["entryUserName"] = "";
	$placeHoldersmissionassignment["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsmissionassignment["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsmissionassignment["English"]["entryTime"] = "";
	$placeHoldersmissionassignment["English"]["entryTime"] = "Entry Time";
	$fieldLabelsmissionassignment["English"]["missionAssignmentConsiderValue"] = "Mission Assignment Consider Value";
	$fieldToolTipsmissionassignment["English"]["missionAssignmentConsiderValue"] = "";
	$placeHoldersmissionassignment["English"]["missionAssignmentConsiderValue"] = "Mission Assignment Consider Value";
	if (count($fieldToolTipsmissionassignment["English"]))
		$tdatamissionassignment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsmissionassignment["Thai"] = array();
	$fieldToolTipsmissionassignment["Thai"] = array();
	$placeHoldersmissionassignment["Thai"] = array();
	$pageTitlesmissionassignment["Thai"] = array();
	$fieldLabelsmissionassignment["Thai"]["id"] = "ID";
	$fieldToolTipsmissionassignment["Thai"]["id"] = "";
	$placeHoldersmissionassignment["Thai"]["id"] = "ID";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentNo"] = "การมอบหมายที่";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentNo"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentNo"] = "การมอบหมายที่";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentName"] = "หัวข้อมอบหมาย";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentName"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentName"] = "หัวข้อมอบหมาย";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentFile"] = "เอกสารแนบ";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentFile"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentFile"] = "เอกสารแนบ";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentDesc"] = "หมายเหตุ";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentDesc"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentDesc"] = "หมายเหตุ";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentConsiderName"] = "ชื่อการพิจารณา";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentConsiderName"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentConsiderName"] = "ชื่อการพิจารณา";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldLabelsmissionassignment["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsmissionassignment["Thai"]["entryUserName"] = "";
	$placeHoldersmissionassignment["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsmissionassignment["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsmissionassignment["Thai"]["entryTime"] = "";
	$placeHoldersmissionassignment["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsmissionassignment["Thai"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsmissionassignment["Thai"]["missionFollowID"] = "";
	$placeHoldersmissionassignment["Thai"]["missionFollowID"] = "Mission Follow ID";
	$fieldLabelsmissionassignment["Thai"]["missionAssignmentConsiderValue"] = "การพิจารณา";
	$fieldToolTipsmissionassignment["Thai"]["missionAssignmentConsiderValue"] = "";
	$placeHoldersmissionassignment["Thai"]["missionAssignmentConsiderValue"] = "ค่าการพิจารณา";
	if (count($fieldToolTipsmissionassignment["Thai"]))
		$tdatamissionassignment[".isUseToolTips"] = true;
}


	$tdatamissionassignment[".NCSearch"] = true;



$tdatamissionassignment[".shortTableName"] = "missionassignment";
$tdatamissionassignment[".nSecOptions"] = 0;

$tdatamissionassignment[".mainTableOwnerID"] = "";
$tdatamissionassignment[".entityType"] = 0;
$tdatamissionassignment[".connId"] = "mc_at_192_168_1_111";


$tdatamissionassignment[".strOriginalTableName"] = "missionAssignment";

	



$tdatamissionassignment[".showAddInPopup"] = false;

$tdatamissionassignment[".showEditInPopup"] = false;

$tdatamissionassignment[".showViewInPopup"] = false;

$tdatamissionassignment[".listAjax"] = false;
//	temporary
//$tdatamissionassignment[".listAjax"] = false;

	$tdatamissionassignment[".audit"] = true;

	$tdatamissionassignment[".locking"] = false;


$pages = $tdatamissionassignment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamissionassignment[".edit"] = true;
	$tdatamissionassignment[".afterEditAction"] = 1;
	$tdatamissionassignment[".closePopupAfterEdit"] = 1;
	$tdatamissionassignment[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamissionassignment[".add"] = true;
$tdatamissionassignment[".afterAddAction"] = 1;
$tdatamissionassignment[".closePopupAfterAdd"] = 1;
$tdatamissionassignment[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamissionassignment[".list"] = true;
}



$tdatamissionassignment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamissionassignment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamissionassignment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamissionassignment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamissionassignment[".printFriendly"] = true;
}



$tdatamissionassignment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamissionassignment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamissionassignment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamissionassignment[".isUseAjaxSuggest"] = true;

$tdatamissionassignment[".rowHighlite"] = true;





$tdatamissionassignment[".ajaxCodeSnippetAdded"] = false;

$tdatamissionassignment[".buttonsAdded"] = false;

$tdatamissionassignment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamissionassignment[".isUseTimeForSearch"] = false;


$tdatamissionassignment[".badgeColor"] = "4169e1";


$tdatamissionassignment[".allSearchFields"] = array();
$tdatamissionassignment[".filterFields"] = array();
$tdatamissionassignment[".requiredSearchFields"] = array();

$tdatamissionassignment[".googleLikeFields"] = array();
$tdatamissionassignment[".googleLikeFields"][] = "id";
$tdatamissionassignment[".googleLikeFields"][] = "missionFollowID";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentNo";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentName";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentFile";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentDesc";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentConsiderName";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentConsiderValue";
$tdatamissionassignment[".googleLikeFields"][] = "missionAssignmentResponsibleName";
$tdatamissionassignment[".googleLikeFields"][] = "entryUserName";
$tdatamissionassignment[".googleLikeFields"][] = "entryTime";



$tdatamissionassignment[".tableType"] = "list";

$tdatamissionassignment[".printerPageOrientation"] = 0;
$tdatamissionassignment[".nPrinterPageScale"] = 100;

$tdatamissionassignment[".nPrinterSplitRecords"] = 40;

$tdatamissionassignment[".geocodingEnabled"] = false;










$tdatamissionassignment[".pageSize"] = 20;

$tdatamissionassignment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamissionassignment[".strOrderBy"] = $tstrOrderBy;

$tdatamissionassignment[".orderindexes"] = array();


$tdatamissionassignment[".sqlHead"] = "SELECT id,  	missionFollowID,  	missionAssignmentNo,  	missionAssignmentName,  	missionAssignmentFile,  	missionAssignmentDesc,  	missionAssignmentConsiderName,  	missionAssignmentConsiderValue,  	missionAssignmentResponsibleName,  	entryUserName,  	entryTime";
$tdatamissionassignment[".sqlFrom"] = "FROM missionAssignment";
$tdatamissionassignment[".sqlWhereExpr"] = "";
$tdatamissionassignment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamissionassignment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamissionassignment[".arrGroupsPerPage"] = $arrGPP;

$tdatamissionassignment[".highlightSearchResults"] = true;

$tableKeysmissionassignment = array();
$tableKeysmissionassignment[] = "id";
$tdatamissionassignment[".Keys"] = $tableKeysmissionassignment;


$tdatamissionassignment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","id");
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


	$tdatamissionassignment["id"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "id";
//	missionFollowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "missionFollowID";
	$fdata["GoodName"] = "missionFollowID";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionFollowID");
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


	$tdatamissionassignment["missionFollowID"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionFollowID";
//	missionAssignmentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionAssignmentNo";
	$fdata["GoodName"] = "missionAssignmentNo";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentNo");
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


	$tdatamissionassignment["missionAssignmentNo"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentNo";
//	missionAssignmentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionAssignmentName";
	$fdata["GoodName"] = "missionAssignmentName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentName");
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


	$tdatamissionassignment["missionAssignmentName"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentName";
//	missionAssignmentFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "missionAssignmentFile";
	$fdata["GoodName"] = "missionAssignmentFile";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "missionAssignmentFile";

		$fdata["sourceSingle"] = "missionAssignmentFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignmentFile";

		$fdata["DeleteAssociatedFile"] = true;

	
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


	$tdatamissionassignment["missionAssignmentFile"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentFile";
//	missionAssignmentDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "missionAssignmentDesc";
	$fdata["GoodName"] = "missionAssignmentDesc";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentDesc");
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


	$tdatamissionassignment["missionAssignmentDesc"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentDesc";
//	missionAssignmentConsiderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "missionAssignmentConsiderName";
	$fdata["GoodName"] = "missionAssignmentConsiderName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentConsiderName");
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


	$tdatamissionassignment["missionAssignmentConsiderName"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentConsiderName";
//	missionAssignmentConsiderValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "missionAssignmentConsiderValue";
	$fdata["GoodName"] = "missionAssignmentConsiderValue";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentConsiderValue");
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


	$tdatamissionassignment["missionAssignmentConsiderValue"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentConsiderValue";
//	missionAssignmentResponsibleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "missionAssignmentResponsibleName";
	$fdata["GoodName"] = "missionAssignmentResponsibleName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","missionAssignmentResponsibleName");
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


	$tdatamissionassignment["missionAssignmentResponsibleName"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "missionAssignmentResponsibleName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","entryUserName");
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


	$tdatamissionassignment["entryUserName"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("missionAssignment","entryTime");
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


	$tdatamissionassignment["entryTime"] = $fdata;
		$tdatamissionassignment[".searchableFields"][] = "entryTime";


$tables_data["missionAssignment"]=&$tdatamissionassignment;
$field_labels["missionAssignment"] = &$fieldLabelsmissionassignment;
$fieldToolTips["missionAssignment"] = &$fieldToolTipsmissionassignment;
$placeHolders["missionAssignment"] = &$placeHoldersmissionassignment;
$page_titles["missionAssignment"] = &$pageTitlesmissionassignment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["missionAssignment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["missionAssignment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="missionFollow";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="missionFollow";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "missionfollow";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["missionAssignment"][0] = $masterParams;
				$masterTablesData["missionAssignment"][0]["masterKeys"] = array();
	$masterTablesData["missionAssignment"][0]["masterKeys"][]="id";
				$masterTablesData["missionAssignment"][0]["detailKeys"] = array();
	$masterTablesData["missionAssignment"][0]["detailKeys"][]="missionFollowID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_missionassignment()
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
	"m_srcTableName" => "missionAssignment"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "missionAssignment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowID",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto8["m_sql"] = "missionFollowID";
$proto8["m_srcTableName"] = "missionAssignment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentNo",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto10["m_sql"] = "missionAssignmentNo";
$proto10["m_srcTableName"] = "missionAssignment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto12["m_sql"] = "missionAssignmentName";
$proto12["m_srcTableName"] = "missionAssignment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentFile",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto14["m_sql"] = "missionAssignmentFile";
$proto14["m_srcTableName"] = "missionAssignment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentDesc",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto16["m_sql"] = "missionAssignmentDesc";
$proto16["m_srcTableName"] = "missionAssignment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentConsiderName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto18["m_sql"] = "missionAssignmentConsiderName";
$proto18["m_srcTableName"] = "missionAssignment";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentConsiderValue",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto20["m_sql"] = "missionAssignmentConsiderValue";
$proto20["m_srcTableName"] = "missionAssignment";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentResponsibleName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto22["m_sql"] = "missionAssignmentResponsibleName";
$proto22["m_srcTableName"] = "missionAssignment";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto24["m_sql"] = "entryUserName";
$proto24["m_srcTableName"] = "missionAssignment";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "missionAssignment"
));

$proto26["m_sql"] = "entryTime";
$proto26["m_srcTableName"] = "missionAssignment";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "missionAssignment";
$proto29["m_srcTableName"] = "missionAssignment";
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
$proto28["m_srcTableName"] = "missionAssignment";
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
$proto0["m_srcTableName"]="missionAssignment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_missionassignment = createSqlQuery_missionassignment();


	
				;

											

$tdatamissionassignment[".sqlquery"] = $queryData_missionassignment;



include_once(getabspath("include/missionassignment_events.php"));
$tableEvents["missionAssignment"] = new eventclass_missionassignment;
$tdatamissionassignment[".hasEvents"] = true;

?>