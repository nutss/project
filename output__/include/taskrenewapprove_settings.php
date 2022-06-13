<?php
$tdatataskrenewapprove = array();
$tdatataskrenewapprove[".searchableFields"] = array();
$tdatataskrenewapprove[".ShortName"] = "taskrenewapprove";
$tdatataskrenewapprove[".OwnerID"] = "";
$tdatataskrenewapprove[".OriginalTable"] = "taskRenew";


$tdatataskrenewapprove[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatataskrenewapprove[".originalPagesByType"] = $tdatataskrenewapprove[".pagesByType"];
$tdatataskrenewapprove[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatataskrenewapprove[".originalPages"] = $tdatataskrenewapprove[".pages"];
$tdatataskrenewapprove[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatataskrenewapprove[".originalDefaultPages"] = $tdatataskrenewapprove[".defaultPages"];

//	field labels
$fieldLabelstaskrenewapprove = array();
$fieldToolTipstaskrenewapprove = array();
$pageTitlestaskrenewapprove = array();
$placeHolderstaskrenewapprove = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstaskrenewapprove["English"] = array();
	$fieldToolTipstaskrenewapprove["English"] = array();
	$placeHolderstaskrenewapprove["English"] = array();
	$pageTitlestaskrenewapprove["English"] = array();
	$fieldLabelstaskrenewapprove["English"]["id"] = "ID";
	$fieldToolTipstaskrenewapprove["English"]["id"] = "";
	$placeHolderstaskrenewapprove["English"]["id"] = "";
	$fieldLabelstaskrenewapprove["English"]["projectID"] = "Project ID";
	$fieldToolTipstaskrenewapprove["English"]["projectID"] = "";
	$placeHolderstaskrenewapprove["English"]["projectID"] = "";
	$fieldLabelstaskrenewapprove["English"]["renewDate"] = "Renew Date";
	$fieldToolTipstaskrenewapprove["English"]["renewDate"] = "";
	$placeHolderstaskrenewapprove["English"]["renewDate"] = "";
	$fieldLabelstaskrenewapprove["English"]["renewDesc"] = "Renew Desc";
	$fieldToolTipstaskrenewapprove["English"]["renewDesc"] = "";
	$placeHolderstaskrenewapprove["English"]["renewDesc"] = "";
	$fieldLabelstaskrenewapprove["English"]["renewAttFille"] = "Renew Att Fille";
	$fieldToolTipstaskrenewapprove["English"]["renewAttFille"] = "";
	$placeHolderstaskrenewapprove["English"]["renewAttFille"] = "";
	$fieldLabelstaskrenewapprove["English"]["approveStatus"] = "Approve Status";
	$fieldToolTipstaskrenewapprove["English"]["approveStatus"] = "";
	$placeHolderstaskrenewapprove["English"]["approveStatus"] = "";
	$fieldLabelstaskrenewapprove["English"]["approveDate"] = "Approve Date";
	$fieldToolTipstaskrenewapprove["English"]["approveDate"] = "";
	$placeHolderstaskrenewapprove["English"]["approveDate"] = "";
	$fieldLabelstaskrenewapprove["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipstaskrenewapprove["English"]["entryUserName"] = "";
	$placeHolderstaskrenewapprove["English"]["entryUserName"] = "";
	$fieldLabelstaskrenewapprove["English"]["entryTime"] = "Entry Time";
	$fieldToolTipstaskrenewapprove["English"]["entryTime"] = "";
	$placeHolderstaskrenewapprove["English"]["entryTime"] = "";
	$fieldLabelstaskrenewapprove["English"]["opinionDate"] = "Opinion Date";
	$fieldToolTipstaskrenewapprove["English"]["opinionDate"] = "";
	$placeHolderstaskrenewapprove["English"]["opinionDate"] = "";
	$fieldLabelstaskrenewapprove["English"]["opinionStatus"] = "Opinion Status";
	$fieldToolTipstaskrenewapprove["English"]["opinionStatus"] = "";
	$placeHolderstaskrenewapprove["English"]["opinionStatus"] = "";
	$fieldLabelstaskrenewapprove["English"]["opinionReason"] = "Opinion Reason";
	$fieldToolTipstaskrenewapprove["English"]["opinionReason"] = "";
	$placeHolderstaskrenewapprove["English"]["opinionReason"] = "";
	$fieldLabelstaskrenewapprove["English"]["approveReason"] = "Approve Reason";
	$fieldToolTipstaskrenewapprove["English"]["approveReason"] = "";
	$placeHolderstaskrenewapprove["English"]["approveReason"] = "";
	$fieldLabelstaskrenewapprove["English"]["checkDate"] = "Check Date";
	$fieldToolTipstaskrenewapprove["English"]["checkDate"] = "";
	$placeHolderstaskrenewapprove["English"]["checkDate"] = "";
	$fieldLabelstaskrenewapprove["English"]["checkStatus"] = "Check Status";
	$fieldToolTipstaskrenewapprove["English"]["checkStatus"] = "";
	$placeHolderstaskrenewapprove["English"]["checkStatus"] = "";
	$fieldLabelstaskrenewapprove["English"]["checkReason"] = "Check Reason";
	$fieldToolTipstaskrenewapprove["English"]["checkReason"] = "";
	$placeHolderstaskrenewapprove["English"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenewapprove["English"]))
		$tdatataskrenewapprove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelstaskrenewapprove["Thai"] = array();
	$fieldToolTipstaskrenewapprove["Thai"] = array();
	$placeHolderstaskrenewapprove["Thai"] = array();
	$pageTitlestaskrenewapprove["Thai"] = array();
	$fieldLabelstaskrenewapprove["Thai"]["id"] = "ID";
	$fieldToolTipstaskrenewapprove["Thai"]["id"] = "";
	$placeHolderstaskrenewapprove["Thai"]["id"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["projectID"] = "ชื่อโครงการ";
	$fieldToolTipstaskrenewapprove["Thai"]["projectID"] = "";
	$placeHolderstaskrenewapprove["Thai"]["projectID"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["renewDate"] = "วันที่ขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewapprove["Thai"]["renewDate"] = "";
	$placeHolderstaskrenewapprove["Thai"]["renewDate"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["renewDesc"] = "รายละเอียดขยายระยะเวลาโครงการ";
	$fieldToolTipstaskrenewapprove["Thai"]["renewDesc"] = "";
	$placeHolderstaskrenewapprove["Thai"]["renewDesc"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["renewAttFille"] = "ไฟล์แนบ";
	$fieldToolTipstaskrenewapprove["Thai"]["renewAttFille"] = "";
	$placeHolderstaskrenewapprove["Thai"]["renewAttFille"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["approveStatus"] = "สถานะอนุมัติขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["approveStatus"] = "";
	$placeHolderstaskrenewapprove["Thai"]["approveStatus"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["approveDate"] = "วันที่อนุมัติคำขอทุนวิจัย";
	$fieldToolTipstaskrenewapprove["Thai"]["approveDate"] = "";
	$placeHolderstaskrenewapprove["Thai"]["approveDate"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["entryUserName"] = "ผู้ดูแลโครงการ";
	$fieldToolTipstaskrenewapprove["Thai"]["entryUserName"] = "";
	$placeHolderstaskrenewapprove["Thai"]["entryUserName"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipstaskrenewapprove["Thai"]["entryTime"] = "";
	$placeHolderstaskrenewapprove["Thai"]["entryTime"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["opinionDate"] = "วันที่เห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["opinionDate"] = "";
	$placeHolderstaskrenewapprove["Thai"]["opinionDate"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["opinionStatus"] = "สถานะเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["opinionStatus"] = "";
	$placeHolderstaskrenewapprove["Thai"]["opinionStatus"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["opinionReason"] = "เหตุผลเห็นชอบขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["opinionReason"] = "";
	$placeHolderstaskrenewapprove["Thai"]["opinionReason"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["approveReason"] = "เหตุผลอนุมัติขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["approveReason"] = "";
	$placeHolderstaskrenewapprove["Thai"]["approveReason"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["checkDate"] = "วันที่ตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["checkDate"] = "";
	$placeHolderstaskrenewapprove["Thai"]["checkDate"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["checkStatus"] = "สถานะตรวจเอกสารขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["checkStatus"] = "";
	$placeHolderstaskrenewapprove["Thai"]["checkStatus"] = "";
	$fieldLabelstaskrenewapprove["Thai"]["checkReason"] = "เหตุผลตรวจเอกสารขอขยายเวลา";
	$fieldToolTipstaskrenewapprove["Thai"]["checkReason"] = "";
	$placeHolderstaskrenewapprove["Thai"]["checkReason"] = "";
	if (count($fieldToolTipstaskrenewapprove["Thai"]))
		$tdatataskrenewapprove[".isUseToolTips"] = true;
}


	$tdatataskrenewapprove[".NCSearch"] = true;



$tdatataskrenewapprove[".shortTableName"] = "taskrenewapprove";
$tdatataskrenewapprove[".nSecOptions"] = 0;

$tdatataskrenewapprove[".mainTableOwnerID"] = "";
$tdatataskrenewapprove[".entityType"] = 1;
$tdatataskrenewapprove[".connId"] = "mc_at_192_168_1_111";


$tdatataskrenewapprove[".strOriginalTableName"] = "taskRenew";

	



$tdatataskrenewapprove[".showAddInPopup"] = false;

$tdatataskrenewapprove[".showEditInPopup"] = false;

$tdatataskrenewapprove[".showViewInPopup"] = false;

$tdatataskrenewapprove[".listAjax"] = false;
//	temporary
//$tdatataskrenewapprove[".listAjax"] = false;

	$tdatataskrenewapprove[".audit"] = false;

	$tdatataskrenewapprove[".locking"] = false;


$pages = $tdatataskrenewapprove[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatataskrenewapprove[".edit"] = true;
	$tdatataskrenewapprove[".afterEditAction"] = 1;
	$tdatataskrenewapprove[".closePopupAfterEdit"] = 1;
	$tdatataskrenewapprove[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatataskrenewapprove[".add"] = true;
$tdatataskrenewapprove[".afterAddAction"] = 1;
$tdatataskrenewapprove[".closePopupAfterAdd"] = 1;
$tdatataskrenewapprove[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatataskrenewapprove[".list"] = true;
}



$tdatataskrenewapprove[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatataskrenewapprove[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatataskrenewapprove[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatataskrenewapprove[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatataskrenewapprove[".printFriendly"] = true;
}



$tdatataskrenewapprove[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatataskrenewapprove[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatataskrenewapprove[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatataskrenewapprove[".isUseAjaxSuggest"] = true;

$tdatataskrenewapprove[".rowHighlite"] = true;





$tdatataskrenewapprove[".ajaxCodeSnippetAdded"] = false;

$tdatataskrenewapprove[".buttonsAdded"] = false;

$tdatataskrenewapprove[".addPageEvents"] = false;

// use timepicker for search panel
$tdatataskrenewapprove[".isUseTimeForSearch"] = false;


$tdatataskrenewapprove[".badgeColor"] = "00C2C5";


$tdatataskrenewapprove[".allSearchFields"] = array();
$tdatataskrenewapprove[".filterFields"] = array();
$tdatataskrenewapprove[".requiredSearchFields"] = array();

$tdatataskrenewapprove[".googleLikeFields"] = array();
$tdatataskrenewapprove[".googleLikeFields"][] = "projectID";
$tdatataskrenewapprove[".googleLikeFields"][] = "renewDate";
$tdatataskrenewapprove[".googleLikeFields"][] = "renewDesc";
$tdatataskrenewapprove[".googleLikeFields"][] = "renewAttFille";
$tdatataskrenewapprove[".googleLikeFields"][] = "entryUserName";
$tdatataskrenewapprove[".googleLikeFields"][] = "checkDate";
$tdatataskrenewapprove[".googleLikeFields"][] = "checkStatus";
$tdatataskrenewapprove[".googleLikeFields"][] = "checkReason";
$tdatataskrenewapprove[".googleLikeFields"][] = "opinionDate";
$tdatataskrenewapprove[".googleLikeFields"][] = "opinionStatus";
$tdatataskrenewapprove[".googleLikeFields"][] = "opinionReason";
$tdatataskrenewapprove[".googleLikeFields"][] = "approveDate";
$tdatataskrenewapprove[".googleLikeFields"][] = "approveStatus";
$tdatataskrenewapprove[".googleLikeFields"][] = "approveReason";
$tdatataskrenewapprove[".googleLikeFields"][] = "entryTime";



$tdatataskrenewapprove[".tableType"] = "list";

$tdatataskrenewapprove[".printerPageOrientation"] = 0;
$tdatataskrenewapprove[".nPrinterPageScale"] = 100;

$tdatataskrenewapprove[".nPrinterSplitRecords"] = 40;

$tdatataskrenewapprove[".geocodingEnabled"] = false;










$tdatataskrenewapprove[".pageSize"] = 20;

$tdatataskrenewapprove[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatataskrenewapprove[".strOrderBy"] = $tstrOrderBy;

$tdatataskrenewapprove[".orderindexes"] = array();


$tdatataskrenewapprove[".sqlHead"] = "SELECT taskRenew.id,  taskRenew.projectID,  taskRenew.renewDate,  taskRenew.renewDesc,  taskRenew.renewAttFille,  project.entryUserName,  taskRenew.checkDate,  taskRenew.checkStatus,  taskRenew.checkReason,  taskRenew.opinionDate,  taskRenew.opinionStatus,  taskRenew.opinionReason,  taskRenew.approveDate,  taskRenew.approveStatus,  taskRenew.approveReason,  taskRenew.entryTime";
$tdatataskrenewapprove[".sqlFrom"] = "FROM taskRenew  LEFT OUTER JOIN project ON taskRenew.projectID = project.id";
$tdatataskrenewapprove[".sqlWhereExpr"] = "";
$tdatataskrenewapprove[".sqlTail"] = "";

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
$tdatataskrenewapprove[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatataskrenewapprove[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatataskrenewapprove[".arrGroupsPerPage"] = $arrGPP;

$tdatataskrenewapprove[".highlightSearchResults"] = true;

$tableKeystaskrenewapprove = array();
$tableKeystaskrenewapprove[] = "id";
$tdatataskrenewapprove[".Keys"] = $tableKeystaskrenewapprove;


$tdatataskrenewapprove[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","id");
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


	$tdatataskrenewapprove["id"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "id";
//	projectID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projectID";
	$fdata["GoodName"] = "projectID";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","projectID");
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


	$tdatataskrenewapprove["projectID"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "projectID";
//	renewDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "renewDate";
	$fdata["GoodName"] = "renewDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","renewDate");
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


	$tdatataskrenewapprove["renewDate"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "renewDate";
//	renewDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "renewDesc";
	$fdata["GoodName"] = "renewDesc";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","renewDesc");
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


	$tdatataskrenewapprove["renewDesc"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "renewDesc";
//	renewAttFille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "renewAttFille";
	$fdata["GoodName"] = "renewAttFille";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","renewAttFille");
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


	$tdatataskrenewapprove["renewAttFille"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "renewAttFille";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","entryUserName");
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


	$tdatataskrenewapprove["entryUserName"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "entryUserName";
//	checkDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "checkDate";
	$fdata["GoodName"] = "checkDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","checkDate");
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


	$tdatataskrenewapprove["checkDate"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "checkDate";
//	checkStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "checkStatus";
	$fdata["GoodName"] = "checkStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","checkStatus");
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


	$tdatataskrenewapprove["checkStatus"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "checkStatus";
//	checkReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "checkReason";
	$fdata["GoodName"] = "checkReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","checkReason");
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


	$tdatataskrenewapprove["checkReason"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "checkReason";
//	opinionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opinionDate";
	$fdata["GoodName"] = "opinionDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","opinionDate");
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


	$tdatataskrenewapprove["opinionDate"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "opinionDate";
//	opinionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opinionStatus";
	$fdata["GoodName"] = "opinionStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","opinionStatus");
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


	$tdatataskrenewapprove["opinionStatus"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "opinionStatus";
//	opinionReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opinionReason";
	$fdata["GoodName"] = "opinionReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","opinionReason");
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


	$tdatataskrenewapprove["opinionReason"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "opinionReason";
//	approveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "approveDate";
	$fdata["GoodName"] = "approveDate";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","approveDate");
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


	$tdatataskrenewapprove["approveDate"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "approveDate";
//	approveStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "approveStatus";
	$fdata["GoodName"] = "approveStatus";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","approveStatus");
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


	$tdatataskrenewapprove["approveStatus"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "approveStatus";
//	approveReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "approveReason";
	$fdata["GoodName"] = "approveReason";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","approveReason");
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


	$tdatataskrenewapprove["approveReason"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "approveReason";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "taskRenew";
	$fdata["Label"] = GetFieldLabel("taskRenewApprove","entryTime");
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


	$tdatataskrenewapprove["entryTime"] = $fdata;
		$tdatataskrenewapprove[".searchableFields"][] = "entryTime";


$tables_data["taskRenewApprove"]=&$tdatataskrenewapprove;
$field_labels["taskRenewApprove"] = &$fieldLabelstaskrenewapprove;
$fieldToolTips["taskRenewApprove"] = &$fieldToolTipstaskrenewapprove;
$placeHolders["taskRenewApprove"] = &$placeHolderstaskrenewapprove;
$page_titles["taskRenewApprove"] = &$pageTitlestaskrenewapprove;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["taskRenewApprove"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["taskRenewApprove"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_taskrenewapprove()
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
	"m_srcTableName" => "taskRenewApprove"
));

$proto6["m_sql"] = "taskRenew.id";
$proto6["m_srcTableName"] = "taskRenewApprove";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto8["m_sql"] = "taskRenew.projectID";
$proto8["m_srcTableName"] = "taskRenewApprove";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto10["m_sql"] = "taskRenew.renewDate";
$proto10["m_srcTableName"] = "taskRenewApprove";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "renewDesc",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto12["m_sql"] = "taskRenew.renewDesc";
$proto12["m_srcTableName"] = "taskRenewApprove";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "renewAttFille",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto14["m_sql"] = "taskRenew.renewAttFille";
$proto14["m_srcTableName"] = "taskRenewApprove";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "project",
	"m_srcTableName" => "taskRenewApprove"
));

$proto16["m_sql"] = "project.entryUserName";
$proto16["m_srcTableName"] = "taskRenewApprove";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "checkDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto18["m_sql"] = "taskRenew.checkDate";
$proto18["m_srcTableName"] = "taskRenewApprove";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "checkStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto20["m_sql"] = "taskRenew.checkStatus";
$proto20["m_srcTableName"] = "taskRenewApprove";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "checkReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto22["m_sql"] = "taskRenew.checkReason";
$proto22["m_srcTableName"] = "taskRenewApprove";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto24["m_sql"] = "taskRenew.opinionDate";
$proto24["m_srcTableName"] = "taskRenewApprove";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto26["m_sql"] = "taskRenew.opinionStatus";
$proto26["m_srcTableName"] = "taskRenewApprove";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "opinionReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto28["m_sql"] = "taskRenew.opinionReason";
$proto28["m_srcTableName"] = "taskRenewApprove";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "approveDate",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto30["m_sql"] = "taskRenew.approveDate";
$proto30["m_srcTableName"] = "taskRenewApprove";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "approveStatus",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto32["m_sql"] = "taskRenew.approveStatus";
$proto32["m_srcTableName"] = "taskRenewApprove";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "approveReason",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto34["m_sql"] = "taskRenew.approveReason";
$proto34["m_srcTableName"] = "taskRenewApprove";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
));

$proto36["m_sql"] = "taskRenew.entryTime";
$proto36["m_srcTableName"] = "taskRenewApprove";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "taskRenew";
$proto39["m_srcTableName"] = "taskRenewApprove";
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
$proto38["m_srcTableName"] = "taskRenewApprove";
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
$proto43["m_srcTableName"] = "taskRenewApprove";
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
$proto42["m_srcTableName"] = "taskRenewApprove";
$proto44=array();
$proto44["m_sql"] = "taskRenew.projectID = project.id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "projectID",
	"m_strTable" => "taskRenew",
	"m_srcTableName" => "taskRenewApprove"
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
	"m_srcTableName" => "taskRenewApprove"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="taskRenewApprove";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_taskrenewapprove = createSqlQuery_taskrenewapprove();


	
				;

																

$tdatataskrenewapprove[".sqlquery"] = $queryData_taskrenewapprove;



include_once(getabspath("include/taskrenewapprove_events.php"));
$tableEvents["taskRenewApprove"] = new eventclass_taskrenewapprove;
$tdatataskrenewapprove[".hasEvents"] = true;

$query = &$queryData_taskrenewapprove;
$table = "taskRenewApprove";
// here goes EVENT_INIT_TABLE event

if ($_SESSION["GroupName"]=="เจ้าหน้าที่") {

	$query->addWhere("`project`.`entryUserName`='".$_SESSION["UserName"]."'");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>