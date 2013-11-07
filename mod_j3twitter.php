<?php
//============================================================================
// @ mod_j3twitter
// # Chris Smith - 7/11/2013
// # Twitter Module for Joomla 3.2.x
//============================================================================

// No Direct Access
defined('_JEXEC') or die('Restricted access');

// Require the helper
require_once(dirname(__FILE__).'/helper.php');

// Require the Twitter API Exchange
require_once(dirname(__FILE__).'/TwitterAPIExchange.php');

// Fetch the layout
require( JModuleHelper::getLayoutPath('mod_j3twitter'));

?>