<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'File',
	array(
		'File' => 'list, show, new, create, edit, update, delete',
		'Category' => 'list, show, new, create, edit, update, delete',
		'Selection' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'File' => 'create, update, delete',
		'Category' => 'create, update, delete',
		'Selection' => 'create, update, delete',
		
	)
);

?>