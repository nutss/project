<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'researchOperatingPeriodNo',
'researchOperatingPeriodEndDate',
'researchOperatingPeriodDisburse',
'researchOperatingPeriodDisbursePercent',
'entryUserName',
'entryTime',
'researchProjectDisburseStatus' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'researchOperatingPeriodNo' => array( 'integrated_search_field2' ),
'researchOperatingPeriodEndDate' => array( 'integrated_search_field3' ),
'researchOperatingPeriodDisburse' => array( 'integrated_search_field4' ),
'researchOperatingPeriodDisbursePercent' => array( 'integrated_search_field5' ),
'entryUserName' => array( 'integrated_search_field6' ),
'entryTime' => array( 'integrated_search_field7' ),
'researchProjectDisburseStatus' => array( 'integrated_search_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'search_search',
'search_reset',
'search_back_list',
'search_cancel' ),
'top' => array( 'search_header' ),
'grid' => array( 'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field8',
'integrated_search_field6',
'integrated_search_field7' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'search_cancel' => 'below-grid',
'search_header' => 'top',
'integrated_search_field2' => 'grid',
'integrated_search_field3' => 'grid',
'integrated_search_field4' => 'grid',
'integrated_search_field5' => 'grid',
'integrated_search_field8' => 'grid',
'integrated_search_field6' => 'grid',
'integrated_search_field7' => 'grid' ),
'itemLocations' => array( 'integrated_search_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'search_search' => array( 'search_search' ),
'search_cancel' => array( 'search_cancel' ),
'integrated_search_field' => array( 'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field8',
'integrated_search_field6',
'integrated_search_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'search',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'search',
'type' => 'search',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'search-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'search-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_search',
'search_reset',
'search_back_list',
'search_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'search-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-search',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field8',
'integrated_search_field6',
'integrated_search_field7' ) ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'search_search' => array( 'type' => 'search_search' ),
'search_cancel' => array( 'type' => 'search_cancel' ),
'integrated_search_field2' => array( 'field' => 'researchOperatingPeriodNo',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field3' => array( 'field' => 'researchOperatingPeriodEndDate',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field4' => array( 'field' => 'researchOperatingPeriodDisburse',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field5' => array( 'field' => 'researchOperatingPeriodDisbursePercent',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field6' => array( 'field' => 'entryUserName',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field7' => array( 'field' => 'entryTime',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field8' => array( 'field' => 'researchProjectDisburseStatus',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>