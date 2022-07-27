<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboardmission = array();
$tdatadashboardmission[".ShortName"] = "dashboardmission";

$tdatadashboardmission[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboardmission[".originalPagesByType"] = $tdatadashboardmission[".pagesByType"];
$tdatadashboardmission[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboardmission[".originalPages"] = $tdatadashboardmission[".pages"];
$tdatadashboardmission[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboardmission[".originalDefaultPages"] = $tdatadashboardmission[".defaultPages"];


//	field labels
$fieldLabelsdashboardmission = array();
$pageTitlesdashboardmission = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboardmission["English"] = array();
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowID"] = "Mission Follow ID";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_id"] = "Id";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowActionStatus1"] = "Mission Follow Action Status1";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowActionStatus2"] = "Mission Follow Action Status2";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowActionStatus3"] = "Mission Follow Action Status3";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowActionStatus4"] = "Mission Follow Action Status4";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_entryUserName"] = "Entry User Name";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowActionStatus"] = "Mission Follow Action Status";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionFollowName"] = "Mission Follow Name";
	$fieldLabelsdashboardmission["English"]["ReportGraphmissionFollow_missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldLabelsdashboardmission["English"]["ReportMission_id"] = "ID";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowID"] = "Mission Follow ID";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowNo"] = "Mission Follow No";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowName"] = "Mission Follow Name";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldLabelsdashboardmission["English"]["ReportMission_entryUserName"] = "Entry User Name";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowStartDate"] = "Mission Follow Start Date";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowEndDate"] = "Mission Follow End Date";
	$fieldLabelsdashboardmission["English"]["ReportMission_UseTime"] = "Use Time";
	$fieldLabelsdashboardmission["English"]["ReportMission_overdueTime"] = "Overdue Time";
	$fieldLabelsdashboardmission["English"]["ReportMission_missionFollowActionStatus"] = "Mission Follow Action Status";
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsdashboardmission["Thai"] = array();
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowID"] = "Mission Follow ID";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_id"] = "ID";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowActionStatus1"] = "อยู่ระหว่างการดำเนินการ";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowActionStatus2"] = "สิ้นสุดโครงการ";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowActionStatus3"] = "อยู่ระหว่างการขยายเวลา";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowActionStatus4"] = "ยกเลิกโครงการ";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_entryUserName"] = "มอบหมายโดย";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowActionStatus"] = "สถานะการดำเนินการ";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionFollowName"] = "Mission Follow Name";
	$fieldLabelsdashboardmission["Thai"]["ReportGraphmissionFollow_missionAssignmentResponsibleName"] = "Mission Assignment Responsible Name";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_id"] = "";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowID"] = "Mission Follow ID";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowNo"] = "รหัสภารกิจ";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowName"] = "ภารกิจ";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionAssignmentResponsibleName"] = "ผู้รับผิดชอบ";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_entryUserName"] = "มอบหมายโดย";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowStartDate"] = "เริ่มต้นภารกิจ";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowEndDate"] = "สิ้นสุดภารกิจ";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_UseTime"] = "เวลาที่ใช้";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_overdueTime"] = "เกินกำหนด";
	$fieldLabelsdashboardmission["Thai"]["ReportMission_missionFollowActionStatus"] = "สถานะ";
}

//	search fields
$tdatadashboardmission[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowID" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"id" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowActionStatus1" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowActionStatus1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowActionStatus2" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowActionStatus2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowActionStatus3" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowActionStatus3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowActionStatus4" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowActionStatus4"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"entryUserName" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_entryUserName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowActionStatus" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowActionStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionFollowName" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionFollowName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportGraphmissionFollow", "field"=>"missionAssignmentResponsibleName" );
$tdatadashboardmission[".searchFields"]["ReportGraphmissionFollow_missionAssignmentResponsibleName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"id" );
$tdatadashboardmission[".searchFields"]["ReportMission_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowID" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowNo" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowNo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowName" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionAssignmentResponsibleName" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionAssignmentResponsibleName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"entryUserName" );
$tdatadashboardmission[".searchFields"]["ReportMission_entryUserName"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowStartDate" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowStartDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowEndDate" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowEndDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"UseTime" );
$tdatadashboardmission[".searchFields"]["ReportMission_UseTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"overdueTime" );
$tdatadashboardmission[".searchFields"]["ReportMission_overdueTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"ReportMission", "field"=>"missionFollowActionStatus" );
$tdatadashboardmission[".searchFields"]["ReportMission_missionFollowActionStatus"] = $dashField;

// all search fields
$tdatadashboardmission[".allSearchFields"] = array();
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowID";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_id";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus1";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus2";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus3";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus4";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_entryUserName";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionFollowName";
$tdatadashboardmission[".allSearchFields"][] = "ReportGraphmissionFollow_missionAssignmentResponsibleName";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_id";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowID";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowNo";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowName";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionAssignmentResponsibleName";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_entryUserName";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowStartDate";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowEndDate";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_UseTime";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_overdueTime";
$tdatadashboardmission[".allSearchFields"][] = "ReportMission_missionFollowActionStatus";

// good like search fields
$tdatadashboardmission[".googleLikeFields"] = array();
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowID";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_id";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus1";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus2";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus3";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus4";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_entryUserName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowActionStatus";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionFollowName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportGraphmissionFollow_missionAssignmentResponsibleName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_id";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowID";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowNo";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionAssignmentResponsibleName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_entryUserName";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowStartDate";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowEndDate";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_UseTime";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_overdueTime";
$tdatadashboardmission[".googleLikeFields"][] = "ReportMission_missionFollowActionStatus";

$tdatadashboardmission[".dashElements"] = array();

	$dbelement = array( "elementName" => "reportgraphmissionfollow_chart", "table" => "ReportGraphmissionFollow",
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_2_0";

		$dbelement["reload"] = 1;
		

	$tdatadashboardmission[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmission_search", "table" => "ReportMission",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatadashboardmission[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "reportmission_list", "table" => "ReportMission",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatadashboardmission[".dashElements"][] = $dbelement;

$tdatadashboardmission[".shortTableName"] = "dashboardmission";
$tdatadashboardmission[".entityType"] = 4;



$tableEvents["DashboardMission"] = new eventsBase;
$tdatadashboardmission[".hasEvents"] = false;


$tdatadashboardmission[".tableType"] = "dashboard";


		
$tdatadashboardmission[".addPageEvents"] = false;

$tdatadashboardmission[".isUseAjaxSuggest"] = true;

$tables_data["DashboardMission"]=&$tdatadashboardmission;
$field_labels["DashboardMission"] = &$fieldLabelsdashboardmission;
$page_titles["DashboardMission"] = &$pageTitlesdashboardmission;

?>