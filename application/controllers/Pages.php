<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $this->load->view("template/header");
        $this->load->view("pages/index", array("pages" => array()));
        $this->load->view("template/footer");
    }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */