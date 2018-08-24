<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->library('session');
        $this->load->Model('MyModel');
        $logLogin= $this->session->userdata();
    }

    public function index(){
      $data['content_user'] = 'page_home';
      $data['list_kelompok'] = $this->MyModel->getdata('*', 'farmer_groups');
      $data['list_ketua'] = $this->MyModel->getdata('name, group_name', 'farmer_view', 'status_group', 'Ketua');
      $this->load->view('beranda', $data);
    }
}