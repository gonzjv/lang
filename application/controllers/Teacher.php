<?php

class Teacher extends CI_Controller {

    public function index() {

        $data['title'] = "Teacher";

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/index');
        $this->load->view('templates/footer', $data);
    }

    public function classes() {

        $data['title'] = "Classes";

        $this->load->view('templates/header', $data);
        $this->load->view('teacher/classes');
        $this->load->view('templates/footer', $data);
    }

}
