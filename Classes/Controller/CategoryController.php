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
class Tx_File_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * categoryRepository
	 *
	 * @var Tx_File_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

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
		if(count($categories)==1){
			$this->forward('list', 'File', 'File', $this->request->getArguments());
		} else {
			$categories = $this->categoryRepository->findAll();
			$this->view->assign('categories', $categories);
		}
	}

	/**
	 * action show
	 *
	 * @param  $category
	 * @return string The rendered show action
	 */
	public function showAction(Tx_File_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}

	/**
	 * action new
	 *
	 * @param  $newCategory
	 * @dontvalidate $newCategory
	 * @return string The rendered new action
	 */
	public function newAction(Tx_File_Domain_Model_Category $newCategory = NULL) {
		$this->view->assign('newCategory', $newCategory);
	}

	/**
	 * action create
	 *
	 * @param  $newCategory
	 * @return string The rendered create action
	 */
	public function createAction(Tx_File_Domain_Model_Category $newCategory) {
		$this->categoryRepository->add($newCategory);
		$this->flashMessageContainer->add('Your new Category was created.');
		
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param  $category
	 * @return string The rendered edit action
	 */
	public function editAction(Tx_File_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}

	/**
	 * action update
	 *
	 * @param  $category
	 * @return string The rendered update action
	 */
	public function updateAction(Tx_File_Domain_Model_Category $category) {
		$this->categoryRepository->update($category);
		$this->flashMessageContainer->add('Your Category was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param  $category
	 * @return string The rendered delete action
	 */
	public function deleteAction(Tx_File_Domain_Model_Category $category) {
		$this->categoryRepository->remove($category);
		$this->flashMessageContainer->add('Your Category was removed.');
		$this->redirect('list');
	}

}
?>