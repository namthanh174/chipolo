<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'site/home';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    
    
    
    public function howItWork() {
        $data = array();
        $data['page'] = 'site/howitwork';
        $data['title'] = 'How It Works - Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
     public function design() {
        $data = array();
        $data['page'] = 'site/design';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
     public function blog() {
        $data = array();
        $data['page'] = 'site/blog';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost:: Blog';
        $this->load->view('site/layout/layout', $data);
    }

     public function support() {
        $data = array();
        $data['page'] = 'site/support';
        $data['title'] = '24/7 Support - Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function job() {
        $data = array();
        $data['page'] = 'site/job';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function login() {
        $data = array();
        $data['title'] = 'Chipolo Community';
        $this->load->view('site/login', $data);
    }
    public function shop() {
        $data = array();
        $data['page'] = 'site/shop';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }
    
    public function business() {
        $data = array();
        $data['page'] = 'site/business';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function kickstarter() {
        $data = array();
        $data['page'] = 'site/kickstarter';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function press() {
        $data = array();
        $data['page'] = 'site/press';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function privacy_policy() {
        $data = array();
        $data['page'] = 'site/privacy-policy';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function terms_of_use() {
        $data = array();
        $data['page'] = 'site/terms_of_use';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function refund() {
        $data = array();
        $data['page'] = 'site/refund';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
    public function contact() {
        $data = array();
        $data['page'] = 'site/contact';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site//layout/layout', $data);
    }
    
    
    public function review() {
        $data = array();
        $data['page'] = 'site/review';
        $data['title'] = 'Chipolo – Find the things you really care about - Nothing is lost';
        $this->load->view('site/layout/layout', $data);
    }
}
