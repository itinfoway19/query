<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Sales extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("sales_model");
        $this->load->model("input_tag_model");
    }
    public function index() {
        $data["sales"] = $this->sales_model->view();
        $this->display('index', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->sales_model->add($capArray);
            print_r($data);
            if (!empty($data)) {
                redirect("sales/add");
            } else {
                redirect("sales/add");
            }
        }
        $data["id"] = $this->sales_model->getId("sales")->id;
        $this->display('add', $data);
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->sales_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("master/sales/add");
            } else {
                redirect("master/sales/add");
            }
        } else {
            $data = $this->sales_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function print_data() {
        $this->load->view('sales/print');
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["sales"]["data"] = $this->sales_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["sales"] = $this->sales_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["sales"] == 0) {
            $data["sales"] = FALSE;
        } else if (!isset($data["sales"]["data"]) && $data["sales"] >= 1) {
            $data["sales"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["sales"]));
    }
    /*public function print_data(){
          $this->load->view('sales/print');
    }*/
}
