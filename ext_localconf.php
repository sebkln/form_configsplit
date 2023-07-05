<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

call_user_func(static function () {
    /**
     * Here, we load our general form configuration globally via TypoScript.
     *
     * "module.tx_form":
     * - Configuration for the TYPO3 backend module (Form Management/Editor)
     *
     * "plugin.tx_form":
     * - Configuration for the frontend (form plugin)
     * - The plugins need to know, for example, where to find the form definitions.
     *   Therefore, the general form configuration is loaded globally here as well.
     * - The frontend-related configuration will be loaded for plugins only
     *   in selected page trees (see "Configuration/TCA/Overrides/sys_template.php").
     */
    ExtensionManagementUtility::addTypoScriptSetup(
        trim('
         module.tx_form.settings.yamlConfigurations {
            500 = EXT:form_configsplit/Configuration/Form/FormSetup.yaml
        }

        plugin.tx_form.settings.yamlConfigurations {
            500 = EXT:form_configsplit/Configuration/Form/FormSetup.yaml
        }
    ')
    );
});
