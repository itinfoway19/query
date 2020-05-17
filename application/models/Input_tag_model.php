<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Input_tag_model extends CI_Model {

    public function view($where = null, $select = "*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get('input_tag');
        $this->db->trans_complete();
        return $query->result();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert("input_tag", $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null,$model_where = null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("name", $where);
        }
        if (!is_null($model_where)) {
            $this->db->where($model_where);
        }
        if (!is_null($old)) {
            $this->db->where("name !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get('input_tag');
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete('input_tag');
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update('input_tag');
        $this->db->trans_complete();
        return $data;
    }

}
