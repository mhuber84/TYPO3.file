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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_File_Domain_Model_MediaType.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage File handling
 *
 * @author Marco Huber <mail@marco-huber.de>
 */
class Tx_File_Domain_Model_MediaTypeTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_File_Domain_Model_MediaType
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_File_Domain_Model_MediaType();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getExtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setExtForStringSetsExt() { 
		$this->fixture->setExt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getExt()
		);
	}
	
	/**
	 * @test
	 */
	public function getMimeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMimeForStringSetsMime() { 
		$this->fixture->setMime('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMime()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForIntegerSetsType() { 
		$this->fixture->setType(12);

		$this->assertSame(
			12,
			$this->fixture->getType()
		);
	}
	
}
?>