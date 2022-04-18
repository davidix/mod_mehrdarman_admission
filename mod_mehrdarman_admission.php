<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
$items = ModMehrdarman_admissionHelper::getItems();
$item = ModMehrdarman_admissionHelper::getItem();

require JModuleHelper::getLayoutPath('mod_mehrdarman_admission', $params->get('layout', 'default'));