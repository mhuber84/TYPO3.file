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
class Tx_File_Domain_Model_File extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * fileName
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $fileName;

	/**
	 * filePath
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $filePath;

	/**
	 * fileDownloadName
	 *
	 * @var string
	 */
	protected $fileDownloadName;

	/**
	 * fileType
	 *
	 * @var string
	 */
	protected $fileType;

	/**
	 * fileTypeVersion
	 *
	 * @var string
	 */
	protected $fileTypeVersion;

	/**
	 * fileSize
	 *
	 * @var integer
	 */
	protected $fileSize;

	/**
	 * fileOriginalLocation
	 *
	 * @var string
	 */
	protected $fileOriginalLocation;

	/**
	 * fileOriginalLocationDescription
	 *
	 * @var string
	 */
	protected $fileOriginalLocationDescription;

	/**
	 * fileCreator
	 *
	 * @var string
	 */
	protected $fileCreator;

	/**
	 * fileMimeType
	 *
	 * @var string
	 */
	protected $fileMimeType;

	/**
	 * fileMimeSubType
	 *
	 * @var string
	 */
	protected $fileMimeSubType;

	/**
	 * fileCtime
	 *
	 * @var DateTime
	 */
	protected $fileCtime;

	/**
	 * fileMtime
	 *
	 * @var DateTime
	 */
	protected $fileMtime;

	/**
	 * fileUsage
	 *
	 * @var string
	 */
	protected $fileUsage;

	/**
	 * ident
	 *
	 * @var string
	 */
	protected $ident;

	/**
	 * creator
	 *
	 * @var string
	 */
	protected $creator;

	/**
	 * publisher
	 *
	 * @var string
	 */
	protected $publisher;

	/**
	 * copyright
	 *
	 * @var string
	 */
	protected $copyright;

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
	 * caption
	 *
	 * @var string
	 */
	protected $caption;

	/**
	 * altText
	 *
	 * @var string
	 */
	protected $altText;

	/**
	 * instructions
	 *
	 * @var string
	 */
	protected $instructions;

	/**
	 * abstract
	 *
	 * @var string
	 */
	protected $abstract;

	/**
	 * dateCr
	 *
	 * @var DateTime
	 */
	protected $dateCr;

	/**
	 * dateMod
	 *
	 * @var DateTime
	 */
	protected $dateMod;

	/**
	 * locDesc
	 *
	 * @var string
	 */
	protected $locDesc;

	/**
	 * locCity
	 *
	 * @var string
	 */
	protected $locCity;

	/**
	 * horizontalResolution
	 *
	 * @var integer
	 */
	protected $horizontalResolution;

	/**
	 * verticalResolution
	 *
	 * @var integer
	 */
	protected $verticalResolution;

	/**
	 * horizontalPixels
	 *
	 * @var integer
	 */
	protected $horizontalPixels;

	/**
	 * verticalPixels
	 *
	 * @var integer
	 */
	protected $verticalPixels;

	/**
	 * colorSpace
	 *
	 * @var integer
	 */
	protected $colorSpace;

	/**
	 * width
	 *
	 * @var string
	 */
	protected $width;

	/**
	 * height
	 *
	 * @var string
	 */
	protected $height;

	/**
	 * heightUnit
	 *
	 * @var string
	 */
	protected $heightUnit;

	/**
	 * meta
	 *
	 * @var string
	 */
	protected $meta;

	/**
	 * category
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_File_Domain_Model_Category>
	 */
	protected $category;

	/**
	 * mediaType
	 *
	 * @var Tx_File_Domain_Model_MediaType
	 */
	protected $mediaType;

	/**
	 * locCountry
	 *
	 * @var Tx_ExtbaseStaticinfotables_Domain_Model_Country
	 */
	/*protected $locCountry;*/

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the extension builder
		* You may modify the constructor of this class instead
		*/
		$this->category = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the fileName
	 *
	 * @return string $fileName
	 */
	public function getFileName() {
		return $this->fileName;
	}

	/**
	 * Sets the fileName
	 *
	 * @param string $fileName
	 * @return void
	 */
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		return $this;
	}

	/**
	 * Returns the filePath
	 *
	 * @return string $filePath
	 */
	public function getFilePath() {
		return $this->filePath;
	}

	/**
	 * Sets the filePath
	 *
	 * @param string $filePath
	 * @return void
	 */
	public function setFilePath($filePath) {
		$this->filePath = $filePath;
		return $this;
	}

	/**
	 * Returns the fileDownloadName
	 *
	 * @return string $fileDownloadName
	 */
	public function getFileDownloadName() {
		return $this->fileDownloadName;
	}

	/**
	 * Sets the fileDownloadName
	 *
	 * @param string $fileDownloadName
	 * @return void
	 */
	public function setFileDownloadName($fileDownloadName) {
		$this->fileDownloadName = $fileDownloadName;
		return $this;
	}

	/**
	 * Returns the fileType
	 *
	 * @return string $fileType
	 */
	public function getFileType() {
		return $this->fileType;
	}

	/**
	 * Sets the fileType
	 *
	 * @param string $fileType
	 * @return void
	 */
	public function setFileType($fileType) {
		$this->fileType = $fileType;
		return $this;
	}

	/**
	 * Returns the fileTypeVersion
	 *
	 * @return string $fileTypeVersion
	 */
	public function getFileTypeVersion() {
		return $this->fileTypeVersion;
	}

	/**
	 * Sets the fileTypeVersion
	 *
	 * @param string $fileTypeVersion
	 * @return void
	 */
	public function setFileTypeVersion($fileTypeVersion) {
		$this->fileTypeVersion = $fileTypeVersion;
		return $this;
	}

	/**
	 * Returns the fileSize
	 *
	 * @return integer $fileSize
	 */
	public function getFileSize() {
		return $this->fileSize;
	}

	/**
	 * Sets the fileSize
	 *
	 * @param integer $fileSize
	 * @return void
	 */
	public function setFileSize($fileSize) {
		$this->fileSize = $fileSize;
		return $this;
	}

	/**
	 * Returns the fileOriginalLocation
	 *
	 * @return string $fileOriginalLocation
	 */
	public function getFileOriginalLocation() {
		return $this->fileOriginalLocation;
	}

	/**
	 * Sets the fileOriginalLocation
	 *
	 * @param string $fileOriginalLocation
	 * @return void
	 */
	public function setFileOriginalLocation($fileOriginalLocation) {
		$this->fileOriginalLocation = $fileOriginalLocation;
		return $this;
	}

	/**
	 * Returns the fileOriginalLocationDescription
	 *
	 * @return string $fileOriginalLocationDescription
	 */
	public function getFileOriginalLocationDescription() {
		return $this->fileOriginalLocationDescription;
	}

	/**
	 * Sets the fileOriginalLocationDescription
	 *
	 * @param string $fileOriginalLocationDescription
	 * @return void
	 */
	public function setFileOriginalLocationDescription($fileOriginalLocationDescription) {
		$this->fileOriginalLocationDescription = $fileOriginalLocationDescription;
		return $this;
	}

	/**
	 * Returns the fileCreator
	 *
	 * @return string $fileCreator
	 */
	public function getFileCreator() {
		return $this->fileCreator;
	}

	/**
	 * Sets the fileCreator
	 *
	 * @param string $fileCreator
	 * @return void
	 */
	public function setFileCreator($fileCreator) {
		$this->fileCreator = $fileCreator;
		return $this;
	}

	/**
	 * Returns the fileMimeType
	 *
	 * @return string $fileMimeType
	 */
	public function getFileMimeType() {
		return $this->fileMimeType;
	}

	/**
	 * Sets the fileMimeType
	 *
	 * @param string $fileMimeType
	 * @return void
	 */
	public function setFileMimeType($fileMimeType) {
		$this->fileMimeType = $fileMimeType;
		return $this;
	}

	/**
	 * Returns the fileMimeSubType
	 *
	 * @return string $fileMimeSubType
	 */
	public function getFileMimeSubType() {
		return $this->fileMimeSubType;
	}

	/**
	 * Sets the fileMimeSubType
	 *
	 * @param string $fileMimeSubType
	 * @return void
	 */
	public function setFileMimeSubType($fileMimeSubType) {
		$this->fileMimeSubType = $fileMimeSubType;
		return $this;
	}

	/**
	 * Returns the fileCtime
	 *
	 * @return DateTime $fileCtime
	 */
	public function getFileCtime() {
		return $this->fileCtime;
	}

	/**
	 * Sets the fileCtime
	 *
	 * @param DateTime $fileCtime
	 * @return void
	 */
	public function setFileCtime($fileCtime) {
		$this->fileCtime = $fileCtime;
		return $this;
	}

	/**
	 * Returns the fileMtime
	 *
	 * @return DateTime $fileMtime
	 */
	public function getFileMtime() {
		return $this->fileMtime;
	}

	/**
	 * Sets the fileMtime
	 *
	 * @param DateTime $fileMtime
	 * @return void
	 */
	public function setFileMtime($fileMtime) {
		$this->fileMtime = $fileMtime;
		return $this;
	}

	/**
	 * Returns the fileUsage
	 *
	 * @return string $fileUsage
	 */
	public function getFileUsage() {
		return $this->fileUsage;
	}

	/**
	 * Sets the fileUsage
	 *
	 * @param string $fileUsage
	 * @return void
	 */
	public function setFileUsage($fileUsage) {
		$this->fileUsage = $fileUsage;
		return $this;
	}

	/**
	 * Returns the ident
	 *
	 * @return string $ident
	 */
	public function getIdent() {
		return $this->ident;
	}

	/**
	 * Sets the ident
	 *
	 * @param string $ident
	 * @return void
	 */
	public function setIdent($ident) {
		$this->ident = $ident;
		return $this;
	}

	/**
	 * Returns the creator
	 *
	 * @return string $creator
	 */
	public function getCreator() {
		return $this->creator;
	}

	/**
	 * Sets the creator
	 *
	 * @param string $creator
	 * @return void
	 */
	public function setCreator($creator) {
		$this->creator = $creator;
		return $this;
	}

	/**
	 * Returns the publisher
	 *
	 * @return string $publisher
	 */
	public function getPublisher() {
		return $this->publisher;
	}

	/**
	 * Sets the publisher
	 *
	 * @param string $publisher
	 * @return void
	 */
	public function setPublisher($publisher) {
		$this->publisher = $publisher;
		return $this;
	}

	/**
	 * Returns the copyright
	 *
	 * @return string $copyright
	 */
	public function getCopyright() {
		return $this->copyright;
	}

	/**
	 * Sets the copyright
	 *
	 * @param string $copyright
	 * @return void
	 */
	public function setCopyright($copyright) {
		$this->copyright = $copyright;
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
	 * Returns the caption
	 *
	 * @return string $caption
	 */
	public function getCaption() {
		return $this->caption;
	}

	/**
	 * Sets the caption
	 *
	 * @param string $caption
	 * @return void
	 */
	public function setCaption($caption) {
		$this->caption = $caption;
		return $this;
	}

	/**
	 * Returns the altText
	 *
	 * @return string $altText
	 */
	public function getAltText() {
		return $this->altText;
	}

	/**
	 * Sets the altText
	 *
	 * @param string $altText
	 * @return void
	 */
	public function setAltText($altText) {
		$this->altText = $altText;
		return $this;
	}

	/**
	 * Returns the instructions
	 *
	 * @return string $instructions
	 */
	public function getInstructions() {
		return $this->instructions;
	}

	/**
	 * Sets the instructions
	 *
	 * @param string $instructions
	 * @return void
	 */
	public function setInstructions($instructions) {
		$this->instructions = $instructions;
		return $this;
	}

	/**
	 * Returns the abstract
	 *
	 * @return string $abstract
	 */
	public function getAbstract() {
		return $this->abstract;
	}

	/**
	 * Sets the abstract
	 *
	 * @param string $abstract
	 * @return void
	 */
	public function setAbstract($abstract) {
		$this->abstract = $abstract;
		return $this;
	}

	/**
	 * Returns the dateCr
	 *
	 * @return DateTime $dateCr
	 */
	public function getDateCr() {
		return $this->dateCr;
	}

	/**
	 * Sets the dateCr
	 *
	 * @param DateTime $dateCr
	 * @return void
	 */
	public function setDateCr($dateCr) {
		$this->dateCr = $dateCr;
		return $this;
	}

	/**
	 * Returns the dateMod
	 *
	 * @return DateTime $dateMod
	 */
	public function getDateMod() {
		return $this->dateMod;
	}

	/**
	 * Sets the dateMod
	 *
	 * @param DateTime $dateMod
	 * @return void
	 */
	public function setDateMod($dateMod) {
		$this->dateMod = $dateMod;
		return $this;
	}

	/**
	 * Returns the locDesc
	 *
	 * @return string $locDesc
	 */
	public function getLocDesc() {
		return $this->locDesc;
	}

	/**
	 * Sets the locDesc
	 *
	 * @param string $locDesc
	 * @return void
	 */
	public function setLocDesc($locDesc) {
		$this->locDesc = $locDesc;
		return $this;
	}

	/**
	 * Returns the locCity
	 *
	 * @return string $locCity
	 */
	public function getLocCity() {
		return $this->locCity;
	}

	/**
	 * Sets the locCity
	 *
	 * @param string $locCity
	 * @return void
	 */
	public function setLocCity($locCity) {
		$this->locCity = $locCity;
		return $this;
	}

	/**
	 * Returns the horizontalResolution
	 *
	 * @return integer $horizontalResolution
	 */
	public function getHorizontalResolution() {
		return $this->horizontalResolution;
	}

	/**
	 * Sets the horizontalResolution
	 *
	 * @param integer $horizontalResolution
	 * @return void
	 */
	public function setHorizontalResolution($horizontalResolution) {
		$this->horizontalResolution = $horizontalResolution;
		return $this;
	}

	/**
	 * Returns the verticalResolution
	 *
	 * @return integer $verticalResolution
	 */
	public function getVerticalResolution() {
		return $this->verticalResolution;
	}

	/**
	 * Sets the verticalResolution
	 *
	 * @param integer $verticalResolution
	 * @return void
	 */
	public function setVerticalResolution($verticalResolution) {
		$this->verticalResolution = $verticalResolution;
		return $this;
	}

	/**
	 * Returns the horizontalPixels
	 *
	 * @return integer $horizontalPixels
	 */
	public function getHorizontalPixels() {
		return $this->horizontalPixels;
	}

	/**
	 * Sets the horizontalPixels
	 *
	 * @param integer $horizontalPixels
	 * @return void
	 */
	public function setHorizontalPixels($horizontalPixels) {
		$this->horizontalPixels = $horizontalPixels;
		return $this;
	}

	/**
	 * Returns the verticalPixels
	 *
	 * @return integer $verticalPixels
	 */
	public function getVerticalPixels() {
		return $this->verticalPixels;
	}

	/**
	 * Sets the verticalPixels
	 *
	 * @param integer $verticalPixels
	 * @return void
	 */
	public function setVerticalPixels($verticalPixels) {
		$this->verticalPixels = $verticalPixels;
		return $this;
	}

	/**
	 * Returns the colorSpace
	 *
	 * @return integer $colorSpace
	 */
	public function getColorSpace() {
		return $this->colorSpace;
	}

	/**
	 * Sets the colorSpace
	 *
	 * @param integer $colorSpace
	 * @return void
	 */
	public function setColorSpace($colorSpace) {
		$this->colorSpace = $colorSpace;
		return $this;
	}

	/**
	 * Returns the width
	 *
	 * @return string $width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Sets the width
	 *
	 * @param string $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Returns the height
	 *
	 * @return string $height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param string $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Returns the heightUnit
	 *
	 * @return string $heightUnit
	 */
	public function getHeightUnit() {
		return $this->heightUnit;
	}

	/**
	 * Sets the heightUnit
	 *
	 * @param string $heightUnit
	 * @return void
	 */
	public function setHeightUnit($heightUnit) {
		$this->heightUnit = $heightUnit;
		return $this;
	}

	/**
	 * Returns the meta
	 *
	 * @return string $meta
	 */
	public function getMeta() {
		return $this->meta;
	}

	/**
	 * Sets the meta
	 *
	 * @param string $meta
	 * @return void
	 */
	public function setMeta($meta) {
		$this->meta = $meta;
		return $this;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_File_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_File_Domain_Model_Category $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_File_Domain_Model_Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_File_Domain_Model_Category $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

	/**
	 * Returns the category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_File_Domain_Model_Category> $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_File_Domain_Model_Category> $category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
		return $this;
	}

	/**
	 * Returns the mediaType
	 *
	 * @return Tx_File_Domain_Model_MediaType $mediaType
	 */
	public function getMediaType() {
		return $this->mediaType;
	}

	/**
	 * Sets the mediaType
	 *
	 * @param Tx_File_Domain_Model_MediaType $mediaType
	 * @return void
	 */
	public function setMediaType(Tx_File_Domain_Model_MediaType $mediaType) {
		$this->mediaType = $mediaType;
		return $this;
	}

	/**
	 * Returns the locCountry
	 *
	 * @return Tx_ExtbaseStaticinfotables_Domain_Model_Country $locCountry
	 */
	/*public function getLocCountry() {
		return $this->locCountry;
	}*/

	/**
	 * Sets the locCountry
	 *
	 * @param Tx_ExtbaseStaticinfotables_Domain_Model_Country $locCountry
	 * @return void
	 */
	/*public function setLocCountry(Tx_ExtbaseStaticinfotables_Domain_Model_Country $locCountry) {
		$this->locCountry = $locCountry;
		return $this;
	}*/

}
?>