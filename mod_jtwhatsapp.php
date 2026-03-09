<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jtwhatsapp
 *
 * @copyright   (C) 2026 JoomTheme
 * @license     GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;

$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_jtwhatsapp.style', 'modules/mod_jtwhatsapp/media/css/style.css');

$phone = preg_replace('/\D+/', '', (string) $params->get('phone', ''));
$message = rawurlencode((string) $params->get('message', ''));
$position = (string) $params->get('position', 'right');

if (!in_array($position, ['right', 'left'], true)) {
    $position = 'right';
}

require ModuleHelper::getLayoutPath('mod_jtwhatsapp', $params->get('layout', 'default'));
