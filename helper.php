<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

class ModMehrdarman_admissionHelper
{
	/**
	 * Get the item
	 *
	 * @return  object	The item.
	 */
	public static function getItem()
	{
		$input = JFactory::getApplication()->input;
		
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('a.*')
			  ->from('#__mehrdarman_admission_admission AS a')
			  ->where('id = ' . $db->quote($input->get('id', 1, 'int')));
		$db->setQuery($query);	
		return $db->loadObject();
	}

	/**
	 * Get the items
	 *
	 * @return  array<object>	The items.
	 */
	public static function getItems()
	{		
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('a.*')->from('#__mehrdarman_admission_admission AS a');
		$db->setQuery($query);	
		return $db->loadObjectList();
	}
}
