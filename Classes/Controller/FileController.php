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
class Tx_File_Controller_FileController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * fileRepository
	 *
	 * @var Tx_File_Domain_Repository_FileRepository
	 */
	protected $fileRepository;
	
	/**
	 * categoryRepository
	 *
	 * @var Tx_File_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * injectFileRepository
	 *
	 * @param Tx_File_Domain_Repository_FileRepository $fileRepository
	 * @return void
	 */
	public function injectFileRepository(Tx_File_Domain_Repository_FileRepository $fileRepository) {
		$this->fileRepository = $fileRepository;
	}

	/**
	 * injectCategoryRepository
	 *
	 * @param Tx_File_Domain_Repository_CategoryRepository $categoryRepository
	 * @return void
	 */
	public function injectCategoryRepository(Tx_File_Domain_Repository_CategoryRepository $categoryRepository) {
		$this->categoryRepository = $categoryRepository;
	}

	/**
	 * action list
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		
		$categories = explode(',', $this->settings['category']);
		if($categories!=NULL){
			$files = $this->fileRepository->findByCategory($categories[0]);
			$this->view->assign('category', $this->categoryRepository->findByUid($categories[0]));
		} else {
			$files = $this->fileRepository->findAll();
		}
		$this->view->assign('files', $files);
	}

	/**
	 * action show
	 *
	 * @param  $file
	 * @return string The rendered show action
	 */
	public function showAction(Tx_File_Domain_Model_File $file) {
		$this->view->assign('file', $file);
	}

	/**
	 * action new
	 *
	 * @param  $newFile
	 * @dontvalidate $newFile
	 * @return string The rendered new action
	 */
	public function newAction(Tx_File_Domain_Model_File $newFile = NULL) {
		$this->view->assign('newFile', $newFile);
	}

	/**
	 * action create
	 *
	 * @param  $newFile
	 * @return string The rendered create action
	 */
	public function createAction(Tx_File_Domain_Model_File $newFile) {
		$this->fileRepository->add($newFile);
		$this->flashMessageContainer->add('Your new File was created.');
		
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param  $file
	 * @return string The rendered edit action
	 */
	public function editAction(Tx_File_Domain_Model_File $file) {
		$this->view->assign('file', $file);
	}

	/**
	 * action update
	 *
	 * @param  $file
	 * @return string The rendered update action
	 */
	public function updateAction(Tx_File_Domain_Model_File $file) {
		$this->fileRepository->update($file);
		$this->flashMessageContainer->add('Your File was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param  $file
	 * @return string The rendered delete action
	 */
	public function deleteAction(Tx_File_Domain_Model_File $file) {
		$this->fileRepository->remove($file);
		$this->flashMessageContainer->add('Your File was removed.');
		$this->redirect('list');
	}

}
?>