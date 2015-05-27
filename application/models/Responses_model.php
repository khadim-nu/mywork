<?php

class Responses_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "responses";
        $this->primary_key = 'id';
    }

    public function save_responses() {
        if (!empty($this->input->post("email"))) {
            $insert = array(
                "email" => $this->input->post("email"),
            );
            if ($this->db->insert($this->table_name, $insert)) {
                $this->session->set_flashdata('message', "Submitted Successfully!");
                return TRUE;
            } else {
                $this->session->set_flashdata('message', "Not Submitted! Something Went Wrong");
                return FALSE;
            }
        } else {
            $this->session->set_flashdata('message', "Not Submitted! Field is Empty");
            return FALSE;
        }
    }

}
