<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'project' => array( 'preview' => true ),
'projectStatusApprove' => array( 'preview' => true ),
'projectStatusScreen' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'projectID' => array( 'totalsType' => '' ),
'trackDate' => array( 'totalsType' => '' ),
'progressStep' => array( 'totalsType' => '' ),
'trackDesc' => array( 'totalsType' => '' ),
'trackAttFille' => array( 'totalsType' => '' ),
'contactName' => array( 'totalsType' => '' ),
'progressDate' => array( 'totalsType' => '' ),
'progressStatus' => array( 'totalsType' => '' ),
'progressReason' => array( 'totalsType' => '' ),
'approveDate' => array( 'totalsType' => '' ),
'approveStatus' => array( 'totalsType' => '' ),
'approveReason' => array( 'totalsType' => '' ),
'entryUserName' => array( 'totalsType' => '' ),
'entryTime' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'trackDate',
'progressStep',
'contactName',
'trackDesc',
'trackAttFille',
'entryUserName',
'progressDate',
'progressReason',
'progressStatus',
'approveDate',
'approveStatus',
'approveReason' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'entryTime',
'progressReason',
'progressStatus',
'progressDate',
'contactName',
'approveReason',
'approveStatus',
'approveDate',
'entryUserName',
'trackAttFille',
'trackDesc',
'progressStep',
'trackDate' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'trackDate' => array( 'simple_grid_field1',
'simple_grid_field10' ),
'progressStep' => array( 'simple_grid_field',
'simple_grid_field13' ),
'contactName' => array( 'simple_grid_field8',
'simple_grid_field14' ),
'trackDesc' => array( 'simple_grid_field3',
'simple_grid_field15' ),
'trackAttFille' => array( 'simple_grid_field4',
'simple_grid_field16' ),
'entryUserName' => array( 'simple_grid_field9',
'simple_grid_field17' ),
'progressDate' => array( 'simple_grid_field2',
'simple_grid_field18' ),
'progressReason' => array( 'simple_grid_field12',
'simple_grid_field19' ),
'progressStatus' => array( 'simple_grid_field11',
'simple_grid_field20' ),
'approveDate' => array( 'simple_grid_field5',
'simple_grid_field21' ),
'approveStatus' => array( 'simple_grid_field6',
'simple_grid_field22' ),
'approveReason' => array( 'simple_grid_field7',
'simple_grid_field23' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => false,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'inline_add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'grid' => array( 'simple_grid_field10',
'simple_grid_field1',
'simple_grid_field13',
'simple_grid_field',
'simple_grid_field14',
'simple_grid_field8',
'simple_grid_field15',
'simple_grid_field3',
'simple_grid_field16',
'simple_grid_field4',
'simple_grid_field17',
'simple_grid_field9',
'simple_grid_field18',
'simple_grid_field2',
'simple_grid_field19',
'simple_grid_field12',
'simple_grid_field20',
'simple_grid_field11',
'simple_grid_field21',
'simple_grid_field5',
'simple_grid_field22',
'simple_grid_field6',
'simple_grid_field23',
'simple_grid_field7',
'grid_edit',
'grid_inline_cancel',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'breadcrumb',
'mastertable_block' ) ),
'itemForms' => array( 'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'simple_grid_field10' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field7' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'print_panel' => 5,
'menu' => 3,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'search_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field',
'search_panel_field1',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'lang_selector' => array( 'lang_selector' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'add' => array( 'add' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'export' => array( 'export' ),
'export_selected' => array( 'export_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field',
'simple_grid_field8',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field9',
'simple_grid_field2',
'simple_grid_field12',
'simple_grid_field11',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7' ),
'grid_field_label' => array( 'simple_grid_field10',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23' ),
'grid_edit' => array( 'grid_edit' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'trackDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'progressStep_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'contactName_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'trackDesc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'trackAttFille_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'entryUserName_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'progressDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'progressReason_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'progressStatus_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'approveDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'approveStatus_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'approveReason_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel' ),
'items' => array( 'grid_edit',
'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'trackDate_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'progressStep_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'contactName_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'trackDesc_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'trackAttFille_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'entryUserName_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'progressDate_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'progressReason_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'progressStatus_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'approveDate_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'approveStatus_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'approveReason_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 14,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'trackDate',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'trackDate',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'progressStep',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'progressStep',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'contactName',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'contactName',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'trackDesc',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'trackDesc',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'trackAttFille',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'trackAttFille',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'entryUserName',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'entryUserName',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'progressDate',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'progressDate',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'progressReason',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'progressReason',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'progressStatus',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'progressStatus',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'approveDate',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'approveDate',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'approveStatus',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'approveStatus',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'approveReason',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'approveReason',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field8',
'search_panel_field12',
'search_panel_field11',
'search_panel_field4',
'search_panel_field10',
'search_panel_field9',
'search_panel_field1',
'search_panel_field',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field3',
'search_panel_field2' ),
'_flexiblePanel' => true ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'-1',
'show_search_panel',
'hide_search_panel',
'-2',
'export',
'-',
'lang_selector' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field2' => array( 'field' => 'trackDate',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field3' => array( 'field' => 'progressStep',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field4' => array( 'field' => 'progressDate',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'trackDesc',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field6' => array( 'field' => 'trackAttFille',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field7' => array( 'field' => 'entryUserName',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field8' => array( 'field' => 'entryTime',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'-' => array( 'type' => '-' ),
'add' => array( 'type' => 'add' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'-1' => array( 'type' => '-' ),
'export' => array( 'type' => 'export' ),
'-2' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'search_panel_field' => array( 'field' => 'approveDate',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'approveStatus',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'approveReason',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'project' => 'true',
'projectStatusScreen' => 'true',
'projectStatusApprove' => 'true' ) ),
'search_panel_field10' => array( 'field' => 'contactName',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'progressStatus',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'progressReason',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'simple_grid_field1' => array( 'field' => 'trackDate',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'trackDate' ),
'simple_grid_field' => array( 'field' => 'progressStep',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'progressStep',
'clickSort' => false ),
'simple_grid_field8' => array( 'field' => 'contactName',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'contactName' ),
'simple_grid_field3' => array( 'field' => 'trackDesc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'trackDesc',
'clickSort' => false ),
'simple_grid_field4' => array( 'field' => 'trackAttFille',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'trackAttFille',
'clickSort' => false ),
'simple_grid_field9' => array( 'field' => 'entryUserName',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'entryUserName',
'clickSort' => false ),
'simple_grid_field2' => array( 'field' => 'progressDate',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'progressDate' ),
'simple_grid_field12' => array( 'field' => 'progressReason',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'progressReason' ),
'simple_grid_field11' => array( 'field' => 'progressStatus',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'progressStatus' ),
'simple_grid_field5' => array( 'field' => 'approveDate',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'approveDate' ),
'simple_grid_field6' => array( 'field' => 'approveStatus',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'approveStatus' ),
'simple_grid_field7' => array( 'field' => 'approveReason',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'approveReason' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 7,
'pageWidth' => 'full' );
		?>