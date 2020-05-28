<?php

class Teacher extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->model('teacher_model');
    
    }
    public function classes() {
        
        $data['classes'] = $this->teacher_model->get_classes();
        $data['title'] = "Classes";

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/classes');
        $this->load->view('templates/footer', $data);
    }
    public function pupils() {
        
        $data['pupils'] = $this->teacher_model->get_pupils();
        $data['title'] = "Pupils";

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/pupils');
        $this->load->view('templates/footer', $data);
    }

}
