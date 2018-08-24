<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function requestData(){
		return  array (
			'title' => 'Login Sistem',
			'content' => 'Silahkan Masukkan Username dan Password Anda.!',
			'alert' => '',
			'message' => ''
		);
	}

	public function __construct(){
		parent :: __construct();
		$this->load->model('M_login');
		$this->load->library('encryption');
		$this->load->library('session');
	}

	public function index()
	{ 
		$this->load->view('login', $this->requestData());
	}
	
	public function verification(){
		$data = $this->requestData();
		$username = $this->input->post('email');
		$cek = $this->M_login->validateData($username);
		if ($cek){
			if ($this->encryption->decrypt($cek->password) == $this->input->post('password')){
				$log_user = array(
					'id' => $cek->id,
					'username' => $cek->username,
					'full_name' => $cek->full_name,
					'status' => $cek->status,
					'group_id' => $cek->group_id
				);
				$this->session->set_userdata($log_user);
				$cek->status == 'Admin' || $cek->status == "User" ? redirect('/administrator/home') : redirect('/beranda');
			}else{
				$data['message'] = 'Password  yang anda masukkan salah..!';
				$data['alert'] = 'warning';
				$this->load->view('login', $data);
			}
		}else{
			$data['message'] = 'Username  yang anda masukkan salah..!';
			$data['alert'] = 'warning';
			$this->load->view('login', $data);
		}
	}
}