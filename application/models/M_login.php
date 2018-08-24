<?php

class M_login extends Ci_Model{

    function validateData($username){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query= $this->db->get();
        return $query->row();
    }

}