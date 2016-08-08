<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index() {
        $data = array();
        $products = $this->products_model->get_products();
        $data['products'] = $products;
        $data['page'] = 'site/shop/shop';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

}
