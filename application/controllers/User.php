<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE)
        {
            if ($this->session->logged_in == TRUE) {
                redirect('page/index');
            }
            $this->load->view('user/login');
        }else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user_model->check_username_exists($username);
            if ($user) {
                $user_id = $this->user_model->login($username,$password);
                if ($user_id) {
                    $udata = array(
                        'username'  => $username,
                        'user_id'   => $user_id,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($udata);
                    redirect('page/index');
                }else {
                    $this->session->set_flashdata('login_failed', 'Password is invalid');
                    $this->load->view('user/login');
                }
            }else {
               $this->session->set_flashdata('login_failed', 'Username not exists');
               $this->load->view('user/login');
           }
        }
    }

    public function register() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('first_name','First Name');
        $this->form_validation->set_rules('last_name','Last Name');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/register');
        }else {
            $this->user_model->register();
            redirect('page/index');
        }
    }

    public function logout() {
        $array_items = array('username','user_id','logged_in');
        $this->session->unset_userdata($array_items);
        redirect('user/login');
    }

    public function check_username_exists($username) {
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if ($this->user_model->check_username_exists($username)) {
            return FALSE;
        }else {
            return TRUE;
        }
    }
}