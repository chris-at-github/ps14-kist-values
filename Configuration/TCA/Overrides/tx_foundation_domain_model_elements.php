<?php
// ---------------------------------------------------------------------------------------------------------------------
// Weitere Felder Elements
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_foundation_domain_model_elements', [
	'tx_kist_values_color_scheme' => [
		'exclude' => true,
		'l10n_mode' => 'exclude',
		'label' => 'LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'default' => '',
			'items' => [
				['', ''],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.green-white', 'green-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.white-black', 'white-black'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.purple-white', 'purple-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.blue-white', 'blue-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.yellow-white', 'yellow-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.red-white', 'red-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.darkgrey-white', 'darkgrey-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.orange-white', 'orange-white'],
				['LLL:EXT:ps14_kist_values/Resources/Private/Language/locallang_tca.xlf:elements.color-scheme.turquoise-white', 'turquoise-white'],
			],
		],
	],
]);