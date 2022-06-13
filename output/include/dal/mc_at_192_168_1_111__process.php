<?php
$dalTableprocess = array();
$dalTableprocess["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableprocess["processName"] = array("type"=>200,"varname"=>"processName", "name" => "processName");
$dalTableprocess["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableprocess["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableprocess["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__process"] = &$dalTableprocess;
?>