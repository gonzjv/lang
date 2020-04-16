<?php

class Teacher_model extends CI_Model {

//    public $name;

    public function __construct() {
        $this->load->database();
    }

    public function get_classes() {
//        $query = $this->db->get_where('classes', array ('teacher' => $this->session->surname));
        $query = $this->db->where('teacher', $this->session->surname)
                ->get('classes');
        return $query->result_array();
    }

}

?>