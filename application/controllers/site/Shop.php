<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('orders_model');
        $this->load->helper('url');
        $this->load->library('cart');
    }

    public function index() {
        $data = array();
        $products = $this->products_model->get_products();
        $data['products'] = $products;
        $data['page'] = 'site/shop/shop';
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
        $this->cart->destroy();
        if ($this->input->post('shipping-continue')) {

            $insert_data = array(
                'id' => $this->input->post('hid-product-id'),
                'qty' => $this->input->post('hid-product-quantity'),
                'price' => $this->input->post('hid-product-price'),
                'name' => $this->input->post('hid-product-sub-title'),
                'colors' => json_encode($this->input->post('colors[]')),
                'title' => $this->input->post('hid-product-title')
            );

            $this->cart->insert($insert_data);

            $this->session->set_userdata('product-id', $this->input->post('hid-product-id'));
            redirect('shop/shipping');
        }

        $data = array();
        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $data['page'] = 'site/shop/customize';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/order_layout', $data);
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

        if ($this->input->post('review-continue')) {
            $shipping = array(
                'id' => $this->input->post('hid-product-id'),
                'qty' => $this->input->post('hid-product-quantity'),
                'price' => $this->input->post('hid-product-price'),
                'name' => $this->input->post('hid-product-sub-title'),
                'colors' => json_encode($this->input->post('colors[]')),
                'title' => $this->input->post('hid-product-title'),
                'email' => $this->input->post('email'),
                'fullname' => $this->input->post('full_name'),
                'address_1' => $this->input->post('address1'),
                'address_2' => $this->input->post('address2'),
                'postal_code' => $this->input->post('zip'),
                'city' => $this->input->post('full_name'),
                'country_id' => $this->input->post('country_code'),
                'state' => $this->input->post('state'),
                'phone' => $this->input->post('phone')
            );
            $this->cart->insert($shipping);
            redirect('shop/review');
        }

        $data['product'] = $product;
        $countries = $this->global_model->get_country_list();
        $data['countries'] = $countries;
        $data['page'] = 'site/shop/shipping';
        $data['title'] = 'Chipolo Shop :: Billing and Shipping details';
        $this->load->view('site/layout/order_layout', $data);
    }

    /**
     * Review
     *
     * @params N/A
     * @return view
     */
    public function review() {

        $cart_data = $this->cart->contents();
        $product_id = (int) $this->session->userdata('product-id');
        $data = array();


        if ($this->input->post('order-continue')) {

            $cart_data = array();
            foreach ($this->cart->contents() as $data) {
                $cart_data['id'] = $data['id'];
                $cart_data['colors'] = $data['colors'];
                $cart_data['price'] = $data['price'];
                $cart_data['email'] = $data['email'];
                $cart_data['fullname'] = $data['fullname'];
                $cart_data['address_1'] = $data['address_1'];
                $cart_data['address_2'] = $data['address_2'];
                $cart_data['postal_code'] = $data['postal_code'];
                $cart_data['city'] = $data['city'];
                $cart_data['country_id'] = $data['country_id'];
                $cart_data['state'] = $data['state'];
                $cart_data['phone'] = $data['phone'];
            }
            $data_to_store = array(
                'product_id' => $cart_data['id'],
                'user_id' => '',
                'colors' => $cart_data['colors'],
                'total' => $cart_data['price'],
                'email' => $cart_data['email'],
                'fullname' => $cart_data['fullname'],
                'address_1' => $cart_data['address_1'],
                'address_2' => $cart_data['address_2'],
                'postal_code' => $cart_data['postal_code'],
                'city' => $cart_data['city'],
                'country_id' => $cart_data['country_id'],
                'state' => $cart_data['state'],
                'phone' => $cart_data['phone']
            );

            if ($this->orders_model->store_order($data_to_store)) {
                redirect('shop/ordered');
            } else {
                redirect('shop/review');
            }
        }
        $product = $this->products_model->get_product_by_id($product_id);
        $data['product'] = $product;
        $data['page'] = 'site/shop/review';
        $data['title'] = 'Chipolo Shop :: Review your order';
        $this->load->view('site/layout/order_layout', $data);
    }

    public function ordered() {
        $this->session->sess_destroy();
        $this->cart->destroy();
        $data['page'] = 'site/shop/ordered';
        $data['title'] = 'Chipolo Shop :: Your order has completed';
        $this->load->view('site/layout/order_layout', $data);
    }

}
