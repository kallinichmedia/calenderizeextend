<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!isset($GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_kmcalendarizeext_tx_calendarize_domain_model_event = [];
    $tempColumnstx_kmcalendarizeext_tx_calendarize_domain_model_event[$GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['type']] = [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => '', 'value' => ''],
                ['label' => 'Events', 'value' => 'Tx_KmCalendarizeext_Events']
            ],
            'default' => 'Tx_KmCalendarizeext_Events',
        ]
    ];
    ExtensionManagementUtility::addTCAcolumns('tx_calendarize_domain_model_event', $tempColumnstx_kmcalendarizeext_tx_calendarize_domain_model_event);
}

ExtensionManagementUtility::addToAllTCAtypes(
    'tx_calendarize_domain_model_event',
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['label']
);

// palettes: common, costs, location, requirements
$tmp_km_calendarizeext_palettes = [
    'common' => [
        'showitem' => 'new, request, show_requirements, semester, --linebreak--, eventtype, eventform, targetgroup, --linebreak--, requirments, maxpersons',
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.pal_common',
    ],
    'costs' => [
        'showitem' => 'fee, costspernight, overnightstays',
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.pal_costs',
    ],
    'location' => [
        'showitem' => 'qundis_location, --linebreak--',
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.pal_location',
    ],
];

$tmp_km_calendarizeext_columns = [
    'new' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.new',
        'config' => [
            'type' => 'checkbox',
            'renderType' => 'checkboxToggle',
            'default' => 0,
        ]
    ],
    'request' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.request',
        'config' => [
            'type' => 'checkbox',
            'renderType' => 'checkboxToggle',
            'default' => 0,
        ]
    ],
    'eventtype' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.eventtype',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.eventtype.presence', 'value' => 0],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.eventtype.online', 'value' => 1],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.eventtype.coaching', 'value' => 2],
            ],
        ],
    ],
    'eventform' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.form',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.form.qamr', 'value' => 6],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.form.qwalkby', 'value' => 7],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.form.technik', 'value' => 8],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.form.rauchmelder', 'value' => 9],
            ],
        ],
    ],
    'qundis_location' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.qundis_location',
        'config' => [
            'type' => 'checkbox',
            'renderType' => 'checkboxToggle',
            'default' => 0,
        ]
    ],
    'fee' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.fee',
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'default' => 0
        ]
    ],
    'costspernight' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.costspernight',
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'default' => 0
        ]
    ],
    'location_text' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.location_text',
        'config' => [
            'type' => 'input',
            'default' => '',
        ]
    ],
    'targetgroup' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.targetgroup',
        'config' => [
            'type' => 'input',
            'default' => ''
        ]
    ],
    'show_requirements' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.show_requirements',
        'config' => [
            'type' => 'checkbox',
            'renderType' => 'checkboxToggle',
            'default' => 0,
        ]
    ],
    'requirments' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.requirments',
        'config' => [
            'type' => 'input',
            'default' => ''
        ]
    ],
    'overnightstays' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.overnightstays',
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'default' => 0
        ]        
    ],
    'maxpersons' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.maxpersons',
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'default' => 0
        ]        
    ],
    'semester' => [
        'exclude' => true,
        'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.semester',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.semester.sem1', 'value' => 0],
                ['label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events.semester.sem2', 'value' => 1],
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tx_calendarize_domain_model_event', $tmp_km_calendarizeext_columns);

// Inherit and extend the show items from the parent class
if (isset($GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['Tx_KmCalendarizeext_Events']['showitem'] = $GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['1']['showitem'];
} elseif (is_array($GLOBALS['TCA']['tx_calendarize_domain_model_event']['types'])) {
    // Use first entry in types array
    $tx_calendarize_domain_model_event_type_definition = reset($GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']);
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['Tx_KmCalendarizeext_Events']['showitem'] = $tx_calendarize_domain_model_event_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['Tx_KmCalendarizeext_Events']['showitem'] = '';
}

$GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['Tx_KmCalendarizeext_Events']['showitem'] .= ',--div--;LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_kmcalendarizeext_domain_model_events,';

// Merge palettes
$GLOBALS['TCA']['tx_calendarize_domain_model_event']['palettes'] = array_merge(
    $GLOBALS['TCA']['tx_calendarize_domain_model_event']['palettes'] ?? [],
    $tmp_km_calendarizeext_palettes
);

$GLOBALS['TCA']['tx_calendarize_domain_model_event']['types']['Tx_KmCalendarizeext_Events']['showitem'] .= ',--palette--;;common, --palette--;;costs, --palette--;;location';

$GLOBALS['TCA']['tx_calendarize_domain_model_event']['columns'][$GLOBALS['TCA']['tx_calendarize_domain_model_event']['ctrl']['type']]['config']['items'][] = [
    'label' => 'LLL:EXT:km_calendarizeext/Resources/Private/Language/locallang_db.xlf:tx_calendarize_domain_model_event.tx_extbase_type.Tx_KmCalendarizeext_Events',
    'value' => 'Tx_KmCalendarizeext_Events'
];