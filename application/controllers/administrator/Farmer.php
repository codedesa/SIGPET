<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
        $this->load->library('session');
        $logLogin = $this->session->userdata();
        if (!$logLogin['status'] == 'Admin' || !$logLogin['status'] =='user') redirect('/login');    
    }

	public function index()
	{
         
        $user = $this->session->userdata();
        $data = array (
			'content_administrator' => 'administrator/content/form-data/data-farmer/farmer',
            'judul' => 'Data Farmers',
            'bagian' => 'farmer',
            'sub_bagian' => 'list Data',
            'list_data' => $user['status'] == "User" ? 
                            $this->MyModel->getdata("*", "farmer_view", 'group_id', $user['group_id']) : 
                            $this->MyModel->getdata("*", "farmer_view"),
            'list_group' => $this->MyModel->getdata("*", "farmer_groups")
		);
		$this->load->view('administrator/content/index', $data);
    }
    
    public function insert(){
        $user = $this->session->userdata();
        if (isset($_POST['btnFarmer'])){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('place_of_birth', 'Place_of_birth', 'required');
            $this->form_validation->set_rules('date_of_birth', 'Date_of_birth', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('group_id', 'Group_id', 'required');
            $this->form_validation->set_rules('status_group', 'Status_group', 'required');
             $this->form_validation->set_rules('status', 'Status', 'required');
            if ($this->form_validation->run() == true){
                $insert = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'place_of_birth' => $this->input->post('place_of_birth'),
                    'date_of_birth' => $this->input->post('date_of_birth'),
                    'gender' => $this->input->post('gender'),
                    'group_id' => $this->input->post('group_id'),
                    'status_group' => $this->input->post('status_group'),
                    'status' => $this->input->post('status')
                );
                $insert = $this->MyModel->insertdata("farmers", $insert);
                if ($insert){
                    echo "data sukses disimpan";
                }
                redirect('/administrator/farmer');
            }else{
                $data = array (
                    'content_administrator' => 'administrator/content/form-data/data-farmer/form_add_farmer',
                    'judul' => 'Tambah Data Farmer',
                    'bagian' => 'farmer',
                    'sub_bagian' => 'add New Data',
                    'list_data' => $user['status'] == "Admin" ? 
                                $this->MyModel->getdata("*", "farmer_groups") :
                                $this->MyModel->getdata("*", "farmer_groups", "id", $user['group_id']) 
                );
                $this->load->view('administrator/content/index', $data);
            }
        }else{
            $data = array (
                'content_administrator' => 'administrator/content/form-data/data-farmer/form_add_farmer',
                'judul' => 'Tambah Data Farmer',
                'bagian' => 'farmer',
                'sub_bagian' => 'add New Data',
                'list_data' => $user['status'] == "Admin" ? 
                                $this->MyModel->getdata("*", "farmer_groups") :
                                $this->MyModel->getdata("*", "farmer_groups", "id", $user['group_id']) 
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function edit($id = null){
        if (isset($_POST['btn_edit_farmer'])){
            $idFarmer = $this->input->post('id');
            $editParam = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'place_of_birth' => $this->input->post('place_of_birth'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'gender' => $this->input->post('gender'),
                'group_id' => $this->input->post('group_id'),
                'status_group' => $this->input->post('status_group'),
                'status' => $this->input->post('status')
            );
            $updateData = $this->MyModel->updateData("farmers", "id", $editParam, $idFarmer);
            if ($updateData){
                redirect('/administrator/farmer');
            }
        }else{
            $data = array(
                'content_administrator' => 'administrator/content/form-data/data-farmer/form_edit_farmer',
                'judul' => 'Edit Data Farmer',
                'bagian' => 'farmer',
                'sub_bagian' => 'Edit farmer',
                'list' => $this->MyModel->getdata("*", "farmers", "id", $id),
                'list_data' => $this->MyModel->getdata("*", "farmer_groups")
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function delete($id){
        $deleteData = $this->MyModel->deleteData("farmers", "id", $id);
        if ($deleteData)
            echo 'sukses delete data';
        redirect('/administrator/farmer');
    }

    public function detail($id){
        $data = array (
            'content_administrator' => 'administrator/content/form-data/data-farmer/detail_parmer',
            'judul' => 'Detail Farmer',
            'bagian' => 'farmer',
            'sub_bagian' => 'list Data',
            'list_data' => $this->MyModel->getdata("*", "farmer_view", 'id', $id),
            'list_land' => $this->MyModel->getdata("*", "land", "farmer_id", $id)

        );
        $this->load->view('administrator/content/index', $data);
    }


    public function detail_land($id){
        $data = array (
            'content_administrator' => 'administrator/content/form-data/data-farmer/detail_land_of_farmer',
            'judul' => 'Detail Lahan Pertanian',
            'bagian' => 'farmer',
            'sub_bagian' => 'list Data',
            'list_data' => $this->MyModel->getdata("*", "land", 'id', $id)

        );
        $this->load->view('administrator/content/index', $data);
    }
}
