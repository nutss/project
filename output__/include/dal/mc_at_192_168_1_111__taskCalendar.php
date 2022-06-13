<?php
$dalTabletaskCalendar = array();
$dalTabletaskCalendar["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletaskCalendar["projectID"] = array("type"=>3,"varname"=>"projectID", "name" => "projectID");
$dalTabletaskCalendar["progressAppointDate"] = array("type"=>7,"varname"=>"progressAppointDate", "name" => "progressAppointDate");
$dalTabletaskCalendar["mettingType"] = array("type"=>200,"varname"=>"mettingType", "name" => "mettingType");
$dalTabletaskCalendar["progressStatus"] = array("type"=>200,"varname"=>"progressStatus", "name" => "progressStatus");
$dalTabletaskCalendar["contactName"] = array("type"=>200,"varname"=>"contactName", "name" => "contactName");
$dalTabletaskCalendar["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTabletaskCalendar["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTabletaskCalendar["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__taskCalendar"] = &$dalTabletaskCalendar;
?>