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
use Joomla\CMS\Log\Log;

/**
 * Script file of ReadingBar module
 *
 * @since  1.1.0
 */
class mod_readingbarInstallerScript extends InstallerScript
{
    /**
     * Extension script constructor.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->minimumJoomla = '4.3';
        $this->minimumPhp    = JOOMLA_MINIMUM_PHP;
    }

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
         echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_PREFLIGHT');

        // Check for the minimum PHP version before continuing
        if (!empty($this->minimumPhp) && version_compare(PHP_VERSION, $this->minimumPhp, '<'))
        {
            Log::add(Text::sprintf('JLIB_INSTALLER_MINIMUM_PHP', $this->minimumPhp), Log::WARNING, 'jerror');

            return false;
        }

        // Check for the minimum Joomla version before continuing
        if (!empty($this->minimumJoomla) && version_compare(JVERSION, $this->minimumJoomla, '<'))
        {
            Log::add(Text::sprintf('JLIB_INSTALLER_MINIMUM_JOOMLA', $this->minimumJoomla), Log::WARNING, 'jerror');

            return false;
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
        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_POSTFLIGHT');

        $old = JPATH_ROOT . '/modules/mod_readingbar/mod_readingbar.php'; // File needed here in old joomla structure

        if (file_exists($old))
        {
            File::delete($old); // Delete file
        }

        return true;
    }
}
