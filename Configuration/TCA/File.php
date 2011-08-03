<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_file_domain_model_file'] = array(
	'ctrl' => $TCA['tx_file_domain_model_file']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, file_name, file_path, file_download_name, file_type, file_type_version, file_size, file_original_location, file_original_location_description, file_creator, file_mime_type, file_mime_sub_type, file_ctime, file_mtime, file_usage, ident, creator, publisher, copyright, keywords, description, caption, alt_text, instructions, abstract, date_cr, date_mod, loc_desc, loc_city, horizontal_resolution, vertical_resolution, horizontal_pixels, vertical_pixels, color_space, width, height, height_unit, meta, category, media_type, loc_country',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, file_name, file_path, file_download_name, file_type, file_type_version, file_size, file_original_location, file_original_location_description, file_creator, file_mime_type, file_mime_sub_type, file_ctime, file_mtime, file_usage, ident, creator, publisher, copyright, keywords, description, caption, alt_text, instructions, abstract, date_cr, date_mod, loc_desc, loc_city, horizontal_resolution, vertical_resolution, horizontal_pixels, vertical_pixels, color_space, width, height, height_unit, meta, category, media_type, loc_country,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_file_domain_model_file',
				'foreign_table_where' => 'AND tx_file_domain_model_file.pid=###CURRENT_PID### AND tx_file_domain_model_file.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' =>array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'file_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'file_path' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_path',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'file_download_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_download_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_type',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_type_version' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_type_version',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_size',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'file_original_location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_original_location',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_original_location_description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_original_location_description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_creator' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_creator',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_mime_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_mime_type',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_mime_sub_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_mime_sub_type',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_ctime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_ctime',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'file_mtime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_mtime',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'file_usage' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.file_usage',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ident' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.ident',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'creator' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.creator',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'publisher' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.publisher',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'copyright' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.copyright',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'keywords' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.keywords',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'caption' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.caption',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'alt_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.alt_text',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'instructions' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.instructions',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'abstract' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.abstract',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'date_cr' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.date_cr',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'date_mod' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.date_mod',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'loc_desc' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.loc_desc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'loc_city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.loc_city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'horizontal_resolution' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.horizontal_resolution',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vertical_resolution' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.vertical_resolution',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'horizontal_pixels' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.horizontal_pixels',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vertical_pixels' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.vertical_pixels',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'color_space' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.color_space',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'width' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.width',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'height' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.height',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'height_unit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.height_unit',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'meta' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.meta',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'category' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_file_domain_model_category',
				'MM' => 'tx_file_file_category_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=> 'tx_file_domain_model_category',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'media_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.media_type',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_file_domain_model_mediatype',
				'minitems' => 0,
				'maxitems' => 1,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 0,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=> 'tx_file_domain_model_mediatype',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'loc_country' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:file/Resources/Private/Language/locallang_db.xml:tx_file_domain_model_file.loc_country',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_file_domain_model_staticcountries',
				'minitems' => 0,
				'maxitems' => 1,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 0,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=> 'tx_file_domain_model_staticcountries',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
?>