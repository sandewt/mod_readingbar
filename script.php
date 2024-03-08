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

use Joomla\CMS\Installer\InstallerAdapter;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Log\Log;

/**
 * Script file of ReadingBar module
 *
 * @since  1.1.0
 */
class Mod_readingbarInstallerScript
{
    /**
     * Minimum Joomla version
     *
     * @var    string
     * @since  1.1.0
     */
    private string $minimumJoomla = '4.3';

    /**
     * Minimum PHP version
     *
     * @var    string
     * @since  1.1.0
     */    
    private string $minimumPhp = JOOMLA_MINIMUM_PHP;

    /**
     * File to delete
     *
     * @var    string
     * @since  1.1.0
     */    
    private string $deletedFile;

    /**
     * Method to install the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  bool   True on success
     * @since   1.1.0
     */
    public function install(InstallerAdapter $parent): bool
    {
        Text::_('MOD_READINGBAR_INSTALLERSCRIPT_INSTALL');

        return true;
    }

    /**
     * Method to uninstall the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  bool   True on success
     * @since   1.1.0
     */
    public function uninstall(InstallerAdapter $parent): bool
    {
        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_UNINSTALL');

        return true;
    }

    /**
     * Method to update the extension
     *
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  bool   True on success
     * @since   1.1.0
     */
    public function update(InstallerAdapter $parent): bool
    {
        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_UPDATE');

        return true;
    }

    /**
     * Function called before extension installation/update/uninstall procedure commences
     *
     * @param   string            $type    The type of change (install, update
     *                                     or discover_install, not uninstall)
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  bool   True on success
     * @since   1.1.0
     */
    public function preflight(string $type, InstallerAdapter $parent): bool
    {
        if ($type !== 'uninstall'){
            // Check for the minimum PHP version before continuing
            if (!empty($this->minimumPhp)
                && version_compare(
                    PHP_VERSION,
                    $this->minimumPhp,
                    '<'
                )) {
                Log::add(
                    Text::sprintf('JLIB_INSTALLER_MINIMUM_PHP', $this->minimumPhp),
                    Log::WARNING,
                    'jerror'
                );

                return false;
            }

            // Check for the minimum Joomla version before continuing
            if (!empty($this->minimumJoomla)
                && version_compare(
                    JVERSION,
                    $this->minimumJoomla,
                    '<'
                )) {
                Log::add(
                    Text::sprintf(
                        'JLIB_INSTALLER_MINIMUM_JOOMLA',
                        $this->minimumJoomla
                    ),
                    Log::WARNING,
                    'jerror'
                );

                return false;
            }
        }

        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_PREFLIGHT');

        return true;
    }

    /**
     * Function called after extension installation/update/removal procedure commences
     *
     * @param   string            $type    The type of change (install, update
     *                                     or discover_install, not uninstall)
     * @param   InstallerAdapter  $parent  The class calling this method
     *
     * @return  bool   True on success
     * @since   1.1.0
     */
    public function postflight(string $type, InstallerAdapter $parent): bool
    {
        $this->deletedFile = JPATH_ROOT . '/modules/mod_readingbar/mod_readingbar.php'; // File needed in Joomla 4.2

        if (file_exists($this->deletedFile)) {
            File::delete($this->deletedFile);
        }

        echo Text::_('MOD_READINGBAR_INSTALLERSCRIPT_POSTFLIGHT');

        return true;
    }
}
