<?php
namespace TYPO3\CMS\Core\Type;

/***************************************************************
 * Copyright notice
 *
 * (c) 2013 Sascha Egerer <sascha.egerer@dkd.de>
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * A copy is found in the text file GPL.txt and important notices to the license
 * from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This is an interface that has to be used by all Core Types.
 * All of them have to implement a __toString() method that is
 * used to get a flatten string for the persistence of the object.
 */
interface TypeInterface {

	/**
	 * Core types must implement the __toString function in order to be
	 * serialized to the database;
	 *
	 * @return string
	 */
	public function __toString();
}