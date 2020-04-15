<?php

class Teacher_model extends CI_Model {

//    public $name;

    public function __construct() {
        $this->load->database();
    }

    public function get_classes() {
//        $query = $this->db->get('classes', 2);
        $query = $this->db->get('classes');
        return $query->result_array();
    }

}

?>