<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'File',
	array(
		'File' => 'list',
		'Category' => 'list',		
	),
	// non-cacheable actions
	array(		
	)
);

?>