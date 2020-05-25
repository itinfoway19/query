<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/controller.php';

class Users extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("setting/users_model");
          $this->load->model("setting/roles_model");
    }

    public function index() {
        //$this->display("index");
        $data["users"] = $this->users_model->view();
        $this->display('index', $data);
        
    }

    public function add($name = null) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $a=$this->input->post();
            $a["password"]=md5($this->input->post("password"));
            $data = $this->users_model->add($a);
            if (!empty($data)) {
                redirect("setting/users/add");
            } else {
                redirect("setting/users/add");
            }
        }
        if (is_null($name)) {
            $name = "";
        } else {
            $name = base64_decode(urldecode($name));
        }
        $this->display("add", ["username" => $name]);
    }
    

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $a=$this->input->post();
            $a["password"]=md5($this->input->post("password"));
            $data = $this->users_model->edit($a, $id);
            if (!empty($data)) {
                redirect("setting/users/add");
            } else {
                redirect("setting/users/add");
            }
        } else {
            $data = $this->users_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->users_model->delete($id);
        //return $this->output->set_output($data);
         redirect(base_url() . "setting/users/index");  
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["users"]["data"] = $this->users_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("username");
            $data["users"] = $this->users_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["users"] == 0) {
            $data["users"] = FALSE;
        } else if (!isset($data["users"]["data"]) && $data["users"] >= 1) {
            $data["users"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($data["users"]));
    }
    

}
