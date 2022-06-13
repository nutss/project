<?php
$tdataresearchproject = array();
$tdataresearchproject[".searchableFields"] = array();
$tdataresearchproject[".ShortName"] = "researchproject";
$tdataresearchproject[".OwnerID"] = "";
$tdataresearchproject[".OriginalTable"] = "researchProject";


$tdataresearchproject[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchproject[".originalPagesByType"] = $tdataresearchproject[".pagesByType"];
$tdataresearchproject[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchproject[".originalPages"] = $tdataresearchproject[".pages"];
$tdataresearchproject[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchproject[".originalDefaultPages"] = $tdataresearchproject[".defaultPages"];

//	field labels
$fieldLabelsresearchproject = array();
$fieldToolTipsresearchproject = array();
$pageTitlesresearchproject = array();
$placeHoldersresearchproject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchproject["English"] = array();
	$fieldToolTipsresearchproject["English"] = array();
	$placeHoldersresearchproject["English"] = array();
	$pageTitlesresearchproject["English"] = array();
	$fieldLabelsresearchproject["English"]["id"] = "ID";
	$fieldToolTipsresearchproject["English"]["id"] = "";
	$placeHoldersresearchproject["English"]["id"] = "";
	$fieldLabelsresearchproject["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchproject["English"]["researchRegisterID"] = "";
	$placeHoldersresearchproject["English"]["researchRegisterID"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectNo"] = "Research Project No";
	$fieldToolTipsresearchproject["English"]["researchProjectNo"] = "";
	$placeHoldersresearchproject["English"]["researchProjectNo"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldToolTipsresearchproject["English"]["researchProjectGroupName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldToolTipsresearchproject["English"]["researchProjectNameThai"] = "";
	$placeHoldersresearchproject["English"]["researchProjectNameThai"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldToolTipsresearchproject["English"]["researchProjectNameEng"] = "";
	$placeHoldersresearchproject["English"]["researchProjectNameEng"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldToolTipsresearchproject["English"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchproject["English"]["researchProjectPeriodYear"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldToolTipsresearchproject["English"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchproject["English"]["researchProjectPeriodMonth"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldToolTipsresearchproject["English"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchproject["English"]["researchProjectRequestedBudget"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldToolTipsresearchproject["English"]["researchProjectDepartment"] = "";
	$placeHoldersresearchproject["English"]["researchProjectDepartment"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldToolTipsresearchproject["English"]["researchProjectMainField"] = "";
	$placeHoldersresearchproject["English"]["researchProjectMainField"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldToolTipsresearchproject["English"]["researchProjectSubField"] = "";
	$placeHoldersresearchproject["English"]["researchProjectSubField"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldToolTipsresearchproject["English"]["researchProjectHeadName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectHeadName"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearchproject["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearchproject["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearchproject["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchproject["English"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearchproject["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchproject["English"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearchproject["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchproject["English"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectFile"] = "Research Project File";
	$fieldToolTipsresearchproject["English"]["researchProjectFile"] = "";
	$placeHoldersresearchproject["English"]["researchProjectFile"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldToolTipsresearchproject["English"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectBankAccountName"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldToolTipsresearchproject["English"]["researchProjectBankNo"] = "";
	$placeHoldersresearchproject["English"]["researchProjectBankNo"] = "";
	$fieldLabelsresearchproject["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldToolTipsresearchproject["English"]["researchProjectBankName"] = "";
	$placeHoldersresearchproject["English"]["researchProjectBankName"] = "";
	$fieldLabelsresearchproject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchproject["English"]["entryUserName"] = "";
	$placeHoldersresearchproject["English"]["entryUserName"] = "";
	$fieldLabelsresearchproject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchproject["English"]["entryTime"] = "";
	$placeHoldersresearchproject["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchproject["English"]))
		$tdataresearchproject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchproject["Thai"] = array();
	$fieldToolTipsresearchproject["Thai"] = array();
	$placeHoldersresearchproject["Thai"] = array();
	$pageTitlesresearchproject["Thai"] = array();
	$fieldLabelsresearchproject["Thai"]["id"] = "ID";
	$fieldToolTipsresearchproject["Thai"]["id"] = "";
	$placeHoldersresearchproject["Thai"]["id"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldToolTipsresearchproject["Thai"]["researchProjectNo"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectNo"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldToolTipsresearchproject["Thai"]["researchProjectGroupName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectNameThai"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectNameThai"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectNameEng"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectNameEng"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectPeriodYear"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectPeriodMonth"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ";
	$fieldToolTipsresearchproject["Thai"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectRequestedBudget"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldToolTipsresearchproject["Thai"]["researchProjectDepartment"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectDepartment"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldToolTipsresearchproject["Thai"]["researchProjectMainField"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectMainField"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldToolTipsresearchproject["Thai"]["researchProjectSubField"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectSubField"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectHeadName"] = "ชื่อหัวหน้าเสนอโครงการ";
	$fieldToolTipsresearchproject["Thai"]["researchProjectHeadName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectHeadName"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchproject["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearchproject["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearchproject["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearchproject["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldToolTipsresearchproject["Thai"]["researchProjectFile"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectFile"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldToolTipsresearchproject["Thai"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectBankAccountName"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldToolTipsresearchproject["Thai"]["researchProjectBankNo"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectBankNo"] = "";
	$fieldLabelsresearchproject["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldToolTipsresearchproject["Thai"]["researchProjectBankName"] = "";
	$placeHoldersresearchproject["Thai"]["researchProjectBankName"] = "";
	$fieldLabelsresearchproject["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchproject["Thai"]["entryUserName"] = "";
	$placeHoldersresearchproject["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchproject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchproject["Thai"]["entryTime"] = "";
	$placeHoldersresearchproject["Thai"]["entryTime"] = "";
	$fieldLabelsresearchproject["Thai"]["researchRegisterID"] = "ชื่อโครงการ (การรับสมัคร)";
	$fieldToolTipsresearchproject["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchproject["Thai"]["researchRegisterID"] = "";
	if (count($fieldToolTipsresearchproject["Thai"]))
		$tdataresearchproject[".isUseToolTips"] = true;
}


	$tdataresearchproject[".NCSearch"] = true;



$tdataresearchproject[".shortTableName"] = "researchproject";
$tdataresearchproject[".nSecOptions"] = 0;

$tdataresearchproject[".mainTableOwnerID"] = "";
$tdataresearchproject[".entityType"] = 0;
$tdataresearchproject[".connId"] = "mc_at_192_168_1_111";


$tdataresearchproject[".strOriginalTableName"] = "researchProject";

	



$tdataresearchproject[".showAddInPopup"] = false;

$tdataresearchproject[".showEditInPopup"] = false;

$tdataresearchproject[".showViewInPopup"] = false;

$tdataresearchproject[".listAjax"] = false;
//	temporary
//$tdataresearchproject[".listAjax"] = false;

	$tdataresearchproject[".audit"] = false;

	$tdataresearchproject[".locking"] = false;


$pages = $tdataresearchproject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchproject[".edit"] = true;
	$tdataresearchproject[".afterEditAction"] = 1;
	$tdataresearchproject[".closePopupAfterEdit"] = 1;
	$tdataresearchproject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchproject[".add"] = true;
$tdataresearchproject[".afterAddAction"] = 1;
$tdataresearchproject[".closePopupAfterAdd"] = 1;
$tdataresearchproject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchproject[".list"] = true;
}



$tdataresearchproject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchproject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchproject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchproject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchproject[".printFriendly"] = true;
}



$tdataresearchproject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchproject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchproject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchproject[".isUseAjaxSuggest"] = true;

$tdataresearchproject[".rowHighlite"] = true;





$tdataresearchproject[".ajaxCodeSnippetAdded"] = false;

$tdataresearchproject[".buttonsAdded"] = false;

$tdataresearchproject[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchproject[".isUseTimeForSearch"] = false;


$tdataresearchproject[".badgeColor"] = "B22222";


$tdataresearchproject[".allSearchFields"] = array();
$tdataresearchproject[".filterFields"] = array();
$tdataresearchproject[".requiredSearchFields"] = array();

$tdataresearchproject[".googleLikeFields"] = array();
$tdataresearchproject[".googleLikeFields"][] = "id";
$tdataresearchproject[".googleLikeFields"][] = "researchRegisterID";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectNo";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectGroupName";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectNameThai";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectNameEng";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectPeriodYear";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectPeriodMonth";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectRequestedBudget";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectDepartment";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectMainField";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectSubField";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectHeadName";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectFile";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectBankAccountName";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectBankNo";
$tdataresearchproject[".googleLikeFields"][] = "researchProjectBankName";
$tdataresearchproject[".googleLikeFields"][] = "entryUserName";
$tdataresearchproject[".googleLikeFields"][] = "entryTime";



$tdataresearchproject[".tableType"] = "list";

$tdataresearchproject[".printerPageOrientation"] = 0;
$tdataresearchproject[".nPrinterPageScale"] = 100;

$tdataresearchproject[".nPrinterSplitRecords"] = 40;

$tdataresearchproject[".geocodingEnabled"] = false;










$tdataresearchproject[".pageSize"] = 20;

$tdataresearchproject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchproject[".strOrderBy"] = $tstrOrderBy;

$tdataresearchproject[".orderindexes"] = array();


$tdataresearchproject[".sqlHead"] = "SELECT id,  	researchRegisterID,  	researchProjectNo,  	researchProjectGroupName,  	researchProjectNameThai,  	researchProjectNameEng,  	researchProjectPeriodYear,  	researchProjectPeriodMonth,  	researchProjectRequestedBudget,  	researchProjectDepartment,  	researchProjectMainField,  	researchProjectSubField,  	researchProjectHeadName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	researchProjectFile,  	researchProjectBankAccountName,  	researchProjectBankNo,  	researchProjectBankName,  	entryUserName,  	entryTime";
$tdataresearchproject[".sqlFrom"] = "FROM researchProject";
$tdataresearchproject[".sqlWhereExpr"] = "";
$tdataresearchproject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchproject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchproject[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchproject[".highlightSearchResults"] = true;

$tableKeysresearchproject = array();
$tableKeysresearchproject[] = "id";
$tdataresearchproject[".Keys"] = $tableKeysresearchproject;


$tdataresearchproject[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","id");
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


	$tdataresearchproject["id"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchRegisterID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRegisterID";

		$fdata["sourceSingle"] = "researchRegisterID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchRegisterID";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "researchRegister";
	$edata["LookupConnId"] = "mc_at_192_168_1_111";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchRegisterName";

	

	
	$edata["LookupOrderBy"] = "researchRegisterName";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataresearchproject["researchRegisterID"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchRegisterID";
//	researchProjectNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectNo";
	$fdata["GoodName"] = "researchProjectNo";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNo";

		$fdata["sourceSingle"] = "researchProjectNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectNo";

	
	
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


	$tdataresearchproject["researchProjectNo"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectNo";
//	researchProjectGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchProjectGroupName";
	$fdata["GoodName"] = "researchProjectGroupName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectGroupName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectGroupName";

		$fdata["sourceSingle"] = "researchProjectGroupName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectGroupName";

	
	
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
	$edata["LookupTable"] = "researchProjectGroup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "researchProjectGroupName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchProjectGroupName";

	

	
	$edata["LookupOrderBy"] = "researchProjectGroupName";

	
	
	
	

	
	
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


	$tdataresearchproject["researchProjectGroupName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectGroupName";
//	researchProjectNameThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectNameThai";
	$fdata["GoodName"] = "researchProjectNameThai";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectNameThai");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameThai";

		$fdata["sourceSingle"] = "researchProjectNameThai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectNameThai";

	
	
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


	$tdataresearchproject["researchProjectNameThai"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectNameThai";
//	researchProjectNameEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectNameEng";
	$fdata["GoodName"] = "researchProjectNameEng";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectNameEng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameEng";

		$fdata["sourceSingle"] = "researchProjectNameEng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectNameEng";

	
	
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


	$tdataresearchproject["researchProjectNameEng"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectNameEng";
//	researchProjectPeriodYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectPeriodYear";
	$fdata["GoodName"] = "researchProjectPeriodYear";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectPeriodYear");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "researchProjectPeriodYear";

		$fdata["sourceSingle"] = "researchProjectPeriodYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectPeriodYear";

	
	
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


	$tdataresearchproject["researchProjectPeriodYear"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectPeriodYear";
//	researchProjectPeriodMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectPeriodMonth";
	$fdata["GoodName"] = "researchProjectPeriodMonth";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectPeriodMonth");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "researchProjectPeriodMonth";

		$fdata["sourceSingle"] = "researchProjectPeriodMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectPeriodMonth";

	
	
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


	$tdataresearchproject["researchProjectPeriodMonth"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectPeriodMonth";
//	researchProjectRequestedBudget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectRequestedBudget";
	$fdata["GoodName"] = "researchProjectRequestedBudget";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectRequestedBudget");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "researchProjectRequestedBudget";

		$fdata["sourceSingle"] = "researchProjectRequestedBudget";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectRequestedBudget";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataresearchproject["researchProjectRequestedBudget"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectRequestedBudget";
//	researchProjectDepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectDepartment";
	$fdata["GoodName"] = "researchProjectDepartment";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectDepartment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDepartment";

		$fdata["sourceSingle"] = "researchProjectDepartment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectDepartment";

	
	
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


	$tdataresearchproject["researchProjectDepartment"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectDepartment";
//	researchProjectMainField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchProjectMainField";
	$fdata["GoodName"] = "researchProjectMainField";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectMainField");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectMainField";

		$fdata["sourceSingle"] = "researchProjectMainField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectMainField";

	
	
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


	$tdataresearchproject["researchProjectMainField"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectMainField";
//	researchProjectSubField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "researchProjectSubField";
	$fdata["GoodName"] = "researchProjectSubField";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectSubField");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectSubField";

		$fdata["sourceSingle"] = "researchProjectSubField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectSubField";

	
	
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


	$tdataresearchproject["researchProjectSubField"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectSubField";
//	researchProjectHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "researchProjectHeadName";
	$fdata["GoodName"] = "researchProjectHeadName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectHeadName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectHeadName";

		$fdata["sourceSingle"] = "researchProjectHeadName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectHeadName";

	
	
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


	$tdataresearchproject["researchProjectHeadName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectHeadName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationName";

		$fdata["sourceSingle"] = "researchProjectAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationName";

	
	
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


	$tdataresearchproject["researchProjectAffiliationName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectSubAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectSubAffiliationName";

		$fdata["sourceSingle"] = "researchProjectSubAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectSubAffiliationName";

	
	
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


	$tdataresearchproject["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectAffiliationMobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationMobile";

		$fdata["sourceSingle"] = "researchProjectAffiliationMobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationMobile";

	
	
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


	$tdataresearchproject["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectAffiliationTelephone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationTelephone";

		$fdata["sourceSingle"] = "researchProjectAffiliationTelephone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationTelephone";

	
	
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


	$tdataresearchproject["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectAffiliationEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationEmail";

		$fdata["sourceSingle"] = "researchProjectAffiliationEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectAffiliationEmail";

	
	
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


	$tdataresearchproject["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectAffiliationEmail";
//	researchProjectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "researchProjectFile";
	$fdata["GoodName"] = "researchProjectFile";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchProjectFile";

		$fdata["sourceSingle"] = "researchProjectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectFile";

	
	
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


	$tdataresearchproject["researchProjectFile"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectFile";
//	researchProjectBankAccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "researchProjectBankAccountName";
	$fdata["GoodName"] = "researchProjectBankAccountName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectBankAccountName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankAccountName";

		$fdata["sourceSingle"] = "researchProjectBankAccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectBankAccountName";

	
	
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


	$tdataresearchproject["researchProjectBankAccountName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectBankAccountName";
//	researchProjectBankNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "researchProjectBankNo";
	$fdata["GoodName"] = "researchProjectBankNo";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectBankNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankNo";

		$fdata["sourceSingle"] = "researchProjectBankNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectBankNo";

	
	
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


	$tdataresearchproject["researchProjectBankNo"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectBankNo";
//	researchProjectBankName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "researchProjectBankName";
	$fdata["GoodName"] = "researchProjectBankName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","researchProjectBankName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankName";

		$fdata["sourceSingle"] = "researchProjectBankName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchProjectBankName";

	
	
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


	$tdataresearchproject["researchProjectBankName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "researchProjectBankName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","entryUserName");
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


	$tdataresearchproject["entryUserName"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchProject";
	$fdata["Label"] = GetFieldLabel("researchProject","entryTime");
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


	$tdataresearchproject["entryTime"] = $fdata;
		$tdataresearchproject[".searchableFields"][] = "entryTime";


$tables_data["researchProject"]=&$tdataresearchproject;
$field_labels["researchProject"] = &$fieldLabelsresearchproject;
$fieldToolTips["researchProject"] = &$fieldToolTipsresearchproject;
$placeHolders["researchProject"] = &$placeHoldersresearchproject;
$page_titles["researchProject"] = &$pageTitlesresearchproject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchproject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchRegisterID,  	researchProjectNo,  	researchProjectGroupName,  	researchProjectNameThai,  	researchProjectNameEng,  	researchProjectPeriodYear,  	researchProjectPeriodMonth,  	researchProjectRequestedBudget,  	researchProjectDepartment,  	researchProjectMainField,  	researchProjectSubField,  	researchProjectHeadName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	researchProjectFile,  	researchProjectBankAccountName,  	researchProjectBankNo,  	researchProjectBankName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchProject";
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
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto8["m_sql"] = "researchRegisterID";
$proto8["m_srcTableName"] = "researchProject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNo",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto10["m_sql"] = "researchProjectNo";
$proto10["m_srcTableName"] = "researchProject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectGroupName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto12["m_sql"] = "researchProjectGroupName";
$proto12["m_srcTableName"] = "researchProject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameThai",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto14["m_sql"] = "researchProjectNameThai";
$proto14["m_srcTableName"] = "researchProject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameEng",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto16["m_sql"] = "researchProjectNameEng";
$proto16["m_srcTableName"] = "researchProject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodYear",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto18["m_sql"] = "researchProjectPeriodYear";
$proto18["m_srcTableName"] = "researchProject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodMonth",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto20["m_sql"] = "researchProjectPeriodMonth";
$proto20["m_srcTableName"] = "researchProject";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectRequestedBudget",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto22["m_sql"] = "researchProjectRequestedBudget";
$proto22["m_srcTableName"] = "researchProject";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDepartment",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto24["m_sql"] = "researchProjectDepartment";
$proto24["m_srcTableName"] = "researchProject";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectMainField",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto26["m_sql"] = "researchProjectMainField";
$proto26["m_srcTableName"] = "researchProject";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubField",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto28["m_sql"] = "researchProjectSubField";
$proto28["m_srcTableName"] = "researchProject";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectHeadName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto30["m_sql"] = "researchProjectHeadName";
$proto30["m_srcTableName"] = "researchProject";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto32["m_sql"] = "researchProjectAffiliationName";
$proto32["m_srcTableName"] = "researchProject";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto34["m_sql"] = "researchProjectSubAffiliationName";
$proto34["m_srcTableName"] = "researchProject";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto36["m_sql"] = "researchProjectAffiliationMobile";
$proto36["m_srcTableName"] = "researchProject";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto38["m_sql"] = "researchProjectAffiliationTelephone";
$proto38["m_srcTableName"] = "researchProject";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto40["m_sql"] = "researchProjectAffiliationEmail";
$proto40["m_srcTableName"] = "researchProject";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectFile",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto42["m_sql"] = "researchProjectFile";
$proto42["m_srcTableName"] = "researchProject";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankAccountName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto44["m_sql"] = "researchProjectBankAccountName";
$proto44["m_srcTableName"] = "researchProject";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankNo",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto46["m_sql"] = "researchProjectBankNo";
$proto46["m_srcTableName"] = "researchProject";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto48["m_sql"] = "researchProjectBankName";
$proto48["m_srcTableName"] = "researchProject";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto50["m_sql"] = "entryUserName";
$proto50["m_srcTableName"] = "researchProject";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchProject",
	"m_srcTableName" => "researchProject"
));

$proto52["m_sql"] = "entryTime";
$proto52["m_srcTableName"] = "researchProject";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "researchProject";
$proto55["m_srcTableName"] = "researchProject";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "researchRegisterID";
$proto55["m_columns"][] = "researchProjectNo";
$proto55["m_columns"][] = "researchProjectGroupName";
$proto55["m_columns"][] = "researchProjectNameThai";
$proto55["m_columns"][] = "researchProjectNameEng";
$proto55["m_columns"][] = "researchProjectPeriodYear";
$proto55["m_columns"][] = "researchProjectPeriodMonth";
$proto55["m_columns"][] = "researchProjectRequestedBudget";
$proto55["m_columns"][] = "researchProjectDepartment";
$proto55["m_columns"][] = "researchProjectMainField";
$proto55["m_columns"][] = "researchProjectSubField";
$proto55["m_columns"][] = "researchProjectHeadName";
$proto55["m_columns"][] = "researchProjectAffiliationName";
$proto55["m_columns"][] = "researchProjectSubAffiliationName";
$proto55["m_columns"][] = "researchProjectAffiliationMobile";
$proto55["m_columns"][] = "researchProjectAffiliationTelephone";
$proto55["m_columns"][] = "researchProjectAffiliationEmail";
$proto55["m_columns"][] = "researchProjectFile";
$proto55["m_columns"][] = "researchProjectBankAccountName";
$proto55["m_columns"][] = "researchProjectBankNo";
$proto55["m_columns"][] = "researchProjectBankName";
$proto55["m_columns"][] = "entryUserName";
$proto55["m_columns"][] = "entryTime";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "researchProject";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "researchProject";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchProject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchproject = createSqlQuery_researchproject();


	
				;

																								

$tdataresearchproject[".sqlquery"] = $queryData_researchproject;



$tableEvents["researchProject"] = new eventsBase;
$tdataresearchproject[".hasEvents"] = false;

?>