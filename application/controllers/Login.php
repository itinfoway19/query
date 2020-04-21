<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/Controller.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of city
 *
 * @author Parth
 */
class login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
    }

    public function index() {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = $this->login_model->chakeLogin($this->input->post("username"), md5($this->input->post("password")));
            if (!empty($data)) {
                $this->load->model("menu_model");

                $this->session->set_userdata("role", $data[0]->role);
                $this->session->set_userdata("login", TRUE);
                $this->session->set_userdata("username", $data[0]->username);
                $this->session->set_userdata("uid", $data[0]->id);
                $this->load->helper('cookie');
                $menu = array(
                    'menus' => array(),
                    'parent_cats' => array()
                );
                $getmenu = $this->menu_model->getmenu($data[0]->role);
                foreach ($getmenu["menu"] as $row) {
                    $menu['menus'][$row['id']] = $row;
                    //creates entry into parent_cats array. parent_cats array contains a list of all menus with children
                    $menu['parent_cats'][$row['parent_id']][] = $row['id'];
                    $data_menu[]=$row['menu_link'];
                }
                $this->session->set_userdata("access_user", serialize($data_menu));
                $this->session->set_userdata("access_method",$getmenu["role"][0]['access_method']);
                $this->session->set_userdata("menu", serialize($menu));
                $this->input->set_cookie(["name"=>"menu",'expire' => '7200',"value"=>serialize($menu)]);
            } else {
                /*$data = $this->login_model->addPassword($this->input->post("username"), md5($this->input->post("password")));*/
            }
            //print_r($data);
            //exit;
        }
        $this->isLogin();
        $this->load->helper('form');
        //delete_cookie('ci_session');
        $this->load->view("login/index");
        //unset($_COOKIE["ci_session"]);
    }

    public function logout() {
        $this->session->set_userdata("login", FALSE);
        $this->session->sess_destroy();
        $this->isLogin();
    }

}
