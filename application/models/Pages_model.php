<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

    public function get() {

        $this->load->database();

        $query = $this->db->get("pages");

        return $query->result();

    }

}

/* End of file Pages_model.php */
/* Location: ./application/models/Pages_model.php */