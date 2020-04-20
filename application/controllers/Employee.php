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

        $data["employee"] = $this->employee_model->view();
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
            if (isset($_FILES['photo_id']['name']) && !empty($_FILES['photo_id']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["photo_id"]["name"]), PATHINFO_EXTENSION));
                $file = "photo_id_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["photo_id"]["tmp_name"], $target_file)) {
                    $photo_id = $file;
                }
            } else {
                $photo_id = "demo.jpg";
            }
            if (isset($_FILES['address_proof']['name']) && !empty($_FILES['address_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["address_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "address_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["address_proof"]["tmp_name"], $target_file)) {
                    $address_proof = $file;
                }
            } else {
                $address_proof = "demo.jpg";
            }
            if (isset($_FILES['insurance_policy_copy']['name']) && !empty($_FILES['insurance_policy_copy']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["insurance_policy_copy"]["name"]), PATHINFO_EXTENSION));
                $file = "ins_policy_copy_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["insurance_policy_copy"]["tmp_name"], $target_file)) {
                    $insurance_policy_copy = $file;
                }
            } else {
                $insurance_policy_copy = NULL;
            }
            if (isset($_FILES['nominee_photo_id']['name']) && !empty($_FILES['nominee_photo_id']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["nominee_photo_id"]["name"]), PATHINFO_EXTENSION));
                $file = "nom_photo_id_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["nominee_photo_id"]["tmp_name"], $target_file)) {
                    $nominee_photo_id = $file;
                }
            } else {
                $nominee_photo_id = NULL;
            }
            if (isset($_FILES['nominee_address_proof']['name']) && !empty($_FILES['nominee_address_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["nominee_address_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "nom_address_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["nominee_address_proof"]["tmp_name"], $target_file)) {
                    $nominee_address_proof = $file;
                }
            } else {
                $nominee_address_proof = NULL;
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
            $capArray["img"] = $img;
            $capArray["photo_id"] = $photo_id;
            $capArray["address_proof"] = $address_proof;
            $capArray["insurance_policy_copy"] = $insurance_policy_copy;
            $capArray["nominee_photo_id"] = $nominee_photo_id;
            $capArray["nominee_address_proof"] = $nominee_address_proof;
            $capArray["bank_proof"] = $bank_proof;
            $data = $this->employee_model->add($capArray);
            if (!empty($data)) {
                redirect("employee/add");
            } else {
                redirect("employee/add");
            }
        }

        $user = $this->users_model->view();
        $data["user"][NULL] = "Select users";
        foreach ($user as $u) {
            $data["user"][$u->id] = $u->username;
        }
        $this->display('add', $data);
    }

    public function edit($id = null) {
        $data["employee"] = $this->employee_model->view($id)[0];
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
                $img = $data["employee"]->img;
            }
            if (isset($_FILES['photo_id']['name']) && !empty($_FILES['photo_id']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["photo_id"]["name"]), PATHINFO_EXTENSION));
                $file = "photo_id_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["photo_id"]["tmp_name"], $target_file)) {
                    $photo_id = $file;
                }
            } else {
                $photo_id = $data["employee"]->photo_id;
            }
            if (isset($_FILES['address_proof']['name']) && !empty($_FILES['address_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["address_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "address_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["address_proof"]["tmp_name"], $target_file)) {
                    $address_proof = $file;
                }
            } else {
                $address_proof = $data["employee"]->address_proof;
            }
            if (isset($_FILES['insurance_policy_copy']['name']) && !empty($_FILES['insurance_policy_copy']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["insurance_policy_copy"]["name"]), PATHINFO_EXTENSION));
                $file = "ins_policy_copy_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["insurance_policy_copy"]["tmp_name"], $target_file)) {
                    $insurance_policy_copy = $file;
                }
            } else {
                $insurance_policy_copy = $data["employee"]->insurance_policy_copy;
            }
            if (isset($_FILES['nominee_photo_id']['name']) && !empty($_FILES['nominee_photo_id']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["nominee_photo_id"]["name"]), PATHINFO_EXTENSION));
                $file = "nom_photo_id_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["nominee_photo_id"]["tmp_name"], $target_file)) {
                    $nominee_photo_id = $file;
                }
            } else {
                $nominee_photo_id = $data["employee"]->nominee_photo_id;
            }
            if (isset($_FILES['nominee_address_proof']['name']) && !empty($_FILES['nominee_address_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["nominee_address_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "nom_address_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["nominee_address_proof"]["tmp_name"], $target_file)) {
                    $nominee_address_proof = $file;
                }
            } else {
                $nominee_address_proof = $data["employee"]->nominee_address_proof;
            }
            if (isset($_FILES['bank_proof']['name']) && !empty($_FILES['bank_proof']['name'])) {
                $imageFileType = strtolower(pathinfo(basename($_FILES["bank_proof"]["name"]), PATHINFO_EXTENSION));
                $file = "bank_proof_" . uniqid() . time() . "." . $imageFileType;
                $target_file = $target_dir . $file;
                if (move_uploaded_file($_FILES["bank_proof"]["tmp_name"], $target_file)) {
                    $bank_proof = $file;
                }
            } else {
                $bank_proof = $data["employee"]->bank_proof;
            }
            $capArray = array_map('strtoupper', $this->input->post());
            $capArray["img"] = $img;
            $capArray["photo_id"] = $photo_id;
            $capArray["address_proof"] = $address_proof;
            $capArray["insurance_policy_copy"] = $insurance_policy_copy;
            $capArray["nominee_photo_id"] = $nominee_photo_id;
            $capArray["nominee_address_proof"] = $nominee_address_proof;
            $capArray["bank_proof"] = $bank_proof;
            $data = $this->employee_model->edit($capArray, $id);
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
        $this->display("add", $data);
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
