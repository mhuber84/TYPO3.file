<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'File',
	'File'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . file;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .file. '.xml');



t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/basic', 'tx_file Basics for Lightbox and File handling plugins');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/tt_content_lightbox', 'tx_file Lightbox for tt_content Text-Pic');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/file', 'tx_file Basics for File handling plugins');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/gallery', 'tx_file Gallery plugin');
?>