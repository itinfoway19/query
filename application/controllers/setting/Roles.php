<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/controller.php';
class Roles extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("setting/roles_model");
        $this->load->model("menu_model");
    }

    public function index() {
        $data["roles"] = $this->roles_model->view();
        $getmenu = $this->menu_model->view();

        $data["menu"] = array(
            'menus' => array(),
            'parent_cats' => array()
        );
        foreach ($getmenu as $row) {
            $data["menu"]['menus'][$row['id']] = $row;
            $data["menu"]['parent_cats'][$row['parent_id']][] = $row['id'];
        }
        $this->display("index", $data);
    }

    public function add() {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $array["access_user"] = json_encode($this->input->post("url"));
            $array["name"] = $this->input->post("name");
            $array["access_method"] = ($this->input->post("access_method")!==null)?$this->input->post("access_method"):"1";
            $this->roles_model->add($array);
            redirect("setting/roles/add");
            
        }
        $data["roles"] = $this->roles_model->view();        
        
        $this->display("add", $data);
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $array["access_user"] = json_encode($this->input->post("url"));
            $array["name"] = $this->input->post("name");
            $array["access_method"] = ($this->input->post("access_method")!==null)?$this->input->post("access_method"):"1";
            $data = $this->roles_model->edit($array, $id);
            if (!empty($data)) {
                redirect("setting/roles/add");
            } else {
                redirect("setting/roles/add");
            }
        } else {
            $data = $this->roles_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->roles_model->delete($id);
        return $this->output->set_output($data);
    }

    public function json($name = null) {
       if (is_null($name)) {
            $select=!empty($this->input->get("select"))?$this->input->get("select"):"*";
            $data["roles"]["data"] = $this->roles_model->view(null,$select);
        } else {
            $name = base64_decode(urldecode($name));
            $old=$this->input->get("name");
            $data["roles"] = $this->roles_model->findname($name,base64_decode(urldecode($old)));
        }
        if ($data["roles"]==0) {
                $data["roles"] = FALSE;
        } else if(!isset($data["roles"]["data"]) && $data["roles"]>=1) {
                $data["roles"] = TRUE;
        }

        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($data["roles"]));
    }
}
