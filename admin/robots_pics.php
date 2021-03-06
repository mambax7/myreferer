<?php declare(strict_types=1);

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
foreach ($pattern_robots as $pattern_robot) {
    if (preg_match($pattern_robot, $robot)) {
        $robotIcon = $pattern_robot;

        break;
    }

    $robotIcon = 'robot';
}
