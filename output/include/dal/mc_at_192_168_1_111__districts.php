<?php
$dalTabledistricts = array();
$dalTabledistricts["id"] = array("type"=>200,"varname"=>"id", "name" => "id");
$dalTabledistricts["zip_code"] = array("type"=>3,"varname"=>"zip_code", "name" => "zip_code");
$dalTabledistricts["name_th"] = array("type"=>200,"varname"=>"name_th", "name" => "name_th");
$dalTabledistricts["name_en"] = array("type"=>200,"varname"=>"name_en", "name" => "name_en");
$dalTabledistricts["amphure_id"] = array("type"=>3,"varname"=>"amphure_id", "name" => "amphure_id");
	$dalTabledistricts["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__districts"] = &$dalTabledistricts;
?>