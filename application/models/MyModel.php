<?php

class MyModel extends Ci_Model{

    function getdata($fieldData, $table, $idParam = null, $id = null){
        $this->db->select($fieldData);
        $this->db->from($table);
        if ($id !== null){
            $this->db->where($idParam, $id);
        }
        return $this->db->get()->result();
    }

    function getDetailFarmer($fieldData, $table, $id){
        $this->db->select('*');
        $this->db->from('farmerView');
        $this->db->where('idGroup', $id);
        $this->db->where('idFarmer !=', '');
        return $this->db->get()->result();
    }

    function insertdata($table, $insert){
        return $this->db->insert($table, $insert);
    }

    function updateData($table, $fieldParam,  $editParam, $id){
        $this->db->where($fieldParam, $id);
        return $this->db->update($table, $editParam);
    }

    function deleteData($table, $fieldParam, $id){
        $this->db->where($fieldParam, $id);
        return $this->db->delete($table);
    }

    function getProfilUser($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    function savePassword($id, $param){
        $this->db->where('id', $id);
        return $this->db->update('users', $param);
    }
}