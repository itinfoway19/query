<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Vendor extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("vendor_model");
    }

    public function index() {
        $data["vendor"] = $this->vendor_model->view();
        $this->display('index', $data);
    }

    public function add($id = null) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $target_dir = "./assert/image/";
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["img"]["name"]), PATHINFO_EXTENSION));
                $file = "img_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    $img = $file;
                }
            } else {
                $img = "demo.jpg";
            }            
            if (isset($_FILES['bank_proof']['name']) && !empty($_FILES['bank_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["bank_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "bank_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["bank_proof"]["tmp_name"], $target_file)) {
                    $bank_proof = $file;
                }
            } else {
                $bank_proof = NULL;
            }
            $capArray = array_map('strtoupper', $this->input->post());
            $capArray["bank_proof"] = $bank_proof;
            $data = $this->vendor_model->add($capArray);
            if (!empty($data)) {
                redirect("vendor/add");
            } else {
                redirect("vendor/add");
            }
        }
        $this->display('add');
    }

    public function edit($id = null) {
        $data["vender"] = $this->vendor_model->view($id)[0];
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $target_dir = "./assert/image/";
            
            if (isset($_FILES['bank_proof']['name']) && !empty($_FILES['bank_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["bank_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "bank_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["bank_proof"]["tmp_name"], $target_file)) {
                    $bank_proof = $file;
                }
            } else {
                $bank_proof = $data["vender"]->bank_proof;
            }
            $capArray = array_map('strtoupper', $this->input->post());
            $capArray["bank_proof"] = $bank_proof;
            $data = $this->vendor_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("vendor/add");
            } else {
                redirect("vendor/add");
            }
        }
        $this->display("add", $data);
    }

    public function print_data() {
        $this->load->view('vendor/print');
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["vendor"]["data"] = $this->vendor_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["vendor"] = $this->vendor_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["vendor"] == 0) {
            $data["vendor"] = FALSE;
        } else if (!isset($data["vendor"]["data"]) && $data["vendor"] >= 1) {
            $data["vendor"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["vendor"]));
    }

}
