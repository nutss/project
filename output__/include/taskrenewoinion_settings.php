<?php
$tdatataskrenewoinion = array();
$tdatataskrenewoinion[".searchableFields"] = array();
$tdatataskrenewoinion[".ShortName"] = "taskrenewoinion";
$tdatataskrenewoinion[".OwnerID"] = "";
$tdatataskrenewoinion[".OriginalTable"] = "taskRenew";


$tdatataskrenewoinion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskrenewoinion[".originalPagesByType"] = $tdatataskrenewoinion[".pagesByType"];
$tdatataskrenewoinion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskrenewoinion[".originalPages"] = $tdatataskrenewoinion[".pages"];
$tdatataskrenewoinion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskrenewoinion[".originalDefaultPages"] = $tdatataskrenewoinion[".defaultPages"];

//	field labels
$fieldLabelstaskrenewoinion = array();
$fieldToolTipstaskrenewoinion = array();
$pageTitlestaskrenewoinion = array();
$placeHolderstaskrenewoinion = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskrenewoinion["English"] = array();
	$fieldToolTipstaskrenewoinion["English"] = array();
	$placeHolderstaskrenewoinion["English"] = array();
	$pageTitlestaskrenewoinion["English"] = array();
	$fieldLabelstaskrenewoinion["English"]["id"] = "ID";
	$fieldToolTipstaskrenewoinion["English"]["id"] = "";
	$placeHolderstaskrenewoinion["English"]["id"] = "";
	$fieldLabelstaskrenewoinion["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenewoinion["English"]["projectID"] = "";
	$placeHolderstaskrenewoinion["English"]["projectID"] = "";
	$fieldLabelstaskrenewoinion["English"]["renewDate"] = "Renew Date";
	$fieldToolTipstaskrenewoinion["English"]["renewDate"] = "";
	$placeHolderstaskrenewoinion["English"]["renewDate"] = "";
	$fieldLabelstaskrenewoinion["English"]["renewDesc"] = "Renew Desc";
	$fieldToolTipstaskrenewoinion["English"]["renewDesc"] = "";
	$placeHolderstaskrenewoinion["English"]["renewDesc"] = "";
	$fieldLabelstaskrenewoinion["English"]["renewAttFille"] = "Renew Att Fille";
	$fieldToolTipstaskrenewoinion["English"]["renewAttFille"] = "";
	$placeHolderstaskrenewoinion["English"]["renewAttFille"] = "";
	$fieldLabelstaskrenewoinion["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskrenewoinion["English"]["approveStatus"] = "";
	$placeHolderstaskrenewoinion["English"]["approveStatus"] = "";
	$fieldLabelstaskrenewoinion["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskrenewoinion["English"]["approveDate"] = "";
	$placeHolderstaskrenewoinion["English"]["approveDate"] = "";
	$fieldLabelstaskrenewoinion["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskrenewoinion["English"]["entryUserName"] = "";
	$placeHolderstaskrenewoinion["English"]["entryUserName"] = "";
	$fieldLabelstaskrenewoinion["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskrenewoinion["English"]["entryTime"] = "";
	$placeHolderstaskrenewoinion["English"]["entryTime"] = "";
	$fieldLabelstaskrenewoinion["English"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewoinion["English"]["opinionDate"] = "";
	$placeHolderstaskrenewoinion["English"]["opinionDate"] = "";
	$fieldLabelstaskrenewoinion["English"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewoinion["English"]["opinionStatus"] = "";
	$placeHolderstaskrenewoinion["English"]["opinionStatus"] = "";
	$fieldLabelstaskrenewoinion["English"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewoinion["English"]["opinionReason"] = "";
	$placeHolderstaskrenewoinion["English"]["opinionReason"] = "";
	$fieldLabelstaskrenewoinion["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewoinion["English"]["approveReason"] = "";
	$placeHolderstaskrenewoinion["English"]["approveReason"] = "";
	$fieldLabelstaskrenewoinion["English"]["checkDate"] = "Check Date";
	$fieldToolTipstaskrenewoinion["English"]["checkDate"] = "";
	$placeHolderstaskrenewoinion["English"]["checkDate"] = "";
	$fieldLabelstaskrenewoinion["English"]["checkStatus"] = "Check Status";
	$fieldToolTipstaskrenewoinion["English"]["checkStatus"] = "";
	$placeHolderstaskrenewoinion["English"]["checkStatus"] = "";
	$fieldLabelstaskrenewoinion["English"]["checkReason"] = "Check Reason";
	$fieldToolTipstaskrenewoinion["English"]["checkReason"] = "";
	$placeHolderstaskrenewoinion["English"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenewoinion["English"]))
		$tdatataskrenewoinion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskrenewoinion["Thai"] = array();
	$fieldToolTipstaskrenewoinion["Thai"] = array();
	$placeHolderstaskrenewoinion["Thai"] = array();
	$pageTitlestaskrenewoinion["Thai"] = array();
	$fieldLabelstaskrenewoinion["Thai"]["id"] = "ID";
	$fieldToolTipstaskrenewoinion["Thai"]["id"] = "";
	$placeHolderstaskrenewoinion["Thai"]["id"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskrenewoinion["Thai"]["projectID"] = "";
	$placeHolderstaskrenewoinion["Thai"]["projectID"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["renewDate"] = "วันที่ขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewoinion["Thai"]["renewDate"] = "";
	$placeHolderstaskrenewoinion["Thai"]["renewDate"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["renewDesc"] = "รายละเอียดขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewoinion["Thai"]["renewDesc"] = "";
	$placeHolderstaskrenewoinion["Thai"]["renewDesc"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["renewAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskrenewoinion["Thai"]["renewAttFille"] = "";
	$placeHolderstaskrenewoinion["Thai"]["renewAttFille"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["approveStatus"] = "สถานะอนุมัติขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["approveStatus"] = "";
	$placeHolderstaskrenewoinion["Thai"]["approveStatus"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewoinion["Thai"]["approveDate"] = "";
	$placeHolderstaskrenewoinion["Thai"]["approveDate"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskrenewoinion["Thai"]["entryUserName"] = "";
	$placeHolderstaskrenewoinion["Thai"]["entryUserName"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskrenewoinion["Thai"]["entryTime"] = "";
	$placeHolderstaskrenewoinion["Thai"]["entryTime"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["opinionDate"] = "วันที่เห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["opinionDate"] = "";
	$placeHolderstaskrenewoinion["Thai"]["opinionDate"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["opinionStatus"] = "สถานะเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["opinionStatus"] = "";
	$placeHolderstaskrenewoinion["Thai"]["opinionStatus"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["opinionReason"] = "เหตุผลเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["opinionReason"] = "";
	$placeHolderstaskrenewoinion["Thai"]["opinionReason"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["approveReason"] = "เหตุผลอนุมัติขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["approveReason"] = "";
	$placeHolderstaskrenewoinion["Thai"]["approveReason"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["checkDate"] = "วันที่ตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["checkDate"] = "";
	$placeHolderstaskrenewoinion["Thai"]["checkDate"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["checkStatus"] = "สถานะตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["checkStatus"] = "";
	$placeHolderstaskrenewoinion["Thai"]["checkStatus"] = "";
	$fieldLabelstaskrenewoinion["Thai"]["checkReason"] = "เหตุผลตรวจเอกสารขอขยายเวลา";
	$fieldToolTipstaskrenewoinion["Thai"]["checkReason"] = "";
	$placeHolderstaskrenewoinion["Thai"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenewoinion["Thai"]))
		$tdatataskrenewoinion[".isUseToolTips"] = true;
}


	$tdatataskrenewoinion[".NCSearch"] = true;



$tdatataskrenewoinion[".shortTableName"] = "taskrenewoinion";
$tdatataskrenewoinion[".nSecOptions"] = 0;

$tdatataskrenewoinion[".mainTableOwnerID"] = "";
$tdatataskrenewoinion[".entityType"] = 1;
$tdatataskrenewoinion[".connId"] = "mc_at_192_168_1_111";


$tdatataskrenewoinion[".strOriginalTableName"] = "taskRenew";

	



$tdatataskrenewoinion[".showAddInPopup"] = false;

$tdatataskrenewoinion[".showEditInPopup"] = false;

$tdatataskrenewoinion[".showViewInPopup"] = false;

$tdatataskrenewoinion[".listAjax"] = false;
//	temporary
//$tdatataskrenewoinion[".listAjax"] = false;

	$tdatataskrenewoinion[".audit"] = false;

	$tdatataskrenewoinion[".locking"] = false;


$pages = $tdatataskrenewoinion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskrenewoinion[".edit"] = true;
	$tdatataskrenewoinion[".afterEditAction"] = 1;
	$tdatataskrenewoinion[".closePopupAfterEdit"] = 1;
	$tdatataskrenewoinion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskrenewoinion[".add"] = true;
$tdatataskrenewoinion[".afterAddAction"] = 1;
$tdatataskrenewoinion[".closePopupAfterAdd"] = 1;
$tdatataskrenewoinion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskrenewoinion[".list"] = true;
}



$tdatataskrenewoinion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskrenewoinion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskrenewoinion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskrenewoinion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskrenewoinion[".printFriendly"] = true;
}



$tdatataskrenewoinion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskrenewoinion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskrenewoinion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskrenewoinion[".isUseAjaxSuggest"] = true;

$tdatataskrenewoinion[".rowHighlite"] = true;





$tdatataskrenewoinion[".ajaxCodeSnippetAdded"] = false;

$tdatataskrenewoinion[".buttonsAdded"] = false;

$tdatataskrenewoinion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskrenewoinion[".isUseTimeForSearch"] = false;


$tdatataskrenewoinion[".badgeColor"] = "E8926F";


$tdatataskrenewoinion[".allSearchFields"] = array();
$tdatataskrenewoinion[".filterFields"] = array();
$tdatataskrenewoinion[".requiredSearchFields"] = array();

$tdatataskrenewoinion[".googleLikeFields"] = array();
$tdatataskrenewoinion[".googleLikeFields"][] = "projectID";
$tdatataskrenewoinion[".googleLikeFields"][] = "renewDate";
$tdatataskrenewoinion[".googleLikeFields"][] = "renewDesc";
$tdatataskrenewoinion[".googleLikeFields"][] = "renewAttFille";
$tdatataskrenewoinion[".googleLikeFields"][] = "entryUserName";
$tdatataskrenewoinion[".googleLikeFields"][] = "checkDate";
$tdatataskrenewoinion[".googleLikeFields"][] = "checkStatus";
$tdatataskrenewoinion[".googleLikeFields"][] = "checkReason";
$tdatataskrenewoinion[".googleLikeFields"][] = "opinionDate";
$tdatataskrenewoinion[".googleLikeFields"][] = "opinionStatus";
$tdatataskrenewoinion[".googleLikeFields"][] = "opinionReason";
$tdatataskrenewoinion[".googleLikeFields"][] = "approveDate";
$tdatataskrenewoinion[".googleLikeFields"][] = "approveStatus";
$tdatataskrenewoinion[".googleLikeFields"][] = "approveReason";
$tdatataskrenewoinion[".googleLikeFields"][] = "entryTime";



$tdatataskrenewoinion[".tableType"] = "list";

$tdatataskrenewoinion[".printerPageOrientation"] = 0;
$tdatataskrenewoinion[".nPrinterPageScale"] = 100;

$tdatataskrenewoinion[".nPrinterSplitRecords"] = 40;

$tdatataskrenewoinion[".geocodingEnabled"] = false;










$tdatataskrenewoinion[".pageSize"] = 20;

$tdatataskrenewoinion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskrenewoinion[".strOrderBy"] = $tstrOrderBy;

$tdatataskrenewoinion[".orderindexes"] = array();


$tdatataskrenewoinion[".sqlHead"] = "SELECT taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  project.entryUserName,  taskRenew.checkDate,  taskRenew.checkStatus,  taskRenew.checkReason,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveDate,  taskRenew.approveStatus,  taskRenew.approveReason,  taskRenew.entryTime";
$tdatataskrenewoinion[".sqlFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$tdatataskrenewoinion[".sqlWhereExpr"] = "";
$tdatataskrenewoinion[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatataskrenewoinion[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskrenewoinion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskrenewoinion[".arrGroupsPerPage"] = $arrGPP;

$tdatataskrenewoinion[".highlightSearchResults"] = true;

$tableKeystaskrenewoinion = array();
$tableKeystaskrenewoinion[] = "id";
$tdatataskrenewoinion[".Keys"] = $tableKeystaskrenewoinion;


$tdatataskrenewoinion[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","id");
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


	$tdatataskrenewoinion["id"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","projectID");
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


	$tdatataskrenewoinion["projectID"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "projectID";
//	renewDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "renewDate";
	$fdata["GoodName"] = "renewDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","renewDate");
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


	$tdatataskrenewoinion["renewDate"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "renewDate";
//	renewDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "renewDesc";
	$fdata["GoodName"] = "renewDesc";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","renewDesc");
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


	$tdatataskrenewoinion["renewDesc"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "renewDesc";
//	renewAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "renewAttFille";
	$fdata["GoodName"] = "renewAttFille";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","renewAttFille");
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


	$tdatataskrenewoinion["renewAttFille"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "renewAttFille";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","entryUserName");
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


	$tdatataskrenewoinion["entryUserName"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "entryUserName";
//	checkDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "checkDate";
	$fdata["GoodName"] = "checkDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","checkDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "checkDate";

		$fdata["sourceSingle"] = "checkDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.checkDate";

	
	
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


	$tdatataskrenewoinion["checkDate"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "checkDate";
//	checkStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "checkStatus";
	$fdata["GoodName"] = "checkStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","checkStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "checkStatus";

		$fdata["sourceSingle"] = "checkStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.checkStatus";

	
	
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
	$edata["LookupValues"][] = "ผ่าน";
	$edata["LookupValues"][] = "ไม่ผ่าน";
	$edata["LookupValues"][] = "รอตรวจสอบ";

	
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


	$tdatataskrenewoinion["checkStatus"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "checkStatus";
//	checkReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "checkReason";
	$fdata["GoodName"] = "checkReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","checkReason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "checkReason";

		$fdata["sourceSingle"] = "checkReason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.checkReason";

	
	
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


	$tdatataskrenewoinion["checkReason"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "checkReason";
//	opinionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opinionDate";
	$fdata["GoodName"] = "opinionDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","opinionDate");
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


	$tdatataskrenewoinion["opinionDate"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "opinionDate";
//	opinionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opinionStatus";
	$fdata["GoodName"] = "opinionStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","opinionStatus");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ผ่าน";
	$edata["LookupValues"][] = "ไม่ผ่าน";
	$edata["LookupValues"][] = "รอตรวจสอบ";

	
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


	$tdatataskrenewoinion["opinionStatus"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "opinionStatus";
//	opinionReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opinionReason";
	$fdata["GoodName"] = "opinionReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","opinionReason");
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


	$tdatataskrenewoinion["opinionReason"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "opinionReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","approveDate");
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


	$tdatataskrenewoinion["approveDate"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","approveStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approveStatus";

		$fdata["sourceSingle"] = "approveStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taskRenew.approveStatus";

	
	
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
	$edata["LookupValues"][] = "รออนุมัติ";
	$edata["LookupValues"][] = "อนุมัติ";
	$edata["LookupValues"][] = "ไม่อนุมัติ";

	
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


	$tdatataskrenewoinion["approveStatus"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","approveReason");
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


	$tdatataskrenewoinion["approveReason"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "approveReason";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewOinion","entryTime");
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


	$tdatataskrenewoinion["entryTime"] = $fdata;
		$tdatataskrenewoinion[".searchableFields"][] = "entryTime";


$tables_data["taskRenewOinion"]=&$tdatataskrenewoinion;
$field_labels["taskRenewOinion"] = &$fieldLabelstaskrenewoinion;
$fieldToolTips["taskRenewOinion"] = &$fieldToolTipstaskrenewoinion;
$placeHolders["taskRenewOinion"] = &$placeHolderstaskrenewoinion;
$page_titles["taskRenewOinion"] = &$pageTitlestaskrenewoinion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskRenewOinion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskRenewOinion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskrenewoinion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  project.entryUserName,  taskRenew.checkDate,  taskRenew.checkStatus,  taskRenew.checkReason,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveDate,  taskRenew.approveStatus,  taskRenew.approveReason,  taskRenew.entryTime";
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
	"m_srcTableName" => "taskRenewOinion"
));

$proto6["m_sql"] = "taskRenew.id";
$proto6["m_srcTableName"] = "taskRenewOinion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto8["m_sql"] = "taskRenew.projectID";
$proto8["m_srcTableName"] = "taskRenewOinion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto10["m_sql"] = "taskRenew.renewDate";
$proto10["m_srcTableName"] = "taskRenewOinion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDesc",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto12["m_sql"] = "taskRenew.renewDesc";
$proto12["m_srcTableName"] = "taskRenewOinion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "renewAttFille",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto14["m_sql"] = "taskRenew.renewAttFille";
$proto14["m_srcTableName"] = "taskRenewOinion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskRenewOinion"
));

$proto16["m_sql"] = "project.entryUserName";
$proto16["m_srcTableName"] = "taskRenewOinion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "checkDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto18["m_sql"] = "taskRenew.checkDate";
$proto18["m_srcTableName"] = "taskRenewOinion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "checkStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto20["m_sql"] = "taskRenew.checkStatus";
$proto20["m_srcTableName"] = "taskRenewOinion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "checkReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto22["m_sql"] = "taskRenew.checkReason";
$proto22["m_srcTableName"] = "taskRenewOinion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto24["m_sql"] = "taskRenew.opinionDate";
$proto24["m_srcTableName"] = "taskRenewOinion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto26["m_sql"] = "taskRenew.opinionStatus";
$proto26["m_srcTableName"] = "taskRenewOinion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto28["m_sql"] = "taskRenew.opinionReason";
$proto28["m_srcTableName"] = "taskRenewOinion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto30["m_sql"] = "taskRenew.approveDate";
$proto30["m_srcTableName"] = "taskRenewOinion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto32["m_sql"] = "taskRenew.approveStatus";
$proto32["m_srcTableName"] = "taskRenewOinion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto34["m_sql"] = "taskRenew.approveReason";
$proto34["m_srcTableName"] = "taskRenewOinion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto36["m_sql"] = "taskRenew.entryTime";
$proto36["m_srcTableName"] = "taskRenewOinion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "taskRenew";
$proto39["m_srcTableName"] = "taskRenewOinion";
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
$proto38["m_srcTableName"] = "taskRenewOinion";
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
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "project";
$proto43["m_srcTableName"] = "taskRenewOinion";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "projectName";
$proto43["m_columns"][] = "projectStart";
$proto43["m_columns"][] = "projectEnd";
$proto43["m_columns"][] = "ProjectTypeName";
$proto43["m_columns"][] = "companyName";
$proto43["m_columns"][] = "projectBudgetCost";
$proto43["m_columns"][] = "projectFile";
$proto43["m_columns"][] = "DocumentCheckDate";
$proto43["m_columns"][] = "DocumentCheckStatus";
$proto43["m_columns"][] = "DocumentCheckReason";
$proto43["m_columns"][] = "screenDate";
$proto43["m_columns"][] = "screenStatus";
$proto43["m_columns"][] = "screenReason";
$proto43["m_columns"][] = "approveDate";
$proto43["m_columns"][] = "approveStatus";
$proto43["m_columns"][] = "approveReason";
$proto43["m_columns"][] = "entryUserName";
$proto43["m_columns"][] = "entryTime";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "taskRenewOinion";
$proto44=array();
$proto44["m_sql"] = "taskRenew.projectID = project.id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= project.id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewOinion"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskRenewOinion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskrenewoinion = createSqlQuery_taskrenewoinion();


	
				;

																

$tdatataskrenewoinion[".sqlquery"] = $queryData_taskrenewoinion;



include_once(getabspath("include/taskrenewoinion_events.php"));
$tableEvents["taskRenewOinion"] = new eventclass_taskrenewoinion;
$tdatataskrenewoinion[".hasEvents"] = true;

$query = &$queryData_taskrenewoinion;
$table = "taskRenewOinion";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>