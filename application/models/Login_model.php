<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_model
 *
 * @author Parth
 */
class Login_model extends CI_Model {

    //put your code here
    public function chakeLogin($username = null, $password = null) {
        if (!is_null($username) && !is_null($password)) {
            $this->db->trans_start();
            $this->db->where("username", $username);
            $this->db->where('password', $password);
            $query = $this->db->get('users');
            $this->db->trans_complete();
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function addPassword($username = null, $password = null) {
        if (!is_null($username) && !is_null($password)) {
            $this->db->trans_start();
            $this->db->insert("users", ["username"=>$username,"password"=>$password]);
            $data = $this->db->insert_id();
            $this->db->trans_complete();
            return $data;
        } else {
            return FALSE;
        }
    }

}
