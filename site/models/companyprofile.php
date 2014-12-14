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

/**
 * CompanyProfile Model
 *
 * @since  0.0.1
 */
class CompanyProfileModelCompanyProfile extends JModelItem
{
	/**
	 * @var array messages
	 */
	protected $messages;

	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'CompanyProfile', $prefix = 'CompanyProfileTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Get the message
	 *
	 * @param   integer  $id  Company Id
	 *
	 * @return  string        Fetched String from Table for relevant Id
	 */
	public function getMsg($id = 1)
	{
		if (!is_array($this->messages))
		{
			$this->messages = array();
		}

		if (!isset($this->messages[$id]))
		{
			// Request the selected id
			$jinput = JFactory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');

			// Get a TableCompanyProfile instance
			$table = $this->getTable();

			// Load the message
			$table->load($id);

			// Assign the message
			$company_label = JText::_('COM_COMPANYPROFILE_COMPANYPROFILE_COMPANY_LABEL');
			$adress_label  = JText::_('COM_COMPANYPROFILE_COMPANYPROFILE_ADRESS_LABEL');
			$city_label    = JText::_('COM_COMPANYPROFILE_COMPANYPROFILE_CITY_LABEL');
			$phone_label   = JText::_('COM_COMPANYPROFILE_COMPANYPROFILE_PHONE_LABEL');
			$this->messages[$id] = $company_label." : ".$table->company."<br>".
			                       $adress_label." : ".$table->adress."<br>".
			                       $city_label." : ".$table->city."<br>".
			                       $phone_label." : ".$table->phone ;
		}

		return $this->messages[$id];
	}
}
