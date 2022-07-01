<?php
$tdataresearchscholarshipproposal = array();
$tdataresearchscholarshipproposal[".searchableFields"] = array();
$tdataresearchscholarshipproposal[".ShortName"] = "researchscholarshipproposal";
$tdataresearchscholarshipproposal[".OwnerID"] = "";
$tdataresearchscholarshipproposal[".OriginalTable"] = "researchScholarshipProposal";


$tdataresearchscholarshipproposal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchscholarshipproposal[".originalPagesByType"] = $tdataresearchscholarshipproposal[".pagesByType"];
$tdataresearchscholarshipproposal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchscholarshipproposal[".originalPages"] = $tdataresearchscholarshipproposal[".pages"];
$tdataresearchscholarshipproposal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresearchscholarshipproposal[".originalDefaultPages"] = $tdataresearchscholarshipproposal[".defaultPages"];

//	field labels
$fieldLabelsresearchscholarshipproposal = array();
$fieldToolTipsresearchscholarshipproposal = array();
$pageTitlesresearchscholarshipproposal = array();
$placeHoldersresearchscholarshipproposal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearchscholarshipproposal["English"] = array();
	$fieldToolTipsresearchscholarshipproposal["English"] = array();
	$placeHoldersresearchscholarshipproposal["English"] = array();
	$pageTitlesresearchscholarshipproposal["English"] = array();
	$fieldLabelsresearchscholarshipproposal["English"]["id"] = "ID";
	$fieldToolTipsresearchscholarshipproposal["English"]["id"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["id"] = "ID";
	$fieldLabelsresearchscholarshipproposal["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchRegisterID"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchRegisterID"] = "Research Register ID";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectNo"] = "Research Project No";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectNo"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectNo"] = "Research Project No";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectGroupName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectNameThai"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectNameEng"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectDepartment"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectMainField"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectSubField"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectHeadName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectFile"] = "Research Project File";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectFile"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectFile"] = "Research Project File";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectBankNo"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectBankName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldLabelsresearchscholarshipproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchscholarshipproposal["English"]["entryUserName"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchscholarshipproposal["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchscholarshipproposal["English"]["entryTime"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["entryTime"] = "Entry Time";
	$fieldLabelsresearchscholarshipproposal["English"]["researchProjectStatus"] = "Research Project Status";
	$fieldToolTipsresearchscholarshipproposal["English"]["researchProjectStatus"] = "";
	$placeHoldersresearchscholarshipproposal["English"]["researchProjectStatus"] = "Research Project Status";
	if (count($fieldToolTipsresearchscholarshipproposal["English"]))
		$tdataresearchscholarshipproposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsresearchscholarshipproposal["Thai"] = array();
	$fieldToolTipsresearchscholarshipproposal["Thai"] = array();
	$placeHoldersresearchscholarshipproposal["Thai"] = array();
	$pageTitlesresearchscholarshipproposal["Thai"] = array();
	$fieldLabelsresearchscholarshipproposal["Thai"]["id"] = "ID";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["id"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["id"] = "ID";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchRegisterID"] = "ชื่อโครงการ (การรับสมัครขอรับทุนวิจัย)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchRegisterID"] = "ชื่อโครงการ (การรับสมัครขอรับทุนวิจัย)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectNo"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectGroupName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectNameThai"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectNameEng"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectDepartment"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectMainField"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectSubField"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectHeadName"] = "ชื่อหัวหน้าเสนอโครงการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectHeadName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectHeadName"] = "ชื่อหัวหน้าเสนอโครงการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย (ตอนเสนอขอ)";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย (ตอนเสนอขอ)";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectFile"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectBankNo"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectBankName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldLabelsresearchscholarshipproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["entryUserName"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["entryTime"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsresearchscholarshipproposal["Thai"]["researchProjectStatus"] = "สถานะ";
	$fieldToolTipsresearchscholarshipproposal["Thai"]["researchProjectStatus"] = "";
	$placeHoldersresearchscholarshipproposal["Thai"]["researchProjectStatus"] = "สถานะ";
	if (count($fieldToolTipsresearchscholarshipproposal["Thai"]))
		$tdataresearchscholarshipproposal[".isUseToolTips"] = true;
}


	$tdataresearchscholarshipproposal[".NCSearch"] = true;



$tdataresearchscholarshipproposal[".shortTableName"] = "researchscholarshipproposal";
$tdataresearchscholarshipproposal[".nSecOptions"] = 0;

$tdataresearchscholarshipproposal[".mainTableOwnerID"] = "";
$tdataresearchscholarshipproposal[".entityType"] = 0;
$tdataresearchscholarshipproposal[".connId"] = "mc_at_192_168_1_111";


$tdataresearchscholarshipproposal[".strOriginalTableName"] = "researchScholarshipProposal";

	



$tdataresearchscholarshipproposal[".showAddInPopup"] = false;

$tdataresearchscholarshipproposal[".showEditInPopup"] = false;

$tdataresearchscholarshipproposal[".showViewInPopup"] = false;

$tdataresearchscholarshipproposal[".listAjax"] = false;
//	temporary
//$tdataresearchscholarshipproposal[".listAjax"] = false;

	$tdataresearchscholarshipproposal[".audit"] = true;

	$tdataresearchscholarshipproposal[".locking"] = false;


$pages = $tdataresearchscholarshipproposal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearchscholarshipproposal[".edit"] = true;
	$tdataresearchscholarshipproposal[".afterEditAction"] = 1;
	$tdataresearchscholarshipproposal[".closePopupAfterEdit"] = 1;
	$tdataresearchscholarshipproposal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearchscholarshipproposal[".add"] = true;
$tdataresearchscholarshipproposal[".afterAddAction"] = 1;
$tdataresearchscholarshipproposal[".closePopupAfterAdd"] = 1;
$tdataresearchscholarshipproposal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearchscholarshipproposal[".list"] = true;
}



$tdataresearchscholarshipproposal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearchscholarshipproposal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearchscholarshipproposal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearchscholarshipproposal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearchscholarshipproposal[".printFriendly"] = true;
}



$tdataresearchscholarshipproposal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearchscholarshipproposal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearchscholarshipproposal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearchscholarshipproposal[".isUseAjaxSuggest"] = true;

$tdataresearchscholarshipproposal[".rowHighlite"] = true;





$tdataresearchscholarshipproposal[".ajaxCodeSnippetAdded"] = false;

$tdataresearchscholarshipproposal[".buttonsAdded"] = false;

$tdataresearchscholarshipproposal[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchscholarshipproposal[".isUseTimeForSearch"] = false;


$tdataresearchscholarshipproposal[".badgeColor"] = "2F4F4F";


$tdataresearchscholarshipproposal[".allSearchFields"] = array();
$tdataresearchscholarshipproposal[".filterFields"] = array();
$tdataresearchscholarshipproposal[".requiredSearchFields"] = array();

$tdataresearchscholarshipproposal[".googleLikeFields"] = array();
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "id";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchRegisterID";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectNo";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectGroupName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectNameThai";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectNameEng";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectPeriodYear";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectPeriodMonth";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectRequestedBudget";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectDepartment";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectMainField";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectSubField";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectHeadName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectFile";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectBankAccountName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectBankNo";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectBankName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "researchProjectStatus";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "entryUserName";
$tdataresearchscholarshipproposal[".googleLikeFields"][] = "entryTime";



$tdataresearchscholarshipproposal[".tableType"] = "list";

$tdataresearchscholarshipproposal[".printerPageOrientation"] = 0;
$tdataresearchscholarshipproposal[".nPrinterPageScale"] = 100;

$tdataresearchscholarshipproposal[".nPrinterSplitRecords"] = 40;

$tdataresearchscholarshipproposal[".geocodingEnabled"] = false;










$tdataresearchscholarshipproposal[".pageSize"] = 20;

$tdataresearchscholarshipproposal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearchscholarshipproposal[".strOrderBy"] = $tstrOrderBy;

$tdataresearchscholarshipproposal[".orderindexes"] = array();


$tdataresearchscholarshipproposal[".sqlHead"] = "SELECT researchScholarshipProposal.id,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNo,  researchScholarshipProposal.researchProjectGroupName,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectPeriodYear,  researchScholarshipProposal.researchProjectPeriodMonth,  researchScholarshipProposal.researchProjectRequestedBudget,  researchScholarshipProposal.researchProjectDepartment,  researchScholarshipProposal.researchProjectMainField,  researchScholarshipProposal.researchProjectSubField,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectSubAffiliationName,  researchScholarshipProposal.researchProjectAffiliationMobile,  researchScholarshipProposal.researchProjectAffiliationTelephone,  researchScholarshipProposal.researchProjectAffiliationEmail,  researchScholarshipProposal.researchProjectFile,  researchScholarshipProposal.researchProjectBankAccountName,  researchScholarshipProposal.researchProjectBankNo,  researchScholarshipProposal.researchProjectBankName,  researchScholarshipProposal.researchProjectStatus,  researchScholarshipProposal.entryUserName,  researchScholarshipProposal.entryTime";
$tdataresearchscholarshipproposal[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdataresearchscholarshipproposal[".sqlWhereExpr"] = "";
$tdataresearchscholarshipproposal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearchscholarshipproposal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearchscholarshipproposal[".arrGroupsPerPage"] = $arrGPP;

$tdataresearchscholarshipproposal[".highlightSearchResults"] = true;

$tableKeysresearchscholarshipproposal = array();
$tableKeysresearchscholarshipproposal[] = "id";
$tdataresearchscholarshipproposal[".Keys"] = $tableKeysresearchscholarshipproposal;


$tdataresearchscholarshipproposal[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.id";

	
	
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


	$tdataresearchscholarshipproposal["id"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchRegisterID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRegisterID";

		$fdata["sourceSingle"] = "researchRegisterID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchRegisterID";

	
	
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


	$tdataresearchscholarshipproposal["researchRegisterID"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchRegisterID";
//	researchProjectNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchProjectNo";
	$fdata["GoodName"] = "researchProjectNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNo";

		$fdata["sourceSingle"] = "researchProjectNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNo";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectNo"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectNo";
//	researchProjectGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchProjectGroupName";
	$fdata["GoodName"] = "researchProjectGroupName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectGroupName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectGroupName";

		$fdata["sourceSingle"] = "researchProjectGroupName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectGroupName";

	
	
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
	$edata["LookupTable"] = "optionSub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID = 4";


	
	$edata["LookupOrderBy"] = "optionName";

	
	
	
	

	
	
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


	$tdataresearchscholarshipproposal["researchProjectGroupName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectGroupName";
//	researchProjectNameThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectNameThai";
	$fdata["GoodName"] = "researchProjectNameThai";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectNameThai");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameThai";

		$fdata["sourceSingle"] = "researchProjectNameThai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNameThai";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectNameThai"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectNameThai";
//	researchProjectNameEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectNameEng";
	$fdata["GoodName"] = "researchProjectNameEng";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectNameEng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectNameEng";

		$fdata["sourceSingle"] = "researchProjectNameEng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectNameEng";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectNameEng"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectNameEng";
//	researchProjectPeriodYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectPeriodYear";
	$fdata["GoodName"] = "researchProjectPeriodYear";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectPeriodYear");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "researchProjectPeriodYear";

		$fdata["sourceSingle"] = "researchProjectPeriodYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectPeriodYear";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectPeriodYear"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectPeriodYear";
//	researchProjectPeriodMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectPeriodMonth";
	$fdata["GoodName"] = "researchProjectPeriodMonth";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectPeriodMonth");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "researchProjectPeriodMonth";

		$fdata["sourceSingle"] = "researchProjectPeriodMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectPeriodMonth";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectPeriodMonth"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectPeriodMonth";
//	researchProjectRequestedBudget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectRequestedBudget";
	$fdata["GoodName"] = "researchProjectRequestedBudget";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectRequestedBudget");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "researchProjectRequestedBudget";

		$fdata["sourceSingle"] = "researchProjectRequestedBudget";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectRequestedBudget";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectRequestedBudget"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectRequestedBudget";
//	researchProjectDepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectDepartment";
	$fdata["GoodName"] = "researchProjectDepartment";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectDepartment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDepartment";

		$fdata["sourceSingle"] = "researchProjectDepartment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectDepartment";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectDepartment"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectDepartment";
//	researchProjectMainField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchProjectMainField";
	$fdata["GoodName"] = "researchProjectMainField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectMainField");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectMainField";

		$fdata["sourceSingle"] = "researchProjectMainField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectMainField";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectMainField"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectMainField";
//	researchProjectSubField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "researchProjectSubField";
	$fdata["GoodName"] = "researchProjectSubField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectSubField");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectSubField";

		$fdata["sourceSingle"] = "researchProjectSubField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectSubField";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectSubField"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectSubField";
//	researchProjectHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "researchProjectHeadName";
	$fdata["GoodName"] = "researchProjectHeadName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectHeadName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectHeadName";

		$fdata["sourceSingle"] = "researchProjectHeadName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectHeadName";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectHeadName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectHeadName";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationName";

		$fdata["sourceSingle"] = "researchProjectAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationName";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectAffiliationName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectSubAffiliationName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectSubAffiliationName";

		$fdata["sourceSingle"] = "researchProjectSubAffiliationName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectSubAffiliationName";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectAffiliationMobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationMobile";

		$fdata["sourceSingle"] = "researchProjectAffiliationMobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationMobile";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectAffiliationTelephone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationTelephone";

		$fdata["sourceSingle"] = "researchProjectAffiliationTelephone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationTelephone";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectAffiliationEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationEmail";

		$fdata["sourceSingle"] = "researchProjectAffiliationEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationEmail";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectAffiliationEmail";
//	researchProjectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "researchProjectFile";
	$fdata["GoodName"] = "researchProjectFile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchProjectFile";

		$fdata["sourceSingle"] = "researchProjectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectFile";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectFile"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectFile";
//	researchProjectBankAccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "researchProjectBankAccountName";
	$fdata["GoodName"] = "researchProjectBankAccountName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectBankAccountName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankAccountName";

		$fdata["sourceSingle"] = "researchProjectBankAccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectBankAccountName";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectBankAccountName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectBankAccountName";
//	researchProjectBankNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "researchProjectBankNo";
	$fdata["GoodName"] = "researchProjectBankNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectBankNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankNo";

		$fdata["sourceSingle"] = "researchProjectBankNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectBankNo";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectBankNo"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectBankNo";
//	researchProjectBankName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "researchProjectBankName";
	$fdata["GoodName"] = "researchProjectBankName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectBankName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectBankName";

		$fdata["sourceSingle"] = "researchProjectBankName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectBankName";

	
	
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


	$tdataresearchscholarshipproposal["researchProjectBankName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectBankName";
//	researchProjectStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "researchProjectStatus";
	$fdata["GoodName"] = "researchProjectStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","researchProjectStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectStatus";

		$fdata["sourceSingle"] = "researchProjectStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdataresearchscholarshipproposal["researchProjectStatus"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "researchProjectStatus";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.entryUserName";

	
	
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


	$tdataresearchscholarshipproposal["entryUserName"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchScholarshipProposal","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.entryTime";

	
	
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


	$tdataresearchscholarshipproposal["entryTime"] = $fdata;
		$tdataresearchscholarshipproposal[".searchableFields"][] = "entryTime";


$tables_data["researchScholarshipProposal"]=&$tdataresearchscholarshipproposal;
$field_labels["researchScholarshipProposal"] = &$fieldLabelsresearchscholarshipproposal;
$fieldToolTips["researchScholarshipProposal"] = &$fieldToolTipsresearchscholarshipproposal;
$placeHolders["researchScholarshipProposal"] = &$placeHoldersresearchscholarshipproposal;
$page_titles["researchScholarshipProposal"] = &$pageTitlesresearchscholarshipproposal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["researchScholarshipProposal"] = array();
//	researchOperatingPeriod
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchOperatingPeriod";
		$detailsParam["dOriginalTable"] = "researchOperatingPeriod";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchoperatingperiod";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchOperatingPeriod");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchScholarshipProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchScholarshipProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchScholarshipProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchScholarshipProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchScholarshipProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//	researchScholarshipConsider
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchScholarshipConsider";
		$detailsParam["dOriginalTable"] = "researchScholarshipConsider";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchscholarshipconsider";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchScholarshipConsider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchScholarshipProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchScholarshipProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchScholarshipProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchScholarshipProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchScholarshipProposal"][$dIndex]["detailKeys"][]="researchProjectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchScholarshipProposal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchscholarshipproposal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNo,  researchScholarshipProposal.researchProjectGroupName,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectPeriodYear,  researchScholarshipProposal.researchProjectPeriodMonth,  researchScholarshipProposal.researchProjectRequestedBudget,  researchScholarshipProposal.researchProjectDepartment,  researchScholarshipProposal.researchProjectMainField,  researchScholarshipProposal.researchProjectSubField,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectSubAffiliationName,  researchScholarshipProposal.researchProjectAffiliationMobile,  researchScholarshipProposal.researchProjectAffiliationTelephone,  researchScholarshipProposal.researchProjectAffiliationEmail,  researchScholarshipProposal.researchProjectFile,  researchScholarshipProposal.researchProjectBankAccountName,  researchScholarshipProposal.researchProjectBankNo,  researchScholarshipProposal.researchProjectBankName,  researchScholarshipProposal.researchProjectStatus,  researchScholarshipProposal.entryUserName,  researchScholarshipProposal.entryTime";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
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
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto6["m_sql"] = "researchScholarshipProposal.id";
$proto6["m_srcTableName"] = "researchScholarshipProposal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto8["m_sql"] = "researchScholarshipProposal.researchRegisterID";
$proto8["m_srcTableName"] = "researchScholarshipProposal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto10["m_sql"] = "researchScholarshipProposal.researchProjectNo";
$proto10["m_srcTableName"] = "researchScholarshipProposal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectGroupName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto12["m_sql"] = "researchScholarshipProposal.researchProjectGroupName";
$proto12["m_srcTableName"] = "researchScholarshipProposal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameThai",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto14["m_sql"] = "researchScholarshipProposal.researchProjectNameThai";
$proto14["m_srcTableName"] = "researchScholarshipProposal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameEng",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto16["m_sql"] = "researchScholarshipProposal.researchProjectNameEng";
$proto16["m_srcTableName"] = "researchScholarshipProposal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodYear",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto18["m_sql"] = "researchScholarshipProposal.researchProjectPeriodYear";
$proto18["m_srcTableName"] = "researchScholarshipProposal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodMonth",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto20["m_sql"] = "researchScholarshipProposal.researchProjectPeriodMonth";
$proto20["m_srcTableName"] = "researchScholarshipProposal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectRequestedBudget",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto22["m_sql"] = "researchScholarshipProposal.researchProjectRequestedBudget";
$proto22["m_srcTableName"] = "researchScholarshipProposal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDepartment",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto24["m_sql"] = "researchScholarshipProposal.researchProjectDepartment";
$proto24["m_srcTableName"] = "researchScholarshipProposal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectMainField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto26["m_sql"] = "researchScholarshipProposal.researchProjectMainField";
$proto26["m_srcTableName"] = "researchScholarshipProposal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto28["m_sql"] = "researchScholarshipProposal.researchProjectSubField";
$proto28["m_srcTableName"] = "researchScholarshipProposal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectHeadName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto30["m_sql"] = "researchScholarshipProposal.researchProjectHeadName";
$proto30["m_srcTableName"] = "researchScholarshipProposal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto32["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationName";
$proto32["m_srcTableName"] = "researchScholarshipProposal";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto34["m_sql"] = "researchScholarshipProposal.researchProjectSubAffiliationName";
$proto34["m_srcTableName"] = "researchScholarshipProposal";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto36["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationMobile";
$proto36["m_srcTableName"] = "researchScholarshipProposal";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto38["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationTelephone";
$proto38["m_srcTableName"] = "researchScholarshipProposal";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto40["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationEmail";
$proto40["m_srcTableName"] = "researchScholarshipProposal";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectFile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto42["m_sql"] = "researchScholarshipProposal.researchProjectFile";
$proto42["m_srcTableName"] = "researchScholarshipProposal";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankAccountName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto44["m_sql"] = "researchScholarshipProposal.researchProjectBankAccountName";
$proto44["m_srcTableName"] = "researchScholarshipProposal";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto46["m_sql"] = "researchScholarshipProposal.researchProjectBankNo";
$proto46["m_srcTableName"] = "researchScholarshipProposal";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto48["m_sql"] = "researchScholarshipProposal.researchProjectBankName";
$proto48["m_srcTableName"] = "researchScholarshipProposal";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto50["m_sql"] = "researchScholarshipProposal.researchProjectStatus";
$proto50["m_srcTableName"] = "researchScholarshipProposal";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto52["m_sql"] = "researchScholarshipProposal.entryUserName";
$proto52["m_srcTableName"] = "researchScholarshipProposal";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto54["m_sql"] = "researchScholarshipProposal.entryTime";
$proto54["m_srcTableName"] = "researchScholarshipProposal";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "researchScholarshipProposal";
$proto57["m_srcTableName"] = "researchScholarshipProposal";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "researchRegisterID";
$proto57["m_columns"][] = "researchProjectNo";
$proto57["m_columns"][] = "researchProjectGroupName";
$proto57["m_columns"][] = "researchProjectNameThai";
$proto57["m_columns"][] = "researchProjectNameEng";
$proto57["m_columns"][] = "researchProjectPeriodYear";
$proto57["m_columns"][] = "researchProjectPeriodMonth";
$proto57["m_columns"][] = "researchProjectEndDate";
$proto57["m_columns"][] = "researchOperatingPeriodEndDate";
$proto57["m_columns"][] = "researchProjectRequestedBudget";
$proto57["m_columns"][] = "researchProjectDepartment";
$proto57["m_columns"][] = "researchProjectMainField";
$proto57["m_columns"][] = "researchProjectSubField";
$proto57["m_columns"][] = "researchProjectHeadName";
$proto57["m_columns"][] = "researchProjectAffiliationName";
$proto57["m_columns"][] = "researchProjectSubAffiliationName";
$proto57["m_columns"][] = "researchProjectAffiliationMobile";
$proto57["m_columns"][] = "researchProjectAffiliationTelephone";
$proto57["m_columns"][] = "researchProjectAffiliationEmail";
$proto57["m_columns"][] = "researchProjectFile";
$proto57["m_columns"][] = "researchProjectBankAccountName";
$proto57["m_columns"][] = "researchProjectBankNo";
$proto57["m_columns"][] = "researchProjectBankName";
$proto57["m_columns"][] = "researchProjectStatus";
$proto57["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto57["m_columns"][] = "researchProjectAppointmentStatus";
$proto57["m_columns"][] = "researchProjectDisburseStatus";
$proto57["m_columns"][] = "contractSignDate";
$proto57["m_columns"][] = "contractSignFile";
$proto57["m_columns"][] = "projectStatusDesc";
$proto57["m_columns"][] = "projectStatus";
$proto57["m_columns"][] = "trackingProjectDesc";
$proto57["m_columns"][] = "trackingProjectDescResult";
$proto57["m_columns"][] = "entryUserName";
$proto57["m_columns"][] = "entryTime";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "researchScholarshipProposal";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "researchScholarshipProposal";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "researchScholarshipRegister";
$proto61["m_srcTableName"] = "researchScholarshipProposal";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "researchRegisterNo";
$proto61["m_columns"][] = "researchRegisterName";
$proto61["m_columns"][] = "researchRegisterStartDate";
$proto61["m_columns"][] = "researchRegisterEndDate";
$proto61["m_columns"][] = "researchRegisterFile";
$proto61["m_columns"][] = "researchType";
$proto61["m_columns"][] = "researchRegisterStatus";
$proto61["m_columns"][] = "entryUserName";
$proto61["m_columns"][] = "entryTime";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "researchScholarshipProposal";
$proto62=array();
$proto62["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchScholarshipProposal"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= researchScholarshipRegister.id";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="researchScholarshipProposal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_researchscholarshipproposal = createSqlQuery_researchscholarshipproposal();


	
				;

																									

$tdataresearchscholarshipproposal[".sqlquery"] = $queryData_researchscholarshipproposal;



include_once(getabspath("include/researchscholarshipproposal_events.php"));
$tableEvents["researchScholarshipProposal"] = new eventclass_researchscholarshipproposal;
$tdataresearchscholarshipproposal[".hasEvents"] = true;

$query = &$queryData_researchscholarshipproposal;
$table = "researchScholarshipProposal";
// here goes EVENT_INIT_TABLE event
		

		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchScholarshipRegister`.`researchType` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>