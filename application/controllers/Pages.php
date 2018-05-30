<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $this->load->model("pages_model");

        $results = $this->pages_model->get();

        $this->load->view("template/header");
        $this->load->view("pages/index", array("pages" => $results));
        $this->load->view("template/footer");
    }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */