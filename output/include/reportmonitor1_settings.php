<?php
require_once(getabspath("classes/cipherer.php"));



$tdatareportmonitor1 = array();
$tdatareportmonitor1[".ShortName"] = "reportmonitor1";

$tdatareportmonitor1[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatareportmonitor1[".originalPagesByType"] = $tdatareportmonitor1[".pagesByType"];
$tdatareportmonitor1[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitor1[".originalPages"] = $tdatareportmonitor1[".pages"];
$tdatareportmonitor1[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatareportmonitor1[".originalDefaultPages"] = $tdatareportmonitor1[".defaultPages"];


//	field labels
$fieldLabelsreportmonitor1 = array();
$pageTitlesreportmonitor1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitor1["English"] = array();
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "Project Statuss";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus1_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportSearchresearchRegister_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportSearchresearchRegister_researchRegisterID"] = "Research Register ID";
	$fieldLabelsreportmonitor1["English"]["ReportSearchresearchRegister_researchType"] = "Research Type";
	$fieldLabelsreportmonitor1["English"]["ReportSearchresearchRegister_researchRegisterStatus"] = "Research Register Status";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus1_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus1_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus1_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus2_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus2_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus2_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus3_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus3_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus3_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus4_id"] = "Id";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus4_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus4_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "Tracking Project Desc Result Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus2_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "Research Project Disburse Statuss";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorGraphTrackingStatus3_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus5_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus5_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus5_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus6_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus6_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus6_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus7_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus8_id"] = "ID";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor1["English"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitor1["Thai"] = array();
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "สถานะการดำเนินการโครงการ";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus1_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportSearchresearchRegister_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportSearchresearchRegister_researchRegisterID"] = "การรับสมัครขอรับทุนวิจัย";
	$fieldLabelsreportmonitor1["Thai"]["ReportSearchresearchRegister_researchType"] = "ประเภททุน";
	$fieldLabelsreportmonitor1["Thai"]["ReportSearchresearchRegister_researchRegisterStatus"] = "สถานะ";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus1_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus1_projectStatusName"] = "สถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus1_projectStatusCount"] = "";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus2_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus2_projectStatusName"] = "สถานะอยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus2_projectStatusCount"] = "";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus3_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus3_projectStatusName"] = "สถานะอยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus3_projectStatusCount"] = "";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus4_id"] = "Id";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus4_projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus4_projectStatusCount"] = "";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "จำนวนสถานะการนำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus2_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "สถานะการเบิกจ่าย";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorGraphTrackingStatus3_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus5_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus5_projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus5_projectStatusCount"] = "";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus6_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus6_projectStatusName"] = "ยังไม่นำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus6_projectStatusCount"] = "จำนวนยังไม่นำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus7_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "สถานะเบิกจ่าย";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "ยอดเบิกจ่าย";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus8_id"] = "ID";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "สถานะค้างเบิกจ่าย";
	$fieldLabelsreportmonitor1["Thai"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "ยอดค้างเบิกจ่าย";
}

//	search fields
$tdatareportmonitor1[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"projectStatuss" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus1_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportSearchresearchRegister_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchRegisterID" );
$tdatareportmonitor1[".searchFields"]["ReportSearchresearchRegister_researchRegisterID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchType" );
$tdatareportmonitor1[".searchFields"]["ReportSearchresearchRegister_researchType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchRegisterStatus" );
$tdatareportmonitor1[".searchFields"]["ReportSearchresearchRegister_researchRegisterStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus1_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus1_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus1_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus2_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus2_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus2_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus3_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus3_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus3_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus4_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus4_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus4_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus2", "field"=>"trackingProjectDescResultCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus2", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus2_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus3", "field"=>"researchProjectDisburseStatuss" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus3", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorGraphTrackingStatus3_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus5_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus5_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus5_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus6_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"projectStatusName" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus6_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"projectStatusCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus6_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus7_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchProjectDisburse" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"id" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus8_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchProjectDisburse" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor1[".searchFields"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = $dashField;

// all search fields
$tdatareportmonitor1[".allSearchFields"] = array();
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_projectStatuss";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportSearchresearchRegister_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportSearchresearchRegister_researchRegisterID";
$tdatareportmonitor1[".allSearchFields"][] = "ReportSearchresearchRegister_researchType";
$tdatareportmonitor1[".allSearchFields"][] = "ReportSearchresearchRegister_researchRegisterStatus";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus1_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus2_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus3_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus4_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus2_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus3_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus5_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus5_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus5_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus6_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus6_projectStatusName";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus6_projectStatusCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus7_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchProjectDisburse";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus8_id";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchProjectDisburse";
$tdatareportmonitor1[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount";

// good like search fields
$tdatareportmonitor1[".googleLikeFields"] = array();

$tdatareportmonitor1[".dashElements"] = array();

	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus1_chart", "table" => "ReportMonitorGraphTrackingStatus1",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["height"] = 703;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportsearchresearchregister_search", "table" => "ReportSearchresearchRegister",
		 "pageName" => "search","type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus1_list", "table" => "ReportMonitorProjectStatus1",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_1";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus2_list", "table" => "ReportMonitorProjectStatus2",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_2_1";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus3_list", "table" => "ReportMonitorProjectStatus3",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_3_1";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus4_list", "table" => "ReportMonitorProjectStatus4",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_4_1";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus2_chart", "table" => "ReportMonitorGraphTrackingStatus2",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_2";

				$dbelement["height"] = 313;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus3_chart", "table" => "ReportMonitorGraphTrackingStatus3",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_3_2";

				$dbelement["height"] = 313;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportsearchresearchregister_list", "table" => "ReportSearchresearchRegister",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_1_4";

			$dbelement["width"] = 0;
		$dbelement["height"] = 0;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus5_list", "table" => "ReportMonitorProjectStatus5",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_3";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus6_list", "table" => "ReportMonitorProjectStatus6",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_2_3";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus7_list", "table" => "ReportMonitorProjectStatus7",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_3_3";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus8_list", "table" => "ReportMonitorProjectStatus8",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_4_3";

				$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor1[".dashElements"][] = $dbelement;

$tdatareportmonitor1[".shortTableName"] = "reportmonitor1";
$tdatareportmonitor1[".entityType"] = 4;



include_once(getabspath("include/reportmonitor1_events.php"));
$tableEvents["ReportMonitor1"] = new eventclass_reportmonitor1;
$tdatareportmonitor1[".hasEvents"] = true;


$tdatareportmonitor1[".tableType"] = "dashboard";


		
$tdatareportmonitor1[".addPageEvents"] = true;

$tdatareportmonitor1[".isUseAjaxSuggest"] = true;

$tables_data["ReportMonitor1"]=&$tdatareportmonitor1;
$field_labels["ReportMonitor1"] = &$fieldLabelsreportmonitor1;
$page_titles["ReportMonitor1"] = &$pageTitlesreportmonitor1;

?>