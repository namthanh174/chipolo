<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data = array();
        $data['title'] = 'Chipolo Community';
        $this->load->view('site/login', $data);
    }

}
