<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 public function index()
 {
  if(($this->session->userdata('user_name')!=""))
  {
   $this->welcome();
  }
  else{
   $data['title']= 'Home';

   $this->load->view("registration_view.php", $data);

  }
 }
 public function welcome()
 {
  $data['title']= 'Welcome';

  $this->load->view('welcome_view.php', $data);

 }

 public function thank()
 {
  $data['title']= 'Thank';

  $this->load->view('thank_view.php', $data);

 }
 
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
  $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->user_model->add_user();
   $this->thank();
  }
 }

}
?>