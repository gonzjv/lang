<?php

class Teacher extends CI_Controller {

    public function classes() {
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
//        $this->load->helper('security');
        $this->load->helper('html');
//        $this->load->database();
//        $this->load->library('form_validation');
        $this->load->model('teacher_model');
        
        $data['classes'] = $this->teacher_model->get_classes();
        $data['title'] = "Classes";

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/classes');
        $this->load->view('templates/footer', $data);
    }

}
