<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'projectName' => array( 'totalsType' => '' ),
'projectStart' => array( 'totalsType' => '' ),
'projectEnd' => array( 'totalsType' => '' ),
'ProjectTypeName' => array( 'totalsType' => '' ),
'companyName' => array( 'totalsType' => '' ),
'DocumentCheckDate' => array( 'totalsType' => '' ),
'DocumentCheckStatus' => array( 'totalsType' => '' ),
'DocumentCheckReason' => array( 'totalsType' => '' ),
'screenDate' => array( 'totalsType' => '' ),
'screenStatus' => array( 'totalsType' => '' ),
'screenReason' => array( 'totalsType' => '' ),
'approveDate' => array( 'totalsType' => '' ),
'approveStatus' => array( 'totalsType' => '' ),
'approveReason' => array( 'totalsType' => '' ),
'projectBudgetCost' => array( 'totalsType' => '' ),
'disbureAmounts' => array( 'totalsType' => '' ),
'projectFile' => array( 'totalsType' => '' ),
'entryUserName' => array( 'totalsType' => '' ),
'entryTime' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'projectName',
'projectStart',
'projectEnd',
'ProjectTypeName',
'companyName',
'approveStatus',
'approveDate',
'DocumentCheckStatus',
'projectBudgetCost',
'projectFile',
'entryUserName',
'entryTime',
'disbureAmounts',
'screenDate',
'screenStatus',
'screenReason',
'approveReason',
'DocumentCheckReason',
'DocumentCheckDate' ),
'exportFields' => array( 'projectName',
'projectStart',
'projectEnd',
'companyName',
'ProjectTypeName',
'projectBudgetCost',
'disbureAmounts',
'projectFile',
'DocumentCheckDate',
'DocumentCheckStatus',
'DocumentCheckReason',
'screenDate',
'screenStatus',
'screenReason',
'approveDate',
'approveStatus',
'approveReason',
'entryUserName',
'entryTime' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'projectName' => array( 'export_field1' ),
'projectStart' => array( 'export_field2' ),
'projectEnd' => array( 'export_field3' ),
'ProjectTypeName' => array( 'export_field4' ),
'companyName' => array( 'export_field5' ),
'approveStatus' => array( 'export_field6' ),
'approveDate' => array( 'export_field7' ),
'DocumentCheckStatus' => array( 'export_field8' ),
'projectBudgetCost' => array( 'export_field9' ),
'projectFile' => array( 'export_field11' ),
'entryUserName' => array( 'export_field12' ),
'entryTime' => array( 'export_field13' ),
'disbureAmounts' => array( 'export_field' ),
'screenDate' => array( 'export_field10' ),
'screenStatus' => array( 'export_field14' ),
'screenReason' => array( 'export_field15' ),
'approveReason' => array( 'export_field16' ),
'DocumentCheckReason' => array( 'export_field17' ),
'DocumentCheckDate' => array( 'export_field18' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field5',
'export_field4',
'export_field9',
'export_field',
'export_field11',
'export_field18',
'export_field8',
'export_field17',
'export_field10',
'export_field14',
'export_field15',
'export_field7',
'export_field6',
'export_field16',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field5' => 'grid',
'export_field4' => 'grid',
'export_field9' => 'grid',
'export_field' => 'grid',
'export_field11' => 'grid',
'export_field18' => 'grid',
'export_field8' => 'grid',
'export_field17' => 'grid',
'export_field10' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field7' => 'grid',
'export_field6' => 'grid',
'export_field16' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field',
'export_field10',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field5',
'export_field4',
'export_field9',
'export_field',
'export_field11',
'export_field18',
'export_field8',
'export_field17',
'export_field10',
'export_field14',
'export_field15',
'export_field7',
'export_field6',
'export_field16',
'export_field12',
'export_field13' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'projectName',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'projectStart',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'projectEnd',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'ProjectTypeName',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'companyName',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'approveStatus',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'approveDate',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'DocumentCheckStatus',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'projectBudgetCost',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'projectFile',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'entryUserName',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'entryTime',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'disbureAmounts',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'screenDate',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'screenStatus',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'screenReason',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'approveReason',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'DocumentCheckReason',
'type' => 'export_field' ),
'export_field18' => array( 'field' => 'DocumentCheckDate',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 7,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>