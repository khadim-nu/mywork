<?php

class Servey_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "responses";
        $this->primary_key = 'id';
    }

    public function save_responses() {
        $insert = array(
            "answer1" => $this->input->post("ans1"),
            "answer2" => $this->input->post("ans2"),
            "answer3" => $this->input->post("ans3"),
            "answer4" => $this->input->post("ans4"),
            "answer5" => $this->input->post("ans5"),
            "answer6" => $this->input->post("ans6"),
            "answer7" => $this->input->post("ans7"),
        );
        return $this->db->insert($this->table_name, $insert);
    }

}
