<?php
$dalTableresearchRenewal = array();
$dalTableresearchRenewal["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableresearchRenewal["researchProjectID"] = array("type"=>3,"varname"=>"researchProjectID", "name" => "researchProjectID");
$dalTableresearchRenewal["researchRenewalNo"] = array("type"=>200,"varname"=>"researchRenewalNo", "name" => "researchRenewalNo");
$dalTableresearchRenewal["researchRenewalPeriod"] = array("type"=>200,"varname"=>"researchRenewalPeriod", "name" => "researchRenewalPeriod");
$dalTableresearchRenewal["researchAppointmentDay"] = array("type"=>200,"varname"=>"researchAppointmentDay", "name" => "researchAppointmentDay");
$dalTableresearchRenewal["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableresearchRenewal["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableresearchRenewal["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__researchRenewal"] = &$dalTableresearchRenewal;
?>