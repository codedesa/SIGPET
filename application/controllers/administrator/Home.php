<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
        $logLogin= $this->session->userdata();
		if (!$logLogin['status'] == 'Admin' || !$logLogin['status'] =='user') redirect('/login');   
	}
	public function index()
	{
		$data = array (
			'content_administrator' => 'administrator/content/form-data/beranda/home',
			'judul' => '',
			'bagian' => 'administrator',
			'sub_bagian'  => 'home'
		);
		$this->load->view('administrator/content/index', $data);
	}


}
