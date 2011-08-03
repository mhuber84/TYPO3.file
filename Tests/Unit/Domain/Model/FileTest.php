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
 * Test case for class Tx_File_Domain_Model_File.
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
class Tx_File_Domain_Model_FileTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_File_Domain_Model_File
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_File_Domain_Model_File();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileNameForStringSetsFileName() { 
		$this->fixture->setFileName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileName()
		);
	}
	
	/**
	 * @test
	 */
	public function getFilePathReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFilePathForStringSetsFilePath() { 
		$this->fixture->setFilePath('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFilePath()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileDownloadNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileDownloadNameForStringSetsFileDownloadName() { 
		$this->fixture->setFileDownloadName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileDownloadName()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileTypeForStringSetsFileType() { 
		$this->fixture->setFileType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileType()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileTypeVersionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileTypeVersionForStringSetsFileTypeVersion() { 
		$this->fixture->setFileTypeVersion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileTypeVersion()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileSizeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFileSize()
		);
	}

	/**
	 * @test
	 */
	public function setFileSizeForIntegerSetsFileSize() { 
		$this->fixture->setFileSize(12);

		$this->assertSame(
			12,
			$this->fixture->getFileSize()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileOriginalLocationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileOriginalLocationForStringSetsFileOriginalLocation() { 
		$this->fixture->setFileOriginalLocation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileOriginalLocation()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileOriginalLocationDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileOriginalLocationDescriptionForStringSetsFileOriginalLocationDescription() { 
		$this->fixture->setFileOriginalLocationDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileOriginalLocationDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileCreatorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileCreatorForStringSetsFileCreator() { 
		$this->fixture->setFileCreator('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileCreator()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileMimeTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileMimeTypeForStringSetsFileMimeType() { 
		$this->fixture->setFileMimeType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileMimeType()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileMimeSubTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileMimeSubTypeForStringSetsFileMimeSubType() { 
		$this->fixture->setFileMimeSubType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileMimeSubType()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileCtimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setFileCtimeForDateTimeSetsFileCtime() { }
	
	/**
	 * @test
	 */
	public function getFileMtimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setFileMtimeForDateTimeSetsFileMtime() { }
	
	/**
	 * @test
	 */
	public function getFileUsageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileUsageForStringSetsFileUsage() { 
		$this->fixture->setFileUsage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFileUsage()
		);
	}
	
	/**
	 * @test
	 */
	public function getIdentReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIdentForStringSetsIdent() { 
		$this->fixture->setIdent('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIdent()
		);
	}
	
	/**
	 * @test
	 */
	public function getCreatorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCreatorForStringSetsCreator() { 
		$this->fixture->setCreator('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCreator()
		);
	}
	
	/**
	 * @test
	 */
	public function getPublisherReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPublisherForStringSetsPublisher() { 
		$this->fixture->setPublisher('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPublisher()
		);
	}
	
	/**
	 * @test
	 */
	public function getCopyrightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCopyrightForStringSetsCopyright() { 
		$this->fixture->setCopyright('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCopyright()
		);
	}
	
	/**
	 * @test
	 */
	public function getKeywordsReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKeywordsForStringSetsKeywords() { 
		$this->fixture->setKeywords('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKeywords()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getCaptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCaptionForStringSetsCaption() { 
		$this->fixture->setCaption('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCaption()
		);
	}
	
	/**
	 * @test
	 */
	public function getAltTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAltTextForStringSetsAltText() { 
		$this->fixture->setAltText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAltText()
		);
	}
	
	/**
	 * @test
	 */
	public function getInstructionsReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInstructionsForStringSetsInstructions() { 
		$this->fixture->setInstructions('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInstructions()
		);
	}
	
	/**
	 * @test
	 */
	public function getAbstractReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAbstractForStringSetsAbstract() { 
		$this->fixture->setAbstract('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAbstract()
		);
	}
	
	/**
	 * @test
	 */
	public function getDateCrReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateCrForDateTimeSetsDateCr() { }
	
	/**
	 * @test
	 */
	public function getDateModReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateModForDateTimeSetsDateMod() { }
	
	/**
	 * @test
	 */
	public function getLocDescReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLocDescForStringSetsLocDesc() { 
		$this->fixture->setLocDesc('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLocDesc()
		);
	}
	
	/**
	 * @test
	 */
	public function getLocCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLocCityForStringSetsLocCity() { 
		$this->fixture->setLocCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLocCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getHorizontalResolutionReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getHorizontalResolution()
		);
	}

	/**
	 * @test
	 */
	public function setHorizontalResolutionForIntegerSetsHorizontalResolution() { 
		$this->fixture->setHorizontalResolution(12);

		$this->assertSame(
			12,
			$this->fixture->getHorizontalResolution()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerticalResolutionReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVerticalResolution()
		);
	}

	/**
	 * @test
	 */
	public function setVerticalResolutionForIntegerSetsVerticalResolution() { 
		$this->fixture->setVerticalResolution(12);

		$this->assertSame(
			12,
			$this->fixture->getVerticalResolution()
		);
	}
	
	/**
	 * @test
	 */
	public function getHorizontalPixelsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getHorizontalPixels()
		);
	}

	/**
	 * @test
	 */
	public function setHorizontalPixelsForIntegerSetsHorizontalPixels() { 
		$this->fixture->setHorizontalPixels(12);

		$this->assertSame(
			12,
			$this->fixture->getHorizontalPixels()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerticalPixelsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVerticalPixels()
		);
	}

	/**
	 * @test
	 */
	public function setVerticalPixelsForIntegerSetsVerticalPixels() { 
		$this->fixture->setVerticalPixels(12);

		$this->assertSame(
			12,
			$this->fixture->getVerticalPixels()
		);
	}
	
	/**
	 * @test
	 */
	public function getColorSpaceReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getColorSpace()
		);
	}

	/**
	 * @test
	 */
	public function setColorSpaceForIntegerSetsColorSpace() { 
		$this->fixture->setColorSpace(12);

		$this->assertSame(
			12,
			$this->fixture->getColorSpace()
		);
	}
	
	/**
	 * @test
	 */
	public function getWidthReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWidthForStringSetsWidth() { 
		$this->fixture->setWidth('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWidth()
		);
	}
	
	/**
	 * @test
	 */
	public function getHeightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHeightForStringSetsHeight() { 
		$this->fixture->setHeight('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getHeightUnitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHeightUnitForStringSetsHeightUnit() { 
		$this->fixture->setHeightUnit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHeightUnit()
		);
	}
	
	/**
	 * @test
	 */
	public function getMetaReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMetaForStringSetsMeta() { 
		$this->fixture->setMeta('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMeta()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForObjectStorageContainingTx_File_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingTx_File_Domain_Model_CategorySetsCategory() { 
		$category = new Tx_File_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategory()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory() {
		$category = new Tx_File_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory() {
		$category = new Tx_File_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategory()
		);
	}
	
	/**
	 * @test
	 */
	public function getMediaTypeReturnsInitialValueForTx_File_Domain_Model_MediaType() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getMediaType()
		);
	}

	/**
	 * @test
	 */
	public function setMediaTypeForTx_File_Domain_Model_MediaTypeSetsMediaType() { 
		$dummyObject = new Tx_File_Domain_Model_MediaType();
		$this->fixture->setMediaType($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getMediaType()
		);
	}
	
	/**
	 * @test
	 */
	public function getLocCountryReturnsInitialValueForTx_File_Domain_Model_StaticCountries() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getLocCountry()
		);
	}

	/**
	 * @test
	 */
	public function setLocCountryForTx_File_Domain_Model_StaticCountriesSetsLocCountry() { 
		$dummyObject = new Tx_File_Domain_Model_StaticCountries();
		$this->fixture->setLocCountry($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getLocCountry()
		);
	}
	
}
?>