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
class Tx_File_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * subTitle
	 *
	 * @var string
	 */
	protected $subTitle;

	/**
	 * navTitle
	 *
	 * @var string
	 */
	protected $navTitle;

	/**
	 * keywords
	 *
	 * @var string
	 */
	protected $keywords;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * parent
	 * @lazy
	 * @var Tx_File_Domain_Model_Category
	 */
	protected $parent;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Returns the subTitle
	 *
	 * @return string $subTitle
	 */
	public function getSubTitle() {
		return $this->subTitle;
	}

	/**
	 * Sets the subTitle
	 *
	 * @param string $subTitle
	 * @return void
	 */
	public function setSubTitle($subTitle) {
		$this->subTitle = $subTitle;
		return $this;
	}

	/**
	 * Returns the navTitle
	 *
	 * @return string $navTitle
	 */
	public function getNavTitle() {
		return $this->navTitle;
	}

	/**
	 * Sets the navTitle
	 *
	 * @param string $navTitle
	 * @return void
	 */
	public function setNavTitle($navTitle) {
		$this->navTitle = $navTitle;
		return $this;
	}

	/**
	 * Returns the keywords
	 *
	 * @return string $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param string $keywords
	 * @return void
	 */
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
		return $this;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Returns the parent
	 *
	 * @return Tx_File_Domain_Model_Category $parent
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Sets the parent
	 *
	 * @param Tx_File_Domain_Model_Category $parent
	 * @return void
	 */
	public function setParent(Tx_File_Domain_Model_Category $parent) {
		$this->parent = $parent;
		return $this;
	}

}
?>