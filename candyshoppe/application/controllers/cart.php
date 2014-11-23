<?php

class Cart extends CI_Controller {
   
     
    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();	    	
    }

    function index() {
    		$this->load->model('product_model');
    		$products = $this->product_model->getAll();
    		$data['products']=$products;
    		$this->load->view('cart/list.php',$data);
    }
    
	function read($id) {
		$this->load->model('product_model');
		$product = $this->product_model->get($id);
		$data['product']=$product;
		$this->load->view('cart/read.php',$data);
	}
	
	function addToCart($id, $name, $price){
		$item = array(
				'id'      => $id,
				'qty'     => 1,
				'price'   => $price,
				'name'    => $name
		);
		$this->cart->insert($item);
		$this->index();
	}
	
	function displayCart(){
		$this->load->view('cart/cartdisplay.php');
	}
	
	function editForm($id) {
		$this->load->model('product_model');
		$product = $this->product_model->get($id);
		$data['product']=$product;
		$this->load->view('cart/editForm.php',$data);
	}
	 
}

