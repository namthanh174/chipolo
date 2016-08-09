<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('orders_model');
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
        $data = array();
        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $data['page'] = 'site/shop/customize';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    /*
     * 
     * 
     */

    public function shipping($id) {
        $this->load->library('session');
        $data = array();

        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $data['colors'] = $this->input->post('colors[]');
        $this->session->set_flashdata('colors', $data['colors']);

        $data['page'] = 'site/shop/shipping';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    public function review($id) {
        $this->load->library('session');
        $colors = $this->session->flashdata('colors');
        $data = array();

        $product = $this->products_model->get_product_by_id($id);
        $data['product'] = $product;
        $shipping = array(
            'product_id' => $id,
            'user_id' => '',
            'colors' => $colors,
            'total' => $product->price,
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
        $this->session->set_flashdata('shipping_adress', $shipping);
        $data['colors'] = $colors;
        $data['shipping'] = $shipping;
        $data['page'] = 'site/shop/review';
        $data['title'] = 'Chipolo Shop :: Select your package';
        $this->load->view('site/layout/layout', $data);
    }

    public function send_order($id) {
        $this->load->library('session');
        $shipping = $this->session->flashdata('shipping_adress');
        $data_to_store = array(
            'product_id' => $id,
            'user_id' => '',
            'colors' => implode(",", $shipping['colors']),
            'total' => $shipping['total'],
            'email' => $shipping['email'],
            'fullname' => $shipping['fullname'],
            'address_1' => $shipping['address_1'],
            'address_2' => $shipping['address_2'],
            'postal_code' => $shipping['postal_code'],
            'city' => $shipping['city'],
            'country_id' => $shipping['country_id'],
            'state' => $shipping['state'],
            'phone' => $shipping['phone']
        );
        //var_dump($data_to_store);die;
        if ($this->orders_model->store_order($data_to_store)) {
            redirect('shop');
        } else {
            redirect('shop/review/$id');
        }
    }

}

//        //load the view
//        $data['main_content'] = 'admin/products/add';
//        $this->load->view('includes/template', $data);
//        
//        
//        $data['product'] = $product;
//        $data['colors'] = $colors;
//        $data['shipping'] = $shipping;
//        $data['page'] = 'site/shop/review';
//        $data['title'] = 'Chipolo Shop :: Select your package';
//        $this->load->view('site/layout/layout', $data);
 //   }

//}

//$this->load->library('form_validation');
//
//        // field name, error message, validation rules
//        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
//        $this->form_validation->set_rules('full_name', 'Name', 'trim|required');
//        $this->form_validation->set_rules('address1', 'Address 1', 'trim|required');        
//        $this->form_validation->set_rules('address2', 'Address 2', '');
//        $this->form_validation->set_rules('zip', 'Zip Code', 'trim|required|max_length[10]');
//        $this->form_validation->set_rules('city', 'City', 'trim|required');
//        $this->form_validation->set_rules('country_code', 'Country', 'trim|required');
//        $this->form_validation->set_rules('state', 'State', 'trim|required|matches[password]');
//        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
//        $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
//
//        if ($this->form_validation->run() == FALSE) {
//            $this->load->view('site/shop/shipping/$id');
//        } else {
//            $this->load->model('Users_model');
//
//            if ($query = $this->Users_model->create_member()) {
//                $this->load->view('site/shop');
//            } else {
//                $this->load->view('site/shop/shipping/$id');
//            }
//        }