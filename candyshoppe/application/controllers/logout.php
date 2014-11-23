<?php

class Logout extends CI_Controller {

    function index()
    {
    	$this->cart->destroy();
    	session_destroy();
    	redirect('home', 'refresh');
    }
}