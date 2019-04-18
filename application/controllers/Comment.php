<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('content','Content','required');
        $this->comment_model->insert();
        redirect('/view/detail?id='.$this->input->get('id'));
    }

}