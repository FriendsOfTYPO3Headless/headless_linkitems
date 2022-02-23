<?php

/** @phpstan-ignore-next-line */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Linkitems',
    'description' => 'This extension provides integration with EXT:linkitems to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Sven Petersne',
    'author_email' => 'sven@hardanders.de',
    'category' => 'plugin',
    'internal' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'linkitems' => '0.0.1-0.99.99',
            'headless' => '2.0.0-3.9.9'
        ],
    ],
];
