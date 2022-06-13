<?php
$dalTableresearchAppointment = array();
$dalTableresearchAppointment["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableresearchAppointment["researchProjectID"] = array("type"=>3,"varname"=>"researchProjectID", "name" => "researchProjectID");
$dalTableresearchAppointment["researchAppointmentNo"] = array("type"=>200,"varname"=>"researchAppointmentNo", "name" => "researchAppointmentNo");
$dalTableresearchAppointment["researchAppointmentPeriod"] = array("type"=>200,"varname"=>"researchAppointmentPeriod", "name" => "researchAppointmentPeriod");
$dalTableresearchAppointment["researchAppointmentDate"] = array("type"=>200,"varname"=>"researchAppointmentDate", "name" => "researchAppointmentDate");
$dalTableresearchAppointment["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableresearchAppointment["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableresearchAppointment["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__researchAppointment"] = &$dalTableresearchAppointment;
?>