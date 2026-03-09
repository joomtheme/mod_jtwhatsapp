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

$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle(
    'mod_jtwhatsapp.style',
    'modules/mod_jtwhatsapp/media/css/style.css'
);

$phone    = preg_replace('/\D+/', '', (string) $params->get('phone', ''));
$message  = rawurlencode((string) $params->get('message', ''));
$position = (string) $params->get('position', 'right');

if ($phone === '')
{
    return;
}

$link = 'https://wa.me/' . $phone;

if ($message !== '')
{
    $link .= '?text=' . $message;
}

if (!in_array($position, ['right', 'left'], true))
{
    $position = 'right';
}
?>

<div class="jt-whatsapp jt-<?php echo htmlspecialchars($position, ENT_QUOTES, 'UTF-8'); ?>">
    <a
        href="<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="WhatsApp"
    >
        WhatsApp
    </a>
</div>
