<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class How_it_work extends CI_Controller {
    
    
    public function index() {
        $data = array();
        $data['page'] = 'site/howitwork';
        $data['title'] = 'How It Works - Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
}
