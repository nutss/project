<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'trackAttFille',
'entryUserName',
'entryTime',
'progressStep',
'trackAppointDate',
'trackStatus',
'trackDesc',
'projectID' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'trackAttFille' => array( 'integrated_edit_field4' ),
'entryUserName' => array( 'integrated_edit_field8' ),
'entryTime' => array( 'integrated_edit_field9' ),
'progressStep' => array( 'integrated_edit_field1' ),
'trackAppointDate' => array( 'integrated_edit_field' ),
'trackStatus' => array( 'integrated_edit_field2' ),
'trackDesc' => array( 'integrated_edit_field3' ),
'projectID' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'top' => array( 'edit_header' ),
'grid' => array( 'master_info',
'integrated_edit_field5',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'edit_header' => 'top',
'master_info' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'integrated_edit_field' => array( 'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field5' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field5',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ),
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
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
'integrated_edit_field5',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'integrated_edit_field4' => array( 'field' => 'trackAttFille',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'entryUserName',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field9' => array( 'field' => 'entryTime',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'project' => 'true',
'projectType1' => 'true',
'projectType2' => 'true',
'projectType3' => 'true',
'projectType5' => 'true',
'projectType4' => 'true',
'projectType6' => 'true',
'projectStatusAll' => 'true',
'projectStatusReject' => 'true',
'projectStatusApprove' => 'true' ) ),
'integrated_edit_field1' => array( 'field' => 'progressStep',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field' => array( 'field' => 'trackAppointDate',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'trackStatus',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'trackDesc',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'projectID',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 7,
'pageWidth' => 'full' );
		?>