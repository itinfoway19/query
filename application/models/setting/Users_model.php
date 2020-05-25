<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Users_Model extends CI_Model {

    public function getId($table) {
        $this->db->trans_start();

        $query = $this->db->query("SELECT AUTO_INCREMENT as id FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".$this->db->database."' AND   TABLE_NAME = '$table' ");
        $this->db->trans_complete();
        return $query->last_row();
    }

    public function view($where = null,$select = "ro.*,r.name as r_name,r.id as r_id") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);      
        $this->db->join("roles as r", "r.id=ro.id");
         $this->db->order_by("ro.id", "asc");
        $query = $this->db->get('users as ro');   
        $this->db->trans_complete();
        return $query->result();
    }



    public function findname($where = null,$old=null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("username", $where);
        }
        if (!is_null($old)) {
            $this->db->where("username !=", $old);
        }
        $this->db->select("username");
        $this->db->order_by("username", "asc");
        $query = $this->db->get('users');
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert("users", $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete('users');
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update('users');
        $this->db->trans_complete();
        return $data;
    }

}
