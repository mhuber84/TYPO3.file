<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Marco Huber <mail@marco-huber.de>
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 *
 *
 * @package file
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_File_Domain_Model_MediaType extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * ext
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ext;

	/**
	 * mime
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $mime;

	/**
	 * type
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the ext
	 *
	 * @return string $ext
	 */
	public function getExt() {
		return $this->ext;
	}

	/**
	 * Sets the ext
	 *
	 * @param string $ext
	 * @return void
	 */
	public function setExt($ext) {
		$this->ext = $ext;
		return $this;
	}

	/**
	 * Returns the mime
	 *
	 * @return string $mime
	 */
	public function getMime() {
		return $this->mime;
	}

	/**
	 * Sets the mime
	 *
	 * @param string $mime
	 * @return void
	 */
	public function setMime($mime) {
		$this->mime = $mime;
		return $this;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
?>