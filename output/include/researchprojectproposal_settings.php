<?php
$tdataresearchprojectproposal = array();
$tdataresearchprojectproposal[".searchableFields"] = array();
$tdataresearchprojectproposal[".ShortName"] = "researchprojectproposal";
$tdataresearchprojectproposal[".OwnerID"] = "";
$tdataresearchprojectproposal[".OriginalTable"] = "researchScholarshipProposal";


$tdataresearchprojectproposal[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresearchprojectproposal[".originalPagesByType"] = $tdataresearchprojectproposal[".pagesByType"];
$tdataresearchprojectproposal[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresearchprojectproposal[".originalPages"] = $tdataresearchprojectproposal[".pages"];
$tdataresearchprojectproposal[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$placeHoldersresearchprojectproposal["English"]["id"] = "ID";
	$fieldLabelsresearchprojectproposal["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsresearchprojectproposal["English"]["researchRegisterID"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchRegisterID"] = "Research Register ID";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNo"] = "Research Project No";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNo"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNo"] = "Research Project No";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectGroupName"] = "Research Project Group Name";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNameThai"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNameThai"] = "Research Project Name Thai";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectNameEng"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectNameEng"] = "Research Project Name Eng";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectPeriodYear"] = "Research Project Period Year";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectPeriodMonth"] = "Research Project Period Month";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectRequestedBudget"] = "Research Project Requested Budget";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectDepartment"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectDepartment"] = "Research Project Department";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectMainField"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectMainField"] = "Research Project Main Field";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectSubField"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectSubField"] = "Research Project Sub Field";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectHeadName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectHeadName"] = "Research Project Head Name";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationName"] = "Research Project Affiliation Name";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectSubAffiliationName"] = "Research Project Sub Affiliation Name";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationMobile"] = "Research Project Affiliation Mobile";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationTelephone"] = "Research Project Affiliation Telephone";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationEmail"] = "Research Project Affiliation Email";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectFile"] = "Research Project File";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectFile"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectFile"] = "Research Project File";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankAccountName"] = "Research Project Bank Account Name";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankNo"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankNo"] = "Research Project Bank No";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectBankName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectBankName"] = "Research Project Bank Name";
	$fieldLabelsresearchprojectproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsresearchprojectproposal["English"]["entryUserName"] = "";
	$placeHoldersresearchprojectproposal["English"]["entryUserName"] = "Entry User Name";
	$fieldLabelsresearchprojectproposal["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsresearchprojectproposal["English"]["entryTime"] = "";
	$placeHoldersresearchprojectproposal["English"]["entryTime"] = "Entry Time";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectStatus"] = "Research Project Status";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectStatus"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectStatus"] = "Research Project Status";
	$fieldLabelsresearchprojectproposal["English"]["trackingProjectDesc"] = "Tracking Project Desc";
	$fieldToolTipsresearchprojectproposal["English"]["trackingProjectDesc"] = "";
	$placeHoldersresearchprojectproposal["English"]["trackingProjectDesc"] = "";
	$fieldLabelsresearchprojectproposal["English"]["trackingProjectDescResult"] = "Tracking Project Desc Result";
	$fieldToolTipsresearchprojectproposal["English"]["trackingProjectDescResult"] = "";
	$placeHoldersresearchprojectproposal["English"]["trackingProjectDescResult"] = "";
	$fieldLabelsresearchprojectproposal["English"]["contractSignDate"] = "Contract Sign Date";
	$fieldToolTipsresearchprojectproposal["English"]["contractSignDate"] = "";
	$placeHoldersresearchprojectproposal["English"]["contractSignDate"] = "";
	$fieldLabelsresearchprojectproposal["English"]["contractSignFile"] = "Contract Sign File";
	$fieldToolTipsresearchprojectproposal["English"]["contractSignFile"] = "";
	$placeHoldersresearchprojectproposal["English"]["contractSignFile"] = "";
	$fieldLabelsresearchprojectproposal["English"]["projectStatusDesc"] = "Project Status Desc";
	$fieldToolTipsresearchprojectproposal["English"]["projectStatusDesc"] = "";
	$placeHoldersresearchprojectproposal["English"]["projectStatusDesc"] = "";
	$fieldLabelsresearchprojectproposal["English"]["projectStatus"] = "Project Status";
	$fieldToolTipsresearchprojectproposal["English"]["projectStatus"] = "";
	$placeHoldersresearchprojectproposal["English"]["projectStatus"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchOperatingPeriodEndDate"] = "Research Operating Period End Date";
	$fieldToolTipsresearchprojectproposal["English"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectEndDate"] = "Research Project End Date";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectEndDate"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectEndDate"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectDisburseStatus"] = "Research Project Disburse Status";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectDisburseStatus"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectDisburseStatus"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectStartDate"] = "Research Project Start Date";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectStartDate"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectStartDate"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchType"] = "Research Type";
	$fieldToolTipsresearchprojectproposal["English"]["researchType"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchType"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationPrefixName"] = "Research Project Affiliation Prefix Name";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationPrefixName"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationPrefixName"] = "";
	$fieldLabelsresearchprojectproposal["English"]["researchProjectAffiliationPosition"] = "Research Project Affiliation Position";
	$fieldToolTipsresearchprojectproposal["English"]["researchProjectAffiliationPosition"] = "";
	$placeHoldersresearchprojectproposal["English"]["researchProjectAffiliationPosition"] = "";
	$fieldLabelsresearchprojectproposal["English"]["geographiesID"] = "Geographies ID";
	$fieldToolTipsresearchprojectproposal["English"]["geographiesID"] = "";
	$placeHoldersresearchprojectproposal["English"]["geographiesID"] = "";
	$fieldLabelsresearchprojectproposal["English"]["provincesID"] = "Provinces ID";
	$fieldToolTipsresearchprojectproposal["English"]["provincesID"] = "";
	$placeHoldersresearchprojectproposal["English"]["provincesID"] = "";
	$fieldLabelsresearchprojectproposal["English"]["amphuresID"] = "Amphures ID";
	$fieldToolTipsresearchprojectproposal["English"]["amphuresID"] = "";
	$placeHoldersresearchprojectproposal["English"]["amphuresID"] = "";
	$fieldLabelsresearchprojectproposal["English"]["districtsID"] = "Districts ID";
	$fieldToolTipsresearchprojectproposal["English"]["districtsID"] = "";
	$placeHoldersresearchprojectproposal["English"]["districtsID"] = "";
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
	$placeHoldersresearchprojectproposal["Thai"]["id"] = "ID";
	$fieldLabelsresearchprojectproposal["Thai"]["researchRegisterID"] = "การรับสมัครขอรับทุนวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchRegisterID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchRegisterID"] = "ชื่อโครงการ (การรับสมัครขอรับทุนวิจัย)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNo"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNo"] = "รหัสโครงการ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectGroupName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectGroupName"] = "กลุ่ม";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNameThai"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNameThai"] = "ชื่อโครงการ (ภาษาไทย)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectNameEng"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectNameEng"] = "Project Name (English)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectPeriodYear"] = "ระยะเวลา (ปี)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectPeriodMonth"] = "ระยะเวลา (เดือน)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ (บาท)";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectRequestedBudget"] = "งบประมาณที่เสนอขอ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectDepartment"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectDepartment"] = "คณะ / กอง / สถาบันหน่วยงานเจ้าของโครงการ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectMainField"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectMainField"] = "สาขาการวิจัยหลัก";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectSubField"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectSubField"] = "สาขาการวิจัยย่อย";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectHeadName"] = "ชื่อ-นามสกุล";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectHeadName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectHeadName"] = "ชื่อหัวหน้าเสนอโครงการ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย/มหาลัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationName"] = "สังกัดนักวิจัย (ตอนเสนอขอ)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย/คณะ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectSubAffiliationName"] = "สังกัดหน่วยงานย่อยของนักวิจัย (ตอนเสนอขอ)";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationMobile"] = "โทรศัพท์มือถือนักวิจัย";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationTelephone"] = "โทรศัพท์นักวิจัย";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationEmail"] = "อีเมล์นักวิจัย";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectFile"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectFile"] = "เอกสารข้อเสนอโครงการ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankAccountName"] = "ชื่อบัญชี";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankNo"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankNo"] = "หมายเลขบัญชี";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectBankName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectBankName"] = "ธนาคาร";
	$fieldLabelsresearchprojectproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["entryUserName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldLabelsresearchprojectproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["entryTime"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectStatus"] = "สถานะ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectStatus"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectStatus"] = "สถานะ";
	$fieldLabelsresearchprojectproposal["Thai"]["trackingProjectDesc"] = "หมายเหตุการติดตามงานหลังปิดโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["trackingProjectDesc"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["trackingProjectDesc"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["trackingProjectDescResult"] = "ผลการติดตามงานหลังปิดโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["trackingProjectDescResult"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["trackingProjectDescResult"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["contractSignDate"] = "วันที่ลงนามในสัญญา";
	$fieldToolTipsresearchprojectproposal["Thai"]["contractSignDate"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["contractSignDate"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["contractSignFile"] = "เอกสารสัญญาโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["contractSignFile"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["contractSignFile"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["projectStatusDesc"] = "หมายเหตุสถานะโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["projectStatusDesc"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["projectStatusDesc"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["projectStatus"] = "สถานะโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["projectStatus"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["projectStatus"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchOperatingPeriodEndDate"] = "วันที่งวดโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchOperatingPeriodEndDate"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchOperatingPeriodEndDate"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectEndDate"] = "วันที่สิ้นสุดโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectEndDate"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectEndDate"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectDisburseStatus"] = "สถานะเบิกจ่าย";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectDisburseStatus"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectDisburseStatus"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectStartDate"] = "วันที่เริ่มต้นโครงการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectStartDate"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectStartDate"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchType"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchType"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationPrefixName"] = "คำนำหน้า";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationPrefixName"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationPrefixName"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["researchProjectAffiliationPosition"] = "ตำแหน่งทางวิชาการ";
	$fieldToolTipsresearchprojectproposal["Thai"]["researchProjectAffiliationPosition"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["researchProjectAffiliationPosition"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["geographiesID"] = "ภาค";
	$fieldToolTipsresearchprojectproposal["Thai"]["geographiesID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["geographiesID"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["provincesID"] = "จังหวัด";
	$fieldToolTipsresearchprojectproposal["Thai"]["provincesID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["provincesID"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["amphuresID"] = "เขต/อำเภอ";
	$fieldToolTipsresearchprojectproposal["Thai"]["amphuresID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["amphuresID"] = "";
	$fieldLabelsresearchprojectproposal["Thai"]["districtsID"] = "แขวง/ตำบล";
	$fieldToolTipsresearchprojectproposal["Thai"]["districtsID"] = "";
	$placeHoldersresearchprojectproposal["Thai"]["districtsID"] = "";
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

	$tdataresearchprojectproposal[".audit"] = true;

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

$tdataresearchprojectproposal[".addPageEvents"] = true;

// use timepicker for search panel
$tdataresearchprojectproposal[".isUseTimeForSearch"] = false;


$tdataresearchprojectproposal[".badgeColor"] = "8fbc8b";


$tdataresearchprojectproposal[".allSearchFields"] = array();
$tdataresearchprojectproposal[".filterFields"] = array();
$tdataresearchprojectproposal[".requiredSearchFields"] = array();

$tdataresearchprojectproposal[".googleLikeFields"] = array();
$tdataresearchprojectproposal[".googleLikeFields"][] = "id";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchType";
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
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationPrefixName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectHeadName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationPosition";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectSubAffiliationName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationMobile";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationTelephone";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectAffiliationEmail";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectFile";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankAccountName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankNo";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectBankName";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchOperatingPeriodEndDate";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectStartDate";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectEndDate";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectStatus";
$tdataresearchprojectproposal[".googleLikeFields"][] = "researchProjectDisburseStatus";
$tdataresearchprojectproposal[".googleLikeFields"][] = "contractSignDate";
$tdataresearchprojectproposal[".googleLikeFields"][] = "contractSignFile";
$tdataresearchprojectproposal[".googleLikeFields"][] = "projectStatusDesc";
$tdataresearchprojectproposal[".googleLikeFields"][] = "projectStatus";
$tdataresearchprojectproposal[".googleLikeFields"][] = "trackingProjectDesc";
$tdataresearchprojectproposal[".googleLikeFields"][] = "trackingProjectDescResult";
$tdataresearchprojectproposal[".googleLikeFields"][] = "geographiesID";
$tdataresearchprojectproposal[".googleLikeFields"][] = "provincesID";
$tdataresearchprojectproposal[".googleLikeFields"][] = "amphuresID";
$tdataresearchprojectproposal[".googleLikeFields"][] = "districtsID";
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


$tdataresearchprojectproposal[".sqlHead"] = "SELECT researchScholarshipProposal.id,  researchScholarshipRegister.researchType,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNo,  researchScholarshipProposal.researchProjectGroupName,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectPeriodYear,  researchScholarshipProposal.researchProjectPeriodMonth,  format(researchScholarshipProposal.researchProjectRequestedBudget, 0) AS researchProjectRequestedBudget,  researchScholarshipProposal.researchProjectDepartment,  researchScholarshipProposal.researchProjectMainField,  researchScholarshipProposal.researchProjectSubField,  researchScholarshipProposal.researchProjectAffiliationPrefixName,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationPosition,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectSubAffiliationName,  researchScholarshipProposal.researchProjectAffiliationMobile,  researchScholarshipProposal.researchProjectAffiliationTelephone,  researchScholarshipProposal.researchProjectAffiliationEmail,  researchScholarshipProposal.researchProjectFile,  researchScholarshipProposal.researchProjectBankAccountName,  researchScholarshipProposal.researchProjectBankNo,  researchScholarshipProposal.researchProjectBankName,  researchScholarshipProposal.researchOperatingPeriodEndDate,  researchScholarshipProposal.researchProjectStartDate,  researchScholarshipProposal.researchProjectEndDate,  researchScholarshipProposal.researchProjectStatus,  researchScholarshipProposal.researchProjectDisburseStatus,  researchScholarshipProposal.contractSignDate,  researchScholarshipProposal.contractSignFile,  researchScholarshipProposal.projectStatusDesc,  researchScholarshipProposal.projectStatus,  researchScholarshipProposal.trackingProjectDesc,  researchScholarshipProposal.trackingProjectDescResult,  researchScholarshipProposal.geographiesID,  researchScholarshipProposal.provincesID,  researchScholarshipProposal.amphuresID,  researchScholarshipProposal.districtsID,  researchScholarshipProposal.entryUserName,  researchScholarshipProposal.entryTime";
$tdataresearchprojectproposal[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdataresearchprojectproposal[".sqlWhereExpr"] = "(researchScholarshipProposal.ScholarshipProposalFinishStatus = 'true')";
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


	$tdataresearchprojectproposal["id"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "id";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipRegister.researchType";

	
	
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


	$tdataresearchprojectproposal["researchType"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchType";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchRegisterID");
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


	$tdataresearchprojectproposal["researchRegisterID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchRegisterID";
//	researchProjectNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchProjectNo";
	$fdata["GoodName"] = "researchProjectNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNo");
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


	$tdataresearchprojectproposal["researchProjectNo"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNo";
//	researchProjectGroupName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "researchProjectGroupName";
	$fdata["GoodName"] = "researchProjectGroupName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectGroupName");
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
	$edata["LookupTable"] = "TypeGroup_Search_Lookup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "researchScholarshipRegister.id= ':researchRegisterID'";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
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


	$tdataresearchprojectproposal["researchProjectGroupName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectGroupName";
//	researchProjectNameThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "researchProjectNameThai";
	$fdata["GoodName"] = "researchProjectNameThai";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNameThai");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataresearchprojectproposal["researchProjectNameThai"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNameThai";
//	researchProjectNameEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "researchProjectNameEng";
	$fdata["GoodName"] = "researchProjectNameEng";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectNameEng");
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


	$tdataresearchprojectproposal["researchProjectNameEng"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectNameEng";
//	researchProjectPeriodYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "researchProjectPeriodYear";
	$fdata["GoodName"] = "researchProjectPeriodYear";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectPeriodYear");
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


	$tdataresearchprojectproposal["researchProjectPeriodYear"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectPeriodYear";
//	researchProjectPeriodMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "researchProjectPeriodMonth";
	$fdata["GoodName"] = "researchProjectPeriodMonth";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectPeriodMonth");
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


	$tdataresearchprojectproposal["researchProjectPeriodMonth"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectPeriodMonth";
//	researchProjectRequestedBudget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "researchProjectRequestedBudget";
	$fdata["GoodName"] = "researchProjectRequestedBudget";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectRequestedBudget");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectRequestedBudget";

		$fdata["sourceSingle"] = "researchProjectRequestedBudget";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(researchScholarshipProposal.researchProjectRequestedBudget, 0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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
	$fdata["Index"] = 11;
	$fdata["strName"] = "researchProjectDepartment";
	$fdata["GoodName"] = "researchProjectDepartment";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectDepartment");
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


	$tdataresearchprojectproposal["researchProjectDepartment"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectDepartment";
//	researchProjectMainField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "researchProjectMainField";
	$fdata["GoodName"] = "researchProjectMainField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectMainField");
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


	$tdataresearchprojectproposal["researchProjectMainField"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectMainField";
//	researchProjectSubField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "researchProjectSubField";
	$fdata["GoodName"] = "researchProjectSubField";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectSubField");
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


	$tdataresearchprojectproposal["researchProjectSubField"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectSubField";
//	researchProjectAffiliationPrefixName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "researchProjectAffiliationPrefixName";
	$fdata["GoodName"] = "researchProjectAffiliationPrefixName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationPrefixName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationPrefixName";

		$fdata["sourceSingle"] = "researchProjectAffiliationPrefixName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationPrefixName";

	
	
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

				$edata["LookupWhere"] = "optionGroupID = 7";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
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


	$tdataresearchprojectproposal["researchProjectAffiliationPrefixName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationPrefixName";
//	researchProjectHeadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "researchProjectHeadName";
	$fdata["GoodName"] = "researchProjectHeadName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectHeadName");
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


	$tdataresearchprojectproposal["researchProjectHeadName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectHeadName";
//	researchProjectAffiliationPosition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "researchProjectAffiliationPosition";
	$fdata["GoodName"] = "researchProjectAffiliationPosition";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationPosition");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectAffiliationPosition";

		$fdata["sourceSingle"] = "researchProjectAffiliationPosition";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectAffiliationPosition";

	
	
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

				$edata["LookupWhere"] = "optionGroupID = 8";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
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


	$tdataresearchprojectproposal["researchProjectAffiliationPosition"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationPosition";
//	researchProjectAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "researchProjectAffiliationName";
	$fdata["GoodName"] = "researchProjectAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationName");
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


	$tdataresearchprojectproposal["researchProjectAffiliationName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationName";
//	researchProjectSubAffiliationName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "researchProjectSubAffiliationName";
	$fdata["GoodName"] = "researchProjectSubAffiliationName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectSubAffiliationName");
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


	$tdataresearchprojectproposal["researchProjectSubAffiliationName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectSubAffiliationName";
//	researchProjectAffiliationMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "researchProjectAffiliationMobile";
	$fdata["GoodName"] = "researchProjectAffiliationMobile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationMobile");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataresearchprojectproposal["researchProjectAffiliationMobile"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationMobile";
//	researchProjectAffiliationTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "researchProjectAffiliationTelephone";
	$fdata["GoodName"] = "researchProjectAffiliationTelephone";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationTelephone");
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


	$tdataresearchprojectproposal["researchProjectAffiliationTelephone"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationTelephone";
//	researchProjectAffiliationEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "researchProjectAffiliationEmail";
	$fdata["GoodName"] = "researchProjectAffiliationEmail";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectAffiliationEmail");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataresearchprojectproposal["researchProjectAffiliationEmail"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectAffiliationEmail";
//	researchProjectFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "researchProjectFile";
	$fdata["GoodName"] = "researchProjectFile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "researchProjectFile";

		$fdata["sourceSingle"] = "researchProjectFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectFile";

	
	
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


	$tdataresearchprojectproposal["researchProjectFile"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectFile";
//	researchProjectBankAccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "researchProjectBankAccountName";
	$fdata["GoodName"] = "researchProjectBankAccountName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankAccountName");
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


	$tdataresearchprojectproposal["researchProjectBankAccountName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankAccountName";
//	researchProjectBankNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "researchProjectBankNo";
	$fdata["GoodName"] = "researchProjectBankNo";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankNo");
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


	$tdataresearchprojectproposal["researchProjectBankNo"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankNo";
//	researchProjectBankName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "researchProjectBankName";
	$fdata["GoodName"] = "researchProjectBankName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectBankName");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "optionSub_Search_Lookup";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "optionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "optionName";

				$edata["LookupWhere"] = "optionGroupID = 5";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataresearchprojectproposal["researchProjectBankName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectBankName";
//	researchOperatingPeriodEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "researchOperatingPeriodEndDate";
	$fdata["GoodName"] = "researchOperatingPeriodEndDate";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchOperatingPeriodEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchOperatingPeriodEndDate";

		$fdata["sourceSingle"] = "researchOperatingPeriodEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchOperatingPeriodEndDate";

	
	
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


	$tdataresearchprojectproposal["researchOperatingPeriodEndDate"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchOperatingPeriodEndDate";
//	researchProjectStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "researchProjectStartDate";
	$fdata["GoodName"] = "researchProjectStartDate";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchProjectStartDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectStartDate";

	
	
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


	$tdataresearchprojectproposal["researchProjectStartDate"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectStartDate";
//	researchProjectEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "researchProjectEndDate";
	$fdata["GoodName"] = "researchProjectEndDate";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "researchProjectEndDate";

		$fdata["sourceSingle"] = "researchProjectEndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectEndDate";

	
	
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


	$tdataresearchprojectproposal["researchProjectEndDate"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectEndDate";
//	researchProjectStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "researchProjectStatus";
	$fdata["GoodName"] = "researchProjectStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectStatus");
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


	$tdataresearchprojectproposal["researchProjectStatus"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectStatus";
//	researchProjectDisburseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "researchProjectDisburseStatus";
	$fdata["GoodName"] = "researchProjectDisburseStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","researchProjectDisburseStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchProjectDisburseStatus";

		$fdata["sourceSingle"] = "researchProjectDisburseStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchProjectDisburseStatus";

	
	
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


	$tdataresearchprojectproposal["researchProjectDisburseStatus"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "researchProjectDisburseStatus";
//	contractSignDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "contractSignDate";
	$fdata["GoodName"] = "contractSignDate";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","contractSignDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "contractSignDate";

		$fdata["sourceSingle"] = "contractSignDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.contractSignDate";

	
	
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


	$tdataresearchprojectproposal["contractSignDate"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "contractSignDate";
//	contractSignFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "contractSignFile";
	$fdata["GoodName"] = "contractSignFile";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","contractSignFile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "contractSignFile";

		$fdata["sourceSingle"] = "contractSignFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.contractSignFile";

		$fdata["DeleteAssociatedFile"] = true;

	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresearchprojectproposal["contractSignFile"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "contractSignFile";
//	projectStatusDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "projectStatusDesc";
	$fdata["GoodName"] = "projectStatusDesc";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","projectStatusDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatusDesc";

		$fdata["sourceSingle"] = "projectStatusDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.projectStatusDesc";

	
	
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


	$tdataresearchprojectproposal["projectStatusDesc"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "projectStatusDesc";
//	projectStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "projectStatus";
	$fdata["GoodName"] = "projectStatus";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","projectStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projectStatus";

		$fdata["sourceSingle"] = "projectStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.projectStatus";

	
	
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

				$edata["LookupWhere"] = "optionGroupID = 1";


	
	$edata["LookupOrderBy"] = "optionGroupNumber";

	
	
	
	

	
	
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


	$tdataresearchprojectproposal["projectStatus"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "projectStatus";
//	trackingProjectDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "trackingProjectDesc";
	$fdata["GoodName"] = "trackingProjectDesc";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","trackingProjectDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingProjectDesc";

		$fdata["sourceSingle"] = "trackingProjectDesc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.trackingProjectDesc";

	
	
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


	$tdataresearchprojectproposal["trackingProjectDesc"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "trackingProjectDesc";
//	trackingProjectDescResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "trackingProjectDescResult";
	$fdata["GoodName"] = "trackingProjectDescResult";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","trackingProjectDescResult");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingProjectDescResult";

		$fdata["sourceSingle"] = "trackingProjectDescResult";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.trackingProjectDescResult";

	
	
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

				$edata["LookupWhere"] = "optionGroupID = 3";


	
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


	$tdataresearchprojectproposal["trackingProjectDescResult"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "trackingProjectDescResult";
//	geographiesID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "geographiesID";
	$fdata["GoodName"] = "geographiesID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","geographiesID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "geographiesID";

		$fdata["sourceSingle"] = "geographiesID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.geographiesID";

	
	
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
	$edata["LookupTable"] = "geographies";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "provincesID";

	
	
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


	$tdataresearchprojectproposal["geographiesID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "geographiesID";
//	provincesID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "provincesID";
	$fdata["GoodName"] = "provincesID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","provincesID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "provincesID";

		$fdata["sourceSingle"] = "provincesID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.provincesID";

	
	
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
	$edata["LookupTable"] = "provinces";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name_th";

	

	
	$edata["LookupOrderBy"] = "name_th";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "geographiesID", "lookup" => "geography_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "amphuresID";

	
	
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


	$tdataresearchprojectproposal["provincesID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "provincesID";
//	amphuresID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "amphuresID";
	$fdata["GoodName"] = "amphuresID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","amphuresID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "amphuresID";

		$fdata["sourceSingle"] = "amphuresID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.amphuresID";

	
	
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
	$edata["LookupTable"] = "amphures";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name_th";

	

	
	$edata["LookupOrderBy"] = "name_th";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "provincesID", "lookup" => "province_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "districtsID";

	
	
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


	$tdataresearchprojectproposal["amphuresID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "amphuresID";
//	districtsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "districtsID";
	$fdata["GoodName"] = "districtsID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","districtsID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "districtsID";

		$fdata["sourceSingle"] = "districtsID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.districtsID";

	
	
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
	$edata["LookupTable"] = "districts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name_th";

	

	
	$edata["LookupOrderBy"] = "name_th";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "amphuresID", "lookup" => "amphure_id" );

	
	

	
	
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


	$tdataresearchprojectproposal["districtsID"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "districtsID";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","entryUserName");
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


	$tdataresearchprojectproposal["entryUserName"] = $fdata;
		$tdataresearchprojectproposal[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("researchProjectProposal","entryTime");
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
//	researchResearcher
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="researchResearcher";
		$detailsParam["dOriginalTable"] = "researcher";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "researchresearcher";
	$detailsParam["dCaptionTable"] = GetTableCaption("researchResearcher");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["researchProjectProposal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["researchProjectProposal"][$dIndex]["detailKeys"][]="projectID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["researchProjectProposal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_researchprojectproposal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  researchScholarshipRegister.researchType,  researchScholarshipProposal.researchRegisterID,  researchScholarshipProposal.researchProjectNo,  researchScholarshipProposal.researchProjectGroupName,  researchScholarshipProposal.researchProjectNameThai,  researchScholarshipProposal.researchProjectNameEng,  researchScholarshipProposal.researchProjectPeriodYear,  researchScholarshipProposal.researchProjectPeriodMonth,  format(researchScholarshipProposal.researchProjectRequestedBudget, 0) AS researchProjectRequestedBudget,  researchScholarshipProposal.researchProjectDepartment,  researchScholarshipProposal.researchProjectMainField,  researchScholarshipProposal.researchProjectSubField,  researchScholarshipProposal.researchProjectAffiliationPrefixName,  researchScholarshipProposal.researchProjectHeadName,  researchScholarshipProposal.researchProjectAffiliationPosition,  researchScholarshipProposal.researchProjectAffiliationName,  researchScholarshipProposal.researchProjectSubAffiliationName,  researchScholarshipProposal.researchProjectAffiliationMobile,  researchScholarshipProposal.researchProjectAffiliationTelephone,  researchScholarshipProposal.researchProjectAffiliationEmail,  researchScholarshipProposal.researchProjectFile,  researchScholarshipProposal.researchProjectBankAccountName,  researchScholarshipProposal.researchProjectBankNo,  researchScholarshipProposal.researchProjectBankName,  researchScholarshipProposal.researchOperatingPeriodEndDate,  researchScholarshipProposal.researchProjectStartDate,  researchScholarshipProposal.researchProjectEndDate,  researchScholarshipProposal.researchProjectStatus,  researchScholarshipProposal.researchProjectDisburseStatus,  researchScholarshipProposal.contractSignDate,  researchScholarshipProposal.contractSignFile,  researchScholarshipProposal.projectStatusDesc,  researchScholarshipProposal.projectStatus,  researchScholarshipProposal.trackingProjectDesc,  researchScholarshipProposal.trackingProjectDescResult,  researchScholarshipProposal.geographiesID,  researchScholarshipProposal.provincesID,  researchScholarshipProposal.amphuresID,  researchScholarshipProposal.districtsID,  researchScholarshipProposal.entryUserName,  researchScholarshipProposal.entryTime";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto0["m_strWhere"] = "(researchScholarshipProposal.ScholarshipProposalFinishStatus = 'true')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "researchScholarshipProposal.ScholarshipProposalFinishStatus = 'true'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ScholarshipProposalFinishStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'true'";
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

$proto6["m_sql"] = "researchScholarshipProposal.id";
$proto6["m_srcTableName"] = "researchProjectProposal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "researchProjectProposal"
));

$proto8["m_sql"] = "researchScholarshipRegister.researchType";
$proto8["m_srcTableName"] = "researchProjectProposal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto10["m_sql"] = "researchScholarshipProposal.researchRegisterID";
$proto10["m_srcTableName"] = "researchProjectProposal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto12["m_sql"] = "researchScholarshipProposal.researchProjectNo";
$proto12["m_srcTableName"] = "researchProjectProposal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectGroupName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto14["m_sql"] = "researchScholarshipProposal.researchProjectGroupName";
$proto14["m_srcTableName"] = "researchProjectProposal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameThai",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto16["m_sql"] = "researchScholarshipProposal.researchProjectNameThai";
$proto16["m_srcTableName"] = "researchProjectProposal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectNameEng",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto18["m_sql"] = "researchScholarshipProposal.researchProjectNameEng";
$proto18["m_srcTableName"] = "researchProjectProposal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodYear",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto20["m_sql"] = "researchScholarshipProposal.researchProjectPeriodYear";
$proto20["m_srcTableName"] = "researchProjectProposal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectPeriodMonth",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto22["m_sql"] = "researchScholarshipProposal.researchProjectPeriodMonth";
$proto22["m_srcTableName"] = "researchProjectProposal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "researchScholarshipProposal.researchProjectRequestedBudget"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "format(researchScholarshipProposal.researchProjectRequestedBudget, 0)";
$proto24["m_srcTableName"] = "researchProjectProposal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "researchProjectRequestedBudget";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDepartment",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto28["m_sql"] = "researchScholarshipProposal.researchProjectDepartment";
$proto28["m_srcTableName"] = "researchProjectProposal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectMainField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto30["m_sql"] = "researchScholarshipProposal.researchProjectMainField";
$proto30["m_srcTableName"] = "researchProjectProposal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubField",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto32["m_sql"] = "researchScholarshipProposal.researchProjectSubField";
$proto32["m_srcTableName"] = "researchProjectProposal";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationPrefixName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto34["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationPrefixName";
$proto34["m_srcTableName"] = "researchProjectProposal";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectHeadName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto36["m_sql"] = "researchScholarshipProposal.researchProjectHeadName";
$proto36["m_srcTableName"] = "researchProjectProposal";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationPosition",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto38["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationPosition";
$proto38["m_srcTableName"] = "researchProjectProposal";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto40["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationName";
$proto40["m_srcTableName"] = "researchProjectProposal";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectSubAffiliationName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto42["m_sql"] = "researchScholarshipProposal.researchProjectSubAffiliationName";
$proto42["m_srcTableName"] = "researchProjectProposal";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationMobile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto44["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationMobile";
$proto44["m_srcTableName"] = "researchProjectProposal";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationTelephone",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto46["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationTelephone";
$proto46["m_srcTableName"] = "researchProjectProposal";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectAffiliationEmail",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto48["m_sql"] = "researchScholarshipProposal.researchProjectAffiliationEmail";
$proto48["m_srcTableName"] = "researchProjectProposal";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectFile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto50["m_sql"] = "researchScholarshipProposal.researchProjectFile";
$proto50["m_srcTableName"] = "researchProjectProposal";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankAccountName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto52["m_sql"] = "researchScholarshipProposal.researchProjectBankAccountName";
$proto52["m_srcTableName"] = "researchProjectProposal";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankNo",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto54["m_sql"] = "researchScholarshipProposal.researchProjectBankNo";
$proto54["m_srcTableName"] = "researchProjectProposal";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectBankName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto56["m_sql"] = "researchScholarshipProposal.researchProjectBankName";
$proto56["m_srcTableName"] = "researchProjectProposal";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "researchOperatingPeriodEndDate",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto58["m_sql"] = "researchScholarshipProposal.researchOperatingPeriodEndDate";
$proto58["m_srcTableName"] = "researchProjectProposal";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectStartDate",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto60["m_sql"] = "researchScholarshipProposal.researchProjectStartDate";
$proto60["m_srcTableName"] = "researchProjectProposal";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectEndDate",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto62["m_sql"] = "researchScholarshipProposal.researchProjectEndDate";
$proto62["m_srcTableName"] = "researchProjectProposal";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto64["m_sql"] = "researchScholarshipProposal.researchProjectStatus";
$proto64["m_srcTableName"] = "researchProjectProposal";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "researchProjectDisburseStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto66["m_sql"] = "researchScholarshipProposal.researchProjectDisburseStatus";
$proto66["m_srcTableName"] = "researchProjectProposal";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "contractSignDate",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto68["m_sql"] = "researchScholarshipProposal.contractSignDate";
$proto68["m_srcTableName"] = "researchProjectProposal";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "contractSignFile",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto70["m_sql"] = "researchScholarshipProposal.contractSignFile";
$proto70["m_srcTableName"] = "researchProjectProposal";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStatusDesc",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto72["m_sql"] = "researchScholarshipProposal.projectStatusDesc";
$proto72["m_srcTableName"] = "researchProjectProposal";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "projectStatus",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto74["m_sql"] = "researchScholarshipProposal.projectStatus";
$proto74["m_srcTableName"] = "researchProjectProposal";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "trackingProjectDesc",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto76["m_sql"] = "researchScholarshipProposal.trackingProjectDesc";
$proto76["m_srcTableName"] = "researchProjectProposal";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "trackingProjectDescResult",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto78["m_sql"] = "researchScholarshipProposal.trackingProjectDescResult";
$proto78["m_srcTableName"] = "researchProjectProposal";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "geographiesID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto80["m_sql"] = "researchScholarshipProposal.geographiesID";
$proto80["m_srcTableName"] = "researchProjectProposal";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "provincesID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto82["m_sql"] = "researchScholarshipProposal.provincesID";
$proto82["m_srcTableName"] = "researchProjectProposal";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "amphuresID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto84["m_sql"] = "researchScholarshipProposal.amphuresID";
$proto84["m_srcTableName"] = "researchProjectProposal";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "districtsID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto86["m_sql"] = "researchScholarshipProposal.districtsID";
$proto86["m_srcTableName"] = "researchProjectProposal";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto88["m_sql"] = "researchScholarshipProposal.entryUserName";
$proto88["m_srcTableName"] = "researchProjectProposal";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto90["m_sql"] = "researchScholarshipProposal.entryTime";
$proto90["m_srcTableName"] = "researchProjectProposal";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "researchScholarshipProposal";
$proto93["m_srcTableName"] = "researchProjectProposal";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id";
$proto93["m_columns"][] = "researchRegisterID";
$proto93["m_columns"][] = "researchProjectNo";
$proto93["m_columns"][] = "researchProjectGroupName";
$proto93["m_columns"][] = "researchProjectNameThai";
$proto93["m_columns"][] = "researchProjectNameEng";
$proto93["m_columns"][] = "researchProjectPeriodYear";
$proto93["m_columns"][] = "researchProjectPeriodMonth";
$proto93["m_columns"][] = "researchProjectStartDate";
$proto93["m_columns"][] = "researchProjectEndDate";
$proto93["m_columns"][] = "researchOperatingPeriodEndDate";
$proto93["m_columns"][] = "researchProjectRequestedBudget";
$proto93["m_columns"][] = "researchProjectDepartment";
$proto93["m_columns"][] = "researchProjectMainField";
$proto93["m_columns"][] = "researchProjectSubField";
$proto93["m_columns"][] = "researchProjectHeadName";
$proto93["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto93["m_columns"][] = "researchProjectAffiliationName";
$proto93["m_columns"][] = "researchProjectAffiliationPosition";
$proto93["m_columns"][] = "researchProjectSubAffiliationName";
$proto93["m_columns"][] = "researchProjectAffiliationMobile";
$proto93["m_columns"][] = "researchProjectAffiliationTelephone";
$proto93["m_columns"][] = "researchProjectAffiliationEmail";
$proto93["m_columns"][] = "researchProjectFile";
$proto93["m_columns"][] = "researchProjectBankAccountName";
$proto93["m_columns"][] = "researchProjectBankNo";
$proto93["m_columns"][] = "researchProjectBankName";
$proto93["m_columns"][] = "researchProjectStatus";
$proto93["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto93["m_columns"][] = "researchProjectAppointmentStatus";
$proto93["m_columns"][] = "researchProjectDisburseStatus";
$proto93["m_columns"][] = "contractSignDate";
$proto93["m_columns"][] = "contractSignFile";
$proto93["m_columns"][] = "projectStatusDesc";
$proto93["m_columns"][] = "projectStatus";
$proto93["m_columns"][] = "trackingProjectDesc";
$proto93["m_columns"][] = "trackingProjectDescResult";
$proto93["m_columns"][] = "geographiesID";
$proto93["m_columns"][] = "geographiesName";
$proto93["m_columns"][] = "provincesID";
$proto93["m_columns"][] = "provincesName";
$proto93["m_columns"][] = "districtsID";
$proto93["m_columns"][] = "districtsName";
$proto93["m_columns"][] = "amphuresID";
$proto93["m_columns"][] = "amphuresName";
$proto93["m_columns"][] = "entryUserName";
$proto93["m_columns"][] = "entryTime";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "researchScholarshipProposal";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "researchProjectProposal";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
												$proto96=array();
$proto96["m_link"] = "SQLL_INNERJOIN";
			$proto97=array();
$proto97["m_strName"] = "researchScholarshipRegister";
$proto97["m_srcTableName"] = "researchProjectProposal";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "id";
$proto97["m_columns"][] = "researchRegisterNo";
$proto97["m_columns"][] = "researchRegisterName";
$proto97["m_columns"][] = "researchRegisterStartDate";
$proto97["m_columns"][] = "researchRegisterEndDate";
$proto97["m_columns"][] = "researchRegisterFile";
$proto97["m_columns"][] = "researchType";
$proto97["m_columns"][] = "researchRegisterStatus";
$proto97["m_columns"][] = "entryUserName";
$proto97["m_columns"][] = "entryTime";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "researchProjectProposal";
$proto98=array();
$proto98["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "researchProjectProposal"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= researchScholarshipRegister.id";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

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

$query = &$queryData_researchprojectproposal;
$table = "researchProjectProposal";
// here goes EVENT_INIT_TABLE event


		if(strpos($_SESSION["GroupName"],"<Admin>") == ""){
			$query->addWhere("`researchScholarshipRegister`.`researchType` IN (".$_SESSION["typeName"].")");
		}


// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>