<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_companyprofile
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

/**
 * CompanyProfile Form Field class for the CompanyProfile component
 *
 * @since  0.0.1
 */
class JFormFieldCompanyProfile extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'CompanyProfile';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,greeting');
		$query->from('#__companyprofile');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->greeting);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
