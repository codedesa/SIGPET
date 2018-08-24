<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->library('session');
        $logLogin= $this->session->userdata();
        if (!$logLogin['status'] == 'Admin') redirect('/login');   
    }

	public function index()
	{
        $data = array (
			'content_administrator' => 'administrator/content/form-data/data-user/user',
            'judul' => 'Data Users',
            'bagian' => 'users',
            'sub_bagian' => 'list Data',
            'list_data' => $this->MyModel->getdata("*", "users", "status", "user")
        );
        
		$this->load->view('administrator/content/index', $data);
    }
    
    public function insert(){
        if (isset($_POST['btnusers'])){
            $this->form_validation->set_rules('username', 'Username', 'required|valid_email');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password' , 'Password', 'required');

            if ($this->form_validation->run() == true){
                $insert = array(
                    'username' => $this->input->post('username'),
                    'full_name' => $this->input->post('name'),
                    'status' => 'User',
                    'password' => $this->encryption->encrypt($this->input->post('password'))
                );
                $insert = $this->MyModel->insertdata("users", $insert);
                if ($insert){
                    echo "data sukses disimpan";
                }
                redirect('/administrator/user');
            }else{
                $data = array (
                    'content_administrator' => 'administrator/content/form-data/data-user/form_add_user',
                    'judul' => 'Tambah Data Users',
                    'bagian' => 'users',
                    'sub_bagian' => 'add New User'
                );
                $this->load->view('administrator/content/index', $data);
            }
        }else{
            $data = array (
                'content_administrator' => 'administrator/content/form-data/data-user/form_add_user',
                'judul' => 'Tambah Data Users',
                'bagian' => 'users',
                'sub_bagian' => 'add New User'
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function edit($id = null){

        if (isset($_POST['btn_edit_user'])){
            $iduser = $this->input->post('id');
            $editParam = array(
                'username' => $this->input->post('username'),
                'full_name' => $this->input->post('name')
            );
            $updateData = $this->MyModel->updateData("users", "id", $editParam, $iduser);
            if ($updateData){
                redirect('/administrator/user');
            }

        }else{
            $data = array(
                'content_administrator' => 'administrator/content/form-data/data-user/form_edit_user',
                'judul' => 'Edit Data Users',
                'bagian' => 'users',
                'sub_bagian' => 'Edit User',
                'list' => $this->MyModel->getdata("*", "users", "id", $id)
            );
            $this->load->view('administrator/content/index', $data);
        }
    }

    public function delete($id){
        $deleteData = $this->MyModel->deleteData("users", "id",  $id);
        if ($deleteData)
            echo 'sukses delete data';
        redirect('/administrator/user');
    }

    public function reset_password($id = null){
        if (isset($_POST['btn_reset_password'])){
            $this->form_validation->set_rules('password' , 'Password', 'required');
            if ($this->form_validation->run() == true){
                $idUser = $this->input->post('id');
                $passwordBaru = array (
                    'password' => md5($this->input->post('password'))
                );
                $resetPass = $this->MyModel->updateData("users", "id", $passwordBaru, $idUser);
                if ($resetPass)
                    $messages = 'password is success to changes';
                redirect('/administrator/user', $messages);
                    
            }else{
                echo "error";
            }
        }else{
            $data = array(
                'content_administrator' => 'administrator/content/form-data/data-user/form-reset-password',
                'judul' => 'Reset Password',
                'bagian' => 'users',
                'sub_bagian' => 'Reset Password',
                'list' => $this->MyModel->getdata("*", "users", "id",  $id)
            );
            $this->load->view('administrator/content/index', $data);
        }
    }
}
