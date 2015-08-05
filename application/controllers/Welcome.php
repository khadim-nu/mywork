<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'text', 'form');
        $this->load->model("Visits_model");
        $this->Visits_model->save_ip();
    }

    public function index() {
        $this->load->model("Responses_model");
        $yes_count = $this->Responses_model->count_yes();
        $no_count = $this->Responses_model->count_no();
        $maybe_count = $this->Responses_model->count_maybe();

        $visits_count = $this->Visits_model->count_visits();
        $this->load->view('welcome_message', array("yes_count" => $yes_count, "no_count" => $no_count, "maybe_count" => $maybe_count, "visits_count" => $visits_count));
    }

    public function submit_servey() {

        $this->load->model("Responses_model");
        $this->Responses_model->save_opinion();
        redirect("welcome");
    }

    public function demo($pwd = "123xyz4") {
        if ($pwd == "proj1") {
            $this->load->model("Visits_model");
            $check = $this->Visits_model->get_check();
            if ($check) {
                $this->load->view('demo');
                $this->Visits_model->change_check(0);
            } else {
                print_r("<h1>Please request again to see the Demo</h1>");
            }
        } else {
            print_r("Unauthorized method");
        }
    }

    public function activate($pwd = "123xyz4") {
        if ($pwd == "mypwd") {
            $this->load->model("Visits_model");
            if ($this->Visits_model->change_check(1))
                print_r("Access Activated.");
            else {
                print_r("Activation Failed");
            }
        } else {
            print_r("Unauthorized method");
        }
    }

    public function deactivate($pwd = "123xyz4") {
        if ($pwd == "mypwd") {
            $this->load->model("Visits_model");
            if ($this->Visits_model->change_check(0))
                print_r("Access Denied.");
            else {
                print_r("Activation Failed");
            }
        } else {
            print_r("Unauthorized method");
        }
    }

}
