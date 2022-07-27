<?php
$dalTablebank = array();
$dalTablebank["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablebank["bankCode"] = array("type"=>200,"varname"=>"bankCode", "name" => "bankCode");
$dalTablebank["bankName"] = array("type"=>200,"varname"=>"bankName", "name" => "bankName");
$dalTablebank["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTablebank["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTablebank["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__bank"] = &$dalTablebank;
?>