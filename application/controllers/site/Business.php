<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'site/business';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }

}
