<?php

/**
 * @package     Reading Bar
 * @subpackage  mod_readingbar
 *
 * @author      JG Sanders
 * @copyright   Copyright (C) 2023 JG Sanders. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later        
 */

namespace Joomla\Module\ReadingBar\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Dispatcher class for mod_footer
 *
 * @since  1.0.1
 */
class Dispatcher extends AbstractModuleDispatcher
{
    /**
     * Returns the layout data.
     *
     * @return  array
     *
     * @since   1.0.1
     */
    protected function getLayoutData(): array
    {
        $data = parent::getLayoutData(); 

        return $data;
    }
}
