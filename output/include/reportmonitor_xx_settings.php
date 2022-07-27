<?php
require_once(getabspath("classes/cipherer.php"));



$tdatareportmonitor_xx = array();
$tdatareportmonitor_xx[".ShortName"] = "reportmonitor_xx";

$tdatareportmonitor_xx[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatareportmonitor_xx[".originalPagesByType"] = $tdatareportmonitor_xx[".pagesByType"];
$tdatareportmonitor_xx[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatareportmonitor_xx[".originalPages"] = $tdatareportmonitor_xx[".pages"];
$tdatareportmonitor_xx[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatareportmonitor_xx[".originalDefaultPages"] = $tdatareportmonitor_xx[".defaultPages"];


//	field labels
$fieldLabelsreportmonitor_xx = array();
$pageTitlesreportmonitor_xx = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportmonitor_xx["English"] = array();
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus1_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus1_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus2_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus2_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus3_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus3_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus4_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus4_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "Tracking Project Desc Result Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "Project Statuss";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorGraphTrackingStatus1_id"] = "Id";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "Research Project Disburse Statuss";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "Research Project Disburse";
	$fieldLabelsreportmonitor_xx["English"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "Research Operating Period Disburse Count";
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitor_xx["Thai"] = array();
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus1_projectStatusName"] = "สถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus1_projectStatusCount"] = "จำนวนสถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus2_projectStatusName"] = "อยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus2_projectStatusCount"] = "จำนวนอยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus3_projectStatusName"] = "อยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus3_projectStatusCount"] = "จำนวนอยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus4_projectStatusName"] = "ยกเลิกโครงการ";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus4_projectStatusCount"] = "จำนวนยกเลิกโครงการ";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = "จำนวนสถานะการนำไปใช้ประโยชน์";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = "Project Statuss";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorGraphTrackingStatus1_id"] = "Id";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = "สถานะการเบิกจ่าย";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = "สถานะเบิกจ่าย";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = "ยอดเบิกจ่าย";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = "สถานะค้างเบิกจ่าย";
	$fieldLabelsreportmonitor_xx["Thai"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = "ยอดค้างเบิกจ่าย";
}

//	search fields
$tdatareportmonitor_xx[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusName" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus1_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus1_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusName" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus2_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus2_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusName" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus3_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus3_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusName" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus4_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus4_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus2", "field"=>"trackingProjectDescResultCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"projectStatuss" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorGraphTrackingStatus1_projectStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus1", "field"=>"id" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorGraphTrackingStatus1_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus3", "field"=>"researchProjectDisburseStatuss" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchProjectDisburse" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus7_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus7", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchProjectDisburse" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus8_researchProjectDisburse"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus8", "field"=>"researchOperatingPeriodDisburseCount" );
$tdatareportmonitor_xx[".searchFields"]["ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount"] = $dashField;

// all search fields
$tdatareportmonitor_xx[".allSearchFields"] = array();
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_projectStatuss";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus1_id";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchProjectDisburse";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchProjectDisburse";
$tdatareportmonitor_xx[".allSearchFields"][] = "ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount";

// good like search fields
$tdatareportmonitor_xx[".googleLikeFields"] = array();
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus2_trackingProjectDescResultCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus1_projectStatuss";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus1_id";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus3_researchProjectDisburseStatuss";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus7_researchProjectDisburse";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus7_researchOperatingPeriodDisburseCount";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus8_researchProjectDisburse";
$tdatareportmonitor_xx[".googleLikeFields"][] = "ReportMonitorProjectStatus8_researchOperatingPeriodDisburseCount";

$tdatareportmonitor_xx[".dashElements"] = array();

	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus_chart", "table" => "ReportMonitorGraphTrackingStatus1",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 400;
		$dbelement["height"] = 704;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus1_list", "table" => "ReportMonitorProjectStatus1",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_0_1";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus2_list", "table" => "ReportMonitorProjectStatus2",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_1";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus3_list", "table" => "ReportMonitorProjectStatus3",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_2_1";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus4_list", "table" => "ReportMonitorProjectStatus4",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_3_1";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus2_chart", "table" => "ReportMonitorGraphTrackingStatus2",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_2";

			$dbelement["width"] = 400;
		$dbelement["height"] = 313;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus3_chart", "table" => "ReportMonitorGraphTrackingStatus3",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_2_2";

			$dbelement["width"] = 400;
		$dbelement["height"] = 313;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus5_list", "table" => "ReportMonitorProjectStatus5",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_0_3";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus6_list", "table" => "ReportMonitorProjectStatus6",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_1_3";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus7_list", "table" => "ReportMonitorProjectStatus7",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_2_3";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus8_list", "table" => "ReportMonitorProjectStatus8",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_3_3";

			$dbelement["width"] = 300;
		$dbelement["height"] = 118;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatareportmonitor_xx[".dashElements"][] = $dbelement;

$tdatareportmonitor_xx[".shortTableName"] = "reportmonitor_xx";
$tdatareportmonitor_xx[".entityType"] = 4;



$tableEvents["ReportMonitor_xx"] = new eventsBase;
$tdatareportmonitor_xx[".hasEvents"] = false;


$tdatareportmonitor_xx[".tableType"] = "dashboard";


		
$tdatareportmonitor_xx[".addPageEvents"] = false;

$tdatareportmonitor_xx[".isUseAjaxSuggest"] = true;

$tables_data["ReportMonitor_xx"]=&$tdatareportmonitor_xx;
$field_labels["ReportMonitor_xx"] = &$fieldLabelsreportmonitor_xx;
$page_titles["ReportMonitor_xx"] = &$pageTitlesreportmonitor_xx;

?>