<?php
$tdataprojecttype = array();
$tdataprojecttype[".searchableFields"] = array();
$tdataprojecttype[".ShortName"] = "projecttype";
$tdataprojecttype[".OwnerID"] = "";
$tdataprojecttype[".OriginalTable"] = "ProjectType";


$tdataprojecttype[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprojecttype[".originalPagesByType"] = $tdataprojecttype[".pagesByType"];
$tdataprojecttype[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprojecttype[".originalPages"] = $tdataprojecttype[".pages"];
$tdataprojecttype[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprojecttype[".originalDefaultPages"] = $tdataprojecttype[".defaultPages"];

//	field labels
$fieldLabelsprojecttype = array();
$fieldToolTipsprojecttype = array();
$pageTitlesprojecttype = array();
$placeHoldersprojecttype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojecttype["English"] = array();
	$fieldToolTipsprojecttype["English"] = array();
	$placeHoldersprojecttype["English"] = array();
	$pageTitlesprojecttype["English"] = array();
	$fieldLabelsprojecttype["English"]["id"] = "Id";
	$fieldToolTipsprojecttype["English"]["id"] = "";
	$placeHoldersprojecttype["English"]["id"] = "";
	$fieldLabelsprojecttype["English"]["typeNumber"] = "Type Number";
	$fieldToolTipsprojecttype["English"]["typeNumber"] = "";
	$placeHoldersprojecttype["English"]["typeNumber"] = "";
	$fieldLabelsprojecttype["English"]["typeName"] = "Type Name";
	$fieldToolTipsprojecttype["English"]["typeName"] = "";
	$placeHoldersprojecttype["English"]["typeName"] = "";
	$fieldLabelsprojecttype["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsprojecttype["English"]["entryUserName"] = "";
	$placeHoldersprojecttype["English"]["entryUserName"] = "";
	$fieldLabelsprojecttype["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsprojecttype["English"]["entryTime"] = "";
	$placeHoldersprojecttype["English"]["entryTime"] = "";
	if (count($fieldToolTipsprojecttype["English"]))
		$tdataprojecttype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsprojecttype["Thai"] = array();
	$fieldToolTipsprojecttype["Thai"] = array();
	$placeHoldersprojecttype["Thai"] = array();
	$pageTitlesprojecttype["Thai"] = array();
	$fieldLabelsprojecttype["Thai"]["id"] = "Id";
	$fieldToolTipsprojecttype["Thai"]["id"] = "";
	$placeHoldersprojecttype["Thai"]["id"] = "";
	$fieldLabelsprojecttype["Thai"]["typeNumber"] = "ลำดับประเภททุนวิจัย";
	$fieldToolTipsprojecttype["Thai"]["typeNumber"] = "";
	$placeHoldersprojecttype["Thai"]["typeNumber"] = "";
	$fieldLabelsprojecttype["Thai"]["typeName"] = "ประเภททุนวิจัย";
	$fieldToolTipsprojecttype["Thai"]["typeName"] = "";
	$placeHoldersprojecttype["Thai"]["typeName"] = "";
	$fieldLabelsprojecttype["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsprojecttype["Thai"]["entryUserName"] = "";
	$placeHoldersprojecttype["Thai"]["entryUserName"] = "";
	$fieldLabelsprojecttype["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsprojecttype["Thai"]["entryTime"] = "";
	$placeHoldersprojecttype["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsprojecttype["Thai"]))
		$tdataprojecttype[".isUseToolTips"] = true;
}


	$tdataprojecttype[".NCSearch"] = true;



$tdataprojecttype[".shortTableName"] = "projecttype";
$tdataprojecttype[".nSecOptions"] = 0;

$tdataprojecttype[".mainTableOwnerID"] = "";
$tdataprojecttype[".entityType"] = 0;
$tdataprojecttype[".connId"] = "mc_at_192_168_1_111";


$tdataprojecttype[".strOriginalTableName"] = "ProjectType";

	



$tdataprojecttype[".showAddInPopup"] = false;

$tdataprojecttype[".showEditInPopup"] = false;

$tdataprojecttype[".showViewInPopup"] = false;

$tdataprojecttype[".listAjax"] = false;
//	temporary
//$tdataprojecttype[".listAjax"] = false;

	$tdataprojecttype[".audit"] = false;

	$tdataprojecttype[".locking"] = false;


$pages = $tdataprojecttype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojecttype[".edit"] = true;
	$tdataprojecttype[".afterEditAction"] = 0;
	$tdataprojecttype[".closePopupAfterEdit"] = 1;
	$tdataprojecttype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojecttype[".add"] = true;
$tdataprojecttype[".afterAddAction"] = 0;
$tdataprojecttype[".closePopupAfterAdd"] = 1;
$tdataprojecttype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojecttype[".list"] = true;
}



$tdataprojecttype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojecttype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojecttype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojecttype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojecttype[".printFriendly"] = true;
}



$tdataprojecttype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojecttype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojecttype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojecttype[".isUseAjaxSuggest"] = true;

$tdataprojecttype[".rowHighlite"] = true;





$tdataprojecttype[".ajaxCodeSnippetAdded"] = false;

$tdataprojecttype[".buttonsAdded"] = false;

$tdataprojecttype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojecttype[".isUseTimeForSearch"] = false;


$tdataprojecttype[".badgeColor"] = "7B68EE";


$tdataprojecttype[".allSearchFields"] = array();
$tdataprojecttype[".filterFields"] = array();
$tdataprojecttype[".requiredSearchFields"] = array();

$tdataprojecttype[".googleLikeFields"] = array();
$tdataprojecttype[".googleLikeFields"][] = "id";
$tdataprojecttype[".googleLikeFields"][] = "typeNumber";
$tdataprojecttype[".googleLikeFields"][] = "typeName";
$tdataprojecttype[".googleLikeFields"][] = "entryUserName";
$tdataprojecttype[".googleLikeFields"][] = "entryTime";



$tdataprojecttype[".tableType"] = "list";

$tdataprojecttype[".printerPageOrientation"] = 0;
$tdataprojecttype[".nPrinterPageScale"] = 100;

$tdataprojecttype[".nPrinterSplitRecords"] = 40;

$tdataprojecttype[".geocodingEnabled"] = false;










$tdataprojecttype[".pageSize"] = 20;

$tdataprojecttype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojecttype[".strOrderBy"] = $tstrOrderBy;

$tdataprojecttype[".orderindexes"] = array();


$tdataprojecttype[".sqlHead"] = "SELECT id,  	typeNumber,  	typeName,  	entryUserName,  	entryTime";
$tdataprojecttype[".sqlFrom"] = "FROM ProjectType";
$tdataprojecttype[".sqlWhereExpr"] = "";
$tdataprojecttype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojecttype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojecttype[".arrGroupsPerPage"] = $arrGPP;

$tdataprojecttype[".highlightSearchResults"] = true;

$tableKeysprojecttype = array();
$tableKeysprojecttype[] = "id";
$tdataprojecttype[".Keys"] = $tableKeysprojecttype;


$tdataprojecttype[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ProjectType";
	$fdata["Label"] = GetFieldLabel("ProjectType","id");
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


	$tdataprojecttype["id"] = $fdata;
		$tdataprojecttype[".searchableFields"][] = "id";
//	typeNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "typeNumber";
	$fdata["GoodName"] = "typeNumber";
	$fdata["ownerTable"] = "ProjectType";
	$fdata["Label"] = GetFieldLabel("ProjectType","typeNumber");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "typeNumber";

		$fdata["sourceSingle"] = "typeNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeNumber";

	
	
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


	$tdataprojecttype["typeNumber"] = $fdata;
		$tdataprojecttype[".searchableFields"][] = "typeNumber";
//	typeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "typeName";
	$fdata["GoodName"] = "typeName";
	$fdata["ownerTable"] = "ProjectType";
	$fdata["Label"] = GetFieldLabel("ProjectType","typeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "typeName";

		$fdata["sourceSingle"] = "typeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeName";

	
	
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


	$tdataprojecttype["typeName"] = $fdata;
		$tdataprojecttype[".searchableFields"][] = "typeName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "ProjectType";
	$fdata["Label"] = GetFieldLabel("ProjectType","entryUserName");
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


	$tdataprojecttype["entryUserName"] = $fdata;
		$tdataprojecttype[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "ProjectType";
	$fdata["Label"] = GetFieldLabel("ProjectType","entryTime");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataprojecttype["entryTime"] = $fdata;
		$tdataprojecttype[".searchableFields"][] = "entryTime";


$tables_data["ProjectType"]=&$tdataprojecttype;
$field_labels["ProjectType"] = &$fieldLabelsprojecttype;
$fieldToolTips["ProjectType"] = &$fieldToolTipsprojecttype;
$placeHolders["ProjectType"] = &$placeHoldersprojecttype;
$page_titles["ProjectType"] = &$pageTitlesprojecttype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ProjectType"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ProjectType"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projecttype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	typeNumber,  	typeName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM ProjectType";
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
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectType"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ProjectType";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "typeNumber",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectType"
));

$proto8["m_sql"] = "typeNumber";
$proto8["m_srcTableName"] = "ProjectType";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "typeName",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectType"
));

$proto10["m_sql"] = "typeName";
$proto10["m_srcTableName"] = "ProjectType";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectType"
));

$proto12["m_sql"] = "entryUserName";
$proto12["m_srcTableName"] = "ProjectType";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "ProjectType",
	"m_srcTableName" => "ProjectType"
));

$proto14["m_sql"] = "entryTime";
$proto14["m_srcTableName"] = "ProjectType";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "ProjectType";
$proto17["m_srcTableName"] = "ProjectType";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "typeNumber";
$proto17["m_columns"][] = "typeName";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "entryTime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "ProjectType";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "ProjectType";
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
$proto0["m_srcTableName"]="ProjectType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projecttype = createSqlQuery_projecttype();


	
				;

					

$tdataprojecttype[".sqlquery"] = $queryData_projecttype;



$tableEvents["ProjectType"] = new eventsBase;
$tdataprojecttype[".hasEvents"] = false;

?>