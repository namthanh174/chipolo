<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'site/support';
        $data['title'] = '24/7 Support - Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }

}
