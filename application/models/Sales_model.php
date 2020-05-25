<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

    public function getId($table) {
        $this->db->trans_start();

        $query = $this->db->query("SELECT AUTO_INCREMENT as id FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . $this->db->database . "' AND   TABLE_NAME = '$table' ");
        $this->db->trans_complete();
        return $query->last_row();
    }



    public function view($where = null, $select = "pu.*,m.name as m_name,m.id as m_id,p.name as p_name,p.id as p_id,py.name as py_name,py.id as py_id,l.name as l_name,l.id as l_id,ry.name as ry_name,ry.id as ry_id,d.name as d_name,d.id as d_id,v.name as v_name,v.id as v_id") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("pu.id", $where);
        }
        $this->db->select($select);
        $this->db->join("input_tag as m", "m.tag_id='MATERIAL' AND m.module=2 AND m.id=material_id");
        $this->db->join("input_tag as ry", "ry.tag_id='ROYALTY' AND ry.module=2 AND (ry.id=royalty_id OR royalty_id=0)");
        $this->db->join("input_tag as d", "d.tag_id='DRIVER' AND d.module=2 AND d.id=driver_id");
        $this->db->join("input_tag as l", "l.tag_id='LOADING' AND l.module=2 AND l.id=loading_id");
        $this->db->join("input_tag as p", "p.tag_id='PLACE' AND p.module=2 AND p.id=place_id");
        $this->db->join("input_tag as py", "py.tag_id='PARTY' AND py.module=2 AND py.id=party_id");
        $this->db->join("vehicle as v", "v.id=vehicle_id");
        $this->db->order_by("pu.id", "asc");
        $query = $this->db->get('sales as pu');
        $this->db->trans_complete();
        return $query->result();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert("sales", $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("name", $where);
        }
        if (!is_null($old)) {
            $this->db->where("name !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get('sales');
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete('sales');
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update('sales');
        $this->db->trans_complete();
        return $data;
    }

}
