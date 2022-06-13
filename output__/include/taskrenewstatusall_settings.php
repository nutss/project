<?php
$tdatataskrenewstatusall = array();
$tdatataskrenewstatusall[".searchableFields"] = array();
$tdatataskrenewstatusall[".ShortName"] = "taskrenewstatusall";
$tdatataskrenewstatusall[".OwnerID"] = "";
$tdatataskrenewstatusall[".OriginalTable"] = "taskRenew";


$tdatataskrenewstatusall[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskrenewstatusall[".originalPagesByType"] = $tdatataskrenewstatusall[".pagesByType"];
$tdatataskrenewstatusall[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskrenewstatusall[".originalPages"] = $tdatataskrenewstatusall[".pages"];
$tdatataskrenewstatusall[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskrenewstatusall[".originalDefaultPages"] = $tdatataskrenewstatusall[".defaultPages"];

//	field labels
$fieldLabelstaskrenewstatusall = array();
$fieldToolTipstaskrenewstatusall = array();
$pageTitlestaskrenewstatusall = array();
$placeHolderstaskrenewstatusall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskrenewstatusall["English"] = array();
	$fieldToolTipstaskrenewstatusall["English"] = array();
	$placeHolderstaskrenewstatusall["English"] = array();
	$pageTitlestaskrenewstatusall["English"] = array();
	$fieldLabelstaskrenewstatusall["English"]["id"] = "ID";
	$fieldToolTipstaskrenewstatusall["English"]["id"] = "";
	$placeHolderstaskrenewstatusall["English"]["id"] = "";
	$fieldLabelstaskrenewstatusall["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenewstatusall["English"]["projectID"] = "";
	$placeHolderstaskrenewstatusall["English"]["projectID"] = "";
	$fieldLabelstaskrenewstatusall["English"]["renewDate"] = "Renew Date";
	$fieldToolTipstaskrenewstatusall["English"]["renewDate"] = "";
	$placeHolderstaskrenewstatusall["English"]["renewDate"] = "";
	$fieldLabelstaskrenewstatusall["English"]["renewDesc"] = "Renew Desc";
	$fieldToolTipstaskrenewstatusall["English"]["renewDesc"] = "";
	$placeHolderstaskrenewstatusall["English"]["renewDesc"] = "";
	$fieldLabelstaskrenewstatusall["English"]["renewAttFille"] = "Renew Att Fille";
	$fieldToolTipstaskrenewstatusall["English"]["renewAttFille"] = "";
	$placeHolderstaskrenewstatusall["English"]["renewAttFille"] = "";
	$fieldLabelstaskrenewstatusall["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskrenewstatusall["English"]["approveStatus"] = "";
	$placeHolderstaskrenewstatusall["English"]["approveStatus"] = "";
	$fieldLabelstaskrenewstatusall["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskrenewstatusall["English"]["approveDate"] = "";
	$placeHolderstaskrenewstatusall["English"]["approveDate"] = "";
	$fieldLabelstaskrenewstatusall["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskrenewstatusall["English"]["entryUserName"] = "";
	$placeHolderstaskrenewstatusall["English"]["entryUserName"] = "";
	$fieldLabelstaskrenewstatusall["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskrenewstatusall["English"]["entryTime"] = "";
	$placeHolderstaskrenewstatusall["English"]["entryTime"] = "";
	$fieldLabelstaskrenewstatusall["English"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewstatusall["English"]["opinionDate"] = "";
	$placeHolderstaskrenewstatusall["English"]["opinionDate"] = "";
	$fieldLabelstaskrenewstatusall["English"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewstatusall["English"]["opinionStatus"] = "";
	$placeHolderstaskrenewstatusall["English"]["opinionStatus"] = "";
	$fieldLabelstaskrenewstatusall["English"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewstatusall["English"]["opinionReason"] = "";
	$placeHolderstaskrenewstatusall["English"]["opinionReason"] = "";
	$fieldLabelstaskrenewstatusall["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewstatusall["English"]["approveReason"] = "";
	$placeHolderstaskrenewstatusall["English"]["approveReason"] = "";
	$fieldLabelstaskrenewstatusall["English"]["entryUserName1"] = "Entry User Name1";
	$fieldToolTipstaskrenewstatusall["English"]["entryUserName1"] = "";
	$placeHolderstaskrenewstatusall["English"]["entryUserName1"] = "";
	if (count($fieldToolTipstaskrenewstatusall["English"]))
		$tdatataskrenewstatusall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskrenewstatusall["Thai"] = array();
	$fieldToolTipstaskrenewstatusall["Thai"] = array();
	$placeHolderstaskrenewstatusall["Thai"] = array();
	$pageTitlestaskrenewstatusall["Thai"] = array();
	$fieldLabelstaskrenewstatusall["Thai"]["id"] = "ID";
	$fieldToolTipstaskrenewstatusall["Thai"]["id"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["id"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskrenewstatusall["Thai"]["projectID"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["projectID"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["renewDate"] = "วันที่ขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewstatusall["Thai"]["renewDate"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["renewDate"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["renewDesc"] = "รายละเอียดขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewstatusall["Thai"]["renewDesc"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["renewDesc"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["renewAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskrenewstatusall["Thai"]["renewAttFille"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["renewAttFille"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["approveStatus"] = "สถานะการอนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewstatusall["Thai"]["approveStatus"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["approveStatus"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewstatusall["Thai"]["approveDate"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["approveDate"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskrenewstatusall["Thai"]["entryUserName"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["entryUserName"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskrenewstatusall["Thai"]["entryTime"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["entryTime"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewstatusall["Thai"]["opinionDate"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["opinionDate"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewstatusall["Thai"]["opinionStatus"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["opinionStatus"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewstatusall["Thai"]["opinionReason"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["opinionReason"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewstatusall["Thai"]["approveReason"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["approveReason"] = "";
	$fieldLabelstaskrenewstatusall["Thai"]["entryUserName1"] = "Entry User Name1";
	$fieldToolTipstaskrenewstatusall["Thai"]["entryUserName1"] = "";
	$placeHolderstaskrenewstatusall["Thai"]["entryUserName1"] = "";
	if (count($fieldToolTipstaskrenewstatusall["Thai"]))
		$tdatataskrenewstatusall[".isUseToolTips"] = true;
}


	$tdatataskrenewstatusall[".NCSearch"] = true;



$tdatataskrenewstatusall[".shortTableName"] = "taskrenewstatusall";
$tdatataskrenewstatusall[".nSecOptions"] = 0;

$tdatataskrenewstatusall[".mainTableOwnerID"] = "";
$tdatataskrenewstatusall[".entityType"] = 1;
$tdatataskrenewstatusall[".connId"] = "mc_at_192_168_1_111";


$tdatataskrenewstatusall[".strOriginalTableName"] = "taskRenew";

	



$tdatataskrenewstatusall[".showAddInPopup"] = false;

$tdatataskrenewstatusall[".showEditInPopup"] = false;

$tdatataskrenewstatusall[".showViewInPopup"] = false;

$tdatataskrenewstatusall[".listAjax"] = false;
//	temporary
//$tdatataskrenewstatusall[".listAjax"] = false;

	$tdatataskrenewstatusall[".audit"] = false;

	$tdatataskrenewstatusall[".locking"] = false;


$pages = $tdatataskrenewstatusall[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskrenewstatusall[".edit"] = true;
	$tdatataskrenewstatusall[".afterEditAction"] = 1;
	$tdatataskrenewstatusall[".closePopupAfterEdit"] = 1;
	$tdatataskrenewstatusall[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskrenewstatusall[".add"] = true;
$tdatataskrenewstatusall[".afterAddAction"] = 1;
$tdatataskrenewstatusall[".closePopupAfterAdd"] = 1;
$tdatataskrenewstatusall[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskrenewstatusall[".list"] = true;
}



$tdatataskrenewstatusall[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskrenewstatusall[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskrenewstatusall[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskrenewstatusall[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskrenewstatusall[".printFriendly"] = true;
}



$tdatataskrenewstatusall[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskrenewstatusall[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskrenewstatusall[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskrenewstatusall[".isUseAjaxSuggest"] = true;

$tdatataskrenewstatusall[".rowHighlite"] = true;





$tdatataskrenewstatusall[".ajaxCodeSnippetAdded"] = false;

$tdatataskrenewstatusall[".buttonsAdded"] = false;

$tdatataskrenewstatusall[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskrenewstatusall[".isUseTimeForSearch"] = false;


$tdatataskrenewstatusall[".badgeColor"] = "00C2C5";


$tdatataskrenewstatusall[".allSearchFields"] = array();
$tdatataskrenewstatusall[".filterFields"] = array();
$tdatataskrenewstatusall[".requiredSearchFields"] = array();

$tdatataskrenewstatusall[".googleLikeFields"] = array();
$tdatataskrenewstatusall[".googleLikeFields"][] = "projectID";
$tdatataskrenewstatusall[".googleLikeFields"][] = "renewDate";
$tdatataskrenewstatusall[".googleLikeFields"][] = "renewDesc";
$tdatataskrenewstatusall[".googleLikeFields"][] = "renewAttFille";
$tdatataskrenewstatusall[".googleLikeFields"][] = "approveStatus";
$tdatataskrenewstatusall[".googleLikeFields"][] = "approveDate";
$tdatataskrenewstatusall[".googleLikeFields"][] = "entryUserName";
$tdatataskrenewstatusall[".googleLikeFields"][] = "entryTime";
$tdatataskrenewstatusall[".googleLikeFields"][] = "opinionDate";
$tdatataskrenewstatusall[".googleLikeFields"][] = "opinionStatus";
$tdatataskrenewstatusall[".googleLikeFields"][] = "opinionReason";
$tdatataskrenewstatusall[".googleLikeFields"][] = "approveReason";
$tdatataskrenewstatusall[".googleLikeFields"][] = "entryUserName1";



$tdatataskrenewstatusall[".tableType"] = "list";

$tdatataskrenewstatusall[".printerPageOrientation"] = 0;
$tdatataskrenewstatusall[".nPrinterPageScale"] = 100;

$tdatataskrenewstatusall[".nPrinterSplitRecords"] = 40;

$tdatataskrenewstatusall[".geocodingEnabled"] = false;










$tdatataskrenewstatusall[".pageSize"] = 20;

$tdatataskrenewstatusall[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskrenewstatusall[".strOrderBy"] = $tstrOrderBy;

$tdatataskrenewstatusall[".orderindexes"] = array();


$tdatataskrenewstatusall[".sqlHead"] = "SELECT taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  taskRenew.approveStatus,  taskRenew.approveDate,  project.entryUserName,  taskRenew.entryTime,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveReason,  taskRenew.entryUserName AS entryUserName1";
$tdatataskrenewstatusall[".sqlFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$tdatataskrenewstatusall[".sqlWhereExpr"] = "";
$tdatataskrenewstatusall[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskrenewstatusall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskrenewstatusall[".arrGroupsPerPage"] = $arrGPP;

$tdatataskrenewstatusall[".highlightSearchResults"] = true;

$tableKeystaskrenewstatusall = array();
$tableKeystaskrenewstatusall[] = "id";
$tdatataskrenewstatusall[".Keys"] = $tableKeystaskrenewstatusall;


$tdatataskrenewstatusall[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","id");
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


	$tdatataskrenewstatusall["id"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","projectID");
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


	$tdatataskrenewstatusall["projectID"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "projectID";
//	renewDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "renewDate";
	$fdata["GoodName"] = "renewDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","renewDate");
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


	$tdatataskrenewstatusall["renewDate"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "renewDate";
//	renewDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "renewDesc";
	$fdata["GoodName"] = "renewDesc";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","renewDesc");
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


	$tdatataskrenewstatusall["renewDesc"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "renewDesc";
//	renewAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "renewAttFille";
	$fdata["GoodName"] = "renewAttFille";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","renewAttFille");
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


	$tdatataskrenewstatusall["renewAttFille"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "renewAttFille";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","approveStatus");
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


	$tdatataskrenewstatusall["approveStatus"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "approveStatus";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","approveDate");
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


	$tdatataskrenewstatusall["approveDate"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "approveDate";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","entryUserName");
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


	$tdatataskrenewstatusall["entryUserName"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","entryTime");
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


	$tdatataskrenewstatusall["entryTime"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "entryTime";
//	opinionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opinionDate";
	$fdata["GoodName"] = "opinionDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","opinionDate");
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


	$tdatataskrenewstatusall["opinionDate"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "opinionDate";
//	opinionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opinionStatus";
	$fdata["GoodName"] = "opinionStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","opinionStatus");
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


	$tdatataskrenewstatusall["opinionStatus"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "opinionStatus";
//	opinionReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opinionReason";
	$fdata["GoodName"] = "opinionReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","opinionReason");
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


	$tdatataskrenewstatusall["opinionReason"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "opinionReason";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","approveReason");
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


	$tdatataskrenewstatusall["approveReason"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "approveReason";
//	entryUserName1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "entryUserName1";
	$fdata["GoodName"] = "entryUserName1";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewStatusAll","entryUserName1");
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


	$tdatataskrenewstatusall["entryUserName1"] = $fdata;
		$tdatataskrenewstatusall[".searchableFields"][] = "entryUserName1";


$tables_data["taskRenewStatusAll"]=&$tdatataskrenewstatusall;
$field_labels["taskRenewStatusAll"] = &$fieldLabelstaskrenewstatusall;
$fieldToolTips["taskRenewStatusAll"] = &$fieldToolTipstaskrenewstatusall;
$placeHolders["taskRenewStatusAll"] = &$placeHolderstaskrenewstatusall;
$page_titles["taskRenewStatusAll"] = &$pageTitlestaskrenewstatusall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskRenewStatusAll"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskRenewStatusAll"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskrenewstatusall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  taskRenew.approveStatus,  taskRenew.approveDate,  project.entryUserName,  taskRenew.entryTime,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveReason,  taskRenew.entryUserName AS entryUserName1";
$proto0["m_strFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
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
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto6["m_sql"] = "taskRenew.id";
$proto6["m_srcTableName"] = "taskRenewStatusAll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto8["m_sql"] = "taskRenew.projectID";
$proto8["m_srcTableName"] = "taskRenewStatusAll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto10["m_sql"] = "taskRenew.renewDate";
$proto10["m_srcTableName"] = "taskRenewStatusAll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDesc",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto12["m_sql"] = "taskRenew.renewDesc";
$proto12["m_srcTableName"] = "taskRenewStatusAll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "renewAttFille",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto14["m_sql"] = "taskRenew.renewAttFille";
$proto14["m_srcTableName"] = "taskRenewStatusAll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto16["m_sql"] = "taskRenew.approveStatus";
$proto16["m_srcTableName"] = "taskRenewStatusAll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto18["m_sql"] = "taskRenew.approveDate";
$proto18["m_srcTableName"] = "taskRenewStatusAll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto20["m_sql"] = "project.entryUserName";
$proto20["m_srcTableName"] = "taskRenewStatusAll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto22["m_sql"] = "taskRenew.entryTime";
$proto22["m_srcTableName"] = "taskRenewStatusAll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto24["m_sql"] = "taskRenew.opinionDate";
$proto24["m_srcTableName"] = "taskRenewStatusAll";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto26["m_sql"] = "taskRenew.opinionStatus";
$proto26["m_srcTableName"] = "taskRenewStatusAll";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto28["m_sql"] = "taskRenew.opinionReason";
$proto28["m_srcTableName"] = "taskRenewStatusAll";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto30["m_sql"] = "taskRenew.approveReason";
$proto30["m_srcTableName"] = "taskRenewStatusAll";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto32["m_sql"] = "taskRenew.entryUserName";
$proto32["m_srcTableName"] = "taskRenewStatusAll";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "entryUserName1";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "taskRenew";
$proto35["m_srcTableName"] = "taskRenewStatusAll";
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
$proto34["m_srcTableName"] = "taskRenewStatusAll";
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
$proto39["m_srcTableName"] = "taskRenewStatusAll";
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
$proto38["m_srcTableName"] = "taskRenewStatusAll";
$proto40=array();
$proto40["m_sql"] = "taskRenew.projectID = project.id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewStatusAll"
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
	"m_srcTableName" => "taskRenewStatusAll"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskRenewStatusAll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskrenewstatusall = createSqlQuery_taskrenewstatusall();


	
				;

														

$tdatataskrenewstatusall[".sqlquery"] = $queryData_taskrenewstatusall;



include_once(getabspath("include/taskrenewstatusall_events.php"));
$tableEvents["taskRenewStatusAll"] = new eventclass_taskrenewstatusall;
$tdatataskrenewstatusall[".hasEvents"] = true;

$query = &$queryData_taskrenewstatusall;
$table = "taskRenewStatusAll";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>