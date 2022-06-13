<?php
$tdataresearchprojectproposal = array();
$tdataresearchprojectproposal[".searchableFields"] = array();
$tdataresearchprojectproposal[".ShortName"] = "researchprojectproposal";
$tdataresearchprojectproposal[".OwnerID"] = "";
$tdataresearchprojectproposal[".OriginalTable"] = "researchScholarshipProposal";


$tdataresearchprojectproposal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchprojectproposal[".originalPagesByType"] = $tdataresearchprojectproposal[".pagesByType"];
$tdataresearchprojectproposal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchprojectproposal[".originalPages"] = $tdataresearchprojectproposal[".pages"];
$tdataresearchprojectproposal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchprojectproposal[".originalDefaultPages"] = $tdataresearchprojectproposal[".defaultPages"];

//	field labels
$fieldLabelsresearchprojectproposal = array();
$fieldToolTipsresearchprojectproposal = array();
$pageTitlesresearchprojectproposal = array();
$placeHoldersresearchprojectproposal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchprojectproposal["English"] = array();
	$fieldToolTipsresearchprojectproposal["English"] = array();
	$placeHoldersresearchprojectproposal["English"] = array();
	$pageTitlesresearchprojectproposal["English"] = array();
	$fieldLabelsresearchprojectproposal["English"]["id"] = "ID";
	$fieldToolTipsresearchprojectproposal["English"]["id"] = "";
	$placeHoldersresearchprojectproposal["English"]["id"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchprojectproposal["English"]["researchRegisterID"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchRegisterID"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNo"] = "Research Project No";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNo"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNo"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNameThai"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNameThai"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNameEng"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNameEng"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectPeriodYear"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectDepartment"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectDepartment"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectMainField"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectMainField"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectSubField"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectSubField"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectHeadName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectHeadName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectFile"] = "Research Project File";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectFile"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectFile"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankAccountName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankNo"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankNo"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectproposal["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectproposal["English"]["entryUserName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectproposal["English"]["entryTime"] = "";
	$placeHoldersresearchprojectproposal["English"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectproposal["English"]))
		$tdataresearchprojectproposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchprojectproposal["Thai"] = array();
	$fieldToolTipsresearchprojectproposal["Thai"] = array();
	$placeHoldersresearchprojectproposal["Thai"] = array();
	$pageTitlesresearchprojectproposal["Thai"] = array();
	$fieldLabelsresearchprojectproposal["Thai"]["id"] = "ID";
	$fieldToolTipsresearchprojectproposal["Thai"]["id"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["id"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchRegisterID"] = "ชื่อโครงการ (การรับสมัครขอรับทุนวิจัย)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchRegisterID"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNo"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNo"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectGroupName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNameThai"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNameThai"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNameEng"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNameEng"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectDepartment"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectDepartment"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectMainField"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectMainField"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectSubField"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectSubField"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectHeadName"] = "ชื่อหัวหน้าเสนอโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectHeadName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectHeadName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectFile"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectFile"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankNo"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankNo"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["entryUserName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsresearchprojectproposal["Thai"]))
		$tdataresearchprojectproposal[".isUseToolTips"] = true;
}


	$tdataresearchprojectproposal[".NCSearch"] = true;



$tdataresearchprojectproposal[".shortTableName"] = "researchprojectproposal";
$tdataresearchprojectproposal[".nSecOptions"] = 0;

$tdataresearchprojectproposal[".mainTableOwnerID"] = "";
$tdataresearchprojectproposal[".entityType"] = 1;
$tdataresearchprojectproposal[".connId"] = "mc_at_192_168_1_111";


$tdataresearchprojectproposal[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdataresearchprojectproposal[".showAddInPopup"] = false;

$tdataresearchprojectproposal[".showEditInPopup"] = false;

$tdataresearchprojectproposal[".showViewInPopup"] = false;

$tdataresearchprojectproposal[".listAjax"] = false;
//	temporary
//$tdataresearchprojectproposal[".listAjax"] = false;

	$tdataresearchprojectproposal[".audit"] = false;

	$tdataresearchprojectproposal[".locking"] = false;


$pages = $tdataresearchprojectproposal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchprojectproposal[".edit"] = true;
	$tdataresearchprojectproposal[".afterEditAction"] = 1;
	$tdataresearchprojectproposal[".closePopupAfterEdit"] = 1;
	$tdataresearchprojectproposal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchprojectproposal[".add"] = true;
$tdataresearchprojectproposal[".afterAddAction"] = 1;
$tdataresearchprojectproposal[".closePopupAfterAdd"] = 1;
$tdataresearchprojectproposal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchprojectproposal[".list"] = true;
}



$tdataresearchprojectproposal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchprojectproposal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchprojectproposal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchprojectproposal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchprojectproposal[".printFriendly"] = true;
}



$tdataresearchprojectproposal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchprojectproposal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchprojectproposal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchprojectproposal[".isUseAjaxSuggest"] = true;

$tdataresearchprojectproposal[".rowHighlite"] = true;





$tdataresearchprojectproposal[".ajaxCodeSnippetAdded"] = false;

$tdataresearchprojectproposal[".buttonsAdded"] = false;

$tdataresearchprojectproposal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearchprojectproposal[".isUseTimeForSearch"] = false;


$tdataresearchprojectproposal[".badgeColor"] = "8fbc8b";


$tdataresearchprojectproposal[".allSearchFields"] = array();
$tdataresearchprojectproposal[".filterFields"] = array();
$tdataresearchprojectproposal[".requiredSearchFields"] = array();

$tdataresearchprojectproposal[".googleLikeFields"] = array();
$tdataresearchprojectproposal[".googleLikeFields"][] = "id";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchRegisterID";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectNo";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectGroupName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectNameThai";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectNameEng";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectPeriodYear";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectPeriodMonth";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectRequestedBudget";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectDepartment";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectMainField";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectSubField";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectHeadName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectFile";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankAccountName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankNo";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "entryUserName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "entryTime";



$tdataresearchprojectproposal[".tableType"] = "list";

$tdataresearchprojectproposal[".printerPageOrientation"] = 0;
$tdataresearchprojectproposal[".nPrinterPageScale"] = 100;

$tdataresearchprojectproposal[".nPrinterSplitRecords"] = 40;

$tdataresearchprojectproposal[".geocodingEnabled"] = false;










$tdataresearchprojectproposal[".pageSize"] = 20;

$tdataresearchprojectproposal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchprojectproposal[".strOrderBy"] = $tstrOrderBy;

$tdataresearchprojectproposal[".orderindexes"] = array();


$tdataresearchprojectproposal[".sqlHead"] = "SELECT id,  	researchRegisterID,  	researchProjectNo,  	researchProjectGroupName,  	researchProjectNameThai,  	researchProjectNameEng,  	researchProjectPeriodYear,  	researchProjectPeriodMonth,  	researchProjectRequestedBudget,  	researchProjectDepartment,  	researchProjectMainField,  	researchProjectSubField,  	researchProjectHeadName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	researchProjectFile,  	researchProjectBankAccountName,  	researchProjectBankNo,  	researchProjectBankName,  	entryUserName,  	entryTime";
$tdataresearchprojectproposal[".sqlFrom"] = "FROM researchScholarshipProposal";
$tdataresearchprojectproposal[".sqlWhereExpr"] = "";
$tdataresearchprojectproposal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchprojectproposal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchprojectproposal[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchprojectproposal[".highlightSearchResults"] = true;

$tableKeysresearchprojectproposal = array();
$tableKeysresearchprojectproposal[] = "id";
$tdataresearchprojectproposal[".Keys"] = $tableKeysresearchprojectproposal;


$tdataresearchprojectproposal[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","id");
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


	$tdataresearchprojectproposal["id"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchRegisterID");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchScholarshipRegister";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchRegisterName";

	

	
	$edata["LookupOrderBy"] = "researchRegisterName";

	
	
	
	

	
	
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


	$tdataresearchprojectproposal["researchRegisterID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchRegisterID";
//	researchProjectNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectNo";
	$fdata["GoodName"] = "researchProjectNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNo");
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


	$tdataresearchprojectproposal["researchProjectNo"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNo";
//	researchProjectGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchProjectGroupName";
	$fdata["GoodName"] = "researchProjectGroupName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectGroupName");
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


	$tdataresearchprojectproposal["researchProjectGroupName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectGroupName";
//	researchProjectNameThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectNameThai";
	$fdata["GoodName"] = "researchProjectNameThai";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNameThai");
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


	$tdataresearchprojectproposal["researchProjectNameThai"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNameThai";
//	researchProjectNameEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectNameEng";
	$fdata["GoodName"] = "researchProjectNameEng";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNameEng");
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


	$tdataresearchprojectproposal["researchProjectNameEng"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNameEng";
//	researchProjectPeriodYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectPeriodYear";
	$fdata["GoodName"] = "researchProjectPeriodYear";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectPeriodYear");
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


	$tdataresearchprojectproposal["researchProjectPeriodYear"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectPeriodYear";
//	researchProjectPeriodMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectPeriodMonth";
	$fdata["GoodName"] = "researchProjectPeriodMonth";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectPeriodMonth");
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


	$tdataresearchprojectproposal["researchProjectPeriodMonth"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectPeriodMonth";
//	researchProjectRequestedBudget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectRequestedBudget";
	$fdata["GoodName"] = "researchProjectRequestedBudget";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectRequestedBudget");
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


	$tdataresearchprojectproposal["researchProjectRequestedBudget"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectRequestedBudget";
//	researchProjectDepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectDepartment";
	$fdata["GoodName"] = "researchProjectDepartment";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectDepartment");
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


	$tdataresearchprojectproposal["researchProjectDepartment"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectDepartment";
//	researchProjectMainField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchProjectMainField";
	$fdata["GoodName"] = "researchProjectMainField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectMainField");
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


	$tdataresearchprojectproposal["researchProjectMainField"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectMainField";
//	researchProjectSubField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "researchProjectSubField";
	$fdata["GoodName"] = "researchProjectSubField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectSubField");
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


	$tdataresearchprojectproposal["researchProjectSubField"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectSubField";
//	researchProjectHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "researchProjectHeadName";
	$fdata["GoodName"] = "researchProjectHeadName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectHeadName");
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


	$tdataresearchprojectproposal["researchProjectHeadName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectHeadName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationName");
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


	$tdataresearchprojectproposal["researchProjectAffiliationName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectSubAffiliationName");
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


	$tdataresearchprojectproposal["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationMobile");
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


	$tdataresearchprojectproposal["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationTelephone");
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


	$tdataresearchprojectproposal["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationEmail");
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


	$tdataresearchprojectproposal["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationEmail";
//	researchProjectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "researchProjectFile";
	$fdata["GoodName"] = "researchProjectFile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectFile");
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


	$tdataresearchprojectproposal["researchProjectFile"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectFile";
//	researchProjectBankAccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "researchProjectBankAccountName";
	$fdata["GoodName"] = "researchProjectBankAccountName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankAccountName");
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


	$tdataresearchprojectproposal["researchProjectBankAccountName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankAccountName";
//	researchProjectBankNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "researchProjectBankNo";
	$fdata["GoodName"] = "researchProjectBankNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankNo");
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


	$tdataresearchprojectproposal["researchProjectBankNo"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankNo";
//	researchProjectBankName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "researchProjectBankName";
	$fdata["GoodName"] = "researchProjectBankName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankName");
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


	$tdataresearchprojectproposal["researchProjectBankName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","entryUserName");
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


	$tdataresearchprojectproposal["entryUserName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","entryTime");
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


	$tdataresearchprojectproposal["entryTime"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "entryTime";


$tables_data["researchProjectProposal"]=&$tdataresearchprojectproposal;
$field_labels["researchProjectProposal"] = &$fieldLabelsresearchprojectproposal;
$fieldToolTips["researchProjectProposal"] = &$fieldToolTipsresearchprojectproposal;
$placeHolders["researchProjectProposal"] = &$placeHoldersresearchprojectproposal;
$page_titles["researchProjectProposal"] = &$pageTitlesresearchprojectproposal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchProjectProposal"] = array();
//	researchDisburse
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchDisburse";
		$detailsParam["dOriginalTable"] = "researchOperatingPeriod";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchdisburse";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchDisburse");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProjectProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//	researchAppointment
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchAppointment";
		$detailsParam["dOriginalTable"] = "researchAppointment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchappointment";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchAppointment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProjectProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//	researchRenewal
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchRenewal";
		$detailsParam["dOriginalTable"] = "researchRenewal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchrenewal";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchRenewal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProjectProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//	researchPeriod
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchPeriod";
		$detailsParam["dOriginalTable"] = "researchOperatingPeriod";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchperiod";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchPeriod");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProjectProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectProposal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectproposal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	researchRegisterID,  	researchProjectNo,  	researchProjectGroupName,  	researchProjectNameThai,  	researchProjectNameEng,  	researchProjectPeriodYear,  	researchProjectPeriodMonth,  	researchProjectRequestedBudget,  	researchProjectDepartment,  	researchProjectMainField,  	researchProjectSubField,  	researchProjectHeadName,  	researchProjectAffiliationName,  	researchProjectSubAffiliationName,  	researchProjectAffiliationMobile,  	researchProjectAffiliationTelephone,  	researchProjectAffiliationEmail,  	researchProjectFile,  	researchProjectBankAccountName,  	researchProjectBankNo,  	researchProjectBankName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal";
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
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "researchProjectProposal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto8["m_sql"] = "researchRegisterID";
$proto8["m_srcTableName"] = "researchProjectProposal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto10["m_sql"] = "researchProjectNo";
$proto10["m_srcTableName"] = "researchProjectProposal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectGroupName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto12["m_sql"] = "researchProjectGroupName";
$proto12["m_srcTableName"] = "researchProjectProposal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameThai",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto14["m_sql"] = "researchProjectNameThai";
$proto14["m_srcTableName"] = "researchProjectProposal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameEng",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto16["m_sql"] = "researchProjectNameEng";
$proto16["m_srcTableName"] = "researchProjectProposal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodYear",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto18["m_sql"] = "researchProjectPeriodYear";
$proto18["m_srcTableName"] = "researchProjectProposal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodMonth",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto20["m_sql"] = "researchProjectPeriodMonth";
$proto20["m_srcTableName"] = "researchProjectProposal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectRequestedBudget",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto22["m_sql"] = "researchProjectRequestedBudget";
$proto22["m_srcTableName"] = "researchProjectProposal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDepartment",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto24["m_sql"] = "researchProjectDepartment";
$proto24["m_srcTableName"] = "researchProjectProposal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectMainField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto26["m_sql"] = "researchProjectMainField";
$proto26["m_srcTableName"] = "researchProjectProposal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto28["m_sql"] = "researchProjectSubField";
$proto28["m_srcTableName"] = "researchProjectProposal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectHeadName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto30["m_sql"] = "researchProjectHeadName";
$proto30["m_srcTableName"] = "researchProjectProposal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto32["m_sql"] = "researchProjectAffiliationName";
$proto32["m_srcTableName"] = "researchProjectProposal";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto34["m_sql"] = "researchProjectSubAffiliationName";
$proto34["m_srcTableName"] = "researchProjectProposal";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto36["m_sql"] = "researchProjectAffiliationMobile";
$proto36["m_srcTableName"] = "researchProjectProposal";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto38["m_sql"] = "researchProjectAffiliationTelephone";
$proto38["m_srcTableName"] = "researchProjectProposal";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto40["m_sql"] = "researchProjectAffiliationEmail";
$proto40["m_srcTableName"] = "researchProjectProposal";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectFile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto42["m_sql"] = "researchProjectFile";
$proto42["m_srcTableName"] = "researchProjectProposal";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankAccountName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto44["m_sql"] = "researchProjectBankAccountName";
$proto44["m_srcTableName"] = "researchProjectProposal";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto46["m_sql"] = "researchProjectBankNo";
$proto46["m_srcTableName"] = "researchProjectProposal";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto48["m_sql"] = "researchProjectBankName";
$proto48["m_srcTableName"] = "researchProjectProposal";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto50["m_sql"] = "entryUserName";
$proto50["m_srcTableName"] = "researchProjectProposal";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto52["m_sql"] = "entryTime";
$proto52["m_srcTableName"] = "researchProjectProposal";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "researchScholarshipProposal";
$proto55["m_srcTableName"] = "researchProjectProposal";
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
$proto54["m_sql"] = "researchScholarshipProposal";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "researchProjectProposal";
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
$proto0["m_srcTableName"]="researchProjectProposal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchprojectproposal = createSqlQuery_researchprojectproposal();


	
				;

																								

$tdataresearchprojectproposal[".sqlquery"] = $queryData_researchprojectproposal;



include_once(getabspath("include/researchprojectproposal_events.php"));
$tableEvents["researchProjectProposal"] = new eventclass_researchprojectproposal;
$tdataresearchprojectproposal[".hasEvents"] = true;

?>