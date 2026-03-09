<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jtwhatsapp
 *
 * @copyright   (C) 2026 JoomTheme
 * @license     GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;

$phone = $params->get('phone');
$message = urlencode($params->get('message'));
$position = $params->get('position','right');

$link = "https://wa.me/$phone?text=$message";
?>

<div class="jt-whatsapp jt-<?php echo $position; ?>">
    <a href="<?php echo $link; ?>" target="_blank" rel="noopener">
        WhatsApp
    </a>
</div>
