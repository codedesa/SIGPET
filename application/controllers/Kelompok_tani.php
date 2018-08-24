<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_tani extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->library('session');
        $this->load->Model('MyModel');
        $logLogin= $this->session->userdata();
    }

    public function index(){
        $data['content_user'] = 'page_detail_kelompok_tani';
        $data['list_kelompok'] = $this->MyModel->getdata('*', 'farmer_groups');
        $data['list_ketua'] = $this->MyModel->getdata('name, group_name', 'farmer_view', 'group_name', $data['name']);
        $this->load->view('beranda', $data);
    }

    
    public function detail($id =null){
        $data['content_user'] = 'page_detail_kelompok_tani';
        $petani= $this->MyModel->getdata('*', 'farmer_groups', 'id', $id);
        $listdatapetani = '';
        foreach ($petani as $value) {
            $listdatapetani = $this->MyModel->getdata('*', 'farmers', 'group_id', $value->id);
        }
        $data['detail_kelompok_tani'] = $petani;
        $data['list_petani'] = $listdatapetani;
        $this->load->view('beranda', $data);
      }

      public function detailpetani($id =null){
        $data['content_user'] = 'page_detail_petani';
        $petani= $this->MyModel->getdata('*', 'farmer_view', 'id', $id);
        $listdatasawah = '';
        foreach ($petani as $value) {
            $listdatasawah = $this->MyModel->getdata('*', 'land', $value->id);
        }
        $data['list_petani'] = $petani;
        $data['list_sawah'] = $listdatasawah;
        $this->load->view('beranda', $data);
      }
}