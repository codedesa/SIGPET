<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct(){
		parent :: __construct();
        $this->load->library('session');
    }

    public function index(){
        $log_user = array('id','username','full_name','status');
        $this->session->unset_userdata($log_user);
        $this->session->sess_destroy();
        redirect('/login');
    }
}