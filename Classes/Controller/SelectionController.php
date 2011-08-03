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
class Tx_File_Controller_SelectionController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * selectionRepository
	 *
	 * @var Tx_File_Domain_Repository_SelectionRepository
	 */
	protected $selectionRepository;

	/**
	 * injectSelectionRepository
	 *
	 * @param Tx_File_Domain_Repository_SelectionRepository $selectionRepository
	 * @return void
	 */
	public function injectSelectionRepository(Tx_File_Domain_Repository_SelectionRepository $selectionRepository) {
		$this->selectionRepository = $selectionRepository;
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
		$selections = $this->selectionRepository->findAll();
		$this->view->assign('selections', $selections);
	}

	/**
	 * action show
	 *
	 * @param  $selection
	 * @return string The rendered show action
	 */
	public function showAction(Tx_File_Domain_Model_Selection $selection) {
		$this->view->assign('selection', $selection);
	}

	/**
	 * action new
	 *
	 * @param  $newSelection
	 * @dontvalidate $newSelection
	 * @return string The rendered new action
	 */
	public function newAction(Tx_File_Domain_Model_Selection $newSelection = NULL) {
		$this->view->assign('newSelection', $newSelection);
	}

	/**
	 * action create
	 *
	 * @param  $newSelection
	 * @return string The rendered create action
	 */
	public function createAction(Tx_File_Domain_Model_Selection $newSelection) {
		$this->selectionRepository->add($newSelection);
		$this->flashMessageContainer->add('Your new Selection was created.');
		
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param  $selection
	 * @return string The rendered edit action
	 */
	public function editAction(Tx_File_Domain_Model_Selection $selection) {
		$this->view->assign('selection', $selection);
	}

	/**
	 * action update
	 *
	 * @param  $selection
	 * @return string The rendered update action
	 */
	public function updateAction(Tx_File_Domain_Model_Selection $selection) {
		$this->selectionRepository->update($selection);
		$this->flashMessageContainer->add('Your Selection was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param  $selection
	 * @return string The rendered delete action
	 */
	public function deleteAction(Tx_File_Domain_Model_Selection $selection) {
		$this->selectionRepository->remove($selection);
		$this->flashMessageContainer->add('Your Selection was removed.');
		$this->redirect('list');
	}

}
?>