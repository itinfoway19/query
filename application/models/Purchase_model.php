<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_model extends CI_Model {

    public function getId($table) {
        $this->db->trans_start();

        $query = $this->db->query("SELECT AUTO_INCREMENT as id FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".$this->db->database."' AND   TABLE_NAME = '$table' ");
        $this->db->trans_complete();
        return $query->last_row();
    }

    public function view($where = null, $select = "pu.*,m.name as m_name,m.id as m_id,q.name as q_name,q.id as q_id,r.name as r_name,r.id as m_id,d.name as d_name,d.id as m_id,v.name as v_name,v.id as v_id") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->join("input_tag as m","m.tag_id='MATERIAL' AND m.module=1 AND m.id=material_id");
        $this->db->join("input_tag as q","q.tag_id='QUARRYNAME' AND q.module=1 AND q.id=quarryname_id");
        $this->db->join("input_tag as r","r.tag_id='RECEIVER' AND r.module=1 AND r.id=receiver_id");
        $this->db->join("input_tag as d","d.tag_id='DRIVER' AND d.module=1 AND d.id=driver_id");
        $this->db->join("vehicle as v","v.id=vehicle_id");
        $this->db->order_by("pu.id", "asc");
        $query = $this->db->get('purchase as pu');
        $this->db->trans_complete();
        return $query->result();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert("purchase", $array);
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
        $query = $this->db->get('purchase');
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete('purchase');
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update('purchase');
        $this->db->trans_complete();
        return $data;
    }

}
