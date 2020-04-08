<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->isLogin();
    }

    function isLogin() {
        if ($this->session->userdata("login")) {
            if ($this->router->class == "login" && $this->router->method == "index") {
                redirect("/");
            } else {
                $directory = $this->router->directory;
                $class = $this->router->class;
                if ($class != "welcome") {
                    if (array_search("$directory$class/", unserialize($this->session->userdata("access_user"))) === FALSE) {
                        if (array_search("$directory$class", unserialize($this->session->userdata("access_user"))) === FALSE) {
                            $method = $this->router->method;
                            if ($class != "filter" && $method != "json" && $method != "jsonRatr") {
                                switch ($this->session->userdata("access_method")) {
                                    case 0://view
                                        if (array_search("$directory$class/$method", unserialize($this->session->userdata("access_user"))) === FALSE) {
                                            if ($method != "logout") {
                                                redirect("/");
                                            }
                                        } else if ($method == "delete") {
                                            redirect("/");
                                        } else if ($this->input->server('REQUEST_METHOD') == 'POST') {
                                            redirect("/");
                                        }
                                        break;
                                    case 1://add,view
                                        if (array_search("$directory$class/$method", unserialize($this->session->userdata("access_user"))) === FALSE) {
                                            redirect("/");
                                        } else if ($method == "delete") {
                                            redirect("/");
                                        } else if ($method == "edit") {
                                            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                                                redirect("/");
                                            }
                                        }
                                        break;
                                    case 2://edit,add,view
                                        if (array_search("$directory$class/$method", unserialize($this->session->userdata("access_user"))) === FALSE) {
                                            redirect("/");
                                        } else if ($method == "delete") {
                                            redirect("/");
                                        }
                                        break;
                                    case 3://delete,edit,add,view
                                        break;
                                    default :
                                        break;
                                }
                            }
                        }
                    }
                }
            }
        } else {
            if ($this->router->class == "login" && $this->router->method == "index") {
                
            } else {
                redirect("login");
            }
        }
    }

    public function display($view, $data = array()) {
        $directory = $this->router->directory;
        $class = $this->router->class;
        $method = $this->router->method;
        $dir_c = explode("/", $directory);
        //form help
        if ($method == "add" || $method == "edit") {
            $this->load->helper('form');
        }
        //header
        if ($dir_c[0] == "admin") {
            $this->load->view("admin/include/header");
        } else {
            $this->load->view("include/header");
        }
        //view
        $this->load->view($directory . "$class/" . $view, $data);
        //footer
        if ($dir_c[0] == "admin") {
            $this->load->view("admin/include/footer");
        } else {
            $this->load->view("include/footer");
        }
    }

}
