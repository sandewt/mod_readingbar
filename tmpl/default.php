<?php
/**
 * @package     Reading Bar
 * @subpackage  mod_readingbar
 *
 * @author      JG Sanders
 * @copyright   Copyright (C) 2023 JG Sanders. All rights reserved.
 * @link        
 */

defined('_JEXEC') or die;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager()
	->registerAndUseScript('mod_readingbar', 'mod_readingbar/readingbar.js', [], ['type' => 'module'], ['core'])
	->registerAndUseStyle('mod_readingbar', 'mod_readingbar/readingbar.css');

?>
<div class="mod-readingbar">
	<div class="progress">
		<div id="readingbar" class="progress-bar bg-info" role="progressbar"></div>
	</div>
</div>
