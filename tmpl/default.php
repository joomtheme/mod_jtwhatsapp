<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jtwhatsapp
 *
 * @copyright   (C) 2026 JoomTheme
 * @license     GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;

if ($phone === '') {
    return;
}

$link = 'https://wa.me/' . $phone;

if ($message !== '') {
    $link .= '?text=' . $message;
}
?>
<div class="jt-whatsapp jt-<?php echo htmlspecialchars($position, ENT_QUOTES, 'UTF-8'); ?>">
    <a
        href="<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="WhatsApp"
        title="WhatsApp"
    >
        <span class="jt-whatsapp__icon" aria-hidden="true">✆</span>
        <span class="jt-whatsapp__text">WhatsApp</span>
    </a>
</div>
