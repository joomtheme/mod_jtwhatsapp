<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jtwhatsapp
 *
 * @copyright   (C) 2026 JoomTheme
 * @license     GNU General Public License version 2 or later
 */

namespace JoomTheme\Module\JTWhatsApp\Site\Dispatcher;

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{
    public function dispatch()
    {
        require \Joomla\CMS\Helper\ModuleHelper::getLayoutPath('mod_jtwhatsapp', 'default');
    }
}
