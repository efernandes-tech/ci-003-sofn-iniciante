<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model("pages_model");

    }

    public function index()
    {
        $results = $this->pages_model->get();

        $this->load->view("template/header");
        $this->load->view("pages/index", array("pages" => $results));
        $this->load->view("template/footer");
    }

    public function new() {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Título", "required");
        $this->form_validation->set_rules("body", "Conteúdo", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("template/header");
            $this->load->view("pages/new");
            $this->load->view("template/footer");
        } else {
            $data["back"] = "/pages";
            $this->pages_model->new();
            $this->load->view("template/success", $data);
        }

    }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */