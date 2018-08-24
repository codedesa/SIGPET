<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
        $this->load->library('session');
        $logLogin= $this->session->userdata();
        if (!$logLogin['status'] == 'Admin' || !$logLogin['status'] =='user') redirect('/login');   
    }

	public function index()
	{
        $data = array (
			'content_administrator' => 'administrator/content/form-data/data-lahan/list_data',
            'judul' => 'Data Lahan Pertanian',
            'bagian' => 'lahan',
            'sub_bagian' => 'list Data',
            'list_data' => $this->MyModel->getdata("*", "land_view")
		);
		$this->load->view('administrator/content/index', $data);
    }
    
    public function insert(){
        if (isset($_POST['btnlahan'])){
            $this->form_validation->set_rules('farmer_id', 'Farmer_id', 'required');
            if ($this->form_validation->run() == true){
                $insert = array(
                    'land_type' => $this->input->post('land_type'),
                    'large' => $this->input->post('large'),
                    'border_barat' => $this->input->post('border_barat'),
                    'border_timur' => $this->input->post('border_timur'),
                    'border_utara' => $this->input->post('border_utara'),
                    'border_selatan' => $this->input->post('border_selatan'),
                    'amount_year' => $this->input->post('amount_year'),
                    'latitude' => $this->input->post('latitude'),
                    'longitude' => $this->input->post('longitude'),
                    'farmer_id' => $this->input->post('farmer_id'),
                    'address' => $this->input->post('address')
                );
                $insert = $this->MyModel->insertdata("land", $insert);
                if ($insert){
                    echo "data sukses disimpan";
                }
                redirect('/administrator/lahan');
            }else{
                $data = array (
                    'content_administrator' => 'administrator/content/form-data/data-lahan/form_tambah',
                    'judul' => 'Tambah Data Lahan',
                    'bagian' => 'lahan',
                    'sub_bagian' => 'add New Data',
                    'list_data' => $this->MyModel->getdata("*", "farmers")
                );
                $this->load->view('administrator/content/index', $data);
            }
        }else{
            $data = array (
                'content_administrator' => 'administrator/content/form-data/data-lahan/form_tambah',
                'judul' => 'Tambah Data Lahan',
                'bagian' => 'lahan',
                'sub_bagian' => 'add New Data',
                'list_data' => $this->MyModel->getdata("*", "farmers")
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function edit($id = null){
        if (isset($_POST['btneditlahan'])){
            $idLand = $this->input->post('id');
            $editParam = array(
                'land_type' => $this->input->post('land_type'),
                'large' => $this->input->post('large'),
                'border_barat' => $this->input->post('border_barat'),
                'border_timur' => $this->input->post('border_timur'),
                'border_utara' => $this->input->post('border_utara'),
                'border_selatan' => $this->input->post('border_selatan'),
                'amount_year' => $this->input->post('amount_year'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'farmer_id' => $this->input->post('farmer_id'),
                'address' => $this->input->post('address')
            );
            $updateData = $this->MyModel->updateData("land", "id", $editParam, $idLand);
            if ($updateData){
                redirect('/administrator/lahan');
            }
        }else{
            $data = array(
                'content_administrator' => 'administrator/content/form-data/data-lahan/form_edit',
                'judul' => 'Edit Data Lahan',
                'bagian' => 'lahan',
                'sub_bagian' => 'Edit Lahan Pertanian',
                'list' => $this->MyModel->getdata("*", "land", "id", $id),
                'list_data' => $this->MyModel->getdata("*", "farmers")
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function delete($id){
        $deleteData = $this->MyModel->deleteData("land", "id", $id);
        if ($deleteData)
            echo 'sukses delete data';
        redirect('/administrator/lahan');
    }
}
