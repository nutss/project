<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'staffFullName',
'staffUsername',
'staffEmail',
'staffStatus',
'entryUserName',
'entryTime' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'staffFullName' => array( 'import_field1' ),
'staffUsername' => array( 'import_field2' ),
'staffEmail' => array( 'import_field4' ),
'staffStatus' => array( 'import_field5' ),
'entryUserName' => array( 'import_field7' ),
'entryTime' => array( 'import_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field7',
'import_field8' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field7',
'import_field8' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field7',
'import_field8' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'staffFullName',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'staffUsername',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'staffEmail',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'staffStatus',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'entryUserName',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'entryTime',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>