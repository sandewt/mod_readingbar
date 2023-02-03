<?php
/**
 * @package     Reading Bar
 * @subpackage  mod_readingbar
 *
 * @author     JG Sanders
 * @copyright  Copyright (C) 2023 JG Sanders. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later       
 */

// no direct access
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require ModuleHelper::getLayoutPath('mod_readingbar', $params->get('layout', 'default'));
