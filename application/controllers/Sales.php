<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Sales extends Controller {

    public function __construct() {
        parent::__construct();
    }
    public function add(){
         $this->display('add');
    }
    public function print_data(){
          $this->load->view('sales/print');
    }
}
