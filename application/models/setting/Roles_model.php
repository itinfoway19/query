<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roles_Model extends CI_Model {
     public function view($where = null, $select = "*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("name", "asc");
        $this->db->where('id !=',1);
        $this->db->where('id !=',2);
        $this->db->where('id !=',3);
        $query = $this->db->get('roles');
        $this->db->trans_complete();
        return $query->result();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete('roles');
        $this->db->trans_complete();
        return $data;
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert("roles", $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update('roles');
        $this->db->trans_complete();
        return $data;
    }
}
