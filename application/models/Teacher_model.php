<?php

class Teacher_model extends CI_Model {

//    public $name;

    public function __construct() {
        $this->load->database();
    }

    public function get_classes() {
        $query = $this->db->where('teacher', $this->session->surname)
                ->get('classes');
        return $query->result_array();
    }
    public function get_pupils() {
        $query = $this->db->where('class', $this->input->post('class'))
                ->get('pupils');
        return $query->result_array();
    }

}

?>