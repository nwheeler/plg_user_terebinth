<?php
/**
 * Terebinth User Plugin
 *
 * Copyright (c) 2013 Nicholas Wheeler
 *
 * @license GNU / GPL 
 *   
**/
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Script file of JFUploader plugin
 */
class plgUserTerebinthInstallerScript
{
  function install($parent) {
     // I activate the plugin
    $db = JFactory::getDbo();
     $tableExtensions = $db->nameQuote("#__extensions");
     $columnElement   = $db->nameQuote("element");
     $columnType      = $db->nameQuote("type");
     $columnEnabled   = $db->nameQuote("enabled");

     // Enable plugin
     $db->setQuery("UPDATE $tableExtensions SET $columnEnabled=1 WHERE $columnElement='terebinth' AND $columnType='plugin'");
     $db->query();

     echo '<p>'. JText::_('PLG_USER_TEREBINTH_PLUGIN_ENABLED') .'</p>';
  }
}
?>

