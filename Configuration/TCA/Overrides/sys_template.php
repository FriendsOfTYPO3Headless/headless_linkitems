<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'headless_linkitems',
    'Configuration/TypoScript/',
    'Headless Linkitems'
);
