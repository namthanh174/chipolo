<?php

class User extends CI_Controller {

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('site/user');
        } else {
            $this->load->view('site/login');
        }
    }

    /**
     * encript the password 
     * @return mixed
     */
    function __encrip_password($password) {
        return md5($password);
    }

    /**
     * check the username and the password with the database
     * @return void
     */
    function validate_credentials() {

        $this->load->model('Users_model');

        $user_name = $this->input->post('user_name');
        $password = $this->__encrip_password($this->input->post('password'));

        $is_valid = $this->Users_model->validate($user_name, $password);

        if ($is_valid) {
            $data = array(
                'user_name' => $user_name,
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            //die('888');
            $this->load->view('site/user');
        } else { // incorrect username or password
            //$data['message_error'] = TRUE;
            //die('99');
            $this->load->view('site/login');
        }
    }

    /**
     * The method just loads the signup view
     * @return void
     */
    function signup() {
        $this->load->view('site/signup');
    }

    /**
     * Create new user and store it in the database
     * @return void
     */
    function create_member() {
        $this->load->library('form_validation');

        // field name, error message, validation rules

        $this->form_validation->set_rules('fullname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('site/signup');
        } else {
            $this->load->model('Users_model');

            if ($query = $this->Users_model->create_member()) {
                $this->load->view('site/login');
            } else {
                $this->load->view('site/signup');
            }
        }
    }

    /**
     * Destroy the session, and logout the user.
     * @return void
     */
    function logout() {
        $this->session->sess_destroy();
        $this->load->view('site/login');
    }

}

//defined('BASEPATH') OR exit('No direct script access allowed');
//
//class User extends CI_Controller {
//
//    public function index() {
//        if ($this->session->userdata('is_logged_in')) {
//            $data = array();
//            $data['title'] = 'Chipolo Community';
//            $this->load->view('site/user', $data);
//        } else {
//            redirect('login');
//        }
//    }
//
//    /**
//     * encript the password 
//     * @return mixed
//     */
//    function __encrip_password($password) {
//        return md5($password);
//    }
//
//    public function signup() {
//        $this->load->library('form_validation');
//        if ($this->input->post('signup')) {
//
//            // field name, error message, validation rules
//            $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
//            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
//            $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
//            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
//            $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
//            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
//
//            if ($this->form_validation->run() == FALSE) {
//                $this->load->view('site/signup');
//            } else {
//                $this->load->model('Users_model');
//
//                if ($query = $this->Users_model->create_member()) {
//                    $this->load->view('site/login');
//                } else {
//                    $this->load->view('site/signup');
//                }
//            }
//        }
//        $this->load->view('site/signup');
//    }
//
//    public function login() {
//        if ($this->input->post('login')) {
//            $this->load->model('Users_model');
//
//            $email = $this->input->post('email');
//            $password = $this->__encrip_password($this->input->post('password'));
//
//            $is_valid = $this->Users_model->validate($email, $password);
//
//            if ($is_valid) {
//                $data = array(
//                    'email' => $email,
//                    'is_logged_in' => true
//                );
//                $this->session->set_userdata($data);
//                redirect('user');
//            } else { // incorrect username or password
//                $data['message_error'] = TRUE;
//                $this->load->view('site/login', $data);
//            }
//        }
//        $data = array();
//        $data['title'] = 'Chipolo Community';
//        $this->load->view('site/login', $data);
//    }
//
//    public function signout() {
//
//        $this->session->sess_destroy();
//        redirect('login');
//    }
//
//}
