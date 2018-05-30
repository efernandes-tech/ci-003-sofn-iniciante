<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

    private $table_name = "pages";

    public function __construct() {

        parent::__construct();

        $this->load->database();

    }

    public function get($id = null) {

        if ($id === null) {
            $query = $this->db->get($this->table_name);

            return $query->result();
        }

        $query = $this->db->get_where($this->table_name, array("id" => $id));

        return $query->first_row();

    }

    public function new() {

        $this->load->helper("url");

        $slug = url_title($this->input->post('title', 'dash', true));

        $data = array(
            "title" => $this->input->post("title"),
            "body" => $this->input->post("body"),
            "slug" => $slug
        );

        return $this->db->insert($this->table_name, $data);

    }

}

/* End of file Pages_model.php */
/* Location: ./application/models/Pages_model.php */