<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Employee extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("employee_model");
    }

    public function index() {
        $data["data"] = $this->employee_model->view();
        $this->display('index', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->employee_model->add($capArray);
            if (!empty($data)) {
                redirect("employee/add");
            } else {
                redirect("employee/add");
            }
        }
        $this->display('add');
    }

    public function edit($id = null) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->employee_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("employee/add");
            } else {
                redirect("employee/add");
            }
        } else {
            $data = $this->employee_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function model() {
        $this->load->helper('form');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->employee_model->add($capArray);
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
            $this->load->view("employee/model");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["employee"]["data"] = $this->employee_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["employee"] = $this->employee_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["employee"] == 0) {
            $data["employee"] = FALSE;
        } else if (!isset($data["employee"]["data"]) && $data["employee"] >= 1) {
            $data["employee"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["employee"]));
    }

}
