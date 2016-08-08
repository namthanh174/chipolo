<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    /**
     * Responsable for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('products_model');
    }
   
    public function index() {
        $data = array();
        $products = $this->products_model->get_products();
        $data['products'] = $products;
        $data['page'] = 'site/shop';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    /**
     * Show product
     *
     * @params integer $id | Product id
     * @return view
     */
    public function customize($id) {
        $data = array();
        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $data['page'] = 'site/customize';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }    
}
