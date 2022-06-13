<?php
$dalTabletaskProgress = array();
$dalTabletaskProgress["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletaskProgress["projectID"] = array("type"=>3,"varname"=>"projectID", "name" => "projectID");
$dalTabletaskProgress["progressDate"] = array("type"=>7,"varname"=>"progressDate", "name" => "progressDate");
$dalTabletaskProgress["progressStep"] = array("type"=>200,"varname"=>"progressStep", "name" => "progressStep");
$dalTabletaskProgress["progressStatus"] = array("type"=>200,"varname"=>"progressStatus", "name" => "progressStatus");
$dalTabletaskProgress["progressDesc"] = array("type"=>200,"varname"=>"progressDesc", "name" => "progressDesc");
$dalTabletaskProgress["progressAttFille"] = array("type"=>201,"varname"=>"progressAttFille", "name" => "progressAttFille");
$dalTabletaskProgress["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTabletaskProgress["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTabletaskProgress["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__taskProgress"] = &$dalTabletaskProgress;
?>