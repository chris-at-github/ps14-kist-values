<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Kist Values',
	'description' => 'A TYPO3 extension for displaying company values from KIST + ESCHERICH',
	'category' => 'distribution',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '12.0.0-12.4.99',
			'ps14_foundation' => '2.0.0-2.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
