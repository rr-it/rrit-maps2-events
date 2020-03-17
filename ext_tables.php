<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('rrit_maps2_events', 'Configuration/TypoScript', 'RRIT Events for Maps2');

    }
);
