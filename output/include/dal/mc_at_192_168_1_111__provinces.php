<?php
$dalTableprovinces = array();
$dalTableprovinces["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableprovinces["code"] = array("type"=>200,"varname"=>"code", "name" => "code");
$dalTableprovinces["name_th"] = array("type"=>200,"varname"=>"name_th", "name" => "name_th");
$dalTableprovinces["name_en"] = array("type"=>200,"varname"=>"name_en", "name" => "name_en");
$dalTableprovinces["geography_id"] = array("type"=>3,"varname"=>"geography_id", "name" => "geography_id");
	$dalTableprovinces["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__provinces"] = &$dalTableprovinces;
?>