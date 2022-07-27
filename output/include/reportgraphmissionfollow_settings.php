<?php
$tdatareportgraphmissionfollow = array();
$tdatareportgraphmissionfollow[".searchableFields"] = array();
$tdatareportgraphmissionfollow[".ShortName"] = "reportgraphmissionfollow";
$tdatareportgraphmissionfollow[".OwnerID"] = "";
$tdatareportgraphmissionfollow[".OriginalTable"] = "missionFollow";


$tdatareportgraphmissionfollow[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatareportgraphmissionfollow[".originalPagesByType"] = $tdatareportgraphmissionfollow[".pagesByType"];
$tdatareportgraphmissionfollow[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatareportgraphmissionfollow[".originalPages"] = $tdatareportgraphmissionfollow[".pages"];
$tdatareportgraphmissionfollow[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatareportgraphmissionfollow[".originalDefaultPages"] = $tdatareportgraphmissionfollow[".defaultPages"];

//	field labels
$fieldLabelsreportgraphmissionfollow = array();
$fieldToolTipsreportgraphmissionfollow = array();
$pageTitlesreportgraphmissionfollow = array();
$placeHoldersreportgraphmissionfollow = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportgraphmissionfollow["English"] = array();
	$fieldToolTipsreportgraphmissionfollow["English"] = array();
	$placeHoldersreportgraphmissionfollow["English"] = array();
	$pageTitlesreportgraphmissionfollow["English"] = array();
	$fieldLabelsreportgraphmissionfollow["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsreportgraphmissionfollow["English"]["entryUserName"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["entryUserName"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus"] = "Mission Follow Action Status";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowID"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowID"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["id"] = "Id";
	$fieldToolTipsreportgraphmissionfollow["English"]["id"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["id"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus1"] = "Mission Follow Action Status1";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus1"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus1"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus2"] = "Mission Follow Action Status2";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus2"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus2"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus3"] = "Mission Follow Action Status3";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus3"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus3"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus4"] = "Mission Follow Action Status4";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus4"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus4"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowName"] = "Mission Follow Name";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowName"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowName"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus5"] = "Mission Follow Action Status5";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus5"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus5"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus6"] = "Mission Follow Action Status6";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus6"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus6"] = "";
	$fieldLabelsreportgraphmissionfollow["English"]["missionFollowActionStatus7"] = "Mission Follow Action Status7";
	$fieldToolTipsreportgraphmissionfollow["English"]["missionFollowActionStatus7"] = "";
	$placeHoldersreportgraphmissionfollow["English"]["missionFollowActionStatus7"] = "";
	if (count($fieldToolTipsreportgraphmissionfollow["English"]))
		$tdatareportgraphmissionfollow[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportgraphmissionfollow["Thai"] = array();
	$fieldToolTipsreportgraphmissionfollow["Thai"] = array();
	$placeHoldersreportgraphmissionfollow["Thai"] = array();
	$pageTitlesreportgraphmissionfollow["Thai"] = array();
	$fieldLabelsreportgraphmissionfollow["Thai"]["id"] = "ID";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["id"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["id"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus"] = "สถานะการดำเนินการ";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["entryUserName"] = "มอบหมายโดย";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["entryUserName"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["entryUserName"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowID"] = "Mission Follow ID";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowID"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowID"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus1"] = "เข้ามาใหม่";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus1"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus1"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus2"] = "เอกสารพร้อมพิจารณาแล้ว";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus2"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus2"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus3"] = "อยู่ระหว่างพิจารณา";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus3"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus3"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus4"] = "ผ่านการพิจารณาแล้ว";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus4"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus4"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowName"] = "ชื่อภารกิจ";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowName"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowName"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionAssignmentResponsibleName"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionAssignmentResponsibleName"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus5"] = "เสร็จสิ้นไปแล้ว";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus5"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus5"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus6"] = "อยู่ระหว่างการติดตาม";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus6"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus6"] = "";
	$fieldLabelsreportgraphmissionfollow["Thai"]["missionFollowActionStatus7"] = "ไม่ผ่านการพิจารณา";
	$fieldToolTipsreportgraphmissionfollow["Thai"]["missionFollowActionStatus7"] = "";
	$placeHoldersreportgraphmissionfollow["Thai"]["missionFollowActionStatus7"] = "";
	if (count($fieldToolTipsreportgraphmissionfollow["Thai"]))
		$tdatareportgraphmissionfollow[".isUseToolTips"] = true;
}


	$tdatareportgraphmissionfollow[".NCSearch"] = true;

	$tdatareportgraphmissionfollow[".ChartRefreshTime"] = 0;


$tdatareportgraphmissionfollow[".shortTableName"] = "reportgraphmissionfollow";
$tdatareportgraphmissionfollow[".nSecOptions"] = 0;

$tdatareportgraphmissionfollow[".mainTableOwnerID"] = "";
$tdatareportgraphmissionfollow[".entityType"] = 3;
$tdatareportgraphmissionfollow[".connId"] = "mc_at_192_168_1_111";


$tdatareportgraphmissionfollow[".strOriginalTableName"] = "missionFollow";

	



$tdatareportgraphmissionfollow[".showAddInPopup"] = false;

$tdatareportgraphmissionfollow[".showEditInPopup"] = false;

$tdatareportgraphmissionfollow[".showViewInPopup"] = false;

$tdatareportgraphmissionfollow[".listAjax"] = false;
//	temporary
//$tdatareportgraphmissionfollow[".listAjax"] = false;

	$tdatareportgraphmissionfollow[".audit"] = false;

	$tdatareportgraphmissionfollow[".locking"] = false;


$pages = $tdatareportgraphmissionfollow[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportgraphmissionfollow[".edit"] = true;
	$tdatareportgraphmissionfollow[".afterEditAction"] = 1;
	$tdatareportgraphmissionfollow[".closePopupAfterEdit"] = 1;
	$tdatareportgraphmissionfollow[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportgraphmissionfollow[".add"] = true;
$tdatareportgraphmissionfollow[".afterAddAction"] = 1;
$tdatareportgraphmissionfollow[".closePopupAfterAdd"] = 1;
$tdatareportgraphmissionfollow[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportgraphmissionfollow[".list"] = true;
}



$tdatareportgraphmissionfollow[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportgraphmissionfollow[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportgraphmissionfollow[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportgraphmissionfollow[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportgraphmissionfollow[".printFriendly"] = true;
}



$tdatareportgraphmissionfollow[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportgraphmissionfollow[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportgraphmissionfollow[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportgraphmissionfollow[".isUseAjaxSuggest"] = true;




												

$tdatareportgraphmissionfollow[".ajaxCodeSnippetAdded"] = false;

$tdatareportgraphmissionfollow[".buttonsAdded"] = false;

$tdatareportgraphmissionfollow[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportgraphmissionfollow[".isUseTimeForSearch"] = false;


$tdatareportgraphmissionfollow[".badgeColor"] = "edca00";


$tdatareportgraphmissionfollow[".allSearchFields"] = array();
$tdatareportgraphmissionfollow[".filterFields"] = array();
$tdatareportgraphmissionfollow[".requiredSearchFields"] = array();

$tdatareportgraphmissionfollow[".googleLikeFields"] = array();
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowID";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "id";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus1";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus2";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus3";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus4";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus5";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus6";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus7";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "entryUserName";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowActionStatus";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionFollowName";
$tdatareportgraphmissionfollow[".googleLikeFields"][] = "missionAssignmentResponsibleName";



$tdatareportgraphmissionfollow[".tableType"] = "chart";

$tdatareportgraphmissionfollow[".printerPageOrientation"] = 0;
$tdatareportgraphmissionfollow[".nPrinterPageScale"] = 100;

$tdatareportgraphmissionfollow[".nPrinterSplitRecords"] = 40;

$tdatareportgraphmissionfollow[".geocodingEnabled"] = false;



// chart settings
$tdatareportgraphmissionfollow[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatareportgraphmissionfollow[".strOrderBy"] = $tstrOrderBy;

$tdatareportgraphmissionfollow[".orderindexes"] = array();


$tdatareportgraphmissionfollow[".sqlHead"] = "SELECT missionAssignment.missionFollowID,  missionAssignment.id,  IF(missionFollow.missionFollowActionStatus='เข้ามาใหม่', 1, 0) AS missionFollowActionStatus1,  IF(missionFollow.missionFollowActionStatus='เอกสารพร้อมพิจารณาแล้ว', 1, 0) AS missionFollowActionStatus2,  IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างพิจารณา', 1, 0) AS missionFollowActionStatus3,  IF(missionFollow.missionFollowActionStatus='ผ่านการพิจารณาแล้ว', 1, 0) AS missionFollowActionStatus4,  IF(missionFollow.missionFollowActionStatus='เสร็จสิ้นไปแล้ว', 1, 0) AS missionFollowActionStatus5,  IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างการติดตาม', 1, 0) AS missionFollowActionStatus6,  IF(missionFollow.missionFollowActionStatus='ไม่ผ่านการพิจารณา', 1, 0) AS missionFollowActionStatus7,  missionAssignment.entryUserName,  missionFollow.missionFollowActionStatus,  missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName";
$tdatareportgraphmissionfollow[".sqlFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$tdatareportgraphmissionfollow[".sqlWhereExpr"] = "";
$tdatareportgraphmissionfollow[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportgraphmissionfollow[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportgraphmissionfollow[".arrGroupsPerPage"] = $arrGPP;

$tdatareportgraphmissionfollow[".highlightSearchResults"] = true;

$tableKeysreportgraphmissionfollow = array();
$tableKeysreportgraphmissionfollow[] = "id";
$tdatareportgraphmissionfollow[".Keys"] = $tableKeysreportgraphmissionfollow;


$tdatareportgraphmissionfollow[".hideMobileList"] = array();




//	missionFollowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "missionFollowID";
	$fdata["GoodName"] = "missionFollowID";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionFollowID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowID"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowID";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["id"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "id";
//	missionFollowActionStatus1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "missionFollowActionStatus1";
	$fdata["GoodName"] = "missionFollowActionStatus1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='เข้ามาใหม่', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus1"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus1";
//	missionFollowActionStatus2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "missionFollowActionStatus2";
	$fdata["GoodName"] = "missionFollowActionStatus2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='เอกสารพร้อมพิจารณาแล้ว', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus2"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus2";
//	missionFollowActionStatus3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "missionFollowActionStatus3";
	$fdata["GoodName"] = "missionFollowActionStatus3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus3");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างพิจารณา', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus3"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus3";
//	missionFollowActionStatus4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "missionFollowActionStatus4";
	$fdata["GoodName"] = "missionFollowActionStatus4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus4");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='ผ่านการพิจารณาแล้ว', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus4"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus4";
//	missionFollowActionStatus5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "missionFollowActionStatus5";
	$fdata["GoodName"] = "missionFollowActionStatus5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus5");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='เสร็จสิ้นไปแล้ว', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus5"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus5";
//	missionFollowActionStatus6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "missionFollowActionStatus6";
	$fdata["GoodName"] = "missionFollowActionStatus6";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus6");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างการติดตาม', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus6"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus6";
//	missionFollowActionStatus7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "missionFollowActionStatus7";
	$fdata["GoodName"] = "missionFollowActionStatus7";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus7");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(missionFollow.missionFollowActionStatus='ไม่ผ่านการพิจารณา', 1, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus7"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus7";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.entryUserName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["entryUserName"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "entryUserName";
//	missionFollowActionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "missionFollowActionStatus";
	$fdata["GoodName"] = "missionFollowActionStatus";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowActionStatus";

		$fdata["sourceSingle"] = "missionFollowActionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowActionStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowActionStatus"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowActionStatus";
//	missionFollowName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "missionFollowName";
	$fdata["GoodName"] = "missionFollowName";
	$fdata["ownerTable"] = "missionFollow";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionFollowName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionFollowName";

		$fdata["sourceSingle"] = "missionFollowName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionFollow.missionFollowName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionFollowName"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionFollowName";
//	missionAssignmentResponsibleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "missionAssignmentResponsibleName";
	$fdata["GoodName"] = "missionAssignmentResponsibleName";
	$fdata["ownerTable"] = "missionAssignment";
	$fdata["Label"] = GetFieldLabel("ReportGraphmissionFollow","missionAssignmentResponsibleName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "missionAssignmentResponsibleName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missionAssignment.missionAssignmentResponsibleName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportgraphmissionfollow["missionAssignmentResponsibleName"] = $fdata;
		$tdatareportgraphmissionfollow[".searchableFields"][] = "missionAssignmentResponsibleName";

$tdatareportgraphmissionfollow[".groupChart"] = true;
$tdatareportgraphmissionfollow[".chartLabelInterval"] = 0;
$tdatareportgraphmissionfollow[".chartLabelField"] = "entryUserName";
$tdatareportgraphmissionfollow[".chartSeries"] = array();
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus1",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus2",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus3",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus4",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus5",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus6",
	"total" => "SUM"
);
$tdatareportgraphmissionfollow[".chartSeries"][] = array( 
	"field" => "missionFollowActionStatus7",
	"total" => "SUM"
);
	$tdatareportgraphmissionfollow[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">ReportGraphmissionFollow</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="0">
			<attr value="name">missionFollowActionStatus1</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="1">
			<attr value="name">missionFollowActionStatus2</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="2">
			<attr value="name">missionFollowActionStatus3</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="3">
			<attr value="name">missionFollowActionStatus4</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="4">
			<attr value="name">missionFollowActionStatus5</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="5">
			<attr value="name">missionFollowActionStatus6</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="6">
			<attr value="name">missionFollowActionStatus7</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="7">
		<attr value="name">entryUserName</attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="head">'.xmlencode("รายงานภาระงานตามภารกิจ").'</attr>
<attr value="foot">'.xmlencode("มอบหมายโดย").'</attr>
<attr value="y_axis_label">'.xmlencode("ภาระงาน").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="0">
		<attr value="name">missionFollowID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="1">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="2">
		<attr value="name">missionFollowActionStatus1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="3">
		<attr value="name">missionFollowActionStatus2</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus2")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="4">
		<attr value="name">missionFollowActionStatus3</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus3")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="5">
		<attr value="name">missionFollowActionStatus4</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus4")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="6">
		<attr value="name">missionFollowActionStatus5</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus5")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="7">
		<attr value="name">missionFollowActionStatus6</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus6")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="8">
		<attr value="name">missionFollowActionStatus7</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus7")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="9">
		<attr value="name">entryUserName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","entryUserName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="10">
		<attr value="name">missionFollowActionStatus</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowActionStatus")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="11">
		<attr value="name">missionFollowName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionFollowName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareportgraphmissionfollow[".chartXml"] .= '<attr value="12">
		<attr value="name">missionAssignmentResponsibleName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("ReportGraphmissionFollow","missionAssignmentResponsibleName")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareportgraphmissionfollow[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">ReportGraphmissionFollow</attr>
<attr value="short_table_name">reportgraphmissionfollow</attr>
</attr>

</chart>';

$tables_data["ReportGraphmissionFollow"]=&$tdatareportgraphmissionfollow;
$field_labels["ReportGraphmissionFollow"] = &$fieldLabelsreportgraphmissionfollow;
$fieldToolTips["ReportGraphmissionFollow"] = &$fieldToolTipsreportgraphmissionfollow;
$placeHolders["ReportGraphmissionFollow"] = &$placeHoldersreportgraphmissionfollow;
$page_titles["ReportGraphmissionFollow"] = &$pageTitlesreportgraphmissionfollow;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportGraphmissionFollow"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportGraphmissionFollow"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="missionFollow";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ReportMission";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reportmission";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ReportGraphmissionFollow"][0] = $masterParams;
				$masterTablesData["ReportGraphmissionFollow"][0]["masterKeys"] = array();
	$masterTablesData["ReportGraphmissionFollow"][0]["masterKeys"][]="id";
				$masterTablesData["ReportGraphmissionFollow"][0]["detailKeys"] = array();
	$masterTablesData["ReportGraphmissionFollow"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportgraphmissionfollow()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "missionAssignment.missionFollowID,  missionAssignment.id,  IF(missionFollow.missionFollowActionStatus='เข้ามาใหม่', 1, 0) AS missionFollowActionStatus1,  IF(missionFollow.missionFollowActionStatus='เอกสารพร้อมพิจารณาแล้ว', 1, 0) AS missionFollowActionStatus2,  IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างพิจารณา', 1, 0) AS missionFollowActionStatus3,  IF(missionFollow.missionFollowActionStatus='ผ่านการพิจารณาแล้ว', 1, 0) AS missionFollowActionStatus4,  IF(missionFollow.missionFollowActionStatus='เสร็จสิ้นไปแล้ว', 1, 0) AS missionFollowActionStatus5,  IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างการติดตาม', 1, 0) AS missionFollowActionStatus6,  IF(missionFollow.missionFollowActionStatus='ไม่ผ่านการพิจารณา', 1, 0) AS missionFollowActionStatus7,  missionAssignment.entryUserName,  missionFollow.missionFollowActionStatus,  missionFollow.missionFollowName,  missionAssignment.missionAssignmentResponsibleName";
$proto0["m_strFrom"] = "FROM missionFollow  INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
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
	"m_strName" => "missionFollowID",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto6["m_sql"] = "missionAssignment.missionFollowID";
$proto6["m_srcTableName"] = "ReportGraphmissionFollow";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto8["m_sql"] = "missionAssignment.id";
$proto8["m_srcTableName"] = "ReportGraphmissionFollow";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='เข้ามาใหม่'"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "IF(missionFollow.missionFollowActionStatus='เข้ามาใหม่', 1, 0)";
$proto10["m_srcTableName"] = "ReportGraphmissionFollow";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "missionFollowActionStatus1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='เอกสารพร้อมพิจารณาแล้ว'"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "IF(missionFollow.missionFollowActionStatus='เอกสารพร้อมพิจารณาแล้ว', 1, 0)";
$proto15["m_srcTableName"] = "ReportGraphmissionFollow";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "missionFollowActionStatus2";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='อยู่ระหว่างพิจารณา'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างพิจารณา', 1, 0)";
$proto20["m_srcTableName"] = "ReportGraphmissionFollow";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "missionFollowActionStatus3";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='ผ่านการพิจารณาแล้ว'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "IF(missionFollow.missionFollowActionStatus='ผ่านการพิจารณาแล้ว', 1, 0)";
$proto25["m_srcTableName"] = "ReportGraphmissionFollow";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "missionFollowActionStatus4";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='เสร็จสิ้นไปแล้ว'"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "IF(missionFollow.missionFollowActionStatus='เสร็จสิ้นไปแล้ว', 1, 0)";
$proto30["m_srcTableName"] = "ReportGraphmissionFollow";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "missionFollowActionStatus5";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='อยู่ระหว่างการติดตาม'"
));

$proto36["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto36["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "IF(missionFollow.missionFollowActionStatus='อยู่ระหว่างการติดตาม', 1, 0)";
$proto35["m_srcTableName"] = "ReportGraphmissionFollow";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "missionFollowActionStatus6";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "missionFollow.missionFollowActionStatus='ไม่ผ่านการพิจารณา'"
));

$proto41["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto41["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto41);

$proto40["m_sql"] = "IF(missionFollow.missionFollowActionStatus='ไม่ผ่านการพิจารณา', 1, 0)";
$proto40["m_srcTableName"] = "ReportGraphmissionFollow";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "missionFollowActionStatus7";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto45["m_sql"] = "missionAssignment.entryUserName";
$proto45["m_srcTableName"] = "ReportGraphmissionFollow";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowActionStatus",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto47["m_sql"] = "missionFollow.missionFollowActionStatus";
$proto47["m_srcTableName"] = "ReportGraphmissionFollow";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "missionFollowName",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto49["m_sql"] = "missionFollow.missionFollowName";
$proto49["m_srcTableName"] = "ReportGraphmissionFollow";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "missionAssignmentResponsibleName",
	"m_strTable" => "missionAssignment",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto51["m_sql"] = "missionAssignment.missionAssignmentResponsibleName";
$proto51["m_srcTableName"] = "ReportGraphmissionFollow";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto53=array();
$proto53["m_link"] = "SQLL_MAIN";
			$proto54=array();
$proto54["m_strName"] = "missionFollow";
$proto54["m_srcTableName"] = "ReportGraphmissionFollow";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "id";
$proto54["m_columns"][] = "missionFollowNo";
$proto54["m_columns"][] = "missionFollowName";
$proto54["m_columns"][] = "missionFollowStartDate";
$proto54["m_columns"][] = "missionFollowEndDate";
$proto54["m_columns"][] = "missionFollowDocFile";
$proto54["m_columns"][] = "missionFollowActionStatus";
$proto54["m_columns"][] = "missionFollowStatus";
$proto54["m_columns"][] = "missionFollowHeadName";
$proto54["m_columns"][] = "entryUserName";
$proto54["m_columns"][] = "entryTime";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "missionFollow";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "ReportGraphmissionFollow";
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_INNERJOIN";
			$proto58=array();
$proto58["m_strName"] = "missionAssignment";
$proto58["m_srcTableName"] = "ReportGraphmissionFollow";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "id";
$proto58["m_columns"][] = "missionFollowID";
$proto58["m_columns"][] = "missionAssignmentNo";
$proto58["m_columns"][] = "missionAssignmentName";
$proto58["m_columns"][] = "missionAssignmentFile";
$proto58["m_columns"][] = "missionAssignmentDesc";
$proto58["m_columns"][] = "missionAssignmentConsiderName";
$proto58["m_columns"][] = "missionAssignmentConsiderValue";
$proto58["m_columns"][] = "missionAssignmentResponsibleName";
$proto58["m_columns"][] = "entryUserName";
$proto58["m_columns"][] = "entryTime";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "INNER JOIN missionAssignment ON missionFollow.id = missionAssignment.missionFollowID";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "ReportGraphmissionFollow";
$proto59=array();
$proto59["m_sql"] = "missionFollow.id = missionAssignment.missionFollowID";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "missionFollow",
	"m_srcTableName" => "ReportGraphmissionFollow"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= missionAssignment.missionFollowID";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportGraphmissionFollow";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportgraphmissionfollow = createSqlQuery_reportgraphmissionfollow();


	
				;

													

$tdatareportgraphmissionfollow[".sqlquery"] = $queryData_reportgraphmissionfollow;



include_once(getabspath("include/reportgraphmissionfollow_events.php"));
$tableEvents["ReportGraphmissionFollow"] = new eventclass_reportgraphmissionfollow;
$tdatareportgraphmissionfollow[".hasEvents"] = true;

$query = &$queryData_reportgraphmissionfollow;
$table = "ReportGraphmissionFollow";
// here goes EVENT_INIT_TABLE event
	
		$srchObj = SearchClause::getSearchObject("ReportMission","DashboardMission");

			if (($srchObj->getFieldValue("missionFollowName") == "") AND ($srchObj->getFieldValue("missionAssignmentResponsibleName") <> "")) {

				$SQLCommand = "(`missionFollow`.`missionFollowName` = '".$srchObj->getFieldValue("missionFollowName")."')";
				$query->replaceWhere($SQLCommand);


			}

			elseif (($srchObj->getFieldValue("missionFollowName") <> "") AND ($srchObj->getFieldValue("missionAssignmentResponsibleName") == "")) {

				$SQLCommand = "(`missionAssignment`.`missionAssignmentResponsibleName` = '".$srchObj->getFieldValue("missionAssignmentResponsibleName")."')";
				$query->replaceWhere($SQLCommand);


			}
			elseif (($srchObj->getFieldValue("missionFollowName") <> "") AND ($srchObj->getFieldValue("missionAssignmentResponsibleName") <> "")) {

				$SQLCommand = "(`missionFollow`.`missionFollowName` = '".$srchObj->getFieldValue("missionFollowName")."') AND ";
				$SQLCommand .= "(`missionAssignment`.`missionAssignmentResponsibleName` = '".$srchObj->getFieldValue("missionAssignmentResponsibleName")."')";
				$query->replaceWhere($SQLCommand);


			}
			else{
				
				$query->replaceWhere("");

			}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>