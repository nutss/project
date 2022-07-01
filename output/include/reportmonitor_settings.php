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
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus_projectStatus"] = "Project Status";
	$fieldLabelsreportmonitor["English"]["ReportMonitorGraphTrackingStatus_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus1_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus1_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus2_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus2_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus3_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus3_projectStatusCount"] = "Project Status Count";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus4_projectStatusName"] = "Project Status Name";
	$fieldLabelsreportmonitor["English"]["ReportMonitorProjectStatus4_projectStatusCount"] = "Project Status Count";
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportmonitor["Thai"] = array();
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus_projectStatus"] = "สถานะการดำเนินโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorGraphTrackingStatus_projectStatusCount"] = "จำนวนสถานะการดำเนินโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus1_projectStatusName"] = "สถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus1_projectStatusCount"] = "จำนวนสถานะโครงการสิ้นสุด";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus2_projectStatusName"] = "อยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus2_projectStatusCount"] = "จำนวนอยู่ระหว่างการดำเนินการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus3_projectStatusName"] = "อยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus3_projectStatusCount"] = "จำนวนอยู่ระหว่างการขยายเวลา";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus4_projectStatusName"] = "ยกเลิกโครงการ";
	$fieldLabelsreportmonitor["Thai"]["ReportMonitorProjectStatus4_projectStatusCount"] = "จำนวนยกเลิกโครงการ";
}

//	search fields
$tdatareportmonitor[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus", "field"=>"projectStatus" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus_projectStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorGraphTrackingStatus", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorGraphTrackingStatus_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus1_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus1", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus1_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus2_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus2", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus2_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus3_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus3", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus3_projectStatusCount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusName" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus4_projectStatusName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMonitorProjectStatus4", "field"=>"projectStatusCount" );
$tdatareportmonitor[".searchFields"]["ReportMonitorProjectStatus4_projectStatusCount"] = $dashField;

// all search fields
$tdatareportmonitor[".allSearchFields"] = array();
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus_projectStatus";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorGraphTrackingStatus_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor[".allSearchFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";

// good like search fields
$tdatareportmonitor[".googleLikeFields"] = array();
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus_projectStatus";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorGraphTrackingStatus_projectStatusCount";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus1_projectStatusName";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus1_projectStatusCount";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus2_projectStatusName";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus2_projectStatusCount";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus3_projectStatusName";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus3_projectStatusCount";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus4_projectStatusName";
$tdatareportmonitor[".googleLikeFields"][] = "ReportMonitorProjectStatus4_projectStatusCount";

$tdatareportmonitor[".dashElements"] = array();

	$dbelement = array( "elementName" => "reportmonitorgraphtrackingstatus_chart", "table" => "ReportMonitorGraphTrackingStatus",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 570;
		$dbelement["height"] = 704;


	$tdatareportmonitor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmonitorprojectstatus1_list", "table" => "ReportMonitorProjectStatus1",
		 "pageName" => "list","type" => 0);
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


	$tdatareportmonitor[".dashElements"][] = $dbelement;
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


	$tdatareportmonitor[".dashElements"][] = $dbelement;
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


	$tdatareportmonitor[".dashElements"][] = $dbelement;
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


	$tdatareportmonitor[".dashElements"][] = $dbelement;

$tdatareportmonitor[".shortTableName"] = "reportmonitor";
$tdatareportmonitor[".entityType"] = 4;



$tableEvents["ReportMonitor"] = new eventsBase;
$tdatareportmonitor[".hasEvents"] = false;


$tdatareportmonitor[".tableType"] = "dashboard";



$tdatareportmonitor[".addPageEvents"] = false;

$tdatareportmonitor[".isUseAjaxSuggest"] = true;

$tables_data["ReportMonitor"]=&$tdatareportmonitor;
$field_labels["ReportMonitor"] = &$fieldLabelsreportmonitor;
$page_titles["ReportMonitor"] = &$pageTitlesreportmonitor;

?>