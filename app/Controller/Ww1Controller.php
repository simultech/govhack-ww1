<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class Ww1Controller extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('demoinfo','Poster');
	public $components = array('Trove');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function index() {
		$results = $this->Trove->search('worldwar1');
		$this->set('results',$results);
		$this->set('fulldata',$this->generatedata());
	}
	
	public function search($term) {
		$results = $this->Trove->search('worldwar1');
		$this->set('results',$results);
	}
	
	public function generatedata() {
		$data = array();
		$posters = $this->Poster->find('all',array('order'=>'d'));
		$postercount = 0;
		$demoinfo = $this->demoinfo->find('all',array('order'=>'caption'));
		foreach($demoinfo as $dm) {
			if($dm['demoinfo']['facttype'] == 'event') {
				$data[] = array(
					'type'=>'event',
					'text'=>$dm['demoinfo']['caption'],
					'date'=>$dm['demoinfo']['date']
				);
			} else {
				if($postercount < sizeOf($posters)) {
					$poster = $posters[$postercount];
				} else {
					$poster = $posters[0];
				}
				$data[] = array(
					'type'=>'split',
					'date'=>$dm['demoinfo']['date'],
					'war'=>array(
						'type'=>'small',
						'template'=>'el-poster',
						'data'=>$poster['Poster'],
					),
					'home'=>array(
						'type'=>'small',
						'template'=>'el-demographic-'.$dm['demoinfo']['facttype'],
						'data'=>$dm['demoinfo'],
					)
				);
				$postercount+=1;
			}
		}
		function cmp($a, $b) {
			return strcmp($a['date'], $b['date']);
		}
		usort($data, "cmp");
		$data = json_encode($data);
		$data_old = "[
		{
			'type':'event',
			'text':'1914 - Start of war'
		},
		{
			'type':'large',
			'template':'el-soldier',
			'data':{}
		},
		{
			'type':'event',
			'text':'1915 - Middle of war'
		},
		{
			'type':'split',
			'war':{
				'type':'small',
				'template':'el-poster',
				'data':{'title':'blbk','description':'fda','creator':'jojo','d':'1914'}
			},
			'home':{
				'type':'small',
				'template':'el-demographic',
				'data':{'title':'blbk','description':'fda','creator':'jojo','d':'1914'}
			}
		},

		{
			'type':'event',
			'text':'1914 - End of war'
		},
	]";
		return $data;
	}
	
	public function visual() {
		
	}
	
	public function lin() {
		
	}
	
	public function lin1() {
		
	}
	
	public function lin2() {
		
	}
	
	public function lin3() {
		
	}
	
	public function lin4() {
		
	}
	
	public function lin5() {
		
	}
		
	public function visual1() {
		
	}
}
