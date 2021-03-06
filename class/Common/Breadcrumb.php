<?php declare(strict_types=1);

namespace XoopsModules\Myreferer\Common;

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Breadcrumb Class
 *
 * @copyright   XOOPS Project (https://xoops.org)
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      lucio <lucio.rota@gmail.com>
 */

use function basename;
use function dirname;
use function is_object;
use XoopsTpl;
use xos_opal_Theme;

/**
 * Class Breadcrumb
 */
class Breadcrumb
{
    public $dirname;

    private $bread = [];

    public function __construct()
    {
        $this->dirname = basename(dirname(__DIR__, 2));
    }

    /**
     * Add link to breadcrumb
     *
     * @param string $title
     * @param string $link
     */
    public function addLink($title = '', $link = '')
    {
        $this->bread[] = [
            'link'  => $link,
            'title' => $title,
        ];
    }

    /**
     * Render BreadCrumb
     */
    public function render()
    {
        if (!isset($GLOBALS['xoTheme']) || !is_object($GLOBALS['xoTheme'])) {
            require $GLOBALS['xoops']->path('class/theme.php');

            $GLOBALS['xoTheme'] = new xos_opal_Theme();
        }

        require $GLOBALS['xoops']->path('class/template.php');

        $breadcrumbTpl = new XoopsTpl();

        $breadcrumbTpl->assign('breadcrumb', $this->bread);

        $html = $breadcrumbTpl->fetch('db:' . $this->dirname . '_common_breadcrumb.tpl');

        unset($breadcrumbTpl);

        return $html;
    }
}
