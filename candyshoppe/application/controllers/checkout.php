<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Checkout extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('order_model');
 }
 public function index()
 {
	$this->checkout();
 }
 
 public function checkout(){
 	$this->load->view('checkout');
 }
 
 public function credit_validation(){
 	$this->load->library('form_validation');
 	$this->form_validation->set_rules('number', 'number', 'required|trim|xss_clean|exact_length[16]|alpha_numeric');
 	$this->form_validation->set_rules('month', 'month', 'required|trim|xss_clean|integer|is_natural_no_zero|less_than[13]');
 	$this->form_validation->set_rules('year', 'year', 'required|trim|xss_clean|integer|is_natural_no_zero|less_than[2020]|greater_than[2013]');
 	
 	if ($this->form_validation->run()){
 		$data = array(
 				'customer_id' => 26,
 				'total' => $this->cart->total(),
 				'order_date' => date('Y-m-d'),
 				'order_time' => time(),
 				'creditcard_number' => $this->input->post('number'),
 				'creditcard_month' => $this->input->post('month'),
 				'creditcard_year' => $this->input->post('year'));

 		$this->order_model->add_order($data);
 	}
 }

}
?>