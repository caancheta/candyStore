<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 public function index()
 {
	$this->login();
 }
 
 public function login(){
 	$this->load->view('login');
 }
 
 public function members(){
 		$this->load->view('members');

 }
 
 
 public function login_validation(){
 	$this->load->library('form_validation');
 	$this->form_validation->set_rules('login', 'Username', 'required|trim|xss_clean|callback_validate');
 	$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
 	
 	if ($this->form_validation->run()){
 		$data = array(
 				'login'=>$this->input->post('login'),
 				'is_logged_in'=> true);
 		$this->session->set_userdata($data);
 		if ($this->input->post('login') === 'admin'){
 			$this->load->view('admin_view');
 			
 		}else{
 			redirect('cart', 'refresh');
 		}
 	}else{
 		$this->load->view('login');
 	}
 }
 
 public function validate(){
 	if ($this->user_model->good_login()){
 		return true;
 	}else{
 		$this->form_validation->set_message('validate', 'Incorrect Username / Password');
 		return false;
 	}
 }
 
 
}
?>