<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MyVendor.DozentenTest',
            'Pi1',
            [
                'DozentenTest' => 'list',
            ],
            // non-cacheable actions
            [
                'DozentenTest' => '',
            ]
        );
    }
);
