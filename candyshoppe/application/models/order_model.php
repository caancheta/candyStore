<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
 public function add_order($order)
 {
 	$data = array(
 			'customer_id' => $order['customer_id'],
 			'total' => $order['total'],
 			'order_date' => $order['order_date'],
 			'order_time' => $order['order_time'],
 			'creditcard_number' => $order['creditcard_number'],
 			'creditcard_month' => $order['creditcard_month'],
 			'creditcard_year' => $order['creditcard_year']);
	$this->db->insert('order', $data);
 }
}
?>