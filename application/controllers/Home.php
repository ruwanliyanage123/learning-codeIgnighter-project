<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('ProjectModel');
            $this->load->database();
        }

        public function index(){
            $this->load->view('Layout/main');
        }
    }


?>