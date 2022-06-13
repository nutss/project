<?php
$tdataresearchconsiderappointment = array();
$tdataresearchconsiderappointment[".searchableFields"] = array();
$tdataresearchconsiderappointment[".ShortName"] = "researchconsiderappointment";
$tdataresearchconsiderappointment[".OwnerID"] = "";
$tdataresearchconsiderappointment[".OriginalTable"] = "researchConsider";


$tdataresearchconsiderappointment[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchconsiderappointment[".originalPagesByType"] = $tdataresearchconsiderappointment[".pagesByType"];
$tdataresearchconsiderappointment[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchconsiderappointment[".originalPages"] = $tdataresearchconsiderappointment[".pages"];
$tdataresearchconsiderappointment[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchconsiderappointment[".originalDefaultPages"] = $tdataresearchconsiderappointment[".defaultPages"];

//	field labels
$fieldLabelsresearchconsiderappointment = array();
$fieldToolTipsresearchconsiderappointment = array();
$pageTitlesresearchconsiderappointment = array();
$placeHoldersresearchconsiderappointment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchconsiderappointment["English"] = array();
	$fieldToolTipsresearchconsiderappointment["English"] = array();
	$placeHoldersresearchconsiderappointment["English"] = array();
	$pageTitlesresearchconsiderappointment["English"] = array();
	$fieldLabelsresearchconsiderappointment["English"]["id"] = "ID";
	$fieldToolTipsresearchconsiderappointment["English"]["id"] = "";
	$placeHoldersresearchconsiderappointment["English"]["id"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["researchConsiderNumber"] = "Research Consider Number";
	$fieldToolTipsresearchconsiderappointment["English"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderappointment["English"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["processName"] = "Process Name";
	$fieldToolTipsresearchconsiderappointment["English"]["processName"] = "";
	$placeHoldersresearchconsiderappointment["English"]["processName"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["stepName"] = "Step Name";
	$fieldToolTipsresearchconsiderappointment["English"]["stepName"] = "";
	$placeHoldersresearchconsiderappointment["English"]["stepName"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["researchConsiderFile"] = "Research Consider File";
	$fieldToolTipsresearchconsiderappointment["English"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderappointment["English"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["researchRegisterDesc"] = "Research Register Desc";
	$fieldToolTipsresearchconsiderappointment["English"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderappointment["English"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["researchConsiderApprove"] = "Research Consider Approve";
	$fieldToolTipsresearchconsiderappointment["English"]["researchConsiderApprove"] = "";
	$placeHoldersresearchconsiderappointment["English"]["researchConsiderApprove"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchconsiderappointment["English"]["entryUserName"] = "";
	$placeHoldersresearchconsiderappointment["English"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchconsiderappointment["English"]["entryTime"] = "";
	$placeHoldersresearchconsiderappointment["English"]["entryTime"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchconsiderappointment["English"]["researchRegisterID"] = "";
	$placeHoldersresearchconsiderappointment["English"]["researchRegisterID"] = "";
	$fieldLabelsresearchconsiderappointment["English"]["PROJECT_ID"] = "PROJECT ID";
	$fieldToolTipsresearchconsiderappointment["English"]["PROJECT_ID"] = "";
	$placeHoldersresearchconsiderappointment["English"]["PROJECT_ID"] = "";
	if (count($fieldToolTipsresearchconsiderappointment["English"]))
		$tdataresearchconsiderappointment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchconsiderappointment["Thai"] = array();
	$fieldToolTipsresearchconsiderappointment["Thai"] = array();
	$placeHoldersresearchconsiderappointment["Thai"] = array();
	$pageTitlesresearchconsiderappointment["Thai"] = array();
	$fieldLabelsresearchconsiderappointment["Thai"]["id"] = "ID";
	$fieldToolTipsresearchconsiderappointment["Thai"]["id"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["id"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["researchConsiderNumber"] = "ขั้นตอนที่";
	$fieldToolTipsresearchconsiderappointment["Thai"]["researchConsiderNumber"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["researchConsiderNumber"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["processName"] = "กระบวนการ";
	$fieldToolTipsresearchconsiderappointment["Thai"]["processName"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["processName"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["stepName"] = "ชื่อขั้นตอน";
	$fieldToolTipsresearchconsiderappointment["Thai"]["stepName"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["stepName"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["researchConsiderFile"] = "เอกสารแนบ";
	$fieldToolTipsresearchconsiderappointment["Thai"]["researchConsiderFile"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["researchConsiderFile"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["researchRegisterDesc"] = "หมายเหตุ";
	$fieldToolTipsresearchconsiderappointment["Thai"]["researchRegisterDesc"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["researchRegisterDesc"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["researchConsiderApprove"] = "การพิจารณา";
	$fieldToolTipsresearchconsiderappointment["Thai"]["researchConsiderApprove"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["researchConsiderApprove"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchconsiderappointment["Thai"]["entryUserName"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchconsiderappointment["Thai"]["entryTime"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["entryTime"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["researchRegisterID"] = "หมายเลขการรับสมัครขอรับทุน";
	$fieldToolTipsresearchconsiderappointment["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["researchRegisterID"] = "";
	$fieldLabelsresearchconsiderappointment["Thai"]["PROJECT_ID"] = "PROJECT ID";
	$fieldToolTipsresearchconsiderappointment["Thai"]["PROJECT_ID"] = "";
	$placeHoldersresearchconsiderappointment["Thai"]["PROJECT_ID"] = "";
	if (count($fieldToolTipsresearchconsiderappointment["Thai"]))
		$tdataresearchconsiderappointment[".isUseToolTips"] = true;
}


	$tdataresearchconsiderappointment[".NCSearch"] = true;



$tdataresearchconsiderappointment[".shortTableName"] = "researchconsiderappointment";
$tdataresearchconsiderappointment[".nSecOptions"] = 0;

$tdataresearchconsiderappointment[".mainTableOwnerID"] = "";
$tdataresearchconsiderappointment[".entityType"] = 1;
$tdataresearchconsiderappointment[".connId"] = "mc_at_192_168_1_111";


$tdataresearchconsiderappointment[".strOriginalTableName"] = "researchConsider";

	



$tdataresearchconsiderappointment[".showAddInPopup"] = false;

$tdataresearchconsiderappointment[".showEditInPopup"] = false;

$tdataresearchconsiderappointment[".showViewInPopup"] = false;

$tdataresearchconsiderappointment[".listAjax"] = false;
//	temporary
//$tdataresearchconsiderappointment[".listAjax"] = false;

	$tdataresearchconsiderappointment[".audit"] = false;

	$tdataresearchconsiderappointment[".locking"] = false;


$pages = $tdataresearchconsiderappointment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchconsiderappointment[".edit"] = true;
	$tdataresearchconsiderappointment[".afterEditAction"] = 1;
	$tdataresearchconsiderappointment[".closePopupAfterEdit"] = 1;
	$tdataresearchconsiderappointment[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchconsiderappointment[".add"] = true;
$tdataresearchconsiderappointment[".afterAddAction"] = 1;
$tdataresearchconsiderappointment[".closePopupAfterAdd"] = 1;
$tdataresearchconsiderappointment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchconsiderappointment[".list"] = true;
}



$tdataresearchconsiderappointment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchconsiderappointment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchconsiderappointment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchconsiderappointment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchconsiderappointment[".printFriendly"] = true;
}



$tdataresearchconsiderappointment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchconsiderappointment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchconsiderappointment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchconsiderappointment[".isUseAjaxSuggest"] = true;

$tdataresearchconsiderappointment[".rowHighlite"] = true;





$tdataresearchconsiderappointment[".ajaxCodeSnippetAdded"] = false;

$tdataresearchconsiderappointment[".buttonsAdded"] = false;

$tdataresearchconsiderappointment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchconsiderappointment[".isUseTimeForSearch"] = false;


$tdataresearchconsiderappointment[".badgeColor"] = "e8926f";


$tdataresearchconsiderappointment[".allSearchFields"] = array();
$tdataresearchconsiderappointment[".filterFields"] = array();
$tdataresearchconsiderappointment[".requiredSearchFields"] = array();

$tdataresearchconsiderappointment[".googleLikeFields"] = array();
$tdataresearchconsiderappointment[".googleLikeFields"][] = "id";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "researchRegisterID";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "PROJECT_ID";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "researchConsiderNumber";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "processName";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "stepName";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "researchConsiderFile";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "researchRegisterDesc";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "researchConsiderApprove";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "entryUserName";
$tdataresearchconsiderappointment[".googleLikeFields"][] = "entryTime";



$tdataresearchconsiderappointment[".tableType"] = "list";

$tdataresearchconsiderappointment[".printerPageOrientation"] = 0;
$tdataresearchconsiderappointment[".nPrinterPageScale"] = 100;

$tdataresearchconsiderappointment[".nPrinterSplitRecords"] = 40;

$tdataresearchconsiderappointment[".geocodingEnabled"] = false;










$tdataresearchconsiderappointment[".pageSize"] = 20;

$tdataresearchconsiderappointment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchconsiderappointment[".strOrderBy"] = $tstrOrderBy;

$tdataresearchconsiderappointment[".orderindexes"] = array();


$tdataresearchconsiderappointment[".sqlHead"] = "SELECT researchConsider.id,  researchConsider.researchRegisterID,  researchProject.id AS PROJECT_ID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderApprove,  researchConsider.entryUserName,  researchConsider.entryTime";
$tdataresearchconsiderappointment[".sqlFrom"] = "FROM researchConsider  INNER JOIN researchProject ON researchConsider.researchRegisterID = researchProject.researchRegisterID";
$tdataresearchconsiderappointment[".sqlWhereExpr"] = "(researchConsider.processName = 'นัดหมายและติดตามงาน')";
$tdataresearchconsiderappointment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchconsiderappointment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchconsiderappointment[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchconsiderappointment[".highlightSearchResults"] = true;

$tableKeysresearchconsiderappointment = array();
$tableKeysresearchconsiderappointment[] = "id";
$tdataresearchconsiderappointment[".Keys"] = $tableKeysresearchconsiderappointment;


$tdataresearchconsiderappointment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","id");
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


	$tdataresearchconsiderappointment["id"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","researchRegisterID");
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


	$tdataresearchconsiderappointment["researchRegisterID"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "researchRegisterID";
//	PROJECT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PROJECT_ID";
	$fdata["GoodName"] = "PROJECT_ID";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","PROJECT_ID");
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


	$tdataresearchconsiderappointment["PROJECT_ID"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "PROJECT_ID";
//	researchConsiderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchConsiderNumber";
	$fdata["GoodName"] = "researchConsiderNumber";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","researchConsiderNumber");
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


	$tdataresearchconsiderappointment["researchConsiderNumber"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "researchConsiderNumber";
//	processName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "processName";
	$fdata["GoodName"] = "processName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","processName");
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


	$tdataresearchconsiderappointment["processName"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "processName";
//	stepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stepName";
	$fdata["GoodName"] = "stepName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","stepName");
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


	$tdataresearchconsiderappointment["stepName"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "stepName";
//	researchConsiderFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchConsiderFile";
	$fdata["GoodName"] = "researchConsiderFile";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","researchConsiderFile");
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


	$tdataresearchconsiderappointment["researchConsiderFile"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "researchConsiderFile";
//	researchRegisterDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchRegisterDesc";
	$fdata["GoodName"] = "researchRegisterDesc";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","researchRegisterDesc");
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


	$tdataresearchconsiderappointment["researchRegisterDesc"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "researchRegisterDesc";
//	researchConsiderApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchConsiderApprove";
	$fdata["GoodName"] = "researchConsiderApprove";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","researchConsiderApprove");
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


	$tdataresearchconsiderappointment["researchConsiderApprove"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "researchConsiderApprove";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","entryUserName");
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


	$tdataresearchconsiderappointment["entryUserName"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchConsider";
	$fdata["Label"] = GetFieldLabel("researchConsiderAppointment","entryTime");
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


	$tdataresearchconsiderappointment["entryTime"] = $fdata;
		$tdataresearchconsiderappointment[".searchableFields"][] = "entryTime";


$tables_data["researchConsiderAppointment"]=&$tdataresearchconsiderappointment;
$field_labels["researchConsiderAppointment"] = &$fieldLabelsresearchconsiderappointment;
$fieldToolTips["researchConsiderAppointment"] = &$fieldToolTipsresearchconsiderappointment;
$placeHolders["researchConsiderAppointment"] = &$placeHoldersresearchconsiderappointment;
$page_titles["researchConsiderAppointment"] = &$pageTitlesresearchconsiderappointment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchConsiderAppointment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchConsiderAppointment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="researchAppointment";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="researchAppointment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "researchappointment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["researchConsiderAppointment"][0] = $masterParams;
				$masterTablesData["researchConsiderAppointment"][0]["masterKeys"] = array();
	$masterTablesData["researchConsiderAppointment"][0]["masterKeys"][]="researchProjectID";
				$masterTablesData["researchConsiderAppointment"][0]["detailKeys"] = array();
	$masterTablesData["researchConsiderAppointment"][0]["detailKeys"][]="researchRegisterID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchconsiderappointment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchConsider.id,  researchConsider.researchRegisterID,  researchProject.id AS PROJECT_ID,  researchConsider.researchConsiderNumber,  researchConsider.processName,  researchConsider.stepName,  researchConsider.researchConsiderFile,  researchConsider.researchRegisterDesc,  researchConsider.researchConsiderApprove,  researchConsider.entryUserName,  researchConsider.entryTime";
$proto0["m_strFrom"] = "FROM researchConsider  INNER JOIN researchProject ON researchConsider.researchRegisterID = researchProject.researchRegisterID";
$proto0["m_strWhere"] = "(researchConsider.processName = 'นัดหมายและติดตามงาน')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchConsider.processName = 'นัดหมายและติดตามงาน'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'นัดหมายและติดตามงาน'";
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
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto6["m_sql"] = "researchConsider.id";
$proto6["m_srcTableName"] = "researchConsiderAppointment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto8["m_sql"] = "researchConsider.researchRegisterID";
$proto8["m_srcTableName"] = "researchConsiderAppointment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto10["m_sql"] = "researchProject.id";
$proto10["m_srcTableName"] = "researchConsiderAppointment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "PROJECT_ID";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderNumber",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto12["m_sql"] = "researchConsider.researchConsiderNumber";
$proto12["m_srcTableName"] = "researchConsiderAppointment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "processName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto14["m_sql"] = "researchConsider.processName";
$proto14["m_srcTableName"] = "researchConsiderAppointment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stepName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto16["m_sql"] = "researchConsider.stepName";
$proto16["m_srcTableName"] = "researchConsiderAppointment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderFile",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto18["m_sql"] = "researchConsider.researchConsiderFile";
$proto18["m_srcTableName"] = "researchConsiderAppointment";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterDesc",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto20["m_sql"] = "researchConsider.researchRegisterDesc";
$proto20["m_srcTableName"] = "researchConsiderAppointment";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchConsiderApprove",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto22["m_sql"] = "researchConsider.researchConsiderApprove";
$proto22["m_srcTableName"] = "researchConsiderAppointment";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto24["m_sql"] = "researchConsider.entryUserName";
$proto24["m_srcTableName"] = "researchConsiderAppointment";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
));

$proto26["m_sql"] = "researchConsider.entryTime";
$proto26["m_srcTableName"] = "researchConsiderAppointment";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "researchConsider";
$proto29["m_srcTableName"] = "researchConsiderAppointment";
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
$proto28["m_srcTableName"] = "researchConsiderAppointment";
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
$proto33["m_srcTableName"] = "researchConsiderAppointment";
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
$proto32["m_srcTableName"] = "researchConsiderAppointment";
$proto34=array();
$proto34["m_sql"] = "researchConsider.researchRegisterID = researchProject.researchRegisterID";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchConsider",
	"m_srcTableName" => "researchConsiderAppointment"
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
$proto0["m_srcTableName"]="researchConsiderAppointment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchconsiderappointment = createSqlQuery_researchconsiderappointment();


	
				;

											

$tdataresearchconsiderappointment[".sqlquery"] = $queryData_researchconsiderappointment;



$tableEvents["researchConsiderAppointment"] = new eventsBase;
$tdataresearchconsiderappointment[".hasEvents"] = false;

?>