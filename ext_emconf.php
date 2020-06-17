<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Dozenten Test',
    'description' => 'An extension to test the "Dozenten" table.',
    'category' => 'plugin',
    'author' => 'Clemens Tisch',
    'author_company' => 'Pandomedia',
    'author_email' => 'clemens@pandomedia.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\DozentenTest\\' => 'Classes'
        ]
    ],
];
