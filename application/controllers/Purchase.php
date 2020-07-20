<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Purchase extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("purchase_model");
        $this->load->model("input_tag_model");
    }

    public function index() {
        $data["purchase"] = $this->purchase_model->view();
        $this->display('index', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->purchase_model->add($capArray);
            if (!empty($data)) {
                redirect("purchase/add");
            } else {
                redirect("purchase/add");
            }
        }
        $data["id"] = $this->purchase_model->getId("purchase")->id;
        $this->display('add', $data);
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->purchase_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("master/purchase/add");
            } else {
                redirect("master/purchase/add");
            }
        } else {
            $data = $this->purchase_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function print_data() {
        $this->load->view('purchase/print');
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["purchase"]["data"] = $this->purchase_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["purchase"] = $this->purchase_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["purchase"] == 0) {
            $data["purchase"] = FALSE;
        } else if (!isset($data["purchase"]["data"]) && $data["purchase"] >= 1) {
            $data["purchase"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["purchase"]));
    }

}
