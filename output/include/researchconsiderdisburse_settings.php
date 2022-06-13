<?php
$tdataresearchconsiderdisburse = array();
$tdataresearchconsiderdisburse[".searchableFields"] = array();
$tdataresearchconsiderdisburse[".ShortName"] = "researchconsiderdisburse";
$tdataresearchconsiderdisburse[".OwnerID"] = "";
$tdataresearchconsiderdisburse[".OriginalTable"] = "researchConsider";


$tdataresearchconsiderdisburse[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchconsiderdisburse[".originalPagesByType"] = $tdataresearchconsiderdisburse[".pagesByType"];
$tdataresearchconsiderdisburse[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchconsiderdisburse[".originalPages"] = $tdataresearchconsiderdisburse[".pages"];
$tdataresearchconsiderdisburse[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchconsiderdisburse[".originalDefaultPages"] = $tdataresearchconsiderdisburse[".defaultPages"];

//	field labels
$fieldLabelsresearchconsiderdisburse = array();
$fieldToolTipsresearchconsiderdisburse = array();
$pageTitlesresearchconsiderdisburse = array();
$placeHoldersresearchconsiderdisburse = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchconsiderdisburse["English"] = array();
	$fieldToolTipsresearchconsiderdisburse["English"] = array();
	$placeHoldersresearchconsiderdisburse["English"] = array();
	$pageTitlesresearchconsiderdisburse["English"] = array();
	$fieldLabelsresearchconsiderdisburse["English"]["id"] = "ID";
	$fieldToolTipsresearchconsiderdisburse["English"]["id"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["id"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchconsiderdisburse["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchconsiderdisburse["English"]["processName"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["processName"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchconsiderdisburse["English"]["stepName"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["stepName"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchconsiderdisburse["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchconsiderdisburse["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["researchConsiderApprove"] = "Research Consider Approve";
	$fieldToolTipsresearchconsiderdisburse["English"]["researchConsiderApprove"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["researchConsiderApprove"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchconsiderdisburse["English"]["entryUserName"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchconsiderdisburse["English"]["entryTime"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["entryTime"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchconsiderdisburse["English"]["researchRegisterID"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["researchRegisterID"] = "";
	$fieldLabelsresearchconsiderdisburse["English"]["PROJECT_ID"] = "PROJECT ID";
	$fieldToolTipsresearchconsiderdisburse["English"]["PROJECT_ID"] = "";
	$placeHoldersresearchconsiderdisburse["English"]["PROJECT_ID"] = "";
	if (count($fieldToolTipsresearchconsiderdisburse["English"]))
		$tdataresearchconsiderdisburse[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchconsiderdisburse["Thai"] = array();
	$fieldToolTipsresearchconsiderdisburse["Thai"] = array();
	$placeHoldersresearchconsiderdisburse["Thai"] = array();
	$pageTitlesresearchconsiderdisburse["Thai"] = array();
	$fieldLabelsresearchconsiderdisburse["Thai"]["id"] = "ID";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["id"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["id"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["processName"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["processName"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["stepName"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["stepName"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["researchConsiderApprove"] = "การพิจารณา";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["researchConsiderApprove"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["researchConsiderApprove"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["entryUserName"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["entryTime"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["entryTime"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["researchRegisterID"] = "หมายเลขการรับสมัครขอรับทุน";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["researchRegisterID"] = "";
	$fieldLabelsresearchconsiderdisburse["Thai"]["PROJECT_ID"] = "PROJECT ID";
	$fieldToolTipsresearchconsiderdisburse["Thai"]["PROJECT_ID"] = "";
	$placeHoldersresearchconsiderdisburse["Thai"]["PROJECT_ID"] = "";
	if (count($fieldToolTipsresearchconsiderdisburse["Thai"]))
		$tdataresearchconsiderdisburse[".isUseToolTips"] = true;
}


	$tdataresearchconsiderdisburse[".NCSearch"] = true;



$tdataresearchconsiderdisburse[".shortTableName"] = "researchconsiderdisburse";
$tdataresearchconsiderdisburse[".nSecOptions"] = 0;

$tdataresearchconsiderdisburse[".mainTableOwnerID"] = "";
$tdataresearchconsiderdisburse[".entityType"] = 1;
$tdataresearchconsiderdisburse[".connId"] = "mc_at_192_168_1_111";


$tdataresearchconsiderdisburse[".strOriginalTableName"] = "researchConsider";

	



$tdataresearchconsiderdisburse[".showAddInPopup"] = false;

$tdataresearchconsiderdisburse[".showEditInPopup"] = false;

$tdataresearchconsiderdisburse[".showViewInPopup"] = false;

$tdataresearchconsiderdisburse[".listAjax"] = false;
//	temporary
//$tdataresearchconsiderdisburse[".listAjax"] = false;

	$tdataresearchconsiderdisburse[".audit"] = false;

	$tdataresearchconsiderdisburse[".locking"] = false;


$pages = $tdataresearchconsiderdisburse[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchconsiderdisburse[".edit"] = true;
	$tdataresearchconsiderdisburse[".afterEditAction"] = 1;
	$tdataresearchconsiderdisburse[".closePopupAfterEdit"] = 1;
	$tdataresearchconsiderdisburse[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchconsiderdisburse[".add"] = true;
$tdataresearchconsiderdisburse[".afterAddAction"] = 1;
$tdataresearchconsiderdisburse[".closePopupAfterAdd"] = 1;
$tdataresearchconsiderdisburse[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchconsiderdisburse[".list"] = true;
}



$tdataresearchconsiderdisburse[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchconsiderdisburse[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchconsiderdisburse[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchconsiderdisburse[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchconsiderdisburse[".printFriendly"] = true;
}



$tdataresearchconsiderdisburse[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchconsiderdisburse[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchconsiderdisburse[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchconsiderdisburse[".isUseAjaxSuggest"] = true;

$tdataresearchconsiderdisburse[".rowHighlite"] = true;





$tdataresearchconsiderdisburse[".ajaxCodeSnippetAdded"] = false;

$tdataresearchconsiderdisburse[".buttonsAdded"] = false;

$tdataresearchconsiderdisburse[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchconsiderdisburse[".isUseTimeForSearch"] = false;


$tdataresearchconsiderdisburse[".badgeColor"] = "e07878";


$tdataresearchconsiderdisburse[".allSearchFields"] = array();
$tdataresearchconsiderdisburse[".filterFields"] = array();
$tdataresearchconsiderdisburse[".requiredSearchFields"] = array();

$tdataresearchconsiderdisburse[".googleLikeFields"] = array();
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "id";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "researchRegisterID";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "PROJECT_ID";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "processName";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "stepName";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "researchConsiderApprove";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "entryUserName";
$tdataresearchconsiderdisburse[".googleLikeFields"][] = "entryTime";



$tdataresearchconsiderdisburse[".tableType"] = "list";

$tdataresearchconsiderdisburse[".printerPageOrientation"] = 0;
$tdataresearchconsiderdisburse[".nPrinterPageScale"] = 100;

$tdataresearchconsiderdisburse[".nPrinterSplitRecords"] = 40;

$tdataresearchconsiderdisburse[".geocodingEnabled"] = false;










$tdataresearchconsiderdisburse[".pageSize"] = 20;

$tdataresearchconsiderdisburse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchconsiderdisburse[".strOrderBy"] = $tstrOrderBy;

$tdataresearchconsiderdisburse[".orderindexes"] = array();


$tdataresearchconsiderdisburse[".sqlHead"] = "SELECT researchConsider.id,  researchConsider.researchRegisterID,  researchProject.id AS PROJECT_ID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderApprove,  researchConsider.entryUserName,  researchConsider.entryTime";
$tdataresearchconsiderdisburse[".sqlFrom"] = "FROM researchConsider  INNER JOIN researchProject ON researchConsider.researchRegisterID = researchProject.researchRegisterID";
$tdataresearchconsiderdisburse[".sqlWhereExpr"] = "(researchConsider.processName = 'ขออนุมัติการเบิกจ่าย')";
$tdataresearchconsiderdisburse[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchconsiderdisburse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchconsiderdisburse[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchconsiderdisburse[".highlightSearchResults"] = true;

$tableKeysresearchconsiderdisburse = array();
$tableKeysresearchconsiderdisburse[] = "id";
$tdataresearchconsiderdisburse[".Keys"] = $tableKeysresearchconsiderdisburse;


$tdataresearchconsiderdisburse[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.id";

	
	
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


	$tdataresearchconsiderdisburse["id"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","researchRegisterID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRegisterID";

		$fdata["sourceSingle"] = "researchRegisterID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchRegisterID";

	
	
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


	$tdataresearchconsiderdisburse["researchRegisterID"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "researchRegisterID";
//	PROJECT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PROJECT_ID";
	$fdata["GoodName"] = "PROJECT_ID";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","PROJECT_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProject.id";

	
	
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


	$tdataresearchconsiderdisburse["PROJECT_ID"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "PROJECT_ID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","researchConsiderNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderNumber";

		$fdata["sourceSingle"] = "researchConsiderNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderNumber";

	
	
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


	$tdataresearchconsiderdisburse["researchConsiderNumber"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","processName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "processName";

		$fdata["sourceSingle"] = "processName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.processName";

	
	
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


	$tdataresearchconsiderdisburse["processName"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","stepName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stepName";

		$fdata["sourceSingle"] = "stepName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.stepName";

	
	
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


	$tdataresearchconsiderdisburse["stepName"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","researchConsiderFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchConsiderFile";

		$fdata["sourceSingle"] = "researchConsiderFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderFile";

	
	
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


	$tdataresearchconsiderdisburse["researchConsiderFile"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","researchRegisterDesc");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchRegisterDesc";

		$fdata["sourceSingle"] = "researchRegisterDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchRegisterDesc";

	
	
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


	$tdataresearchconsiderdisburse["researchRegisterDesc"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchConsiderApprove";
	$fdata["GoodName"] = "researchConsiderApprove";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","researchConsiderApprove");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchConsiderApprove";

		$fdata["sourceSingle"] = "researchConsiderApprove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.researchConsiderApprove";

	
	
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
	$edata["LookupTable"] = "consider";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "considerName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "considerName";

	

	
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


	$tdataresearchconsiderdisburse["researchConsiderApprove"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "researchConsiderApprove";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.entryUserName";

	
	
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


	$tdataresearchconsiderdisburse["entryUserName"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderDisburse","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchConsider.entryTime";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataresearchconsiderdisburse["entryTime"] = $fdata;
		$tdataresearchconsiderdisburse[".searchableFields"][] = "entryTime";


$tables_data["researchConsiderDisburse"]=&$tdataresearchconsiderdisburse;
$field_labels["researchConsiderDisburse"] = &$fieldLabelsresearchconsiderdisburse;
$fieldToolTips["researchConsiderDisburse"] = &$fieldToolTipsresearchconsiderdisburse;
$placeHolders["researchConsiderDisburse"] = &$placeHoldersresearchconsiderdisburse;
$page_titles["researchConsiderDisburse"] = &$pageTitlesresearchconsiderdisburse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchConsiderDisburse"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchConsiderDisburse"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchOperatingPeriod";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchDisburse";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchdisburse";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchConsiderDisburse"][0] = $masterParams;
				$masterTablesData["researchConsiderDisburse"][0]["masterKeys"] = array();
	$masterTablesData["researchConsiderDisburse"][0]["masterKeys"][]="researchProjectID";
				$masterTablesData["researchConsiderDisburse"][0]["detailKeys"] = array();
	$masterTablesData["researchConsiderDisburse"][0]["detailKeys"][]="researchRegisterID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchconsiderdisburse()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchConsider.id,  researchConsider.researchRegisterID,  researchProject.id AS PROJECT_ID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderApprove,  researchConsider.entryUserName,  researchConsider.entryTime";
$proto0["m_strFrom"] = "FROM researchConsider  INNER JOIN researchProject ON researchConsider.researchRegisterID = researchProject.researchRegisterID";
$proto0["m_strWhere"] = "(researchConsider.processName = 'ขออนุมัติการเบิกจ่าย')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchConsider.processName = 'ขออนุมัติการเบิกจ่าย'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'ขออนุมัติการเบิกจ่าย'";
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
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto6["m_sql"] = "researchConsider.id";
$proto6["m_srcTableName"] = "researchConsiderDisburse";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto8["m_sql"] = "researchConsider.researchRegisterID";
$proto8["m_srcTableName"] = "researchConsiderDisburse";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto10["m_sql"] = "researchProject.id";
$proto10["m_srcTableName"] = "researchConsiderDisburse";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "PROJECT_ID";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto12["m_sql"] = "researchConsider.researchConsiderNumber";
$proto12["m_srcTableName"] = "researchConsiderDisburse";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto14["m_sql"] = "researchConsider.processName";
$proto14["m_srcTableName"] = "researchConsiderDisburse";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto16["m_sql"] = "researchConsider.stepName";
$proto16["m_srcTableName"] = "researchConsiderDisburse";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto18["m_sql"] = "researchConsider.researchConsiderFile";
$proto18["m_srcTableName"] = "researchConsiderDisburse";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto20["m_sql"] = "researchConsider.researchRegisterDesc";
$proto20["m_srcTableName"] = "researchConsiderDisburse";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderApprove",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto22["m_sql"] = "researchConsider.researchConsiderApprove";
$proto22["m_srcTableName"] = "researchConsiderDisburse";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto24["m_sql"] = "researchConsider.entryUserName";
$proto24["m_srcTableName"] = "researchConsiderDisburse";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto26["m_sql"] = "researchConsider.entryTime";
$proto26["m_srcTableName"] = "researchConsiderDisburse";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "researchConsider";
$proto29["m_srcTableName"] = "researchConsiderDisburse";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "researchRegisterID";
$proto29["m_columns"][] = "researchConsiderNumber";
$proto29["m_columns"][] = "processName";
$proto29["m_columns"][] = "stepName";
$proto29["m_columns"][] = "researchConsiderFile";
$proto29["m_columns"][] = "researchRegisterDesc";
$proto29["m_columns"][] = "researchConsiderApprove";
$proto29["m_columns"][] = "entryUserName";
$proto29["m_columns"][] = "entryTime";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "researchConsider";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "researchConsiderDisburse";
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
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "researchProject";
$proto33["m_srcTableName"] = "researchConsiderDisburse";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "researchRegisterID";
$proto33["m_columns"][] = "researchProjectNo";
$proto33["m_columns"][] = "researchProjectGroupName";
$proto33["m_columns"][] = "researchProjectNameThai";
$proto33["m_columns"][] = "researchProjectNameEng";
$proto33["m_columns"][] = "researchProjectPeriodYear";
$proto33["m_columns"][] = "researchProjectPeriodMonth";
$proto33["m_columns"][] = "researchProjectRequestedBudget";
$proto33["m_columns"][] = "researchProjectDepartment";
$proto33["m_columns"][] = "researchProjectMainField";
$proto33["m_columns"][] = "researchProjectSubField";
$proto33["m_columns"][] = "researchProjectHeadName";
$proto33["m_columns"][] = "researchProjectAffiliationName";
$proto33["m_columns"][] = "researchProjectSubAffiliationName";
$proto33["m_columns"][] = "researchProjectAffiliationMobile";
$proto33["m_columns"][] = "researchProjectAffiliationTelephone";
$proto33["m_columns"][] = "researchProjectAffiliationEmail";
$proto33["m_columns"][] = "researchProjectFile";
$proto33["m_columns"][] = "researchProjectBankAccountName";
$proto33["m_columns"][] = "researchProjectBankNo";
$proto33["m_columns"][] = "researchProjectBankName";
$proto33["m_columns"][] = "entryUserName";
$proto33["m_columns"][] = "entryTime";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN researchProject ON researchConsider.researchRegisterID = researchProject.researchRegisterID";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "researchConsiderDisburse";
$proto34=array();
$proto34["m_sql"] = "researchConsider.researchRegisterID = researchProject.researchRegisterID";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderDisburse"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= researchProject.researchRegisterID";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchConsiderDisburse";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchconsiderdisburse = createSqlQuery_researchconsiderdisburse();


	
				;

											

$tdataresearchconsiderdisburse[".sqlquery"] = $queryData_researchconsiderdisburse;



$tableEvents["researchConsiderDisburse"] = new eventsBase;
$tdataresearchconsiderdisburse[".hasEvents"] = false;

?>