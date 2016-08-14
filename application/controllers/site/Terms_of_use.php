<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_of_use extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'site/terms_of_use';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }

}
