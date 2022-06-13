<?php
$tdatataskrenew = array();
$tdatataskrenew[".searchableFields"] = array();
$tdatataskrenew[".ShortName"] = "taskrenew";
$tdatataskrenew[".OwnerID"] = "";
$tdatataskrenew[".OriginalTable"] = "taskRenew";


$tdatataskrenew[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskrenew[".originalPagesByType"] = $tdatataskrenew[".pagesByType"];
$tdatataskrenew[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskrenew[".originalPages"] = $tdatataskrenew[".pages"];
$tdatataskrenew[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskrenew[".originalDefaultPages"] = $tdatataskrenew[".defaultPages"];

//	field labels
$fieldLabelstaskrenew = array();
$fieldToolTipstaskrenew = array();
$pageTitlestaskrenew = array();
$placeHolderstaskrenew = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskrenew["English"] = array();
	$fieldToolTipstaskrenew["English"] = array();
	$placeHolderstaskrenew["English"] = array();
	$pageTitlestaskrenew["English"] = array();
	$fieldLabelstaskrenew["English"]["id"] = "ID";
	$fieldToolTipstaskrenew["English"]["id"] = "";
	$placeHolderstaskrenew["English"]["id"] = "";
	$fieldLabelstaskrenew["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenew["English"]["projectID"] = "";
	$placeHolderstaskrenew["English"]["projectID"] = "";
	$fieldLabelstaskrenew["English"]["renewDate"] = "Renew Date";
	$fieldToolTipstaskrenew["English"]["renewDate"] = "";
	$placeHolderstaskrenew["English"]["renewDate"] = "";
	$fieldLabelstaskrenew["English"]["renewDesc"] = "Renew Desc";
	$fieldToolTipstaskrenew["English"]["renewDesc"] = "";
	$placeHolderstaskrenew["English"]["renewDesc"] = "";
	$fieldLabelstaskrenew["English"]["renewAttFille"] = "Renew Att Fille";
	$fieldToolTipstaskrenew["English"]["renewAttFille"] = "";
	$placeHolderstaskrenew["English"]["renewAttFille"] = "";
	$fieldLabelstaskrenew["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskrenew["English"]["approveStatus"] = "";
	$placeHolderstaskrenew["English"]["approveStatus"] = "";
	$fieldLabelstaskrenew["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskrenew["English"]["approveDate"] = "";
	$placeHolderstaskrenew["English"]["approveDate"] = "";
	$fieldLabelstaskrenew["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskrenew["English"]["entryUserName"] = "";
	$placeHolderstaskrenew["English"]["entryUserName"] = "";
	$fieldLabelstaskrenew["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskrenew["English"]["entryTime"] = "";
	$placeHolderstaskrenew["English"]["entryTime"] = "";
	$fieldLabelstaskrenew["English"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenew["English"]["opinionDate"] = "";
	$placeHolderstaskrenew["English"]["opinionDate"] = "";
	$fieldLabelstaskrenew["English"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenew["English"]["opinionStatus"] = "";
	$placeHolderstaskrenew["English"]["opinionStatus"] = "";
	$fieldLabelstaskrenew["English"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenew["English"]["opinionReason"] = "";
	$placeHolderstaskrenew["English"]["opinionReason"] = "";
	$fieldLabelstaskrenew["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenew["English"]["approveReason"] = "";
	$placeHolderstaskrenew["English"]["approveReason"] = "";
	$fieldLabelstaskrenew["English"]["checkDate"] = "Check Date";
	$fieldToolTipstaskrenew["English"]["checkDate"] = "";
	$placeHolderstaskrenew["English"]["checkDate"] = "";
	$fieldLabelstaskrenew["English"]["checkStatus"] = "Check Status";
	$fieldToolTipstaskrenew["English"]["checkStatus"] = "";
	$placeHolderstaskrenew["English"]["checkStatus"] = "";
	$fieldLabelstaskrenew["English"]["checkReason"] = "Check Reason";
	$fieldToolTipstaskrenew["English"]["checkReason"] = "";
	$placeHolderstaskrenew["English"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenew["English"]))
		$tdatataskrenew[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskrenew["Thai"] = array();
	$fieldToolTipstaskrenew["Thai"] = array();
	$placeHolderstaskrenew["Thai"] = array();
	$pageTitlestaskrenew["Thai"] = array();
	$fieldLabelstaskrenew["Thai"]["id"] = "ID";
	$fieldToolTipstaskrenew["Thai"]["id"] = "";
	$placeHolderstaskrenew["Thai"]["id"] = "";
	$fieldLabelstaskrenew["Thai"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenew["Thai"]["projectID"] = "";
	$placeHolderstaskrenew["Thai"]["projectID"] = "";
	$fieldLabelstaskrenew["Thai"]["renewDate"] = "วันที่ขอขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["renewDate"] = "";
	$placeHolderstaskrenew["Thai"]["renewDate"] = "";
	$fieldLabelstaskrenew["Thai"]["renewDesc"] = "รายละเอียดขอขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["renewDesc"] = "";
	$placeHolderstaskrenew["Thai"]["renewDesc"] = "";
	$fieldLabelstaskrenew["Thai"]["renewAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskrenew["Thai"]["renewAttFille"] = "";
	$placeHolderstaskrenew["Thai"]["renewAttFille"] = "";
	$fieldLabelstaskrenew["Thai"]["approveStatus"] = "สถานะอนุมัติขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["approveStatus"] = "";
	$placeHolderstaskrenew["Thai"]["approveStatus"] = "";
	$fieldLabelstaskrenew["Thai"]["approveDate"] = "วันที่อนุมัติขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["approveDate"] = "";
	$placeHolderstaskrenew["Thai"]["approveDate"] = "";
	$fieldLabelstaskrenew["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipstaskrenew["Thai"]["entryUserName"] = "";
	$placeHolderstaskrenew["Thai"]["entryUserName"] = "";
	$fieldLabelstaskrenew["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskrenew["Thai"]["entryTime"] = "";
	$placeHolderstaskrenew["Thai"]["entryTime"] = "";
	$fieldLabelstaskrenew["Thai"]["opinionDate"] = "วันที่เห็นชอบขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["opinionDate"] = "";
	$placeHolderstaskrenew["Thai"]["opinionDate"] = "";
	$fieldLabelstaskrenew["Thai"]["opinionStatus"] = "สถานะเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["opinionStatus"] = "";
	$placeHolderstaskrenew["Thai"]["opinionStatus"] = "";
	$fieldLabelstaskrenew["Thai"]["opinionReason"] = "เหตุผลเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["opinionReason"] = "";
	$placeHolderstaskrenew["Thai"]["opinionReason"] = "";
	$fieldLabelstaskrenew["Thai"]["approveReason"] = "เหตุผลอนุมัติขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["approveReason"] = "";
	$placeHolderstaskrenew["Thai"]["approveReason"] = "";
	$fieldLabelstaskrenew["Thai"]["checkDate"] = "วันที่ตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["checkDate"] = "";
	$placeHolderstaskrenew["Thai"]["checkDate"] = "";
	$fieldLabelstaskrenew["Thai"]["checkStatus"] = "สถานะตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["checkStatus"] = "";
	$placeHolderstaskrenew["Thai"]["checkStatus"] = "";
	$fieldLabelstaskrenew["Thai"]["checkReason"] = "เหตุผลตรวจเอกสารขอขยายเวลา";
	$fieldToolTipstaskrenew["Thai"]["checkReason"] = "";
	$placeHolderstaskrenew["Thai"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenew["Thai"]))
		$tdatataskrenew[".isUseToolTips"] = true;
}


	$tdatataskrenew[".NCSearch"] = true;



$tdatataskrenew[".shortTableName"] = "taskrenew";
$tdatataskrenew[".nSecOptions"] = 0;

$tdatataskrenew[".mainTableOwnerID"] = "";
$tdatataskrenew[".entityType"] = 0;
$tdatataskrenew[".connId"] = "mc_at_192_168_1_111";


$tdatataskrenew[".strOriginalTableName"] = "taskRenew";

	



$tdatataskrenew[".showAddInPopup"] = false;

$tdatataskrenew[".showEditInPopup"] = false;

$tdatataskrenew[".showViewInPopup"] = false;

$tdatataskrenew[".listAjax"] = false;
//	temporary
//$tdatataskrenew[".listAjax"] = false;

	$tdatataskrenew[".audit"] = false;

	$tdatataskrenew[".locking"] = false;


$pages = $tdatataskrenew[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskrenew[".edit"] = true;
	$tdatataskrenew[".afterEditAction"] = 1;
	$tdatataskrenew[".closePopupAfterEdit"] = 1;
	$tdatataskrenew[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskrenew[".add"] = true;
$tdatataskrenew[".afterAddAction"] = 1;
$tdatataskrenew[".closePopupAfterAdd"] = 1;
$tdatataskrenew[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskrenew[".list"] = true;
}



$tdatataskrenew[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskrenew[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskrenew[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskrenew[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskrenew[".printFriendly"] = true;
}



$tdatataskrenew[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskrenew[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskrenew[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskrenew[".isUseAjaxSuggest"] = true;

$tdatataskrenew[".rowHighlite"] = true;





$tdatataskrenew[".ajaxCodeSnippetAdded"] = false;

$tdatataskrenew[".buttonsAdded"] = false;

$tdatataskrenew[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskrenew[".isUseTimeForSearch"] = false;


$tdatataskrenew[".badgeColor"] = "e67349";


$tdatataskrenew[".allSearchFields"] = array();
$tdatataskrenew[".filterFields"] = array();
$tdatataskrenew[".requiredSearchFields"] = array();

$tdatataskrenew[".googleLikeFields"] = array();
$tdatataskrenew[".googleLikeFields"][] = "projectID";
$tdatataskrenew[".googleLikeFields"][] = "renewDate";
$tdatataskrenew[".googleLikeFields"][] = "renewDesc";
$tdatataskrenew[".googleLikeFields"][] = "renewAttFille";
$tdatataskrenew[".googleLikeFields"][] = "checkDate";
$tdatataskrenew[".googleLikeFields"][] = "checkStatus";
$tdatataskrenew[".googleLikeFields"][] = "checkReason";
$tdatataskrenew[".googleLikeFields"][] = "opinionDate";
$tdatataskrenew[".googleLikeFields"][] = "opinionStatus";
$tdatataskrenew[".googleLikeFields"][] = "opinionReason";
$tdatataskrenew[".googleLikeFields"][] = "approveDate";
$tdatataskrenew[".googleLikeFields"][] = "approveStatus";
$tdatataskrenew[".googleLikeFields"][] = "approveReason";
$tdatataskrenew[".googleLikeFields"][] = "entryUserName";
$tdatataskrenew[".googleLikeFields"][] = "entryTime";



$tdatataskrenew[".tableType"] = "list";

$tdatataskrenew[".printerPageOrientation"] = 0;
$tdatataskrenew[".nPrinterPageScale"] = 100;

$tdatataskrenew[".nPrinterSplitRecords"] = 40;

$tdatataskrenew[".geocodingEnabled"] = false;










$tdatataskrenew[".pageSize"] = 20;

$tdatataskrenew[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskrenew[".strOrderBy"] = $tstrOrderBy;

$tdatataskrenew[".orderindexes"] = array();


$tdatataskrenew[".sqlHead"] = "SELECT id,  projectID,  renewDate,  renewDesc,  renewAttFille,  checkDate,  checkStatus,  checkReason,  opinionDate,  opinionStatus,  opinionReason,  approveDate,  approveStatus,  approveReason,  entryUserName,  entryTime";
$tdatataskrenew[".sqlFrom"] = "FROM taskRenew";
$tdatataskrenew[".sqlWhereExpr"] = "";
$tdatataskrenew[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskrenew[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskrenew[".arrGroupsPerPage"] = $arrGPP;

$tdatataskrenew[".highlightSearchResults"] = true;

$tableKeystaskrenew = array();
$tableKeystaskrenew[] = "id";
$tdatataskrenew[".Keys"] = $tableKeystaskrenew;


$tdatataskrenew[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","id");
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


	$tdatataskrenew["id"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","projectID");
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


	$tdatataskrenew["projectID"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "projectID";
//	renewDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "renewDate";
	$fdata["GoodName"] = "renewDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","renewDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "renewDate";

		$fdata["sourceSingle"] = "renewDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewDate";

	
	
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


	$tdatataskrenew["renewDate"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "renewDate";
//	renewDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "renewDesc";
	$fdata["GoodName"] = "renewDesc";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","renewDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "renewDesc";

		$fdata["sourceSingle"] = "renewDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewDesc";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatataskrenew["renewDesc"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "renewDesc";
//	renewAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "renewAttFille";
	$fdata["GoodName"] = "renewAttFille";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","renewAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "renewAttFille";

		$fdata["sourceSingle"] = "renewAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewAttFille";

	
	
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


	$tdatataskrenew["renewAttFille"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "renewAttFille";
//	checkDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkDate";
	$fdata["GoodName"] = "checkDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","checkDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "checkDate";

		$fdata["sourceSingle"] = "CheckDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkDate";

	
	
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


	$tdatataskrenew["checkDate"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "checkDate";
//	checkStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "checkStatus";
	$fdata["GoodName"] = "checkStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","checkStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "checkStatus";

		$fdata["sourceSingle"] = "CheckStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkStatus";

	
	
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


	$tdatataskrenew["checkStatus"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "checkStatus";
//	checkReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "checkReason";
	$fdata["GoodName"] = "checkReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","checkReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "checkReason";

		$fdata["sourceSingle"] = "CheckReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkReason";

	
	
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


	$tdatataskrenew["checkReason"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "checkReason";
//	opinionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "opinionDate";
	$fdata["GoodName"] = "opinionDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","opinionDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "opinionDate";

		$fdata["sourceSingle"] = "opinionDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "opinionDate";

	
	
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


	$tdatataskrenew["opinionDate"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "opinionDate";
//	opinionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opinionStatus";
	$fdata["GoodName"] = "opinionStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","opinionStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "opinionStatus";

		$fdata["sourceSingle"] = "opinionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "opinionStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "เห็นชอบ";
	$edata["LookupValues"][] = "ไม่เห็นชอบ";
	$edata["LookupValues"][] = "รอพิจารณา";

	
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


	$tdatataskrenew["opinionStatus"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "opinionStatus";
//	opinionReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opinionReason";
	$fdata["GoodName"] = "opinionReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","opinionReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "opinionReason";

		$fdata["sourceSingle"] = "opinionReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "opinionReason";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatataskrenew["opinionReason"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "opinionReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveDate";

	
	
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


	$tdatataskrenew["approveDate"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "อนุมัติ";
	$edata["LookupValues"][] = "ไม่อนุมัติ";
	$edata["LookupValues"][] = "รออนุมัติ";

	
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


	$tdatataskrenew["approveStatus"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","approveReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveReason";

		$fdata["sourceSingle"] = "approveReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approveReason";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatataskrenew["approveReason"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "approveReason";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","entryUserName");
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


	$tdatataskrenew["entryUserName"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenew","entryTime");
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


	$tdatataskrenew["entryTime"] = $fdata;
		$tdatataskrenew[".searchableFields"][] = "entryTime";


$tables_data["taskRenew"]=&$tdatataskrenew;
$field_labels["taskRenew"] = &$fieldLabelstaskrenew;
$fieldToolTips["taskRenew"] = &$fieldToolTipstaskrenew;
$placeHolders["taskRenew"] = &$placeHolderstaskrenew;
$page_titles["taskRenew"] = &$pageTitlestaskrenew;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskRenew"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskRenew"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskRenew"][0] = $masterParams;
				$masterTablesData["taskRenew"][0]["masterKeys"] = array();
	$masterTablesData["taskRenew"][0]["masterKeys"][]="id";
				$masterTablesData["taskRenew"][0]["detailKeys"] = array();
	$masterTablesData["taskRenew"][0]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusApprove";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusapprove";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskRenew"][1] = $masterParams;
				$masterTablesData["taskRenew"][1]["masterKeys"] = array();
	$masterTablesData["taskRenew"][1]["masterKeys"][]="id";
				$masterTablesData["taskRenew"][1]["detailKeys"] = array();
	$masterTablesData["taskRenew"][1]["detailKeys"][]="projectID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projectStatusScreen";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projectstatusscreen";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["taskRenew"][2] = $masterParams;
				$masterTablesData["taskRenew"][2]["masterKeys"] = array();
	$masterTablesData["taskRenew"][2]["masterKeys"][]="id";
				$masterTablesData["taskRenew"][2]["detailKeys"] = array();
	$masterTablesData["taskRenew"][2]["detailKeys"][]="projectID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskrenew()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  projectID,  renewDate,  renewDesc,  renewAttFille,  checkDate,  checkStatus,  checkReason,  opinionDate,  opinionStatus,  opinionReason,  approveDate,  approveStatus,  approveReason,  entryUserName,  entryTime";
$proto0["m_strFrom"] = "FROM taskRenew";
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
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "taskRenew";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto8["m_sql"] = "projectID";
$proto8["m_srcTableName"] = "taskRenew";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto10["m_sql"] = "renewDate";
$proto10["m_srcTableName"] = "taskRenew";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDesc",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto12["m_sql"] = "renewDesc";
$proto12["m_srcTableName"] = "taskRenew";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "renewAttFille",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto14["m_sql"] = "renewAttFille";
$proto14["m_srcTableName"] = "taskRenew";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "checkDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto16["m_sql"] = "checkDate";
$proto16["m_srcTableName"] = "taskRenew";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "checkStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto18["m_sql"] = "checkStatus";
$proto18["m_srcTableName"] = "taskRenew";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "checkReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto20["m_sql"] = "checkReason";
$proto20["m_srcTableName"] = "taskRenew";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto22["m_sql"] = "opinionDate";
$proto22["m_srcTableName"] = "taskRenew";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto24["m_sql"] = "opinionStatus";
$proto24["m_srcTableName"] = "taskRenew";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto26["m_sql"] = "opinionReason";
$proto26["m_srcTableName"] = "taskRenew";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto28["m_sql"] = "approveDate";
$proto28["m_srcTableName"] = "taskRenew";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto30["m_sql"] = "approveStatus";
$proto30["m_srcTableName"] = "taskRenew";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto32["m_sql"] = "approveReason";
$proto32["m_srcTableName"] = "taskRenew";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto34["m_sql"] = "entryUserName";
$proto34["m_srcTableName"] = "taskRenew";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenew"
));

$proto36["m_sql"] = "entryTime";
$proto36["m_srcTableName"] = "taskRenew";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "taskRenew";
$proto39["m_srcTableName"] = "taskRenew";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "projectID";
$proto39["m_columns"][] = "renewDate";
$proto39["m_columns"][] = "renewDesc";
$proto39["m_columns"][] = "renewAttFille";
$proto39["m_columns"][] = "checkDate";
$proto39["m_columns"][] = "checkStatus";
$proto39["m_columns"][] = "checkReason";
$proto39["m_columns"][] = "opinionDate";
$proto39["m_columns"][] = "opinionStatus";
$proto39["m_columns"][] = "opinionReason";
$proto39["m_columns"][] = "approveDate";
$proto39["m_columns"][] = "approveStatus";
$proto39["m_columns"][] = "approveReason";
$proto39["m_columns"][] = "entryUserName";
$proto39["m_columns"][] = "entryTime";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "taskRenew";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "taskRenew";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskRenew";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskrenew = createSqlQuery_taskrenew();


	
				;

																

$tdatataskrenew[".sqlquery"] = $queryData_taskrenew;



include_once(getabspath("include/taskrenew_events.php"));
$tableEvents["taskRenew"] = new eventclass_taskrenew;
$tdatataskrenew[".hasEvents"] = true;

?>