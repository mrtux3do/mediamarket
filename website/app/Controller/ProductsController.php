<?php

App::uses('Controller', 'Controller');

class ProductsController extends Controller {
	public $uses = array('Product');

	//Home page
	public function index(){
		$data = $this->Product->find('all');
		$this->set('data', $data);
	}

	//Product detail
	public function detail($id){
		$data = $this->Product->find('first', array(
			'conditions' => array(
				'Product.id' => $id,
			)
		));
		$relate_product = $this->Product->find('all', array(
			'conditions' => array(
				'Product.category_id' => $data['Product']['category_id']
			)
		));
		$this->set(array('data' => $data, 'relate' => $relate_product));
	}

	public function listProduct(){
	}

}
