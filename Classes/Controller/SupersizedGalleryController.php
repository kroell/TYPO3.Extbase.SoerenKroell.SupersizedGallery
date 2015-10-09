<?php
namespace TYPO3\SkSupersizedGallery\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
 * @package sk_supersized_gallery
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class SupersizedGalleryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * supersizedGalleryRepository
	 *
	 * @var \TYPO3\SkSupersizedGallery\Domain\Repository\SupersizedGalleryRepository
	 * @inject
	 */
	protected $supersizedGalleryRepository;

	/**
	 * action gallery
	 *
	 * @return void
	 */
	public function galleryAction() {
		$supersizedGalleries = $this->supersizedGalleryRepository->findAll();
		
		foreach($supersizedGalleries as $gallery){
			foreach($gallery->getItems() as $i => $item){
				
				$return_value.= '{image : \'/uploads/tx_sksupersizedgallery/'.$item->getImage().'\', title : \' '.$item->getTitle().' \', thumb : \'\', url : \'\'},';
				
				
			}
		}
		
		
		
		#{image : 'fileadmin/templates/img/slider-images/{item.image}', title : '<div class="slide-content">{item.title}</div>', thumb : '', url : ''},
		
		$this->view->assign('allGalleries', $supersizedGalleries);
		$this->view->assign('images', $return_value);
	}
	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$supersizedGalleries = $this->supersizedGalleryRepository->findAll();
		$this->view->assign('supersizedGalleries', $supersizedGalleries);
	}

}
?>