<?php
$tdatataskrenewstatusreject = array();
$tdatataskrenewstatusreject[".searchableFields"] = array();
$tdatataskrenewstatusreject[".ShortName"] = "taskrenewstatusreject";
$tdatataskrenewstatusreject[".OwnerID"] = "";
$tdatataskrenewstatusreject[".OriginalTable"] = "taskRenew";


$tdatataskrenewstatusreject[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskrenewstatusreject[".originalPagesByType"] = $tdatataskrenewstatusreject[".pagesByType"];
$tdatataskrenewstatusreject[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskrenewstatusreject[".originalPages"] = $tdatataskrenewstatusreject[".pages"];
$tdatataskrenewstatusreject[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskrenewstatusreject[".originalDefaultPages"] = $tdatataskrenewstatusreject[".defaultPages"];

//	field labels
$fieldLabelstaskrenewstatusreject = array();
$fieldToolTipstaskrenewstatusreject = array();
$pageTitlestaskrenewstatusreject = array();
$placeHolderstaskrenewstatusreject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskrenewstatusreject["English"] = array();
	$fieldToolTipstaskrenewstatusreject["English"] = array();
	$placeHolderstaskrenewstatusreject["English"] = array();
	$pageTitlestaskrenewstatusreject["English"] = array();
	$fieldLabelstaskrenewstatusreject["English"]["id"] = "Id";
	$fieldToolTipstaskrenewstatusreject["English"]["id"] = "";
	$placeHolderstaskrenewstatusreject["English"]["id"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenewstatusreject["English"]["projectID"] = "";
	$placeHolderstaskrenewstatusreject["English"]["projectID"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["renewDate"] = "Renew Date";
	$fieldToolTipstaskrenewstatusreject["English"]["renewDate"] = "";
	$placeHolderstaskrenewstatusreject["English"]["renewDate"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["renewDesc"] = "Renew Desc";
	$fieldToolTipstaskrenewstatusreject["English"]["renewDesc"] = "";
	$placeHolderstaskrenewstatusreject["English"]["renewDesc"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["renewAttFille"] = "Renew Att Fille";
	$fieldToolTipstaskrenewstatusreject["English"]["renewAttFille"] = "";
	$placeHolderstaskrenewstatusreject["English"]["renewAttFille"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskrenewstatusreject["English"]["approveStatus"] = "";
	$placeHolderstaskrenewstatusreject["English"]["approveStatus"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskrenewstatusreject["English"]["approveDate"] = "";
	$placeHolderstaskrenewstatusreject["English"]["approveDate"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskrenewstatusreject["English"]["entryUserName"] = "";
	$placeHolderstaskrenewstatusreject["English"]["entryUserName"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskrenewstatusreject["English"]["entryTime"] = "";
	$placeHolderstaskrenewstatusreject["English"]["entryTime"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewstatusreject["English"]["opinionDate"] = "";
	$placeHolderstaskrenewstatusreject["English"]["opinionDate"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewstatusreject["English"]["opinionStatus"] = "";
	$placeHolderstaskrenewstatusreject["English"]["opinionStatus"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewstatusreject["English"]["opinionReason"] = "";
	$placeHolderstaskrenewstatusreject["English"]["opinionReason"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewstatusreject["English"]["approveReason"] = "";
	$placeHolderstaskrenewstatusreject["English"]["approveReason"] = "";
	$fieldLabelstaskrenewstatusreject["English"]["entryUserName1"] = "Entry User Name1";
	$fieldToolTipstaskrenewstatusreject["English"]["entryUserName1"] = "";
	$placeHolderstaskrenewstatusreject["English"]["entryUserName1"] = "";
	if (count($fieldToolTipstaskrenewstatusreject["English"]))
		$tdatataskrenewstatusreject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskrenewstatusreject["Thai"] = array();
	$fieldToolTipstaskrenewstatusreject["Thai"] = array();
	$placeHolderstaskrenewstatusreject["Thai"] = array();
	$pageTitlestaskrenewstatusreject["Thai"] = array();
	$fieldLabelstaskrenewstatusreject["Thai"]["id"] = "Id";
	$fieldToolTipstaskrenewstatusreject["Thai"]["id"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["id"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["projectID"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["projectID"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["renewDate"] = "วันที่ขยายระยะเวลาโครงการโครงการ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["renewDate"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["renewDate"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["renewDesc"] = "รายละเอียดขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["renewDesc"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["renewDesc"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["renewAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["renewAttFille"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["renewAttFille"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewstatusreject["Thai"]["approveStatus"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["approveStatus"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewstatusreject["Thai"]["approveDate"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["approveDate"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["entryUserName"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["entryUserName"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskrenewstatusreject["Thai"]["entryTime"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["entryTime"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewstatusreject["Thai"]["opinionDate"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["opinionDate"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewstatusreject["Thai"]["opinionStatus"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["opinionStatus"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewstatusreject["Thai"]["opinionReason"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["opinionReason"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewstatusreject["Thai"]["approveReason"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["approveReason"] = "";
	$fieldLabelstaskrenewstatusreject["Thai"]["entryUserName1"] = "Entry User Name1";
	$fieldToolTipstaskrenewstatusreject["Thai"]["entryUserName1"] = "";
	$placeHolderstaskrenewstatusreject["Thai"]["entryUserName1"] = "";
	if (count($fieldToolTipstaskrenewstatusreject["Thai"]))
		$tdatataskrenewstatusreject[".isUseToolTips"] = true;
}


	$tdatataskrenewstatusreject[".NCSearch"] = true;



$tdatataskrenewstatusreject[".shortTableName"] = "taskrenewstatusreject";
$tdatataskrenewstatusreject[".nSecOptions"] = 0;

$tdatataskrenewstatusreject[".mainTableOwnerID"] = "";
$tdatataskrenewstatusreject[".entityType"] = 1;
$tdatataskrenewstatusreject[".connId"] = "mc_at_192_168_1_111";


$tdatataskrenewstatusreject[".strOriginalTableName"] = "taskRenew";

	



$tdatataskrenewstatusreject[".showAddInPopup"] = false;

$tdatataskrenewstatusreject[".showEditInPopup"] = false;

$tdatataskrenewstatusreject[".showViewInPopup"] = false;

$tdatataskrenewstatusreject[".listAjax"] = false;
//	temporary
//$tdatataskrenewstatusreject[".listAjax"] = false;

	$tdatataskrenewstatusreject[".audit"] = false;

	$tdatataskrenewstatusreject[".locking"] = false;


$pages = $tdatataskrenewstatusreject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskrenewstatusreject[".edit"] = true;
	$tdatataskrenewstatusreject[".afterEditAction"] = 1;
	$tdatataskrenewstatusreject[".closePopupAfterEdit"] = 1;
	$tdatataskrenewstatusreject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskrenewstatusreject[".add"] = true;
$tdatataskrenewstatusreject[".afterAddAction"] = 1;
$tdatataskrenewstatusreject[".closePopupAfterAdd"] = 1;
$tdatataskrenewstatusreject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskrenewstatusreject[".list"] = true;
}



$tdatataskrenewstatusreject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskrenewstatusreject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskrenewstatusreject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskrenewstatusreject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskrenewstatusreject[".printFriendly"] = true;
}



$tdatataskrenewstatusreject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskrenewstatusreject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskrenewstatusreject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskrenewstatusreject[".isUseAjaxSuggest"] = true;

$tdatataskrenewstatusreject[".rowHighlite"] = true;





$tdatataskrenewstatusreject[".ajaxCodeSnippetAdded"] = false;

$tdatataskrenewstatusreject[".buttonsAdded"] = false;

$tdatataskrenewstatusreject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskrenewstatusreject[".isUseTimeForSearch"] = false;


$tdatataskrenewstatusreject[".badgeColor"] = "6B8E23";


$tdatataskrenewstatusreject[".allSearchFields"] = array();
$tdatataskrenewstatusreject[".filterFields"] = array();
$tdatataskrenewstatusreject[".requiredSearchFields"] = array();

$tdatataskrenewstatusreject[".googleLikeFields"] = array();
$tdatataskrenewstatusreject[".googleLikeFields"][] = "projectID";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "renewDate";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "renewDesc";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "renewAttFille";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "approveStatus";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "approveDate";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "entryUserName";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "entryTime";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "opinionDate";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "opinionStatus";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "opinionReason";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "approveReason";
$tdatataskrenewstatusreject[".googleLikeFields"][] = "entryUserName1";



$tdatataskrenewstatusreject[".tableType"] = "list";

$tdatataskrenewstatusreject[".printerPageOrientation"] = 0;
$tdatataskrenewstatusreject[".nPrinterPageScale"] = 100;

$tdatataskrenewstatusreject[".nPrinterSplitRecords"] = 40;

$tdatataskrenewstatusreject[".geocodingEnabled"] = false;










$tdatataskrenewstatusreject[".pageSize"] = 20;

$tdatataskrenewstatusreject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskrenewstatusreject[".strOrderBy"] = $tstrOrderBy;

$tdatataskrenewstatusreject[".orderindexes"] = array();


$tdatataskrenewstatusreject[".sqlHead"] = "SELECT taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  taskRenew.approveStatus,  taskRenew.approveDate,  project.entryUserName,  taskRenew.entryTime,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveReason,  taskRenew.entryUserName AS entryUserName1";
$tdatataskrenewstatusreject[".sqlFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$tdatataskrenewstatusreject[".sqlWhereExpr"] = "(taskRenew.approveStatus = 0)";
$tdatataskrenewstatusreject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskrenewstatusreject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskrenewstatusreject[".arrGroupsPerPage"] = $arrGPP;

$tdatataskrenewstatusreject[".highlightSearchResults"] = true;

$tableKeystaskrenewstatusreject = array();
$tableKeystaskrenewstatusreject[] = "id";
$tdatataskrenewstatusreject[".Keys"] = $tableKeystaskrenewstatusreject;


$tdatataskrenewstatusreject[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.id";

	
	
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


	$tdatataskrenewstatusreject["id"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","projectID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projectID";

		$fdata["sourceSingle"] = "projectID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.projectID";

	
	
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
	$edata["LookupTable"] = "project";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "projectName";

	

	
	$edata["LookupOrderBy"] = "projectName";

	
	
	
	

	
	
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


	$tdatataskrenewstatusreject["projectID"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "projectID";
//	renewDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "renewDate";
	$fdata["GoodName"] = "renewDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","renewDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "renewDate";

		$fdata["sourceSingle"] = "renewDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.renewDate";

	
	
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


	$tdatataskrenewstatusreject["renewDate"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "renewDate";
//	renewDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "renewDesc";
	$fdata["GoodName"] = "renewDesc";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","renewDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "renewDesc";

		$fdata["sourceSingle"] = "renewDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.renewDesc";

	
	
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


	$tdatataskrenewstatusreject["renewDesc"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "renewDesc";
//	renewAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "renewAttFille";
	$fdata["GoodName"] = "renewAttFille";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","renewAttFille");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "renewAttFille";

		$fdata["sourceSingle"] = "renewAttFille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.renewAttFille";

	
	
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


	$tdatataskrenewstatusreject["renewAttFille"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "renewAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.approveStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatataskrenewstatusreject["approveStatus"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","approveDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "approveDate";

		$fdata["sourceSingle"] = "approveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.approveDate";

	
	
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


	$tdatataskrenewstatusreject["approveDate"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project.entryUserName";

	
	
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


	$tdatataskrenewstatusreject["entryUserName"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.entryTime";

	
	
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


	$tdatataskrenewstatusreject["entryTime"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "entryTime";
//	opinionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opinionDate";
	$fdata["GoodName"] = "opinionDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","opinionDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "opinionDate";

		$fdata["sourceSingle"] = "opinionDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.opinionDate";

	
	
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


	$tdatataskrenewstatusreject["opinionDate"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "opinionDate";
//	opinionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opinionStatus";
	$fdata["GoodName"] = "opinionStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","opinionStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "opinionStatus";

		$fdata["sourceSingle"] = "opinionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.opinionStatus";

	
	
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


	$tdatataskrenewstatusreject["opinionStatus"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "opinionStatus";
//	opinionReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opinionReason";
	$fdata["GoodName"] = "opinionReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","opinionReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "opinionReason";

		$fdata["sourceSingle"] = "opinionReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.opinionReason";

	
	
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


	$tdatataskrenewstatusreject["opinionReason"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "opinionReason";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","approveReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveReason";

		$fdata["sourceSingle"] = "approveReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.approveReason";

	
	
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


	$tdatataskrenewstatusreject["approveReason"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "approveReason";
//	entryUserName1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName1";
	$fdata["GoodName"] = "entryUserName1";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusReject","entryUserName1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.entryUserName";

	
	
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


	$tdatataskrenewstatusreject["entryUserName1"] = $fdata;
		$tdatataskrenewstatusreject[".searchableFields"][] = "entryUserName1";


$tables_data["taskRenewStatusReject"]=&$tdatataskrenewstatusreject;
$field_labels["taskRenewStatusReject"] = &$fieldLabelstaskrenewstatusreject;
$fieldToolTips["taskRenewStatusReject"] = &$fieldToolTipstaskrenewstatusreject;
$placeHolders["taskRenewStatusReject"] = &$placeHolderstaskrenewstatusreject;
$page_titles["taskRenewStatusReject"] = &$pageTitlestaskrenewstatusreject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskRenewStatusReject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskRenewStatusReject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskrenewstatusreject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  taskRenew.approveStatus,  taskRenew.approveDate,  project.entryUserName,  taskRenew.entryTime,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveReason,  taskRenew.entryUserName AS entryUserName1";
$proto0["m_strFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$proto0["m_strWhere"] = "(taskRenew.approveStatus = 0)";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "taskRenew.approveStatus = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 0";
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
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto6["m_sql"] = "taskRenew.id";
$proto6["m_srcTableName"] = "taskRenewStatusReject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto8["m_sql"] = "taskRenew.projectID";
$proto8["m_srcTableName"] = "taskRenewStatusReject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto10["m_sql"] = "taskRenew.renewDate";
$proto10["m_srcTableName"] = "taskRenewStatusReject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDesc",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto12["m_sql"] = "taskRenew.renewDesc";
$proto12["m_srcTableName"] = "taskRenewStatusReject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "renewAttFille",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto14["m_sql"] = "taskRenew.renewAttFille";
$proto14["m_srcTableName"] = "taskRenewStatusReject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto16["m_sql"] = "taskRenew.approveStatus";
$proto16["m_srcTableName"] = "taskRenewStatusReject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto18["m_sql"] = "taskRenew.approveDate";
$proto18["m_srcTableName"] = "taskRenewStatusReject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto20["m_sql"] = "project.entryUserName";
$proto20["m_srcTableName"] = "taskRenewStatusReject";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto22["m_sql"] = "taskRenew.entryTime";
$proto22["m_srcTableName"] = "taskRenewStatusReject";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto24["m_sql"] = "taskRenew.opinionDate";
$proto24["m_srcTableName"] = "taskRenewStatusReject";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto26["m_sql"] = "taskRenew.opinionStatus";
$proto26["m_srcTableName"] = "taskRenewStatusReject";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto28["m_sql"] = "taskRenew.opinionReason";
$proto28["m_srcTableName"] = "taskRenewStatusReject";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto30["m_sql"] = "taskRenew.approveReason";
$proto30["m_srcTableName"] = "taskRenewStatusReject";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto32["m_sql"] = "taskRenew.entryUserName";
$proto32["m_srcTableName"] = "taskRenewStatusReject";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "entryUserName1";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "taskRenew";
$proto35["m_srcTableName"] = "taskRenewStatusReject";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "projectID";
$proto35["m_columns"][] = "renewDate";
$proto35["m_columns"][] = "renewDesc";
$proto35["m_columns"][] = "renewAttFille";
$proto35["m_columns"][] = "approveDate";
$proto35["m_columns"][] = "opinionDate";
$proto35["m_columns"][] = "opinionStatus";
$proto35["m_columns"][] = "opinionReason";
$proto35["m_columns"][] = "approveStatus";
$proto35["m_columns"][] = "approveReason";
$proto35["m_columns"][] = "entryUserName";
$proto35["m_columns"][] = "entryTime";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "taskRenew";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "taskRenewStatusReject";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_LEFTJOIN";
			$proto39=array();
$proto39["m_strName"] = "project";
$proto39["m_srcTableName"] = "taskRenewStatusReject";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "projectName";
$proto39["m_columns"][] = "projectStart";
$proto39["m_columns"][] = "projectEnd";
$proto39["m_columns"][] = "ProjectTypeName";
$proto39["m_columns"][] = "companyName";
$proto39["m_columns"][] = "projectBudgetCost";
$proto39["m_columns"][] = "projectFile";
$proto39["m_columns"][] = "DocumentCheckDate";
$proto39["m_columns"][] = "DocumentCheckStatus";
$proto39["m_columns"][] = "DocumentCheckReason";
$proto39["m_columns"][] = "screenDate";
$proto39["m_columns"][] = "screenStatus";
$proto39["m_columns"][] = "screenReason";
$proto39["m_columns"][] = "approveDate";
$proto39["m_columns"][] = "approveStatus";
$proto39["m_columns"][] = "approveReason";
$proto39["m_columns"][] = "entryUserName";
$proto39["m_columns"][] = "entryTime";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "taskRenewStatusReject";
$proto40=array();
$proto40["m_sql"] = "taskRenew.projectID = project.id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= project.id";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusReject"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskRenewStatusReject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskrenewstatusreject = createSqlQuery_taskrenewstatusreject();


	
				;

														

$tdatataskrenewstatusreject[".sqlquery"] = $queryData_taskrenewstatusreject;



include_once(getabspath("include/taskrenewstatusreject_events.php"));
$tableEvents["taskRenewStatusReject"] = new eventclass_taskrenewstatusreject;
$tdatataskrenewstatusreject[".hasEvents"] = true;

$query = &$queryData_taskrenewstatusreject;
$table = "taskRenewStatusReject";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>