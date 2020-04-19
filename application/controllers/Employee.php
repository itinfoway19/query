<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Employee extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("employee_model");
        $this->load->model("setting/users_model");
    }

    public function index() {
        $data["data"] = $this->employee_model->view();
        $this->display('index', $data);
    }

    public function add($id=null) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
               $data = array();
         $data["data"]=new stdClass;
         $data["data"]->user_id=$id;
         if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/image/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->employee_model->add($capArray);
            if (!empty($data)) {
                redirect("employee/add");
            } else {
                redirect("employee/add");
            }
        }

        $user = $this->users_model->view();
        foreach ($user as $u) {
            $data["user"][$u->id] = $u->username;
        }
        $this->display('add',$data);
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
