<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent',
        'label' => 'name',
        'iconfile' => 'EXT:dozenten_test/Resources/Public/Icons/Dozent.svg'
    ],
    'columns' => [
        'ID' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.ID',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Titel' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Titel',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Vorname' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Vorname',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Name' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Name',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Profil' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Profil',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Beruf' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Beruf',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'Kennung' => [
            'label' => 'LLL:EXT:dozenten_test/Resources/Private/Language/locallang_db.xlf:tx_dozententest_domain_model_dozent.Kennung',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'ID, Titel, Vorname, Name, Profil, Beruf, Kennung']
    ]
];
