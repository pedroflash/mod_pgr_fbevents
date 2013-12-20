<?php
/**
Módulo para listagem de videos do Youtube
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$document = JFactory::getDocument();
$url = "modules/mod_pgr_fbevents/assets/css/default.css";
$document->addStyleSheet($url);
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );

$events = modPgrFbEventsHelper::getEvents( $params );
require( JModuleHelper::getLayoutPath( 'mod_pgr_fbevents' ) );
?>