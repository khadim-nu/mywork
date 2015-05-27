<?php

class Responses_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "responses";
        $this->primary_key = 'id';
    }

    public function save_responses() {
        $insert = array(
            "email" => $this->input->post("email"),
        );
        return $this->db->insert($this->table_name, $insert);
    }

}
