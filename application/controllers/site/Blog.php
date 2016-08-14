<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'site/blog';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost:: Blog';
        $this->load->view('site/layout/layout', $data);
    }

}
