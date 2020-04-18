<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Master extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("input_tag_model");
    }

    public function index($title, $module) {
        $data["tag_id"] = $title;
        $data["module"] = $module;
        $data["data"]=$this->input_tag_model->view($data);
        $this->display("index", $data);
    }

    public function model($title, $module) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->input_tag_model->add($capArray);
            if (!empty($data)) {
                return $this->output
                                ->set_content_type('application/json')
                                ->set_status_header(200) // Return status
                                ->set_output(json_encode(["data" => TRUE]));
            } else {
                return $this->output
                                ->set_content_type('application/json')
                                ->set_status_header(200) // Return status
                                ->set_output(json_encode(["data" => FALSE]));
            }
        } else {
            $data["title"] = $title;
            $data["module"] = $module;
            $this->load->view("master/model", $data);
        }
    }

    public function add($title, $module) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->input_tag_model->add($capArray);
            if (!empty($data)) {
                redirect("master/add/" . $title . "/" . $module);
            } else {
                redirect("master/add/" . $title . "/" . $module);
            }
        } else {
            $data["title"] = $title;
            $data["module"] = $module;
            $this->display("add", $data);
        }
    }

    public function json($title, $module, $name = null) {
        $where["tag_id"] = $title;
        $where["module"] = $module;
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["base"]["data"] = $this->input_tag_model->view($where, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["base"] = $this->input_tag_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["base"] == 0) {
            $data["base"] = FALSE;
        } else if (!isset($data["base"]["data"]) && $data["base"] >= 1) {
            $data["base"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["base"]));
    }

}
