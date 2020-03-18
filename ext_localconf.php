<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][DERHANSEN\SfEventMgt\Domain\Model\Location::class] = [
    'className' => RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Location::class
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][DERHANSEN\SfEventMgt\Domain\Model\Event::class] = [
    'className' => RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Event::class
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][DERHANSEN\SfEventMgt\Domain\Repository\EventRepository::class] = [
    'className' => RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Repository\EventRepository::class
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][DERHANSEN\SfEventMgt\Controller\EventController::class] = [
    'className' => RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Controller\EventController::class
];
/*
call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'RRafalskiIt.RritMaps2Events',
        'EventMap',
        [
            'Event' => 'map',
        ],
        // non-cacheable actions
        [
            'Event' => '',
        ]
    );
});
*/