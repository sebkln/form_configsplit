<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * TypoScript Static templates
 *
 * You can include each one of these static files in the TypoScript record of your websites (root page).
 * They will load either "Configuration/TypoScript/Laurel/setup.typoscript"
 * or "Configuration/TypoScript/Hardy/setup.typoscript",
 * where the frontend-related YAML configuration is then registered.
 */
ExtensionManagementUtility::addStaticFile(
    'form_configsplit',
    'Configuration/TypoScript/Laurel/',
    'Form frontend setup: Laurel Corporation'
);

ExtensionManagementUtility::addStaticFile(
    'form_configsplit',
    'Configuration/TypoScript/Hardy/',
    'Form frontend setup: Hardy Limited'
);
