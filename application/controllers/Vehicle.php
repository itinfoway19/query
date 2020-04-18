<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Vehicle extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("vehicle_model");
    }

    public function index() {
        $data["data"] = $this->vehicle_model->view();
        $this->display('index', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->vehicle_model->add($capArray);
            if (!empty($data)) {
                redirect("vehicle/add");
            } else {
                redirect("vehicle/add");
            }
        }
        $this->display('add');
    }

    public function edit($id = null) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->vehicle_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("vehicle/add");
            } else {
                redirect("vehicle/add");
            }
        } else {
            $data = $this->vehicle_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function model() {
        $this->load->helper('form');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->vehicle_model->add($capArray);
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
            $this->load->view("vehicle/model");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["vehicle"]["data"] = $this->vehicle_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["vehicle"] = $this->vehicle_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["vehicle"] == 0) {
            $data["vehicle"] = FALSE;
        } else if (!isset($data["vehicle"]["data"]) && $data["vehicle"] >= 1) {
            $data["vehicle"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["vehicle"]));
    }

}
