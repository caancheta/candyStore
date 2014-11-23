<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
 public function good_login(){
 	$this->db->where('login', $this->input->post('login'));
 	$this->db->where('password', $this->input->post('password'));
 	$query = $this->db->get('customer');
 	if($query->num_rows() == 1){
 		return true;
 	}else{
 		return false;
 	}
 }
 
 public function add_user()
 {
  $data=array(
    'first'=>$this->input->post('firstname'),
  	'last'=>$this->input->post('lastname'),
    'login'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>$this->input->post('password')
  );
  $this->db->insert('customer',$data);
 }
}
?>