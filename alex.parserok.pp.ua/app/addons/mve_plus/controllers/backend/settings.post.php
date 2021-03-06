<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'manage') {

    if (isset($_REQUEST['section_id']) && strtolower($_REQUEST['section_id']) == 'vendors') {
        if (!fn_allowed_for('MULTIVENDOR:PLUS')) {
            $options = Tygh::$app['view']->getTemplateVars('options');
            $options = fn_mve_plus_hide_theme_and_styles_editing_settings($options);
            Tygh::$app['view']->assign('options', $options);
        }
    }
}

