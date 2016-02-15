<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Cookie Notice',
	'description' => 'Displays a simple cookie notice.',
	'category' => 'plugin',
	'version' => '1.0.0',
	'state' => 'beta',
	'author' => 'Daniel Maier',
	'author_email' => 'dm@bergwerk.ag',
	'author_company' => 'BERGWERK Werbeagentur GmbH',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
			'bwrk_utility' => '1.0.0-1.9.99'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);
