<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    TechnicalValueRegex
 * @license    LGPL
 */

/**
 * Class TechnicalValueRegex
 *
 * Provide methods to handle the regex
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    TechnicalValueRegex
 */
class TechnicalValueRegex {
	/**
	 * Validate the custom regex
	 * @param string
	 * @return boolean
	 */
	public function addTechnicalValueRegex($strRegexp, $varValue, Widget $objWidget)
	{
		if ($strRegexp == 'tecValue')
		{
			if (!preg_match('/^[a-zA-Z0-9_]*$/', $varValue))
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['tecValue'], $objWidget->label));
			}
			return true; 
		}
		else if ($strRegexp == 'tecValueLC')
		{
			if (!preg_match('/^[a-z0-9_]*$/', $varValue))
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['tecValueLC'], $objWidget->label));
			}
			return true; 
		}
		else if ($strRegexp == 'tecValueUC')
		{
			if (!preg_match('/^[A-Z0-9_]*$/', $varValue))
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['tecValueUC'], $objWidget->label));
			}
			return true; 
		}
		return false;
	}
}

?>