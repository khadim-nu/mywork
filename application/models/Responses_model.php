<?php

class Responses_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "responses";
        $this->primary_key = 'id';
    }

    public function save_responses() {
        $email = $this->input->post("email");
        if (!empty($email)) {
            $this->db->where("email", $email);
            $result = $this->db->get($this->table_name);
            $result = $result->result_array();
            if (empty($result)) {
                $insert = array(
                    "email" => $email,
                );
                if ($this->db->insert($this->table_name, $insert)) {
                    $this->session->set_flashdata('message', "Submitted Successfully!");
                    return TRUE;
                } else {
                    $this->session->set_flashdata('message', "Not Submitted! Something Went Wrong");
                    return FALSE;
                }
            } else {
                $this->session->set_flashdata('message', "This email is already submitted!");
                return FALSE;
            }
        } else {
            $this->session->set_flashdata('message', "Not Submitted! Field is Empty");
            return FALSE;
        }
    }

    public function save_opinion() {
        $opinion = $this->input->post("opinion");
        if (!empty($opinion)) {
            $insert = array(
                "opinion" => $opinion,
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

    public function count_responses() {
        $this->db->select('count(id) as count');
        $result = $this->db->get($this->table_name);
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['count'];
        }
        return 0;
    }

    public function count_yes() {
        $this->db->select('count(id) as count');
        $this->db->where("opinion", 1);
        $result = $this->db->get($this->table_name);
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['count'];
        }
        return 0;
    }

    public function count_no() {
        $this->db->select('count(id) as count');
        $this->db->where("opinion", 2);
        $result = $this->db->get($this->table_name);
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['count'];
        }
        return 0;
    }

    public function count_maybe() {
        $this->db->select('count(id) as count');
        $this->db->where("opinion", 3);
        $result = $this->db->get($this->table_name);
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['count'];
        }
        return 0;
    }

}
