<?php
return apply_filters( 'ninja_forms_uploads_settings_dropbox', array(
	'dropbox_connect'              => array(
		'id'               => 'dropbox_connect',
		'type'             => 'callback',
		'label'            => __( 'Connect to Dropbox', 'ninja-forms-uploads' ),
		'desc'             => '',
		'display_function' => array( $this, 'connect_url' )
	),
	'dropbox_file_path'            => array(
		'id'      => 'dropbox_file_path',
		'type'    => 'textbox',
		'label'   => __( 'File Path', 'ninja-forms-uploads' ),
		'desc'    => __( 'Custom directory for the files to be uploaded to in your Dropbox /Apps/Ninja Forms Uploads/ folder', 'ninja-forms-uploads' ),
		'default' => '',
	),
	'dropbox_oauth_state'          => array(
		'id'   => 'dropbox_oauth_state',
		'type' => 'hidden'
	),
	'dropbox_request_token'        => array(
		'id'   => 'dropbox_request_token',
		'type' => 'hidden'
	),
	'dropbox_request_token_secret' => array(
		'id'   => 'dropbox_request_token_secret',
		'type' => 'hidden'
	),
	'dropbox_access_token'         => array(
		'id'   => 'dropbox_access_token',
		'type' => 'hidden'
	),
	'dropbox_access_token_secret'  => array(
		'id'   => 'dropbox_access_token_secret',
		'type' => 'hidden'
	),
) );