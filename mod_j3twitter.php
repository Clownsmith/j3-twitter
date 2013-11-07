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
$helper = new modJ3TwitterHelper;
// Require the Twitter API Exchange & Autolink
require_once(dirname(__FILE__).'/libs/TwitterAPIExchange.php');require_once(dirname(__FILE__).'/libs/Autolink.php');// Include the J3Twitter CSS$doc = JFactory::getDocument();$doc->addStyleSheet('modules/mod_j3twitter/assets/mod_j3twitter.css');
// Fetch the layout
require( JModuleHelper::getLayoutPath('mod_j3twitter'));
?>