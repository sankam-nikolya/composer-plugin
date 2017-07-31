<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.cache
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Joomla! Page Cache Plugin.
 *
 * @since  1.5
 */
class PlgSystemComposer extends JPlugin
{
	/**
	 * Add composer autoload vendor
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterInitialise()
	{
		$vendorPath = $this->params->get('vendor', 'vendor');

		require_once JPATH_ROOT . '/' . $vendorPath . '/autoload.php';
	}
}
