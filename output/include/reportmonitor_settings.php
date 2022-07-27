<?php
require_once(getabspath("classes/cipherer.php"));



$tdatareportmonitor = array();
$tdatareportmonitor[".ShortName"] = "reportmonitor";

$tdatareportmonitor[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatareportmonitor[".originalPagesByType"] = $tdatareportmonitor[".pagesByType"];
$tdatareportmonitor[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitor[".originalPages"] = $tdatareportmonitor[".pages"];
$tdatareportmonitor[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatareportmonitor[".originalDefaultPages"] = $tdatareportmonitor[".defaultPages"];


//	field labels
$fieldLabelsreportmonitor = array();
$pageTitlesreportmonitor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitor["English"] = array();
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "Project Statuss";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus1_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportSearchresearchRegister_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportSearchresearchRegister_researchRegisterID"] = "Research Register ID";
	$fieldLabelsreportmonitor["English"]["ReportSearchresearchRegister_researchType"] = "Research Type";
	$fieldLabelsreportmonitor["English"]["ReportSearchresearchRegister_researchRegisterStatus"] = "Research Register Status";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus1_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus1_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus1_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus2_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus2_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus2_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus3_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus3_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus3_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus4_id"] = "Id";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus4_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus4_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "Tracking Project Desc Result Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus2_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "Research Project Disburse Statuss";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus3_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus5_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus5_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus5_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus6_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus6_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus6_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus7_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus8_id"] = "ID";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitor["Thai"] = array();
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "สถานะการดำเนินการโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus1_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportSearchresearchRegister_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportSearchresearchRegister_researchRegisterID"] = "การรับสมัครขอรับทุนวิจัย";
	$fieldLabelsreportmonitor["Thai"]["ReportSearchresearchRegister_researchType"] = "ประเภททุน";
	$fieldLabelsreportmonitor["Thai"]["ReportSearchresearchRegister_researchRegisterStatus"] = "สถานะ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus1_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus1_projectStatusName"] = "สถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus1_projectStatusCount"] = "";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus2_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus2_projectStatusName"] = "สถานะอยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus2_projectStatusCount"] = "";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus3_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus3_projectStatusName"] = "สถานะอยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus3_projectStatusCount"] = "";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus4_id"] = "Id";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus4_projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus4_projectStatusCount"] = "";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "จำนวนสถานะการนำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus2_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "สถานะการเบิกจ่าย";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus3_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus5_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus5_projectStatusName"] = "สถานะยกเลิกโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus5_projectStatusCount"] = "";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus6_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus6_projectStatusName"] = "ยังไม่นำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus6_projectStatusCount"] = "จำนวนยังไม่นำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus7_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "สถานะเบิกจ่าย";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "ยอดเบิกจ่าย";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus8_id"] = "ID";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "สถานะค้างเบิกจ่าย";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "ยอดค้างเบิกจ่าย";
}

//	search fields
$tdatareportmonitor[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"projectStatuss" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus1_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportSearchresearchRegister_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchRegisterID" );
$tdatareportmonitor[".searchFields"]["ReportSearchresearchRegister_researchRegisterID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchType" );
$tdatareportmonitor[".searchFields"]["ReportSearchresearchRegister_researchType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportSearchresearchRegister", "field"=>"researchRegisterStatus" );
$tdatareportmonitor[".searchFields"]["ReportSearchresearchRegister_researchRegisterStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus1_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus1_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus1_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus2_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus2_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus2_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus3_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus3_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus3_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus4_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus4_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus4_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus2", "field"=>"trackingProjectDescResultCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus2", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus2_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus3", "field"=>"researchProjectDisburseStatuss" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus3", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus3_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus5_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus5_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus5", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus5_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus6_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus6_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus6", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus6_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus7_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchProjectDisburse" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"id" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus8_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchProjectDisburse" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = $dashField;

// all search fields
$tdatareportmonitor[".allSearchFields"] = array();
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_projectStatuss";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportSearchresearchRegister_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportSearchresearchRegister_researchRegisterID";
$tdatareportmonitor[".allSearchFields"][] = "ReportSearchresearchRegister_researchType";
$tdatareportmonitor[".allSearchFields"][] = "ReportSearchresearchRegister_researchRegisterStatus";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus1_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus2_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus3_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus4_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus2_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus3_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus5_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus5_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus5_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus6_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus6_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus6_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus7_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchProjectDisburse";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus8_id";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchProjectDisburse";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount";

// good like search fields
$tdatareportmonitor[".googleLikeFields"] = array();

$tdatareportmonitor[".dashElements"] = array();

	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus1_chart", "table" => "ReportMonitorGraphTrackingStatus1",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["height"] = 703;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportsearchresearchregister_search", "table" => "ReportSearchresearchRegister",
		 "pageName" => "search","type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus2_chart", "table" => "ReportMonitorGraphTrackingStatus2",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_2";

				$dbelement["height"] = 313;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus3_chart", "table" => "ReportMonitorGraphTrackingStatus3",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_3_2";

				$dbelement["height"] = 313;

$dbelement["masterTable"] = "ReportSearchresearchRegister";

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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


	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;
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

	$tdatareportmonitor[".dashElements"][] = $dbelement;

$tdatareportmonitor[".shortTableName"] = "reportmonitor";
$tdatareportmonitor[".entityType"] = 4;



include_once(getabspath("include/reportmonitor_events.php"));
$tableEvents["ReportMonitor"] = new eventclass_reportmonitor;
$tdatareportmonitor[".hasEvents"] = true;


$tdatareportmonitor[".tableType"] = "dashboard";


		
$tdatareportmonitor[".addPageEvents"] = true;

$tdatareportmonitor[".isUseAjaxSuggest"] = true;

$tables_data["ReportMonitor"]=&$tdatareportmonitor;
$field_labels["ReportMonitor"] = &$fieldLabelsreportmonitor;
$page_titles["ReportMonitor"] = &$pageTitlesreportmonitor;

?>