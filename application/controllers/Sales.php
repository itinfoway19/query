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

    public function audit() {
        $data["sales"] = $this->sales_model->view_where(["status" => 0]);
        $this->display('audit', $data);
    }

    public function rate() {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
             $fromdate=$this->input->get("from");
            $todate=$this->input->get("to");
            $data["sales"] = $this->sales_model->view_where(["date >"=>$fromdate,"date <"=>$todate]);
        }else{
             $data["sales"] = $this->sales_model->view_where();
        }
        $this->display('rate', $data);
    }

    public function statement() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $fromdate=$this->input->get("from");
            $todate=$this->input->get("to");
            $data["sales"] = $this->sales_model->view_where(["date <"=>$fromdate,"date >"=>$todate]);
        }else{
            $data["sales"] = $this->sales_model->view_where();
        }
        $this->display('statement', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->sales_model->add($capArray);
            if (!empty($data)) {
                $this->session->set_userdata("success", "Add Successfully");
                $this->session->set_userdata("print_id", $data);
                redirect("sales/add");
            } else {
                $this->session->set_userdata("erorr", "Oops, Something Went Wrong");
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
                $this->session->set_userdata("print_id", $id);
                $this->session->set_userdata("success", "Add Successfully");
                redirect("sales/add");
            } else {
                $this->session->set_userdata("erorr", "Oops, Something Went Wrong");
                redirect("sales/add");
            }
        } else {
            $data = $this->sales_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function model($id) {
        $this->load->helper('form');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = array_map('strtoupper', $this->input->post());
            $data = $this->sales_model->edit($capArray, $id);
            if (!empty($data)) {
                if (!$this->input->is_ajax_request()) {
                    $this->session->set_userdata("success", "Add Successfully");
                    redirect("sales/audit");
                } else {
                    echo "TRUE";
                    return;
                }
            } else {
                if (!$this->input->is_ajax_request()) {
                    $this->session->set_userdata("erorr", "Oops, Something Went Wrong");
                    redirect("sales/audit");
                } else {
                    echo "FALSE";
                    return;
                }
            }
        } else {
            $data = $this->sales_model->view($id);
        }
        $this->load->view("sales/model", $data[0]);
    }

    public function print_data($data) {
        $getdata["sales"] = $this->sales_model->view($data);
        $html = $this->load->view('sales/print', $getdata, TRUE);
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('Sales');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->SetAutoPageBreak(true);
        $pdf->AddPage();
        $img_file = K_PATH_IMAGES . 'image_demo.png';
        $angle = 50;
        $px = 250;
        $py = 110;
        $pdf->StartTransform();
        $pdf->Rotate($angle, $px, $py);
        $pdf->Image($img_file, 0, 0, 280, 40, 'PNG', '', 'R', true, 300, '', false, false, 0);
        $pdf->StopTransform();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('pdfexample.pdf', 'I');
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

    /* public function print_data(){
      $this->load->view('sales/print');
      } */
}
