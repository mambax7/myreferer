<?php

declare(strict_types=1);

/**
 * XOOPS - PHP Content Management System
 * Copyright (c) 2004 <https://xoops.org>
 *
 * Module: myreferer 2.0
 * Licence : GPL
 * Authors :
 *           - solo (www.wolfpackclan.com/wolfactory)
 *            - DuGris (www.dugris.info)
 */
require_once dirname(__DIR__, 3) . '/mainfile.php';
require_once dirname(__DIR__, 3) . '/include/cp_header.php';
require_once dirname(__DIR__, 3) . '/include/functions.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsmodule.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
require_once XOOPS_ROOT_PATH . '/class/module.errorhandler.php';
$eh = new ErrorHandler();

if (file_exists(XOOPS_ROOT_PATH . '/modules/myreferer/language/' . $xoopsConfig['language'] . '/common.php')) {
    require_once XOOPS_ROOT_PATH . '/modules/myreferer/language/' . $xoopsConfig['language'] . '/common.php';
} else {
    require_once XOOPS_ROOT_PATH . '/modules/myreferer/language/english/common.php';
}

if (false === mb_strpos(basename($_SERVER['SCRIPT_NAME']), 'detail')) {
    xoops_cp_header();

    echo '<style type="text/css">';

    echo 'th a:link {text-decoration: none; color: #ffff00; font-weight: bold; background-color: transparent;}';

    echo 'th a:active {text-decoration: none; color: #ffffff; font-weight: bold; background-color: transparent;}';

    echo 'th a:visited {text-decoration: none; color: #ffff00; font-weight: bold; background-color: transparent;}';

    echo 'th a:hover {text-decoration: none; color: #ff0000; font-weight: bold; background-color: transparent;}';

    echo '</style>';
}
