<?php 

require_once(getabspath("include/LocaleFunctions.php"));

//	locale settings
//	locale settings

$locale_info = array();

$locale_info["LOCALE_LANGNAME"]="th";
$locale_info["LOCALE_CTRYNAME"]="TH";
//	date settings
$locale_info["LOCALE_ICENTURY"]="1";
$locale_info["LOCALE_IDATE"]="1";
$locale_info["LOCALE_ILDATE"]="1";
$locale_info["LOCALE_SDATE"]="/";
$locale_info["LOCALE_SLONGDATE"]="'วัน'dddd'ที่' d MMMM yyyy";
$locale_info["LOCALE_SSHORTDATE"]="d/M/yyyy";
//	weekday names
$locale_info["LOCALE_IFIRSTDAYOFWEEK"]="0";
$locale_info["LOCALE_SDAYNAME1"]="จันทร์";
$locale_info["LOCALE_SDAYNAME2"]="อังคาร";
$locale_info["LOCALE_SDAYNAME3"]="พุธ";
$locale_info["LOCALE_SDAYNAME4"]="พฤหัสบดี";
$locale_info["LOCALE_SDAYNAME5"]="ศุกร์";
$locale_info["LOCALE_SDAYNAME6"]="เสาร์";
$locale_info["LOCALE_SDAYNAME7"]="อาทิตย์";
$locale_info["LOCALE_SABBREVDAYNAME1"]="จ.";
$locale_info["LOCALE_SABBREVDAYNAME2"]="อ.";
$locale_info["LOCALE_SABBREVDAYNAME3"]="พ.";
$locale_info["LOCALE_SABBREVDAYNAME4"]="พฤ.";
$locale_info["LOCALE_SABBREVDAYNAME5"]="ศ.";
$locale_info["LOCALE_SABBREVDAYNAME6"]="ส.";
$locale_info["LOCALE_SABBREVDAYNAME7"]="อา.";
//	month names
$locale_info["LOCALE_SMONTHNAME1"]="มกราคม";
$locale_info["LOCALE_SMONTHNAME2"]="กุมภาพันธ์";
$locale_info["LOCALE_SMONTHNAME3"]="มีนาคม";
$locale_info["LOCALE_SMONTHNAME4"]="เมษายน";
$locale_info["LOCALE_SMONTHNAME5"]="พฤษภาคม";
$locale_info["LOCALE_SMONTHNAME6"]="มิถุนายน";
$locale_info["LOCALE_SMONTHNAME7"]="กรกฎาคม";
$locale_info["LOCALE_SMONTHNAME8"]="สิงหาคม";
$locale_info["LOCALE_SMONTHNAME9"]="กันยายน";
$locale_info["LOCALE_SMONTHNAME10"]="ตุลาคม";
$locale_info["LOCALE_SMONTHNAME11"]="พฤศจิกายน";
$locale_info["LOCALE_SMONTHNAME12"]="ธันวาคม";
$locale_info["LOCALE_SABBREVMONTHNAME1"]="ม.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME2"]="ก.พ.";
$locale_info["LOCALE_SABBREVMONTHNAME3"]="มี.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME4"]="เม.ย.";
$locale_info["LOCALE_SABBREVMONTHNAME5"]="พ.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME6"]="มิ.ย.";
$locale_info["LOCALE_SABBREVMONTHNAME7"]="ก.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME8"]="ส.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME9"]="ก.ย.";
$locale_info["LOCALE_SABBREVMONTHNAME10"]="ต.ค.";
$locale_info["LOCALE_SABBREVMONTHNAME11"]="พ.ย.";
$locale_info["LOCALE_SABBREVMONTHNAME12"]="ธ.ค.";
//	time settings
$locale_info["LOCALE_ITIME"]="1";
$locale_info["LOCALE_ITIMEMARKPOSN"]="0";
$locale_info["LOCALE_ITLZERO"]="0";
$locale_info["LOCALE_S1159"]="AM";
$locale_info["LOCALE_S2359"]="PM";
$locale_info["LOCALE_STIME"]=":";
$locale_info["LOCALE_STIMEFORMAT"]="H:mm:ss";
//	currency settings
$locale_info["LOCALE_ICURRDIGITS"]="2";
$locale_info["LOCALE_ICURRENCY"]="0";
$locale_info["LOCALE_INEGCURR"]="1";
$locale_info["LOCALE_SCURRENCY"]="฿";
$locale_info["LOCALE_SMONDECIMALSEP"]=".";
$locale_info["LOCALE_SMONGROUPING"]="3;0";
$locale_info["LOCALE_SMONTHOUSANDSEP"]=",";
//	numbers formatting settings
$locale_info["LOCALE_IDIGITS"]="2";
$locale_info["LOCALE_INEGNUMBER"]="1";
$locale_info["LOCALE_SDECIMAL"]=".";
$locale_info["LOCALE_SGROUPING"]="3;0";
$locale_info["LOCALE_SNEGATIVESIGN"]="-";
$locale_info["LOCALE_SPOSITIVESIGN"]="";
$locale_info["LOCALE_STHOUSAND"]=",";
;
$locale_info["LOCALE_ILONGDATE"]=GetLongDateFormat();
 
 /**
 * 	converts mysql datetime to array(year,month,day,hour,minute,second)
 * @intellisense
 */
function db2time($str)
{
	$now=localtime(time(),1);
    $isdst=$now["tm_isdst"];
    $havedate=0;
	$havetime=0;
	if(is_numeric($str))
//	timestamp
	{
		$havedate=1;
		$len=strlen($str);
		if($len>=10)
		  $havetime=1;
		switch($len)
		{
		  case 14:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 12:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 10:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 18:
		  	$pattern="/(\d{4})(\d{2})(\d{2})/";
			break;
		  case 8:
		  	$pattern="/(\d{4})(\d{2})(\d{2})/";
			break;
		  case 6:
		  	$pattern="/(\d{2})(\d{2})(\d{2})/";
			break;
		  case 4:
		  	$pattern="/(\d{2})(\d{2})/";
			break;
		  case 2:
		  	$pattern="/(\d{2})/";
			break;
	      default: 
		    return array();
	    }
		if(preg_match($pattern,$str,$parsed))
		{
		  $y=$parsed[1];
		  $mo=(count($parsed)>2)?$parsed[2]:1;
		  $d=(count($parsed)>3)?$parsed[3]:1;
		  $h=(count($parsed)>4)?$parsed[4]:0;
		  $mi=(count($parsed)>5)?$parsed[5]:0;
		  $s=(count($parsed)>6)?$parsed[6]:0;
		}
		else
		  return array();
		  
	}
	else if(is_string($str))
// date,time,datetime
	{
	  if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})/", $str, $parsed)) // datetime
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = $parsed[4];
			$mi = $parsed[5];
			$s = $parsed[6];
		    $havedate=1;
			$havetime=1;
		}
		else if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // date
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = 0;
			$mi = 0;
			$s = 0;
		    $havedate=1;
		}
		else if(preg_match("/(\d{2})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // time
		{
		  $y=$now["tm_year"];
		  $mo=$now["tm_mon"]+1;
		  $d=$now["tm_mday"];
		  $h = $parsed[1];
		  $mi = $parsed[2];
		  $s = $parsed[3];
		  $havetime=1;
		}
		else 
			return array();
	}
	else
	{
		return array();
	}
	if(!$havetime)
	{
		$h=0;
		$mi=0;
		$s=0;
	}
	if(!$havedate)
	{
		$y=$now["tm_year"]+1900;
		$mo=$now["tm_mon"]+1;
		$d=$now["tm_mday"];
	}
//	return mktime($h,$mi,$s,$mo,$d,$y);
	return array((integer)$y,(integer)$mo,(integer)$d,(integer)$h,(integer)$mi,(integer)$s);
}

?>