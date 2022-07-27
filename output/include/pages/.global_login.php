<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message' ),
'supertop' => array( 'image' ),
'top' => array( 'login_header',
'lang_selector' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password' ),
'footer' => array( 'login_button',
'continue_login_button',
'guest_login' ),
'superbottom' => array( 'login_remind',
'loginform_register_link' ) ),
'formXtTags' => array( 'footer' => array( 'signin_button',
'continue_button',
'guestlink_block' ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'image' => 'supertop',
'login_header' => 'top',
'lang_selector' => 'top',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'login_button' => 'footer',
'continue_login_button' => 'footer',
'guest_login' => 'footer',
'login_remind' => 'superbottom',
'loginform_register_link' => 'superbottom' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'login_header' => array( 'login_header' ),
'remember_password' => array( 'remember_password' ),
'continue_login_button' => array( 'continue_login_button' ),
'lang_selector' => array( 'lang_selector' ),
'loginform_register_link' => array( 'loginform_register_link' ),
'image' => array( 'image' ),
'login_remind' => array( 'login_remind' ) ),
'cellMaps' => array(  ) ),
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
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'login-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_header' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'lang_selector' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'login-labels',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'username' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'password_label' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'password' ) ),
'c9' => array( 'model' => 'c9',
'items' => array(  ) ),
'c10' => array( 'model' => 'c10',
'items' => array( 'remember_password' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'login_button',
'continue_login_button',
'guest_login' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'login-superbottom',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_remind',
'loginform_register_link' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_label' => array( 'type' => 'username_label' ),
'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_message' => array( 'type' => 'login_message' ),
'login_button' => array( 'type' => 'login_button' ),
'guest_login' => array( 'type' => 'guest_login' ),
'login_header' => array( 'type' => 'login_header' ),
'remember_password' => array( 'type' => 'remember_password' ),
'continue_login_button' => array( 'type' => 'continue_login_button' ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'loginform_register_link' => array( 'type' => 'loginform_register_link' ),
'image' => array( 'type' => 'image',
'imagePath' => 'header.png' ),
'login_remind' => array( 'type' => 'login_remind' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>