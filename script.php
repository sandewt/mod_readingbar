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

use Joomla\CMS\Installer\InstallerScript;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Language\Text;

/**
 * Script file of ReadingBar module
 *
 * @since  1.0.1
 */
class mod_readingbarInstallerScript extends InstallerScript
{
    /**
     * Method to install the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  boolean  True on success
     */
    public function install($parent)
    {
        Text::_('MOD_READINGBAR_INSTALLERSCRIPT_INSTALL');

        return true;
    }

    /**
     * Method to uninstall the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  boolean  True on success
     */
    public function uninstall($parent)
    {
        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_UNINSTALL');

        return true;
    }

    /**
     * Method to update the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  boolean  True on success
     */
    public function update($parent)
    {
        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_UPDATE');

        return true;
    }

    /**
     * Function called before extension installation/update/uninstall procedure commences
     *
     * @param   string            $type    The type of change (install, update or discover_install, not uninstall)
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  boolean  True on success
     */
    public function preflight($type, $parent)
    {
        // echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_PREFLIGHT');

        if ($type == 'install')
        {
            return true;
        }

        return true;
    }

    /**
     * Function called after extension installation/update/removal procedure commences
     *
     * @param   string            $type    The type of change (install, update or discover_install, not uninstall)
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  boolean  True on success
     */
    public function postflight($type, $parent)
    {
        // echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_POSTFLIGHT');

        $old = JPATH_ROOT . '/modules/mod_readingbar/mod_readingbar.php';

        if (file_exists($old))
        {
            File::delete($old);
        }

        return true;
    }
}
