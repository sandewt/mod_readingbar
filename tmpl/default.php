<?php

/**
 * @package     Reading Bar
 * @subpackage  mod_readingbar
 *
 * @author      JG Sanders
 * @copyright   Copyright (C) 2023 JG Sanders. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later        
 */

defined('_JEXEC') or die;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseScript('mod_readingbar', 'mod_readingbar/readingbar.js', [], ['type' => 'module'], ['core'])
   ->registerAndUseStyle('mod_readingbar', 'mod_readingbar/readingbar.css');

$color = htmlspecialchars($params->get('color', 'info'), ENT_QUOTES, 'UTF-8');

?>
<div class="mod-readingbar">
    <div class="progress">
        <div id="readingbar" class="progress-bar bg-<?php echo $color; ?>" role="progressbar"></div>
    </div>
</div>
