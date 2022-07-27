<?php
$tdatareportsearchresearchregister = array();
$tdatareportsearchresearchregister[".searchableFields"] = array();
$tdatareportsearchresearchregister[".ShortName"] = "reportsearchresearchregister";
$tdatareportsearchresearchregister[".OwnerID"] = "";
$tdatareportsearchresearchregister[".OriginalTable"] = "researchScholarshipRegister";


$tdatareportsearchresearchregister[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatareportsearchresearchregister[".originalPagesByType"] = $tdatareportsearchresearchregister[".pagesByType"];
$tdatareportsearchresearchregister[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatareportsearchresearchregister[".originalPages"] = $tdatareportsearchresearchregister[".pages"];
$tdatareportsearchresearchregister[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatareportsearchresearchregister[".originalDefaultPages"] = $tdatareportsearchresearchregister[".defaultPages"];

//	field labels
$fieldLabelsreportsearchresearchregister = array();
$fieldToolTipsreportsearchresearchregister = array();
$pageTitlesreportsearchresearchregister = array();
$placeHoldersreportsearchresearchregister = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreportsearchresearchregister["English"] = array();
	$fieldToolTipsreportsearchresearchregister["English"] = array();
	$placeHoldersreportsearchresearchregister["English"] = array();
	$pageTitlesreportsearchresearchregister["English"] = array();
	$fieldLabelsreportsearchresearchregister["English"]["id"] = "ID";
	$fieldToolTipsreportsearchresearchregister["English"]["id"] = "";
	$placeHoldersreportsearchresearchregister["English"]["id"] = "";
	$fieldLabelsreportsearchresearchregister["English"]["researchType"] = "Research Type";
	$fieldToolTipsreportsearchresearchregister["English"]["researchType"] = "";
	$placeHoldersreportsearchresearchregister["English"]["researchType"] = "";
	$fieldLabelsreportsearchresearchregister["English"]["researchRegisterStatus"] = "Research Register Status";
	$fieldToolTipsreportsearchresearchregister["English"]["researchRegisterStatus"] = "";
	$placeHoldersreportsearchresearchregister["English"]["researchRegisterStatus"] = "";
	$fieldLabelsreportsearchresearchregister["English"]["researchRegisterID"] = "Research Register ID";
	$fieldToolTipsreportsearchresearchregister["English"]["researchRegisterID"] = "";
	$placeHoldersreportsearchresearchregister["English"]["researchRegisterID"] = "";
	if (count($fieldToolTipsreportsearchresearchregister["English"]))
		$tdatareportsearchresearchregister[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsreportsearchresearchregister["Thai"] = array();
	$fieldToolTipsreportsearchresearchregister["Thai"] = array();
	$placeHoldersreportsearchresearchregister["Thai"] = array();
	$pageTitlesreportsearchresearchregister["Thai"] = array();
	$fieldLabelsreportsearchresearchregister["Thai"]["id"] = "ID";
	$fieldToolTipsreportsearchresearchregister["Thai"]["id"] = "";
	$placeHoldersreportsearchresearchregister["Thai"]["id"] = "";
	$fieldLabelsreportsearchresearchregister["Thai"]["researchType"] = "ประเภททุน";
	$fieldToolTipsreportsearchresearchregister["Thai"]["researchType"] = "";
	$placeHoldersreportsearchresearchregister["Thai"]["researchType"] = "";
	$fieldLabelsreportsearchresearchregister["Thai"]["researchRegisterStatus"] = "สถานะ";
	$fieldToolTipsreportsearchresearchregister["Thai"]["researchRegisterStatus"] = "";
	$placeHoldersreportsearchresearchregister["Thai"]["researchRegisterStatus"] = "";
	$fieldLabelsreportsearchresearchregister["Thai"]["researchRegisterID"] = "การรับสมัครขอรับทุนวิจัย";
	$fieldToolTipsreportsearchresearchregister["Thai"]["researchRegisterID"] = "";
	$placeHoldersreportsearchresearchregister["Thai"]["researchRegisterID"] = "";
	if (count($fieldToolTipsreportsearchresearchregister["Thai"]))
		$tdatareportsearchresearchregister[".isUseToolTips"] = true;
}


	$tdatareportsearchresearchregister[".NCSearch"] = true;



$tdatareportsearchresearchregister[".shortTableName"] = "reportsearchresearchregister";
$tdatareportsearchresearchregister[".nSecOptions"] = 0;

$tdatareportsearchresearchregister[".mainTableOwnerID"] = "";
$tdatareportsearchresearchregister[".entityType"] = 1;
$tdatareportsearchresearchregister[".connId"] = "mc_at_192_168_1_111";


$tdatareportsearchresearchregister[".strOriginalTableName"] = "researchScholarshipRegister";

	



$tdatareportsearchresearchregister[".showAddInPopup"] = false;

$tdatareportsearchresearchregister[".showEditInPopup"] = false;

$tdatareportsearchresearchregister[".showViewInPopup"] = false;

$tdatareportsearchresearchregister[".listAjax"] = false;
//	temporary
//$tdatareportsearchresearchregister[".listAjax"] = false;

	$tdatareportsearchresearchregister[".audit"] = true;

	$tdatareportsearchresearchregister[".locking"] = false;


$pages = $tdatareportsearchresearchregister[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportsearchresearchregister[".edit"] = true;
	$tdatareportsearchresearchregister[".afterEditAction"] = 1;
	$tdatareportsearchresearchregister[".closePopupAfterEdit"] = 1;
	$tdatareportsearchresearchregister[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportsearchresearchregister[".add"] = true;
$tdatareportsearchresearchregister[".afterAddAction"] = 1;
$tdatareportsearchresearchregister[".closePopupAfterAdd"] = 1;
$tdatareportsearchresearchregister[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportsearchresearchregister[".list"] = true;
}



$tdatareportsearchresearchregister[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportsearchresearchregister[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportsearchresearchregister[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportsearchresearchregister[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportsearchresearchregister[".printFriendly"] = true;
}



$tdatareportsearchresearchregister[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportsearchresearchregister[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportsearchresearchregister[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportsearchresearchregister[".isUseAjaxSuggest"] = true;

$tdatareportsearchresearchregister[".rowHighlite"] = true;



						

$tdatareportsearchresearchregister[".ajaxCodeSnippetAdded"] = false;

$tdatareportsearchresearchregister[".buttonsAdded"] = false;

$tdatareportsearchresearchregister[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareportsearchresearchregister[".isUseTimeForSearch"] = false;


$tdatareportsearchresearchregister[".badgeColor"] = "4169E1";


$tdatareportsearchresearchregister[".allSearchFields"] = array();
$tdatareportsearchresearchregister[".filterFields"] = array();
$tdatareportsearchresearchregister[".requiredSearchFields"] = array();

$tdatareportsearchresearchregister[".googleLikeFields"] = array();
$tdatareportsearchresearchregister[".googleLikeFields"][] = "id";
$tdatareportsearchresearchregister[".googleLikeFields"][] = "researchRegisterID";
$tdatareportsearchresearchregister[".googleLikeFields"][] = "researchType";
$tdatareportsearchresearchregister[".googleLikeFields"][] = "researchRegisterStatus";



$tdatareportsearchresearchregister[".tableType"] = "list";

$tdatareportsearchresearchregister[".printerPageOrientation"] = 0;
$tdatareportsearchresearchregister[".nPrinterPageScale"] = 100;

$tdatareportsearchresearchregister[".nPrinterSplitRecords"] = 40;

$tdatareportsearchresearchregister[".geocodingEnabled"] = false;










$tdatareportsearchresearchregister[".pageSize"] = 20;

$tdatareportsearchresearchregister[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportsearchresearchregister[".strOrderBy"] = $tstrOrderBy;

$tdatareportsearchresearchregister[".orderindexes"] = array();


$tdatareportsearchresearchregister[".sqlHead"] = "SELECT researchScholarshipProposal.id,  researchScholarshipProposal.researchRegisterID,  researchScholarshipRegister.researchType,  researchScholarshipRegister.researchRegisterStatus";
$tdatareportsearchresearchregister[".sqlFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$tdatareportsearchresearchregister[".sqlWhereExpr"] = "";
$tdatareportsearchresearchregister[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportsearchresearchregister[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportsearchresearchregister[".arrGroupsPerPage"] = $arrGPP;

$tdatareportsearchresearchregister[".highlightSearchResults"] = true;

$tableKeysreportsearchresearchregister = array();
$tdatareportsearchresearchregister[".Keys"] = $tableKeysreportsearchresearchregister;


$tdatareportsearchresearchregister[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportSearchresearchRegister","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatareportsearchresearchregister["id"] = $fdata;
		$tdatareportsearchresearchregister[".searchableFields"][] = "id";
//	researchRegisterID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "researchRegisterID";
	$fdata["GoodName"] = "researchRegisterID";
	$fdata["ownerTable"] = "researchScholarshipProposal";
	$fdata["Label"] = GetFieldLabel("ReportSearchresearchRegister","researchRegisterID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "researchRegisterID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipProposal.researchRegisterID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchScholarshipRegister";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchRegisterName";

	

	
	$edata["LookupOrderBy"] = "researchRegisterName";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "researchType";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatareportsearchresearchregister["researchRegisterID"] = $fdata;
		$tdatareportsearchresearchregister[".searchableFields"][] = "researchRegisterID";
//	researchType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "researchType";
	$fdata["GoodName"] = "researchType";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("ReportSearchresearchRegister","researchType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchType";

		$fdata["sourceSingle"] = "researchType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipRegister.researchType";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "researchScholarshipRegister";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "researchType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "researchType";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "researchRegisterID", "lookup" => "id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatareportsearchresearchregister["researchType"] = $fdata;
		$tdatareportsearchresearchregister[".searchableFields"][] = "researchType";
//	researchRegisterStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "researchRegisterStatus";
	$fdata["GoodName"] = "researchRegisterStatus";
	$fdata["ownerTable"] = "researchScholarshipRegister";
	$fdata["Label"] = GetFieldLabel("ReportSearchresearchRegister","researchRegisterStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "researchRegisterStatus";

		$fdata["sourceSingle"] = "researchRegisterStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "researchScholarshipRegister.researchRegisterStatus";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ยังไม่เปิดรับสมัคร";
	$edata["LookupValues"][] = "เปิดรับสมัคร";
	$edata["LookupValues"][] = "ปิดรับสมัคร";
	$edata["LookupValues"][] = "ยกเลิก";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatareportsearchresearchregister["researchRegisterStatus"] = $fdata;
		$tdatareportsearchresearchregister[".searchableFields"][] = "researchRegisterStatus";


$tables_data["ReportSearchresearchRegister"]=&$tdatareportsearchresearchregister;
$field_labels["ReportSearchresearchRegister"] = &$fieldLabelsreportsearchresearchregister;
$fieldToolTips["ReportSearchresearchRegister"] = &$fieldToolTipsreportsearchresearchregister;
$placeHolders["ReportSearchresearchRegister"] = &$placeHoldersreportsearchresearchregister;
$page_titles["ReportSearchresearchRegister"] = &$pageTitlesreportsearchresearchregister;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ReportSearchresearchRegister"] = array();
//	ReportMonitorGraphTrackingStatus1
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorGraphTrackingStatus1";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "reportmonitorgraphtrackingstatus1";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorGraphTrackingStatus1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus1
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus1";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus1";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus2
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus2";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus2";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus3
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus3";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus3";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus4
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus4";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus4";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus4");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorGraphTrackingStatus2
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorGraphTrackingStatus2";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "reportmonitorgraphtrackingstatus2";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorGraphTrackingStatus2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorGraphTrackingStatus3
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorGraphTrackingStatus3";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "reportmonitorgraphtrackingstatus3";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorGraphTrackingStatus3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus5
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus5";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus5";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus5");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus6
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus6";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus6";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus6");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus7
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus7";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus7";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus7");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//	ReportMonitorProjectStatus8
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ReportMonitorProjectStatus8";
		$detailsParam["dOriginalTable"] = "researchScholarshipProposal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reportmonitorprojectstatus8";
	$detailsParam["dCaptionTable"] = GetTableCaption("ReportMonitorProjectStatus8");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ReportSearchresearchRegister"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ReportSearchresearchRegister"][$dIndex]["detailKeys"][]="id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ReportSearchresearchRegister"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportsearchresearchregister()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "researchScholarshipProposal.id,  researchScholarshipProposal.researchRegisterID,  researchScholarshipRegister.researchType,  researchScholarshipRegister.researchRegisterStatus";
$proto0["m_strFrom"] = "FROM researchScholarshipProposal  INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
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
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportSearchresearchRegister"
));

$proto6["m_sql"] = "researchScholarshipProposal.id";
$proto6["m_srcTableName"] = "ReportSearchresearchRegister";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportSearchresearchRegister"
));

$proto8["m_sql"] = "researchScholarshipProposal.researchRegisterID";
$proto8["m_srcTableName"] = "ReportSearchresearchRegister";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "researchType",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "ReportSearchresearchRegister"
));

$proto10["m_sql"] = "researchScholarshipRegister.researchType";
$proto10["m_srcTableName"] = "ReportSearchresearchRegister";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "researchRegisterStatus",
	"m_strTable" => "researchScholarshipRegister",
	"m_srcTableName" => "ReportSearchresearchRegister"
));

$proto12["m_sql"] = "researchScholarshipRegister.researchRegisterStatus";
$proto12["m_srcTableName"] = "ReportSearchresearchRegister";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "researchScholarshipProposal";
$proto15["m_srcTableName"] = "ReportSearchresearchRegister";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "researchRegisterID";
$proto15["m_columns"][] = "researchProjectNo";
$proto15["m_columns"][] = "researchProjectGroupName";
$proto15["m_columns"][] = "researchProjectNameThai";
$proto15["m_columns"][] = "researchProjectNameEng";
$proto15["m_columns"][] = "researchProjectPeriodYear";
$proto15["m_columns"][] = "researchProjectPeriodMonth";
$proto15["m_columns"][] = "researchProjectStartDate";
$proto15["m_columns"][] = "researchProjectEndDate";
$proto15["m_columns"][] = "researchOperatingPeriodEndDate";
$proto15["m_columns"][] = "researchProjectRequestedBudget";
$proto15["m_columns"][] = "researchProjectDepartment";
$proto15["m_columns"][] = "researchProjectMainField";
$proto15["m_columns"][] = "researchProjectSubField";
$proto15["m_columns"][] = "researchProjectHeadName";
$proto15["m_columns"][] = "researchProjectAffiliationPrefixName";
$proto15["m_columns"][] = "researchProjectAffiliationName";
$proto15["m_columns"][] = "researchProjectAffiliationPosition";
$proto15["m_columns"][] = "researchProjectSubAffiliationName";
$proto15["m_columns"][] = "researchProjectAffiliationMobile";
$proto15["m_columns"][] = "researchProjectAffiliationTelephone";
$proto15["m_columns"][] = "researchProjectAffiliationEmail";
$proto15["m_columns"][] = "researchProjectFile";
$proto15["m_columns"][] = "researchProjectBankAccountName";
$proto15["m_columns"][] = "researchProjectBankNo";
$proto15["m_columns"][] = "researchProjectBankName";
$proto15["m_columns"][] = "researchProjectStatus";
$proto15["m_columns"][] = "ScholarshipProposalFinishStatus";
$proto15["m_columns"][] = "researchProjectAppointmentStatus";
$proto15["m_columns"][] = "researchProjectDisburseStatus";
$proto15["m_columns"][] = "contractSignDate";
$proto15["m_columns"][] = "contractSignFile";
$proto15["m_columns"][] = "projectStatusDesc";
$proto15["m_columns"][] = "projectStatus";
$proto15["m_columns"][] = "trackingProjectDesc";
$proto15["m_columns"][] = "trackingProjectDescResult";
$proto15["m_columns"][] = "geographiesID";
$proto15["m_columns"][] = "geographiesName";
$proto15["m_columns"][] = "provincesID";
$proto15["m_columns"][] = "provincesName";
$proto15["m_columns"][] = "districtsID";
$proto15["m_columns"][] = "districtsName";
$proto15["m_columns"][] = "amphuresID";
$proto15["m_columns"][] = "amphuresName";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "entryTime";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "researchScholarshipProposal";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ReportSearchresearchRegister";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "researchScholarshipRegister";
$proto19["m_srcTableName"] = "ReportSearchresearchRegister";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "researchRegisterNo";
$proto19["m_columns"][] = "researchRegisterName";
$proto19["m_columns"][] = "researchRegisterStartDate";
$proto19["m_columns"][] = "researchRegisterEndDate";
$proto19["m_columns"][] = "researchRegisterFile";
$proto19["m_columns"][] = "researchType";
$proto19["m_columns"][] = "researchRegisterStatus";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "entryTime";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN researchScholarshipRegister ON researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ReportSearchresearchRegister";
$proto20=array();
$proto20["m_sql"] = "researchScholarshipProposal.researchRegisterID = researchScholarshipRegister.id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "researchRegisterID",
	"m_strTable" => "researchScholarshipProposal",
	"m_srcTableName" => "ReportSearchresearchRegister"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= researchScholarshipRegister.id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ReportSearchresearchRegister";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportsearchresearchregister = createSqlQuery_reportsearchresearchregister();


	
				;

				

$tdatareportsearchresearchregister[".sqlquery"] = $queryData_reportsearchresearchregister;



include_once(getabspath("include/reportsearchresearchregister_events.php"));
$tableEvents["ReportSearchresearchRegister"] = new eventclass_reportsearchresearchregister;
$tdatareportsearchresearchregister[".hasEvents"] = true;

?>