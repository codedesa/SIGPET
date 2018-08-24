<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
        $this->load->library('session');
        $logLogin= $this->session->userdata();
        if (!$logLogin['status'] == 'Admin') redirect('/login');   
    }

	public function index()
	{
        $data = array (
			'content_administrator' => 'administrator/content/form-data/data-group/group',
            'judul' => 'Data groups',
            'bagian' => 'group',
            'sub_bagian' => 'list Data',
            'list_data' => $this->MyModel->getdata("*", "farmer_groups")
		);
		$this->load->view('administrator/content/index', $data);
    }
    
    public function insert(){
        if (isset($_POST['btngroups'])){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('address' , 'Address', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('latitude' , 'Latitude', 'required');
            $this->form_validation->set_rules('longitude', 'Longitude', 'required');
            if ($this->form_validation->run() == true){
                $insert = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'email' =>$this->input->post('email'),
                    'latitude' =>$this->input->post('latitude'),
                    'longitude' =>$this->input->post('longitude')
                );
                $insert = $this->MyModel->insertdata("farmer_groups", $insert);
                if ($insert){
                    echo "data sukses disimpan";
                }
                redirect('/administrator/group');
            }else{
                $data = array (
                    'content_administrator' => 'administrator/content/form-data/data-group/form_add_group',
                    'judul' => 'Tambah Data groups',
                    'bagian' => 'group',
                    'sub_bagian' => 'add New group'
                );
                $this->load->view('administrator/content/index', $data);
            }
        }else{
            $data = array (
                'content_administrator' => 'administrator/content/form-data/data-group/form_add_group',
                'judul' => 'Tambah Data groups',
                'bagian' => 'group',
                'sub_bagian' => 'add New group'
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function edit($id = null){

        if (isset($_POST['btn_edit_group'])){
            $idgroup = $this->input->post('id');
            $editParam = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'email' =>$this->input->post('email'),
                'latitude' =>$this->input->post('latitude'),
                'longitude' =>$this->input->post('longitude')
            );
            $updateData = $this->MyModel->updateData("farmer_groups", "id", $editParam, $idgroup);
            if ($updateData){
                redirect('/administrator/group');
            }
        }else{
            $data = array(
                'content_administrator' => 'administrator/content/form-data/data-group/form_edit_group',
                'judul' => 'Edit Data groups',
                'bagian' => 'group',
                'sub_bagian' => 'Edit group',
                'list' => $this->MyModel->getdata("*", "farmer_groups", "id",  $id)
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function delete($id){
        $deleteData = $this->MyModel->deleteData("farmer_groups", "id", $id);
        if ($deleteData)
            echo 'sukses delete data';
        redirect('/administrator/group');
    }
}
