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
        $this->load->helper('url');
        $this->load->library('cart');
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
        if($this->input->post('shipping-continue')){
            $insert_data = array(
               'id' => $this->input->post('hid-product-id'),
               'name' => $this->input->post('hid-product-name'),
               'price' => $this->input->post('hid-product-price'),
               'qty' => $this->input->post('hid-product-qty'),
               'colors' => json_encode($this->input->post('colors'))
            );
            $this->cart->insert($insert_data);
            $this->session->set_userdata('product-id', $this->input->post('hid-product-id'));
            redirect('shop/shipping');
        }
        //var_dump($this->input);
        $data = array();
        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $data['page'] = 'site/customize';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    /**
     * Shipping
     *
     * @params N/A
     * @return view
     */
    public function shipping() {
        $this->load->model('global_model');
        $cart_data = $this->cart->contents();
        $product_id = (int) $this->session->userdata('product-id');

        $data = array();
        $product = $this->products_model->get_product_by_id($product_id);
        $class_error = 'has-error';
        if ($this->input->post('email') !== null && trim($this->input->post('email')) == '') {
            $data['checkRequiredEmail'] = $class_error;    
        }

        if ($this->input->post('full_name') !== null && trim($this->input->post('full_name')) == '') {
            $data['checkRequiredFullName'] = $class_error;    
        }

        if ($this->input->post('address1') !== null && trim($this->input->post('address1')) == '') {
            $data['checkRequiredAddress1'] = $class_error;    
        }

        if ($this->input->post('zip') !== null && trim($this->input->post('zip')) == '') {
            $data['checkRequiredFZip'] = $class_error;   
        }

        if ($this->input->post('city') !== null && trim($this->input->post('city')) == '') {
            $data['checkRequiredCity'] = $class_error;    
        }

        if ($this->input->post('phone') !== null && trim($this->input->post('phone')) == '') {
            $data['checkRequiredPhone'] = $class_error;    
        }

        $data['product'] = $product;
        $countries = $this->global_model->get_country_list();
        //var_dump($countries);die;
        $data['countries'] = $countries;
        $data['page'] = 'site/shipping';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    /**
     * Shipping
     *
     * @params N/A
     * @return view
     */
    public function loadState() {
        echo 'load state here';
    }
}
