<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Users_Model extends CI_Model {

    public function view($where = null,$select="*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->where("id !=","1");
        $this->db->where("id !=","2");
        $this->db->where("id !=","3");
        $this->db->select($select);
        $this->db->order_by("username", "asc");
        $query = $this->db->get('users');
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