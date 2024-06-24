<?php

class Login_model extends CI_Model
{
    function ValidateUser($data)
    {
        $sql = "SELECT * FROM tbl_user WHERE Name = ? AND Password = ?";
        $query = $this->db->query($sql, array($data['name'], $data['password']));
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->Name;
        } else {
            return false;
        }
    }

    function getUser()
    {
        $query = $this->db->get('tbl_employee_data');
        return $query->result_array();
    }
}