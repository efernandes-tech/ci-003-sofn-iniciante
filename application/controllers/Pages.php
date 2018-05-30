<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        echo "string1";
    }

    public function view($id = 0)
    {
        echo $id;
    }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */