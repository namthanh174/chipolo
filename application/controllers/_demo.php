<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array();
        $data['temp'] = 'site/home/index';
        $this->load->view('site/main_layout', $data);
    }

    public function test2() {
        $data = array();
        $data['temp'] = 'site/home/test2';
        $this->load->view('site/main_layout', $data);
    }

    public function test() {
        $controller = $this->uri->rsegment(1);
        $action = $this->uri->rsegment(2);
        $id = $this->uri->rsegment(3);
        echo "controler:  " . $controller . ' action: ' . $action . ' id: ' . $id;
    }

    public function view() {
        $data = array();
        $data['title'] = 'Thanh';
        $data['id'] = 1;
        $data['products'] = array('name' => 'nokia', 'price' => 1000);
        $this->load->view('site/home/view', $data);
    }
    
    public function user(){
        $this->load->model('customer_model');
        $user = $this->customer_model->get_list();
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
    
    public function create_user(){
        $this->load->model('customer_model');
        $this->customer_model->create();
    }
    
    function update_user(){
        $this->load->model('customer_model');
        $user_id = 31;
        $this->customer_model->update($user_id);
    }
    
    function delete_user(){
        $this->load->model('customer_model');
        $user_id = 31;
        $this->customer_model->delete($user_id);
    }

}
