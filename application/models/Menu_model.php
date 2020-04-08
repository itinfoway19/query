<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu_model
 *
 * @author Parth
 */
class Menu_model extends CI_Model {

    public function view() {
        $this->db->trans_start();
        $this->db->order_by("parent_id", "asc");
        $this->db->order_by("sort_order", "asc");
        $query = $this->db->get('menu');
        $this->db->trans_complete();
        return $query->result_array();
    }
    
    public function getmenu($id) {
        $this->db->trans_start();
        $this->db->where("id",$id);
        $query = $this->db->get('roles');
        $this->db->trans_complete();
        $data["role"]=$query->result_array();
       
        $this->db->trans_start();
        $this->db->where_in("id",!empty(json_decode($data["role"][0]["access_user"]))?json_decode($data["role"][0]["access_user"]):0);
        $this->db->order_by("parent_id", "asc");
        $this->db->order_by("sort_order", "asc");
        $query = $this->db->get('menu');
        $this->db->trans_complete();
        $data["menu"]=$query->result_array();
        return $data;
    }

    //put your code here
}
