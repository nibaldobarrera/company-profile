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

// Set some global property
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-companyprofile {background-image: url(../media/com_companyprofile/images/tux-16x16.png);}');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by CompanyProfile
$controller = JControllerLegacy::getInstance('CompanyProfile');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
