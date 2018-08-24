<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->library('session');
        $logLogin= $this->session->userdata();
        if (!$logLogin['status'] == 'Admin' || !$logLogin['status'] =='user') redirect('/login');   
    }

    function requestData(){
		return  array (
			'content_administrator' => 'administrator/content/form-data/profil/manage-password',
            'judul' => 'Profil User',
            'bagian' => 'profil',
            'sub_bagian' => 'list Profil',
            'alert' => '',
            'message' => ''
		);
	}

    public function index(){
        $loguser = $this->session->userdata();
        $profil = array (
            'username' => $loguser['username'],
            'full_name' => $loguser['full_name'],
            'status' => $loguser['status'] == "User" ? "Ketua Kelompok Tani" : "Administrator"
        );
        $data = $this->requestData();
        $data['content_administrator']= 'administrator/content/form-data/profil/profil';
        $data['list_data'] = $profil;
        
        $this->load->view('administrator/content/index', $data);
        
    }

    public function manage_password(){
        $data = $this->requestData();   
        $this->load->view('administrator/content/index', $data);
    }

    public function verification(){
        $data = $this->requestData();
        $data['alert'] = 'warning';

        $result = $this->MyModel->getProfilUser($this->session->userdata('id'));
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p3 = $this->input->post('p3');

        if ($this->encryption->decrypt($result->password) == $p1){
           if ($p2 == $p3){
               $data['alert'] = 'success';
                $array['password'] = $this->encryption->encrypt($p2);
                $result = $this->MyModel->savePassword($this->session->userdata('id'),$array);
                if ($result){
                    $data['message'] = 'Password berhasil dirubah';
                }else{
                    $data['message'] = 'password gagal dirubah';
                }
                $this->load->view('administrator/content/index', $data);
           }else{
                $data['message'] = 'Perpaduan password tidak valid';
                $this->load->view('administrator/content/index', $data);
           }
        }else{
            $data['message'] = 'password tidak valid';
            $this->load->view('administrator/content/index', $data);
        }
    }
}