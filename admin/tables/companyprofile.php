<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_companyprofile
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Company Table class
 *
 * @since  0.0.1
 */
class CompanyProfileTableCompanyProfile extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__companyprofile', 'id', $db);
	}
}
