<?php
$dalTablemissionFollow = array();
$dalTablemissionFollow["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablemissionFollow["missionFollowNo"] = array("type"=>200,"varname"=>"missionFollowNo", "name" => "missionFollowNo");
$dalTablemissionFollow["missionFollowName"] = array("type"=>200,"varname"=>"missionFollowName", "name" => "missionFollowName");
$dalTablemissionFollow["missionFollowStartDate"] = array("type"=>7,"varname"=>"missionFollowStartDate", "name" => "missionFollowStartDate");
$dalTablemissionFollow["missionFollowEndDate"] = array("type"=>7,"varname"=>"missionFollowEndDate", "name" => "missionFollowEndDate");
$dalTablemissionFollow["missionFollowStatus"] = array("type"=>200,"varname"=>"missionFollowStatus", "name" => "missionFollowStatus");
$dalTablemissionFollow["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTablemissionFollow["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTablemissionFollow["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__missionFollow"] = &$dalTablemissionFollow;
?>