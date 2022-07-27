<?php
$tdatabank = array();
$tdatabank[".searchableFields"] = array();
$tdatabank[".ShortName"] = "bank";
$tdatabank[".OwnerID"] = "";
$tdatabank[".OriginalTable"] = "bank";


$tdatabank[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabank[".originalPagesByType"] = $tdatabank[".pagesByType"];
$tdatabank[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabank[".originalPages"] = $tdatabank[".pages"];
$tdatabank[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabank[".originalDefaultPages"] = $tdatabank[".defaultPages"];

//	field labels
$fieldLabelsbank = array();
$fieldToolTipsbank = array();
$pageTitlesbank = array();
$placeHoldersbank = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbank["English"] = array();
	$fieldToolTipsbank["English"] = array();
	$placeHoldersbank["English"] = array();
	$pageTitlesbank["English"] = array();
	$fieldLabelsbank["English"]["id"] = "Id";
	$fieldToolTipsbank["English"]["id"] = "";
	$placeHoldersbank["English"]["id"] = "";
	$fieldLabelsbank["English"]["bankCode"] = "Bank Code";
	$fieldToolTipsbank["English"]["bankCode"] = "";
	$placeHoldersbank["English"]["bankCode"] = "";
	$fieldLabelsbank["English"]["bankName"] = "Bank Name";
	$fieldToolTipsbank["English"]["bankName"] = "";
	$placeHoldersbank["English"]["bankName"] = "";
	$fieldLabelsbank["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsbank["English"]["entryUserName"] = "";
	$placeHoldersbank["English"]["entryUserName"] = "";
	$fieldLabelsbank["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsbank["English"]["entryTime"] = "";
	$placeHoldersbank["English"]["entryTime"] = "";
	if (count($fieldToolTipsbank["English"]))
		$tdatabank[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsbank["Thai"] = array();
	$fieldToolTipsbank["Thai"] = array();
	$placeHoldersbank["Thai"] = array();
	$pageTitlesbank["Thai"] = array();
	$fieldLabelsbank["Thai"]["id"] = "Id";
	$fieldToolTipsbank["Thai"]["id"] = "";
	$placeHoldersbank["Thai"]["id"] = "";
	$fieldLabelsbank["Thai"]["bankName"] = "ชื่อธนาคาร";
	$fieldToolTipsbank["Thai"]["bankName"] = "";
	$placeHoldersbank["Thai"]["bankName"] = "";
	$fieldLabelsbank["Thai"]["bankCode"] = "รหัสธนาคาร";
	$fieldToolTipsbank["Thai"]["bankCode"] = "";
	$placeHoldersbank["Thai"]["bankCode"] = "";
	$fieldLabelsbank["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsbank["Thai"]["entryUserName"] = "";
	$placeHoldersbank["Thai"]["entryUserName"] = "";
	$fieldLabelsbank["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsbank["Thai"]["entryTime"] = "";
	$placeHoldersbank["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsbank["Thai"]))
		$tdatabank[".isUseToolTips"] = true;
}


	$tdatabank[".NCSearch"] = true;



$tdatabank[".shortTableName"] = "bank";
$tdatabank[".nSecOptions"] = 0;

$tdatabank[".mainTableOwnerID"] = "";
$tdatabank[".entityType"] = 0;
$tdatabank[".connId"] = "mc_at_192_168_1_111";


$tdatabank[".strOriginalTableName"] = "bank";

	



$tdatabank[".showAddInPopup"] = false;

$tdatabank[".showEditInPopup"] = false;

$tdatabank[".showViewInPopup"] = false;

$tdatabank[".listAjax"] = false;
//	temporary
//$tdatabank[".listAjax"] = false;

	$tdatabank[".audit"] = false;

	$tdatabank[".locking"] = false;


$pages = $tdatabank[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabank[".edit"] = true;
	$tdatabank[".afterEditAction"] = 1;
	$tdatabank[".closePopupAfterEdit"] = 1;
	$tdatabank[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabank[".add"] = true;
$tdatabank[".afterAddAction"] = 1;
$tdatabank[".closePopupAfterAdd"] = 1;
$tdatabank[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabank[".list"] = true;
}



$tdatabank[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabank[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabank[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabank[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabank[".printFriendly"] = true;
}



$tdatabank[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabank[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabank[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabank[".isUseAjaxSuggest"] = true;

$tdatabank[".rowHighlite"] = true;



						

$tdatabank[".ajaxCodeSnippetAdded"] = false;

$tdatabank[".buttonsAdded"] = false;

$tdatabank[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabank[".isUseTimeForSearch"] = false;


$tdatabank[".badgeColor"] = "3CB371";


$tdatabank[".allSearchFields"] = array();
$tdatabank[".filterFields"] = array();
$tdatabank[".requiredSearchFields"] = array();

$tdatabank[".googleLikeFields"] = array();
$tdatabank[".googleLikeFields"][] = "id";
$tdatabank[".googleLikeFields"][] = "bankCode";
$tdatabank[".googleLikeFields"][] = "bankName";
$tdatabank[".googleLikeFields"][] = "entryUserName";
$tdatabank[".googleLikeFields"][] = "entryTime";



$tdatabank[".tableType"] = "list";

$tdatabank[".printerPageOrientation"] = 0;
$tdatabank[".nPrinterPageScale"] = 100;

$tdatabank[".nPrinterSplitRecords"] = 40;

$tdatabank[".geocodingEnabled"] = false;










$tdatabank[".pageSize"] = 20;

$tdatabank[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabank[".strOrderBy"] = $tstrOrderBy;

$tdatabank[".orderindexes"] = array();


$tdatabank[".sqlHead"] = "SELECT id,  	bankCode,  	bankName,  	entryUserName,  	entryTime";
$tdatabank[".sqlFrom"] = "FROM bank";
$tdatabank[".sqlWhereExpr"] = "";
$tdatabank[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabank[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabank[".arrGroupsPerPage"] = $arrGPP;

$tdatabank[".highlightSearchResults"] = true;

$tableKeysbank = array();
$tableKeysbank[] = "id";
$tdatabank[".Keys"] = $tableKeysbank;


$tdatabank[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bank";
	$fdata["Label"] = GetFieldLabel("bank","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabank["id"] = $fdata;
		$tdatabank[".searchableFields"][] = "id";
//	bankCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bankCode";
	$fdata["GoodName"] = "bankCode";
	$fdata["ownerTable"] = "bank";
	$fdata["Label"] = GetFieldLabel("bank","bankCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bankCode";

		$fdata["sourceSingle"] = "bankCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bankCode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabank["bankCode"] = $fdata;
		$tdatabank[".searchableFields"][] = "bankCode";
//	bankName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "bankName";
	$fdata["GoodName"] = "bankName";
	$fdata["ownerTable"] = "bank";
	$fdata["Label"] = GetFieldLabel("bank","bankName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bankName";

		$fdata["sourceSingle"] = "bankname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bankName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabank["bankName"] = $fdata;
		$tdatabank[".searchableFields"][] = "bankName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "bank";
	$fdata["Label"] = GetFieldLabel("bank","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUserName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabank["entryUserName"] = $fdata;
		$tdatabank[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "bank";
	$fdata["Label"] = GetFieldLabel("bank","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabank["entryTime"] = $fdata;
		$tdatabank[".searchableFields"][] = "entryTime";


$tables_data["bank"]=&$tdatabank;
$field_labels["bank"] = &$fieldLabelsbank;
$fieldToolTips["bank"] = &$fieldToolTipsbank;
$placeHolders["bank"] = &$placeHoldersbank;
$page_titles["bank"] = &$pageTitlesbank;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bank"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bank"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bank()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	bankCode,  	bankName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM bank";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bank",
	"m_srcTableName" => "bank"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bank";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "bankCode",
	"m_strTable" => "bank",
	"m_srcTableName" => "bank"
));

$proto8["m_sql"] = "bankCode";
$proto8["m_srcTableName"] = "bank";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "bankName",
	"m_strTable" => "bank",
	"m_srcTableName" => "bank"
));

$proto10["m_sql"] = "bankName";
$proto10["m_srcTableName"] = "bank";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "bank",
	"m_srcTableName" => "bank"
));

$proto12["m_sql"] = "entryUserName";
$proto12["m_srcTableName"] = "bank";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "bank",
	"m_srcTableName" => "bank"
));

$proto14["m_sql"] = "entryTime";
$proto14["m_srcTableName"] = "bank";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bank";
$proto17["m_srcTableName"] = "bank";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "bankCode";
$proto17["m_columns"][] = "bankName";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "entryTime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bank";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bank";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bank";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bank = createSqlQuery_bank();


	
				;

					

$tdatabank[".sqlquery"] = $queryData_bank;



$tableEvents["bank"] = new eventsBase;
$tdatabank[".hasEvents"] = false;

?>